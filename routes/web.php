<?php

use App\DataTables\Admin\UsersDataTable;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
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
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



Route::middleware(['auth', 'user.roles'])->as('admin.')->prefix('admin')->group(function () {

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/users/impersonate', [UserController::class, 'impersonate'])->name('users.impersonate');


    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/datatable/users', [UsersDataTable::class, 'index'])->name('datatable.users');

     Route::get('/users/store', [UserController::class, 'store'])->name('users.store');
     Route::get('/users/update', [UserController::class, 'update'])->name('users.update');
     Route::get('/users/toggle', [UserController::class, 'toggle'])->name('users.ban.toggle');

});
