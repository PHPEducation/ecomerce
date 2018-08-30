@extends('master')
@section('title', 'login')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">{{ trans('home.login') }}</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb">
                <a href="{{ route('trangchu') }}">{{ trans('home.home')}}</a> / <span>{{ trans('home.login') }}</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="container">
    <div id="content">
        {!! Form::open(['method' => 'POST', 'url' => route('login'), 'class' => 'beta-form-checkout']) !!}
            <div class="row">
                <div class="col-sm-3"></div>
                    @if(Session::has('flag'))
                        <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
                    @endif
                <div class="col-sm-6">
                    <h4>{{ trans('home.login') }}</h4>
                    <div class="space20">&nbsp;</div>
                    <div class="form-block">
                        {!! Form::label('email', trans('home.email'), ['class' => 'col-md-4 control-label']) !!}
                        {!! Form::text('email', '' , ['class' => 'form-control', 'name' => 'email']) !!}
                    </div>
                    <div class="form-block">
                        {!! Form::label('password', trans('home.password'), ['class' => 'col-md-4 control-label']) !!}
                        {!! Form::password('password', array('class' => 'form-control', 'name' => 'password')) !!}
                    </div>
                    <div class="form-block">
                         {!! Form::submit( trans('home.login'), ['class' => 'btn btn-primary col-md-4']) !!}
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        {!! Form::close() !!}
        <a href="{{ url('auth/facebook') }}">Facebook Login</a>
    </div>
</div>
@endsection

