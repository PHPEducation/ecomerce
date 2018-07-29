@extends('master')
@section('content')
<div class="main-container col2-right-layout">
    <div class="main container">
        <div class="container">
            <div class="row">
                <div class="page-title">
                    <h2>{!! __('Account Information') !!}</h2>
                </div>
                <div class="col-md-9 justify-content-center">
                    <div class="card">
                        <div class="card-body">
                            {!! Form::open(['method' => 'POST', 'route' => 'register', 'class' => 'formregister']) !!}
                                <div class="form-group row {{ $errors->has('name') ? ' has-error' : '' }}">
                                    <div class="col-md-2">
                                        {!! Form::label('name', __('name')) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::text('name','',['class' => 'awesome']) !!}
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row {{ $errors->has('email') ? ' has-error' : '' }} ">
                                   <div class="col-md-2">
                                        {!! Form::label('email',__('email')) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::email('email','',['class' => 'awesome']) !!}
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row {{ $errors->has('phone') ? ' has-error' : '' }}">
                                    <div class="col-md-2">
                                        {!! Form::label('phone', __('phone')) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::text('phone','',['class' => 'awesome']) !!}
                                        @if ($errors->has('phone'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row {{ $errors->has('address') ? ' has-error' : '' }}">
                                    <div class="col-md-2">
                                        {!! Form::label('address',__('address')) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::text('address','',['class' => 'awesome']) !!}
                                        @if ($errors->has('address'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row {{ $errors->has('email') ? ' has-error' : '' }} ">
                                    <div class="col-md-2">
                                        {!! Form::label('password',__('password')) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::password('password', ['class' => 'awesome']) !!}
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        {!! Form::label('confirm Password',__('confirm Password')) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::password('password', ['class' => 'awesome']) !!}
                                    </div>
                                </div>
                                <div class="form-group row mb-6">
                                    <div class="col-md-12 offset-md-6">
                                        {!! Form::submit('Register',['class' =>'formsub']) !!}
                                    </div>
                                </div>
                            {!! Form::close() !!}
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
