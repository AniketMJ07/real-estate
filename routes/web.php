<?php


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;






//Landing Routes
Route::get('/', [LandingController::class, 'index'])->name('home');

Route::get('/contact', [LandingController::class, 'contact'])->name('contact');
Route::post('/contact', [LandingController::class, 'contact_store'])->name('contact.store');
Route::get('/about', [LandingController::class, 'about'])->name('about');
Route::get('/page/{slug}', [LandingController::class, 'page'])->name('page.view');

Route::get('/sitemap.xml', [LandingController::class, 'sitemap'])->name('sitemap');
Route::get('/robots.txt', [LandingController::class, 'robots'])->name('robots');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.store');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/forgot-password', [PasswordResetController::class, 'forget_index'])->name('forgot-password');
Route::post('/forgot-password', [PasswordResetController::class, 'forget_store'])->name('forgot-password.store');
Route::get('/forgot-password/success', [PasswordResetController::class, 'forget_success'])->name('forgot-password.success');
Route::get('/reset-password', [PasswordResetController::class, 'reset_index'])->name('reset-password');
Route::post('/reset-password', [PasswordResetController::class, 'reset_store'])->name('reset-password.store');
Route::get('/verify-email', [RegisterController::class, 'verify_email'])->name('verify-email');


Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


