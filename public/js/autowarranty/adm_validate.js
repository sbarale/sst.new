var service_interface = global_common_domain + '/validate.php'
var controls_to_validate;
var associated_controls;
var validate_error_messages;

$(document).ready(function(){

    // Default error messages
    validate_error_messages = new Array();
    validate_error_messages['paydates.no_error'] = '';
    validate_error_messages['paydates.paydate1_invalid'] = 'Paydate 1 invalid';
    validate_error_messages['paydates.paydate2_invalid'] = 'Paydate 2 invalid';
    validate_error_messages['paydates.paydate_payperiod_mismatch'] = 'Paydates don\'t match pay period';
    validate_error_messages['paydates.paydate2_future'] = 'Paydate 2 must be within 63 days';
    validate_error_messages['paydates.paydate2_past'] = 'Paydate 1 must be at least 7 days from now';
    validate_error_messages['paydates.paydate1_weekend'] = 'Paydate 1 can not be on a weekend';
    validate_error_messages['paydates.paydate2_weekend'] = 'Paydate 2 can not be on a weekend';
    validate_error_messages['paydates.paydate1_paydate2_relative'] = 'Paydate 2 must be later than Paydate 1';

    validate_error_messages['address.no_error'] = '';
    validate_error_messages['address.city_state_zip_mismatch'] = 'City, State, and Zip don\'t match';
    validate_error_messages['address.suggested_cities'] = 'Cities that match this zip: %%cities%%';
    
    var re = /.dev$/;
    var match = re.test( window.location.hostname );
    if ( match )    
        service_interface = 'http://common.dev/validate.php'
        
    // Build array of all controls to validate, they will have a vtype attribute set
    controls_to_validate = new Array();
    associated_controls = new Array();
    $("[vtype]").attr('id',function(index,id)
        {
        var vtype = $('#' + id).attr('vtype');
        if ( vtype == '' || vtype === undefined )
            ;
        else
            {
                
            // Css class to show errors, default is error
            var error_class = $('#' + id).attr('vclass');
            if ( error_class == '' || error_class === undefined )
                error_class = "error";

            // Callbacks for application specific processing
            var pre_callback = $('#' + id).attr('vprecall');
            if ( pre_callback === undefined )
                pre_callback = "";
                
            var post_callback = $('#' + id).attr('vpostcall');
            if ( post_callback === undefined )
                post_callback = "";

            var error_callback = $('#' + id).attr('verrorcall');
            if ( error_callback === undefined )
                error_callback = "";

            // Optional semicolon delimited data
            var validation_data = $('#' + id).attr('vdata');
            if ( validation_data === undefined )
                validation_data = "";
                
            // If we need to validate on change
            var validate_on_change = $('#' + id).attr('vchange');
            if ( validate_on_change === undefined )
                validate_on_change = "";

            // If part of a tagged group
            var vtag = $('#' + id).attr('vtag');
            if ( vtag === undefined )
                vtag = "";

            // Pattern for regex criteria
            var vpattern = $('#' + id).attr('vpattern');
            if ( vpattern === undefined )
                vpattern = "";
            
            // Storage for detail validation data
            var vlogdata = $('#' + id).attr('vlogdata');
            if ( vlogdata === undefined )
                vlogdata = "";

            // Save it
            var validate = new Object();
            validate.id = id;
            validate.type = vtype;
            validate.error_class = error_class;
            validate.pre_callback = pre_callback;
            validate.post_callback = post_callback;
            validate.error_callback = error_callback;
            validate.validate_on_change = validate_on_change;
            validate.vtag = vtag;
            validate.vpattern = vpattern;
            validate.vlogdata = vlogdata;
            
            // Validation data needs a bit more handling
            validate.validation_data = new Object();
            
            validation_data =  validation_data.split(';');
            $.each(validation_data, function( index, data ) {
                var pair =  data.split('=');
                if ( pair.length == 2 )
                    validate.validation_data[pair[0]] = pair[1];
            });
            
            controls_to_validate.push ( validate );
            }
        });

    // Build a blur function for each control that needs validation, optionally do for onchange as well
    $.each(controls_to_validate, function( index, validate ) {
        $('#' + validate.id).blur(validate, function(control) 
            {
            if ( $('#' + validate.id).is(':visible') )
                ValidateByValidationType ( control.data );              
            });
            
        if ( validate.validate_on_change != undefined && validate.validate_on_change != '' )
            {
            $('#' + validate.id).change(validate, function(control) 
                {
                if ( $('#' + validate.id).is(':visible') )
                    ValidateByValidationType ( control.data );              
                });
            }
    });
    
    
        
});

function AssociateControls (root_id, associated)
    {
    var obj = new Object();
    obj.root_id = root_id;
    obj.data = associated;

    associated_controls.push(obj);
    }

function GetAssociatedControls ( root_id )
    {
    var associated = null;    
        
    $.each(associated_controls, function( index, controls ) {
        if ( controls.root_id == root_id )
            {
            associated = controls.data;
            return false;
            }
    });

    return ( associated );        
    }   
     
function ValidateControls ( vtag )
    {
    var allow_submit = true;
    $.each(controls_to_validate, function( index, validate ) {
        if ( $('#' + validate.id).is(':visible') )
            {
            if ( vtag === undefined || vtag == '' || validate.vtag == vtag )
                {
                ret = ValidateByValidationType ( validate, false );              
                if ( !ret )
                    allow_submit = false;
                }
            }
        });
    return ( allow_submit );
    }

function ValidateByValidationType ( validate, async )
    {
    var valid = false;
    
    if ( async === undefined )
        async = true;
        
    if ( typeof validate === 'object' )
        {

        var value = $('#' + validate.id).val();
        
        if ( validate.pre_callback == '' || validate.pre_callback === undefined )
            ;
        else
            eval ( validate.pre_callback );
        
        switch ( validate.type )
            {
            case 'name':
                valid = ValidateName ( value, validate.id, validate.error_class );
                break;                
                
            case 'email':
                valid = ValidateEmail ( value, false, validate.id, validate.error_class, async );
                break;
                
            case 'email_format':
                valid = ValidateEmail ( value, true, validate.id, validate.error_class, async );
                break;                    
                
            case 'string':
                valid = ValidateString ( value, validate.id, validate.error_class, validate.validation_data.minlength, validate.validation_data.maxlength, validate.vpattern );
                break;                

            case 'integer':
                valid = ValidateInteger ( value, validate.id, validate.error_class, validate.validation_data.minlength, validate.validation_data.maxlength );
                break;                

            case 'ssn':
                valid = ValidateSsn ( value, validate.id, validate.error_class );
                break;                

            case 'phone':
                valid = ValidatePhone ( value, validate.id, validate.error_class, false, async, validate.vlogdata );
                break;                

            case 'phone_format':
                valid = ValidatePhone ( value, validate.id, validate.error_class, true, async );
                break;                

            case 'date':
                valid = ValidateDate ( value, validate.id, validate.error_class );
                break;                

            case 'not_empty':
                valid = ValidateAgainstSet ( value, validate.id, validate.error_class, ['',null,0] );
                break;                

            case 'address':
                var associated = GetAssociatedControls ( validate.id );

                var address = new Object();
                address.address = $('#' + associated.address).val();
                address.city = $('#' + associated.city).val();
                address.state = $('#' + associated.state).val();
                address.zip = $('#' + associated.zip).val();
                address.reason = validate_error_messages['address.no_error'];
                address.suggestions = '';
        
                valid = ValidateAddress ( address, [associated.address, associated.city, associated.state, associated.zip], validate.error_class, associated, validate.post_callback, async );
        
                break;
                
            case 'zip':
                valid = ValidateZip ( value, validate.id, validate.error_class, async );
                break;                
                
            case 'paydate':
                var associated = GetAssociatedControls ( validate.id );

                var payinfo = new Object();
                payinfo.paydate1 = $('#' + associated.paydate1).val();
                payinfo.paydate2 = $('#' + associated.paydate2).val();
                payinfo.payperiod = $('#' + associated.payperiod).val();
                payinfo.reason = validate_error_messages['paydates.no_error'];
        
                valid = ValidatePaydates ( payinfo, associated.paydate1, associated.paydate2, validate.error_class );
    
                $('#' + associated.error_text).val(payinfo.reason);
                break;
                
            case 'aba':
                var associated = GetAssociatedControls ( validate.id );
                
                var bank = new Object();
                bank.aba = value;
                bank.name = '';
                bank.address = '';
                bank.phone = '';
                
                valid = ValidateAba ( bank, false, [associated.aba, associated.bankname, associated.bankaddress, associated.bankphone], validate.error_class, associated, validate.post_callback, async );

                break;                
            };         
            
        if ( !valid )
            {
            if ( validate.error_callback == '' || validate.error_callback === undefined )
                ;
            else
                {
                var err_callback = validate.error_callback;
                err_callback = err_callback.replace ( '%%control_id%%', validate.id );
                eval ( err_callback );
                }
            }    
            
        if ( validate.post_callback == '' || validate.post_callback === undefined )
            ;
        else
            {
            var p_callback = validate.post_callback;
            p_callback = p_callback.replace ( '%%control_id%%', validate.id );
            eval ( p_callback );
            }
            
        }
    return ( valid );
    }
    
function ValidateName ( name, control_id, error_class )
    {
    var field_valid = false;
    
    RemoveClass ( control_id, error_class );

    if ( typeof name === 'string' )
        {
        if ( name.length >= 2 )
            field_valid = true;
        }
        
    if ( field_valid === false )
        AddClass ( control_id, error_class );
        
    return ( field_valid );
    }

function ValidateAgainstSet ( value, control_id, error_class, disallow, allow )
    {
    var field_valid = false;
    var set_valid;
    
    RemoveClass ( control_id, error_class );

    // Check disallow list first
    set_valid = true;
    if ( typeof disallow !== 'undefined' && typeof value !== 'undefined' )
        {
        if ( typeof disallow === 'object' && Array.isArray ( disallow ) )
            {
            if ($.inArray ( value, disallow ) !== -1)
                set_valid = false;
            }
        else
            {
            if ( disallow == value )                
                set_valid = false;
            }
            
        field_valid = set_valid;
        }
    else
        {

        // Check against allow list then            
        set_valid = false;
        if ( typeof allow !== 'undefined' && typeof value !== 'undefined' )
            {
            if ( typeof allow === 'object' && Array.isArray ( disallow ) )
                {
                if ($.inArray ( value, allow ) !== -1)
                    set_valid = true;
                }
            else
                {
                if ( allow == value )                
                    set_valid = true;
                }
                
            field_valid = set_valid;
            }
            
        }
        
    if ( field_valid === false )
        AddClass ( control_id, error_class );
        
    return ( field_valid );
    }
    
function ValidateState ( state, control_id, error_class )
    {
    var field_valid = false;

    RemoveClass ( control_id, error_class );

    state = state.toLowercase();
    if ( state == 'ny' )
        field_valid = false;
        
    if ( field_valid === false )
        AddClass ( control_id, error_class );
        
    return ( field_valid );
    }

function ValidateAddress ( address, control_id, error_class, associated, post_callback, request_async )
    {
    var field_valid = false;

    // For tracking duplicate requests
    if ( typeof ValidateAddress.last_request == 'undefined' ) 
        ValidateAddress.last_request = '';
    if ( typeof ValidateAddress.last_result == 'undefined' ) 
        ValidateAddress.last_result = '';
    if ( typeof ValidateAddress.last_error_text == 'undefined' ) 
        ValidateAddress.last_error_text = '';
    if ( typeof ValidateAddress.last_suggestions == 'undefined' ) 
        ValidateAddress.last_suggestions = '';
    
    if ( typeof request_async === 'undefined' )
        request_async = true;
        
    RemoveClass ( control_id, error_class );

    // Don't bother validating unless we have something in every field
    if ( address != undefined && address.address != undefined && address.city != undefined && address.state != undefined && address.zip != undefined && 
         address.address.length > 0 && address.city.length > 0 && address.state.length > 0 && address.zip.length > 0 )
        {

        // Avoid duplicate requests
        var summary_request = address.address + address.city + address.state + address.zip;
        if ( summary_request == ValidateAddress.last_request )
            {
            field_valid = ValidateAddress.last_result;

            if ( field_valid === false )
                AddClass ( control_id, error_class );

            // Save prior error text and suggestions 
            $('#' + associated.error_text).val(ValidateAddress.last_error_text);
            $('#' + associated.suggestions).val(ValidateAddress.last_suggestions);
            }
        else
            {
                
            ValidateAddress.last_request = summary_request;
            ValidateAddress.last_result = '';
            ValidateAddress.last_error_text = '';
            ValidateAddress.last_suggestions = '';
                
            var request = new Object();
            request.request = 'validate_address';
            request.address = address.address;
            request.city = address.city;
            request.state = address.state;
            request.zip = address.zip;
                    
            var json = JSON.stringify( request );
            json = encodeURIComponent ( json );

            var http_request = service_interface + "?request=" + json;

            // Submit
            $.ajax({
                url: http_request,
                dataType: 'json',
                async: request_async, 
                success: function(json) 
                    {  
                    var valid = json.response_code;
                    if ( valid === 1 )
                        field_valid = true;
                    else
                        {
                        AddClass ( control_id, error_class );
                        address.reason = validate_error_messages['address.city_state_zip_mismatch'];
                        }
                    
                    // Get city suggestions    
                    address.suggestions = '';
                    var parsed = jQuery.parseJSON ( json.response_data );
                    if ( parsed.alt_cities != '' && parsed.alt_cities != undefined )
                        {
                        var cities = parsed.alt_cities.replace(/;/g,', ');
                        address.suggestions = validate_error_messages['address.suggested_cities'].replace ( '%%cities%%', cities );
                        }
                        
                    // Save error text and suggestions 
                    $('#' + associated.error_text).val(address.reason);
                    $('#' + associated.suggestions).val(address.suggestions);
                    
                    // Perform callback
                    if ( request_async && post_callback != undefined && post_callback != '' )
                        eval ( post_callback );
                        
                    if ( field_valid === false )
                        AddClass ( control_id, error_class );

                    ValidateAddress.last_result = field_valid;
                    ValidateAddress.last_error_text = address.reason;
                    ValidateAddress.last_suggestions = address.suggestions;
                    
                    },
                error: function error(jqXHR, textStatus, errorThrown)
                    {
                    var error = jqXHR.responseText;
                    }
                })
            
            }
        
        }
    else
        {
        // Just tag empty fields
        if ( address.address == undefined || address.address == '' )
            AddClass ( associated.address, error_class );

        if ( address.city == undefined || address.city == '' )
            AddClass ( associated.city, error_class );

        if ( address.state == undefined || address.state == '' )
            AddClass ( associated.state, error_class );
            
        if ( address.zip == undefined || address.zip == '' )
            AddClass ( associated.zip, error_class );
        }
        
    return ( field_valid );
    }
    
function ValidateAba ( bank, format_only, control_id, error_class, associated, post_callback, request_async )
    {
    var field_valid = false;
    var process_async = false;

    // For tracking duplicate requests
    if ( typeof ValidateAba.last_request == 'undefined' ) 
        ValidateAddress.last_request = '';
    if ( typeof ValidateAba.last_result == 'undefined' ) 
        ValidateAddress.last_result = '';

    if ( typeof request_async === 'undefined' )
        request_async = true;
    
    RemoveClass ( control_id, error_class );

    field_valid = /^[0-9]+$/.test(bank.aba);
    if ( field_valid )
        {
            
        if ( bank.aba.length == 9 )
            {
            
            // Do the checksum
            n = 0;
            for (i = 0; i < bank.aba.length; i += 3) 
                {
                n += parseInt(bank.aba.charAt(i),     10) * 3
                  +  parseInt(bank.aba.charAt(i + 1), 10) * 7
                  +  parseInt(bank.aba.charAt(i + 2), 10);
                }
                    
            if ( n != 0 && n % 10 == 0 )
                {
                
                if ( format_only == false )    
                    {
                    process_async = request_async;
                        
                    if ( bank.aba == ValidateAba.last_request )
                        {
                        field_valid = ValidateAba.last_result;
                        if ( !field_valid )
                            AddClass ( control_id, error_class );
                        }
                    else
                        {
                            
                        ValidateAba.last_request = bank.aba;
                        ValidateAba.last_result = '';
                            
                        var request = new Object();
                        request.request = 'validate_aba';
                        request.aba = bank.aba;
                    
                        var json = JSON.stringify( request );
                        json = encodeURIComponent ( json );

                        var http_request = service_interface + "?request=" + json;
                        
                        // Submit
                        $.ajax({
                            url: http_request,
                            dataType: 'json',
                            async: request_async,
                            success: function(json) 
                                {  
                                var valid = json.response_code;
                                if ( valid === 1 )
                                    {
                                    field_valid = true;

                                    var parsed = jQuery.parseJSON ( json.response_data );

                                    bank.aba = parsed.routing_number;
                                    bank.name = parsed.bank_name;
                                    bank.address = parsed.bank_address;
                                    bank.phone = parsed.bank_phone;
                                    
                                    $('#' + associated.bankname).val(bank.name);
                                    $('#' + associated.bankaddress).val(bank.address);
                                    $('#' + associated.bankphone).val(bank.phone);
                                    }
                                else
                                    AddClass ( control_id, error_class );

                                ValidateAba.last_result = field_valid;
                                },
                            error: function error(jqXHR, textStatus, errorThrown)
                                {
                                var error = jqXHR.responseText;
                                }
                                                
                            })

                        }
                        
                    }
                else
                    field_valid = true;
                        
                }
            else
                field_valid = false;
                    
            }
        else
            field_valid = false;
        }

    if ( !process_async && field_valid === false )
        AddClass ( control_id, error_class );
    
    return ( field_valid );        
    }    

function ValidatePaydates ( payinfo, control_1, control_2, error_class )
    {
    var field_valid = true;

    RemoveClass ( control_1, error_class );
    RemoveClass ( control_2, error_class );
    
    field_valid = ValidateDate ( payinfo.paydate1, control_1, error_class );
    if ( field_valid == true )
        {
        field_valid = ValidateDate ( payinfo.paydate2, control_2, error_class );
        if ( field_valid == true )
            {
                
            // Validate time relationships
            var now = new Date();
            now.setHours(0);
            now.setMinutes(0);
            now.setSeconds(0);
            now.setMilliseconds(0);

            var pd1 = new Date(payinfo.paydate1);
            var pd2 = new Date(payinfo.paydate2);
            
            // Paydate2 must be later    
            if ( field_valid )
                {
                if ( pd1 >= pd2 )
                    {
                    field_valid = false;
                    AddClass ( control_1, error_class );
                    payinfo.reason = validate_error_messages['paydates.paydate1_paydate2_relative'];
                    }
                }
                
            // Be sure neither is on a weekend
            if ( field_valid )
                {
                var pd1_day = pd1.getDay();
                var pd2_day = pd2.getDay();

                if ( pd1_day == 0 || pd1_day == 6 )
                    {
                    field_valid = false;
                    AddClass ( control_1, error_class );
                    payinfo.reason = validate_error_messages['paydates.paydate1_weekend'];
                    }
                
                if ( pd2_day == 0 || pd2_day == 6 )
                    {
                    field_valid = false;
                    AddClass ( control_2, error_class );
                    payinfo.reason = validate_error_messages['paydates.paydate2_weekend'];
                    }
                }

            // First paydate must be 7 days from now
            if ( field_valid )
                {
                if ( pd1 - now < 604800000 )
                    {
                    AddClass ( control_1, error_class );
                    field_valid = false;
                    payinfo.reason = validate_error_messages['paydates.paydate2_past'];
                    }
                }
                
            // Second no more than 63
            if ( field_valid )
                {
                if ( pd2 - now > 5443200000 )
                    {
                    AddClass ( control_2, error_class );
                    field_valid = false;
                    payinfo.reason = validate_error_messages['paydates.paydate2_future'];
                    }
                }
                
            // Dates must match period
            if ( field_valid )
                {
                    
                switch ( payinfo.payperiod )
                    {

                    case 'weekly':
                        if ( pd2 - pd1 != 604800000 )
                            field_valid = false;
                        break;
                                        
                    case 'biweekly':
                        if ( pd2 - pd1 != 1209600000 )
                            field_valid = false;
                        break;
                                        
                    case 'semimonthly':
                        var next_period = new Date(pd1);
                        next_period.setDate(next_period.getDate()+14);
                                        
                        var min_date = new Date(next_period);
                        min_date.setDate(min_date.getDate()-4);
                                        
                        var max_date = new Date(next_period);
                        max_date.setDate(max_date.getDate()+4);
                                        
                        if ( pd2 < min_date || pd2 > max_date )
                            field_valid = false;
                        break;
                                        
                    case 'monthly':
                        var next_month = new Date(pd1);
                        next_month.setMonth(next_month.getMonth()+1);
                                        
                        var min_date = new Date(next_month);
                        min_date.setDate(min_date.getDate()-4);
                                        
                        var max_date = new Date(next_month);
                        max_date.setDate(max_date.getDate()+4);
                                        
                        if ( pd2 < min_date || pd2 > max_date )
                            field_valid = false;
                        break;
                                        
                    };
                    
                if ( !field_valid )
                    {
                    AddClass ( control_1, error_class );
                    AddClass ( control_2, error_class );
                    payinfo.reason = validate_error_messages['paydates.paydate_payperiod_mismatch'];
                    }
                }
            }
        else
            {
            if ( payinfo.paydate2 != undefined && payinfo.paydate2 != '' )
                payinfo.reason = validate_error_messages['paydates.paydate2_invalid'];
            }
        }
    else
        {
        if ( payinfo.paydate1 != undefined && payinfo.paydate1 != '' )
            payinfo.reason = validate_error_messages['paydates.paydate1_invalid'];
        }

    return ( field_valid );
    }
    
function ValidateDate ( value, control_id, error_class )
    {
    var field_valid = true;

    RemoveClass ( control_id, error_class );

    // Validate numbers individually
    field_valid = /^(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)[0-9]{2}$/.test(value);
    if ( field_valid == true )
        {
        var adata = value.split('/');
        var mm = parseInt(adata[0],10);
        var dd = parseInt(adata[1],10);
        var yyyy = parseInt(adata[2],10);
        var xdata = new Date(yyyy,mm-1,dd);
        if ( ( xdata.getFullYear() == yyyy ) && ( xdata.getMonth () == mm - 1 ) && ( xdata.getDate() == dd ) )
            field_valid = true;
        else
            field_valid = false;
        }             
            
    if ( field_valid === false )
        AddClass ( control_id, error_class );

    return ( field_valid );
    }    

function ValidateSsn ( value, control_id, error_class )
    {
    var field_valid = true;

    RemoveClass ( control_id, error_class );
                                                                                
    field_valid = /^[0-7]{1}[0-9]{2}[-.]?[0-9]{2}[-.]?[0-9]{4}$/.test(value);
    
    if ( field_valid === false )
        AddClass ( control_id, error_class );

    return ( field_valid );    
    }

function ValidateInteger ( value, control_id, error_class, min_length, max_length )
    {
    var field_valid = false;
    
    RemoveClass ( control_id, error_class );

    field_valid = /^[0-9]+$/.test(value);
    if ( field_valid )
        {
        var length = value.length;

        if ( /[0-9]+/.test(min_length) )
            {
            if ( length < min_length )
                field_valid = false;
            }
            
        if ( /[0-9]+/.test(max_length) )
            {
            if ( length > max_length )
                field_valid = false;
            }
        }

    if ( field_valid === false )
        AddClass ( control_id, error_class );
    
    return ( field_valid );    
    }
    
function ValidateString ( value, control_id, error_class, min_length, max_length, vpattern )
    {
    var field_valid = false;
    
    RemoveClass ( control_id, error_class );

    if ( value != undefined )
        {
        field_valid = true;
        
        var length = value.length;

        if ( /[0-9]+/.test(min_length) )
            {
            if ( length < min_length )
                field_valid = false;
            }
            
        if ( /[0-9]+/.test(max_length) )
            {
            if ( length > max_length )
                field_valid = false;
            }
        
        if ( field_valid == true && vpattern )
            {
            var regex = new RegExp( vpattern );
            field_valid = regex.test ( value );
            }    
        }

    if ( field_valid === false )
        AddClass ( control_id, error_class );
    
    return ( field_valid );    
    }

function ValidatePhone ( value, control_id, error_class, format_only, request_async, vlogdata )
    {
    var field_valid = true;

    RemoveClass ( control_id, error_class );

    //field_valid = /^[\(]?[2-9]{1}[0-9]{2}[\)]?[.\- ]?[0-9]{3}[.\- ]?[0-9]{4}$/.test(value);
    field_valid = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/.test(value);
    
    
    if ( field_valid === false )
        AddClass ( control_id, error_class );
    
    return ( field_valid );    
    }
    
function ValidateZip ( value, control_id, error_class, request_async )
    {
    var field_valid = true;

    if ( typeof request_async === 'undefined' )
        request_async = true;

    RemoveClass ( control_id, error_class );

    field_valid = /(^\d{5}$)|(^\d{5}-\d{4}$)/.test(value);
    if ( field_valid == true )    
        {

        var request = new Object();
        request.request = 'validate_zip';
        request.zip = value;
    
        var json = JSON.stringify( request );
        json = encodeURIComponent ( json );

        var http_request = service_interface + "?request=" + json;
        
        // Submit
        $.ajax({
            url: http_request,
            dataType: 'json',
            async: request_async,
            success: function(json) 
                {  
                field_valid = false;
                var valid = json.response_code;
                if ( valid === 1 )
                    field_valid = true;
                else
                    AddClass ( control_id, error_class );
                },
            error: function error(jqXHR, textStatus, errorThrown)
                {
                var error = jqXHR.responseText;
                }
                                
            })
            
        }
    if ( field_valid === false )
        AddClass ( control_id, error_class );
    
    return ( field_valid );    
    }    
    
function ValidateEmail ( email, format_only, control_id, error_class, request_async )
    {
    var field_valid = false;    

    if ( typeof request_async === 'undefined' )
        request_async = true;
    
    RemoveClass ( control_id, error_class );
    
    if ( email != '' )
        {
    
        // Basic syntax check first    
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var field_valid = re.test(email);

        if ( field_valid == true && format_only == false )    
            {

            var request = new Object();
            request.request = 'validate_email';
            request.email = email;
        
            var json = JSON.stringify( request );
            json = encodeURIComponent ( json );

            var http_request = service_interface + "?request=" + json;
            
            // Submit
            $.ajax({
                url: http_request,
                dataType: 'json',
                async: request_async,
                success: function(json) 
                    {  
                    field_valid = false;
                    var valid = json.response_code;
                    if ( valid === 1 )
                        field_valid = true;
                    else
                        AddClass ( control_id, error_class );
                    },
                error: function error(jqXHR, textStatus, errorThrown)
                    {
                    var error = jqXHR.responseText;
                    }
                                    
                })
                
            }
        }

    if ( field_valid === false )
        AddClass ( control_id, error_class );
        
    return ( field_valid );
    }
    
// These determine if the control is individual, or an array, and then handle that
function AddClass ( control_id, apply_class )
    {
    if ( typeof control_id !== 'undefined' && typeof apply_class !== 'undefined' )
        {
        if ( typeof control_id === 'object' && Array.isArray ( control_id ) )
            {
            $.each(control_id, function( index, value ) {
                AddClassIndividual ( value, apply_class );
                });
            }
        else
            AddClassIndividual ( control_id, apply_class );
        }
    }
    
function RemoveClass ( control_id, apply_class )
    {
    if ( typeof control_id !== 'undefined' && typeof apply_class !== 'undefined' )
        {
        if ( typeof control_id === 'object' && Array.isArray ( control_id ) )
            {
            $.each(control_id, function( index, value ) {
                RemoveClassIndividual ( value, apply_class );
                });
            }
        else
            RemoveClassIndividual ( control_id, apply_class );
        }
    }

// These assign/remove a class from a specific element
function AddClassIndividual ( control_id, apply_class )
    {
    if ( typeof control_id !== 'undefined' && typeof apply_class !== 'undefined' )
        $('#' + control_id).addClass(apply_class);
    }
    
function RemoveClassIndividual ( control_id, apply_class )
    {
    if ( typeof control_id !== 'undefined' && typeof apply_class !== 'undefined' )
        $('#' + control_id).removeClass(apply_class);
    }

// These simplify setting up associated controls
function AssociateAddressControls ( edit_address, edit_city, edit_state, edit_zip, edit_address_error, edit_address_suggestions )
    {
    var address_validate = new Object();
    address_validate.address = edit_address;
    address_validate.city = edit_city;
    address_validate.state = edit_state;
    address_validate.zip = edit_zip;
    address_validate.error_text = edit_address_error;
    address_validate.suggestions = edit_address_suggestions;

    AssociateControls ( edit_address, address_validate );
    AssociateControls ( edit_city, address_validate );
    AssociateControls ( edit_state, address_validate );
    AssociateControls ( edit_zip, address_validate );
    }

function AssociateBankControls ( edit_aba, edit_bankname, edit_bankaddress, edit_bankphone )
    {
    var aba_validate = new Object();
    aba_validate.aba = edit_aba;
    aba_validate.bankname = edit_bankname;
    aba_validate.bankaddress = edit_bankaddress;
    aba_validate.bankphone = edit_bankphone;

    AssociateControls ( edit_aba, aba_validate );
    }    

function AssociatePaydateControls ( edit_paydate1, edit_paydate2, edit_payperiod, edit_paydate_error )
    {
    var payday_validate = new Object();
    payday_validate.paydate1 = edit_paydate1;
    payday_validate.paydate2 = edit_paydate2;
    payday_validate.payperiod = edit_payperiod;
    payday_validate.error_text = edit_paydate_error;

    AssociateControls ( edit_paydate1, payday_validate );
    AssociateControls ( edit_paydate2, payday_validate );
    AssociateControls ( edit_payperiod, payday_validate );
    }