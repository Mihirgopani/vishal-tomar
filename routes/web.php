<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| The Chamber of V R Tomar — Web Routes
| Advocate Vishalkumar R Tomar | Gujarat High Court
|--------------------------------------------------------------------------
*/

// Primary Pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

// Practice Areas / Services
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/services/{slug}', [PageController::class, 'serviceDetail'])->name('services.detail');

// Route aliases for backward compatibility
Route::get('/practice-areas', fn() => redirect()->route('services', [], 301));
Route::get('/practice-areas/{slug}', fn($slug) => redirect()->route('services.detail', ['slug' => $slug], 301));

// Gallery & Engagements
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');

// Google Reviews & Testimonials
Route::get('/reviews', [PageController::class, 'reviews'])->name('reviews');

// Working Sectors
Route::get('/sectors', [PageController::class, 'sectors'])->name('sectors');
Route::get('/sectors/{slug}', [PageController::class, 'sectorDetail'])->name('sectors.detail');

// Legal Scholarship & Insights
Route::get('/insights', [PageController::class, 'insights'])->name('insights');
Route::get('/insights/{slug}', [PageController::class, 'insightDetail'])->name('insights.detail');

// Contact & Consultation
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])
    ->middleware('throttle:6,1')
    ->name('contact.submit');

// Regulatory & Compliance
Route::get('/disclaimer', [PageController::class, 'disclaimer'])->name('disclaimer');
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy.policy');

// SEO Utilities
Route::get('/sitemap.xml', [PageController::class, 'sitemap'])->name('sitemap');
Route::get('/robots.txt', [PageController::class, 'robots'])->name('robots');
