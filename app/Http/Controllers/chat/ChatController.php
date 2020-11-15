<?php

namespace App\Http\Controllers\chat;

use App\Events\ChatCreated;
use App\Events\ChatInitiationRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DefaultController;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ChatController extends DefaultController
{
    public function index() {
        $this->data['user'] = Sentinel::check() ? Sentinel::getUser() : null;
        return view('front.chat', $this->data);
    }

    public function initiateRequest(Request $request) {
        $user = Sentinel::getUser();
        if($user->id == 1) {
            ChatInitiationRequest::dispatch(2);
        } else {
            ChatInitiationRequest::dispatch(1);
        }
    }

    public function insertChat(Request $request) {
        $user = Sentinel::getUser();
        $this->data['user'] = Sentinel::check() ? Sentinel::getUser() : null;
        $this->data['messages'] = [];
        $message = $request->get('message');
        array_push($this->data['messages'], $message);
        if($user->id == 1) {
            event(new ChatCreated(2, $message));
        } else {
            event(new ChatCreated(1, $message));
        }

    }
}
