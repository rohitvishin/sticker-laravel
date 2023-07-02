<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\User;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/collections', [User::class, 'product_list']);
Route::get('/product_detail', [User::class, 'product_detail']);
// Route::get('/product_detail/{id}', [User::class, 'product_detail']);
