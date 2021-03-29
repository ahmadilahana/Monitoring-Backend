<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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



Route::post('/register', 'Api\UserControllers@register');
Route::post('/login', 'Api\UserControllers@login');

Route::group([
    'middleware' => 'jwt.verify',
    'namespace' => "Api",
    'prefix' => 'Artikel',
], function($router){

    Route::get('/user', 'UserControllers@getAuthenticatedUser');
    Route::get('/user/delete', 'UserControllers@delete');

    Route::get('/test', 'ArtikelApiController@test');
    Route::get('/', 'ArtikelApiController@index');
    Route::get('/show/{id}', 'ArtikelApiController@show');
    Route::post('/create', 'ArtikelApiController@store');
    Route::put('/update/{id}', 'ArtikelApiController@update');
    Route::delete('/delete/{id}', 'ArtikelApiController@delete');
});