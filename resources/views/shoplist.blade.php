@extends('master')
@section('title','shoplist')
@section('content')
 <div id="page">
	<div class="breadcrumbs">
	    <div class="container">
	      <div class="row">
	        <div class="col-xs-12">
	          <ul>
	            <li><a href="index.html" title="Go to Home Page">{{ __('home') }}</a><span>/</span></li>
	            <li><a title="women" href="shop-grid-sidebar.html">{{ __('Women') }}</a><span>/</span></li>
	            <li><strong>{{ __('Clothing') }}</strong></li>
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
	              <h2>{{ __('Clothing') }}</h2>
	            </div>
	            <div class="toolbar">
	              <div class="sorter">
	                <div class="view-mode"> <a class="button-grid" title="Grid" href="shop-grid-sidebar.html">&nbsp;</a><span class="button-active button-list" title="List">&nbsp;</span></div>
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
	                <a class="button-asc left" href="#" title="Set Descending Direction"><span class="top_arrow"></span></a> </div>
	              <div class="pager">
	                <div id="limiter">
	                  <label>{{ __('View:') }} </label>
	                  <ul>
	                    <li><a href="#">8<span class="right-arrow"></span></a>
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
	              <ol class="products-list" id="products-list">
	                <li class="item">
	                  <div class="product-image"> <a href="product-detail.html" title="Product tilte is here"> <img class="small-image" src="images/products/product-fashion-1.jpg" alt="Product tilte is here"> </a>
	                    <div class="new-label new-top-left">{{ __('New') }}</div>
	                  </div>
	                  <div class="product-shop">
	                    <h2 class="product-name"><a href="product-detail.html" title="Product tilte is here">{{ __('producttitle') }}</a></h2>
	                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
	                    <div class="desc std">
	                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
	                      <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in ... <a class="link-learn" href="product-detail.html">Learn More</a> </p>
	                    </div>
	                    <div class="price-box">
	                      <p class="old-price"> <span class="price-label"></span><span class="price"> $99.99 </span></p>
	                      <p class="special-price"> <span class="price-label"></span><span class="price"> $119.99 </span></p>
	                    </div>
	                    <div class="actions">
	                      <button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart"></i>{{ __('Add to Cart') }}</button>
	                      <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><i class="fa fa-heart"></i>Add to Wishlist</a> <a title="Add to Compare" class="button link-compare" href="compare.html"><i class="fa fa-signal"></i>Add to Compare</a> </span></div>
	                  </div>
	                </li>
	                <li class="item">
	                  <div class="product-image"> <a href="product-detail.html" title="Product tilte is here"> <img class="small-image" src="images/products/product-fashion-2.jpg" alt="Product tilte is here"> </a>
	                    <div class="new-label new-top-right">{{ __('New') }}</div>
	                  </div>
	                  <div class="product-shop">
	                    <h2 class="product-name"><a href="product-detail.html" title="Product tilte is here">{{ __('producttitle') }}</a></h2>
	                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
	                    <div class="desc std">
	                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
	                      <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in ... <a class="link-learn" href="product-detail.html">Learn More</a> </p>
	                    </div>
	                    <div class="price-box"> <span class="regular-price"> <span class="price">$79.99</span></span></div>
	                    <div class="actions">
	                      <button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart"></i>Add to Cart</button>
	                      <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><i class="fa fa-heart"></i>Add to Wishlist</a> <a title="Add to Compare" class="button link-compare" href="compare.html"><i class="fa fa-signal"></i>Add to Compare</a> </span></div>
	                  </div>
	                </li>
	                <li class="item">
	                  <div class="product-image"> <a href="product-detail.html" title="Product tilte is here"> <img class="small-image" src="images/products/product-fashion-5.jpg" alt="Product tilte is here"> </a> </div>
	                  <div class="product-shop">
	                    <h2 class="product-name"><a href="product-detail.html" title="Product tilte is here">{{ __('producttitle') }}</a></h2>
	                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
	                    <div class="desc std">
	                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
	                      <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in ... <a class="link-learn" href="product-detail.html">Learn More</a> </p>
	                    </div>
	                    <div class="price-box">
	                      <p class="old-price"> <span class="price-label"></span><span class="price"> $49.99 </span></p>
	                      <p class="special-price"> <span class="price-label"></span><span class="price"> $79.99 </span></p>
	                    </div>
	                    <div class="actions">
	                      <button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart"></i>Add to Cart</button>
	                      <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><i class="fa fa-heart"></i>Add to Wishlist</a> <a title="Add to Compare" class="button link-compare" href="compare.html"><i class="fa fa-signal"></i>Add to Compare</a> </span></div>
	                  </div>
	                </li>
	                <li class="item">
	                  <div class="product-image"> <a href="product-detail.html" title="Product tilte is here"> <img class="small-image" src="images/products/product-fashion-6.jpg" alt="Product tilte is here"> </a>
	                    <div class="new-label new-top-right">{{ __('New') }}</div>
	                  </div>
	                  <div class="product-shop">
	                    <h2 class="product-name"><a href="product-detail.html" title="Product tilte is here">{{ __('producttitle') }}</a></h2>
	                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
	                    <div class="desc std">
	                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
	                      <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in ... <a class="link-learn" href="product-detail.html">Learn More</a> </p>
	                    </div>
	                    <div class="price-box"> <span class="regular-price"> <span class="price">$299.99</span></span></div>
	                    <div class="actions">
	                      <button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart"></i>Add to Cart</button>
	                      <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><i class="fa fa-heart"></i>Add to Wishlist</a> <a title="Add to Compare" class="button link-compare" href="compare.html"><i class="fa fa-signal"></i>Add to Compare</a> </span></div>
	                  </div>
	                </li>
	                <li class="item">
	                  <div class="product-image"> <a href="product-detail.html" title="Product tilte is here"> <img class="small-image" src="images/products/product-fashion-7.jpg" alt="Product tilte is here"> </a>
	                    <div class="sale-label sale-top-left">{{ __('Sale') }}</div>
	                  </div>
	                  <div class="product-shop">
	                    <h2 class="product-name"><a href="product-detail.html" title="Product tilte is here">{{ __('producttitle') }}</a></h2>
	                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
	                    <div class="desc std">
	                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
	                      <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in ... <a class="link-learn" href="product-detail.html">Learn More</a> </p>
	                    </div>
	                    <div class="price-box">
	                      <p class="old-price"> <span class="price-label"></span><span class="price"> $29.99 </span></p>
	                      <p class="special-price"> <span class="price-label"></span><span class="price"> $49.99 </span></p>
	                    </div>
	                    <div class="actions">
	                      <button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart"></i>Add to Cart</button>
	                      <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><i class="fa fa-heart"></i>Add to Wishlist</a> <a title="Add to Compare" class="button link-compare" href="compare.html"><i class="fa fa-signal"></i>Add to Compare</a> </span></div>
	                  </div>
	                </li>
	                <li class="item">
	                  <div class="product-image"> <a href="product-detail.html" title="Product tilte is here"> <img class="small-image" src="images/products/product-fashion-8.jpg" alt="Product tilte is here"> </a> </div>
	                  <div class="product-shop">
	                    <h2 class="product-name"><a href="product-detail.html" title="Product tilte is here">{{ __('producttitle') }}</a></h2>
	                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
	                    <div class="desc std">
	                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
	                      <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in ... <a class="link-learn" href="product-detail.html">Learn More</a> </p>
	                    </div>
	                    <div class="price-box"> <span class="regular-price"> <span class="price">$69.00</span></span></div>
	                    <div class="actions">
	                      <button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart"></i>Add to Cart</button>
	                      <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><i class="fa fa-heart"></i>Add to Wishlist</a> <a title="Add to Compare" class="button link-compare" href="compare.html"><i class="fa fa-signal"></i>Add to Compare</a> </span></div>
	                  </div>
	                </li>
	                <li class="item">
	                  <div class="product-image"> <a href="product-detail.html" title="Product tilte is here"> <img class="small-image" src="images/products/product-fashion-9.jpg" alt="Product tilte is here"> </a> </div>
	                  <div class="product-shop">
	                    <h2 class="product-name"><a href="product-detail.html" title="Product tilte is here">{{ __('producttitle') }}</a></h2>
	                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
	                    <div class="desc std">
	                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
	                      <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in ... <a class="link-learn" href="product-detail.html">Learn More</a> </p>
	                    </div>
	                    <div class="price-box">
	                      <p class="old-price"> <span class="price-label"></span><span class="price"> $199.99 </span></p>
	                      <p class="special-price"> <span class="price-label"></span><span class="price"> $219.99 </span></p>
	                    </div>
	                    <div class="actions">
	                      <button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart"></i>Add to Cart</button>
	                      <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><i class="fa fa-heart"></i>Add to Wishlist</a> <a title="Add to Compare" class="button link-compare" href="compare.html"><i class="fa fa-signal"></i>Add to Compare</a> </span></div>
	                  </div>
	                </li>
	                <li class="item">
	                  <div class="product-image"> <a href="product-detail.html" title="Product tilte is here"> <img class="small-image" src="images/products/product-fashion-10.jpg" alt="Product tilte is here"> </a> </div>
	                  <div class="product-shop">
	                    <h2 class="product-name"><a href="product-detail.html" title="Product tilte is here">{{ __('producttitle') }}</a></h2>
	                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
	                    <div class="desc std">
	                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
	                      <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in ... <a class="link-learn" href="product-detail.html">Learn More</a> </p>
	                    </div>
	                    <div class="price-box"> <span class="regular-price"> <span class="price">$89.99</span></span></div>
	                    <div class="actions">
	                      <button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart"></i>Add to Cart</button>
	                      <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><i class="fa fa-heart"></i>Add to Wishlist</a> <a title="Add to Compare" class="button link-compare" href="compare.html"><i class="fa fa-signal"></i>Add to Compare</a> </span></div>
	                  </div>
	                </li>
	              </ol>
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
	                <div class="col-sm-6 text-right">{{ __('Showing 1 to 8 of 25 (2 Pages)') }}</div>
	              </div>
	            </div>
	          </article>
	        </div>
	      </div>
	    </div>
  </div>
 </div>
@endsection
