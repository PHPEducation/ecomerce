@extends('master')
@section('title', 'about')
@section('content')
<div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">{{ trans('home.contact') }}</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href="{{ route('trangchu') }}">{{ trans('home.Home')}}</a> / <span>{{ trans('home.contact') }}</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
</div>
<div class="container">
    <div id="content">
        <div class="our-history">
            <h2 class="text-center wow fadeInDown">Our History</h2>
            <div class="space35">&nbsp;</div>

            <div class="history-slider">
                <div class="history-navigation">
                    <a data-slide-index="0" href="#" class="circle"><span class="auto-center">2003</span></a>
                    <a data-slide-index="1" href="#" class="circle"><span class="auto-center">2004</span></a>
                    <a data-slide-index="2" href="#" class="circle"><span class="auto-center">2005</span></a>
                    <a data-slide-index="3" href="#" class="circle"><span class="auto-center">2007</span></a>
                    <a data-slide-index="4" href="#" class="circle"><span class="auto-center">2009</span></a>
                    <a data-slide-index="5" href="#" class="circle"><span class="auto-center">2011</span></a>
                    <a data-slide-index="6" href="#" class="circle"><span class="auto-center">2014</span></a>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
