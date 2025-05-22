<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('page.home');


Route::get('/about', [HomeController::class, 'About'])->name('page.about');
Route::get('/services', [HomeController::class, 'Services'])->name('page.services');
Route::get('/contact', [HomeController::class, 'Contact'])->name('page.contact');

