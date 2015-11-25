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

Route::get('/', 'staticController@home');

//Route::get('contact', function(){
//    return view('contact');
//}); This code is a simple way to return a view without writing the code in a controller file.

Route::get('contact', 'staticController@contact');
Route::get('about', 'staticController@about');
//Route::get('article', 'articleController@index');
//Route::get('artcreate', 'articleController@create');
//Route::get('artshow/{id}', 'articleController@show');
//Route::post('article', 'articleController@store');
//Route::get('articles/{id}/edit', 'articleController@edit');

//Resource can save us creating lots of lines of route code and it will get all the routes automatically
Route::resource('articles', 'articleController');

Route::controllers(['auth' => 'Auth\AuthController', 'password' => 'Auth\PasswordController']);

//In this route we are using a middleware 'auth' which will only let auth users view the page
Route::get('profile', 'profileController@show')->middleware('auth');
Route::get('profilearticles', 'profileController@articles');
Route::get('profile/{id}', 'profileController@showProfile');
Route::patch('profile/{id}', 'profileController@update');

Route::get('foo', ['middleware' => 'admin', function()
{
    return "admin page";
}]);

Route::get('tags/{tags}', 'tagsController@show');