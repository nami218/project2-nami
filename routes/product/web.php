<?php

use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::name('admin.')->group(function(){
    // Product
    Route::resource('admin/product', ProductController::class);

    // Product category
    Route::resource('admin/product-category', ProductCategoryController::class);

    Route::post('admin/product/copy', [ProductController::class, 'copy'])->name('product.copy');

    //Get slug
    Route::post('admin/product/slug', [ProductController::class, 'getSlug'])->name('product.slug');

});




