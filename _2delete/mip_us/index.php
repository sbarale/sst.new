<?php   
if (isset($_GET['fbid'])) {
    $fbid = $_GET['fbid'];
    }else{
	   $fbid = 1737334566282056;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Savings-scanner</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="css/landing_page.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900%7CRoboto+Slab:400,700" rel="stylesheet">
    <style type="text/css">form label {
        font-size: 12px;
        color: red;
      }
    </style>
</head>
<body>

 <header>
     <div class="head-logo">
         <img src="pictures/landing/logo.png">
     </div>
     <div class="head-number">
<!--
         <div class="first">CALL FOR QUOTES:</div>
         <div class="second">Call Now: <a href="tel:(888) 633-9277">(888) 633-9277</a></div>
-->
     </div>
 </header>

<!------------------------------------First block---------------------------------------------------------------------->

 <div class="lp-first-block">
     <div class="lp-first-block-content">
        <h2>
            Compare 2017 Medicare<br>
            Supplemental Plans
        </h2>
         <div class="lp-corner"></div>
         <div class="lp-qotes-block lp-top-quotes-block">
             <h3>Get Your Free Quotes</h3>
             <form action="./step1.php" method="post" data-toggle="validator" role="form">
                 <input type="tel" name="zipcode" pattern="^\d{5}$" maxlength="5" class="form-control" placeholder="Enter Zip Code" required>
                  <input type="hidden" name="st-t" id="st-t" value="<?php
if (isset($_GET['st-t'])) {
    echo $_GET['st-t'];
} else {
    echo '';
}
?>" />
                                            <input type="hidden" id="st-custom-id" name="_st_custom_id" value="<?php
if (isset($_GET['_st_custom_id'])) {
    echo $_GET['_st_custom_id'];
} else {
    echo '';
}
?>" />
                                            <input type="hidden" id="st-custom-value" name="_st_custom_value" value="<?php
if (isset($_GET['_st_custom_value'])) {
    echo $_GET['_st_custom_value'];
} else {
    if (isset($_GET['subid'])) {
        echo $_GET['subid'];
    } else {
        echo '';
    }
}
?>" />
                                            <input type="hidden" name="click_id" id="click_id" value="<?php
if (isset($_GET['click_id'])) {
    echo $_GET['click_id'];
} else {
    echo '';
}
?>" />
<input type="hidden" name="sub_id" id="sub_id" value="<?php
if (isset($_GET['sub_id'])) {
    echo $_GET['sub_id'];
} else {
    echo '';
}
?>" />
<input type="hidden" name="fbid" id="type" value="<?php echo $fbid; ?>" />
<input type="hidden" name="utm_id" id="type" value="<?php
if (isset($_GET['utm_id'])) {
    echo $_GET['utm_id']; 
} else {
    echo '';
}
?>" />

                 <input type="submit" class="btn" />                 
             </form>
         </div>
         <div class="lp-providers-text">
             Compare quotes from top providers:
         </div>
         <div class="lp-providers">
             <img src="pictures/landing/providers.png">
         </div>
     </div>
 </div>

 <!------------------------------------Second block-------------------------------------------------------------------->

 <div class="lp-second-block">
     <div class="lp-light-block">
        <h3>Talk to a licensed medicare expert</h3>
         <div>Speak with a licensed agent to get expert advice</div>
         <div>on choosing a plan that's right for you.</div>
     </div>
     <div class="lp-pointer-block"></div>
     <div class="lp-dark-block">
<!--         <div class="handset"></div> -->
         <div>

         </div>
     </div>
 </div>

 <!------------------------------------Third block--------------------------------------------------------------------->

 <div class="lp-third-block">
     <h2>
         <span>
             In 3 easy steps, Savings-Scanner will help you
         </span>
         <span>
             find the best medicare supplement plan:
         </span>
     </h2>
    <div class="lp-three-steps">
        <div class="lp-step">
            <div class="lp-step-img lp-first-step"></div>
            <div class="lp-step-text">
                <div class="lp-step-text-head">
                    Easy Quotes
                </div>
                <div class="lp-step-text-body">
                    Enter your zip code, and we'll show you the best.
                </div>
            </div>
        </div>
        <div class="lp-jump"></div>
        <div class="lp-step">
            <div class="lp-step-img lp-second-step"></div>
            <div class="lp-step-text">
                <div class="lp-step-text-head">
                    Compare Plans
                </div>
                <div class="lp-step-text-body">
                    Compare available plans based on price, coverage and other factors.
                </div>
            </div>
        </div>
        <div class="lp-jump"></div>
        <div class="lp-step">
            <div class="lp-step-img lp-third-step"></div>
            <div class="lp-step-text">
                <div class="lp-step-text-head">
                    Save on Healthcare
                </div>
                <div class="lp-step-text-body">
                    Enjoy medicare with no deductibles or co-pays!
                </div>
            </div>
        </div>
    </div>
 </div>

 <!------------------------------------Fourth block-------------------------------------------------------------------->

 <div class="lp-fourth-block">
     <article>
         <div class="lp-photo">
            <img src="pictures/landing/comment_photo_1.jpg">
         </div>
         <div class="lp-comment">
             <div class="lp-comment-header">
                 "Finding the best plan was quick and easy..."
             </div>
             <div class="lp-comment-text">
                 "Making sense of all the medicare plans and different policies was
                 overwhelming, but once I had the guidance of an expert from Medicare Zoom
                 I was able to find the perfect plan for my wife and I."
             </div>
             <div class="lp-comment-author">
                 - John & Kathy B. (Ft Lauderdale, FL)
             </div>
         </div>
     </article>
     <article class="lp-right">
         <div class="lp-comment">
             <div class="lp-comment-header">
                 "Savings-Scanner simplified everything"
             </div>
             <div class="lp-comment-text">
                 "I had a hard time finding which company really was the best for medicare
                 supplemental.  Savings-Scanner simplified everything and made it really easy
                 to know exactly which insurance company was the best for us."
             </div>
             <div class="lp-comment-author">
                 - Will & Jackie R. (Cleveland, OH)
             </div>
         </div>
         <div class="lp-photo">
             <img src="pictures/landing/comment_photo_2.jpg">
         </div>
     </article>
     <article>
         <div class="lp-photo">
             <img src="pictures/landing/comment_photo_3.jpg">
         </div>
         <div class="lp-comment">
             <div class="lp-comment-header">
                 "...Everything made sense..."
             </div>
             <div class="lp-comment-text">
                 "The agents at Savings-Scanner did a terrific job of making a confusing topic
                 just make sense.  We know we made the right decision by talking to them."
             </div>
             <div class="lp-comment-author">
                 - Elizabeth & Richard K. (Naples, FL)
             </div>
         </div>
     </article>
 </div>

 <!------------------------------------Fifth block--------------------------------------------------------------------->

 <div class="lp-fifth-block">
     <h3>
         Click on your state to see <strong>your local plans</strong>
     </h3>
     <div class="lp-container"></div>
     <div class="lp-state-tabel">
         <div id="states-list1" class="lp-column"></div>
         <div id="states-list2" class="lp-column"></div>
         <div id="states-list3" class="lp-column"></div>
         <div id="states-list4" class="lp-column"></div>
     </div>

 </div>

 <!------------------------------------Sixth block-------------------------------------------------------------->

 <div class="lp-sixth-block">
     <h5>
         Find The Best Plan For You
     </h5>
     <h4>
         Get matched with a Medicare professional who can help you find the right coverage.
     </h4>
     <div class="lp-get-info">
         <div class="lp-block-quotes">
             <div class="lp-corner"></div>
             <div class="lp-qotes-block lp-bottom-quotes-block">
                 <h3>Get Your Free Quotes</h3>
                 <form action="./step1.php" method="post" id="secondzip" data-toggle="validator" role="form">
                     <input type="tel" name="zipcode" maxlength="5" class="form-control" placeholder="Enter Zip Code">
                     <input type="submit" class="btn" />
                     <input id="leadid_token2" name="universal_leadid" type="hidden" value=""/>
                     <input type="hidden" name="st-t" id="st-t" value="<?php
if (isset($_GET['st-t'])) {
    echo $_GET['st-t'];
} else {
    echo '';
}
?>" />
                                            <input type="hidden" id="st-custom-id" name="_st_custom_id" value="<?php
if (isset($_GET['_st_custom_id'])) {
    echo $_GET['_st_custom_id'];
} else {
    echo '';
}
?>" />
                                            <input type="hidden" id="st-custom-value" name="_st_custom_value" value="<?php
if (isset($_GET['_st_custom_value'])) {
    echo $_GET['_st_custom_value'];
} else {
    if (isset($_GET['subid'])) {
        echo $_GET['subid'];
    } else {
        echo '';
    }
}
?>" />
                                            <input type="hidden" name="click_id" id="click_id" value="<?php
if (isset($_GET['click_id'])) {
    echo $_GET['click_id'];
} else {
    echo '';
}
?>" />
<input type="hidden" name="sub_id" id="sub_id" value="<?php
if (isset($_GET['sub_id'])) {
    echo $_GET['sub_id'];
} else {
    echo '';
}
?>" />
<input type="hidden" name="fbid" id="type" value="<?php echo $fbid; ?>" />
<input type="hidden" name="utm_id" id="type" value="<?php
if (isset($_GET['utm_id'])) {
    echo $_GET['utm_id']; 
} else {
    echo '';
}
?>" />

                </form>
             </div>
         </div>
         <div class="lp-block-phone">
<!--
            <div class="lp-one">Or speak with an agent:</div>
             <div class="lp-two"><a href="tel:(888) 633-9277">(888) 633-9277</a></div>
             <div class="lp-three">TTY Users: <a href="tel:(888) 633-9277">(888) 633-9277</a></div>
             <div class="lp-four">Monday - Friday  8am - 6pm EST</div>
-->
         </div>
     </div>
     <div class="lp-providers">
         <img src="pictures/landing/providers_light.png">
     </div>
 </div>

 <!------------------------------------Floating block------------------------------------------------------------------>
 <!-- remove f for floating effect-->
 <div class="lp-floating-blockf">
     <div class="lp-left-block">
<!--          <h2>Get your free quotes</h2> -->
     </div>
     <div class="lp-arrow-block"></div>
     <div class="lp-right-block">
         <div class="handset"></div>
<!--
         <div>
             <a href="tel:(888) 633-9277">(888) 633-9277</a>
         </div>
-->
     </div>
 </div>

 <!------------------------------------Footer-------------------------------------------------------------------------->

 <footer>
     <div class="foot-top">
         <div class="foot-logo">

         </div>
         <div class="foot-links">
             <div class="links-list">
<!--
                 <div>
                     <a href="index.html">Home</a><br>
                     <a target="_blank" href="blog/index.html">Blog</a><br>
                     <a target="_blank" href="blog/contact-us/index.html">Contact Us</a><br>
                 </div>
                 <div>
                     <a target="_blank" href="blog/terms-of-service/index.html" >Terms Of Service</a><br>
                     <a target="_blank" href="blog/privacy-policy/index.html">Privacy Policy</a><br>
                     <a target="_blank"  href="blog/company-list/index.html">Partners</a><br>
                 </div>
-->
             </div>
             <div class="follows">
<!--
                 Follow us:<br>
                 <div class="follow-links">
                     <div><a target="_blank" href="https://www.facebook.com/Savings-Scanner/"><img src="pictures/landing/pic_6.png"></a></div>
                     <div><a target="_blank" href="blog/feed/index.rss"><img src="pictures/landing/pic_7.png"></a></div>
                     <div><a target="_blank" href="https://www.pinterest.com/Savings-Scanner/"><img src="pictures/landing/pic_5.png"></a></div>
                     <div><a target="_blank" href="https://twitter.com/Savings-Scanner/"><img src="pictures/landing/pic_4.png"></a></div>
                     <!--<div><a target="_blank" href=""><img src="/pictures/landing/pic_3.png"></a></div> 
                     <div><a target="_blank" href="https://www.youtube.com/channel/UCTdh-yiWMimg616puFP8WtQ"><img src="pictures/landing/pic_2.png"></a></div>
                     <div><a target="_blank" href="https://www.instagram.com/Savings-Scanner/"><img src="pictures/landing/pic_1.png"></a></div>
                 </div>
-->
             </div>
         </div>
     </div>
      <p style="text-align:center;color:#424242">                      
                   <strong>Copyright 2018 | All Rights Reserved | <a href="https://savings-scanner.com/privacy.pdf" target="_blank">Privacy Policy</a> &amp; <a href="https://savings-scanner.com/terms.html" target="_blank">Terms</a></strong></p>
                    <p style="text-align:center;">
                    <strong><a   href="http://affiliates.purpleleads.com/signup">Affiliates </a> - <a href="https://purpleleads.com/leads">Buy leads</a></strong>
                </p>
     <div class="foot-bottom">
        <hr>
         <div>
             © 2017 Savings-scanner. All rights reserved.<br>
             * This is not a complete list of carriers available in your service area. For a complete listing, please contact savings-scanner.com or consult www.medicare.gov. By completing the contact form above or calling the number listed above, you will be directed to a licensed sales agent who can answer your questions and
             provide information about Medicare Advantage, Part D or Medicare supplement insurance plans. Neither Savings-Scanner nor its agents are connected with or endorsed by the U.S. government or the federal
             Medicare program.
         </div>
     </div>
 </footer>
 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/states.js"></script>

                  <!--Leadid script leadid dot com-->
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
        setInterval(function(){
            if(!$('#leadid_token').val()) {
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
    <noscript><img src='//create.leadid.com/noscript.gif?lac=f8085cd5-d5be-4d6d-353f-3c8dcc6fc738&lck=82c3febc-c3fa-af0a-9f6f-1c5c65ef71a3&snippet_version=2' /></noscript>
    <!--end Leadid script leadid dot com-->

<script>
    //$('form').validator();
</script>
</body>
</html>
