@extends('layouts/app')

@section('content')
    <!--breadcrumb Start-->
    <section class="bread_cum bg7 overlay80">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Work</h1>
                </div>
            </div>
        </div>
    </section>
    <!--breadcrumb End-->
    <!--our recent project Start-->
    <section class="common_section">
        <div class="filterContent">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="sectionTitle">
                            <h2>Our Recent Works</h2>
                            <span class="secbar"></span>
                        </div>
                    </div>
                </div>
                {{--<div class="row">--}}
                    {{--<div class="col-lg-8 col-lg-offset-2 col-sm-12 col-xs-12 noPadding">--}}
                        {{--<div class="filterNav3">--}}
                            {{--<ul>--}}
                                {{--<li class="filter" data-filter="all">all</li>--}}
                                {{--<li class="filter" data-filter="web">web design</li>--}}
                                {{--<li class="filter" data-filter="dev">development</li>--}}
                                {{--<li class="filter" data-filter="logoDe">graphic</li>--}}
                                {{--<li class="filter" data-filter="brand">branding</li>--}}
                                {{--<li class="filter" data-filter="prodeg">product design</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="row">
                    <div id="filterCont">
                        @foreach($works as $work)
                            <div class="col-lg-4 col-sm-6 col-xs-12 mix marginBottom30 dev brand prodeg">
                                <div class="singlePortfolio">
                                    <img src="@if(isset($work->workImages[0])){{$work->workImages[0]['image']}}@endif" alt="@if(isset($work->workImages[0])){{$work->workImages[0]['title']}}@endif">
                                    <div class="poHover">
                                        <div class="topcon">
                                            <h2>{{$work->title}}</h2>
                                            <p>{{$work->client}}</p>
                                        </div>
                                        <div class="botLink">
                                            <a href="@if(isset($work->workImages[0])){{$work->workImages[0]['image']}}@endif" class="popup"><i class="fa fa-heart-o"></i></a>
                                            <a href="/works/{{$work->slug}}"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <!--Pagination-->
                                {{$works->links('partials/paginator')}}
                                <!--End Pagination -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--our recent project End-->
@stop
