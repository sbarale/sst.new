@extends('fronts.sst.remodeling.slider-layout')
@section('title','Take the Quiz to See if you Qualify')
@section('big-bg-img','/images/gray-bg-px.jpg')
@section('small-bg-img','/images/gray-bg-px.jpg')
@section('header-middle-img','/images/car-loan.png')
@section('head')
    @parent
    <link href="/css/bath/2/main.css" rel="stylesheet" type='text/css'/>
    <style>
        .btn-page2, .btn-page3{
            font-size:28px!important;
            padding: 10px 56px!important;
            margin-top: 20px;
        }
        .btn-page1{
            max-width: 250px;
            width: 100%;
        }
        @media screen and (max-width: 480px){
            .btn-page1{
                margin: 3px!important;
                margin-bottom: 10px!important;
            }
            .btn-page1 img{
                width: 80%;
            }
        }
    </style>
@endsection


@section('content')
    <div class="secondarybg whitebg">

        <form name="apply_form" action="/remodeling/car-loan/1" id="apply_form" class="form-horizontal quiz_form" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_submit" value="1" />
            <h1 class="header" id="survey_headline" style="font-weight: 500  !important; font-size: 30px; text-transform: uppercase;">HOW YOU CAN GET A CAR WITH ANY CREDIT IN
                <span id="statecurrent"></span></h1>
            <h1 class="header" id="thankyou_header" style="display: none">Please Wait While We Create Your Eligibility Code</h1>
            <h1 class="header" id="research_headline" style="display: none">Please be patient as we calculate results and research locations</h1>
            <h1 class="header" id="receive_info_headline" style="display: none;  ">Your Personal Report Is Almost Ready To Send</h1>

                <div class="progress">
                    <div class="progress-bar progress-bar-primary form-progress-bar" role="progressbar" style="width: 0%"></div>
                </div>


                <div id="flow-slider-container" class="slider-container">
                    <div class="slider-wrapper">
                        <div class="slider-slide" id="car_type_slide">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h2>
                                        Please Select Which Car You Want to Buy!
                                    </h2>
                                    <h4>
                                        (If you don’t know what car you want just press “UNSURE”)
                                    </h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1 col-xs-12">
                                    <input name="car-select" id="car-select" type="hidden">
                                    <button style="margin:15px;" class="btn btn-default btn-page1" data-value="suv" data-parsley-group="block1">
                                        <img src="/images/carloan/suv4.png" width="150"/>
                                    </button>
                                    <button style="margin:15px;" class="btn btn-default btn-page1" data-value="sedan" data-parsley-group="block1">
                                        <img src="/images/carloan/sedan4.png" width="150"/>
                                    </button>
                                    <button style="margin:15px;" class="btn btn-default btn-page1" data-value="truck" data-parsley-group="block1">
                                        <img src="/images/carloan/truck4.png" width="150"/>
                                    </button>
                                    <button style="margin:15px;" class="btn btn-default btn-page1" data-value="convertible" data-parsley-group="block1">
                                        <img src="/images/carloan/convertible4.png" width="150"/>
                                    </button>
                                    <button style="margin:15px;" class="btn btn-default btn-page1" data-value="minivan" data-parsley-group="block1">
                                        <img src="/images/carloan/minivan4.png" width="150"/>
                                    </button>
                                    <button style="margin:15px;" class="btn btn-default btn-page1" data-value="unsure" data-parsley-group="block1">
                                        <img src="/images/carloan/unsure4.png" width="150"/>
                                    </button>


                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">

                                </div>
                            </div>
                        </div>

                        <div class="slider-slide" id="dob_type_slide">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h2>
                                        Please Enter Your Date Of Birth
                                    </h2>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-3 col-md-6">
                                    <div class="col-sm-4 col-xs-4">

                                        <!--required -->
                                        <span> Month</span>
                                        <select id="birth_month" name="birth_month" class="form-control input-lg" required="" data-parsley-error-message="Month is required" data-parsley-group="block3">

                                            <option value="">Month</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="04">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 col-xs-4">
                                        <span> Day</span>
                                        <select id="birth_day" name="birth_day" required="" data-parsley-error-message="Day is required" class="form-control input-lg" data-parsley-group="block3">
                                            <option value="">Day</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="04">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 col-xs-4">
                                        <span> Year</span>
                                        <select id="birth_year" name="birth_year" required="" data-parsley-error-message="Year is required" class="form-control input-lg" data-parsley-group="block3">
                                            <option value="">Year</option>
                                            <option value="2004">2004</option>
                                            <option value="2003">2003</option>
                                            <option value="2002">2002</option>
                                            <option value="2001">2001</option>
                                            <option value="2000">2000</option>
                                            <option value="1999">1999</option>
                                            <option value="1998">1998</option>
                                            <option value="1997">1997</option>
                                            <option value="1996">1996</option>
                                            <option value="1995">1995</option>
                                            <option value="1994">1994</option>
                                            <option value="1993">1993</option>
                                            <option value="1992">1992</option>
                                            <option value="1991">1991</option>
                                            <option value="1990">1990</option>
                                            <option value="1989">1989</option>
                                            <option value="1988">1988</option>
                                            <option value="1987">1987</option>
                                            <option value="1986">1986</option>
                                            <option value="1985">1985</option>
                                            <option value="1984">1984</option>
                                            <option value="1983">1983</option>
                                            <option value="1982">1982</option>
                                            <option value="1981">1981</option>
                                            <option value="1980">1980</option>
                                            <option value="1979">1979</option>
                                            <option value="1978">1978</option>
                                            <option value="1977">1977</option>
                                            <option value="1976">1976</option>
                                            <option value="1975">1975</option>
                                            <option value="1974">1974</option>
                                            <option value="1973">1973</option>
                                            <option value="1972">1972</option>
                                            <option value="1971">1971</option>
                                            <option value="1970">1970</option>
                                            <option value="1969">1969</option>
                                            <option value="1968">1968</option>
                                            <option value="1967">1967</option>
                                            <option value="1966">1966</option>
                                            <option value="1965">1965</option>
                                            <option value="1964">1964</option>
                                            <option value="1963">1963</option>
                                            <option value="1962">1962</option>
                                            <option value="1961">1961</option>
                                            <option value="1960">1960</option>
                                            <option value="1959">1959</option>
                                            <option value="1958">1958</option>
                                            <option value="1957">1957</option>
                                            <option value="1956">1956</option>
                                            <option value="1955">1955</option>
                                            <option value="1954">1954</option>
                                            <option value="1953">1953</option>
                                            <option value="1952">1952</option>
                                            <option value="1951">1951</option>
                                            <option value="1950">1950</option>
                                            <option value="1949">1949</option>
                                            <option value="1948">1948</option>
                                            <option value="1947">1947</option>
                                            <option value="1946">1946</option>
                                            <option value="1945">1945</option>
                                            <option value="1944">1944</option>
                                            <option value="1943">1943</option>
                                            <option value="1942">1942</option>
                                            <option value="1941">1941</option>
                                            <option value="1940">1940</option>
                                            <option value="1939">1939</option>
                                            <option value="1938">1938</option>
                                            <option value="1937">1937</option>
                                            <option value="1936">1936</option>
                                            <option value="1935">1935</option>
                                            <option value="1934">1934</option>
                                            <option value="1933">1933</option>
                                            <option value="1932">1932</option>
                                            <option value="1931">1931</option>
                                            <option value="1930">1930</option>
                                            <option value="1929">1929</option>
                                            <option value="1928">1928</option>
                                            <option value="1927">1927</option>
                                            <option value="1926">1926</option>
                                            <option value="1925">1925</option>
                                            <option value="1924">1924</option>
                                            <option value="1923">1923</option>
                                            <option value="1922">1922</option>
                                            <option value="1921">1921</option>
                                            <option value="1920">1920</option>
                                            <option value="1919">1919</option>
                                            <option value="1918">1918</option>
                                            <option value="1917">1917</option>
                                            <option value="1916">1916</option>
                                            <option value="1915">1915</option>
                                            <option value="1914">1914</option>
                                            <option value="1913">1913</option>
                                            <option value="1912">1912</option>
                                            <option value="1911">1911</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-12" style="padding-top: 5px;">
                                    <button type="button" class="btn btn-success btn-lg btn-page2">Next</button> <!-- btn-page3 old -->
                                </div>


                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <p>To qualify for the instance acceptance program you must answer 5 questions. Please answer the questions <b>truthfully.</b>
                                    </p></div>
                            </div>
                        </div>

                        <div class="slider-slide" id="zip_slide">
                            <input type="hidden" name="page_track_zip" value="1"/>
                            <div class="row">
                                <div class="col-xs-12">
                                    <h2>
                                        Enter Your Street Address
                                    </h2>
                                    <h5>
                                        (we need this to find your nearest lender matches)
                                    </h5>
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
                                    <button type="button" class="btn btn-success btn-lg btn-page3" disabled>Next</button><!-- btn-page4 old -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <p>To qualify for the instance acceptance program you must answer 5 questions. Please answer the questions <b>truthfully.</b>
                                    </p></div>
                            </div>
                        </div>

                        <div class="slider-slide" id="debt_type_slide">
                            <input type="hidden" name="page_track_debt_amount" value="1"/>
                            <div class="row">
                                <div class="col-xs-12">
                                    <h2>
                                        Time at this Address
                                    </h2>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <select name="residence_time" id="residence_time" class="form-control input-lg" required data-parsley-error-message="Please select your time at this address" data-parsley-group="block2">
                                        <!--<option value="100">Under $100</option>-->
                                        <option value="1">1 Year or Less</option>
                                        <option value="2">2 Years</option>
                                        <option value="3">3 Years</option>
                                        <option value="4">4 Years</option>
                                        <option value="5">5 Years</option>
                                        <option value="6">6 Years</option>
                                        <option value="7">7 Years</option>
                                        <option value="8">8 Years</option>
                                        <option value="9">9 Years</option>
                                        <option value="10">10 Years or More</option>

                                    </select>
                                    <h2>Do you rent or own?</h2>
                                    <select name="residence_status" id="residence_status" class="form-control input-lg" required data-parsley-error-message="Please select your bill amount" data-parsley-group="block2">
                                        <!--<option value="100">Under $100</option>-->
                                        <option value="own">Own</option>
                                        <option value="rent">Rent</option>
                                    </select>
                                    <h2>Monthly Rent/Mortgage?</h2>

                                    <select name="residence_payment" id="residence_payment" class="form-control input-lg" required data-parsley-error-message="Please select your bill amount" data-parsley-group="block2">
                                        <!--<option value="100">Under $100</option>-->
                                        <option value="100">$100-</option>
                                        <option value="200">$100 - $200</option>
                                        <option value="300">$200 - $300</option>
                                        <option value="400">$300 - $400</option>
                                        <option value="500">$400 - $500</option>
                                        <option value="600">$500 - $600</option>
                                        <option value="700">$600 - $700</option>
                                        <option value="800">$700 - $800</option>
                                        <option value="900">$800 - $900</option>
                                        <option value="1000">$900 - $1000</option>
                                        <option value="1100">$1000 - $1100</option>
                                        <option value="1200">$1100 - $1200</option>
                                        <option value="1300">$1200 - $1300</option>
                                        <option value="1400">$1300 - $1400</option>
                                        <option value="1500">$1400 - $1500</option>
                                        <option value="1600">$1500 - $1600</option>
                                        <option value="1700">$1600 - $1700</option>
                                        <option value="1800">$1700 - $1800</option>
                                        <option value="1900">$1800 - $1900</option>
                                        <option value="2000">$1900 - $2000</option>
                                        <option value="2100">$2000 - $2100</option>
                                        <option value="2200">$2100 - $2200</option>
                                        <option value="2300">$2200 - $2300</option>
                                        <option value="2400">$2300 - $2400</option>
                                        <option value="2500">$2400 - $2500</option>
                                        <option value="2600">$2500+</option>
                                    </select>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <button type="button" id="btn-page6" class="btn btn-success btn-lg btn-page4">Next</button> <!-- btn-page6 old -->
                                    <!-- <button type="button" id="btn-page2" disabled class="btn btn-success btn-lg btn-page2">Next Question</button>-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12" style="font-family:'roboto Condensed' !important;">
                                    <p>To qualify for the instance acceptance program you must answer 5 questions. Please answer the questions <b>truthfully.</b>
                                    </p>

                                </div>
                            </div>
                        </div>


                        <!-- slidernew-->
                        <div class="slider-slide" id="job_slider">
                            <input type="hidden" name="page_track_debt_amount" value="1"/>
                            <div class="row">
                                <div class="col-md-6">
                                    <h2>
                                        Employer Name
                                    </h2>
                                    <input type="text" id="employer_name" name="employer_name" class="form-control input-lg" required data-parsley-error-message="Please enter your Employer Name" data-parsley-group="block8" placeholder="Employer Name"/>
                                    <h2>Time at this Employer?</h2>
                                    <select name="employer_time" id="employer_time" class="form-control input-lg" required data-parsley-error-message="Please select your bill amount" data-parsley-group="block8">

                                        <option value="1">1 Year or Less</option>
                                        <option value="2">2 Years</option>
                                        <option value="3">3 Years</option>
                                        <option value="4">4 Years</option>
                                        <option value="5">5 Years</option>
                                        <option value="6">6 Years</option>
                                        <option value="7">7 Years</option>
                                        <option value="8">8 Years</option>
                                        <option value="9">9 Years</option>
                                        <option value="10">10 Years or More</option>


                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <h2>
                                        Job Title
                                    </h2>
                                    <input type="text" id="job_title" name="job_title" class="form-control input-lg" required data-parsley-error-message="Please enter your job title" data-parsley-group="block8" placeholder="Job Title"/>

                                    <h2>Monthly Gross Income?</h2>

                                    <select name="monthly_income" id="monthly_income" class="form-control input-lg" required data-parsley-error-message="Please select your bill amount" data-parsley-group="block8">
                                        <!--<option value="100">Under $100</option>-->
                                        <option value="100">$100-</option>
                                        <option value="200">$100 - $200</option>
                                        <option value="300">$200 - $300</option>
                                        <option value="400">$300 - $400</option>
                                        <option value="500">$400 - $500</option>
                                        <option value="600">$500 - $600</option>
                                        <option value="700">$600 - $700</option>
                                        <option value="800">$700 - $800</option>
                                        <option value="900">$800 - $900</option>
                                        <option value="1000">$900 - $1000</option>
                                        <option value="1100">$1000 - $1100</option>
                                        <option value="1200">$1100 - $1200</option>
                                        <option value="1300">$1200 - $1300</option>
                                        <option value="1400">$1300 - $1400</option>
                                        <option value="1500">$1400 - $1500</option>
                                        <option value="1600">$1500 - $1600</option>
                                        <option value="1700">$1600 - $1700</option>
                                        <option value="1800">$1700 - $1800</option>
                                        <option value="1900">$1800 - $1900</option>
                                        <option value="2000">$1900 - $2000</option>
                                        <option value="2100">$2000 - $2100</option>
                                        <option value="2200">$2100 - $2200</option>
                                        <option value="2300">$2200 - $2300</option>
                                        <option value="2400">$2300 - $2400</option>
                                        <option value="2500">$2400 - $2500</option>
                                        <option value="2600">$2500+</option>
                                    </select>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <button type="button" id="btn-page2" class="btn btn-success btn-lg btn-page5">Next</button> <!-- btn-page2 old -->
                                    <!-- <button type="button" id="btn-page2" disabled class="btn btn-success btn-lg btn-page2">Next Question</button>-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12" style="font-family:'roboto Condensed' !important;">
                                    <p>To qualify for the instance acceptance program you must answer 5 questions. Please answer the questions <b>truthfully.</b>
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="slider-slide" id="calculate_slide">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div id="animated6" style="margin-top: 20px; display: none;">
                                        <img src="/images/checker.gif"/>

                                    </div>


                                    <div class="msg1">
                                        <p>Checking for Answer</p>
                                    </div>
                                    <div class="msg2 hidden">
                                        <p>Car loan programs available in <span id="country_name">Your State</span></p>
                                    </div>
                                    <div class="msg3 hidden">
                                        <p>Programs available for Car Loan </p>
                                    </div>
                                    <div class="msg5 hidden">
                                        <p><strong>Congratulations!</strong></p>
                                    </div>
                                    Loading…
                                </div>
                            </div>
                        </div>


                        <div class="slider-slide" id="name_slide">
                            <input type="hidden" name="page_track_name" value="1"/>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div style="font-weight:bold;">
                                        <p>Please Fill Out Information Below so You Can Receive Your Results </p></div>
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
                                    <input type="tel" id="phone" name="phone" class="form-control input-lg" required data-parsley-usphone="1" data-parsley-minlength="10" data-parsley-maxlength="14" data-parsley-error-message="Please enter a valid phone with area code" data-parsley-group="block5" placeholder="Enter Your Phone (With Area Code)"/>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col-sm-12 col-md-6">
                                    Social Security Number
                                    <div class="row ssn-row">
                                        <div class="col-xs-3" style="line-height: 46px;">
                                            <img src="/images/logo_comodo.png" style="max-width: 100%;">
                                        </div>
                                        <div class="col-xs-3">
                                            <input type="text" pattern="[0-9]*" id="ssn1" name="ssn1" class="form-control input-lg" maxlength="3" data-parsley-group="block5" required="" data-parsley-maxlength="3" data-parsley-minlength="3" onKeyUp="ssnChange()">
                                        </div>
                                        <div class="col-xs-3">
                                            <input type="text" pattern="[0-9]*" id="ssn2" name="ssn2" class="form-control input-lg" maxlength="2" data-parsley-group="block5" required="" data-parsley-maxlength="2" data-parsley-minlength="2" onKeyUp="ssnChange()">
                                        </div>
                                        <div class="col-xs-3">
                                            <input type="text" pattern="[0-9]*" id="ssn3" name="ssn3" class="form-control input-lg" maxlength="4" data-parsley-group="block5" required="" data-parsley-maxlength="4" data-parsley-minlength="4" onKeyUp="ssnChange()">
                                        </div>
                                        <input type="hidden" pattern="[0-9]*" id="ssn" name="ssn" class="form-control input-lg" maxlength="11" data-parsley-group="block5" required="" data-parsley-maxlength="11">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    Street Address
                                    <input type="text" id="address2" name="address2" class="form-control input-lg" disabled/>

                                </div>
                                <div class="col-xs-6 visible-sm visible-xs">
                                    State
                                    <input type="text" id="state" name="state" class="form-control input-lg" readonly>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <button type="button" class="btn btn-success btn-lg btn-page6">Get Results</button> <!-- btn-page5 old -->

                                    </br> </br> </br> </br>
                                    <!-- begin tcpa-->
                                    <div style="color:gray; font-size: 10px;">
                                        <div id="tcpa">
                                            <input type="hidden" id="leadid_tcpa_disclosure"/>
                                            <label for="leadid_tcpa_disclosure">
                                                By clicking above, you authorize http://easyloanhelp.com and up to four Car Loan Companies to call you and send you pre-recorded messages and text messages at the number you entered above, using an autodialer, with offers about their products or services, even if your phone number is a mobile phone or is on any national or state “Do Not Call” list. Message and data rates may apply. Your consent here is not based on a condition of purchase.
                                            </label>
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

@section('footer-scripts')
    @parent
    <script type="text/javascript">
        $(function () {
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
                $('.btn-page3').removeAttr('disabled'); //btn-page4 old
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
        var empty_caption = '-- Please select --';
        var hidePopup = false;

        $(function () {
            $('#ssn1, #ssn2, #ssn3').autotab_magic().autotab_filter('numeric');
            ssnChange = function () {
                var ssn1 = $('#ssn1').val();
                var ssn2 = $('#ssn2').val();
                var ssn3 = $('#ssn3').val();
                $('#ssn').val(ssn1 + '-' + ssn2 + '-' + ssn3);
            }

            $("#phone").mask("999-999-9999");

            $('#apply_form').parsley();

            var slider = $('#flow-slider-container').unslider({
                'initialElement': $('#car_type_slide')
            });

            var slider_data = slider.data('unslider');

            $('#apply_form :input').on('keypress', function (e) {
                e.stopPropagation();
                if (e.keyCode == 13) {
                    e.preventDefault();
                    var page_idx = ($(this).closest('.slider-slide').index() + 1);
                    console.log('-------------')
                    console.log($('.btn-page' + page_idx));
                    $('.btn-page' + page_idx).trigger('click');

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

            $('.btn-page1').on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();

                var newval = $(this).data('value');
                $('#car-select').val(newval);
                if ($('#apply_form').parsley().validate('block1') === true) {
                    var $slider_item = $(this).closest('.slider-slide');
                    var serialized_section = $slider_item.find(':input').serialize();
                    $('.form-progress-bar').css({ 'width': '20%' });
                    slider_data.move('#dob_type_slide');
                }
            });


            $('.btn-page4').on('click', function (e) { // btn-page6 old
                e.stopPropagation();
                if ($('#apply_form').parsley().validate('block2') === true) {
                    var $slider_item = $(this).closest('.slider-slide');
                    var serialized_section = $slider_item.find(':input').serialize();
                    slider_data.move('#job_slider');
                    $('.form-progress-bar').css({ 'width': '70%' });
                }
            });

            $('.btn-page5').on('click', function (e) { // btn-page2 old
                e.stopPropagation();
                if ($('#apply_form').parsley().validate('block8') === true) {
                    var $slider_item = $(this).closest('.slider-slide');
                    var serialized_section = $slider_item.find(':input').serialize();
                    $("#survey_headline").hide();
                    $("#research_headline").show();

                    $('.form-progress-bar').css({ 'width': '70%' });
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
                        $('.form-progress-bar').css({ 'width': '80%' });
                        slider_data.move('#name_slide');
                        $("#receive_info_headline").show();
                        $("#research_headline").hide();
                        hidePopup = false;
                    }, 11000);
                }
            });
            $('.btn-page2').on('click', function (e) { // btn-page3 old
                e.stopPropagation();
                var newval = $(this).data('value');

                if ($('#apply_form').parsley().validate('block3') === true) {
                    var $slider_item = $(this).closest('.slider-slide');
                    var serialized_section = $slider_item.find(':input').serialize();

                    $('.form-progress-bar').css({ 'width': '40%' });
                    slider_data.move('#zip_slide');
                }
            });

            $('.btn-page3').on('click', function (e) { // btn-page4 old
                e.stopPropagation();
                if ($('#apply_form').parsley().validate('block4') === true) {
                    var zip = $('#zip').val();
                    if (zip) {
                        if ($('#zip').is(':visible')) {
                            codeAddress();
                        }
                        hidePopup = true;
                        $('.form-progress-bar').css({ 'width': '60%' });
                        slider_data.move('#debt_type_slide');
                    }
                    else {
                        alert('Please select an address from the suggestions list.');
                    }
                }
            });
            $('.btn-page6').on('click', function (e) { //btn-page5 old
                e.stopPropagation();
                if ($('#apply_form').parsley().validate('block5') === true) {
                    $('.btn-page6').addClass('disabled');
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

@endsection


