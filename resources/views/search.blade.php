@extends('master')
@section('title','shopcart')
@section('content')
<section class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="col-main">
                    <div class="jtv-featured-products">
                        <div class="slider-items-products">
                            <div id="featured-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col4 products-grid">
                                    @foreach($timkiemsanpham as $sp2)
                                    <div class="item">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="item-img-info">
                                                    <a class="product-image" title="Product tilte is here" href="">
                                                        @if(isset($sp2->images))
                                                            <img alt="Product tilte is here" src="{{ asset('images/products/' . $sp2->images) }}">
                                                        @else
                                                              <img alt="Product tilte is here" src="images/products/product-fashion-14.jpg">
                                                        @endif
                                                    </a>
                                                    <div class="new-label new-top-left">new</div>
                                                    <div class="mask-shop-white"></div>
                                                    <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                                                        <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                                                    </a>
                                                    <a href="compare.html">
                                                        <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title">
                                                        <a title="Product tilte is here" href="{{ route('sanphamchitiet', ['id' => $sp2->id]) }}">
                                                            {{ $sp2->name }}
                                                        </a>
                                                    </div>
                                                    <div class="item-content">
                                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">{{ $sp2 -> price }}</span>
                                                                </span>
                                                                <p class="old-price">
                                                                    <span class="price-label">Regular Price:</span>
                                                                    <span class="price"> $167.00 </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="add_cart">
                                                                {!! Form::open([
                                                                    'url' => route('addToCart'),
                                                                    'method' => 'POST'
                                                                ]) !!}
                                                                <button class="button btn-cart" name="addToCart" value="{{ $sp2->id }}" type="submit">
                                                                    <span><i class="fa fa-shopping-cart"></i> Add to Cart</span>
                                                                </button>
                                                                {!! Form::close() !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
