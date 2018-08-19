@extends('master')
@section('title', 'home')
@section('content')
<div class="fullwidthbanner-container">
    <div class="fullwidthbanner">
        <div class="bannercontainer" >
            <div class="banner" >
                    <ul>
                        @foreach( $slide as $sl )
                        <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="{{ asset('image/slide/' . $sl->image) }}" data-src="{{ asset('image/slide/' . $sl->image) }}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('{{ asset('image/slide/' . $sl->image) }}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
            </div>
        </div>
        <div class="tp-bannertimer"></div>
    </div>
</div>
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="beta-products-list">
                        <h4>{{ trans('New Products') }}</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">{{ count($newproducts) }} {{ trans('home.stylesfound') }}</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach($newproducts as $newproduct)
                            <div class="col-sm-3">
                                <div class="single-item">
                                    @if($newproduct->promotion_price ==0)
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">{{ trans('home.sale') }}</div>
                                    </div>
                                    @endif
                                    <div class="single-item-header">
                                        <a href="{{ route('chitietsanpham', $newproduct->id ) }}">
                                            <img src="{{ asset('image/product/' .$newproduct->image) }}" alt="" height="250px;">
                                        </a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{ $newproduct->name }}</p>
                                        <p class="single-item-price">
                                            @if($newproduct->promotion_price ==0)
                                                <span class="">{{ $newproduct->price }}</span>
                                            @else
                                                <span class="flash-del">{{ $newproduct->price }}</span>
                                                <span class="flash-sale">{{ $newproduct->promotion_price }}</span>
                                            @endif
                                         </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="{{ route('addToCart') }}"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="{{ route('chitietsanpham',$newproduct->id ) }}">{{ trans('home.details') }} <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="row"> {{ $newproducts->links() }}</div>
                    </div>
                    <div class="space50">&nbsp;</div>
                    <div class="beta-products-list">
                        <h4>{{ trans('home.topproduct')}}</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">{{ count($topproducts) }} {{ trans('home.stylesfound') }}</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach($topproducts as $topproduct)
                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="single-item-header">
                                         <a href="{{ route('chitietsanpham', $topproduct->id) }}">
                                            <img src="{{ asset('image/product/' . $topproduct->image )}}" alt="" style="height: 250px;">
                                        </a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{ $topproduct->name }}</p>
                                        <p class="single-item-price">
                                            @if($topproduct->promotion_price ==0)
                                                <span class="">{{ $topproduct->price }}</span>
                                            @else
                                                <span class="flash-del">{{ $topproduct->price }}</span>
                                                <span class="flash-sale">{{ $topproduct->promotion_price }}</span>
                                            @endif
                                         </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="{{ route('addToCart') }}"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="{{ route('chitietsanpham', $topproduct->id) }}">{{ trans('home.details') }} <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">
                            {{  $topproducts-> links() }}
                        </div>
                        <div class="space40">&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
