<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/artikel', 'ArtikelController@index');
Route::get('/artikel/create', 'ArtikelController@create');
Route::get('/daftar', 'ArtikelController@daftar');
Route::get('/artikel/{id}', 'ArtikelController@show');
Route::post('/artikel', 'ArtikelController@store');


Route::get('/santri', 'SantriController@index')->name('index-santri');
Route::get('/santri/create', 'SantriController@create');
Route::post('/santri', 'SantriController@store')->name('create-santri');
Route::get('/santri/{id}', 'SantriController@show')->name('show-santri');
Route::get('/santri/edit/{id}', 'SantriController@edit')->name('edit-santri');
Route::put('/santri/update/{id} ', 'SantriController@update')->name('update-santri');
Route::get('/santri/delete/{id} ', 'SantriController@destroy');
