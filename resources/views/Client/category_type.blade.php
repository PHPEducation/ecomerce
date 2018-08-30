@extends('master')
@section('title', 'category_tu')
@section('content')
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
                            @foreach($categoryTypes as $categoryType)
                            <li>
                                <a href="{{ route('categorytype' , $categoryType->id ) }}">
                                    {{ $categoryType->name }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <div class="beta-products-list">
                            <h4>{{ trans('home.New Products') }}</h4>
                            <div class="beta-products-details">
                                <p class="pull-left"> {{ count($typeProducts) }} {{ trans('home.stylesfound') }}</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                @foreach($typeProducts as $typeProduct)
                                <div class="col-sm-4">
                                    <div class="single-item">
                                         @if($typeProduct->promotion_price == config('app.comparefix'))
                                            <div class="ribbon-wrapper">
                                                <div class="ribbon sale">{{ trans('home.sale') }}</div>
                                            </div>
                                        @endif
                                        <div class="single-item-header">
                                            <a href="{{ route('detailproduct', $typeProduct->id) }}">
                                                <img src="{{ asset(config('app.link') . $typeProduct->image )}}" alt="" class="img__fix"></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{ $typeProduct->name }}</p>
                                            <p class="single-item-price">
                                            @if($typeProduct->promotion_price == config('app.comparefix'))
                                                <span class="">{{ $typeProduct->price }}</span>
                                            @else
                                                <span class="flash-del">{{ $typeProduct->price }}</span>
                                                <span class="flash-sale">{{ $typeProduct->promotion_price }}</span>
                                            @endif
                                         </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="{{ route('addToCart') }}"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="{{ route('detailproduct', $typeProduct->id) }}">{{ trans('home.details') }} <i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                        </div>
                        <div class="space50">&nbsp;</div>
                        <div class="beta-products-list">
                            <h4>{{ trans('home.sanphamlienquan') }}</h4>
                            <div class="beta-products-details">
                                <p class="pull-left">{{ count($catetoryFurthers) }} {{ trans('home.stylesfound') }}</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                @foreach($catetoryFurthers as $catetoryFurther)
                                <div class="col-sm-4">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href="{{route('detailproduct' ,$catetoryFurther->id )}}">
                                                <img src="{{ asset(config('app.link') . $catetoryFurther->image) }}" alt="" class="img__fix">
                                            </a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{ $catetoryFurther->name }}</p>
                                            <p class="single-item-price">
                                                @if($catetoryFurther->promotion_price == config('app.comparefix'))
                                                    <span class="">{{ $catetoryFurther->price }}</span>
                                                @else
                                                    <span class="flash-del">{{ $catetoryFurther->price }}</span>
                                                    <span class="flash-sale">{{ $catetoryFurther->promotion_price }}</span>
                                                @endif
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="{{ route('addToCart') }}"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="{{ route('detailproduct', $catetoryFurther->id) }}">{{ trans('home.details') }}<i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="space40">&nbsp;</div>
                            <div class="row">
                                {{ $catetoryFurthers->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
