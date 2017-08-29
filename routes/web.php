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

Route::get('/', ['as' => 'home.index', function () {
    return view('posts.index');
}]);

Route::get('about', ['as' => 'about.index', function () {
    return view('about.index');
}]);

Route::get('posts', ['as' => 'posts.index', function () {
    return view('posts.index');
}]);

Route::get('hot', ['as' => 'posts.hot', function () {
    return view('posts.index');
}]);

Route::get('random', ['as' => 'posts.random', function () {
    $id = rand(1, 10);
    $data = compact('id');

    return view('posts.show', $data);
}]);

Route::get('posts/{id}', ['as' => 'posts.show', function ($id) {
    $data = compact('id');

    return view('posts.show', $data);
}]);

Route::get('posts/create', ['as' => 'posts.create', function () {
    return view('posts.create');
}]);

Route::post('posts', ['as' => 'posts.store', function () {
    return 'posts.store';
}]);

Route::get('posts/{id}/edit', ['as' => 'posts.edit', function ($id) {
    $data = compact('id');

    return  view('posts.edit', $data);
}]);

Route::patch('posts/{id}', ['as' => 'posts.update', function ($id) {
    return 'posts.update: '.$id;
}]);

Route::delete('posts/{id}', ['as' => 'posts.destroy', function ($id) {
    return 'posts.destroy: '.$id;
}]);

Route::post('posts/{id}/comment', ['as' => 'posts.comment', function ($id) {
    return 'posts.comment: '.$id;
}]);