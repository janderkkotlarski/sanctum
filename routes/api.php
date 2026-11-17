<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', function (Request $request) {
    return $request->users();
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

