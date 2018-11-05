/**
 * Created by elenak on 08.12.16.
 */
var states = ["Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado",
              "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho",
              "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine",
              "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi",
              "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey",
              "New Mexico", "New York", "North Carolina", "North Dakota", "Ohio",
              "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina",
              "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington",
              "West Virginia", "Wisconsin", "Wyoming"];
var i;
var visualisation;

// $(document).ready(function () {
//     if ($('#flag').css('display') == 'none'){
        $('.lp-container').html('<div class="lp-border"><select id="lp-select" name="state" class="form-control"></select></div>');
        $.each(states, function(key, value)
        {
            visualisation = visualisation + '<option value="'+ key +'">'+ value +'</option>';
        });

        $('#lp-select').html(visualisation);

        // $('.lp-container').html('<select class="form-control"><option>asdgsaeg</option></select>');
    // } else {
        visualisation = "<div><a href='#'>" + states[0] + "</a></div>";
        for (i = 1; i<13; i++){
            visualisation = visualisation + "<div><a href='#'>" + states[i] + "</a></div>";
        }
        $('#states-list1').html(visualisation);
        visualisation = "<div><a href='#'>" + states[13] + "</a></div>";
        for (i = 14; i<26; i++){
            visualisation = visualisation + "<div><a href='#'>" + states[i] + "</a></div>";
        }
        $('#states-list2').html(visualisation);
        visualisation = "<div><a href='#'>" + states[26] + "</a></div>";
        for (i = 27; i<39; i++){
            visualisation = visualisation + "<div><a href='#'>" + states[i] + "</a></div>";
        }
        $('#states-list3').html(visualisation);
        visualisation = "<div><a href='#'>" + states[39] + "</a></div>";
        for (i = 40; i<states.length; i++){
            visualisation = visualisation + "<div><a href='#'>" + states[i] + "</a></div>";
        }
        $('#states-list4').html(visualisation);
    // }
    
// });