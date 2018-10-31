@extends('layouts.empty')
@section('title','Complete Car Warranty')
@section('header-middle-img','/images/car-loan.png')
@section('head')
    @parent
    <link href='/css/autowarranty/stylesheet.css' rel='stylesheet' type='text/css' />
    <link href='/css/font-awesome.min.css' rel='stylesheet' type='text/css' />

    <script src="/js/autowarranty/adm_global.js"></script>
    <script src="/js/autowarranty/adm_prepop.js"></script>
    <script src="/js/autowarranty/adm_staticdata.js"></script>

    <script type="text/javascript" language="javascript" src="/js/autowarranty/prepoptranslate.js"></script>
    <script type="text/javascript" language="javascript" src="/js/autowarranty/index_classic.js"></script>
@endsection


@section('content')


    <div class="row " style="background:#fff;">
        <div class="container ">

            <div class="col-md-12 ">
                <div class="col-xs-12">
                    <h1 class="header-title">Get full protection for <span class="orange" style=""> UP TO 60% OFF</span>
                        <br class="hide">
                        of dealer prices
                        when you go direct!</h1>
                </div>
            </div>
        </div>
    </div>


    <div class="row " style="background:#333; ">

        <br>
        <div class="container" style="">

            <div class="col-md-5  col-md-push-7">
                <div class="well form">
                    <h3 class="text-center" style="font-family: 'Signika', sans-serif; font-weight:bold;text-shadow: 1px 1px 0px rgba(255, 255, 255, 0.62);">Tell Us About Your Vehicle</h3>

                    <form method="post" action="/remodeling/auto-warranty/1" class="form-horizontal" id="main_form" style="height: auto; ">
                        {{ csrf_field() }}
                        <input type="hidden" name="_submit" value="1"/>
                        <div class="row form-group">

                            <span><h4 style="padding-left:15px;">Vehicle Information</h4></span>
                            <div class=" col-md-6">

                                <select class="form-control" name="edit_model_year" required id="edit_model_year" title="Car Model Year">
                                    <option value="">Select Year</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
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
                                </select>

                            </div>

                            <div class=" col-md-6">

                                <select class="form-control" name="edit_make" required id="edit_make" title="Car Make">
                                    <option value="">Vehicle Make</option>
                                    <option value="ACURA">ACURA</option>
                                    <option value="AUDI">AUDI</option>
                                    <option value="BENTLEY">BENTLEY</option>
                                    <option value="BMW">BMW</option>
                                    <option value="BUICK">BUICK</option>
                                    <option value="CADILLAC">CADILLAC</option>
                                    <option value="CHEVROLET">CHEVROLET</option>
                                    <option value="CHRYSLER">CHRYSLER</option>
                                    <option value="DODGE">DODGE</option>
                                    <option value="FERRARI">FERRARI</option>
                                    <option value="FIAT">FIAT</option>
                                    <option value="FORD">FORD</option>
                                    <option value="GMC">GMC</option>
                                    <option value="HONDA">HONDA</option>
                                    <option value="HUMMER">HUMMER</option>
                                    <option value="HYUNDAI">HYUNDAI</option>
                                    <option value="INFINITI">INFINITI</option>
                                    <option value="ISUZU">ISUZU</option>
                                    <option value="JAGUAR">JAGUAR</option>
                                    <option value="JEEP">JEEP</option>
                                    <option value="KIA">KIA</option>
                                    <option value="LAMBORGHINI">LAMBORGHINI</option>
                                    <option value="LEXUS">LEXUS</option>
                                    <option value="LINCOLN">LINCOLN</option>
                                    <option value="LOTUS">LOTUS</option>
                                    <option value="MASERATI">MASERATI</option>
                                    <option value="MAYBACH">MAYBACH</option>
                                    <option value="MAZDA">MAZDA</option>
                                    <option value="MERCEDES-BENZ">MERCEDES-BENZ</option>
                                    <option value="MERCURY">MERCURY</option>
                                    <option value="MINI">MINI</option>
                                    <option value="MITSUBISHI">MITSUBISHI</option>
                                    <option value="NISSAN">NISSAN</option>
                                    <option value="PONTIAC">PONTIAC</option>
                                    <option value="PORSCHE">PORSCHE</option>
                                    <option value="SAAB">SAAB</option>
                                    <option value="SATURN">SATURN</option>
                                    <option value="RAM">RAM</option>
                                    <option value="ROLLS-ROYCE">ROLLS-ROYCE</option>
                                    <option value="SMART">SMART</option>
                                    <option value="SUBARU">SUBARU</option>
                                    <option value="SUZUKI">SUZUKI</option>
                                    <option value="TESLA">TESLA</option>
                                    <option value="TOYOTA">TOYOTA</option>
                                    <option value="VOLKSWAGEN">VOLKSWAGEN</option>
                                    <option value="VOLVO">VOLVO</option>
                                    <option value="Other">Other</option>
                                </select>

                            </div>
                        </div>

                        <div class="row  ">
                            <div class=" col-md-6">

                                <input class="form-control" name="edit_model" required id="edit_model" type="text" placeholder="Car Model">

                            </div>


                            <div class=" col-md-6">

                                <select class="form-control" required name="edit_mileage" id="edit_mileage" title="Car Mileage">
                                    <option value="">- Select Miles -</option>
                                    <option value="" selected="selected">Mileage</option>
                                    <option value="10000">10,000 - 20,000</option>
                                    <option value="20000">20,000 - 30,000</option>
                                    <option value="30000">30,000 - 40,000</option>
                                    <option value="40000">40,000 - 50,000</option>
                                    <option value="50000">50,000 - 60,000</option>
                                    <option value="60000">60,000 - 70,000</option>
                                    <option value="70000">70,000 - 80,000</option>
                                    <option value="80000">80,000 - 90,000</option>
                                    <option value="90000">90,000 - 100,000</option>
                                    <option value="100000">100,000 - 110,000</option>
                                    <option value="110000">110,000 - 120,000</option>
                                    <option value="120000">120,000 - 130,000</option>
                                    <option value="130000">130,000 - 140,000</option>
                                    <option value="140000">140,000 - 149,999</option>
                                    <option value="150000">150,000 and higher</option>
                                </select>

                            </div>


                        </div>


                        <div class="row form-group">

                            <span><h4 style="padding-left:15px;"> Personal info</h4></span>
                            <div class=" col-md-6">
                                <input class="form-control" type="text" name="fullname" id="edit_fullname" required value="" accept="true" title="Full Name" placeholder="Full Name">
                            </div>


                            <div class=" col-md-6">
                                <input class="form-control" type="email" name="email_address" id="email_address" required accept="true" title="Email" value="" placeholder="Email">
                            </div>
                        </div>

                        <div class="row ">
                            <div class=" col-md-6">
                                <input type="tel" class="form-control" name="phone_home" id="edit_phone" required accept="true" title="Phone" value="" placeholder="Phone">
                            </div>


                            <div class=" col-md-6">
                                <input class="form-control" type="tel" name="zip" id="edit_zip" maxlength="5" minlength="5" required accept="true" title="Zip" mask="zip" value="" placeholder="Zip">

                            </div>
                        </div>

                        <br clear="all">

                        <div id="div_message" align="center" style="display:none;padding-right:0px;padding-bottom:10px;">
                            <div style="background-color:purple;width:100%;color:white;padding:5px;font-size:11pt;">
                                <span id="span_message" style="color:white;">Message</span>
                            </div>
                        </div>

                        <button class="effect6 button_2  btn_anim" type="submit" value="1" name="submit" id="submit">Get Free Quote Now!</button>
                        <div id="tcpa">
                            <input type="hidden" id="leadid_tcpa_disclosure"/>
                            <label for="leadid_tcpa_disclosure">

                            </label>
                        </div>
                        <p style="font-size:11px; color:#888; line-height:13px; display:block; margin-top:12px;">By clicking the "Get Free Quote Now!" button, you agree to our
                            Privacy Policy and authorize Complete Car Warranty
                            and its marketing partners to contact you at the phone number you provided,
                            using automated technology including auto-dialers, pre-recorded messages
                            and text messages, even if your phone is a mobile number or is listed on
                            any state, federal or corporate Do Not Call lists, and you are not required
                            to give your consent as a condition of service.
                        </p>
                        @include('fronts.sst._common.hidden_fields')
                    </form>
                </div>

            </div>


            <div class="col-md-7  col-md-pull-5">

                <div class="row">
                    <img src="/images/car-1.jpg" style="max-width:100%;" alt="">
                </div>
                <h2 class="left-title"> Has Your <span class="white">Auto Warranty Expired</span> or is About to Expire?
                    <span style="white-space:nowrap;">
Save Thousands on Repairs!</span></h2>


                <p style="color:#f0f0f0;">Your car is the most expensive thing you will own other than your home.
                    The dealer will often provide a warranty for the first 3-4 years, but after
                    that, you are completely unprotected. We all know auto repairs cost a lot
                    of money especially since shops charge as much as $175/hour just for
                    labor. That is why it is recommended that all drivers get an Auto Warranty
                    to protect against such costly repairs for the life of your vehicle. Let
                    Complete Car Warranty help you save money today! </p>


            </div>
        </div>


    </div>


    <div class="row" style="background:url('/images/bg-car.jpg') bottom center no-repeat #f0f0f0;;">
        <div class="container">

            <br>

            <h1 class="text-center middle-title"> Unexpected auto repair can cost<br>
                thousands of dollars as your vehicle gets older.</h1>


            <br>
            <hr style="border-bottom:1px solid #999;">
            <br>

            <div class="col-lg-5 ">
                <table class="table  table-hover table-bordered ">

                    <tbody>
                    <tr>
                        <td style="background:#333 !important; border:1px solid #333 !important; color:#fff;">
                            <h3>Potential cost of major repairs</h3>
                        </td>
                        <td style="background: url('/images/ico.png') no-repeat center center #333 !important; border:1px solid #333 !important;">
                            <br>
                            <br>
                        </td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                        <td>ENGINE REPLACEMENT</td>
                        <td>$4200</td>
                    </tr>
                    <tr>
                        <td>TRANSMISSION</td>
                        <td>$3600</td>
                    </tr>
                    <tr>
                        <td>AC COMPRESSOR</td>
                        <td>$1095</td>
                    </tr>
                    <tr>
                        <td>ECM/PCM COMPRESSOR</td>
                        <td>$1700
                        </td>
                    </tr>
                    <tr>
                        <td>WATER PUMP</td>
                        <td>$930</td>
                    </tr>
                    <tr>
                        <td>DIFFERENTIAL ASSEMBLY</td>
                        <td>$1395</td>
                    </tr>
                    </tbody>
                </table>

            </div>


            <div class="col-lg-5 col-lg-push-2 ">

                <div class="row ">
                    <div class="gallery">
                        <div class="thumbnail  ">
                            <a href="#"><i class="fa fa-bolt fa-5x" aria-hidden="true" style="color:# 2F85DA;"></i>
                            </a>
                            <h4>Instant<br>
                                Quote</h4>

                        </div>
                        <div class="thumbnail">
                            <a href="#"><i class="fa fa-wrench fa-5x" aria-hidden="true" style="color:#337ab7;"></i></a>
                            <h4>Unlimited<br>
                                Repair Claims</h4>

                        </div>
                    </div>

                    <div class="gallery">

                        <div class="thumbnail ">
                            <a href="#"><i class="fa fa-check fa-5x" aria-hidden="true" style="color:#5AB221;"></i>
                            </a>
                            <h4>A+ Rated BBB<br>
                                Accredited<br>
                                Business</h4>

                        </div>
                        <div class="thumbnail ">
                            <a href="#"><i class="fa fa-cogs fa-5x" aria-hidden="true" style="color: #999;"></i>
                            </a>
                            <h4>Accepted at<br>
                                All Dealers and
                                Mechanics</h4>

                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>

@endsection

@section('footer-scripts')
    @parent

    <script>

        /* Placeholders.js v4.0.1 */


        !function (a) {
            "use strict";

            function b() {
            }

            function c() {
                try {
                    return document.activeElement
                } catch (a) {
                }
            }

            function d(a, b) {
                for (var c = 0, d = a.length; d > c; c++) if (a[c] === b) return !0;
                return !1
            }

            function e(a, b, c) {
                return a.addEventListener ? a.addEventListener(b, c, !1) : a.attachEvent ? a.attachEvent("on" + b, c) : void 0
            }

            function f(a, b) {
                var c;
                a.createTextRange ? (c = a.createTextRange(), c.move("character", b), c.select()) : a.selectionStart && (a.focus(), a.setSelectionRange(b, b))
            }

            function g(a, b) {
                try {
                    return a.type = b, !0
                } catch (c) {
                    return !1
                }
            }

            function h(a, b) {
                if (a && a.getAttribute(B)) b(a); else for (var c, d = a ? a.getElementsByTagName("input") : N, e = a ? a.getElementsByTagName("textarea") : O, f = d ? d.length : 0, g = e ? e.length : 0, h = f + g, i = 0; h > i; i++) c = f > i ? d[i] : e[i - f], b(c)
            }

            function i(a) {
                h(a, k)
            }

            function j(a) {
                h(a, l)
            }

            function k(a, b) {
                var c = !!b && a.value !== b, d = a.value === a.getAttribute(B);
                if ((c || d) && "true" === a.getAttribute(C)) {
                    a.removeAttribute(C), a.value = a.value.replace(a.getAttribute(B), ""), a.className = a.className.replace(A, "");
                    var e = a.getAttribute(I);
                    parseInt(e, 10) >= 0 && (a.setAttribute("maxLength", e), a.removeAttribute(I));
                    var f = a.getAttribute(D);
                    return f && (a.type = f), !0
                }
                return !1
            }

            function l(a) {
                var b = a.getAttribute(B);
                if ("" === a.value && b) {
                    a.setAttribute(C, "true"), a.value = b, a.className += " " + z;
                    var c = a.getAttribute(I);
                    c || (a.setAttribute(I, a.maxLength), a.removeAttribute("maxLength"));
                    var d = a.getAttribute(D);
                    return d ? a.type = "text" : "password" === a.type && g(a, "text") && a.setAttribute(D, "password"), !0
                }
                return !1
            }

            function m(a) {
                return function () {
                    P && a.value === a.getAttribute(B) && "true" === a.getAttribute(C) ? f(a, 0) : k(a)
                }
            }

            function n(a) {
                return function () {
                    l(a)
                }
            }

            function o(a) {
                return function () {
                    i(a)
                }
            }

            function p(a) {
                return function (b) {
                    return v = a.value, "true" === a.getAttribute(C) && v === a.getAttribute(B) && d(x, b.keyCode) ? (b.preventDefault && b.preventDefault(), !1) : void 0
                }
            }

            function q(a) {
                return function () {
                    k(a, v), "" === a.value && (a.blur(), f(a, 0))
                }
            }

            function r(a) {
                return function () {
                    a === c() && a.value === a.getAttribute(B) && "true" === a.getAttribute(C) && f(a, 0)
                }
            }

            function s(a) {
                var b = a.form;
                b && "string" == typeof b && (b = document.getElementById(b), b.getAttribute(E) || (e(b, "submit", o(b)), b.setAttribute(E, "true"))), e(a, "focus", m(a)), e(a, "blur", n(a)), P && (e(a, "keydown", p(a)), e(a, "keyup", q(a)), e(a, "click", r(a))), a.setAttribute(F, "true"), a.setAttribute(B, T), (P || a !== c()) && l(a)
            }

            var t = document.createElement("input"), u = void 0 !== t.placeholder;
            if (a.Placeholders = { nativeSupport: u, disable: u ? b : i, enable: u ? b : j }, !u) {
                var v, w = ["text", "search", "url", "tel", "email", "password", "number", "textarea"],
                    x = [27, 33, 34, 35, 36, 37, 38, 39, 40, 8, 46], y = "#ccc", z = "placeholdersjs",
                    A = new RegExp("(?:^|\\s)" + z + "(?!\\S)"), B = "data-placeholder-value",
                    C = "data-placeholder-active", D = "data-placeholder-type", E = "data-placeholder-submit",
                    F = "data-placeholder-bound", G = "data-placeholder-focus", H = "data-placeholder-live",
                    I = "data-placeholder-maxlength", J = 100, K = document.getElementsByTagName("head")[0],
                    L = document.documentElement, M = a.Placeholders, N = document.getElementsByTagName("input"),
                    O = document.getElementsByTagName("textarea"), P = "false" === L.getAttribute(G),
                    Q = "false" !== L.getAttribute(H), R = document.createElement("style");
                R.type = "text/css";
                var S = document.createTextNode("." + z + " {color:" + y + ";}");
                R.styleSheet ? R.styleSheet.cssText = S.nodeValue : R.appendChild(S), K.insertBefore(R, K.firstChild);
                for (var T, U, V = 0, W = N.length + O.length; W > V; V++) U = V < N.length ? N[V] : O[V - N.length], T = U.attributes.placeholder, T && (T = T.nodeValue, T && d(w, U.type) && s(U));
                var X = setInterval(function () {
                    for (var a = 0, b = N.length + O.length; b > a; a++) U = a < N.length ? N[a] : O[a - N.length], T = U.attributes.placeholder, T ? (T = T.nodeValue, T && d(w, U.type) && (U.getAttribute(F) || s(U), (T !== U.getAttribute(B) || "password" === U.type && !U.getAttribute(D)) && ("password" === U.type && !U.getAttribute(D) && g(U, "text") && U.setAttribute(D, "password"), U.value === U.getAttribute(B) && (U.value = T), U.setAttribute(B, T)))) : U.getAttribute(C) && (k(U), U.removeAttribute(B));
                    Q || clearInterval(X)
                }, J);
                e(a, "beforeunload", function () {
                    M.disable()
                })
            }
        }(this), function (a, b) {
            "use strict";
            var c = a.fn.val, d = a.fn.prop;
            b.Placeholders.nativeSupport || (a.fn.val = function (a) {
                var b = c.apply(this, arguments), d = this.eq(0).data("placeholder-value");
                return void 0 === a && this.eq(0).data("placeholder-active") && b === d ? "" : b
            }, a.fn.prop = function (a, b) {
                return void 0 === b && this.eq(0).data("placeholder-active") && "value" === a ? "" : d.apply(this, arguments)
            })
        }(jQuery, this);

    </script>
@endsection


