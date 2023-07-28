<?php

use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Client\CartController;
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

Route::prefix('cart/')->name('cart.')->group(function(){
    Route::get('add-to-cart/{productId}/{qty?}', [CartController::class, 'addProductToCart'])
->name('add-to-cart');

Route::get('delete-product-in-cart/{productId}', [CartController::class, 'deleteProductInCart'])
->name('delete-in-cart');

Route::get('', [CartController::class, 'index'])->name('index');

Route::get('checkout', function(){
    return view('client.pages.checkout');
});


});




