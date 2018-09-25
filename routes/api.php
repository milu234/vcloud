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
