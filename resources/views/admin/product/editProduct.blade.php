@extends('master_admin')
@section('content')
<div id="wrapper">
    <!-- Navigation -->

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">{{ trans('home_admin.Product') }}
                        <small>{{ $product->name }}</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @if(session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    {!! Form::model($product, ['method' => 'POST', 'routes' => 'editProduct', 'id' => $product->id, 'files' => true]) !!}
                        <div class="form-group">
                            {!! Form::label('Name') !!}
                            {!! Form::text('Name', $product->name, ['class' => 'form-control', 'placeholder' => 'Please Enter Product']) !!}
                            {!! $errors->first('Name', '<p class="message">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Category_ID') !!}
                            {!! Form::text('Category_ID', $product->category_id, ['class' => 'form-control', 'placeholder' => 'Please Enter Name']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Description') !!}
                            {!! Form::text('Description', $product->description, ['class' => 'form-control', 'placeholder' => 'Please Enter Description']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Price') !!}
                            {!! Form::text('Price', $product->price, ['class' => 'form-control', 'placeholder' => 'Please Enter Price']) !!}
                            {!! $errors->first('Price', '<p class="message">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Promotion_Price') !!}
                            {!! Form::text('Promotion_Price', $product->promotion_price, ['class' => 'form-control', 'placeholder' => 'Please Enter Promotion_Price']) !!}
                            {!! $errors->first('Promotion_Price', '<p class="message">:message</p>') !!}
                        </div>
                       <div class="custom-file">
                            {!! Form::label('Image') !!}
                            {!! Form::file('image', ['class' => 'custom-file-input']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Unit') !!}
                            {!! Form::text('Unit', $product->unit, ['class' => 'form-control', 'placeholder' => 'Please Enter Unit']) !!}
                            {!! $errors->first('Unit', '<p class="message">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Status') !!}
                            {!! Form::text('Status', $product->status, ['class' => 'form-control', 'placeholder' => 'Please Enter Status']) !!}
                            {!! $errors->first('Status', '<p class="message">:message</p>') !!}
                        </div>
                        {!! Form::submit('Edit', ['class' => 'btn btn-default']) !!}
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
