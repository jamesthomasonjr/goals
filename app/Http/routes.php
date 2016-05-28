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

Route::get('/goal', 'GoalController@index')->name('goals.index');
Route::get('/goal/create', 'GoalController@create')->name('goals.create');
Route::post('/goal', 'GoalController@createAction')->name('goals.create.action');
Route::get('/goal/{id}/update', 'GoalController@update')->name('goals.update');
Route::put('/goal/{id}', 'GoalController@updateAction')->name('goals.update.action');
Route::delete('/goal/{id}', 'GoalController@destroyAction')->name('goals.destroy.action');

Route::get('/goal/{goalId}/milestone', 'MilestoneController@index')->name('milestones.index');
Route::get('/goal/{goalId}/milestone/create', 'MilestoneController@create')->name('milestones.create');
Route::post('/goal/{goalId}/milestone', 'MilestoneController@createAction')->name('milestones.create.action');
Route::get('/goal/{goalId}/milestone/{id}/update', 'MilestoneController@update')->name('milestones.update');
Route::put('/goal/{goalId}/milestone/{id}', 'MilestoneController@updateAction')->name('milestones.update.action');
Route::delete('/goal/{goalId}/milestone/{id}', 'MilestoneController@destroyAction')->name('milestones.destroy.action');

Route::get('/goal/{goalId}/progress', 'ProgressController@index')->name('progresses.index');
Route::get('/goal/{goalId}/progress/create', 'ProgressController@create')->name('progresses.create');
Route::post('/goal/{goalId}/progress', 'ProgressController@createAction')->name('progresses.create.action');
Route::get('/goal/{goalId}/progress/{id}/update', 'ProgressController@update')->name('progresses.update');
Route::put('/goal/{goalId}/progress/{id}', 'ProgressController@updateAction')->name('progresses.update.action');
Route::delete('/goal/{goalId}/progress/{id}', 'ProgressController@destroyAction')->name('progresses.destroy.action');
