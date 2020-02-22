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

Route::get('halo', function () {
	return "Halo, Selamat datang di Tes Laravel Satrio Utomo";
});

// Route::get('blog', function () {
// 	return view('blog');
// });

Route::get('/blog', 'BlogController@home');
Route::get('/blog/about', 'BlogController@about');
Route::get('/blog/contact', 'BlogController@contact');

Route::get('/employee', 'EmployeeController@index');
Route::get('/employee/page', 'EmployeeController@pagination');
Route::get('/employee/search','EmployeeController@search');
Route::get('/employee/add', 'EmployeeController@add');
Route::post('/employee/store','EmployeeController@store');
Route::get('/employee/edit/{id}','EmployeeController@edit');
Route::post('/employee/update','EmployeeController@update');
Route::get('/employee/delete/{id}','EmployeeController@delete');

// Route::get('/employee/{name}', 'EmployeeController@index');
Route::get('/form', 'EmployeeController@form');
Route::post('/form/process', 'EmployeeController@process');