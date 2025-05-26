<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommonController;
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


    //  Home Banner Section

    Route::get('/admin/home-banner', [BannerController::class, 'index'])->name('page.homebanner');
    Route::patch('/admin/home-banner', [BannerController::class, 'update'])->name('update.homebanner');

    // About Us

    Route::get('/admin/about-us', [CommonController::class, 'aboutus'])->name('page.aboutus');
    Route::patch('/admin/about-us', [CommonController::class, 'updateAbout'])->name('update.aboutus');

    // Our Services

    Route::get('/admin/our-services', [CommonController::class, 'ourservices'])->name('page.ourservices');
    Route::patch('/admin/our-services/content', [CommonController::class, 'updatecontent'])->name('update.ourservicescontent');
    Route::post('/admin/our-services', [CommonController::class, 'storeNewService'])->name('store.newservice');
    Route::get('/admin/our-services/edit/{service}', [CommonController::class, 'editService'])->name('edit.ourservices');
    Route::patch('/admin/our-services', [CommonController::class, 'updateService'])->name('update.ourservices');
    Route::delete('/admin/our-services/{service}', [CommonController::class, 'destroyService'])->name('destroy.ourservices');


    // Why Choose Us

    Route::get('/admin/why-choose-us', [CommonController::class, 'WhyChooseUs'])->name('page.whychoosehome');
    Route::patch('/admin/why-choose-us', [CommonController::class, 'UpdateWhyChooseUs'])->name('update.whychoosehome');


    // Youtube Section

    Route::get('/admin/youtube', [CommonController::class, 'Youtube'])->name('page.youtube');
    Route::patch('/admin/youtube', [CommonController::class, 'UpdateYoutube'])->name('update.youtube');

    // Expertise

    Route::get('/admin/expertise', [CommonController::class, 'expertise'])->name('page.expertise');
    Route::patch('/admin/expertise', [CommonController::class, 'Updateexpertise'])->name('update.expertise');

    // Faq Section

    Route::get('/admin/faq-section', [CommonController::class, 'faqSection'])->name('page.faqsection');
    Route::patch('/admin/faq-section', [CommonController::class, 'updatefaqSection'])->name('update.faqsection');
    Route::patch('/admin/faq-section/content', [CommonController::class, 'updatefaqContent'])->name('update.faqcontent');

    // Testimonials

    Route::get('/admin/testimonials', [CommonController::class, 'testimony'])->name('page.testimonials');
    Route::patch('/admin/testimonials/content', [CommonController::class, 'UpdateContenttestimonials'])->name('update.testimonialcontent');

});
