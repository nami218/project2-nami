<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Client\GoogleController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin page
Route::get('admin/home', [DashboardController::class, 'index'])->name('admin.home');

// Route::name('admin.')->group(function(){
//     // Product
//     Route::resource('admin/product', ProductController::class);

//     // Product category
//     Route::resource('admin/product-category', ProductCategoryController::class);

//     // Route::post('admin/product/copy', [ProductController::class, 'copy'])->name('product.copy');

//     //Get slug
//     Route::post('admin/product/slug', [ProductController::class, 'getSlug'])->name('product.slug');

// });

//Google
Route::get('google/redirect', [GoogleController::class, 'redirect'])->name('google.redirect');
Route::get('google/callback', [GoogleController::class, 'callback'])->name('google.callback');

require __DIR__.'/productCategory/web.php';
require __DIR__.'/product/web.php';
require __DIR__.'/cart/web.php';
require __DIR__.'/client/web.php';
require __DIR__.'/auth.php';
