<?php

namespace App\Http\Controllers\forum;

use App\Fcategory;
use App\fbookmark;
use App\Http\Controllers\Controller;
use App\Http\Requests\fcategory\FcategoryStoreRequest;
use App\Traits\FcategoryStoreTrait;
use App\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use App\Http\Controllers\DefaultController;

class ForumBookmarkAPIController extends DefaultController
{
    public function store(Request $request) {
        $data = array();
        try {          
            $userID = $request->get('user_id');
            $type = $request->get('type');
            $postID = $request->get('post_id');            
            //return $request->all();
            if($userID != null && $userID!='' && $type!= null) {
                //Check if the user has already bookmarked the post
                $bookmark = fbookmark::where('post_id', $postID)->where('type',$type)->where('user_id', $userID)->first();
                if($bookmark != null) {
                    $bookmark->delete();
                    $data = [
                        'type' => 'success',
                        'message' => 'records',
                        'data' => 'delete',
                        'code' => 200
                    ];
                } else {
                    $record = new fbookmark;
                    $record->user_id = $userID;
                    $record->type = $type;
                    $record->post_id = $postID;                
                    $record->save();
                    $data = [
                        'type' => 'success',
                        'message' => 'records',
                        'data' => $record,
                        'code' => 200
                    ];
                }                
                return response()->json($data,200);
            } else {
                $data = [
                    'type' => 'error',
                    'message' => 'Some error occurred in creating the record.',
                    'data' => null,
                    'code' => 500
                ];
                return response()->json($data,500);
            }
        } catch (\Exception $e) {
            $data = [
                'type' => 'error',
                'message' => $e->getMessage(),
                'data' => null,
                'code' => 500
            ];
            return response()->json($data,500);
        }
    }
}
