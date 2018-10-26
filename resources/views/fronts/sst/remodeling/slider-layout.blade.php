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
        <!-- Start Visual Website Optimizer Asynchronous Code -->
        <script type='text/javascript'>
            var _vwo_code=(function(){
                var account_id=374267,
                    settings_tolerance=2000,
                    library_tolerance=2500,
                    use_existing_jquery=false,
                    /* DO NOT EDIT BELOW THIS LINE */
                    f=false,d=document;return{use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);var a=d.createElement('style'),b='body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&r='+Math.random());return settings_timer;}};}());_vwo_settings_timer=_vwo_code.init();
        </script>
        <!-- End Visual Website Optimizer Asynchronous Code -->
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
        </style>

    @show

    @section('scripts')

    @show
</head>
<body class="graybg">

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

    <!--Leadid script leadid dot com-->
    <script id="LeadiDscript" type="text/javascript">
        // <!--
        (function () {
            var s = document.createElement('script');
            s.id = 'LeadiDscript_campaign';
            s.type = 'text/javascript';
            s.async = true;
            s.src = '//create.lidstatic.com/campaign/14825c91-1860-c42b-410e-c8836497e113.js?snippet_version=2';
            var LeadiDscript = document.getElementById('LeadiDscript');
            LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
        })();
        setInterval(function(){
            if(!$('#leadid_token').val()) {
                (function () {
                    var s = document.createElement('script');
                    s.id = 'LeadiDscript_campaign';
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = '//create.lidstatic.com/campaign/14825c91-1860-c42b-410e-c8836497e113.js?snippet_version=2';
                    var LeadiDscript = document.getElementById('LeadiDscript');
                    LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
                })();
            }
        }, 10000);
        // -->
    </script>
    <noscript><img src='//create.leadid.com/noscript.gif?lac=f8085cd5-d5be-4d6d-353f-3c8dcc6fc738&lck=14825c91-1860-c42b-410e-c8836497e113&snippet_version=2' /></noscript>
    <!--end Leadid script leadid dot com-->
@show

</body>
</html>
