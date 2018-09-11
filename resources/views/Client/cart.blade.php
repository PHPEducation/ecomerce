
@extends('master')
@section('title', 'category_tu')
@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">{{ trans('home.shoppingCart') }}</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href="{{ route('trangchu') }}">{{ trans('home.home')}}</a> / <span>{{ trans('home.shoppingCart') }}</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div id="content">
            <div class="table-responsive">
                <table class="shop_table beta-shopping-cart-table" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="product-name">{{ trans('home.Product') }}</th>
                            <th class="product-price">{{ trans ('home.Price') }}</th>
                            <th class="product-status">{{ trans ('home.Status') }}</th>
                            <th class="product-quantity">{{ trans ('home.Qty') }}</th>
                            <th class="product-subtotal">{{ trans ('home.Total1') }}</th>
                            <th class="product-remove">{{ trans ('home.Remove') }}</th>
                            <th class="product-remove">update</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(Session::has('cart'))
                         @foreach($product_carts as $product_cart)
                           {!! Form::open(['method'=>'POST','url'=>['upDateCart/'.$product_cart['item']['id']]]) !!}
                            <tr class="cart_item">
                                <td class="product-name">
                                    <div class="media">
                                        <img src="{{ asset(config('app.link') .$product_cart['item']['image'] ) }}" alt="" width="250px;" >
                                        <div class="media-body">
                                            <p class="font-large table-title"></p>
                                            <p class="table-option"></p>
                                            <p class="table-option"></p>
                                        </div>
                                    </div>
                                </td>
                                <td class="product-price">
                                   {{ $product_cart['item']['price'] }}
                                </td>
                                <td class="product-status">
                                    @if($product_cart['item']['status'] == 1 )
                                        {{ trans('home.InStock') }}
                                    @else
                                        outStock
                                    @endif
                                </td>
                                <td class="product-quantity">
                                    <input type="" name="qty" value="{{ $product_cart['qty'] }}" style="width: 20px;">

                                </td>
                                <td class="product-subtotal">
                                    <span class="amount"> {{ $product_cart['qty'] * $product_cart['item']['price'] }}</span>
                                </td>
                                <td class="product-remove">
                                    <a href="{{ route('delItemCart' ,$product_cart['item']['id']) }}" class="remove" title="Remove this item"><i class="fa fa-trash-o"></i></a>
                                </td>
                                <td>
                                    <button type="submit" class="beta-btn primary">
                                     Update Cart
                                    <i class="fa fa-chevron-right"></i>
                                    </button>
                            </td>
                            </tr>
                             {!! Form::close() !!}
                        @endforeach

                        @endif

                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6" class="actions">
                               {{--  <button type="submit" class="beta-btn primary" name="upDateCart">
                                     Update Cart
                                    <i class="fa fa-chevron-right"></i>
                                </button> --}}
                                {{-- <a class="beta-btn primary" href="{{ route('addToCart', $product_cart['item']['id']) }}">
                                      Update Cart
                                    <i class="fa fa-chevron-right"></i>
                                </a> --}}
                                <a href="{{ route('dathang') }}" class="beta-btn primary text-center">Proceed to Checkout
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                            </td>
                        </tr>
                    </tfoot>
                </table>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection
