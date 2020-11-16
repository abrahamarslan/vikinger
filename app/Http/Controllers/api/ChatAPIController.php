<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DefaultController;
use App\Message;
use Illuminate\Http\Request;

class ChatAPIController extends DefaultController
{
    public function getChats(Request $request) {
        $data = array();
        try {
            $fromID = $request->get('from_id');
            $toID = $request->get('to_id');
            if($fromID != null && $fromID != '' && $toID != null && $toID!='') {
                $chats = ['First Message', 'Second Message', 'Third Message'];
                $data = [
                    'type' => 'success',
                    'message' => 'records',
                    'data' => [
                        'chats' => $chats,
                        //'last_active' => $lastChat->created_at
                    ],
                    'code' => 200
                ];
                return response()->json($data,500);
                //$chats = Message::where('')
            } else {
                $data = [
                    'type' => 'error',
                    'message' => 'Some error occurred',
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

    public function postChat(Request $request) {
        $data = array();
        try {
            $fromID = $request->get('from_id');
            $toID = $request->get('to_id');
            $chat = $request->get('message');
            //return $request->all();
            if($fromID != null && $fromID != '' && $toID != null && $toID!='' && $chat!= null) {
                $message = new Message;
                $message->status = false;
                $message->message_date = date('Y-m-d H:i:s');
                $message->sent_date = date('Y-m-d H:i:s');
                $message->from_id = $fromID;
                $message->to_id = $toID;
                $message->message = $chat;
                $message->save();
                $data = [
                    'type' => 'success',
                    'message' => 'records',
                    'data' => $message,
                    'code' => 200
                ];
                return response()->json($data,200);
                //$chats = Message::where('')
            } else {
                $data = [
                    'type' => 'error',
                    'message' => 'Some error occurred',
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
}
