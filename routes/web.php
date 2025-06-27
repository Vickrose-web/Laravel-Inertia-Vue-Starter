<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Home')->name('home');

Route::get('/register',[App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('register');
