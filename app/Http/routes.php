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

Route::get('/', function () {
    return view('pages.home');
});


Route::resource('orgs', 'OrgsController');

Route::post('orgs/{id}/documents', 'DocumentsController@addDocument');
Route::get('document/{id}', 'DocumentsController@downloadDocument');

Route::post('orgs/{id}/links', 'LinksController@addLink');

//Route::get('orgs/create', 'OrgsController@create');

// Route::post('orgs', 'OrgsController@store');

// Route::get('orgs/{id}', 'OrgsController@show');

// Route::get('orgs/{id}/edit', 'OrgsController@edit');

// Route::patch('orgs/{id}', 'OrgsController@update');

// Route::delete('orgs/{id}', 'OrgsController@destroy');

