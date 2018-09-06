! function($) {
    "use strict";
    var Typeahead = function(element, options) {
        this.$element = $(element), this.options = $.extend({}, $.fn.typeahead
                .defaults, options), this.matcher = this.options.matcher ||
            this.matcher, this.sorter = this.options.sorter || this.sorter,
            this.select = this.options.select || this.select, this.autoSelect =
            "boolean" == typeof this.options.autoSelect ? this.options.autoSelect :
            !0, this.highlighter = this.options.highlighter || this.highlighter,
            this.updater = this.options.updater || this.updater, this.source =
            this.options.source, this.$menu = $(this.options.menu), this.shown = !
            1, this.listen(), this.showHintOnFocus = "boolean" == typeof this
            .options.showHintOnFocus ? this.options.showHintOnFocus : !1
    };
    Typeahead.prototype = {
        constructor: Typeahead,
        select: function() {
            var val = this.$menu.find(".active").data("value");
            return (this.autoSelect || val) && this.$element.val(this.updater(
                val)).change(), this.hide()
        },
        updater: function(item) {
            return item
        },
        setSource: function(source) {
            this.source = source
        },
        show: function() {
            var scrollHeight, pos = $.extend({}, this.$element.position(), {
                height: this.$element[0].offsetHeight
            });
            return scrollHeight = "function" == typeof this.options.scrollHeight ?
                this.options.scrollHeight.call() : this.options.scrollHeight,
                this.$menu.insertAfter(this.$element).css({
                    top: pos.top + pos.height + scrollHeight,
                    left: pos.left
                }).show(), this.shown = !0, this
        },
        hide: function() {
            return this.$menu.hide(), this.shown = !1, this
        },
        lookup: function(query) {
            var items;
            return this.query = "undefined" != typeof query && null !==
                query ? query : this.$element.val() || "", this.query.length <
                this.options.minLength ? this.shown ? this.hide() :
                this : (items = $.isFunction(this.source) ? this.source(
                        this.query, $.proxy(this.process, this)) : this
                    .source, items ? this.process(items) : this)
        },
        process: function(items) {
            var that = this;
            return items = $.grep(items, function(item) {
                    return that.matcher(item)
                }), items = this.sorter(items), items.length ? "all" ==
                this.options.items && !this.$element.val() ? this.render(
                    items).show() : this.render(items.slice(0, this.options
                    .items)).show() : this.shown ? this.hide() : this
        },
        matcher: function(item) {
            return ~item.toLowerCase().indexOf(this.query.toLowerCase())
        },
        sorter: function(items) {
            for (var item, beginswith = [], caseSensitive = [],
                caseInsensitive = []; item = items.shift();) item.toLowerCase()
                .indexOf(this.query.toLowerCase()) ? ~item.indexOf(this
                    .query) ? caseSensitive.push(item) :
                caseInsensitive.push(item) : beginswith.push(item);
            return beginswith.concat(caseSensitive, caseInsensitive)
        },
        highlighter: function(item) {
            var query = this.query.replace(
                /[\-\[\]{}()*+?.,\\\^$|#\s]/g, "\\$&");
            return item.replace(new RegExp("(" + query + ")", "ig"),
                function($1, match) {
                    return "<strong>" + match + "</strong>"
                })
        },
        render: function(items) {
            var that = this;
            return items = $(items).map(function(i, item) {
                    return i = $(that.options.item).data("value",
                        item), i.find("a").html(that.highlighter(
                        item)), i[0]
                }), this.autoSelect && items.first().addClass("active"),
                this.$menu.html(items), this
        },
        next: function() {
            var active = this.$menu.find(".active").removeClass(
                    "active"),
                next = active.next();
            next.length || (next = $(this.$menu.find("li")[0])), next.addClass(
                "active")
        },
        prev: function() {
            var active = this.$menu.find(".active").removeClass(
                    "active"),
                prev = active.prev();
            prev.length || (prev = this.$menu.find("li").last()), prev.addClass(
                "active")
        },
        listen: function() {
            this.$element.on("focus", $.proxy(this.focus, this)).on(
                    "blur", $.proxy(this.blur, this)).on("keypress", $.proxy(
                    this.keypress, this)).on("keyup", $.proxy(this.keyup,
                    this)), this.eventSupported("keydown") && this.$element
                .on("keydown", $.proxy(this.keydown, this)), this.$menu
                .on("click", $.proxy(this.click, this)).on("mouseenter",
                    "li", $.proxy(this.mouseenter, this)).on(
                    "mouseleave", "li", $.proxy(this.mouseleave, this))
        },
        destroy: function() {
            this.$element.data("typeahead", null), this.$element.off(
                    "focus").off("blur").off("keypress").off("keyup"),
                this.eventSupported("keydown") && this.$element.off(
                    "keydown"), this.$menu.remove()
        },
        eventSupported: function(eventName) {
            var isSupported = eventName in this.$element;
            return isSupported || (this.$element.setAttribute(eventName,
                    "return;"), isSupported = "function" == typeof this
                .$element[eventName]), isSupported
        },
        move: function(e) {
            if (this.shown) {
                switch (e.keyCode) {
                    case 9:
                    case 13:
                    case 27:
                        e.preventDefault();
                        break;
                    case 38:
                        e.preventDefault(), this.prev();
                        break;
                    case 40:
                        e.preventDefault(), this.next()
                }
                e.stopPropagation()
            }
        },
        keydown: function(e) {
            this.suppressKeyPressRepeat = ~$.inArray(e.keyCode, [40, 38,
                    9, 13, 27
                ]), this.shown || 40 != e.keyCode ? this.move(e) : this
                .lookup("")
        },
        keypress: function(e) {
            this.suppressKeyPressRepeat || this.move(e)
        },
        keyup: function(e) {
            switch (e.keyCode) {
                case 40:
                case 38:
                case 16:
                case 17:
                case 18:
                    break;
                case 9:
                case 13:
                    if (!this.shown) return;
                    this.select();
                    break;
                case 27:
                    if (!this.shown) return;
                    this.hide();
                    break;
                default:
                    this.lookup()
            }
            e.stopPropagation(), e.preventDefault()
        },
        focus: function() {
            this.focused || (this.focused = !0, (0 === this.options.minLength &&
                !this.$element.val() || this.options.showHintOnFocus
            ) && this.lookup())
        },
        blur: function() {
            this.focused = !1, !this.mousedover && this.shown && this.hide()
        },
        click: function(e) {
            e.stopPropagation(), e.preventDefault(), this.select()
              //  ,this.$element.focus()
        },
        mouseenter: function(e) {
            this.mousedover = !0, this.$menu.find(".active").removeClass(
                "active"), $(e.currentTarget).addClass("active")
        },
        mouseleave: function() {
            this.mousedover = !1, !this.focused && this.shown && this.hide()
        }
    };
    var old = $.fn.typeahead;
    $.fn.typeahead = function(option) {
            var arg = arguments;
            return this.each(function() {
                var $this = $(this),
                    data = $this.data("typeahead"),
                    options = "object" == typeof option && option;
                data || $this.data("typeahead", data = new Typeahead(
                    this, options)), "string" == typeof option && (
                    arg.length > 1 ? data[option].apply(data, Array
                        .prototype.slice.call(arg, 1)) : data[
                        option]())
            })
        }, $.fn.typeahead.defaults = {
            source: [],
            
            menu: '<ul class="typeahead dropdown-menu"></ul>',
            item: '<li><a href="#"></a></li>',
            minLength: 1,
            scrollHeight: 0,
            autoSelect: !0
        }, $.fn.typeahead.Constructor = Typeahead, $.fn.typeahead.noConflict =
        function() {
            return $.fn.typeahead = old, this
        }, $(document).on("focus.typeahead.data-api",
            '[data-provide="typeahead"]', function() {
                var $this = $(this);
                $this.data("typeahead") || $this.typeahead($this.data())
            })
}(window.jQuery);