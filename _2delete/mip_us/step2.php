<?php
	$fbid = isset($_POST['fbid'])?$_POST['fbid']:1737334566282055;
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
    <link href="css/awesome-bootstrap-checkbox.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">


</head>
<body>

<header>
    <div class="head-logo">
        <img src="pictures/landing/logo.png">
    </div>
    <div class="head-number">
<!--
        <div class="first">CALL FOR QUOTES:</div>
        <div class="step3"><a href="tel:(888) 633-9277">(888) 633-9277</a></div>
-->
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
	  fbq('track', 'Step-2');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	  src="https://www.facebook.com/tr?id=<?php  echo  $fbid;?>&ev=PageView&noscript=1"
	/></noscript>

	<!-- End Facebook Pixel Code-->
</header>

<div class="step1-main-wrapper">
    <div class="step-progressbar-wrapper">
        <div class="step-progressbar-row1">

            <div class="step-progressbar-name">
                <div class="sp-name-wrapper act-h">
                    <div>Zip Code</div>
                </div>
            </div>

            <div class="step-progressbar-ws"></div>
            <div class="step-progressbar-name">
                <div class="sp-name-wrapper act-h">
                    <div>Location</div>
                </div>
            </div>

            <div class="step-progressbar-ws"></div>
            <div class="step-progressbar-name">
                <div class="sp-name-wrapper act-h">
                    <div>Profile</div>
                </div>
            </div>
            <div class="step-progressbar-ws"></div>
            <div class="step-progressbar-name">
                <div class="sp-name-wrapper">
                    <div>Quotes</div>
                </div>
            </div>
        </div>

        <div class="step-progressbar-row2">
            <div class="step-progressbar-circle done">
                <div class="sp-circle-txt">
                    <div>1</div>
                </div>
            </div>
            <div class="step-progressbar-line line-act"></div>
            <div class="step-progressbar-circle done">
                <div class="sp-circle-txt">
                    <div>2</div>
                </div>
            </div>
            <div class="step-progressbar-line line-act"></div>
            <div class="step-progressbar-circle now">
                <div class="sp-circle-txt">
                    <div>3</div>
                </div>
            </div>
            <div class="step-progressbar-line"></div>
            <div class="step-progressbar-circle">
                <div class="sp-circle-txt">
                    <div>4</div>
                </div>
            </div>
        </div>
    </div><!--step-progressbar-wrapper-->
    <div class="step1-input-wrapper">
    <form data-toggle="validator" role="form" action="thankyou.php" method="post" id="form-step2">
        <div class="stp1-input-row">
            <div class="stp1-input-plan form-group has-feedback">

                <label for="first-name" class="control-label">
                    First Name *
                </label>
                <input type="text" id="first-name" class="form-control" name="first_name" required value=''>
                 <div class="help-block with-errors"></div>
            </div>
            <div class="stp1-input-gender form-group has-feedback">
                <label for="last-name" class="control-label">
                    Last Name *
                </label>
                <input type="text" id="last-name" class="form-control" name="last_name" required value=''>
                 <div class="help-block with-errors"></div>
            </div><!--stp1-input-gender-->
        </div><!--stp1-input-row-->
        <div class="stp1-input-row">
            <div class="stp1-input-plan form-group has-feedback">
                <label for="Email" class="control-label" >
                    Email *
                </label>
                <input type="email" id="Email" class="form-control" name="email" required 
                value=''>
                 <div class="help-block with-errors"></div>
            </div>
            <div class="stp1-input-gender form-group has-feedback">
                <label for="mobile-phone" class="control-label">
                    Primary Phone *
                </label>
                <input type="tel" required maxlength="10" minlength="10" id="home-phone" class="form-control" name="home_phone" value=''>

                 <div class="help-block with-errors"></div>
            </div>
        </div><!--stp1-input-row-->
        <div class="stp1-input-row">
            <div class="stp1-input-plan form-group has-feedback">
                <label for="home-phone" class="control-label">
                    Second Phone
                </label>
                <input type="tel" maxlength="10" minlength="10" id="mobile-phone" class="form-control" placeholder="" name="mobile_phone" value='' >
                 <div class="help-block with-errors"></div>
            </div>
            <div class="stp1-input-gender">
            </div>
        </div><!--stp1-input-row-->
        <div class="stp1-btn-next_wrapper">
            <button type="submit">
                <div class="stp1-btn-next">See My Quotes!</div>
            </button>
        </div>
        <div class="stp1-norton-logo">
<!--             <img src="pictures/steps/norton-logo.png" alt=""> -->
        </div>

       
        <input id="leadid_token" name="universal_leadid" type="hidden" value=""/>
         <input id="_submit" name="_submit" type="hidden" value=1 />
         <input type="hidden" name="st-t-val" id="st-t" value="<?php
if (isset($_POST['st-t'])) {
    echo $_POST['st-t'];
} else {
    echo '';
}
?>" />
                                            <input type="hidden" id="st-custom-id" name="st-custom-id-val" value="<?php
if (isset($_POST['_st_custom_id'])) {
    echo $_POST['_st_custom_id'];
} else {
    echo '';
}
?>" />
                                            <input type="hidden" id="st-custom-value" name="st-custom-value-val" value="<?php
if (isset($_POST['_st_custom_value'])) {
    echo $_POST['_st_custom_value'];
} else {
    if (isset($_POST['subid'])) {
        echo $_POST['subid'];
    } else {
        echo '';
    }
}
?>" />
                                            <input type="hidden" name="click_id" id="click_id" value="<?php
if (isset($_POST['click_id'])) {
    echo $_POST['click_id'];
} else {
    echo '';
}
?>" />
<input type="hidden" name="sub_id" id="sub_id" value="<?php
if (isset($_POST['sub_id'])) {
    echo $_POST['sub_id'];
} else {
    echo '';
}
?>" />
<input type="hidden" name="fbid" id="type" value="<?php echo $fbid; ?>" />
<input type="hidden" name="utm_id" id="type" value="<?php
if (isset($_POST['utm_id'])) {
    echo $_POST['utm_id']; 
} else {
    echo '';
}
?>" />
 <input type="hidden" name="zip" id="zip" value="<?php
if (isset($_POST['zip'])) {
    echo $_POST['zip'];
} else {
    echo '';
}
?>" />
                                            <input type="hidden" id="state" name="state" value="<?php
if (isset($_POST['state'])) {
    echo $_POST['state'];
} else {
    echo '';
}
?>" />
                                            <input type="hidden" id="street_address" name="street_address" value="<?php
if (isset($_POST['street_address'])) {
    echo $_POST['street_address'];
} else {
    if (isset($_POST['street_address'])) {
        echo $_POST['street_address'];
    } else {
        echo '';
    }
}
?>" />
                                            <input type="hidden" name="city" id="city" value="<?php
if (isset($_POST['city'])) {
    echo $_POST['city'];
} else {
    echo '';
}
?>" />
<input type="hidden" name="birth_year" id="birth_year" value="<?php
if (isset($_POST['birth_year'])) {
    echo $_POST['birth_year'];
} else {
    echo '';
}
?>" />
<input type="hidden" name="birth_month" id="birth_month" value="<?php
if (isset($_POST['birth_month'])) {
    echo $_POST['birth_month'];
} else {
    echo '';
}
?>" />
<input type="hidden" name="birth_day" id="birth_day" value="<?php
if (isset($_POST['birth_day'])) {
    echo $_POST['birth_day'];
} else {
    echo '';
}
?>" />

<input type="hidden" name="gender" id="type" value="<?php
if (isset($_POST['gender'])) {
    echo $_POST['gender']; 
} else {
    echo '';
}
?>" />

<input type="hidden" name="stp1-desired-plan" id="type" value="<?php
if (isset($_POST['Plan'])) {
    echo $_POST['Plan']; 
} else {
    echo '';
}
?>" />

       
    </div>
    <div id="stp1-bottom-txt" style="color:white;" >
        <input type="hidden" id="leadid_tcpa_disclosure" />
        <label for="leadid_tcpa_disclosure">
       By clicking the button and submitting this form, I agree that I am 18+ years old and
        I provide my signature expressly consenting to receive emails, calls,
        and text messages about Medicare Supplement, Medicare Advantage, Part D,
        or other offers from these companies and agents to the number(s) I provided,
        including a mobile phone, even if I am on a state or federal Do Not Call and/or
        Do Not Email registry. Such calls and text messages may use automated telephone dialing systems,
        artificial or pre-recorded voices. I understand my wireless carrier may impose charges
        for calls or texts. I understand that my consent to receive communications is not a condition
        of purchase and I may revoke my consent at any time.
        </label>
    </div>
</form>
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
                    <strong><a   href="http://affiliates.purpleleads.com/signup">Affiliates </a> - <a href="https://purpleleads.com/leads">Buy leads</a></strong>
                </p>
    <div class="foot-bottom">
        <hr>
        <div>
            © 2017 Savings-Scanner. All rights reserved.<br>
            * This is not a complete list of carriers available in your service area. For a complete listing, please contact savings-scanner.com or consult www.medicare.gov. By completing the contact form above or calling the number listed above, you will be directed to a licensed sales agent who can answer your questions and
            provide information about Medicare Advantage, Part D or Medicare supplement insurance plans. Neither Savings-Scanner nor its agents are connected with or endorsed by the U.S. government or the federal
            Medicare program.
        </div>
    </div>
</footer>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validator.min.js"></script>
<script src="js/sweetalert.min.js"></script>

<script>
 //validators
    var options = {
        custom: {
            equallls: function ($el) {
                if (($el.val() !== '1')&&($el.val() !== '2')){
                    return "required field"
                }
            }
        }
    };
    var valid= $('#form-step2').validator();
</script>

                  <!--Leadid script leadid dot com-->
    <script id="LeadiDscript" type="text/javascript">
        // <!--
        (function () {
            var s = document.createElement('script');
            s.id = 'LeadiDscript_campaign';
            s.type = 'text/javascript';
            s.async = true;
            s.src = '//create.lidstatic.com/campaign/82c3febc-c3fa-af0a-9f6f-1c5c65ef71a3.js?snippet_version=2';
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
                    s.src = '//create.lidstatic.com/campaign/82c3febc-c3fa-af0a-9f6f-1c5c65ef71a3.js?snippet_version=2';
                    var LeadiDscript = document.getElementById('LeadiDscript');
                    LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
                })();
            }
        }, 10000);
        // -->
    </script>
    <noscript><img src='//create.leadid.com/noscript.gif?lac=f8085cd5-d5be-4d6d-353f-3c8dcc6fc738&lck=82c3febc-c3fa-af0a-9f6f-1c5c65ef71a3&snippet_version=2' /></noscript>
    <!--end Leadid script leadid dot com-->

<script>
$('#form-step2').on('submit', function(){
    var mobile_phone = $('#mobile-phone').val();
    var home_phone = $('#home-phone').val();

    if(mobile_phone == "" && home_phone == ""){
        sweetAlert('At least one phone number is required!');
        $('#home_phone').focus();
        return false;
    }
})

</script>

</body>
</html>
