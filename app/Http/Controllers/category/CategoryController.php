<?php

namespace App\Http\Controllers\category;

use App\Category;
use App\Http\Controllers\Controller;
use App\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use App\Http\Controllers\DefaultController;

class CategoryController extends DefaultController
{
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

    public function store(Request $request) {
        $request->all();
        dd($request->all());
    }
}
