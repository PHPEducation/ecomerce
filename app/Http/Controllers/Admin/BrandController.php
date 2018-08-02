<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Http\Requests\BrandFormRequest;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Brand $brand)
    {
        $this->brand = $brand;
    }

    public function index(Request $request)
    {
        $brands = Brand::result();
        $keyword = $request->keyword;
        if ($request->has('keyword'))
        {
            $brands = $brands->search($keyword);
        }
        $brands = $brands->orderById('ASC');

        return view('admin.brand.index', compact('brands', 'keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandFormRequest $request)
    {
        $this->brand->create($request->all());

        return redirect('admin/brands')->with('success', trans('home.add_success'));
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
        $brand = Brand::findOrFail($id);

        return view('admin.brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BrandFormRequest $request, $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->name = $request->name;
        $brand->status = $request->status;
        $brand->save();

        return redirect('admin/brands')->with('success', trans('home.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count_product = Product::where('brand_id', $id)->count();
        if ($count_product > 0)
        {
            return back()->with('error', trans('home.error_delete_brand'));
        } else
        {
            $brand = Brand::findOrFail($id);
            $brand->delete();

            return redirect('admin/brands')->with('success', trans('home.delete_success'));
        }
    }
}
