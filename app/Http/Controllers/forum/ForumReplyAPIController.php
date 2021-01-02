<?php

namespace App\Http\Controllers\forum;

use App\Ftopic;
use App\Freplies;
use App\Fcategory;
use App\Fpost;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\ftopic\FpostStoreRequest;
use App\Traits\FpostStoreTrait;
use App\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use App\Http\Controllers\DefaultController;

class ForumReplyAPIController extends DefaultController
{
    public function store(Request $request) {
        $data = array();
        try {
            $blocks = $request->get('body');
            $isReply = $request->get('is_reply');
            $isReplyID = $request->get('is_reply_id');
            $status = 'active';        
            $userID = $request->get('user_id');            
            $postID = $request->get('post_id');
            //return $request->all();
            if($blocks != null && $blocks != '' && $userID != null && $userID!='') {
                $blog = new Freplies;
                $blog->body = $blocks;
                $blog->user_id = $userID;
                $blog->is_reply = $isReply;
                $blog->is_reply_id = $isReplyID;
                $blog->fpost_id = $postID;
                $blog->post_status = $status;
                $blog->save();
                $data = [
                    'type' => 'success',
                    'message' => 'records',
                    'data' => $blog,
                    'code' => 200
                ];
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



    public function report(Request $request) {
        $data = array();
        $post = null;
        try {
            $postID = $request->get('post_id');
            $type = $request->get('post_type');            
            //return $request->all();
            if($postID != null && $postID != '' && $type != null && $type!='') {

                if($type == 'reply') {
                    $post = Freplies::find($postID);
                } else {
                    $post = Ftopic::find($postID);
                }
                $post->increment('reported');
                $post->save();                
                $data = [
                    'type' => 'success',
                    'message' => 'records',
                    'data' => $post,
                    'code' => 200
                ];
                return response()->json($data,200);
            } else {
                $data = [
                    'type' => 'error',
                    'message' => 'Some error occurred in updating the record.',
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
