var message = "";

$(document).ready(function(){

    var name = new Object();
    name.fullname = 'edit_fullname';
    name.fname = 'edit_firstname';
    name.lname = 'edit_lastname';
    name.phone = 'edit_phone';
    name.phonearea = 'edit_phonearea';
    name.phoneexchange = 'edit_phoneexchange';
    name.phonenumber = 'edit_phonenumber';
    name.city = 'edit_city';
    name.state = 'edit_state';
    name.zip = 'edit_zip';
    
    $('#main_form').submit(function() 
        {
        HideMessage ();
        var valid;
        message = "";
        
        valid_name = ValidateFullName( name );
        valid_phone = ValidatePhoneControl( name );
        valid = ValidateControls(); 
        
        // Remove duplicate
        message = message.substr (0, message.length-1);
        message = message.split(',');
        message = message.filter(function(elem, index, self) {
            return index == self.indexOf(elem);
        })
        message = message.toString();
        message = message.replace ( /,/g, ", " );

        if ( message != "" )
            {
            $("#span_message").text( "Invalid " + message + " entered" );
            $("#div_message").show();
            }
        
        valid = ( valid && valid_name && valid_phone ) ? true : false;
        
        if ( valid )
            {
            if ( $('#' + name.phonearea).length > 0 )    // if phone has 3 input boxes
                $('#' + name.phone).val( $('#' + name.phonearea).val() + $('#' + name.phoneexchange).val() + $('#' + name.phonenumber).val() );
            
            try
                {
                // We're caching results for invalid zips
                //if ( $('#zip_geo_info').val() == "" )
                    InfoForZip ( $('#' + name.zip).val(), false, 'zip_geo_info' );
                    
                if ( $('#zip_geo_info').val() != "" )
                    {
                    json = JSON.parse( $('#zip_geo_info').val() );        
                    $('#' + name.city).val( json ['city_name'] ); 
                    $('#' + name.state).val( json ['state'] );
                    }
                }
            catch (e)    
                {
                    
                }            
            }
            
        return ( valid );
        });
        
    $('#' + name.fullname).blur ( function() 
        {
        ValidateFullName( name );
        });

    $('#' + name.phone).blur ( function() 
        {
        ValidatePhoneControl( name );
        });
        
    $('#' + name.phonearea).blur ( function() 
        {
        ValidatePhoneControl( name );
        });
        
    $('#' + name.phonearea).keyup(function (e) {
        $('#' + name.phonearea).removeClass('error');
        phonearea = $('#' + name.phonearea).val();
        phonearea = phonearea.replace( /[()_ -]/g, "" );
        
        if ( ( phonearea.substring ( 0, 1 )!="" && "01".indexOf( phonearea.substring ( 0, 1 ) ) >= 0 ) )
            $('#' + name.phonearea).addClass('error');
    });                         
        
    $('#' + name.phoneexchange).blur ( function() 
        {
        ValidatePhoneControl( name );
        });
        
    $('#' + name.phoneexchange).keyup(function (e) {
        $('#' + name.phoneexchange).removeClass('error');
        phoneexchange = $('#' + name.phoneexchange).val();
        phoneexchange = phoneexchange.replace( /[()_ -]/g, "" );
        
        if ( ( phoneexchange.substring ( 0, 1 )!="" && "01".indexOf( phoneexchange.substring ( 0, 1 ) ) >= 0 ) )
            $('#' + name.phoneexchange).addClass('error');
    });        
        
    $('#' + name.phonenumber).blur ( function() 
        {
        ValidatePhoneControl( name );
        });
        
    $('#' + name.zip).blur ( function() 
        {
        });

    $('#' + name.zip).keyup(function (e) {
        $('#' + name.zip).removeClass('error');
        zip = $('#' + name.zip).val();
        invalid_zips = "000,002,003,004,099,213,269,343,345,348,353,419,428,429,517,518,519,529,533,536,552,568,578,579,589,621,632,642,643,659,663,682,694,695,696,697,698,699,702,709,715,732,742,771,817,818,819,839,848,849,854,858,861,862,866,867,868,869,876,886,887,888,892,896,899,909,929,987";
        if ( ("," + invalid_zips + ",").indexOf( "," + zip.substring ( 0, 3 ) + "," ) >= 0 )
            $('#' + name.zip).addClass('error');
    });

    PrepopulateStaticData();

    SetPrepopMap ( auto_qs_id_map );

    PrepopulateFields();
    

    function ValidatePhoneControl ( name )
        {
        ret = false;
            
        if ( $('#' + name.phonearea).length > 0 )    // if phone has 3 input boxes
            $('#' + name.phone).val( $('#' + name.phonearea).val() + $('#' + name.phoneexchange).val() + $('#' + name.phonenumber).val() );
        
        phone = $('#' + name.phone).val();
        
        if ( ( phone.substring ( 0, 1 )!="" && "01".indexOf( phone.substring ( 0, 1 ) ) >= 0 ) || ( phone.substring ( 3, 4 )!="" && "01".indexOf( phone.substring ( 3, 4 ) ) >= 0 ) )
            is_valid = false;
        else
            {    
            var validate = new Object();
            validate.type =  "phone";
            validate.id = name.phone;
            //is_valid =  ValidateByValidationType ( validate, false );
                is_valid = 1
            }
        
        if ( is_valid )
            {
            $('#' + name.phone).removeClass('error');
            $('#' + name.phonearea).removeClass('error');
            $('#' + name.phoneexchange).removeClass('error');
            $('#' + name.phonenumber).removeClass('error');
            ret = true;
            }
        else
            {
            $('#' + name.phone).addClass('error');    
            $('#' + name.phonearea).addClass('error');
            $('#' + name.phoneexchange).addClass('error');
            $('#' + name.phonenumber).addClass('error');
            ShowMessage ( name.phone );
            }
        
        return ret;    
        }
    
    function ValidateFullName ( name )
        {
        ret = false;            
        var names, fname, lname;       
        fname = '';
        lname = '';
        if ( $('#' + name.fullname).is(':visible') )
            {
            $('#' + name.fullname).removeClass('error');
            names = $('#' + name.fullname).val().split(" ");
            if ( ( names.length < 2 ) || hasNumber ( $('#' + name.fullname).val() ) )
                {
                $('#' + name.fullname).addClass('error');
                ShowMessage ( name.fullname );
                }
            else
                {
                fname = names[0];
                for (ctr = 1; ctr < ( names.length ); ctr++) 
                { 
                    lname = lname + names[ctr] + ' ';
                }
                lname = lname.trim();

                $('#' + name.fname).val( fname );
                $('#' + name.lname).val( lname );
                
                var validate = new Object();
                validate.type =  "name";
                validate.id = name.fname;
                //is_valid_fname =  ValidateByValidationType ( validate, false );
                is_valid_fname = 1;
                
                validate.type =  "string";
                validate.id = name.lname;
                validate.validation_data = new Object();
                validate.validation_data.minlength = 1;                
                //is_valid_lname =  ValidateByValidationType ( validate, false );
                is_valid_lname = 1;
                
                if ( is_valid_fname && is_valid_lname)
                    ret = true;
                else
                    {
                    $('#' + name.fullname).addClass('error');            
                    ShowMessage ( name.fullname );                    
                    }
                }
            }
        return ret;                
        }    
});

    function hasNumber( string )
    {
        return /\d/.test( string );
    }

    function ShowMessage ( control_id )
        {
        var msg = control_id.replace( "edit_", "" );
        msg = msg.replace( /_/g, " " );
        message = message + msg.trim() + ",";
        }

    function HideMessage ()
        {
        $("#span_message").text( "" );
        $("#div_message").hide();
        } 
