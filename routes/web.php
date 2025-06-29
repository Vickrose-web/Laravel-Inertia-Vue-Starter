<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Home')->name('home');

Route::get('/register',[App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('register');

Route::post('/register',[App\Http\Controllers\Auth\RegisterController::class, 'store']);
