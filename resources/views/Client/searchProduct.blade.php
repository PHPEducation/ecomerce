@extends('master')
@section('title', 'home')
@section('content')
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="beta-products-list">
                            <h4>{{ trans('New Products') }}</h4>
                            <div class="row">
                                @foreach($searchProducts as $searchProduct)
                                <div class="col-sm-3">
                                    <div class="single-item">
                                        @if($searchProduct->promotion_price == 0)
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon sale">{{ trans('home.sale') }}</div>
                                        </div>
                                        @endif
                                        <div class="single-item-header">
                                            <a href="{{ route('chitietsanpham', $searchProduct->id ) }}">
                                                <img src="{{ asset('image/product/' .$searchProduct->image) }}" alt="" height="250px;">
                                            </a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{ $searchProduct->name }}</p>
                                            <p class="single-item-price">
                                                @if($searchProduct->promotion_price == 0)
                                                    <span class="">{{ number_format($searchProduct->price) }}</span>
                                                @else
                                                    <span class="flash-del">{{ number_format($searchProduct->price) }}</span>
                                                    <span class="flash-sale">{{ number_format($searchProduct->promotion_price) }}</span>
                                                @endif
                                             </p>
                                        </div>
                                        <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="{{ route('addToCart', $searchProduct->id) }}">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </a>
                                            <a class="beta-btn primary" href="{{ route('chitietsanpham',$searchProduct->id ) }}">{{ trans('home.details') }}
                                                <i class="fa fa-chevron-right"></i>
                                            </a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="space50">&nbsp;</div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
