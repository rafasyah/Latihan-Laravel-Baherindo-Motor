<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\MobilController;
use Illuminate\Support\Facades\Route;

// Show all motors & cars on homepage
Route::get('/', [WelcomeController::class, 'index'])->name('home');

// Resources for form submission
Route::resource('motor', MotorController::class);
Route::resource('mobil', MobilController::class);
Route::resource('home', WelcomeController::class);