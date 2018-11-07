@if (isset($fbid) && !($fbid===false))
    <script>
        window.dataLayer.push({'fbid': '{{$fbid}}'});
    </script>
@else
    <script>
        console.log('fbid not set');
    </script>
@endif
