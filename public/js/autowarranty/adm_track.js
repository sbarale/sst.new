function TrackSetLinkPlacementIDs ( track, parameter )
    {
    $.each(track, function( control, value ) {
        
        var href = $('#' + value.control).attr('href');
        if ( href != null && href != '' )
            {
            var new_value = TrackReplaceByName ( parameter, href, value.id );
            var href = $('#' + value.control).attr('href',new_value);
            }
        });
    }

function TrackSetLinkPlacementValue ( track, parameter, updated_value )
    {
    $.each(track, function( control, value ) {
        
        var href = $('#' + value.control).attr('href');
        if ( href != null && href != '' )
            {
            var new_value = TrackReplaceByName ( parameter, href, updated_value );
            var href = $('#' + value.control).attr('href',new_value);
            }
        });
    }
    
function TrackReplaceByName ( name, url, value ) 
    {
    var new_parameter = name + '=' + encodeURIComponent ( value )
        
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)");
    var results = regex.exec(url);
    
    // Query string parameter not there
    if (!results)
        {
        if ( url.indexOf('?') != -1 || url.indexOf('&') != -1 )
            url = url + '&' + new_parameter;
        else
            {
            if ( url.charAt(url.length - 1) != '/' )
                url = url + '/';
            url = url + '?' + new_parameter;
            }
        }
    else
        {
        var existing_parameter = name + '=' + results[2];
        url = url.replace ( existing_parameter, new_parameter );
        }
        
    return ( url );
    }
