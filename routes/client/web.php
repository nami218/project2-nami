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

// Client page
Route::get('home', function(){
    return view('client.pages.home');
})->name('home');

Route::get('sanpham', function(){
    return view('client.pages.products.product');
})->name('sanpham');

Route::get('cuahang', function(){
    return view('client.pages.products.store');
})->name('cuahang');

Route::get('dangki', function(){
    return view('client.pages.register');
})->name('dangki');

Route::get('dangnhap', function(){
    return view('client.pages.login');
})->name('dangnhap');

Route::get('gioithieu', function(){
    return view('client.pages.aboutus');
})->name('gioithieu');

Route::get('lienhe', function(){
    return view('client.pages.contact');
})->name('lienhe');

Route::get('hotro', function(){
    return view('client.pages.support');
})->name('hotro');

Route::get('tintuc', function(){
    return view('client.pages.blogs.blog');
})->name('tintuc');

Route::get('chitiet-tintuc', function(){
    return view('client.pages.blogs.blog_details');
})->name('tintuc_chitiet');


Route::get('congtrinh', function(){
    return view('client.pages.blogs.work');
})->name('congtrinh');

Route::get('congtrinh-chitiet', function(){
    return view('client.pages.blogs.work_details');
})->name('congtrinh_chitiet');

