<?php

namespace App\Http\Controllers\api;

use App\Events\ChatCreated;
use App\Events\ChatCreatedBar;
use App\Events\MessageToUser;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DefaultController;
use App\Message;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class ChatAPIController extends DefaultController
{
    public function getChats(Request $request) {
        $data = array();
        try {
            $user = Sentinel::check();
            $fromID = $request->get('from_id');
            $toID = $request->get('to_id');
            if($fromID != null && $fromID != '' && $toID != null && $toID!='') {
                $chats = Message::where(function ($query) use ($fromID, $toID){
                    $query->where('from_id',$fromID)->where('to_id',$toID);
                })->orWhere(function ($query) use($fromID, $toID) {
                    $query->where('from_id', $toID)->where('to_id', $fromID);
                })->orderBy('created_at','ASC')->get();
                $data = [
                    'type' => 'success',
                    'message' => 'records',
                    'data' => [
                        'chats' => $chats,
                        'last_chat' => $chats->last()
                    ],
                    'code' => 200
                ];
                return response()->json($data,200);
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
                $eventData = ['message' => $message, 'from_id' => $fromID, 'to_id' => $toID];
                event(new ChatCreated($eventData));
                broadcast(new ChatCreatedBar($eventData))->toOthers();
                broadcast(new MessageToUser($eventData))->toOthers();
                return response()->json($data,200);
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

    public function destroy(Message $message) {
        try {
                $message->deleted_by_me = 'True';
                $message->save();
                $data = [
                    'type' => 'success',
                    'message' => 'records',
                    'data' => [],
                    'code' => 200
                ];
                return response()->json($data,200);        
        } catch (\Exception $e) {
            $data = [
                'type' => 'error',
                'message' => $e->getMessage(),
                'data' => null,
                'code' => 500
            ];
            return response()->json($data,500);        }
    }
}
