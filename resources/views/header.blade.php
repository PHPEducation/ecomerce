 <div id="header">
        <div class="header-top">
            <div class="container">
                <div class="pull-left auto-width-left">
                    <ul class="top-menu menu-beta l-inline">
                        <li><a href=""><i class="fa fa-home"></i>{{ trans('home.address') }}</a></li>
                        <li><a href=""><i class="fa fa-phone"></i>{{ trans('home.phone') }}</a></li>
                    </ul>
                </div>
                <div class="pull-right auto-width-right">
                    <ul class="top-details menu-beta l-inline">
                        <li><a href="{{ route('taikhoan') }}"><i class="fa fa-user"></i>{{ trans('home.account') }}</a></li>
                        <li><a href="{{ route('dangky') }}">{{ trans('home.login') }}</a></li>
                        <li><a href="{{ route('dangnhap') }}">{{ trans('home.register') }}</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="header-body">
            <div class="container beta-relative">
                <div class="pull-left">
                    <a href="{{ route('trangchu') }}" id="logo"><img src="assets/dest/images/logo-cake.png" width="200px" alt=""></a>
                </div>
                <div class="pull-right beta-components space-left ov">
                    <div class="space10">&nbsp;</div>
                    <div class="beta-comp">
                        <form role="search" method="get" id="searchform" action="/">
                            <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..." />
                            <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                        </form>
                    </div>

                    <div class="beta-comp">
                        <div class="cart">
                            <div class="beta-select"><i class="fa fa-shopping-cart"></i> {{ trans('home.cart') }} <i class="fa fa-chevron-down"></i></div>
                            <div class="beta-dropdown cart-body">
                                <div class="cart-item">
                                    <div class="media">
                                        <a class="pull-left" href="#"><img src="assets/dest/images/products/cart/1.png" alt=""></a>
                                        <div class="media-body">
                                            <span class="cart-item-title">{{ trans('home.nameproduct') }}</span>
                                            <span class="cart-item-options">{{ trans('home.size') }}</span>
                                            <span class="cart-item-amount">1*<span>$49.50</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-caption">
                                    <div class="cart-total text-right">{{ trans('home.total') }}: <span class="cart-total-value">$34.55</span></div>
                                    <div class="clearfix"></div>

                                    <div class="center">
                                        <div class="space10">&nbsp;</div>
                                        <a href="{{ route('dathang') }}" class="beta-btn primary text-center">{{ trans('home.order') }} <i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- .cart -->
                    </div>
                </div>
                <div class="clearfix"></div>
            </div> <!-- .container -->
        </div> <!-- .header-body -->
        <div class="header-bottom" style="background-color: #0277b8;">
            <div class="container">
                <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>{{ trans('home.menu') }}</span> <i class="fa fa-bars"></i></a>
                <div class="visible-xs clearfix"></div>
                <nav class="main-menu">
                    <ul class="l-inline ov">
                        <li><a href="{{ route('trangchu') }}">{{ trans('home.home') }}</a></li>
                        <li><a href="#">{{ trans('home.product') }}</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('loaisanpham') }}">{{ trans('home.product1') }}</a></li>
                                <li><a href="{{ route('loaisanpham') }}">{{ trans('home.product2') }}</a></li>

                            </ul>
                        </li>
                        <li><a href="{{ route('taikhoan') }}">{{ trans('home.info') }}</a></li>
                        <li><a href="{{ route('lienhe') }}">{{ trans('home.about') }}</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </nav>
            </div>
        </div>
    </div>
