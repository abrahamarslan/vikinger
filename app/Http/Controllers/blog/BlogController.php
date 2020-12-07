<?php

namespace App\Http\Controllers\blog;

use App\Blog;
use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DefaultController;
use App\Http\Requests\blog\BlogStoreRequest;
use App\Traits\BlogStoreTrait;
use App\User;
use Cartalyst\Alerts\Laravel\Facades\Alert;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class BlogController extends DefaultController
{
    use BlogStoreTrait;
    public function index(Request $request, $id = null) {
        if($user = Sentinel::check()) {
            $this->data['user'] = $user;
            $this->data['members'] = User::where('id', '!=', $user->id)->get();
            $this->data['showChatBar'] = true;
            if($id && $id != null) {
                $this->data['category'] = Category::findOrFail($id);
                $this->data['blogs'] = Blog::where('category_id', $id)->get();
            } else {
                $this->data['category'] = null;
                $this->data['blogs'] = Blog::all();
            }
            return view('front.blog.list', $this->data);
        }
        else {
            return redirect()->route('authentication.getLogin');
        }
    }

    public function create() {
        if($user = Sentinel::check()) {
            $this->data['user'] = $user;
            $this->data['members'] = User::where('id', '!=', $user->id)->get();
            $this->data['categories'] = Category::where('status','True')->pluck('title','id');
            $this->data['showChatBar'] = true;
            return view('front.blog.form', $this->data);
        }
        else {
            return redirect()->route('authentication.getLogin');
        }
    }



    public function store(BlogStoreRequest $request) {
        try {
            //Add blog
            $record                         =           $this->save($request, true);
            //Flash success
            session()->flash('success_message','New record successfully created!');
            return redirect()->route('blog.create');
        } catch (\Exception $e) {
            $this->messageBag->add('error', $e->getMessage());
            return redirect()->back()->withInput()->withErrors($this->messageBag);
        }
    }

    public function getBlog(Request $request, $username, $slug) {
        try {
            if($user = Sentinel::check()) {
                $this->data['user'] = $user;
                $blogUser = User::where('username', $username)->first();
                $blog = Blog::where('slug',$slug)->first();
                $this->data['members'] = User::where('id', '!=', $user->id)->get();
                if($blog && $blog->user_id == $blogUser->id) {
                    $relatedPosts = \GeneralHelper::getRelatedPosts($blog);
                    $leadImage = \GeneralHelper::getSEOImage($blog);
                    $this->data['image'] = ($leadImage == null ? 'default.png' : $leadImage);
                    $this->data['relatedPosts'] = $relatedPosts;
                    $this->data['blog'] = $blog;
                    $this->data['showChatBar'] = true;
                    return view('front.blog.single', $this->data);
                }else {
                    $this->messageBag->add('error', 'Not found');
                    return redirect()->back()->withInput()->withErrors($this->messageBag);
                }
            }
            else {
                return redirect()->route('authentication.getLogin');
            }
        } catch (\Exception $e) {
            $this->messageBag->add('error', $e->getMessage());
            return redirect()->back()->withInput()->withErrors($this->messageBag);
        }
    }

    public function getFiltered(Request $request) {
        try {
            if($user = Sentinel::check()) {
                $this->data['user'] = $user;
                $this->data['members'] = User::where('id', '!=', $user->id)->get();
                //$this->data['blog'] = $blog;
                $this->data['showChatBar'] = true;
                return view('front.blog.list', $this->data);
            }
            else {
                return redirect()->route('authentication.getLogin');
            }
        } catch (\Exception $e) {
            $this->messageBag->add('error', $e->getMessage());
            return redirect()->back()->withInput()->withErrors($this->messageBag);
        }
    }


    public function getView(Request $request, $url) {
        try {
            if($user = Sentinel::check()) {
                $this->data['user'] = $user;
                $this->data['members'] = User::where('id', '!=', $user->id)->get();
                //$this->data['blog'] = $blog;
                $this->data['showChatBar'] = true;
                return view('front.blog.list', $this->data);
            }
            else {
                return redirect()->route('authentication.getLogin');
            }
        } catch (\Exception $e) {
            $this->messageBag->add('error', $e->getMessage());
            return redirect()->back()->withInput()->withErrors($this->messageBag);
        }
    }

    public function getBlogs(Request $request, $username) {
        try {
            if($user = Sentinel::check()) {
                $this->data['user'] = $user;
                $this->data['members'] = User::where('id', '!=', $user->id)->get();
                $this->data['showChatBar'] = true;
                $blogUser = User::where('username', $username)->first();
                if($blogUser) {
                    $this->data['blogs'] = Blog::where('user_id', $blogUser->id)->get();
                    return view('front.blog.list', $this->data);
                } else {
                    $this->messageBag->add('error', 'Not found');
                    return redirect()->back()->withInput()->withErrors($this->messageBag);
                }
            }
            else {
                return redirect()->route('authentication.getLogin');
            }
        } catch (\Exception $e) {
            $this->messageBag->add('error', $e->getMessage());
            return redirect()->back()->withInput()->withErrors($this->messageBag);
        }
    }

    public function destroy(Blog $blog) {
        try {
            if($user = Sentinel::check()) {
                if($user->id == $blog->user_id) {
                    $blog->delete();
                    session()->flash('success_message','Record deleted');
                    return redirect()->back();
                } else {
                    abort(404);
                }
            } else {
                abort(404);
            }

        } catch (\Exception $e) {
            $this->messageBag->add('error', $e->getMessage());
            return redirect()->back()->withInput()->withErrors($this->messageBag);
        }
    }
}
