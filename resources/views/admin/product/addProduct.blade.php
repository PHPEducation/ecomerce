@extends('master_admin')
@section('title', 'shop')
@section('content')
<div id="wrapper">
        <!-- Navigation -->
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
                    {!! Form::open(['method' => 'POST']) !!}
                        <div class="form-group">
                            {!! Form::label('Name') !!}
                            {!! Form::text('txtProduct', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Product']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Discount') !!}
                            {!! Form::text('txtPass', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Discount']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Price') !!}
                            {!! Form::text('txtRePass', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Price']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Status') !!}
                            {!! Form::text('txtEmail', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Status']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Description') !!}
                            {!! Form::text('txtEmail', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Description']) !!}
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
