var geo_interface = global_common_domain + '/lead.php'

$(document).ready(function(){
});

function InfoForZip ( zip, request_async, control )
    {
    if ( typeof request_async === undefined )
        request_async = false;
        
    if ( typeof control === undefined )
        control = '';

    var zip_info    = '';
        
    var request = new Object();
    request.request = 'lead_zip_to_geo';
    request.zip = zip;

    var json = JSON.stringify( request );
    json = encodeURIComponent ( json );
        
    var http_request = geo_interface + "?request=" + json;
        
    // Submit
    $.ajax({
        url: http_request,
        dataType: 'json',
        async: request_async,
        control: control,
        zip_info: zip_info,
        success: function(json) 
            {  
            var valid = json.response_code;
            if ( valid === 1 )
                {
                field_valid = true;

                zip_info = json.response_data;
                
                if ( control === undefined || control == '' )
                    ;
                else
                    $('#' + control).val(zip_info);
                }
            },
        error: function error(jqXHR, textStatus, errorThrown)
            {
            var error = jqXHR.responseText;
            }
                            
        })
        
    return ( zip_info );
    }
    
function IPToGeo ( ip, request_async, control, control_type, control_format, default_value, completion_callback )
    {
    if ( typeof request_async === undefined )
        request_async = false;

    var geo = new Object();
    geo.country_code    = '';
    geo.region_code     = '';
    geo.city_name       = '';
    geo.latitude        = '';
    geo.longitude       = '';

    var request = new Object();
    request.request = 'lead_ip_to_geo';
    request.ip = ip;
    if ( request.ip == '127.0.0.1' )
        request.ip = '162.209.76.133';

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

                geo.country_code= parsed.country_code;
                geo.country_name= parsed.country_name;
                geo.region_name = parsed.region_name;
                geo.region_code = parsed.region_code;
                geo.city_name   = parsed.city_name;
                geo.latitude    = parsed.latitude;
                geo.longitude   = parsed.longitude;

                if ( control === undefined || control == '' )
                    ;
                else
                    {
                    if ( control_type === undefined || control_type == '' )    
                        control_type = 'html';
                        
                    if ( control_format === undefined || control_format == '' )
                        control_format = '%%city_name%%, %%region_code%%';
                        
                    if ( default_value === undefined || default_value == '' )
                        default_value = '';

                    if ( control_format == 'json' )
                        control_format = json.response_data;
                    else
                        {
                        control_format = control_format.replace ( '%%country_code%%', geo.country_code );
                        control_format = control_format.replace ( '%%region_code%%', geo.region_code );
                        control_format = control_format.replace ( '%%city_name%%', geo.city_name );
                        control_format = control_format.replace ( '%%latitude%%', geo.latitude );
                        control_format = control_format.replace ( '%%longitude%%', geo.longitude );
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
                        
                    if ( completion_callback != undefined )
                        eval ( completion_callback );
                    }
                }
            },
        error: function error(jqXHR, textStatus, errorThrown)
            {
            var error = jqXHR.responseText;
            }
                            
        })
        
    return ( geo );
    }
