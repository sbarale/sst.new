<?php
$adid = '';
$kwid = 1;
if ( isset( $_GET['adid'] ) ) {
	$adid = $_GET['adid'];
}
if ( isset( $_GET['kwid'] ) ) {
	$kwid = $_GET['kwid'];
}

if ( isset( $_GET['st-t'] ) ) {
	$st_t_val = $_GET['st-t'];
}

if ( isset( $_GET['fbid'] ) ) {
	$fbid_grep = $_GET['fbid'];
}

if ( isset( $_GET['loan_type'] ) ) {
	//if(1==1){
	$loan_type = $_GET['loan_type'];
	//$loan_type = 'Refinance';

	$start_slide = "#loan_debt_slide";

	if ( $loan_type == 'Refinance' ) {
		$start_slide = "#property_type_slide";
		$hide        = "display: none";
		$hide2       = "";
	} elseif ( $loan_type == 'Purchase' ) {
		$start_slide = "#property_type_slide";
		$hide        = "display: none";
		$hide2       = "";
	} else {
		$hide2 = "display: none;";
	}
} else {
	$loan_type   = "";
	$start_slide = "#loan_debt_slide";
	$hide        = "";
	$hide2       = "display: none;";

}
if ( isset( $st_t_val ) ) {
	switch ( $st_t_val ) {
		case 2:
			$fbid = 1707151069577026;
			break;

		default:
			/*No default yet*/
			$fbid = $fbid_grep;
	}
} else {
	$fbid = 1707151069577026;

}
?>
@extends('fronts.sst.layout')
@section('logo','images/composed/mortgage-refinance.png')
@section('content')
    <div class="container">
        <div class="secondarybg whitebg">
            <form name="apply_form" action="/thankyou" id="apply_form" class="form-horizontal quiz_form" method="POST">

                <h1 class="header" id="survey_headline" style="text-transform: uppercase; <?php echo $hide; ?>">FIND VERY LOW MORTGAGE RATES IN
                    <span id="statecurrent"></span></h1>
                <h1 class="header" id="survey_headline_slide2" style="<?php echo $hide2; ?>">LOWER RATES FOR ALL TYPES OF HOMES ARE AVAILABLE</h1>
                <h1 class="header" id="survey_headline_slide25" style="display: none">THERE ARE AMAZING PROGRAMS AVAILABLE FOR MOST LOAN TYPES </h1>
                <h1 class="header" id="survey_headline_slide26" style="display: none">VA STATUS </h1>
                <h1 class="header" id="survey_headline_slide3" style="display: none">THERE ARE AMAZING PROGRAMS AVAILABLE FOR MOST CREDIT SCORES </h1>
                <h1 class="header" id="survey_headline_slide31" style="display: none">TELL US IF YOU ARE YOU STILL LOOKING FOR A PROPERTY</h1>
                <h1 class="header" id="survey_headline_slide32" style="display: none">NOW LETS ANALYZE THE PROGRAMS AVAILABLE FOR YOUR PROPERTY</h1>
                <h1 class="header" id="survey_headline_slide4" style="display: none">NOW LETS ANALYZE THE PROGRAMS AVAILABLE FOR YOUR PROPERTY</h1>
                <h1 class="header" id="survey_headline_slide5" style="display: none">TELL US HOW MUCH YOU THINK YOUR HOME IS WORTH</h1>
                <!-- 	                <h1 class="header" id="survey_headline_slide6" style="display: none">HOW MUCH ADDITIONAL CASH WOULD YOU LIKE TO GET BACK?</h1> -->
                <h1 class="header" id="survey_headline_slide6" style="display: none">WOULD YOU LIKE ADDITIONAL CASH BACK?</h1>
                <h1 class="header" id="survey_headline_slide61" style="display: none">WHAT IS THE BALANCE OF YOUR FIRST MORTGAGE? </h1>
                <h1 class="header" id="survey_headline_slide62" style="display: none">HOW MUCH IS YOUR DOWN PAYMENT?</h1>
                <h1 class="header" id="survey_headline_slide63" style="display: none">DO YOU HAVE A SECOND MORTGAGE?</h1>
                <h1 class="header" id="survey_headline_slide65" style="display: none">FHA loan</h1>
                <h1 class="header" id="survey_headline" style="display: none">FIND LOW MORTGAGE RATES IN
                    <span id="statecurrent"></span></h1>
                <h1 class="header" id="thankyou_header" style="display: none">Please Wait While We Create Your Eligibility Code</h1>
                <h1 class="header" id="research_headline" style="display: none">PLEASE BE PATIENT AS WE CALCULATE RESULTS AND RESEARCH LOCATIONS</h1>
                <h1 class="header" id="receive_info_headline" style="display: none;  ">YOUR PERSONAL REPORT IS ALMOST READY TO SEND</h1>
                <input type="hidden" name="_submit" value="1"/>

                <div class="progress">
                    <div class="progress-bar progress-bar-primary form-progress-bar" role="progressbar" style="width: 0%"></div>
                </div>


                <div id="flow-slider-container" class="slider-container">
                    <div class="slider-wrapper">

                        <!--START Refinance or Purchase?-->
                        <div class="slider-slide" id="loan_debt_slide">
                            <input type="hidden" name="page_track_loan_debt" value="1"/>
                            <div class="row">
                                <div class="col-xs-12">
                                    <h2>
                                        Refinance or Purchase?
                                    </h2>
                                </div>
                            </div>
                            <div class="row">
                                <input name="loan_type" id="loan_type" type="hidden" value="<?php echo $loan_type; ?>">

								<?php
								switch ($kwid) {
								case 2:
								/* kwid 2 */
								?>
                                <div class="col-sm-10 col-sm-offset-1 col-xs-12">
                                    <button style="margin:15px;" class="btn btn-default btn-page1 btn-image" data-value="Refinance">
                                        <img src="images/refinance.png" width="150"/>
                                    </button>

                                    <button style="margin:15px;" class="btn btn-default btn-page1 btn-image" data-value="Purchase">
                                        <img src="images/purchase.png" width="150"/>
                                    </button>
                                </div><?php
								break;

								default:
								/* kwid 1 */?>
                                <div class="col-sm-6 col-xs-12">
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page1" data-value="Refinance">Refinance</button>
                                </div>
                                <div class="clearfix visible-xs clearfix-custom"></div>
                                <div class="col-sm-6 col-xs-12">
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page1" data-value="Purchase">Purchase</button>
                                </div>

								<?php
								}?>
                            </div>
                        </div>
                        <!--END Refinance or Purchase?-->

                        <!--START PROPERTY SLIDE -->
                        <div class="slider-slide" id="property_type_slide">

                            <div class="row">
                                <div class="col-xs-12">
                                    <h2>Great! What type of property?</h2>
                                </div>
                            </div>
                            <div class="row">
                                <input type="hidden" name="property_type" id="property_type" value=""/>

								<?php
								switch ($kwid) {
								case 2:
								/* kwid 2 */
								?>
                                <div class="col-sm-10 col-sm-offset-1 col-xs-12">
                                    <button style="margin:15px;" class="btn btn-default btn-page2 btn-image" data-value="Single Family">
                                        <img src="images/singlefamiliy.png" width="150"/>
                                    </button>
                                    <!--
                                                                            <button style="margin:15px;" class="btn btn-default btn-page2 btn-image" data-value="Coop">
                                                                                <img src="images/multifamily.png" width="150" />
                                                                            </button>
                                    -->
                                    <button style="margin:15px;" class="btn btn-default btn-page2 btn-image" data-value="Condominium">
                                        <img src="images/condominium.png" width="150"/>
                                    </button>
                                    <button style="margin:15px;" class="btn btn-default btn-page2 btn-image" data-value="Mobile Home">
                                        <img src="images/mobilehome.png" width="150"/>
                                    </button>
                                </div>


								<?php
								break;

								default:
								/* kwid 1 */?>
                                <div class="col-sm-6 col-xs-12">
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page2" data-value="Single Family">Single Family</button>
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page2" data-value="Condominium">Condominium</button>
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page2" data-value="Mobile Home">Mobile Home</button>
                                </div>
                                <div class="clearfix visible-xs clearfix-custom"></div>
                                <div class="col-sm-6 col-xs-12">
                                    <!--                                         <button type="button" class="btn btn-success btn-block btn-lg btn-page2" data-value="Coop">Coop</button> -->
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page2" data-value="Manufactured">Manufactured</button>
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page2" data-value="Townhouse">Townhouse</button>

                                </div>
								<?php
								}?>
                            </div>
                        </div>
                        <!--END PROPERTY SLIDE -->

                        <!--START HOW IS YOUR LOAN TYPE-->
                        <div class="slider-slide" id="loan_type_fixed_or_adjustable_slide">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h2>
                                        What is your Loan type?
                                    </h2>

                                </div>
                            </div>
                            <div class="row">
                                <input type="hidden" name="loan_type_fixed_or_adjustable" id="loan_type_fixed_or_adjustable" value=""/>


                                <div class="col-sm-6 col-xs-12">
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page25" data-value="Adjustable">Adjustable</button>

                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page25" data-value="Fixed">Fixed</button>


                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page25" data-value="Fixed or Adjustable">Fixed or Adjustable</button>
                                </div>
                            </div>
                        </div>
                        <!--END HOW IS YOUR LOAN TYPE-->

                        <!--START  VA_STATUS-->
                        <div class="slider-slide" id="va_status_slide">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h2>
                                        Have you or your spouse been an active member of the US armed forces?
                                    </h2>

                                </div>
                            </div>
                            <div class="row">
                                <input type="hidden" name="va_status" id="va_status" value=""/>


                                <div class="col-sm-6 col-xs-12">
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page26" data-value="Yes">Yes</button>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page26" data-value="No">No</button>
                                </div>

                            </div>
                        </div>
                        <!--END  VA_STATUS-->

                        <!--START HOW IS YOUR CREDIT-->
                        <div class="slider-slide" id="credit_type_slide">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h2>
                                        How is Your Credit?
                                    </h2>

                                </div>
                            </div>
                            <div class="row">
                                <input type="hidden" name="credit" id="credit" value=""/>

								<?php
								switch ($kwid) {
								case 2:
								/* kwid 2 */
								?>
                                <div class="col-sm-10 col-sm-offset-1 col-xs-12">
                                    <button style="margin:15px;" class="btn btn-default btn-page3 btn-image" data-value="Excellent">
                                        <img src="images/credit_excellent.png" width="150"/>
                                    </button>
                                    <button style="margin:15px;" class="btn btn-default btn-page3 btn-image" data-value="Good">
                                        <img src="images/credit_good.png" width="150"/>
                                    </button>
                                    <button style="margin:15px;" class="btn btn-default btn-page3 btn-image" data-value="Fair">
                                        <img src="images/credit_fair.png" width="150"/>
                                    </button>
                                    <button style="margin:15px;" class="btn btn-default btn-page3 btn-image" data-value="Poor">
                                        <img src="images/credit_poor.png" width="150"/>
                                    </button>
                                </div>

								<?php
								break;

								default:
								/* kwid 1 */?>
                                <div class="col-sm-6 col-xs-12">
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page3" data-value="Excellent">Excellent</button>
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page3" data-value="Good">Good</button>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page3" data-value="Fair">Fair</button>
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page3" data-value="Poor">Poor</button>
                                </div>
								<?php
								}?>
                            </div>
                        </div>
                        <!--END HOW IS YOUR CREDIT-->


                        <!--START HAVE YOU FOUND A HOME? (only when purchase)-->
                        <div class="slider-slide" id="found_home_slide">

                            <div class="row">
                                <div class="col-xs-12">
                                    <h2>
                                        Have you found a home?
                                    </h2>
                                </div>
                            </div>

                            <div class="row">
                                <input type="hidden" name="found_home" id="found_home" value=""/>
                                <div class="col-sm-6 col-sm-offset-3 col-xs-12">
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page31" data-value="Yes">Yes</button>
                                    <button type="button" class="btn btn-success btn-block btn-lg btn-page31" data-value="No">No</button>
                                </div>
                            </div>

                        </div>
                        <!--END HAVE YOU FOUND A HOME? -->

                        <!-- START PROP_STATE_QUESTION -->
                        <div class="slider-slide" id="prop_state_slide">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h2>
                                        Select the state of the property you would like to buy
                                    </h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">

                                    <select id="prop_state" class="form-control input-lg" name="prop_state" data-parsley-error-message="Please select your state">
                                        <option value="AZ" selected="selected">-- Select Your State --</option>
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="CA">California</option>
                                        <option value="CO">Colorado</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="DC">District Of Columbia</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="ID">Idaho</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IN">Indiana</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NV">Nevada</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="OH">Ohio</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="OR">Oregon</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="TX">Texas</option>
                                        <option value="UT">Utah</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WA">Washington</option>
                                        <option value="WV">West Virginia</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="WY">Wyoming</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <button type="button" class="btn btn-success btn-lg btn-page32">Next</button>
                                </div>
                            </div>

                        </div>
                        <!-- END STATE_QUESTION -->


                        <!--START ADDRESS SLIDE-->
                        <div class="slider-slide" id="zip_slide">
                            <input type="hidden" name="page_track_zip" value="1"/>
                            <div class="row">
                                <div class="col-xs-12">
                                    <h2>
                                        Enter Your Current Street Address
                                    </h2>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <input type="hidden" id="address" name="address">
                                    <input type="text" id="address_mask" name="address_mask" class="form-control input-lg" required data-parsley-usaddress="1" data-parsley-error-message="Please provide your street number at the beginning" data-parsley-group="block4">
                                    <input type="hidden" pattern="[0-9]*" id="zip" name="zip" onChange="document.getElementById('zip2').value = this.value" class="form-control input-lg" required data-parsley-uszip="1" data-parsley-error-message="Please enter a valid zip" data-parsley-group="block4" placeholder="Enter Your Zip" maxlength="5"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <button type="button" class="btn btn-success btn-lg btn-page4" disabled>Next</button>
                                </div>
                            </div>
                        </div>
                        <!--END ADDRESS SLIDE-->

                        <!--START CALCULATION-->
                        <div class="slider-slide" id="calculate_slide">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div id="animated6" style="margin-top: 20px; display: none;">
                                        <img src="images/checker.gif"/>

                                    </div>


                                    <div class="msg1">
                                        <p>Checking for Answer</p>
                                    </div>
                                    <div class="msg2 hidden">
                                        <p>Mortgage programs available in <span id="country_name">Your State</span></p>
                                    </div>
                                    <div class="msg3 hidden">
                                        <p>Programs available for Mortgage </p>
                                    </div>
                                    <div class="msg5 hidden">
                                        <p><strong>Congratulations!</strong></p>
                                    </div>
                                    Loading…
                                </div>
                            </div>
                        </div>
                        <!--END CALCULATION-->

                        <!--START PROPERTY VALUE-->
                        <div class="slider-slide" id="property_value_slider">

                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <h2>
                                        Estimated property value
                                    </h2>
                                    <input type="hidden" id="property_value" name="property_value" value="100000" class="form-control input-lg"/>

                                    <div id="estimated_value_text"></div>
                                    <div id="estimated_value"></div>
                                    <div class="next_to_amount_borrow">
                                        <div style="float: left;">$75K</div>
                                        <div style="float: right;">$2M</div>
                                        <div style="clear: both;"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <button type="button" id="btn-page61" class="btn btn-success btn-lg btn-page61">Next</button>

                                </div>
                            </div>
                        </div>
                        <!--END PROPERTY VALUE-->


                        <!--START DOWN PAYMENT (only when purchase)-->
                        <div class="slider-slide" id="down_payment_value_slider">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <h2>Estimated down payment</h2>
                                    <input type="hidden" id="down_payment_value" name="down_payment_value" value="" class="form-control input-lg"/>

                                    <div id="estimated_down_payment_value_text"></div>
                                    <div id="estimated_down_payment_value"></div>
                                    <div class="next_to_amount_borrow">
                                        <div style="float: left;">$50K</div>
                                        <div style="float: right;">$1M</div>
                                        <div style="clear: both;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <button type="button" id="btn-page7" class="btn btn-success btn-lg btn-page7">Next</button>
                                </div>
                            </div>
                        </div>
                        <!--END DOWN PAYMENT-->

                        <!--START WHAT IS THE BALANCE OF YOUR FIRST MORTGAGE? (only when refinance)-->
                        <div class="slider-slide" id="balance_mortgage_value_slider">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <h2>Estimate the balance of your first and second mortgage</h2>
                                    <input type="hidden" id="loan_balance" name="loan_balance" value="" class="form-control input-lg"/>

                                    <div id="balance_mortgage_value_text"></div>
                                    <div id="balance_mortgage_estimated_value"></div>
                                    <div class="next_to_amount_borrow">
                                        <div style="float: left;">$50K</div>
                                        <div style="float: right;">$1M</div>
                                        <div style="clear: both;"></div>
                                    </div>
                                    <h3 id="ltv_value">LTV : <span id="ltv">100</span>%</h3>
                                    <div id="ltv_description" style="border:solid red; background:white; padding-top: 3px; padding-bottom: 3px; margin-top: 3px;">
                                        <h5>Your mortgage balance is too high compared with your estimated property value. Please lower your estimated mortgage balance or increase your estimated property value by going back</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">

                                    <button type="button" id="btn-page62" class="btn btn-success btn-lg btn-page62" disabled>Next</button>
                                </div>
                                <div class="col-xs-12">
                                    <button type="button" id="btn-page62back" class="btn  btn-lg btn-page62-back">
                                        <strong>Back</strong></button>
                                </div>
                            </div>
                        </div>
                        <!--END WHAT IS THE BALANCE OF YOUR FIRST MORTGAGE? (only when refinance)-->

                        <!-- START Do YOU HAVE SECOND MORTGAGE? (only when refinance)-->
                        <div class="slider-slide" id="second_mortgage_slider">

                            <div id="second_mortgage_part1">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <h2>Do you have a second mortgage?</h2>
                                        <input type="hidden" id="second_mortgage" name="second_mortgage" value="NO" class="form-control input-lg"/>
                                        <div class="col-sm-6 col-xs-12">
                                            <button type="button" class="btn btn-success btn-block btn-lg btn-page63" data-value="YES">Yes</button>
                                        </div>

                                        <div class="col-sm-6 col-xs-12">
                                            <button type="button" class="btn btn-success btn-block btn-lg btn-page64" data-value="NO">No</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div style="display:none" id="second_mortgage_part2">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <h2>What is the balance of your second mortgage?</h2>
                                        <input type="hidden" id="balance_second_mortgage_value" name="balance_second_mortgage_value" value="" class="form-control input-lg"/>

                                        <div id="balance_second_mortgage_value_text"></div>
                                        <div id="balance_second_mortgage_estimated_value"></div>
                                        <div class="next_to_amount_borrow">
                                            <div style="float: left;">$10K</div>
                                            <div style="float: right;">$1M</div>
                                            <div style="clear: both;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <button type="button" id="btn-page64" class="btn btn-success btn-lg btn-page64">Next</button>
                                    </div>
                                </div>
                            </div>
                            <!-- END Do YOU HAVE SECOND MORTGAGE? (only when refinance)-->

                            <!--START FHA loan (only when refinance)-->
                            <div class="slider-slide" id="fha_loan_slider">
                                <div class="row">
                                    <input name="fha_loan" id="fha_loan" type="hidden" value="No">

                                    <div class="col-md-6 col-md-offset-3">
                                        <h2 style="text-align: center;">Do you currently have an FHA loan?</h2>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <button style="font-size:18px !important; margin-top: 20px !important; padding: 10px 16px!important;" type="button" id="btn-page65" data-value="Yes" class="btn btn-success btn-block btn-lg btn-page65">Yes</button>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <button style="font-size:18px !important; margin-top: 20px !important; padding: 10px 16px!important;" type="button" id="btn-page65" data-value="No" class="btn btn-block btn-success btn-lg btn-page65">No</button>
                                    </div>
                                    <div class="col-sm-12 col-xs-12">
                                        <button style="font-size:18px !important; margin-top: 20px !important; padding: 10px 16px!important;" type="button" id="btn-page65" data-value="No" class="btn btn-block btn-success btn-lg btn-page65">I don't know</button>
                                    </div>
                                </div>
                            </div>
                            <!--END LOAN FHA loan (only when refinance)-->

                            <!--START LOAN BALANCE (only when refinance)-->
                            <div class="slider-slide" id="loan_balance_slider">
                                <div class="row">
                                    <input name="additional_cash" id="additional_cash" type="hidden" value="5000">

                                    <div class="col-md-6 col-md-offset-3">
                                        <h2 style="text-align: center;">Would you like to borrow at least an additional $5,000 in cash upon closing</h2>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <button style="font-size:18px !important; margin-top: 20px !important; padding: 10px 16px!important;" type="button" id="btn-page7" data-value=5000 class="btn btn-success btn-block btn-lg btn-page7">Yes</button>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <button style="font-size:18px !important; margin-top: 20px !important; padding: 10px 16px!important;" type="button" id="btn-page7" data-value=0 class="btn btn-block btn-success btn-lg btn-page7">No</button>
                                    </div>
                                </div>
                            </div>
                            <!--END LOAN BALANCE (only when refinance)-->

                            <!--START DETAILS -->
                            <div class="slider-slide" id="name_slide">
                                <input type="hidden" name="page_track_name" value="1"/>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div style="font-weight:bold;">
                                            <p>Please Fill Out Information Below so You Can Receive Your Results </p>
                                        </div>
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
                                        <input type="email" id="email" name="email" class="form-control input-lg" required data-parsley-error-message="Please enter a valid email" data-parsley-group="block5" placeholder="Enter Your Email"/>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        Phone
                                        <input type="tel" id="phone" name="phone" class="form-control input-lg" required data-parsley-usphone="1" data-parsley-error-message="Please enter a valid phone with area code" data-parsley-group="block5" data-parsley-minlength="10" data-parsley-maxlength="14" placeholder="Enter Your Phone (With Area Code)"/>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        Street Address
                                        <input type="text" id="address2" name="address2" class="form-control input-lg" disabled/>
                                    </div>
                                </div>
                                <input type="hidden" id="state" name="state" class="form-control input-lg" readonly>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <button type="button" class="btn btn-success btn-lg btn-page5">Get Results</button>

                                        </br> </br>
                                        <!-- begin tcpa-->
                                        <div style="color:gray; font-size: 10px;">
                                            <div id="tcpa">
                                                <input type="hidden" id="leadid_tcpa_disclosure"/>
                                                <label for="leadid_tcpa_disclosure">
                                                    I agree to be contacted through automated means (e.g. autodialing, text and pre-recorded messaging) via telephone, mobile device (including SMS and MMS) and/or email, even if it is a cellular phone number or other service for which the called/messaged person(s) could be charged for such contact & even if your telephone number is currently listed on any state, federal or corporate Do Not Call registry. Consent is not required to purchase goods or services. You'll receive approximately 4 messages every month. Message & Data Rates May Apply. REPLY "HELP" FOR HELP, REPLY "STOP" TO CANCEL. You agree to Terms & Conditions and Privacy Policy. </label>
                                            </div>
                                            <!-- end tcpa-->
                                            <input id="city" name="city" type="hidden" value=""/>
                                            <input type="hidden" class="it" name="keyword" id="keyword" value="gosa"/>
                                            <input type="hidden" id="adid" name="adid" value="<?php echo $adid; ?>"/>
                                            <input type="hidden" id="kwid" name="kwid" value="<?php echo $kwid; ?>"/>
                                            <input type="hidden" id="fbid" name="fbid" value="<?php echo $fbid;?>"/>
                                            <input type="hidden" name="SR_TOKEN">
                                            <input id="leadid_token" name="universal_leadid" type="hidden" value=""/>
                                            <input type="hidden" name="page" value="smartsavings.today/rfn/1/index3.php"/>

                                            <input type="hidden" name="st-t-val" id="st-t" value="<?php
											if ( isset( $_GET['st-t'] ) ) {
												echo $_GET['st-t'];
											} else {
												echo '';
											}
											?>"/>
                                            <input type="hidden" id="st-custom-id" name="st-custom-id-val" value="<?php
											if ( isset( $_GET['_st_custom_id'] ) ) {
												echo $_GET['_st_custom_id'];
											} else {
												echo '';
											}
											?>"/>
                                            <input type="hidden" id="st-custom-value" name="st-custom-value-val" value="<?php
											if ( isset( $_GET['_st_custom_value'] ) ) {
												echo $_GET['_st_custom_value'];
											} else {
												if ( isset( $_GET['subid'] ) ) {
													echo $_GET['subid'];
												} else {
													echo '';
												}
											}
											?>"/>
                                            <input type="hidden" name="click_id" id="click_id" value="<?php
											if ( isset( $_GET['click_id'] ) ) {
												echo $_GET['click_id'];
											} else {
												echo '';
											}
											?>"/>
                                            <input type="hidden" name="sub_id" id="sub_id" value="<?php
											if ( isset( $_GET['sub_id'] ) ) {
												echo $_GET['sub_id'];
											} else {
												echo '';
											}
											?>"/>
                                            <input type="hidden" name="type" id="type" value="<?php
											if ( isset( $_GET['type'] ) ) {
												echo $_GET['type'];
											} else {
												echo 49;
											}
											?>"/>

                                        </div>
                                    </div>
                                </div>
                                <!--END DETAILS -->


                                <div class="slider-slide" id="thankyou_slide">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h2>Thank You</h2>
                                            <div>Please Wait...</div>
                                            <br><br>
                                            <img src="images/loader.gif"/>
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
            </form>


            <!--Place this script between </form> and </body>-->
            <script>
                dataLayer = [{
                    'a': '40203', 'i': '18530'
                }];
            </script>
            <noscript>
                <iframe src="//www.googletagmanager.com/ns.html?id=GTM-KCMVZ6" height="0" width="0" style="display:none;visibility:hidden"></iframe>
            </noscript>
            <script>(function (w, d, s, l, i) {
                    w[l] = w[l] || [];
                    w[l].push({
                        'gtm.start':
                            new Date().getTime(), event: 'gtm.js'
                    });
                    var f = d.getElementsByTagName(s)[0], j = d.createElement(s),
                        dl = l != 'dataLayer' ? '&l=' + l : '';
                    j.async = true;
                    j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
                    f.parentNode.insertBefore(j, f);
                })(window, document, 'script', 'dataLayer', 'GTM-KCMVZ6');</script>
            <!--end SR tag-->


        </div>
        <div id="sub_footer">
            <div class="row">
                <div class="col-xs-12">
                    <p>To qualify for the instance acceptance program you must answer a few questions. Please answer the questions <b>truthfully.</b>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div style="opacity: 0.8; margin-top: 10px; margin-bottom: 30px; width: 280px;" class="center-block">

        <img src="images/SecureSeal.png"/>
    </div>
    <div style="padding-bottom: 10px; padding-top: 10px; background-color: #f2f2f2; color:#999999;">
        <strong></strong></br>
    </div>

    </div>

    <script type='text/javascript' src='js/jquery.nouislider.all.min.js'></script>
    <script type="text/javascript" src="js/moment.min.js"></script>

    <script type="text/javascript">
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
            $('.btn-page4').removeAttr('disabled');
        });
    </script>
    <script type="text/javascript">
        var CETtime = parseInt(moment().utcOffset(120).format('H'));
        if (CETtime >= 17 || CETtime < 2) {
            console.log('Open hours!');
            $('#call_service').show();
        }
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
    <script type="text/javascript" src="js/parsley.min.js"></script>
    <script type="text/javascript" src="js/formslider.js"></script>
    <script type='text/javascript'>
        // 	    var hidePopup = false;
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
                    'start': ["50"],
                    'connect': 'lower',
                    'range': {
                        'min': [8],
                        'max': [200]
                    },
                    'step': 1
                });

                var thirdSlider = document.getElementById("balance_mortgage_estimated_value");
                noUiSlider.create(thirdSlider, {
                    'start': ["34"],
                    'connect': 'lower',
                    'range': {
                        'min': [5],
                        'max': [99]
                    },
                    'step': 1
                });

                secondSlider.noUiSlider.on('update', function () {
                    var z = secondSlider.noUiSlider.get();
                    $('#estimated_value_text').html('$' + commafy(z * 10000));
                    $('#property_value').val(z * 10000);

                    //ltv calculation
                    var x = thirdSlider.noUiSlider.get();
                    var ltv = Math.floor((x / z) * 100);
                    if (ltv > 105) {
                        $('.btn-page62').prop('disabled', true);
                        $('#ltv').css({ "color": "red" });
                        $("#ltv_description").show();
                        $("#ltv_value").hide();

                    } else {
                        $('.btn-page62').removeAttr('disabled');
                        $('#ltv').css({ "color": "black" });
                        $("#ltv_description").hide();
                        $("#ltv_value").hide();
                    }


                });


                thirdSlider.noUiSlider.on('update', function () {
                    var z = secondSlider.noUiSlider.get();
                    var x = thirdSlider.noUiSlider.get();
                    $('#balance_mortgage_value_text').html('$' + commafy(x * 10000));
                    $('#loan_balance').val(x * 10000);
                    $('#ltv').html(Math.floor((x / z) * 100));
                    var ltv = Math.floor((x / z) * 100);
                    if (ltv > 105) {
                        $('.btn-page62').prop('disabled', true);
                        $('#ltv').css({ "color": "red" });
                        $("#ltv_description").show();
                        $("#ltv_value").hide();

                    } else {
                        $('.btn-page62').removeAttr('disabled');
                        $('#ltv').css({ "color": "black" });
                        $("#ltv_description").hide();
                        $("#ltv_value").hide();
                    }

                });

                var fourthSlider = document.getElementById("balance_second_mortgage_estimated_value");
                noUiSlider.create(fourthSlider, {
                    'start': ["50"],
                    'connect': 'lower',
                    'range': {
                        'min': [1],
                        'max': [99]
                    },
                    'step': 1
                });
                fourthSlider.noUiSlider.on('update', function () {
                    var x = fourthSlider.noUiSlider.get();
                    $('#balance_second_mortgage_value_text').html('$' + commafy(x * 10000));
                    $('#balance_second_mortgage_value').val(x * 10000);
                });

                var fifthSlider = document.getElementById("estimated_down_payment_value");
                noUiSlider.create(fifthSlider, {
                    'start': ["50"],
                    'connect': 'lower',
                    'range': {
                        'min': [5],
                        'max': [99]
                    },
                    'step': 1
                });
                fifthSlider.noUiSlider.on('update', function () {
                    var x = fifthSlider.noUiSlider.get();
                    $('#estimated_down_payment_value_text').html('$' + commafy(x * 10000));
                    $('#down_payment_value').val(x * 10000);
                });
            });

            $('#apply_form').parsley();

            var slider = $('#flow-slider-container').unslider({
                'initialElement': $('<?php echo $start_slide;?>')
            });

            var slider_data = slider.data('unslider');

            $('#apply_form input').on('keypress', function (e) {

                e.stopPropagation();
                if (e.keyCode == 13) {

                    return false;
                    /* var page_idx = ($(this).closest('.slider-slide').index() + 1);
                    $('.btn-page' + page_idx).trigger('click'); */
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

            /*Refinance or Purchase?*/
            var loan_type = "<?php echo $loan_type; ?>";
            $('.btn-page1').on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                loan_type = $(this).data('value');
                $('#loan_type').val(loan_type);

                if ($('#apply_form').parsley().validate('block1') === true) {
                    var $slider_item = $(this).closest('.slider-slide');
                    var serialized_section = $slider_item.find(':input').serialize();


                    if (loan_type == "Purchase") {
                        console.log("FB Tracking LP-stage-1-Purchase Start!");
                        fbq('track', "LP-stage-1-Purchase");
                        console.log("FB Tracking LP-stage-1-Purchase Ends!");
                    } else {
                        console.log("FB Tracking LP-stage-1-Refinance Start!");
                        fbq('track', "LP-stage-1-Refinance");
                        console.log("FB Tracking LP-stage-1-Refinance Ends!");
                    }

                    fbq('track', "ViewContent");

                    $("#survey_headline").hide();
                    $("#survey_headline_slide2").show();
                    $('.form-progress-bar').css({ 'width': '10%' });
                    slider_data.move('#property_type_slide');
                }
            });

            /*property type*/
            $('.btn-page2').on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                var newval = $(this).data('value');
                $('#property_type').val(newval);
                /*$('#car-select').val(this.value);*/
                if ($('#apply_form').parsley().validate('block1') === true) {
                    var $slider_item = $(this).closest('.slider-slide');
                    var serialized_section = $slider_item.find(':input').serialize();

                    if (loan_type == "Purchase") {
                        console.log("FB Tracking LP-stage-2-Purchase Start!");
                        fbq('track', "LP-stage-2-Purchase");
                        console.log("FB Tracking LP-stage-2-Purchase Ends!");
                    } else {
                        console.log("FB Tracking LP-stage-2-Refinance Start!");
                        fbq('track', "LP-stage-2-Refinance");
                        console.log("FB Tracking LP-stage-2-Refinance Ends!");
                    }

                    fbq('track', "Search");

                    $("#survey_headline_slide2").hide();
                    $("#survey_headline_slide25").show();

                    $('.form-progress-bar').css({ 'width': '20%' });
                    slider_data.move('#loan_type_fixed_or_adjustable_slide');
                }
            });

            /*loan_type_fixed_or_adjustable*/
            $('.btn-page25').on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                console.log("btn-page25");

                var newval = $(this).data('value');
                $('#loan_type_fixed_or_adjustable').val(newval);
                /*$('#car-select').val(this.value);*/

                var $slider_item = $(this).closest('.slider-slide');
                var serialized_section = $slider_item.find(':input').serialize();

                if (loan_type == "Purchase") {
                    console.log("FB Tracking LP-stage-3-Purchase Start!");
                    fbq('track', "LP-stage-3-Purchase");
                    console.log("FB Tracking LP-stage-3-Purchase Ends!");
                } else {
                    console.log("FB Tracking LP-stage-3-Refinance Start!");
                    fbq('track', "LP-stage-3-Refinance");
                    console.log("FB Tracking LP-stage-3-Refinance Ends!");
                }

                $("#survey_headline_slide25").hide();
                $("#survey_headline_slide26").show();

                $('.form-progress-bar').css({ 'width': '30%' });
                slider_data.move('#va_status_slide');

            });

            /*loan_type_fixed_or_adjustable*/
            $('.btn-page26').on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                console.log("btn-page26");

                var newval = $(this).data('value');
                $('#va_status').val(newval);
                /*$('#car-select').val(this.value);*/

                var $slider_item = $(this).closest('.slider-slide');
                var serialized_section = $slider_item.find(':input').serialize();

                if (loan_type == "Purchase") {
                    console.log("FB Tracking LP-stage-4-Purchase Start!");
                    fbq('track', "LP-stage-4-Purchase");
                    console.log("FB Tracking LP-stage-4-Purchase Ends!");
                } else {
                    console.log("FB Tracking LP-stage-4-Refinance Start!");
                    fbq('track', "LP-stage-4-Refinance");
                    console.log("FB Tracking LP-stage-4-Refinance Ends!");
                }

                if (newval == 'Yes') {
                    console.log("FB Tracking LP-stage-4-VA-Status-YES Start!");
                    fbq('track', "LP-stage-4-VA-Status-YES");
                    console.log("FB Tracking LP-stage-4-VA-Status-YES Ends!");
                } else {
                    console.log("FB Tracking LP-stage-4-VA-Status-NO Start!");
                    fbq('track', "LP-stage-4-VA-Status-NO");
                    console.log("FB Tracking LP-stage-4-VA-Status-NO Ends!");
                }


                $("#survey_headline_slide26").hide();
                $("#survey_headline_slide3").show();

                $('.form-progress-bar').css({ 'width': '35%' });
                slider_data.move('#credit_type_slide');

            });

            /*credit*/
            $('.btn-page3').on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                var newval = $(this).data('value');
                $('#credit').val(newval);
                /*$('#car-select').val(this.value);*/
                if ($('#apply_form').parsley().validate('block1') === true) {
                    var $slider_item = $(this).closest('.slider-slide');
                    var serialized_section = $slider_item.find(':input').serialize();

                    if (loan_type == "Purchase") {
                        console.log("FB Tracking LP-stage-5-Purchase Start!");
                        fbq('track', "LP-stage-5-Purchase");
                        console.log("FB Tracking LP-stage-5-Purchase Ends!");
                    } else {
                        console.log("FB Tracking LP-stage-5-Refinance Start!");
                        fbq('track', "LP-stage-5-Refinance");
                        console.log("FB Tracking LP-stage-5-Refinance Ends!");
                    }

                    if (newval == 'Good') {
                        console.log("FB Tracking LP-stage-5-Credit-Good Start!");
                        fbq('track', "LP-stage-5-Credit-Good");
                        console.log("FB Tracking LP-stage-5-Credit-Good Ends!");
                    } else if (newval == 'Excellent') {
                        console.log("FB Tracking LP-stage-5-Credit-Excellent Start!");
                        fbq('track', "LP-stage-5-Credit-Excellent");
                        console.log("FB Tracking LP-stage-5-Credit-Excellent Ends!");
                    } else if (newval == 'Fair') {
                        console.log("FB Tracking LP-stage-5-Credit-Fair Start!");
                        fbq('track', "LP-stage-5-Credit-Fair");
                        console.log("FB Tracking LP-stage-5-Credit-Fair Ends!");
                    } else {
                        console.log("FB Tracking LP-stage-5-Credit-Poor Start!");
                        fbq('track', "LP-stage-5-Credit-Poor");
                        console.log("FB Tracking LP-stage-5-Credit-Poor Ends!");
                    }

                    $("#survey_headline_slide3").hide();

                    $('.form-progress-bar').css({ 'width': '40%' });
                    if (loan_type == "Purchase") {
                        slider_data.move('#found_home_slide');
                        $("#survey_headline_slide31").show();
                    } else {
                        $("#survey_headline_slide4").show();
                        slider_data.move('#zip_slide');

                    }

                }
            });

            /*found a home?*/
            $('.btn-page31').on('click', function (e) {
                e.stopPropagation();
                e.preventDefault();
                var newval = $(this).data('value');
                $('#found_home').val(newval);

                if ($('#apply_form').parsley().validate('block3') === true) {
                    var $slider_item = $(this).closest('.slider-slide');
                    var serialized_section = $slider_item.find(':input').serialize();

                    if (loan_type == "Purchase") {
                        console.log("FB Tracking LP-stage-6-Purchase Start!");
                        fbq('track', "LP-stage-6-Purchase");
                        console.log("FB Tracking LP-stage-6-Purchase Ends!");
                    } else {
                    }

                    $("#survey_headline_slide31").hide();
                    $("#survey_headline_slide32").show();

                    $('.form-progress-bar').css({ 'width': '45%' });
                    slider_data.move('#prop_state_slide');
                }
            });

            /*prop_state_slide*/
            $('.btn-page32').on('click', function (e) {
                e.stopPropagation();
                e.preventDefault();


                if ($('#apply_form').parsley().validate('block32') === true) {
                    var $slider_item = $(this).closest('.slider-slide');
                    var serialized_section = $slider_item.find(':input').serialize();

                    if (loan_type == "Purchase") {
                        console.log("FB Tracking LP-stage-7-Purchase Start!");
                        fbq('track', "LP-stage-7-Purchase");
                        console.log("FB Tracking LP-stage-7-Purchase Ends!");
                    }

                    $("#survey_headline_slide32").hide();
                    $("#survey_headline_slide4").show();

                    $('.form-progress-bar').css({ 'width': '50%' });
                    slider_data.move('#zip_slide');
                }
            });

            /*address*/
            $('.btn-page4').on('click', function (e) {
                e.stopPropagation();
                if ($('#apply_form').parsley().validate('block4') === true) {
                    var zip = $('#zip').val();
                    if (zip) {
                        if ($('#zip').is(':visible')) {
                            codeAddress();
                        }
                        if (loan_type == "Purchase") {
                            console.log("FB Tracking LP-stage-8-Purchase Start!");
                            fbq('track', "LP-stage-8-Purchase");
                            console.log("FB Tracking LP-stage-8-Purchase Ends!");
                        } else {
                            console.log("FB Tracking LP-stage-6-Refinance Start!");
                            fbq('track', "LP-stage-6-Refinance");
                            console.log("FB Tracking LP-stage-6-Refinance Ends!");
                        }
                        fbq('track', "AddToWishlist");

                        $("#survey_headline_slide4").hide();
                        $("#survey_headline_slide31").hide();
                        $("#survey_headline_slide5").show();

                        $('.form-progress-bar').css({ 'width': '55%' });
                        slider_data.move('#property_value_slider');
                    }
                    else {
                        alert('Please select an address from the suggestions list.');
                    }
                }
            });

            /* property value */
            $('.btn-page61').on('click', function (e) {
                e.stopPropagation();
                var newval = $(this).data('value');
                /*$('#property_value').val(newval);*/
                if ($('#apply_form').parsley().validate('block2') === true) {
                    var $slider_item = $(this).closest('.slider-slide');
                    var serialized_section = $slider_item.find(':input').serialize();

                    if (loan_type == "Purchase") {
                        console.log("FB Tracking LP-stage-9-Purchase Start!");
                        fbq('track', "LP-stage-9-Purchase");
                        console.log("FB Tracking LP-stage-9-Purchase Ends!");
                    } else {
                        console.log("FB Tracking LP-stage-7-Refinance Start!");
                        fbq('track', "LP-stage-7-Refinance");
                        console.log("FB Tracking LP-stage-7-Refinance Ends!");
                    }

                    fbq('track', "AddPaymentInfo");

                    $("#survey_headline_slide5").hide();

                    if (loan_type == "Purchase") {
                        $("#survey_headline_slide62").show();
                        slider_data.move('#down_payment_value_slider');

                    } else {
                        $("#survey_headline_slide61").show();
                        slider_data.move('#balance_mortgage_value_slider');
                    }


                    $('.form-progress-bar').css({ 'width': '60%' });
                }


            });

            /*btn-page62-back to property value */
            $('.btn-page62-back').on('click', function (e) {
                e.stopPropagation();

                $("#survey_headline_slide5").show();
                $("#survey_headline_slide61").hide();


                slider_data.move('#property_value_slider', 'left');

                $('.form-progress-bar').css({ 'width': '50%' });

            });

            /*second mortgage? */
            $('.btn-page62').on('click', function (e) {
                e.stopPropagation();
                var newval = $(this).data('value');
                /*$('#loan_balance').val(newval);*/
                if ($('#apply_form').parsley().validate('block2') === true) {
                    var $slider_item = $(this).closest('.slider-slide');
                    var serialized_section = $slider_item.find(':input').serialize();

                    if (loan_type == "Purchase") {

                    } else {
                        console.log("FB Tracking LP-stage-8-Refinance Start!");
                        fbq('track', "LP-stage-8-Refinance");
                        console.log("FB Tracking LP-stage-8-Refinance Ends!");
                    }

                    $("#survey_headline_slide61").hide();
                    $("#survey_headline_slide63").show();

                    slider_data.move('#second_mortgage_slider');

                    $('.form-progress-bar').css({ 'width': '65%' });
                }
            });

            /*do you have second mortgage*/
            $('.btn-page63').on('click', function (e) {
                e.stopPropagation();
                var newval = $(this).data('value');
                $('#second_mortgage').val(newval);

                if ($('#apply_form').parsley().validate('block2') === true) {
                    var $slider_item = $(this).closest('.slider-slide');
                    var serialized_section = $slider_item.find(':input').serialize();

                    if (loan_type == "Purchase") {

                    } else {
                        console.log("FB Tracking LP-stage-9.5-Refinance Start!");
                        fbq('track', "LP-stage-9.5-Refinance");
                        console.log("FB Tracking LP-stage-9.5-Refinance Ends!");
                    }

                    $("#second_mortgage_part1").slideUp();
                    $("#second_mortgage_part2").show();


                    $('.form-progress-bar').css({ 'width': '70%' });
                }
            });

            $('.btn-page64').on('click', function (e) {
                e.stopPropagation();
                var newval = $(this).data('value');


                if ($('#apply_form').parsley().validate('block2') === true) {
                    var $slider_item = $(this).closest('.slider-slide');
                    var serialized_section = $slider_item.find(':input').serialize();

                    if (loan_type == "Purchase") {

                    } else {
                        console.log("FB Tracking LP-stage-9-Refinance Start!");
                        fbq('track', "LP-stage-9-Refinance");
                        console.log("FB Tracking LP-stage-9-Refinance Ends!");
                    }

                    $("#survey_headline_slide63").hide();
                    $("#survey_headline_slide65").show();

                    slider_data.move('#fha_loan_slider');

                    $('.form-progress-bar').css({ 'width': '70%' });
                }
            });

//             fha
            $('.btn-page65').on('click', function (e) {
                e.stopPropagation();
                var newval = $(this).data('value');
                $('#fha_loan').val(newval);

                if ($('#apply_form').parsley().validate('block2') === true) {
                    var $slider_item = $(this).closest('.slider-slide');
                    var serialized_section = $slider_item.find(':input').serialize();

                    if (loan_type == "Purchase") {

                    } else {
                        console.log("FB Tracking LP-stage-10-Refinance Start!");
                        fbq('track', "LP-stage-10-Refinance");
                        console.log("FB Tracking LP-stage-10-Refinance Ends!");

                        if (newval == 'Yes') {
                            console.log("FB Tracking LP-stage-10-Refinance-FHA-YES Start!");
                            fbq('track', "LP-stage-10-Refinance-FHA-YES");
                            console.log("FB Tracking LP-stage-10-Refinance-FHA-YES Ends!");
                        } else {
                            console.log("FB Tracking LP-stage-10-Refinance-FHA-NO Start!");
                            fbq('track', "LP-stage-10-Refinance-FHA-NO");
                            console.log("FB Tracking LP-stage-10-Refinance-FHA-NO Ends!");
                        }
                    }

                    $("#survey_headline_slide65").hide();
                    $("#survey_headline_slide6").show();

                    slider_data.move('#loan_balance_slider');

                    $('.form-progress-bar').css({ 'width': '80%' });
                }
            });


            $('.btn-page7').on('click', function (e) {
                e.stopPropagation();

                var newval = $(this).data('value');
                $('#additional_cash').val(newval);

                if ($('#apply_form').parsley().validate('block8') === true) {
                    var $slider_item = $(this).closest('.slider-slide');
                    var serialized_section = $slider_item.find(':input').serialize();

                    if (loan_type == "Purchase") {

                    } else {
                        console.log("FB Tracking LP-stage-11-Refinance Start!");
                        fbq('track', "LP-stage-11-Refinance");
                        console.log("FB Tracking LP-stage-11-Refinance Ends!");
                    }

                    $("#survey_headline_slide6").hide();
                    $("#survey_headline_slide61").hide();
                    $("#survey_headline_slide62").hide();
                    $("#sub_footer").hide();
                    $("#survey_headline").show();

                    /*var call_request = $.ajax({
                     type: 'POST',
                     dataType: 'json',
                     data: serialized_section,
                     url: '/s'
                     });*/
                    $('.form-progress-bar').css({ 'width': '85%' });
                    slider_data.move('#name_slide');
                    /*
                                            slider_data.move('#calculate_slide');
                                            $("#animated6").show();
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
                                                console.log("FB Tracking LP-stage-7 Start!");
                                                fbq('track', "LP-stage-7");
                                                console.log("FB Tracking LP-stage-7 Ends!");
                                                $('.form-progress-bar').css({'width': '90%'});
                                                slider_data.move('#name_slide');
                                                $("#receive_info_headline").show();
                                                $("#research_headline").hide();

                                            }, 11000);
                    */
                }

            });


            $('.btn-page5').on('click', function (e) {
                e.stopPropagation();
                if ($('#apply_form').parsley().validate('block5') === true) {
                    $('.btn-page5').addClass('disabled');
                    $('.form-progress-bar').css({ 'width': '100%' });
                    slider_data.move('#thankyou_slide');
                    $("#survey_headline").hide();
                    $("#animated6").hide();

                    if (loan_type == "Purchase") {
                        console.log("FB Tracking LP-stage-10-Purchase Start!");
                        fbq('track', "LP-stage-10-Purchase");
                        console.log("FB Tracking LP-stage-10-Purchase Ends!");
                    } else {
                        console.log("FB Tracking LP-stage-12-Refinance Start!");
                        fbq('track', "LP-stage-12-Refinance");
                        console.log("FB Tracking LP-stage-12-Refinance Ends!");
                    }
                    $("#receive_info_headline").show();
                    $('#apply_form').trigger('submit');


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


            $("#ssn").keydown(function (e) {
                // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                    // Allow: Ctrl+A, Command+A
                    (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                    // Allow: home, end, left, right, down, up
                    (e.keyCode >= 35 && e.keyCode <= 40)) {
                    // let it happen, don't do anything
                    return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
                if ($('#ssn').val().length == 3 || $('#ssn').val().length == 6) {
                    var curVal = $('#ssn').val();
                    $('#ssn').val(curVal + '-');
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

    <script src="https://geoapi123.appspot.com"></script>

    <script type="text/javascript">
        (function ($) {

            $.getJSON("https://free-solarenergyquotes.com/geoapi/", function (data) {
                $.each(data, function (l, city) {
                    if (l == 'city') {
                        var city = city;
                        document.getElementById("city").innerHTML = city;
                    }
                    ;
                    if (l == 'state') {
                        var state = city;

                        console.log(state);
                        if (state == 'AK' || state == 'AZ' || state == 'AR' || state == 'CA' || state == 'CO' || state == 'CT' || state == 'DE' || state == 'DC' || state == 'FL' || state == 'GA' || state == 'HI' || state == 'ID' || state == 'IL' || state == 'IN' || state == 'IA' || state == 'KS' || state == 'KY' || state == 'LA' || state == 'ME' || state == 'MD' || state == 'MA' || state == 'MI' || state == 'MN' || state == 'MS' || state == 'MO' || state == 'MT' || state == 'NE' || state == 'NV' || state == 'NH' || state == 'NJ' || state == 'NM' || state == 'NY' || state == 'NC' || state == 'ND' || state == 'OH' || state == 'OK' || state == 'OR' || state == 'PA' || state == 'RI' || state == 'SC' || state == 'SD' || state == 'TN' || state == 'TX' || state == 'UT' || state == 'VT' || state == 'VA' || state == 'WA' || state == 'WV' || state == 'WI' || state == 'WY') {

                            $('#prop_state').val(state);
                        }
                        ;

                    }
                    ;
                });
            });

            var statecurrent = (typeof geoip_region_name == typeof Function && geoip_region_name() != "") ? geoip_region_name() : "";

            document.getElementById("statecurrent").innerHTML = statecurrent;


            $.fn.countTo = function (options) {
                options = options || {};


                return $(this).each(function () {
                    // set options for current element
                    var settings = $.extend({}, $.fn.countTo.defaults, {
                        from: $(this).data('from'),
                        to: $(this).data('to'),
                        speed: $(this).data('speed'),
                        refreshInterval: $(this).data('refresh-interval'),
                        decimals: $(this).data('decimals')
                    }, options);

                    // how many times to update the value, and how much to increment the value on each update
                    var loops = Math.ceil(settings.speed / settings.refreshInterval),
                        increment = (settings.to - settings.from) / loops;

                    // references & variables that will change with each update
                    var self = this,
                        $self = $(this),
                        loopCount = 0,
                        value = settings.from,
                        data = $self.data('countTo') || {};

                    $self.data('countTo', data);

                    // if an existing interval can be found, clear it first
                    if (data.interval) {
                        clearInterval(data.interval);
                    }
                    data.interval = setInterval(updateTimer, settings.refreshInterval);

                    // initialize the element with the starting value
                    render(value);

                    function updateTimer() {
                        value += increment;
                        loopCount++;

                        render(value);

                        if (typeof (settings.onUpdate) == 'function') {
                            settings.onUpdate.call(self, value);
                        }

                        if (loopCount >= loops) {
                            // remove the interval
                            $self.removeData('countTo');
                            clearInterval(data.interval);
                            value = settings.to;

                            if (typeof (settings.onComplete) == 'function') {
                                settings.onComplete.call(self, value);
                            }
                        }
                    }

                    function render(value) {
                        var formattedValue = settings.formatter.call(self, value, settings);
                        $self.html(formattedValue);
                    }
                });
            };

            $.fn.countTo.defaults = {
                from: 0, // the number the element should start at
                to: 0, // the number the element should end at
                speed: 1000, // how long it should take to count between the target numbers
                refreshInterval: 100, // how often the element should be updated
                decimals: 0, // the number of decimal places to show
                formatter: formatter, // handler for formatting the value before rendering
                onUpdate: null, // callback method for every time the element is updated
                onComplete: null       // callback method for when the element finishes updating
            };

            function formatter(value, settings) {
                return value.toFixed(settings.decimals);
            }
        }(jQuery));

        jQuery(function ($) {
            // custom formatting example
            $('#count-number').data('countToOptions', {
                formatter: function (value, options) {
                    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                }
            });

            // start all the timers
            $('.timer').each(count);

            function count(options) {
                var $this = $(this);
                options = $.extend({}, options || {}, $this.data('countToOptions') || {});
                $this.countTo(options);
            }
        });
    </script>
@endsection


<?php
$landingPage = 'smartsavings.today/rfn/1/index.php';
$angle = 'smartsavings.today/rfn/1/index.php';
$SRC = 'Internal-Data';
$TYPE = '53';
$Lead_Type = 'RFN';
$poptext = "To not miss out on special new updates about saving money with your home type in your email and press the orange button!";
$headline = "Ready to save money?";
//include('mailer/inputs_nomail.php');

?>
