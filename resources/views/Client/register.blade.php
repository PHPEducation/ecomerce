@extends('master')
@section('title', 'category_tu')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">{{ trans('home.register') }}</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb">
                <a href="{{ route('trangchu') }}">{{ trans('home.home')}}</a> / <span>{{ trans('home.register') }}</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="container">
    <div id="content">
        {!! Form::open(['method' => 'POST','class' => 'beta-form-checkout']) !!}
            <div class="row">
                <div class="col-sm-3"></div>
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                        {{$err}}
                        @endforeach
                    </div>
                @endif
                @if(Session::has('thanhcong'))
                    <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                @endif
                <div class="col-sm-6">
                    <h4>{{ trans('home.register') }}</h4>
                    <div class="space20">&nbsp;</div>
                    <div class="form-block">
                        {!! Form::label('email', trans('home.email'), ['class' => 'col-md-4 control-label']) !!}
                        {!! Form::text('email', '' , ['class' => 'form-control', 'name' => 'email']) !!}
                    </div>
                    <div class="form-block">
                        {!! Form::label('fullname', trans('home.fullname'), ['class' => 'col-md-4 control-label']) !!}
                        {!! Form::text('fullname', '' , ['class' => 'form-control', 'name' => 'fullname']) !!}
                    </div>
                    <div class="form-block">
                        {!! Form::label('adress', trans('home.adress'), ['class' => 'col-md-4 control-label']) !!}
                        {!! Form::text('adress', '' , ['class' => 'form-control', 'name' => 'address']) !!}
                    </div>
                    <div class="form-block">
                        {!! Form::label('phone', trans('home.phone'), ['class' => 'col-md-4 control-label']) !!}
                        {!! Form::text('phone', '' , ['class' => 'form-control', 'name' => 'phone']) !!}
                    </div>
                    <div class="form-block">
                        {!! Form::label('password', trans('home.password'), ['class' => 'col-md-4 control-label']) !!}
                        {!! Form::password('password', ['class' => 'form-control', 'name' => 'password']) !!}
                    </div>
                    <div class="form-block">
                        {!! Form::label('repassword', trans('home.repassword'), ['class' => 'col-md-4 control-label']) !!}
                        {!! Form::password('repassword', ['class' => 'form-control', 'name' => 'repassword']) !!}
                    </div>
                    <div class="form-block">
                        <button type="submit" class="btn btn-primary">{{ trans('home.register')}}</button>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection
