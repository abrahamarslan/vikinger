<?php


namespace App\Traits;
use App\Http\Requests\user\UserStoreRequest;
use App\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;


trait UserStoreTrait
{
    use ImageUploadTrait;
    public function save(UserStoreRequest $request, $create = false, $record=null)
    {
        $notifyUser = false;
        $image = null;
        if ($create) {
            if($item = ($request->has('is_activated') ? Sentinel::registerAndActivate($request->except(['image'])) : Sentinel::register($request->except(['image'])))) {
                //Set a rollback variable if error occurs
                \Session::put('rollback', $item->getUserId());
                if($role = Sentinel::findRoleById($request->get('role_id'))){
                    $role->users()->attach($item);
                    //Add log
                    activity()
                        ->performedOn($role)
                        ->causedBy($item)
                        ->withProperties([
                            'type'                  =>         'Notification',
                            'action'                =>         'Store',
                            'class'                 =>         'UserStoreTrait',
                            'description'           =>         __('authentication/log.registration.log_message'),
                            'user_id'               =>          $item->id
                        ])
                        ->log(__('authentication/log.registration.action'));
                    if($notifyUser) {
                        //Todo: Add email here
                    }
                }
            } else {
                //Failed to register user
                activity()
                    ->withProperties([
                        'type'                  =>         'Error',
                        'action'                =>         'Store',
                        'class'                 =>         'UserStoreTrait',
                        'description'           =>         __('authentication/log.registration.error_message'),
                    ])
                    ->log(__('authentication/log.registration.action'));
                //Return failure status
                return false;
            }

        } else {
            if($record->role_id !== null AND $record->getRoles()->count() > 0)
            {
                //First detach the current role from the user
                $role = Sentinel::findRoleById($record->role_id);
                $role->users()->detach($record);
            }
            //Now find the new role
            $role = Sentinel::findRoleById($request->get('role_id'));
            $role->users()->attach($record);
            $record->update($request->except(['image','email','password']));
            $item = $record;
        }
        //Upload image only if there's an upload
        if ($request->hasFile('image')) {
            $image = $this->uploadOne(
                $request,
                public_path() . \Config::get('global.user.upload_folder_path_original'),
                public_path() . \Config::get('global.user.upload_folder_path_resized'),
                \GeneralHelper::getSetting('category_imageX'),
                \GeneralHelper::getSetting('category_imageY')
            );
            //Update the record with image
            $item->image = ($image == null ? ($create ? 'default.png' : $item->image) : $image);
            $item->thumbnail = ($image == null ? ($create ? 'default.png' : $item->image) : $image);
        }
        $item->save();
        return $item;
    }


    public function rollback($id) {
        $user = Sentinel::findById($id);
        $user->delete();
        activity()
            ->performedOn($user)
            ->withProperties([
                'type'                  =>         'Notification',
                'action'                =>         'rollback',
                'class'                 =>         'UserStoreStrait',
                'description'           =>         'User deleted',
                'user_id'               =>          $user->id
            ])
            ->log('User deleted');
        \Session::remove('rollback');
        return true;
    }
}
