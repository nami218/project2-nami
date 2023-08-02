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

Route::prefix('admin')->name('admin.')->group(function(){
    // Product
    Route::resource('product', ProductController::class);

    Route::post('product-upload-image',[ProductController::class, 'uploadImage'])->name('product.image.upload');

    //Get slug
    Route::post('product/slug', [ProductController::class, 'getSlug'])
    ->name('product.slug');
});





