<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SafetyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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

Route::post('/register', [AuthController::class, 'register']);
Route::get('/verify-email/{token}', [AuthController::class, 'verifyEmail']);

Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::post('/remind-password', [AuthController::class, 'remind']);
Route::get('/password-recovery/{token}', [AuthController::class, 'recovery']);
Route::post('/password-reset', [AuthController::class, 'reset']);

Route::get('/', [MainController::class, 'index'])->name('index');

//Route::get('/help-center', [MainController::class, 'help'])->name('help');
Route::get('/help-center/{socialName?}', [MainController::class, 'help'])->name('help-social');
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::post('/profile/save', [ProfileController::class, 'save']);

    Route::get('/safety', [SafetyController::class, 'index']);
    Route::post('/safety/change-email', [SafetyController::class, 'changeEmail']);
    Route::post('/safety/change-password', [SafetyController::class, 'changePassword']);
    Route::get('/safety/verify-email-change/{token}', [SafetyController::class, 'proceedEmailChange']);

    Route::get('/referral', [\App\Http\Controllers\ReferralController::class, 'index']);

    Route::get('/orders', [\App\Http\Controllers\OrderController::class, 'ordersHistory']);
    Route::get('/order', [\App\Http\Controllers\OrderController::class, 'order'])->name('order');
    Route::get('/order/{categoryId}', [\App\Http\Controllers\OrderController::class, 'makeRedirect']);
    Route::get('/order/services/{categoryId}', [\App\Http\Controllers\OrderController::class, 'getServices']);

    Route::get('/transactions', [\App\Http\Controllers\TransactionsController::class, 'index']);
});

// 404
Route::get('/404', function () {
    return view('errors.404');
})->name('404');

// Other pages
Route::get('/{slug}', [MainController::class, 'otherPages'])->name('page');
