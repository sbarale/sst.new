var geo_interface = global_common_domain + '/lead.php'

$(document).ready(function(){
    var re = /.dev$/;
    var match = re.test( window.location.hostname );
    if ( match )    
        geo_interface = 'http://common.dev/lead.php'
});

function GetWeatherLatLong ( latitude, longitude, request_async, control, control_type, control_format, default_value )
    {
    if ( typeof request_async === undefined )
        request_async = false;

    var weather = new Object();
    weather.temp        = '';
    weather.pressure    = '';
    weather.humidity    = '';
    weather.temp_min    = '';
    weather.temp_max    = '';

    var request = new Object();
    request.request = 'lead_get_weather';
    request.latitude = latitude;
    request.longitude = longitude;

    var json = JSON.stringify( request );
    json = encodeURIComponent ( json );

    var http_request = geo_interface + "?request=" + json;
    
    // Submit
    $.ajax({
        url: http_request,
        dataType: 'json',
        async: request_async,
        control: control,
        control_type: control_type,
        control_format: control_format,
        default_value: default_value,
        success: function(json) 
            {  
            var valid = json.response_code;
            if ( valid === 1 )
                {
                field_valid = true;

                var parsed = jQuery.parseJSON ( json.response_data );

                parsed.main.temp        = KtoF ( parsed.main.temp );
                parsed.main.temp_min    = KtoF ( parsed.main.temp_min );
                parsed.main.temp_max    = KtoF ( parsed.main.temp_max );
                
                weather.temp        = parsed.main.temp;
                weather.pressure    = parsed.main.pressure;
                weather.humidity    = parsed.main.humidity;
                weather.temp_min    = parsed.main.temp_min;
                weather.temp_max    = parsed.main.temp_max;

                if ( control === undefined || control == '' )
                    ;
                else
                    {
                    if ( control_type === undefined || control_type == '' )    
                        control_type = 'html';
                        
                    if ( control_format === undefined || control_format == '' )
                        control_format = '';
                        
                    if ( default_value === undefined || default_value == '' )
                        default_value = '';

                    if ( control_format == 'json' )
                        control_format = JSON.stringify(parsed);
                    else
                        {
                        control_format = control_format.replace ( '%%temp%%', weather.temp );
                        control_format = control_format.replace ( '%%pressure%%', weather.pressure );
                        control_format = control_format.replace ( '%%humidity%%', weather.humidity );
                        control_format = control_format.replace ( '%%temp_min%%', weather.temp_min );
                        control_format = control_format.replace ( '%%temp_max%%', weather.temp_max );
                        }
                        
                    if ( parsed.error == 'IP_NOT_FOUND' )
                        control_format = default_value;
                        
                    switch ( control_type )
                        {
                        case 'html':
                            $('#' + control).html(control_format);
                            break;
                            
                        case 'value':
                            $('#' + control).val(control_format);
                            break;
                        }
                    }
                }
            },
        error: function error(jqXHR, textStatus, errorThrown)
            {
            var error = jqXHR.responseText;
            }
                            
        })
        
    return ( weather );
    }

function KtoF ( k )
    {
    var f = Math.round ( ( parseFloat ( k ) - 273.15 ) * 1.80 + 32.00 );
    return ( f );
    }
    