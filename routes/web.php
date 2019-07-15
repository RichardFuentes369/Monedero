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
    return view('dashboard');
});

Route::group(['prefix'=>'home'], function(){	
	Route::post('create','UserController@newUser');
	Route::post('Login','LoginController@login');
	Route::get('Logout','LoginController@logout');
});

Route::resource('cashs', 'MovementController', ['except' => 'show','store']);
Route::post('cashsP','MovementController@store');