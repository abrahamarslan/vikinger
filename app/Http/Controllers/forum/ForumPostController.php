<?php

namespace App\Http\Controllers\forum;

use App\Ftopic;
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

class ForumPostController extends DefaultController
{
    use FpostStoreTrait;

    public function index(Ftopic $Ftopic) {
        if($user = Sentinel::check()) {
            $this->data['user'] = $user;
            $this->data['members'] = User::where('id', '!=', $user->id)->get();
            $this->data['topic'] = $Ftopic;            
            $this->data['showChatBar'] = true;
            return view('front.fpost.list', $this->data);
        }
        else {
            return redirect()->route('authentication.getLogin');
        }
    }


    public function getFiltered(Request $request) {
        try {
            $filterTerm = $request->get('post_filter_term');
            $topic = Ftopic::where('id', $request->get('topic_id'))->first();
            if($user = Sentinel::check()) {
                $this->data['user'] = $user;
                $this->data['topic'] = $topic;
                $this->data['members'] = User::where('id', '!=', $user->id)->get();
                if($topic) {
                    $this->data['discussions'] = Fpost::where('topic_id', $topic->id)
                    ->where("title", "LIKE", "%" . $filterTerm . "%")                    
                    ->get();
                    return view('front.fpost.search', $this->data);
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
            dd($e);
            $this->messageBag->add('error', $e->getMessage());
            return redirect()->back()->withInput()->withErrors($this->messageBag);
        }
    }

    public function create(Ftopic $Ftopic) {
        if($user = Sentinel::check()) {
            $this->data['topic'] = $Ftopic;
            $this->data['user'] = $user;
            $this->data['members'] = User::where('id', '!=', $user->id)->get();
            $this->data['showChatBar'] = true;
            return view('front.fpost.form', $this->data);
        }
        else {
            return redirect()->route('authentication.getLogin');
        }
    }

    public function isUnique($slug) {
        try {
            if(Fpost::where('slug', $slug)->first()) {
                return false;
            }
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function store(Request $request) {
        $data = array();
        try {
            $blocks = $request->get('body');
            $status = $request->get('status');
            $title = $request->get('title');
            $userID = $request->get('user_id');
            $adminID = $request->get('admin_id');
            $topicID = $request->get('topic_id');
            $slug = Str::slug($title);
            //return $request->all();
            if($blocks != null && $blocks != '' && $userID != null && $userID!='' && $title!= null && self::isUnique($slug)) {
                $blog = new Fpost;
                $blog->body = $blocks;
                $blog->user_id = $userID;
                $blog->admin_id = $adminID;
                $blog->topic_id = $topicID;
                $blog->slug = $slug;
                $blog->post_status = $status;
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


    public function getDiscussion(Request $request, $topic, $slug) {
        try {
            if($user = Sentinel::check()) {
                $this->data['user'] = $user;
                $post = Fpost::with(['replies', 'replies.user'])->where('slug',$slug)->first();
                $this->data['members'] = User::where('id', '!=', $user->id)->get();
                if($post) {
                    $this->data['topic'] = Ftopic::with('discussions')->find($topic);                    
                    $this->data['post'] = $post;                                        
                    $this->data['voices'] = $post->replies()->select('freplies.user_id')->distinct()->get()->count();                                     
                    $this->data['allReplies'] = $post->replies()->count();                 
                    $this->data['replies'] = $post->replies()->with('user')->paginate(2);  
                    $this->data['last_reply'] = $post->replies()->with('user')->orderBy('created_at', 'DESC')->first();                 
                    //dd($this->data['replies']);
                    //dd($post);
                    $this->data['showChatBar'] = true;
                    return view('front.fpost.fthread', $this->data);
                }else {
                    dd('not found');
                    $this->messageBag->add('error', 'Not found');
                    return redirect()->back()->withInput()->withErrors($this->messageBag);
                }
            }
            else {
                return redirect()->route('authentication.getLogin');
            }
        } catch (\Exception $e) {
            dd($e);
            $this->messageBag->add('error', $e->getMessage());
            return redirect()->back()->withInput()->withErrors($this->messageBag);
        }
    }
}
