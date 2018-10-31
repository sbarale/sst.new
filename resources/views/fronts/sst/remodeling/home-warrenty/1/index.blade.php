@extends('layouts.slider')
@section('title','Take the Quiz to See if you Qualify')
@section('big-bg-img','/images/gray-bg-px.jpg')
@section('small-bg-img','/images/gray-bg-px.jpg')
@section('header-middle-img','/images/chw.png')
@section('top-blue-line-text','Never Pay For Covered Home Repairs Again!')
@section('head')
    @parent
    <link href="/css/bath/2/main.css" rel="stylesheet" type='text/css'/>
    <style>
        .btn-page2, .btn-page3{
            font-size:28px!important;
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

        <form name="apply_form" action="/remodeling/home-warrenty/1" id="apply_form" class="form-horizontal quiz_form" method="POST">
            {{ csrf_field() }}
            <h1 class="header" id="survey_headline" style="text-transform: uppercase;">Can You Afford To Replace Your AC and Heating System?</h1>

            <h1 class="header" id="receive_info_headline" style="display: none;  ">All Covered Home Repairs Are On Us! </h1>
            <input type="hidden" name="_submit" value="1"/>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary form-progress-bar" role="progressbar" style="width: 0%"></div>
                </div>


                <div id="flow-slider-container" class="slider-container">
                    <div class="slider-wrapper">


                        <!-- START STATE_QUESTION -->
                        <div class="slider-slide" id="zip_slide">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h2>
                                        Enter Your Street Address
                                    </h2>
                                    <h5 id="lg-address_2">
                                        (we need this to analyze the savings for your location)
                                    </h5>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <input type="hidden" id="address" name="address">
                                    <input type="text" id="address_mask" name="address_mask" class="form-control input-lg" required data-parsley-usaddress="1" data-parsley-error-message="Please provide your street number at the beginning" data-parsley-group="block4">
                                    <input type="hidden" pattern="[0-9]*" id="zip" name="zip" onChange="document.getElementById('zip2').value = this.value" class="form-control input-lg" required data-parsley-uszip="1" data-parsley-error-message="Please enter a valid zip" data-parsley-group="block1" placeholder="Enter Your Zip" maxlength="5"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <button type="button" class="btn btn-success btn-lg btn-page3" disabled>Next</button>
                                </div>
                            </div>

                        </div>
                        <!-- END STATE_QUESTION -->


                        <!-- START DETAILS QUESTION -->
                        <div class="slider-slide" id="name_slide">
                            <input type="hidden" name="page_track_name" value="1"/>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div style="font-weight:bold;"><p>America's Home Warranty</p>
                                        <p>Rated By The Ones Who Matter Most To Us, Our Customers</p></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-6">
                                    First Name
                                    <input type="text" id="first_name" name="first_name" class="form-control input-lg" required data-parsley-error-message="Please enter your first name" data-parsley-group="block5" placeholder="First Name"/>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    Last Name
                                    <input type="text" id="last_name" name="last_name" class="form-control input-lg" required data-parsley-error-message="Please enter your last name" data-parsley-group="block5" placeholder="Last Name"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    Email
                                    <input type="email" id="email" name="email_address" class="form-control input-lg" required data-parsley-error-message="Please enter a valid email" data-parsley-group="block5" placeholder="Enter Your Email"/>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    Phone
                                    <input type="tel" id="phone" name="phone_home" class="form-control input-lg" required data-parsley-usphone="1" data-parsley-error-message="Please enter a valid phone with area code" data-parsley-group="block5" data-parsley-minlength="10" data-parsley-maxlength="14" placeholder="Enter Your Phone (With Area Code)"/>
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
                                    <button type="button" class="btn btn-success btn-lg btn-page2">Get Results</button>

                                    </br> </br>
                                    <!-- begin tcpa-->
                                    <div style="color:gray; font-size: 10px;">
                                        <div id="tcpa">
                                            <input type="hidden" id="leadid_tcpa_disclosure"/>
                                            <label for="leadid_tcpa_disclosure">
                                                By entering my information and clicking "Get Quote" I am providing express consent to be contacted by via email, phone and text, including my wireless phone number, regarding product and servicing information using automated technology. If my area is not covered, I may be referred to alternate trusted provider. </label>
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
            <h2 style="text-align: center;">Why Home Warranty?</h2>
            <h3 style="text-align: center;">We believe Home Warranties are the most comprehensive, flexible and value-priced on the market. We do everything we can to help you get back on track - that's the difference

                You will never pay for a covered home repair bill again!</h3>
            </br>
            <div class="col-sm-4 help-section">
                <img src="/images/home-warrenty/interested2.png">
                <h3>Local Pre-Screened Technicians</h3>
                <p> Trusted Technicians who can repair your home systems & appliances</p>
            </div>
            <div class="col-sm-4 help-section">
                <img src="/images/home-warrenty/interested5.png">
                <h3>If We Can't Fix It, We'll Replace It*</h3>
                <p>If the technician comes out and cannot perform a covered repair, CHW will replace the unit.</p>
            </div>
            <div class="col-sm-4 help-section">
                <img src="/images/home-warrenty/interested4.png">
                <h3>24/7 Home Warranty Service</h3>
                <p>Home Warranty is available 24 hours a day, 7 days a week</p>
            </div>

        </div>
    </div>

    <div class="green-section">
        <div class="container">
            <br>

            <br>
            <div class="col-md-6 col-md-offset-3 help-today-text">
                <h1 style="color: white;">See What Our Customers Have To Say</h1>
                <i> "I've had Home Warranty for several years. This is the first time I've had to use it. The agent that took my call was courteous and prompt. She gave me the service company's name & contact number and e-mailed me the information required. The technician arrived the next morning (my call was placed on Sunday evening). He fixed the problem right away. I could not be more pleased with the service I received. Thanks!" </i>
                </br>  </br></br>
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
                $("#country_name").text('in ' + state_full);

                state_provider = state;

                if (!zip.length) {
                    $('#zip').attr('type', 'text');
                }
                $('.btn-page3').removeAttr('disabled');
            });
        });
    </script>

    <script type='text/javascript'>


        $(function () {

            $("#phone").mask("999-999-9999");

            $('#apply_form').parsley();

            var slider = $('#flow-slider-container').unslider({
                'initialElement': $('#zip_slide')
            });

            var slider_data = slider.data('unslider');

            $('#apply_form input').on('keypress', function (e) {
                e.stopPropagation();
                if (e.keyCode == 13) {
                    return false;
                }
            });


            $('.btn-page3').on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                if ($('#apply_form').parsley().validate('block4') === true) {

                    $("#survey_headline_slide3").hide();
                    $("#research_headline").show();
                    $('.form-progress-bar').css({ 'width': '70%' });

                    slider_data.move('#name_slide');
                    $("#survey_headline").hide();
                    $("#receive_info_headline").show();
                }

            });

            $('.btn-page2').on('click', function (e) {
                e.stopPropagation();
                if ($('#apply_form').parsley().validate('block5') === true) {
                    $('.btn-page5').addClass('disabled');
                    $('.form-progress-bar').css({ 'width': '100%' });
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


