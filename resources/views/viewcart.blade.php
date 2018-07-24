@extends('master')
@section('title','shopcart')
@section('content')
 <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li class="home"> <a href="index.html" title="Go to Home Page">{{ __('home') }} </a> <span>/</span></li>
                        <li> <strong>{{ __('shopcart') }}  </strong> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="main-container col1-layout">
        <div class="main container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="product-area">
                        <div class="title-tab-product-category">
                            <div class="text-center">
                                <ul class="nav jtv-heading-style" role="tablist">
                                    <li role="presentation" class="active"><a href="#cart" aria-controls="cart" role="tab" data-toggle="tab">1 {{ __('shopcart') }} </a></li>
                                    <li role="presentation" class=""><a href="#checkout" aria-controls="checkout" role="tab" data-toggle="tab">2 {{ __('checkout') }} </a></li>
                                    <li role="presentation" class=""><a href="#complete-order" aria-controls="complete-order" role="tab" data-toggle="tab">{{ __('3 Complete Order') }} </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content-tab-product-category">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="cart">
                                    <!-- cart are start-->
                                    <div class="cart-page-area">
                                        <form method="post" action="#">
                                            <div class="table-responsive">
                                                <table class="shop-cart-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-thumbnail ">{{ __('Image') }} </th>
                                                            <th class="product-name ">{{ __('Product Name') }} </th>
                                                            <th class="product-price ">{{ __('Unit Price') }} </th>
                                                            <th class="product-quantity">{{ __('Quantity') }} </th>
                                                            <th class="product-subtotal ">{{ __('Total') }} </th>
                                                            <th class="product-remove">{{ __('Remove') }} </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="cart_item">
                                                            <td class="item-img"><a href="#"><img src="images/products/product-fashion-19.jpg" alt="Product tilte is here "> </a></td>
                                                            <td class="item-title"><a href="#">{{ __('producttitle') }}  </a></td>
                                                            <td class="item-price"> $129.00 </td>
                                                            <td class="item-qty"><div class="cart-quantity">
                                                                    <div class="product-qty">
                                                                        <div class="cart-quantity">
                                                                            <div class="cart-plus-minus">
                                                                                <div class="dec qtybutton">-</div>
                                                                                <input value="2" name="qtybutton" class="cart-plus-minus-box" type="text">
                                                                                <div class="inc qtybutton">+</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div></td>
                                                            <td class="total-price"><strong> $258.00</strong></td>
                                                            <td class="remove-item"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="item-img"><a href="#"><img src="images/products/product-fashion-20.jpg" alt="Product tilte is here "> </a></td>
                                                            <td class="item-title"><a href="#">{{ __('producttitle') }}  </a></td>
                                                            <td class="item-price"> $139.00 </td>
                                                            <td class="item-qty"><div class="cart-quantity">
                                                                    <div class="product-qty">
                                                                        <div class="cart-quantity">
                                                                            <div class="cart-plus-minus">
                                                                                <div class="dec qtybutton">-</div>
                                                                                <input value="1" name="qtybutton" class="cart-plus-minus-box" type="text">
                                                                                <div class="inc qtybutton">+</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div></td>
                                                            <td class="total-price"><strong> $139.00</strong></td>
                                                            <td class="remove-item"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="item-img"><a href="#"><img src="images/products/product-fashion-13.jpg" alt="Product tilte is here "> </a></td>
                                                            <td class="item-title"><a href="#">{{ __('producttitle') }}  </a></td>
                                                            <td class="item-price"> $99.00 </td>
                                                            <td class="item-qty"><div class="cart-quantity">
                                                                    <div class="product-qty">
                                                                        <div class="cart-quantity">
                                                                            <div class="cart-plus-minus">
                                                                                <div class="dec qtybutton">-</div>
                                                                                <input value="1" name="qtybutton" class="cart-plus-minus-box" type="text">
                                                                                <div class="inc qtybutton">+</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div></td>
                                                            <td class="total-price"><strong> $99.00</strong></td>
                                                            <td class="remove-item"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="item-img"><a href="#"><img src="images/products/product-fashion-12.jpg" alt="Product tilte is here "> </a></td>
                                                            <td class="item-title"><a href="#">{{ __('producttitle') }}  </a></td>
                                                            <td class="item-price"> $79.00 </td>
                                                            <td class="item-qty"><div class="cart-quantity">
                                                                    <div class="product-qty">
                                                                        <div class="cart-quantity">
                                                                            <div class="cart-plus-minus">
                                                                                <div class="dec qtybutton">-</div>
                                                                                <input value="1" name="qtybutton" class="cart-plus-minus-box" type="text">
                                                                                <div class="inc qtybutton">+</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div></td>
                                                            <td class="total-price"><strong> $79.00</strong></td>
                                                            <td class="remove-item"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="cart-bottom-area">
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                                        <div class="update-coupne-area">
                                                            <div class="update-continue-btn text-right">
                                                                <button class="button btn-continue" title="Continue Shopping" type="button"><span>{{ __('Continue Shopping') }} </span></button>
                                                                <button class="button btn-empty" title="Clear Cart" value="empty_cart" name="update_cart_action" type="submit"><span>{{ __('Clear Cart') }} </span></button>
                                                                <button class="button btn-update" title="Update Cart" value="update_qty" name="update_cart_action" type="submit"><span>{{ __('Update Cart') }} </span></button>
                                                            </div>
                                                            <div class="coupn-area">
                                                                <div class="discount">
                                                                    <h3>{{ __('Discount Codes') }} </h3>
                                                                    <label for="coupon_code">Enter your coupon code if you have one.</label>
                                                                    <input type="hidden" value="0" id="remove-coupone" name="remove">
                                                                    <input type="text" value="" name="coupon_code" id="coupon_code" class="input-text fullwidth">
                                                                    <button value="Apply Coupon" onclick="discountForm.submit(false)" class="button coupon " title="Apply Coupon" type="button"><span>Apply Coupon</span></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-5 col-xs-12">
                                                        <div class="cart-total-area">
                                                            <div class="catagory-title cat-tit-5 text-right">
                                                                <h3>{{ __('Cart Totals') }} </h3>
                                                            </div>
                                                            <div class="sub-shipping">
                                                                <p>Subtotal <span>$575.00</span></p>
                                                                <p>Shipping <span>$75.00</span></p>
                                                            </div>
                                                            <div class="shipping-method text-right">
                                                                <div class="shipp">
                                                                    <input type="radio" name="ship" id="pay-toggle1">
                                                                    <label for="pay-toggle1">{{ __('Flat Rate') }} </label>
                                                                </div>
                                                                <div class="shipp">
                                                                    <input type="radio" name="ship" id="pay-toggle3">
                                                                    <label for="pay-toggle3">{{ __('Direct Bank Transfer') }} </label>
                                                                </div>
                                                                <p><a href="#">{{ __('Calculate Shipping') }} </a></p>
                                                            </div>
                                                            <div class="process-cart-total">
                                                                <p>Total <span>$500.00</span></p>
                                                            </div>
                                                            <div class="process-checkout-btn text-right">
                                                                <button class="button btn-proceed-checkout" title="Proceed to Checkout" type="button"><span>{{ __('Proceed to Checkout') }} </span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- cart are end-->
                                </div>
                                <div role="tabpanel" class="tab-pane  fade in " id="checkout">
                                    <!-- Checkout are start-->
                                    <div class="checkout-area">
                                        <div class="">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="coupne-customer-area mb50">
                                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                            <div class="panel panel-checkout">
                                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                                    <h4 class="panel-title"> <img src="images/acc.jpg" alt=""> Returning customer? <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Click here to login </a> </h4>
                                                                </div>
                                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                                    <div class="panel-body">
                                                                        <div class="sm-des"> If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing & Shipping section. </div>
                                                                        <div class="first-last-area">
                                                                            <div class="input-box">
                                                                                <label>{{ __('User Name Or Email') }} </label>
                                                                                <input type="email" placeholder="Your Email" class="info" name="email">
                                                                            </div>
                                                                            <div class="input-box">
                                                                                <label>{{ __('password') }} </label>
                                                                                <input type="password" placeholder="Password" class="info" name="padd">
                                                                            </div>
                                                                            <div class="frm-action cc-area">
                                                                                <div class="input-box tci-box"> <a href="#" class="btn-def btn2">{{ __('login') }} </a> </div>
                                                                                <span>
                                                                                <input type="checkbox" class="remr">
                                                                                {{ __('Remember me') }}  </span> <a class="forgotten forg" href="#">{{ __('Forgotten Password') }} </a> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-checkout">
                                                                <div class="panel-heading" role="tab" id="headingThree">
                                                                    <h4 class="panel-title"> <img src="images/acc.jpg" alt=""> Have A Coupon? <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> {{ __('Click here to enter your code') }}  </a> </h4>
                                                                </div>
                                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                                    <div class="panel-body coupon-body">
                                                                        <div class="first-last-area">
                                                                            <div class="input-box">
                                                                                <input type="text" placeholder="Coupon Code" class="info" name="code">
                                                                            </div>
                                                                            <div class="frm-action">
                                                                                <div class="input-box tci-box"> <a href="#" class="btn-def btn2">Apply Coupon</a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="billing-details">
                                                                <div class="contact-text right-side">
                                                                    <h2>{{ __('Billing Details') }} </h2>
                                                                    <form action="#">
                                                                        <div class="row">
                                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="input-box">
                                                                                    <label>{{ __('First Name') }}  <em>*</em></label>
                                                                                    <input type="text" name="namm" class="info" placeholder="First Name">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="input-box">
                                                                                    <label>{{ __('Last Name') }} <em>*</em></label>
                                                                                    <input type="text" name="namm" class="info" placeholder="Last Name">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="input-box">
                                                                                    <label>{{ __('Company Name') }} </label>
                                                                                    <input type="text" name="cpany" class="info" placeholder="Company Name">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="input-box">
                                                                                    <label>{{ __('Email Address') }} <em>*</em></label>
                                                                                    <input type="email" name="email" class="info" placeholder="Your Email">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="input-box">
                                                                                    <label>{{ __('Phone Number') }} <em>*</em></label>
                                                                                    <input type="text" name="phone" class="info" placeholder="Phone Number">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="input-box">
                                                                                    <label>{{ __('Country') }}  <em>*</em></label>
                                                                                    <select class="selectpicker select-custom" data-live-search="true">
                                                                                        <option data-tokens="Bangladesh">{{ __('Bangladesh') }} </option>
                                                                                        <option data-tokens="India">{{ __('India') }} </option>
                                                                                        <option data-tokens="Pakistan">{{ __('Pakistan') }} </option>
                                                                                        <option data-tokens="Pakistan">{{ __('Pakistan') }} </option>
                                                                                        <option data-tokens="Srilanka">Srilanka</option>
                                                                                        <option data-tokens="Nepal">{{ __('Nepal') }} </option>
                                                                                        <option data-tokens="Butan">{{ __('Butan') }} </option>
                                                                                        <option data-tokens="USA">{{ __('USA') }} </option>
                                                                                        <option data-tokens="Brazil">{{ __('Brazil') }} </option>
                                                                                        <option data-tokens="Canada">{{ __('Canada') }} </option>
                                                                                        <option data-tokens="China">{{ __('China') }} </option>
                                                                                        <option data-tokens="Koeria">{{ __('Koeria') }} </option>
                                                                                        <option data-tokens="Soudi">{{ __('Soudi') }}  Arabia</option>
                                                                                        <option data-tokens="Spain">{{ __('Spain') }} </option>
                                                                                        <option data-tokens="France">{{ __('France') }} </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="input-box">
                                                                                    <label>{{ __('Address') }}  <em>*</em></label>
                                                                                    <input type="text" name="add1" class="info mb-10" placeholder="Street Address">
                                                                                    <input type="text" name="add2" class="info mt10" placeholder="Apartment, suite, unit etc. (optional)">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="input-box">
                                                                                    <label>{{ __('Town/City') }}  <em>*</em></label>
                                                                                    <input type="text" name="add1" class="info" placeholder="Town/City">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="input-box">
                                                                                    <label>{{ __('State/Divison') }}  <em>*</em></label>
                                                                                    <select class="selectpicker select-custom" data-live-search="true">
                                                                                        <option data-tokens="Barisal">{{ __('Barisal') }} </option>
                                                                                        <option data-tokens="Dhaka">{{ __('Dhaka') }} </option>
                                                                                        <option data-tokens="Kulna">{{ __('Kulna') }} </option>
                                                                                        <option data-tokens="Rajshahi">{{ __('Rajshahi') }} </option>
                                                                                        <option data-tokens="Sylet">{{ __('Sylet') }} </option>
                                                                                        <option data-tokens="Chittagong">{{ __('Chittagong') }} </option>
                                                                                        <option data-tokens="Rangpur">{{ __('Rangpur') }} </option>
                                                                                        <option data-tokens="Maymanshing">{{ __('Maymanshing') }} </option>
                                                                                        <option data-tokens="Cox">{{ __('Cox's Bazar') }} </option>
                                                                                        <option data-tokens="Saint">{{ __('Saint Martin') }} </option>
                                                                                        <option data-tokens="Kuakata">Kuakata</option>
                                                                                        <option data-tokens="Sajeq">{{ __('Sajeq') }} </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="input-box">
                                                                                    <label>{{ __('Post Code/Zip Code') }} <em>*</em></label>
                                                                                    <input type="text" name="zipcode" class="info" placeholder="Zip Code">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="create-acc clearfix">
                                                                                    <div class="acc-toggle">
                                                                                        <input type="checkbox" id="acc-toggle">
                                                                                        <label for="acc-toggle">{{ __('Create an Account ?') }} </label>
                                                                                    </div>
                                                                                    <div class="create-acc-body">
                                                                                        <div class="sm-des"> Create an account by entering the information below. If you are a returning customer please login at the top of the page. </div>
                                                                                        <div class="input-box">
                                                                                            <label>Account password <em>*</em></label>
                                                                                            <input type="password" name="pass" class="info" placeholder="Password">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="billing-details">
                                                                <div class="right-side">
                                                                    <div class="ship-acc clearfix">
                                                                        <div class="ship-toggle">
                                                                            <input type="checkbox" id="ship-toggle">
                                                                            <label for="ship-toggle">{{ __('Ship to a different address?') }} </label>
                                                                        </div>
                                                                        <div class="ship-acc-body">
                                                                            <form action="#">
                                                                                <div class="row">
                                                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                        <div class="input-box">
                                                                                            <label>{{ __('First Name') }}  <em>*</em></label>
                                                                                            <input type="text" name="namm" class="info" placeholder="First Name">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                        <div class="input-box">
                                                                                            <label>{{ __('Last Name') }} <em>*</em></label>
                                                                                            <input type="text" name="namm" class="info" placeholder="Last Name">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="input-box">
                                                                                            <label>{{ __('Company Name') }} </label>
                                                                                            <input type="text" name="cpany" class="info" placeholder="Company Name">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                        <div class="input-box">
                                                                                            <label>{{ __('Email Address') }} <em>*</em></label>
                                                                                            <input type="email" name="email" class="info" placeholder="Your Email">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                        <div class="input-box">
                                                                                            <label>{{ __('Phone Number') }} <em>*</em></label>
                                                                                            <input type="text" name="phone" class="info" placeholder="Phone Number">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="input-box">
                                                                                            <label>{{ __('Country') }}  <em>*</em></label>
                                                                                            <select class="selectpicker select-custom" data-live-search="true">
                                                                                                <option data-tokens="Bangladesh">{{ __('Bangladesh') }} </option>
                                                                                                <option data-tokens="India">{{ __('India') }} </option>
                                                                                                <option data-tokens="Pakistan">{{ __('Pakistan') }} </option>
                                                                                                <option data-tokens="Pakistan">{{ __('Pakistan') }} </option>
                                                                                                <option data-tokens="Srilanka">{{ __('Srilanka') }} </option>
                                                                                                <option data-tokens="Nepal">{{ __('Nepal') }} </option>
                                                                                                <option data-tokens="Butan">{{ __('Butan') }} </option>
                                                                                                <option data-tokens="USA">{{ __('USA') }} </option>
                                                                                                <option data-tokens="England">{{ __('England') }} </option>
                                                                                                <option data-tokens="Brazil">{{ __('Brazil') }} </option>
                                                                                                <option data-tokens="Canada">{{ __('Canada') }} </option>
                                                                                                <option data-tokens="China">{{ __('China') }} </option>
                                                                                                <option data-tokens="Koeria">{{ __('Koeria') }} </option>
                                                                                                <option data-tokens="Soudi">{{ __('Soudi Arabia') }} </option>
                                                                                                <option data-tokens="Spain">{{ __('Spain') }} </option>
                                                                                                <option data-tokens="France">{{ __('France') }} </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="input-box">
                                                                                            <label>{{ __('Address') }}  <em>*</em></label>
                                                                                            <input type="text" name="add1" class="info mb-10" placeholder="Street Address">
                                                                                            <input type="text" name="add2" class="info mt10" placeholder="Apartment, suite, unit etc. (optional)">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="input-box">
                                                                                            <label>{{ __('Town/City') }}  <em>*</em></label>
                                                                                            <input type="text" name="add1" class="info" placeholder="Town/City">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                        <div class="input-box">
                                                                                            <label>{{ __('State/Divison') }}  <em>*</em></label>
                                                                                            <select class="selectpicker select-custom" data-live-search="true">
                                                                                                <option data-tokens="Barisal">{{ __('Barisal') }} </option>
                                                                                                <option data-tokens="Dhaka">{{ __('Dhaka') }} </option>
                                                                                                <option data-tokens="Kulna">{{ __('Kulna') }} </option>
                                                                                                <option data-tokens="Rajshahi">{{ __('Rajshahi') }} </option>
                                                                                                <option data-tokens="Sylet">Sylet</option>
                                                                                                <option data-tokens="Chittagong">{{ __('Chittagong') }} </option>
                                                                                                <option data-tokens="Rangpur">{{ __('Rangpur') }} </option>
                                                                                                <option data-tokens="Maymanshing">{{ __('Maymanshing') }} </option>
                                                                                                <option data-tokens="Cox">{{ __('Maymanshing') }} </option>
                                                                                                <option data-tokens="Saint">{{ __('Saint Martin') }} </option>
                                                                                                <option data-tokens="Kuakata">{{ __('Kuakata') }} </option>
                                                                                                <option data-tokens="Sajeq">{{ __('Sajeq') }} </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                        <div class="input-box">
                                                                                            <label>{{ __('Post Code/Zip Code') }} <em>*</em></label>
                                                                                            <input type="text" name="zipcode" class="info" placeholder="Zip Code">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form">
                                                                        <div class="input-box">
                                                                            <label>{{ __('Order Notes') }} </label>
                                                                            <textarea placeholder="Notes about your order, e.g. special notes for delivery." class="area-tex"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Checkout are end-->
                                </div>
                                <div role="tabpanel" class="tab-pane  fade in" id="complete-order">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="checkout-payment-area">
                                                <div class="checkout-total">
                                                    <h3>{{ __('Your order') }} </h3>
                                                    <form action="#" method="post">
                                                        <div class="table-responsive">
                                                            <table class="checkout-area table">
                                                                <thead>
                                                                    <tr class="cart_item check-heading">
                                                                        <td class="ctg-type"> {{ __('Products') }} </td>
                                                                        <td class="cgt-des"> {{ __('Total') }} </td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="cart_item check-item prd-name">
                                                                        <td class="ctg-type"> {{ __('Product tilte is here ×') }}  <span>1</span></td>
                                                                        <td class="cgt-des"> $129.00</td>
                                                                    </tr>
                                                                    <tr class="cart_item check-item prd-name">
                                                                        <td class="ctg-type"> {{ __('Product tilte is here ×') }}  <span>1</span></td>
                                                                        <td class="cgt-des"> $76.00</td>
                                                                    </tr>
                                                                    <tr class="cart_item">
                                                                        <td class="ctg-type"> {{ __('Subtotal') }} </td>
                                                                        <td class="cgt-des">$205.00</td>
                                                                    </tr>
                                                                    <tr class="cart_item">
                                                                        <td class="ctg-type">{{ __('Shipping') }} </td>
                                                                        <td class="cgt-des ship-opt"><div class="shipp">
                                                                                <input type="radio" id="pay-toggle" name="ship">
                                                                                <label for="pay-toggle">{{ __('Flat Rate:') }}  <span>$05</span></label>
                                                                            </div>
                                                                            <div class="shipp">
                                                                                <input type="radio" id="pay-toggle2" name="ship">
                                                                                <label for="pay-toggle2">{{ __('Free Shipping') }} </label>
                                                                            </div></td>
                                                                    </tr>
                                                                    <tr class="cart_item">
                                                                        <td class="ctg-type crt-total"> {{ __('Total') }} </td>
                                                                        <td class="cgt-des prc-total"> $ 200.00 </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="payment-section">
                                                    <div class="pay-toggle">
                                                        <form action="#">
                                                            <div class="pay-type-total">
                                                                <div class="pay-type">
                                                                    <input type="radio" id="pay-toggle01" name="pay">
                                                                    <label for="pay-toggle01">{{ __('Direct Bank Transfer') }} </label>
                                                                </div>
                                                                <div class="pay-type">
                                                                    <input type="radio" id="pay-toggle02" name="pay">
                                                                    <label for="pay-toggle02">{{ __('Cheque Payment') }} </label>
                                                                </div>
                                                                <div class="pay-type">
                                                                    <input type="radio" id="pay-toggle03" name="pay">
                                                                    <label for="pay-toggle03">{{ __('Cash on Delivery') }} </label>
                                                                </div>
                                                                <div class="pay-type">
                                                                    <input type="radio" id="pay-toggle04" name="pay">
                                                                    <label for="pay-toggle04">{{ __('Paypal') }} </label>
                                                                </div>
                                                            </div>
                                                            <div class="input-box"> <a class="btn-def btn2" href="#">{{ __('Place order') }} </a> </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="jtv-crosssel-pro">
            <div class="jtv-new-title">
                <h2>{{ __('you may be interested') }} </h2>
            </div>
            <div class="category-products">
                <ul class="products-grid">
                    <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="item-inner">
                            <div class="item-img">
                                <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-10.jpg"> </a>
                                    <div class="new-label new-top-left">{{ __('New') }} </div>
                                    <div class="sale-label sale-top-right">sale</div>
                                    <div class="mask-shop-white"></div>
                                    <div class="new-label new-top-left">{{ __('New') }} </div>
                                    <a class="quickview-btn" href="quick-view.html"><span>{{ __('quickview') }} </span></a> <a href="wishlist.html">
                                    <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                                    </a> <a href="compare.html">
                                    <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                                    </a> </div>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"> <a title="Product tilte is here" href="#">{{ __('producttitle') }}  </a> </div>
                                    <div class="item-content">
                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="item-price">
                                            <div class="price-box"> <span class="regular-price"> <span class="price">$75.00</span></span></div>
                                        </div>
                                        <div class="actions"><a href="#" class="link-wishlist" title="Add to Wishlist"></a>
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button"><span>{{ __('Add to Cart') }} </span></button>
                                            </div>
                                            <a href="#" class="link-compare" title="Add to Compare"></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="item-inner">
                            <div class="item-img">
                                <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-2.jpg"> </a>
                                    <div class="mask-shop-white"></div>
                                    <div class="new-label new-top-left">{{ __('New') }} </div>
                                    <a class="quickview-btn" href="quick-view.html"><span>{{ __('quickview') }} </span></a> <a href="wishlist.html">
                                    <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                                    </a> <a href="compare.html">
                                    <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                                    </a> </div>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"> <a title="Product tilte is here" href="#">{{ __('producttitle') }}  </a> </div>
                                    <div class="item-content">
                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="item-price">
                                            <div class="price-box"> <span class="regular-price"> <span class="price">$88.99</span></span></div>
                                        </div>
                                        <div class="actions"><a href="#" class="link-wishlist" title="Add to Wishlist"></a>
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button"><span>{{ __('Add to Cart') }} </span></button>
                                            </div>
                                            <a href="#" class="link-compare" title="Add to Compare"></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="item-inner">
                            <div class="item-img">
                                <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-3.jpg"> </a>
                                    <div class="mask-shop-white"></div>
                                    <div class="new-label new-top-left">{{ __('New') }} </div>
                                    <a class="quickview-btn" href="quick-view.html"><span>{{ __('quickview') }} </span></a> <a href="wishlist.html">
                                    <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                                    </a> <a href="compare.html">
                                    <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                                    </a> </div>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"> <a title="Product tilte is here" href="#">{{ __('producttitle') }}  </a> </div>
                                    <div class="item-content">
                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="item-price">
                                            <div class="price-box"> <span class="regular-price"> <span class="price">$149.00</span></span></div>
                                        </div>
                                        <div class="actions"><a href="#" class="link-wishlist" title="Add to Wishlist"></a>
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button"><span>{{ __('Add to Cart') }} </span></button>
                                            </div>
                                            <a href="#" class="link-compare" title="Add to Compare"></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="item-inner">
                            <div class="item-img">
                                <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-4.jpg"> </a>
                                    <div class="sale-label sale-top-left">{{ __('sale') }} </div>
                                    <div class="mask-shop-white"></div>
                                    <div class="new-label new-top-left">{{ __('New') }} </div>
                                    <a class="quickview-btn" href="quick-view.html"><span>{{ __('quickview') }} </span></a> <a href="wishlist.html">
                                    <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                                    </a> <a href="compare.html">
                                    <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                                    </a> </div>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"> <a title="Product tilte is here" href="#">{{ __('producttitle') }}  </a></div>
                                    <div class="item-content">
                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="item-price">
                                            <div class="price-box"> <span class="regular-price"> <span class="price">$139.55</span></span></div>
                                        </div>
                                        <div class="actions"><a href="#" class="link-wishlist" title="Add to Wishlist"></a>
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button"><span>{{ __('Add to Cart') }} </span></button>
                                            </div>
                                            <a href="#" class="link-compare" title="Add to Compare"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
