@extends('fronts.sst.remodeling.thankyou-layout')
@section('title','Merci pour votre demande de devis')
@section ('content')
    <div class="quiz_form thankyou-inner">
        <h2>Merci pour votre demande de devis</h2>
        <h3><img src='/images/bath/2/compleet.png'> L'étape 1 est terminée</h3>
        <h3>Félicitations, vous allez recevoir votre devis gratuit rapidement.</h3>
        </br>

        <h3>Quelles sont les prochaines étapes ?<br></h3>
        <h4>Dans les prochains jours vous allez être contacté par l'un de nos conseillers <br>spécialisés dans les panneaux solaires.<br></h4>
        <br>
        <h4>Notre conseiller prendra contact avec vous directement et <br>en fonction des informations que vous avez indiqué, vous demandera certaines informations <br>supplémentaires concernant votre situation et vos besoins exacts.</h4><br>

        <h4>Grâce à cet échange, une offre personnalisée et répondant <br>exactement à vos besoins vous sera faite par les sociétés sélectionnées pour vous.<br>
        </h4><br>

        @if(!empty($urlupsell))
            <!--<h2 style="color:#fff; background-color: #3b5998; padding: 5px;">Important Notice</h2>
            <h3>During your free evaluation you may need a Fresh Copy of your Credit Report.</h3>
            <h3>To download your credit please
                <a href="{{$urlupsell}}" style="background-color: #e9ebee; text-decoration: none; color:#424242;  padding: 5px;">click here now.</a>
            </h3>

            <a href="{{$urlupsell}}"><img src="/images/bath/2/cr.png" style="margin: 0 auto;" class="img-responsive"></a>-->
        @endif
    </div>
@endsection