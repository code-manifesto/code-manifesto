<?php

Route::get('/ln/{language}', 'ManifestoController@manifesto');

Route::get('/', 'ManifestoController@manifesto');

Route::get('/about', 'ManifestoController@about');

Route::get('/support', 'SupporterController@support');

Route::post('/support', 'SupporterController@newSupporter');

Route::get('/thankYou', 'SupporterController@thankYou');

Route::post('/queue/receive', function()
{
	return Queue::marshal();
});

