<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Category;
use App\Http\Requests\ProductFormRequest;
use App\Image;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::result();
        $keyword = $request->keyword;
        if ($request->has('keyword'))
        {
            $products = $products->search($keyword);
        }
        $products = $products->orderById('ASC');

        return view('admin.product.index', compact('products', 'keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        $brands = Brand::pluck('name', 'id');

        return view('admin.product.create', compact('categories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFormRequest $request)
    {
        $product = new Product();
        $filename = '';
        if ($request->hasFile('thumbnail'))
        {
            $file = $request->file('thumbnail');
            $filename = $file->getClientOriginalName();
            $dir = public_path('uploads/products/thumbnail');
            $file->move($dir, $filename);
        }

        $product->name = $request->name;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->brand_id = $request->brand_id;
        $product->size = $request->size;
        $product->status = $request->status;
        $product->description = $request->description;
        $product->thumbnail = $filename;
        $product->save();

        $categories = $request->category_id;
        foreach ($categories as $category)
        {
            $cate = Category::find($category);
            $product->categories()->attach($cate);
        }

        if ($request->hasFile('images'))
        {
            $imgs = $request->file('images');
            foreach ($imgs as $fileimg) {
                $fName = md5(date('Y-m-d H:i:s') . rand(0, 10000)) . '.' . $fileimg->getClientOriginalExtension();
                $fileimg->move(public_path('uploads/products/details'), $fName);
                $img = new Image();
                $img->link = $fName;
                $product->saveImages($img);
            }
        }

        return redirect('admin/products')->with('status', trans('home.add_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
