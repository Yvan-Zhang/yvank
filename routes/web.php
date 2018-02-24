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

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/serch', 'StaticPagesController@serch')->name('serch');
Route::post('/serch', 'SerchController@serch')->name('serch');
Route::get('/jdurl', 'StaticPagesController@jdurl')->name('jdurl');
Route::post('/jdurl', 'JdController@urltophone')->name('urltophone');

Route::get('signup', 'UsersController@create')->name('signup');
