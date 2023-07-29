<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

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
Route::get('/', [FrontendController::class,'index']);
Route::get('/login', [FrontendController::class,'login']);
Route::get('/register', [FrontendController::class,'register']);
Route::get('/shop', [FrontendController::class,'shop']);
Route::get('/categories', [FrontendController::class,'categories']);
Route::get('/product-details/{product_id}', [FrontendController::class,'index']);
Route::get('/category-products/{category_id}', [FrontendController::class,'index']);
Route::get('/bulk-order', [FrontendController::class,'index']);
Route::get('/blog', [FrontendController::class,'index']);
Route::get('/blog-detail/{blog_id}', [FrontendController::class,'index']);
Route::get('/faq', [FrontendController::class,'index']);

// User Routes
Route::get('/my-profile', [FrontendController::class,'profile']);
Route::get('/my-cart', [FrontendController::class,'index']);
Route::get('/my-wishlist', [FrontendController::class,'index']);
Route::get('/my-orders', [FrontendController::class,'index']);
Route::get('/checkout', [FrontendController::class,'index']);

// Comapany Static Pages Routes
Route::get('/terms-and-conditions', [FrontendController::class,'index']);
Route::get('/refund-policy', [FrontendController::class,'index']);
Route::get('/shipping-policy', [FrontendController::class,'index']);
Route::get('/privacy-policy', [FrontendController::class,'index']);
Route::get('/about-us', [FrontendController::class,'index']);
Route::get('/contact-us', [FrontendController::class,'index']);


// Accounts Routes
Route::group(['prefix' => 'accounts'], function(){  
    Route::get('/contact-us', [FrontendController::class,'index']);
});  