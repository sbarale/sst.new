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
    @show
</head>
<body class="graybg">
@include('fronts.sst._common.debugbar')
<div id='app'></div>
@section('scripts')
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M2H3LLJ');</script>
    <!-- End Google Tag Manager -->
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M2H3LLJ"
                height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
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
