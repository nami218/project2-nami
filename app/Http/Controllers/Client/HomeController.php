<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Repositories\ProductCategoryRepository;
use App\Http\Repositories\ProductRepository;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $productRepository;
    private $productCategoryRepository;

    public function __construct(ProductRepository $productRepository, ProductCategoryRepository $productCategoryRepository)
    {
        $this->productRepository = $productRepository;
        $this->productCategoryRepository = $productCategoryRepository;
    }
    public function index(){

        // Get oldest records
        $products = $this->productRepository->getTopProducts(3);
        $topProducts = $this->productRepository->getRandomProducts(4);
        // $products = Product::oldest()->take(4))->get();

        $productCategories = $this->productCategoryRepository->getProductCategories();
        // Get product category oldest + child > 0
        // $productCategories = ProductCategory::oldest()->get()->filter(function($productCategory){
        //     return $productCategory->products->count() > 0;
        // });
        return view('client.pages.home', compact('products', 'productCategories', 'topProducts'));
    }



}
