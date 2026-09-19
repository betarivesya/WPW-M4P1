<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

// Routing menuju Controller
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/{id}', [ProdukController::class, 'show']);

// Routing resource menuju BookController dengan Middleware Auth
Route::resource('book', BookController::class)->middleware('auth');
