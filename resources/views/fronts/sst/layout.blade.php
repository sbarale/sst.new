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

<header class="navbar navbar-static-top" id="top" role="banner">
    <div class="container">
        <nav id="primary-nav" class="row">
            <div class="col-sm-7 col-xs-12">
                <h1 id="brand"><a href="#"><img src="images/sst-landscape.png" class="img-responsive"/></a></h1>
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
@section('content')
    <div class="container" style="padding:10px;">
        <div class="secondarybg whitebg">
            <h1 class="header">Ready to save some money in <span id="statecurrent"></span> ?</h1>
            <div class="row">
                <div class="col-xs-12">
                    {{--<!--<p>To qualify for the Eligiblity Review You Must Meet 4 requirements <br>Please answer the questions below truthfully </p>-->--}}
                </div>
            </div>

            <div class="row" style="padding:10px;">
                <div class="col-xs-12">
                    <h2>How does it work?</h2>
                </div>
                <br>
                <div class="col-xs-12 ">
                    <div class="text-left">
                        1. Select the program you are interested in.<br>
                        2. You fill out our easy 3 minute form.<br>
                        3. We match you to top providers.<br>
                        4. They contact you directly with offers.<br>
                    </div>
                </div>
                <a href="#offers">
                    <button type="button" style="margin-bottom: 20px;" class="btn btn-success  btn-lg ">Get Started >></button>
                </a>
            </div>


        </div> <!--wraper-->
    </div>
    </br>
    <div class="container" id="offers">
        <div class="">

            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/rfn/1/index3.php?loan_type=Refinance',
                'title' => 'Refinance Mortgage (US only)',
                'desc'  => 'It may be easier than you think to refinance your current mortgage.',
                'img' => 'images/mortgage-refinance.png'
            ])

            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/freerateupdate/',
                'title' => 'Home Purchase (US only)',
                'desc'  => 'Comparing loan offers from different lenders can save you time and money.',
                'img' => 'images/mortgage-purchase.png'
            ] )

            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => 'solar-overview.php',
                'title' => 'Solar Energy',
                'desc'  => 'Find a solar specialist from our network and start saving money on your energy bills.',
                'img' => 'images/solar-1.png'
            ] )

            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/ccl/1/index.php',
                'title' => 'Car loan ( US only )',
                'desc'  => 'Comparing loan offers from different lenders can save you time and money.',
                'img' => 'images/car-loan.png'
            ] )

            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/auw/',
                'title' => 'Auto Warranty ( US only )',
                'desc'  => 'Comparing Auto Warranty offers.',
                'img' => 'images/car-loan.png'
            ] )

            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/debt-overview.php',
                'title' => 'Debt Settlement ( US and UK only )',
                'desc'  => 'Be it refinance or new car purchase, it pays to shop around.',
                'img' => 'images/debt.png'
            ] )

            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/ins/funeral/uk/2/',
                'title' => 'Insurance (UK only)',
                'desc'  => 'Find an insurance specialist from our network.',
                'img' => 'images/ins.png'
            ] )

            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/tax/2/index.php',
                'title' => 'TAX Settlement ( US only )',
                'desc'  => 'Check your eligibility for the IRS fresh start program.',
                'img' => 'images/debt.png'
            ] )

            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/tax/2/index.php',
                'title' => 'TAX Settlement ( US only )',
                'desc'  => 'Check your eligibility for the IRS fresh start program.',
                'img' => 'images/debt.png'
            ] )

            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/mip_us/',
                'title' => 'Medicare Supplemental Plans (US only)',
                'desc'  => '>Find a Medicare specialist from our network.',
                'img' => 'images/ins.png'
            ] )

            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/mip_us/',
                'title' => 'Bathroom Remodels ( US only )',
                'desc'  => 'Find a Bathroom Remodels specialist from our network.',
                'img' => 'images/bat.png'
            ] )

            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/chw/1/',
                'title' => 'Home Warrenty ( US only )',
                'desc'  => 'Find a Home Warrenty specialist from our network.',
                'img' => 'images/chw.png'
            ] )

            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/roof/',
                'title' => 'Roof replacement',
                'desc'  => 'Find a roof specialist from our network.',
                'img' => 'images/roof.png'
            ] )

            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/window/',
                'title' => 'Window replacement',
                'desc'  => 'Find a window specialist from our network.',
                'img' => 'images/window.png'
            ] )


        </div>
    </div> <!--end container-->
    <br><br>
    <div class="container">

        <h1 style="text-align: center;"> Latest News How To Save Money</h1>

        <div class=" ">
            <a href="https://blog.smartsavings.today/RFN_1_US-en_new-government-mortgage-programs.php">
                <div class="col-md-4 col-xs-12">
                    <div style="margin:  5px;">
                        <div class="row" style="border:none; background:white; height:420px;">
                            <div class="col-xs-12">
                                <img src="images/65.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="col-xs-12">
                                <h3>New Government Mortgage Programs could radically change your life forever</h3>
                                <p style=" color:#4b4b4b;">Homeowners throughout the United States can’t stop talking about...</p>
                                learn more>>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="https://blog.smartsavings.today/SLR_26_US-Solar-Panels-Top-Reasons-Why.php">
                <div class="col-md-4 col-xs-12">
                    <div style="margin: 5px;">
                        <div class="row" style="border:none; background:white; height:420px;">
                            <div class="col-xs-12">
                                <img src="images/solarhouseright.png" class="img-responsive" alt="">
                            </div>
                            <div class="col-xs-12">
                                <h3>Solar Panels: Top Reasons Why Homeowners Should Switch to Solar</h3>
                                <p style="color:#4b4b4b;">Thinking of switching to solar power, but still on the fence about it...</p>
                                learn more>>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="https://blog.smartsavings.today/RFN_5_US-en_refi-program-extended-a-whole-year.php">
                <div class="col-md-4 col-xs-12">
                    <div style="margin: 5px;">
                        <div class="row" style="border:none; background:white; height:420px;">
                            <div class="col-xs-12">
                                <img src="images/harp.png" class="img-responsive" alt="">
                            </div>
                            <div class="col-xs-12">
                                <h3>Recently Extended Home Refinance Plan Banks Don't Want You Knowing</h3>
                                <p style="color:#4b4b4b;">HARP Gives Homeowners One Last Chance for A Mortgage Bailout...</p>
                                learn more>>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div> <!--end container-->
@show
<br>

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
