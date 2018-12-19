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

// user and login



Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');

Route::get('/logout', 'LogoutController@index');

Route::get('/home/create', 'HomeController@create');
Route::post('/home/create', 'HomeController@store');




Route::group(['middleware' => ['userSess']],function(){
	Route::get('/home', 'HomeController@index');
	Route::get('/user/{id}/show', 'UserController@index');
	Route::get('/user/edit', 'UserController@edit');

	   // user food stage 
	Route::get('/under', 'ProductController@under');
	Route::get('/normal', 'ProductController@normal');
	Route::get('/over', 'ProductController@over');

  

});

// admin
Route::get('/admin', 'AdminController@index');
Route::post('/admin', 'AdminController@verify');

Route::group(['middleware' => ['adminSess']],function(){
      // product
	Route::get('/product', 'ProductController@index');
	Route::get('/product/create', 'ProductController@create');
	Route::post('/product', 'ProductController@store');
	Route::get('/product/{id}/edit', 'ProductController@edit');
	Route::put('/product/{id}', 'ProductController@update');
	Route::get('/product/{id}/delete', 'ProductController@delete');
	Route::delete('/product/{id}', 'ProductController@destroy');

   });


Route::get('/', function () {
    return view('welcome');
});
