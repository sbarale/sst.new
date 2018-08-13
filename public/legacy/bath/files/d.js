﻿var CKM = {
	use_iframe: false,
	form_selector: "#ckm_form",
	submit_selector: ":submit",
	init_focus: false,
	error_title: "Error",
	required_error: "This field is required.",
	validation_error: "Please fix all highlighted fields.",
	ajax_timeout: 8000,
	ajax_error: "An error occurred while saving your information. Please check your internet connection and try again.",
	ajax_class: "valid-ajax",
	required_class: "valid-required",
	valid_class: "valid",
	error_class: "error",
	default_value_class: "default",
	submitting: false,
	add_validator: function(id, name, group_names, required){
		$(function(){
			var el = $(":input[name=" + name + "]", CKM.form_selector);
			if (!el.length && group_names) {
				for (var n in group_names)
					$(":input[name=" + group_names[n] + "]", CKM.form_selector).attr("rel", name);
				el = $(":input[rel=" + name + "]", CKM.form_selector);
			}
			el.data("field_id", id);
			if (required) {
				el.addClass(CKM.required_class);
				el.data("error", required);
			} else
				el.addClass(CKM.ajax_class);
		});
	},
	prepop_field: function(field, value, group_names){
		$(function(){
			var el = $(":input[name=" + field + "]", CKM.form_selector);
			if (!el.length && group_names) {
				for (var n in group_names) {
					el = $(":input[name=" + group_names[n] + "]", CKM.form_selector);
					if (el.val().length > 0 && !el.hasClass(CKM.default_value_class))
						break;
					var ml = el.attr("maxlength");
					if (ml && ml - 0 < value.length) {
						el.val(value.substring(0, ml - 0));
						value = value.substring(ml - 0);
					} else
						el.val(value);
				}
			} else if (el.val().length == 0 || el.hasClass(CKM.default_value_class))
				el.val(value);
		});
	},
	format_valid: function(input){
		input.removeClass(CKM.error_class).addClass(CKM.valid_class);
	},
	format_invalid: function(input, err){
		input.removeClass(CKM.valid_class).addClass(CKM.error_class);
	},
	remove_format: function(input){
		input.removeClass(CKM.error_class).removeClass(CKM.valid_class);
	},
	popup_error: function(title, err){
		alert(err ? (title + ": " + err) : title);
	},
	change_page: function(page){
		location.replace(page);
	}
};
if ($.ajaxPrefilter) {
	$.ajaxPrefilter(function(options){
		options.global = true;
	});
}
$().ajaxError(function(e, req, s){
	if (s.url.indexOf("v.ashx") > -1) {
		var field = $("#" + s.url.substring(s.url.indexOf("v.ashx") + 9).split("&")[0], CKM.form_selector);
		field.removeData("changing").removeData("invalid").removeData("valid");
		CKM.remove_format(field);
	} else {
		CKM.submitting = false;
		CKM.popup_error(CKM.ajax_error);
		$(CKM.submit_selector, CKM.form_selector).attr("disabled", false);
	}
});
$(function(){
	$.ajaxSetup({timeout: CKM.ajax_timeout});

	var ckm_form = $(CKM.form_selector);

	$.getScript(ckm_form.attr("action").replace("d.ashx", "js.ashx?o=" + $("input[name=ckm_offer_id]", ckm_form).val()));

	var format_valid = function(input){
		input.removeData("invalid").data("valid", true);
		CKM.format_valid(input);
	};
	var format_invalid = function(input, err){
		input.removeData("valid").data("invalid", true);
		CKM.format_invalid(input, err);
	};
	var remove_format = function(input){
		input.removeData("invalid").removeData("valid");
		CKM.remove_format(input);
	};

	$(":text,:password,textarea", ckm_form).change(function(){
		var me = $(this);
		if ($.trim(me.val()).length == 0 || me.hasClass(CKM.default_value_class)) {
			var group = me.attr("rel");
			if (group) {
				var partial = false;
				me = $(":input[rel=" + group + "]", ckm_form).each(function(i, el){
					if (el.value.length > 0)
						partial = true;
				});
				if (partial || me.hasClass(CKM.required_class))
					format_invalid(me, me.data("error") || CKM.required_error);
				else
					format_valid(me);
			}
			else if (me.hasClass(CKM.required_class))
				format_invalid(me, me.data("error") || CKM.required_error);
			else
				format_valid(me);
		} else if (me.hasClass(CKM.ajax_class)) {
			var val = me.val();
			var group = me.attr("rel");
			if (group) {
				val = "";
				var fin = true;
				me = $(":input[rel=" + group + "]", ckm_form).each(function(i, el){
					if (el.value.length != $(el).attr("maxlength") - 0)
						return (fin = false);
					val += el.value;
				});
				if (!fin) {
					if (CKM.submitting)
						format_invalid(me, me.data("error") || CKM.required_error);
					return;
				}
			}
			me.data("changing", true);
			$.ajax({url: ckm_form.attr("action").replace("d.ashx", "v.ashx"), data: {o: $("input[name=ckm_offer_id]", ckm_form).val(), f: me.data("field_id"), v: val}, dataType: "jsonp", success: function(data){
				me.removeData("changing");
				if (data.success)
					format_valid(me);
				else
					format_invalid(me, data.error);
			}});
		} else
			format_valid(me);
	});
	$("select", ckm_form).change(function(){
		var me = $(this);
		if (me.hasClass(CKM.required_class) && (me.val() == null || me.val() == "" || me.hasClass(CKM.default_value_class)))
			format_invalid(me, me.data("error") || CKM.required_error);
		else
			format_valid(me);
	});
	
	var ifrm;
	var create_iframe = function(){
		var if_id = "if_" + (new Date().getTime());
		ifrm = $('<iframe id="' + if_id + '" name="' + if_id + '" src="javascript:;" style="display:none" />').appendTo(document.body);

		ckm_form.attr("target", if_id);
	};
	if (CKM.use_iframe) {
		create_iframe();

		ckm_form.prepend('<input type="hidden" name="ckm_ifrm" value="1" />');
		
		CKM.on_iframe_load = function(data){
			submit_response(data);
		};
	}

	var submit_response = function(data){
		if (data) {
			if (data.success) {
				if (data.nextEval)
					window.eval(data.nextEval);
				else
					CKM.change_page(data.nextPage);
			} else {
				if (data.error)
					CKM.popup_error(CKM.error_title, data.error);
				else {
					$.each(data.errors, function(i, fe){
						var el = $(":input[name=" + fe[0] + "]", ckm_form);
						if (el.length)
							format_invalid(el, fe[1]);
						else
							format_invalid($(":input[rel=" + fe[0] + "]", ckm_form), fe[1]);
					});
					CKM.popup_error(CKM.error_title, CKM.validation_error);
				}
			}
		} else
			CKM.popup_error(CKM.ajax_error);
			
		$(CKM.submit_selector, ckm_form).attr("disabled", false);
		CKM.submitting = false;
		
		if (CKM.use_iframe) {
			setTimeout(function(){
				ifrm.remove();
				create_iframe();
			}, 100);
		}
	};
	
	ckm_form.submit(function(){
		if (!CKM.submitting) {
			CKM.submitting = true;
			var valid = true, changed = false;
			$(":text,select,:password,textarea", ckm_form).each(function(){
				var me = $(this);
				if (me.data("changing")) {
					changed = true;
				} else if (me.data("invalid")) {
					if (me.hasClass(CKM.required_class) || me.val().length > 0) //allow optional fields retry
						valid = false;
				} else if (!me.data("valid")) {
					me.change();
					changed = true;
				}
			});
			if (!valid) {
				CKM.submitting = false;
				CKM.popup_error(CKM.error_title, CKM.validation_error);
				return false;
			}
			if (changed) {
				var acf = function(){
					$(document).unbind("ajaxStop", acf);
					CKM.submitting = false;
					ckm_form.submit();
				};
				$(document).bind("ajaxStop", acf);
				$.ajax({url: ckm_form.attr("action").replace("d.ashx", "get.ashx"), dataType: "jsonp"});
				return false;
			}

			$(CKM.submit_selector, ckm_form).attr("disabled", true);
			
			if (!CKM.use_iframe) {
				$.ajax({url: ckm_form.attr("action"), data: ckm_form.serialize(), dataType: "jsonp", success: submit_response});
				return false;
			}
		} else
			return false;
	});
	if (CKM.init_focus) {
		$(":input", ckm_form).not(":hidden").each(function(){
			this.focus();
			return false;
		});
	}
});