var qs_id_map;
var post_data;

$(document).ready(function(){
    qs_id_map = new Array();
});

function SetPrepopMap ( replacement_map )
    {
    if ( Array.isArray ( replacement_map ) )
        qs_id_map = replacement_map;
    }

function PostTranslateData ( data )
    {
    var local_data = data;
    
    for ( var key in qs_id_map )
        {
        if ( qs_id_map[key].posttranslate != undefined && qs_id_map[key].posttranslate != '' )
            {
            var value = SelectWithDataByName ( key, data );
            if ( value != undefined )
                {
                var posttranslate = qs_id_map[key].posttranslate.replace (/%%value%%/g, value);
                var new_value = eval ( posttranslate );

                // Swap it
                var regexS = "[\\?&]"+key+"=([^&#]*)";
                var regex = new RegExp( regexS );
    
                var results = regex.exec( local_data );
                if ( results != undefined && results.length > 0 )
                    {
                    new_value = '&' + key + '=' + encodeURIComponent ( new_value );
                    local_data = local_data.replace ( results[0], new_value );
                    }
                }
            }
        }
        
    return ( local_data );
    }
    
function PrepopulateFieldsFromDatabase ( lead_instance_id, working_control )    
    {

    if ( lead_instance_id > 0 )
        {
            
        // Puts JSON response into the control value
        LeadInstanceSelect ( false, lead_instance_id, working_control );
            
        // Now convert JSON to post data
        var json = jQuery.parseJSON ( $('#' + working_control).val() );
        
        var json_data = json.post_data.split('&');
        var json_post = Array();
        $.each(json_data, function( index, data ) {
            var pair = data.split('=');
            json_post[pair[0]] = pair[1];
        });

        json_data = json.post_data.split('&');
        var json_get = Array();
        $.each(json_data, function( index, data ) {
            var pair = data.split('=');
            json_get[pair[0]] = pair[1];
        });
        
        var qs;
        var post_data = '';
        var value;
        for ( var key in qs_id_map )
            {
            qs = qs_id_map[key].qs;

            // Standalone property?
            if ( json.hasOwnProperty ( qs ) )
                post_data = post_data + '&' + key + '=' + encodeURIComponent ( json[qs] );
            else
                {
                // Check post and get
                value = undefined;
                
                if ( json_post.hasOwnProperty ( key ) )
                    value = json_post[key];
                if ( json_get.hasOwnProperty ( key ) )
                    value = json_get[key];
                    
                if ( value != undefined )
                    post_data = post_data + '&' + key + '=' + value;
                }
            }

        // Now post and prepop
        SetPostData ( post_data );
        PrepopulateFields();
        
        // Clear the control to save space in later form posts
        $('#' + working_control).val('');
        }
    }
    
function PrepopulateFields()
    {
    $("[id]").attr('id',function(index,id)
        {
        if ( qs_id_map[id] === undefined )
            ;
        else
            {
            if ( qs_id_map[id].active == 'true' )
                {
                var value = SelectByIndex ( id );
                
                if ( qs_id_map[id].translate != undefined && qs_id_map[id].translate != '' )
                    {
                    var translate = qs_id_map[id].translate.replace (/%%value%%/g, value);
                    value = eval ( translate );
                    }

                if ( value != undefined && value != '' )
                    {
                    if ( $('#' + id).is(':checkbox' ) && value == "1" )
                        $('#' + id).attr('checked', true);
                    else
                        $('#' + id).val(value);
                    }
                }
            }
        });
    }

// Use the prepop map to select
function SelectByIndex ( id )
    {

    // Look for form data first, then query string data
    var value = SelectByName ( id );
    if ( value === undefined || value == '' )
        {
        if ( Array.isArray ( qs_id_map ) && ( id in qs_id_map ) )
            value = SelectByName ( qs_id_map[id].qs );
        }
        
    return ( value );        
    }
    
//
// get / post manipulation
//

function SelectByName ( name )
    {
    var value;

    // Post first so data from the form will override anything that was passed and is being carried along
    value = SelectPostByName ( name );
    if ( value === undefined || value == '' )
        value = SelectGetByName ( name );
        
    return ( value );
    }

function SetPostData ( data )
    {
    if ( data === undefined )
        data = '';
    post_data = data;
    }
    
function GetPostData()
    {
    return ( post_data );
    }
    
function SelectPostByName ( name )
    {
    return ( SelectWithDataByName ( name, post_data ) );
    }

function SelectGetByName ( name )
    {
    return ( SelectWithDataByName ( name, window.location.href ) );
    }

function SelectWithDataByName ( name, qs )
    {
    var ret = '';
    
    var parsed = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
    var regexS = "[\\?&]"+parsed+"=([^&#]*)";
    var regex = new RegExp( regexS );
    
    var results = regex.exec( qs );
    if( results != null )
        ret = decodeURIComponent ( results[1].replace(/\+/g, " " ) );
        
    return ( ret );
    }    
