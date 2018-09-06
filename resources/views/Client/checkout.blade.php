@extends('master')
@section('title', 'dathang')
@section('content')
<div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">{{ trans('home.addToCart') }}</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb">
                    <a href="index.html">{{ trans('home.home') }}</a> / <span>{{ trans('home.addToCart') }}</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
</div>
<div class="container">
    <div id="content">
        {!! Form::open(['method' => 'POST','class' => 'beta-form-checkout']) !!}
            <div class="row">
                <div class="col-sm-6">
                    @if (Auth::check())
                        <h4>{{ trans('home.addToCart') }}</h4>
                        <div class="space20">&nbsp;</div>
                        <div class="form-block">
                            {!! Form::label('name', trans('home.name'), ['class' => 'col-md-4 control-label']) !!}
                            {!! Form::text('name', Auth::user()->name , ['class' => 'form-control', 'id' => 'name', 'name' => 'name']) !!}
                        </div>
                        <div class="form-block">
                            {!! Form::label('email', trans('home.lbEmail'), ['class' => 'col-md-4 control-label']) !!}
                            {!! Form::text('email', Auth::user()->email , ['class' => 'form-control', 'id' => 'email' , 'name' => 'email']) !!}
                        </div>
                        <div class="form-block">
                            {!! Form::label('address', trans('home.lbaddress'), ['class' => 'col-md-4 control-label']) !!}
                           {!! Form::text('address',  Auth::user()->address , ['class' => 'form-control', 'id' => 'address', 'name' => 'address']) !!}
                        </div>
                        <div class="form-block">
                            {!! Form::label('phone', trans('home.lbphone'), ['class' => 'col-md-4 control-label']) !!}
                            {!! Form::text('phone', Auth::user()->phone , ['class' => 'form-control', 'id' => 'phone' , 'name' => 'phone']) !!}
                        </div>
                        <div class="form-block">
                             {!! Form::label('phone', trans('home.note'), ['class' => 'col-md-4 control-label']) !!}
                            <textarea id="note" name ="note"></textarea>
                            @if ($errors->has('note'))
                                    <div class="help-block" style ="padding-left: 200px;">
                                        <strong style ="color:red;">{{ $errors->first('note') }}</strong>
                                    </div>
                            @endif
                        </div>
                    @endif
                </div>
                <div class="col-sm-6">
                    <div class="your-order">
                        <div class="your-order-head"><h5>{{ trans('home.lborder')}}</h5></div>
                        @if(Session::has('cart'))
                        <div class="your-order-body" style="padding: 0px 10px">
                            @foreach($product_carts as $product_cart)
                                <div class="your-order-item">
                                    <div class="media">
                                        <img width="25%" src="{{ asset(config('app.link') .$product_cart['item']['image'] ) }}" alt="" class="pull-left">
                                        <div class="media-body">
                                            <p class="font-large"></p>
                                            <h6 class="color-gray your-order-info" style="font-size:18px; font-weight:bold;">{{ $product_cart['item']['name'] }}</h6>
                                            <span class="color-gray your-order-info" style ="font-size:16px;">{{ $product_cart['qty'] }}</span>
                                            <span class="color-gray your-order-info" style ="font-size:16px;">{{ number_format($product_cart['item']['price']) }}</span>
                                        </div>
                                    </div>
                                </div>
                             @endforeach
                                <div class="clearfix"></div>
                            </div>
                            @endif
                            <div class="your-order-item">
                                <div class="pull-left"><p class="your-order-f18">{{ trans('home.total') }}:</p></div>
                                <div class="pull-right"><h5 class="color-black">{{ number_format(Session('cart')->totalPrice) }}</h5></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="your-order-head"><h5>{{ trans('home.lbthanhtoan')}}</h5></div>
                        <div class="your-order-body">
                            <ul class="payment_methods methods">
                                <li class="payment_method_bacs">
                                    <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="COD" checked="checked" data-order_button_text="">
                                    <label for="payment_method_bacs">{{ trans('home.payment') }}</label>
                                    <div class="payment_box payment_method_bacs" style="display: block;">
                                        {{ trans('home.paymentifo') }}
                                    </div>
                                </li>
                                <li class="payment_method_cheque">
                                    <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="ATM" data-order_button_text="">
                                    <label for="payment_method_cheque">{{ trans('home.Chuyenkhoan')}} </label>
                                    <div class="payment_box payment_method_cheque" style="display: none;">
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="text-center"><button class="beta-btn primary" href="#" type="submit">{{ trans('home.addToCart') }} <i class="fa fa-chevron-right"></i></button></div>
                    </div>
                </div>
            </div>
         {!! Form::close() !!}
    </div>
</div>
@endsection
