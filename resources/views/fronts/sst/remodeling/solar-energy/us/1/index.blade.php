@extends('layouts.slider')
@section('title','Take the Quiz to See if you Qualify')
@section('big-bg-img','/images/gray-bg-px.jpg')
@section('small-bg-img','/images/gray-bg-px.jpg')
@section('header-middle-img','/images/solar-1.png')
@section('top-blue-line-text','')
@section('head')
    @parent
    <link href="/css/bath/2/main.css" rel="stylesheet" type='text/css'/>
    <style>
        .bbbb{
            width: 100%;
        }
        .btn-page4, .btn-page2, .btn-page5{
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

        <form name="apply_form" action="/remodeling/solar-energy/1/us" id="apply_form" class="form-horizontal quiz_form" method="POST">
            {{ csrf_field() }}
            <h1 class="header" id="survey_headline" style="font-weight: 50  !important; font-size: 30px; text-transform: uppercase;">SEE HOW YOU CAN SAVE WITH SOLAR ENERGY IN <span id="statecurrent"></span></h1>
            <h1 class="header" id="thankyou_header" style="display: none">Please Wait While We Create Your Eligibility Code</h1>
            <h1 class="header" id="research_headline" style="display: none">Please be patient as we calculate results and research locations</h1>
            <h1 class="header" id="receive_info_headline" style="display: none;  ">Your Personal Report Is Almost Ready To Send</h1>
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
                                <!--<p>To qualify for the Eligiblity Review You Must Meet 4 requirements <br>Please answer the questions below truthfully </p>-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <h2 id="lg-homeowner">
                                    Are you the homeowner?
                                </h2>
                                <h4 id="lg-homeowner_2">
                                    Increase the value of your home
                                </h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <input type="hidden" name="homeowner" id="loan_debt" value="" data-parsley-group="block1" />
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page1 btn-page1-yes gtm-slr-US-homeowner" data-value="Yes">Yes</button>
                            </div>
                            <div class="clearfix visible-xs clearfix-custom"></div>
                            <div class="col-sm-6 col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page1 gtm-slr-US-homeowner" data-value="No">No</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <p class="lg-footnote">To qualify for the free eligibility review, you must meet 3 requirements. Please answer the questions <b>truthfully.</b></p>
                                <br><br><br>
                                <p class="lg-footnote3" style="font-size: 12px;">We are <b>PREMER </b> solar matching service in the United States<br>
                                    <b>300,000 clients</b> can’t be wrong</p>
                            </div>
                        </div>
                    </div>


                    <div class="slider-slide" id="debt_type_slide">
                        <input type="hidden" name="page_track_debt_amount" value="1" />
                        <div class="row">
                            <div class="col-xs-12">
                                <h2 id="lg-electric-bill">
                                    How high is the Electric bill you have?
                                </h2>
                                <h5 id="lg-electric-bill_2">
                                    Reduce your electrical bill by up to 80%
                                </h5>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <select name="electric_bill" id="debt_amount" class="form-control input-lg" required data-parsley-error-message="Please select your bill amount" data-parsley-group="block2">
                                    <!--<option value="100">Under $100</option>-->
                                    <option value="150">$100 - $150</option>
                                    <option value="200">$150 - $200</option>
                                    <option value="250">$200 - $300</option>
                                    <option value="300">$300+</option>
                                </select>
                                <h2 id="lg-electric-company" >Who is Your Electricity Company?</h2>
                                <h5 id="lg-electric-company_2" >Please select "Other" when your Electricity Company is not in the list</h5>
                                <select name="electricity_Company" id="electricity_company" class="form-control input-lg" required></select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="button" id="btn-page2" class="btn btn-success btn-lg btn-page2 gtm-slr-US-electric">Next</button>
                                <!-- <button type="button" id="btn-page2" disabled class="btn btn-success btn-lg btn-page2">Next</button>-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <p class="lg-footnote">To qualify for the free eligibility review, you must meet 3 requirements. Please answer the questions <b>truthfully.</b></p>
                                <br><br><br>
                                <p class="lg-footnote3" style="font-size: 12px;">We are <b>PREMER </b> solar matching service in the United States<br>
                                    <b>300,000 clients</b> can’t be wrong</p>
                            </div>
                        </div>
                    </div>

                    <div class="slider-slide" id="loan_type_slide">
                        <input type="hidden" name="page_track_loan_type" value="1" />
                        <div class="row">
                            <div class="col-xs-12">
                                <h2 id="lg-home-shaded">
                                    Is your home shaded?
                                </h2>
                                <h5 id="lg-home-shaded_2">
                                    Provide clean, reliable energy for your family
                                </h5>
                            </div>
                        </div>
                        <input type="hidden" name="home_shaded" id="loan_type" value="" data-parsley-group="block3" />
                        <div id="home_shaded_button_EN" >
                            <div class="row" >
                                <div class="col-sm-6 col-xs-12">

                                    <button  type="button" class="btn btn-success btn-block  btn-lg btn-page3 gtm-slr-US-shaded " data-value="Mostly Sunny">Mostly Sunny</button>
                                </div>
                                <div class="clearfix visible-xs clearfix-custom"></div>
                                <div class="col-sm-6 col-xs-12">
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page3 gtm-slr-US-shaded" data-value="AM shade">AM shade </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page3 gtm-slr-US-shaded" data-value="PM shade only">PM shade only</button>
                                </div>
                                <div class="clearfix visible-xs clearfix-custom"></div>
                                <!--<div class="col-sm-6 col-xs-12">
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page3" data-value="All day shade">All day shade</button>
                                </div>-->
                            </div>
                        </div>

                        <div id="home_shaded_button_SP"  style="display: none;">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">

                                    <button  style="margin-top:20px; font-size: 17px; padding: 10px;" type="button" class="btn btn-success btn-block  btn-page3 gtm-slr-US-shaded " data-value="Mostly Sunny">Soleado la mayor parte del tiempo</button>
                                </div>
                                <div class="clearfix visible-xs clearfix-custom"></div>
                                <div class="col-sm-6 col-xs-12">
                                    <button style="margin-top:20px; font-size: 17px; padding: 10px;" type="button" class="btn btn-success btn-block   btn-page3 gtm-slr-US-shaded" data-value="AM shade">Hay sombre en la mañana</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <button style="margin-top:20px; font-size: 17px; padding: 10px;" type="button" class="btn btn-success btn-block   btn-page3 gtm-slr-US-shaded" data-value="PM shade only">Hay sombra solo después del mediodía</button>
                                </div>
                                <div class="clearfix visible-xs clearfix-custom"></div>
                                <!--<div class="col-sm-6 col-xs-12">
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page3" data-value="All day shade">All day shade</button>
                                </div>-->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <p class="lg-footnote">To qualify for the free eligibility review, you must meet 3 requirements. Please answer the questions <b>truthfully.</b></p>
                                <br><br><br>
                                <p class="lg-footnote3" style="font-size: 12px;">We are <b>PREMER </b> solar matching service in the United States<br>
                                    <b>300,000 clients</b> can’t be wrong</p>
                            </div>
                        </div>
                    </div>

                    <div class="slider-slide" id="zip_slide">
                        <input type="hidden" name="page_track_zip" value="1" />
                        <div class="row">
                            <div class="col-xs-12">
                                <h2 id="lg-address">
                                    Enter Your Street Address
                                </h2>
                                <h5  id="lg-address_2">
                                    (we need this to analyze the savings for your location)
                                </h5>
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
                                <button type="button" class="btn btn-success btn-lg btn-page4 gtm-slr-US-address" disabled>Next</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <p class="lg-footnote">To qualify for the free eligibility review, you must meet 3 requirements. Please answer the questions <b>truthfully.</b></p>
                                <br><br><br>
                                <p class="lg-footnote3" style="font-size: 12px;">We are <b>PREMER </b> solar matching service in the United States<br>
                                    <b>300,000 clients</b> can’t be wrong</p>
                            </div>
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
                                    <p>Hours of usable sunlight per year <span id="country_name">Your State</span></p>
                                </div>
                                <div class="msg3 hidden">
                                    <p>Programs available for Solar </p>
                                </div>
                                <div class="msg5 hidden">
                                    <p><strong>Congratulations!</strong></p>
                                </div>
                                Loading…
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
                            <div class="col-xs-6">
                                <span id="lg-first-name" >First Name</span>
                                <input type="text" id="first_name" name="first_name" class="form-control input-lg" required data-parsley-error-message="Please enter your first name" data-parsley-group="block5" placeholder="First Name" />
                            </div>
                            <div class="col-xs-6">
                                <span id="lg-last-name" >Last Name</span>
                                <input type="text" id="last_name" name="last_name" class="form-control input-lg" required data-parsley-error-message="Please enter your last name" data-parsley-group="block5" placeholder="Last Name" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <span id="lg-email" >Email</span>
                                <input type="email" id="email" name="email_address" class="form-control input-lg" required data-parsley-error-message="Please enter a valid email" data-parsley-group="block5" placeholder="Enter Your Email" />
                            </div>
                            <div class="col-xs-12">
                                <span id="lg-phone" >Phone </span>
                                <input type="tel" id="phone" name="phone_home" class="form-control input-lg" required data-parsley-usphone="1" data-parsley-error-message="Please enter a valid phone with area code" data-parsley-group="block5" placeholder="Enter Your Phone (With Area Code)" />
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-sm-12 col-md-12">
                                <span id="lg-address" >Street Address</span>
                                <input type="text" id="address2" name="address2" class="form-control input-lg" disabled />
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
                                <button type="button" class="btn btn-success btn-lg btn-page5 gtm-slr-US-details">Get Results</button>

                                </br> </br>
                                <!-- begin tcpa-->
                                <div style=" font-size: 11px;">
                                    <div id="tcpa" >
                                        <input type="hidden" id="leadid_tcpa_disclosure" />
                                        <label for="leadid_tcpa_disclosure">
                                            By clicking above, you authorize smartsavings.today and up to four Solar Companies to call you and send you pre-recorded messages and text messages at the number you entered above, using an autodialer, with offers about their products or services, even if your phone number is a mobile phone or  is on any national or state “Do Not Call” list. Message and data rates may apply. Your consent here is not based on a condition of purchase.
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="slider-slide" id="thankyou_slide">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h2>Thank You</h2>
                                    <div>Please Wait...</div><br><br>
                                    <img src="/images/loader.gif" />
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

@section('bottom-info-part')

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
            var provider = $('#electricity_company');
            var empty_caption = '-- Please select --';
            var hidePopup = false;
            var state_provider = '';

            $("#phone").mask("999-999-9999");

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
//                      $('#address').val(place.formatted_address);
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

                state_provider = state;

                if(!zip.length) {
                    $('#zip').attr('type', 'text');
                }
                $('.btn-page4').removeAttr('disabled');
            });

            function getOptionsByZip(code) {

                $('.slider-slide').addClass('loading');

                $.ajax({
                    type: "POST",
                    url: "/get-state-providers/",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {state: state_provider},
                    dataType: 'json',
                    success: function (data) {
                        provider.html('');
                        var option = $('<option val="">' + empty_caption + '</option>');
                        option.appendTo(provider);
                        if (Object.keys(data).length == 0) {
                            var tmp = option.clone();
                            tmp.val('Other');
                            tmp.text('Other');
                            tmp.appendTo(provider);
                        } else {
                            for (i = 0; i < Object.keys(data).length; i++) {
                                var tmp = option.clone();
                                tmp.val(data[i]);
                                tmp.text(data[i]);
                                tmp.appendTo(provider);
                            }
                        }
                        $('.slider-slide').removeClass('loading');
                    },
                    error: function (response, xhr, data) {
                        console.log(response, xhr, data);
                        $('.slider-slide').removeClass('loading');
                    }
                });

            }



            $('#apply_form').parsley();

            var slider = $('#flow-slider-container').unslider({
                'initialElement': $('#loan_debt_slide')
            });

            var slider_data = slider.data('unslider');

            $('#apply_form :input').on('keypress', function (e) {
                e.stopPropagation();
                if (e.keyCode == 13) {
                    var page_idx = ($(this).closest('.slider-slide').index() + 1);
                    $('.btn-page' + page_idx).trigger('click');
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
                e.stopPropagation();
                var newval = $(this).data('value');
                $('#loan_debt').val(newval);
                if ($('#apply_form').parsley().validate('block1') === true) {

                    $('.form-progress-bar').css({'width': '20%'});
                    slider_data.move('#loan_type_slide');
                }
            });
            $('.btn-page2').on('click', function (e) {
                e.stopPropagation();
                if (provider.val() != empty_caption) {
                    provider.removeClass('red');
                    $("#survey_headline").hide();
                    $("#research_headline").show();
                    $("#animated6").show();

                    $('.form-progress-bar').css({'width': '70%'});

                    var move_to_slide = '#name_slide';
                    if (move_to_slide == '#calculate_slide' ){
                        slider_data.move('#calculate_slide');
                        setTimeout(function () {
                            $('.msg1').addClass('hidden');
                            $('.msg2').removeClass('hidden');
                        }, 3000);
                        setTimeout(function () {
                            $('.msg2').addClass('hidden');
                            $('.msg3').removeClass('hidden');
                        }, 5000);
                        setTimeout(function () {
                            $('.msg4').removeClass('hidden');
                        }, 6500);
                        setTimeout(function () {
                            $('.msg3').addClass('hidden');
                            $('.msg5').removeClass('hidden');
                        }, 7400);
                        setTimeout(function () {
                            $('.form-progress-bar').css({'width': '80%'});
                            slider_data.move('#name_slide');
                            $("#receive_info_headline").show();
                            $("#research_headline").hide();
                            hidePopup = false;
                        }, 11000);
                    }else{
                        slider_data.move('#name_slide');
                        $("#research_headline").hide();
                        $("#receive_info_headline").show();
                    }
                } else {
                    provider.addClass('red');
                }
            });
            $('.btn-page3').on('click', function (e) {
                e.stopPropagation();
                var newval = $(this).data('value');
                $('#loan_type').val(newval);

                if ($('#apply_form').parsley().validate('block3') === true) {

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

                        getOptionsByZip(zip);
                        hidePopup = true;
                        $('.form-progress-bar').css({'width': '60%'});
                        slider_data.move('#debt_type_slide');
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

                    $('#apply_form').trigger('submit');
                }
            });



            $('#name_slide').on('formslider-endmove', function () {
                $(this).find(':input:visible:enabled:first').focus();
            });
            $('#zip_slide').on('formslider-endmove', function () {
                $(this).find(':input:visible:enabled:first').focus();
            });


            var statecurrent = (typeof geoip_region_name == typeof Function && geoip_region_name() != "") ? geoip_region_name() : "";

            document.getElementById("statecurrent").innerHTML = statecurrent;


        });
    </script>

@endsection


