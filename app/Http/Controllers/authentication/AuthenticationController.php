<?php

namespace App\Http\Controllers\authentication;

use App\Http\Controllers\Controller;
use App\Http\Requests\authentication\UserStoreRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\DefaultController;
use Cartalyst\Alerts\Laravel\Facades\Alert;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Cartalyst\Sentinel\Laravel\Facades\Reminder;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Cartalyst\Support\Mailer;

class AuthenticationController extends DefaultController
{
     /**
     * Get the user logine view and redirect to dashboard if already logged in.
     * @return
     */
    public function getLogin() {
        if(Sentinel::check()) {
            Alert::warning('You are already logged in!');
            return redirect()->route('user.profile');
        }
        return view('authentication.authentication');
    }

    /**
     * Get user login
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     * @throws \Illuminate\Validation\ValidationException
     */

    public function postLogin(Request $request) {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ],
            [
                'email' => __('authentication/validation.login.email_required'),
                'password' => __('authentication/validation.login.password_required')
            ]);

        try {
            //Log in the user
            if ($user = Sentinel::authenticate($request->only(['email', 'password']), $request->get('remember-me', false))) {
                if($user->inRole('administrator') OR $user->inRole('instructor'))
                {
                    //Add log of new login
                    activity()
                        ->performedOn($user)
                        ->causedBy($user)
                        ->withProperties([
                            'type'                  =>         'Notification',
                            'action'                =>         'postLogin',
                            'class'                 =>         'AuthenticationController',
                            'description'           =>         __('authentication/log.login.log_message'),
                            'user_id'               =>          $user->id
                        ])
                        ->log(__('authentication/log.login.action'));
                    //Flash login success message
                    Alert::success(__('authentication/messages.success.login'));
                    return redirect()->route('dashboard.getDashboard');
                } else {
                    Sentinel::logout();
                    session()->flash('success_message','Unauthorized Access');
                    return redirect()->route('authentication.getLogin')->withInput()->withErrors($this->messageBag);
                }

            }
            //The user is not found
            $this->messageBag->add('user', __('authentication/messages.account_not_found'));
        }
        catch (NotActivatedException $e) {
            $this->messageBag->add('email', __('authentication/messages.account_not_activated'));
        }
        catch (ThrottlingException $e) {
            $delay = $e->getDelay();
            $this->messageBag->add('email', __('authentication/messages.account_suspended', compact('delay' )));
        }
        catch (\Exception $e) {
            $this->messageBag->add('email', $e->getMessage());
        }
        // Ooops.. something went wrong
        return redirect()->route('authentication.getLogin')->withInput()->withErrors($this->messageBag);
    }

    /**
     * Store - Register a new user
     * @param UserStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function postRegister(UserStoreRequest $request) {
        /**
         * Todo: Get this value from the Settings table
         */
        $defaultRole = 1;
        $notifyUser = true;

        $validated = $request->validated();
        //Try to regisetr a new user
        try {
            if($user = Sentinel::register($validated)) {
                if($role = Sentinel::findRoleById($defaultRole)){
                    $role->users()->attach($user);
                    //Add log
                    activity()
                        ->performedOn($role)
                        ->causedBy($user)
                        ->withProperties([
                            'type'                  =>         'Notification',
                            'action'                =>         'postRegister',
                            'class'                 =>         'AuthenticationController',
                            'description'           =>         __('authentication/log.registration.log_message'),
                            'user_id'               =>          $user->id
                        ])
                        ->log(__('authentication/log.registration.action'));
                    if($notifyUser) {
                        //Todo: Add email here
                    }
                    session()->flash('success_message',__('authentication/messages.success.register'));
                    //Redirect to login page
                    return redirect()->route("authentication.getLogin");
                }
            }
            //Failed to register user
            activity()
                ->withProperties([
                    'type'                  =>         'Error',
                    'action'                =>         'postRegister',
                    'class'                 =>         'AuthenticationController',
                    'description'           =>         __('authentication/log.registration.error_message'),
                ])
                ->log(__('authentication/log.registration.action'));
        }
        catch(\Exception $e) {

            //Exception Message log
            activity()
                ->withProperties([
                    'type'                  =>         'Error',
                    'action'                =>         'postRegister',
                    'class'                 =>         'AuthenticationController',
                    'description'           =>         $e->getMessage()
                ])
                ->log(__('authentication/log.registration.action'));
        }
        $this->messageBag->add('error', __('authentication/log.registration.error_message'));
        return redirect()->route("authentication.getLogin")->withErrors($this->messageBag);
    }

    public function getLogout() {
        try {
            // Log the user out
            Sentinel::logout();
            // Redirect to the login page
            session()->flash('success_message',__('authentication/messages.success.logout'));
            return redirect()->route('authentication.getLogin');
        } catch (NotActivatedException $e)
        {
            // Redirect to the login page
            $this->messageBag->add('error', __('authentication/messages.account_not_activated'));
            return redirect()->route('authentication.getLogin');
        } catch (\Exception $e)
        {
            // Redirect to the login page
            $this->messageBag->add('error', __('authentication/messages.generic_error'));
            return redirect()->route('authentication.getLogin');
        }

    }

    public function getActivation(Request $request, User $user) {
        if(!Activation::exists($user)) {
            $activation = Activation::create($user);
            if (Activation::complete($user, $activation->code))
            {
                session()->flash('success_message','User successfully activated');
                return redirect()->route("dashboard.getDashboard");
            } else {
                $this->messageBag->add('error', 'Some error occurred in activating this user.');
                return redirect()->route("dashboard.getDashboard");
            }
        } else {
            $this->messageBag->add('error', 'No activation exists for this user.');
            return redirect()->route("dashboard.getDashboard");
        }
    }


    public function getForgot(Request $request) {
        //Check whether is already logged in
        if(Sentinel::check())
        {
            //Logged in
            \Session::flash('success_msg','You are already logged in!');
            return \Redirect::route('dashboard.getDashboard');
        }
        return view('authentication.forgot');
    }

    public function postForgot(Request $request) {
        try {
            //Check whether is already logged in
            if(Sentinel::check())
            {
                //Logged in
                \Session::flash('success_msg','You are already logged in!');
                return \Redirect::route('dashboard.getDashboard');
            }
            $setRemember = \ActivationHelper::generateRemember($request->get('email'));
            if($setRemember['code'] == 201) {
                return redirect()->route('authentication.getForgot')->with('error', __('authentication/messages.account_not_found'));
            } elseif ($setRemember['code'] == 202) {
                return redirect()->route('authentication.getForgot')->with('error', __('authentication/messages.account_not_activated'));
            } elseif ($setRemember['code'] == 203) {
                $this->messageBag->add('error', __('authentication/messages.account_not_activated'));
                return redirect()->route('authentication.getLogin');
            } elseif ($setRemember['code'] == 204) {
                $this->messageBag->add('error', __('authentication/messages.generic_error'));
                return redirect()->route('authentication.getLogin');
            } elseif ($setRemember['code'] == 200) {
                $this->data = $setRemember['data'];
                \Mail::to($this->data['user']->email)->send(new Forgot($this->data));
                \Sesssion::flash('success_msg','Password reset link has been sent to your registered e-mail address.');
                return \Redirect::route('authentication.getLogin');
            } else {
                // Redirect to the login page
                $this->messageBag->add('error', __('authentication/messages.generic_error'));
                return redirect()->route('authentication.getLogin');
            }

        } catch (NotActivatedException $e)
        {
            // Redirect to the login page
            $this->messageBag->add('error', __('authentication/messages.account_not_activated'));
            return redirect()->route('authentication.getLogin');
        } catch (\Exception $e)
        {
            dd($e);
            // Redirect to the login page
            $this->messageBag->add('error', __('authentication/messages.generic_error'));
            return redirect()->route('authentication.getLogin');
        }
    }

    public function getReset(Request $request, $id, $code) {
        try {
            //Check whether is already logged in
            if(Sentinel::check())
            {
                //Logged in
                \Session::flash('success_msg','You are already logged in!');
                return \Redirect::route('dashboard.getDashboard');
            }
            if($user = Sentinel::findById($id)) {
                if ($reminder = Reminder::exists($user))
                {
                    $reminder = \DB::table('reminders')->where('code',$code)->first();
                    if($reminder AND $reminder->code == $code) {
                        $this->data['user'] = $user;
                        $this->data['code'] = $code;
                        return view('authentication.reset', $this->data);
                    }
                }
            }
            $this->messageBag->add('error', __('Access denied.'));
            return redirect()->route('authentication.getLogin');
        } catch (\Exception $e) {
            // Redirect to the login page
            $this->messageBag->add('error', __('authentication/messages.generic_error'));
            return redirect()->route('authentication.getLogin');
        }
    }


    public function postReset(Request $request, $id, $code) {
        try {
            if($user = Sentinel::findById($id)) {
                if (!$reminder = Reminder::complete($user, $code, $request->get('password')))
                {
                    // Ooops.. something went wrong
                    $this->messageBag->add('error', __('authentication/messages.insufficient_permissions'));
                    return redirect()->route('authentication.getLogin');
                }
                session()->flash('success_message',__('Your password has been successfully reset.'));
                return redirect()->route('authentication.getLogin');
            }
            $this->messageBag->add('error', __('authentication/messages.generic_error'));
            return redirect()->route('authentication.getLogin');
        } catch (\Exception $e) {
            // Redirect to the login page
            $this->messageBag->add('error', __('authentication/messages.generic_error'));
            return redirect()->route('authentication.getLogin');
        }
    }

    /**
     * Temporary
     * @todo: Remove this function
     */
    public function createUserRole(Request $request) {
        $role = Sentinel::getRoleRepository()->createModel()->create([
            'name' => 'Users',
            'slug' => 'users',
            'permissions' => '{"dashboard.access":true}'
        ]);
        dd('Role created. Do not visit this route again.');

    }
}
