@extends('master')
@section('title', 'home')
@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">{{ trans('home.Product') }}</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href="{{ route('trangchu') }}">{{ trans('home.home') }}</a> / <span>{{ trans('home.Product') }}</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div id="content">
            <div class="row">
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="{{ asset(config('app.link') . $product->image ) }}" alt="" >
                        </div>
                        <div class="col-sm-8">
                            <div class="single-item-body">
                                <p class="single-item-title">{{ $product->name }}</p>
                               <p class="single-item-price">
                                    @if($product->promotion_price == config('app.comparefix'))
                                        <span class="">{{ $product->price }}</span>
                                    @else
                                        <span class="flash-del">{{ $product->price }}</span>
                                        <span class="flash-sale">{{ $product->promotion_price }}</span>
                                    @endif
                                </p>
                            </div>
                            <div class="clearfix"></div>
                            <div class="space20">&nbsp;</div>
                            <div class="single-item-desc">
                                <p>{{ $product->description  }}</p>
                            </div>
                            <div class="space20">&nbsp;</div>
                            <p> {{ trans('home.soluong') }} </p>
                            <div class="single-item-options">
                                <select class="wc-select" name="size">
                                    <option value="1"></option>
                                    <option value="2"></option>
                                    <option value="3"></option>
                                    <option value="4"></option>
                                    <option value="5"></option>
                                </select>
                                <a class="add-to-cart" href="{{ route('addToCart') }}"><i class="fa fa-shopping-cart"></i></a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="space40">&nbsp;</div>
                    <div class="woocommerce-tabs">
                        <ul class="tabs">
                            <li><a href="#tab-description">{{ trans('home.description')}}</a></li>
                            <li><a href="#tab-reviews">{{ trans('home.Reviews') }}</a></li>
                        </ul>
                        <div class="panel" id="tab-description">
                            <p></p>
                            <p></p>
                        </div>
                        <div class="panel" id="tab-reviews">
                            <p>{{ trans('home.noReviews') }}</p>
                        </div>
                    </div>
                    <div class="space50">&nbsp;</div>
                    <div class="beta-products-list">
                        <h4>{{ trans('home.relatedProducts') }}</h4>
                        <div class="row">
                            @foreach($productothers as $productother)
                            <div class="col-sm-4">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="{{ route('detailproduct', $productother->id ) }}">
                                            <img src="{{ asset(config('app.link') . $productother->image) }}" alt="" class="img__fix"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{ $productother->name }}</p>
                                        <p class="single-item-price">
                                            <span>$34.55</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="{{ route('addToCart') }}"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="{{ route('detailproduct', $productother->id ) }}">{{ trans('home.details') }} <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                        </div>
                    </div>
                    <div class="row">
                        {{ $productothers->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
