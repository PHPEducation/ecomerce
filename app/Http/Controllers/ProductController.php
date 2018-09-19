<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function getListProduct() {
        $products = Product::paginate(config('app.paginates'));

        return view('admin.product.listProduct', compact('products'));
    }

    public function getAddProduct()
    {
        return view('admin.product.addProduct');
    }

    public function postAddProduct(ProductRequest $req)
    {
        $product = new Product;
        $product->name = $req->Name;
        $product->category_id = $req->Category_ID;
        $product->description = $req->Description;
        $product->price = $req->Price;
        $product->promotion_price = $req->Promotion_Price;
        $product->unit = $req->Unit;
        $product->status = $req->Status;
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $name = $file->getClientOriginalName();
            $nameImg = str_random(config('img_name_length')) . "_". $name;
            $file->move('storage/img/products/', $nameImg);
            $product->image = $nameImg;
        }
        else {
            $product->image = "";
        }
        $product->save();

        return redirect('admin/product/addProduct')->with('message', trans('home_admin.success'));

    }

    public function getEditProduct($id)
    {
        $product = Product::find($id);

        return view('admin.product.editProduct', compact('product'));
    }

    public function postEditProduct(ProductRequest $req, $id)
    {
        try {
            $product = Product::findOrFail($id);
        } catch (ModelNotFoundException $e) {

        }
        $product->name = $req->Name;
        $product->category_id = $req->Category_ID;
        $product->description = $req->Description;
        $product->price = $req->Price;
        $product->promotion_price = $req->Promotion_Price;
        $product->unit = $req->Unit;
        $product->status = $req->Status;
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $name = $file->getClientOriginalName();
            $nameImg = str_random(config('img_name_length')) . "_". $name;
            $file->move('storage/img/products/', $nameImg);
            $product->image = $nameImg;
        }
        else {
            $product->image = "";
        }
        $product->save();

        return redirect('admin/product/editProduct/' . $id)->with('message', trans('home_admin.success'));
    }

    public function getDeleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('admin/product/listProduct')->with('message', trans('home_admin.success'));
    }
}
