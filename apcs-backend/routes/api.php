<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register', [\App\Http\Controllers\UserController::class, 'Register']);
Route::post('/login', [\App\Http\Controllers\UserController::class, 'login']);
