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

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index');

    Route::resource('/profile', 'StudentsController');

    Route::get('/medicine', 'MedicinesController@index');
    Route::get('/medicine/create', 'MedicinesController@create');
    Route::post('/medicine', 'MedicinesController@store');
    Route::get('/medicine/{medicine}', 'MedicinesController@show');
    Route::get('/medicine/{medicine}/edit', 'MedicinesController@edit');
    Route::patch('/medicine/{medicine}', 'MedicinesController@update');
    Route::delete('/medicine/{medicine}/delete', 'MedicinesController@destroy');

    Route::get('/notification', 'NotificationsController@index');

    Route::get('/symptom', 'SymptomsController@index');
    Route::get('/symptom/create', 'SymptomsController@create');
    Route::get('/symptom', 'SymptomsController@store');
    Route::get('/symptom/{symptom}', 'SymptomsController@show');
    Route::get('/disease/{symptom}/edit', 'SymptomsController@edit');
    Route::get('/symptom/{symptom}', 'SymptomsController@update');
    Route::get('/symptom/{symptom}/delete', 'SymptomsController@destroy');
});



Auth::routes();
