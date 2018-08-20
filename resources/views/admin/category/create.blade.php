@extends('admin.master')
@section('title', trans('home.addnew'))
@section('content')
    <div class="page-header">
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="{{ url('admin') }}" class="breadcrumb-item"><i class="ti-home p-r-5"></i>{{ trans('home.home') }}</a>
                <a class="breadcrumb-item" href="{{ url('admin/categories') }}">{{ trans('home.category') }}</a>
                <span class=" breadcrumb-item active">{{ trans('home.addnew') }}</span>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-header border bottom">
            <h4 class="card-title">{{ trans('home.addnew') }}</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="p-h-10">
                        {!! Form::open(['url' => 'admin/categories', 'class' => 'm-t-15']) !!}
                        <div class="form-group row">
                            {!! Form::label(trans('home.category'), '', ['class' => 'col-sm-4 col-form-label control-label']) !!}
                            <div class="col-sm-6">
                                {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => trans('home.category')]) !!}
                                {!! $errors->first('name', '<p class="errors_validate">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label(trans('home.parent_category'), '', ['class' => 'col-sm-4 col-form-label control-label']) !!}
                            <div class="col-sm-6">
                                {!! Form::select('parent_id', $categories, null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12">
                                <div class="text-sm-right">
                                    {!! Form::submit(trans('home.addnew'), ['class' => 'btn btn-gradient-success']) !!}
                                    <a href="{{ url('admin/categories') }}" class="btn btn-gradient-warning">{{ trans('home.cancel') }}</a>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
