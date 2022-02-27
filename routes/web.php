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

Route::get('/', [\App\Http\Controllers\ImageController::class, 'index']);

Route::get('/about', [\App\Http\Controllers\HomeController::class, 'about']);

Route::get('/create', [\App\Http\Controllers\ImageController::class, 'create']);

Route::get('/show/{id}', [\App\Http\Controllers\ImageController::class, 'show']);

Route::get('/edit/{id}', [\App\Http\Controllers\ImageController::class, 'edit']);

Route::post('/store', [\App\Http\Controllers\ImageController::class, 'store']);

Route::post('/update/{id}', [\App\Http\Controllers\ImageController::class, 'update']);

Route::get('/delete/{id}', [\App\Http\Controllers\ImageController::class, 'delete']);
