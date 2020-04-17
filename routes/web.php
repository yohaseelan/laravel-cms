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

//Route::get('student','StudentController@index');
//Route::get('grades','GradeController@index');

Route::resource('students', 'StudentController');
Route::resource('grades', 'GradeController');
Route::resource('subjects', 'SubjectController');



