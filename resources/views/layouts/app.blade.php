<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
        <link href="/images/favicon.ico" rel="shortcut icon"  type="image/x-icon"/>
        <meta name="description" content="@if(isset($meta['description'])){{strip_tags($meta['description'])}}@endif" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="author" content="ComfyStudio"/>

        <!--facebook-->
        @if(isset($facebook['og:title']))<meta property="og:title" content="{{$facebook['og:title']}}">@endif
        @if(isset($facebook['og:url']))<meta property="og:url" content="{{Request::url()}}">@endif
        @if(isset($facebook['og:description']))<meta property="og:description" content="{{strip_tags($facebook['og:description'])}}">@endif
        <meta property="og:type" content="Website">
        @if(isset($facebook['og:image']))<meta property="og:image" content="{{$facebook['og:image']}}">@endif


        <!-- Css -->
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="/css/animate.css"/>
        <link rel="stylesheet" type="text/css" href="/css/settings.css"/>
        <link rel="stylesheet" type="text/css" href="/css/magnific-popup.css"/>
        <link rel="stylesheet" type="text/css" href="/css/stroke_gap_icon.css"/>
        <link rel="stylesheet" type="text/css" href="/css/line_icon.css"/>
        <link rel="stylesheet" type="text/css" href="/css/owl.carousel.css"/>
        <link rel="stylesheet" type="text/css" href="/css/owl.theme.css"/>
        <link rel="stylesheet" type="text/css" href="/css/preset.css"/>
        <link rel="stylesheet" type="text/css" href="/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="/css/responsive.css"/>

        <!-- HEAD JS-->
        <!--[if lt IE 9]>
            <script src="/js/html5shiv.js"></script>
            <script src="/js/respond.min.js"></script>
        <![endif]-->

        <title>@if(isset($meta['title'])){{($meta['title'])}}@endif</title>
    </head>
    <body>
        @include('partials/header')
            @yield('content')
        @include('partials/footer')

        <!-- Include All JS -->
        <script type="text/javascript" src="/js/jquery.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="/js/owl.carousel.js"></script>
        <script type="text/javascript" src="/js/gmaps.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0fIB6_xMB5tx5JLlLLN3LRzcgG7ulVWc"></script>
        <script type="text/javascript" src="/js/jquery.magnific-popup.js"></script>
        <script type="text/javascript" src="/js/mixer.js"></script>
        <script type="text/javascript" src="/js/wow.min.js"></script>
        <script type="text/javascript" src="/js/theme.js"></script>
    </body>
</html>