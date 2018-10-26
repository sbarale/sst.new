@extends('fronts.sst.remodeling.empty-layout')
@section('title','Complete Car Warranty')
@section('header-middle-img','/images/ins.png')
@section('head')
    @parent
    <link rel="stylesheet" type="text/css" href="/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/css/medicare/step1.min.css">
    <link href="/css/awesome-bootstrap-checkbox.min.css" rel="stylesheet">
    <link href="/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <style>
        #primary-nav{
            width: 100%;
        }
        header{
            padding: 0px;
        }
        #step-2{
            display: none;
        }
        .stp1-btn-next-one {
            width: 100%;
            font-family: 'Open Sans',sans-serif;
            font-weight: 700;
            margin: auto;
            padding: 2rem;
            background: #f8c44f;
            text-align: center;
            font-size: 2rem;
            cursor: pointer;
            text-decoration: none!important;
            display: block;
        }
    </style>
@endsection


@section('content')
    <div class="step1-main-wrapper">
        <div class="step-progressbar-wrapper">
            <div class="step-progressbar-row1">

                <div class="step-progressbar-name">
                    <div class="sp-name-wrapper act-h">
                        <div>Zip Code</div>
                    </div>
                </div>

                <div class="step-progressbar-ws"></div>
                <div class="step-progressbar-name">
                    <div class="sp-name-wrapper act-h">
                        <div>Location</div>
                    </div>
                </div>

                <div class="step-progressbar-ws"></div>
                <div class="step-progressbar-name">
                    <div id="profile-title" class="sp-name-wrapper">
                        <div>Profile</div>
                    </div>
                </div>
                <div class="step-progressbar-ws"></div>
                <div class="step-progressbar-name">
                    <div id="quotes-title" class="sp-name-wrapper">
                        <div>Quotes</div>
                    </div>
                </div>
            </div>

            <div class="step-progressbar-row2">
                <div class="step-progressbar-circle done">
                    <div class="sp-circle-txt">
                        <div>1</div>
                    </div>
                </div>
                <div class="step-progressbar-line line-act"></div>
                <div id="step-progresbar-2" class="step-progressbar-circle now">
                    <div class="sp-circle-txt">
                        <div>2</div>
                    </div>
                </div>
                <div id="step-progressbar-line-2" class="step-progressbar-line"></div>
                <div id="step-progresbar-3" class="step-progressbar-circle ">
                    <div class="sp-circle-txt">
                        <div>3</div>
                    </div>
                </div>
                <div id="step-progressbar-line-3" class="step-progressbar-line"></div>
                <div id="step-progresbar-4" class="step-progressbar-circle">
                    <div class="sp-circle-txt">
                        <div>4</div>
                    </div>
                </div>
            </div>
        </div><!--step-progressbar-wrapper-->
        <div class="step1-input-wrapper">
            <form data-toggle="validator" role="form" id="myForm" action="/remodeling/medicare/1"  method="post">
                <input type="hidden" name="_submit" value="1"/>
                <div id="step-1">
                    {{ csrf_field() }}
                    <div class="stp1-input-row">
                        <div class="stp1-input-plan">
                            <label for="stp1-desired-plan" class="control-label">
                                Desired Plan *
                            </label>
                            <div class="form-group has-feedback">
                                <select id="stp1-desired-plan" name="Plan" class="form-control" data-equallls="foo" name="desired_plan" required>
                                    <!--<option disabled selected hidden></option>-->
                                    <option value='Medicare Supplemental' >Medicare Supplemental</option>
                                    <option value='Medicare Advantage' >Medicare Advantage</option>
                                    <option value='Medicare Part D' >Medicare Part D</option>
                                    <option value='Other Medicare' >Other Medicare</option>

                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="stp1-input-gender">
                            <div class="form-group has-feedback">
                                <!--<form role="form">-->
                                <label for="stp1-gender" class="control-label">
                                    Gender *
                                </label>
                                <div id="stp1-gender">

                                    <div>
                                        <div class="radio radio-warning">
                                            <input type="radio" name="gender" id="radio1" value="Male" required>
                                            <label for="radio1">
                                                Male
                                            </label>
                                        </div>
                                    </div>
                                    <div id="stp1-gender2">
                                        <div class="radio radio-warning">
                                            <input type="radio" name="gender" id="radio2" value="Female">
                                            <label for="radio2">
                                                Female
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div><!--stp1-input-gender-->
                    </div><!--stp1-input-row-->
                    <div class="stp1-input-row">
                        <div class="stp1-input-plan">
                            <label for="birth_date" class="control-label">
                                Date of Birth *
                            </label>
                            <div class="date" id="">
                                <div class="form-group has-feedback form-group-date">
                                    <select id="stp1-year" required class="form-control" name="birth_year">
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group has-feedback form-group-date">
                                    <select id="stp1-month" required class="form-control" name="birth_month">
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group has-feedback form-group-date">
                                    <select id="stp1-day" required class="form-control" name="birth_day">

                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="stp1-input-gender">

                            <label for="address" class="control-label">
                                Street Address *
                            </label>
                            <div class="form-group has-feedback">
                                <input type="text" id="address" class="form-control" name="street_address" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="stp1-input-address-edit">
                                <div></div>
                                <div class="stp1-address-edit-link">
                                    <a id="stp1-edit-link">
                                        <span class="glyphicon glyphicon-edit"></span>
                                        EDIT
                                    </a>
                                </div>
                            </div>
                            <div style="clear: both"></div>
                            <div id="stp1-edit-block">

                                <label for="city" class="control-label">
                                    City *
                                </label>
                                <div class="form-group has-feedback">
                                    <input type="text" id="city" class="form-control" name="city" value="" required>

                                    <div class="help-block with-errors"></div>
                                </div>
                                <div style="clear: both"></div>
                                <div class="form-group has-feedback">
                                    <label for="state" class="control-label">
                                        State *
                                    </label>
                                    <div class="lp-container" id="states">
                                        <select id='select_states' name='state' class="form-control" style='width:228px;' required >
                                            <option value=''>Select</option>
                                            <option value='AL' >AL</option>
                                            <option value='AK' >AK</option>
                                            <option value='AZ' >AZ</option>
                                            <option value='AR' >AR</option>
                                            <option value='CA' >CA</option>
                                            <option value='CO' >CO</option>
                                            <option value='CT' >CT</option>
                                            <option value='DE' >DE</option>
                                            <option value='FL' >FL</option>
                                            <option value='GA' >GA</option>
                                            <option value='HI' >HI</option>
                                            <option value='ID' >ID</option>
                                            <option value='IL' >IL</option>
                                            <option value='IN' >IN</option>
                                            <option value='IA' >IA</option>
                                            <option value='KS' >KS</option>
                                            <option value='KY' >KY</option>
                                            <option value='LA' >LA</option>
                                            <option value='ME' >ME</option>
                                            <option value='MD' >MD</option>
                                            <option value='MA' >MA</option>
                                            <option value='MI' >MI</option>
                                            <option value='MN' >MN</option>
                                            <option value='MS' >MS</option>
                                            <option value='MO' >MO</option>
                                            <option value='MT' >MT</option>
                                            <option value='NE' >NE</option>
                                            <option value='NV' >NV</option>
                                            <option value='NH' >NH</option>
                                            <option value='NJ' >NJ</option>
                                            <option value='NM' >NM</option>
                                            <option value='NY' >NY</option>
                                            <option value='NC' >NC</option>
                                            <option value='ND' >ND</option>
                                            <option value='OH' >OH</option>
                                            <option value='OK' >OK</option>
                                            <option value='OR' >OR</option>
                                            <option value='PA' >PA</option>
                                            <option value='RI' >RI</option>
                                            <option value='SC' >SC</option>
                                            <option value='SD' >SD</option>
                                            <option value='TN' >TN</option>
                                            <option value='TX' >TX</option>
                                            <option value='UT' >UT</option>
                                            <option value='VT' >VT</option>
                                            <option value='VA' >VA</option>
                                            <option value='WA' >WA</option>
                                            <option value='WV' >WV</option>
                                            <option value='WI' >WI</option>
                                            <option value='WY' >WY</option>
                                            <option value='AS' >AS</option>
                                            <option value='DC' >DC</option>
                                            <option value='FM' >FM</option>
                                            <option value='GU' >GU</option>
                                            <option value='MH' >MH</option>
                                            <option value='MP' >MP</option>
                                            <option value='PW' >PW</option>
                                            <option value='PR' >PR</option>
                                            <option value='VI' >VI</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div style="clear: both"></div>
                                <div class="form-group has-feedback">
                                    <label for="zip" class="control-label">
                                        ZIP *
                                    </label>
                                    <input type="text" id="zip" class="form-control" maxlength="5" name="zip_code" value="" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div style="clear: both"></div>

                                @include('fronts.sst._common.hidden_fields')

                            </div>
                        </div>
                    </div><!--stp1-input-row-->
                    <div class="stp1-btn-next_wrapper">
                        <!--<a href="step2.html">-->
                            <a href="#" class="stp1-btn-next-one">NEXT STEP</a>
                    </div>
                </div>

                <div id="step-2">
                    <div class="stp1-input-row">
                        <div class="stp1-input-plan form-group has-feedback">

                            <label for="first-name" class="control-label">
                                First Name *
                            </label>
                            <input type="text" id="first-name" class="form-control" name="first_name" required value=''>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="stp1-input-gender form-group has-feedback">
                            <label for="last-name" class="control-label">
                                Last Name *
                            </label>
                            <input type="text" id="last-name" class="form-control" name="last_name" required value=''>
                            <div class="help-block with-errors"></div>
                        </div><!--stp1-input-gender-->
                    </div><!--stp1-input-row-->
                    <div class="stp1-input-row">
                        <div class="stp1-input-plan form-group has-feedback">
                            <label for="Email" class="control-label" >
                                Email *
                            </label>
                            <input type="email" id="Email" class="form-control" name="email_address" required
                                   value=''>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="stp1-input-gender form-group has-feedback">
                            <label for="home-phone" class="control-label">
                                Primary Phone *
                            </label>
                            <input type="tel" required maxlength="10" minlength="10" id="home-phone" class="form-control" name="phone_home" value=''>

                            <div class="help-block with-errors"></div>
                        </div>
                    </div><!--stp1-input-row-->
                    <div class="stp1-input-row">
                        <div class="stp1-input-plan form-group has-feedback">
                            <label for="mobile-phone" class="control-label">
                                Second Phone
                            </label>
                            <input type="tel" maxlength="10" minlength="10" id="mobile-phone" class="form-control" placeholder="" name="alt_phone" value='' >
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="stp1-input-gender">
                        </div>
                    </div><!--stp1-input-row-->
                    <div class="stp1-btn-next_wrapper">
                        <button type="submit">
                            <div class="stp1-btn-next">See My Quotes!</div>
                        </button>
                    </div>
                    <div class="stp1-norton-logo">
                        <!--             <img src="pictures/steps/norton-logo.png" alt=""> -->
                    </div>


                </div>

            </form>
            <div class="stp1-norton-logo">
                <!--             <img src="pictures/steps/norton-logo.png" alt=""> -->
            </div>
        </div>
        <div class="stp1-bottom-txt">By clicking the button and submitting this form, I agree that I am 18+ years old and
            I provide my signature expressly consenting to receive emails, calls,
            and text messages about Medicare Supplement, Medicare Advantage, Part D,
            or other offers from these companies and agents to the number(s) I provided,
            including a mobile phone, even if I am on a state or federal Do Not Call and/or
            Do Not Email registry. Such calls and text messages may use automated telephone dialing systems,
            artificial or pre-recorded voices. I understand my wireless carrier may impose charges
            for calls or texts. I understand that my consent to receive communications is not a condition
            of purchase and I may revoke my consent at any time.
        </div>
    </div>
@endsection

@section('footer-scripts')
    @parent


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="/js/validator.js"></script>
    <script src="/js/mask.js"></script>

    <script>
        // config for datepicker
        $('.maskedbirthday').mask("00/00/0000", {clearIfNotMatch: true, placeholder: 'MM/DD/YYYY'});
        // generate 'Date of Birth' selectors
        var years = [];
        years[0] = "<option value='' selected hidden>Year</option>";
        for (var i = 1960; i >= 1915; i--) {
            years[years.length] = "<option value='"+i+"'>" + i + "</option>";
        }

        var monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];

        var month = [];
        month[0] = "<option value='' selected hidden>Month</option>";
        for (var i = 1; i < 13; i++) {
            month[month.length] = "<option value='"+i+"'>" + monthNames[i-1] + "</option>";

        }
        var days = [];
        days[0] = "<option value='' selected hidden>Day</option>";
        for (var i = 1; i < 32; i++) {
            days[days.length] = "<option value='"+i+"'>" + i + "</option>";

        }


        $("#stp1-year").append(years);
        $("#stp1-month").append(month);
        $("#stp1-day").append(days);
        $('.stp1-btn-next-one').on('click', function(e){
            e.preventDefault();
            $('#step-1 input, #step-1 select').trigger('input');
            setTimeout(function(){
                if ($('#step-1 .list-unstyled').length == 0){
                    $('#step-1').css('display', 'none');
                    $('#step-2').css('display', 'block');
                    $('#step-progresbar-2').removeClass('now').addClass('done');
                    $('#step-progresbar-3').addClass('now');
                    $('#step-progressbar-line-2').addClass('line-act');
                    $('#profile-title').addClass('act-h');
                }
            }, 1000);

        });

        //'Edit' block show/hide
        $("#stp1-edit-link").on("click", function () {
            var itm = $("#stp1-edit-block");
            var show = itm.css("display") === "none" ? "block" : "none";
            itm.css("display", show);

        });
        //validators
        var options = {
            custom: {
                equallls: function ($el) {
                    if (($el.val() !== '1')&&($el.val() !== '2')){
                        return "required field"
                    }
                }
            }
        };
        var valid= $('#myForm').validator();
        $('#select_states').val("");


        $('#stp1-edit-link').click();
        $('#stp1-edit-link').hide();

    </script>
@endsection


