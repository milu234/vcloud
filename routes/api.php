<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//
Route::get('staff_components','Staff_ComponentController@index');
Route::get('adminn','AdminController@index');    //List the articles


// ========================================Adminn=========================================================================
//List Single Admin
Route::get('adminn/{id}','AdminController@show');

//Create New Admnn
Route::post('adminns','AdminController@store');

//Update 
Route::put('adminn','AdminController@store');

Route::delete('adminn','AdminController@destroy');

// ==================================================================================================================

Route::get('req','RequesstController@index');

// ================================================================================================================

Route::get('status','StatusController@index');

Route::get('lab_components','LabController@index');

//List Departments
Route::get('departments', 'DeptController@index');

//list single Department
Route::get('department/{dept_id}', 'DeptController@show');

//list new Department
Route::post('department', 'DeptConroller@store');

//update
Route::put('department/{dept_id}', 'DeptController@store');

//delete
Route::delete('department/{dept_id}', 'DeptController@destroy');
