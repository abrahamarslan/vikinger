<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
include 'authentication.php';
include 'chat.php';
include 'blog.php';
include 'category.php';
@include('v1.php');
Route::get('/', function () {
    return redirect()->route('authentication.getLogin');
});
