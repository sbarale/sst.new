@extends('layouts.slider')
@section('title','Take the Quiz to See if you Qualify')
@section('big-bg-img','/images/background.jpg')
@section('small-bg-img','/images/background.jpg')
@section('header-middle-img','/images/solar-1.png')
@section('top-blue-line-text','')
@section('head')
    @parent
    <link href="/css/bath/2/main.css" rel="stylesheet" type='text/css'/>
    <style>
        .bbbb{
            width: 100%;
        }
        .btn-page1, #btn-page2, #btn-page4, .btn-page6, #btn-page7, .btn-page8, .btn-page9{
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

        <form name="apply_form" action="/remodeling/solar-energy/1/au" id="apply_form" class="form-horizontal quiz_form" method="POST">
            {{ csrf_field() }}
            <h1 class="header" id="survey_headline">See How You Can Save With Solar Energy</h1>
            <h1 class="header" id="thankyou_header" style="display: none">Please Wait While We Create Your Eligibility Code</h1>
            <h1 class="header" id="research_headline" style="display: none">Looking for available programs</h1>
            <h1 class="header" id="receive_info_headline" style="display: none">Your Personal Report Is Almost Ready To Process</h1>
            <input type="hidden" name="_submit" value="1" />
                <div class="progress">
                    <div class="progress-bar progress-bar-primary form-progress-bar" role="progressbar" style="width: 0%"></div>
                </div>


            <div id="flow-slider-container" class="slider-container">
                <div class="slider-wrapper">

                    <div class="slider-slide" id="bill_amount_slide">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2>How much is your current electric bill PER QUARTER ?</h2>
                                <h5>Reduce your electrical bill by up to 80%</h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <select name="electric_bill"  class="form-control input-lg" required data-parsley-error-message="Please select your bill amount" data-parsley-group="block2">
                                    <option value="Over $700">Over $700</option>
                                    <option value="$501-$700">$501-$700</option>
                                    <option value="$400-500">$400-500</option>
                                    <option value="Under $400">Under $400</option>

                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="button" id="btn-page1" class="btn btn-success btn-lg btn-page1">Next Question</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <p>To qualify for the free eligibility review, you must meet 3 requirements. Please answer the questions <b>truthfully</b></p>
                            </div>
                        </div>
                    </div>
                    <!--END How much would you like to reduce your electricity costs? -->

                    <!--start Electric Provider -->
                    <div class="slider-slide" id="provider_slide">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2>Who is Your Electric Provider?</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <select id="electricity_Company" name="electricity_Company" class="form-control input-lg" required data-parsley-error-message="Please select your Electric Provider" data-parsley-group="block1">
                                    <option disabled="" selected="">--Choose Your Electricity Company--</option>
                                    <option value="Ergon Energy">Ergon Energy</option>
                                    <option value="AGL">AGL</option>
                                    <option value="Australian Power & Gas">Australian Power & Gas</option>
                                    <option value="Click Energy">Click Energy</option>
                                    <option value="Dodo Power & Gas">Dodo Power & Gas</option>
                                    <option value="Energy Australia">Energy Australia</option>
                                    <option value="Integral Energy">Integral Energy</option>
                                    <option value="Lumo Energy">Lumo Energy</option>
                                    <option value="Origin Energy">Origin Energy</option>
                                    <option value="Powerdirect">Powerdirect</option>
                                    <option value="ActewAGL">ActewAGL</option>
                                    <option value="Momentum Energy">Momentum Energy</option>
                                    <option value="Country Energy">Country Energy</option>
                                    <option value="Red Energy">Red Energy</option>
                                    <option value="Alinta Energy">Alinta Energy</option>
                                    <option value="Diamond Energy">Diamond Energy</option>
                                    <option value="Simply Energy">Simply Energy</option>
                                    <option value="Synergy">Synergy</option>
                                    <option value="Western Power">Western Power</option>
                                    <option value="Perth Energy">Perth Energy</option>
                                    <option value="NT Power & Water">NT Power & Water</option>
                                    <option value="Aurora Energy">Aurora Energy</option>
                                    <option value="Horizon Power">Horizon Power</option>
                                    <option value="Other">Otherss</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="button" id="btn-page2"  class="btn btn-success btn-lg gtm-slr-AU-electric-provider">Next Question</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <p>To qualify for the free eligibility review, you must meet 3 requirements. Please answer the questions <b>truthfully</b></p>
                            </div>
                        </div>
                    </div>
                    <!--END Electric Provider -->



                    <!--start  the age of your home -->
                    <div class="slider-slide" id="home_age_slide">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2>
                                    What&#39;s the age of your home?
                                </h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div id="debt_slider"></div>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="row">
                                    <input type="hidden" name="home_age" id="home_age" value="" data-parsley-group="block3" />

                                    <div class="col-sm-6 col-xs-12">
                                        <button type="button" class="btn btn-success btn-block btn-lg btn-page3 gtm-slr-AU-home-age" data-value="Over 20 Years">Over 20 Years</button>

                                    </div>

                                    <div class="clearfix visible-xs clearfix-custom"></div>
                                    <div class="col-sm-6 col-xs-12">
                                        <button type="button" class="btn btn-success btn-block btn-lg btn-page3 gtm-slr-AU-home-age" data-value="Under 20 Years">Under 20 Years</button>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <button type="button" class="btn btn-success btn-block btn-lg btn-page3 gtm-slr-AU-home-age" data-value="Under Construction">Under Construction</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <p>To qualify for the free eligibility review, you must meet 3 requirements. Please answer the questions <b>truthfully</b></p>
                            </div>
                        </div>
                    </div>
                    <!--END the age of your home -->

                    <!--START zip slide  -->
                    <div class="slider-slide" id="zip_slide">
                        <input type="hidden" name="page_track_zip" value="1" />
                        <div class="row">
                            <div class="col-xs-12">
                                <h2>
                                    Enter Your Street Number + Address
                                </h2>
                                <h5>
                                    (we need this to analyze the savings for your location)
                                </h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <input type="hidden" id="address" name="address">
                                <input type="text" id="address_mask" name="address_mask" class="form-control input-lg"  required data-parsley-pattern="/^[0-9].*$/" data-parsley-error-message="Please provide your street number at the beginning" data-parsley-group="block11">
                                <input onChange="document.getElementById('zip2').value = this.value" type="hidden" id="zip" name="zip" class="form-control input-lg" required data-parsley-pattern="^(0[289][0-9]{2})|([1345689][0-9]{3})|(2[0-8][0-9]{2})|(290[0-9])|(291[0-4])|(7[0-4][0-9]{2})|(7[8-9][0-9]{2})$" data-parsley-minlength="4" data-parsley-maxlength="4" data-parsley-error-message="Please enter a valid zip" data-parsley-group="block11" placeholder="Enter Your Zip" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="button" class="btn btn-success btn-lg gtm-slr-AU-address" id="btn-page4">Next Question</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <p>To qualify for the free eligibility review, you must meet 3 requirements. Please answer the questions <b>truthfully</b></p>
                            </div>
                        </div>
                    </div>
                    <!--END zip slide  -->

                    <!--START homeowner slide  -->
                    <div class="slider-slide" id="loan_type_slide">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2>
                                    Do you rent or own the property?
                                </h2>
                                <h5>
                                    Provide clean, reliable energy for your family
                                </h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <input type="hidden" name="rent_or_own" id="rent_or_own" value="" data-parsley-group="block3" />
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page5 gtm-slr-AU-property-owner" data-value="Yes">I own the property</button>
                            </div>
                            <div class="clearfix visible-xs clearfix-custom"></div>
                            <div class="col-sm-6 col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page5 gtm-slr-AU-property-owner" data-value="No">I rent the property</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <p>To qualify for the free eligibility review, you must meet 3 requirements. Please answer the questions <b>truthfully</b></p>
                            </div>
                        </div>
                    </div>
                    <!--END homeowner slide  -->

                    <!--START System slide  -->
                    <div class="slider-slide" id="size_slide">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2>
                                    What size system are you after?
                                </h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-xs-offset-3">
                                <select name="system_size" id="system_size" class="form-control input-lg" required data-parsley-error-message="Please select your system size" data-parsley-group="block4">
                                    <option value="1.5kW">1.5kW</option>
                                    <option value="2.0kW">2.0kW</option>
                                    <option value="3.0kW">3.0kW</option>
                                    <option selected="selected" value="4.0kW">4.0kW</option>
                                    <option value="5.0kW">5.0kW</option>
                                    <option value="5.0+kW">5.0+kW</option>
                                    <option value="I don't know yet">I don&#39;t know yet</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="button" class="btn btn-success btn-lg btn-page6 gtm-slr-AU-system-size">Next Question</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <p>To qualify for the free eligibility review, you must meet 3 requirements. Please answer the questions <b>truthfully</b></p>
                            </div>
                        </div>
                    </div>
                    <!--END System slide  -->

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
                                    <p><strong>Programs are available!</strong></p>
                                </div>
                                Loading…
                            </div>
                        </div>
                    </div>

                    <div class="slider-slide" id="when_slide">
                        <input type="hidden" name="page_track_when" value="1" />
                        <div class="row">
                            <div class="col-xs-12">
                                <h3>
                                    If you qualify, when are you looking to get started?
                                </h3>
                                <!--<h5>
                                    Reduce your electrical bill by up to 80%
                                </h5>-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <select name="when_start" id="when_start" class="form-control input-lg" required data-parsley-error-message="" data-parsley-group="block6">
                                    <option value="Immediately">Immediately</option>
                                    <option value="Next month">Next month</option>
                                    <option value="3 months">3 months</option>
                                    <option value="6 months">6 months</option>
                                    <option value="Undecided">Undecided</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="button" id="btn-page7" class="btn btn-success btn-lg btn-page7 gtm-slr-AU-start-date">Next Question</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <p>To qualify for the free eligibility review, you must meet 3 requirements. Please answer the questions <b>truthfully</b></p>
                            </div>
                        </div>
                    </div>


                    <div class="slider-slide" id="finance_slide">
                        <input type="hidden" name="page_detailed_quotes" value="1" />
                        <div class="row">
                            <div class="col-xs-12">
                                <h2>
                                    How detailed would you like your quotes to be?
                                </h2>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <select name="detailed_quote" id="detailed_quote" class="form-control input-lg" required data-parsley-error-message="Please select your system size" data-parsley-group="block4">
                                    <option value="I prefer the installers to visit my property and give a firm price">I prefer the installers to visit my property and give a firm price</option>
                                    <option value="No need for an installer to visit, an estimate via email is fine">No need for an installer to visit, an estimate is fine</option>
                                    <option value="I have no preference">I have no preference</option>

                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <h2>
                                    What is the best time to get in touch with you?
                                </h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <select name="best_time" id="best_time" class="form-control input-lg" required data-parsley-error-message="Please select your system size" data-parsley-group="block4">
                                    <option value="anytime">Any time is fine</option>
                                    <option value="8am">8am</option>
                                    <option value="9am">9am</option>
                                    <option value="10am">10am</option>
                                    <option value="11am">11am</option>
                                    <option value="12pm">12pm</option>
                                    <option value="1pm">1pm</option>
                                    <option value="2pm">2pm</option>
                                    <option value="3pm">3pm</option>
                                    <option value="4pm">4pm</option>
                                    <option value="5pm">5pm</option>
                                    <option value="6pm">6pm</option>
                                    <option value="7pm">7pm</option>



                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-xs-offset-3">
                                <br>
                                <input type="checkbox" name="finance_interest_new" id="finance_interest_new" value="Yes" checked> I am interested in finance<br>
                                <br>




                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="button" class="btn btn-success btn-lg btn-page8 gtm-slr-AU-quote-info">Next Question</button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <p>To qualify for the free eligibility review, you must meet 3 requirements. Please answer the questions <b>truthfully</b></p>
                            </div>
                        </div>
                    </div>



                    <div class="slider-slide" id="">
                        <input type="hidden" name="page_track_finance" value="1" />
                        <div class="row">
                            <div class="col-xs-12">
                                <h2>
                                    Are you interested in finance?
                                </h2>
                                <!--<h5>
                                    Reduce your electrical bill by up to 80%
                                </h5>-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <input type="hidden" name="finance_interest" id="finance_interest" value="" data-parsley-group="block8" />
                                        <button type="button" class="btn btn-success btn-block btn-lg btn-page8" data-value="Yes">Yes</button>
                                    </div>
                                    <div class="clearfix visible-xs clearfix-custom"></div>
                                    <div class="col-sm-6 col-xs-12">
                                        <button type="button" class="btn btn-success btn-block btn-lg btn-page8" data-value="No">No</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <button type="button" class="btn btn-success btn-block btn-lg btn-page8" data-value="Maybe">Maybe</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <p>To qualify for the free eligibility review, you must meet 3 requirements. Please answer the questions <b>truthfully</b></p>
                            </div>
                        </div>
                    </div>

                    <div class="slider-slide" id="gplus_slide">
                        <div class="row">
                            <div class="col-xs-12" >
                                <div class="loader-gplus"></div>
                            </div>
                        </div>
                    </div>

                    <div class="slider-slide" id="name_slide">
                        <input type="hidden" name="page_track_name" value="1" />
                        <div class="row" style="margin-bottom: 0;">
                            <div class="col-xs-12">
                                <div style="font-weight:bold;"><p style="margin-top:10px;margin-bottom:8px;">Please Fill Out Information Below so You Can Receive Your Results </p></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                First Name
                                <input type="text" id="first_name" name="first_name" class="form-control input-lg" required data-parsley-error-message="Please enter your first name" data-parsley-group="block9" placeholder="First Name" />
                            </div>
                            <div class="col-xs-6">
                                Last Name
                                <input type="text" id="last_name" name="last_name" class="form-control input-lg" required data-parsley-error-message="Please enter your last name" data-parsley-group="block9" placeholder="Last Name" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                Email
                                <input type="email" id="email" name="email_address" class="form-control input-lg" required data-parsley-error-message="Please enter a valid email" data-parsley-group="block9" placeholder="Enter Your Email" />
                            </div>
                            <div class="col-sm-6">
                                Phone
                                <input type="tel" id="phone" name="phone_home" class="form-control input-lg" required data-parsley-pattern="^\({0,1}(0){0,1}(2|4|3|7|8){0,1}\){0,1}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{1}(\ |-){0,1}[0-9]{3}$" data-parsley-error-message="Please enter a valid phone in the local format: ( eg: 04, 07, 02 )" data-parsley-group="block9" placeholder="Enter Your Phone" />
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-xs-12">
                                Address
                                <input type="text" id="address2" name="address2" class="form-control input-lg" readonly data-parsley-error-message="Please enter a valid address" data-parsley-group="block9" placeholder="Enter Your Address" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <button type="button" class="btn btn-success btn-lg btn-page9 gtm-slr-AU-details">Get Results</button>
                                </br>  <label><span style="color:gray; "></br>By clicking above, you authorize smartsavings.today and a solar company in your area to call you and send you pre-recorded messages and text messages at the number you entered above, using an autodialer, with offers about their products or services, even if your phone number is a mobile phone or is on any national or state “Do Not Call” list. Message and data rates may apply. Your consent here is not based on a condition of purchase.
                                        </span></label>
                            </div>
                        </div>
                    </div>

                    <div class="slider-slide" id="thankyou_slide">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2>Thank You</h2>
                                <div>Please Wait...</div><br><br>
                                <!--<img src="img/loader.gif" />-->
                                <div class="plus-loader">
                                    Loading…
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

    <script type='text/javascript'>
        $(function () {
            var provider = $('#electricity_company');
            var empty_caption = '-- Please select --';
            var state_provider = '';

            var autocomplete = new google.maps.places.Autocomplete(document.getElementById('address_mask'), {
                types: ['address'],
                componentRestrictions: {country: "au"},
            });
            autocomplete.addListener('place_changed', function(){
                var place = autocomplete.getPlace();
                console.log(place);
                var zip = '';
                var street_number = '';
                var route = '';
                var city = '';
                var state = '';
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
                    if(place.address_components[i].types.indexOf('administrative_area_level_1') != -1) {
                        state = place.address_components[i].short_name;
                    }
                }
                $('#zip, #zip2').attr('value', zip);
                $('#address').attr('value', street_number + ' ' + route);
                $('#address2').attr('value', place.formatted_address);
                $('#city').attr('value', city);
                $('#state').attr('value', state);
                if(!zip.length) {
                    $('#zip').attr('type', 'text');
                }
                console.log('address changed');
                $('#btn-page4').removeAttr('disabled');
            });

            $('#apply_form').parsley();

            var slider = $('#flow-slider-container').unslider({
                'initialElement': $('#bill_amount_slide')

            });

            var slider_data = slider.data('unslider');

            $('#apply_form :input').on('keypress', function(e) {
                e.stopPropagation();
                if (e.keyCode == 13) {
                    var page_idx = ($(this).closest('.slider-slide').index() + 1);
                    $('.btn-page' + page_idx).trigger('click');
                }
            });

            $('.checkbox_change').on('click', function(e) {
                var $this = $(this);
                if ($this.is(':checked')) {
                    $(this).closest('.btn').addClass('btn-success').removeClass('btn-default');
                } else {
                    $(this).closest('.btn').addClass('btn-default').removeClass('btn-success');
                }
            });


            //slide 1
            $('#btn-page1').on('click', function(e) {
                e.stopPropagation();

                $('.form-progress-bar').css({'width': '10%'});
                slider_data.move('#provider_slide');
            });
            //end lside1


            $('#btn-page2').on('click', function(e) {
                e.stopPropagation();
                if ($('#apply_form').parsley().validate('block1') === true) {
                    $('.form-progress-bar').css({'width': '20%'});
                    slider_data.move('#home_age_slide');
                }
            });




            $('.btn-page3').on('click', function(e) {
                e.stopPropagation();

                $('#home_age').val($(this).attr('data-value'));
                $('.form-progress-bar').css({'width': '30%'});
                slider_data.move('#zip_slide');
            });

            $('#btn-page4').on('click', function(e) {
                e.stopPropagation();
                if ($('#apply_form').parsley().validate('block11') === true) {
                    slider_data.move('#loan_type_slide');

                }
            });

            $('.btn-page5').on('click', function(e) {
                e.stopPropagation();
                var newval = $(this).data('value');
                $('#rent_or_own').val(newval);

                if ($('#apply_form').parsley().validate('block3') === true) {
                    var $slider_item = $(this).closest('.slider-slide');

                    $('.form-progress-bar').css({'width': '50%'});
                    slider_data.move('#size_slide');
                }
            });

            $('.btn-page6').on('click', function(e) {
                e.stopPropagation();
                if ($('#apply_form').parsley().validate('block4') === true) {
                    $("#survey_headline").hide();
                    $("#receive_info_headline").show();
                    slider_data.move('#when_slide');
                }
            });

            $('.btn-page7').on('click', function(e) {
                e.stopPropagation();
                $('.form-progress-bar').css({'width': '80%'});
                slider_data.move('#finance_slide');
            });

            $('.btn-page8').on('click', function(e) {
                e.stopPropagation();
                var newval = $(this).data('value');
                $('#finance_interest').val(newval);
                $('.form-progress-bar').css({'width': '90%'});
                slider_data.move('#name_slide');
            });

            $('.btn-page9').on('click', function(e) {
                e.stopPropagation();

                if ($('#apply_form').parsley().validate('block9') === true) {
                    $('.btn-page9').addClass('disabled');
                    $('.form-progress-bar').css({'width': '100%'});
                    slider_data.move('#thankyou_slide');
                    $("#survey_headline").hide();
                    $("#animated6").hide();
                    $("#receive_info_headline").show();
                    $('#apply_form').trigger('submit');
                }
            });

            $('#name_slide').on('formslider-endmove', function() {
                $(this).find(':input:visible:enabled:first').focus();
            });
            $('#size_slide').on('formslider-endmove', function() {
                $(this).find(':input:visible:enabled:first').focus();
            });

        });
    </script>

@endsection


