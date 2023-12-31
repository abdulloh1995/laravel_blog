<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/posts', 'PostController@index')->name('post.index');

Route::get('/posts/create', 'PostController@create');
Route::get('/posts/update', 'PostController@update');
Route::get('/posts/delete', 'PostController@delete');
Route::get('/posts/first_or_create', 'PostController@firstOrCreate');

Route::get('/clients', 'ClientController@index');

Route::get('/name', function () {
    return 'My name is Abdulloh';
});

Route::get('/city', function () {
    return 'Tashkent';
});

Route::get('/about', 'AboutController@index')->name('about.index');
Route::get('/main', 'MainController@index')->name('main.index');
