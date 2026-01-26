<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('products.catalogue');
});
Route::get('/createProduct', function () {
    return view('products.createProduct');
});
