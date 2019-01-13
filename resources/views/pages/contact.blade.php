@extends('layouts/app')

@section('content')
<!--breadcrumb Start-->
<section class="bread_cum bg10 overlay80">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Contact us</h1>
            </div>
        </div>
    </div>
</section>
<!--breadcrumb End-->
<section class="common_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-xs-12">
                <div class="contactBox">
                    <h2 class="contactTitle">Get in touch with us</h2>
                    @include('partials.admin.error-form')

                    @include('partials.admin.success-form')
                    <div class="row">
                        <form action="/queries/create" method="POST" id="" class="contactformcPage">
                            {{ csrf_field() }}
                            <div class="col-sm-6">
                                <input type="text" placeholder="Name" id="con_name" class="required @if($errors->has('name')) reqError @endif" name="name" value="@if(old('name')){{old('name')}} @elseif(isset($works->title)){{$works->title}}@endif">
                            </div>
                            <div class="col-sm-6">
                                <input type="email" placeholder="Email" id="con_email" class="required @if($errors->has('email')) reqError @endif" name="email" value="@if(old('email')){{old('email')}} @elseif(isset($works->title)){{$works->title}}@endif">
                            </div>
                            <div class="col-sm-12">
                                <input type="text" placeholder="Subject" id="con_sub" class="required @if($errors->has('subject')) reqError @endif" name="subject" value="@if(old('subject')){{old('subject')}} @elseif(isset($works->title)){{$works->title}}@endif">
                            </div>
                            <div class="col-sm-12">
                                <textarea placeholder="Message" id="con_message" class="required @if($errors->has('message')) reqError @endif" name="message">@if(old('message')){{old('message')}} @elseif(isset($works->title)){{$works->title}}@endif</textarea>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="poseidon_btn btn45 hover_black"><b>contact us</b><span></span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="contact1info">
                    <div class="singleContInfo wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300">
                        <h2 class="coninfoTit">Contact us</h2>
                        <p>
                            If you’ve got a big idea, we’d love to hear about it.
                            We work best with clients who share our passion for innovative solutions.
                            Let’s build something great together.
                        </p>
                    </div>
                    <div class="singleContInfo wohours wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350">
                        <h2 class="coninfoTit">Working hours</h2>
                        <p class="woTime"><span>MON - FRI :</span> 09:00am - 05:30pm</p>
                        <p>Saturday and Sunday Holiday</p>
                    </div>
                    <div class="singleContInfo wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400">
                        <h2 class="coninfoTit">Contact info</h2>
                        <div class="sconInfo">
                            <i class="line-map-pin"></i>
                            <p>
                                {{ADDRESS}}
                            </p>
                        </div>
                        <div class="sconInfo midd">
                            <i class="line-phone"></i>
                            <p>
                                {{NUMBER}}
                            </p>
                        </div>
                        <div class="sconInfo">
                            <i class="line-envelope"></i>
                            <p>
                                <a href="mailto:{{EMAIL}}">{{EMAIL}}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="googleMap">
    <div id="map" style="width:100%; height:595px"></div>
</section>
@stop