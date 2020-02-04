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
Route::post('updateprofile','UserController@updateprofile');

Route::post('searchdata','UserController@searchdata');
Route::post('CalAssess','FunctionAssess@calAssess');
// Route::get('calAssess','FunctionAssess@calAssess');

Route::post('insertcar','UserController@insertcar');
Route::post('deleteCar','UserController@deleteCar');  // ลบข้อมูลรถ
#Route::get('showproduct','UserController@showproduct');

Route::get('showproduct/{id}', 'UserController@showproduct');
Route::get('editproduct/{id}', 'UserController@editproduct');
Route::post('editbike', 'UserController@editbike');
//     return view('showproduct');
// });

// $url = route('showproduct', ['id' => 1]);


Route::get('logout' , 'UserController@Logout');
Route::get('recommend','PagersController@recommend');
Route::get('search','PagersController@search');
Route::post('search_bike','PagersController@search_bike');
Route::get('profile','PagersController@profile');
Route::get('price_estimation','PagersController@price_estimation');

Route::get('formAddCar','PagersController@formAddCar');
Route::get('data_management','PagersController@data_management');
Route::post('AddCar','PagersController@AddCar');
Route::post('calAssess','FunctionAssess@calAssess');
Route::post('addPost','BoradController@store');

Route::get('borad','BoradController@index'); //เว็บบอร์ด

Route::get('view_post/{id}','BoradController@show'); // วิว เว็บบอร์ด
Route::get('delete_post/{id}','BoradController@delete'); // ลบโพส
Route::post('ShowComment','BoradController@comment'); // วิว เว็บบอร์ด
Route::post('addComment','BoradController@addComment'); // วิว เว็บบอร์ด
