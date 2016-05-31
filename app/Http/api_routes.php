<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where all API routes are defined.
|
*/





Route::resource('providers', 'ProviderAPIController');
Route::get('providers/show/{id?}', [
	'as' => 'api.v1.providers.show',
	'uses' => 'ProviderAPIController@show'
]);
Route::get('providers', [
	'as' => 'api.v1.providers.index',
	'uses' => 'ProviderAPIController@index'
]);
Route::patch('providers/update/{id?}', [
	'as' => 'api.v1.providers.update',
	'uses' => 'ProviderAPIController@update'
]);
Route::delete('providers/delete/{id?}', [
	'as' => 'api.v1.providers.delete',
	'uses' => 'ProviderAPIController@destroy'
]);
Route::post('providers/store', [
	'as' => 'api.v1.providers.store',
	'uses' => 'ProviderAPIController@store'
]);