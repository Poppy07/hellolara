<?php

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

Route::get('/schools', function () {
    return view('school');
});

Route::get('/parents', function () {
    return view('parent');
});

Route::get('/hospitals', function () {
    return view('hospital');
});

Route::get('user', 'UserController@getUserForm')->name('user-form');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
