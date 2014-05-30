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

Route::get('/', function()
{
	return View::make('home');
});

Route::get('single', function()
{
	return View::make('single');
});

Route::get('standard', function()
{
	return View::make('standard');
});

Route::get('advanced', function()
{
	return View::make('advanced');
});

Route::get('infinite', function()
{
	return View::make('infinite');
});

Route::get('multiple', function()
{
	return View::make('multiple');
});

Route::get('adv', function()
{
	return View::make('adv');
});

Route::get('source', 'BaseController@source');