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

Route::get('/carmodels', 'CarModelController@get');
Route::post('/carmodels', 'CarModelController@create');
Route::get('/employees', 'EmployeeController@get');
Route::get('/total_sales', 'SalesController@get');
