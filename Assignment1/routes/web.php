<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

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

Route::get('/add', [productController::class, 'add_product'])->name('add.product');

Route::post('/add', [productController::class, 'added'])->name('submit.product');

Route::get('/product', [productController::class, 'product_list'])->name('product.list');

Route::get('/product/details/{id}/{name}/{price}', [productController::class, 'productDetail'])->name('product.detail');