@extends('master')

@section('content')
<div class="content-wrapper bg-color">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default mg-top">
                <div class="panel-heading">{!! __('login') !!}</div>

                <div class="panel-body">
                    {!! Form::open(['method' => 'POST', 'route' => 'login', 'class' => 'form-horizontal']) !!}
                        {{-- UserName --}}
                        @if (session('msg'))
                            <div class="alert alert-danger">
                                <span>{{ session('msg') }}</span>
                            </div>
                        @endif
                       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                           {!! Form::label('name', __('username'), ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('name', '' , ['class' => 'form-control', 'id' => 'name']) !!}
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{-- Password --}}
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            {!! Form::label('password', __('password'), ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password', array('class' => 'form-control', 'id' => 'password')) !!}
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{-- Remember Me --}}
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    {!! Form::checkbox('remember', '1', false) !!}
                                    {!! Form::label('', trans('remember')) !!}
                                </div>
                            </div>
                        </div>
                        {{-- Forgot --}}
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                {!! Form::submit( trans('login'), ['class' => 'btn btn-primary']) !!}
                                <a class="btn btn-link" href="{{-- {{ route('password.request') }} --}}">
                                    {!! trans('forgot') !!}
                                </a>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
