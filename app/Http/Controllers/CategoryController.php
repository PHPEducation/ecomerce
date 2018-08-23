<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\CategoryRequest;
class CategoryController extends Controller
{
    public function getlistCategory()
    {
        $categories = Category::all();
        return view('admin.category.listCategory', compact('categories'));
    }

    public function getaddCategory()
    {
        return view('admin.category.addCategory');
    }

    public function postaddCategory(CategoryRequest $req)
    {
        $category = new Category;
        $category->name = $req->Name;
        $category->description = $req->Description;

        if ($req->hasFile('Image')) {
            $file = $req->file('Image');
            $format_img = $file->getClientOriginalExtension();
            if($format_img != 'jpg' && $format_img != 'png' && $format_img != 'jpeg')
            {
                return redirect('admin/category/addCategory')->with('error', 'Chon lai anh');
            }
            $name = $file->getClientOriginalName();
            $nameImg = str_random(4) . "_". $name;
            $file->move('storage/img/categories/', $nameImg);
            $category->image = $nameImg;
        }
        else {
            $category->image = "";
        }

        $category->save();
        return redirect('admin/category/addCategory')->with('message', 'success');
    }

    public function geteditCategory($id)
    {
        $category = Category::find($id);
        return view('admin.category.editCategory', compact('category'));
    }

    public function posteditCategory(CategoryRequest $req, $id)
    {
        $category = Category::findOrFail($id);
        $category->name = $req->Name;
        $category->description = $req->Description;

        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $format_img = $file->getClientOriginalExtension();
            if($format_img != 'jpg' && $format_img != 'png' && $format_img != 'jpeg')
            {
                return redirect('admin/category/editCategory')->with('error', 'Chon lai anh');
            }
            $name = $file->getClientOriginalName();
            $nameImg = str_random(4) . "_". $name;
            $file->move('storage/img/categories/', $nameImg);
            $category->image = $nameImg;
        }
        else {
            $category->image = "";
        }

        $category->save();
        return redirect('admin/category/editCategory/' . $id)->with('message', 'success');
    }

    public function getdeleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('admin/category/listCategory')->with('message', 'delete success');
    }
}
