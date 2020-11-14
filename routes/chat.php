<?php
use Illuminate\Support\Facades\Route;
/**
 * Chat Routes
 */
Route::group(array('prefix' => 'chat'), function () {
    Route::get('/', array('uses'=>'chat\ChatController@index', 'as'=>'chat.index'));
    Route::get('cir', array('uses'=>'chat\ChatController@initiateRequest', 'as'=>'chat.initiateRequest'));
    Route::post('send-message', array('uses'=>'chat\ChatController@insertChat', 'as'=>'chat.insertChat'));
});
