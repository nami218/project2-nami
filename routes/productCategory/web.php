<?php

use App\Http\Controllers\Admin\ProductCategoryController;
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



// Admin page
Route::prefix('admin')->name('admin.')->group(function(){

    // Product category resource
    Route::resource('product-category', ProductCategoryController::class);

    //Get slug
    Route::post('product-category/slug', [ProductCategoryController::class, 'getSlug'])
    ->name('product-category.slug');



    // Product categort copy
    // Route::post('admin/product-category/copy', [ProductCategoryController::class, 'copy'])->name('product-category.copy');


});
