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

Route::group(['middleware' => 'web'], function ()
{
    Route::get('/', 'HomeController@index');
    Route::resource('kapanlulus', 'LulusesController');
    Route::resource('kerjaapa', 'KerjasController');
    Route::resource('kapannikah', 'NikahsController');
});

Route::auth();
Route::group( ['middleware' => 'auth'], function ()
{
    Route::resource('admin', 'AdminController', ['only' => ['index', 'show']]);
});

Route::get('/home', 'HomeController@index');
