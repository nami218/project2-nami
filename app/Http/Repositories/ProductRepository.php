<?php

namespace App\Http\Repositories;

use App\Models\Product;

class ProductRepository
{
    public function getTopProducts($number = 5){
        return Product::oldest()->take($number)->get();
    }

    public function getRandomProducts($number = 5){
        return Product::inRandomOrder()->take($number)->get();
    }
}
