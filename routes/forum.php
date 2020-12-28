<?php
use Illuminate\Support\Facades\Route;
/**
 * Forum Routes
 */
Route::group(array('prefix' => 'forums'), function () {
    Route::get('/', array('uses'=>'forum\ForumCategoryController@index', 'as'=>'forum.category.index'));    
});

/**
 * Forum Categories
 */

Route::group(array('prefix' => 'forum-category'), function () {    
    Route::get('/', array('uses'=>'forum\ForumCategoryController@index', 'as'=>'forum.category.index'));    
    Route::get('create', array('uses'=>'forum\ForumCategoryController@create', 'as'=>'forum.category.create'));  
    Route::post('filter', array('uses'=>'forum\ForumCategoryController@getFiltered', 'as'=>'forum.category.filtered'));  
    Route::post('create', array('uses'=>'forum\ForumCategoryController@store', 'as'=>'forum.category.store'));
    Route::post('delete/{fcategory}', array('uses'=>'forum\ForumCategoryController@destroy', 'as'=>'forum.category.destroy'));
});

/**
 * Forum Topics
 */

Route::group(array('prefix' => 'topics'), function () {    
    Route::get('create', array('uses'=>'forum\ForumTopicController@create', 'as'=>'forum.topic.create'));  
    Route::post('filter', array('uses'=>'forum\ForumTopicController@getFiltered', 'as'=>'forum.topic.filtered'));  
    Route::post('create', array('uses'=>'forum\ForumTopicController@store', 'as'=>'forum.topic.store'));
    Route::post('delete/{Ftopic}', array('uses'=>'forum\ForumTopicController@destroy', 'as'=>'forum.topic.destroy'));
    Route::get('/{Fcategory}', array('uses'=>'forum\ForumTopicController@index', 'as'=>'forum.topic.index'));    
});

/**
 * Forum Posts
 */

Route::group(array('prefix' => 'discussions'), function () {    
    Route::get('create/{Ftopic}', array('uses'=>'forum\ForumPostController@create', 'as'=>'forum.post.create'));  
    Route::post('filter', array('uses'=>'forum\ForumPostController@getFiltered', 'as'=>'forum.post.filtered'));  
    Route::post('create', array('uses'=>'forum\ForumPostController@store', 'as'=>'forum.post.store'));
    //Route::post('create-discussion/{Ftopic}', array('uses'=>'forum\ForumPostController@store', 'as'=>'forum.post.store'));
    Route::post('delete/{Fpost}', array('uses'=>'forum\ForumPostController@destroy', 'as'=>'forum.post.destroy'));
    Route::get('/{Ftopic}', array('uses'=>'forum\ForumPostController@index', 'as'=>'forum.post.index'));    
    //Route::get('/{Fpost}', array('uses'=>'forum\ForumPostController@single', 'as'=>'forum.post.single'));    
});

Route::group(array('prefix' => 'discussion'), function () {        
    Route::get('/{topic}/{slug}', array('uses'=>'forum\ForumPostController@getDiscussion', 'as'=>'forum.post.getDiscussion'));   
});

/**
 * Forum Replies
 */

Route::group(array('prefix' => 'replies'), function () {    
    Route::get('create', array('uses'=>'forum\ForumReplyController@create', 'as'=>'forum.reply.create'));  
    Route::post('filter', array('uses'=>'forum\ForumReplyController@getFiltered', 'as'=>'forum.reply.filtered'));  
    Route::post('create', array('uses'=>'forum\ForumReplyController@store', 'as'=>'forum.reply.store'));
    Route::post('delete/{fcategory}', array('uses'=>'forum\ForumReplyController@destroy', 'as'=>'forum.reply.destroy'));
    Route::get('/{fpost}', array('uses'=>'forum\ForumReplyController@index', 'as'=>'forum.reply.index'));    
});


