<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
//get
Route::prefix("admin")->group(function () {
    Route::get('/', function () {
        return view('admin.login');
    });

    Route::get('/login', function () {
        return view('admin.login');
    })->name('login');

    // login mendatory
    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard']);
    });
    Route::get('/category', [AdminController::class, 'category']);
    Route::get('/product', [AdminController::class, 'product']);
    Route::get('/user', [AdminController::class, 'user']);
    Route::get('/password', [AdminController::class, 'password']);

    //post
    Route::post('/login', [AdminController::class, 'login']);
    Route::post('/category', [AdminController::class, 'AddCategory']);
    Route::post('/product', [AdminController::class, 'product']);
    Route::post('/user', [AdminController::class, 'user']);
    Route::post('/password', [AdminController::class, 'password']);
});
