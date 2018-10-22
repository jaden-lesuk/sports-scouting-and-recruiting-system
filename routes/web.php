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

Route::get('/', 'FrontController@index')->name('home');

Route::get('/user', 'FrontController@user')->name('user');
Route::get('/table', 'FrontController@table')->name('table');
Route::get('/notifications', 'FrontController@notifications')->name('notifications');
Route::get('/icons', 'FrontController@icons')->name('icons');
Route::get('/logout', 'Auth\LoginController@logout')->name('home');
Auth::routes();


Route::get('/', 'FrontController@index');

Route::resource('players','PlayersController');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
