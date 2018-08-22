@extends('admin.master')
@section('title', trans('home.products'))
@section('content')
    <div class="page-header">
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="{{ url('admin') }}" class="breadcrumb-item"><i class="ti-home p-r-5"></i>{{ trans('home.home') }}</a>
                <a class="breadcrumb-item" href="{{ url('admin/products') }}">{{ trans('home.product') }}</a>
                <span class=" breadcrumb-item active">{{ trans('home.edit') }}</span>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-header border bottom">
            <h4 class="card-title">{{ trans('home.edit') }} {{ $product->name }}</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-8">
                    {!! Form::model($product, ['method' => 'PATCH', 'url' => ['admin/products', $product->id], 'files' => true, 'id' => 'form-validation', 'novalidate' => 'novalidate', 'role' => 'form']) !!}
                    <div class="form-group row">
                        {!! Form::label(trans('home.product'), null, ['class' => 'col-sm-4 col-form-label control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => trans('home.product')]) !!}
                            {!! $errors->first('name', '<p class="errors_validate">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label(trans('home.price'), null, ['class' => 'col-sm-4 col-form-label control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => trans('home.price')]) !!}
                            {!! $errors->first('price', '<p class="errors_validate">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label(trans('home.discount'), null, ['class' => 'col-sm-4 col-form-label control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::text('discount', null, ['class' => 'form-control', 'placeholder' => trans('home.discount')]) !!}
                            {!! $errors->first('discount', '<p class="errors_validate">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label(trans('home.category'), '', ['class' => 'col-sm-4 col-form-label control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label(trans('home.brand'), null, ['class' => 'col-sm-4 col-form-label control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::select('brand_id', $brands, null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label(trans('home.size'), null,['class' => 'col-sm-4 col-form-label control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::text('size', null, ['class' => 'form-control', 'placeholder' => trans('home.size')]) !!}
                            {!! $errors->first('size', '<p class="errors_validate">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label(trans('home.thumbnail'), null, ['class' => 'col-sm-4 col-form-label control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::file('thumbnail', ['class' => 'form-control', 'id' => 'thumbnail-edit']) !!}
                            {!! $errors->first('thumbnail', '<p class="errors_validate">:message</p>') !!}
                            <img src="{{ asset('uploads/products/thumbnail/' . $product->thumbnail) }}" alt="" style="width: 200px; height: 200px;" id="thumnail-edit-show">
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label(trans('home.image_description'), null, ['class' => 'col-sm-4 col-form-label control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::file('images[]', ['class' => 'form-control', 'multiple' => 'multiple']) !!}
                            @foreach($product->images as $image)
                                <img src="{{ asset('uploads/products/details/' . $image->link) }}" alt="" style="width: 100px; height: 100px;">
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label(trans('home.status'), null, ['class' => 'col-sm-4 col-form-label control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::select('status', [0 => trans('home.hidden'), 1 => trans('home.show')], null, ['class' => 'form-control']) !!}
                            {!! $errors->first('status', '<p class="errors_validate">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label(trans('home.description'), null, ['class' => 'col-sm-4 col-form-label control-label']) !!}
                        <div class="col-sm-8">
                            {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 3, 'placeholder' => trans('home.description')]) !!}
                            {!! $errors->first('description', '<p class="errors_validate">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <div class="text-sm-right">
                                {!! Form::submit(trans('home.edit'), ['class' => 'btn btn-gradient-success']) !!}
                                <a href="{{ url('admin/products') }}" class="btn btn-gradient-warning">{{ trans('home.cancel') }}</a>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
