function MM_openBrWindow(theURL, winName, features) {
    //v2.0
    window.open(theURL, winName, features);
}

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function hasErrors(step) {
    var errors = [];
    error_flag = false;

    if (step == 1) {
        if (jQuery("#zip").val() == '') {
            jQuery("#zip").addClass("error");
            error_flag = true;
        }
    }
    if (step == 2) {
        if (jQuery("#address").val() == "") {
            jQuery("#address").addClass("error");
            error_flag = true;
        }
    }
    if (step == 3) {
        if (jQuery("#first_name").val() == "") {
            jQuery("#first_name").addClass("error");
            error_flag = true;
        }
        if (jQuery("#last_name").val() == '') {
            jQuery("#last_name").addClass("error");
            error_flag = true;
        }
        if (jQuery("#email_address").val() == "") {
            jQuery("#email_address").addClass("error");
            error_flag = true;

        }

        var valid_mail = validateEmail(jQuery("#email_address").val());
        if (valid_mail == false) {
            jQuery("#email_address").addClass("error");
            error_flag = true;
        }


        if (jQuery("#phone_home").val() == "") {
            jQuery("#phone_home").addClass("error");
            error_flag = true;
        }
        else {
            var string = jQuery("#phone_home").val().replace(/[^\d]/g, ''); // Removes anything not in [0-9]

            if (string.length != 10) {
                jQuery("#phone_home").addClass("error");
                error_flag = true;
            }

        }
    }
    return error_flag;
}

jQuery(document).ready(function () {
    dataLayer.push({'event': 'step_1'});
    jQuery("#phone_home").mask("999-999-9999");
    jQuery("#btn_continue").click(function () {
        event.preventDefault();
        if (!hasErrors(1)) {
            // go to step 2
            jQuery("#step").val("2");
            jQuery("#step1").hide();
            jQuery("#description").hide();
            jQuery("#step2").show();
            dataLayer.push({'event': 'step_2'});
        }
        else {
            alert("Please fill out the required fields.");
        }
    });

    jQuery("#btn_continue2").click(function () {
        event.preventDefault();
        if (!hasErrors(2)) {
            // go to step 3
            jQuery("#step").val("3");
            jQuery("#step2").hide();
            jQuery("#step3").show();
            dataLayer.push({'event': 'step_3'});

            jQuery("#main").css({ 'background-image': 'none' });
        }
        else {
            alert("Please fill out the required fields.");
        }
    });
    jQuery("#btn_submit").click(function () {
        console.log('submit clicked');
        if (!hasErrors(3)) {
            dataLayer.push({'event': 'step_4'});
            $('#ckm_form')[0].submit();
            return true;
        }
        else {
            alert("Please fill out the required fields.");
            return false;
        }
    });

});		
			
					
			
		