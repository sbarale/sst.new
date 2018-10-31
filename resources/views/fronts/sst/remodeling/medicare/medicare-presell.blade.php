@extends('layouts.empty')
@section('title','Complete Car Warranty')
@section('header-middle-img','/images/ins.png')
@section('head')
    @parent

    <title>Medicare Supplemental Plans</title>

    <link rel="stylesheet" type="text/css" href="/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/css/medicare/landing_page.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900%7CRoboto+Slab:400,700" rel="stylesheet">
    <style type="text/css">form label {
            font-size: 12px;
            color: red;
        }
    </style>
@endsection


@section('content')
    <div class="lp-first-block">
        <div class="lp-first-block-content">
            <h2>
                Compare 2017 Medicare<br>
                Supplemental Plans
            </h2>
            <div class="lp-corner"></div>
            <div class="lp-qotes-block lp-top-quotes-block">
                <h3>Get Your Free Quotes</h3>
                <form action="/remodeling/medicare/1" method="get" data-toggle="validator" role="form">
                    {{ csrf_field() }}
                    <input type="tel" name="zipcode" pattern="^\d{5}$" maxlength="5" class="form-control" placeholder="Enter Zip Code" required>
                    @include('fronts.sst._common.hidden_fields')
                    <input type="submit" class="btn" />
                </form>
            </div>
            <div class="lp-providers-text">
                Compare quotes from top providers:
            </div>
            <div class="lp-providers">
                <img src="/images/medicare/landing/providers.png">
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
             In 3 easy steps, Smart Savings Today will help you
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
                <img src="/images/medicare/landing/comment_photo_1.jpg">
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
                    "Smart Savings Today simplified everything"
                </div>
                <div class="lp-comment-text">
                    "I had a hard time finding which company really was the best for medicare
                    supplemental.  Smart Savings Today simplified everything and made it really easy
                    to know exactly which insurance company was the best for us."
                </div>
                <div class="lp-comment-author">
                    - Will & Jackie R. (Cleveland, OH)
                </div>
            </div>
            <div class="lp-photo">
                <img src="/images/medicare/landing/comment_photo_2.jpg">
            </div>
        </article>
        <article>
            <div class="lp-photo">
                <img src="/images/medicare/landing/comment_photo_3.jpg">
            </div>
            <div class="lp-comment">
                <div class="lp-comment-header">
                    "...Everything made sense..."
                </div>
                <div class="lp-comment-text">
                    "The agents at Smart Savings Today did a terrific job of making a confusing topic
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
                    <form action="/remodeling/medicare/1" method="get" id="secondzip" data-toggle="validator" role="form">
                        {{ csrf_field() }}
                        <input type="tel" name="zipcode" maxlength="5" class="form-control" placeholder="Enter Zip Code">
                        <input type="submit" class="btn" />
                        @include('fronts.sst._common.hidden_fields')


                    </form>
                </div>
            </div>
            <div class="lp-block-phone">

            </div>
        </div>
        <div class="lp-providers">
            <img src="/images/medicare/landing/providers_light.png">
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
        </div>
    </div>

@endsection

@section('footer-scripts')
    @parent

            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            <script src="/js/states.js"></script>
@endsection




