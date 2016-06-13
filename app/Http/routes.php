<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', 'pageController@contact');

Route::get('/about', 'pageController@about');

Route::get('/tasks', 'taskController@index');

/*Route::get('/articles','articleController@index');
Route::get('/articles/create', 'articleController@create');
Route::get('/articles/{id}', 'articleController@show');
Route::post('articles', 'articleController@store');*/


Route::resource('articles', 'articleController');


Route::controllers([
   'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);



Route::auth();

Route::get('/home', 'HomeController@index');
