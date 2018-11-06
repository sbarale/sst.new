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


        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href='//fonts.googleapis.com/css?family=Merriweather:regular,700' rel='stylesheet' type='text/css' />
        <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
        <script type='text/javascript' src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css' />
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9xy8KF8H9Cu-Bui1nB5zHM860PlgkFFw&libraries=places,geometry"></script>
        <link rel="stylesheet" href="/css/bootstrap-tagsinput.css" type="text/css">

        <script type="text/javascript" src="/js/jquery.maskedinput.min.js"></script>
        <link href="/css/jquery.nouislider.css" rel="stylesheet" type='text/css' />

        <style>
            @media (max-width: 3199px) {
                .img-bg{
                    background-image: url(@yield('big-bg-img','/images/bath/2/background_2.jpg'));
                    -webkit-background-size: cover;
                    background-size: cover;
                }
            }
            /* md */
            @media (max-width: 1199px) {
                .img-bg{
                    background-image: url(@yield('small-bg-img','/images/bath/2/background_1.jpg'));
                    -webkit-background-size: cover;
                    background-size: cover;
                }
            }
            body{
                background-image: url(@yield('big-bg-img','/images/bath/2/background_2.jpg'));
                -webkit-background-size: cover;
                background-size: cover;
            }
        </style>
    @show

    @section('scripts')
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
<div class="blue-after-navbar">
    @yield('top-blue-line-text', '')
</div>
<div class="img-bg" style="{{}}">
    <div class="container">
        @yield('content')
    </div>
</div>

@yield('bottom-info-part')

<div class="container" style="padding-top:12px;">
    @include('fronts.sst.footer')
</div>
@section('footer-scripts')
    <script type='text/javascript' src='/js/jquery.nouislider.all.min.js'></script>
    <script type="text/javascript" src="/js/moment.min.js"></script>
    <script type="text/javascript" src="/js/parsley.min.js"></script>
    <script type="text/javascript" src="/js/formslider.js"></script>
    <script type="text/javascript" src="/js/jquery.autotab.js"></script>
    <script src="/js/bootstrap-tagsinput.min.js"></script>
    <script src="/js/bootstrap-typeahead.js"></script>

    <!--  leadactiveprospect dot com -->
    <script type="text/javascript">
        (function () {
                var field = 'xxTrustedFormCertUrl';
                var provideReferrer = false;
                var tf = document.createElement('script');
                tf.type = 'text/javascript';
                tf.async = true;
                tf.src = 'http' + ('https:' == document.location.protocol ? 's' : '') +
                    '://api.trustedform.com/trustedform.js?provide_referrer=' + escape(provideReferrer) + '&field=' + escape(field) + '&l=' + new Date().getTime() + Math.random();
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(tf, s);
            }
        )();
    </script>
    <noscript>
        <img src="https://api.trustedform.com/ns.gif" />
    </noscript>
    <!--  end leadactiveprospect dot com -->

@show

</body>
</html>
