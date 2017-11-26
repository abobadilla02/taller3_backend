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

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/



Route::group(['middleware' => ['jwt.auth']], function () {

	
});

Route::group(['middleware' => ['cors']], function () {
		Route::resource('noticia', 'NoticiaController');
		Route::resource('users','UsersController');
		Route::resource('categoria', 'CategoriaController');
});	

// Login
Route::post('/login', 'AuthController@userAuth');