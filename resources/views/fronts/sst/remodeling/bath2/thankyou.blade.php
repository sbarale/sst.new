@extends('fronts.sst.remodeling.bath-thankyou-layout')
@section('title','Thank You!')
@section ('content')
<div class="quiz_form thankyou-inner">
    <h2>Thank You {{$fname}} {{$lname}}</h2>
    <h3><img src='/images/bath/2/compleet.png'>  Step 1 Complete</h3>
    <h3 class="thankyou-desc">Hi {{$fname}}, My name is Ace with Bath Wraps, I am your virtual assistant here to help you get connected with a local bath wraps dealer for your FREE in home estimate, ill call you from 310-409-1196 in a moment to connect you with a scheduling agent, please answer</h3>
</div>
@endsection