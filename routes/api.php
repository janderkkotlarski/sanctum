<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

Route::get('/users', [UserController::class, 'index']);

// The names need to match exactly, the first one with 
// Route::post('/signin', [UserController::class, 'login']);
Route::post('/signin', [LoginController::class, 'authenticate']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

