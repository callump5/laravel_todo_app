<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');

Route::get('/projects', 'ProjectController@index')->name('project.index');
Route::post('/projects', 'ProjectController@store')->name('project.store');
Route::post('/projects/assign', 'ProjectController@store_project_user_assignment')->name('project.store_project_user_assignment');
Route::get('/projects/create', 'ProjectController@create')->name('project.create');
Route::get('/projects/{project}', 'ProjectController@show')->name('project.show');
