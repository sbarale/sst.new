@extends('layouts.slider')
@section('title','Take the Quiz to See if you Qualify')
@section('big-bg-img','/images/gray-bg-px.jpg')
@section('small-bg-img','/images/gray-bg-px.jpg')
@section('header-middle-img','/images/mortgage-purchase.png')
@section('head')
    @parent
    <link href="/css/bath/2/main.css" rel="stylesheet" type='text/css'/>
    <style>
        .btn-page2, .btn-page3, .btn-page4, .btn-page6, .btn-page7, .btn-page8, .btn-page5{
            font-size:28px!important;
            padding: 10px 56px!important;
            margin-top: 20px;
        }
        .btn-page1{
            max-width: 250px;
            width: 100%;
        }
        @media screen and (max-width: 480px){
            .btn-page1{
                margin: 3px!important;
                margin-bottom: 10px!important;
            }
            .btn-page1 img{
                width: 80%;
            }
        }
    </style>

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
@endsection


@section('content')
    <div class="secondarybg whitebg">

        <form name="apply_form" action="/remodeling/home-purchase/1" id="apply_form" class="form-horizontal quiz_form" method="POST">
            {{ csrf_field() }}
            <!--                     <h1 class="header" id="survey_headline" style="text-transform: uppercase;">FIND LOWEST MORTGAGE RATES IN <span id="statecurrent"></span></h1> -->
                <h1 class="header" id="survey_headline" >LOWER RATES FOR ALL TYPES OF HOMES ARE AVAILABLE</h1>
                <h1 class="header" id="survey_headline_slide2" style="display: none">LOWER RATES FOR ALL TYPES OF HOMES ARE AVAILABLE</h1>
                <h1 class="header" id="survey_headline_slide3" style="display: none">THERE AMAZING PROGRAMS AVAILABLE FOR MOST CREDIT SCORES </h1>
                <h1 class="header" id="survey_headline_slide4" style="display: none">NOW LETS ANALYZE THE PROGRAMS AVAILABLE FOR YOUR PROPERTY</h1>
                <h1 class="header" id="survey_headline_slide5" style="display: none">ABOUT HOW MUCH DO YOU THINK YOU WOULD LIKE TO BORROW</h1>
                <h1 class="header" id="survey_headline_slide6" style="display: none">TELL US HOW MUCH YOU “THINK” YOUR HOME IS WORTH </h1>
                <h1 class="header" id="survey_headline_slide7" style="display: none">WHAT IS YOUR CURRENT INTEREST RATE </h1>


                <h1 class="header" id="survey_headline" style="display: none">FIND LOWEST MORTGAGE RATES IN <span id="statecurrent"></span></h1>
                <h1 class="header" id="thankyou_header" style="display: none">Please Wait While We Create Your Eligibility Code</h1>
                <h1 class="header" id="research_headline" style="display: none">PLEASE BE PATIENT AS WE CALCULATE RESULTS AND RESEARCH LOCATIONS</h1>
                <h1 class="header" id="receive_info_headline" style="display: none;  ">YOUR PERSONAL REPORT IS ALMOST READY TO SEND</h1>
                <input type="hidden" name="_submit" value="1" />
                <div class="progress">
                    <div class="progress-bar progress-bar-primary form-progress-bar" role="progressbar" style="width: 0%"></div>
                </div>


                <div id="flow-slider-container" class="slider-container">
                    <div class="slider-wrapper">
                        <div class="slider-slide" id="loan_debt_slide">
                            <input type="hidden" name="page_track_loan_debt" value="1" />
                            <div class="row">
                                <div class="col-xs-12">
                                    <h2>
                                        Refinance or Purchase?
                                    </h2>

                                </div>
                            </div>
                            <div class="row">
                                <input name="loan_type" id="loan_type" type="hidden" value="Refinance">

                                <!--<div class="col-sm-10 col-sm-offset-1 col-xs-12">

                                    <button style="margin:15px;" class="btn btn-default btn-page1 btn-image" data-value="Refinance">
                                        <img src="img/refinance.png" width="150" />
                                    </button>

                                    <button style="margin:15px;" class="btn btn-default btn-page1 btn-image" data-value="Purchase">
                                        <img src="img/purchase.png" width="150" />
                                    </button>
                                </div>-->
                                <div class="col-sm-6 col-xs-12">

                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page1" data-value="Refinance">Refinance</button>
                                </div>
                                <div class="clearfix visible-xs clearfix-custom"></div>
                                <div class="col-sm-6 col-xs-12">
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page1" data-value="Purchase">Purchase</button>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-xs-12">

                                </div>
                            </div>
                        </div>
                        <div class="slider-slide" id="credit_type_slide">
                            <input type="hidden" name="page_track_debt_amount" value="1" />
                            <div class="row">
                                <div class="col-xs-12">
                                    <h2>
                                        How is Your Credit?
                                    </h2>

                                </div>
                            </div>

                            <div class="row">
                                <input type="hidden" name="credit" id="credit" value="" data-parsley-group="block2" />

                                <!--
                                <div class="col-sm-10 col-sm-offset-1 col-xs-12">

                                    <button style="margin:15px;" class="btn btn-default btn-page3 btn-image" data-value="Excellent" >
                                        <img src="img/credit_excellent.png" width="150" />
                                    </button>

                                    <button style="margin:15px;" class="btn btn-default btn-page3 btn-image" data-value="Good">
                                        <img src="img/credit_good.png" width="150" />
                                    </button>
                                    <button style="margin:15px;" class="btn btn-default btn-page3 btn-image" data-value="Fair">
                                        <img src="img/credit_fair.png" width="150" />
                                    </button>

                                    <button style="margin:15px;" class="btn btn-default btn-page3 btn-image" data-value="Poor">
                                        <img src="img/credit_poor.png" width="150" />
                                    </button>
                                </div>
                                -->

                                <div class="col-sm-6 col-xs-12">

                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page3" data-value="Excellent">Excellent</button>
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page3" data-value="Good">Good</button>

                                </div>
                                <div class="clearfix visible-xs clearfix-custom"></div>
                                <div class="col-sm-6 col-xs-12">
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page3" data-value="Fair">Fair</button>
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page3" data-value="Poor">Poor</button>
                                </div>
                                <div class="clearfix visible-xs clearfix-custom"></div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12" style="font-family:'roboto Condensed' !important;">
                                    <p></p>

                                </div>
                            </div>
                        </div>


                        <div class="slider-slide" id="property_type_slide">

                            <div class="row">
                                <div class="col-xs-12">
                                    <h2>
                                        Great! What type of property?
                                    </h2>

                                </div>
                            </div>
                            <div class="row">
                                <input type="hidden" name="property_type" id="property_type" value="" />

                                <!--
                                <div class="col-sm-10 col-sm-offset-1 col-xs-12">
                                    <button style="margin:15px;" class="btn btn-default btn-page2 btn-image" data-value="Single Family">
                                        <img src="img/singlefamiliy.png" width="150" />
                                    </button>
                                    <button style="margin:15px;" class="btn btn-default btn-page2 btn-image" data-value="Coop">
                                        <img src="img/multifamily.png" width="150" />
                                    </button>
                                    <button style="margin:15px;" class="btn btn-default btn-page2 btn-image" data-value="Condominium">
                                        <img src="img/condominium.png" width="150" />
                                    </button>
                                    <button style="margin:15px;" class="btn btn-default btn-page2 btn-image" data-value="Mobile Home">
                                        <img src="img/mobilehome.png" width="150" />
                                    </button>
                                </div>
                                -->

                                <div class="col-sm-6 col-xs-12">
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page2" data-value="Single Family">Single Family</button>
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page2" data-value="Condominium">Condominium</button>
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page2" data-value="Mobile Home">Mobile Home</button>
                                </div>
                                <div class="clearfix visible-xs clearfix-custom"></div>
                                <div class="col-sm-6 col-xs-12">
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page2" data-value="Coop">Coop</button>
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page2" data-value="Manufactured">Manufactured</button>
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page2" data-value="Townhouse">Townhouse</button>

                                </div>

                            </div>



                            <div class="row">
                                <div class="col-xs-12">
                                    <p></p>                                    </div>
                            </div>
                        </div>

                        <div class="slider-slide" id="zip_slide">
                            <input type="hidden" name="page_track_zip" value="1" />
                            <div class="row">
                                <div class="col-xs-12">
                                    <h2>
                                        Enter Your Street Address
                                    </h2>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <input type="hidden" id="address" name="address">
                                    <input type="text" id="address_mask" name="address_mask" class="form-control input-lg" required data-parsley-usaddress="1" data-parsley-error-message="Please provide your street number at the beginning" data-parsley-group="block4">
                                    <input type="hidden" pattern="[0-9]*" id="zip" name="zip" onChange="document.getElementById('zip2').value = this.value" class="form-control input-lg" required data-parsley-uszip="1" data-parsley-error-message="Please enter a valid zip" data-parsley-group="block4" placeholder="Enter Your Zip" maxlength="5" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <button type="button" class="btn btn-success btn-lg btn-page4" disabled>Next</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <p></p>                                    </div>
                            </div>
                        </div>
                        <div class="slider-slide" id="calculate_slide">
                            <div class="row">
                                <div class="col-xs-12" >
                                    <div id="animated6" style="margin-top: 20px; display: none;" ><img src="/images/checker.gif" />

                                    </div>


                                    <div class="msg1">
                                        <p>Checking for Answer</p>
                                    </div>
                                    <div class="msg2 hidden">
                                        <p>Mortgage programs available in <span id="country_name">Your State</span></p>
                                    </div>
                                    <div class="msg3 hidden">
                                        <p>Programs available for Mortgage </p>
                                    </div>
                                    <div class="msg5 hidden">
                                        <p><strong>Congratulations!</strong></p>
                                    </div>
                                    Loading…
                                </div>
                            </div>
                        </div>

                        <!-- slidernew-->
                        <div class="slider-slide" id="loan_balance_slider">

                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <h2 style="text-align: center;">
                                        Please select the amount
                                    </h2>
                                    <input type="hidden" id="loan_balance" name="loan_balance" value="250000" class="form-control input-lg" required data-parsley-error-message="Please enter your Employer Name" data-parsley-group="blocrk8" />
                                    <div id="amount_borrow_text"></div>
                                    <div id="amount_borrow"></div>
                                    <div class="next_to_amount_borrow">
                                        <div style="float: left;">$0</div>
                                        <div style="float: right;">$750K</div>
                                        <div style="clear: both;"></div>
                                    </div>




                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <button type="button" id="btn-page6" class="btn btn-success btn-lg btn-page6">Next</button>

                                </div>
                            </div>


                            <div class="row">
                                <div class="col-xs-12" style="font-family:'roboto Condensed' !important;">
                                    <p></p>
                                </div>
                            </div>
                        </div>


                        <!-- new-->
                        <div class="slider-slide" id="property_value_slider">

                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <h2>
                                        Estimated property value
                                    </h2>
                                    <input type="hidden" id="property_value" name="property_value" value="1000000" class="form-control input-lg" required data-parsley-error-message="Please enter your Employer Name" data-parsley-group="block???" />

                                    <div id="estimated_value_text"></div>
                                    <div id="estimated_value"></div>
                                    <div class="next_to_amount_borrow">
                                        <div style="float: left;">$0</div>
                                        <div style="float: right;">$2M</div>
                                        <div style="clear: both;"></div>
                                    </div>




                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <button type="button" id="btn-page7" class="btn btn-success btn-lg btn-page7">Next</button>

                                </div>
                            </div>


                            <div class="row">
                                <div class="col-xs-12" style="font-family:'roboto Condensed' !important;">
                                    <p></p>
                                </div>
                            </div>
                        </div>


                        <!-- new-->
                        <div class="slider-slide" id="interest_value_slider">

                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <h2>
                                        Please select current interest rate
                                    </h2>
                                    <input type="hidden" id="interest_value" name="interest_value" value="10" class="form-control input-lg" required data-parsley-error-message="Please enter your Employer Name" data-parsley-group="blockd???"   />

                                    <div id="interest_value_text"></div>
                                    <div id="interestslider_value"></div>
                                    <div class="next_to_amount_borrow">
                                        <div style="float: left;">1%</div>
                                        <div style="float: right;">30%</div>
                                        <div style="clear: both;"></div>
                                    </div>




                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <button type="button" id="btn-page8" class="btn btn-success btn-lg btn-page8">Next</button>

                                </div>
                            </div>


                            <div class="row">
                                <div class="col-xs-12" style="font-family:'roboto Condensed' !important;">

                                </div>
                            </div>
                        </div>







                        <div class="slider-slide" id="name_slide">
                            <input type="hidden" name="page_track_name" value="1" />
                            <div class="row">
                                <div class="col-xs-12">
                                    <div style="font-weight:bold;"><p>Please Fill Out Information Below so You Can Receive Your Results </p></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-6">
                                    First Name
                                    <input type="text" id="first_name" name="first_name" class="form-control input-lg" required data-parsley-error-message="Please enter your first name" data-parsley-group="block5" placeholder="First Name" />
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    Last Name
                                    <input type="text" id="last_name" name="last_name" class="form-control input-lg" required data-parsley-error-message="Please enter your last name" data-parsley-group="block5" placeholder="Last Name" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    Email
                                    <input type="email" id="email" name="email_address" class="form-control input-lg" required data-parsley-error-message="Please enter a valid email" data-parsley-group="block5" placeholder="Enter Your Email" />
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    Phone
                                    <input type="tel" id="phone" name="phone_home" class="form-control input-lg" required data-parsley-usphone="1" data-parsley-error-message="Please enter a valid phone with area code" data-parsley-group="block5" data-parsley-minlength="10" data-parsley-maxlength="14" placeholder="Enter Your Phone (With Area Code)" />
                                </div>

                            </div>
                            <div class="row">

                                <div class="col-xs-12">
                                    Street Address
                                    <input type="text" id="address2" name="address2" class="form-control input-lg" disabled />

                                </div>
                                <input type="hidden" id="state" name="state" class="form-control input-lg" readonly>

                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <button type="button" class="btn btn-success btn-lg btn-page5">Get Results</button>
                                    <p>*After clicking submit, please wait for the next page to load*</p>
                                    <p><strong>DO NOT EXIT OUT</strong></p>
                                    </br>

                                    <div style="color:gray; font-size: 10px;">

                                        <div id="tcpa" >
                                            <input type="hidden" id="leadid_tcpa_disclosure" />
                                            <label for="leadid_tcpa_disclosure">
                                                We take your privacy seriously. By clicking the button above, you are providing your express written consent to have your information shared and to be matched with up to five <a href="https://www.freerateupdate.com/approved-lenders" > approved lenders </a>and for them, or their authorized third party, to call you at the number you have provided including through automated means such as autodialing, text SMS/MMS (charges may apply), and prerecorded messaging, and/or via email, even if your telephone number is a cellular phone number or on a corporate, state, or the National Do Not Call Registry, and you agree to our <a href="https://www.freerateupdate.com/privacy" >Privacy Policy</a>. Consent is not required as a condition to utilize FreeRateUpdate's services, you may choose to use our services by calling 855-315-7283.  </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="slider-slide" id="thankyou_slide">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h2>Thank You</h2>
                                        <div>Please Wait...</div><br><br>
                                        <img src="/images/bath/2/loader.gif" />
                                        <div class="plus-loader">
                                            Loading…
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            @include('fronts.sst._common.hidden_fields')
        </form>



    </div>
    <div style="text-align: center;" class="center-block whitebg">
        <img src="/images/bath/2/SecureSeal.png"/>
    </div>
    <div style="padding-bottom: 10px; padding-top: 10px; background-color: #f2f2f2; color:#999999;">
        <strong></strong></br>
    </div>


@endsection

@section('footer-scripts')
    @parent
    <script type="text/javascript">
        $(function () {
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
                    }
                    else {
                        $('#address').val(place.formatted_address);
                    }
                    $('#address2').val(place.formatted_address);
                }
                $('#zip, #zip2').val(zip);
                $('#city').val(city);
                $('#state').val(state);
                $("#country_name").text('in '+state_full);

                if(!zip.length) {
                    $('#zip').attr('type', 'text');
                }
                $('.btn-page4').removeAttr('disabled');
            });
        });
    </script>

    <script>
        function codeAddress() {
            var zip = document.getElementById('zip').value;
            var address = document.getElementById('address_mask').value;
            console.log(address);
            $.get("https://ziptasticapi.com/" + zip, function (data) {
                $("#country_name").html(data.city);
                $('#city').val(data.city);
                $('#address').val(address);
                $('#address2').val(address);
                $('#zip2').val(zip);
                $('#state').val(data.state);
                console.log(data);
            }, "json");
        }
    </script>

    <script type='text/javascript'>


        $(function () {
            var provider = $('#electricity_company');
            var empty_caption = '-- Please select --';
            var hidePopup = false;
            $("#phone").mask("999-999-9999");

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

            $( document ).ready(function()
            {

                var firstSlider = document.getElementById("amount_borrow");
                noUiSlider.create(firstSlider, {
                    'start': ["4"],
                    'connect': 'lower',
                    'range': {
                        'min': [0],
                        'max': [14]
                    },
                    'step': 1
                });
                firstSlider.noUiSlider.on('update', function(){
                    var x = firstSlider.noUiSlider.get();

                    if(x == 0){
                        $('#amount_borrow_text').html('$' + commafy(x * 50000) + ' to ' + '$' + commafy(x * 50000 + 59999));
                        $('#loan_balance').val(x * 50000 + 50000);
                    }else if(x==1){
                        $('#amount_borrow_text').html('$' + commafy(x * 60000 ) + ' to ' + '$' + commafy(x * 50000 + 50000));
                        $('#loan_balance').val(x * 50000 + 50000);
                    }else{
                        $('#amount_borrow_text').html('$' + commafy(x * 50000) + ' to ' + '$' + commafy(x * 50000 + 50000));
                        $('#loan_balance').val(x * 50000 + 50000);
                    }

                });

                var secondSlider = document.getElementById("estimated_value");
                noUiSlider.create(secondSlider, {
                    'start': ["50"],
                    'connect': 'lower',
                    'range': {
                        'min': [0],
                        'max': [99]
                    },
                    'step': 1
                });
                secondSlider.noUiSlider.on('update', function(){
                    var x = secondSlider.noUiSlider.get();

                    $('#estimated_value_text').html('$' + commafy(x * 10000) + ' to ' + '$' + commafy(x * 20000 + 20000));
                    $('#property_value').val(x * 20000 + 20000);

                });

                var thirdSlider = document.getElementById("interestslider_value");
                noUiSlider.create(thirdSlider, {
                    'start': ["10"],
                    'connect': 'lower',
                    'range': {
                        'min': [1],
                        'max': [30]
                    },
                    'step': 1
                });
                thirdSlider.noUiSlider.on('update', function(){
                    var x = thirdSlider.noUiSlider.get();
                    $('#interest_value_text').html(x+'%');
                    $('#interest_value').val (x );
                });
            });

            $('#apply_form').parsley();

            var slider = $('#flow-slider-container').unslider({
                'initialElement': $('#property_type_slide')
            });

            var slider_data = slider.data('unslider');

            $('#apply_form input').on('keypress', function (e) {

                e.stopPropagation();
                if (e.keyCode == 13) {

                    return false;
                    /* var page_idx = ($(this).closest('.slider-slide').index() + 1);
                    $('.btn-page' + page_idx).trigger('click'); */
                }
            });

            $('.checkbox_change').on('click', function (e) {
                var $this = $(this);
                if ($this.is(':checked')) {
                    $(this).closest('.btn').addClass('btn-success').removeClass('btn-default');
                } else {
                    $(this).closest('.btn').addClass('btn-default').removeClass('btn-success');
                }
            });

            $('.btn-page1').on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                var newval = $(this).data('value');
                $('#loan_type').val(newval);
                /*$('#car-select').val(this.value);*/
                if ($('#apply_form').parsley().validate('block1') === true) {
                    var $slider_item = $(this).closest('.slider-slide');
                    var serialized_section = $slider_item.find(':input').serialize();

                    $("#survey_headline").hide();
                    $("#survey_headline_slide2").show();
                    $('.form-progress-bar').css({'width': '20%'});
                    slider_data.move('#property_type_slide');
                }
            });

            $('.btn-page2').on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                var newval = $(this).data('value');
                $('#property_type').val(newval);
                /*$('#car-select').val(this.value);*/
                if ($('#apply_form').parsley().validate('block1') === true) {
                    var $slider_item = $(this).closest('.slider-slide');
                    var serialized_section = $slider_item.find(':input').serialize();

                    $("#survey_headline").hide();
                    $("#survey_headline_slide2").hide();
                    $("#survey_headline_slide3").show();

                    $('.form-progress-bar').css({'width': '30%'});
                    slider_data.move('#credit_type_slide');
                }
            });

            $('.btn-page6').on('click', function (e) {
                e.stopPropagation();
                var newval = $(this).data('value');
                /*$('#loan_balance').val(newval);*/
                if (provider.val() != empty_caption) {
                    provider.removeClass('red');
                    if ($('#apply_form').parsley().validate('block2') === true) {
                        var $slider_item = $(this).closest('.slider-slide');
                        var serialized_section = $slider_item.find(':input').serialize();

                        $("#survey_headline_slide5").hide();
                        $("#survey_headline_slide6").show();

                        slider_data.move('#property_value_slider');

                        $('.form-progress-bar').css({'width': '70%'});
                    }

                } else {
                    provider.addClass('red');
                }
            });

            $('.btn-page7').on('click', function (e) {
                e.stopPropagation();
                var newval = $(this).data('value');
                /*$('#property_value').val(newval);*/
                if (provider.val() != empty_caption) {
                    provider.removeClass('red');
                    if ($('#apply_form').parsley().validate('block8') === true) {
                        var $slider_item = $(this).closest('.slider-slide');
                        var serialized_section = $slider_item.find(':input').serialize();

                        slider_data.move('#interest_value_slider');


                        $("#survey_headline_slide6").hide();

                        $("#survey_headline_slide7").show();



                    }
                } else {
                    provider.addClass('red');
                }
            });

            $('.btn-page8').on('click', function (e) {
                e.stopPropagation();
                var newval = $(this).data('value');
                /*$('#property_value').val(newval);*/
                if (provider.val() != empty_caption) {
                    provider.removeClass('red');

                    $("#survey_headline_slide7").hide();
                    $("#research_headline").show();

                    slider_data.move('#name_slide');
                    $("#receive_info_headline").show();
                    $("#research_headline").hide();

                } else {
                    provider.addClass('red');
                }
            });

            $('.btn-page3').on('click', function (e) {
                e.stopPropagation();
                e.preventDefault();
                var newval = $(this).data('value');
                $('#credit').val(newval);

                if ($('#apply_form').parsley().validate('block3') === true) {
                    var $slider_item = $(this).closest('.slider-slide');
                    var serialized_section = $slider_item.find(':input').serialize();
                    $("#survey_headline_slide3").hide();
                    $("#survey_headline_slide4").show();

                    $('.form-progress-bar').css({'width': '40%'});
                    slider_data.move('#zip_slide');
                }
            });

            $('.btn-page4').on('click', function (e) {
                e.stopPropagation();
                if ($('#apply_form').parsley().validate('block4') === true) {
                    var zip = $('#zip').val();
                    if(zip) {
                        if($('#zip').is(':visible')) {
                            codeAddress();
                        }

                        hidePopup = true;
                        $("#survey_headline_slide4").hide();
                        $("#survey_headline_slide5").show();

                        $('.form-progress-bar').css({'width': '60%'});
                        slider_data.move('#loan_balance_slider');
                    }
                    else {
                        alert('Please select an address from the suggestions list.');
                    }
                }
            });
            $('.btn-page5').on('click', function (e) {
                e.stopPropagation();
                if ($('#apply_form').parsley().validate('block5') === true) {
                    $('.btn-page5').addClass('disabled');
                    $('.form-progress-bar').css({'width': '100%'});
                    slider_data.move('#thankyou_slide');
                    $("#survey_headline").hide();
                    $("#animated6").hide();
                    $("#receive_info_headline").show();
                    setTimeout(function () {
                        //req();
                        $('#apply_form').trigger('submit');
                    }, 500);
                }
            });





            $('#name_slide').on('formslider-endmove', function () {
                $(this).find(':input:visible:enabled:first').focus();
            });
            $('#zip_slide').on('formslider-endmove', function () {
                $(this).find(':input:visible:enabled:first').focus();
            });

        });
    </script>

@endsection


