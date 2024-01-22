<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\SettingController;
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


Route::middleware('auth')->get('/dashboard', function () {
    return view('dashboard');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/', function () {
        return redirect('login');
    });
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
    Route::post('/login/authenticate', 'authenticate');
    Route::get('/logout', 'logout');
});

Route::middleware('auth')->controller(ItemController::class)->group(function () {
    Route::get('/items', 'index');
    Route::post('/items/create', 'create');
    Route::post('/items/update', 'update');
    Route::post('/items/delete', 'delete');
});

Route::middleware('auth')->controller(UserController::class)->group(function () {
    Route::get('/users', 'index');
    Route::post('/users/create', 'create');
    Route::post('/users/update', 'update');
    Route::post('/users/delete', 'delete');
});

Route::middleware('auth')->controller(RoleController::class)->group(function () {
    Route::get('/roles', 'index');
    Route::post('/roles/create', 'create');
    Route::post('/roles/update', 'update');
    Route::post('/roles/delete', 'delete');
});

Route::middleware('auth')->controller(PermissionController::class)->group(function () {
    Route::get('/permissions', 'index');
    Route::post('/permissions/create', 'create');
    Route::post('/permissions/update', 'update');
    Route::post('/permissions/delete', 'delete');
});

Route::middleware('auth')->controller(SettingController::class)->group(function () {
    Route::get('/settings', 'index');
    Route::post('/settings/create', 'create');
    Route::post('/settings/update', 'update');
    Route::post('/settings/delete', 'delete');
});