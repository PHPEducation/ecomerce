<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\CategoryRequest;
use Excel;

class CategoryController extends Controller
{
    public function getListCategory()
    {
        $categories = Category::paginate(config('app.paginates'));

        return view('admin.category.listCategory', compact('categories'));
    }

    public function getAddCategory()
    {
        return view('admin.category.addCategory');
    }

    public function postAddCategory(CategoryRequest $req)
    {
        $category = new Category;
        $category->name = $req->Name;
        $category->description = $req->Description;

        if ($req->hasFile('Image')) {
            $file = $req->file('Image');
            $name = $file->getClientOriginalName();
            $nameImg = str_random(config('img_name_length')) . "_". $name;
            $file->move('storage/img/categories/', $nameImg);
            $category->image = $nameImg;
        }
        else {
            $category->image = "";
        }
        $category->save();

        return redirect('admin/category/addCategory')->with('message', trans('home_admin.success'));
    }

    public function getEditCategory($id)
    {
        $category = Category::find($id);

        return view('admin.category.editCategory', compact('category'));
    }

    public function postEditCategory(CategoryRequest $req, $id)
    {
        try {
            $category = Category::findOrFail($id);
        } catch (Exception $e) {

        }
        $category->name = $req->Name;
        $category->description = $req->Description;

        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $name = $file->getClientOriginalName();
            $nameImg = str_random(config('img_name_length')) . "_". $name;
            $file->move('storage/img/categories/', $nameImg);
            $category->image = $nameImg;
        }
        else {
            $category->image = "";
        }

        $category->save();

        return redirect('admin/category/editCategory/' . $id)->with('message', trans('home_admin.success'));
    }

    public function getDeleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect('admin/category/listCategory')->with('message', trans('home_admin.success'));
    }

    public function importCategory(Request $req)
    {
        if ($req->hasFile('categories')) {
            $path = $req->file('categories')->getRealPath();
            $data = \Excel::load($path)->get();

            if ($data->count()) {
                foreach ($data as $key => $value) {
                    $category_list[] = ['name' => $value->name, 'description' => $value->description, 'image' => $value->image];
                }
                if (!empty($category_list)) {
                    Category::insert($category_list);
                    \Session::flash('success', trans('home_admin.file import success'));
                }
            }
            else {
                    \Session::flash('warning', trans('home_admin.There is no file to import'));
            }
            return back()->with('message', trans('home_admin.success'));
        }
    }
}
