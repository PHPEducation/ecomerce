<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getlistProduct() {
        return view('admin.product.listProduct');
    }
    public function getaddProduct()
    {
        return view('admin.product.addProduct');
    }
    public function geteditProduct()
    {
        return view('admin.product.editProduct');
    }
}
