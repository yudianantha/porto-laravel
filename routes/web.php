<?php

use Illuminate\Support\Facades\Route;

// Landing Page

Route::get('/', [App\Http\Controllers\LandingController::class, 'home'])->name('home');
Route::get('/about-us', [App\Http\Controllers\LandingController::class, 'about_us'])->name('about_us');
Route::get('/contact', [App\Http\Controllers\LandingController::class, 'contact'])->name('contact');

// Dashboard

