<div class="preloader">
    <div id="loading-center-absolute">
        <div id="first_object" class="object"></div>
        <div id="second_object" class="object"></div>
        <div id="third_object" class="object"></div>
        <div id="forth_object" class="object"></div>
    </div>
</div>
<!--Header bar Start-->
    @if(!isset($home))
        <section class="headerBar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-xs-12">
                        <div class="topInfo">
                            <p>
                                <i class="fa fa-phone"></i><a href="tel:{{NUMBER}}">{{NUMBER}}</a>
                            </p>
                            <p>
                                <i class="fa fa-envelope-o"></i>
                                <a href="mailto:{{EMAIL}}">{{EMAIL}}</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 text-right">
                        <div class="headerSocial">
                            @if(FACEBOOK && !is_null(FACEBOOK))<a href="{{FACEBOOK}}" class="fac" target="_blank"><i class="fa fa-facebook"></i></a>@endif
                            @if(TWITTER && !is_null(TWITTER))<a href="{{TWITTER}}" class="twi" target="_blank"><i class="fa fa-twitter"></i></a>@endif
                            @if(GOOGLE && !is_null(GOOGLE))<a href="{{GOOGLE}}" class="goo" target="_blank"><i class="fa fa-google-plus"></i></a>@endif
                            @if(LINKEDIN && !is_null(LINKEDIN))<a href="{{LINKEDIN}}" class="lin" target="_blank"><i class="fa fa-linkedin"></i></a>@endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
<!--Header bar End-->
<!--Header Two start-->
@if(!isset($home))
    <header class="header2">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 noPaddingRight">
                    <div class="logo2">
                        <a href="/">
                            <img src="/images/black-logo-bigger.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-10 text-right">
                    <nav class="mainnav">
                        <div class="mobileMenu blacksp hidden-md hidden-lg">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <ul>
                            <li class="has-menu-items @if(isset($meta['section']) && $meta['section'] == 'Home') active @endif"><a href="/">home</a></li>
                            <li class="has-menu-items @if(isset($meta['section']) && $meta['section'] == 'About') active @endif"><a href="/about">about us</a></li>
                            <li class="has-menu-items @if(isset($meta['section']) && $meta['section'] == 'Work') active @endif"><a href="/works">Work</a></li>
                            <li class="has-menu-items @if(isset($meta['section']) && $meta['section'] == 'News') active @endif"><a href="/news">News</a></li>
                            <li class="has-menu-items @if(isset($meta['section']) && $meta['section'] == 'Contact') active @endif"><a href="/contact">contact us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
@else
    <header class="header1">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-3 noPaddingRight">
                    <div class="logo">
                        <a href="/">
                            <img src="images/black-logo-bigger2.png" alt="">
                        </a>
                    </div>
                    <div class="logo2">
                        <a href="/">
                            <img src="images/black-logo-bigger.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-9 text-right">
                    <nav class="mainnav styleOne">
                        <div class="mobileMenu hidden-md hidden-lg">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <ul>
                            <li class="has-menu-items @if(isset($meta['section']) && $meta['section'] == 'Home') active @endif"><a href="/">home</a></li>
                            <li class="has-menu-items @if(isset($meta['section']) && $meta['section'] == 'About') active @endif"><a href="/about">about us</a></li>
                            <li class="has-menu-items @if(isset($meta['section']) && $meta['section'] == 'Work') active @endif"><a href="/works">Work</a></li>
                            <li class="has-menu-items @if(isset($meta['section']) && $meta['section'] == 'News') active @endif"><a href="/news">News</a></li>
                            <li class="has-menu-items @if(isset($meta['section']) && $meta['section'] == 'Contact') active @endif"><a href="/contact">contact us</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-2">
                    <div class="headerSocial header">
                        @if(FACEBOOK && !is_null(FACEBOOK))<a href="{{FACEBOOK}}" class="fac" target="_blank"><i class="fa fa-facebook"></i></a>@endif
                        @if(TWITTER && !is_null(TWITTER))<a href="{{TWITTER}}" class="twi" target="_blank"><i class="fa fa-twitter"></i></a>@endif
                        @if(GOOGLE && !is_null(GOOGLE))<a href="{{GOOGLE}}" class="goo" target="_blank"><i class="fa fa-google-plus"></i></a>@endif
                        @if(LINKEDIN && !is_null(LINKEDIN))<a href="{{LINKEDIN}}" class="lin" target="_blank"><i class="fa fa-linkedin"></i></a>@endif
                    </div>
                </div>
            </div>
        </div>
    </header>
@endif
<!--Header Two End-->
<!--breadcrumb Start-->
{{--<section class="bread_cum overlay80">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-xs-12">--}}
                {{--<h1>About us</h1>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
<!--breadcrumb End-->