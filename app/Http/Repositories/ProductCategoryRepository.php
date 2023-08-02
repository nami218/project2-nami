<?php

namespace App\Http\Repositories;

use App\Models\ProductCategory;

class ProductCategoryRepository
{
    public function getProductCategories(){
        return ProductCategory::oldest()->get();
    }
}
