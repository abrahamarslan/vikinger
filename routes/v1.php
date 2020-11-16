<?php
use Illuminate\Support\Facades\Route;

/**
 * Unified API Resource
 * Middlewares - Authentication | Dashboard Access
 */

Route::group(array('prefix' => 'v1-api', 'middleware' => ['authentication','permission:dashboard.access']), function () {
    /**
     * Chat API
     */
    Route::group(array('prefix' => 'chat'), function () {
        Route::post('get-chats', array('uses'=>'api\ChatAPIController@getChats', 'as'=>'chat.getChats'));
        Route::post('post-chat', array('uses'=>'api\ChatAPIController@postChat', 'as'=>'chat.postChat'));
    });

});



