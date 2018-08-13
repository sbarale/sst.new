<?php
	$zip = $_POST['zipcode'];
	$fbid = isset($_POST['fbid'])?$_POST['fbid']:1737334566282055;
?>
<!DOCTYPE html>
<html lang="en">
<head>


<!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Savings-Scanner</title>
    <link rel="stylesheet" type="text/css" href="css/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="css/step1.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/awesome-bootstrap-checkbox.min.css" rel="stylesheet">
    <link href="css/bootstrap-datepicker3.min.css" rel="stylesheet">

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
                <div class="sp-name-wrapper">
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
            <div class="step-progressbar-circle now">
                <div class="sp-circle-txt">
                    <div>2</div>
                </div>
            </div>
            <div class="step-progressbar-line"></div>
            <div class="step-progressbar-circle ">
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
        <form data-toggle="validator" role="form" id="myForm" action="./step2.php"  method="post">
            <div class="stp1-input-row">
                <div class="stp1-input-plan">
                    <label for="stp1-desired-plan" class="control-label">
                        Desired Plan *
                    </label>
                    <div class="form-group has-feedback">
                        <select id="stp1-desired-plan" name="Plan" class="form-control" data-equallls="foo" name="desired_plan" required>
                            <!--<option disabled selected hidden></option>-->
                        <option value='Medicare Supplemental' >Medicare Supplemental</option>
                        <option value='Medicare Advantage' >Medicare Advantage</option>
                        <option value='Medicare Part D' >Medicare Part D</option>
                        <option value='Other Medicare' >Other Medicare</option>
                            
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="stp1-input-gender">
                    <div class="form-group has-feedback">
                    <!--<form role="form">-->
                    <label for="stp1-gender" class="control-label">
                        Gender *
                    </label>
                    <div id="stp1-gender">

                            <div>
                                <div class="radio radio-warning">
                                    <input type="radio" name="gender" id="radio1" value="Male" required>
                                    <label for="radio1">
                                        Male
                                    </label>
                                </div>
                            </div>
                            <div id="stp1-gender2">
                                <div class="radio radio-warning">
                                    <input type="radio" name="gender" id="radio2" value="Female">
                                    <label for="radio2">
                                        Female
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="help-block with-errors"></div>
                    </div>
                </div><!--stp1-input-gender-->
            </div><!--stp1-input-row-->
            <div class="stp1-input-row">
                <div class="stp1-input-plan">
                    <label for="birth_date" class="control-label">
                        Date of Birth *
                    </label>
                    <div class="date" id="">
                        <div class="form-group has-feedback form-group-date">
                          <select id="stp1-year" required class="form-control" name="birth_year">
                          </select>
                          <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group has-feedback form-group-date">
                          <select id="stp1-month" required class="form-control" name="birth_month">
                          </select>
                          <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group has-feedback form-group-date">
                          <select id="stp1-day" required class="form-control" name="birth_day">
                          
                          </select>
                          <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="stp1-input-gender">

                    <label for="address" class="control-label">
                        Street Address *
                    </label>
                    <div class="form-group has-feedback">
                        <input type="text" id="address" class="form-control" name="street_address" required>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="stp1-input-address-edit">
                        <div></div>
                        <div class="stp1-address-edit-link">
                            <a id="stp1-edit-link">
                                <span class="glyphicon glyphicon-edit"></span>
                                EDIT
                            </a>
                        </div>
                    </div>
                    <div id="stp1-edit-block">
                        
                            <label for="city" class="control-label">
                                City *
                            </label>
                        <div class="form-group has-feedback">
                            <input type="text" id="city" class="form-control" name="city" value="" required>

                             <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="state" class="control-label">
                                State *
                            </label>
                            <div class="lp-container" id="states">
                                <select id='select_states' name='state' class="form-control" style='width:228px;' required >
                                  <option value=''>Select</option>
                                  <option value='AL' >AL</option>
                                  <option value='AK' >AK</option>
                                  <option value='AZ' >AZ</option>
                                  <option value='AR' >AR</option>
                                  <option value='CA' >CA</option>
                                  <option value='CO' >CO</option>
                                  <option value='CT' >CT</option>
                                  <option value='DE' >DE</option>
                                  <option value='FL' >FL</option>
                                  <option value='GA' >GA</option>
                                  <option value='HI' >HI</option>
                                  <option value='ID' >ID</option>
                                  <option value='IL' >IL</option>
                                  <option value='IN' >IN</option>
                                  <option value='IA' >IA</option>
                                  <option value='KS' >KS</option>
                                  <option value='KY' >KY</option>
                                  <option value='LA' >LA</option>
                                  <option value='ME' >ME</option>
                                  <option value='MD' >MD</option>
                                  <option value='MA' >MA</option>
                                  <option value='MI' >MI</option>
                                  <option value='MN' >MN</option>
                                  <option value='MS' >MS</option>
                                  <option value='MO' >MO</option>
                                  <option value='MT' >MT</option>
                                  <option value='NE' >NE</option>
                                  <option value='NV' >NV</option>
                                  <option value='NH' >NH</option>
                                  <option value='NJ' >NJ</option>
                                  <option value='NM' >NM</option>
                                  <option value='NY' >NY</option>
                                  <option value='NC' >NC</option>
                                  <option value='ND' >ND</option>
                                  <option value='OH' >OH</option>
                                  <option value='OK' >OK</option>
                                  <option value='OR' >OR</option>
                                  <option value='PA' >PA</option>
                                  <option value='RI' >RI</option>
                                  <option value='SC' >SC</option>
                                  <option value='SD' >SD</option>
                                  <option value='TN' >TN</option>
                                  <option value='TX' >TX</option>
                                  <option value='UT' >UT</option>
                                  <option value='VT' >VT</option>
                                  <option value='VA' >VA</option>
                                  <option value='WA' >WA</option>
                                  <option value='WV' >WV</option>
                                  <option value='WI' >WI</option>
                                  <option value='WY' >WY</option>
                                  <option value='AS' >AS</option>
                                  <option value='DC' >DC</option>
                                  <option value='FM' >FM</option>
                                  <option value='GU' >GU</option>
                                  <option value='MH' >MH</option>
                                  <option value='MP' >MP</option>
                                  <option value='PW' >PW</option>
                                  <option value='PR' >PR</option>
                                  <option value='VI' >VI</option>
                               </select>
                               <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="zip" class="control-label">
                                ZIP *
                            </label>
                            <input type="text" id="zip" class="form-control" maxlength="5" name="zip" value="<?php echo $zip; ?>" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        
                        <input type="hidden" name="st-t" id="st-t" value="<?php
if (isset($_POST['st-t'])) {
    echo $_POST['st-t'];
} else {
    echo '';
}
?>" />
                                            <input type="hidden" id="st-custom-id" name="_st_custom_id" value="<?php
if (isset($_POST['_st_custom_id'])) {
    echo $_POST['_st_custom_id'];
} else {
    echo '';
}
?>" />
                                            <input type="hidden" id="st-custom-value" name="_st_custom_value" value="<?php
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

                    </div>
                </div>
            </div><!--stp1-input-row-->
        <div class="stp1-btn-next_wrapper">
            <!--<a href="step2.html">-->
            <button type="submit">
                <div class="stp1-btn-next">NEXT STEP</div>
            </button>
        </div>
        </form>
        <div class="stp1-norton-logo">
<!--             <img src="pictures/steps/norton-logo.png" alt=""> -->
        </div>
    </div>
    <div class="stp1-bottom-txt">By clicking the button and submitting this form, I agree that I am 18+ years old and
        I provide my signature expressly consenting to receive emails, calls,
        and text messages about Medicare Supplement, Medicare Advantage, Part D,
        or other offers from these companies and agents to the number(s) I provided,
        including a mobile phone, even if I am on a state or federal Do Not Call and/or
        Do Not Email registry. Such calls and text messages may use automated telephone dialing systems,
        artificial or pre-recorded voices. I understand my wireless carrier may impose charges
        for calls or texts. I understand that my consent to receive communications is not a condition
        of purchase and I may revoke my consent at any time.
    </div>
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
                     <a target="_blank" href="contact-us/index.html">Contact Us</a><br>
                 </div>
                 <div>
                     <a target="_blank" href="terms-of-service/index.html" >Terms Of Service</a><br>
                     <a target="_blank" href="privacy-policy/index.html">Privacy Policy</a><br>
                     <a target="_blank"  href="company-list/index.html">Partners</a><br>
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
            * This is not a complete list of carriers available in your service area. For a complete listing, please
            contact savings-scanner or consult www.medicare.gov. By completing the contact form above or calling the
            number listed above, you will be directed to a licensed sales agent who can answer your questions and
            provide information about Medicare Advantage, Part D or Medicare supplement insurance plans. Neither
            Savings-Scanner nor its agents are connected with or endorsed by the U.S. government or the federal
            Medicare program.
        </div>
    </div>
</footer>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validator.min.js"></script>
<script src="js/mask.js"></script>

<script>
    // config for datepicker
     $('.maskedbirthday').mask("00/00/0000", {clearIfNotMatch: true, placeholder: 'MM/DD/YYYY'});
    // generate 'Date of Birth' selectors
    var years = [];
    years[0] = "<option value='' selected hidden>Year</option>";
    for (var i = 1960; i >= 1915; i--) {
           years[years.length] = "<option value='"+i+"'>" + i + "</option>";
    }

    var monthNames = ["January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
]; 

    var month = [];
    month[0] = "<option value='' selected hidden>Month</option>";
    for (var i = 1; i < 13; i++) {
        month[month.length] = "<option value='"+i+"'>" + monthNames[i-1] + "</option>";

    }
    var days = [];
    days[0] = "<option value='' selected hidden>Day</option>";
    for (var i = 1; i < 32; i++) {
        days[days.length] = "<option value='"+i+"'>" + i + "</option>";

    }


    $("#stp1-year").append(years);
    $("#stp1-month").append(month);
    $("#stp1-day").append(days);

    //'Edit' block show/hide
    $("#stp1-edit-link").on("click", function () {
        var itm = $("#stp1-edit-block");
        var show = itm.css("display") === "none" ? "block" : "none";
        itm.css("display", show);

    });
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
    var valid= $('#myForm').validator();
    $('#select_states').val("");

    
        $('#stp1-edit-link').click();
        $('#stp1-edit-link').hide();
    
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

</body>
</html>
