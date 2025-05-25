<?php

use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;





Route::get('/', [HomeController::class, 'index'])->name('page.home');


Route::get('/about', [HomeController::class, 'About'])->name('page.about');
Route::get('/services', [HomeController::class, 'Services'])->name('page.services');
Route::get('/contact', [HomeController::class, 'Contact'])->name('page.contact');

Route::get('/admin/login', [SessionController::class, 'login'])->name('login')->middleware('guest');
Route::post('/admin/login', [SessionController::class, 'store'])->name('login.user');


Route::middleware('auth')->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('page.dashboard');
    Route::delete('/admin', [AdminController::class, 'destroy'])->name('logout');

// company update

 Route::get('/admin/company', [CompanyController::class, 'index'])->name('page.company');
 Route::patch('/admin/company', [CompanyController::class, 'update'])->name('update.company');


});
