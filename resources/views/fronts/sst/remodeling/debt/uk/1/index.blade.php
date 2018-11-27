@extends('layouts.empty')
@section('title','Take the Quiz to See if you Qualify')
@section('header-middle-img','/images/debt.png')
@section('head')
    @parent
    <link href='/fonts/debt/stylesheet.css' rel='stylesheet' type='text/css' />
    <link href='/css/debt/layout.css' rel='stylesheet' type='text/css' />
    <link href='/css/debt/form.css' rel='stylesheet' type='text/css' />
    <link href='/css/debt/simple-slider-volume.css' rel='stylesheet' type='text/css' />
    <link href='/css/debt/portBox.css' rel='stylesheet' type='text/css' />

    <script type="text/javascript" src="/js/debt/main.js"></script>
    <script src="/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="/js/simple-slider.js"></script>
    <script src="/js/portBox.slimscroll.min.js"></script>
    <style>
        #step-2, #step-3, #step-4, #step-5, #step-6, #step-7{
            display: none;
        }
    </style>
@endsection


@section('content')

    <div id="top"></div>
    <div id="splashArea">
        <div class="contentContainer">
            <div class="splashImageContainer">
                <img id="reviewCentreImage" src="/images/debt/splash-bg-3.png" usemap="#reviewCentreImageMap">

            </div>

            <div class="formPanelContainer" id="formContainer">
                <form action="/remodeling/debt/1/uk" method="post" id="indexForm">
                    {{ csrf_field() }}

                    <input type="hidden" name="_submit" value="1"/>
                    <div id="step-1">
                        <div class="formPanelHeader">
                            Start here <div class="formArrow"><img src="/images/debt/form-arrow.png" /></div>
                        </div>


                        <div class="formPanel">
                            <div class="formRow1Col">
                                <div class="title">How much do you owe?</div>
                            </div>

                            <div class="formRow2Col">
                                <input type="text" data-slider="true" data-slider-highlight="true" data-slider-theme="volume" data-slider-range="0,25000" data-slider-step="1000" name="debt_amount" id="debtLevel" value="0" required>
                            </div><!-- end formRow2Col -->

                            <div class="formRow2Col2 RepayFigure" id="debtLevelDisplay">
                                &pound;0						</div><!-- end formRow2Col2 -->

                            <div class="clear"></div>

                            <label class="field-validation-error hidden" for="debtLevel" id="debtLevelError">The minimum level of debt we can help with is £6000.</label>

                            <div class="clear"></div>

                            <div class="formRow1Col">
                                <div class="title">How many debts do you have?</div>
                            </div>

                            <div class="formRow2Col">
                                <input type="text" data-slider="true" value="0" data-slider-highlight="true" data-slider-theme="volume" data-slider-range="0,10" data-slider-step="1" name="num_debts" id="numDebts" value="0" required>
                            </div><!-- end formRow2Col -->

                            <div class="formRow2Col2 RepayFigure" id="numDebtsDisplay">
                                0						</div><!-- end formRow2Col2 -->

                            <div class="clear"></div>

                            <label class="field-validation-error hidden" for="numDebts" id="numDebtsError">The minimum number of debts we can help with is 2.</label>

                            <div class="clear"></div>

                            <div class="appButtonWrapper">
                                <input type="hidden" name="referringPage" id="referringPage" value="1">
                                <input type="hidden" name="repayMonth" id="repayMonth" value="80">

                                @include('fronts.sst._common.hidden_fields')

                                <input type="submit" id="submit-1" class="formButton" value="Next">
                            </div>

                            <div style="text-align: center;">
                                Safe, Secure &amp; Confidential
                            </div>
                        </div>
                    </div>

                    <div id="step-2">
                        <div class="formPanelHeader">
                            Step 2 of 6 <div class="formArrow"><img src="/images/debt/form-arrow.png"></div>
                        </div>
                            <div class="formPanel">
                                <div class="formRow1Col">
                                    <div class="title">Are you behind on bills?</div>
                                </div>

                                <div class="clear" style="height: 20px;"></div>

                                <div class="tickContainer">
                                    <input type="radio" name="behind_on_bills" id="behindOnBillsNo" class="css-checkbox1" value="0">
                                    <label for="behindOnBillsNo" class="css-label1"></label>
                                </div>

                                <div class="tickContainerText">
                                    No
                                </div>

                                <div class="clear" style="height: 10px;"></div>

                                <div class="tickContainer">
                                    <input type="radio" name="behind_on_bills" id="behindOnBills29" class="css-checkbox1" value="29">
                                    <label for="behindOnBills29" class="css-label1"></label>
                                </div>

                                <div class="tickContainerText">
                                    Yes, 30 Days
                                </div>

                                <div class="clear" style="height: 10px;"></div>

                                <div class="tickContainer">
                                    <input type="radio" name="behind_on_bills" id="behindOnBills59" class="css-checkbox1" value="59">
                                    <label for="behindOnBills59" class="css-label1"></label>
                                </div>

                                <div class="tickContainerText">
                                    Yes, 30 - 60 Days
                                </div>

                                <div class="clear" style="height: 10px;"></div>

                                <div class="tickContainer">
                                    <input type="radio" name="behind_on_bills" id="behindOnBills89" class="css-checkbox1" value="89">
                                    <label for="behindOnBills89" class="css-label1"></label>
                                </div>

                                <div class="tickContainerText">
                                    Yes, 60 - 90 Days
                                </div>

                                <div class="clear" style="height: 10px;"></div>

                                <div class="tickContainer">
                                    <input type="radio" name="behind_on_bills" id="behindOnBills90" class="css-checkbox1" value="90">
                                    <label for="behindOnBills90" class="css-label1"></label>
                                </div>

                                <div class="tickContainerText">
                                    Yes, More than 90 Days
                                </div>

                                <div class="clear" style="height: 20px;"></div>

                                <label class="field-validation-error hidden" for="behindOnBills" id="behindOnBillsError">Please select an option from the above.</label>

                                <div class="clear" style="height: 0px;"></div>

                                <div class="appButtonWrapper">
                                    <input type="hidden" name="referringPage" value="2">
                                    <input type="submit" id="submit-2" class="formButton" value="Next">
                                </div>

                                <div style="text-align: center;">
                                    Safe, Secure &amp; Confidential
                                </div>

                            </div>

                    </div>

                    <div id="step-3">
                        <div class="formPanelHeader">
                            Step 3 of 6 <div class="formArrow"><img src="/images/debt/form-arrow.png"></div>
                        </div>
                            <div class="formPanel">
                                <div class="formRow1Col">
                                    <div class="title">How do you rate your credit?</div>
                                </div>

                                <div class="clear" style="height: 20px;"></div>

                                <div class="tickContainer">
                                    <input type="radio" name="credit" id="creditRatingExcellent" class="css-checkbox1" value="excellent">
                                    <label for="creditRatingExcellent" class="css-label1"></label>
                                </div>

                                <div class="tickContainerText">
                                    Excellent
                                </div>

                                <div class="clear" style="height: 10px;"></div>

                                <div class="tickContainer">
                                    <input type="radio" name="credit" id="creditRatingGood" class="css-checkbox1" value="good">
                                    <label for="creditRatingGood" class="css-label1"></label>
                                </div>

                                <div class="tickContainerText">
                                    Good
                                </div>

                                <div class="clear" style="height: 10px;"></div>

                                <div class="tickContainer">
                                    <input type="radio" name="credit" id="creditRatingFair" class="css-checkbox1" value="fair">
                                    <label for="creditRatingFair" class="css-label1"></label>
                                </div>

                                <div class="tickContainerText">
                                    Fair
                                </div>

                                <div class="clear" style="height: 10px;"></div>

                                <div class="tickContainer">
                                    <input type="radio" name="credit" id="creditRatingPoor" class="css-checkbox1" value="poor">
                                    <label for="creditRatingPoor" class="css-label1"></label>
                                </div>

                                <div class="tickContainerText">
                                    Poor
                                </div>

                                <div class="clear" style="height: 10px;"></div>

                                <div class="tickContainer">
                                    <input type="radio" name="credit" id="creditRatingVeryPoor" class="css-checkbox1" value="veryPoor">
                                    <label for="creditRatingVeryPoor" class="css-label1"></label>
                                </div>

                                <div class="tickContainerText">
                                    Very Poor
                                </div>

                                <div class="clear" style="height: 20px;"></div>

                                <label class="field-validation-error hidden" for="creditRating" id="creditRatingError">Please select an option from the above.</label>

                                <div class="clear" style="height: 0px;"></div>

                                <div class="appButtonWrapper">
                                    <input type="hidden" name="referringPage" value="3">
                                    <input type="submit" id="submit-3" class="formButton" value="Next">
                                </div>

                                <div style="text-align: center;">
                                    Safe, Secure &amp; Confidential
                                </div>
                            </div>

                    </div>

                    <div id="step-4">
                        <div class="formPanelHeader">
                            Step 4 of 6 <div class="formArrow"><img src="/images/debt/form-arrow.png"></div>
                        </div>
                            <div class="formPanel">
                                <div class="formRow1Col">
                                    <div class="title">What is your employment status?</div>
                                </div>

                                <div class="clear" style="height: 20px;"></div>

                                <div class="tickContainer">
                                    <input type="radio" name="employment_status" id="employmentStatusEmployed" class="css-checkbox1" value="employed">
                                    <label for="employmentStatusEmployed" class="css-label1"></label>
                                </div>

                                <div class="tickContainerText">
                                    Employed
                                </div>

                                <div class="clear" style="height: 10px;"></div>

                                <div class="tickContainer">
                                    <input type="radio" name="employment_status" id="employmentStatusSelfEmployed" class="css-checkbox1" value="selfEmployed">
                                    <label for="employmentStatusSelfEmployed" class="css-label1"></label>
                                </div>

                                <div class="tickContainerText">
                                    Self Employed
                                </div>

                                <div class="clear" style="height: 10px;"></div>

                                <div class="tickContainer">
                                    <input type="radio" name="employment_status" id="employmentStatusPension" class="css-checkbox1" value="pension">
                                    <label for="employmentStatusPension" class="css-label1"></label>
                                </div>

                                <div class="tickContainerText">
                                    Pension
                                </div>

                                <div class="clear" style="height: 10px;"></div>

                                <div class="tickContainer">
                                    <input type="radio" name="employment_status" id="employmentStatusStateBenefits" class="css-checkbox1" value="stateBenefits">
                                    <label for="employmentStatusStateBenefits" class="css-label1"></label>
                                </div>

                                <div class="tickContainerText">
                                    State Benefits
                                </div>

                                <div class="clear" style="height: 10px;"></div>

                                <div class="tickContainer">
                                    <input type="radio" name="employment_status" id="employmentStatusOther" class="css-checkbox1" value="other">
                                    <label for="employmentStatusOther" class="css-label1"></label>
                                </div>

                                <div class="tickContainerText">
                                    Other
                                </div>

                                <div class="clear" style="height: 20px;"></div>

                                <label class="field-validation-error hidden" for="employmentStatus" id="employmentStatusError">Please select an option from the above.</label>

                                <div class="clear" style="height: 0px;"></div>

                                <div class="appButtonWrapper">
                                    <input type="hidden" name="referringPage" value="4">
                                    <input type="submit" id="submit-4" class="formButton" value="Next" tabindex="10">
                                </div>

                                <div style="text-align: center;">
                                    Safe, Secure &amp; Confidential
                                </div>
                            </div>

                    </div>

                    <div id="step-5">
                        <div class="formPanelHeader">
                            Step 5 of 6 <div class="formArrow"><img src="/images/debt/form-arrow.png"></div>
                        </div>

                            <div class="formPanel">
                                <div class="formRow1Col">
                                    <div class="title">Where do you live?</div>
                                </div>

                                <div class="clear" style="height: 20px;"></div>

                                <div class="formRow1Col">
                                    <div class="title2">House Number:</div>
                                    <input class="input" type="text" id="houseNumber" name="house_number" value="" required="">
                                </div>

                                <div class="clear" style="height: 20px;"></div>

                                <label class="field-validation-error hidden" for="houseNumber" id="houseNumberError">Please add House Number.</label>

                                <div class="clear" style="height: 0px;"></div>

                                <div class="formRow1Col">
                                    <div class="title2">Postcode:</div>
                                    <input class="input" type="text" id="postcode" name="postcode" value="" required="">
                                </div>

                                <div class="clear" style="height: 30px;"></div>

                                <label class="field-validation-error hidden" for="postcode" id="postcodeError">Please add Postcode.</label>

                                <div class="appButtonWrapper">
                                    <input type="hidden" name="referringPage" value="5">
                                    <input type="submit" id="submit-5" class="formButton" value="Next" tabindex="10">
                                </div>

                                <div style="text-align: center;">
                                    Safe, Secure &amp; Confidential
                                </div>
                            </div>

                    </div>

                    <div id="step-6">
                        <div class="formPanelHeader">
                            Final Step <div class="formArrow"><img src="/images/debt/form-arrow.png"></div>
                        </div>

                            <div class="formPanel">
                                <div class="formRow1Col">
                                    <div class="title">What is your email address?</div>
                                </div>

                                <div class="clear" style="height: 0px;"></div>

                                <div class="formRow1Col">
                                    <input class="input" type="email" id="email" name="email_address" value="" required="">
                                </div>

                                <div class="clear" style="height: 0px;"></div>

                                <label class="field-validation-error hidden" for="email" id="emailError">Please add email address.</label>

                                <div class="clear" style="height: 10px"></div>

                                <div class="formRow1Col">
                                    <div class="title">What is the best time to contact you?</div>
                                </div>

                                <div class="formRow1Col">
                                    <select class="select" name="time_to_call" id="bestTimeToCall" required="">
                                        <option value="">-- Please Select --</option>
                                        <option>now</option>
                                        <option>morning</option>
                                        <option>afternoon</option>
                                        <option>evening</option>
                                    </select>
                                </div>

                                <div class="clear" style="height: 0px"></div>

                                <label class="field-validation-error hidden" id="timeError">Please choose the best time to contact you.</label>

                                <div class="clear" style="height: 12px"></div>

                                <div class="appButtonWrapper">
                                    <input type="hidden" name="referringPage" value="6">
                                    <input type="submit" id="submit-6" class="formButton" value="Next">
                                </div>

                                <div style="text-align: center;">
                                    Safe, Secure &amp; Confidential
                                </div>
                            </div>

                    </div>

                    <div id="step-7">
                        <div class="formPanelHeader3">
                            Take the next step <div class="formFree"><img src="/images/debt/ribbon.png"></div>
                        </div>

                            <div class="formPanel">
                                <div class="formRow1Col" style="padding-top: 0px;">
                                    <div class="title2">First Name:</div>
                                    <input class="input" type="text" id="firstName" name="first_name" value="" required="">
                                </div>

                                <div class="clear" style="height: 0px;"></div>

                                <label class="field-validation-error hidden" for="first_name" id="firstNameError">Please fill First Name field.</label>

                                <div class="clear" style="height: 0px;"></div>

                                <div class="formRow1Col">
                                    <div class="title2">Last Name:</div>
                                    <input class="input" type="text" id="lastName" name="last_name" value="" required="">
                                </div>

                                <div class="clear" style="height: 0px;"></div>

                                <label class="field-validation-error hidden" for="last_name" id="lastNameError">Please fill Last Name field</label>

                                <div class="clear" style="height: 0px;"></div>

                                <div class="formRow1Col">
                                    <div class="title2">Phone number:</div>
                                    <input class="input" type="tel" id="telephone1" name="phone_home" value="" maxlength="11" required="">
                                </div>

                                <div class="clear" style="height: 0px;"></div>

                                <label class="field-validation-error hidden" for="phone_home" id="telephone1Error">Please fill Phone field</label>

                                <div class="clear" style="height: 0px;"></div>

                                <div class="formRow1Col">
                                    <div class="title2">Alternative phone number:</div>
                                    <input class="input" type="tel" id="telephone2" name="alt_phone" value="" maxlength="11">
                                </div>

                                <div class="clear" style="height: 10px;"></div>

                                <label class="field-validation-error hidden" for="alt_phone" id="telephone2Error">&nbsp;</label>

                                <div class="clear" style="height: 0px;"></div>

                                <div class="appButtonWrapper" style="padding-top: 9px;">
                                    <input type="hidden" name="referringPage" value="8">
                                    <input type="submit" class="formButton" id="submit-7" value="Enquire Now">
                                </div>

                                <div class="legalText">
                                    By clicking "(Enquire Now)" I consent to be contacted for the purposes of the debt enquiry by SMS, Email, Automated Message and Telephone by a debt solution provider. Further information to how your information will be used is detailed within the <a href="Privacy-Policy.pdf" target="_blank">Privacy Policy</a> and  <a href="terms.html" target="_blank">Terms &amp; Conditions</a>.
                                </div>
                            </div>

                    </div>

                </form>

                <script>
                    $("#debtLevel").bind("slider:changed", function(event, data){
                        if(data.value == 25000){
                            $("#debtLevelDisplay").html("&pound;" + data.value + "+");
                        } else{
                            $("#debtLevelDisplay").html("&pound;" + data.value);
                        }
                    });
                    $("#numDebts").bind("slider:changed", function(event, data){
                        if(data.value == 10){
                            $("#numDebtsDisplay").html(data.value + "+");
                        } else{
                            $("#numDebtsDisplay").html(data.value);
                        }
                    });
                    $("#repayMonth").bind("slider:changed", function(event, data){
                        if(data.value == 500){
                            $("#repayMonthDisplay").html("&pound;" + data.value + "+");
                        } else{
                            $("#repayMonthDisplay").html("&pound;" + data.value);
                        }
                    });
                </script>				</div>
            <div class="clear"></div>
        </div>
    </div><!-- end splashArea -->

    <div class="gradTop"></div>

    <div id="row" class="blue">
        <div class="contentContainer">
            <h1>How It Works...</h1>
            <div class="col">
                <img src="/images/debt/1.png">
                <h1>Fill in the short form</h1>
            </div>
            <div class="col">
                <img src="/images/debt/2.png">
                <h1>Review your options</h1>
            </div>
            <div class="col">
                <img src="/images/debt/3.png">
                <h1>Start managing your debt!</h1>
            </div>

            <div class="clear"></div>
        </div>
    </div><!-- end row -->

    <div id="row" class="grey">
        <div class="contentContainer">
            *An IVA (Individual Voluntary Arrangement) is subject to acceptance. Debt write off applies to unsecured debts and on completion of an IVA. In some IVA’s up to 80% of the debt can be written off. The amount written off will depend on your circumstances, income, assets and the current write-off policy of your creditors. Levels between 25% and 70% are realistic, depending on your ability to repay. An IVA is a form of Insolvency.
            <div class="clear"></div>
        </div>
    </div><!-- end row -->

    <div id="row">
        <div class="contentContainer">
            <img src="/images/debt/woman.jpg" style="float: right; padding-left: 30px;">
            <h1>Why people chose Smart Savings Today?</h1>
            <p>
                At Smart Savings Today we do not provide any advice as we act as an introducer where we will receive a fee for passing your enquiry to a debt solution provider. Simply complete our form, where we will introduce you to one of our authorised debt solution partners. Your financial needs will be assessed by our trusted providers, offering you suitable advice to meet your current circumstances. The financial assessment enables you in the majority of cases to:
            </p>
            <ul>
                <li>Repay your debts over a period you can afford</li>
                <li>Consolidate your debts into one affordable payment</li>
                <li>We deal with your lenders so that you don't have to</li>
                <li>Possibility to freeze your interest payments</li>
                <li>You could qualify to write off a large proportion of your unsecured debt with an IVA</li>
            </ul>

            <div class="pageButtonWrapper">
                <a href="#top" class="pageButton">Get in Touch Today</a>
                <a href="#" data-display="solutions" class="pageButton">Solution Pro's &amp; Con's</a>
            </div>

            <div class="clear"></div>
        </div>
    </div><!-- end row -->

    <div id="row" class="greyBlue">
        <div class="contentContainer arrowBg">
            <h1 class="center" style="padding-bottom: 0px;">How a debt management plan could help you....</h1>
            <p class="center" style="padding-bottom: 20px; margin: 0px;">*Your financial needs will be assessed by our providers, offering you suitable advice to meet your current circumstances.</p>
            <div id="dmPlanPanel">
                <h1>Before</h1>
                <div class="left" style="float: left;">
                    <p>Loan</p>
                    <p>Credit Card</p>
                    <p>Overdraft</p>
                    <p>Payday Loans</p>
                </div>
                <div class="right" style="float: right;">
                    <p>&pound;9,700</p>
                    <p>&pound;2,350</p>
                    <p>&pound;1,075</p>
                    <p>&pound;2,180</p>
                </div>

                <div class="clear"></div>

                <div class="total">
                    <div class="left" style="float: left;">
                        <p>Total Repayments</p>
                    </div>
                    <div class="right" style="float: right;">
                        <p>&pound;466</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

            <div id="dmPlanPanel" style="float: right;">
                <h1>Once on a Debt Management Plan</h1>
                <p><img src="/images/debt/tick2.png">Interest & charges are requested to be frozen</p>
                <p><img src="/images/debt/tick2.png">Just one monthly repayment to your creditors</p>
                <p><img src="/images/debt/tick2.png">One point of contact</p>
                <p><img src="/images/debt/tick2.png">Leads to a reduction in harassing phone calls</p>

                <div class="clear" style="height: 0px;"></div>

                <div class="total2">
                    <div class="left" style="float: left;">
                        <p>Single Repayment</p>
                    </div>
                    <div class="right" style="float: right;">
                        <p>&pound;167</p>
                    </div>

                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div><!-- end row -->

    <div id="row" class="lightGrey">
        <div class="contentContainer">
            <h1 class="center" style="padding-top: 0px;padding-bottom: 0px;">There is no charge for the initial advice given to you</h1>
            <p>
                If, after a full assessment of your circumstances, you agree with the advisor that a Debt Management Plan (DMP) or an Individual Voluntary Arrangement (IVA) would be the best solution to your financial problems we will explain the fees in detail to you.  Usually, the charge for a DMP is £35 per month.  In an IVA there is an initial fee for setting up the arrangement and them a % fee for the supervision of the arrangement. In both cases the fee will be taken from the monthly payment that you make towards your debts. You will not be expected to pay anything on top of the monthly payment.
            </p>

            <div class="pageButtonWrapper">
                <a href="#" data-display="fees" class="pageButton">More Cost Information</a>
            </div>
        </div>
    </div><!-- end row -->
    <div id="row" class="greyBlue">
        <div class="contentContainer">
            <img src="/images/debt/couple-tablet.jpg" style="float: left; padding-right: 30px;">
            <h1>Start reducing your Debt Repayments &amp; regain control...</h1>

            <div class="pageButtonWrapper">
                <a href="#top" class="pageButton">Get in Touch Today</a>
            </div>

            <div class="instantBadge">
                <img src="/images/debt/instant-badge.png">
            </div>

            <div class="clear"></div>
        </div>
    </div><!-- end row -->

    <div id="footer">
        <div class="contentContainer">
            All debt solutions should be very carefully considered. We never charge for the service we give you, but if you enter an financial solution for example an Individual Voluntary Arrangement (IVA) or Debt Management Plan with one of our trusted partner, then fees will apply and these are clearly explained to you by our trusted partners advisors or in the documentation you receive. Smart Savings Today partners are regulated by the Financial Conduct Authority and Insolvency Service. They apply the principles of business and you have the right to a cooling off period of 14 days. It is likely that your ability to obtain credit will be affected for 6 years, even if the solution lasts for less.
            <br><br>
            At Smart Savings Today we do not provide any advice. On completion of our form, we will introduce you to one of our authorised debt solutions partners. We use the contact details you have given us on the form to make this introduction. A debt advisor will contact you by telephone. During that telephone call, the debt advisor will discuss your options in more detail. During this call, and other subsequent communications, you will be dealing with a debt solutions partner and not Smart Savings Today. All solutions are subject to acceptance and eligibility. Further conditions will apply and calls are recorded for your protection. Initial advice is always free but, as commercial companies our partners do charge for on-going services. Debt Write off only applies on completion of the Insolvency Solution and details do appear on a public register. Full details will be discussed prior to entering into an agreement and alternative options may be offered, where considered to be in your best interest. Your ability to obtain credit will be affected for 6 years, even if the solution lasts for less and your assets and property could be at risk.
            <br><br>
            To find out more about managing your money and getting free debt advice, visit <b><a href="https://www.moneyadviceservice.org.uk/en/tools/debt-advice-locator">Money Advice Service</a></b>, an independent service set up by the Government to help people manage their money.
            <br><br>
            By submitting the enquiry form you agree that the information provided is true and accurate and that Smart Savings Today may send the details of this enquiry to an appropriate broker for the purpose of furthering your enquiry and that the broker may contact you for further information as required. We will not send, sell, loan or lease your data to any other third party except those needed to provide the service you have requested.

            <hr>
        </div>
    </div>

    <div id="faqs" class="portBox">
        <h1>Frequently Asked Questions</h1>
        <h2>Debt Management Pros and Cons</h2>
        <p>What are the Advantages of a Debt Management Plan?</p>
        <p>A debt management plan will give you the satisfaction that you are paying ALL your debts. You will no longer need to juggle your payments and worry about those unexpected bills that life tends to throw at you</p>

        <p>
            Other Advantages:<br>
            - You will have one payment each month.<br>
            - You will no longer need to communicate directly with your existing creditors<br>
            - Your chosen debt management company will request that interest and charges are frozen. This will stop your debts growing, enabling you to pay back the money you have borrowed.
        </p>

        <p>What are the Disadvantages of a Debt Management Plan?</p>
        <p>
            There are some disadvantages with a Debt Management Plan.<br>
            - If your creditors refuse to freeze or lower your interest, paying a reduced amount over a longer period could increase the amount you repay.<br>
            - You will pay a fee for the services provised. There are companies which can do the same job for free. You can get more information at <a href="http://www.moneyadviceservice.org.uk">www.moneyadviceservice.org.uk</a>
            - You are still required to repay in full any items of credit that are not included in your debt management plan.<br>
            - A Debt Management Plan will affect your credit rating in the medium to long term. As you are repaying your debts at a reduced rate, your lenders are legally obliged to send you a Default Notice to say your account is in arrears. A Default Notice will remain on your credit file for 6 years.
        </p>

        <h2>IVA Pros and Cons</h2>
        <b>INDIVIDUAL VOLUNTARY ARRANGEMENTS</b><br>
        <p>
            An Individual Voluntary Arrangement (IVA) is a legally binding agreement between you and your unsecured creditors, arranged and supervised by a Licensed Insolvency Practitioner (IP). In short you agree to pay back the maximum you can afford over a specified period of time, usually 5 years, at the end of which period your creditors agree to write of any remaining balances.
        </p>
        <p>
            The IP will work with you to calculate the maximum monthly payment you are able to make and also assess whether you have anything else you are able to offer to your creditors to enhance the agreement e.g. from the sale of an asset or savings.
        </p>
        <p>
            An IP will advise you on the terms of the agreement to maximise the chances of acceptance by your creditors and will assist you in preparing the legal document.
        </p>
        <p>
            We do not charge you for advice about an IVA or for help with the preparation of the documents. If you are in a debt management plan already it will continue as normal until your IVA has been approved.
        </p>

        <p>
            Our partners do charge fees for the work both for getting the agreement approved by your creditors and for monitoring it, but these fees are agreed by your creditors and are taken out of the payments made by you once the arrangement has been approved, so you do not pay anything extra to cover the fees. However, the creditors allow the IP to take their fees before they make payments to them which means that if you did find yourself with sufficient funds to pay your creditors in full, because they take a fee first, you would need to pay these fees in addition to the payments to your creditors.
        </p>

        <b>IS AN IVA THE RIGHT SOLUTION FOR YOU?</b><br>
        <p>
            An IVA is a form of insolvency and is a legally binding agreement therefore it is important that you consider whether:
        </p>
        <p>
            - You feel able to commit to a regular payment for the next 5 years<br>
            - You may be able to resolve your financial problems without the need for a formal arrangement e.g. if you are expecting a pay rise or could sell an asset to pay your debts<br>
            - You are willing to be open and honest with your creditors about everything that you owe and all of the assets that you have<br>
            - You are willing to provide the Insolvency Practitioner with copies of your wage slips or other proof of income each year. A review of income and expenditure is usually a required term of the agreement.<br>
            - You are in financial difficulty and cannot make the required payments to your creditors<br>
        </p>

        <b>ADVANTAGES</b><br>
        <p>
            - You will pay an amount that you can afford over a limited period; usually 5 or 6 years<br>
            - Provided that you fulfill the terms of your IVA, the remainder of your debts will be written off at the end of the term<br>
            - Your creditors cannot pursue you for the debts once the IVA is agreed<br>
            - Your creditors cannot apply interest or charges to your debts<br>
            - If you are a homeowner, you will usually be able to remain in your home
        </p>

        <b>DISADVANTAGES</b><br>
        <p>
            - It is a formal agreement; if you fail to keep to your side of the agreement the arrangement may fail and you may find yourself owing as much as you did at the start<br>
            - The arrangement must be recorded on the Insolvency Register<br>
            - If you have a property, the creditors will expect you to try to remortgage towards the end of the agreement to release funds to be paid in to the IVA. If you are unable to do so the arrangement may be extended for a further 12 months.<br>
            - Some debts such as mortgages, secured loans, taxes and fines cannot be included in an IVA so you will remain responsible for paying these<br>
            - You cannot take out further borrowing during the course of the arrangement<br>
            - If your situation changes for the better you will be expected to pay more to your creditors
        </p>

        <b>SERVICES FOR SCOTTISH RESIDENTS</b><br>
        <p>
            If you live in Scotland, the debt solutions available to you are different.
        </p>

        <b>DEBT ARRANGEMENT SCHEME</b><br>
        <p>
            As part of a Debt Arrangement Scheme (DAS), a Debt Payment Programme (DPP) allows you to repay your debts by making one monthly payment of the amount which you have left over each month after paying your essential bills and expenses. You will pay this amount until the debts are cleared, provided that this will happen within a reasonable period.
        </p>
        <p>
            Your creditors cannot contact you about payments or arrears if you are the subject of a DPP, and they will have to freeze interest and charges on your debts.
        </p>
        <p>
            Your details will appear on the DAS register and your credit rating will uauslly be affected for 6 years.
        </p>
        <p>
            You cannot apply directly for a DPP, this can only be done by an approved money adviser. We can refer you to an approved money advisor or you can find a money adviser local to you using this link.
        </p>
        <p>
            If you would like us to pass your details to an approved money adviser, please call us or fill in the contact form and we will call you back to obtain the relevant information.
        </p>
        <p>
            This solution is only available to you if you live in Scotland.
        </p>

        <b>PROTECTED TRUST DEED</b><br>
        <p>
            A trust deed is a form of insolvency. You can only apply for a trust deed if your unsecured debts are more than the value of any assets that you have. A trust deed usually lasts for 3-5 years, during which time your assets will be transferred to a trustee and you may need to make regular payments out of your earnings.
        </p>
        <p>
            Provided that your creditors agree to the arrangement and you meet your obligations, your trust deed will become protected.
        </p>
        <p>
            Your creditors cannot contact you about payment or arrears if you are the subject of a protected trust deed, and they will have to freeze interest and charges on your debts.
        </p>
        <p>
            There will be restrictions on your spending during a trust deed and you may have to sell some of your assets. A trust deed may also affect your employment.
        </p>
        <p>
            Your details will appear on the public Register of Insolvencies for 5 years and will appear on your credit file for 6 years from the date of the arrangement.
        </p>
        <p>
            You will need an Insolvency Practitioner (IP) to set up a trust deed. We can refer you to a trusted provider or you can obtain further information using this link.
        </p>
        <p>
            If you would like us to pass your details to an approved money adviser, please call us or fill in the contact form and we will call you back to obtain the relevant information.
        </p>
        <p>
            This solution is only available to you if you live in Scotland.
        </p>

        <b>SEQUESTRATION</b><br>
        <p>
            Sequestration is the Scottish legal term for bankruptcy.
        </p>
        <p>
            Sequestration would require you to transfer all of your assets and property to a trustee who will sell these assets to pay your creditors.
        </p>
        <p>
            You can only apply for sequestration if you owe more than &pound;1500 and have not been made bankrupt in the last 5 years. You must be unable to meet repayments to your debts as they fall due.
        </p>
        <p>
            Sequestration usually lasts for a year, after which period any remaining debts will be written off and you will be discharged.
        </p>
        <p>
            The fee for sequestration is &pound;200.00.
        </p>

        <b>Bankruptcy and Debt Relief Orders</b><br>
        <p>
            If our providers are unable to offer you a solution that they feel would suit your financial solution, they may recommend Bankruptcy or a Debt Relief Order. Although it is not possible for them to administer these products for you, they may be able to assist you in finding the right information and completing your application.
        </p>

        <b>BANKRUPTCY</b><br>
        <p>
            Bankruptcy is a formal insolvency procedure. You can apply to go bankrupt if you can demonstrate that either your debts exceed your assets or you are unable to pay your debts when they are due. There is no restriction on the level of debt you must have to apply.
        </p>
        <p>
            They cannot assist you in petitioning for bankruptcy but you can apply online through the central government website, GOV.UK. You'll receive your decision online, usually within 28 days and, if your bankruptcy is approved, you'll be contacted by the Official Receiver (or trustee in bankruptcy) who will oversee your bankruptcy and will want to know about your financial history.
        </p>
        <p>
            If you have surplus income after meeting your essential household and personal expenses, you will have to make payments out of your income for up to 3 years.
        </p>
        <p>
            In addition you will have to hand over any assets you have to the trustee in bankruptcy to be sold to repay your creditors. This does not include everyday items you need for your reasonable domestic needs but is likely to include your house if it can be sold for more than the mortgage outstanding.
        </p>
        <p>
            Bankruptcy usually lasts for 1 year, and once you have been freed (discharged) from your bankruptcy, you are released from your debts (with certain exceptions).
        </p>

        <b>ADVANTAGES</b><br>
        <p>
            - Debts are written off at the end of one year.<br>
            - Creditors can’t take further action unless the debts are secured on your home or other property.<br>
            - It allows you to make a fresh start after only a year.<br>
            - You may be able to avoid having to sell your home if your spouse, partner or a relative can buy your share of its value after any debts secured on it have been paid.<br>
            - You can apply online and pay in instalments
        </p>

        <b>DISADVANTAGES</b>
        <p>
            - Your bankruptcy is entered on a public register<br>
            - If you apply for your own bankruptcy, you will have to pay an adjudicators fee and deposit totaling &pound;680<br>
            - You will remain liable to pay certain debts – in particular:<br>
            --- student loans;<br>
            --- fines;<br>
            --- debts arising from family proceedings; and<br>
            --- budgeting loans and crisis loans owed to the Social Fund<br>
            - If your situation changes for the better you will be expected to pay more to your creditors<br>
            - Any business you have will almost certainly be closed down<br>
            - Your employment may be affected<br>
            - Certain agreements such as hire purchase agreements and mobile phone contracts may come to an end<br>
            - You can’t act as a director of a company or be involved in its management unless the court agrees<br>
            - You will be committing an offence if you get credit of &pound;500 or more without disclosing that you are bankrupt<br>
            - You may have a bankruptcy restrictions order made against you for 2 to 15 years if you acted irresponsibly, recklessly or dishonestly<br>
        </p>

        <b>DEBT RELIEF ORDER (DRO)</b><br>
        <p>
            A debt relief order is only available to individuals who have very little disposable income available to pay to their creditors, have few or no assets, and a limited level of debt.
        </p>
        <p>
            You may be eligible for a Debt Relief Order if you owe less than &pound;20,000 in total to your creditors, you have &pound;50 or less left over each month after your essential bills and outgoings have been paid, your car (if you have one) is worth less than &pound;1000 and your other assets don’t exceed a value of &pound;1000.
        </p>
        <p>
            A DRO will last for 1 year, and once your DRO has ended you are released from your debts (with certain exceptions). You need to approach an approved intermediary for the application to be put forward, and you will need to pay a fee of &pound;90.
        </p>

        <b>ADVANTAGES</b>
        <p>
            - Your debts will be written off at the end of the DRO.<br>
            - None of the creditors listed in the DRO application can take further action against you without the court’s permission.<br>
            - After 1 year your debts will be written off<br>
            - The fee (&pound;90) is affordable and can be paid in instalments but the fee must be paid before the application can be made.<br>
            - You will keep your assets and a vehicle as detailed above.<br>
            - The approved intermediary ensures that you are given appropriate advice and that you fit the criteria for a DRO.
        </p>

        <b>DISADVANTAGES</b><br>
        <p>
            - Your DRO is entered on a public register.<br>
            - Your DRO will remain on your credit file for 6 years.<br>
            - You can’t have a DRO if you have an existing bankruptcy order, an IVA, are subject to bankruptcy restrictions, or you have had a DRO in the last 6 years.<br>
            - You will remain liable to pay certain debts – in particular:<br>
            --- student loans;<br>
            --- fines;<br>
            --- debts arising from family proceedings; and<br>
            --- budgeting loans and crisis loans owed to the Social Fund<br>
            - Your employment may be affected.<br>
            - Your DRO could be revoked (withdrawn) if you don’t co-operate with the official receiver during the year that your DRO is in force.<br>
            - You can’t act as a director of a company or be involved in its management unless the court agrees.<br>
            - You will be committing an offence if you get credit of £500 or more without disclosing that you are subject to a DRO.<br>
            - You may have a debt relief restrictions order* made against you for 2 to 15 years if you acted irresponsibly, recklessly or dishonestly.<br>
            - You can’t have a DRO if you own your own home. Even if you have negative equity.
        </p>
        <p>
            * An order that will place restrictions similar to those in force while subject to a DRO, which the official receiver may apply for.
        </p>
        <div class="clear"></div>		</div>

    <div id="solutions" class="portBox">
        <h1>Solution Pro's & Con's</h1>
        <h2>Debt Management Pros and Cons</h2>
        <p>What are the Advantages of a Debt Management Plan?</p>
        <p>A debt management plan will give you the satisfaction that you are paying ALL your debts. You will no longer need to juggle your payments and worry about those unexpected bills that life tends to throw at you</p>

        <p>
            Other Advantages:<br>
            - You will have one payment each month.<br>
            - You will no longer need to communicate directly with your existing creditors<br>
            - Your chosen debt management company will request that interest and charges are frozen. This will stop your debts growing, enabling you to pay back the money you have borrowed.
        </p>

        <p>What are the Disadvantages of a Debt Management Plan?</p>
        <p>
            There are some disadvantages with a Debt Management Plan.<br>
            - If your creditors refuse to freeze or lower your interest, paying a reduced amount over a longer period could increase the amount you repay.<br>
            - You will pay a fee for the services provised. There are companies which can do the same job for free. You can get more information at <a href="http://www.moneyadviceservice.org.uk">www.moneyadviceservice.org.uk</a>
            - You are still required to repay in full any items of credit that are not included in your debt management plan.<br>
            - A Debt Management Plan will affect your credit rating in the medium to long term. As you are repaying your debts at a reduced rate, your lenders are legally obliged to send you a Default Notice to say your account is in arrears. A Default Notice will remain on your credit file for 6 years.
        </p>

        <h2>IVA Pros and Cons</h2>
        <b>INDIVIDUAL VOLUNTARY ARRANGEMENTS</b><br>
        <p>
            An Individual Voluntary Arrangement (IVA) is a legally binding agreement between you and your unsecured creditors, arranged and supervised by a Licensed Insolvency Practitioner (IP). In short you agree to pay back the maximum you can afford over a specified period of time, usually 5 years, at the end of which period your creditors agree to write of any remaining balances.
        </p>
        <p>
            The IP will work with you to calculate the maximum monthly payment you are able to make and also assess whether you have anything else you are able to offer to your creditors to enhance the agreement e.g. from the sale of an asset or savings.
        </p>
        <p>
            An IP will advise you on the terms of the agreement to maximise the chances of acceptance by your creditors and will assist you in preparing the legal document.
        </p>
        <p>
            We do not charge you for advice about an IVA or for help with the preparation of the documents. If you are in a debt management plan already it will continue as normal until your IVA has been approved.
        </p>

        <p>
            Our partners do charge fees for the work both for getting the agreement approved by your creditors and for monitoring it, but these fees are agreed by your creditors and are taken out of the payments made by you once the arrangement has been approved, so you do not pay anything extra to cover the fees. However, the creditors allow the IP to take their fees before they make payments to them which means that if you did find yourself with sufficient funds to pay your creditors in full, because they take a fee first, you would need to pay these fees in addition to the payments to your creditors.
        </p>

        <b>IS AN IVA THE RIGHT SOLUTION FOR YOU?</b><br>
        <p>
            An IVA is a form of insolvency and is a legally binding agreement therefore it is important that you consider whether:
        </p>
        <p>
            - You feel able to commit to a regular payment for the next 5 years<br>
            - You may be able to resolve your financial problems without the need for a formal arrangement e.g. if you are expecting a pay rise or could sell an asset to pay your debts<br>
            - You are willing to be open and honest with your creditors about everything that you owe and all of the assets that you have<br>
            - You are willing to provide the Insolvency Practitioner with copies of your wage slips or other proof of income each year. A review of income and expenditure is usually a required term of the agreement.<br>
            - You are in financial difficulty and cannot make the required payments to your creditors<br>
        </p>

        <b>ADVANTAGES</b><br>
        <p>
            - You will pay an amount that you can afford over a limited period; usually 5 or 6 years<br>
            - Provided that you fulfill the terms of your IVA, the remainder of your debts will be written off at the end of the term<br>
            - Your creditors cannot pursue you for the debts once the IVA is agreed<br>
            - Your creditors cannot apply interest or charges to your debts<br>
            - If you are a homeowner, you will usually be able to remain in your home
        </p>

        <b>DISADVANTAGES</b><br>
        <p>
            - It is a formal agreement; if you fail to keep to your side of the agreement the arrangement may fail and you may find yourself owing as much as you did at the start<br>
            - The arrangement must be recorded on the Insolvency Register<br>
            - If you have a property, the creditors will expect you to try to remortgage towards the end of the agreement to release funds to be paid in to the IVA. If you are unable to do so the arrangement may be extended for a further 12 months.<br>
            - Some debts such as mortgages, secured loans, taxes and fines cannot be included in an IVA so you will remain responsible for paying these<br>
            - You cannot take out further borrowing during the course of the arrangement<br>
            - If your situation changes for the better you will be expected to pay more to your creditors
        </p>

        <b>SERVICES FOR SCOTTISH RESIDENTS</b><br>
        <p>
            If you live in Scotland, the debt solutions available to you are different.
        </p>

        <b>DEBT ARRANGEMENT SCHEME</b><br>
        <p>
            As part of a Debt Arrangement Scheme (DAS), a Debt Payment Programme (DPP) allows you to repay your debts by making one monthly payment of the amount which you have left over each month after paying your essential bills and expenses. You will pay this amount until the debts are cleared, provided that this will happen within a reasonable period.
        </p>
        <p>
            Your creditors cannot contact you about payments or arrears if you are the subject of a DPP, and they will have to freeze interest and charges on your debts.
        </p>
        <p>
            Your details will appear on the DAS register and your credit rating will uauslly be affected for 6 years.
        </p>
        <p>
            You cannot apply directly for a DPP, this can only be done by an approved money adviser. We can refer you to an approved money advisor or you can find a money adviser local to you using this link.
        </p>
        <p>
            If you would like us to pass your details to an approved money adviser, please call us or fill in the contact form and we will call you back to obtain the relevant information.
        </p>
        <p>
            This solution is only available to you if you live in Scotland.
        </p>

        <b>PROTECTED TRUST DEED</b><br>
        <p>
            A trust deed is a form of insolvency. You can only apply for a trust deed if your unsecured debts are more than the value of any assets that you have. A trust deed usually lasts for 3-5 years, during which time your assets will be transferred to a trustee and you may need to make regular payments out of your earnings.
        </p>
        <p>
            Provided that your creditors agree to the arrangement and you meet your obligations, your trust deed will become protected.
        </p>
        <p>
            Your creditors cannot contact you about payment or arrears if you are the subject of a protected trust deed, and they will have to freeze interest and charges on your debts.
        </p>
        <p>
            There will be restrictions on your spending during a trust deed and you may have to sell some of your assets. A trust deed may also affect your employment.
        </p>
        <p>
            Your details will appear on the public Register of Insolvencies for 5 years and will appear on your credit file for 6 years from the date of the arrangement.
        </p>
        <p>
            You will need an Insolvency Practitioner (IP) to set up a trust deed. We can refer you to a trusted provider or you can obtain further information using this link.
        </p>
        <p>
            If you would like us to pass your details to an approved money adviser, please call us or fill in the contact form and we will call you back to obtain the relevant information.
        </p>
        <p>
            This solution is only available to you if you live in Scotland.
        </p>

        <b>SEQUESTRATION</b><br>
        <p>
            Sequestration is the Scottish legal term for bankruptcy.
        </p>
        <p>
            Sequestration would require you to transfer all of your assets and property to a trustee who will sell these assets to pay your creditors.
        </p>
        <p>
            You can only apply for sequestration if you owe more than &pound;1500 and have not been made bankrupt in the last 5 years. You must be unable to meet repayments to your debts as they fall due.
        </p>
        <p>
            Sequestration usually lasts for a year, after which period any remaining debts will be written off and you will be discharged.
        </p>
        <p>
            The fee for sequestration is &pound;200.00.
        </p>

        <b>Bankruptcy and Debt Relief Orders</b><br>
        <p>
            If our providers are unable to offer you a solution that they feel would suit your financial solution, they may recommend Bankruptcy or a Debt Relief Order. Although it is not possible for them to administer these products for you, they may be able to assist you in finding the right information and completing your application.
        </p>

        <b>BANKRUPTCY</b><br>
        <p>
            Bankruptcy is a formal insolvency procedure. You can apply to go bankrupt if you can demonstrate that either your debts exceed your assets or you are unable to pay your debts when they are due. There is no restriction on the level of debt you must have to apply.
        </p>
        <p>
            They cannot assist you in petitioning for bankruptcy but you can apply online through the central government website, GOV.UK. You'll receive your decision online, usually within 28 days and, if your bankruptcy is approved, you'll be contacted by the Official Receiver (or trustee in bankruptcy) who will oversee your bankruptcy and will want to know about your financial history.
        </p>
        <p>
            If you have surplus income after meeting your essential household and personal expenses, you will have to make payments out of your income for up to 3 years.
        </p>
        <p>
            In addition you will have to hand over any assets you have to the trustee in bankruptcy to be sold to repay your creditors. This does not include everyday items you need for your reasonable domestic needs but is likely to include your house if it can be sold for more than the mortgage outstanding.
        </p>
        <p>
            Bankruptcy usually lasts for 1 year, and once you have been freed (discharged) from your bankruptcy, you are released from your debts (with certain exceptions).
        </p>

        <b>ADVANTAGES</b><br>
        <p>
            - Debts are written off at the end of one year.<br>
            - Creditors can’t take further action unless the debts are secured on your home or other property.<br>
            - It allows you to make a fresh start after only a year.<br>
            - You may be able to avoid having to sell your home if your spouse, partner or a relative can buy your share of its value after any debts secured on it have been paid.<br>
            - You can apply online and pay in instalments
        </p>

        <b>DISADVANTAGES</b>
        <p>
            - Your bankruptcy is entered on a public register<br>
            - If you apply for your own bankruptcy, you will have to pay an adjudicators fee and deposit totaling &pound;680<br>
            - You will remain liable to pay certain debts – in particular:<br>
            --- student loans;<br>
            --- fines;<br>
            --- debts arising from family proceedings; and<br>
            --- budgeting loans and crisis loans owed to the Social Fund<br>
            - If your situation changes for the better you will be expected to pay more to your creditors<br>
            - Any business you have will almost certainly be closed down<br>
            - Your employment may be affected<br>
            - Certain agreements such as hire purchase agreements and mobile phone contracts may come to an end<br>
            - You can’t act as a director of a company or be involved in its management unless the court agrees<br>
            - You will be committing an offence if you get credit of &pound;500 or more without disclosing that you are bankrupt<br>
            - You may have a bankruptcy restrictions order made against you for 2 to 15 years if you acted irresponsibly, recklessly or dishonestly<br>
        </p>

        <b>DEBT RELIEF ORDER (DRO)</b><br>
        <p>
            A debt relief order is only available to individuals who have very little disposable income available to pay to their creditors, have few or no assets, and a limited level of debt.
        </p>
        <p>
            You may be eligible for a Debt Relief Order if you owe less than &pound;20,000 in total to your creditors, you have &pound;50 or less left over each month after your essential bills and outgoings have been paid, your car (if you have one) is worth less than &pound;1000 and your other assets don’t exceed a value of &pound;1000.
        </p>
        <p>
            A DRO will last for 1 year, and once your DRO has ended you are released from your debts (with certain exceptions). You need to approach an approved intermediary for the application to be put forward, and you will need to pay a fee of &pound;90.
        </p>

        <b>ADVANTAGES</b>
        <p>
            - Your debts will be written off at the end of the DRO.<br>
            - None of the creditors listed in the DRO application can take further action against you without the court’s permission.<br>
            - After 1 year your debts will be written off<br>
            - The fee (&pound;90) is affordable and can be paid in instalments but the fee must be paid before the application can be made.<br>
            - You will keep your assets and a vehicle as detailed above.<br>
            - The approved intermediary ensures that you are given appropriate advice and that you fit the criteria for a DRO.
        </p>

        <b>DISADVANTAGES</b><br>
        <p>
            - Your DRO is entered on a public register.<br>
            - Your DRO will remain on your credit file for 6 years.<br>
            - You can’t have a DRO if you have an existing bankruptcy order, an IVA, are subject to bankruptcy restrictions, or you have had a DRO in the last 6 years.<br>
            - You will remain liable to pay certain debts – in particular:<br>
            --- student loans;<br>
            --- fines;<br>
            --- debts arising from family proceedings; and<br>
            --- budgeting loans and crisis loans owed to the Social Fund<br>
            - Your employment may be affected.<br>
            - Your DRO could be revoked (withdrawn) if you don’t co-operate with the official receiver during the year that your DRO is in force.<br>
            - You can’t act as a director of a company or be involved in its management unless the court agrees.<br>
            - You will be committing an offence if you get credit of £500 or more without disclosing that you are subject to a DRO.<br>
            - You may have a debt relief restrictions order* made against you for 2 to 15 years if you acted irresponsibly, recklessly or dishonestly.<br>
            - You can’t have a DRO if you own your own home. Even if you have negative equity.
        </p>
        <p>
            * An order that will place restrictions similar to those in force while subject to a DRO, which the official receiver may apply for.
        </p>
        <div class="clear"></div>		</div>

    <div id="tacs" class="portBox">
        <h1>Terms &amp; Conditions</h1>
        <p>
            Smart Savings Today reserves the right, at any time and without prior notice, to remove or cease to supply any product or service contained on this website. In the event that such removal takes place we shall not be liable to you in any way whatsoever for such removal.
        </p>
        <p>
            Prices, and details, of products and services (and any offers) posted online are subject to change without notice. All products and services are subject to availability and we give no guarantee in this regard. The provision of details of products and services on this website are not, and should not be construed as, an offer to sell or buy such products or services by the relevant company. The company advertising the products or services concerned may accept or reject your offer at its sole discretion.
        </p>
        <p>
            The copyright in the material contained in this website belongs to Smart Savings Today or its licensed source. Any person may copy any part of this material, subject to the following conditions:
        </p>
        <ul>
            <li>The material may not be used for commercial purposes.</li>
            <li>The copies must retain any copyrights or other intellectual property notices contained in the original material.</li>
            <li>The products and technology or processes described in this website may be subject to other intellectual property rights reserved by Smart Savings Today or by other third parties (and no licence is granted in respect of those intellectual property rights).</li>
            <li>mages on this website are protected by copyright and may not be reproduced or appropriated in any manner without the written permission of their respective owner(s).</li>
        </ul>
        <p>
            While Smart Savings Today has taken care in the preparation of the contents of this website, this website and the information, names, images, pictures, logos, icons regarding or relating to Smart Savings Today or the products and services of the same (or to third party products and services), are provided on an 'as is' basis without any representation or endorsement being made and without any warranty of any kind, whether express or implied, including but not limited to, any implied warranties of satisfactory quality, fitness for a particular purpose, non-infringement, compatibility, security and accuracy. To the extent permitted by law, all such terms and warranties are hereby excluded. In no event will Smart Savings Today be liable (whether in contract or tort (including negligence or breach of statutory duty) or otherwise) for any losses sustained and arising out of or in connection with use of this website including, without limitation, loss of profits, loss of data or loss of goodwill (in all these cases whether direct or indirect) nor any indirect, economic, consequential or special loss.
        </p>
        <p>
            Smart Savings Today does not represent that the information contained in this website is accurate, comprehensive, verified or complete, and shall accept no liability for the accuracy or completeness of the information contained in this website or for any reliance placed by any person on the information.
        </p>
        <p>
            Smart Savings Today does not warrant that the functions or materials accessible from or contained in this website will be uninterrupted or error free, that defects will be corrected or that this website or the server that makes it available are virus or bug free or represent the full functionality, accuracy, reliability of the materials.
        </p>
        <p>
            If any of these Terms and Conditions (or any terms and conditions relating to a product or service referred to in this website) should be determined to be illegal, invalid or otherwise unenforceable by reason of the laws of any state or country in which such terms and conditions are intended to be effective, then to the extent of such illegality, invalidity or unenforceability, and in relation to such state or country only, such terms or condition shall be deleted and severed from the rest of the relevant terms and conditions and the remaining terms and conditions shall survive, remain in full force and effect and continue to be binding and enforceable. Nothing in these terms and conditions shall exclude Smart Savings Today's liability for death or personal injury resulting from Smart Savings Today's negligence.
        </p>
        <p>
            All Intellectual Property Rights (including, without limitation, all database rights, rights in designs, rights in know-how, patents and rights in inventions (in all cases whether registered or unregistered and including all rights to apply for registration) and all other intellectual or industrial property rights in any jurisdiction) in any information, content, materials, data or processes contained in or to this website belong to Smart Savings Today or its licensed source. All rights of Smart Savings Today in such Intellectual Property Rights are hereby reserved.
        </p>
        <p>
            Unless otherwise specified, the products and services described in this website are available only to UK residents (excluding the Channel Islands and Isle of Man). The information on this Web Site is not directed at anyone other than UK residents and applications from others will, unless otherwise stated, not be accepted. Smart Savings Today makes no representation that any product or service referred to on the website are appropriate for use, or available in other locations. The information and other materials contained in this website may not satisfy the laws of any other country and those who choose to access this site from other locations are responsible for compliance with local laws if and to the extent local laws are applicable. The phone numbers provided only apply to phone calls made from within the UK.
        </p>
        <p>
            These Terms and Conditions and any terms and conditions relating to products or services described in this website shall be governed by and construed in accordance with the laws of England and Wales. Disputes arising in relation to the same shall, unless otherwise expressly agreed, be subject to the exclusive jurisdiction of the courts of England and Wales.
        </p>
        <p>
            Telephone calls using the telephone numbers provided on this website and email correspondence with Smart Savings Today at the email addresses accessible through, or discernible from, this website may be recorded or monitored. By using such communication methods you are consenting to the recording or monitoring of the same.
        </p>
        <p>
            If you apply for any product or service detailed on this website, these Terms and Conditions should be read in conjunction with any other terms and conditions which relate to any such product or service and, in the event of any contradiction between these Terms and Conditions and the specific terms and conditions relating to such product or service, the latter shall prevail. For the purposes of these Terms and Conditions, product(s) and service(s) shall include, without limitation, any insurance or financial service.
        </p>
        <p>
            The images, logos and names on this website which identify Smart Savings Today or third parties and their products and services are proprietary marks of Smart Savings Today or the relevant third parties. Nothing contained in this website shall be deemed to confer on any person any licence or right on the part of Smart Savings Today or any third party with respect to any such image, logo or name.
        </p>
        <p>
            We reserve the right to change these terms and conditions at any time by posting changes on the website. It is your responsibility to review the website terms and conditions regularly to ensure you are aware of the latest terms and conditions. Your use of this website after a change has been posted will be deemed to signify your acceptance of the modified terms and conditions. We recommend that you print off and retain for your records a copy of these terms and conditions from time to time and a copy of any terms and conditions relating to any product or service which you apply for online, together with any related application form completed and submitted. Any amendment to terms and conditions must be agreed in writing by us, or, if appropriate, by the relevant company with whom you contract.
        </p>
        <div class="clear"></div>		</div>

    <div id="privacy" class="portBox">
        <h1>smartsavings.today Privacy Policy</h1>
        <ol type="1">
            <li><a href="#whoarewe">Who are we?</a></li>
            <li><a href="#howdowecollect">How do we collect information?</a></li>
            <li><a href="#whatinformationcollect">What Information do we collect?</a></li>
            <li><a href="#whowesharewith">Who do we share your information with?</a></li>
            <li><a href="#howweuseinformation">How do we use your information?</a></li>
            <li><a href="#whatcookies">What cookies do we use?</a></li>
            <li><a href="#securesite">How secure is our site and what steps do we take to keep your information safe?</a></li>
            <li><a href="#rightsandresponsibilites">Your rights and responsibilities</a></li>
        </ol>
        <h2 id="whoarewe">1. Who Are We?</h2>
        <p>Smart Savings Today</p>
        <p>smartsavings.today are aware how important your privacy is, based on this we have implemented measures which will ensure any personal data that is obtained from you by visiting our website will be processed and maintained in line with accepted principles of good information handling and in accordance with the Data Protection Act 1998. Contained within this statement and set out below are details of the type of information that we at smartsavings.today may hold about you our customer, also how we obtain and process any information we may have and importantly how we protect your privacy.</p>
        <p>This privacy policy is only applicable to us and personal information which may be collected and obtained by us.</p>
        <p>smartsavings.today may choose to amend the content of this privacy policy on occasion. If this occurs then we will update the policy and the revised policy will be posted on this website.</p>
        <h2 id="howdowecollect">2. How Do We Collect Information?</h2>
        <p>We may obtain information from you through the websites, mobile applications or other similar devices, channels or applications operated by or on behalf of any of the following brands (referred to collectively in this Privacy Policy as the &quot;Sites&quot;):</p>
        <ul>
            <li>smartsavings.today</li>

        </ul>
        <p>If you have any queries relating to our use of your personal information, or any other related data protection questions, please contact our Compliance Team – email.</p>
        <h2 id="whatinformationcollect">3. What Information Do We Collect?</h2>
        <p>We collect personal information about you when you give this to us when applying for a debt solution product online. This might be, for example, to obtain comparative quotes for the debt solution and alternative financial products such as debt management plans, bankruptcy, protected trust deed, debt relief orders and individual voluntary arrangements. In the course of providing the Services to you, we may also store information about how you use our Sites, for example, the pages viewed, the website from which you came to visit our Sites, changes you make to information you supply to us, details of the quotes you request and your applications, together with details of your financial information, for example, bank account or payment details.</p>
        <p>In order to provide you with a debt solution we may need to collect personal information which data protection legislation defines as sensitive, such as medical history or criminal convictions. By proceeding with obtaining a quote you give your explicit consent to such information being processed by us and our third-party providers for the purposes stated in this Privacy Policy.</p>
        <p>We will store the information you provide and may use it to pre-populate fields on the Sites and to make it easier for you to use the Sites when making return visits</p>
        <p>We may monitor or record your calls, emails, SMS or other communications but we will do so in accordance with data protection legislation and other applicable law. Monitoring or recording will always be for business purposes, such as for quality control and training (e.g. where you call our compliance or customer service department), to prevent unauthorised use of our telecommunication systems and Sites, to ensure effective systems operation, to meet any legal obligation and/or to prevent or detect crime.</p>
        <p>We will periodically review your personal information to ensure that we do not keep it for longer than is permitted by law.</p>
        <h2 id="whowesharewith">4. Who do we share your information with?</h2>
        <p>When you complete an application, you consent to us disclosing your personal information to the following parties:</p>
        <ol type="a">
            <li><b>smartsavings.today:</b> (i) to communicate with you, including sending you information about products and services which may be of interest to you; (ii) to speed up form filling, or to personalise, or improve your experience on its website, mobile applications or other similar devices, channels or applications; or (iii) in accordance with its privacy policy.</li>
            <li><b>Trusted third parties</b> but only where you have opted in to allow us to do so and where we believe their products, services or other offers may interest you. These trusted parties could be the following:<br>
                <b>Financial Solutions: </b><br>
                <ul>
                    <li>Debt Management Companies offering financial solutions such as debt management plans, bankruptcy, individual voluntary arrangements and protected trust deeds. Our preferred partners in this sector are (but not limited to) <b>Credit Fix</b></li>
                    <li>Personal Loan companies who offer short term loans.</li>
                    <li>Secured Loan companies offering loans</li>
                    <li>Credit Brokers introducing customers to lenders</li>
                    <li>Credit Card providers / companies</li>
                </ul>
            </li>
            <li><b>Our channel operators</b>: whilst the majority of the channels on our Sites are run by us, some of our channels are designed and maintained for us by our third party service providers. We may receive your personal information from these service providers and use it in accordance with section 4 above.  We will only use the personal information we receive from third parties where the relevant third party can show that it was collected and processed with your consent;</li>
            <li><b>the Information Commissioners Office</b> and/or other regulatory/governing bodies, for the purposes of compliance monitoring;</li>
        </ol>
        <p>Where permitted by data protection and privacy law, we may also disclose information about you (including electronic identifiers such as IP addresses) and/or access your account:</p>
        <ol type="a">
            <li>if required or permitted to do so by law;</li>
            <li>if required to do so by any court, the Financial Conduct Authority, the Competition and Markets Authority or any other applicable regulatory, compliance, Governmental or law enforcement agency;</li>
            <li>if necessary in connection with legal proceedings or potential legal proceedings; and/or</li>
            <li>in connection with the sale or potential sale of all or part of our business.</li>
        </ol>
        <p>If we reasonably believe false or inaccurate information has been provided and fraud is suspected, details may be passed to fraud prevention agencies to prevent fraud and money laundering.</p>
        <p><b>Who might our panel of debt solution providers share your information with?</b></p>
        <p>Some of our providers will use your personal information to assess your circumstances (including information about any third party who is named on the policy) and verify the information that you have provided before providing a quote to you.  Some providers may carry out checks with fraud prevention and credit reference agencies. Both public data (e.g. the electoral roll) and private data (e.g. your personal credit history) may be checked in this way. Some providers may carry out checks against data they already hold on you, (or is held by the company whose brand they administer the product for, or members of their group of companies) such as data from existing products, account data, data from previous product transactions, accounts you may hold with them or loyalty scheme data to share with insurers in order to determine your premium If providers carry out these searches, a record of the search will appear on your credit report.  Some providers may also check public and private higher education sources to obtain information about your educational background.</p>
        <p>This information exchange allows providers to verify the information that is provided during the application process (including information about any third party who is named on the policy), and also helps to detect fraudulent applications. These checks are not unique to users of our Services - they may also be carried out if you obtain quotes from other sources.</p>
        <p>If you decide to enter into a debt solution with a third party provider through any of the debt solution providers, the information you have provided to us, together with any further information requested by, and supplied by you or us to the third party provider, will be held by the provider for the purposes set out in that provider&#39;s privacy policy. Therefore, you are strongly advised to read your chosen provider&#39;s privacy policy and satisfy yourself as to the purposes for which the provider will use your personal information before entering into the debt soluton. We have no responsibility for the uses to which a provider puts your personal information.</p>
        <h2 id="howweuseinformation">5. How do we use your information?</h2>
        <p>We may use your personal information:</p>
        <ol>
            <li>to <b>enable you to access and use</b> the Services;</li>
            <li>to <b>personalise and improve</b> aspects of our Services;</li>
            <li>for <b>research</b>, such as analysing market trends and customer demographics;</li>
            <li>
                to <b>communicate</b> with you, including some or all of the following:
                <ol type="i">
                    <li><b>sending you information about products and services which we think may be of interest to you</b> - this may include new product launches such as funeral plans, life insurance products, newsletters and opportunities to participate in market research;</li>
                    <li><b>sending you debt solution quotes</b> in order to provide this service to you, we may also send that information to our partners such as debt management companies offering financial debt solutions.</li>
                    <li><b>sending you a confirmation email of your quote</b> - when you submit an application with us, you will automatically be sent confirmation of your application by email or SMS so that you have a record of it;</li>
                </ol>
            </li>
            <li>to <b>process an application</b> between you and a third party;</lI>
            <li>to <b>search the websites of our trusted partners</b> in order to obtain the best quotes and financial solutions available to you;</lI>
            <li>to <b>track sales</b>, which may involve us sharing data with your product provider relating to the product(s) you have purchased. Your product provider may also send us information they hold relating to the product(s) you have purchased for this purpose;</lI>
            <li>to <b>match our data with data from other sources</b> - we may validate and analyse your information and, in some cases, match it against information that has been collected by a third party to ensure that the information we hold about you is as accurate, consistent and well-organised as possible. As well as ensuring that any marketing material that we send you is appropriate to your needs, this process also ensures that our Services continue to be as personalised and focused as possible;</lI>
            <li>to circulate our <b>customer survey review</b> which are available to customers once an application has been completed;</lI>
            <li>to enable you to <b>share our content</b> with others, e.g. by using any &#39;Email a friend&#39; or &#39;Share this&#39; functionality on our Sites.</lI>
        </ol>
        <p><b>Keeping you informed about the Services</b>: You agree that we and, with your consent, other trusted third parties will be entitled to contact you (depending on your contact preferences) via email, post, telephone, SMS, or by other electronic means such as via social and digital media, in relation to products, services and other offers that may interest you.</p>
        <p>Whenever you provide us with personal information, where necessary we will seek your consent and/or we will give you an opportunity to tell us you do not consent to the use and sharing of your information for marketing purposes. Unless you tell us otherwise, you are consenting to such use.</p>
        <h2 id="whatcookies">6. What cookies do we use?</h2>
        <p>A cookie is a very small text file placed on your computer or device. Cookies help us to:</p>
        <ol type="a">
            <li>understand browsing habits on the Sites;</li>
            <li>understand the number of visitors to the Sites and the pages visited; and</li>
            <li>remember you when you return to the Sites so we can provide you with access to previously saved quotes.</li>
        </ol>
        <p>Most cookies are deleted as soon as you close your browser or mobile application - these are known as session cookies. Others, known as persistent cookies, are stored on your computer or device either until you delete them or they expire. The cookie used to keep you signed in to your account expires after 90 days. Every time you visit smartsavings.today, you will be kept signed in for a further 90 days. By using the Services, you consent to us using cookies.</p>
        <p>You can choose to block or delete cookies through your browser settings. If you decide to block or delete our cookies, you will not be able to benefit from the full range of our Services and this may affect the performance of our Sites on your system. For more information on the cookies we use, please see our Cookie Policy.</p>
        <h2 id="securesite">How secure is our site and what steps do we take to keep you safe?</h2>
        <p>Our Sites are &quot;VeriSign Secure Websites&quot; and keeping information about you secure is very important to us. However, no data transmission over the internet can be guaranteed to be totally secure. Sensitive information, for example, your card details, is encrypted to minimise the risk of interception during transit.</p>
        <p>You may complete a registration process when you sign up to use parts of the Sites. This may include the creation of a username, password and/or other identification information. Any such details should be kept confidential by you and should not be disclosed to or shared with anyone. Where you do disclose any of these details, you are solely responsible for all activities undertaken on the Sites where they are used. To protect your account, we ask you to choose a strong password to access your information on our Sites. A strong password should include a mixture of letters and numbers. Your password can only be reset with access to the email address registered in our system.</p>
        <p>We do our best to keep the information you disclose to us secure. However, we can&#39;t guarantee or warrant the security of any information which you send to us, and you do so at your own risk. By using our Sites you accept the inherent risks of providing information online and will not hold us responsible for any breach of security.</p>
        <h2 id="rightsandresponsibilites">8. Your rights and responsibilities</h2>
        <p>You have certain rights under data protection legislation. For example, we will always let you have a copy of the personal information we hold about you, if you request it from us in writing. The law allows us to charge you a £10.00 fee for a copy of such information and we may do so.</p>
        <p>To make enquiries and/or exercise any of your rights set out in this Privacy Policy please contact our Customer Services Team at email.</p>
        <p>If you would like to opt out of future contact from Smart Savings Today please enter your details via <a href="http://www.removeme.co.uk">www.removeme.co.uk</a> or email where your details will be removed from any future marketing campaign.</p>
        <p>In order to ensure the Services we provide you continue to meet your needs we may ask you for feedback on your experience of using the Sites. Any feedback you provide will only be used as part of our programme of continuous improvement and will not be published on the Sites.</p>
        <p>Note that it is your responsibility to check and ensure that all information, content, material or data you provide on the Sites is correct, complete, accurate and not misleading and that you disclose all relevant facts.</p>
        <p>This Privacy Policy shall be governed and construed in all respects in accordance with the laws of England and Wales.</p>
        <p>We reserve the right to amend or modify this Privacy Policy at any time and any changes will be published on the Sites.</p>
        <p><b>Last updated March 2017</b></p>
        <div class="clear"></div>		</div>

    <div id="fees" class="portBox">
        <h1>Solution Fees</h1>
        <h2>How much does a Debt Management Plan (DMP) cost?</h2>
        <p>
            There are two main costs:<br>
            We do not charge for setting up your debt management plan. There is a monthly management fee of £35 per month.
        </p>
        <br>
        <h2>Individual Voluntary Arrangement (IVA) cost – what and how we charge for our services</h2>
        <p>
            Understanding this can be quite overwhelming. So it’s best to split this in two sections:<br>
            a) your fees<br>
            b) the costs you pay to creditors.<br>
        </p>
        <br>
        <h2>How much does an Individual Voluntary Arrangement cost?</h2>
        <p>
            There is a setup cost and an ongoing monthly cost. The monthly payment is calculated by the value of your essential bills and qualifying priority debts being deducted from any monthly income. On top of the setup costs there are minimum monthly contributions which start from £70 per month but actual payments depend on your affordability and may be:
        </p>
        <br>
        <h2>The IVA Fees:</h2>
        <p>
            <b>The Nominee Fee</b> – This fee covers the IVA set-up cost which includes drafting of the proposal, arranging the meeting of creditors and other administrative work as part of the process. This fee is usually the equivalent of your first five monthly payments once the IVA is approved subject to a minimum of £1,000.<br>
            <b>The Supervisor Fee</b> – This is normally 15% of each monthly payment made to your creditors after the Nominee fee has been paid. This will cover the work of your Insolvency Practitioner to distribute payments, manage your IVA creditors and maintain their statutory obligations as per the IVA proposal.<br>
            Costs and Disbursements – the monthly payment and what it covers<br>
            Each month you will be responsible for paying a set amount to service the debts contained within your IVA. This will be a minimum of £70. Other costs, known as disbursements, are paid for additional things such as registering the IVA, insurance (for the money you contribute on a monthly basis) and other costs such as legal or valuation fees should you need to release the equity in your home. These costs are paid out of your monthly contributions.<br>
            <b>An example of the costs and fees</b><br>
            This is an illustrative example, based on £31,000 of unsecured debts on a five year IVA without equity in a property while paying £300 per month. (£18,000 in total over 60 months)<br>
            The Nominee’s fee (typically equivalent to first 5 contributions): £1,500<br>
            The Supervisor’s fee*: £2,475<br>
            The Supervisor’s costs**: £1,000<br>
            Total returned back to creditors: £13,025 (42% of £31,000)<br>
            Total written off by borrower: £17,975 (58% of 31,000)<br>
            *15% of further monthly payments once the Nominee’s fee has been satisfied<br>
            ** Bond fee £50, DTI Fee £15, plus other case dependent costs.
        </p>
        <br>
        <h2>How much does a Debt Relief Order (DRO) cost?</h2>
        <p>
            There is an application fee of £90. This fee is paid to the Insolvency Service.<br>
            While this isn’t a service we provide we would refer you to the free advice sector for more information.<br>
            <a href="http://www.stepchange.org/Howwecanhelpyou/DRODebtrelieforder.aspx" target="_blank">Step Change</a><br>
            <a href="https://www.moneyadviceservice.org.uk/en/tools/debt-advice-locator" target="_blank">Money Advice Service</a>
        </p>
        <br>
        <h2>Protected Trust Deed (PTD) costs</h2>
        <p>
            There are fees charged by the Trustee for a PTD. There are two types of fees; Initial Trustee fee and a realisation fee (percentage of the amount that is paid in to the PTD). In addition there are also related costs which are called disbursements. These include legal registration costs.<br>
            The fees will be deducted from your monthly payments. The amount you pay is based on affordability after your essential expenditure has been considered in line with the Common Financial Statement.
        </p>
        <div class="clear"></div>		</div>

    <div id="complaints" class="portBox">
        <h1>Smart Savings Today Complaints Procedure</h1>
        <h2>How to complain...</h2>

        <p>Smart Savings Today always aim to be fair and honest in everything we do, so if you have a complaint about any aspect of our service we’re keen to resolve it as quickly as possible. You can contact us is any of the following ways: By Post:</p>



        <p>
            By Phone: <b>+1(888) 706-3514 (calls are charged at local rates and are inclusive of mobile phone users’ free minutes)</b>
        </p>

        <p>By Email: email</p>

        <p>We will acknowledge receipt of the complaint within 3 working days and we hope to provide a final response within 4 weeks. We will write to you again within 4 weeks if we are unable to provide a final response within that time period. In any event we will respond to your complaint in full within 8 weeks.</p>

        <p>If you are not satisfied with our response, or if a complaint is not resolved after eight weeks, you may refer the complaint to -</p>

        <p>
            <b>
                Financial Ombudsman Service<br>
                Exchange Tower<br>
                London<br>
                E14 9SR<br>
                Telephone: 0800 023 4567<br>
                Web site: <a href="http://www.financial-ombudsman.org.uk">www.financial-ombudsman.org.uk</a>
            </b>
        </p>		</div>

    <a href="index.html#" class="back-to-top"><img src="/images/debt/back-to-top.png" style="margin-bottom: 5px;"/><br />Top</a>



@endsection

@section('footer-scripts')
    @parent

    <script>
        $(document).ready(function(){
            $('#submit-1').on('click', function(e){
                e.preventDefault();
                var isValid = true;

                if($('#debtLevel').val() < 6000){
                    $('#debtLevelError').removeClass('hidden');
                    isValid = false
                } else {
                    $('#debtLevelError').addClass('hidden');
                }

                if($('#numDebts').val() < 2){
                    $('#numDebtsError').removeClass('hidden');
                    isValid = false
                } else {
                    $('#numDebtsError').addClass('hidden');
                }

                if (isValid){
                    $('#step-1').css('display', 'none');
                    $('#step-2').css('display', 'block');
                }
            })

            $('#submit-2').on('click', function(e){
                e.preventDefault();
                var isValid = true;

                if (!$('input[name="behind_on_bills"]:checked').val()){
                    $('#behindOnBillsError').removeClass('hidden');
                    isValid = false
                } else {
                    $('#behindOnBillsError').addClass('hidden');
                }

                if (isValid) {
                    $('#step-2').css('display', 'none');
                    $('#step-3').css('display', 'block');
                }
            })

            $('#submit-3').on('click', function(e){
                e.preventDefault();
                var isValid = true;

                if (!$('input[name="credit"]:checked').val()){
                    $('#creditRatingError').removeClass('hidden');
                    isValid = false
                } else {
                    $('#creditRatingError').addClass('hidden');
                }

                if (isValid) {
                    $('#step-3').css('display', 'none');
                    $('#step-4').css('display', 'block');
                }
            })

            $('#submit-4').on('click', function(e){
                e.preventDefault();
                var isValid = true;

                if (!$('input[name="employment_status"]:checked').val()){
                    $('#employmentStatusError').removeClass('hidden');
                    isValid = false
                } else {
                    $('#employmentStatusError').addClass('hidden');
                }

                if (isValid) {
                    $('#step-4').css('display', 'none');
                    $('#step-5').css('display', 'block');
                }
            })

            $('#submit-5').on('click', function(e){
                e.preventDefault();
                var isValid = true;

                if($('#houseNumber').val().length < 1){
                    $('#houseNumberError').removeClass('hidden');
                    isValid = false
                } else {
                    $('#houseNumberError').addClass('hidden');
                }

                if($('#postcode').val().length < 1){
                    $('#postcodeError').removeClass('hidden');
                    isValid = false
                } else {
                    $('#postcodeError').addClass('hidden');
                }

                if (isValid) {
                    $('#step-5').css('display', 'none');
                    $('#step-6').css('display', 'block');
                }
            })

            $('#submit-6').on('click', function(e){
                e.preventDefault();
                var isValid = true;

                if($('#email').val().length < 1){
                    $('#emailError').removeClass('hidden');
                    isValid = false
                } else {
                    $('#emailError').addClass('hidden');
                }

                if($('#bestTimeToCall').val().length < 1){
                    $('#timeError').removeClass('hidden');
                    isValid = false
                } else {
                    $('#timeError').addClass('hidden');
                }

                if (isValid){
                    $('#step-6').css('display', 'none');
                    $('#step-7').css('display', 'block');
                }
            })

            $('#submit-7').on('click', function(e){
                e.preventDefault();
                var isValid = true;

                if($('#firstName').val().length < 1){
                    $('#firstNameError').removeClass('hidden');
                    isValid = false
                } else {
                    $('#firstNameError').addClass('hidden');
                }

                if($('#lastName').val().length < 1){
                    $('#lastNameError').removeClass('hidden');
                    isValid = false
                } else {
                    $('#lastNameError').addClass('hidden');
                }

                if($('#telephone1').val().length < 1){
                    $('#telephone1Error').removeClass('hidden');
                    isValid = false
                } else {
                    $('#telephone1Error').addClass('hidden');
                }

                if (isValid){
                    $('form').submit();
                }
            })

        })
    </script>


@endsection


