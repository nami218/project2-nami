<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Repositories\ProductCategoryRepository;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $productCategoryRepository;

    public function __construct(ProductCategoryRepository $productCategoryRepository)
    {
        $this->productCategoryRepository = $productCategoryRepository;
    }

    public function index(){

        // Get product category
        // $productCategories = ProductCategory::oldest()->get()->filter(function($productCategory){
        //     return $productCategory->products->count() > 0;
        // });
        $productCategories = $this->productCategoryRepository->getProductCategories();
        return view('client.pages.contact', compact('productCategories'));
    }
}
