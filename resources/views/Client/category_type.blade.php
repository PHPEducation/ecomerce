@extends('master')
@section('title', 'category_tu')
@section('content')
</div> <!-- #header -->
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">{{ trans('home.product') }}</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href="{{ route('trangchu') }}">{{ trans('home.home') }}</a> / <span>{{ trans('home.product') }}</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-3">
                        <ul class="aside-menu">
                            @foreach($categorytypes as $categorytype)
                            <li><a href="{{ route('loaisanpham' ,$categorytype->id ) }}">{{ $categorytype->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <div class="beta-products-list">
                            <h4>{{ trans('home.New Products') }}</h4>
                            <div class="beta-products-details">
                                <p class="pull-left"> {{ count($typeproducts) }} {{ trans('home.stylesfound') }}</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                @foreach($typeproducts as $typeproduct)
                                <div class="col-sm-4">
                                    <div class="single-item">
                                         @if($typeproduct->promotion_price ==0)
                                            <div class="ribbon-wrapper">
                                                <div class="ribbon sale">{{ trans('home.sale') }}</div>
                                            </div>
                                        @endif
                                        <div class="single-item-header">
                                            <a href="{{ route('chitietsanpham', $typeproduct->id) }}"><img src="{{ asset('image/product/' . $typeproduct->image )}}" alt="" height="250px;"></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{ $typeproduct->name }}</p>
                                            <p class="single-item-price">
                                            @if($typeproduct->promotion_price ==0)
                                                <span class="">{{ $typeproduct->price }}</span>
                                            @else
                                                <span class="flash-del">{{ $typeproduct->price }}</span>
                                                <span class="flash-sale">{{ $typeproduct->promotion_price }}</span>
                                            @endif
                                         </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="{{ route('addToCart') }}"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="{{ route('chitietsanpham', $typeproduct->id) }}">{{ trans('home.details') }} <i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                        </div>
                        <div class="space50">&nbsp;</div>
                        <div class="beta-products-list">
                            <h4>San pham lien quan</h4>
                            <div class="beta-products-details">
                                <p class="pull-left">{{ count($catetoryfurthers) }} {{ trans('home.stylesfound') }}</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                @foreach($catetoryfurthers as $catetoryfurther)
                                <div class="col-sm-4">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href="product.html"><img src="{{ asset('image/product/' . $catetoryfurther->image) }}" alt="" height="250px;"></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{ $catetoryfurther->name }}</p>
                                            <p class="single-item-price">
                                                @if($catetoryfurther->promotion_price ==0)
                                                    <span class="">{{ $catetoryfurther->price }}</span>
                                                @else
                                                    <span class="flash-del">{{ $catetoryfurther->price }}</span>
                                                    <span class="flash-sale">{{ $catetoryfurther->promotion_price }}</span>
                                                @endif
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="{{ route('addToCart') }}"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="{{ route('chitietsanpham', $catetoryfurther->id) }}">{{ trans('home.details') }}<i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="space40">&nbsp;</div>
                            <div class="row">
                                {{ $catetoryfurthers->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
