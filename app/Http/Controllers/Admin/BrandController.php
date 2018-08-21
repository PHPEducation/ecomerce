<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BrandFormRequest;
use App\Repositories\Eloquents\BrandRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $brandRepository;

    public function __construct(BrandRepository $brandRepository)
    {
        $this->brandRepository = $brandRepository;
    }

    public function index(Request $request)
    {
        $brands = $this->brandRepository->where();
        $keyword = $request->keyword;
        if ($request->has('keyword'))
        {
            $brands = $brands->search($keyword);
        }
        $brands = $brands->orderById('ASC')->paginate(config('app.paginate_brand'));

        if ($request->ajax())
        {
            return view('admin.brand.load', compact('brands', 'keyword'));
        }

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
        $this->brandRepository->create($request->all());

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
        $brand = $this->brandRepository->findOrFail($id);

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
        $this->brandRepository->update($request->all(), $id);

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
        $this->brandRepository->delete($id);

        return redirect('admin/brands')->with('success', trans('home.delete_success'));
    }
}
