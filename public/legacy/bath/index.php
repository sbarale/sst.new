<?php

if ( isset( $_GET['fbid'] ) ) {
	$fbid = $_GET['fbid'];
} else {
	$fbid = 1737334566282056;
}
if ( $fbid == "" ) {
	$fbid = 1737334566282056;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Bathwraps</title>

    <link rel="stylesheet" type="text/css" href="./files/style.css">
    <link href="./files/css" rel="stylesheet">
    <!-- 	<script type="text/javascript" async="" src="./files/trustedform.js"></script> -->
    <script type="text/javascript" src="./files/jquery.min.js"></script>
    <script type="text/javascript" src="./files/d.js"></script>
    <script type="text/javascript" src="./files/jquery.mask.js"></script>
    <script type="text/javascript" src="./files/validate.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div id="container">
    <div id="top">
        <div class="logowrapper"><img src="/images/sst-landscape.png" class="logo"></div>
        <!-- <div class="phonewrapper">
		  <p class="callnum"><img src="images/phoneicon.png" class="callicon">Call: (877) 483-8161</span></p>
		  <p class="callmsg"><span style="font-size:19px;">For Pricing and Information Now</p>
		 </div>-->
    </div>
    <div id="main">
        <div id="title">
            <h1>1 DAY Bathroom Remodels</h1>
            <h2><span>Replace Your Old Shower with a Sleek, Sophisticated Upgrade in One Day</span></h2>
        </div>
        <div id="topcontainer">
            <form id="ckm_form" action="thankyou.php" method="post">
                <div id="rightbox">

                    <div id="form_box">

                        <input type="hidden" name="ckm_offer_id" value="945">
                        <input type="hidden" name="step" value="1">
                        <input type="hidden" name="aid2" value="">
                        <input type="hidden" name="oid2" value="">
                        <input type="hidden" name="s1" value="">
                        <input type="hidden" name="pubid_1" value="">

                        <input id="leadid_token" name="universal_leadid" type="hidden" value=""/>
                        <div id="step1" class="formbg">
                            <div class="start">Get Pricing and Availability for:</div>
                            <table id="form_table">
                                <tbody>
                                <tr>
                                    <td align="center">
                                        <input id="city" name="city" type="hidden" value=""/>
                                        <input id="state" name="state" type="hidden" value=""/>
                                        <input type="hidden" name="_submit" value="1"/>
                                        <input type="text" name="zip_code" id="zip" value="" class="style1 valid-required" maxlength="5" style="text-align:center;width:230px;" placeholder="Enter Your Zip Code">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <a href="#" id="btn_continue"><img src="./files/getpricing.png" alt="Get Pricing"></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="step2" class="formbg hide">
                            <div class="start">Please enter the street address of the home.</div>
                            <table id="form_table2">
                                <tbody>
                                <tr>
                                    <td align="center">
                                        <input type="text" name="address" id="address" value="" class="style1 valid-required" style="text-align:center;width:230px;" placeholder="Street Address">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <br><a href="#" onClick="codeAddress();" id="btn_continue2" class="back">Continue</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <input type="hidden" name="xxTrustedFormToken" id="xxTrustedFormToken_0" value="https://cert.trustedform.com/ca37494a4dc2b8733b5423e83d604d23e533dc90"><input type="hidden" name="xxTrustedFormCertUrl" id="xxTrustedFormCertUrl_0" value="https://cert.trustedform.com/ca37494a4dc2b8733b5423e83d604d23e533dc90">
                    </div>
                    <div class="fullwrapper" id="description">
                        <ul class="bullets">
                            <li> Tub to Shower Conversions, Soaker Tubs, Custom Accessories.
                            </li>
                            <li> Avoid the inconvenience and mess of weeks and weeks of construction.
                            </li>
                            <li> Added safety features: low step options, safety bars, no slip flooring, seat options.
                            </li>
                            <li> BathWraps products are a breeze to maintain and will never stain, chip, mildew, or crack.
                            </li>
                            <li> High-quality products. Quick, expert installation. Outstanding warranty.
                            </li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <div id="step3" class="hide">
                    <div id="laststepbox" class="formbg">
                        <div class="start">Last Step</div>
                        <div class="steptitle">Who Should We Deliver the Price Quote to?</div>
                        <table id="form_table3">
                            <tbody>
                            <tr>
                                <td>
                                    <input type="text" name="first_name" id="first_name" value="" placeholder="First Name" class="style1">
                                </td>
                                <td>
                                    <input type="text" name="last_name" id="last_name" value="" placeholder="Last Name" class="style1">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="phone_home" id="phone_home" value="" placeholder="Phone Number" class="style1">
                                </td>
                                <td>
                                    <input type="text" name="email_address" id="email_address" value="" placeholder="Email Address" class="style1">
                                </td>
                            </tr>
                            <tr>
                                <td align="center" colspan="2">
                                    <input type="submit" alt="Submit" id="btn_submit" value="Submit">
                                    <p class="disclaimer tcpa_disclaimer">
                                        <label><input type="hidden" id="leadid_tcpa_disclosure">By submitting this request for information, I hereby provide my signature, expressly consenting to receive information by email, auto-dialer and/or pre-recorded telephone calls, and/or SMS messages from or on behalf of savings-scanner.com and its
                                            <a href="#" style="font-style: italic">fulfillment partners</a> and may agree to receive other
                                            <a href="#" style="font-style: italic">offers</a> on my telephone number I provided above, including my wireless number, even if I am on a State or Federal Do-Not-Call list. I understand consent is not a condition of purchase and that I may revoke my consent at any time.</label>
                                    </p>

                                </td>
                            </tr>
                            </tbody>

                        </table>
                    </div>
                    <input type="hidden" name="st-t-val" id="st-t" value="<?php
					if ( isset( $_GET['st-t'] ) ) {
						echo $_GET['st-t'];
					} else {
						echo '';
					}
					?>"/>
                    <input type="hidden" id="st-custom-id" name="st-custom-id-val" value="<?php
					if ( isset( $_GET['_st_custom_id'] ) ) {
						echo $_GET['_st_custom_id'];
					} else {
						echo '';
					}
					?>"/>
                    <input type="hidden" id="st-custom-value" name="st-custom-value-val" value="<?php
					if ( isset( $_GET['_st_custom_value'] ) ) {
						echo $_GET['_st_custom_value'];
					} else {
						if ( isset( $_GET['subid'] ) ) {
							echo $_GET['subid'];
						} else {
							echo '';
						}
					}
					?>"/>
                    <input type="hidden" name="click_id" id="click_id" value="<?php
					if ( isset( $_GET['click_id'] ) ) {
						echo $_GET['click_id'];
					} else {
						echo '';
					}
					?>"/>
                    <input type="hidden" name="sub_id" id="sub_id" value="<?php
					if ( isset( $_GET['sub_id'] ) ) {
						echo $_GET['sub_id'];
					} else {
						echo '';
					}
					?>"/>

                </div><!-- laststepbox -->
                <div class="clear"></div>
        </div>
    </div>
    <img src="./files/main.jpg" class="mobile-img">
    </form>
    <div id="footer">
        <p id="tub_disclaimer" style="font-size:12px;text-align:center;">* Pictures shown are for illustrative purposes only. Models available may vary from those displayed in this advertisement.</p>© 2018 savings-scanner.com.
        <a href="https://savings-scanner.com/privacy.pdf" style="">Privacy Policy</a> |
        <a href="https://savings-scanner.com/terms.html">Terms of Service</a></div>
</div>

<script>
    function codeAddress() {
        var zip = document.getElementById('zip').value;

        console.log(address);
        $.get("https://ziptasticapi.com/" + zip, function (data) {
            $("#country_name").html(data.city);
            $('#city').val(data.city);
            $('#state').val(data.state);
            console.log(data);
        }, "json");
    }
</script>

<!-- 	<script defer="" src="./files/tcpa.php"></script> -->

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
    setInterval(function () {
        if (!$('#leadid_token').val()) {
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
<noscript>
    <img src='//create.leadid.com/noscript.gif?lac=f8085cd5-d5be-4d6d-353f-3c8dcc6fc738&lck=82c3febc-c3fa-af0a-9f6f-1c5c65ef71a3&snippet_version=2'/>
</noscript>
<!--end Leadid script leadid dot com-->

<!--  leadactiveprospect dot com -->
<script type="text/javascript">
    (function () {
            var field = 'xxTrustedFormCertUrl';
            var provideReferrer = false;
            var tf = document.createElement('script');
            tf.type = 'text/javascript';
            tf.async = true;
            tf.src = 'http' + ('https:' == document.location.protocol ? 's' : '') +
                '://api.trustedform.com/trustedform.js?provide_referrer=' + escape(provideReferrer) + '&field=' + escape(field) + '&l=' + new Date().getTime() + Math.random();
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(tf, s);
        }
    )();
</script>
<noscript>
    <img src="https://api.trustedform.com/ns.gif"/>
</noscript>
<!--  end leadactiveprospect dot com -->


<script defer="" src="./files/tub.js"></script>

<div id="LeadiD-wrapper-element" class=" LeadiD-ignore-mutation" style="width: 1px; height: 1px; overflow: hidden; position: fixed; left: -1px; top: 0px;">
    <iframe class=" LeadiD-ignore-element LeadiD-ignore-mutation" src="./files/iframe.html"></iframe>
</div>
</body>
</html>


