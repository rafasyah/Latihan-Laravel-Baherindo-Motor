<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Show all motors & cars on homepage
Route::get('/', [WelcomeController::class, 'index'])->name('home');

// Static About page
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Resources for form submission
Route::resource('motor', MotorController::class);
Route::resource('mobil', MobilController::class);
