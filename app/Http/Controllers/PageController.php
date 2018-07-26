<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public  function home()
    {
        return view('home');
    }

    public  function shop()
    {
        return view('shop-grid');
    }

    public  function shoplist()
    {
        return view('shoplist');
    }

    public  function blog(){
        $posts = Post::paginate(4);

        return view('blog', compact('posts'));
    }

    public  function shoppingcart()
    {
        return view('cart');
    }

    public  function viewcart()
    {
        return view('viewcart');
    }
}
