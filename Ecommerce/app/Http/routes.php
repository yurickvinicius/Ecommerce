<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', ['as'=>'categories', 'uses' => 'CategoriesController@index']);
Route::post('/categories', ['as'=>'categories.store', 'uses'=> 'CategoriesController@store']);
Route::get('/categories/create', ['as'=>'categories.create', 'uses'=> 'CategoriesController@create']);
Route::get('/categories/{id}/destroy', ['as'=>'categories.destroy', 'uses'=> 'CategoriesController@destroy']);
Route::get('/categories/{id}/edit', ['as'=>'categories.edit', 'uses'=> 'CategoriesController@edit']);
Route::put('/categories/{id}/update', ['as'=>'categories.update', 'uses'=> 'CategoriesController@update']);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
