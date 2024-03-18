<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceDomainController;
use App\Http\Controllers\ServiceHostingController;
use App\Http\Controllers\ServiceWebsiteController;

// ------------- Main Website Routes ------------- //
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/services/website', [ServiceWebsiteController::class, 'index'])->name('website');
Route::get('/services/hosting', [ServiceHostingController::class, 'index'])->name('hosting');
Route::get('/services/domain', [ServiceDomainController::class, 'index'])->name('domain');
Route::post('/services/domain-check', [ServiceDomainController::class, 'checkDomain'])->name('check-domain');

Route::get('/team', [TeamController::class, 'index'])->name('team');

Route::get('/faq', [FaqController::class, 'index'])->name('faq');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
