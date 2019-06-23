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

//https://medium.com/@panjeh/laravel-auth-routes-email-verification-reset-password-authentication-registration-routes-fb82b3337150
//Auth::Routes() is a helper class that helps you generate all the routes required for user authentication.

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/score', 'HomeController@score')->name('score');
Route::get('/practice', 'PracticeController@practice')->name('practice');
Route::get('/test', 'PracticeController@test')->name('test');
Route::get('/teach', 'PracticeController@teach')->name('teach');
Route::get('/animal/get', 'AnimalController@get_animal')->name('get_animal');
Route::post('/animal/check', 'AnimalController@check')->name('check_animal');
Route::post('/save/score', 'PracticeController@save_score')->name('save_score');
Route::get('/unicorn', 'HomeController@unicorn')->name('unicorn');

//https://laravel.com/docs/5.8/routing
//For Routing in Laravel. All Laravel routes are defined in your route files, which are located in the routes directory.
// These files are automatically loaded by the framework.
//Route:get(...) is for Named Routes. You may also specify route names for controller actions.
