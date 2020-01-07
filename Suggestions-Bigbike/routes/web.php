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

Route::get('/', 'PagersController@index');
// Route::resource('/User', 'UserController');
Route::post('Regiter','UserController@check_user');
Route::post('Login','UserController@Login');
Route::get('logout' , 'UserController@Logout');
Route::get('recommend','PagersController@recommend');
Route::get('search','PagersController@search');
Route::get('profile','PagersController@profile');
Route::get('price_estimation','PagersController@price_estimation');
Route::post('calAssess','FunctionAssess@calAssess');
