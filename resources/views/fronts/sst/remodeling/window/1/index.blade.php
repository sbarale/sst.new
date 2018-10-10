@extends('fronts.sst.remodeling.slider-layout')
@section('title','Take the Quiz to See if you Qualify')
@section('big-bg-img','/images/window/background_2.jpg')
@section('small-bg-img','/images/window/background_2.jpg')
@section('header-middle-img','/images/window.png')
@section('top-blue-line-text','We make it easy to complete your window installation projects')
@section('head')
    @parent
    <link href="/css/bath/2/main.css" rel="stylesheet" type='text/css'/>
    <style>
        .btn-page7{
            width: 100%;
        }
        .btn-page9{
            width: 100%;
        }
        .btn-page6, .btn-page2, .btn-page3{
            font-size: 28px!important;
            padding: 10px 56px!important;
            margin-top: 20px;
        }
    </style>
@endsection


@section('content')

    <div class="secondarybg whitebg">

        <form name="apply_form" action="/remodeling/window/1" id="apply_form" class="form-horizontal quiz_form" method="POST">
            {{ csrf_field() }}
            <h1 class="header" id="survey_headline" style="text-transform: uppercase;">Need Replacement Windows & Window Repairs in your area?</h1>

            <h1 class="header" id="receive_info_headline" style="display: none;  ">Your Personal Report Is Almost Ready To Send </h1>
            <input type="hidden" name="_submit" value="1" />
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
                                <h5  id="lg-address_2">
                                    (we need this to analyze the savings for your location)

                                </h5>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <input type="hidden" id="address" name="address">
                                <input type="text" id="address_mask" name="address_mask" class="form-control input-lg" required data-parsley-usaddress="1" data-parsley-error-message="Please provide your street number at the beginning" data-parsley-group="block4">
                                <input type="hidden" pattern="[0-9]*" id="zip" name="zip" onChange="document.getElementById('zip2').value = this.value" class="form-control input-lg" required data-parsley-uszip="1" data-parsley-error-message="Please enter a valid zip" data-parsley-group="block1" placeholder="Enter Your Zip" maxlength="5" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="button" class="btn btn-success btn-lg btn-page3" disabled >Next</button>
                            </div>
                        </div>

                    </div>
                    <!-- END STATE_QUESTION -->

                    <!-- START STATE_QUESTION -->
                    <div class="slider-slide" id="how_many_slide">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2>
                                    How many windows do you need work on?
                                </h2>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <select id="windows_count" name="windows_count" class="form-control input-lg" required data-parsley-usaddress="1" data-parsley-error-message="Please write how many windows do you need work on." data-parsley-group="block6">
                                    <option value="10+ windows">10+ windows</option>
                                    <option value="6-9 windows">6-9 windows</option>
                                    <option value="3-5 windows">3-5 windows</option>
                                    <option value="2 windows">2 windows</option>
                                    <option value="1 window">1 window</option>

                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="button" class="btn btn-success btn-lg btn-page6">Next</button>
                            </div>
                        </div>

                    </div>
                    <!-- END STATE_QUESTION -->


                    <!-- START STATE_QUESTION -->
                    <div class="slider-slide" id="replace_repair_slide">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2>
                                    Do you need to replace or repair the window(s)?
                                </h2>

                            </div>
                        </div>
                        <div class="row">
                            <input type="hidden" id="replace_repair_val" name="replace_repair">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-success btn-lg btn-page7" value="No">Replace windows</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-success btn-lg btn-page7" value="No">Replace glass only</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-success btn-lg btn-page7" value="Yes">Repair frame/hardware</button>
                            </div>
                        </div>


                    </div>
                    <!-- END STATE_QUESTION -->

                    <!-- START STATE_QUESTION -->
                    <div class="slider-slide" id="own_home_slide">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2>
                                    Do you own your home?
                                </h2>

                            </div>
                        </div>
                        <div class="row">
                            <input type="hidden" id="own_home_val" name="own_home">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-success btn-lg btn-page9" value="Yes">Yes, I own my home.</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-success btn-lg btn-page9" value="No">No, I do not own my home.</button>
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
                                <button type="button" class="btn btn-success btn-lg btn-page2">GET MATCHES</button>

                                </br> </br>
                                <!-- begin tcpa-->
                                <div style="color:gray; font-size: 10px;">
                                    <div id="tcpa" >
                                        <input type="hidden" id="leadid_tcpa_disclosure" />
                                        <label for="leadid_tcpa_disclosure">
                                            By clicking "GET MATCHES" I provide my signature, expressly authorizing up to four home improvement companies or their agents or partner companies to contact me at the number and address provided with home improvement quotes or to obtain additional information for such purpose, via live, prerecorded or autodialed calls, text messages or email. I understand that my signature is not a condition of purchasing any property, goods or services and that I may </label>
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
    <div id="energyefficient" class="guide full-page bg-size-contain form-controls-windows" style="background-image: url('/images/window/img-crosssection.jpg'); background-position: right center;background-repeat: no-repeat;background-color: white;    background-size: 40%;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Energy-Efficient Windows</h2>
                            <p>Review these energy-saving options to make the best choice for your home window replacement project.</p>
                        </div>
                    </div>

                    <div class="icons-lists">
                        <ul>
                            <li>
                                <img src="/images/window/icon-doublepane.png">
                                Double Paned <br>Windows&nbsp;<span class="fa fa-angle-right"></span>
                            </li>
                            <li>
                                <img src="/images/window/icon-triplepane.png">
                                Triple Paned <br>Windows&nbsp;<span class="fa fa-angle-right"></span>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <img src="/images/window/icon-thermal.png">
                                Thermal Pane <br>Windows&nbsp;<span class="fa fa-angle-right"></span>
                            </li>
                            <li>
                                <img src="/images/window/icon-energystar.png">
                                Energy <br>Star Ratings&nbsp;<span class="fa fa-angle-right"></span>
                            </li>
                        </ul>
                    </div>
                </div>

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
                $('.btn-page3').removeAttr('disabled');
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

    <script type='text/javascript'>


        $(function () {

            $("#phone").mask("999-999-9999");

            $('#apply_form').parsley();

            var slider = $('#flow-slider-container').unslider({
                'initialElement': $('#how_many_slide')
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
                    $('.form-progress-bar').css({'width': '80%'});

                    slider_data.move('#name_slide');
                    $("#survey_headline").hide();
                    $("#receive_info_headline").show();
                }
            });

            $('.btn-page6').on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                if ($('#apply_form').parsley().validate('block6') === true) {

                    $('.form-progress-bar').css({'width': '16.67%'});
                    slider_data.move('#replace_repair_slide');
                }
            });


            $('.btn-page7').on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                if ($('#apply_form').parsley().validate('block8') === true) {

                    $('#replace_repair_val').val($(this).val());

                    $('.form-progress-bar').css({'width': '50%'});
                    slider_data.move('#own_home_slide');
                }
            });

            $('.btn-page9').on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();

                $('#own_home_val').val($(this).val());

                $('.form-progress-bar').css({'width': '66.67%'});
                slider_data.move('#zip_slide');

            });

            $('.btn-page2').on('click', function (e) {
                e.stopPropagation();
                if ($('#apply_form').parsley().validate('block5') === true) {
                    $('.btn-page5').addClass('disabled');
                    $('.form-progress-bar').css({'width': '100%'});
                    slider_data.move('#thankyou_slide');
                    $("#survey_headline").hide();
                    $("#animated6").hide();
                    $("#receive_info_headline").show();
                    setTimeout(function () {
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


