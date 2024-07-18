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

// Index

Route::get('/', [MainController::class, 'index'])->name('index');

// Registration, Login, Password Reminder

Route::post('/register', [AuthController::class, 'register']);
Route::get('/verify-email/{token}', [AuthController::class, 'verifyEmail']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/remind-password', [AuthController::class, 'remind']);
Route::get('/password-recovery/{token}', [AuthController::class, 'recovery']);
Route::post('/password-reset', [AuthController::class, 'reset']);

// Services

Route::get('/order', [\App\Http\Controllers\OrderController::class, 'order'])->name('order');
Route::get('/order/{categoryId}', [\App\Http\Controllers\OrderController::class, 'makeRedirect']);
Route::get('/order/services/{categoryId}', [\App\Http\Controllers\OrderController::class, 'getServices']);
Route::post('/order/promo/check', [\App\Http\Controllers\OrderController::class, 'checkPromo']);

// Help-center

Route::get('/help-center/{socialName?}', [MainController::class, 'help'])->name('help-social');
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');

Route::middleware('auth')->group(function () {

    // Profile

    Route::get('/profile', [ProfileController::class, 'index']);
    Route::post('/profile/save', [ProfileController::class, 'save']);

    // Safety

    Route::get('/safety', [SafetyController::class, 'index']);
    Route::post('/safety/change-email', [SafetyController::class, 'changeEmail']);
    Route::post('/safety/change-password', [SafetyController::class, 'changePassword']);
    Route::get('/safety/verify-email-change/{token}', [SafetyController::class, 'proceedEmailChange']);

    // Referral

    Route::get('/referral', [\App\Http\Controllers\ReferralController::class, 'index']);

    // Orders List

    Route::get('/orders', [\App\Http\Controllers\OrderController::class, 'ordersHistory']);
    Route::post('order/make-order', [\App\Http\Controllers\OrderController::class, 'makeOrder']);

    // Transactions List

    Route::get('/transactions', [\App\Http\Controllers\TransactionsController::class, 'index']);
});

// 404

Route::get('/404', function () {
    return view('errors.404');
})->name('404');

// Other pages

Route::get('/{slug}', [MainController::class, 'otherPages'])->name('page');
