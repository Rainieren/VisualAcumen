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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//Dashboard routes

Route::get('/projects', 'ProjectController@index')->name('projects');
Route::post('/projects/create', 'ProjectController@store')->name('create_project');
Route::get('/projects/{code}', 'ProjectController@show')->name('showProject');

Route::get('/admin_preferences', 'AdminPreferencesController@index')->name('adminPreferences');
Route::post('/sidebar_save', 'AdminPreferencesController@saveSidebar')->name('saveSidebar');
