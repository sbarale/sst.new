<!DOCTYPE html>
<html lang="en">
<head>
    @section('head')
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('css/main.css') }}">
        <script src="{{ mix('js/app.js') }}"></script>
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>@yield('title','Smart Savings Today')</title>
    @show
</head>
<body class="graybg">
@include('fronts.sst._common.debugbar')
<div id='app'></div>
@section('scripts')
   @include('trackers.gtm')
@show
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <header class="navbar navbar-static-top" id="top" role="banner">
                <nav id="primary-nav" class="">
                    <div class="row brand">
                        <div class="col-md-4">
                            <a href="/"><img src="@yield('logo')" class=" img-responsive pull-left"/></a>
                        </div>
                        <div class="col-md-4 hidden-xs hidden-sm">
                            <img src="@yield('logo-section')" class="img-responsive center-block"/>
                        </div>
                        <div class="col-md-4 hidden-xs">
                            <img src="/images/secure2.png" class="img-responsive pull-right"/>
                        </div>
                    </div>
                </nav>
            </header>
        </div>
    </div>
    <div class="row">
        @yield('content')
    </div>
    @include('fronts.sst.footer')
</div>
@show
@section('footer-scripts')
    <script src="https://geoapi123.appspot.com"></script>
    <script type='text/javascript'>
        var statecurrent = (typeof geoip_region_name == typeof Function && geoip_region_name() != "") ? geoip_region_name() : "";
        place = document.getElementById("statecurrent") || {};
        place.innerHTML = statecurrent;
    </script>
@show
</body>
</html>
