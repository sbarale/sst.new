<?php
$adid = '';
$kwid = 1;
if (isset($_GET['adid'])) {
    $adid = $_GET['adid'];
}
if (isset($_GET['kwid'])) {
    $kwid = $_GET['kwid'];
}

if (isset($_GET['animation'])) {
        $animation = $_GET['animation'];
        if($animation == 'on'){
	        $move_to_slide = '#calculate_slide';
        }else{
	        $move_to_slide = '#name_slide';
        }
    } else{
	    $move_to_slide = '#name_slide';
    }

if (isset($_GET['ad_presell'])) {
        $ad_presell = $_GET['ad_presell'];
    } else{
	    $ad_presell = '';
    }

if (isset($_GET['ad_image'])) {
        $ad_image = $_GET['ad_image'];
    } else{
	    $ad_image = '';
    }

if (isset($_GET['ad_headline'])) {
        $ad_headline = $_GET['ad_headline'];
    } else{
	    $ad_headline = '';
    }

/* fb pixel */
if (isset($_GET['fbid'])) {
    $fbid = $_GET['fbid'];
    if ($fbid == ""){
	    $fbid = 2200082376885488;
    }
    }else{
	   $fbid = 2200082376885411;

    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>Take the Quiz to See if you Qualify</title>
   
		
        
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href='//fonts.googleapis.com/css?family=Merriweather:regular,700' rel='stylesheet' type='text/css' />
     
        <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
        <script type='text/javascript' src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
        <link href="css/main.css" rel="stylesheet" type='text/css' />
        <link href="css/jquery.nouislider.css" rel="stylesheet" type='text/css' />
        <link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css' />
         <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9xy8KF8H9Cu-Bui1nB5zHM860PlgkFFw&libraries=places,geometry"></script>
        <link rel="stylesheet" href="assets/bootstrap-tagsinput.css" type="text/css">
		
		<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
<!--
		<script type='text/javascript'>
		  $(document).ready( function() {
			  $("#phone").mask("(999) 999-9999");
		  });
		</script>
-->

		<!-- Facebook Pixel Code -->
		<script>
		!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
		n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
		document,'script','https://connect.facebook.net/en_US/fbevents.js');
		
		fbq('init', '119417412251829');
		
		//fbq('init', '<?php echo $fbid;?>');
		
		fbq('track', "PageView");</script>
		<noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=119417412251829&ev=PageView&noscript=1"
		/></noscript>
		<!-- End Facebook Pixel Code -->

</head>
<body  class="graybg" >
    <header class="navbar navbar-static-top" id="top" role="banner" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <header class="navbar navbar-static-top" id="top" role="banner">
                        <nav id="primary-nav" class="">
                            <div class="row brand">
                                <div class="col-md-4">
                                    <a href="/"><img src="/images/sst-landscape.png" class=" img-responsive pull-left"/></a>
                                </div>
                                <div class="col-md-4 hidden-xs hidden-sm">
                                    <img src="/images/mortgage-refinance.png" class="img-responsive center-block"/>
                                </div>
                                <div class="col-md-4 hidden-xs">
                                    <img src="/images/secure2.png" class="img-responsive pull-right secure-img"/>
                                </div>
                            </div>
                        </nav>
                    </header>
                </div>
            </div>
        </div>
    </header>
    <div class="img-bg">
        <div class="container">

            <div class="secondarybg whitebg">

                <form name="apply_form" action="thankyou.php" id="apply_form" class="form-horizontal quiz_form" method="POST">
                    <h1 class="header" id="survey_headline" style="text-transform: uppercase;">Need Roof Replacement & Installation in your area?</h1>

                    <h1 class="header" id="receive_info_headline" style="display: none;  ">Your Personal Report Is Almost Ready To Send</h1>
                    <input type="hidden" name="_submit" value="1" />
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary form-progress-bar" role="progressbar" style="width: 0%"></div>
                    </div>


                    <div id="flow-slider-container" class="slider-container">
                        <div class="slider-wrapper">

                            <!-- START STATE_QUESTION -->
                            <div class="slider-slide" id="zip_code_slide">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h2>
                                            Get Pricing and Availability for:
                                        </h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <input type="text" id="zip_code" name="zip_code" class="form-control input-lg" maxlength="5" placeholder="ENTER YOUR ZIP CODE" data-parsley-type="number" data-parsley-length="[5, 5]" required data-parsley-error-message="Please provide your zip code." data-parsley-group="block1">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <button type="button" class="btn btn-success btn-lg btn-page1">Next</button>
                                    </div>
                                </div>
                            </div>
                            <!-- END STATE_QUESTION -->

                            <!-- START STATE_QUESTION -->
                            <div class="slider-slide" id="address_slide">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h2>
                                            Please enter the street address of the home.
                                        </h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <input type="hidden" id="address" name="address">
                                        <input type="text" id="address_mask" name="address_mask" class="form-control input-lg" required data-parsley-usaddress="1" data-parsley-error-message="Please provide your street number at the beginning" data-parsley-group="block2">
                                        <input type="hidden" pattern="[0-9]*" id="zip" name="zip" onChange="document.getElementById('zip2').value = this.value" class="form-control input-lg" data-parsley-error-message="Please enter a valid zip" data-parsley-group="block2" placeholder="Enter Your Zip" maxlength="5" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <button type="button" class="btn btn-success btn-lg btn-page2"  disabled>Next</button>
                                    </div>
                                </div>

                            </div>
                            <!-- END STATE_QUESTION -->

                            <!-- START DETAILS QUESTION -->
                            <div class="slider-slide" id="name_slide">
                                <input type="hidden" name="page_track_name" value="1" />
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div style="font-weight:bold;"><p>Please Fill Out Information Below so You Can Receive Your Results</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-xs-6">
                                        First Name
                                        <input type="text" id="first_name" name="first_name" class="form-control input-lg" required data-parsley-error-message="Please enter your first name" data-parsley-group="block3" placeholder="First Name" />
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        Last Name
                                        <input type="text" id="last_name" name="last_name" class="form-control input-lg" required data-parsley-error-message="Please enter your last name" data-parsley-group="block3" placeholder="Last Name" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        Email
                                        <input type="email" id="email" name="email" class="form-control input-lg" required data-parsley-error-message="Please enter a valid email" data-parsley-group="block3" placeholder="Enter Your Email" />
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        Phone
                                        <input type="tel" id="phone" name="phone" class="form-control input-lg" required data-parsley-usphone="1" data-parsley-error-message="Please enter a valid phone with area code" data-parsley-group="block3" data-parsley-minlength="10" data-parsley-maxlength="14" placeholder="Enter Your Phone (With Area Code)" />
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-sm-12 col-md-12">

                                        <input type="text" id="address2" name="address2" class="form-control input-lg" style="display: none;"/>
                                    </div>
                                    <div class="col-xs-6">
                                        <!--                                         ZIP -->
                                        <input type="text" id="zip2" name="zip2" class="form-control input-lg" readonly style="display: none;">
                                    </div>
                                    <div class="col-xs-6 visible-sm visible-xs">
                                        <!--                                         State -->
                                        <input type="text" id="state" name="state" class="form-control input-lg" readonly style="display: none;">
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <button type="button" class="btn btn-success btn-lg btn-page3">GET MATCHES</button>

                                        </br> </br>
                                        <!-- begin tcpa-->
                                        <div style="color:gray; font-size: 10px;">
                                            <div id="tcpa" >
                                                <input type="hidden" id="leadid_tcpa_disclosure" />
                                                <label for="leadid_tcpa_disclosure">


                                                    By clicking "GET MATCHES" I provide my signature, expressly authorizing up to four home improvement companies or their agents or partner companies to contact me at the number and address provided with home improvement quotes or to obtain additional information for such purpose, via live, prerecorded or autodialed calls, text messages or email. I understand that my signature is not a condition of purchasing any property, goods or services and that I may </label>
                                            </div>

                                            <!-- end tcpa-->
                                            <input id="city" name="city" type="hidden" value=""/>
                                            <input type="hidden" class="it" name="keyword" id="keyword" value="gosa" />
                                            <input type="hidden" id="adid" name="adid" value="<?php echo $adid; ?>" />
                                            <input type="hidden" id="kwid" name="kwid" value="<?php echo $kwid; ?>" />
                                            <input type="hidden" id="ad_presell" name="ad_presell" value="<?php echo $ad_presell; ?>" />
                                            <input type="hidden" id="ad_image" name="ad_image" value="<?php echo $ad_image; ?>" />
                                            <input type="hidden" id="ad_headline" name="ad_headline" value="<?php echo $ad_headline;?>" />
                                            <input id="leadid_token" name="universal_leadid" type="hidden" value=""/>
                                            <!--<input id="___pageid___" name="___pageid___" type="hidden" value=""/>-->


                                            <input type="hidden" name="st-t-val" id="st-t" value="<?php
                                            if (isset($_GET['st-t'])) {
                                                echo $_GET['st-t'];
                                            } else {
                                                echo '';
                                            }
                                            ?>" />
                                            <input type="hidden" id="st-custom-id" name="st-custom-id-val" value="<?php
                                            if (isset($_GET['_st_custom_id'])) {
                                                echo $_GET['_st_custom_id'];
                                            } else {
                                                echo '';
                                            }
                                            ?>" />
                                            <input type="hidden" id="st-custom-value" name="st-custom-value-val" value="<?php
                                            if (isset($_GET['_st_custom_value'])) {
                                                echo $_GET['_st_custom_value'];
                                            } else {
                                                if (isset($_GET['subid'])) {
                                                    echo $_GET['subid'];
                                                } else {
                                                    echo '';
                                                }
                                            }
                                            ?>" />
                                            <input type="hidden" name="click_id" id="click_id" value="<?php
                                            if (isset($_GET['click_id'])) {
                                                echo $_GET['click_id'];
                                            } else {
                                                echo '';
                                            }
                                            ?>" />
                                            <input type="hidden" name="sub_id" id="sub_id" value="<?php
                                            if (isset($_GET['sub_id'])) {
                                                echo $_GET['sub_id'];
                                            } else {
                                                echo '';
                                            }
                                            ?>" />


                                        </div>
                                    </div>
                                </div>


                                <div class="slider-slide" id="thankyou_slide">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h2>Thank You</h2>
                                            <div>Please Wait...</div><br><br>
                                            <img src="img/loader.gif" />
                                            <div class="plus-loader">
                                                Loading…
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                </form>






            </div>
            <div style="opacity: 0.8; margin-top: 10px; margin-bottom: 30px; width: 280px;" class="center-block" >

                <img src="img/SecureSeal.png"   />
            </div>
            <div style="padding-bottom: 10px; padding-top: 10px; background-color: #f2f2f2; color:#999999;">
                <strong></strong></br>
            </div>

        </div>
    </div>
</div>

    <div class="container" style="padding-top:12px;">
        <div class="row">
            <div class="summary_terms">
                <p style="text-align:center;color:#424242">
                    
                   <strong>Copyright 2018 | All Rights Reserved | <a href="https://savings-scanner.com/privacy.pdf" target="_blank">Privacy Policy</a> &amp; <a href="https://savings-scanner.com/terms.html" target="_blank">Terms</a></strong>
                </p>
                <p style="text-align:center;">
                    <strong><a   href="http://affiliates.purpleleads.com/signup">Affiliates </a> <!-- - <a href="https://purpleleads.com/leads">Buy leads</a> --></strong>
                </p>
            </div>
        </div>
    </div>
    <script type='text/javascript' src='js/jquery.nouislider.all.min.js'></script>
    <script type="text/javascript" src="js/moment.min.js"></script>

        <script type="text/javascript">
	        $(function () {
	    var state_provider = '';
        var autocomplete = new google.maps.places.Autocomplete(document.getElementById('address_mask'), {
            types: ['address'],
            componentRestrictions: {country: "us"},
        });
        autocomplete.addListener('place_changed', function(){
            var place = autocomplete.getPlace();
            console.log(place);
            var zip = '';
            var street_number = '';
            var route = '';
            var city = '';
            var state = '';
            var state_full = 'your state';
            if(typeof place.address_components != 'undefined') {
                for (i=0; i<place.address_components.length; i++) {
                    if(place.address_components[i].types.indexOf('postal_code') != -1) {
                        zip = place.address_components[i].long_name;
                    }
                    if(place.address_components[i].types.indexOf('street_number') != -1) {
                        street_number = place.address_components[i].long_name;
                    }
                    if(place.address_components[i].types.indexOf('route') != -1) {
                        route = place.address_components[i].long_name;
                    }
                    if(place.address_components[i].types.indexOf('locality') != -1) {
                        city = place.address_components[i].long_name;
                    }
                    if(place.address_components[i].types.indexOf("administrative_area_level_1") != -1) {
                        state = place.address_components[i].short_name;
                        state_full = place.address_components[i].long_name;
                    }
                }
                if(street_number && route) {
                    $('#address').val(street_number + ' ' + route);
                     console.log('yes street_number +route');
                    $('#address2').val(place.formatted_address);
                }
                else {
	                console.log('NO street_number +route');
					var address_without_google = document.getElementById('address_mask').value;
					$('#address2').val(address_without_google);
					address_without_google = address_without_google.substring(0, address_without_google.indexOf(','));
 					console.log(address_without_google);
					$('#address').val(address_without_google);

                }
            }
            $('#zip, #zip2').val(zip);
            $('#city').val(city);
            $('#state').val(state);
            $("#country_name").text('in '+state_full);

            $("#apply_form").attr("action", "thankyou.php?state=" + state); //Will set the state in thankyoupage

             state_provider = state;

            /*if(!zip.length) {
                $('#zip').attr('type', 'text');
            }*/
            $('.btn-page2').removeAttr('disabled');
        });
        });
    </script>

    <script type="text/javascript">
	 
	        window.ParsleyConfig = {
	            errorsWrapper: '<div class="help-error" role="alert"></div>',
	            errorTemplate: '<div></div>',
	            validators: {
	                usphone: {
	                    fn: function (value, requirements) {                     
							
							value = value.replace('(','');
							value = value.replace(')','');
							value = value.replace(' ','');
							value = value.replace('-','');
							console.log(value);
							
	                        var patt = /^(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$/;
	                        return patt.test(value);
	                        
	                        var digits = value.replace(/[^0-9]/g, "");
	                        var digits_count = digits.length;
	                        if (digits_count > 9) {
	                            var areacode = digits.substring(0, 3);
	                            var valid_phone = digits.match(/^[2-9][0-8][0-9][2-9][0-9][0-9][0-9][0-9][0-9][0-9]$/);
	                            if (valid_phone == null) {
	                                return false;
	                            } else if ($.inArray(areacode, ['555', '800', '866', '877', '888']) >= 0) {
	                                return false
	                            }
	
	                            return true;
	                        }
	                        return false;
	                    },
	                    priority: 32
	                },
	                uszip: {
	                    fn: function (value, requirements) {
	                        var digits = value.replace(/[^0-9]/g, "");
	                        var digits_count = digits.length;
	                        if (digits_count == 5) {
	                            return true;
	                        }
	                        return false;
	                    },
	                    priority: 32
	                },
	                usaddress: {
	                    fn: function (value, requirements) {
	                        var patt = /^[0-9].*$/;
	                        return patt.test(value);
	                    }
	                }
	            }
	        };
	    
    </script>
    <script type="text/javascript" src="js/parsley.min.js"></script>
    <script type="text/javascript" src="js/formslider.js"></script>
    <script type='text/javascript'>

        
        $(function () {
            function commafy( num ) {
                var str = num.toString().split('.');
                if (str[0].length >= 5) {
                    str[0] = str[0].replace(/(\d)(?=(\d{3})+$)/g, '$1,');
                }
                if (str[1] && str[1].length >= 5) {
                    str[1] = str[1].replace(/(\d{3})/g, '$1 ');
                }
                return str.join('.');
            }



            $('#apply_form').parsley();

            var slider = $('#flow-slider-container').unslider({
                'initialElement': $('#zip_code_slide')
            });

            var slider_data = slider.data('unslider');

            $('#apply_form input').on('keypress', function (e) {
				
                e.stopPropagation();
                if (e.keyCode == 13) {
				
					return false;
                }
            });


                        
            
            $('.btn-page1').on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();

                if ($('#apply_form').parsley().validate('block1') === true) {
                    console.log("FB Tracking LP-stage-1 Start!");
                    fbq('track', "LP-stage-1");
                    console.log("FB Tracking LP-stage-1 Ends!");
                    $('#roof_type_val').val($(this).val());
                    $('.form-progress-bar').css({'width': '33.33%'});

                    slider_data.move('#address_slide');
                }
            });

            $('.btn-page2').on('click', function (e) {
                e.stopPropagation();
                if ($('#apply_form').parsley().validate('block2') === true) {
                    var $slider_item = $(this).closest('.slider-slide');
                    var serialized_section = $slider_item.find(':input').serialize();



                    console.log("FB Tracking LP-stage-1 Start!");
                    fbq('track', "LP-stage-1");
                    console.log("FB Tracking LP-stage-1 Ends!");

                    $("#survey_headline_slide3").hide();

                    $("#research_headline").show();


                    $('.form-progress-bar').css({'width': '66.66%'});




                    slider_data.move('#name_slide');
                    $("#survey_headline").hide();
                    $("#receive_info_headline").show();

                }

            });

            $('.btn-page3').on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();

                if ($('#apply_form').parsley().validate('block3') === true) {
                    $('.form-progress-bar').css({'width': '100%'});
                    slider_data.move('#thankyou_slide');
                    $("#survey_headline").hide();
                    $("#animated6").hide();
                    console.log("FB Tracking LP-stage-2 Start!");
                    fbq('track', "LP-stage-2");
                    console.log("FB Tracking LP-stage-2 Ends!");
                    $("#receive_info_headline").show();
                    setTimeout(function () {
                        //req();
                        $('#apply_form').trigger('submit');
                    }, 500);
                }
            });
            
            function fb30sec() {     
				console.log("FB Tracking LP-stage-30-sec Start!");
		        fbq('track', "LP-stage-30-sec");
				console.log("FB Tracking LP-stage-30-sec Ends!");
			}
			
			function fb90sec() {     
				console.log("FB Tracking LP-stage-90-sec Start!");
		        fbq('track', "LP-stage-90-sec");
				console.log("FB Tracking LP-stage-90-sec Ends!");
			}
			
			setTimeout(fb30sec, 30000)
			setTimeout(fb90sec, 90000)
			
      



            $('#name_slide').on('formslider-endmove', function () {
                $(this).find(':input:visible:enabled:first').focus();
            });
            $('#address_slide').on('formslider-endmove', function () {
                $(this).find(':input:visible:enabled:first').focus();
            });

        });
    </script>

    <script src="assets/bootstrap-tagsinput.min.js"></script>
    <script src="assets/bootstrap-typeahead.js"></script>
    <script type="text/javascript">
	    
        (function ($) {
			
            $.getJSON("https://free-solarenergyquotes.com/geoapi/", function (data) {
                $.each(data, function (l, city) {
                    if (l == 'city') {
                        var city = city;
                        console.log(city);
                        document.getElementById("city").innerHTML = city;
                    };
                    
                    if (l == 'state'){
                        var state = city;
                        
                        console.log(state);
                        if (state == 'AK' || state == 'AZ' || state == 'AR' || state == 'CA' || state == 'CO' || state == 'CT' || state == 'DE' || state == 'DC' || state == 'FL' || state == 'GA' || state == 'HI' || state == 'ID' || state == 'IL' || state == 'IN' || state == 'IA' || state == 'KS' || state == 'KY' || state == 'LA' || state == 'ME' || state == 'MD' || state == 'MA' || state == 'MI' || state == 'MN' || state == 'MS' || state == 'MO' || state == 'MT' || state == 'NE' || state == 'NV' || state == 'NH' || state == 'NJ' || state == 'NM' || state == 'NY' || state == 'NC' || state == 'ND' || state == 'OH' || state == 'OK' || state == 'OR' || state == 'PA' || state == 'RI' || state == 'SC' || state == 'SD' || state == 'TN' || state == 'TX' || state == 'UT' || state == 'VT' || state == 'VA' || state == 'WA' || state == 'WV' || state == 'WI' || state == 'WY'){
	                        
	                      $('#state').val(state);  
                        };
                        
                    }; 
                });
            });

            var statecurrent = (typeof geoip_region_name == typeof Function && geoip_region_name() != "") ? geoip_region_name() : "";
			
//             document.getElementById("statecurrent").innerHTML = statecurrent;
            

           

    

            function formatter(value, settings) {
                return value.toFixed(settings.decimals);
            }
        }(jQuery));

            </script>
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
    <img src="https://api.trustedform.com/ns.gif" />
    </noscript>
    <!--  end leadactiveprospect dot com -->

                <!--Leadid script leadid dot com-->
    <script id="LeadiDscript" type="text/javascript">
        // <!--
        (function () {
            var s = document.createElement('script');
            s.id = 'LeadiDscript_campaign';
            s.type = 'text/javascript';
            s.async = true;
            s.src = '//create.lidstatic.com/campaign/14825c91-1860-c42b-410e-c8836497e113.js?snippet_version=2';
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
                    s.src = '//create.lidstatic.com/campaign/14825c91-1860-c42b-410e-c8836497e113.js?snippet_version=2';
                    var LeadiDscript = document.getElementById('LeadiDscript');
                    LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
                })();
            }
        }, 10000);
        // -->
    </script>
    <noscript><img src='//create.leadid.com/noscript.gif?lac=f8085cd5-d5be-4d6d-353f-3c8dcc6fc738&lck=14825c91-1860-c42b-410e-c8836497e113&snippet_version=2' /></noscript>
    <!--end Leadid script leadid dot com-->


</body>
</html>
