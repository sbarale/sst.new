(function($) {
  "use strict";
  var photo_carousel_options = {
    slidesToShow: 1,
    mobileFirst: true,
    appendArrows: false,
    nextArrow: $("#next_gallery_arrow"),
    prevArrow: $("#prev_gallery_arrow"),
    responsive: [
      { breakpoint: 600, settings: "unslick" },
      { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1 } }
    ]
  };
  var masonryOptions = {
    itemSelector: ".grid-item",
    columnWidth: ".grid-sizer",
    percentPosition: true,
    gutter: 0
  };
  var isActive = false;
  var $header_height = 0;
  $(document).ready(function() {
    var validatoroptions = {
      showCloseIcon: false,
      classNamePrefix: "bvalidator_red_",
      position: { x: "left", y: "top" },
      validateOnSubmit: false
    };
    var formstovalidatelength = formstovalidate.length;
    for (var i = 0; i < formstovalidatelength; i++) {
      $("#" + formstovalidate[i]).bValidator(validatoroptions);
    }
    $(".phone_mask").mask("(000) 000-0000");
    position_navbar();
    modify_header();
    $(".testimonial_carousel").slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true,
      appendArrows: false,
      nextArrow: $("#next_testimonial_arrow"),
      prevArrow: $("#prev_testimonial_arrow")
    });
    $(".photo_carousel").slick(photo_carousel_options);
    $('[data-fancybox="images"]').fancybox({
      loop: true,
      thumbs: { autoStart: true, hideOnClose: true },
      arrows: true,
      infobar: false,
      margin: [44, 0, 22, 0],
      buttons: ["arrowLeft", "arrowRight", "close"]
    });
    $.urlParam = function(name) {
      var results = new RegExp("[\\?&]" + name + "=([^&#]*)").exec(
        window.location.href
      );
      if (results == null) {
        return null;
      } else {
        return results[1] || 0;
      }
    };
    if ($.urlParam("source")) {
      $.cookie("source", $.urlParam("source"), { path: "/", expires: 30 });
    }
    if ($.cookie("source")) {
      var source_cookie = $.cookie("source");
      $(".form_source").each(function() {
        $(".form_source").val(source_cookie);
      });
      if (source_numbers.hasOwnProperty(source_cookie)) {
        var source_number = source_numbers[source_cookie];
        $(".phone_changer").each(function() {
          $(this).html(function(index, html) {
            return html
              .replace(default_phone_number, source_number)
              .replace(
                default_formatted_phone_number,
                formatPhoneNumber(source_number)
              );
          });
          $(this).attr("href", "tel:" + source_number);
        });
      }
    }
    if ($.urlParam("city")) {
      $.cookie("city", $.urlParam("city"), { path: "/", expires: 30 });
    }
    if ($.cookie("city")) {
      var city_cookie = $.cookie("city");
      if (city_texts.hasOwnProperty(city_cookie)) {
        var city_text = city_texts[city_cookie];
        $(".city_changer").each(function() {
          $(this).html(function(index, html) {
            return html
              .replace("your area", city_text)
              .replace("Your area", city_text);
          });
        });
      }
    }
    if (!$.cookie("referrer")) {
      $.cookie("referrer", referral_url, { path: "/", expires: 30 });
      $(".form_referrer").each(function() {
        $(".form_referrer").val($.cookie("referrer"));
      });
    } else {
      $(".form_referrer").each(function() {
        $(".form_referrer").val($.cookie("referrer"));
      });
    }
  });
  $(".photo_carousel").on("destroy", function(event, slick) {
    $(".photo_carousel").prepend('<div class="grid-sizer col-3"></div>');
    var $grid = $(".photo_carousel").masonry(masonryOptions);
    var isActive = true;
  });
  $(window).resize(function() {
    var window_inner_width = window.innerWidth;
    position_navbar();
    if ($(".collapse").hasClass("show")) {
      $(".collapse").removeClass("show");
    }
    if (window_inner_width < 992) {
      if ($(".collapse").css("display") == "none") {
        $(".collapse").css("display", "");
      }
      if ($(".navbar-toggler").css("display") == "none") {
        $(".navbar-toggler").css("display", "");
      }
    }
    modify_header();
    if (window_inner_width < 600) {
      if ($(".grid-sizer").length > 0) {
        $(".grid-sizer").remove();
      }
      if (isActive) {
        $grid.masonry("destroy");
      }
      $(".photo_carousel")
        .not(".slick-initialized")
        .slick(photo_carousel_options);
    }
  });
  $(document).scroll(function() {
    modify_header();
  });
  function position_navbar() {
    var new_header_height = $("#header").outerHeight();
    if (new_header_height !== $header_height) {
      $header_height = new_header_height;
      if (!$("body").hasClass("not_top")) {
        $("body").css({ "padding-top": $header_height + "px" });
      }
    }
  }
  function modify_header() {
    var window_inner_width = window.innerWidth;
    if ($(window).scrollTop() > 40) {
      $(".navbar").removeClass("navbar-expand-lg");
      $(".collapse").hide();
      if (window_inner_width >= 992) {
        $(".collapse")
          .stop(true)
          .fadeOut(200, function() {
            $(this).attr("style", "display: none !important");
            $(".navbar-toggler")
              .stop(true)
              .fadeIn(200, function() {
                $(this).attr("style", "display: inline-block");
              });
          });
        $("#sticky_form_container")
          .stop(true)
          .fadeIn(200, function() {
            $(this).attr("style", "display: inline-block !important");
          });
      } else {
        if ($(".collapse").css("display") == "flex") {
          $(".collapse").css("display", "");
        }
        if ($("#sticky_form_container").css("display") == "block") {
          $("#sticky_form_container").css("display", "");
        }
      }
      $("body").addClass("not_top");
    } else {
      $(".navbar").addClass("navbar-expand-lg");
      if (window_inner_width >= 992) {
        if ($("body").hasClass("not_top")) {
          $(".navbar-toggler")
            .stop(true)
            .fadeOut(200, function() {
              $(this).attr("style", "display: none");
              $(".collapse")
                .stop(true)
                .fadeIn(200, function() {
                  $(this).attr("style", "display: flex !important");
                });
            });
          $("#sticky_form_container")
            .stop(true)
            .fadeOut(200, function() {
              $(this).attr("style", "display: none !important");
            });
        }
      } else {
        if ($(".collapse").css("display") == "flex") {
          $(".collapse").css("display", "");
        }
        if ($("#sticky_form_container").css("display") == "block") {
          $("#sticky_form_container").css("display", "");
        }
      }
      $("body").removeClass("not_top");
    }
    if ($("body").hasClass("not_top")) {
      $("#top_bar")
        .stop(true)
        .animate(
          {
            "padding-top": "4px",
            "padding-bottom": "4px",
            "font-size": ".9em"
          },
          200,
          function() {
            position_navbar();
          }
        );
      var navbar_padding = ".5rem";
      if (window_inner_width >= 992) {
        navbar_padding = "15px";
      }
      $(".navbar")
        .stop(true)
        .animate(
          { "padding-top": navbar_padding, "padding-bottom": navbar_padding },
          200
        );
    } else {
      $("#top_bar")
        .stop(true)
        .animate(
          { "padding-top": "7px", "padding-bottom": "7px", "font-size": "1em" },
          200,
          function() {
            position_navbar();
          }
        );
      $(".navbar")
        .stop(true)
        .animate({ "padding-top": ".5rem", "padding-bottom": ".5rem" }, 200);
    }
  }
  $(".navbar-toggler").click(function() {
    var navbar = $(this).data("target");
    if ($(navbar).css("display") == "none") {
      $(navbar).css("display", "");
    }
  });
  function formatPhoneNumber(phone) {
    phone = phone.replace(/[^\d]/g, "");
    if (phone.length == 10) {
      return phone.replace(/(\d{3})(\d{3})(\d{4})/, "($1) $2-$3");
    }
    console.log(1);
    return null;
  }
})(jQuery);
