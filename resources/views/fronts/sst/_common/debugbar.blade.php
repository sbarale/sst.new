@if(isset($debug) || isset($test) || isset($dev))

    @if($debug || $test || $dev)
        <div class="bg-danger" style="margin-bottom: 20px;background-color: #ff2837;color: white;text-align: center;">
            @if($debug)
                <h3>DEBUG MODE ON</h3>
            @endif
            @if($test)
                <h3>TEST MODE ON</h3>
            @endif
            @if($dev)
                <h3>DEV MODE ON</h3>
            @endif
        </div>
    @endif
@endif