@if (isset($fbid) && !($fbid===false))
    <script>
        window.dataLayer = window.dataLayer || [];
        dataLayer.push({'fbid': '{{$fbid}}'});
        console.log('fbid set');
    </script>
@else
    <script>
        console.log('fbid not set');
    </script>
@endif
