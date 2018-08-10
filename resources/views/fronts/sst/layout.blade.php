<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Take the Quiz to See if you Qualify</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/main.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>

    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Take the Quiz to See if you Qualify</title>
</head>
<body class="graybg">
<div id='app'></div>
<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','https://connect.facebook.net/en_US/fbevents.js');

    //fbpixel
    fbq('init', '1340448142640924');
    fbq('init', '398805723825145');
    fbq('init', '1667651480206699');
    fbq('init', '1201618403270729');
    fbq('init', '<?php echo $fbid;?>');
    fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=1088056584620634&ev=PageView&noscript=1"
    /></noscript>
<header class="navbar navbar-static-top" id="top" role="banner">
    <div class="container">
        <nav id="primary-nav" class="row">
            <div class="col-sm-7 col-xs-12">
                <h1 id="brand">
                    <a href="#"><img src="@yield('logo')" class=" img-responsive"/></a>
                </h1>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="wrapper hidden-xs" style="color:gray; padding-top: 10px">

                </div>
            </div>
            <div class="col-sm-2 col-xs-12">
                <div class="header_number">
                    <div style="font-size:13px;font-weight:normal;" class="hidden-xs">
                        <img src="images/secure2.png"/>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
@yield('content')
<div class="container" style="padding-top:12px;">
    <div class="row">
        <div class="summary_terms">
            <p style="text-align:center;color:#424242">

                <strong>Copyright 2018 | All Rights Reserved |
                    <a href="/privacy.pdf" target="_blank">Privacy Policy</a> &amp;
                    <a href="/terms.html" target="_blank">Terms</a></strong>
            <p style="text-align:center;">
                <strong><a href="https://geek3.io">Affiliates </a> -
                    <a href="https://geek3.io">Buy leads</a></strong>
            </p>
            <p style="text-align:center;"><a href="https://blog.smartsavings.today/about-us.php">About Us</p></a>

        </div>
    </div>
</div>

<script src="https://geoapi123.appspot.com"></script>
<script type='text/javascript'>
    var statecurrent = (typeof geoip_region_name == typeof Function && geoip_region_name() != "") ? geoip_region_name() : "";
    document.getElementById("statecurrent").innerHTML = statecurrent;
</script>
</body>
</html>
