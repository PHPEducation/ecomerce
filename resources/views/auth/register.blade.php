

@extends('master')
@section('title','resgiter')
@section('content')
<div class="main-container col2-right-layout">
    <div class="main container">
        <div class="container">
            <div class="row">
                <div class="page-title" style ="margin-bottom: 50px;">
                    <h2>Account Information</h2>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <aside class="col-right sidebar col-sm-3 col-xs-12">
                    <div class="block block-account">
                        <div class="block-title">My Account</div>
                        <div class="block-content">
                          <ul>
                            <li><a href="dashboard.html"><i class="fa fa-angle-right"></i> Account Dashboard</a></li>
                            <li class="current"><a href="my-account-information.html"><i class="fa fa-angle-right"></i> Account Information</a></li>
                            <li><a href="my-address.html"><i class="fa fa-angle-right"></i> Address Book</a></li>
                            <li><a href="my-order.html"><i class="fa fa-angle-right"></i> My Orders</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Billing Agreements</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Recurring Profiles</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> My Product Reviews</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> My Tags</a></li>
                            <li><a href="wishlist.html"><i class="fa fa-angle-right"></i> My Wishlist</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> My Downloadable</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Newsletter Subscriptions</a></li>
                          </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
@endsection
