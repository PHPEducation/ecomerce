@extends('master')
@section('title','shopcart')
@section('content')
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<ul>
					<li class="home"> <a href="index.html" title="Go to Home Page">home</a> <span>/</span></li>
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
								<li role="presentation" class="active"><a href="#cart" aria-controls="cart" role="tab" data-toggle="tab">1 Shopping cart</a></li>
								<li role="presentation" class=""><a href="#checkout" aria-controls="checkout" role="tab" data-toggle="tab">2 Checkout</a></li>
								<li role="presentation" class=""><a href="#complete-order" aria-controls="complete-order" role="tab" data-toggle="tab">3 Complete Order</a></li>
							</ul>
						</div>
					</div>

						<div class="content-tab-product-category">
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="cart">
									<!-- cart are start-->
									<div class="cart-page-area">
										<form method="post" action="#">
											<div class="table-responsive">
												<table class="shop-cart-table">
													<thead>
														<tr>
															<th class="product-thumbnail ">Image</th>
															<th class="product-name ">Product Name</th>
															<th class="product-price ">Unit Price</th>
															<th class="product-quantity">Quantity</th>
															<th class="product-subtotal ">Total</th>
															<th class="product-remove">Remove</th>
														</tr>
													</thead>
													<tbody>
														@foreach($productsInCart as $key => $item)
														<tr class="cart_item">

															<td class="item-img">
																<a href="#">
																	<img src="{{ asset('images/products/') }}/{{ $item->images[0]->link }}" alt="Product tilte is here ">
																</a>
															</td>
															<td class="item-title"><a href="#">{{ $item->name }} </a></td>
															<td class="item-price">{{ number_format($item->price) }} </td>
															<td class="item-qty">
																{{ $item->dumpProducts[0]->soluong }}
															</td>
															<td class="total-price"><strong>{{ number_format($item->dumpProducts[0]->soluong * $item->price)  }}</strong></td>
															<td class="remove-item">
																<a href="{{route('deletecate', ['id' => $item->id]) }}">
																	<i class="fa fa-trash-o"></i>
																</a>
															</td>
														</tr>
														@endforeach
													</tbody>
												</table>
											</div>
										</form>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane  fade in " id="checkout">
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
																				<label>User Name Or Email</label>
																				<input type="email" placeholder="Your Email" class="info" name="email">
																			</div>
																			<div class="input-box">
																				<label>Password</label>
																				<input type="password" placeholder="Password" class="info" name="padd">
																			</div>
																			<div class="frm-action cc-area">
																				<div class="input-box tci-box"> <a href="#" class="btn-def btn2">Login</a> </div>
																				<span>
																					<input type="checkbox" class="remr">
																				Remember me </span> <a class="forgotten forg" href="#">Forgotten Password</a> </div>
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
																	<h2>Billing Details</h2>
																	{!! Form::open([
                                                                		'url' => route('order'),
                                                                		'method' => 'POST'
                                                            		]) !!}
																			<input type="hidden" name="_token" value="{{ csrf_token() }}">
																			@if(Auth::check())
																				<div class="row">
																			<div class="col-md-6 col-sm-6 col-xs-12">
																				<div class="input-box">
																					<label>Name<em>*</em></label>
																					<input type="text" name="name" class="info" value="{{ Auth::user()->name }}" placeholder="Last Name">
																				</div>
																			</div>
																			<div class="col-md-6 col-sm-6 col-xs-12">
																				<div class="input-box">
																					<label>Email<em>*</em></label>
																					<input type="email" name="email" class="info" placeholder="Your Email">
																				</div>
																			</div>
																			<div class="col-md-6 col-sm-6 col-xs-12">
																				<div class="input-box">
																					<label>Phone Number<em>*</em></label>
																					<input type="text" name="phone" class="info" placeholder="Phone Number">
																				</div>
																			</div>
																			<div class="col-md-12 col-sm-12 col-xs-12">
																				<div class="input-box">
																					<label>Address <em>*</em></label>
																					<input type="text" name="address" class="info mb-10" placeholder="Street Address">
																					<input type="text" name="add2" class="info mt10" placeholder="Apartment, suite, unit etc. (optional)">
																				</div>
																			</div>
																		</div>
																			@else
																			<div class="row">
																			<div class="col-md-6 col-sm-6 col-xs-12">
																				<div class="input-box">
																					<label>Name<em>*</em></label>
																					<input type="text" name="name" class="info" placeholder="Last Name">
																				</div>
																			</div>
																			<div class="col-md-6 col-sm-6 col-xs-12">
																				<div class="input-box">
																					<label>Email<em>*</em></label>
																					<input type="email" name="email" class="info" placeholder="Your Email">
																				</div>
																			</div>
																			<div class="col-md-6 col-sm-6 col-xs-12">
																				<div class="input-box">
																					<label>Phone Number<em>*</em></label>
																					<input type="text" name="phone" class="info" placeholder="Phone Number">
																				</div>
																			</div>
																			<div class="col-md-12 col-sm-12 col-xs-12">
																				<div class="input-box">
																					<label>Address <em>*</em></label>
																					<input type="text" name="address" class="info mb-10" placeholder="Street Address">
																					<input type="text" name="add2" class="info mt10" placeholder="Apartment, suite, unit etc. (optional)">
																				</div>
																			</div>
																		</div>
																			@endif

																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane  fade in" id="complete-order">
									<div class="row">
										<div class="col-xs-12">
											<div class="checkout-payment-area">
												<div class="checkout-total">
													<h3>Your order</h3>
														<div class="table-responsive">
															<table class="checkout-area table">
																<thead>
																	<tr class="cart_item check-heading">
																		<td class="ctg-type"> Product</td>
																		<td class="cgt-des"> Total</td>
																	</tr>
																</thead>
																<tbody>
																	<?php
																		$total = 0;
																	?>
																	@foreach($productsInCart as $key => $item)
																	<tr class="cart_item check-item prd-name">
																		<td class="ctg-type"> {{ $item->name }} × <span>{{ $item->dumpProducts[0]->soluong }}</span></td>
																		<td class="cgt-des">{{ number_format($item->dumpProducts[0]->soluong * $item->price) }}
																		<?php $total += $item->dumpProducts[0]->soluong * $item->price ;
																		?>
																		</td>
																	</tr>
																	@endforeach
																	<tr class="cart_item">
																		 <td class="ctg-type crt-total"> Total</td>
																		<td class="cgt-des prc-total">{{ $total }}</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="payment-section">
									                        <div class="pay-toggle">
									                              <div class="pay-type-total">
									                                <div class="pay-type">
									                                  <input type="radio" id="pay-toggle01" name="pay">
									                                  <label for="pay-toggle01">Direct Bank Transfer</label>
									                                </div>
									                                <div class="pay-type">
									                                  <input type="radio" id="pay-toggle02" name="pay">
									                                  <label for="pay-toggle02">Cheque Payment</label>
									                                </div>
									                                <div class="pay-type">
									                                  <input type="radio" id="pay-toggle03" name="pay">
									                                  <label for="pay-toggle03">Cash on Delivery</label>
									                                </div>
									                                <div class="pay-type">
									                                  <input type="radio" id="pay-toggle04" name="pay">
									                                  <label for="pay-toggle04">Paypal</label>
									                                </div>
									                              </div>
									                        </div>
                    									</div>
														{!! Form::submit('dathang',['class' =>'formsub']) !!}
												 {!! Form::close() !!}
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
@endsection
