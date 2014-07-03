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

Route::get('/ln/{language?}', function($language = NULL)
{
    $Parsedown = new Parsedown();
    if ($language) $content = File::get(base_path()."/README.".$language.".md");
    else  $content = File::get(base_path()."/README.md");
    $content = $Parsedown->text($content);
    return View::make('manifesto')->with(array('active_item' => 'home', 'content' => $content));
});

Route::get('/', function()
{
    $Parsedown = new Parsedown();
    $content = File::get(base_path()."/README.md");
    $content = $Parsedown->text($content);
    return View::make('manifesto')->with(array('active_item' => 'home', 'content' => $content));
});

Route::get('/support', function()
{
	return View::make('support')->with(array('active_item' => 'support'));
});

Route::post('/support', array('uses' => 'SupporterController@newSupporter'));

Route::get('/thankYou', function()
{
    return View::make('thank_you')->with(array('supporters'=> Supporter::all(), 'active_item'=>'list'));
});

Route::get('/about', function()
{
    return View::make('about')->with(array('active_item' => 'about'));
});