<?php
use Illuminate\Support\Facades\Route;

/**
 * Authentication Routes
 */
Route::group(array('prefix' => 'authentication'), function () {
    Route::get('/login', array('uses'=>'authentication\AuthenticationController@getLogin', 'as'=>'authentication.getLogin'));
    Route::post('/login', array('uses'=>'authentication\AuthenticationController@postLogin', 'as'=>'authentication.postLogin'));
    Route::post('/register', array('uses'=>'authentication\AuthenticationController@postRegister', 'as'=>'authentication.postRegister'));
    Route::get('/role', array('uses'=>'roles\RoleController@initialRoles', 'as'=>'authentication.startRole'));
    Route::get('/logout', array('uses'=>'authentication\AuthenticationController@getLogout', 'as'=>'authentication.getLogout'));
    Route::get('/forgot', array('uses'=>'authentication\AuthenticationController@getForgot', 'as'=>'authentication.getForgot'));
    Route::post('/forgot', array('uses'=>'authentication\AuthenticationController@postForgot', 'as'=>'authentication.postForgot'));
    Route::get('/reset/{id}/{code}', array('uses'=>'authentication\AuthenticationController@getReset', 'as'=>'authentication.getReset'));
    Route::post('/reset/{id}/{code}', array('uses'=>'authentication\AuthenticationController@postReset', 'as'=>'authentication.postReset'));
    Route::get('/activate/{user?}', array('uses'=>'authentication\AuthenticationController@getActivation', 'as'=>'authentication.getActivation'));
});

/**
 * Activation Routes
 */
Route::group(array('prefix' => 'activation'), function () {
    Route::get('/create/{user}', array('uses'=>'authentication\ActivationController@getCreateActivation', 'as'=>'activation.getCreateActivation'));
    Route::get('/{user}/{code}', array('uses'=>'authentication\ActivationController@getActivateUser', 'as'=>'activation.getActivateUser'));
});
