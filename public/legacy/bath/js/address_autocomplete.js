function initAutocomplete() {
    var state_provider = '';
    var autocomplete = new google.maps.places.Autocomplete(document.getElementById('address_mask'), {
        types: ['address'],
        componentRestrictions: { country: "us" },
    });
    autocomplete.addListener('place_changed', function () {
        var place = autocomplete.getPlace();
        var zip = '';
        var street_number = '';
        var route = '';
        var city = '';
        var state = '';
        var state_full = 'your state';
        if (typeof place.address_components != 'undefined') {
            for (i = 0; i < place.address_components.length; i++) {
                if (place.address_components[i].types.indexOf('postal_code') != -1) {
                    zip = place.address_components[i].long_name;
                }
                if (place.address_components[i].types.indexOf('street_number') != -1) {
                    street_number = place.address_components[i].long_name;
                }
                if (place.address_components[i].types.indexOf('route') != -1) {
                    route = place.address_components[i].long_name;
                }
                if (place.address_components[i].types.indexOf('locality') != -1) {
                    city = place.address_components[i].long_name;
                }
                if (place.address_components[i].types.indexOf("administrative_area_level_1") != -1) {
                    state = place.address_components[i].short_name;
                    state_full = place.address_components[i].long_name;
                }
            }
            $('#address').val(place.formatted_address);
            console.log(place.formatted_address);

        }
        // $('#zip_code').val(zip);
        // $('#city').val(city);
        // $('#state').val(state);
        // $("#country").text('in ' + state_full);
        //
        // if (!zip.length) {
        //     $('#zip_code').attr('type', 'text');
        // }
    });
}
