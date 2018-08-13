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

$offer_url = 'http://geek3.leadspediatrack.com/post.do';


$offer = new OfferSender( $offer_url );

if ( isset( $_POST['_submit'] ) && $_POST['_submit'] == 1 ) {

	$phone = preg_replace( "#[[:punct:]]#", "", $_POST['phone_home'] );

	$status = "";
	$lead   = "";
	$adid   = isset( $_POST['adid'] ) ? $_POST['adid'] : 0;
	$kwid   = isset( $_POST['kwid'] ) ? $_POST['kwid'] : 0;
	$pub_id = "";
	$sub_id = "";
	// $fname  = $_POST['first_name'];
	// $lname  = $_POST['last_name'];
	//function getUserIP1() {
	$ip = $offer->getUserIP();
	// $email    = $_POST['email_address'];
	// $zip      = $_POST['zip'];
	// $st_t_val = $_REQUEST['st-t-val'];


	// switch ( $st_t_val ) {
	// 	case 1018:
	// 		$src = 'INT-Internal';
	// 		break;
	// 	case 1020:
	// 		$src = 'INT-Internal';
	// 		break;
	//
	// 	case 1004:
	// 		$src = 'INT-Internal';
	// 		break;
	//
	// 	case 1002:
	// 		$src = 'INT-Internal';
	// 		break;
	//
	// 	case 2:
	// 		$src = 'INT-Test';
	// 		break;
	//
	// 	default:
	// 		$src = 'INT-Affiliate';
	// 	/*No default yet*/
	//
	// }
	//
	// $st_custom_id_val    = $_REQUEST['st-custom-id-val'];
	// $st_custom_value_val = $_REQUEST['st-custom-value-val'];
	// $click_id            = $_REQUEST['click_id'];


	$data = [
		'lp_test'          => 1,
		'lp_campaign_id'   => $campaign_id,
		'lp_campaign_key'  => $campaign_key,
		'email_address'    => $_POST['email_address'],
		'first_name'       => $_POST['first_name'],
		'last_name'        => $_POST['last_name'],
		'phone_home'       => $_POST['phone_home'],
		'address'          => $_POST['address'],
		'city'             => $_POST['city'],
		'state'            => $_POST['state'],
		'zip_code'         => $_POST['zip_code'],
		'ip_address'       => $_SERVER['REMOTE_ADDR'],
		'landing_page_url' => $_SERVER['REQUEST_URI'],
		'universal_leadid' => '123',
		// 'SRC'           => $src,
		// '_custom_value' => $st_custom_value_val,
		// '_custom_id'    => $st_custom_id_val,
		// 'click_id'      => $click_id,
		// 'st_t'          => $st_t_val,
		// 'Sub_ID'        => $sub_id,
		// 'adid'          => $adid,
		// 'kwid'          => $kwid,
		//
		// 'Pub_ID'            => $st_t_val,
		// 'Trusted_Form_URL'  => $_POST['xxTrustedFormCertUrl'],
		// 'UNIVERSAL_LEAD_ID' => $_POST['universal_leadid'],

	];

	$obj = $offer->postLeads( $data, true );

	$debug      = var_export( $obj, false );
	$debug_data = var_export( $data, false );
	if ( strpos( $debug, 'Success' ) !== false ) {
		$bbd_status = 'accept';
	} else {
		$bbd_status = 'reject';

	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Savings Scanner Bathroom</title>


    <link href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css' rel='stylesheet' type='text/css'/>


    <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
    <script type='text/javascript' src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>


    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/main.css" rel="stylesheet" type='text/css'/>


</head>
<body class="graybg">

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

                <h2>Thank You <? echo $fname . " " . $lname; ?></h2>

				<?php
				echo "<h3><img src='./img/compleet.png'> Get The Bathroom You Want Step 1 Complete</h3>";


				echo '<h3>Congratulations You Will Be Contacted Shortly For Your Free Quote</h3></br>';
				/*Segment pixel people who qualify*/


				if ( $bbd_status == 'accept' ) {
					echo "<!-- Jpl2 Facebook Pixel Code -->
						<script>
						!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
						n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
						n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
						t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
						document,'script','https://connect.facebook.net/en_US/fbevents.js');
						
						fbq('init', '1572218342826061');
						fbq('track', 'Lead');</script>";
				}


				?>


            </div>

        </div>

    </div>

</div>
<!-- <div id="map_canvas" style="height:60%;top:30px"></div>-->
<!-- new comments -->


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
</div>
</div>


</body>
</html>
