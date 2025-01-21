<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobOpeningController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderPriceController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ResumePackageController;
use App\Http\Controllers\SettingController;

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
Route::post('/add-reviews', [HomeController::class, 'reviewStore'])->name('reviews.store.user');

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
    Route::patch('/reviews/{id}/approve', [ClientReviewController::class, 'approve'])->name('reviews.approve');

    Route::resource('orderprices', OrderPriceController::class);
    // Route::resource('/resumes', ResumeController::class);
    Route::resource('/resumes', ResumeController::class)->except(['show']);

    Route::resource('articles', ArticleController::class);

    Route::resource('/settings',  SettingController::class);
    Route::resource('jobs', JobOpeningController::class);

    Route::resource('/abouts',  AboutController::class);
    Route::resource('/packages', ResumePackageController::class);


    Route::get('/resumes/export', [ResumeController::class, 'export'])->name('resumes.export');

    // Route::get('/contacts/edit', [SettingController::class, 'edit'])->name('contacts.edit');
    // Route::put('/contacts/update', [SettingController::class, 'update'])->name('contacts.update');
});