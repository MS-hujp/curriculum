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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/home','HomeController@index')->name('home')->middleware('auth');
// Route::get('sns/create','SnsController@add')->middleware('auth');

Route::get('sns', 'SnsController@add')->middleware('auth');
Route::post('sns', 'SnsController@create')->middleware('auth');
Route::get('sns', 'SnsController@index')->middleware('auth');
Route::get('sns/delete', 'SnsController@delete')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
