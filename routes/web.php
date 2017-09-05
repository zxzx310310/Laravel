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

/* Add register route. */
Route::get('auth/register' , ['as' => 'register.index'  , 'uses' => 'Auth\RegisterController@showRegistrationForm']);
Route::post('auth/register', ['as' => 'register.process', 'uses' => 'Auth\RegisterController@register']);

/* Add login route */
Route::get('auth/login', ['as' => 'login.index', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('auth/login', ['as' => 'login.process', 'uses' => 'Auth\LoginController@login']);

/* Add logout route */
Route::get('auth/logout', ['as' => 'logout.process', 'uses' => 'Auth\LoginController@logout']);

/* Add forgotpassword route */
Route::get('password/email' , ['as' => 'forgetpassword.index'  , 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
Route::post('password/email', ['as' => 'forgetpassword.process', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);

Route::get('password/reset/{token}', ['as' => 'resetpassword.index'  , 'uses' => 'Auth\ResetController@showResetForm']);
Route::post('password/reset', ['as' => 'resetpassword.process', 'uses' => 'Auth\ResetController@reset']);