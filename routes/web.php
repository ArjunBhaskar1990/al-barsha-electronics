<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MetaDataController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;






Route::get('/', [HomeController::class, 'index'])->name('page.home');


Route::get('/about', [HomeController::class, 'About'])->name('page.about');
Route::get('/services', [HomeController::class, 'Services'])->name('page.services');
Route::get('/contact', [HomeController::class, 'Contact'])->name('page.contact');
Route::post('/contact', [HomeController::class, 'sendMessage'])->name('send.contact');

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

    // Why Choose About

    Route::get('/admin/why-choose-about', [CommonController::class, 'WhyChooseUsAbout'])->name('page.whychoose_about');
    Route::patch('/admin/why-choose-about', [CommonController::class, 'UpdateWhyChooseUsAbout'])->name('update.whychooseabout');


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
    Route::get('/admin/testimonials/edit/{testimony}', [CommonController::class, 'editTestimony'])->name('edit.testimonials');
    Route::patch('/admin/testimonials/content', [CommonController::class, 'UpdateContenttestimonials'])->name('update.testimonialcontent');
    Route::post('/admin/testimonials', [CommonController::class, 'StoreReview'])->name('store.newreview');
    Route::patch('/admin/testimonials', [CommonController::class, 'UpdateReview'])->name('update.review');
    Route::delete('/admin/testimonials/{testimony}', [CommonController::class, 'DestroyReview'])->name('destroy.review');

    // Our Approach

    Route::get('/admin/our-approach', [CommonController::class, 'ourApproach'])->name('page.ourapproach');
    Route::patch('/admin/our-approach', [CommonController::class, 'UpdateourApproach'])->name('update.ourapproach');

    // Our Branch & Footer Title


    Route::get('/admin/branch-footer-title', [CommonController::class, 'branchFooter'])->name('page.branchfooter');
    Route::patch('/admin/branch-footer-title', [CommonController::class, 'UpdatebranchFooter'])->name('update.branchfooter');


    // Meta Data SEO

    Route::get('/admin/digital-marketing', [MetaDataController::class, 'index'])->name('page.metadata');
    Route::get('/admin/digital-marketing/edit/{page}', [MetaDataController::class, 'edit'])->name('edit.metadata');
    Route::patch('/admin/digital-marketing', [MetaDataController::class, 'update'])->name('update.metadata');
});
