<?php

namespace App\Http\Controllers\forum;

use App\Fcategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\fcategory\FcategoryStoreRequest;
use App\Traits\FcategoryStoreTrait;
use App\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use App\Http\Controllers\DefaultController;

class ForumCategoryController extends DefaultController
{
    use FcategoryStoreTrait;

    public function index() {
        if($user = Sentinel::check()) {
            $this->data['user'] = $user;
            $this->data['members'] = User::where('id', '!=', $user->id)->get();
            $this->data['categories'] = Fcategory::all();
            $this->data['lastCategory'] = Fcategory::orderBy('created_at', 'DESC')->first();
            $this->data['showChatBar'] = true;
            return view('front.fcategory.list', $this->data);
        }
        else {
            return redirect()->route('authentication.getLogin');
        }
    }

    public function create() {
        if($user = Sentinel::check()) {
            $this->data['user'] = $user;
            $this->data['members'] = User::where('id', '!=', $user->id)->get();
            $this->data['lastCategory'] = Fcategory::orderBy('created_at', 'DESC')->first();
            $this->data['categories'] = Fcategory::where('status','True')->pluck('title','id');
            $this->data['showChatBar'] = true;
            return view('front.fcategory.create', $this->data);
        }
        else {
            return redirect()->route('authentication.getLogin');
        }
    }

    public function getFiltered(Request $request) {
        try {
            $filterTerm = $request->get('post_filter_term');
            if($user = Sentinel::check()) {
                $this->data['user'] = $user;
                $this->data['members'] = User::where('id', '!=', $user->id)->get();
                $this->data['lastCategory'] = Fcategory::orderBy('created_at', 'DESC')->first();
                $this->data['categories'] = Fcategory::where("title", "LIKE", "%" . $filterTerm . "%")
                ->orWhere("description", "LIKE", "%" . $filterTerm . "%")
                ->get();
                $this->data['showChatBar'] = true;
                return view('front.fcategory.list', $this->data);                
            }
            else {
                return redirect()->route('authentication.getLogin');
            }
        } catch (\Exception $e) {
            $this->messageBag->add('error', $e->getMessage());
            return redirect()->back()->withInput()->withErrors($this->messageBag);
        }
    }

    public function store(FcategoryStoreRequest $request) {
        try {            
            if($user = Sentinel::check()) {
                $request->request->add(['admin_id' => $user->id]);                
                //Add category
                $record                         =           $this->save($request, true);
                //Flash success
                session()->flash('success_message','New record successfully created!');
                return redirect()->route('forum.category.create');
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
