<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Product;
use App\Category;

class PageController extends Controller
{
    Public function getIndex()
    {
        $slide = Slide::all();
        $newproducts = Product::where('status', 1)->paginate(4);
        $topproducts = Product::where('promotion_price', '<>', '0')->paginate(8);
        return view('Client.home', compact('slide', 'newproducts', 'topproducts'));

    }

    Public function categorytype($type)
    {
        $typeproducts = Product::where('category_id', $type)->get();
        $catetoryfurthers = Product::where('category_id', '<>', $type)->paginate(6);
        $categorytypes = Category::all();
        return view('Client.category_type', compact('typeproducts', 'catetoryfurthers', 'categorytypes'));
    }

    public function detailproduct($id)
    {
        $product = Product::where('id', $id)->first();
        $productothers = Product::where('category_id' ,'<>', $product->id)->paginate(3);
        return view('Client.detailproduct', compact('product', 'productothers'));
    }

    public function contact()
    {
        return view('Client.contacts');
    }

    public function login()
    {
        return view('Client.login');
    }

    public function register()
    {
        return view('Client.register');
    }

    public function about()
    {
        return view('Client.about');
    }

    public function checkout()
    {
        return view('Client.checkout');
    }
    public function addToCart()
    {
        return view('Client.cart');
    }
}

