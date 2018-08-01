@extends('admin.master')
@section('title', trans('home.categories'))
@section('content')
    <div class="page-header">
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="{{ url('admin') }}" class="breadcrumb-item"><i class="ti-home p-r-5"></i>{{ trans('home.home') }}</a>
                <span class="breadcrumb-item">{{ trans('home.products') }}</span>
                <span class="breadcrumb-item active">{{ trans('home.category') }}</span>
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
        <a class="text-gray" href="{{ url('admin/categories/create') }}">{{ trans('home.addnew') }}</a>
    </p>
    <div class="card">
        <div class="card-header border bottom">
            <h4 class="card-title">{{ trans('home.category') }}</h4>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ trans('home.category') }}</th>
                    <th scope="col">{{ trans('home.parent_category') }}</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @if(isset($categories))
                    @foreach($categories as $category)
                        <tr>
                            <th scope="row">{{ $category->id }}</th>
                            <td>{{ $category->name }}</td>
                            @if($category->parent_id == 0)
                                <td>{{ trans('home.no_parent_category') }}</td>
                            @else
                                <td>
                                    {{ $category->category->name }}
                                </td>
                            @endif
                            <td class="text-center font-size-18">
                                {!! Form::open(['method' => 'GET', 'url' => 'admin/categories/' . $category->id . '/edit']) !!}
                                <button class="text-gray">
                                    <i class="ti-pencil"></i>
                                </button>
                                {!! Form::close() !!}
                                {!! Form::open(['method' => 'DELETE', 'url' => ['admin/categories', $category->id]]) !!}
                                <button type="submit" class="text-gray" onclick="return confirm('{{ trans('home.confirm_delete') }}');">
                                    <i class="ti-trash"></i>
                                </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
