@extends('layouts.slider')
@section('title','Take the Quiz to See if you Qualify')
@section('big-bg-img','/images/gray-bg-px.jpg')
@section('small-bg-img','/images/gray-bg-px.jpg')
@section('header-middle-img','/images/debt.png')
@section('top-blue-line-text','Free Consolation & No Obligation')
@section('head')
    @parent
    <link href="/css/bath/2/main.css" rel="stylesheet" type='text/css'/>
    <style>
        .bbbb{
            width: 100%;
        }
        #btn-page2, .btn-page6, .btn-page7{
            font-size: 28px!important;
            padding: 10px 56px!important;
            margin-top: 20px;
        }
    </style>

    <script type="text/javascript">

        window.ParsleyConfig = {
            errorsWrapper: '<div class="help-error" role="alert"></div>',
            errorTemplate: '<div></div>',
            validators: {
                usphone: {
                    fn: function (value, requirements) {

                        value = value.replace('(', '');
                        value = value.replace(')', '');
                        value = value.replace(' ', '');
                        value = value.replace('-', '');
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

        <form name="apply_form" action="/remodeling/debt/1/us" id="apply_form" class="form-horizontal quiz_form" method="POST">
            {{ csrf_field() }}
            <h1 class="header" id="survey_headline" style="text-transform: uppercase;">Get rid of your CREDIT CARD DEBT </h1>

            <!--                 <h1 class="header" id="survey_headline_slide2" style="display: none">MAKE SURE YOU COUNT ALL THE DEBT YOU HAVE</h1> -->
            <h1 class="header" id="survey_headline_slide2" style="display: none">Get rid of your CREDIT CARD DEBT </h1>
            <h1 class="header" id="survey_headline_slide3" style="display: none; font-size: 34px" ;>THERE AMAZING PROGRAMS AVAILABLE FOR BAD CREDIT SCORES </h1>
            <h1 class="header" id="survey_headline_slide4" style="display: none; font-size: 30px" ;>Get rid of your CREDIT CARD DEBT </h1>
            <h1 class="header" id="survey_headline_slide5" style="display: none; font-size: 30px" ;>NOW LETS ANALYZE THE PROGRAMS AVAILABLE FOR YOUR AREA</h1>

            <h1 class="header" id="research_headline" style="display: none">PLEASE BE PATIENT AS WE CALCULATE RESULTS AND RESEARCH LOCATIONS</h1>
            <h1 class="header" id="receive_info_headline" style="display: none;  ">YOUR PERSONAL REPORT IS ALMOST READY TO SEND</h1>
            <input type="hidden" name="_submit" value="1"/>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary form-progress-bar" role="progressbar" style="width: 0%"></div>
                </div>


            <div id="flow-slider-container" class="slider-container">
                <div class="slider-wrapper">

                    <!-- START DEBT_TYPE_QUESTION -->
                    <div class="slider-slide" id="debt_type_slide">

                        <div class="row">
                            <div class="col-xs-12">
                                <h2>
                                    What kind of debt do you have?
                                </h2>
                            </div>
                        </div>
                        <div class="row">
                            <input name="type_of_debt" id="type_of_debt" type="hidden">

                            <div class="col-sm-4 col-sm-offset-4 col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page1" data-value="Private Student Loan">Private Student Loan</button>
                            </div>

                            <div class="col-sm-4 col-sm-offset-4  col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page1" data-value="Credit Card">Credit Card</button>
                            </div>
                            <div class="col-sm-4 col-sm-offset-4  col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page1" data-value="Collections">Collections</button>
                            </div>
                            <div class="col-sm-4 col-sm-offset-4 col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page1" data-value="ALL">MORE THAN 1</button>
                            </div>

                        </div>


                    </div>
                    <!-- END DEBT_TYPE_QUESTION -->


                    <!-- START DEBT_AMOUNT_QUESTION -->
                    <div class="slider-slide" id="debt_amount_slide">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h2>Select your debt amount</h2>
                                <p style="color:#a94442;">(Credit card debt, personal loans, Medical Bills, and Private Student Loan)</p>
                                <input type="hidden" id="debt_amount" name="debt_amount" value="75000" class="form-control input-lg"/>
                            </div>
                            <div class="col-md-6 col-md-offset-3">
                                <div id="estimated_value_text"></div>
                                <div id="estimated_value"></div>
                                <div class="next_to_amount_borrow">
                                    <div style="float: left;">$0</div>
                                    <div style="float: right;">$100.000</div>
                                    <div style="clear: both;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="button" id="btn-page2" class="btn btn-success btn-lg btn-page2">Next</button>
                            </div>
                        </div>


                    </div>
                    <!-- END DEBT_AMOUNT_QUESTION -->

                    <!-- START PROGRAM_QUESTION -->
                    <div class="slider-slide" id="programs_slide">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2>
                                    Are you currently in bankruptcy or enrolled in any debt
                                    <br>settlement or consolidation program?
                                </h2>
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <input type="hidden" name="program" id="program" value="" data-parsley-group="block2"/>
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page3 btn-page1-yes" data-value="Yes">Yes</button>
                            </div>
                            <div class="clearfix visible-xs clearfix-custom"></div>
                            <div class="col-sm-6 col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page3 " data-value="No">No</button>
                            </div>
                        </div>
                    </div>
                    <!-- END PROGRAM_QUESTION -->

                    <!-- START CREDIT_QUESTION -->
                    <div class="slider-slide" id="credit_type_slide">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2>How is Your Credit?</h2>
                            </div>
                        </div>
                        <div class="row">
                            <input type="hidden" name="credit" id="credit" value=""/>
                            <div class="col-sm-6 col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page4" data-value="Excellent">Excellent</button>
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page4" data-value="Good">Good</button>
                            </div>
                            <div class="clearfix visible-xs clearfix-custom"></div>
                            <div class="col-sm-6 col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page4" data-value="Fair">Fair</button>
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page4" data-value="Poor">Poor</button>
                            </div>
                            <div class="clearfix visible-xs clearfix-custom"></div>
                        </div>
                        <!-- END CREDIT_QUESTION -->
                    </div>
                    <!-- START late_on_bills_QUESTION -->
                    <div class="slider-slide" id="late_on_bills_slide">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2>
                                    Are you late or willing to go late on your bills?
                                </h2>
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <input type="hidden" name="late_on_bills" id="late_on_bills" value="" data-parsley-group="block2"/>
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page5 btn-page1-yes" data-value="Yes">Yes</button>
                            </div>
                            <div class="clearfix visible-xs clearfix-custom"></div>
                            <div class="col-sm-6 col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page5 " data-value="No">No</button>
                            </div>
                        </div>
                    </div>
                    <!-- END late_on_bills_QUESTION -->

                    <!-- START ADDRESS_QUESTION -->
                    <div class="slider-slide" id="zip_slide">
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
                                <input type="text" id="address_mask" name="address_mask" class="form-control input-lg" required data-parsley-usaddress="1" data-parsley-error-message="Please provide your street number at the beginning" data-parsley-group="block6">
                                <input type="hidden" pattern="[0-9]*" id="zip" name="zip" onChange="document.getElementById('zip2').value = this.value" class="form-control input-lg" required data-parsley-uszip="1" data-parsley-error-message="Please enter a valid zip" data-parsley-group="block6" placeholder="Enter Your Zip" maxlength="5"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="button" class="btn btn-success btn-lg btn-page6" disabled>Next</button>
                            </div>
                        </div>
                    </div>
                    <!-- END ADDRESS_QUESTION -->

                    <!-- START DETAILS QUESTION -->
                    <div class="slider-slide" id="name_slide">
                        <div class="row">
                            <div class="col-xs-12">
                                <div style="font-weight:bold;">
                                    <p>Please Fill Out Information Below so You Can Receive Your Results </p></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xs-6">
                                First Name
                                <input type="text" id="first_name" name="first_name" class="form-control input-lg" required data-parsley-error-message="Please enter your first name" data-parsley-group="block7" placeholder="First Name"/>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                Last Name
                                <input type="text" id="last_name" name="last_name" class="form-control input-lg" required data-parsley-error-message="Please enter your last name" data-parsley-group="block7" placeholder="Last Name"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                Email
                                <input type="email" id="email" name="email_address" class="form-control input-lg" required data-parsley-error-message="Please enter a valid email" data-parsley-group="block7" placeholder="Enter Your Email"/>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                Phone
                                <input type="tel" id="phone" name="phone_home" class="form-control input-lg" required data-parsley-usphone="1" data-parsley-error-message="Please enter a valid phone with area code" data-parsley-group="block7" data-parsley-minlength="10" data-parsley-maxlength="14" placeholder="Enter Your Phone (With Area Code)"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                Source of income
                                <input type="text" id="source_of_income" name="source_of_income" class="form-control input-lg" required data-parsley-error-message="Please enter your source of income" data-parsley-group="block7" placeholder=""/>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-sm-12 col-md-12">

                                <input type="text" id="address2" name="address2" class="form-control input-lg" readonly style="display: none;"/>
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
                                <button type="button" class="btn btn-success btn-lg btn-page7">Get Results</button>

                                </br> </br>
                                <!-- begin tcpa-->
                                <div style="color:gray; font-size: 10px;">
                                    <div id="tcpa">
                                        <input type="hidden" id="leadid_tcpa_disclosure"/>
                                        <label for="leadid_tcpa_disclosure">
                                            I agree to be contacted through automated means (e.g. autodialing, text and pre-recorded messaging) via telephone, mobile device (including SMS and MMS) and/or email, even if it is a cellular phone number or other service for which the called/messaged person(s) could be charged for such contact & even if your telephone number is currently listed on any state, federal or corporate Do Not Call registry. Consent is not required to purchase goods or services. You'll receive approximately 4 messages every month. Message & Data Rates May Apply. REPLY "HELP" FOR HELP, REPLY "STOP" TO CANCEL. You agree to Terms & Conditions and Privacy Policy. </label>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="slider-slide" id="thankyou_slide">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h2>Thank You</h2>
                                    <div>Please Wait...</div>
                                    <br><br>
                                    <img src="/images/loader.gif"/>
                                    <div class="plus-loader">
                                        Loading…
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12" style="font-family:'roboto Condensed' !important;">
                        <br>
                        <p>To qualify for the instance acceptance program you must answer 5 questions. Please answer the questions <b>truthfully.</b>
                        </p>
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

@section('bottom-info-part')
    <div class="white-section">
        <div class="container">
            <h2 style="text-align: center;">Debt is Heavy. Don't Carry it Alone.</h2>
            <h3 style="text-align: center;">We are here to help!</h3>
            <br><br>
            <div class="col-sm-3 help-section">
                <img src="/images/tax/interested2.png">
                Learn about the different programs you qualify for and lower your debt obligation.
            </div>
            <div class="col-sm-3 help-section">
                <img src="/images/tax/interested3.png">
                Get help as needed from the most experienced Enrolled Agents.
            </div>
            <div class="col-sm-3 help-section">
                <img src="/images/tax/interested4.png">
                Let a skilled debt specialist contact you.
            </div>
            <div class="col-sm-3 help-section">
                <img src="/images/tax/interested1.png">
                It's hard to resolve debt by yourself, get help from a professional.
            </div>
        </div>
    </div>
@endsection

@section('footer-scripts')
    @parent

    <script src="https://geoapi123.appspot.com"></script>

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

            function commafy(num) {
                var str = num.toString().split('.');
                if (str[0].length >= 5) {
                    str[0] = str[0].replace(/(\d)(?=(\d{3})+$)/g, '$1,');
                }
                if (str[1] && str[1].length >= 5) {
                    str[1] = str[1].replace(/(\d{3})/g, '$1 ');
                }
                return str.join('.');
            }

            $(document).ready(function () {
                var secondSlider = document.getElementById("estimated_value");
                noUiSlider.create(secondSlider, {
                    'start': ["7"],
                    'connect': 'lower',
                    'range': {
                        'min': [1],
                        'max': [20]
                    },
                    'step': 1
                });
                secondSlider.noUiSlider.on('update', function () {
                    var x = secondSlider.noUiSlider.get();
                    $('#estimated_value_text').html('$' + commafy(x * 5000 - 5000) + ' to ' + '$' + commafy(x * 5000));
                    $('#debt_amount').val(x * 5000);
                });
            });

            $("#phone").mask("999-999-9999");

            var autocomplete = new google.maps.places.Autocomplete(document.getElementById('address_mask'), {
                types: ['address'],
                componentRestrictions: { country: "us" },
            });
            autocomplete.addListener('place_changed', function () {
                var place = autocomplete.getPlace();
                console.log(place);
                var zip = '';
                var street_number = '';
                var route = '';
                var city = '';
                var state = '';
                var state_full = 'your state';
                if (typeof place.address_components != 'undefined') {
                    for (i = 0; i < place.address_components.length; i++) {
                        if (place.address_components[i].types.indexOf('postal_code') != -1) {
                            zip = place.address_components[i].long_name;
                        }
                        if (place.address_components[i].types.indexOf('street_number') != -1) {
                            street_number = place.address_components[i].long_name;
                        }
                        if (place.address_components[i].types.indexOf('route') != -1) {
                            route = place.address_components[i].long_name;
                        }
                        if (place.address_components[i].types.indexOf('locality') != -1) {
                            city = place.address_components[i].long_name;
                        }
                        if (place.address_components[i].types.indexOf("administrative_area_level_1") != -1) {
                            state = place.address_components[i].short_name;
                            state_full = place.address_components[i].long_name;
                        }
                    }
                    if (street_number && route) {
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
                $("#country_name").text('in ' + state_full);

                if (!zip.length) {
                    $('#zip').attr('type', 'text');
                }
                $('.btn-page6').removeAttr('disabled');
            });

            $('#apply_form').parsley();

            var slider = $('#flow-slider-container').unslider({
                'initialElement': $('#debt_amount_slide')
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

                $("#survey_headline").hide();
                $("#survey_headline_slide2").show();
                $('.form-progress-bar').css({ 'width': '20%' });
                slider_data.move('#debt_amount_slide');
            });

            $('.btn-page2').on('click', function (e) {
                var newval = $(this).data('value');
                $('#type_of_debt').val(newval);

                $("#survey_headline").hide();
                $("#survey_headline_slide2").show();

                $('.form-progress-bar').css({ 'width': '30%' });
                slider_data.move('#programs_slide');
            });

            $('.btn-page3').on('click', function (e) {
                var newval = $(this).data('value');
                $('#program').val(newval);

                $("#survey_headline_slide2").hide();
                $("#survey_headline_slide3").show();

                $('.form-progress-bar').css({ 'width': '40%' });
                slider_data.move('#credit_type_slide');
            });

            $('.btn-page4').on('click', function (e) {
                var newval = $(this).data('value');
                $('#credit').val(newval);

                $("#survey_headline_slide3").hide();
                $("#survey_headline_slide4").show();

                $('.form-progress-bar').css({ 'width': '50%' });
                slider_data.move('#late_on_bills_slide');
            });

            $('.btn-page5').on('click', function (e) {
                var newval = $(this).data('value');
                $('#late_on_bills').val(newval);

                $("#survey_headline_slide4").hide();
                $("#survey_headline_slide5").show();

                $('.form-progress-bar').css({ 'width': '70%' });
                slider_data.move('#zip_slide');
            });

            $('.btn-page6').on('click', function (e) {
                e.stopPropagation();
                if ($('#apply_form').parsley().validate('block6') === true) {
                    var zip = $('#zip').val();
                    if (zip) {
                        if ($('#zip').is(':visible')) {
                            codeAddress();
                        }

                        $("#survey_headline_slide5").hide();
                        $("#receive_info_headline").show();

                        $('.form-progress-bar').css({ 'width': '80%' });
                        slider_data.move('#name_slide');
                    }
                    else {
                        alert('Please select an address from the suggestions list.');
                    }
                }
            });

            $('.btn-page7').on('click', function (e) {
                e.stopPropagation();
                if ($('#apply_form').parsley().validate('block7') === true) {

                    $('.orm-progress-bar').css({ 'width': '100%' });
                    slider_data.move('#thankyou_slide');
                    $("#survey_headline").hide();

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


