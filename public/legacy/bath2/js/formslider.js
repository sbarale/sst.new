(function($) {
    //  If there's no jQuery, Unslider can't work, so kill the operation.
    if(!$) return false;

    var Unslider = function() {
        //  Set up our elements
        this.el = null;
        this.items = null;
        this.opts = {
            'history' : true,
            'initialElement' : null
        }

        this.init = function(el, opts) {
            this.el = el;
            this.slider_wrapper = el.children('.slider-wrapper');
            this.items = this.slider_wrapper.children('.slider-slide');
            this.current_slide = null;
            this.target_slide = null;

            //  Check whether we're passing any options in to Unslider
            this.opts = $.extend(this.opts, opts);

            //  Set up the Unslider
            this.setup();

            return this;
        };

        //  Work out what methods need calling
        this.setup = function() {
            //  Set the main element
            this.el.css({
                overflow: 'hidden'
            });
            //  Set the relative widths
            this.slider_wrapper.css({'position': 'relative', 'top' : '', 'left' : '', 'width' : '100%'});
            this.items.css({'width' : '100%'});
            var _this = this;
            $.each(this.items, function(idx, el) {
                $(el).hide();
            });

            if(this.opts.initialElement) {
                this.current_slide = this.opts.initialElement;
            } else {
                this.current_slide = this.items.eq(0);
            }

            //fire this as the slide is being shown
            this.current_slide.show();
            this.current_slide.trigger('formslider-startmove');
        };

        this.move = function(selector_page_to, animation, is_history_entry) {
            animation = typeof animation !== 'undefined' ?  animation : 'right';
            is_history_entry = typeof is_history_entry !== 'undefined' ?  is_history_entry : false;

            if(!this.slider_wrapper.is(':animated')) {
                var _this = this;
                if(selector_page_to == ('#' + _this.current_slide.attr('id'))) {
                    _this.current_slide.css({'width' : '100%'});
                    _this.current_slide.trigger('formslider-startmove');
                } else {
                    var $page_to = $(selector_page_to);
                    if($page_to.length <= 0) {
                        $page_to = this.items.eq(0);
                    }
                    this.target_slide = $page_to;

                    //var current_scroll_top = this.current_slide.scrollTop() + 'px';

                    if(animation === 'left') {
                        this.slider_wrapper.css({'width' : '200%', 'left' : '', 'right' : '100%', 'transition' : ''});
                        this.current_slide.css({'width' : '50%'});
                        this.target_slide.css({'width' : '50%'}).insertBefore(this.current_slide).show();
                    } else {
                        this.slider_wrapper.css({'width' : '200%', 'left' : '0', 'right' : '', 'transition' : ''});
                        this.current_slide.css({'width' : '50%'});
                        this.target_slide.css({'width' : '50%'}).insertAfter(this.current_slide).show();
                    }

                    if(this.opts.history === true && is_history_entry === true) {
                        history.pushState({}, '', selector_page_to);
                    }

                    this.target_slide.trigger('formslider-startmove');

                    if(animation=='left') {
                        this.slider_wrapper.animate({'right' : '0'}, {'duration' : 400, 'complete' : function(data) {
                            _this.slider_wrapper.css({'left' : '0', 'width' : '100%'});
                            _this.current_slide.hide().css({'width' : '100%'});
                            _this.target_slide.css({'width' : '100%'});
                            _this.current_slide = _this.target_slide;
                            _this.current_slide.trigger('formslider-endmove');
                            $('html, body').animate({ scrollTop: 0 }, 'slow');
                        }});
                    } else {
                        this.slider_wrapper.animate({'left' : '-100%'}, {'duration' : 400, 'complete' : function(data) {
                            _this.slider_wrapper.css({'left' : '0', 'width' : '100%'});
                            _this.current_slide.hide().css({'width' : '100%'});
                            _this.target_slide.css({'width' : '100%'});
                            _this.current_slide = _this.target_slide;
                            _this.current_slide.trigger('formslider-endmove');
                            $('html, body').animate({ scrollTop: 0 }, 'fast');
                        }});
                    }
                    /*
                        var myAnimation = function() {
                            if(animation=='left') {
                                //_this.slider_wrapper.css({'transition' : 'all 5s'});
                                _this.slider_wrapper.css({'transition' : 'all 5s', 'right': '0'});
                                return;
                                _this.slider_wrapper.one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(e) {
                                    _this.slider_wrapper.css({'transition' : ''})
                                });
                                return;
                            } else {
                                _this.slider_wrapper.css({'transition' : 'all 0.5s', 'left': '-100%'});
                                _this.slider_wrapper.one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(e) {
                                    _this.slider_wrapper.css({'transition' : ''})
                                    _this.slider_wrapper.css({'left' : '', 'right' : '', 'width' : '100%'});
                                    _this.current_slide.hide().css({'width' : '100%'});
                                    _this.target_slide.css({'width' : '100%'});
                                    _this.current_slide = _this.target_slide;
                                    if($.isFunction(completeFunction)) {
                                        completeFunction();
                                    }
                                });
                            }
                        };
                        //strange bug when setting css in same time as animation, so we timeout it
                        setTimeout(myAnimation, 1);
                    */
                }
            }
        };
    };

    //  Create a jQuery plugin
    $.fn.unslider = function(o) {

        //  Enable multiple-slider support
        return this.each(function(index) {
            //  Cache a copy of $(this)
            var me = $(this);
            var instance = (new Unslider).init(me, o);

            //  Invoke an Unslider instance
            me.data('unslider', instance);
        });
    };
})(window.jQuery);
