<?php

namespace App\Repositories\Eloquents;

use App\Product;
use App\Repositories\Contracts\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{

    public function all()
    {
        return Product::all();
    }
}
