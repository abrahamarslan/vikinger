<?php

namespace App\Http\Controllers\blog;

use App\Blog;
use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DefaultController;
use App\Http\Requests\blog\BlogStoreRequest;
use App\Traits\BlogStoreTrait;
use App\User;
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
            return view('front.blog.createTwo', $this->data);
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

    public function getBlog(Request $request, $category = null, $url = null) {
        try {
            if($user = Sentinel::check()) {
                $this->data['user'] = $user;
                $this->data['members'] = User::where('id', '!=', $user->id)->get();
                $blog = Blog::where('slug',$url)->first();
                $relatedPosts = \GeneralHelper::getRelatedPosts($blog);
                $this->data['relatedPosts'] = $relatedPosts;
                $this->data['blog'] = $blog;
                $this->data['showChatBar'] = true;
                return view('front.blog.single', $this->data);
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
}
