var lead_interface = global_common_domain + '/lead.php'


// Record trace event
function LeadTrace ( event, async_call )
    {
    if ( async_call === undefined )
        async_call = true;
        
    
    var lead_instance_id    = SelectByIndex ( 'edit_lead_instance_id' );
    if ( lead_instance_id === undefined || lead_instance_id == '' )
        lead_instance_id = $('#edit_lead_instance_id').val();
        
    var request = new Object();
    request.request             = 'lead_instance_trace';
    request.lead_instance_id    = lead_instance_id;
    request.event    = event;
        
    var json = JSON.stringify( request );
    json = encodeURIComponent ( json );

    var http_request = lead_interface;
    var request_data = "&request=" + json;

    // Submit
    $.ajax({
        url: http_request,
        data: request_data,
        dataType: 'json',
        type: 'POST',
        async: async_call,
        success: function(json) 
            {  
            var valid = json.response_code;
            if ( valid === 1 )
                ;
            },
        error: function error(jqXHR, textStatus, errorThrown)
            {
            var error = jqXHR.responseText;
            }
                                    
        })
    }

function LeadForward ( async_call, response_control, comment )
    {
    if ( async_call === undefined )
        async_call = true;

    if ( comment === undefined )
        comment = '';
        
    $('#' + response_control).val ( '' );

    var request = new Object();

    var lead_instance_id    = SelectByIndex ( 'edit_lead_instance_id' );
    if ( lead_instance_id === undefined || lead_instance_id == '' )
        lead_instance_id = $('#edit_lead_instance_id').val();

    request.request             = 'lead_instance_forward';
    request.lead_instance_id    = lead_instance_id;
    request.comment             = comment;

    var json = JSON.stringify( request );
    json = encodeURIComponent ( json );

    var http_request = lead_interface;
    var request_data = "&request=" + json;

    // Submit
    $.ajax({
        url: http_request,
        data: request_data,
        dataType: 'json',
        type: 'POST',
        async: async_call,
        success: function(json) 
            {  
            var valid = json.response_code;
            if ( valid === 1 )
                ;

            if ( response_control != undefined )
                $('#' + response_control).val ( json.response_data );
            },
        error: function error(jqXHR, textStatus, errorThrown)
            {
            var error = jqXHR.responseText;
            }
                                    
        })
    }
    
// Submit lead into Admediary lead system for analysis and routing
function LeadSubmit ( async_call, response_control )
    {
    if ( async_call === undefined )
        async_call = true;
        
    $('#' + response_control).val ( '' );

    var request = new Object();

    var lead_instance_id    = SelectByIndex ( 'edit_lead_instance_id' );
    if ( lead_instance_id === undefined || lead_instance_id == '' )
        lead_instance_id = $('#edit_lead_instance_id').val();

    var product_id    = SelectByIndex ( 'edit_product_id' );
    if ( product_id === undefined || product_id == '' )
        product_id = $('#edit_product_id').val();
    
    var routing = SelectByIndex ( 'edit_routing' );
    if ( routing === undefined || routing == '' )
        routing = $('#edit_routing').val();

    var ping_cid = SelectByIndex ( 'ping_cid' );
    if ( ping_cid === undefined || ping_cid == '' )
        ping_cid = $('#ping_cid').val();

    var ping_key = SelectByIndex ( 'ping_key' );
    if ( ping_key === undefined || ping_key == '' )
        ping_key = $('#ping_key').val();

    request.request             = 'lead_instance_submit';
    request.lead_instance_id    = lead_instance_id;
    request.product_id          = product_id;
    request.post_data           = GetPostData();
    request.routing             = routing;
    request.ping_cid            = ping_cid;
    request.ping_key            = ping_key;
    request.source_site         = window.location.href.toLowerCase().replace ( 'http://', '' ).replace ( 'https://', '' ).split(/[?&]/)[0].split('/')[0];

    var json = JSON.stringify( request );
    json = encodeURIComponent ( json );

    var http_request = lead_interface;
    var request_data = "&request=" + json;

    // Submit
    $.ajax({
        url: http_request,
        data: request_data,
        dataType: 'json',
        type: 'POST',
        async: async_call,
        success: function(json) 
            {  
            var redirect_url = '';
            
            var valid = json.response_code;
            if ( valid === 1 )
                ;

            if ( response_control != undefined )
                $('#' + response_control).val ( json.response_data );
            },
        error: function error(jqXHR, textStatus, errorThrown)
            {
            var error = jqXHR.responseText;
            }
                                    
        })
    }

    
// Update lead data in database
function LeadSaveData ( async_call, override, additional_data )
    {
    if ( async_call === undefined )
        async_call = true;
        
    var lead_instance_id = SelectByIndex ( 'edit_lead_instance_id' );
    var product_id       = SelectByIndex ( 'edit_product_id' );
    
    var email            = SelectByIndex ( 'edit_email' );
    if ( email === '' || email === undefined )
        email            = SelectByIndex ( 'email' );
        
    var crid             = SelectByIndex ( 'edit_crid' );
    var afid             = SelectByIndex ( 'edit_afid' );
    var cid              = SelectByIndex ( 'edit_cid' );
    var redirect_instance_id = SelectByIndex ( 'edit_redirect_instance_id' );
    var click_instance_id    = SelectByIndex ( 'edit_click_instance_id' );
    var campaign_id      = SelectByIndex ( 'edit_campaign_id' );
    var sid1             = SelectByIndex ( 'edit_sid1' );
    var sid2             = SelectByIndex ( 'edit_sid2' );
    var sid3             = SelectByIndex ( 'edit_sid3' );
    var lid_control      = 'edit_lead_instance_id';
    var data_source      = window.location.href.split(/[?&]/)[0].split('/').pop();
    var post_data        = GetPostData();
    var get_data         = '';
    
    // Get source_url if not present
    var source_url       = SelectByIndex ( 'edit_source_url' );
    if ( source_url === undefined || source_url == '' )
        {
        source_url = [location.protocol, '//', location.host, location.pathname].join('');
        $('#edit_source_url').val(source_url);
        }

    if ( override != undefined && override !== null && typeof override === 'object' )
        {
            
        $.each(override, function( index, data ) {
            switch ( index )
                {
                case 'afid':
                    afid = data;
                    break;
                case 'crid':
                    crid = data;
                    break;
                case 'cid':
                    cid = data;
                    break;
                case 'campaign_id':
                    campaign_id = data;
                    break;
                }
            });
            
        }
        
    // May need to do post translations on some fields
    if ( PostTranslateData != undefined )
        post_data = PostTranslateData ( post_data );

    // Product id is hardcoded in the form
    if ( product_id === undefined || product_id == '' )
        product_id = $('#edit_product_id').val();
    
    var offset = 0;
    $.each(window.location.href.split(/[?&]/), function( index, data ) {
        if ( offset > 0 && data != undefined && data != '' )
            get_data = get_data + '&' + data;
        offset ++;
    });

    // Append source URL if needed
    if ( post_data === undefined || post_data == '' )
        ;
    else
        {
        var check = SelectPostByName ( 'edit_source_url' );
        if ( check === undefined || check == '' )
            post_data = post_data + '&edit_source_url=' + source_url;
        }

    if ( get_data === undefined || get_data == '' )
        ;
    else
        {
        var check = SelectGetByName ( 'edit_source_url' );
        if ( check === undefined || check == '' )
            get_data = get_data + '&edit_source_url=' + source_url;
        }
        
    var lead_is_unique = null;
    if ( $('#lead_is_unique').length != 0 )
        lead_is_unique = $('#lead_is_unique').val();
    
    LeadInstanceUpdate ( async_call, lead_instance_id, product_id, email, crid, afid, cid, redirect_instance_id, click_instance_id, campaign_id, data_source, post_data, get_data, sid1, sid2, sid3, lid_control, additional_data, lead_is_unique );
    }

function LeadInstanceUpdate ( async_call, lead_instance_id, product_id, email, crid, afid, cid, redirect_instance_id, click_instance_id, campaign_id, data_source, post_data, get_data, sid1, sid2, sid3, lid_control, additional_data, lead_is_unique )
    {
    var request = new Object();

    if ( additional_data === undefined )
        additional_data = '';

    if ( lead_is_unique === undefined )
        lead_is_unique = null;

    request.request             = 'lead_instance_update';
    request.lead_instance_id    = lead_instance_id;
    request.product_id          = product_id;
    request.email               = email;
    request.crid                = ( crid === undefined ) ? '' : crid;
    request.afid                = ( afid === undefined ) ? '' : afid;
    request.cid                 = ( cid === undefined ) ? '' : cid;
    request.redirect_instance_id = ( redirect_instance_id === undefined ) ? '' : redirect_instance_id;
    request.click_instance_id   = ( click_instance_id === undefined ) ? '' : click_instance_id;
    request.campaign_id         = ( campaign_id === undefined ) ? '' : campaign_id;
    request.data_source         = ( data_source === undefined ) ? '' : data_source;
    request.post_data           = ( post_data === undefined ) ? '' : post_data;
    request.get_data            = ( get_data === undefined ) ? '' : get_data;
    request.sid1                = ( sid1 === undefined ) ? '' : sid1;
    request.sid2                = ( sid2 === undefined ) ? '' : sid2;
    request.sid3                = ( sid3 === undefined ) ? '' : sid3;
    request.additional_data     = additional_data;
    request.lead_is_unique      = lead_is_unique;
        
    var json = JSON.stringify( request );
    json = encodeURIComponent ( json );

    var http_request = lead_interface;
    var request_data = "&request=" + json;

    // Submit
    $.ajax({
        url: http_request,
        data: request_data,
        dataType: 'json',
        type: 'POST',
        async: async_call,
        success: function(json) 
            {  
            lead_instance_id = 0;
            
            var valid = json.response_code;
            if ( valid === 1 )
                {
                var parsed = jQuery.parseJSON ( json.response_data );
                lead_instance_id = parsed.lead_instance_id;
                }

            $('#' + lid_control).val ( lead_instance_id );
            },
        error: function error(jqXHR, textStatus, errorThrown)
            {
            var error = jqXHR.responseText;
            }
                                    
        })
        
    }
    
function LeadInstanceSelect ( async_call, lead_instance_id, response_control )
    {
    $('#' + response_control).val ( '' );
        
    var request = new Object();

    request.request             = 'lead_instance_select';
    request.lead_instance_id    = lead_instance_id;
        
    var json = JSON.stringify( request );
    json = encodeURIComponent ( json );

    var http_request = lead_interface;
    var request_data = "&request=" + json;
    
    // Submit
    $.ajax({
        url: http_request,
        data: request_data,
        dataType: 'json',
        type: 'POST',
        async: async_call,
        success: function(json) 
            {  
            lead_instance_id = 0;
            
            var valid = json.response_code;
            if ( valid === 1 )
                {
                $('#' + response_control).val ( json.response_data );
                }

            },
        error: function error(jqXHR, textStatus, errorThrown)
            {
            var error = jqXHR.responseText;
            }
                                    
        })
        
    }
    
function LeadInstanceDataQueueSubmit ( async_call, lead_instance_id, data, response_control )
    {
    $('#' + response_control).val ( '' );
        
    var request = new Object();

    request.request             = 'lead_instance_data_queue_submit';
    request.lead_instance_id    = lead_instance_id;
    request.data                = data;
        
    var json = JSON.stringify( request );
    json = encodeURIComponent ( json );

    var http_request = lead_interface;
    var request_data = "&request=" + json;
    
    // Submit
    $.ajax({
        url: http_request,
        data: request_data,
        dataType: 'json',
        type: 'POST',
        async: async_call,
        success: function(json) 
            {  
            lead_instance_id = 0;
            
            var valid = json.response_code;
            if ( valid === 1 )
                {
                $('#' + response_control).val ( json.response_data );
                }

            },
        error: function error(jqXHR, textStatus, errorThrown)
            {
            var error = jqXHR.responseText;
            }
                                    
        })
        
    }
