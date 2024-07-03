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

Route::post('register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::get('/verify-email/{token}', [\App\Http\Controllers\AuthController::class, 'verifyEmail']);


Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout']);

Route::get('/', function () {
    return view('index');
});
