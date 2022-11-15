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





Route::get('/', 'HiController@index');


//students
Route::get('/create','HiController@create')->name('create');
// Route::get('/afroja','HiController@afroja');


Route::post('/store','HiController@store')->name('kanita');

Route::get('/all-student','HiController@all')->name('all');

Route::get('/delete/{id}', 'HiController@destroy');
Route::get('/edit/{id}', 'HiController@edit');
Route::post('/update/{id}', 'HiController@update');


//teachers

Route::get('/create-teacher','TeacherController@create');
Route::post('/teacher-store','TeacherController@store')->name('mahabub');


Route::get('/all-data','TeacherController@index')->name('all.teacher');
Route::get('/teacher-delete/{id}', 'TeacherController@destroy');
Route::get('/teacher-edit/{id}', 'TeacherController@edit');
Route::post('/teacher-update/{id}', 'TeacherController@update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/registation', 'StudentController@create')->name('reg');
Route::post('/reg-store', 'StudentController@store')->name('reg.store');
Route::get('/join', 'StudentController@index' )->name('join');
