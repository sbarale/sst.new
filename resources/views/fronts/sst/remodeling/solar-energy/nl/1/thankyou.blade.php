@extends('fronts.sst.remodeling.thankyou-layout')
@section('title','Hartelijk bedankt erge uhgiughiuh voor uw offerte aanvraag.')
@section ('content')
    <div class="quiz_form thankyou-inner">
        <h2>Hartelijk bedankt erge uhgiughiuh voor uw offerte aanvraag.</h2>
        <h3><img src='/images/bath/2/compleet.png'> Stap 1 is voltooid</h3>
        <h3>Gefeliciteerd U zult uw vrijblijvende offerte snel ontvangen.</h3></br>
        <h3>Hoe nu verder?<br></h3>
        <h4>In de aankomende dagen zal u worden gebeld door één van onze adviseurs <br>gespecialiseerd in zonnepanelen.<br></h4>
        <h4>De adviseur zal u persoonlijk te woord staan en aan der hand van uw ingevulde gegevens, <br>aanvullende informatie vragen over uw situatie en wensen.</h4><br>
        <h4>Op basis van dit gesprek zal er door de voor u geselecteerde bedrijven vrijblijvende offertes worden opgesteld.<br></h4>

        @if(!empty($urlupsell))
            <!--<h2 style="color:#fff; background-color: #3b5998; padding: 5px;">Important Notice</h2>
            <h3>During your free evaluation you may need a Fresh Copy of your Credit Report.</h3>
            <h3>To download your credit please
                <a href="{{$urlupsell}}" style="background-color: #e9ebee; text-decoration: none; color:#424242;  padding: 5px;">click here now.</a>
            </h3>

            <a href="{{$urlupsell}}"><img src="/images/bath/2/cr.png" style="margin: 0 auto;" class="img-responsive"></a>
            -->
        @endif
    </div>
@endsection