@extends('layouts.master')
@section('logo','/images/sst-landscape.png')
@section('logo-section','/images/bat.png')
@section('head')
    @parent
    {{--<link rel="stylesheet" type="text/css" href="/assets/remodeling/bath/css/main.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="/assets/remodeling/bath/css/style.css">--}}
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/legacy/bath/css/web.min.css">
    <link rel="stylesheet" type="text/css" href="/legacy/bath/files/style.css">

    <link rel="stylesheet" href="/legacy/bath/css/navigation.css">
    <script type="text/javascript" src="//parsleyjs.org/dist/parsley.js"></script>
    <script type="text/javascript" src="/js/jquery.maskedinput.min.js"></script>
    <link href="//fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

@endsection

@section('content')

    <div id="main" class="row">
        <div class="row">
            <section id="title">
                <h1>1-Day Bathroom Remodeling</h1>
                <br>
                <h2>
                    Replace Your Old Shower with a Sleek, Sophisticated Upgrade in One Day
                </h2>
            </section>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    @if(Input::get['kwid'] == 2)
                        <img src="/legacy/bath/files/darker.jpg" class="img-responsive">
                    @else
                        <img src="/legacy/bath/files/main.jpg" class="img-responsive">
                    @endif

                </div>
                <div class="row">
                    <p id="tub_disclaimer" style="font-size:12px;text-align:center;">* Pictures shown are for
                        illustrative purposes only. Models available may vary from those displayed in this
                        advertisement.</p>

                </div>
            </div>
            <div class="col-md-5">
                <section class="test-form">
                    <form id="demo-form"
                          action="/remodeling/bath/1"
                          method="post" class="demo-form js-floating-labels" data-parsley-validate
                          data-parsley-errors-messages-disabled>
                        <input type="hidden" id="address" name="address" value="" data-parsley-required>
                        <input type="hidden" name="_submit" value="1"/>

                        <div class="well well-lg">
                            <div class="form-section">
                                <div class="row">
                                    <div class="start">Step 1 of 3</div>
                                    <div class="steptitle">Get Pricing and Availability for:</div>
                                </div>
                                <div class="row field">
                                    <div class="form-group">
                                        <label for="zip_code" class="floating">Zip Code<span class="floating-desc">: Enter 5-digit zip code</span></label>
                                        <input pattern="^\d{5,6}(?:[-\s]\d{4})?$" autocomplete="billing postal-code"
                                               class="form-control" type="text" id="zip_code" name="zip_code"
                                               data-parsley-required data-parsley-type="digits"
                                               data-parsley-length="[5, 5]" placeholder="ENTER YOUR ZIP CODE"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-section">
                                <div class="row">
                                    <div class="start">Step 2 of 3</div>
                                    <div class="steptitle">Please enter the street address of the home.</div>
                                </div>
                                <div class="row field">
                                    <div class="form-group">
                                        <label for="address_mask" class="floating">Address<span class="floating-desc">: Required field</span></label>
                                        <input autocomplete="billing address" class="form-control" type="text"
                                               id="address_mask" name="address_mask" data-parsley-required
                                               data-parsley-google placeholder="ENTER YOUR ADDRESS"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-section">
                                <div class="row">
                                    <div class="start">Last Step</div>
                                    <div class="steptitle">Who Should We Deliver the Price Quote to?</div>
                                </div>
                                <div class="row field">
                                    <div class="form-group col-md-6">
                                        <label for="first_name" class="floating">First Name<span class="floating-desc">: Required</span></label>
                                        <input autocomplete="fname" class="form-control" id="first_name"
                                               name="first_name" data-trigger="change" data-parsley-required
                                               placeholder="FIRST NAME">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name" class="floating">Last Name<span class="floating-desc">: Required</span></label>
                                        <input autocomplete="lname" class="form-control" id="last_name" name="last_name"
                                               data-trigger="change" data-parsley-required placeholder="LAST NAME">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="email_address" class="floating">Email<span class="floating-desc">: Required</span></label>
                                        <input autocomplete="email" class="form-control" id="email_address"
                                               name="email_address" data-trigger="change" data-parsley-required
                                               data-parsley-type="email" placeholder="EMAIL">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="phone_home" class="floating">Phone<span class="floating-desc">: (10 digits only)</span></label>
                                        <input autocomplete="tel" class="form-control" id="phone_home" name="phone_home"
                                               data-trigger="change" data-parsley-required
                                               data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$" placeholder="PHONE">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-navigation">
                                    <button type="button" class="previous btn btn-info pull-left">&lt; Previous</button>
                                    <button type="button" class="next btn btn-info pull-right">Next &gt;</button>
                                    <input type="submit" class="btn btn-default pull-right">
                                    <span class="clearfix"></span>

                                </div>
                            </div>
                        </div>
                        @include('fronts.sst._common.hidden_fields')
                    </form>
                </section>
                <div class="row">
                    <div class="fullwrapper" id="description">
                        <ul class="bullets">
                            <li> Tub to Shower Conversions, Soaker Tubs, Custom Accessories.
                            </li>
                            <li> Avoid the inconvenience and mess of weeks and weeks of construction.
                            </li>
                            <li> Added safety features: low step options, safety bars, no slip flooring, seat options.
                            </li>
                            <li> BathWraps products are a breeze to maintain and will never stain, chip, mildew, or
                                crack.
                            </li>
                            <li> High-quality products. Quick, expert installation. Outstanding warranty.
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('footer-scripts')
    @parent
    <script src="/legacy/bath/js/navigation.js"></script>
    <script src="/legacy/bath/js/floating_labels.js"></script>
    <script src="/legacy/bath/js/address_autocomplete.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9xy8KF8H9Cu-Bui1nB5zHM860PlgkFFw&libraries=places&callback=initAutocomplete"
            async defer></script>
    <script>
        $(document).ready(function () {
            $('#zip_code').mask('99999', {autoclear: false});
            $('#phone_home').mask('(999) 999-9999', {autoclear: false});

            // $('#address_mask').parsley().on('field:validate', function (e) {
            //     // In here, `this` is the parlsey instance of #some-input
            //     if ($('#address').val() === "") {
            //         e.addError('address_mask', {});
            //         console.log('hehe');
            //         console.log(e);
            //         e.parent.validationResult = null;
            //     }
            // });
            window.Parsley.addValidator('google', {
                validateString: function (value) {
                    return value === $('#address').val();
                },
                messages: {
                    en: 'Address is required',
                }
            });


            // $('#address_mask').parsley().on('field:validate', function (formInstance) {
            //     console.log('validating');
            //     console.log(formInstance);
            //     if ($('#address').val() === "") {
            //         console.log('empty');
            //         formInstance.validationResult = false;
            //     }
            //     // var ok = formInstance.isValid({ group: 'block-1', force: true });
            //     // if (!ok) formInstance.validationResult = false;
            //
            // });
        });
    </script>
@endsection

