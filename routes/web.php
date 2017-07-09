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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/post/create', ['as' => 'getPostCreate', 'uses' => 'PostsController@create']);
    Route::post('/post/create', ['as' => 'postPostCreate', 'uses' =>'PostsController@store']);
    Route::get('/post/update/{id}', ['as' => 'getPostUpdate', 'uses' => 'PostsController@edit']);
    Route::post('/post/update', ['as' => 'postPostUpdate', 'uses' => 'PostsController@update']);
    Route::post('/post/delete', ['as' => 'getPostDelete', 'uses' => 'PostsController@delete']);
});


Route::get('/', ['as' => 'postList', 'uses' => 'PostsController@index']);
Route::get('/tag/{tag}', ['as' =>'getPostListWithTag', 'uses' => 'PostsController@index']);
Route::get('/post/show/{id}', ['as' => 'getPost', 'uses' => 'PostsController@show']);
