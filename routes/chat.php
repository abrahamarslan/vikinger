<?php
use Illuminate\Support\Facades\Route;
/**
 * Chat Routes
 */
Route::group(array('prefix' => 'chat'), function () {
    Route::get('/', array('uses'=>'chat\ChatController@getKey', 'as'=>'chat.getKey'));
});
