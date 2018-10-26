@extends('fronts.sst.remodeling.slider-layout')
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
        #parsley-id-multiple-gender{
            display: inline-block;
        }
    </style>

    <script type="text/javascript">

        window.ParsleyConfig = {
            errorsWrapper: '<div class="help-error" role="alert"></div>',
            errorTemplate: '<div></div>',
            validators: {
                usphone: {
                    fn: function (value, requirements) {

                        /* var patt = ^\({0,1}(0){0,1}(1|2|4|3|7|8|9){0,1}\){0,1}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{1}(\ |-){0,1}[0-9]{3}$;
                        return patt.test(value); */

                        var digits = value.replace(/[^0-9]/g, "");
                        var digits_count = digits.length;
                        if (digits_count > 9 && digits_count < 11) {
                            var areacode = digits.substring(0, 2);
                            console.log(areacode);
                            var valid_phone = areacode.match(/^((0)[1-9])$/);
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

        <form name="apply_form" action="/remodeling/solar-energy/1/fr" id="apply_form" class="form-horizontal quiz_form" method="POST">
            {{ csrf_field() }}
            <h1 class="header" id="survey_headline" style="font-size: 25px; text-transform: uppercase;" >DÉCOUVREZ COMMENT RÉDUIRE VOTRE FACTURE D’ÉLÉCTRICITÉ GRÂCE À L'ÉNERGIE SOLAIRE</h1>
            <h1 class="header" id="thankyou_header" style="display: none">Please Wait While We Create Your Eligibility Code</h1>
            <h1 class="header" id="research_headline" style="display: none">Merci de patienter pendant que nous calculons les résultats et recherchons votre localisation</h1>
            <h1 class="header" id="receive_info_headline" style="display: none;  ">Votre devis personnalisé est presque prêt</h1>
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
                                <h2>Vous êtes...</h2>
                                <h4 >
                                    Augmentez la valeur de votre propriété
                                </h4>
                            </div>
                        </div>

                        <input type="hidden" name="homeowner" id="homeowner" value=""  />
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3 col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page1" data-value="Proprieltaire">Propriétaire</button>
                            </div>
                            <div class="col-sm-6 col-sm-offset-3 col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page1" data-value="Locataire payeur">Locataire payeur</button>
                            </div>
                            <div class="col-sm-6 col-sm-offset-3 col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page1" data-value="Locataire non payeur">Locataire non payeur</button>
                            </div>
                        </div>
                    </div>
                    <!-- END QUESTIONS Home situation (Votre situation)-->

                    <!-- START QUESTIONS Home type (Votre projet )-->
                    <div class="slider-slide" id="hometype_slide">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2>
                                    Il s'agit...
                                </h2>

                            </div>
                        </div>

                        <input type="hidden" name="home_type" id="home_type" value=""  />
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3 col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page2" data-value="Maison">D'une maison</button>
                            </div>
                            <div class="col-sm-6 col-sm-offset-3 col-xs-12">
                                <button type="button" class="btn btn-success btn-block btn-lg btn-page2" data-value="Appartement">D'un appartement</button>
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
                                    Indiquez votre adresse + votre numéro d'appartement
                                </h2>
                                <h5>
                                    (Nous en avons besoin pour analyser les économies possibles dans votre région)
                                </h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <input type="hidden" id="address" name="address">
                                <!--<input type="text" id="address_mask" name="address_mask" class="form-control input-lg"  required data-parsley-pattern="/^[0-9].*$/" data-parsley-error-message="Merci d’indiquer le numéro de rue de votre adresse" data-parsley-group="block4">-->
                                <input type="text" id="address_mask" name="address_mask" class="form-control input-lg"  >


                                <input type="hidden" pattern="[0-9]*" id="zip" name="zip" onChange="document.getElementById('zip2').value = this.value" class="form-control input-lg"  data-parsley-error-message="Please enter a valid zip" data-parsley-group="block4" placeholder="Enter Your Zip" maxlength="5" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="button" class="btn btn-success btn-lg btn-page3" disabled>Suivant</button>
                            </div>
                        </div>
                    </div>
                    <!-- END QUESTIONS address-->

                    <!-- START QUESTIONS income_amount-->
                    <div class="slider-slide" id="income_slide">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2>Revenu net mensuel de votre ménage</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3 col-xs-12">
                                <select name="income_amount" id="income_amount" class="form-control input-lg"  data-parsley-group="block4">
                                    <option value="superieur2k">Supérieur à 2000€</option>
                                    <option value="inferieur2k">Inférieur à 2000€</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <h2>Type de profession</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <select name="profession_type" id="profession_type" class="form-control input-lg" >
                                    <!--                                         <option value="" selected="selected"> - Sélectionnez - </option> -->
                                    <option value="salarie">Salarie</option>
                                    <option value="cadre">Cadre</option>
                                    <option value="ouvrier">Ouvrier</option>
                                    <option value="sansemploi">Sans-emploi</option>
                                    <option value="dirigeant">Dirigeant</option>
                                    <option value="professionliberal">Profession libéral</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="button" class="btn btn-success btn-lg btn-page4">Suivant</button>
                            </div>
                        </div>
                    </div>
                    <!-- END QUESTIONS income_amount-->


                    <!-- START QUESTIONS -->
                    <div class="slider-slide" id="when_project_slide">


                        <div class="row">
                            <div class="col-xs-12">
                                <h2>Votre bien est...</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <select name="project_realisation_details" id="project_realisation_details" class="form-control input-lg" required data-parsley-error-message="Please select your system size" data-parsley-group="block4">
                                    <option value="acheve">Achevé</option>
                                    <option value="encours">En cours de construction</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <button type="button" class="btn btn-success btn-lg btn-page5">Suivant</button>
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
                                    <p>Vérification de vos réponses</p>
                                </div>
                                <div class="msg2 hidden">
                                    <p>Calcul des heures d'ensoleillement en <span id="country_name">région</span></p>
                                </div>
                                <div class="msg3 hidden">
                                    <p>Étude des solutions disponibles </p>
                                </div>
                                <div class="msg5 hidden">
                                    <p><strong>Félicitations !</strong></p>
                                </div>
                                Chargement…
                            </div>
                        </div>
                    </div>
                    <!-- END Calculation-->


                    <!-- START Calculation-->
                    <div class="slider-slide" id="name_slide">
                        <div class="row">
                            <div class="col-xs-12">
                                <div style="font-weight:bold;"><p>Merci de remplir les quelques informations ci-dessous afin de recevoir votre devis </p></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <label style="display: inline-block"><input style="margin:20px; font-size: 18px;" type="radio" name="gender" value="Monsieur"  data-parsley-error-message="Cette valeur est obligatoire"  required data-parsley-group="block5"> Monsieur</label>
                                <label style="display: inline-block"><input style="margin:20px; font-size: 18px;" type="radio" name="gender" value="Madame" > Madame </label>

                            </div >
                        </div >
                        <div class="row">
                            <div class="col-xs-6">
                                Nom
                                <input type="text" id="first_name" name="first_name" class="form-control input-lg" required data-parsley-error-message="Merci d'indiquer votre prénom " data-parsley-group="block5" placeholder="Nom" />
                            </div>
                            <div class="col-xs-6">
                                Prénom
                                <input type="text" id="last_name" name="last_name" class="form-control input-lg" required data-parsley-error-message="Merci d'indiquer votre nom de famille " data-parsley-group="block5" placeholder="Prénom" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                Email
                                <input type="email" id="email" name="email_address" class="form-control input-lg" required data-parsley-error-message="Merci d'indiquer un email valide " data-parsley-group="block5" placeholder="Entrez votre adresse email" />
                            </div>
                            <div class="col-xs-12">
                                Téléphone
                                <input type="tel" id="phone" name="phone_home" class="form-control input-lg" required data-parsley-usphone="1" data-parsley-error-message="Merci d'indiquer un numéro de téléphone valide, ainsi que l'indicatif de votre région " data-parsley-group="block5" placeholder="Entrez votre numéro de téléphone (avec le code pays)" />
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-xs-12">
                                Address
                                <input type="text" id="address2" name="address2" class="form-control input-lg" disabled />
                            </div>
                            <div class="col-xs-6">

                                <input type="hidden" id="zip2" name="zip2" class="form-control input-lg" readonly>
                            </div>
                            <div class="col-xs-6 visible-sm visible-xs">

                                <input type="hidden" id="state" name="state" class="form-control input-lg" readonly>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <button type="button" class="btn btn-success btn-lg btn-page6">Obtenir mon devis</button>

                                </br> </br> </br> </br>
                                <!-- begin tcpa-->
                                <div style="color:gray; font-size: 10px;">
                                    <div id="tcpa" >
                                        <input type="hidden" id="leadid_tcpa_disclosure" />
                                        <label for="leadid_tcpa_disclosure">
                                            Conformément à la loi informatique et libertés du 06 janvier 1978, je dispose d’un droit d’accès et de rectification aux données
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="slider-slide" id="thankyou_slide">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h2>Je vous remercie</h2>
                                    <div>S'il vous plaît, attendez...</div><br><br>
                                    <img src="/images/loader.gif" />
                                    <div class="plus-loader">
                                        Chargement…
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div id="sub_footer">
                    <div class="row">
                        <div class="col-xs-12" >
                            <p style="font-size: 14px;">Découvrez si vous êtes éligible en seulement 30 secondes !</p>
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
            $("#phone").mask("(99) 99-99-99-99");

            var hidePopup = false;

            var autocomplete = new google.maps.places.Autocomplete(document.getElementById('address_mask'), {
                types: ['address'],
                componentRestrictions: {country: "fr"},
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
                $('#state').val(state);
                $('#region_fr').val(state);
                $('#zip_fr').val(zip);
                $("#country_name").text('in '+state_full);


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

                if ($('#apply_form').parsley().validate('block4') === true) {
                    $('.form-progress-bar').css({'width': '50%'});
                    slider_data.move('#income_slide');
                }
            });



            $('.btn-page4').on('click', function (e) {
                e.stopPropagation();

                if ($('#apply_form').parsley().validate('block1') === true) {

                    $('.form-progress-bar').css({'width': '70%'});
                    slider_data.move('#when_project_slide');
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



            $('#name_slide').on('formslider-endmove', function () {
                $(this).find(':input:visible:enabled:first').focus();
            });
            $('#zip_slide').on('formslider-endmove', function () {
                $(this).find(':input:visible:enabled:first').focus();
            });


        });
    </script>

@endsection


