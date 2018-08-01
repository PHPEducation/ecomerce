@extends('master')
@section('title', 'shoplist')
@section('content')
<div id="page">
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li>
                            <a href="" title="Go to Home Page">{{ __('home') }}</a><span>/</span>
                        </li>
                        <li>
                            <strong>{{ __('Blog') }}</strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="blog_post">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9" id="center_column">
                    <div class="center_column">
                        <div class="page-title">
                            <h2>{{ __('Blog post') }}</h2>
                        </div>
                        <ul class="blog-posts">
                            @foreach($posts as $post)
                            <li class="post-item">
                                <article class="entry">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="entry-thumb">
                                                <a href="{{ url($post->slug) }}">
                                                    <figure>
                                                        <img src="{{ asset('images/blog-img1.jpg') }}" alt="Blog">
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <h3 class="entry-title">
                                                <a href="{{ url($post->slug) }}">{{ $post->title }}</a>
                                            </h3>
                                            <div class="entry-meta-data">
                                                <span class="author">
                                                    <i class="fa fa-user"></i>
                                                    &nbsp; by: <a href="#">{{ $post->author }}</a>
                                                </span>
                                                <span class="cat">
                                                    <i class="fa fa-folder"></i>
                                                    &nbsp; <a href="#">News, </a>
                                                    <a href="#">{{ __('Promotions') }}</a>
                                                </span>
                                                <span class="comment-count">
                                                    <i class="fa fa-comment"></i>
                                                    &nbsp; 3
                                                </span>
                                                <span class="date">
                                                    <i class="fa fa-calendar"></i>
                                                    &nbsp; {{ $post->date }}
                                                </span>
                                            </div>

                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>&nbsp; <span>(5 votes)</span>
                                            </div>

                                            <div class="entry-excerpt">{{ $post->content }}</div>
                                            <a href="{{ url($post->slug) }}" class="read-more">Read more&nbsp; <i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            @endforeach
                        </ul>

                        <div class="sortPagiBar">
                            <div class="pagination-area">
                                <ul class="pagination">
                                    <li><a href="#">«</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">»</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right colunm -->
                <aside class="sidebar col-xs-12 col-sm-3">
                    <div class="search">
                        <input class="form-control" type="search" placeholder="Search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                    <!-- Blog category -->
                    <div class="block blog-module">
                        <div class="block-title">
                            <h3>Blog Categories</h3>
                        </div>
                        <div class="block_content">
                            <div class="layered layered-category">
                                <div class="layered-content">
                                    <ul class="tree-menu">
                                        <li><a href="#"><i class="fa fa-angle-right"></i>&nbsp; {{ __('Images') }}</a></li>
                                        <li><i class="fa fa-angle-right"></i>&nbsp; <a href="#">{{ __('Audio') }}</a></li>
                                        <li><i class="fa fa-angle-right"></i>&nbsp; <a href="#">{{ __('Photos') }}</a></li>
                                        <li><i class="fa fa-angle-right"></i>&nbsp; <a href="#">Diet &amp; Fitness</a></li>
                                        <li><i class="fa fa-angle-right"></i>&nbsp; <a href="#">{{ __('Slider') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Popular Posts -->
                    <div class="block blog-module">
                    <div class="block-title">
                        <h3>{{ __('Popular Posts') }}</h3>
                    </div>
                    <div class="block_content">
                        <div class="layered">
                            <div class="layered-content">
                                <ul class="blog-list-sidebar">
                                    <li>
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img src="images/blog-img1.jpg" alt="Blog">
                                            </a>
                                        </div>
                                        <div class="post-info">
                                            <h5 class="entry_title">
                                                <a href="#">{{ __('Lorem ipsum dolor') }}</a>
                                            </h5>
                                            <div class="post-meta">
                                                <span class="date"><i class="fa fa-calendar"></i> 2014-08-05</span>
                                                <span class="comment-count"><i class="fa fa-comment-o"></i> 3 </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-thumb">
                                            <a href="#"><img src="images/blog-img2.jpg" alt="Blog"></a>
                                        </div>
                                        <div class="post-info">
                                            <h5 class="entry_title"><a href="#">{{ __('Lorem ipsum dolor') }}</a></h5>
                                            <div class="post-meta">
                                                <span class="date"><i class="fa fa-calendar"></i> 2014-08-05</span>
                                                <span class="comment-count"> <i class="fa fa-comment-o"></i> 3 </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-thumb">
                                            <a href="#"><img src="images/blog-img3.jpg" alt="Blog"></a>
                                        </div>
                                        <div class="post-info">
                                            <h5 class="entry_title"><a href="#">{{ __('Lorem ipsum dolor') }}</a></h5>
                                            <div class="post-meta">
                                                <span class="date"><i class="fa fa-calendar"></i> 2014-08-05</span>
                                                <span class="comment-count"> <i class="fa fa-comment-o"></i> 3 </span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>

                    <!-- Recent Comments -->
                    <div class="block blog-module">
                        <div class="block-title">
                            <h3>{{ __('Recent Comments') }}</h3>
                        </div>
                        <div class="block_content">
                            <div class="layered">
                                <div class="layered-content">
                                    <ul class="recent-comment-list">
                                        <li>
                                            <h5><a href="#">{{ __('Lorem ipsum dolor sit amet') }}</a></h5>
                                            <div class="comment"> "Consectetuer adipis. Mauris accumsan nulla vel diam. Sed in..." </div>
                                            <div class="author">{{ __('Posted by') }}<a href="#">Admin</a></div>
                                        </li>
                                        <li>
                                            <h5><a href="#">{{ __('Lorem ipsum dolor sit amet') }}</a></h5>
                                            <div class="comment"> "Consectetuer adipis. Mauris accumsan nulla vel diam. Sed in..." </div>
                                            <div class="author">{{ __('Posted by') }}<a href="#">Admin</a></div>
                                        </li>
                                        <li>
                                            <h5><a href="#">{{ __('Lorem ipsum dolor sit amet') }}</a></h5>
                                            <div class="comment"> "Consectetuer adipis. Mauris accumsan nulla vel diam. Sed in..." </div>
                                            <div class="author">{{ __('Posted by') }}<a href="#">Admin</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- tags -->
                    <div class="block block-tags">
                        <div class="block-title">
                            <h3>Popular Tags</h3>
                        </div>
                        <div class="block-content">
                            <div class="tags-list">
                                <a href="#">{{ __('jwellery') }}</a>
                                <a href="#">{{ __('Bag') }}</a>
                                <a href="#">{{ __('clothing') }}</a>
                                <a href="#">{{ __('shoes') }}</a>
                                <a href="#">{{ __('watches') }}</a>
                                <a href="#">{{ __('beauty') }}</a>
                                <a href="#">{{ __('Accessories') }}</a>
                            </div>
                            <div class="actions">
                                <a href="#" class="view-all">{{ __('View All Tags') }}</a>
                            </div>
                        </div>
                    </div>

                    <!-- Banner -->
                    <div class="custom-slider">
                        <div>
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li class="active" data-target="#carousel-example-generic" data-slide-to="0"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active"><img src="images/slide3.jpg" alt="New Arrivals">
                                        <div class="carousel-caption">
                                            <h3><a title=" Sample Product" href="#">{{ __('New Arrivals') }}</a></h3>
                                            <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit.') }}</p>
                                        </div>
                                    </div>
                                    <div class="item"><img src="images/slide1.jpg" alt="Top Fashion">
                                        <div class="carousel-caption">
                                            <h3><a title=" Sample Product" href="#">{{ __('Top Fashion') }}</a></h3>
                                            <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit.') }}</p>
                                        </div>
                                    </div>
                                    <div class="item"><img src="images/slide2.jpg" alt="Mid Season">
                                        <div class="carousel-caption">
                                            <h3><a title=" Sample Product" href="#">{{ __('Mid Season') }}</a></h3>
                                            <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit.') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#" data-slide="prev"><span class="sr-only">{{ __('Previous') }}</span>
                                </a>
                                <a class="right carousel-control" href="#" data-slide="next"><span class="sr-only">{{ __('Next') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- ./Banner -->
                </aside>
                    <!-- ./right colunm -->
            </div>
            <!-- ./row-->
        </div>
    </section>
</div>
@endsection
