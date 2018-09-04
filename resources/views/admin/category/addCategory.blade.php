@extends('master_admin')
@section('title', 'shop')
@section('content')
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">{{ trans('home_admin.Category') }}
                        <small>{{ trans('home_admin.Add') }}</small>
                    </h1>
                </div>
                <div class="col-lg-7" style="padding-bottom:120px">
                    @if(session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    {!! Form::open(['method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group">
                            {!! Form::label(trans('home_admin.Name *')) !!}
                            {!! Form::text('Name', null, ['class' => 'form-control', 'placeholder' => 'ex: news']) !!}
                            {!! $errors->first('Name', '<p class="message">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label(trans('home_admin.Description *')) !!}
                            {!! Form::text('Description', null, ['class' => 'form-control', 'placeholder' => 'ex: news']) !!}
                            {!! $errors->first('Description', '<p class="message">:message</p>') !!}
                        </div>
                        <div class="custom-file">
                            {!! Form::label(trans('home_admin.Image')) !!}
                            {!! Form::file('Image', ['class' => 'custom-file-input']) !!}
                        </div>
                        {!! Form::submit('Add', ['class' => 'btn btn-default']) !!}
                        {!! Form::reset('Reset', ['class' => 'btn btn-default']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
