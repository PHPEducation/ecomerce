<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getlistCategory()
    {
        return view('admin.category.listCategory');
    }
    public function getaddCategory()
    {
        return view('admin.category.addCategory');
    }
    public function geteditCategory()
    {
        return view('admin.category.editCategory');
    }
}
