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
    if(Auth::user()){
        return view('welcome'); 
    }
    else{
        return view('welcome'); 
    }
    
})->name('wel');




Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::post('/login', [
//     "uses" => 'LoginController@login',
//     'as' => 'login',
// ]);

// Route::get('/login', [
//     "uses" => 'LoginController@login',
//     'as' => 'login.custom',
// ]);

Route::get('/dash', [
    "uses" => 'LoginController@dash',
    'middleware' => 'auth'
])->name('dash');


Route::get('/staff', [
    "uses" => 'LoggedController@staff',
    'as' => 'Logged.staff',
    'middleware' => 'auth'
]);
Route::get('/lab_as', [
    "uses" => 'LoggedController@lab_as',
    'as' => 'Logged.lab_as',
    'middleware' => 'auth'
]);

// --------------------lab_as part-----------------
// Route::get('/lab_as/request','LabController@create');
Route::get('/lab_as/request', [
    "uses" => 'LabController@create',
    'as' => 'Logged.lab_as.request',
    'middleware' => 'auth'
]);

Route::post('/lab_as','LabController@store');
Route::get('/lab_as/history', [
    "uses" => 'LabController@history',
    'as' => 'Logged.lab_as.history',
    'middleware' => 'auth'
]);
Route::get('/lab_as/labcomponent', [
    "uses" => 'LabController@labcomp',
    'as' => 'Logged.lab_as.labcomp',
    'middleware' => 'auth'
]);
// -----------------------------------------

//--------------------staff part-----------------
Route::get('/staff/request','StaffController@create');
Route::post('/staff','StaffController@store');
Route::get('/staff/history','StaffController@history');
// -----------------------------------------

Route::get('/dept_off', [
    "uses" => 'LoggedController@dept_off',
    'as' => 'Logged.dept_off',
    'middleware' => 'auth'
]);
Route::get('/hod', [
    "uses" => 'LoggedController@hod',
    'as' => 'Logged.hod',
    'middleware' => 'auth'
]);
Route::get('/princi', [
    "uses" => 'LoggedController@princi',
    'as' => 'Logged.princi',
    'middleware' => 'auth'    
]);
Route::get('/req',[
    "uses"=>'PrincipleController@see',
    'as'=>'princi_req']);


Route::get('/store_manager', [
    "uses" => 'LoggedController@store_manager',
    'as' => 'Logged.store_manager',
    'middleware' => 'auth'
]);
Route::get('/admin', [
    "uses" => 'LoginController@adminIndex',
    'as' => 'Logged.admin',
    'middleware' => 'auth'
]);
Route::get('/princi/export/{type}','PrincipleController@export');
Route::get('/princi/req_accept/{req_id}','PrincipleController@accept');
Route::get('/princi/req_reject/{req_id}','PrincipleController@reject');


Route::post('/admin','LoginController@adminStore')->middleware('auth');
Route::get('/admin/manage_users',[
    'uses' => 'LoginController@update',
    'as' => 'manage_user',
    'middleware' => 'auth'
]);

Route::get('/labs',[
    "uses"=>'HodController@see',
    'as'=>'hod_req']);
Route::get('/hod/export/{type}','HodController@export');

Route::get('/hod/req_accept/{req_id}','HodController@accept');
Route::get('/hod/req_reject/{req_id}','HodController@reject');

Route::get('/staffR', [
    "uses" => 'LoggedController@staffR',
    'as' => 'staffR',
    'middleware' => 'auth'
]);

Route::get('/labR', [
    "uses" => 'LoggedController@labR',
    'as' => 'labR',
    'middleware' => 'auth'

]);

Route::get('/staffR/forward/{req_id}', [
    "uses" => 'LoggedController@forward_by_staff',
    'as' => 'forward.by.staff',
    'middleware' => 'auth'

]);



Route::get('admin/edit-user/{id}', [
    "uses" => 'LoginController@edit',
    'as' => 'edit.user',
    'middleware' => 'auth'

]);

Route::put('admin/edit-user/{id}/post', [
    "uses" => 'LoginController@edit',
    'as' => 'edit.user',
    'middleware' => 'auth'

]);

//Route::delete('admin/{id}', 'LoginController@destroy')->name('admin.delete');

