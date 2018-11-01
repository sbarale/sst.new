@extends('layouts.slider-aqua')
@section('title','Take the Quiz to See if you Qualify')
@section('big-bg-img','/images/bath/big-bg-img.jpg')
@section('header-middle-img','/images/aquatic-logo.png')
@section('head')
    @parent
    <link href="/css/bath/3/main.css" rel="stylesheet" type='text/css'/>
    <style>

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
    <div class="secondarybg">

        <form name="apply_form" action="/remodeling/bath/3" id="apply_form" class="form-horizontal quiz_form" method="POST">
            {{ csrf_field() }}
            <h1 class="header purple-h1" id="survey_headline" style="text-transform: uppercase;">1 DAY Bathroom Remodels</h1>
            <h3 class="black-h3">Replace Your Old Shower with a Sleek, Sophisticated Upgrade in One Day</h3>
            <input type="hidden" name="_submit" value="1"/>

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
                        <div class="slider-slide-white-container">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <input type="text" id="zip_code" name="zip_code" class="form-control input-lg" maxlength="5" placeholder="ENTER YOUR ZIP CODE" data-parsley-type="number" data-parsley-length="[5, 5]" required data-parsley-error-message="Please provide your zip code." data-parsley-group="block1" autocomplete="somevarystrangevalue">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <button type="button" class="btn btn-success btn-lg btn-page1">Next</button>
                                </div>
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
                        <div class="slider-slide-white-container">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <input type="hidden" id="address" name="address">
                                    <input type="text" id="address_mask" name="address_mask" class="form-control input-lg" required data-parsley-usaddress="1" data-parsley-error-message="Please provide your street number at the beginning" data-parsley-group="block2">
                                    <input type="hidden" pattern="[0-9]*" id="zip" name="zip" onChange="document.getElementById('zip2').value = this.value" class="form-control input-lg" data-parsley-error-message="Please enter a valid zip" data-parsley-group="block2" placeholder="Enter Your Zip" maxlength="5"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <button type="button" class="btn btn-success btn-lg btn-page2" disabled>Next</button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- END STATE_QUESTION -->

                    <!-- START DETAILS QUESTION -->
                    <div class="slider-slide" id="name_slide">
                        <input type="hidden" name="page_track_name" value="1"/>
                        <div class="row">
                            <div class="col-xs-12">
                                <div style="font-weight:bold;">
                                    <h2>Please Fill Out Information Below So You Can Receive Your Results</h2>
                                </div>
                            </div>
                        </div>
                        <div class="slider-slide-white-container">
                            <div class="row">
                                <div class="col-sm-6 col-xs-6">
                                    <input type="text" id="first_name" name="first_name" class="form-control input-lg" required data-parsley-error-message="Please enter your first name" data-parsley-group="block3" placeholder="First Name" autocomplete="somevarystrangevalue2"/>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <input type="text" id="last_name" name="last_name" class="form-control input-lg" required data-parsley-error-message="Please enter your last name" data-parsley-group="block3" placeholder="Last Name" autocomplete="somevarystrangevalue3"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <input type="email" id="email" name="email_address" class="form-control input-lg" required data-parsley-error-message="Please enter a valid email" data-parsley-group="block3" placeholder="Enter Your Email" autocomplete="somevarystrangevalue4"/>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <input type="tel" id="phone" name="phone_home" class="form-control input-lg" required data-parsley-usphone="1" data-parsley-error-message="Please enter a valid phone with area code" data-parsley-group="block3" data-parsley-minlength="10" data-parsley-maxlength="14" placeholder="Enter Your Phone (With Area Code)" autocomplete="somevarystrangevalue5"/>
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

                                </div>
                            </div>

                            <div class="slider-slide" id="thankyou_slide">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h2>Thank You</h2>
                                        <div>Please Wait...</div>
                                        <br><br>
                                        <img src="/images/bath/2/loader.gif"/>
                                        <div class="plus-loader">
                                            Loading…
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('fronts.sst._common.hidden_fields')
            @include('fronts.sst._common.universal_leadid')

        </form>

        <div class="bottom-bullets-parent">
            <ul class="bullets bottom-bullets">
                <div class="col-sm-4">
                    <li>
                        <b>Tub to Shower Conversions, Soaker Tubs, Custom Accessories.</b>
                    </li>
                    <li>
                        <b>Avoid the inconvenience</b> and mess of weeks and weeks of construction.
                    </li>
                </div>
                <div class="col-sm-4">
                    <li>
                        <b>Added safety features:</b> low step options, safety bars, no slip flooring, seat options.
                    </li>
                    <li>
                        <b>BathWraps products are a breeze to maintain</b> and will never stain, chip, mildew, or crack.
                    </li>
                </div>
                <div class="col-sm-4">
                    <li>
                        <b>High-quality</b> products.
                    </li>
                    <li>
                        <b>Quick, expert</b> installation.
                    </li>
                    <li>
                        <b>Outstanding warranty.</b>
                    </li>
                </div>
            </ul>
        </div>

        <div style="color:gray; font-size: 10px;">
            <div id="tcpa" class="">
                <input type="hidden" id="leadid_tcpa_disclosure"/>
                <label for="leadid_tcpa_disclosure" class="disclosure-bottom">
                    By submitting this request for information, I hereby provide my signature, expressly consenting to receive information by email, auto-dialer and/or pre-recorded telephone calls, and/or SMS messages from or on behalf of smartsavings.today and its fulfillment partners and may agree to receive other offers on my telephone number I provided above, including my wireless number, even if I am on a State or Federal Do-Not-Call list. I understand consent is not a condition of purchase and that I may revoke my consent at any time. If you do not expressly consent for up to 4 companies to contact you, you can call (888) 537-9247 to complete your request with 1 company.
                </label>
            </div>

        </div>

    </div>


@endsection

@section('footer-scripts')
    @parent
    <script type="text/javascript">
        $(function () {
            var state_provider = '';
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
                        // $('#address').val(street_number + ' ' + route);
                        console.log('yes street_number +route');
                        $('#address').val(place.formatted_address);
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
                $('#zip, #zip_code').val(zip);
                $('#city').val(city);
                $('#state').val(state);
                $("#country_name").text('in ' + state_full);

                //$("#apply_form").attr("action", "/remodeling/bath/2?state=" + state); //Will set the state in thankyoupage

                state_provider = state;

                /*if(!zip.length) {
                    $('#zip').attr('type', 'text');
                }*/
                $('.btn-page2').removeAttr('disabled');
            });
        });
    </script>


    <script type='text/javascript'>


        $(function () {
            $("#phone").mask("(999) 999-9999");

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
                    $('#roof_type_val').val($(this).val());

                    slider_data.move('#address_slide');
                }
            });

            $('.btn-page2').on('click', function (e) {
                e.stopPropagation();
                if ($('#apply_form').parsley().validate('block2') === true) {
                    slider_data.move('#name_slide');
                    $("#survey_headline").hide();

                }

            });

            $('.btn-page3').on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();

                if ($('#apply_form').parsley().validate('block3') === true) {
                    slider_data.move('#thankyou_slide');
                    $("#survey_headline").hide();
                    $("#animated6").hide();
                    setTimeout(function () {
                        //req();
                        $('#apply_form').trigger('submit');
                    }, 500);
                }
            });


            $('#name_slide').on('formslider-endmove', function () {
                $(this).find(':input:visible:enabled:first').focus();
            });
            $('#address_slide').on('formslider-endmove', function () {
                $(this).find(':input:visible:enabled:first').focus();
            });

        });
    </script>

@endsection


