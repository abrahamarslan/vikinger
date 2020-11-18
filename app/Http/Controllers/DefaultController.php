<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;


class DefaultController extends Controller
{
    protected $result;
    protected $data;
    protected $messageBag = null;
    public function __construct()
    {
        $this->data = array();
        $this->data['showChatBar'] = true;
        $this->messageBag = new MessageBag;
    }
}
