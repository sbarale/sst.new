@extends('fronts.sst.remodeling.thankyou-layout')
@section('title','Thank You!')
@section ('content')
    <style>
        .step3-background {
            max-width: 1200px;
            background: url('/images/medicare/steps/step1-backgraund.jpg') 0 25% no-repeat;
            background-size: 100%;
            min-width: 300px;
            color: #2b4477;
            font-family: Lato,sans-serif;
            font-weight: 700;
            font-size: 35px;
            padding: 10% 0 30% 5%;
        }
        .secondarybg{
            padding: 0;
        }
        .thankyou-inner{
            padding: 0;
        }
    </style>
    <div class="quiz_form thankyou-inner">
        <div class="step3-background">
            <div class="step3">
                <p style="width: 60%; text-align:left;"> Thank you for signing up.
                    Unfortunately, rates for ,  cannot be displayed at this time.
                    We will be in touch to do a live rate comparison with you shortly. Or you can get in touch with us now by calling:<br />

            </div>

        </div>
        @if(!empty($urlupsell))
            <h2 style="color:#fff; background-color: #3b5998; padding: 5px;">Important Notice</h2>
            <h3>During your free evaluation you may need a Fresh Copy of your Credit Report.</h3>
            <h3>To download your credit please
                <a href="{{$urlupsell}}" style="background-color: #e9ebee; text-decoration: none; color:#424242;  padding: 5px;">click here now.</a>
            </h3>

            <a href="{{$urlupsell}}"><img src="/images/bath/2/cr.png" style="margin: 0 auto;" class="img-responsive"></a>
        @endif
    </div>
@endsection