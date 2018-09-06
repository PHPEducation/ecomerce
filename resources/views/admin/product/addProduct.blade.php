@extends('master_admin')
@section('title', 'shop')
@section('content')
<div id="wrapper">
        <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">{{ trans('home_admin.Product') }}
                        <small>{{ trans('home_admin.Add') }}</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @if(session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    {!! Form::open(['method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group">
                            {!! Form::label(trans('home_admin.Name *')) !!}
                            {!! Form::text('Name', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('Name', '<p class="message">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label(trans('home_admin.Category_id *')) !!}
                            {!! Form::text('Category_ID', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label(trans('home_admin.Description *')) !!}
                            {!! Form::text('Description', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label(trans('home_admin.Price *')) !!}
                            {!! Form::text('Price', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('Price', '<p class="message">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label(trans('home_admin.Promotion_Price *')) !!}
                            {!! Form::text('Promotion_Price', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('Promotion_Price', '<p class="message">:message</p>') !!}
                        </div>
                       <div class="custom-file">
                            {!! Form::label(trans('home_admin.Image')) !!}
                            {!! Form::file('image', ['class' => 'custom-file-input']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label(trans('home_admin.Unit')) !!}
                            {!! Form::text('Unit', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('Unit', '<p class="message">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label(trans('home_admin.Status')) !!}
                            {!! Form::text('Status', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('Status', '<p class="message">:message</p>') !!}
                        </div>
                        {!! Form::submit('Add', ['class' => 'btn btn-default']) !!}
                        {!! Form::reset('Reset', ['class' => 'btn btn-default']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
        <!-- /#page-wrapper -->
</div>
@endsection
