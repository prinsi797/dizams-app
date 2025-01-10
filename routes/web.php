<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// fontend



Route::get('/', action: [HomeController::class, 'index']);
Route::get('contact',[HomeController::class,'contact'])->name('contact');
Route::post('/contact/send', [HomeController::class, 'send'])->name('contact.send');
Route::post('/subscribe', [HomeController::class, 'subscribeStore'])->name('subscribe.store');
Route::post('/unsubscribe', [HomeController::class, 'unsubscribeStore'])->name('unsubscribe.store');
Route::post('/submit-resume', [HomeController::class, 'resumeStore'])->name('resume.store');

Route::get('/admin', function () {
    return view(view: 'welcome');
});

// Registration
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard & User
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class);

    Route::resource('reviews', ClientReviewController::class);
});
