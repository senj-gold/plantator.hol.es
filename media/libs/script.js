$(window).load(function(){
	$('.eq-height').syncHeight({updateOnResize: true});
	/*
	$(window).resize(function(){
		if($(window).width() < 500){
			$('.eq-height').unSyncHeight();
		}
	});
	*/
});
$(document).ready(function() {

	
	function getButtonGroup(button, type) {
		if (!button.parents().is(".button-group")){
			return button;
		} else {
			var buttons = button.parents(".button-group").first().find(type).not(button.parents(".button-group").first().find(".button-group").find(type));
			return buttons;
		}
	}
	function markIco(buttons) {
		buttons.each(function(){
			if ($(this).find(".mark-ico").is(".mark-ico") && $(this).find(".mark-ico").length == 2) {
				if ($(this).hasClass("active")) {
					$(this).find(".mark-ico").first().hide();
					$(this).find(".mark-ico").last().show();
				} else {
					$(this).find(".mark-ico").first().show();
					$(this).find(".mark-ico").last().hide();						
				}
			}
		});
		return false;
	}
	
	$(".dropdown").click(function() {
		var buttons = getButtonGroup($(this), ".dropdown");

		if ($(this).hasClass("active")) {
			$(this).removeClass("active");
			$(this).parent().children().not($(this)).slideUp("fast");
		} else {
			buttons.removeClass("active");
			buttons.parent().children().not(buttons).slideUp("fast");
			$(this).addClass("active");
			$(this).parent().children().not($(this)).slideDown("fast");
		}
		return false;
	});
	
	$(".switcher").click(function(){
		var buttons = getButtonGroup($(this), ".switcher");
		var slides = $(this).parents(".button-group").first().parent().children().not(".button-group").children();
		if (!$(this).hasClass("active")) {
			buttons.removeClass("active");
			$(this).addClass("active");
			slides.hide().eq(buttons.index($(this))).fadeIn(500);
			markIco(buttons);
		}
		return false;
	});
	
	/*
	$("body, div").on("click", ".popup .toggler:first-child", function(e){
		
		
		
		$("body, div").on("click", "*[id^='popup']>*", function(e){
			e.stopPropagation();
		});	
		return false;
	});
	*/
	
	
	$("body, div").on("click", ".popup", function(e){
		if ($(this).attr("for")) {
			var popup = $("#"+$(this).attr("for"));
		} else {
			var popupId = "popup" + Math.floor(Math.random()*10000000000);
			$(this).attr("for", popupId);
			var popup = $(this).next().attr("id", popupId).detach();
			$("body").append(popup);
		}
		
		popup.children().css("margin-top", $(window).scrollTop()+"px");
		popup.fadeIn(200);
		
		var popup_height = $(window).scrollTop() + popup.children().height();
		if (popup_height < $("body").height()) {
			popup.height($("body").height());
		} else {
			popup.height(popup_height);
		}
		
		$("body, div").on("click", "*[id^='popup']>*", function(e){
			e.stopPropagation();
		});
		return false;
	});
	$("body, div").on("click", ".popup-close", function(e){
		var popup = $(this);
		if (popup.parents().is("*[id^='popup']")) {
			popup = popup.parents("*[id^='popup']");
		}
		popup.fadeOut(200);
		
		return false;
	});
	$("body, div").on("click", ".ajax_submit", function(event){
		var containerId = $(this).parents(".ajax_container").first().attr("id");
		var url = $(this).attr("href");
		if (!url) {
			url = $(this).parent().children(".ajax_url").val();
		}
		var params = 0;
		if ($(this).parents().is("form")) {
			url = $(this).parents('form').first().attr('action');
			params = $(this).parents('form').first().serialize();
		}
		$.post(	
			url,
			params,
			function(data) {
				var newdata = $(data).find("#"+containerId).html();
				$("#"+containerId).html(newdata);
				var ret = $("#"+containerId);
				if (ret.find(".ajax_return").hasClass("ajax_return")) {
					ret = ret.find(".ajax_return").first();
				}
				if ($(window).scrollTop() > ret.offset().top) {
					$("html, body").animate({scrollTop: ret.offset().top}, 'slow');
				}
			}
		);
		return false;
	});
	
	$(window).scroll(function(){
		if ($(window).scrollTop() > 100) {
			if ($("#scroll-top").is(":hidden")) {
				$("#scroll-top").show('slow');
			}
		} else {
			if ($("#scroll-top").is(":visible")) {
				$("#scroll-top").hide('slow');
			}
		}
	});
	$("body, div").on("click", "#scroll-top", function(){
		var button = $(this);
		button.addClass("active");
		setTimeout(function(){button.removeClass("active");}, 150);
		$("html, body").animate({scrollTop: "0px"}, 'slow');
		return false;
	});
	$("body, div").on("click", ".scroll-down", function(){
		$("html, body").animate({scrollTop: $($(this).attr("href")).offset().top}, 'slow');
		return false;
	});
	
	
	
	
	
	 $('.input_mask_int').mask('9?99');
	 $('.input_mask_date').mask('99.99.9999');
	 $('.input_mask_time').mask('99:99');
	
	//input_counter
	$("body, div").on("click", ".input_counter>*", function(){
		var i = $(this).parents(".input_container").first().find("input").first().val();
		if (i) {
			i = parseInt(i);
		} else {
			i = 0;
		}
		if ($(this).is(':first-child')) {
			i = i + 1;
		} else {
			i = i - 1;
		}
		if (i<1) i = 1;
		
		$(this).parents(".input_container").first().find("input").first().val(i);
		return false;
	});
	
	//input_dropdown
	$("body, div").on("click", ".input_dropdown", function(){
		$(this).parents(".input_container").first().find(".input_options").css("min-width", $(this).parents(".input_container").first().outerWidth()).slideToggle("fast");
		return false;
	});
	$("body, div").on("click", ".input_options>*", function(e){
		$(this).parents(".input_options").first().children().removeClass("active");
		$(this).addClass("active");
		$(this).parents(".input_container").first().find("input").first().val($(this).children().first().html());
		$(this).parents(".input_options").first().slideUp();
		return false;
	});
	
	//Reservation input process
	$("body, div").on("click", ".reservation_input", function() {
		$(this).css("background-color", "green");
	});
	
	// Color theme switch
	$(".color_switcher .tweed").click(function() {
		$(".css_taker").empty();
		$(".css_taker").append("<link rel='stylesheet' type='text/css' href='/bitrix/templates/intels_restaurant_tweed/themes/tweed/colors.css'>");
		$(".slider_container").attr("style", 'background: url("/media/img/slider_back.jpg") no-repeat center;');
	});
	$(".color_switcher .bw").click(function() {
		$(".css_taker").empty();
		$(".css_taker").append("<link rel='stylesheet' type='text/css' href='/bitrix/templates/intels_restaurant_tweed/themes/bw/colors.css'>");
		$(".slider_container").attr("style", 'background: url("/media/img/slider_back.jpg") no-repeat center;');
	});
	$(".color_switcher .disco").click(function() {
		$(".css_taker").empty();
		$(".css_taker").append("<link rel='stylesheet' type='text/css' href='/bitrix/templates/intels_restaurant_tweed/themes/disco/colors.css'>");
		$(".slider_container").attr("style", 'background: url("/media/img/slider_back.jpg") no-repeat center;');
	});
	$(".color_switcher .fire").click(function() {
		$(".css_taker").empty();
		$(".css_taker").append("<link rel='stylesheet' type='text/css' href='/bitrix/templates/intels_restaurant_tweed/themes/fire/colors.css'>");
		$(".slider_container").attr("style", 'background: url("/media/img/slider_back.jpg") no-repeat center;');
	});
	
});