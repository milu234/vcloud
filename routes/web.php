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

Route::post('/login/custom', [
    "uses" => 'LoginController@login',
    'as' => 'login.custom'
]);



Route::get('/staff', [
    "uses" => 'LoggedController@staff',
    'as' => 'Logged.staff'
]);
Route::get('/lab_as', [
    "uses" => 'LoggedController@lab_as',
    'as' => 'Logged.lab_as'
]);
Route::get('/dept_off', [
    "uses" => 'LoggedController@dept_off',
    'as' => 'Logged.dept_off'
]);
Route::get('/hod', [
    "uses" => 'LoggedController@hod',
    'as' => 'Logged.hod'
]);
Route::get('/princi', [
    "uses" => 'LoggedController@princi',
    'as' => 'Logged.princi'
]);
Route::get('/store_manager', [
    "uses" => 'LoggedController@store_manager',
    'as' => 'Logged.store_manager'
]);
Route::get('/admin', [
    "uses" => 'LoggedController@admin',
    'as' => 'Logged.admin'
]);