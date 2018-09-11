@extends('fronts.sst.remodeling.bath-layout')
@section('title','Take the Quiz to See if you Qualify')
@section('big-bg-img','/images/bath/2/background_2.jpg')
@section('small-bg-img','/images/bath/2/background_1.jpg')
@section('head')
    @parent
    <link href="/css/bath/2/main.css" rel="stylesheet" type='text/css' />
@endsection


@section('content')
    <div class="secondarybg whitebg">

        <form name="apply_form" action="/remodeling/bath2" id="apply_form" class="form-horizontal quiz_form" method="POST">
            {{ csrf_field() }}
            <h1 class="header" id="survey_headline" style="text-transform: uppercase;">1 DAY Bathroom Remodels</h1>
            <h3>Replace Your Old Shower with a Sleek, Sophisticated Upgrade in One Day</h3>
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
                                <input type="text" id="zip_code" name="zip_code" class="form-control input-lg" maxlength="5" placeholder="ENTER YOUR ZIP CODE" data-parsley-type="number" data-parsley-length="[5, 5]" required data-parsley-error-message="Please provide your zip code." data-parsley-group="block1" autocomplete="somevarystrangevalue">
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
                                <div style="font-weight:bold;">
                                    <p>Please Fill Out Information Below so You Can Receive Your Results</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xs-6">
                                First Name
                                <input type="text" id="first_name" name="first_name" class="form-control input-lg" required data-parsley-error-message="Please enter your first name" data-parsley-group="block3" placeholder="First Name" autocomplete="somevarystrangevalue2" />
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                Last Name
                                <input type="text" id="last_name" name="last_name" class="form-control input-lg" required data-parsley-error-message="Please enter your last name" data-parsley-group="block3" placeholder="Last Name" autocomplete="somevarystrangevalue3" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                Email
                                <input type="email" id="email" name="email" class="form-control input-lg" required data-parsley-error-message="Please enter a valid email" data-parsley-group="block3" placeholder="Enter Your Email" autocomplete="somevarystrangevalue4" />
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                Phone
                                <input type="tel" id="phone" name="phone" class="form-control input-lg" required data-parsley-usphone="1" data-parsley-error-message="Please enter a valid phone with area code" data-parsley-group="block3" data-parsley-minlength="10" data-parsley-maxlength="14" placeholder="Enter Your Phone (With Area Code)" autocomplete="somevarystrangevalue5" />
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
                                    <input type="hidden" id="adid" name="adid" value="{{$adid}}" />
                                    <input type="hidden" id="kwid" name="kwid" value="{{$kwid}}" />
                                    <input type="hidden" id="ad_presell" name="ad_presell" value="{{$ad_presell}}" />
                                    <input type="hidden" id="ad_image" name="ad_image" value="{{$ad_image}}" />
                                    <input type="hidden" id="ad_headline" name="ad_headline" value="{{$ad_headline}}" />
                                    <input id="leadid_token" name="universal_leadid" type="hidden" value=""/>
                                    <!--<input id="___pageid___" name="___pageid___" type="hidden" value=""/>-->


                                    <input type="hidden" name="st-t-val" id="st-t" value="{{$st_t}}" />
                                    <input type="hidden" id="st-custom-id" name="st-custom-id-val" value="{{$st_custom_id}}" />
                                    <input type="hidden" id="st-custom-value" name="st-custom-value-val" value="{{$st_custom_value}}" />
                                    <input type="hidden" name="click_id" id="click_id" value="{{$click_id}}" />
                                    <input type="hidden" name="sub_id" id="sub_id" value="{{$sub_id}}" />

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

        </form>

        <div class="bottom-bullets-parent">
            <ul class="bullets bottom-bullets">
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

    </div>
    <div style="text-align: center;" class="center-block whitebg" >
        <img src="/images/bath/2/SecureSeal.png"   />
    </div>
    <div style="padding-bottom: 10px; padding-top: 10px; background-color: #f2f2f2; color:#999999;">
        <strong></strong></br>
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

                $("#apply_form").attr("action", "/remodeling/bath2?state=" + state); //Will set the state in thankyoupage

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

@endsection


