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


Route::group(['prefix' => 'kook'], function () {

    Route::get('/', [TestViewController::class, 'home2']);
    Route::get('/home', [TestViewController::class, 'home2']);

    //product
    Route::group(['prefix' => 'product'], function () {

        Route::get('/', [ProductController::class, 'product']);
        Route::post('add', [ProductController::class, 'add_product']);
        Route::get('edit/{id}', [ProductController::class, 'edit_product']);
        Route::post('update/{id}', [ProductController::class, 'update_product']);
    
        Route::get('get/{id}', [ProductController::class, 'get_product']);
        Route::get('delete/{id}', [ProductController::class, 'delete_product']);
    
    });


    // costomer
    Route::group(['prefix' => 'customer'], function () {

        Route::get('/', [CustomerController::class, 'customer']);
        Route::post('/add', [CustomerController::class, 'add_customer']);
        Route::get('/edit/{id}', [CustomerController::class, 'edit_customer']);
        Route::post('/update/{id}', [CustomerController::class, 'update_customer']);
        Route::get('/get/{id}', [CustomerController::class, 'get_customer']);
        Route::get('/delete/{id}', [CustomerController::class, 'delete_customer']);
        Route::get('/listall', [CustomerController::class, 'listData']);
        
    });

});
