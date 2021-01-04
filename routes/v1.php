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
        Route::post('post-image-file', array('uses'=>'blog\BlogAPIController@storeFile', 'as'=>'api.blog.storefile'));
        Route::post('post-image-url', array('uses'=>'blog\BlogAPIController@storeURL', 'as'=>'api.blog.storeURL'));
    });

     /**
     * Forum API
     */
    Route::group(array('prefix' => 'forum'), function () {
        Route::post('post-discussion', array('uses'=>'forum\ForumPostController@store', 'as'=>'forum.post.api.store'));
        Route::post('post-reply', array('uses'=>'forum\ForumReplyAPIController@store', 'as'=>'forum.reply.api.store'));
        Route::post('post-report', array('uses'=>'forum\ForumReplyAPIController@report', 'as'=>'forum.report.api.store'));
        Route::post('post-bookmark', array('uses'=>'forum\ForumBookmarkAPIController@store', 'as'=>'forum.bookmark.api.store'));
    });

});



