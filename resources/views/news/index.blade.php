@extends('layouts/app')

@section('content')
    <section class="bread_cum bg12 overlay80">
        <div class="container">
            <div class="row">
                <h1>Latest News</h1>
            </div>
        </div>
    </section><!--breadcum section-->
    <section class="common_section blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-7 col-xs-12 noPaddingRight">
                    <?php $increment = 300;?>
                    @foreach($news as $new)
                        <div class="blog_section wow fadeInUp" data-wow-duration="700ms" data-wow-delay="{{$increment}}">
                            @if(isset($new->newsImages[0]))<img src="/{{$new->newsImages[0]['image']}}" alt="{{$new->newsImages[0]['title']}}" />@endif
                            <h2>
                                <a href="/news/{{$new->slug}}">{{$new->title}}</a>
                            </h2>
                            <div class="blogMeta blog_initial">
                                <a href="/news/{{$new->slug}}">{{date("F d, Y", strtotime($new->publish_date))}}</a>
                                @foreach($new->category as $category)
                                    <span>|</span>
                                    <a>{{$category->name}}</a>
                                @endforeach
                            </div>
                            <div class="blog_desc">
                                <p>{!! str_limit(strip_tags($new->text), 200) !!}</p>
                            </div>
                            <a class="read_more" href="/news/{{$new->slug}}">Read More &nbsp; <i class="flaticon-right-arrow"></i></a>
                        </div>
                        <?php $increment = $increment + 50;?>
                    @endforeach
                </div>
                <div class="col-lg-4 col-sm-5 col-xs-12">
                    <div class="blogSidebar">
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
                    </div>
                </div>
                <!-- pagination -->
                <div class="col-xs-12 text-center">
                    {{$news->links('partials/paginator')}}
                </div>
            </div>
        </div>
    </section>
@stop
