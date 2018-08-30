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
                    @if(Auth::check())
                        <li><a href="">Chào bạn {{ Auth::user()->name }}</a></li>
                        <li><a href="{{ route('Logout') }}">Đăng xuất</a></li>
                    @else
                        <li><a href="{{ route('dangnhap') }}">{{ trans('home.login') }}</a></li>
                        <li><a href="{{ route('dangky')}}">{{ trans('home.register') }}</a></li>
                    @endif
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
                    {!! Form::open([
                        'url' => route('searchProduct'),
                        'method' => 'get',
                        'id'=> 'searchform'
                    ]) !!}
                    {!! Form::text('', '' , ['name' => 'key', 'placeholder' => 'Nhập từ khóa...']) !!}
                    {!! Form::submit('', ['class' =>"fa fa-search", 'id' => 'searchsubmit']) !!}
                    {!! Form::close() !!}
                </div>
                <div class="beta-comp">
                    @if(Session::has('cart'))
                    <div class="cart">
                        <div class="beta-select"><i class="fa fa-shopping-cart"></i> {{ trans('home.cart') }} (@if(Session::has('cart')) {{ Session('cart')->totalQty }} @else Trong @endif)<i class="fa fa-chevron-down"></i></div>
                        <div class="beta-dropdown cart-body">
                            @foreach($product_carts as $product_cart)
                            <div class="cart-item">
                                <a class="cart-item-edit" href="#"><i class="fa fa-pencil"></i></a>
                                <a class="cart-item-delete" href="{{ route('delItemCart' ,$product_cart['item']['id'] )}}"><i class="fa fa-times"></i></a>
                                <div class="media">
                                    <a class="pull-left" href="#"><img src="{{ asset('image/product/' .$product_cart['item']['image'] ) }}" alt=""></a>
                                    <div class="media-body">
                                        <span class="cart-item-title">{{ $product_cart['item']['name'] }}</span>
                                        <span class="cart-item-amount">{{ $product_cart['qty'] }}*<span>{{ $product_cart['item']['price'] }}</span></span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="cart-caption">
                                <div class="cart-total text-right">{{ trans('home.total') }}: <span class="cart-total-value">{{ Session('cart')->totalPrice }}</span></div>
                                <div class="clearfix"></div>
                                <div class="center">
                                    <div class="space10">&nbsp;</div>
                                    <a href="{{ route('dathang') }}" class="beta-btn primary text-center">{{ trans('home.order') }} <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="header-bottom" style="background-color: #0277b8;">
        <div class="container">
            <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>{{ trans('home.menu') }}</span> <i class="fa fa-bars"></i></a>
            <div class="visible-xs clearfix"></div>
            <nav class="main-menu">
                <ul class="l-inline ov">
                    <li><a href="{{ route('trangchu') }}">{{ trans('home.home') }}</a></li>
                    <li><a href="#">{{ trans('home.product') }}</a>
                        <ul class="sub-menu">
                            @foreach($typecategories as $typecategorie)
                            <li>
                                <a href="{{ route('categorytype', $typecategorie->id ) }}">{{ $typecategorie->name }}</a>
                            </li>
                            @endforeach
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
