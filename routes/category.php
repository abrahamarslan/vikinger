<?php
use Illuminate\Support\Facades\Route;
/**
 * Category Routes
 */
Route::group(array('prefix' => 'category'), function () {
    Route::get('/', array('uses'=>'category\CategoryController@index', 'as'=>'category.index'));
    Route::get('create', array('uses'=>'category\CategoryController@create', 'as'=>'category.create'));
    Route::post('create', array('uses'=>'category\CategoryController@store', 'as'=>'category.store'));    
    Route::post('delete/{blog}', array('uses'=>'category\CategoryController@destroy', 'as'=>'category.destroy'));
});


