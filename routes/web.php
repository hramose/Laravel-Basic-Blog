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


Route::get('/',[

	'uses'=>'MainController@index',

]);


Route::get('single/post/{id}',[

	'uses'=>'MainController@show',

	'as'=>'single.post'

]);


Route::group(['middleware'=>'auth'],function(){

//setting up view for create page under admin folder
Route::get('/admin/post/createpost', [
	'uses' => 'CreatepostController@create',
	'as' => 'admin.post.createpost'
]);


//creating post
Route::post('/admin/post/store', [
	'uses' => 'CreatepostController@store',
	'as' => 'admin.post.store'
]);


//displaying all posts

Route::get('/admin/post/getposts', [
	'uses' => 'CreatepostController@index',
	'as' => 'admin.post.getposts'
]);

//edit posts
Route::get('/admin/edit/{id}', [
	'uses' => 'CreatepostController@edit',
	'as' => 'post.edit'
]);

//update posts
Route::post('/admin/update/{id}', [
	'uses' => 'CreatepostController@update',
	'as' => 'post.update'
]);

//delete posts
Route::get('/admin/delete/{id}', [
	'uses' => 'CreatepostController@destroy',
	'as' => 'post.delete'
]);






});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
