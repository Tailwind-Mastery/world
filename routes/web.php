<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);

// Route::get('/auth/login', [AuthController::class, 'index']);
// Route::post('/auth/logout', [AuthController::class, 'logout']);