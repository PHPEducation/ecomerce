        <header>
            <div class="header-container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-3 col-xs-12">
                            <div class="logo"><a title="ecommerce Template" href="index.html"><img alt="ecommerce Template" src="images/logo.png"></a></div>
                            <div class="nav-icon">
                                <div class="mega-container visible-lg visible-md visible-sm">
                                    <div class="navleft-container">
                                        <div class="mega-menu-title">
                                            <h3><i class="fa fa-navicon"></i>{{ __('cate') }}</h3>
                                        </div>
                                        <div class="mega-menu-category">
                                            <ul class="nav">
                                                <li><a href="#">{{ __('home') }}</a>
                                                    <div class="wrap-popup column1">
                                                        <div class="popup">
                                                            <ul class="nav">
                                                                <li>
                                                                    <a href="">
                                                                        {{ __('homeshop1') }}
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="version2/index.html">{{ __('homeshop2') }}</a>
                                                                </li>
                                                                <li>
                                                                    <a href="version3/index.html">{{ __('homeshop3') }}</a>
                                                                </li>
                                                                <li>
                                                                    <a href="version4/index.html">{{ __('homeshop4') }}</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li><a href="#">{{ __('page') }}</a>
                                                    <div class="wrap-popup">
                                                        <div class="popup">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <ul class="nav">
                                                                        <li>
                                                                            <a href="{!! action('PageController@shop') !!}">
                                                                                <span>{{ __('shopgird') }}</span>
                                                                            </a>
                                                                        </li>
                                                                        <li><a href="shop-grid-sidebar.html"><span>{{ __('shopsidebar') }}</span></a></li>
                                                                        <li><a href="shop-list.html"><span>{{ __('shoplist') }}</span></a></li>
                                                                        <li><a href="shop-list-sidebar.html"><span>{{ __('shoplistside') }}</span></a></li>
                                                                        <li><a href="product-detail.html"><span>{{ __('productdetail') }}</span></a></li>
                                                                        <li><a href="product-detail-sidebar.html"><span>{{ __('productdetailside') }}</span></a></li>
                                                                        <li><a href="shopping-cart.html"><span>{{ __('shopcart') }}</span></a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <ul class="nav">
                                                                        <li><a href="checkout.html"><span>{{ __('checkout') }}</span></a></li>
                                                                        <li><a href="wishlist.html"><span>{{ __('wishlist') }}</span></a></li>
                                                                        <li><a href="dashboard.html"><span>{{ __('dashboard') }}</span></a></li>
                                                                        <li><a href="compare.html"><span>{{ __('compare') }}</span></a></li>
                                                                        <li><a href="quick-view.html"><span>{{ __('quickview') }}</span></a></li>
                                                                        <li><a href="complete-order.html">{{ __('completeorder') }}</a></li>
                                                                        <li><a href="my-account-information.html">{{ __('accountinfo') }}</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <ul class="nav">
                                                                        <li><a href="faq.html"><span>{{ __('faq') }}</span></a></li>
                                                                        <li><a href="sitemap.html"><span>{{ __('sitemap') }}</span></a></li>
                                                                        <li><a href="track-order.html"><span>{{ __('trackorder') }}</span></a></li>
                                                                        <li><a href="register-ac.html"><span>{{ __('registeraccount') }}</span></a></li>
                                                                        <li><a href="forgot-password.html"><span>{{ __('forgotpass') }}</span></a></li>
                                                                        <li><a href="team.html"><span>{{ __('team') }}</span></a></li>
                                                                        <li><a href="404error.html"><span>{{ __('404 Error Page') }}</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li><a href="#">{{ __('men') }}</a>
                                                    <div class="wrap-popup">
                                                        <div class="popup">
                                                            <div class="row">
                                                                <div class="col-md-4 col-sm-6">
                                                                    <h3><a href="shop-grid-sidebar.html">{{ __('clothing') }}</a></h3>
                                                                    <ul class="nav">
                                                                        <li><a href="shop-grid-sidebar.html">{{ __('tshirt') }}</a></li>
                                                                        <li><a href="shop-grid-sidebar.html">{{ __('shirt') }}</a></li>
                                                                        <li><a href="shop-grid-sidebar.html">{{ __('trouser') }}</a></li>
                                                                        <li><a href="shop-grid-sidebar.html">{{ __('sleepwear') }}</a></li>
                                                                    </ul>
                                                                    <br>
                                                                    <h3><a href="shop-grid-sidebar.html">{{ __('shoes') }}</a></h3>
                                                                    <ul class="nav">
                                                                        <li><a href="shop-grid-sidebar.html">{{ __('flatshoes') }}</a></li>
                                                                        <li><a href="shop-grid-sidebar.html">{{ __('flatsandals') }}</a></li>
                                                                        <li><a href="shop-grid-sidebar.html">{{ __('boots') }}</a></li>
                                                                        <li><a href="shop-grid-sidebar.html">{{ __('heels') }}</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-md-4 col-sm-6 has-sep">
                                                                    <h3><a href="shop-grid-sidebar.html">{{ __('jwellery') }}</a></h3>
                                                                    <ul class="nav">
                                                                        <li><a href="shop-grid-sidebar.html">{{ __('bracelets') }}</a></li>
                                                                        <li><a href="shop-grid-sidebar.html">Necklaces &amp; Pendent</a></li>
                                                                        <li><a href="shop-grid-sidebar.html">{{ __('pendants') }}</a></li>
                                                                        <li><a href="shop-grid-sidebar.html">Pins &amp; Brooches</a></li>
                                                                    </ul>
                                                                    <br>
                                                                    <h3><a href="shop-grid-sidebar.html">{{ __('watches') }}</a></h3>
                                                                    <ul class="nav">
                                                                        <li><a href="shop-grid-sidebar.html">{{ __('fastrack') }}</a></li>
                                                                        <li><a href="shop-grid-sidebar.html">{{ __('casio') }}</a></li>
                                                                        <li><a href="shop-grid-sidebar.html">{{ __('sonata') }}</a></li>
                                                                        <li><a href="shop-grid-sidebar.html">{{ __('maxima') }}</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-md-4 has-sep hidden-sm">
                                                                    <div class="custom-menu-right">
                                                                        <div class="box-banner media">
                                                                            <div class="add-right"><a href="#"><img src="images/jtv-menu-banner1.jpg" class="img-responsive" alt="New Arrive"></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <a href="#" class="ads"><img src="images/jtv-menu-banner4.jpg" alt="Mega Sale" class="img-responsive"></a> </div>
                                                        </div>
                                                    </li>
                                                    <li><a href="#">{{ __('women') }}</a>
                                                        <div class="wrap-popup">
                                                            <div class="popup">
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-6">
                                                                        <h3><a href="shop-grid-sidebar.html">{{ __('clothing') }}</a></h3>
                                                                        <ul class="nav">
                                                                            <li><a href="shop-grid-sidebar.html">{{ __('dresssale') }}</a></li>
                                                                            <li><a href="shop-grid-sidebar.html">Sarees</a></li>
                                                                            <li><a href="shop-grid-sidebar.html">Kurta & kurti</a></li>
                                                                            <li><a href="shop-grid-sidebar.html">[{__('dressmater')}]</a></li>
                                                                            <li><a href="shop-grid-sidebar.html">{{ __('salwarkameez') }}</a></li>
                                                                        </ul>
                                                                        <br>
                                                                        <h3><a href="shop-grid-sidebar.html">{{ __('jewellery') }}</a></h3>
                                                                        <ul class="nav">
                                                                            <li><a href="shop-grid-sidebar.html">{{ __('rings') }}</a></li>
                                                                            <li><a href="shop-grid-sidebar.html">{{ __('earrings') }}</a></li>
                                                                            <li><a href="shop-grid-sidebar.html">{{ __('jewellery') }} sets</a></li>
                                                                            <li><a href="shop-grid-sidebar.html">{{ __('pendants') }}</a></li>
                                                                            <li><a href="shop-grid-sidebar.html">{{ __('plasticjew') }}</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-6 has-sep">
                                                                        <h3><a href="shop-grid-sidebar.html">{{ __('beauty') }}</a></h3>
                                                                        <ul class="nav">
                                                                            <li><a href="shop-grid-sidebar.html">{{ __('makeup') }}</a></li>
                                                                            <li><a href="shop-grid-sidebar.html">{{ __('haircare') }}</a></li>
                                                                            <li><a href="shop-grid-sidebar.html">{{ __('deodorants') }}</a></li>
                                                                            <li><a href="shop-grid-sidebar.html">{{ __('bathandbody') }}</a></li>
                                                                            <li><a href="shop-grid-sidebar.html">{{ __('skincare') }}</a></li>
                                                                        </ul>
                                                                        <br>
                                                                        <h3><a href="shop-grid-sidebar.html">{{ __('footwear') }}</a></h3>
                                                                        <ul class="nav">
                                                                            <li><a href="shop-grid-sidebar.html">{{ __('flats') }}</a></li>
                                                                            <li><a href="shop-grid-sidebar.html">{{ __('heels') }}</a></li>
                                                                            <li><a href="shop-grid-sidebar.html">{{ __('boots') }}</a></li>
                                                                            <li><a href="shop-grid-sidebar.html">{{ __('slippers') }}</a></li>
                                                                            <li><a href="shop-grid-sidebar.html">{{ __('shoes') }}</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-md-4 has-sep hidden-sm">
                                                                        <div class="custom-menu-right">
                                                                            <div class="box-banner media">
                                                                                <div class="add-desc">
                                                                                    <h3>{{ __('Top') }}<br>
                                                                                        {{ __('Glass') }} </h3>
                                                                                        <div class="price-sale">2018</div>
                                                                                        <a href="#">{{ __('ShopNow') }}</a> </div>
                                                                                        <div class="add-right"><img src="images/jtv-menu-banner2.jpg" alt="Top Glass" class="img-responsive"></div>
                                                                                    </div>
                                                                                    <div class="box-banner media">
                                                                                        <div class="add-desc">
                                                                                            <h3>{{ __('Save') }}</h3>
                                                                                            <div class="price-sale">35%</div>
                                                                                            <a href="#">{{ __('BuyNow') }}</a> </div>
                                                                                            <div class="add-right"><img src="images/jtv-menu-banner3.jpg" alt="Save 35%" class="img-responsive"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="nosub"><a href="shop-grid-sidebar.html">{{ __('Kids') }}</a></li>
                                                                <li class="nosub"><a href="shop-grid-sidebar.html">{{ __('Accessories') }}</a></li>
                                                                <li><a href="blog.html">{{ __('Blog') }}</a>
                                                                    <div class="wrap-popup column1">
                                                                        <div class="popup">
                                                                            <ul class="nav">
                                                                                <li><a href="{!! action('PageController@blog') !!}">{{ __('Blog') }}</a></li>
                                                                                <li><a href="blog-archive.html">{{ __('BlogArchive') }}</a></li>
                                                                                <li><a href="blog_single_post.html">{{ __('BlogSingle') }}</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="nosub"><a href="contact.html">{{ __('ContactUs') }}</a></li>
                                                            </ul>
                                                            <div class="side-banner"><img src="images/top-banner.jpg" alt="Flash Sale" class="img-responsive"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-sm-9 col-xs-12 jtv-rhs-header">
                                            <div class="jtv-mob-toggle-wrap">
                                                <div class="mm-toggle"><i class="fa fa-reorder"></i><span class="mm-label">{{ __('Menu') }}</span></div>
                                            </div>
                                            <div class="jtv-header-box">
                                                <div class="search_cart_block">
                                                    <div class="search-box hidden-xs">
                                                        {!! Form::open(['method' => 'GET', 'id' => 'search_mini_form']) !!}
                                                            {!! Form::text('q', '' , ['class' => 'searchbox', 'id' => 'search', 'placeholder' => 'Search entire store here...', 'maxlength' => '128']) !!}
                                                                <span class="hidden-sm">{{ __('Search') }}</span><i class="fa fa-search hidden-xs hidden-lg hidden-md"></i>
                                                        {!! Form::close() !!}
                                                    </div>
                                                    <div class="right_menu">
                                                        <div class="menu_top">
                                                            <div class="top-cart-contain pull-right">
                                                                <div class="mini-cart">
                                                                    <div class="basket"><a class="basket-icon" href="#"><i class="fa fa-shopping-basket"></i> {{ __('ShoppingCart') }} <span>3</span></a>
                                                                        <div class="top-cart-content">
                                                                            <div class="block-subtitle">
                                                                                <div class="top-subtotal">3 items, <span class="price">$399.49</span></div>
                                                                            </div>
                                                                            <ul class="mini-products-list" id="cart-sidebar">
                                                                                <li class="item">
                                                                                    <div class="item-inner"><a class="product-image" title="product tilte is here" href="product-detail.html"><img alt="product tilte is here" src="images/products/product-fashion-1.jpg"></a>
                                                                                        <div class="product-details">
                                                                                            <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">{{ __('Remove') }}</a> <a class="btn-edit" title="Edit item" href="#"><i class="fa fa-pencil"></i><span class="hidden">{{ __('Edititem') }}</span></a> </div>
                                                                                            <p class="product-name"><a href="product-detail.html">{{ __('producttitle') }}</a></p>
                                                                                            <strong>1</strong> x <span class="price">$119.99</span></div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="item">
                                                                                        <div class="item-inner"><a class="product-image" title="Product tilte is here" href="product-detail.html"><img alt="Product tilte is here" src="images/products/product-fashion-3.jpg"></a>
                                                                                            <div class="product-details">
                                                                                                <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">{{ __('Remove') }}</a> <a class="btn-edit" title="Edit item" href="#"><i class="fa fa-pencil"></i><span class="hidden">{{ __('Edititem') }}</span></a> </div>
                                                                                                <p class="product-name"><a href="product-detail.html">{{ __('producttitle') }}</a></p>
                                                                                                <strong>1</strong> x <span class="price">$79.66</span></div>
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="item">
                                                                                            <div class="item-inner"><a class="product-image" title="Product tilte is here" href="product-detail.html"><img alt="Product tilte is here" src="images/products/product-fashion-4.jpg"></a>
                                                                                                <div class="product-details">
                                                                                                    <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">{{ __('Remove') }}</a> <a class="btn-edit" title="Edit item" href="#"><i class="fa fa-pencil"></i><span class="hidden">{{ __('Edititem') }}</span></a> </div>
                                                                                                    <p class="product-name"><a href="product-detail.html">{{ __('producttitle') }}</a></p>
                                                                                                    <strong>1</strong> x <span class="price">$99.89</span></div>
                                                                                                </div>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <div class="actions"> <a href="shopping-cart.html" class="view-cart"><span>{{ __('ViewCart') }}</span></a>
                                                                                            <button onclick="window.location.href='checkout.html'" class="btn-checkout" title="Checkout" type="button"><span>{{ __('checkout') }}</span></button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="language-box hidden-xs">
                                                                        <select class="selectpicker" data-width="fit">
                                                                            <option>{{ __('English') }}</option>
                                                                            <option>{{ __('Vietnamese') }}</option>
                                                                            <option>{{ __('German') }}</option>
                                                                            <option>{{ __('Español') }}</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="currency-box hidden-xs">
                                                                        {!! Form::open(['class' => 'form-inline']) !!}
                                                                            <div class="input-group">
                                                                                <div class="currency-addon">
                                                                                    <select class="currency-selector">
                                                                                        <option data-symbol="$">{{ __('USD') }}</option>
                                                                                        <option data-symbol="€">{{ __('EUR') }}</option>
                                                                                        <option data-symbol="£">{{ __('GBP') }}</option>
                                                                                        <option data-symbol="¥">{{ __('JPY') }}</option>
                                                                                        <option data-symbol="$">{{ __('CAD') }}</option>
                                                                                        <option data-symbol="$">{{ __('AUD') }}</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        {!! Form::close() !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="top_section hidden-xs">
                                                                <div class="toplinks">
                                                                    <div class="site-dir hidden-xs"> <a class="hidden-sm" href="#"><i class="fa fa-phone"></i> <strong>{{ __('Hotline') }}</strong> +1 123 456 7890</a> <a href="mailto:support@example.com"><i class="fa fa-envelope"></i> support@example.com</a> </div>
                                                                    <ul class="links">
                                                                        <li><a title="My Account" href="my-account.html">{{ __('MyAccount') }}</a></li>
                                                                        <li><a title="My Wishlist" href="wishlist.html">{{ __('wishlist') }}</a></li>
                                                                        <li><a title="Checkout" href="checkout.html">{{ __('checkout') }}</a></li>
                                                                        <li><a title="Track Order" href="track-order.html">{{ __('trackorder') }}</a></li>
                                                                        <li><a title="Log In" href="{{  route('login')  }}">{{ __('LogIn') }}</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </header>

