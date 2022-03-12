<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\RegisterStepTwoController;
use App\Http\Controllers\UploadProductImageController;

Route::get('upload-product-image', [UploadProductImageController::class, 'index'])->name('upload-product-image');
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Register
    Route::prefix('/register')->controller(RegisterStepTwoController::class)->name('register.')->group(function () {
        Route::get('/step-2', 'index')->name('step-2');
        Route::post('/step-2/store', 'store')->name('step-2.store');
    });

    // Profile
    Route::prefix('/profile')->controller(ProfileController::class)->name('profile.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/edit', 'edit')->name('edit');
        Route::put('/update', 'update')->name('update');
        Route::delete('/delete', 'destroy')->name('destroy');
        Route::get('/password/edit', 'edit_password')->name('password.edit');
    });

    // Product
    Route::get('/products/{menu:slug}/{category:slug}', [ProductController::class, 'index'])->name('products.index');
    Route::get('/wishlist', [ProductController::class, 'wishlist'])->name('wishlist');

    // Transaction
    Route::get('/cart', [TransactionController::class, 'index'])->name('cart');
    Route::get('/transactions/checkout', [TransactionController::class, 'checkout'])->name('transactions.checkout');
    Route::get('/transactions/print/invoice', [TransactionController::class, 'print_invoice'])->name('transactions.print.invoice');
    Route::get('/transactions/success', [TransactionController::class, 'success'])->name('transactions.success');

    // Developer Profile
    Route::view('/developer-profile', 'developer-profile')->name('dev-profile');
});
