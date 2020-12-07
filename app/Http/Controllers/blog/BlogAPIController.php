<?php

namespace App\Http\Controllers\blog;

use App\Blog;
use App\Comment;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DefaultController;
use App\Message;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

    public function isUnique($slug) {
        try {
            if(Blog::where('slug', $slug)->first()) {
                return false;
            }
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function storeBlog(Request $request) {
        $data = array();
        try {
            $blocks = $request->get('body');
            $title = $request->get('title');
            $userID = $request->get('user_id');
            $slug = Str::slug($title);
            //return $request->all();
            if($blocks != null && $blocks != '' && $userID != null && $userID!='' && $title!= null && self::isUnique($slug)) {
                $blog = new Blog;
                $blog->body = $blocks;
                $blog->user_id = $userID;
                $blog->slug = $slug;
                $blog->title = $title;
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
}
