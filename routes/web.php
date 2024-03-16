<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/services', [ServiceController::class, 'index'])->name('service');

Route::get('/team', [TeamController::class, 'index'])->name('team');

Route::get('/faq', [FaqController::class, 'index'])->name('faq');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
