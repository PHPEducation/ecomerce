@extends('master_admin')
@section('title', 'shop')
@section('content')
<div id="wrapper">
        <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">{{ trans('home_admin.User') }}
                        <small>{{ trans('home_admin.Add') }}</small>
                    </h1>
                </div>
                <div class="col-lg-7" style="padding-bottom:120px">
                    {!! Form::open(['method' => 'POST']) !!}
                        <div class="form-group">
                            {!! Form::label('Username') !!}
                            {!! Form::text('txtProduct', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Username']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Password') !!}
                            {!! Form::text('txtPass', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Password']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('RePassword') !!}
                            {!! Form::text('txtRePass', null, ['class' => 'form-control', 'placeholder' => 'Please Enter RePassword']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Email') !!}
                            {!! Form::text('txtEmail', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Status']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('User Level: ') !!}
                            {!! Form::label('Admin') !!}
                                {!! Form::checkbox('rdoLevel', '1', ['class' => 'radio-inline']) !!}
                            {!! Form::label('Member') !!}
                                {!! Form::checkbox('rdoLevel', '2', ['class' => 'radio-inline']) !!}
                        </div>
                        {!! Form::submit('User Add', ['class' => 'btn btn-default']) !!}
                        {!! Form::reset('Reset', ['class' => 'btn btn-default']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
