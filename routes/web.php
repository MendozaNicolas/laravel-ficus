<?php

use App\Http\Controllers\UserController;
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
Route::post('/main/checklogin', 'App\Http\Controllers\AuthController@checklogin');
Route::get('/main/dashboard', 'App\Http\Controllers\AuthController@successlogin');
Route::get('/main/logout', 'App\Http\Controllers\AuthController@logout');


Route::get('/main/dashboard/users', 'App\Http\Controllers\UserController@getusers');
Route::post('/main/dashboard/createuser', 'App\Http\Controllers\UserController@createuser');
Route::post('/main/dashboard/removeuser', 'App\Http\Controllers\UserController@removeuser');
Route::post('/main/dashboard/updateuser', 'App\Http\Controllers\UserController@updateuser');



Route::get('/main/dashboard/roles', 'App\Http\Controllers\RoleController@getroles');

