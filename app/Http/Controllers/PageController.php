<?php

namespace App\Http\Controllers;
use App\Product;
// use App\Image;
use App\Category;
use App\categoryProduct;

use DB;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public  function home(){
        return view ('home');
    }

    public  function home1() {
        // $sp = Product::with('images')->find(1)->get();
        // dd($sp);
        // $sp = Product::find(1)->image()->get();
        // dd($sp);
        // $sp = Product::find(1)->get();
        // dd($sp);
        // $category = Category::all();
        // $cate = $category->with([
        //     'products',
        //     ''
        // ]);
         $cate = Category::with('products.images')->get();
         // dd($cate);
        // $cate['a'] = $cate->products()->get();
        // dd($cate);
           
        return view('home1', compact('cate'));
    }

    public  function shop(){
        return view ('shop-grid');
    }

    public function detail(Request $req){

        $sanpham = Product::where('id', $req->id)->with('images')->first();
        $sanphamlienquan = Category::where('id',$req->id)->with('products.images')->first();
        // dd($sanphamlienquan);
        // dd($sanpham);
        // $sp = Product::find(1)->with('images')->get();
       
        // $sp = Product::findOrFail($req->id)->first();
           // dd($sp);
        // $sp = Products::find(1)→with('images')→get();
        return view('detail', compact('sanpham','sanphamlienquan'));
        
    }

    public  function shoplist(){
        return view ('shoplist');
    }

     public  function blog(){
        return view ('blog');
    }
     public  function shoppingcart(){
        return view ('cart');
    }

     public  function viewcart(){
        return view ('viewcart');
    }
    
    public  function register(){
        return view ('register');
    }
}
