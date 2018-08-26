<html>
<head>
    <script>
        dataLayer = [];
    </script>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M2H3LLJ');</script>
    <!-- End Google Tag Manager -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Bathwraps</title>
    <!--    <link href="./files/css.css" rel="stylesheet">-->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/web.min.css">
    <link rel="stylesheet" type="text/css" href="./files/style.css">

    <link rel="stylesheet" href="css/navigation.css">
    <script type="text/javascript" src="//parsleyjs.org/dist/parsley.js"></script>
    <script type="text/javascript" src="/js/jquery.maskedinput.min.js"></script>
    <link href="//fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-M2H3LLJ"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="container">
    <div class="row">
        <section id="top">
            <img src="/images/sst-landscape.png" class="img-responsive" alt="baths">
        </section>
    </div>
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
                    <img src="./files/main.jpg" class="img-responsive">
                </div>
                <div class="row">
                    <p id="tub_disclaimer" style="font-size:12px;text-align:center;">* Pictures shown are for illustrative purposes only. Models available may vary from those displayed in this advertisement.</p>

                </div>
            </div>
            <div class="col-md-5">
                <section class="test-form">
                    <form id="demo-form" action="thankyou.php?fbid=<?php echo isset( $_GET['fbid'] ) ? $_GET['fbid'] : ""; ?>" method="post" class="demo-form js-floating-labels" data-parsley-validate data-parsley-errors-messages-disabled>
                        <input type="hidden" id="address" name="address" value="" data-parsley-required>
                        <input type="hidden" id="debug" name="debug" value="<?php echo isset( $_GET['debug'] ) ? 1 : 0; ?>">
                        <input type="hidden" id="is_test" name="is_test" value="<?php echo isset( $_GET['test'] ) ? 1 : 0; ?>">
                        <!--                        <input type="hidden" id="state" name="state" value="">-->
                        <input type="hidden" name="_submit" value="1"/>
                        <input id="leadid_token" name="universal_leadid" type="hidden" value=""/>

                        <div class="well well-lg">
                            <div class="form-section">
                                <div class="row">
                                    <div class="start">Step 1 of 3</div>
                                    <div class="steptitle">Get Pricing and Availability for:</div>
                                </div>
                                <div class="row field">
                                    <div class="form-group">
                                        <label for="zip_code" class="floating">Zip Code<span class="floating-desc">: Enter 5-digit zip code</span></label>
                                        <input pattern="^\d{5,6}(?:[-\s]\d{4})?$" autocomplete="billing postal-code" class="form-control" type="text" id="zip_code" name="zip_code" data-parsley-required data-parsley-type="digits" data-parsley-length="[5, 5]" placeholder="ENTER YOUR ZIP CODE"/>
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
                                        <input autocomplete="billing address" class="form-control" type="text" id="address_mask" name="address_mask" data-parsley-required data-parsley-google placeholder="ENTER YOUR ADDRESS"/>
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
                                        <input autocomplete="fname" class="form-control" id="first_name" name="first_name" data-trigger="change" data-parsley-required placeholder="FIRST NAME">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name" class="floating">Last Name<span class="floating-desc">: Required</span></label>
                                        <input autocomplete="lname" class="form-control" id="last_name" name="last_name" data-trigger="change" data-parsley-required placeholder="LAST NAME">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="email_address" class="floating">Email<span class="floating-desc">: Required</span></label>
                                        <input autocomplete="email" class="form-control" id="email_address" name="email_address" data-trigger="change" data-parsley-required data-parsley-type="email" placeholder="EMAIL">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="phone_home" class="floating">Phone<span class="floating-desc">: (10 digits only)</span></label>
                                        <input autocomplete="tel" class="form-control" id="phone_home" name="phone_home" data-trigger="change" data-parsley-required data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$" placeholder="PHONE">
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
                            <li> BathWraps products are a breeze to maintain and will never stain, chip, mildew, or crack.
                            </li>
                            <li> High-quality products. Quick, expert installation. Outstanding warranty.
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div id="footer" class="row">
        <p class="disclaimer tcpa_disclaimer">
            <label><input type="hidden" id="leadid_tcpa_disclosure">By submitting this request for information, I hereby provide my signature, expressly consenting to receive information by email, auto-dialer and/or pre-recorded telephone calls, and/or SMS messages from or on behalf of smartsavings.today and its
                <a href="#" style="font-style: italic">fulfillment partners</a> and may agree to receive other
                <a href="#" style="font-style: italic">offers</a> on my telephone number I provided above, including my wireless number, even if I am on a State or Federal Do-Not-Call list. I understand consent is not a condition of purchase and that I may revoke my consent at any time.</label>
        </p>
        <p>© 2018 smartsavings.today |
            <a href="https://smartsavings.today/privacy.html" style="">Privacy Policy</a> |
            <a href="https://smartsavings.today/terms.html">Terms of Service</a>
        </p>
    </div>
</div>
<script src="js/navigation.js"></script>
<script src="js/floating_labels.js"></script>
<script src="js/address_autocomplete.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9xy8KF8H9Cu-Bui1nB5zHM860PlgkFFw&libraries=places&callback=initAutocomplete" async defer></script>
<script id="LeadiDscript" type="text/javascript">
    // <!--
    (function () {
        var s = document.createElement('script');
        s.id = 'LeadiDscript_campaign';
        s.type = 'text/javascript';
        s.async = true;
        s.src = '//create.lidstatic.com/campaign/82c3febc-c3fa-af0a-9f6f-1c5c65ef71a3.js?snippet_version=2';
        var LeadiDscript = document.getElementById('LeadiDscript');
        LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
    })();
    setInterval(function () {
        if (!$('#leadid_token').val()) {
            (function () {
                var s = document.createElement('script');
                s.id = 'LeadiDscript_campaign';
                s.type = 'text/javascript';
                s.async = true;
                s.src = '//create.lidstatic.com/campaign/82c3febc-c3fa-af0a-9f6f-1c5c65ef71a3.js?snippet_version=2';
                var LeadiDscript = document.getElementById('LeadiDscript');
                LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
            })();
        }
    }, 10000);
    // -->
</script>
<noscript>
    <img src='//create.leadid.com/noscript.gif?lac=f8085cd5-d5be-4d6d-353f-3c8dcc6fc738&lck=82c3febc-c3fa-af0a-9f6f-1c5c65ef71a3&snippet_version=2'/>
</noscript>
<script type="text/javascript">
    (function () {
            var field = 'xxTrustedFormCertUrl';
            var provideReferrer = false;
            var tf = document.createElement('script');
            tf.type = 'text/javascript';
            tf.async = true;
            tf.src = 'http' + ('https:' == document.location.protocol ? 's' : '') +
                '://api.trustedform.com/trustedform.js?provide_referrer=' + escape(provideReferrer) + '&field=' + escape(field) + '&l=' + new Date().getTime() + Math.random();
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(tf, s);
        }
    )();
</script>
<noscript>
    <img src="https://api.trustedform.com/ns.gif"/>
</noscript>
<div id="LeadiD-wrapper-element" class=" LeadiD-ignore-mutation" style="width: 1px; height: 1px; overflow: hidden; position: fixed; left: -1px; top: 0px;">
    <iframe class=" LeadiD-ignore-element LeadiD-ignore-mutation" src="./files/iframe.html"></iframe>
</div>
<script>
    $(document).ready(function () {
        $('#zip_code').mask('99999', { autoclear: false });
        $('#phone_home').mask('(999) 999-9999', { autoclear: false });

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
</body>
</html>


