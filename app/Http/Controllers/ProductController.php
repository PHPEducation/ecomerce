<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\ProductRequest;
class ProductController extends Controller
{
    public function getlistProduct() {
        $products = Product::all();
        return view('admin.product.listProduct', compact('products'));
    }

    public function getaddProduct()
    {
        return view('admin.product.addProduct');
    }

    public function postaddProduct(ProductRequest $req)
    {
        $product = new Product;
        $product->name = $req->Name;
        $product->category_id = $req->Category_ID;
        $product->description = $req->Description;
        $product->price = $req->Price;
        $product->promotion_price = $req->Promotion_Price;
        $product->unit = $req->Unit;
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $format_ava = $file->getClientOriginalExtension();
            if($format_ava != 'jpg' && $format_ava != 'png' && $format_ava != 'jpeg')
            {
                return redirect('admin/product/addProduct')->with('error', 'Chon lai anh');
            }
            $name = $file->getClientOriginalName();
            $nameImg = str_random(4)."_".$name;
            $file->move('storage/img/products/', $nameImg);
            $product->image = $nameImg;
        }
        else {
            $product->image = "";
        }
        $product->save();
        return redirect('admin/product/addProduct')->with('message', 'success');

    }

    public function geteditProduct($id)
    {
        $product = Product::find($id);
        return view('admin.product.editProduct', compact('product'));
    }

    public function posteditProduct(ProductRequest $req, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $req->Name;
        $product->category_id = $req->Category_ID;
        $product->description = $req->Description;
        $product->price = $req->Price;
        $product->promotion_price = $req->Promotion_Price;
        $product->unit = $req->Unit;
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $format_ava = $file->getClientOriginalExtension();
            if($format_ava != 'jpg' && $format_ava != 'png' && $format_ava != 'jpeg')
            {
                return redirect('admin/product/editProduct')->with('error', 'Chon lai anh');
            }
            $name = $file->getClientOriginalName();
            $nameImg = str_random(4)."_".$name;
            $file->move('storage/img/products/', $nameImg);
            $product->image = $nameImg;
        }
        else {
            $product->image = "";
        }
        $product->save();
        return redirect('admin/product/editProduct/' . $id)->with('message', 'success');
    }

    public function getdeleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('admin/product/listProduct')->with('message', 'delete success');
    }
}
