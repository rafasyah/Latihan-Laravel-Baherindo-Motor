<?php


use App\Http\Controllers\FormController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WelcomeController::class, 'index']);
Route::get('/', [FormController::class, 'index']);

Route::resource('home', WelcomeController::class);

Route::resource('form', FormController ::class);
