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
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/goal', 'GoalController@index');
Route::get('/goal/create', 'GoalController@create');
Route::post('/goal', 'GoalController@createAction');
Route::get('/goal/{id}/update', 'GoalController@update');
Route::put('/goal/{id}', 'GoalController@updateAction');
Route::delete('/goal/{id}', 'GoalController@destroyAction');

Route::get('/milestone', 'MilestoneController@index');
Route::get('/milestone/create', 'MilestoneController@create');
Route::post('/milestone', 'MilestoneController@createAction');
Route::get('/milestone/{id}/update', 'MilestoneController@update');
Route::put('/milestone/{id}', 'MilestoneController@updateAction');
Route::delete('/milestone/{id}', 'MilestoneController@destroyAction');

Route::get('/progress', 'ProgressController@index');
Route::get('/progress/create', 'ProgressController@create');
Route::post('/progress', 'ProgressController@createAction');
Route::get('/progress/{id}/update', 'ProgressController@update');
Route::put('/progress/{id}', 'ProgressController@updateAction');
Route::delete('/progress/{id}', 'ProgressController@destroyAction');
