@if (isset($fbid) && !($fbid===false))
    <script>
        dataLayer.push({'fbid': '{{$fbid}}'});
        console.log('fbid set');
    </script>
@else
    <script>
        console.log('fbid not set');
    </script>
@endif
