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

Route::get('/', 'Controller@index');

Route::get('/admin', 'AdminController@index');
Route::post('/admin', 'AdminController@create');
Route::put('/admin/post', 'AdminController@edit');
Route::delete('/admin/post', 'AdminController@delete');
