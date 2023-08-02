<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Repositories\ProductCategoryRepository;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class InstallationController extends Controller
{
    private $productCategoryRepository;

    public function __construct(ProductCategoryRepository $productCategoryRepository)
    {
        $this->productCategoryRepository = $productCategoryRepository;
    }

    public function index(){
        $productCategories = $this->productCategoryRepository->getProductCategories();
        return view('client.pages.blogs.installation.blog', compact('productCategories'));
    }
}
