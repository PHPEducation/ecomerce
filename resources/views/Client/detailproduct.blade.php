@extends('master')
@section('title', 'home')
@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">{{ trans('home.Product') }}</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href="{{ route('trangchu') }}">{{ trans('home.home') }}</a> / <span>{{ trans('home.Product') }}</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div id="content">
            <div class="row">
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="{{ asset( 'image/product/' .$product->image ) }}" alt="">
                        </div>
                        <div class="col-sm-8">
                            <div class="single-item-body">
                                <p class="single-item-title">{{ $product->name }}</p>
                               <p class="single-item-price">
                                    @if($product->promotion_price == 0)
                                        <span class="">{{ number_format($product->price) }}</span>
                                    @else
                                        <span class="flash-del">{{ number_format($product->price) }}</span>
                                        <span class="flash-sale">{{ number_format($product->promotion_price) }}</span>
                                    @endif
                                </p>
                            </div>
                            <div class="clearfix"></div>
                            <div class="space20">&nbsp;</div>
                            <div class="single-item-desc">
                                <p>{{ $product->description }}</p>
                            </div>
                            <div class="space20">&nbsp;</div>
                            <p>số lượng</p>
                            <form method="post">
                                <div class="single-item-options">
                                    <select class="wc-select" name="color">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <a class="add-to-cart" href="{{ route('addToCart',$product->id ) }}"><i class="fa fa-shopping-cart"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    <div class="space40">&nbsp;</div>
                    @if(Auth::check())
                    @if(session('thong bao'))
                        {{ session('thong bao') }}
                    @endif
                    <div class="woocommerce-tabs">
                        <ul class="tabs">
                            <li><a href="#tab-description">Description</a></li>
                            <li><a href="#tab-reviews">Reviews (0)</a></li>
                        </ul>

                        <div id="load-comment">
                            @include('Client.comment', ['comments' => $product->comments])
                        </div>
                         {!! Form::open(['method' => 'POST']) !!}
                            <div class="panel" id="tab-reviews{{ $product->id }}">
                                <textarea name ="content"  id="text"></textarea>
                            </div>
                           {!! Form::submit( trans('home.send'), ['id' => 'commendsend']) !!}
                        {!! Form::close() !!}
                    </div>
                    @endif
                    <div class="space50">&nbsp;</div>
                    <div class="beta-products-list">
                        <h4>{{ trans('home.relatedProducts') }}</h4>
                        <div class="row">
                            @foreach($productothers as $productother)
                            <div class="col-sm-4">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="{{ route('chitietsanpham', $productother->id ) }}"><img src="{{ asset('image/product/' .$productother->image) }}" alt="" height="250px;"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{ $productother->name }}</p>
                                        <p class="single-item-price">
                                            @if($product->promotion_price == 0)
                                                <span class="">{{ number_format($product->price) }}</span>
                                            @else
                                                <span class="flash-del">{{ number_format($product->price) }}</span>
                                                <span class="flash-sale">{{ number_format($product->promotion_price) }}</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="{{ route('addToCart',$productother->id ) }}"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="{{ route('chitietsanpham', $productother->id ) }}">{{ trans('home.details') }} <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                        </div>
                    </div>
                    <div class="row">
                        {{ $productothers->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  $('#commendsend').on('click',function(event){
        event.preventDefault();
        var form = $('#text').serializeArray()[0].value;
        var id = $('div.panel').attr('id').substring(11);
        $.ajax({
            url: '/comments/' + id,
            type: "POST",
            dataType: 'JSON',
            data:{
                content: form,
                id: id
            },
            success: function(data){
                $('#load-comment').append('<div>' + form  + '</div>');
            },
            error: function(error){
            }
        });
    })

});
</script>
@endsection
