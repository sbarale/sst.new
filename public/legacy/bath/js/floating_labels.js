/*
Floating Labels with Parsley Validation
By: Alex Sperellis

Description:
Example form with all inputs to test floating labels and parsley.js validation
*/
(function ($) {
    'use strict';

// Init Function
    const floatingLabelsInit = function () {
        // floating label function
        const floatingLabel = function (onload) {
            // input to target
            const $input = $(this);
            //on window load
            if (onload) {
                $.each($('.form-control'), function (index, value) {
                    const $current_input = $(value);
                    // if input is filled already - float label up
                    if ($current_input.val()) {
                        $current_input.siblings('label.floating').addClass('up');
                    }
                });
            }
            // timeout function to check val
            setTimeout(function () {
                // if input has a value
                if ($input.val()) {
                    // float label up
                    $input.siblings('label.floating').addClass('up');
                    // for selects only: add class to change text to black
                    if ($input.is('select')) {
                        $input.addClass('text-black');
                    }
                } else {
                    // else hide label if input gets cleared
                    $input.siblings('label.floating').removeClass('up');
                    // for selects only: remove class to change text to gray
                    if ($input.is('select')) {
                        $input.removeClass('text-black');
                    }
                }
            }, 1);
        };

        // on keydown, change and window load - fire floating label function
        $('.form-control').keydown(floatingLabel);
        $('.form-control').change(floatingLabel);
        window.addEventListener('load', floatingLabel(true), false);

        // on parsley error
        $('.js-floating-labels').parsley().on('form:error', function () {
            $.each(this.fields, function (key, field) {
                // if validation fails float label up and add error class to form group
                if (field.validationResult !== true) {
                    field.$element.siblings('label.floating').addClass('up');
                    field.$element.closest('.form-group').addClass('has-error');
                }
            });
        });

        // on parsley passed validation
        $('.js-floating-labels').parsley().on('field:validated', function () {
            // if validation passes
            if (this.validationResult === true) {
                //remove error class from form group
                this.$element.siblings('label.floating');
                this.$element.closest('.form-group').removeClass('has-error');
            } else {
                // float label up and add error class to form group
                this.$element.siblings('label.floating').addClass('up');
                this.$element.closest('.form-group').addClass('has-error');
            }
        });
    };

// init invoke, make sure form has class js-floating-labels
    floatingLabelsInit();
})(jQuery);