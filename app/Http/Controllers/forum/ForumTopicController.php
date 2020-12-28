<?php

namespace App\Http\Controllers\forum;

use App\Ftopic;
use App\Fcategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\ftopic\FtopicStoreRequest;
use App\Traits\FtopicStoreTrait;
use App\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use App\Http\Controllers\DefaultController;

class ForumTopicController extends DefaultController
{
    use FtopicStoreTrait;

    public function index(Fcategory $Fcategory) {
        if($user = Sentinel::check()) {
            $this->data['user'] = $user;
            $this->data['members'] = User::where('id', '!=', $user->id)->get();
            $this->data['category'] = $Fcategory;            
            $this->data['showChatBar'] = true;
            return view('front.ftopic.list', $this->data);
        }
        else {
            return redirect()->route('authentication.getLogin');
        }
    }

    public function getFiltered(Request $request) {
        try {
            $filterTerm = $request->get('post_filter_term');
            $category = Fcategory::where('id', $request->get('category_id'))->first();
            if($user = Sentinel::check()) {
                $this->data['user'] = $user;
                $this->data['category'] = $category;
                $this->data['members'] = User::where('id', '!=', $user->id)->get();
                if($category) {
                    $this->data['topics'] = Ftopic::where('fcategory_id', $category->id)
                    ->where("title", "LIKE", "%" . $filterTerm . "%")
                    ->orWhere("description", "LIKE", "%" . $filterTerm . "%")
                    ->get();
                    return view('front.ftopic.search', $this->data);
                } else {
                    $this->messageBag->add('error', 'Not found');
                    return redirect()->back()->withInput()->withErrors($this->messageBag);
                }
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

    public function create() {
        if($user = Sentinel::check()) {
            $this->data['category'] = Fcategory::first();
            $this->data['user'] = $user;
            $this->data['members'] = User::where('id', '!=', $user->id)->get();
            $this->data['categories'] = Fcategory::where('status','True')->pluck('title','id');
            $this->data['showChatBar'] = true;
            return view('front.ftopic.create', $this->data);
        }
        else {
            return redirect()->route('authentication.getLogin');
        }
    }

    public function store(FtopicStoreRequest $request) {
        
        try {            
            if($user = Sentinel::check()) {
                $request->request->add(['admin_id' => $user->id]);                
                //Add category
                $record                         =           $this->save($request, true);
                //Flash success
                session()->flash('success_message','New record successfully created!');
                return redirect()->route('forum.topic.create');
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
