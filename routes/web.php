<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PHPMailerController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\TourPackageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/service', [FrontendController::class, 'service'])->name('service');
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::post('/blog/loadMore', [FrontendController::class, 'loardMoreBlogs']);
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::post('/gallery/loadMore', [FrontendController::class, 'loardMoreGallery']);
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/blog/{slug}', [FrontendController::class, 'blogDetail']);
Route::post('/subscribe', [SubscribeController::class, 'subscribe']);
Route::post('/contactFormSubmit', [ContactController::class, 'submitContactForm']);

// Tour Package Routes
Route::get('/tours', [TourPackageController::class, 'index'])->name('tours');
Route::get('/tours/tailor-made', [TourPackageController::class, 'tailorMade'])->name('tours.tailor-made');
Route::get('/tours/round-tour', [TourPackageController::class, 'roundTour'])->name('tours.round-tour');
Route::get('/tours/{slug}', [TourPackageController::class, 'show'])->name('tours.detail');
Route::post('/tours/inquire', [TourPackageController::class, 'inquire'])->name('tour.inquire');


require __DIR__ . '/admin.php';
