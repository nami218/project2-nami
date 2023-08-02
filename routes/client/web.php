<?php

use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\client\AboutUsController;
use App\Http\Controllers\Client\ClientProductCategoryController;
use App\Http\Controllers\Client\ClientProductController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\HeaderController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\InstallationController;
use App\Http\Controllers\Client\NewsController;
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

// Client page
// Home
Route::get('home', [HomeController::class,'index'])->name('home');

// Gioi thieu
Route::get('gioithieu', [AboutUsController::class, 'index'])->name('gioithieu');

// San pham
Route::get('sanpham', [ClientProductController::class, 'detail'])->name('sanpham');
Route::get('cuahang', [ClientProductController::class, 'index'])->name('cuahang');

// Tin tuc
Route::get('tintuc', [NewsController::class, 'index'])->name('tintuc');
Route::get('tintuc/{slug}', [NewsController::class, 'detail'])->name('tintuc.slug');

//Cong trinh
Route::get('congtrinh', [InstallationController::class, 'index'])->name('congtrinh');
Route::get('congtrinh/{slug}', [InstallationController::class, 'detaul'])->name('congtrinh.slug');

//Lien he
Route::get('lienhe', [ContactController::class, 'index'])->name('lienhe');

// Dangky - dang nhap
Route::get('dangki', function(){
    return view('client.pages.register');
})->name('dangki');

Route::get('dangnhap', function(){
    return view('client.pages.login');
})->name('dangnhap');


Route::get('hotro', function(){
    return view('client.pages.support');
})->name('hotro');



Route::get('danhmuc/{slug}', [ClientProductCategoryController::class, 'index'])->name('danhmuc.list');


