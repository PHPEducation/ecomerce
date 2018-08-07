@extends('master')

@section('title', 'Post')
@section('content')

<div id="detail">
    <div class="container">
        <div class="row">
            <div class="blog-title1">
                <h4 class="title">{{ $post->title }}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-5">
                <img src="{{ asset('images/blog-img1.jpg') }}" alt="Blog">
            </div>
            <div class="col-xs-7">
                {{ $post->content }}
            </div>
        </div>
    </div>
</div>

@endsection
