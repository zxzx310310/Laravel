<?php

/*
|--------------------------------------------------------------------------
| Route Patterns
|--------------------------------------------------------------------------
|
|
*/

Route::pattern('id', '[0-9]+');



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

Route::get('/', ['as' => 'home.index', 'uses' => 'HomeController@index']);

Route::get('about', ['as' => 'about.index', 'uses' => 'AboutController@index']);

Route::get('posts', ['as' => 'posts.index', 'uses' => 'PostsController@index']);
Route::get('posts/create', ['as' => 'posts.create', 'uses' => 'PostsController@create']);
Route::post('posts', ['as' => 'posts.store', 'uses' => 'PostsController@store']);
Route::get('posts/{id}', ['as' => 'posts.show', 'uses' => 'PostsController@show']);
Route::get('posts/{id}/edit', ['as' => 'posts.edit', 'uses' => 'PostsController@edit']);
Route::patch('posts/{id}', ['as' => 'posts.update', 'uses' => 'PostsController@update']);
Route::delete('posts/{id}', ['as' => 'posts.destroy', 'uses' => 'PostsController@destroy']);
Route::post('posts/{id}/comment', ['as' => 'posts.comment', 'uses' => 'PostsController@comment']);
Route::get('hot', ['as' => 'posts.hot', 'uses' => 'PostsController@hot']);
Route::get('random', ['as' => 'posts.random', 'uses' => 'PostsController@random']);