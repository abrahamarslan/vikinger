<?php
use Illuminate\Support\Facades\Route;
/**
 * Chat Routes
 */
Route::group(array('prefix' => 'chat'), function () {
    Route::get('/', array('uses'=>'chat\ChatController@getKey', 'as'=>'chat.getKey'));
    Route::get('cir', array('uses'=>'chat\ChatController@initiateRequest', 'as'=>'chat.initiateRequest'));
    Route::get('send-message', array('uses'=>'chat\ChatController@sendMessage', 'as'=>'chat.sendMessage'));
});
