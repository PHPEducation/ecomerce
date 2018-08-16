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
                    <h4>{{ trans('home.addToCart') }}</h4>
                    <div class="space20">&nbsp;</div>
                    <div class="form-block">
                        {!! Form::label('name', trans('home.name'), ['class' => 'col-md-4 control-label']) !!}
                        {!! Form::text('name', '' , ['class' => 'form-control', 'id' => 'name']) !!}
                    </div>
                    <div class="form-block">
                        {!! Form::label('render', trans('home.render'), ['class' => 'col-md-4 control-label']) !!}

                        {!! Form::radio('gender', 'nam' , ['class' => 'input-radio']) !!}
                        <span style="margin-right: 10%">{{ trans('home.nam') }}</span>

                        {!! Form::radio('gender', 'nu' , ['class' => 'input-radio']) !!}
                        <span>{{ trans('home.nu') }}</span>
                    </div>
                    <div class="form-block">
                        {!! Form::label('email', trans('home.lbEmail'), ['class' => 'col-md-4 control-label']) !!}
                        {!! Form::text('email', '' , ['class' => 'form-control', 'id' => 'email']) !!}
                    </div>
                    <div class="form-block">
                        {!! Form::label('address', trans('home.lbaddress'), ['class' => 'col-md-4 control-label']) !!}
                       {!! Form::text('address', '' , ['class' => 'form-control', 'id' => 'address']) !!}
                    </div>
                    <div class="form-block">
                        {!! Form::label('phone', trans('home.lbphone'), ['class' => 'col-md-4 control-label']) !!}
                        {!! Form::text('phone', '' , ['class' => 'form-control', 'id' => 'phone']) !!}
                    </div>
                    <div class="form-block">
                         {!! Form::label('phone', trans('home.note'), ['class' => 'col-md-4 control-label']) !!}
                        <textarea id="notes"></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="your-order">
                        <div class="your-order-head"><h5>{{ trans('home.lborder')}}</h5></div>
                        <div class="your-order-body" style="padding: 0px 10px">
                            <div class="your-order-item">
                                <div>
                                <!--  one item   -->
                                    <div class="media">
                                        <img width="25%" src="assets/dest/images/shoping1.jpg" alt="" class="pull-left">
                                        <div class="media-body">
                                            <p class="font-large"></p>
                                            <span class="color-gray your-order-info"></span>
                                            <span class="color-gray your-order-info">S</span>
                                            <span class="color-gray your-order-info"></span>
                                        </div>
                                    </div>
                                <!-- end one item -->
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="your-order-item">
                                <div class="pull-left"><p class="your-order-f18">{{ trans('home.total') }}:</p></div>
                                <div class="pull-right"><h5 class="color-black">$235.00</h5></div>
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

                        <div class="text-center"><a class="beta-btn primary" href="#">{{ trans('home.addToCart') }} <i class="fa fa-chevron-right"></i></a></div>
                    </div>
                </div>
            </div>
         {!! Form::close() !!}
    </div>
</div>
@endsection
