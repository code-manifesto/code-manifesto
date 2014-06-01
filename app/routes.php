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
	return View::make('manifesto');
});

Route::get('/support', function()
{
	return View::make('support');
});

Route::post('/support', array('uses' => 'SupporterController@newSupporter'));

Route::get('/thankYou', function()
{
    return View::make('thank_you')->with('supporters', Supporter::all());
});

Route::get('/about', function()
{
    return View::make('about');
});