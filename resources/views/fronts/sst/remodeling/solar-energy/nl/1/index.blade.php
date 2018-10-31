@extends('layouts.slider')
@section('title','Take the Quiz to See if you Qualify')
@section('big-bg-img','/images/gray-bg-px.jpg')
@section('small-bg-img','/images/gray-bg-px.jpg')
@section('header-middle-img','/images/solar-1.png')
@section('top-blue-line-text','')
@section('head')
    @parent
    <link href="/css/bath/2/main.css" rel="stylesheet" type='text/css'/>
    <style>
        .bbbb{
            width: 100%;
        }
        .btn-page3, .btn-page6{
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
                        console.log(value)

                        /* var patt = ^\({0,1}(0){0,1}(1|2|4|3|7|8|9){0,1}\){0,1}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{1}(\ |-){0,1}[0-9]{3}$;
                        return patt.test(value); */
                        var isNumber = /^[0-9.]+$/.test(value);
                        if (!isNumber) {
                            return false;
                        }
                        var digits = value.replace(/[^0-9]/g, "");
                        var digits_count = digits.length;
                        if (digits_count > 8 && digits_count < 12) {
                            var areacode = digits.substring(0, 1);
                            console.log(areacode);
                            var valid_phone = areacode.match(/^(0)$/);
                            if (valid_phone == null) {
                                return false;
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

        <form name="apply_form" action="/remodeling/solar-energy/1/nl" id="apply_form" class="form-horizontal quiz_form" method="POST">
            {{ csrf_field() }}
            <h1 class="header" id="survey_headline" style="font-size: 25px; text-transform: uppercase;" >Leer hoe te besparen met behulp van zonne-energie </h1>
            <h1 class="header" id="thankyou_header" style="display: none">Please Wait While We Create Your Eligibility Code</h1>
            <h1 class="header" id="research_headline" style="display: none">Dank u, de resultaten worden berekend</h1>
            <h1 class="header" id="receive_info_headline" style="display: none;  ">Uw persoonlijke rapport is bijna klaar om te versturen</h1>
            <input type="hidden" name="_submit" value="1" />

            <div class="progress">
                    <div class="progress-bar progress-bar-primary form-progress-bar" role="progressbar" style="width: 0%"></div>
                </div>


            <div id="flow-slider-container" class="slider-container">
                <div class="slider-wrapper">

                    <!-- START QUESTIONS Home situation (Votre situation)-->
                    <div class="slider-slide" id="homeowner_slide">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2>Bent u een huiseigenaar?</h2>
                                <h4 >
                                    Verhoog de waarde van uw woning
                                </h4>
                            </div>
                        </div>

                        <input type="hidden" name="homeowner" id="homeowner" value=""  />
                        <div class="row">
                            <div class="col-sm-6  col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page1" data-value="Owner">Eigenaar</button>
                            </div>
                            <div class="col-sm-6  col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page1" data-value="Tenant">Huurder</button>
                            </div>
                        </div>
                    </div>
                    <!-- END QUESTIONS Home situation (Votre situation)-->

                    <!-- START QUESTIONS Home type (Votre projet )-->
                    <div class="slider-slide" id="hometype_slide">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2>
                                    Dit is een...
                                </h2>

                            </div>
                        </div>

                        <input type="hidden" name="home_type" id="home_type" value=""  />
                        <div class="row">
                            <div class="col-sm-6  col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page2" data-value="House">Huis</button>
                            </div>
                            <div class="col-sm-6  col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page2" data-value="Apartment">Appartement</button>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page2" data-value="Apartment with courtyard, terrace, or balcony">Appartement met binnenplaats, terras of balkon</button>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page2" data-value="Building">Gebouw</button>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page2" data-value="Offices">Kantoor</button>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page2" data-value="Business premises">Bedrijfspand</button>
                            </div>
                        </div>
                    </div>
                    <!-- END QUESTIONS Home type (Votre projet )-->

                    <!-- START QUESTIONS address-->
                    <div class="slider-slide" id="zip_slide">
                        <input type="hidden" name="page_track_zip" value="1" />
                        <div class="row">
                            <div class="col-xs-12">
                                <h2>
                                    Vermeld uw adres + nummer
                                </h2>
                                <h5>
                                    (om te analyseren hoeveel u kunt besparen op uw adres)
                                </h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <input type="hidden" id="address" name="address" required  data-parsley-error-message="Please enter a address" data-parsley-group="block4">
                                <!--<input type="text" id="address_mask" name="address_mask" class="form-control input-lg"  required data-parsley-pattern="/^[0-9].*$/" data-parsley-error-message="Merci d’indiquer le numéro de rue de votre adresse" data-parsley-group="block4">-->
                                <input type="text" id="address_mask" name="address_mask" class="form-control input-lg"  >


                                <input type="hidden" pattern="[0-9]*" id="zip" name="zip" onChange="document.getElementById('zip2').value = this.value" class="form-control input-lg" required  data-parsley-error-message="Please enter a valid zip" data-parsley-group="block4" placeholder="Voer uw postcode in" minlength="5" maxlength="7" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="button" class="btn btn-success btn-lg btn-page3" disabled>Volgende</button>
                            </div>
                        </div>
                    </div>
                    <!-- END QUESTIONS address-->

                    <!-- START QUESTIONS income_amount-->
                    <div class="slider-slide" id="income_slide">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2>Maandelijks netto-inkomen van het huishouden</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3 col-xs-12">
                                <select name="income_amount" id="income_amount" class="form-control input-lg"  data-parsley-group="block4">
                                    <option value="superieur2k">Groter dan € 1700</option>
                                    <option value="inferieur2k">Minder dan € 1700</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="button" class="btn btn-success btn-lg btn-page4">Volgende</button>
                            </div>
                        </div>
                    </div>
                    <!-- END QUESTIONS income_amount-->


                    <!-- START QUESTIONS -->
                    <div class="slider-slide" id="when_project_slide">
                        <div class="row">
                            <div class="col-xs-12">
                                <h4>Uw woning is...</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <select name="project_realisation_details" id="project_realisation_details" class="form-control input-lg" required data-parsley-error-message="Please select your system size" data-parsley-group="block4">
                                    <option value="acheve">Voltooid</option>
                                    <option value="encours">Onder constructie</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="button" class="btn btn-success btn-lg btn-page5">Volgende</button>
                            </div>
                        </div>
                    </div>
                    <!-- END QUESTIONS -->

                    <!-- START Calculation-->
                    <div class="slider-slide" id="calculate_slide">
                        <div class="row">
                            <div class="col-xs-12" >
                                <div id="animated6" style="margin-top: 20px; display: none;" ><img src="/images/checker.gif" />

                                </div>


                                <div class="msg1">
                                    <p>Controleren van uw antwoorden</p>
                                </div>
                                <div class="msg2 hidden">
                                    <p>Berekening van de zon sterkte in <span id="country_name">région</span></p>
                                </div>
                                <div class="msg3 hidden">
                                    <p>Beoordeling van de beschikbare oplossingen </p>
                                </div>
                                <div class="msg5 hidden">
                                    <p><strong>Gefeliciteerd !</strong></p>
                                </div>
                                Laden...
                            </div>
                        </div>
                    </div>
                    <!-- END Calculation-->


                    <!-- START Calculation-->
                    <div class="slider-slide" id="name_slide">
                        <div class="row">
                            <div class="col-xs-12">
                                <div style="font-weight:bold;"><p>Vul uw informatie hieronder in zodat u uw gratis advies + offerte kunt ontvangen</p></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                Naam
                                <input type="text" id="first_name" name="first_name" class="form-control input-lg" required data-parsley-error-message="Please enter your first name" data-parsley-group="block5" placeholder="Naam" />
                            </div>
                            <div class="col-xs-6">
                                Achternaam
                                <input type="text" id="last_name" name="last_name" class="form-control input-lg" required data-parsley-error-message="Please enter your last name" data-parsley-group="block5" placeholder="Achternaam" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                Email
                                <input type="email" id="email" name="email_address" class="form-control input-lg" required data-parsley-error-message="Please enter a valid email" data-parsley-group="block5" placeholder="Voer uw email adres in aub" />
                            </div>
                            <div class="col-xs-6">
                                Telefoonnummer
                                <input type="tel" id="phone" name="phone_home" class="form-control input-lg" required data-parsley-usphone="1" data-parsley-error-message="Voer uw telefoonnummer in met net nummer" data-parsley-group="block5" placeholder="Voer uw telefoonnummer in met net nummer" />
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-sm-12 col-md-6">
                                Adres
                                <input type="text" id="address2" name="address2" class="form-control input-lg" disabled />
                            </div>
                            <div class="col-xs-6">
                                Postcode
                                <input type="text" id="zip2" name="zip2" class="form-control input-lg" readonly>
                            </div>
                            <div class="col-xs-6 visible-sm visible-xs">
                                Regio
                                <input type="text" id="state" name="state" class="form-control input-lg" readonly>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <button type="button" class="btn btn-success btn-lg btn-page6">Ontvang uw vrijblijvende adviesofferte</button>
                                </br> </br> </br> </br>
                                <!-- begin tcpa-->
                                <div style="color:gray; font-size: 10px;">
                                    <div id="tcpa" >
                                        <input type="hidden" id="leadid_tcpa_disclosure" />
                                        <label for="leadid_tcpa_disclosure">
                                            <!-- Op grond van de Wet Bescherming Persoonsgegevens van 6 januari 1978, geef ik toestemming op toegang tot en rectificatie van gegevens-->
                                            Door hierboven te klikken, machtigt u smartsavings.today en maximaal vier zonne-energie bedrijven om u te bellen en SMS-berichten te versturen op het nummer dat u hierboven heeft opgegeven, met behulp van een autodialer, met aanbiedingen over hun producten of diensten, zelfs als uw telefoonnummer of mobiele telefoon op een "Do Not Call" lijst staat.
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="slider-slide" id="thankyou_slide">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h2>Dank u</h2>
                                    <div>Even wachten aub...</div><br><br>
                                    <img src="/images/loader.gif" />
                                    <div class="plus-loader">
                                        Laden
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>



                </div>
                <div id="sub_footer">
                    <div class="row">
                        <div class="col-xs-12" >
                            <p style="font-size: 14px;">Zoek uit of u in aanmerking komt in slechts 30 seconden!</p>
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
            var hidePopup = false;

            var autocomplete = new google.maps.places.Autocomplete(document.getElementById('address_mask'), {
                types: ['address'],
                componentRestrictions: {country: "nl"},
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
                        $('#address').val(route + ' ' + street_number);
                    }
                    else {
                        $('#address').val(route);
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

                if (city == '' & state == '' ){

                }else{$('.btn-page3').removeAttr('disabled');}
            });

            $('#apply_form').parsley();

            var slider = $('#flow-slider-container').unslider({
                'initialElement': $('#homeowner_slide')
            });

            var slider_data = slider.data('unslider');

            $('#apply_form input').on('keypress', function (e) {

                e.stopPropagation();
                if (e.keyCode == 13) {

                    return false;
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
                e.stopPropagation();
                var newval = $(this).data('value');
                $('#homeowner').val(newval);

                if ($('#apply_form').parsley().validate('block1') === true) {

                    $('.form-progress-bar').css({'width': '20%'});
                    slider_data.move('#hometype_slide');
                }
            });

            $('.btn-page2').on('click', function (e) {
                e.stopPropagation();
                var newval = $(this).data('value');
                $('#home_type').val(newval);

                if ($('#apply_form').parsley().validate('block1') === true) {

                    $('.form-progress-bar').css({'width': '40%'});
                    slider_data.move('#zip_slide');
                }
            });

            $('.btn-page3').on('click', function (e) {
                e.stopPropagation();

                if ($('#apply_form').parsley().validate('block4') === true ) {

                    $("#receive_info_headline").show();
                    $("#survey_headline").hide();
                    $("#sub_footer").hide();

                    $('.form-progress-bar').css({'width': '50%'});
                    slider_data.move('#name_slide');
                }
            });

            $('.btn-page4').on('click', function (e) {
                e.stopPropagation();

                if ($('#apply_form').parsley().validate('block1') === true) {

                    $('.form-progress-bar').css({'width': '70%'});
                    slider_data.move('#name_slide');
                }
            });

            $('.btn-page5').on('click', function (e) {
                e.stopPropagation();

                $("#survey_headline").hide();
                $("#sub_footer").hide();
                $("#research_headline").show();
                $("#animated6").show();

                $('.form-progress-bar').css({'width': '80%'});

                var move_to_slide = '#name_slide';
                if (move_to_slide == '#calculate_slide' ){

                    slider_data.move('#calculate_slide');
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

                        $('.form-progress-bar').css({'width': '90%'});
                        slider_data.move('#name_slide');
                        $("#receive_info_headline").show();
                        $("#research_headline").hide();
                        hidePopup = false;
                    }, 11000);
                }else{
                    slider_data.move('#name_slide');
                    $("#research_headline").hide();
                    $("#receive_info_headline").show();
                }
            });



            $('.btn-page6').on('click', function (e) {
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

            //forbid to enter letters in input field
            $('#phone').on('keypress', function(){
                return isNumberKey(event);
            });
            //forbid to enter letters in input field
            $('#phone').on('keypress', function(){
                return isNumberKey(event);
            });

            function isNumberKey(evt) {
                var charCode = (evt.which) ? evt.which : event.keyCode;
                if ((charCode < 48 || charCode > 57))
                    return false;

                return true;}



            $('#name_slide').on('formslider-endmove', function () {
                $(this).find(':input:visible:enabled:first').focus();
            });
            $('#zip_slide').on('formslider-endmove', function () {
                $(this).find(':input:visible:enabled:first').focus();
            });



        });
    </script>

@endsection


