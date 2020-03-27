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

// top画面系
Route::get('/', 'TopController@index');

//login画面系
Auth::routes();

//home画面系
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user_home', 'UserHomeController@user_home');

//post画面系
Route::get('/add_todo', 'PostController@add_todo');
Route::post('/add_todo', 'PostController@regist_todo');