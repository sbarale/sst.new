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
        .btn-page3, .btn-page4, .btn-page5, .btn-page6{
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
                dephone: {
                    fn: function (value, requirements) {

                        value = value.replace('(','');
                        value = value.replace(')','');
                        value = value.replace(' ','');
                        value = value.replace(' ','');
                        value = value.replace('-','');
                        value = value.replace('-','');
                        value = value.replace(' ','');
                        console.log(value);

                        var patt = /^(((((((00|\+)49[ \-/]?)|0)[1-9][0-9]{1,4})[ \-/]?)|((((00|\+)49\()|\(0)[1-9][0-9]{1,4}\)[ \-/]?))[0-9]{1,7}([ \-/]?[0-9]{1,5})?)$/;

                        console.log(patt.test(value));

//                          return patt.test(value);


                        if(patt.test(value)== true){
                            var digits = value.length;

                            console.log(digits);
                            if (digits > 9 && digits <12){
                                return true;
                            }

                        }

                        return false;

                    },
                    priority: 32
                },

            }
        };

    </script>
@endsection


@section('content')

    <div class="secondarybg whitebg">

        <form name="apply_form" action="/remodeling/solar-energy/1/de" id="apply_form" class="form-horizontal quiz_form" method="POST">
            {{ csrf_field() }}
            <h1 class="header" id="survey_headline" style="font-size: 25px; text-transform: uppercase;" >SEHEN SIE, WIE SIE MIT SOLAREN ENERGIE IN  DEUTSCHLAND  SPEICHERN KÖNNEN</h1>
            <h1 class="header" id="thankyou_header" style="display: none">Please Wait While We Create Your Eligibility Code</h1>
            <h1 class="header" id="research_headline" style="display: none">Vielen Dank warten: Ergebnisse und die Suche nach Ihrem Standort berechnen</h1>
            <h1 class="header" id="receive_info_headline" style="display: none;  ">IHR ANGEBOT IST FAST FERTIG</h1>
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
                                <h2>Bist du Hausbesitzer?</h2>
                                <h4 >
                                    Erhöhe den Wert deines Hauses
                                </h4>
                            </div>
                        </div>

                        <input type="hidden" name="homeowner" id="homeowner" value=""  />
                        <div class="row">
                            <div class="col-sm-6  col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page1" data-value="proprietaire">Eigentümer</button>
                            </div>
                            <div class="col-sm-6  col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page1" data-value="locataire">Mieter</button>
                            </div>
                            <div class="col-sm-6  col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page1" data-value="LocataireMan">Mietverwaltung</button>
                            </div>
                            <div class="col-sm-6  col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page1" data-value="futurproprio">Zukünftiger Eigentümer</button>
                            </div>
                        </div>
                    </div>
                    <!-- END QUESTIONS Home situation (Votre situation)-->

                    <!-- START QUESTIONS Home type (Votre projet )-->
                    <div class="slider-slide" id="hometype_slide">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2>
                                    Das ist ein...
                                </h2>

                            </div>
                        </div>

                        <input type="hidden" name="home_type" id="home_type" value=""  />
                        <div class="row">
                            <div class="col-sm-6  col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page2" data-value="maison">Haus</button>
                            </div>
                            <div class="col-sm-6  col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page2" data-value="appartement">Wohnung</button>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page2" data-value="appartplus">Wohnung mit Hof, Terrasse oder Balkon</button>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page2" data-value="immeuble">Gebäude</button>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page2" data-value="bureau">Büros</button>
                            </div>

                        </div>
                    </div>
                    <!-- END QUESTIONS Home type (Votre projet )-->

                    <!-- START QUESTIONS type_of_roof-->
                    <div class="slider-slide" id="type_of_roof_slide">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2>Was ist Ihr Dachtyp?</h2>

                            </div>
                        </div>
                        <div class="col-sm-6 col-sm-offset-3">
                            <select name="type_of_roof" id="type_of_roof" class="form-control input-lg" >
                                <option selected="selected" value="Saddle Roof">Satteldach</option>
                                <option value="Pult Roof">Pultdach</option>
                                <option value="Flat Roof"> Flachdach</option>
                                <option value="Agricultural Area">Ackerfläche</option>
                                <option value="Other Open Spaces">Sonstige Feifläche</option>
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <h2>
                                    Welche Solaranlagengröße kommt für Sie in Betracht?
                                </h2>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">

                                <select name="useful_area" id="useful_area" class="form-control input-lg" >
                                    <option value="5m2">ca. 5m2 </option>
                                    <option value="15m2">ca. 15m2</option>
                                    <option selected="selected" value="30m2">ca. 30m2</option>
                                    <option value="40m2">ca. 40m2</option>
                                    <option value="50m2">ca. 50m2</option>
                                    <option value="60m2">mehr als 60m2</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="button" class="btn btn-success btn-lg btn-page3 ">Nächste Frage</button>
                            </div>
                        </div>
                    </div>
                    <!-- END QUESTIONS Electric Bill-->

                    <!-- START QUESTIONS income_amount-->
                    <div class="slider-slide" id="profession_type">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2>Beruf</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <select name="profession_type" id="profession_type" class="form-control input-lg" >
                                    <!--                                         <option value="" selected="selected"> - Sélectionnez - </option> -->
                                    <option value="salarie">Angsestellter</option>
                                    <option value="cadre">Leitender Angestellter</option>
                                    <option value="ouvrier">Arbeiter</option>
                                    <option value="sansemploi">Arbeitslos</option>
                                    <option value="dirigeant">Betriebsleitert</option>
                                    <option value="professionliberal">Freiberufliche Tätigkeit</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="button" class="btn btn-success btn-lg btn-page4">Nächste Frage</button>
                            </div>
                        </div>
                    </div>
                    <!-- END QUESTIONS income_amount-->





                    <!-- START QUESTIONS address-->
                    <div class="slider-slide" id="zip_slide">
                        <input type="hidden" name="page_track_zip" value="1" />
                        <div class="row">
                            <div class="col-xs-12">
                                <h2>
                                    Fügen Sie Ihre Adresse + Nummer
                                </h2>
                                <h5>
                                    (Wir brauchen dies, um die Einsparungen für Ihren Standort zu analysieren)
                                </h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <input type="hidden" id="address" name="address">
                                <!--<input type="text" id="address_mask" name="address_mask" class="form-control input-lg"  required data-parsley-pattern="/^[0-9].*$/" data-parsley-error-message="Merci d’indiquer le numéro de rue de votre adresse" data-parsley-group="block4">-->
                                <input type="text" id="address_mask" name="address_mask" class="form-control input-lg"  >


                                <input type="hidden" pattern="[0-9]*" id="zip" name="zip" onChange="document.getElementById('zip2').value = this.value" class="form-control input-lg"  data-parsley-error-message="Hier bitte eine gültige Postleizahl eingeben" required data-parsley-group="block4" placeholder="Hier Postleizahl eingeben" maxlength="5" data-parsley-minlength="5"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="button" class="btn btn-success btn-lg btn-page5" disabled>Nächste Frage</button>
                            </div>
                        </div>
                    </div>
                    <!-- END QUESTIONS address-->






                    <!-- START Calculation-->
                    <div class="slider-slide" id="name_slide">
                        <div class="row">
                            <div class="col-xs-12">
                                <div style="font-weight:bold;"><p>Um für Sie das beste Angebot zu finden benötigen wir einige Basis-Informationen von Ihnen</p></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                Vorname
                                <input type="text" id="first_name" name="first_name" class="form-control input-lg" required data-parsley-error-message="Bitte geben Sie Ihren Vornamen ein" data-parsley-group="block5" placeholder="Vorname" />
                            </div>
                            <div class="col-xs-6">
                                Nachname
                                <input type="text" id="last_name" name="last_name" class="form-control input-lg" required data-parsley-error-message="Bitte geben Sie ihren Nachnamen ein" data-parsley-group="block5" placeholder="Nachname" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                Email
                                <input type="email" id="email" name="email_address" class="form-control input-lg" required data-parsley-error-message="Bitte geben Sie eine gültige Email-Adresse ein" data-parsley-group="block5" placeholder="email" />
                            </div>

                            <div class="col-md-6">
                                Telefon
                                <input type="tel" id="phone" name="phone_home" class="form-control input-lg" required data-parsley-dephone="1" data-parsley-error-message="Bitte geben Sie Ihre Handynummer ein" data-parsley-group="block5" placeholder="Telefon" />
                            </div>

                        </div>
                        <div class="row" style="display:none;">

                            <div class="col-sm-12 col-md-6">
                                Address
                                <input type="text" id="address2" name="address2" class="form-control input-lg" disabled />
                            </div>
                            <div class="col-xs-6">
                                Postleitzahl
                                <input type="text" id="zip2" name="zip2" class="form-control input-lg" readonly>
                            </div>
                            <div class="col-xs-6 visible-sm visible-xs">
                                State
                                <input type="text" id="state" name="state" class="form-control input-lg" readonly>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <button type="button" class="btn btn-success btn-lg btn-page6">Jetzt Angebot anfordern</button>

                                </br> </br> </br> </br>
                                <!-- begin tcpa-->
                                <div style="color:gray; font-size: 10px;">
                                    <div id="tcpa" >
                                        <input type="hidden" id="leadid_tcpa_disclosure" />
                                        <label for="leadid_tcpa_disclosure">

                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="slider-slide" id="thankyou_slide">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h2>Danke</h2>
                                    <div>Bitte warten...</div><br><br>
                                    <img src="/images/loader.gif" />
                                    <div class="plus-loader">
                                        Laden…
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>



                </div>
                <div id="sub_footer">
                    <div class="row">
                        <div class="col-xs-12" >
                            <p style="font-size: 14px;">Finde heraus, ob Sie in nur 30 Sekunden in Betracht kommen!</p>
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

            var autocomplete = new google.maps.places.Autocomplete(document.getElementById('address_mask'), {
                types: ['address'],
                componentRestrictions: {country: "de"},
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
                        $('#address').val(route);
                        //$('#address').val(place.formatted_address);
                    }
                    $('#address2').val(place.formatted_address);
                }
                $('#zip, #zip2').val(zip);
                $('#city').val(city);
                console.log(state_full);
                $('#state').val(state_full);
                $('#de_region').val(state_full);
                $("#country_name").text('in '+state_full);

                if(!zip.length) {
                    $('#zip').attr('type', 'text');
                }

                if (city == '' & state == '' ){

                }else{$('.btn-page5').removeAttr('disabled');}

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
                    /* var page_idx = ($(this).closest('.slider-slide').index() + 1);
                    $('.btn-page' + page_idx).trigger('click'); */
                }
            });

            $('.btn-page1').on('click', function (e) {
                e.stopPropagation();
                var newval = $(this).data('value');
                $('#homeowner').val(newval);

                $('.form-progress-bar').css({'width': '20%'});
                slider_data.move('#hometype_slide');

            });

            $('.btn-page2').on('click', function (e) {
                e.stopPropagation();
                var newval = $(this).data('value');
                $('#home_type').val(newval);

                $('.form-progress-bar').css({'width': '40%'});
                slider_data.move('#type_of_roof_slide');

            });

            $('.btn-page3').on('click', function (e) {
                e.stopPropagation();

                $('.form-progress-bar').css({'width': '50%'});
                slider_data.move('#profession_type');

            });

            $('.btn-page4').on('click', function (e) {

                e.stopPropagation();

                $('.form-progress-bar').css({'width': '70%'});
                slider_data.move('#zip_slide');

            });

            $('.btn-page5').on('click', function (e) {

                if ($('#apply_form').parsley().validate('block4') === true) {
                    e.stopPropagation();

                    $("#survey_headline").hide();
                    $("#sub_footer").hide();
                    $("#research_headline").show();


                    $('.form-progress-bar').css({'width': '80%'});

                    slider_data.move('#name_slide');
                    $("#research_headline").hide();
                    $("#receive_info_headline").show();
                }
            });

            $('.btn-page6').on('click', function (e) {
                e.stopPropagation();
                if ($('#apply_form').parsley().validate('block5') === true) {

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


