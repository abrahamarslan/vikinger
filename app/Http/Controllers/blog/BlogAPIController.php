<?php

namespace App\Http\Controllers\blog;

use App\Comment;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DefaultController;
use App\Message;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class BlogAPIController extends DefaultController
{
    public function getComments(Request $request) {
        $data = array();
        try {
            $user = Sentinel::check();
            $blogID = $request->get('blog_id');
            if($blogID != null && $blogID != '') {
               $comments = Comment::with('user')->with('replies.user')->where('blog_id', $blogID)->get();
                $data = [
                    'type' => 'success',
                    'message' => 'records',
                    'data' => $comments,
                    'code' => 200
                ];
                return response()->json($data,200);
            } else {
                $data = [
                    'type' => 'error',
                    'message' => 'Some error occurred',
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

    public function postComment(Request $request) {
        $data = array();
        try {
            $blogID = $request->get('blog_id');
            $commentMessage = $request->get('comment');
            $parentCommentID = $request->get('parent_comment_id');
            $userID = $request->get('user_id');
            //return $request->all();
            if($blogID != null && $blogID != '' && $userID != null && $userID!='' && $commentMessage!= null) {
                $comment = new Comment;
                $comment->parent_comment_id = (isset($parentCommentID) ? $parentCommentID : -1);
                $comment->blog_id = $blogID;
                $comment->body = $commentMessage;
                $comment->user_id = $userID;
                $comment->save();
                $data = [
                    'type' => 'success',
                    'message' => 'records',
                    'data' => $comment,
                    'code' => 200
                ];
                return response()->json($data,200);
            } else {
                $data = [
                    'type' => 'error',
                    'message' => 'Some error occurred',
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
