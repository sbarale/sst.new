@extends('fronts.sst.remodeling.slider-layout')
@section('title','Take the Quiz to See if you Qualify')
@section('big-bg-img','/images/gray-bg-px.jpg')
@section('small-bg-img','/images/gray-bg-px.jpg')
@section('header-middle-img','/images/debt.png')
@section('top-blue-line-text','Solve Your IRS Tax Debt Issues')
@section('head')
    @parent
    <link href="/css/bath/2/main.css" rel="stylesheet" type='text/css'/>
    <style>
        .btn-page3{
            font-size:28px!important;
            padding: 10px 56px!important;
            margin-top: 20px;
        }
        .tax-ul{
            list-style: disc;
        }
        .tax-ul li{
            max-width: 100%;
            float: none;
            text-align: left;
            padding: 0;
        }
    </style>
@endsection


@section('content')
    <div class="secondarybg whitebg">

        <form name="apply_form" action="/remodeling/tax-settlement/1" id="apply_form" class="form-horizontal quiz_form" method="POST">
            {{ csrf_field() }}
            <h1 class="header" id="survey_headline" style="text-transform: uppercase;">Check Your Eligibility for The IRS Fresh Start Program</h1>

            <h1 class="header" id="survey_headline_slide2" style="display: none">MAKE SURE YOU COUNT ALL THE DEBT YOU HAVE</h1>
            <h1 class="header" id="survey_headline_slide3" style="display: none">THERE AMAZING PROGRAMS AVAILABLE IN ALL STATES </h1>
            <!--<span id="statecurrent">-->


            <h1 class="header" id="research_headline" style="display: none">PLEASE BE PATIENT AS WE CALCULATE RESULTS AND RESEARCH LOCATIONS</h1>
            <h1 class="header" id="receive_info_headline" style="display: none;  ">YOU QUALIFY TO SPEAK TO A TAX SPECIALIST</h1>
            <input type="hidden" name="_submit" value="1" />
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
                                    How Much Unpaid Tax Do You Owe?
                                </h2>
                            </div>
                        </div>
                        <div class="row">
                            <input name="tax_debt" id="tax_debt" type="hidden">

                            <div class="col-sm-4 col-sm-offset-4 col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page1" data-value="5000">Under $7,500</button>
                            </div>

                            <div class="col-sm-4 col-sm-offset-4  col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page1" data-value="7500">$7,500 - $9,999</button>
                            </div>
                            <div class="col-sm-4 col-sm-offset-4  col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page1" data-value="10000">$10,000 - $19,999</button>
                            </div>
                            <div class="col-sm-4 col-sm-offset-4 col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page1" data-value="20000">$20,000 - $49,999</button>
                            </div>

                            <div class="col-sm-4 col-sm-offset-4 col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page1" data-value="50000">$50,000 - $99,999</button>
                            </div>
                            <div class="col-sm-4 col-sm-offset-4 col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page1" data-value="100000">$100,000 OR MORE</button>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <p>Click an Amount to Continue</p>
                                <h4>YOU MAY QUALIFY TO SUBSTANTIALLY LOWER YOUR TAX DEBT</h4>
                            </div>
                        </div>
                    </div>
                    <!-- END DEBT_TYPE_QUESTION -->

                    <!-- START DEBT_TYPE_QUESTION -->
                    <div class="slider-slide" id="IRS_debt_program_slide">

                        <div class="row">
                            <div class="col-xs-12">
                                <h2>
                                    Are you currently in a active bankruptcy or have a payment plan with the IRS?
                                </h2>
                            </div>
                        </div>
                        <div class="row">
                            <input name="IRS_debt_program" id="IRS_debt_program" type="hidden">

                            <div class="col-sm-4 col-sm-offset-4 col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page2" data-value="NO">NO</button>
                            </div>

                            <div class="col-sm-4 col-sm-offset-4  col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page2" data-value="YES">YES</button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <p>Tap to Continue</p>

                            </div>
                        </div>
                    </div>
                    <!-- END DEBT_TYPE_QUESTION -->

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
                                <input type="hidden" pattern="[0-9]*" id="zip" name="zip" onChange="document.getElementById('zip2').value = this.value" class="form-control input-lg" required data-parsley-uszip="1" data-parsley-error-message="Please enter a valid zip" data-parsley-group="block6" placeholder="Enter Your Zip" maxlength="5" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="button" class="btn btn-success btn-lg btn-page3" disabled>Next</button>
                            </div>
                        </div>
                    </div>
                    <!-- END ADDRESS_QUESTION -->

                    <!-- START CALCULATE ANIMATION -->
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
                                    <p>Programs available for Debt</p>
                                </div>
                                <div class="msg5 hidden">
                                    <p><strong>Congratulations!</strong></p>
                                </div>
                                Loading…
                            </div>
                        </div>
                    </div>
                    <!-- END CALCULATE ANIMATION -->

                    <!-- START DETAILS QUESTION -->
                    <div class="slider-slide" id="name_slide">
                        <input type="hidden" name="page_track_name" value="1" />
                        <div class="row">
                            <div class="col-xs-12">
                                <div style="font-weight:bold;"><p>Talk to an IRS Tax Settlement Expert in your local area. </p>
                                    <p>FREE CONSULTATION & NO OBLIGATION</p></div>
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
                            <div class="col-sm-12 col-xs-12">
                                Source of income
                                <input type="text" id="source_of_income" name="source_of_income" class="form-control input-lg"  required data-parsley-error-message="Please enter your source of income" data-parsley-group="block5"  placeholder="" />
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
                                <button type="button" class="btn btn-success btn-lg btn-page4">Get Results</button>

                                </br> </br>
                                <!-- begin tcpa-->
                                <div style="color:gray; font-size: 10px;">
                                    <div id="tcpa" >
                                        <input type="hidden" id="leadid_tcpa_disclosure" />
                                        <label for="leadid_tcpa_disclosure">
                                            I agree to be contacted through automated means (e.g. autodialing, text and pre-recorded messaging) via telephone, mobile device (including SMS and MMS) and/or email, even if it is a cellular phone number or other service for which the called/messaged person(s) could be charged for such contact & even if your telephone number is currently listed on any state, federal or corporate Do Not Call registry. Consent is not required to purchase goods or services. You'll receive approximately 4 messages every month. Message & Data Rates May Apply. REPLY "HELP" FOR HELP, REPLY "STOP" TO CANCEL. You agree to Terms & Conditions and Privacy Policy.                                                </label>
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
    <div class="white-section">
        <div class="container">
            <h2 style="text-align: center;">Tax Debt is Heavy. Don't Carry it Alone.</h2>
            <h3 style="text-align: center;">We are here to help!</h3>
            <div class="col-sm-3 help-section">
                <img src="/images/tax/interested2.png">
                Learn about the different programs you qualify for and lower your debt obligation with the IRS – 100% free consultation.
            </div>
            <div class="col-sm-3 help-section">
                <img src="/images/tax/interested3.png">
                Get help as needed from the most experienced Enrolled Agents, Certified Public Accountants (CPAs) and Tax Attorneys through our partner network.
            </div>
            <div class="col-sm-3 help-section">
                <img src="/images/tax/interested4.png">
                Let a skilled tax specialist talk to the IRS and stop them in their tracks while they build your case and find a resolution.
            </div>
            <div class="col-sm-3 help-section">
                <img src="/images/tax/interested1.png">
                It's hard to resolve IRS debt by yourself, as there are Tax Court Findings, Revenue Rulings, and Congressional Reports to consider.
            </div>
        </div>
    </div>

    <div class="green-section">
        <div class="container">
            <h1 style="color: white;">You May Qualify to be Forgiven for Tens of Thousands of Dollars in Tax Debt</h1>
            <div class="col-sm-6 help-today-text">
                If you're experiencing or worried about liens, garnishments, penalties, or more, now is the time to learn about your options to take care of your tax debt. Tax debt relief programs under federal guidelines could help you settle with the IRS and may save you tens of thousands of dollars.
                <a href="#" class="get-help-today">Get Help Today</a>
            </div>
            <div class="col-sm-6 hidden-xs">
                <img src="/images/tax/tax.png">
            </div>
        </div>
    </div>

    <div class="gray-section">
        <div class="container">
            <h1 class="truth-title">THE TRUTH ABOUT YOUR TAX DEBT</h1>
            <div class="col-sm-6 truth-section" style="margin-bottom: 20px;">
                <p>There are approximately 8 million* individuals and business owners who have tax debt, and the IRS is going after them with unprecedented levels of aggression—for instance, property seizures have increased by 230%** in the last decade.</p>
                <ul class="tax-ul">
                    <li>The IRS likely has access to all of your financial information, including both personal and business assets.</li>
                    <li>Evading tax debt can come with very heavy prices: felony conviction, 5 years imprisonment, fines as high as $250,000 and the expensive cost of prosecution***(26 USC 7201).</li>
                    <li>The IRS intends to revoke and deny passports to delinquent taxpayers under a new law called FAST Act (new section 7345 of the tax code).</li>
                    <li>If a taxpayer has assets and owes back taxes, then that tax debt takes priority, in the eyes of the IRS, over everything else, including your home, cars, investments, business and paycheck.</li>
                </ul>
                <p>These days, it's more important than ever to have an advocate who can take the IRS head-on, armed with a vast knowledge of the tax debt relief programs that can save you thousands. Dealing with the IRS can be daunting, so having representation that works with the IRS all the time and knows how to negotiate on your behalf can get you the best results.</p>
                <small>*source: investopedia.com/articles/personal-finance/021214/why-do-so-many-people-fall-behind-their-taxes.asp</small>
                <small>*source: businessinsider.com/why-8-million-people-pay-taxes-late-2014-2</small>
                <small>**source: The IRS Data Book comparison of 2011 vs. 2001- property seizures increased a 230%</small>
                <small>***source: tax.findlaw.com/tax-problems-audits/income-tax-fraud-vs-negligence.html</small>
            </div>
            <div class="col-sm-6">
                <img src="/images/tax/woman.png" style="border-radius: 50%;margin: 0px auto;display: block; max-width: 100%;">
                <h2 style="text-align: center;">Avoiding Your Tax Debt is a Prosecutable Felony</h2>
                <h3 style="text-align: center;">Ignoring the IRS may be very costly:</h3>
                <table class="text-center">
                    <tbody><tr>
                        <td class="text-left">Legal Fees to Defend Your Prosecution*($250 X 40 Hours)</td>
                        <td class="text-center text-orange"><strong>$10K</strong></td>
                    </tr>
                    <tr>
                        <td class="text-left">Pay IRS Back for Cost of Prosecution</td>
                        <td class="text-center text-orange"><strong>$10K</strong></td>
                    </tr>
                    <tr>
                        <td class="text-left">Seizure of Your Home(Equity), Cars,Business and Investments**</td>
                        <td class="text-center text-orange"><strong>$50K</strong></td>
                    </tr>
                    <tr>
                        <td class="text-left">Tax Avoidance Fine***</td>
                        <td class="text-center text-orange"><strong>$250K</strong></td>
                    </tr>
                    <tr>
                        <td class="text-left">Loss of Income from 5 Years of Impresonment($46K/Year)****</td>
                        <td class="text-center text-orange"><strong>$230K</strong></td>
                    </tr>
                    <tr class="highlighted">
                        <td class="text-left">Total Potential Cost Impact</td>
                        <td class="text-center text-red"><strong>$550K</strong></td>
                    </tr>
                    <tr class="footnote">
                        <td colspan="2"><h6>Individual results may vary based on ability to save funds and completion of all program terms. Program does not assume any debts nor provide legal or tax advice. Read and understand all terms prior to enrollment. Not available in all states. Sources: ExpertLaw.com*, Bloomberg**,IRS***, Social Security Administration****</h6></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('footer-scripts')
    @parent
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
                $('.btn-page3').removeAttr('disabled');
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

    <script type='text/javascript'>

        $(function () {
            $("#phone").mask("999-999-9999");

            $('#apply_form').parsley();

            var slider = $('#flow-slider-container').unslider({
                'initialElement': $('#debt_type_slide')
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
                var newval = $(this).data('value');
                $('#tax_debt').val(newval);
                var $slider_item = $(this).closest('.slider-slide');

                $('.form-progress-bar').css({'width': '20%'});
                slider_data.move('#IRS_debt_program_slide');
            });

            $('.btn-page2').on('click', function (e) {
                var newval = $(this).data('value');
                $('#IRS_debt_program').val(newval);
                var $slider_item = $(this).closest('.slider-slide');
                var serialized_section = $slider_item.find(':input').serialize();
                if ($('#apply_form').parsley().validate('block2') === true) {
                    $("#survey_headline").hide();
                    $("#survey_headline_slide3").show();

                    $('.form-progress-bar').css({'width': '30%'});
                    slider_data.move('#zip_slide');
                }
            });

            $('.btn-page3').on('click', function (e) {
                e.stopPropagation();
                if ($('#apply_form').parsley().validate('block3') === true) {
                    var zip = $('#zip').val();
                    if(zip) {
                        if($('#zip').is(':visible')) {
                            codeAddress();
                        }

                        $("#survey_headline_slide3").hide();
                        $("#receive_info_headline").show();

                        $('.form-progress-bar').css({'width': '80%'});
                        slider_data.move('#name_slide');
                    }
                    else {
                        alert('Please select an address from the suggestions list.');
                    }
                }
            });

            $('.btn-page4').on('click', function (e) {
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


