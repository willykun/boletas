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

//Route::get('pdf', 'PdfController@invoice');

//Route::get('pdfs', 'PdfController@invoice');

Route::resource('pdf','PdfController');

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::resource('schools', 'SchoolController');

Route::get('schools/{id}/delete', [
    'as' => 'schools.delete',
    'uses' => 'SchoolController@destroy',
]);


Route::resource('professors', 'ProfessorController');

Route::get('professors/{id}/delete', [
    'as' => 'professors.delete',
    'uses' => 'ProfessorController@destroy',
]);
