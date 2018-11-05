@extends('layouts.empty')
@section('title','Complete Car Warranty')
@section('header-middle-img','/images/ins.png')
@section('head')
    @parent
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap-select.min.js"></script>
    <script src="/js/formValidation.min.js"></script>
    <script src="/js/formvalidation-framework-bootstrap.min.js"></script>
    <script src="/js/jquery.easing.min.js"></script>
    <script src="/js/validator.js"></script>
    <!--<script src="/js/agency.js"></script>-->
    <script src="/js/jquery.steps.min.js" type="text/javascript"></script>

    <script src="/js/radio-switches.js"></script>
    <script src="/js/stepPostScript.js"></script>

    <script src="/js/form-planforlater.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Handlee%7COpen+Sans:400,600%7CRaleway:400,500,600&subset=latin-ext" rel="stylesheet">

    <link href='/css/font-awesome.min.css' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link href="/css/insurance/main.css" rel="stylesheet">
    <link href="/css/insurance/queries.css" rel="stylesheet">
    <script>
        $(function() {
            ranges = {
                runSlider: function() {
                    var $document = $(document);var selector = '[rangeslider]'; var $element = $(selector);
                    var textContent = ('textContent' in document) ? 'textContent' : 'innerText';
                    function valueOutput(element) {
                        var value = element.value;
                        var output = element.parentNode.getElementsByTagName('output')[0] || element.parentNode.parentNode.getElementsByTagName('output')[0];
                        output[textContent] = value;
                    }
                    $document.on('input', 'input[type="range"], ' + selector, function(e) { valueOutput(e.target);});
                    $element.rangeslider({ polyfill: false, onInit: function() {valueOutput(this.$element[0]); }});
                }
            }
            ranges.runSlider();
        });
    </script>
@endsection


@section('content')

        <div class="form-page">
            <div class="form-body">

                <div id="formWrapper">
                    <!-- main container div-->
                    <div id="container" class="container">
                        <div class="row">
                            <div id="maincontent" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <form id="stepForm" role="form" class="form-horizontal" action="/remodeling/insurance/1" method="post">
                                    {{ csrf_field() }}
                                    <h2></h2>
                                    <section data-step="0">
                                        <span class="heading">Are you over the age of 50?</span>
                                        <div class="col-sm-12 genderDesktop" id="radioBtn">
                                            <div class="stage-radio-group radio-group1 over50-group">
                                                <div class="col-xs-6 text-center" id="noOn" style="padding-left:5px;">
                                                    <input type="radio" name="over50" id="over50No" value="No" class="radio">
                                                    <label for="over50No" style="background-color:#e74c3c">
                                                        <img src="/images/insurance/white-cross-no-shadow.svg" alt="No" />
                                                    </label>
                                                </div>
                                                <div class="col-xs-6 text-center" id="yesOn" style="padding-right:5px;">
                                                    <input type="radio" name="over50" id="over50Yes" value="Yes" class="radio" >
                                                    <label for="over50Yes" style="background-color:#27ae60">
                                                        <img src="/images/insurance/white-tick-no-shadow.svg" alt="Yes" />
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/.col-sm-6 -->
                                    </section>
                                    <!-- ============================================================================= -->
                                    <h2></h2>
                                    <section data-step="1">
                                        <span class="heading">Are you a UK resident?</span>
                                        <div class="col-sm-12 genderDesktop" id="radioBtn">
                                            <div class="stage-radio-group radio-group2 resident-group">
                                                <div class="col-xs-6 text-center" id="noOn" style="padding-left:5px;">
                                                    <input type="radio" name="resident" id="residentNo" value="No" class="radio">
                                                    <label for="residentNo" style="background-color:#e74c3c">
                                                        <img src="/images/insurance/white-cross-no-shadow.svg" alt="No" />
                                                    </label>
                                                </div>
                                                <div class="col-xs-6 text-center" id="yesOn" style="padding-right:5px;">
                                                    <input type="radio" name="resident" id="residentYes" value="Yes" class="radio" >
                                                    <label for="residentYes" style="background-color:#27ae60">
                                                        <img src="/images/insurance/white-tick-no-shadow.svg" alt="Yes" />
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/.col-sm-6 -->
                                    </section>
                                    <!-- ============================================================================= -->
                                    <h2></h2>
                                    <section data-step="2">
                                        <span class="heading">What is your Post Code?</span>
                                        <div class="col-xs-12">
                                            <div class="stages-modern-inner">
                                                <div class="form-group has-feedback postcode">
                                                    <label for="postCode" class="control-label desktop">Post Code *</label>
                                                    <input name="postCode" type="text" id="postCode" class="form-control required" placeholder="Post Code" autocomplete="postal-code">
                                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                </div><!--/.form-group-->
                                            </div><!--/.stages-modern-inner-->
                                        </div><!--/.col-md-4 col-lg-4-->
                                    </section>
                                    <!-- ============================================================================= -->
                                    <h2></h2>
                                    <section data-step="3">
                                        <span class="heading">What is your Date of Birth?</span>
                                        <div class="form-group has-feedback age">
                                            <div class="col-sm-4">
                                                <select name="dd_dob_day" id="dd_dob_day" class="form-control">
                                                    <option value="" selected disabled>Day</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
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
                                                <span class="mobileSelectArrow"></span>
                                            </div>
                                            <div class="col-sm-4">
                                                <select name="dd_dob_month" id="dd_dob_month" class="form-control">
                                                    <option value="" selected disabled>Month</option>
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
                                                <span class="mobileSelectArrow"></span>
                                            </div>
                                            <div class="col-sm-4">
                                                <select name="dd_dob_year" id="dd_dob_year" class="form-control">
                                                    <option value="" selected disabled>Year</option>
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
                                                </select>
                                                <span class="mobileSelectArrow"></span>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- ============================================================================= -->
                                    <h2></h2>
                                    <section data-step="4">
                                        <span class="heading">What is your Name?</span>
                                        <div class="col-xs-12">
                                            <div class="stages-modern-inner">
                                                <div class="form-group has-feedback namefl">
                                                    <label for="firstName" class="control-label desktop">First Name</label>
                                                    <input name="firstName" type="text" id="firstName" class="form-control required" placeholder="First Name" autocomplete="given-name">


                                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                </div><!--/.form-group-->
                                            </div><!--/.stages-modern-inner-->
                                        </div><!--/.col-->
                                        <div class="col-xs-12">
                                            <div class="stages-modern-inner">
                                                <div class="form-group has-feedback namefl">
                                                    <label for="lastName" class="control-label desktop">Last Name</label>
                                                    <input name="lastName" type="text" id="lastName" class="form-control required" placeholder="Last Name" autocomplete="family-name">

                                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                </div><!--/.form-group-->
                                            </div><!--/.stages-modern-inner-->
                                        </div><!--/.col-->
                                    </section>
                                    <!-- ============================================================================= -->
                                    <h2></h2>
                                    <section data-step="5">
                                        <span class="heading">What is your Email?</span>
                                        <div class="col-xs-12">
                                            <div class="stages-modern-inner">
                                                <div class="form-group has-feedback emailu">
                                                    <label for="email" class="control-label desktop">Email address *</label>
                                                    <input name="email" type="text" id="email" class="form-control required email" placeholder="Email Address" autocomplete="email">
                                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                </div><!--/.form-group-->
                                            </div><!--/.stages-modern-inner-->
                                        </div><!--/.col -->
                                    </section>
                                    <!-- ============================================================================= -->
                                    <h2></h2>
                                    <section data-step="6">
                                        <span class="heading">What is your Contact Number?</span>
                                        <div class="col-xs-12">
                                            <div class="stages-modern-inner">
                                                <div class="form-group has-feedback mobileu">
                                                    <label for="landLinePhone" class="control-label desktop">Contact No. 1 *</label>
                                                    <input name="landLinePhone" type="tel" id="landLinePhone" class="form-control" placeholder="Main Phone Number (Needed for accurate quote)" autocomplete="tel">

                                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                </div><!--/.form-group-->
                                            </div><!--/.stages-modern-inner-->
                                        </div><!--/.col -->

                                        <div class="col-xs-12 disclaimer">
                                            By Clicking "(Finish)" you consent to be contacted by our <a href="javascript:my_function();" >trusted funeral planning providers</a> to discuss your wishes and requirements relating to the funeral plan by Telephone, Email and SMS.<br><br>

                                            Information provided will be used to assess your circumstances as per the Terms & Conditions & Privacy Policy.
                                        </div>
                                <div id="extraFields" style="display:none;">
                                    <input type="text" name="eId" id="eId">
                                    <input type="text" name="sId" id="sId">
                                    <input type="text" name="aId" id="aId">
                                    <input type="text" name="oId" id="oId">
                                    <input id="ip" name="ip" value="">

                                    <input type="text" name="ad_group" id="ad_group">
                                    <input type="text" name="campaign" id="campaign">
                                    <input type="text" name="cam" id="campaign">
                                    <input type="text" name="kw" id="keyword">
                                    <input type="text" id="sourceUrl" name="sourceUrl" value="">

                                    <input type="text" name="pId" value="9">
                                    <input type="text" name="webId" value="24">

                                    <input type="text" name="dateOfBirth" id="main_dob">

                                    <input type="text" name="partner_title" id="partner_title">
                                    <input type="text" name="partner_fname" id="partner_fname">
                                    <input type="text" name="partner_lname" id="partner_lname">
                                    <input type="text" name="part_dob_day" id="part_dob_day">
                                    <input type="text" name="part_dob_month" id="part_dob_month">
                                    <input type="text" name="part_dob_yearr" id="part_dob_year">
                                    <input type="text" name="partner_dob" id="partner_dob">
                                    <input type="text" name="partner_smoker" id="partner_smoker">
                                    <input type="hidden" name="_submit" value="1" />
                                </div>
                                <div class="clearfix"></div>
                            </section>
                            <!-- end of wizard-->
                            @include('fronts.sst._common.hidden_fields')
                            </form>
                            <!-- end of form-->
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>
        <div class="secureIcons"><!-- <img src="media/1385/review-safe.png" class="img-responsive"> --></div>



        <!-- Modals -->

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <br>  <br>  <br>
                <h4 class="modal-title" id="myModalLabel" style="padding-left: 5px;">Our Partners</h4>
                <hr>
                <div class="modal-body">
                    <p class="no-margin"><b>You will be contacted by one of our partners shown below:</b></p>
                    <ul><li>Avalon</li></ul>
                </div>
            </div>

        </div>
@endsection

@section('footer-scripts')
    @parent
                <script>

                    // Get the modal
                    var modal = document.getElementById('myModal');

                    // Get the button that opens the modal
                    // var btn = document.getElementById("myBtn");

                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks on the button, open the modal
                    //document.getElementById("myBtn").onclick = function() {
                    function my_function(){
                        modal.style.display = "block";
                    }

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                        modal.style.display = "none";
                    }

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }


                </script>

@endsection


