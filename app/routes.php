<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('user', 'UserController');
Route::controller('user', 'UserController');

Route::get('/', function()
{
	return View::make('home');
});
Route::get('browse', function()
{
    $cities = City::all();
	return View::make('browse', compact('cities'));
});
Route::get('user', function()
{
	return View::make('user-index');
});
