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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true, 'resend' => false]);
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::prefix('admin')->middleware('verified', 'role:admin')->group(function(){
    Route::resource('posts', 'PostController');

    Route::resource('messages', 'MessageController');
});