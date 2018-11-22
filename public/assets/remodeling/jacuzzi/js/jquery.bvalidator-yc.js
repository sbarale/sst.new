(function(a) {
  a.fn.bValidator = function(b) {
    return new bValidator(this, b);
  };
  bValidator = function(m, e) {
    var i = {
        singleError: false,
        offset: { x: -23, y: -4 },
        position: { x: "right", y: "top" },
        template: '<div class="{errMsgClass}"><em/>{message}</div>',
        templateCloseIcon:
          '<div style="display:table"><div style="display:table-cell">{message}</div><div style="display:table-cell"><div class="{closeIconClass}" onclick="{closeErrMsg}">x</div></div></div>',
        showCloseIcon: true,
        showErrMsgSpeed: "normal",
        scrollToError: true,
        classNamePrefix: "bvalidator_",
        closeIconClass: "close_icon",
        errMsgClass: "errmsg",
        errorClass: "invalid",
        validClass: "",
        lang: "en",
        errorMessageAttr: "data-bvalidator-msg",
        validateActionsAttr: "data-bvalidator",
        paramsDelimiter: ":",
        validatorsDelimiter: ",",
        validateOn: null,
        errorValidateOn: "keyup",
        onBeforeValidate: null,
        onAfterValidate: null,
        onValidateFail: null,
        onValidateSuccess: null,
        onBeforeElementValidation: null,
        onAfterElementValidation: null,
        onBeforeAllValidations: null,
        onAfterAllValidations: null,
        errorMessages: {
          en: {
            default: "Please correct this value.",
            equalto: "Please enter the same value again.",
            differs: "Please enter a different value.",
            minlength: "The length must be at least {0} characters",
            maxlength: "The length must be at max {0} characters",
            rangelength: "The length must be between {0} and {1}",
            min: "Please enter a number greater than or equal to {0}.",
            max: "Please enter a number less than or equal to {0}.",
            between: "Please enter a number between {0} and {1}.",
            required: "This field is required.",
            alpha: "Please enter alphabetic characters only.",
            alphanum: "Please enter alphanumeric characters only.",
            digit: "Please enter only digits.",
            number: "Please enter a valid number.",
            email: "Please enter a valid email address.",
            image: "This field should only contain image types",
            url: "Please enter a valid URL.",
            ip4: "Please enter a valid IPv4 address.",
            ip6: "Please enter a valid IPv6 address.",
            date: "Please enter a valid date in format {0}."
          }
        }
      },
      c = function(o) {
        return o.is(":input")
          ? o
          : o
              .find(":input[" + i.validateActionsAttr + "]")
              .not(":button, :image, :reset, :submit, :hidden, :disabled");
      },
      j = function(o) {
        o.bind(i.validateOn + ".bV", { bVInstance: l }, function(p) {
          p.data.bVInstance.validate(false, a(this));
        });
      },
      h = function(q, p) {
        g(q);
        msg_container = a('<div class="bVErrMsgContainer"></div>').css(
          "position",
          "absolute"
        );
        q.data("errMsg.bV", msg_container);
        msg_container.insertAfter(q);
        var u = "";
        for (var s = 0; s < p.length; s++) {
          u += "<div>" + p[s] + "</div>\n";
        }
        if (i.showCloseIcon) {
          u = i.templateCloseIcon
            .replace("{message}", u)
            .replace("{closeIconClass}", i.classNamePrefix + i.closeIconClass)
            .replace(
              "{closeErrMsg}",
              "$(this).closest('." +
                i.classNamePrefix +
                i.errMsgClass +
                "').css('visibility', 'hidden');"
            );
        }
        var o = a(
          i.template
            .replace("{errMsgClass}", i.classNamePrefix + i.errMsgClass)
            .replace("{message}", u)
        );
        o.appendTo(msg_container);
        var t = n(q, o);
        o.css({
          visibility: "visible",
          position: "absolute",
          top: t.top,
          left: t.left
        }).fadeIn(i.showErrMsgSpeed);
        if (i.scrollToError) {
          var r = o.offset().top;
          if (k === null || r < k) {
            k = r;
          }
        }
      },
      g = function(o) {
        var p = o.data("errMsg.bV");
        if (p) {
          p.remove();
        }
      },
      n = function(v, r) {
        var q = v.data("errMsg.bV"),
          s = -(q.offset().top - v.offset().top + r.outerHeight() - i.offset.y),
          p = v.offset().left + v.outerWidth() - q.offset().left + i.offset.x,
          u = i.position.x,
          t = i.position.y;
        if (t == "center" || t == "bottom") {
          var w = r.outerHeight() + v.outerHeight();
          if (t == "center") {
            s += w / 2;
          }
          if (t == "bottom") {
            s += w;
          }
        }
        if (u == "center" || u == "left") {
          var o = v.outerWidth();
          if (u == "center") {
            p -= o / 2;
          }
          if (u == "left") {
            p -= o;
          }
        }
        return { top: s, left: p };
      },
      b = function(p, q, r, o) {
        if (a.isFunction(i[p])) {
          return i[p](q, r, o);
        }
      },
      d = function(p) {
        var o = {};
        if (p.is("input:checkbox")) {
          o.value = p.attr("name")
            ? (o.selectedInGroup = a(
                'input:checkbox[name="' + p.attr("name") + '"]:checked'
              ).length)
            : p.attr("checked");
        } else {
          if (p.is("input:radio")) {
            o.value = p.attr("name")
              ? (o.value = a(
                  'input:radio[name="' + p.attr("name") + '"]:checked'
                ).length)
              : p.val();
          } else {
            if (p.is("select")) {
              o.selectedInGroup = a("option:selected", p).length;
              o.value = p.val();
            } else {
              if (p.is(":input")) {
                o.value = p.val();
              }
            }
          }
        }
        return o;
      },
      f = {
        equalto: function(o, p) {
          return o.value == a("#" + p).val();
        },
        differs: function(o, p) {
          return o.value != a("#" + p).val();
        },
        minlength: function(o, p) {
          return o.value.length >= parseInt(p);
        },
        maxlength: function(o, p) {
          return o.value.length <= parseInt(p);
        },
        rangelength: function(o, q, p) {
          return o.value.length >= parseInt(q) && o.value.length <= parseInt(p);
        },
        min: function(o, p) {
          if (o.selectedInGroup) {
            return o.selectedInGroup >= parseFloat(p);
          } else {
            if (!this.number(o)) {
              return false;
            }
            return parseFloat(o.value) >= parseFloat(p);
          }
        },
        max: function(p, o) {
          if (p.selectedInGroup) {
            return p.selectedInGroup <= parseFloat(o);
          } else {
            if (!this.number(p)) {
              return false;
            }
            return parseFloat(p.value) <= parseFloat(o);
          }
        },
        between: function(p, q, o) {
          if (p.selectedInGroup) {
            return (
              p.selectedInGroup >= parseFloat(q) &&
              p.selectedInGroup <= parseFloat(o)
            );
          }
          if (!this.number(p)) {
            return false;
          }
          var r = parseFloat(p.value);
          return r >= parseFloat(q) && r <= parseFloat(o);
        },
        required: function(o) {
          if (!o.value || !a.trim(o.value)) {
            return false;
          }
          return true;
        },
        alpha: function(o) {
          return this.regex(o, /^[a-z ._\-]+$/i);
        },
        alphanum: function(o) {
          return this.regex(o, /^[a-z\d ._\-]+$/i);
        },
        digit: function(o) {
          return this.regex(o, /^\d+$/);
        },
        number: function(o) {
          return this.regex(o, /^[-+]?\d+(\.\d+)?$/);
        },
        email: function(o) {
          return this.regex(
            o,
            /^([a-zA-Z\d_\.\-\+%])+\@(([a-zA-Z\d\-])+\.)+([a-zA-Z\d]{2,4})+$/
          );
        },
        image: function(o) {
          return this.regex(o, /\.(jpg|jpeg|png|gif|bmp)$/i);
        },
        url: function(o) {
          return this.regex(
            o,
            /^(http|https|ftp)\:\/\/[a-z\d\-\.]+\.[a-z]{2,3}(:[a-z\d]*)?\/?([a-z\d\-\._\?\,\'\/\\\+&amp;%\$#\=~])*$/i
          );
        },
        regex: function(o, q, p) {
          if (typeof q === "string") {
            q = new RegExp(q, p);
          }
          return q.test(o.value);
        },
        ip4: function(o) {
          return this.regex(
            o,
            /^(?:(?:25[0-5]|2[0-4]\d|[01]?\d\d?)\.){3}(?:25[0-5]|2[0-4]\d|[01]?\d\d?)$/
          );
        },
        ip6: function(o) {
          return this.regex(
            o,
            /^(?:(?:(?:[A-F\d]{1,4}:){5}[A-F\d]{1,4}|(?:[A-F\d]{1,4}:){4}:[A-F\d]{1,4}|(?:[A-F\d]{1,4}:){3}(?::[A-F\d]{1,4}){1,2}|(?:[A-F\d]{1,4}:){2}(?::[A-F\d]{1,4}){1,3}|[A-F\d]{1,4}:(?::[A-F\d]{1,4}){1,4}|(?:[A-F\d]{1,4}:){1,5}|:(?::[A-F\d]{1,4}){1,5}|:):(?:(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)\.){3}(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)|(?:[A-F\d]{1,4}:){7}[A-F\d]{1,4}|(?:[A-F\d]{1,4}:){6}:[A-F\d]{1,4}|(?:[A-F\d]{1,4}:){5}(?::[A-F\d]{1,4}){1,2}|(?:[A-F\d]{1,4}:){4}(?::[A-F\d]{1,4}){1,3}|(?:[A-F\d]{1,4}:){3}(?::[A-F\d]{1,4}){1,4}|(?:[A-F\d]{1,4}:){2}(?::[A-F\d]{1,4}){1,5}|[A-F\d]{1,4}:(?::[A-F\d]{1,4}){1,6}|(?:[A-F\d]{1,4}:){1,7}:|:(?::[A-F\d]{1,4}){1,7})$/i
          );
        },
        date: function(x, y) {
          if (x.value.length == 10 && y.length == 10) {
            var z = y.match(/[^mdy]+/g);
            if (z.length == 2 && z[0].length == 1 && z[0] == z[1]) {
              var t = x.value.split(z[0]),
                q = y.split(z[0]);
              for (var p = 0; p < 3; p++) {
                if (q[p] == "dd") {
                  var w = t[p];
                } else {
                  if (q[p] == "mm") {
                    var r = t[p];
                  } else {
                    if (q[p] == "yyyy") {
                      var u = t[p];
                    }
                  }
                }
              }
              var o = new Date(u, r - 1, w);
              if (
                o.getMonth() + 1 != r ||
                o.getDate() != w ||
                o.getFullYear() != u
              ) {
                return false;
              }
              return true;
            }
          }
          return false;
        },
        extension: function() {
          var o = arguments[0],
            q = "";
          if (!arguments[1]) {
            return false;
          }
          for (var p = 1; p < arguments.length; p++) {
            q += arguments[p];
            if (p != arguments.length - 1) {
              q += "|";
            }
          }
          return this.regex(o, "\\.(" + q + ")$", "i");
        }
      },
      l = this,
      k;
    if (window.bValidatorOptions) {
      a.extend(true, i, window.bValidatorOptions);
    }
    if (e) {
      a.extend(true, i, e);
    }
    if (m.data("bValidator")) {
      return m.data("bValidator");
    }
    m.data("bValidator", this);
    if (m.is("form")) {
      m.bind("submit.bV", function(o) {
        if (l.validate()) {
          return true;
        } else {
          o.stopImmediatePropagation();
          return false;
        }
      });
      m.bind("reset.bV", function() {
        l.reset();
      });
    }
    if (i.validateOn) {
      j(c(m));
    }
    this.validate = function(o, s) {
      var p = true,
        r = s ? s : c(m);
      k = null;
      if (b("onBeforeAllValidations", r) !== false) {
        r.each(function() {
          var I = a.trim(
              a(this)
                .attr(i.validateActionsAttr)
                .replace(
                  new RegExp("\\s*\\" + i.validatorsDelimiter + "\\s*", "g"),
                  i.validatorsDelimiter
                )
            ),
            F = 0;
          if (!I) {
            return true;
          }
          var x = I.split(i.validatorsDelimiter),
            w = d(a(this)),
            E = [];
          if (
            a.inArray("valempty", x) == -1 &&
            a.inArray("required", x) == -1 &&
            !f.required(w)
          ) {
            F = 1;
          }
          if (!F) {
            var u = a(this).attr(i.errorMessageAttr),
              D = 0;
            a(this).data("checked.bV", 1);
            if (b("onBeforeElementValidation", a(this)) !== false) {
              for (var A = 0; A < x.length; A++) {
                x[A] = a.trim(x[A]);
                if (!x[A]) {
                  continue;
                }
                if (b("onBeforeValidate", a(this), x[A]) === false) {
                  continue;
                }
                var C = x[A].match(/^(.*?)\[(.*?)\]/);
                if (C && C.length == 3) {
                  var B = C[1];
                  C = C[2].split(i.paramsDelimiter);
                } else {
                  C = [];
                  var B = x[A];
                }
                if (typeof f[B] == "function") {
                  C.unshift(w);
                  var t = f[B].apply(f, C);
                } else {
                  if (typeof window[B] == "function") {
                    C.unshift(w.value);
                    var t = window[B].apply(f, C);
                  }
                }
                if (b("onAfterValidate", a(this), x[A], t) === false) {
                  continue;
                }
                if (!t) {
                  if (!o) {
                    if (!D && B != "valempty") {
                      if (!u) {
                        if (
                          i.errorMessages[i.lang] &&
                          i.errorMessages[i.lang][B]
                        ) {
                          u = i.errorMessages[i.lang][B];
                        } else {
                          if (i.errorMessages.en[B]) {
                            u = i.errorMessages.en[B];
                          } else {
                            if (
                              i.errorMessages[i.lang] &&
                              i.errorMessages[i.lang]["default"]
                            ) {
                              u = i.errorMessages[i.lang]["default"];
                            } else {
                              u = i.errorMessages.en["default"];
                            }
                          }
                        }
                      } else {
                        D = 1;
                      }
                      if (u.indexOf("{")) {
                        for (var z = 0; z < C.length - 1; z++) {
                          u = u.replace(
                            new RegExp("\\{" + z + "\\}", "g"),
                            C[z + 1]
                          );
                        }
                      }
                      if (!(E.length && B == "required")) {
                        E[E.length] = u;
                      }
                      u = null;
                    }
                  } else {
                    E[E.length] = "";
                  }
                  p = false;
                  b("onValidateFail", a(this), x[A], E);
                } else {
                  b("onValidateSuccess", a(this), x[A]);
                }
              }
            }
            var y = b("onAfterElementValidation", a(this), E);
          }
          if (!o && y !== false && a(this).data("checked.bV")) {
            var v = a(this).is("input:checkbox,input:radio") ? 1 : 0;
            if (E.length) {
              if (y !== 0) {
                h(a(this), E);
              }
              if (!v) {
                a(this).removeClass(i.classNamePrefix + i.validClass);
                if (i.errorClass) {
                  a(this).addClass(i.classNamePrefix + i.errorClass);
                }
              }
              if (i.errorValidateOn) {
                if (i.validateOn) {
                  a(this).unbind(i.validateOn + ".bV");
                }
                var H =
                  v || a(this).is("select,input:file")
                    ? "change"
                    : i.errorValidateOn;
                if (v) {
                  var G = a(this).is("input:checkbox")
                    ? a('input:checkbox[name="' + a(this).attr("name") + '"]')
                    : a('input:radio[name="' + a(this).attr("name") + '"]');
                  a(G).unbind(".bVerror");
                  a(G).bind(
                    "change.bVerror",
                    { bVInstance: l, groupLeader: a(this) },
                    function(J) {
                      J.data.bVInstance.validate(false, J.data.groupLeader);
                    }
                  );
                } else {
                  a(this).unbind(".bVerror");
                  a(this).bind(H + ".bVerror", { bVInstance: l }, function(J) {
                    J.data.bVInstance.validate(false, a(this));
                  });
                }
              }
              if (i.singleError) {
                return false;
              }
            } else {
              if (y !== 0) {
                g(a(this));
              }
              if (!v) {
                a(this).removeClass(i.classNamePrefix + i.errorClass);
                if (i.validClass) {
                  a(this).addClass(i.classNamePrefix + i.validClass);
                }
              }
              if (i.validateOn) {
                a(this).unbind(i.validateOn + ".bV");
                j(a(this));
              }
              a(this).data("checked.bV", 0);
            }
          }
        });
      }
      b("onAfterAllValidations", r, p);
      if (
        k &&
        !s &&
        (a(window).scrollTop() > k ||
          a(window).scrollTop() + a(window).height() < k)
      ) {
        var q = navigator.userAgent.toLowerCase();
        a(
          q.indexOf("chrome") > -1 || q.indexOf("safari") > -1 ? "body" : "html"
        ).animate({ scrollTop: k - 10 }, { duration: "slow" });
      }
      return p;
    };
    this.getOptions = function() {
      return i;
    };
    this.getActions = function() {
      return f;
    };
    this.isValid = function(o) {
      return this.validate(true, o);
    };
    this.removeErrMsg = function(o) {
      g(o);
    };
    this.getInputs = function() {
      return c(m);
    };
    this.bindValidateOn = function(o) {
      j(o);
    };
    this.reset = function() {
      elements = c(m);
      if (i.validateOn) {
        j(elements);
      }
      elements.each(function() {
        g(a(this));
        a(this).unbind(".bVerror");
        a(this).removeClass(i.classNamePrefix + i.errorClass);
        a(this).removeClass(i.classNamePrefix + i.validClass);
      });
    };
    this.destroy = function() {
      if (m.is("form")) {
        m.unbind(".bV");
      }
      this.reset();
      m.removeData("bValidator");
    };
  };
})(jQuery);
