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


$offer_url = 'https://leads.gotitguy.com/genericPostlead.php?TYPE=93';


$offer = new OfferSender( $offer_url );

if ( isset( $_POST['_submit'] ) && $_POST['_submit'] == 1 ) {

	$phone = preg_replace( "#[[:punct:]]#", "", $_POST['phone_home'] );

	$status = "";
	$lead   = "";
	$adid   = isset( $_POST['adid'] ) ? $_POST['adid'] : 0;
	$kwid   = isset( $_POST['kwid'] ) ? $_POST['kwid'] : 0;
	$pub_id = "";
	$sub_id = "";
	$fname  = $_POST['first_name'];
	$lname  = $_POST['last_name'];
	//function getUserIP1() {
	$ip       = $offer->getUserIP();
	$email    = $_POST['email'];
	$zip      = $_POST['zip'];
	$st_t_val = $_REQUEST['st-t-val'];


	switch ( $st_t_val ) {
		case 1018:
			$src = 'INT-Internal';
			break;
		case 1020:
			$src = 'INT-Internal';
			break;

		case 1004:
			$src = 'INT-Internal';
			break;

		case 1002:
			$src = 'INT-Internal';
			break;

		case 2:
			$src = 'INT-Test';
			break;

		default:
			$src = 'INT-Affiliate';
		/*No default yet*/

	}

	$st_custom_id_val    = $_REQUEST['st-custom-id-val'];
	$st_custom_value_val = $_REQUEST['st-custom-value-val'];
	$click_id            = $_REQUEST['click_id'];


	$data = [
		'SRC'           => $src,
		'Landing_Page'  => 'savings-scanner.com/bath/',
		'IP_Address'    => $ip,
		'_custom_value' => $st_custom_value_val,
		'_custom_id'    => $st_custom_id_val,
		'click_id'      => $click_id,
		'st_t'          => $st_t_val,
		'Sub_ID'        => $sub_id,
		'First_Name'    => $_POST['first_name'],
		'Last_Name'     => $_POST['last_name'],
		'State'         => isset( $_POST['state'] ) ? $_POST['state'] : '',
		'City'          => isset( $_POST['city'] ) ? $_POST['city'] : '',
		'adid'          => $adid,
		'kwid'          => $kwid,
		'Email'         => $_POST['email_address'],
		'Phone'         => str_replace( ' ', '', $phone ),
		'Address'       => $_POST['address'],
		'Zip'           => $_POST['zip_code'],

		'Pub_ID'            => $st_t_val,
		'Trusted_Form_URL'  => $_POST['xxTrustedFormCertUrl'],
		'UNIVERSAL_LEAD_ID' => $_POST['universal_leadid'],

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

    <link href="../../public/assets/remodeling/bath/css/main.css" rel="stylesheet" type='text/css'/>


</head>
<body class="graybg">
<?php include __DIR__ . "/../includes/gtm.php"; ?>

<header class="navbar navbar-static-top" id="top" role="banner">
    <div class="container">
        <nav id="primary-nav" class="row">
            <div class="col-sm-7 col-xs-12">
                <h1 id="brand"><img src="../../public/assets/remodeling/bath/logo.png" class="img-responsive"/></h1>
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
				echo "<h3><img src='../../public/assets/remodeling/bath/compleet.png'> Get The Bathroom You Want Step 1 Complete</h3>";


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


				<?php

				$urlupsell = "http://tracking.jvprpl.com/aff_c?offer_id=136&aff_id=1008&aff_sub=$email&aff_sub2=$fname&aff_sub3=$lname&aff_sub4=$zip&source=$st_t_val&aff_sub5=$st_custom_value_val";

				$urlupsell2 = "http://tracking.jvprpl.com/aff_c?offer_id=188&aff_id=1008&aff_sub=$email&aff_sub2=$fname&aff_sub3=$lname&aff_sub4=$zip&source=$st_t_val&aff_sub5=$st_custom_value_val";


				$random_number = rand( 1, 2 );
				if ( 2 == 2 ){

				?>
                <h2 style="color:#fff; background-color: #3b5998; padding: 5px;">Important Notice</u></h2>
                <h3>During your free evaluation you may need a Fresh Copy of your Credit Report.</h3>
                <h3>To download your credit please
                    <u><u><a href="<?php echo $urlupsell; ?>" style="background-color: #e9ebee; text-decoration: none; color:#424242;  padding: 5px;">click here now.<a></u>
                </h3>

                <a href="<?php echo $urlupsell; ?>"><img src="../../public/assets/remodeling/bath/cr.png" style="margin: 0 auto;" class="img-responsive"/><a>

						<?php


						}else{


						?>
                        <h2 style="color:#fff; background-color: #3b5998; padding: 5px;">Important Notice</u></h2>
                        <h3>During your free evaluation you may need a Fresh Copy of your Credit Report.</h3>
                        <h3>To download your credit please
                            <u><a href="<?php echo $urlupsell; ?>" style="background-color: #e9ebee; text-decoration: none; color:#424242;  padding: 5px;">click here now.<a></u>
                        </h3>

                        <a href="<?php echo $urlupsell; ?>"><img src="../../public/assets/remodeling/bath/cr.png" style="margin: 0 auto;" class="img-responsive"/><a>

								<?php
								}


								?>


                                <!--
								<h2>Thank you! Please call within the next <span id="countdown_timer">9 min 59 sec</span> to get your free results.</h2>-->


                                <!--
								<h1><strong><a href="tel:8887714249" title="Free Quote. Click to Call - No Holding, Instant Connect" target="_blank" class="blue">(888) 771-4249</a></strong></h1>-->
            </div>
            <!--<div style="opacity: 0.8; margin-top: 10px; margin-bottom: 30px; width: 280px;" class="center-block" >

		<img src="img/SecureSeal.png"   />
	</div>-->
            <div style="padding-bottom: 10px; padding-top: 10px; background-color: #f2f2f2; color:#999999;">
                <strong>*</strong></br>
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
            <a href="https://savings-scanner.com/privacy.pdf" target="_blank">Privacy Policy</a> &amp;
            <a href="https://savings-scanner.com/terms.html" target="_blank">Terms</a></strong>
    </p>
</div>
</div>
</div>


</body>
</html>
