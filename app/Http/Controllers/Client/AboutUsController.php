<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(){
        $productCategories = ProductCategory::oldest()->get()->filter(function($productCategory){
            return $productCategory->products->count() > 0;
        });

        return view('client.pages.aboutus', compact('productCategories'));
    }
}
