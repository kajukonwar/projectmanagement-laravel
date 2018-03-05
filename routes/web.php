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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/projects/{id}/comments/create', 'ProjectController@createComment');

Route::resource('projects', 'ProjectController');


Route::post('/tasks/{id}/comment/create', 'TaskController@createComment');
Route::get('/tasks/create/{id}', 'TaskController@create')->name('tasks.create');
Route::resource('tasks', 'TaskController', ['except' => 'create']);


Route::post('/posts/{id}/comment/create', 'PostController@createComment');
Route::get('/posts/create/{id}', 'PostController@create')->name('posts.create');
Route::resource('posts', 'PostController', ['except' => 'create']);

Route::resource('comments', 'CommentController');
