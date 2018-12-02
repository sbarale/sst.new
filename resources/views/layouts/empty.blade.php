<!DOCTYPE html>
<html lang="en">
<head>
    @section('head')
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>@yield('title','Take the Quiz to See if you Qualify')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <link href='//fonts.googleapis.com/css?family=Merriweather:regular,700' rel='stylesheet' type='text/css' />
        <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css' />
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/css/bath/2/main.css" rel="stylesheet" type='text/css'/>
    @show

        @section('scripts')
            @include('trackers.set_fbid_px')
            @include('trackers.gtm')
        @show
</head>
<body class="graybg">
@include('fronts.sst._common.debugbar')
<header class="navbar navbar-static-top" id="top" role="banner" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="navbar navbar-static-top" id="top" role="banner">
                    <nav id="primary-nav" class="">
                        <div class="row brand">
                            <div class="col-md-4">
                                <a href="/"><img src="/images/sst-landscape.png" class=" img-responsive pull-left"/></a>
                            </div>
                            <div class="col-md-4 hidden-xs hidden-sm">
                                <img src="@yield('header-middle-img','/images/gray-bg-px.jpg')" class="img-responsive center-block"/>
                            </div>
                            <div class="col-md-4 hidden-xs">
                                <img src="/images/secure2.png" class="img-responsive pull-right secure-img"/>
                            </div>
                        </div>
                    </nav>
                </header>
            </div>
        </div>
    </div>
</header>

@yield('content')


<div class="container" style="padding-top:12px;">
    @include('fronts.sst.footer')
</div>
@section('footer-scripts')
@show

</body>
</html>
