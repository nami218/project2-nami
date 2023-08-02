<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Client\HeaderController;
use App\Http\Repositories\ProductCategoryRepository;

class ClientProductCategoryController extends Controller
{
    private $productCategoryRepository;

    public function __construct(ProductCategoryRepository $productCategoryRepository)
    {
        $this->productCategoryRepository = $productCategoryRepository;
    }
    public function index(Request $request){

        $productCategories = $this->productCategoryRepository->getProductCategories();

        $slug = $request->slug;
        $productCategory = ProductCategory::where('slug', $slug)->get();

        $listProduct = Product::where('product_category_id', $productCategory[0]->id)->get();
        return view('client.pages.productCategories.list', compact('listProduct', 'productCategories'));
    }
}
