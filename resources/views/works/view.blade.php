@extends('layouts/app')

@section('content')
    <!--breadcrumb Start-->
    <section class="bread_cum bg5 overlay80">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>{{$work->title}}</h1>
                </div>
            </div>
        </div>
    </section>
    <!--breadcrumb End-->
    <!--Portfolio Single Start-->
    <section class="common_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-7 col-xs-12">
                    <div class="folioItem">
                        {{--<div class="folio1SingleItem wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300">--}}
                            {{--<img src="images/portfolio/single/1.jpg" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="folio1SingleItem wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350">--}}
                            {{--<img src="images/portfolio/single/2.jpg" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="folio1SingleItem wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400">--}}
                            {{--<img src="images/portfolio/single/3.jpg" alt="">--}}
                        {{--</div>--}}
                        <?php $increment = 300;?>
                        @foreach($work->workImages as $image)
                            <div class="folio1SingleItem wow fadeInUp" data-wow-duration="700ms" data-wow-delay="{{$increment}}">
                                <img src="/{{$image->image}}" alt="{{$image->title}}">
                            </div>
                            <?php $increment = $increment + 50;?>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4 col-sm-5 col-xs-12">
                    <div class="pro1Details">
                        <h2 class="pro1detTitle">{{$work->title}}</h2>
                        <div class="peraGrouppd wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300">
                            {!! $work->text !!}
                        </div>
                        <ul class="projectIndetails wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350">
                            <li><b>Client</b>{{$work->client}}</li>
                            <li><b>Date</b>{{date("F d, Y", strtotime($work->date))}}</li>
                            <li><b>Link</b><a href="{{$work->link}}" target="_blank">{{$work->link}}</a></li>
                        </ul>
                        <div class="shareProject wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400">
                            {{--<h3 class="shareTitle">Share</h3>--}}
                            {{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-google-plus"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-linkedin"></i></a>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-lg-offset-3 col-xs-12 noPadding">
                    <div class="navigationPort">
                        @if(isset($prev) && !empty($prev))<a href="/works/{{$prev}}" class="prev"><i class="flaticon-arrows"></i>Prev</a>@endif
                        <a href="/works"><img src="/images/icon/list.png" alt="back to works"></a>
                        @if(isset($next) && !empty($next))<a href="/works/{{$next}}" class="next">Next<i class="flaticon-right-arrow"></i></a>@endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Portfolio Single End-->
@stop
