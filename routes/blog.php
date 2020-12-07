<?php
use Illuminate\Support\Facades\Route;
/**
 * Blog Routes
 */
Route::group(array('prefix' => 'blog'), function () {
    Route::get('/posts/{id?}', array('uses'=>'blog\BlogController@index', 'as'=>'blog.index'));
    Route::get('create', array('uses'=>'blog\BlogController@create', 'as'=>'blog.create'));
    Route::post('filter', array('uses'=>'blog\BlogController@getFiltered', 'as'=>'blog.filtered'));
    Route::post('create', array('uses'=>'blog\BlogController@store', 'as'=>'blog.store'));
    Route::get('delete/{blog}', array('uses'=>'blog\BlogController@destroy', 'as'=>'blog.destroy'));
});


