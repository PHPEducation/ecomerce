@extends('master')
@section('title','shopcart')
@section('content')
<div id="page">
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li class="home"> <a href="index.html" title="Go to Home Page">{{ __('home') }}</a><span>/</span></li>
                        <li><a href="shop-grid-sidebar.html" title="">{{ __('Women') }}</a><span>/ </span></li>
                        <li><a href="shop-grid-sidebar.html" title="">{{ __('Clothing') }}</a> <span>/</span></li>
                        <li><strong>{{ __('producttitle') }}e </strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="main-container col1-layout">
        <div class="container">
            <div class="row">
                <div class="product-view">
                    <div class="product-essential">
                        <form action="#" method="post" id="product_addtocart_form">
                            <div class="product-img-box col-lg-4 col-sm-5 col-xs-12">
                                <div class="product-image">
                                    <div class="product-full">
                                        <div class="new-label new-top-left"> {{ __('New') }} </div>
                                        <img id="product-zoom" src="images/products/product-fashion-1a.jpg" data-zoom-image="images/products/product-fashion-1a.jpg" alt="product-image"/>
                                    </div>
                                    <div class="more-views">
                                        <div class="slider-items-products">
                                            <div id="jtv-more-views-img" class="product-flexslider hidden-buttons product-img-thumb">
                                                <div class="slider-items slider-width-col4 block-content">
                                                    <div class="more-views-items">
                                                        <a href="#" data-image="images/products/product-fashion-2.jpg" data-zoom-image="images/products/product-fashion-2.jpg"><img id="product-zoom"  src="images/products/product-fashion-2.jpg" alt="product-image"/></a>
                                                    </div>
                                                    <div class="more-views-items">
                                                        <a href="#" data-image="images/products/product-fashion-3.jpg" data-zoom-image="images/products/product-fashion-3.jpg"><img id="product-zoom"  src="images/products/product-fashion-3.jpg" alt="product-image"/></a>
                                                    </div>
                                                    <div class="more-views-items">
                                                        <a href="#" data-image="images/products/product-fashion-4.jpg" data-zoom-image="images/products/product-fashion-4.jpg"><img id="product-zoom"  src="images/products/product-fashion-4.jpg" alt="product-image"/></a>
                                                    </div>
                                                    <div class="more-views-items">
                                                        <a href="#" data-image="images/products/product-fashion-5.jpg" data-zoom-image="images/products/product-fashion-5.jpg"><img id="product-zoom"  src="images/products/product-fashion-5.jpg" alt="product-image"/></a>
                                                    </div>
                                                    <div class="more-views-items">
                                                        <a href="#" data-image="images/products/product-fashion-6.jpg" data-zoom-image="images/products/product-fashion-6.jpg"><img id="product-zoom"  src="images/products/product-fashion-6.jpg" alt="product-image" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: more-images -->
                            </div>
                            <div class="product-shop col-lg-8 col-sm-7 col-xs-12">
                                <div class="product-name">
                                    <h1>{{ __('producttitle') }}</h1>
                                </div>
                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                <div class="price-block">
                                    <div class="price-box">
                                        <p class="special-price">
                                            <span class="price-label">{{ __('Special Price') }}e</span>
                                            <span class="price"> {{ __('$149.99') }} </span>
                                        </p>
                                        <p class="old-price">
                                            <span class="price-label">{{ __('Regular Price:') }}</span>
                                            <span class="price"> {{ __('$299.99') }} </span>
                                        </p>
                                        <p class="availability in-stock">
                                            <span>{{ __('In Stock') }}</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="short-description">
                                    <h2>{{ __('Quick Overview') }}</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero.</p>
                                    <br>
                                    <p> Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. </p>
                                </div>
                                <div class="add-to-box">
                                    <div class="add-to-cart">
                                        <div class="pull-left">
                                            <div class="custom pull-left">
                                                <label>{{ __('Quantity:') }}</label>
                                                <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="fa fa-minus">&nbsp;</i></button>
                                                <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                                <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="fa fa-plus">&nbsp;</i></button>
                                            </div>
                                        </div>
                                        <button onClick="productAddToCartForm.submit(this)" class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart"></i> {{ __('Add to Cart') }}</button>
                                    </div>
                                    <div class="email-addto-box">
                                        <ul class="add-to-links">
                                            <li><a class="link-wishlist" href="wishlist.html"><i class="fa fa-heart"></i><span>{{ __('Add to Wishlist') }}</span></a></li>
                                            <li><a class="link-compare" href="compare.html"><i class="fa fa-signal"></i><span>{{ __('Add to Compare') }}</span></a></li>
                                            <li><a class="email-friend" href="#"><i class="fa fa-envelope"></i><span>{{ __('Email to a Friend') }}</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product-next-prev">
                                    <a class="product-next" href="#"><i class="fa fa-angle-left"></i></a> <a class="product-prev" href="#"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="product-collateral col-lg-12 col-sm-12 col-xs-12">
                    <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                        <li class="active">
                            <a href="#product_tabs_description" data-toggle="tab"> {{ __('Product Description') }} </a>
                        </li>
                        <li><a href="#product_tabs_tags" data-toggle="tab">{{ __('Tags') }}</a></li>
                        <li><a href="#reviews_tabs" data-toggle="tab">{{ __('Reviews') }}</a></li>
                        <li><a href="#product_tabs_custom" data-toggle="tab">{{ __('Custom Tab') }}</a></li>
                    </ul>
                    <div id="productTabContent" class="tab-content">
                        <div class="tab-pane fade in active" id="product_tabs_description">
                            <div class="std">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue.</p>
                                <p> Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="product_tabs_tags">
                            <div class="box-collateral box-tags">
                                <div class="tags">
                                    <form id="addTagForm" action="#" method="get">
                                        <div class="form-add-tags">
                                            <label for="productTagName">{{ __('Add Tags:') }}</label>
                                            <div class="input-box">
                                                <input class="input-text" name="productTagName" id="productTagName" type="text">
                                                <button type="button" title="Add Tags" class=" button btn-add" onClick="submitTagForm()"> <span>{{ __('Add Tags:') }}</span></button>
                                            </div>
                                            <!--input-box-->
                                        </div>
                                    </form>
                                </div>
                                <!--tags-->
                                <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="reviews_tabs">
                            <div class="box-collateral box-reviews" id="customer-reviews">
                                <div class="box-reviews1">
                                    <div class="form-add">
                                        <form id="review-form" method="post" action="http://www.jtvcommerce.com/review/product/post/id/176/">
                                            <h3>{{ __('Write Your Own Review') }}</h3>
                                            <fieldset>
                                                <h4>{{ __('How do you rate this product?') }} <em class="required">*</em></h4>
                                                <span id="input-message-box"></span>
                                                <table id="product-review-table" class="data-table">
                                                    <thead>
                                                        <tr class="first last">
                                                            <th>&nbsp;</th>
                                                            <th><span class="nobr">{{ __('1 *') }}</span></th>
                                                            <th><span class="nobr">{{ __('2 *') }}</span></th>
                                                            <th><span class="nobr">{{ __('3 *') }}</span></th>
                                                            <th><span class="nobr">{{ __('4 *') }}</span></th>
                                                            <th><span class="nobr">{{ __('5 *') }}</span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="first odd">
                                                            <th>{{ __('Price') }}</th>
                                                            <td class="value"><input type="radio" class="radio" value="11" id="Price_1" name="ratings[3]"></td>
                                                            <td class="value"><input type="radio" class="radio" value="12" id="Price_2" name="ratings[3]"></td>
                                                            <td class="value"><input type="radio" class="radio" value="13" id="Price_3" name="ratings[3]"></td>
                                                            <td class="value"><input type="radio" class="radio" value="14" id="Price_4" name="ratings[3]"></td>
                                                            <td class="value last"><input type="radio" class="radio" value="15" id="Price_5" name="ratings[3]"></td>
                                                        </tr>
                                                        <tr class="even">
                                                            <th>{{ __('Value') }}</th>
                                                            <td class="value"><input type="radio" class="radio" value="6" id="Value_1" name="ratings[2]"></td>
                                                            <td class="value"><input type="radio" class="radio" value="7" id="Value_2" name="ratings[2]"></td>
                                                            <td class="value"><input type="radio" class="radio" value="8" id="Value_3" name="ratings[2]"></td>
                                                            <td class="value"><input type="radio" class="radio" value="9" id="Value_4" name="ratings[2]"></td>
                                                            <td class="value last"><input type="radio" class="radio" value="10" id="Value_5" name="ratings[2]"></td>
                                                        </tr>
                                                        <tr class="last odd">
                                                            <th>{{ __('Quality') }}</th>
                                                            <td class="value"><input type="radio" class="radio" value="1" id="Quality_1" name="ratings[1]"></td>
                                                            <td class="value"><input type="radio" class="radio" value="2" id="Quality_2" name="ratings[1]"></td>
                                                            <td class="value"><input type="radio" class="radio" value="3" id="Quality_3" name="ratings[1]"></td>
                                                            <td class="value"><input type="radio" class="radio" value="4" id="Quality_4" name="ratings[1]"></td>
                                                            <td class="value last"><input type="radio" class="radio" value="5" id="Quality_5" name="ratings[1]"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <input type="hidden" value="" class="validate-rating" name="validate_rating">
                                                <div class="review1">
                                                    <ul class="form-list">
                                                        <li>
                                                            <label class="required" for="nickname_field">{{ __('Nickname') }}<em>*</em></label>
                                                            <div class="input-box">
                                                                <input type="text" class="input-text" id="nickname_field" name="nickname">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <label class="required" for="summary_field">{{ __('Summary') }}<em>*</em></label>
                                                            <div class="input-box">
                                                                <input type="text" class="input-text" id="summary_field" name="title">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="review2">
                                                    <ul>
                                                        <li>
                                                            <label class="required " for="review_field">{{ __('Review') }}<em>*</em></label>
                                                            <div class="input-box">
                                                                <textarea rows="3" cols="5" id="review_field" name="detail"></textarea>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="buttons-set">
                                                        <button class="button submit" title="Submit Review" type="submit"><span>{{ __('Submit Review') }}</span></button>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                <div class="box-reviews2">
                                    <h3>{{ __('Customer Reviews') }}</h3>
                                    <div class="box visible">
                                        <ul>
                                            <li>
                                                <table class="ratings-table">
                                                    <tbody>
                                                        <tr>
                                                            <th>{{ __('Value') }}</th>
                                                            <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                                                        </tr>
                                                        <tr>
                                                            <th>{{ __('Quality') }}</th>
                                                            <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                                                        </tr>
                                                        <tr>
                                                            <th>{{ __('Price') }}</th>
                                                            <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="review">
                                                    <h6><a href="#">{{ __('Lorem ipsum dolor sit amet') }}</a></h6>
                                                    <small>{{ __('Review by') }} <span>Sophia </span>on 15/01/2018 </small>
                                                    <div class="review-txt">Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante.</div>
                                                </div>
                                            </li>
                                            <li class="even">
                                                <table class="ratings-table">
                                                    <tbody>
                                                        <tr>
                                                            <th>{{ __('Value') }}</th>
                                                            <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                                                        </tr>
                                                        <tr>
                                                            <th>{{ __('Quality') }}</th>
                                                            <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                                                        </tr>
                                                        <tr>
                                                            <th>{{ __('Price') }}</th>
                                                            <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="review">
                                                    <h6><a href="#">Lorem ipsum dolor sit amet</a></h6>
                                                    <small>Review by <span>William</span>on 05/02/2018 </small>
                                                    <div class="review-txt">Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero.</div>
                                                </div>
                                            </li>
                                            <li>
                                                <table class="ratings-table">
                                                    <tbody>
                                                        <tr>
                                                            <th>{{ __('Value') }}</th>
                                                            <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                                                        </tr>
                                                        <tr>
                                                            <th>{{ __('Quality') }}</th>
                                                            <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                                                        </tr>
                                                        <tr>
                                                            <th>{{ __('Price') }}</th>
                                                            <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="review">
                                                    <h6><a href="#">{{ __('Lorem ipsum dolor sit amet') }}</a></h6>
                                                    <small>Review by <span> Mason</span>on 10/02/2018 </small>
                                                    <div class="review-txt last">Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper.</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="actions"> <a class="button view-all" id="revies-button" href="#"><span><span>View all</span></span></a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="product_tabs_custom">
                            <div class="product-tabs-content-inner clearfix">
                                <p>Lorem Ipsum is
                                    simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when
                                    an unknown printer took a galley of type and scrambled it to make a type
                                    specimen book. It has survived not only five centuries, but also the
                                    leap into electronic typesetting, remaining essentially unchanged. It
                                    was popularised in the 1960s with the release of Letraset sheets
                                    containing Lorem Ipsum passages, and more recently with desktop
                                    publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
