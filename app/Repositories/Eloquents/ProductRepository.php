<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 8/18/2018
 * Time: 7:11 AM
 */

namespace App\Repositories\Eloquents;


use App\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{

    public function all()
    {
        return Product::all();
    }
}
