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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','FrontendController@index');


//temporary
Route::get('/admin','FrontendController@admin');

//authentication
Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('home');


//user
Route::get('/user/add', 'UserController@createUser');
Route::post('/user/save', 'UserController@storeeUser');
Route::get('/user/manage', 'UserController@manageUser');


//category 
Route::get('/category/add', 'CategoryController@createCategory');
Route::post('/category/save', 'CategoryController@storeCategory');
Route::get('/category/manage', 'CategoryController@manageCategory');

Route::get('/categoryPost/{id}', 'CategoryController@categoryPost');


//post
Route::get('/post/add', 'PostController@createPost');
Route::post('/post/save', 'PostController@storePost');
Route::get('/post/manage', 'PostController@managePost');
