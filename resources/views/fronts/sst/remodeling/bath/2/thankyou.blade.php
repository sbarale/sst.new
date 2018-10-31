@extends('layouts.thankyou')
@section('title','Thank You!')
@section ('content')
    <div class="quiz_form thankyou-inner">
        <h2>Thank You {{$fname}} {{$lname}}</h2>
        <h3><img src='/images/bath/2/compleet.png'>Step 1 Complete</h3>
        <h3>We received your quote request and have selected 1 seller to connect you with based on the info you shared.</h3></br>

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