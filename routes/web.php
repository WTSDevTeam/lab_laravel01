<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\TestViewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;

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

Route::get('/', [TestViewController::class, 'about']);

Route::get('/contact', [TestViewController::class, 'contact']);
Route::post('/getdata', [TestViewController::class, 'getdata']);

Route::get('/about', [TestViewController::class, 'about']);

Route::get('/kook/home', [TestViewController::class, 'home2']);

Route::get('/kook/product', [ProductController::class, 'product']);
Route::post('/product/add', [ProductController::class, 'add_product']);
Route::get('/kook/product/edit/{id}', [ProductController::class, 'edit_product']);
Route::post('/kook/product/update/{id}', [ProductController::class, 'update_product']);

Route::get('/kook/product/get/{id}', [ProductController::class, 'get_product']);
Route::get('/kook/product/delete/{id}', [ProductController::class, 'delete_product']);

// costomer
Route::get('/kook/customer', [CustomerController::class, 'customer']);
Route::post('/customer/add', [CustomerController::class, 'add_customer']);
Route::get('/kook/customer/edit/{id}', [CustomerController::class, 'edit_customer']);
Route::post('/kook/customer/update/{id}', [CustomerController::class, 'update_customer']);
Route::get('/kook/customer/get/{id}', [CustomerController::class, 'get_customer']);
Route::get('/kook/customer/delete/{id}', [CustomerController::class, 'delete_customer']);
//

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [HomeController::class, 'about']);
// Route::get('/hello', [HomeController::class, 'index2']);
// Route::get('/admin', [AdminController::class, 'index']);
