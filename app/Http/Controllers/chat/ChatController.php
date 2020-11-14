<?php

namespace App\Http\Controllers\chat;

use App\Events\ChatInitiationRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DefaultController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ChatController extends DefaultController
{
    public function getKey() {
        return view('front.chat');
    }

    public function initiateRequest(Request $request) {
        ChatInitiationRequest::dispatch(['1', 'Abraham A.']);
    }
}
