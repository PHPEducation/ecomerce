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
                    @if(session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    {!! Form::open(['method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group">
                            {!! Form::label(trans('home_admin.Username *')) !!}
                            {!! Form::text('Username', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Username']) !!}
                            {!! $errors->first('Username', '<p class="message">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label(trans('home_admin.Password *')) !!}
                            {!! Form::password('Password', ['class' => 'form-control', 'placeholder' => 'Please Enter Password']) !!}
                            {!! $errors->first('Password', '<p class="message">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label(trans('home_admin.RePassword *')) !!}
                            {!! Form::password('RePassword', ['class' => 'form-control', 'placeholder' => 'Please Enter RePassword']) !!}
                            {!! $errors->first('Password', '<p class="message">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label(trans('home_admin.Phone *')) !!}
                            {!! Form::text('Phone', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Phone']) !!}
                            {!! $errors->first('Phone', '<p class="message">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label(trans('home_admin.Address *')) !!}
                            {!! Form::text('Address', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Address']) !!}
                            {!! $errors->first('Address', '<p class="message">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label(trans('home_admin.Email *')) !!}
                            {!! Form::text('Email', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Email', 'type' => 'email']) !!}
                            {!! $errors->first('Email', '<p class="message">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Note') !!}
                            {!! Form::text('Note', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Note']) !!}
                            {!! $errors->first('Note', '<p class="message">:message</p>') !!}
                        </div>
                        <div class="custom-file">
                            {!! Form::label('Avatar') !!}
                            {!! Form::file('avatar', ['class' => 'custom-file-input']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('User Level: ') !!}
                            {!! Form::label('Admin') !!}
                                {!! Form::checkbox('role', '1', ['class' => 'radio-inline']) !!}
                            {!! Form::label('Member') !!}
                                {!! Form::checkbox('role', '0', ['class' => 'radio-inline']) !!}
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
