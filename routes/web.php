<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\TestViewController;

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

Route::get('/kook/product', [TestViewController::class, 'product']);
Route::get('/kook/product/edit/{id}', [TestViewController::class, 'edit_product']);
Route::post('/product/add', [TestViewController::class, 'add_product']);


//Route::get('/kook/about', [HomeController::class, 'about']);
//Route::get('/kook/contact', [HomeController::class, 'contact']);


// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [HomeController::class, 'about']);
// Route::get('/hello', [HomeController::class, 'index2']);
// Route::get('/admin', [AdminController::class, 'index']);
