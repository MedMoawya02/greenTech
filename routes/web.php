<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\ClientMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', function () {
    return view('inscription.register');
});
/* 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); */
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register/create', [RegisterController::class, 'register'])->name('registerCreate');
Route::get('/login', [LoginController::class, 'loginForm'])->name('loginForm');
Route::post('/login/login', [LoginController::class, 'login'])->name('login');



Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
});

Route::middleware(['auth', AdminMiddleware::class])->group(function () {
        Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');

    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
});

Route::middleware(['auth', ClientMiddleware::class])->group(function () {
    Route::post('/favorites/{product}', [FavoriteController::class, 'toggle'])
        ->name('favorites.toggle');
    Route::get('/favorites', [FavoriteController::class, 'favorites'])
        ->name('favorites.products');
        

});


/* Route::middleware(['auth', ClientMiddleware::class])->group(function () {
    Route::get('/catalogue', [ProductController::class, 'index'])->name('products.index');
}); */

/* require __DIR__.'/auth.php'; */
