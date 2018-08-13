<?php
	require_once('OfferSender.php');


$offer_url = 'https://leads.gotitguy.com/genericPostlead.php?TYPE=89';



$offer = new OfferSender($offer_url);

if (isset($_POST['_submit']) && $_POST['_submit'] == 1) {

    $phone = preg_replace("#[[:punct:]]#", "", $_POST['phone']);
    $adid = isset($_POST['adid'])?$_POST['adid']:0;
    $kwid = isset($_POST['kwid'])?$_POST['kwid']:0;
    $fbid = isset($_POST['fbid'])?$_POST['fbid']:1737334566282055;
    $pub_id = "";
    $sub_id = "";
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $st_t_val = $_POST['st-t-val'];
     switch ($st_t_val) {
	case 1002:
	$src = 'INT-Internal';
	break;
	case 1004:
	$src = 'INT-Internal';
	break;
	case 2:
	$src = 'INT-Test';
	break;
						   					    
	default:
	$src = 'INT-Affiliate';
	/*No default yet*/
							 	
	}
  
    $ip = $offer->getUserIP();
    $email = $_POST['email'];
    $zip = $_POST['zip'];
	        
    $st_custom_id_val = $_POST['st-custom-id-val'];
    $st_custom_value_val = $_POST['st-custom-value-val'];
    $click_id = $_POST['click_id'];


        $data = array(
            'SRC'=>$src,
            'Landing_Page'=>'savings-scanner.com/msp_us/',
			'Zip'=>$_POST['zip'],
			'State'=>$_POST['state'],
			'Address'=>$_POST['street_address'],
			'City'=>$_POST['city'],
			'DOB'=>$_POST['birth_month'].'/'.$_POST['birth_day'].'/'.$_POST['birth_year'],
			'Gender'=>$_POST['gender'],
			'Coverage'=>$_POST['stp1-desired-plan'],
						
			'First_Name'=>$_POST['first_name'],
            'Last_Name'=>$_POST['last_name'],
            'Email'=>$_POST['email'],
            'Mobile'=>$_POST['mobile_phone'],
            'Phone'=>$_POST['home_phone'],
            'Pub_ID'=>$st_t_val,
			'st_t'=>$st_t_val,
            'IP_Address'=>$ip,
            '_custom_value'=>$st_custom_value_val,
            '_custom_id'=>$st_custom_id_val,
            'click_id' => $click_id,
            'Sub_ID'=>$sub_id,

            'UNIVERSAL_LEAD_ID' => $_POST['universal_leadid'],
            'utm_id' =>$_POST['utm_id'],
        );


		
        $obj = $offer->postLeads( $data , false );
        
        $debug = var_export($obj, false);
        $debug_data = var_export($data, false);
        if (strpos($debug, 'Success') !== false) {
        $bbd_status = 'accept';
        } else{
            $bbd_status = 'reject';
        }

        
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Savings-Scanner</title>
    <link rel="stylesheet" type="text/css" href="css/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="css/step1.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<header>
    <div class="head-logo">
        <img src="pictures/landing/logo.png">
    </div>
<!--
    <div class="head-number">
        <div class="first">CALL FOR QUOTES:</div>
        <div class="second"><a href="tel:(888) 633-9277">(888) 633-9277</a></div>
    </div>
-->
</header>

<div class="step3-background">
    <div class="step3">
     <p style="width: 60%; text-align:left;"> Thank you for signing up.
         Unfortunately, rates for ,  cannot be displayed at this time.
         We will be in touch to do a live rate comparison with you shortly. Or you can get in touch with us now by calling:<br />
         
    </div>
    
    <!--Facebook Pixel Code -->
	<script>
	  !function(f,b,e,v,n,t,s)
	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	  n.queue=[];t=b.createElement(e);t.async=!0;
	  t.src=v;s=b.getElementsByTagName(e)[0];
	  s.parentNode.insertBefore(t,s)}(window, document,'script',
	  'https://connect.facebook.net/en_US/fbevents.js');
	  fbq('init', '<?php  echo  $fbid;?>');
	  fbq('track', 'Lead');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	  src="https://www.facebook.com/tr?id=<?php  echo  $fbid;?>&ev=PageView&noscript=1"
	/></noscript>

	<!-- End Facebook Pixel Code-->
    
</div>

<footer>
    <div class="foot-top">
<!--
        <div class="foot-logo">

        </div>
-->
        <div class="foot-links">
            <div class="links-list">
<!--
                 <div>
                     <a href="index.html">Home</a><br>
                     <a target="_blank" href="blog/index.html">Blog</a><br>
                     <a target="_blank" href="blog/contact-us/index.html">Contact Us</a><br>
                 </div>
                 <div>
                     <a target="_blank" href="blog/terms-of-service/index.html" >Terms Of Service</a><br>
                     <a target="_blank" href="blog/privacy-policy/index.html">Privacy Policy</a><br>
                     <a target="_blank"  href="blog/company-list/index.html">Partners</a><br>
                 </div>
-->
             </div>
            <div class="follows">
<!--
                Follow us:<br>
                <div class="follow-links">
                    <div><a target="_blank" href="https://www.facebook.com/Savings-Scanner/"><img src="pictures/landing/pic_6.png"></a></div>
                     <div><a target="_blank" href="blog/feed/index.rss"><img src="pictures/landing/pic_7.png"></a></div>
                     <div><a target="_blank" href="https://www.pinterest.com/Savings-Scanner/"><img src="pictures/landing/pic_5.png"></a></div>
                     <div><a target="_blank" href="https://twitter.com/Savings-Scanner/"><img src="pictures/landing/pic_4.png"></a></div>
                     <!--<div><a target="_blank" href=""><img src="/pictures/landing/pic_3.png"></a></div>
                     <div><a target="_blank" href="https://www.youtube.com/channel/UCTdh-yiWMimg616puFP8WtQ"><img src="pictures/landing/pic_2.png"></a></div>
                     <div><a target="_blank" href="https://www.instagram.com/Savings-Scanner/"><img src="pictures/landing/pic_1.png"></a></div>
                </div>
-->
            </div>
        </div>
    </div>
         <p style="text-align:center;color:#424242">                      
                    <strong>Copyright 2018 | All Rights Reserved | <a href="https://savings-scanner.com/privacy.pdf" target="_blank">Privacy Policy</a> &amp; <a href="https://savings-scanner.com/terms.html" target="_blank">Terms</a></strong></p>
                    <p style="text-align:center;">
                    <strong><a   href="http://affiliates.purpleleads.com/signup">Affiliates </a> - <a href="http://purpleleads.com/leads">Buy leads</a></strong>
                </p>
    <div class="foot-bottom">
        <hr>
        <div>
            © 2017 Savings-Scanner. All rights reserved.<br>
            * This is not a complete list of carriers available in your service area. For a complete listing, please contact savings-scanner or consult www.medicare.gov. By completing the contact form above or calling the number listed above, you will be directed to a licensed sales agent who can answer your questions and
            provide information about Medicare Advantage, Part D or Medicare supplement insurance plans. Neither Savings-Scanner nor its agents are connected with or endorsed by the U.S. government or the federal
            Medicare program.
        </div>
    </div>
</footer>


</body>
</html>
