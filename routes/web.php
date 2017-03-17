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

Route::get('/', 'WelcomeController@show');

Route::get('/home', 'HomeController@show');


// API Token Refresh...
$router->put('/spark/token', 'TokenController@refresh');

// API Settings
$router->get('/settings/api/tokens', 'Settings\API\TokenSecretController@all');
$router->post('/settings/api/token', 'Settings\API\TokenSecretController@store');
$router->put('/settings/api/token/{token_id}', 'Settings\API\TokenSecretController@update');
$router->get('/settings/api/token/abilities', 'Settings\API\TokenSecretAbilitiesController@all');
$router->delete('/settings/api/token/{token_id}', 'Settings\API\TokenSecretController@destroy');

