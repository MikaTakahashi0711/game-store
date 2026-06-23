<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [StoreController::class, 'index']);
Route::get('/game/{id}', [StoreController::class, 'detail'])->name('game.detail');
Route::get('/games', [GameController::class, 'index'])->name('games.index');
Route::get('/checkout/{id}', [StoreController::class, 'checkout'])->name('game.checkout');
Route::get('/payment/qris/{id}', [StoreController::class, 'qris'])->name('payment.qris');
Route::get('/payment/success/{id}', [StoreController::class, 'success'])->name('payment.success');
Route::post('/checkout/process/{id}',
    [StoreController::class, 'processCheckout']
)->name('checkout.process');
