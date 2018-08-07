@extends('master')
@section('title', 'Create a new ticket')
@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul>
                    <li><a href="index.html" title="Go to Home Page">{{ __('home') }}</a><span>/</span></li>
                    <li><a title="women" href="shop-grid-sidebar.html">{{ __('Women') }}</a><span>/</span></li>
                    <li><strong>Clothing</strong></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="main-container col1-layout">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <article class="col-main">
                    <div class="page-title">
                        <h2>{{ __('clothing') }}</h2>
                    </div>
                    <div class="toolbar">
                        <div class="sorter">
                            <div class="view-mode">
                                <span title="Grid" class="button button-active button-grid">&nbsp;</span><a href="shop-list-sidebar.html" title="List" class="button-list">&nbsp;</a>
                            </div>
                        </div>
                        <div id="sort-by">
                            <label class="left">{{ __('Sort By:') }} </label>
                            <ul>
                                <li><a href="#">{{ __('Position') }}<span class="right-arrow"></span></a>
                                    <ul>
                                        <li><a href="#">{{ __('Name') }}</a></li>
                                        <li><a href="#">{{ __('Price') }}</a></li>
                                        <li><a href="#">{{ __('Position') }}</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <a class="button-asc left" href="#" title="Set Descending Direction"><span class="top_arrow"></span>
                            </a>
                        </div>
                        <div class="pager">
                            <div id="limiter">
                                <label>View: </label>
                                <ul>
                                    <li><a href="#">16<span class="right-arrow"></span></a>
                                        <ul>
                                            <li><a href="#">20</a></li>
                                            <li><a href="#">30</a></li>
                                            <li><a href="#">35</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="category-products">
                        <ul class="products-grid">
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info">
                                            <a class="product-image" title="Product tilte is here" href="product-detail.html">
                                                <img alt="Product tilte is here" src="images/products/product-fashion-10.jpg">
                                            </a>
                                            <div class="new-label new-top-left">{{ __('New') }}</div>
                                            <div class="sale-label sale-top-right">sale</div>
                                            <div class="mask-shop-white"></div>
                                            <div class="new-label new-top-left">{{ __('New') }}</div>
                                            <a class="quickview-btn" href="quick-view.html"><span>{{ __('quickview') }}</span></a> <a href="wishlist.html">
                                            <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                                        </a> <a href="compare.html">
                                        <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                                    </a> </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title">
                                            <a title="Product tilte is here" href="product-detail.html">Product tilte is here
                                            </a>
                                        </div>
                                        <div class="item-content">
                                            <div class="rating">
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="item-price">
                                                <div class="price-box">
                                                    <span class="regular-price"> <span class="price">$99.79</span></span>
                                                    <p class="old-price"> <span class="price-label">{{ __('Regular Price:') }}</span>
                                                        <span class="price"> $119.00 </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="actions">
                                                <div class="add_cart">
                                                    <button class="button btn-cart" type="button">
                                                        <span><i class="fa fa-shopping-cart"></i> {{ __('Add to Cart') }}</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info">
                                        <a class="product-image" title="Product tilte is here" href="product-detail.html">
                                            <img alt="Product tilte is here" src="images/products/product-fashion-2.jpg">
                                        </a>
                                        <div class="mask-shop-white"></div>
                                        <div class="new-label new-top-left">{{ __('New') }}</div>
                                        <a class="quickview-btn" href="quick-view.html"><span>{{ __('quickview') }}</span></a> <a href="wishlist.html">
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
                                        <a title="Product tilte is here" href="product-detail.html">{{ __('producttitle') }}
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o">
                                            </i> <i class="fa fa-star-o"></i> </div>
                                            <div class="item-price">
                                                <div class="price-box"> <span class="regular-price"> <span class="price">$199.60</span></span></div>
                                            </div>
                                            <div class="actions">
                                                <div class="add_cart">
                                                    <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> {{ __('Add to Cart') }}</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-3.jpg"> </a>
                                        <div class="mask-shop-white"></div>
                                        <div class="new-label new-top-left">{{ __('New') }}</div>
                                        <a class="quickview-btn" href="quick-view.html"><span>{{ __('quickview') }}</span></a> <a href="wishlist.html">
                                        <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                                    </a> <a href="compare.html">
                                    <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                                </a> </div>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                                    <div class="item-content">
                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="item-price">
                                            <div class="price-box"> <span class="regular-price"> <span class="price">$79.00</span></span>
                                                <p class="old-price"> <span class="price-label">{{ __('Regular Price:') }}</span> <span class="price"> $99.00 </span> </p>
                                            </div>
                                        </div>
                                        <div class="actions">
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> {{ __('Add to Cart') }}</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="item-inner">
                            <div class="item-img">
                                <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-4.jpg"> </a>
                                    <div class="sale-label sale-top-left">sale</div>
                                    <div class="mask-shop-white"></div>
                                    <div class="new-label new-top-left">{{ __('New') }}</div>
                                    <a class="quickview-btn" href="quick-view.html"><span>{{ __('quickview') }}</span></a> <a href="wishlist.html">
                                    <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                                </a> <a href="compare.html">
                                <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                            </a> </div>
                        </div>
                        <div class="item-info">
                            <div class="info-inner">
                                <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                                <div class="item-content">
                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                    <div class="item-price">
                                        <div class="price-box"> <span class="regular-price"> <span class="price">$55.00</span></span></div>
                                    </div>
                                    <div class="actions">
                                        <div class="add_cart">
                                            <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> {{ __('Add to Cart') }}</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <div class="item-inner">
                        <div class="item-img">
                            <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-5.jpg"> </a>
                                <div class="new-label new-top-left">{{ __('New') }}</div>
                                <div class="mask-shop-white"></div>
                                <div class="new-label new-top-left">{{ __('New') }}</div>
                                <a class="quickview-btn" href="quick-view.html"><span>{{ __('quickview') }}</span></a> <a href="wishlist.html">
                                <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                            </a> <a href="compare.html">
                            <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                        </a> </div>
                    </div>
                    <div class="item-info">
                        <div class="info-inner">
                            <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">Product tilte is here </a> </div>
                            <div class="item-content">
                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$29.99</span></span>
                                        <p class="old-price"> <span class="price-label">{{ __('Regular Price:') }}</span> <span class="price"> $49.99 </span> </p>
                                    </div>
                                </div>
                                <div class="actions">
                                    <div class="add_cart">
                                        <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> {{ __('Add to Cart') }}</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                <div class="item-inner">
                    <div class="item-img">
                        <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-20.jpg"> </a>
                            <div class="mask-shop-white"></div>
                            <div class="new-label new-top-left">{{ __('New') }}</div>
                            <a class="quickview-btn" href="quick-view.html"><span>{{ __('quickview') }}</span></a> <a href="wishlist.html">
                            <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                        </a> <a href="compare.html">
                        <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                    </a> </div>
                </div>
                <div class="item-info">
                    <div class="info-inner">
                        <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">{{ __('producttitle') }} </a> </div>
                        <div class="item-content">
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                            <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$199.60</span></span></div>
                            </div>
                            <div class="actions">
                                <div class="add_cart">
                                    <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> {{ __('Add to Cart') }}</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
            <div class="item-inner">
                <div class="item-img">
                    <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-6.jpg"> </a>
                        <div class="mask-shop-white"></div>
                        <div class="new-label new-top-left">{{ __('New') }}</div>
                        <a class="quickview-btn" href="quick-view.html"><span>{{ __('quickview') }}</span></a> <a href="wishlist.html">
                        <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                    </a> <a href="compare.html">
                    <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                </a> </div>
            </div>
            <div class="item-info">
                <div class="info-inner">
                    <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">{{ __('producttitle') }} </a> </div>
                    <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$88.99</span></span></div>
                        </div>
                        <div class="actions">
                            <div class="add_cart">
                                <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> {{ __('Add to Cart') }}</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
        <div class="item-inner">
            <div class="item-img">
                <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-7.jpg"> </a>
                    <div class="mask-shop-white"></div>
                    <div class="new-label new-top-left">{{ __('New') }}</div>
                    <a class="quickview-btn" href="quick-view.html"><span>{{ __('quickview') }}</span></a> <a href="wishlist.html">
                    <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                </a> <a href="compare.html">
                <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
            </a> </div>
        </div>
        <div class="item-info">
            <div class="info-inner">
                <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">{{ __('producttitle') }} </a> </div>
                <div class="item-content">
                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                    <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$69.00</span></span>
                            <p class="old-price"> <span class="price-label">{{ __('Regular Price:') }}</span> <span class="price"> $99.99 </span> </p>
                        </div>
                    </div>
                    <div class="actions">
                        <div class="add_cart">
                            <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> {{ __('Add to Cart') }}</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
<li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
    <div class="item-inner">
        <div class="item-img">
            <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-8.jpg"> </a>
                <div class="new-label new-top-left">{{ __('New') }}</div>
                <div class="mask-shop-white"></div>
                <div class="new-label new-top-left">{{ __('New') }}</div>
                <a class="quickview-btn" href="quick-view.html"><span>{{ __('quickview') }}</span></a> <a href="wishlist.html">
                <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
            </a> <a href="compare.html">
            <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
        </a> </div>
    </div>
    <div class="item-info">
        <div class="info-inner">
            <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">{{ __('producttitle') }} </a> </div>
            <div class="item-content">
                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                <div class="item-price">
                    <div class="price-box"> <span class="regular-price"> <span class="price">$233.00</span></span></div>
                </div>
                <div class="actions">
                    <div class="add_cart">
                        <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> {{ __('Add to Cart') }}</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</li>
<li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
    <div class="item-inner">
        <div class="item-img">
            <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-9.jpg"> </a>
                <div class="mask-shop-white"></div>
                <div class="new-label new-top-left">{{ __('New') }}</div>
                <a class="quickview-btn" href="quick-view.html"><span>{{ __('quickview') }}</span></a> <a href="wishlist.html">
                <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
            </a> <a href="compare.html">
            <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
        </a> </div>
    </div>
    <div class="item-info">
        <div class="info-inner">
            <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">{{ __('producttitle') }} </a> </div>
            <div class="item-content">
                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                <div class="item-price">
                    <div class="price-box"> <span class="regular-price"> <span class="price">$47.00</span></span></div>
                </div>
                <div class="actions">
                    <div class="add_cart">
                        <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> {{ __('Add to Cart') }}</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</li>
<li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
    <div class="item-inner">
        <div class="item-img">
            <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-10.jpg"> </a>
                <div class="mask-shop-white"></div>
                <div class="new-label new-top-left">{{ __('New') }}</div>
                <a class="quickview-btn" href="quick-view.html"><span>{{ __('quickview') }}</span></a> <a href="wishlist.html">
                <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
            </a> <a href="compare.html">
            <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
        </a> </div>
    </div>
    <div class="item-info">
        <div class="info-inner">
            <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">{{ __('producttitle') }} </a> </div>
            <div class="item-content">
                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                <div class="item-price">
                    <div class="price-box"> <span class="regular-price"> <span class="price">$55.00</span></span></div>
                </div>
                <div class="actions">
                    <div class="add_cart">
                        <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> {{ __('Add to Cart') }}</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</li>
<li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
    <div class="item-inner">
        <div class="item-img">
            <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-21.jpg"> </a>
                <div class="mask-shop-white"></div>
                <div class="new-label new-top-left">{{ __('New') }}</div>
                <a class="quickview-btn" href="quick-view.html"><span>{{ __('quickview') }}</span></a> <a href="wishlist.html">
                <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
            </a> <a href="compare.html">
            <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
        </a> </div>
    </div>
    <div class="item-info">
        <div class="info-inner">
            <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">{{ __('producttitle') }} </a> </div>
            <div class="item-content">
                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                <div class="item-price">
                    <div class="price-box"> <span class="regular-price"> <span class="price">$65.00</span></span></div>
                </div>
                <div class="actions">
                    <div class="add_cart">
                        <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> {{ __('Add to Cart') }}</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</li>
<li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
    <div class="item-inner">
        <div class="item-img">
            <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-22.jpg"> </a>
                <div class="new-label new-top-left">{{ __('New') }}</div>
                <div class="mask-shop-white"></div>
                <div class="new-label new-top-left">{{ __('New') }}</div>
                <a class="quickview-btn" href="quick-view.html"><span>{{ __('quickview') }}</span></a> <a href="wishlist.html">
                <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
            </a> <a href="compare.html">
            <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
        </a> </div>
    </div>
    <div class="item-info">
        <div class="info-inner">
            <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">{{ __('producttitle') }} </a> </div>
            <div class="item-content">
                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                <div class="item-price">
                    <div class="price-box"> <span class="regular-price"> <span class="price">$75.00</span></span></div>
                </div>
                <div class="actions">
                    <div class="add_cart">
                        <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> {{ __('Add to Cart') }}</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</li>
<li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
    <div class="item-inner">
        <div class="item-img">
            <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-23.jpg"> </a>
                <div class="mask-shop-white"></div>
                <div class="new-label new-top-left">{{ __('New') }}</div>
                <a class="quickview-btn" href="quick-view.html"><span>{{ __('quickview') }}</span></a> <a href="wishlist.html">
                <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
            </a> <a href="compare.html">
            <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
        </a> </div>
    </div>
    <div class="item-info">
        <div class="info-inner">
            <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">{{ __('producttitle') }} </a> </div>
            <div class="item-content">
                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                <div class="item-price">
                    <div class="price-box"> <span class="regular-price"> <span class="price">$85.00</span></span></div>
                </div>
                <div class="actions">
                    <div class="add_cart">
                        <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> {{ __('Add to Cart') }}</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</li>
<li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
    <div class="item-inner">
        <div class="item-img">
            <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-24.jpg"> </a>
                <div class="new-label new-top-left">{{ __('New') }}</div>
                <div class="mask-shop-white"></div>
                <div class="new-label new-top-left">{{ __('New') }}</div>
                <a class="quickview-btn" href="quick-view.html"><span>{{ __('quickview') }}</span></a> <a href="wishlist.html">
                <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
            </a> <a href="compare.html">
            <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
        </a> </div>
    </div>
    <div class="item-info">
        <div class="info-inner">
            <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">{{ __('producttitle') }} </a> </div>
            <div class="item-content">
                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                <div class="item-price">
                    <div class="price-box"> <span class="regular-price"> <span class="price">$95.00</span></span></div>
                </div>
                <div class="actions">
                    <div class="add_cart">
                        <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> {{ __('Add to Cart') }}</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</li>
<li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
    <div class="item-inner">
        <div class="item-img">
            <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="images/products/product-fashion-25.jpg"> </a>
                <div class="mask-shop-white"></div>
                <div class="new-label new-top-left">{{ __('New') }}</div>
                <a class="quickview-btn" href="quick-view.html"><span>{{ __('quickview') }}</span></a> <a href="wishlist.html">
                <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
            </a> <a href="compare.html">
            <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
        </a> </div>
    </div>
    <div class="item-info">
        <div class="info-inner">
            <div class="item-title"> <a title="Product tilte is here" href="product-detail.html">{{ __('producttitle') }} </a> </div>
            <div class="item-content">
                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                <div class="item-price">
                    <div class="price-box"> <span class="regular-price"> <span class="price">$77.00</span></span></div>
                </div>
                <div class="actions">
                    <div class="add_cart">
                        <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> {{ __('Add to Cart') }}</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</li>
</ul>
</div>
<div class="toolbar bottom">
    <div class="row">
        <div class="col-sm-6 text-left">
            <div class="pages">
                <ul class="pagination">
                    <li><a href="#">«</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 text-right">Showing 1 to 15 of 25 (2 Pages)</div>
    </div>
</div>
</article>
</div>
</div>
</div>
</div>
@endsection
