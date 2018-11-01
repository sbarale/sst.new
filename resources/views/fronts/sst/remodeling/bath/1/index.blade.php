@extends('layouts.master')
@section('logo','/images/sst-landscape.png')
@section('logo-section','/images/bat.png')
@section('head')
    <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
    @parent
    <link href="/assets/remodeling/bath/css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/remodeling/bath/css/style.css">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/legacy/bath/css/web.min.css">
    <link rel="stylesheet" type="text/css" href="/legacy/bath/files/style.css">

    <link rel="stylesheet" href="/legacy/bath/css/navigation.css">
    <script type="text/javascript" src="//parsleyjs.org/dist/parsley.js"></script>
    <script type="text/javascript" src="/legacy/bath/js/jquery.maskedinput.min.js"></script>
    <link href="//fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

@endsection

@section('content')

    <div id="main" class="row">
        <div class="row">
            <section id="title">
                <h1>1-Day Bathroom Remodeling</h1>
                <br>
                <h2>
                    Replace Your Old Shower with a Sleek, Sophisticated Upgrade in One Day
                </h2>
            </section>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <img src="./files/main.jpg" class="img-responsive">
                </div>
                <div class="row">
                    <p id="tub_disclaimer" style="font-size:12px;text-align:center;">* Pictures shown are for illustrative purposes only. Models available may vary from those displayed in this advertisement.</p>

                </div>
            </div>
            <div class="col-md-5">
                <section class="test-form">
                    <form id="demo-form" action="thankyou.php?fbid=<?php echo isset( $_GET['fbid'] ) ? $_GET['fbid'] : ""; ?>" method="post" class="demo-form js-floating-labels" data-parsley-validate data-parsley-errors-messages-disabled>
                        <input type="hidden" id="address" name="address" value="" data-parsley-required>
                        <input type="hidden" id="debug" name="debug" value="<?php echo isset( $_GET['debug'] ) ? $_GET['debug'] : 0; ?>">
                        <input type="hidden" id="is_test" name="is_test" value="<?php echo isset( $_GET['test'] ) ? $_GET['test'] : 0; ?>">
                        <!--                        <input type="hidden" id="state" name="state" value="">-->
                        <input type="hidden" name="_submit" value="1"/>
                        <input type="hidden" name="lp_request_id" value="<?php echo isset( $_GET['rid'] ) ? $_GET['rid'] : ''; ?>"/>
                        <input id="leadid_token" name="universal_leadid" type="hidden" value=""/>

                        <div class="well well-lg">
                            <div class="form-section">
                                <div class="row">
                                    <div class="start">Step 1 of 3</div>
                                    <div class="steptitle">Get Pricing and Availability for:</div>
                                </div>
                                <div class="row field">
                                    <div class="form-group">
                                        <label for="zip_code" class="floating">Zip Code<span class="floating-desc">: Enter 5-digit zip code</span></label>
                                        <input pattern="^\d{5,6}(?:[-\s]\d{4})?$" autocomplete="billing postal-code" class="form-control" type="text" id="zip_code" name="zip_code" data-parsley-required data-parsley-type="digits" data-parsley-length="[5, 5]" placeholder="ENTER YOUR ZIP CODE"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-section">
                                <div class="row">
                                    <div class="start">Step 2 of 3</div>
                                    <div class="steptitle">Please enter the street address of the home.</div>
                                </div>
                                <div class="row field">
                                    <div class="form-group">
                                        <label for="address_mask" class="floating">Address<span class="floating-desc">: Required field</span></label>
                                        <input autocomplete="billing address" class="form-control" type="text" id="address_mask" name="address_mask" data-parsley-required data-parsley-google placeholder="ENTER YOUR ADDRESS"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-section">
                                <div class="row">
                                    <div class="start">Last Step</div>
                                    <div class="steptitle">Who Should We Deliver the Price Quote to?</div>
                                </div>
                                <div class="row field">
                                    <div class="form-group col-md-6">
                                        <label for="first_name" class="floating">First Name<span class="floating-desc">: Required</span></label>
                                        <input autocomplete="fname" class="form-control" id="first_name" name="first_name" data-trigger="change" data-parsley-required placeholder="FIRST NAME">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name" class="floating">Last Name<span class="floating-desc">: Required</span></label>
                                        <input autocomplete="lname" class="form-control" id="last_name" name="last_name" data-trigger="change" data-parsley-required placeholder="LAST NAME">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="email_address" class="floating">Email<span class="floating-desc">: Required</span></label>
                                        <input autocomplete="email" class="form-control" id="email_address" name="email_address" data-trigger="change" data-parsley-required data-parsley-type="email" placeholder="EMAIL">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="phone_home" class="floating">Phone<span class="floating-desc">: (10 digits only)</span></label>
                                        <input autocomplete="tel" class="form-control" id="phone_home" name="phone_home" data-trigger="change" data-parsley-required data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$" placeholder="PHONE">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-navigation">
                                    <button type="button" class="previous btn btn-info pull-left">&lt; Previous</button>
                                    <button type="button" class="next btn btn-info pull-right">Next &gt;</button>
                                    <input type="submit" class="btn btn-default pull-right">
                                    <span class="clearfix"></span>

                                </div>
                            </div>
                        </div>
                    </form>
                </section>
                <div class="row">
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
                </div>

            </div>
        </div>
    </div>
    <div id="footer">
        <p id="tub_disclaimer" style="font-size:12px;text-align:center;">* Pictures shown are for illustrative purposes
            only. Models available may vary from those displayed in this advertisement.</p>
    </div>

    <script>
        function codeAddress() {
            var zip = document.getElementById('zip').value;

            console.log(address);
            $.get("https://ziptasticapi.com/" + zip, function (data) {
                jQuery("#country_name").html(data.city);
                jQuery('#city').val(data.city);
                jQuery('#state').val(data.state);
                console.log(data);
            }, "json");
        }
    </script>

    <script>
        function validateEmail(email) {
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }

        function hasErrors(step) {
            var errors = [];
            error_flag = false;

            if (step == 1) {
                if (jQuery("#zip").val() == '') {
                    jQuery("#zip").addClass("error");
                    error_flag = true;
                }
            }
            if (step == 2) {
                if (jQuery("#address").val() == "") {
                    jQuery("#address").addClass("error");
                    error_flag = true;
                }
            }
            if (step == 3) {
                if (jQuery("#first_name").val() == "") {
                    jQuery("#first_name").addClass("error");
                    error_flag = true;
                }
                if (jQuery("#last_name").val() == '') {
                    jQuery("#last_name").addClass("error");
                    error_flag = true;
                }
                if (jQuery("#email_address").val() == "") {
                    jQuery("#email_address").addClass("error");
                    error_flag = true;

                }

                var valid_mail = validateEmail(jQuery("#email_address").val());
                if (valid_mail == false) {
                    jQuery("#email_address").addClass("error");
                    error_flag = true;
                }


                if (jQuery("#phone_home").val() == "") {
                    jQuery("#phone_home").addClass("error");
                    error_flag = true;
                }
                else {
                    var string = jQuery("#phone_home").val().replace(/[^\d]/g, ''); // Removes anything not in [0-9]

                    if (string.length != 10) {
                        jQuery("#phone_home").addClass("error");
                        error_flag = true;
                    }

                }
            }
            return error_flag;
        }

        jQuery(document).ready(function () {

            jQuery("#phone_home").mask("999-999-9999");

            jQuery("#btn_continue").click(function () {
                event.preventDefault();
                if (!hasErrors(1)) {
                    // go to step 2
                    jQuery("#step").val("2");
                    jQuery("#step1").hide();
                    jQuery("#description").hide();
                    jQuery("#step2").show();
                    jQuery("#step2").removeClass('hide');
                }
                else {
                    alert("Please fill out the required fields.");
                }
            });

            jQuery("#btn_continue2").click(function () {
                event.preventDefault();
                if (!hasErrors(2)) {
                    // go to step 3
                    jQuery("#step").val("3");
                    jQuery("#step2").hide();
                    jQuery("#step3").show();
                    jQuery("#step3").removeClass('hide');
                    jQuery("#main").css({'background-image': 'none'});
                }
                else {
                    alert("Please fill out the required fields.");
                }
            });
            jQuery("#btn_submit").click(function () {
                console.log('submit clicked')
                if (!hasErrors(3)) {
                    jQuery('#ckm_form')[0].submit();
                    return true;
                }
                else {
                    alert("Please fill out the required fields.");
                    return false;
                }
            });

        });
    </script>

    <script type="text/javascript" src="/legacy/bath/js/jquery.maskedinput.min.js"></script>
@endsection


