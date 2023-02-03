<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
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

Route::get('/', fn () => redirect(route('items.index')))->name('home');

Route::controller(UserController::class)->group(function () {
    Route::middleware('guest')->group(function () {
        Route::prefix('/register')->group(function () {
            Route::get('', 'create')->name('register');
            Route::post('', 'store')->name('users.create');
        });
        Route::prefix('/login')->group(function () {
            Route::get('', 'login')->name('login');
            Route::post('', 'authenticate')->name('users.authenticate');
        });
    });
    Route::middleware('auth')->group(function () {
        Route::prefix('/users')->group(function () {
            Route::get('', 'index')->name('users.index')->middleware('admin');
            Route::get('{user}', 'show')->name('users.show');
            Route::post('{user}', 'update')->name('users.update');
            Route::put('{user}', 'updateRole')->name('users.update.role');
            Route::delete('{user}', 'destroy')->name('users.destroy');
        });

        Route::post('/logout', 'logout')->name('logout');
    });
});

Route::controller(CartController::class)
    ->prefix('cart')
    ->middleware('auth')
    ->group(function () {
        Route::get('', 'index')->name('cart.index');
        Route::post('', 'update')->name('cart.update');
        Route::delete('', 'remove')->name('cart.remove');
        Route::post('checkout', 'destroy')->name('cart.checkout');
    });

Route::controller(ItemController::class)
    ->middleware('auth')
    ->prefix('items')
    ->group(function () {
        Route::get('', 'index')->name('items.index');
        Route::get('{item}', 'show')->name('items.show');
    });
