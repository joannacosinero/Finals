<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','SiteController@index');

Route::get('/users', 'UserController@index');
Route::post('/users', 'UserController@store');
Route::patch('/users/{id}', 'UserController@update');
Route::get('/users/create', 'UserController@create');
Route::get('/users/edit/{id}', 'UserController@edit');

Route::get('/instructors', 'InstructorController@index');
Route::post('/instructors', 'InstructorController@store');
Route::patch('/instructors/{id}', 'InstructorController@update');
Route::get('/instructors/create', 'InstructorController@create');
Route::get('/instructors/edit/{id}', 'InstructorController@edit');

Route::get('/learners', 'LearnerController@index');

Route::get('/courses', 'CourseController@index');
