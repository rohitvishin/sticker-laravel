<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Basic Website Routes

Route::get('/', [FrontendController::class, 'index']);
Route::get('/home', [FrontendController::class, 'index'])->name('home');
Route::get('/login', [FrontendController::class, 'login'])->name('user.login');
Route::post('/login', [FrontendController::class, 'validateLogin'])->name('validateLogin');
Route::get('/register', [FrontendController::class, 'register'])->name('register');
Route::post('/register', [FrontendController::class, 'submitRegister'])->name('submitRegister');

Route::get('/auth/google', [FrontendController::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [FrontendController::class, 'handleGoogleCallback']);
Route::get('/shop/{category?}/{subCategory?}', [FrontendController::class, 'shop']);
Route::get('/categories', [FrontendController::class, 'categories']);
Route::get('/product-details/{product_id}', [FrontendController::class, 'index']);
Route::get('/bulk-order', [FrontendController::class, 'index']);
Route::get('/blog', [FrontendController::class, 'index']);
Route::get('/blog-detail/{blog_id}', [FrontendController::class, 'index']);
Route::get('/faq', [FrontendController::class, 'index']);
Route::get('/support', [FrontendController::class, 'index']);
Route::get('/track-order/{orderId}', [FrontendController::class, 'index']);

// User Routes
Route::group(['middleware' => 'auth'], function () {
    Route::get('/my-profile', [FrontendController::class, 'profile']);
    Route::get('/my-cart', [FrontendController::class, 'index']);
    Route::get('/my-wishlist', [FrontendController::class, 'index']);
    Route::get('/my-orders', [FrontendController::class, 'index']);
    Route::get('/checkout', [FrontendController::class, 'index']);
});

// Comapany Static Pages Routes
Route::get('/terms-and-conditions', [FrontendController::class, 'index']);
Route::get('/refund-policy', [FrontendController::class, 'index']);
Route::get('/shipping-policy', [FrontendController::class, 'index']);
Route::get('/privacy-policy', [FrontendController::class, 'index']);
Route::get('/about-us', [FrontendController::class, 'index']);
Route::get('/contact-us', [FrontendController::class, 'index']);


// Accounts Routes
Route::group(['prefix' => 'accounts'], function () {
    Route::get('/contact-us', [FrontendController::class, 'index']);
});
