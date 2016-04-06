<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', 'FrontPageController@index');
    Route::get('/post/{slug}', ['as' => 'post', 'uses' => 'FrontPageController@post']);
//    Route::get('/category/{slug}', ['as' => 'category', 'uses' => 'FrontPageController@category']);
    Route::get('/blog', 'FrontPageController@blog');
});