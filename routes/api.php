<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Unused
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

// Posts
Route::get('/post', 'Api\PostsController@all');
Route::get('/post/{post}', 'Api\PostsController@get');
