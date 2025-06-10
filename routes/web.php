<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PHPMailerController;
use App\Http\Controllers\SubscribeController;
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


require __DIR__ . '/admin.php';
