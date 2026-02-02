<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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
Route::resource('/products',ProductController::class)->middleware('auth');
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register/create',[RegisterController::class,'register'])->name('registerCreate');
Route::get('/login',[LoginController::class,'loginForm'])->name('loginForm');
Route::post('/login/login',[LoginController::class,'login'])->name('login');
/* require __DIR__.'/auth.php'; */
