<!DOCTYPE html>
<html lang="en">
<head>
    @section('head')
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>@yield('title','Thank You!')</title>
        <link href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css' rel='stylesheet' type='text/css'/>
        <link href='//fonts.googleapis.com/css?family=Merriweather:regular,700' rel='stylesheet' type='text/css'/>
        <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
        <script type='text/javascript' src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
        <link href='https://developers.google.com/maps/documentation/javascript/examples/default.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/css/bath/2/main.css" rel="stylesheet" type='text/css'/>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'/>
    @show

    @section('scripts')

    @show
</head>
<body class="graybg">
@include('fronts.sst._common.debugbar')

<header class="navbar navbar-static-top" id="top" role="banner">
    <div class="container">
        <nav id="primary-nav" class="row">
            <div class="col-sm-7 col-xs-12">
                <h1 id="brand"><img src="/images/sst-landscape.png" class="img-responsive"/></h1>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="wrapper hidden-xs" style="color:gray; padding-top: 10px">
                    <div class="counter col-xs-3">
                        <h3 class="timer count-title" style="margin-top:-10px" id="count-number" data-to="98870"
                            data-speed="1500"></h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-xs-12">
                <div class="header_number">
                    <div style="font-size:13px;font-weight:normal;" class="hidden-xs">
                        <img src="/images/bath/2/secure2.png"/>
                    </div>
                    <div style="font-size:13px;font-weight:normal;" class="visible-xs"></div>
                </div>
            </div>
        </nav>
    </div>
</header>

<div class="container ">
    <h2>These are the values that will be posted to the server</h2>
    <div class="secondarybg  whitebg">
        <h4>Tracking Data</h4>
        <form name="tracking_data" id="tracking" class="form-horizontal quiz_form">
            @foreach($data as $name => $input)
                <div class="form-group row">
                    <label for="{{$name}}" class="col-sm-2 col-form-label text-right">{{$name}}</label>
                    <div class="col-md-10">
                        <input class="form-control text-left" name="{{$name}}" value="{{$input}}">
                    </div>
                </div>
            @endforeach
        </form>
        <hr>
        <h4>Posting Data</h4>
        <h6>(Data currently being sent to the server)</h6>
        <form name="form_data"  id="posting" class="form-horizontal quiz_form">
            @foreach($post as $name => $input)
                <div class="form-group row">
                    <label for="{{$name}}" class="col-sm-2 col-form-label text-right">{{$name}}</label>
                    <div class="col-md-10">
                        <input class="form-control text-left" name="{{$name}}" value="{{$input}}">
                    </div>
                </div>
            @endforeach
        </form>
        <hr>
        <h4>Available Data</h4>
        <h6>(Data you could choose to send to the server)</h6>

        <form name="form_data" id="available" class="form-horizontal quiz_form">
            @foreach(request()->all() as $name => $input)
                <div class="form-group row">
                    <label for="{{$name}}" class="col-sm-2 col-form-label text-right">{{$name}}</label>
                    <div class="col-md-10">
                        <input class="form-control text-left" name="{{$name}}" value="{{$input}}">
                    </div>
                </div>
            @endforeach
        </form>

    </div>
</div>


<div style="opacity: 1.0; margin-top: 10px; margin-bottom: 30px; width: 100px;" class="center-block">
    <img src="/images/bath/2/SecureSeal.png"/>
</div>
<div class="summary_terms">
    @include('fronts.sst.footer')
</div>

</body>
</html>

