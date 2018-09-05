@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                <div class="card-body">
                    {!! Form::open(['method' => 'POST', 'route' => 'register']) !!}
                        <div class="form-group row">
                            {!! Form::label('name', __('Name'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::text('name', '', ['class' => 'form-control ' . ($errors->has('name') ? 'is-invalid' : '')]) !!}
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('email', __('E-Mail Address'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::text('email', old('email'), ['class' => 'form-control ' . ($errors->has('email') ? 'is-invalid' : '')]) !!}
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password', __('Password'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password', ['class' => 'form-control ' . ($errors->has('password') ? 'is-invalid' : '')]) !!}
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password-confirm', __('Confirm Password'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password_confirmation', ['class' => 'form-control ' . ($errors->has('email') ? 'is-invalid' : '')]) !!}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                                {!! Form::button(__('Register'), ['type' => 'submit', 'class' => 'btn btn-primary col-md-6 offset-md-4']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
