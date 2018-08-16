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
        <form action="#" method="post" class="beta-form-checkout">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <h4>{{ trans('home.register') }}</h4>
                    <div class="space20">&nbsp;</div>
                    <div class="form-block">
                        {!! Form::label('email', trans('home.email'), ['class' => 'col-md-4 control-label']) !!}
                        {!! Form::text('email', '' , ['class' => 'form-control', 'id' => 'email']) !!}
                    </div>
                    <div class="form-block">
                        {!! Form::label('fullname', trans('home.fullname'), ['class' => 'col-md-4 control-label']) !!}
                        {!! Form::text('fullname', '' , ['class' => 'form-control', 'id' => 'fullname']) !!}
                    </div>
                    <div class="form-block">
                        {!! Form::label('adress', trans('home.adress'), ['class' => 'col-md-4 control-label']) !!}
                        {!! Form::text('adress', '' , ['class' => 'form-control', 'id' => 'adress']) !!}
                    </div>
                    <div class="form-block">
                        {!! Form::label('phone', trans('home.phone'), ['class' => 'col-md-4 control-label']) !!}
                        {!! Form::text('phone', '' , ['class' => 'form-control', 'id' => 'phone']) !!}
                    </div>
                    <div class="form-block">
                        {!! Form::label('password', trans('home.password'), ['class' => 'col-md-4 control-label']) !!}
                        {!! Form::text('password', '' , ['class' => 'form-control', 'id' => 'password']) !!}
                    </div>
                    <div class="form-block">
                        {!! Form::label('repassword', trans('home.repassword'), ['class' => 'col-md-4 control-label']) !!}
                        {!! Form::text('repassword', '' , ['class' => 'form-control', 'id' => 'repassword']) !!}
                    </div>
                    <div class="form-block">
                        <button type="submit" class="btn btn-primary">{{ trans('home.register')}}</button>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </form>
    </div>
</div>
@endsection
