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

// Route::get('/', 'ArtikelController@index');
// Route::get('/welcome', function(){
//     return view('welcome');
// });


// Route::get('/santri', 'SantriController@index')->name('index-santri');
// Route::get('/santri/create', 'SantriController@create');
// Route::post('/santri', 'SantriController@store')->name('create-santri');
// Route::get('/santri/{id}', 'SantriController@show')->name('show-santri');
// Route::get('/santri/edit/{id}', 'SantriController@edit')->name('edit-santri');
// Route::put('/santri/update/{id} ', 'SantriController@update')->name('update-santri');
// Route::get('/santri/delete/{id} ', 'SantriController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group([
    'middleware' => 'auth',
    'prefix' => 'artikel',
], function()
   { 
    Route::get('/', 'ArtikelController@index');
    Route::get('/create', 'ArtikelController@create');
    Route::get('/daftar', 'ArtikelController@daftar');
    Route::get('/{id}', 'ArtikelController@show');
    Route::get('/edit/{id}', 'ArtikelController@edit');
    Route::put('/update/{id}', 'ArtikelController@update');
    Route::get('/delete/{id}', 'ArtikelController@delete');
    Route::post('/store', 'ArtikelController@store');
});
