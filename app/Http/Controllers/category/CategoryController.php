<?php

namespace App\Http\Controllers\category;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\category\CategoryStoreRequest;
use App\Traits\CategoryStoreTrait;
use App\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use App\Http\Controllers\DefaultController;

class CategoryController extends DefaultController
{
    use CategoryStoreTrait;

    public function index() {
        if($user = Sentinel::check()) {
            $this->data['user'] = $user;
            $this->data['members'] = User::where('id', '!=', $user->id)->get();
            $this->data['categories'] = Category::all();
            $this->data['showChatBar'] = true;
            return view('front.category.list', $this->data);
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
            return view('front.category.create', $this->data);
        }
        else {
            return redirect()->route('authentication.getLogin');
        }
    }

    public function store(CategoryStoreRequest $request) {
        try {
            //Add category
            $record                         =           $this->save($request, true);
            //Flash success
            session()->flash('success_message','New record successfully created!');
            return redirect()->route('category.create');
        } catch (\Exception $e) {
            $this->messageBag->add('error', $e->getMessage());
            return redirect()->back()->withInput()->withErrors($this->messageBag);
        }
    }
}
