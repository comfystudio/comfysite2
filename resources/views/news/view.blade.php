@extends('layouts/app')
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

@section('content')
    <section class="bread_cum bg14 overlay80">
        <div class="container">
            <div class="row">
                <h1>News details</h1>
            </div>
        </div>
    </section>
    <section class="common_section blog details_blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_section details wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300">
                        <img src="/{{$news->newsImages[0]['image']}}" alt="{{$news->newsImages[0]['title']}}" />
                        <h2>{{$news->title}}</h2>
                        <div class="blogMeta blog_initial">
                            <a>{{date("F d, Y", strtotime($news->publish_date))}}</a>
                            @foreach($news->category as $category)
                                <span>|</span>
                                <a>{{$category->name}}</a>
                            @endforeach
                        </div>
                        <div class="blogpost_desc">
                            {!! $news->text !!}
                        </div>
                        @foreach($news->newsImages as $key => $image)
                            @if($key != 0)
                                <img src="/{{$image['image']}}" alt="{{$image['title']}}" />
                            @endif
                        @endforeach
                        <div class="fb-share-button" data-href="https://comfystudio.com/news/{{$news->slug}}"
                            data-layout="button" data-size="large" data-mobile-iframe="true">
                            <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fcomfystudio.com%2Fnews%2F{{$news->slug}}&amp;src=sdkpreparse">Share</a>
                        </div>
                    </div>
                </div>
                <!--Right side bar-->
                <div class="col-lg-4 col-xs-12">
                    <div class="blogSidebar blogDetailsSidebar marginTop60">
                        <aside class="widget wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300">
                            <h3 class="widgetTitle">Search</h3>
                            <span class="secbar left"></span>
                            <form class="blogSearch" method="get" action="/news/" >
                                <input type="search" name="keywords" value ="{{Request::query('keywords')}}" class="search-field" placeholder="search here">
                                <button class="search-submit" type="submit"><i class="icon-Search"></i></button>
                            </form>
                        </aside>
                        <aside class="widget wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350">
                            <h3 class="widgetTitle">Categories</h3>
                            <span class="secbar left"></span>
                            <ul class="widgetCat">
                                @foreach($categories as $category)
                                    <li>
                                        <a href = "/news?category={{$category}}">{{$category}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </aside>
                        <aside class="widget wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400">
                            <h3 class="widgetTitle">Latest News</h3>
                            <span class="secbar left"></span>
                            <div class="latestBlog">
                                @foreach($latestNews as $latest)
                                    <div class="singLatBlog">
                                        @if(isset($latest->newsImages[0]))<img src="/{{$latest->newsImages[0]['image']}}" alt="{{$latest->newsImages[0]['title']}}">@endif
                                        <h4 class="bstitle"><a href="/news/{{$latest->slug}}">{{$latest->title}}</a></h4>
                                        <p class="metaBside">
                                            <a href="/news/{{$latest->slug}}">{{date("F d, Y", strtotime($latest->publish_date))}}</a>
                                            @foreach($latest->category as $category)
                                                <span>/</span>
                                                <a>{{$category->name}}</a>
                                            @endforeach
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
