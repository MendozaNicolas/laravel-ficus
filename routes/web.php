<?php

use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\ViewController@gotomain');
Route::get('/main', 'App\Http\Controllers\AuthController@index');
Route::post('/main/checklogin', 'App\Http\Controllers\AuthController@checklogin'); //! ver CSRF Documentacion
Route::get('/main/dashboard', 'App\Http\Controllers\AuthController@successlogin');
Route::get('/main/logout', 'App\Http\Controllers\AuthController@logout');
