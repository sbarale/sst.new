@extends('layouts.empty')
@section('title','Jacuzzi')
@section('header-middle-img','/images/ins.png')
@section('head')

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Jacuzzi</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript">
        // Minified version of isMobile included in the HTML since it's small
        !function(a){var b=/iPhone/i,c=/iPod/i,d=/iPad/i,e=/(?=.*\bAndroid\b)(?=.*\bMobile\b)/i,f=/Android/i,g=/(?=.*\bAndroid\b)(?=.*\bSD4930UR\b)/i,h=/(?=.*\bAndroid\b)(?=.*\b(?:KFOT|KFTT|KFJWI|KFJWA|KFSOWI|KFTHWI|KFTHWA|KFAPWI|KFAPWA|KFARWI|KFASWI|KFSAWI|KFSAWA)\b)/i,i=/IEMobile/i,j=/(?=.*\bWindows\b)(?=.*\bARM\b)/i,k=/BlackBerry/i,l=/BB10/i,m=/Opera Mini/i,n=/(CriOS|Chrome)(?=.*\bMobile\b)/i,o=/(?=.*\bFirefox\b)(?=.*\bMobile\b)/i,p=new RegExp("(?:Nexus 7|BNTV250|Kindle Fire|Silk|GT-P1000)","i"),q=function(a,b){return a.test(b)},r=function(a){var r=a||navigator.userAgent,s=r.split("[FBAN");return"undefined"!=typeof s[1]&&(r=s[0]),s=r.split("Twitter"),"undefined"!=typeof s[1]&&(r=s[0]),this.apple={phone:q(b,r),ipod:q(c,r),tablet:!q(b,r)&&q(d,r),device:q(b,r)||q(c,r)||q(d,r)},this.amazon={phone:q(g,r),tablet:!q(g,r)&&q(h,r),device:q(g,r)||q(h,r)},this.android={phone:q(g,r)||q(e,r),tablet:!q(g,r)&&!q(e,r)&&(q(h,r)||q(f,r)),device:q(g,r)||q(h,r)||q(e,r)||q(f,r)},this.windows={phone:q(i,r),tablet:q(j,r),device:q(i,r)||q(j,r)},this.other={blackberry:q(k,r),blackberry10:q(l,r),opera:q(m,r),firefox:q(o,r),chrome:q(n,r),device:q(k,r)||q(l,r)||q(m,r)||q(o,r)||q(n,r)},this.seven_inch=q(p,r),this.any=this.apple.device||this.android.device||this.windows.device||this.other.device||this.seven_inch,this.phone=this.apple.phone||this.android.phone||this.windows.phone,this.tablet=this.apple.tablet||this.android.tablet||this.windows.tablet,"undefined"==typeof window?this:void 0},s=function(){var a=new r;return a.Class=r,a};"undefined"!=typeof module&&module.exports&&"undefined"==typeof window?module.exports=r:"undefined"!=typeof module&&module.exports&&"undefined"!=typeof window?module.exports=s():"function"==typeof define&&define.amd?define("isMobile",[],a.isMobile=s()):a.isMobile=s()}(this);
        var mobileDevice = isMobile.apple.phone || isMobile.android.phone || isMobile.other.device;
    </script>
    <link rel="shortcut icon" href="/assets/remodeling/jacuzzi/img/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Exo:300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" media="screen">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" media="screen">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" media="screen">

    <link rel="stylesheet" href="/assets/remodeling/jacuzzi/css/bvalidator.css" media="screen">

    <link rel="stylesheet" href="/assets/remodeling/jacuzzi/css/themes/bvalidator.theme.red.css" media="screen">

    <link rel="stylesheet" href="/assets/remodeling/jacuzzi/css/style.css" media="screen">

    <link rel="stylesheet" href="/assets/remodeling/jacuzzi/css/custom_per_micro.css" media="screen">

    <style type="text/css">
        body{color:#333333;}.highlight_color{color:#c6a00c;}.form-control{color:#333333;}.form-control::placeholder{color:#999;}.btn-success{background-color:#007599;color:#ffffff !important;border-color:#ffffff;}#header{background-color:#007599;}.not_top #header{border-color:#007599;}#top_bar a{color:#ffffff;}.navbar-light .navbar-toggler{color:#000000;}#navbarToggler a{color:#222;}#navbarToggler .active a{color:#007599;}#navbarToggler a:hover{color:#007599;}#hero_right form{background-color:rgba(0, 0, 0, .5);border-color:#ffffff;}#hero_right .form_title{color:#ffffff;}#sub_footer .form_title{color:#ffffff;}#hero_right label{color:#ffffff;}#hero .form_subtitle{color:#c6a00c;}#hero.internal_hero .form_subtitle{color:#ffffff;}#sub_footer .form_subtitle{color:#c6a00c;}.hero_text{color:#ffffff;}#directions_link .btn{color:#000000;border-color:#000000;background-color:rgba(0, 117, 153, .5);}#directions_link .btn:hover{background-color:rgba(0, 117, 153, 1);}.trust_lower_top_text{color:#007599;}.testimonial_lower_top_text{color:#007599;}#testimonials .nav_arrow{color:#007599;}#testimonials{background-color:#ffffff;}.testimonial_rating_container{color:#f47421;}.testimonial_carousel .slick-dots li button{background-color:#bbb;}.testimonial_carousel .slick-dots li:hover button{background-color:#666;}.testimonial_carousel .slick-dots li.slick-active button{background-color:#000000;}#footer{color:#ffffff;background-color:#007599;}#footer a{color:#ffffff;}#footer a:hover{color:#ffffff;}.cta_image{border-color:#007599;}.cta{border-color:rgba(0, 117, 153, .3);}#content{background-color:#ffffff;}#cta_internal.cta{border-color:#ffffff;background-color:rgba(255, 255, 255, .71);}#cta_left{border-color:rgba(0, 117, 153, .3);}.gallery_lower_top_text{color:#007599;}#gallery .nav_arrow{color:#000000;}#bottom_bar{background-color:#002a3a;}#sub_footer{background-color:#002a3a;}#bottom_bar a{color:#ffffff;}#bottom_bar a:hover{color:#ffffff;}#mobile_bar{border-color:#002a3a;background-color:#007599;}#mobile_bar a{color:#ffffff;}.mobile_bar_button{border-color:#002a3a;}.concave_curve{background-color:#ffffff;border-color:rgba(0, 117, 153, .6);}.convex_curve{background-color:#ffffff;border-color:rgba(0, 117, 153, .6);}#main_ctas{background-color:rgba(0, 117, 153, .1);}#secondary_content_area{background-color:rgba(0, 117, 153, .1);}.entry_content a{color:#007599;}.btn-success:hover{border-color:#ffffff;background-color:#002a3a;}
        header{
            display: none!important;
        }
    </style>
@endsection


@section('content')

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PWPB3S"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>


    <div id="header" class="fixed-top">
        <div id="top_bar" class="container-fluid">
            <div class="row">
                <div class="col">
                    <div id="top_bar_info" class="float-right">
                        <a href="tel:8888967228" class="tel_link phone phone_changer float-right"></a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="/assets/remodeling/jacuzzi/img/logo.png" alt="Jacuzzi<sup>®</sup> Walk-In Baths Main Logo" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars fa-fw"></i>
            </button>


        </nav>
    </div>
    <div id="hero" class="jumbotron jumbotron-fluid" style="background-image:url('/assets/remodeling/jacuzzi/img/hero.jpg')">
        <div id="hero_overlay"></div>
        <div id="hero_content" class="container-fluid">
            <div id="hero_left" class="text-center text-md-left">
                <div class="hero_text">
                    <span class="hero_text_sl">Get</span> <span class="hero_text_rl highlight_color">$1,500</span> <span class="hero_text_sl">Off</span><br />
                    Your New Walk-In Tub Today! </div>
                <a href="#" class="d-inline-block d-md-none btn btn-success">Get a Free Quote Now!</a>
            </div>
            <div id="hero_right" class="d-none d-md-block">
                <form id="hero_form" action="/remodeling/jacuzzi/1" method="post">
                    {{ csrf_field() }}
                    <div class="form_title text-center">Bathtubs from a Trusted Name</div>
                    <div class="form_subtitle text-center">Fill out the form below for more information about Jacuzzi<sup>®</sup> Walk-In Bathtubs.</div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="first_name" placeholder="Enter first name" data-bvalidator="required">
                            </div>
                            <div class="col">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="last_name" placeholder="Enter last name" data-bvalidator="required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email_address" placeholder="Enter email" data-bvalidator="required,email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label>Phone</label>
                                <input type="tel" class="form-control phone_mask" name="phone_home" placeholder="Enter phone number" data-bvalidator="required,rangelength[10:14]" maxlength="14">
                            </div>
                            <div class="col">
                                <label>ZIP Code</label>
                                <input type="tel" class="form-control" name="zip_code" placeholder="Enter ZIP Code" data-bvalidator="required,rangelength[5:5]" maxlength="5">
                            </div>
                        </div>
                    </div>
                    <div class="formRow1Col">
                        <label>What is your credit rating?</label>
                    </div>
                    <div class="row field">

                        <div class="form-group">
                            <label style="display: block; margin-bottom: 10px; margin-left: 20px;">
                                <input type="radio" data-parsley-required name="credit_rate" value="Excellent"> Excellent
                            </label>
                            <label style="display: block; margin-bottom: 10px; margin-left: 20px;">
                                <input type="radio" data-parsley-required name="credit_rate" value="Good"> Good
                            </label>
                            <label style="display: block; margin-bottom: 10px; margin-left: 20px;">
                                <input type="radio" data-parsley-required name="credit_rate" value="Fair"> Fair
                            </label>
                            <label style="display: block; margin-bottom: 10px; margin-left: 20px;">
                                <input type="radio" data-parsley-required name="credit_rate" value="Poor"> Poor
                            </label>
                        </div>
                    </div>
                    <button type="submit" name="_submit" value="1" class="btn btn-success btn-block">Get a Free Quote Now!</button>
                    <div class="d-none"><input type="hidden" id="" class="form_referrer" name="Field7" value=""><input type="hidden" id="" class="form_source" name="Field6" value=""><input type="hidden" id="" class="" name="comment" value=""><input type="hidden" id="" class="" name="idstamp" value="4s7Ar7vsPkkIgFjlr694qPgiG6NK4/erVptkeBG0ZkY=">
                    </div>
                    @include('fronts.sst._common.hidden_fields')
                </form>
            </div>
        </div>
        <div class="concave_curve"></div>
    </div>
    <div id="content" class="container-fluid">
        <div id="content_container" data-aos="fade-up" data-aos-duration="1000">
            <div class="row entry_content">
                <div class="content_image col-10 offset-1 col-md-10 offset-md-1 order-first col-lg-4 offset-lg-0 order-lg-last" style="background-image:url('/assets/remodeling/jacuzzi/img/home1.jpg'); background-position:left top; background-repeat:no-repeat; background-size:cover;">
                    <div class="overlay">

                    </div>
                </div>
                <div class="col-10 offset-1 col-md-10 offset-md-1 order-last col-lg-6 offset-lg-1 order-lg-first">
                    <div class="page_content">
                        <h1>Walk-In Tubs Provide a Safer, More Relaxing Bathing Experience</h1>
                        <p>If bathing in a standard bathtub has become a difficult process for you or a loved one, then a Jacuzzi<sup>®</sup> Walk-In Tub is the perfect upgrade. Our walk-in tubs are designed with safety and comfort in mind, allowing you to bathe with confidence. One of our beautiful tubs can fit seamlessly into the current dimensions of your bathing space, and offers the following benefits:</p>
                        <ul>
                            <li>Easy access getting in and out with a low step-in threshold and wide-opening, leak-proof door</li>
                            <li>Added stability from an ergonomic grab bar</li>
                            <li>Ultimate relaxation with hydromassage jets that target different muscle groups</li>
                            <li>The convenience of a Fast Fill™ Faucet and Fast Drain technology</li>
                            <li>The ability to use Epsom Salts to in soaking and jetted experiences</li>
                            <li>And more</li>
                        </ul>
                        <p>With such a large focus on safety, these are ideal tubs for seniors, as well as those who are disabled or have limited mobility. </p> <a href="#" class="btn btn-success">Get a Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="main_ctas" class="convex_fix container-fluid" data-aos="fade-up" data-aos-duration="1000">
        <div class="convex_curve"></div>
        <div class="row">
            <div id="cta_left" class="cta col-12 col-lg">
                <div class="row">
                    <div class="cta_image_container col-12 col-sm-4 col-md-5 col-lg-4 col-xl-3">
                        <div class="row">
                            <div class="cta_image col" style="background-image:url('/assets/remodeling/jacuzzi/img/cta1.jpg')"></div>
                        </div>
                    </div>
                    <div class="cta_text text-center text-sm-left col-12 col-sm-8 col-md-7 col-lg-8 col-xl-9">
                        <div class="cta_top_text">
                            Save $1,500 On Your Walk-In Bathtub
                        </div>
                        <div class="cta_bottom_text">
                            <p>Take advantage of this great deal by contacting us today.</p>
                        </div>
                        <a href="#" class="btn btn-success">Learn More</a>
                    </div>
                </div>
            </div>
            <div id="cta_right" class="cta col-12 col-lg">
                <div class="row">
                    <div class="cta_image_container col-12 col-sm-4 col-md-5 col-lg-4 col-xl-3">
                        <div class="row">
                            <div class="cta_image col" style="background-image:url('/assets/remodeling/jacuzzi/img/cta2.jpg')"></div>
                        </div>
                    </div>
                    <div class="cta_text text-center text-sm-left col-12 col-sm-8 col-md-7 col-lg-8 col-xl-9">
                        <div class="cta_top_text">
                            Jacuzzi<sup>®</sup> – The Trusted Brand
                        </div>
                        <div class="cta_bottom_text">
                            <p>Contact us today to find out more Jacuzzi<sup>®</sup> and our industry-leading walk-in tubs.</p>
                        </div>
                        <a href="#" class="btn btn-success">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="gallery" data-aos="fade-up" data-aos-duration="1000" class="container-fluid text-center">
        <div class="row">
            <div class="col-12 offset-md-0 col-lg-10 offset-lg-1">
                <div class="feature_top_text gallery_top_text">Inspiration Gallery</div>
                <div class="feature_lower_top_text gallery_lower_top_text">
                    <p>Take a look at some of our beautiful walk-in tubs.</p>
                </div>
                <div id="photo_carousel_container">
                    <a href="javascript:void(0)" class="nav_arrow slick-prev d-block d-sm-none" id="prev_gallery_arrow"><i class="fas fa-angle-left fa-fw"></i></a>
                    <a href="javascript:void(0)" class="nav_arrow slick-next d-block d-sm-none" id="next_gallery_arrow"><i class="fas fa-angle-right fa-fw"></i></a>
                    <div class="photo_carousel">
                        <div class="grid-item col-sm-6 col-md-3 grid-item--height2">
                            <a href="/assets/remodeling/jacuzzi/img/photo1.jpg" data-thumb="/assets/remodeling/jacuzzi/img/photo1.jpg" data-fancybox="images" class="grid-item-content" style="background-image:url('/assets/remodeling/jacuzzi/img/photo1.jpg');"></a>
                        </div>
                        <div class="grid-item col-sm-6 col-md-3">
                            <a href="/assets/remodeling/jacuzzi/img/photo2.jpg" data-thumb="/assets/remodeling/jacuzzi/img/photo2.jpg" data-fancybox="images" class="grid-item-content" style="background-image:url('/assets/remodeling/jacuzzi/img/photo2.jpg');"></a>
                        </div>
                        <div class="grid-item col-sm-6 col-md-3">
                            <a href="/assets/remodeling/jacuzzi/img/photo3.jpg" data-thumb="/assets/remodeling/jacuzzi/img/photo3.jpg" data-fancybox="images" class="grid-item-content" style="background-image:url('/assets/remodeling/jacuzzi/img/photo3.jpg');"></a>
                        </div>
                        <div class="grid-item col-sm-6 col-md-3 grid-item--height2">
                            <a href="/assets/remodeling/jacuzzi/img/photo4.jpg" data-thumb="/assets/remodeling/jacuzzi/img/photo4.jpg" data-fancybox="images" class="grid-item-content" style="background-image:url('/assets/remodeling/jacuzzi/img/photo4.jpg');"></a>
                        </div>
                        <div class="grid-item col-sm-6 col-md-3">
                            <a href="/assets/remodeling/jacuzzi/img/photo5.jpg" data-thumb="/assets/remodeling/jacuzzi/img/photo5.jpg" data-fancybox="images" class="grid-item-content" style="background-image:url('/assets/remodeling/jacuzzi/img/photo5.jpg');"></a>
                        </div>
                        <div class="grid-item col-sm-6 col-md-3">
                            <a href="/assets/remodeling/jacuzzi/img/photo6.jpg" data-thumb="/assets/remodeling/jacuzzi/img/photo6.jpg" data-fancybox="images" class="grid-item-content" style="background-image:url('/assets/remodeling/jacuzzi/img/photo6.jpg');"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <div id="secondary_content_area" class="convex_fix container-fluid" data-aos="fade-up" data-aos-duration="1000">
        <div class="convex_curve"></div>
        <div class="row">
            <div id="secondary_content_left" class="col-12 col-sm-6 col-md-5 offset-md-1" style="background-image:url('/assets/remodeling/jacuzzi/img/whychoose.jpg')"></div>
            <div id="secondary_content_right" class="col-12 col-sm-6 col-md-5">
                <div class="secondary_content_text_container">
                    <div class="secondary_content_top_text">Jacuzzi<sup>®</sup> Brand – Trusted by Consumers</div>
                    <p>As the company that invented the whirlpool bath, we consider ourselves experts on the subject. Since 1956, we’ve spent decades improving our baths, setting the standard for quality and value. Jacuzzi<sup>®</sup> Walk-In Tubs combine both luxury and safety, offering you the ultimate bathing experience. You can easily get into our tubs, but with the relaxing jets, heated seat, and constant warm water, you won’t want to get out. With a Jacuzzi<sup>®</sup> Walk-In Tub, you’ll never have to sacrifice your comfort or safety while bathing again.</p> <a href="#" class="btn btn-success">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div id="testimonials" class="container-fluid text-center" data-aos="fade-up" data-aos-duration="1000">
        <a href="javascript:void(0)" class="nav_arrow slick-prev d-none d-md-block" id="prev_testimonial_arrow"><i class="fas fa-angle-left fa-fw"></i></a>
        <a href="javascript:void(0)" class="nav_arrow slick-next d-none d-md-block" id="next_testimonial_arrow"><i class="fas fa-angle-right fa-fw"></i></a>
        <div class="row">
            <div class="container">
                <div class="row">
                    <div id="testimonials_top_container" class="col-10 offset-1 col-md-8 offset-md-2 col-lg-10 offset-lg-1">
                        <div class="feature_top_text testimonial_top_text">What Our Clients Are Saying</div>
                        <div class="feature_lower_top_text testimonial_lower_top_text">
                            See what our clients have to say about working with us! </div>
                    </div>
                </div>
                <div class="row">
                    <div id="testimonials_container" class="col-10 offset-1 col-md-8 offset-md-2 col-lg-10 offset-lg-1">
                        <div class="testimonial_carousel">
                            <div class="testimonial_item text-left">
                                <div class="testimonial_title">Tom W.</div>
                                <div class="testimonial_rating_container">
                                    <i class="fas fa-star fa-fw"></i><i class="fas fa-star fa-fw"></i><i class="fas fa-star fa-fw"></i><i class="fas fa-star fa-fw"></i><i class="fas fa-star fa-fw"></i>
                                </div>
                                <div class="testmonial_content">
                                    <p>My wife had a hip replacement and they had the tub installed and working when she got home from rehab. Everything fell right in place.</p>
                                </div>
                            </div>
                            <div class="testimonial_item text-left">
                                <div class="testimonial_title">Judy M.</div>
                                <div class="testimonial_rating_container">
                                    <i class="fas fa-star fa-fw"></i><i class="fas fa-star fa-fw"></i><i class="fas fa-star fa-fw"></i><i class="fas fa-star fa-fw"></i><i class="fas fa-star fa-fw"></i>
                                </div>
                                <div class="testmonial_content">
                                    <p>The tub was purchased for my benefit, due to bad knees. However, my husband has enjoyed it just as much as me. It really relaxes him after a busy day.</p>
                                </div>
                            </div>
                            <div class="testimonial_item text-left">
                                <div class="testimonial_title">Mary Lou G.</div>
                                <div class="testimonial_rating_container">
                                    <i class="fas fa-star fa-fw"></i><i class="fas fa-star fa-fw"></i><i class="fas fa-star fa-fw"></i><i class="fas fa-star fa-fw"></i><i class="fas fa-star fa-fw"></i>
                                </div>
                                <div class="testmonial_content">
                                    <p>I can take a quick shower if need be, or I can relax and enjoy the luxury of Jacuzzi<sup>®</sup> Walk-In Tub. Either way, I am VERY satisfied with the tub. It’s attractive, convenient and practical. What more could I ask for?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sub_footer">
        <div class="row no-gutters">
            <div id="sub_footer_right" class="col-12">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-10 offset-1">
                            <form id="subfooter_form" action="/remodeling/jacuzzi/1" method="post">
                                {{ csrf_field() }}
                                <div class="form_title text-center">Start Enjoying the Benefits</div>
                                <div class="form_subtitle text-center">Take the first step towards a new walk-in tub by filling out the form below.</div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" name="first_name" placeholder="First Name" data-bvalidator="required">
                                        </div>
                                        <div class="col">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" name="last_name" placeholder="Last Name" data-bvalidator="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email_address" placeholder="Email" data-bvalidator="required,email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <label>Phone</label>
                                            <input type="tel" class="form-control phone_mask" name="phone_home" placeholder="Phone Number" data-bvalidator="required,rangelength[10:14]" maxlength="14">
                                        </div>
                                        <div class="col">
                                            <label>ZIP Code</label>
                                            <input type="tel" class="form-control" name="zip_code" placeholder="ZIP Code" data-bvalidator="required,rangelength[5:5]" maxlength="5">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom: 5px;">
                                    <div class="form-row">
                                        <div class="col">
                                            <label style="display: block; color: white;">What is your credit rating?</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row field">

                                    <div class="form-group">
                                        <label style="display: block; margin-bottom: 10px; margin-left: 20px; color: white;">
                                            <input type="radio" data-parsley-required name="credit_rate" value="Excellent"> Excellent
                                        </label>
                                        <label style="display: block; margin-bottom: 10px; margin-left: 20px; color: white;">
                                            <input type="radio" data-parsley-required name="credit_rate" value="Good"> Good
                                        </label>
                                        <label style="display: block; margin-bottom: 10px; margin-left: 20px; color: white;">
                                            <input type="radio" data-parsley-required name="credit_rate" value="Fair"> Fair
                                        </label>
                                        <label style="display: block; margin-bottom: 10px; margin-left: 20px; color: white;">
                                            <input type="radio" data-parsley-required name="credit_rate" value="Poor"> Poor
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" name="_submit" value="1" class="btn btn-success btn-block">Get a Free Quote Now!</button>
                                <div class="d-none"><input type="hidden" id="" class="form_referrer" name="Field7" value=""><input type="hidden" id="" class="form_source" name="Field6" value=""><input type="hidden" id="" class="" name="comment" value=""><input type="hidden" id="" class="" name="idstamp" value="4s7Ar7vsPkkIgFjlr694qPgiG6NK4/erVptkeBG0ZkY=">
                                </div>
                                @include('fronts.sst._common.hidden_fields')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <div id="footer" class="container-fluid text-center text-lg-left">
        <div class="row">
            <div id="footer_left" class="col-12 col-lg-5 offset-lg-1 col-xl-4 offset-xl-2">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="/assets/remodeling/jacuzzi/img/logo-white.png" alt="Jacuzzi<sup>®</sup> Walk-In Baths White Logo" class="img-fluid footer_logo" />
                    </div>
                </div>
                <div class="row">
                </div>
            </div>
        </div>
    </div>
    <div id="bottom_bar" class="container-fluid d-none d-lg-block">
        <div class="row">
            <div class="col text-center">
                <a href="tel:8888967228" class="d-block phone_changer"><strong></strong></a>
            </div>
        </div>
    </div>
    <div id="mobile_bar" class="container-fluid d-block d-lg-none fixed-bottom">
        <div class="row">
            <div id="first_mobile_buttom" class="mobile_bar_button col-6 text-center">
                <a href="#" class="d-block phone_changer">Get a Free Estimate</a>
            </div>
            <div id="last_mobile_button" class="mobile_bar_button col-6 text-center">
                <a href="tel:8888967228" class="d-block phone_changer">Call Today</a>
            </div>
        </div>
    </div>

@endsection

@section('footer-scripts')
    @parent

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://unpkg.com/aos@3.0.0-beta.5/dist/aos.js"></script>
    <script defer="" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script defer="" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script defer="" src="https://unpkg.com/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"></script>
    <script defer="" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script defer="" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
    <script defer="" src="https://cdn.jsdelivr.net/jquery.cookie/1.4.1/jquery.cookie.min.js"></script>
    <script defer="" src="https://cdn.jsdelivr.net/jquery.lazyload/1.9.3/jquery.lazyload.min.js"></script>
    <script src="/assets/remodeling/jacuzzi/js/jquery.mask.min.js"></script>
    <script src="/assets/remodeling/jacuzzi/js/jquery.bvalidator.js"></script>
    <script src="/assets/remodeling/jacuzzi/js/custom.js"></script>

    <script src="/assets/remodeling/jacuzzi/js/custom_per_micro.js"></script>
    <script>

        var formstovalidate = [];
        var source_numbers = {};

        formstovalidate = ["sticky_form","hero_form","subfooter_form","specials_form","contact_form"];


    </script>
    <script src="/assets/remodeling/jacuzzi/js/map.js"></script>
    <script type="text/javascript">
        AOS.init();
    </script>

@endsection


