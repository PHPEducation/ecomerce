<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\CategoryFormRequest;
use App\Repositories\Eloquents\CategoryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $categories = $this->categoryRepository->paginate(config('app.paginate_category'));

        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->categoryRepository->filterByParentId(0);
        $categories = $categories->pluck('name', 'id');
        $categories->prepend(trans('home.none'), 0);

        return view('admin.category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryFormRequest $request)
    {
        $this->categoryRepository->create($request->all());

        return redirect('admin/categories')->with('success', trans('home.add_success'));
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
        $category = $this->categoryRepository->findOrFail($id);
        $categories = $this->categoryRepository->filterByParentId(0);
        $categories = $categories->pluck('name', 'id');
        $categories->prepend(trans('home.none'), 0);

        return view('admin.category.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryFormRequest $request, $id)
    {
        $category = $this->categoryRepository->findOrFail($id);
        $category->name = $request->name;
        $category->parent_id = $request->parent_id;
        $category->save();

        return redirect('admin/categories')->with('success', trans('home.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count_category = $this->categoryRepository->filterByParentId($id)->count();
        if ($count_category > 0)
        {
            return back()->with('error', trans('home.error_delete_category'));
        } else
        {
            $category = $this->categoryRepository->findOrFail($id);
            $category->delete();

            return redirect('admin/categories')->with('success', trans('home.delete_success'));
        }
    }
}
