<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Category;
use App\Http\Requests\ProductFormRequest;
use App\Image;
use App\Product;
use App\Repositories\Eloquents\BrandRepository;
use App\Repositories\Eloquents\CategoryRepository;
use App\Repositories\Eloquents\ProductRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $productRepository;
    protected $categoryRepository;
    protected $brandRepository;

    public function __construct(ProductRepository $productRepository, CategoryRepository $categoryRepository, BrandRepository $brandRepository)
    {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->brandRepository = $brandRepository;
    }

    public function index(Request $request)
    {
        $products = $this->productRepository->where();
        $keyword = $request->keyword;
        if ($request->has('keyword'))
        {
            $products = $products->search($keyword);
        }
        $products = $products->orderById('ASC')->paginate(config('app.paginate_product'));

        if ($request->ajax())
        {
            return view('admin.product.load', compact('products', 'keyword'));
        }

        return view('admin.product.index', compact('products', 'keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->categoryRepository->where('parent_id', '>', 0);
        $categories = $categories->pluck('name', 'id');
        $brands = $this->brandRepository->pluck('name', 'id');

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
        $product->category_id = $request->category_id;
        $product->thumbnail = $filename;
        $product->save();

        if ($request->hasFile('images'))
        {
            $imgs = $request->file('images');
            foreach ($imgs as $fileimg) {
                $fName = md5(date('Y-m-d H:i:s') . rand(0, 10000)) . '.' . $fileimg->getClientOriginalExtension();
                $fileimg->move(public_path('uploads/products/details'), $fName);
                $img = new Image();
                $img->link = $fName;
                $product->images()->save($img);
            }
        }

        return redirect('admin/products')->with('success', trans('home.add_success'));
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
        $product = $this->productRepository->findOrFail($id);
        $categories = $this->categoryRepository->where('parent_id', '>', 0);
        $categories = $categories->pluck('name', 'id');
        $brands = $this->brandRepository->pluck('name', 'id');

        return view('admin.product.edit', compact('product', 'categories', 'brands', 'selectedCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductFormRequest $request, $id)
    {
        $product = $this->productRepository->findOrFail($id);
        if ($request->hasFile('thumbnail'))
        {
            $file = $request->file('thumbnail');
            $filename = $file->getClientOriginalName();
            $dir = public_path('uploads/products/thumbnail');
            $file->move($dir, $filename);
            $product->thumbnail = $filename;
        }
        $product->name = $request->name;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->brand_id = $request->brand_id;
        $product->size = $request->size;
        $product->status = $request->status;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->save();

        return redirect('admin/products')->with('success', trans('home.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->productRepository->delete($id);

        return redirect('admin/products')->with('success', trans('home.delete_success'));
    }
}
