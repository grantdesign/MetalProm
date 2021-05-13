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

/* Public Route */

Route::group(['middleware' => 'web'], function() {

	Route::get('/', 'HomeController@index')->name('home');

	Route::get('/category/{category}/{slug}', 'PostController@index')->name('posts.index');
	Route::get('/posts/create/{menu}', 'PostController@create')->middleware('post')->name('posts.create');
	Route::post('/posts/store', 'PostController@store')->middleware('post')->name('posts.store');
	Route::get('/posts/{post}', 'PostController@show')->name('posts.show');
	
	Route::get('/search', 'SearchController@index')->name('posts.search');

	Route::resource('companies', 'CompanyController');

	Route::match(['get', 'post'], '/login', 'UserController@login')->middleware('guest')->name('login');
	Route::get('/logout', 'UserController@logout')->middleware('auth')->middleware('auth')->name('logout');

	Route::get('/contacts', 'ContactController@index')->name('contacts.index');
	Route::post('/contacts', 'ContactController@store')->name('contacts.store');

	Route::post('/subscribe', 'SubscribeController@store')->name('subscribes.store');

	Route::get('/category/{slug}', 'CategoryController@index')->name('categories.index');

	Route::get('/news', 'NewsController@index')->name('news.index');
	Route::get('/news/{news}', 'NewsController@show')->name('news.show');

});