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
Route::get('/score', 'HomeController@score')->name('score');
Route::get('/practice', 'PracticeController@practice')->name('practice');
Route::get('/test', 'PracticeController@test')->name('test');
Route::get('/teach', 'PracticeController@teach')->name('teach');
Route::get('/animal/get', 'AnimalController@get')->name('get_animal');
Route::post('/animal/check', 'AnimalController@check')->name('check_animal');
Route::post('/save/score', 'PracticeController@save_score')->name('save_score');
