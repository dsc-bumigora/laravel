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

//             url      controller@function
Route::get('/mahasiswa', 'MahasiswaController@index')->name('index');
Route::get('/mahasiswa/create', 'MahasiswaController@create')->name('create');
Route::post('/mahasiswa/store', 'MahasiswaController@store')->name('store');
Route::get('/mahasiswa/edit/{id}', 'MahasiswaController@edit')->name('edit');
Route::post('/mahasiswa/update/{id}', 'MahasiswaController@update')->name('update');

Route::delete('/mahasiswa/destroy/{id}', 'MahasiswaController@destroy')->name('destroy');
