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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get('home', 'MainController@home');
Route::get('create_ticket_client', 'ClientController@create_ticket');
Route::get('search_client', 'ClientController@search_client');
Route::get('search_scl', 'SclController@search_scl');
Route::get('dashboard_home_scl', 'SclController@dashboard_home_scl');
Route::get('dashboard_home_client', 'ClientController@dashboard_home_client');
Route::get('create_ticket_scl', 'SclController@create_ticket');
Route::post('authenticate_login', 'MainController@login_auth');
Route::post('raise_ticket', 'ClientController@insert_robi_ticket');