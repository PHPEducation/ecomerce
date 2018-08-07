@extends('admin.master')
@section('title', trans('home.products'))
@section('content')
    <div class="page-header">
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="{{ url('admin') }}" class="breadcrumb-item"><i class="ti-home p-r-5"></i>{{ trans('home.home') }}</a>
                <span class="breadcrumb-item">{{ trans('home.products') }}</span>
                <span class="breadcrumb-item active">{{ trans('home.product') }}</span>
            </nav>
        </div>
    </div>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <p class="text-semibold m-b-20">
        <i class="mdi mdi-plus m-r-5 text-info"></i>
        <a class="text-gray" href="{{ url('admin/products/create') }}">{{ trans('home.addnew') }}</a>
    </p>
    <div class="card">
        <div class="card-body">
            <div class="table-overflow">
                <div id="dt-opt_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="dt-opt_length">
                                <label>{{ trans('home.show') }}
                                    <select name="dt-opt_length" aria-controls="dt-opt" class="form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>{{ trans('home.line') }}
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            {!! Form::open(['method' => 'GET', 'url' => 'admin/products']) !!}
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    {!! Form::submit(trans('home.searching'), ['class' => 'btn btn-default']) !!}
                                </div>
                                {!! Form::text('keyword', $keyword, ['class' => 'form-control', 'placeholder' => trans('home.search')]) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="dt-opt" class="table table-hover table-xl dataTable no-footer" role="grid" aria-describedby="dt-opt_info">
                                <thead>
                                <tr role="row">
                                    <th>{{ trans('home.product') }}</th>
                                    <th>{{ trans('home.price') }}</th>
                                    <th>{{ trans('home.discount') }}</th>
                                    <th>{{ trans('home.category') }}</th>
                                    <th>{{ trans('home.brand') }}</th>
                                    <th>{{ trans('home.status') }}</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($products))
                                    @foreach($products as $product)
                                        <tr role="row" class="odd">
                                            <td>
                                                <div class="list-media">
                                                    <div class="list-item">
                                                        <div class="media-img">
                                                            <img src="{{ asset('uploads/products/thumbnail/' . $product->thumbnail) }} " alt="" class="avatar">
                                                        </div>
                                                        <div class="info">
                                                            <span class="title">{{ $product->name }}</span>
                                                            <span class="sub-title">ID {{ $product->id }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->discount }} %</td>
                                            <td>
                                                @foreach($product->categories as $category)
                                                    <p>{{ $category->name }}</p>
                                                @endforeach
                                            </td>
                                            <td>{{ $product->brand->name }}</td>
                                            <td>
                                                @if($product->status == 0)
                                                    <span class="badge badge-pill badge-gradient-danger">{{ trans('home.out_stock') }}</span>
                                                @else
                                                    <span class="badge badge-pill badge-gradient-success">{{ trans('home.in_stock') }}</span>
                                                @endif
                                            </td>
                                            <td class="text-center font-size-18">
                                                {!! Form::open(['method' => 'GET', 'url' => 'admin/products/' . $product->id . '/edit']) !!}
                                                    {!! Form::button('<i class="ti-pencil"></i>', ['type' => 'submit', 'class' => 'text-gray btn btn-float']) !!}
                                                {!! Form::close() !!}
                                                {!! Form::open(['method' => 'DELETE', 'url' => ['admin/products', $product->id]]) !!}
                                                    {!! Form::button('<i class="ti-trash"></i>', ['type' => 'submit', 'class' => 'text-gray btn btn-float', 'id' => 'confirm_delete']) !!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="dt-opt_info" role="status" aria-live="polite">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="dt-opt_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="dt-opt_previous">
                                        <a href="#" aria-controls="dt-opt" data-dt-idx="0" tabindex="0" class="page-link">{{ trans('home.previous') }}</a>
                                    </li>
                                    <li class="paginate_button page-item active">
                                        <a href="#" aria-controls="dt-opt" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="dt-opt" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                    </li>
                                    <li class="paginate_button page-item next" id="dt-opt_next">
                                        <a href="#" aria-controls="dt-opt" data-dt-idx="3" tabindex="0" class="page-link">{{ trans('home.next') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
