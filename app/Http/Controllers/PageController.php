<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    Public function getIndex()
    {
        return view('Client.home');
    }

    Public function categorytype()
    {
        return view('Client.category_type');
    }

    public function detailproduct()
    {
        return view('Client.detailproduct');
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

