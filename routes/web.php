<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderPriceController;
use App\Http\Controllers\RatingController;

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



Route::get('/', action: [HomeController::class, 'index'])->name('home');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/resume', [HomeController::class, 'resume'])->name('resume');
Route::get('/abouts', [HomeController::class, 'about'])->name('about');
Route::post('/contact/send', [HomeController::class, 'send'])->name('contact.send');
Route::post('/subscribe/store', [HomeController::class, 'subscribeStore'])->name('subscribe.store');
Route::post('/submit-resume', [HomeController::class, 'resumeStore'])->name('resume.store');
Route::get('/job-openings', [HomeController::class, 'jobsOpening'])->name('jobs.opening');
// Route::post('/api/submit-order', [OrderController::class, 'orderStore'])->name('submit.order');

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
    // Route::resource('ratings', RatingController::class);
    Route::get('/ratings/{rating}/edit', [RatingController::class, 'edit'])->name('ratings.edit'); // Edit route
    Route::put('/ratings/{rating}', [RatingController::class, 'update'])->name('ratings.update');

    Route::resource('orderprices', OrderPriceController::class);
    // Route::get('/orderPrice/{orderPrice}/edit', [OrderPriceController::class, 'OrderPriceedit'])->name('price.edit'); // Edit route
    // Route::put('/orderPrice/{orderPrice}', [OrderPriceController::class, 'OrderPriceUpdate'])->name('price.update');


    Route::resource('articles', ArticleController::class);
});
