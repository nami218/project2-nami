<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Repositories\ProductCategoryRepository;
use App\Http\Repositories\ProductRepository;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ClientProductController extends Controller
{
    private $productRepository;
    private $productCategoryRepository;

    public function __construct(ProductRepository $productRepository, ProductCategoryRepository $productCategoryRepository)
    {
        $this->productRepository = $productRepository;
        $this->productCategoryRepository = $productCategoryRepository;
    }
    // public function getProductBySlug(string $slug){
    //     $product = Product::where('slug', $slug)->first();s
    //     return view('client.pages.products.detail', compact('product'));
    // }
    public function index(){
        $products = $this->productRepository->getTopProducts();
        $productCategories = $this->productCategoryRepository->getProductCategories();
        return view('client.pages.products.list', compact('products','productCategories'));
    }

    public function detail(){
        $products = $this->productRepository->getTopProducts();
        $productCategories = $this->productCategoryRepository->getProductCategories();
        return view('client.pages.products.detail', compact('productCategories'));
    }


}
