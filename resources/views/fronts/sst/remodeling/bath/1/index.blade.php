@extends('fronts.sst.layout')
@section('logo','/images/sst-landscape.png')
@section('logo-section','/images/bat.png')
@section('head')
    <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
    @parent
    <link href="/assets/remodeling/bath/css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/remodeling/bath/css/style.css">

@endsection

@section('content')

    <div id="main">
        <div id="title">
            <h1>1 DAY Bathroom Remodels</h1>
            <h2><span>Replace Your Old Shower with a Sleek, Sophisticated Upgrade in One Day</span></h2>
        </div>
        <div class="row">
            <form id="ckm_form" action="/remodeling/bath/1" method="POST">
                {{ csrf_field() }}
                <div class="col-md-6 ">
                    <img src="/assets/remodeling/bath/images/main.jpg" class="img-responsive">
                </div>
                <div class="col-md-6">

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
                                        <a href="#" id="btn_continue"><img src="/assets/remodeling/bath/images/getpricing.png" alt="Get Pricing"></a>
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
                            @include('fronts.sst._common.hidden_fields')

                        </div><!-- laststepbox -->
                        <div class="clear"></div>
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

            </form>
        </div>
    </div>
    </form>
    <div id="footer">
        <p id="tub_disclaimer" style="font-size:12px;text-align:center;">* Pictures shown are for illustrative purposes only. Models available may vary from those displayed in this advertisement.</p>
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

            if(step == 1) {
                if(jQuery("#zip").val() == '') {
                    jQuery("#zip").addClass("error");
                    error_flag = true;
                }
            }
            if(step == 2) {
                if(jQuery("#address").val() == "") {
                    jQuery("#address").addClass("error");
                    error_flag = true;
                }
            }
            if(step == 3) {
                if(jQuery("#first_name").val() == "") {
                    jQuery("#first_name").addClass("error");
                    error_flag = true;
                }
                if(jQuery("#last_name").val() == '') {
                    jQuery("#last_name").addClass("error");
                    error_flag = true;
                }
                if(jQuery("#email_address").val() == "") {
                    jQuery("#email_address").addClass("error");
                    error_flag = true;

                }

                var valid_mail = validateEmail(jQuery("#email_address").val());
                if(valid_mail == false ){
                    jQuery("#email_address").addClass("error");
                    error_flag = true;
                }


                if(jQuery("#phone_home").val() == "") {
                    jQuery("#phone_home").addClass("error");
                    error_flag = true;
                }
                else {
                    var string = jQuery("#phone_home").val().replace(/[^\d]/g, ''); // Removes anything not in [0-9]

                    if(string.length != 10) {
                        jQuery("#phone_home").addClass("error");
                        error_flag = true;
                    }

                }
            }
            return error_flag;
        }

        jQuery(document).ready(function() {

            jQuery("#phone_home").mask("999-999-9999");

            jQuery("#btn_continue").click(function(){
                event.preventDefault();
                if(!hasErrors(1)) {
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

            jQuery("#btn_continue2").click(function(){
                event.preventDefault();
                if(!hasErrors(2)) {
                    // go to step 3
                    jQuery("#step").val("3");
                    jQuery("#step2").hide();
                    jQuery("#step3").show();
                    jQuery("#step3").removeClass('hide');
                    jQuery("#main").css({ 'background-image': 'none' });
                }
                else {
                    alert("Please fill out the required fields.");
                }
            });
            jQuery("#btn_submit").click(function(){
                console.log('submit clicked')
                if(!hasErrors(3)) {
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

    <script type="text/javascript" src="/js/jquery.maskedinput.min.js"></script>
@endsection


