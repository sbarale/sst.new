<?php
/**
 * This file work with OfferSender
 * and send data to the database
 * also show the thank you page
 *
 * @package    …
 * @author     Vadym
 * @version    1.0
 */
require_once( 'OfferSender.php' );


$campaign_id  = '5b6313889dc73';
$campaign_key = 'fxYHVwbMWT4t2By6mpn8';

$offer_url = 'http://track.geek3.io/post.do';


$offer      = new OfferSender( $offer_url );
$first_name = isset( $_POST['first_name'] ) ? $_POST['first_name'] : '';
$last_name  = isset( $_POST['last_name'] ) ? $_POST['last_name'] : '';

if ( isset( $_POST['_submit'] ) && $_POST['_submit'] == 1 ) {

	$phone = preg_replace( "#[[:punct:]]#", "", $_POST['phone_home'] );

	$status = "";
	$lead   = "";

	$adid         = isset( $_POST['adid'] ) ? $_POST['adid'] : 0;
	$kwid         = isset( $_POST['kwid'] ) ? $_POST['kwid'] : 0;
	$custom_fb_px = isset( $_POST['custom_fb_px'] ) ? $_POST['custom_fb_px'] : '';
	$click_id     = isset( $_POST['click_id'] ) ? $_POST['click_id'] : 0;
	$is_test      = isset( $_POST['is_test'] ) ? $_POST['is_test'] : 0;
	$pub_id       = isset( $_POST['pub_id'] ) ? $_POST['pub_id'] : 0;
	$sub_id       = isset( $_POST['sub_id'] ) ? $_POST['sub_id'] : 0;
	$fbid         = isset( $_GET['fbid'] ) ? $_GET['fbid'] : "";
	$ip           = $offer->getUserIP();


	$data = [
		'lp_test'          => $is_test,
		'lp_campaign_id'   => $campaign_id,
		'lp_campaign_key'  => $campaign_key,
		'email_address'    => $_POST['email_address'],
		'first_name'       => $first_name,
		'last_name'        => $last_name,
		'phone_home'       => $_POST['phone_home'],
		'address'          => $_POST['address'],
		'city'             => $_POST['city'],
		'state'            => $_POST['state'],
		'zip_code'         => $_POST['zip_code'],
		'ip_address'       => $ip,
		'landing_page_url' => $_SERVER['REQUEST_URI'],
		'universal_leadid' => $_POST['universal_leadid'],
		'click_id'         => $click_id,
		'adid'             => $adid,
		'kwid'             => $kwid,
		'Trusted_Form_URL' => $_POST['xxTrustedFormCertUrl'],
	];

	$obj = $offer->postLeads( $data, false );
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        dataLayer = [];
    </script>
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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Smart Savings Bathroom</title>
    <link href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css' rel='stylesheet' type='text/css'/>
    <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
    <script type='text/javascript' src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/main.css" rel="stylesheet" type='text/css'/>
</head>
<body class="graybg">
<!--<!-- Google Tag Manager (noscript) -->-->
<!--<noscript>-->
<!--    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M2H3LLJ"-->
<!--            height="0" width="0" style="display:none;visibility:hidden"></iframe>-->
<!--</noscript>-->
<!--<!-- End Google Tag Manager (noscript) -->-->

<header class="navbar navbar-static-top" id="top" role="banner">
    <div class="container">
        <nav id="primary-nav" class="row">
            <div class="col-sm-7 col-xs-12">
                <h1 id="brand"><img src="/images/sst-landscape.png" class="img-responsive"/></h1>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="wrapper hidden-xs" style="color:gray; padding-top: 10px">
                    <div class="counter col_fourth">
                        <!--<h5 class="count-text ">People used our service:</h5>-->
                        <h3 class="timer count-title" style="margin-top:-10px" id="count-number" data-to="98870" data-speed="1500"></h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-xs-12">
                <div class="header_number">
                    <div style="font-size:13px;font-weight:normal;" class="hidden-xs">
                        <!--
						</br>
						<p style="display:inline;font-size:15px;font-weight:normal;" class="timer count-title count-text"  id="count-number" data-to="98080" data-speed="1500">People used our service :</p>

						<p style="display:inline; font-size:15px;font-weight:normal;" class="count-text " >People used our service</p>
						-->

                    </div>
                    <!--<div>Apply Now:</div>-->
                    <div style="font-size:13px;font-weight:normal;" class="visible-xs"></div>
                </div>
            </div>
        </nav>
    </div>
</header>

<div>
    <div class="container ">
        <div class="secondarybg  whitebg">
            <div class="quiz_form ">
                <!--
				<a href="tel:8889981190" style="color: #fff; "> <div style="margin-bottom: 15px;" ><span style="font-size: 25px; background-color: red;  padding:10px;   border-radius: 15px;"> Call Now: (888) 998-1190</a></span></div>-->
                <h2>Thank You <? echo $first_name . " " . $last_name; ?></h2>
                <h3><img src='./img/compleet.png'>Step 1 Complete! </h3>
                <h3>Congratulations you're just one step closer to your dreamed bathroom remodeling project!</h3>
                <h3>You Will Be Contacted Shortly For Your Free Quote</h3>
                <br>
				<?php //$offer->showPixel(); ?>
				<?php $offer->track(); ?>
            </div>

        </div>

    </div>

</div>
<div style="opacity: 1.0; margin-top: 10px; margin-bottom: 30px; width: 100px;
    " class="center-block">
</div>
<div class="summary_terms">
    <p style="text-align:center;color:#fff;">
        <strong>Copyright 2018 | All Rights Reserved |
            <a href="https://smartsavings.today/privacy.pdf" target="_blank">Privacy Policy</a> &amp;
            <a href="https://smartsavings.today/terms.html" target="_blank">Terms</a></strong>
    </p>
</div>
</body>
</html>
