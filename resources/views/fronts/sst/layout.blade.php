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

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href='//fonts.googleapis.com/css?family=Merriweather:regular,700' rel='stylesheet' type='text/css'/>
    <!--link rel="stylesheet" href="https://css-spinners.com/css/spinner/plus.css" type="text/css"-->
    <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
    <script type='text/javascript' src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
    <link href="css/main.css" rel="stylesheet" type='text/css'/>
    <link href="css/jquery.nouislider.css" rel="stylesheet" type='text/css'/>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="assets/bootstrap-tagsinput.css" type="text/css">






    <script >
        $(document).ready(function () {
            // Add smooth scrolling to all links
            $("a").on('click', function (event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function () {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>
    <style>
        a:hover {
            opacity: 0.7;
        }
    </style>

</head>
<body class="graybg" id="gtag_offer_pageview_slr_us">
<header class="navbar navbar-static-top" id="top" role="banner">
    <div class="container">
        <nav id="primary-nav" class="row">
            <div class="col-sm-7 col-xs-12">
                <h1 id="brand"><a href="#"><img src="images/sst-landscape.png" class="img-responsive"/></a></h1>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="wrapper hidden-xs" style="color:gray; padding-top: 10px">
                    <div class="counter col_fourth">

                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-xs-12">
                <div class="header_number">
                    <div style="font-size:13px;font-weight:normal;" class="hidden-xs">
                        <!--                             <img src="images/secure2.png"  /> -->
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
@section('content')
    <div class="container">
        <div class="secondarybg whitebg">
            <h1 class="header">Ready to save some money in <span id="statecurrent"></span> ?</h1>
            <div class="row">
                <div class="col-xs-12">
                    <!--<p>To qualify for the Eligiblity Review You Must Meet 4 requirements <br>Please answer the questions below truthfully </p>-->
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <h2>How does it work?</h2>

                </div>
                <br>
                <span style="font-size: 18px;">
                    <p>1. Select the program you are interested in</p>
					<p>2. You fill out our easy 3 minute form</p>
					<p>3. We match you to top providers</p>
					<p>4. They contact you directly with offers</p>
					</span>
                <a href="#offers">
                    <button type="button" style="margin-bottom: 20px;" class="btn btn-success  btn-lg ">Get Started >></button>
                </a>
            </div>


        </div> <!--wraper-->
    </div>
    </br>
    <div class="container" id="offers">
        <div class=" ">
            <a href="/rfn/1/index3.php?loan_type=Refinance">
                <div class="col-sm-6 col-xs-12">
                    <div style="margin:  5px;">
                        <div class="row" style="border:none; background:white; height:180px;">
                            <div class="col-xs-5">
                                <img src="images/mortgage-refinance.png" class="img-responsive" style=" margin-left:0px;"/>
                            </div>
                            <div class="col-xs-7">
                                <h3>Refinance Mortgage (US only)</h3>
                                <p style=" color:#4b4b4b;">It may be easier than you think to refinance your current mortgage.</p>
                                learn more>>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/freerateupdate/">
                <div class="col-sm-6 col-xs-12">
                    <div style="margin: 5px;">
                        <div class="row" style="border:none; background:white; height:180px;">
                            <div class="col-xs-5">
                                <img src="images/mortgage-purchase.png" class="img-responsive" style=" margin-left:0px;"/>
                            </div>
                            <div class="col-xs-7">
                                <h3>Home Purchase (US only)</h3>
                                <p style=" color:#4b4b4b;">Comparing loan offers from different lenders can save you time and money.</p>
                                learn more>>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="solar-overview.php">
                <div class="col-sm-6 col-xs-12">
                    <div style="margin:  5px;">
                        <div class="row" style="border:none; background:white; height:180px;">
                            <div class="col-xs-5">
                                <img src="images/solar-1.png" class="img-responsive" style=" margin-left:0px;"/>
                            </div>
                            <div class="col-xs-7">
                                <h3>Solar Energy</h3>
                                <p style=" color:#4b4b4b;">Find a solar specialist from our network and start saving money on your energy bills.</p>
                                learn more>>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/ccl/1/index.php">
                <div class="col-sm-6 col-xs-12">
                    <div style="margin: 5px;">
                        <div class="row" style="border:none; background:white; height:180px;">
                            <div class="col-xs-5">
                                <img src="images/car-loan.png" class="img-responsive" style=" margin-left:0px;"/>
                            </div>
                            <div class="col-xs-7">
                                <h3>Car loan ( US only )</h3>
                                <p style=" color:#4b4b4b;">Comparing loan offers from different lenders can save you time and money.</p>
                                learn more>>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/auw/">
                <div class="col-sm-6 col-xs-12">
                    <div style="margin: 5px;">
                        <div class="row" style="border:none; background:white; height:180px;">
                            <div class="col-xs-5">
                                <img src="images/car-loan.png" class="img-responsive" style="margin-left:0px;"/>
                            </div>
                            <div class="col-xs-7">
                                <h3>Auto Warranty ( US only )</h3>
                                <p style=" color:#4b4b4b;">Comparing Auto Warranty offers.</p>
                                learn more>>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/debt-overview.php">
                <div class="col-sm-6 col-xs-12">
                    <div style="margin: 5px;">
                        <div class="row" style="border:none; background:white; height:180px;">
                            <div class="col-xs-5">
                                <img src="images/debt.png" class="img-responsive" style="margin-left:0px;"/>
                            </div>
                            <div class="col-xs-7">
                                <h3>Debt Settlement ( US and UK only )</h3>
                                <p style=" color:#4b4b4b;">Be it refinance or new car purchase, it pays to shop around.</p>
                                learn more>>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/ins/funeral/uk/2/">
                <div class="col-sm-6 col-xs-12">
                    <div style="margin: 5px;">
                        <div class="row" style="border:none; background:white; height:180px;">
                            <div class="col-xs-5">
                                <img src="images/ins.png" class="img-responsive" style="margin-left:0px;"/>
                            </div>
                            <div class="col-xs-7">
                                <h3>Insurance (UK only)</h3>
                                <p style=" color:#4b4b4b;">Find a insurance specialist from our network</p>
                                learn more>>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/tax/2/index.php">
                <div class="col-sm-6 col-xs-12">
                    <div style="margin: 5px;">
                        <div class="row" style="border:none; background:white; height:180px;">
                            <div class="col-xs-5">
                                <img src="images/debt.png" class="img-responsive" style="margin-left:0px;"/>
                            </div>
                            <div class="col-xs-7">
                                <h3>TAX Settlement ( US only )</h3>
                                <p style=" color:#4b4b4b;">Check your eligibility for the IRS fresh start program</p>
                                learn more>>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/mip_us/">
                <div class="col-sm-6 col-xs-12">
                    <div style="margin: 5px;">
                        <div class="row" style="border:none; background:white; height:180px;">
                            <div class="col-xs-5">
                                <img src="images/ins.png" class="img-responsive" style="margin-left:0px;"/>
                            </div>
                            <div class="col-xs-7">
                                <h3>Medicare Supplemental Plans (US only)</h3>
                                <p style=" color:#4b4b4b;">Find a Medicare specialist from our network</p>
                                learn more>>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/bath/">
                <div class="col-sm-6 col-xs-12">
                    <div style="margin: 5px;">
                        <div class="row" style="border:none; background:white; height:180px;">
                            <div class="col-xs-5">
                                <img src="images/bat.png" class="img-responsive" style="margin-left:0px;"/>
                            </div>
                            <div class="col-xs-7">
                                <h3>Bathroom Remodels ( US only )</h3>
                                <p style=" color:#4b4b4b;">Find a Bathroom Remodels specialist from our network</p>
                                learn more>>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/chw/1/">
                <div class="col-sm-6 col-xs-12">
                    <div style="margin: 5px;">
                        <div class="row" style="border:none; background:white; height:180px;">
                            <div class="col-xs-5">
                                <img src="images/chw.png" class="img-responsive" style="margin-left:0px;"/>
                            </div>
                            <div class="col-xs-7">
                                <h3>Home Warrenty ( US only )</h3>
                                <p style=" color:#4b4b4b;">Find a Home Warrenty specialist from our network</p>
                                learn more>>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/life-settlements/">
                <div class="col-sm-6 col-xs-12">
                    <div style="margin: 5px;">
                        <div class="row" style="border:none; background:white; height:180px;">
                            <div class="col-xs-5">
                                <img src="images/ins.png" class="img-responsive" style="margin-left:0px;"/>
                            </div>
                            <div class="col-xs-7">
                                <h3>Life-settlement (US only)</h3>
                                <p style=" color:#4b4b4b;">Find a life-settlement specialist from our network</p>
                                learn more>>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/roof/">
                <div class="col-sm-6 col-xs-12">
                    <div style="margin: 5px;">
                        <div class="row" style="border:none; background:white; height:160px;">
                            <div class="col-xs-5">
                                <img src="images/roof.png" style="height:150px; margin-left:0px;"/>
                            </div>
                            <div class="col-xs-7">
                                <h3>Roof replacement</h3>
                                <p style=" color:#4b4b4b;">Find a roof specialist from our network</p>
                                <a href="">learn more>></a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/window/">
                <div class="col-sm-6 col-xs-12">
                    <div style="margin: 5px;">
                        <div class="row" style="border:none; background:white; height:160px;">
                            <div class="col-xs-5">
                                <img src="images/window.png" style="height:150px; margin-left:0px;"/>
                            </div>
                            <div class="col-xs-7">
                                <h3>Window replacement</h3>
                                <p style=" color:#4b4b4b;">Find a window specialist from our network</p>
                                <a href="">learn more>></a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
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
