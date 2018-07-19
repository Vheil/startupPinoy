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
    return view('main');
});
Route::resource('/posts', 'PostsController');
Route::resource('/users', 'UsersController');
Route::resource('/investor', 'InvestorsController');
Route::get('/addnewuser', 'PagesController@addnewuser')->middleware('admin')->middleware('admin');
Route::post('/addnewuser', 'UsersController@store')->middleware('admin')->middleware('admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');







