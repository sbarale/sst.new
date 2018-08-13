@extends('fronts.sst.layout')
@section('logo','images/sst-landscape.png')
@section('content')
    <div class="row secondarybg whitebg">
        <h1 class="header">Ready to save some money in <span id="statecurrent"></span> ?</h1>
        <div class="col-xs-12">
            {{--<!--<p>To qualify for the Eligiblity Review You Must Meet 4 requirements <br>Please answer the questions below truthfully </p>-->--}}
        </div>

        <div class="row" style="padding:10px;">
            <div class="col-md-12">
                <h2>How does it work?</h2>
            </div>
            <br>
            <div class="col-xs-12 col-sm-offset-2 col-xs-offset-0 col-lg-offset-3 text-center ">
                <div class="text-left items">
                    1. Select the program you are interested in.<br>
                    2. You fill out our easy 3 minute form.<br>
                    3. We match you to top providers.<br>
                    4. They contact you directly with offers.<br>
                </div>
            </div>
            <a href="#offers">
                <button type="button" style="margin-top:40px;margin-bottom: 20px;" class="btn btn-success  btn-lg ">Get Started >></button>
            </a>
        </div>


    </div> <!--wraper-->
    </br>
    <div class="" id="offers">
        <div class="row">
            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/refinance',
                'title' => 'Refinance Mortgage (US only)',
                'desc'  => 'It may be easier than you think to refinance your current mortgage.',
                'img' => 'images/mortgage-refinance.png'
            ])

            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/freerateupdate/',
                'title' => 'Home Purchase (US only)',
                'desc'  => 'Comparing loan offers from different lenders can save you time and money.',
                'img' => 'images/mortgage-purchase.png'
            ] )
        </div>
        <div class="row">

            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => 'solar-overview.php',
                'title' => 'Solar Energy',
                'desc'  => 'Find a solar specialist from our network and start saving money on your energy bills.',
                'img' => 'images/solar-1.png'
            ] )

            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/ccl/1/index.php',
                'title' => 'Car loan (US only)',
                'desc'  => 'Comparing loan offers from different lenders can save you time and money.',
                'img' => 'images/car-loan.png'
            ] )
        </div>
        <div class="row">
            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/auw/',
                'title' => 'Auto Warranty (US only)',
                'desc'  => 'Comparing Auto Warranty offers.',
                'img' => 'images/car-loan.png'
            ] )

            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/debt-overview.php',
                'title' => 'Debt Settlement ( US and UK only )',
                'desc'  => 'Be it refinance or new car purchase, it pays to shop around.',
                'img' => 'images/debt.png'
            ] )
        </div>
        <div class="row">
            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/ins/funeral/uk/2/',
                'title' => 'Insurance (UK only)',
                'desc'  => 'Find an insurance specialist from our network.',
                'img' => 'images/ins.png'
            ] )

            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/tax/2/index.php',
                'title' => 'TAX Settlement (US only)',
                'desc'  => 'Check your eligibility for the IRS fresh start program.',
                'img' => 'images/debt.png'
            ] )
        </div>
        <div class="row">
            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/tax/2/index.php',
                'title' => 'TAX Settlement (US only)',
                'desc'  => 'Check your eligibility for the IRS fresh start program.',
                'img' => 'images/debt.png'
            ] )

            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/mip_us/',
                'title' => 'Medicare Supplemental Plans (US only)',
                'desc'  => 'Find a Medicare specialist from our network.',
                'img' => 'images/ins.png'
            ] )
        </div>
        <div class="row">
            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/legacy/bath/',
                'title' => 'Bathroom Remodels (US only)',
                'desc'  => 'Find a Bathroom Remodels specialist from our network.',
                'img' => 'images/bat.png'
            ] )

            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/chw/1/',
                'title' => 'Home Warrenty (US only)',
                'desc'  => 'Find a Home Warrenty specialist from our network.',
                'img' => 'images/chw.png'
            ] )
        </div>
        <div class="row">
            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/roof/',
                'title' => 'Roof replacement',
                'desc'  => 'Find a roof specialist from our network.',
                'img' => 'images/roof.png'
            ] )

            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/window/',
                'title' => 'Window replacement',
                'desc'  => 'Find a window specialist from our network.',
                'img' => 'images/window.png'
            ] )
        </div>
    </div>
    <br><br>
    <div class="row">

        <h1 style="text-align: center;"> Latest News How To Save Money</h1>
    </div>
    <div class="row">
        <a href="https://smartsavings.today/blog/RFN_1_US-en_new-government-mortgage-programs.php">
            <div class="col-md-4 col-xs-12">
                <div style="margin:  5px;">
                    <div class="row" style="border:none; background:white; height:420px;">
                        <div class="col-xs-12">
                            <img src="images/65.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="col-xs-12">
                            <h3>New Government Mortgage Programs could radically change your life forever</h3>
                            <p style=" color:#4b4b4b;">Homeowners throughout the United States can’t stop talking about...</p>
                            learn more>>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="https://blog.smartsavings.today/SLR_26_US-Solar-Panels-Top-Reasons-Why.php">
            <div class="col-md-4 col-xs-12">
                <div style="margin: 5px;">
                    <div class="row" style="border:none; background:white; height:420px;">
                        <div class="col-xs-12">
                            <img src="images/solarhouseright.png" class="img-responsive" alt="">
                        </div>
                        <div class="col-xs-12">
                            <h3>Solar Panels: Top Reasons Why Homeowners Should Switch to Solar</h3>
                            <p style="color:#4b4b4b;">Thinking of switching to solar power, but still on the fence about it...</p>
                            learn more>>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="https://blog.smartsavings.today/RFN_5_US-en_refi-program-extended-a-whole-year.php">
            <div class="col-md-4 col-xs-12">
                <div style="margin: 5px;">
                    <div class="row" style="border:none; background:white; height:420px;">
                        <div class="col-xs-12">
                            <img src="images/harp.png" class="img-responsive" alt="">
                        </div>
                        <div class="col-xs-12">
                            <h3>Recently Extended Home Refinance Plan Banks Don't Want You Knowing</h3>
                            <p style="color:#4b4b4b;">HARP Gives Homeowners One Last Chance for A Mortgage Bailout...</p>
                            learn more>>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
@endsection

@section('scripts')
    @parent

@endsection