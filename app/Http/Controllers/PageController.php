<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Product;
use App\Category;

class PageController extends Controller
{
    public function getIndex()
    {
        $slide = Slide::all();
        $newProducts = Product::where('status', 1)->paginate(config('app.paginates'));
        $topProducts = Product::where('promotion_price', '<>', '0')->paginate(config('app.pagination'));

        return view('Client.home', compact('slide', 'newProducts', 'topProducts'));

    }

    public function categoryType($type)
    {
        $typeProducts = Product::where('category_id', $type)->get();
        $catetoryFurthers = Product::where('category_id', '<>', $type)->paginate(config('app.paginate'));
        $categoryTypes = Category::all();

        return view('Client.category_type', compact('typeProducts', 'catetoryFurthers', 'categoryTypes'));
    }

    public function detailProduct($id)
    {
        $product = Product::where('id', $id)->first();
        $productothers = Product::where('category_id' , '<>' , $product->id)->paginate(config('app.paginate'));

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

