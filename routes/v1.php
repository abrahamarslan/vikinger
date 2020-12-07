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

        Route::post('online/{user}', array('uses'=>'api\UserOnlineController', 'as'=>'chat.online'));
        Route::post('offline/{user}', array('uses'=>'api\UserOfflineController', 'as'=>'chat.online'));

        Route::post('destroy/{message}', array('uses'=>'api\ChatAPIController@destroy', 'as'=>'chat.destroy'));

    });

    /**
     * Comments API
     */
    Route::group(array('prefix' => 'comments'), function () {
        Route::post('get-comments', array('uses'=>'blog\BlogAPIController@getComments', 'as'=>'blog.getComments'));
        Route::post('post-comment', array('uses'=>'blog\BlogAPIController@postComment', 'as'=>'blog.postComment'));
    });

    /**
     * Blog API
     */
    Route::group(array('prefix' => 'blog'), function () {
        Route::post('post-blog', array('uses'=>'blog\BlogAPIController@storeBlog', 'as'=>'api.blog.store'));
    });

});



