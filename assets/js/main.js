$(window).on("load", function () {
	/*_____ Toggle _____*/
	$(document).on("click", ".toggle", function () {
		$(".toggle").toggleClass("active");
		$("html").toggleClass("flow");
		$("#nav").toggleClass("active");
	});
	$(document).on("click", ".toggle.active", function () {
		$(".toggle").removeClass("active");
		$("html").removeClass("flow");
		$("#nav").removeClass("active");
		$("#nav > ul > li.drop").removeClass("active");
	});

	/*_____ Drop Down _____*/
	$(document).on("click", ".drop_btn", function (e) {
		e.stopPropagation();
		if ($(this).parents(".drop_cnt:first").hasClass("active")) $(this).parents(".drop_cnt:first").find(".drop_cnt:first").addClass("active");
		else {
			$(".drop_cnt").not($(this).parent().children(".drop_cnt")).removeClass("active");
			$(this).parents(".drop_down:first").find(".drop_cnt:first").toggleClass("active");
		}
	});
	$(document).on("click", ".drop_cnt", function (e) {
		e.stopPropagation();
	});
	$(document).on("click", function () {
		$(".drop_cnt").removeClass("active");
	});

	/*_____ Upload Blk _____*/
	$(document).on("click", ".upload_blk > button", function () {
		$(this).parent().children("input[type='file']").trigger("click");
	});
	$(document).on("change", "input[type='file']", function () {
		let file = $(this).val();
		if (this.files.length > 0) {
			$(this).parent(".upload_blk").children("button").text(file);
		} else {
			$(this).parent(".upload_blk").children("button").text("Choose File");
		}
	});

	/*_____ Popup _____*/
	$(document).on("click", ".popup", function (e) {
		if ($(e.target).closest(".popup ._inner, .popup .inside").length === 0) {
			$(".popup").fadeOut("3000");
			$("html").removeClass("flow");
			$("#vid_blk > iframe, #vid_blk > video").attr("src", "");
		}
	});
	$(document).on("click", ".popup .x_btn", function () {
		$(".popup").fadeOut();
		$("html").removeClass("flow");
		$("#vid_blk > iframe, #vid_blk > video").attr("src", "");
	});
	$(document).keydown(function (e) {
		if (e.keyCode == 27) $(".popup .x_btn").click();
	});
	$(document).on("click", ".pop_btn", function (e) {
		e.target;
		e.relatedTarget;
		var popUp = $(this).attr("data-popup");
		$("html").addClass("flow");
		$(".popup[data-popup= " + popUp + "]").fadeIn();
		$("#slick-restock").slick("setPosition");
	});
	$(document).on("click", ".pop_btn[data-src]", function () {
		var src = $(this).attr("data-src");
		$("#vid_blk > iframe, #vid_blk > video").attr("src", src);
	});

	/*_____ Form Block _____*/
	$(document).on("click", ".form_blk.pass_blk > i", function () {
		if ($(this).hasClass("icon-eye")) {
			$(this).addClass("icon-eye-slash");
			$(this).removeClass("icon-eye");
			$(this).parent().find(".input").attr("type", "text");
		} else {
			$(this).addClass("icon-eye");
			$(this).removeClass("icon-eye-slash");
			$(this).parent().find(".input").attr("type", "password");
		}
	});

	/*_____ FAQ's _____*/
	$(document).on("click", ".faq_blk > h5", function () {
		$(this).parents(".faq_lst").find(".faq_blk").not($(this).parent().toggleClass("active")).removeClass("active");
		$(this).parents(".faq_lst").find(".faq_blk > .txt").not($(this).parent().children(".txt").slideToggle()).slideUp();
	});
	// $(".faq_lst > .faq_blk:nth-child(1)").addClass("active");

	/*_____ Run Button _____*/
	$(document).on("click", ".run_btn", function (event) {
		if (this.hash !== "") {
			event.preventDefault();
			var hash = this.hash;
			// header = $("header").height();
			$("html, body").animate(
				{
					// scrollTop: $(hash).offset().top - header,
					scrollTop: $(hash).offset().top,
				},
				10
			);
		}
	});

	/*_____ HTML Font _____*/
	w = $(window).width();
	xl = 1920;
	md = 1280;
	ws = (w / 1920) * 10;
	if (w >= md) {
		$("html").css("font-size", ws + "px");
	}
	$(window).on("resize", function () {
		w = $(window).width();
		xl = 1920;
		md = 1280;
		ws = (w / 1920) * 10;
		if (w >= md) {
			$("html").css("font-size", ws + "px");
		}
	});

	/*_____ Tab List _____*/
	$(".tab_list > li a").on("shown.bs.tab", function (e) {
		e.target;
		e.relatedTarget;
		$(".slick-recommend").slick("setPosition");
		$("#slick-image").slick("setPosition");
	});

	/*_____ Home Banner _____*/
	$(document).on("click", "#banner .dot_btn", function () {
		if ($(this).hasClass("active")) {
			$(this).removeClass("active");
			$("#banner").removeClass("active");
		} else {
			$(this).addClass("active");
			$("#banner").addClass("active");
		}
	});

	/*_____ Like Button _____*/
	$(document).on("click", "button.like", function () {
		$(this).toggleClass("liked");
	});

	/*_____ Filter _____*/
	$(document).on("click", "#filter_btn", function () {
		$("#all_categories, #search").toggleClass("hide_filter");
	});
	$(document).on("click", "#filter .in_blk h6.drop", function () {
		$(this).toggleClass("active");
		$(this).parent().children(".sub").slideToggle();
	});
	$(document).on("click", "#filter .in_blk label.drop > input", function () {
		$(this).parent().toggleClass("active");
		$(this).parents("li").children(".sub").slideToggle();
	});

	var lst = 0;
	$(window).scroll(function () {
		let st = $(this).scrollTop();
		let hh = $("header").height();
		let hh_min = $("header > .strip").height();
		if (st > lst && st > hh) {
			$("header").addClass("fix");
			$("header").addClass("back");
		} else {
			$("header").removeClass("fix");
		}
		if (st <= hh_min) {
			$("header").removeClass("back");
		}
		// if (st < lst && st < hh) {
		// 	$("header").addClass("back");
		// } else {
		// 	$("header").removeClass("back");
		// }
		lst = st;
	});

	/*_____ Menu Button _____*/
	$(document).on("click", "#nav > ul > li.drop > a", function () {
		if ($(this).parent("li").hasClass("active") == !true) {
			$("html").addClass("flow");
			$("#nav > ul > li.drop").removeClass("active");
			$(this).parent("li").addClass("active");
			$("#user_btn").removeClass("active");
			$("#logon_menu").removeClass("active");
		} else {
			$("html").removeClass("flow");
			$("#nav > ul > li.drop").removeClass("active");
			$(this).parent("li").removeClass("active");
		}
	});
	$(document).on("click", "div[id^='sub_menu'] > .back_btn", function () {
		$("#nav > ul > li.drop").removeClass("active");
	});
	$(document).on("click", "#user_btn", function () {
		if ($(this).hasClass("active") == !true) {
			$(this).addClass("active");
			$("html").addClass("flow");
			$("#logon_menu").addClass("active");
			$("#nav > ul > li.drop").removeClass("active");
		} else {
			$(this).removeClass("active");
			$("html").removeClass("flow");
			$("#logon_menu").removeClass("active");
		}
	});

	/*_____ Qty Button _____*/
	// This button will increment the value
	$(document).on("click", ".qty_btn .plus", function (e) {
		e.preventDefault();
		var parnt = $(this).parent().children(".qty");
		var currentVal = parnt.val();
		if (!isNaN(currentVal)) {
			parnt.val(parseInt(currentVal) + 1);
		} else {
			parnt.val(0);
		}
	});
	// This button will decrement the value till 0
	$(document).on("click", ".qty_btn .minus", function (e) {
		e.preventDefault();
		var parnt = $(this).parent().children(".qty");
		var currentVal = parnt.val();
		if (!isNaN(currentVal) && currentVal > 0) {
			parnt.val(parseInt(currentVal) - 1);
		} else {
			parnt.val(0);
		}
	});

	/*_____ Cart Discount _____*/
	$(document).on("click", "#discount_btn", function () {
		$(this).hide();
		$("#cart .discount_blk").addClass("active");
	});

	/*_____ Accord Block _____*/
	$(document).on("click", ".accord_blk .title", function () {
		$(this).parent().toggleClass("active");
		$(this).parent().find(".data, .back").slideToggle();
	});

	/*_____ Clip Text _____*/
	$(document).on("click", ".clip_text .see_btn", function () {
		$(this).parent().toggleClass("view");
	});

	/*_____ Cart Button _____*/
	$(document).on("click", "#cart #summary_btn", function () {
		$(this).toggleClass("show");
		$("#cart #summary_blk").slideToggle();
	});

	/*_____ Page Loader _____*/
	$(".loader").delay(500).fadeOut();
	$("#pageloader").delay(700).fadeOut("slow");

	/*
	|----------------------------------------------------------------------
	|       OTHER JAVASCRIPT
	|----------------------------------------------------------------------
	*/

	$("#slick-explore, #slick-stories, #slick-products").slick({
		arrows: true,
		infinite: false,
		speed: 300,
		centerPadding: 0,
		slidesToShow: 4,
		slidesToScroll: 1,
		swipeToSlide: true,
		responsive: [
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 3,
				},
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 2,
				},
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
				},
			},
		],
	});
	$("#slick-press").slick({
		arrows: true,
		infinite: false,
		speed: 300,
		centerPadding: 0,
		slidesToShow: 3,
		slidesToScroll: 1,
		swipeToSlide: true,
		responsive: [
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 2,
				},
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 1,
				},
			},
		],
	});
	$(".slick-recommend, #slick-ambassador").slick({
		arrows: true,
		infinite: false,
		speed: 300,
		centerPadding: 0,
		slidesToShow: 6,
		slidesToScroll: 1,
		swipeToSlide: true,
		responsive: [
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 5,
				},
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 4,
				},
			},
			{
				breakpoint: 580,
				settings: {
					slidesToShow: 3,
				},
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 2,
				},
			},
		],
	});
	$(".slick-categories").slick({
		arrows: true,
		infinite: false,
		speed: 300,
		centerPadding: 0,
		slidesToShow: 4,
		slidesToScroll: 1,
		swipeToSlide: true,
		responsive: [
			{
				breakpoint: 1025,
				settings: {
					slidesToShow: 3,
				},
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 2,
				},
			},
			{
				breakpoint: 580,
				settings: {
					slidesToShow: 1,
				},
			},
		],
	});
	$("#slick-plane").slick({
		arrows: true,
		infinite: true,
		speed: 300,
		slidesToShow: 7,
		slidesToScroll: 1,
		swipeToSlide: true,
		responsive: [
			{
				breakpoint: 1025,
				settings: {
					slidesToShow: 4,
				},
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 6,
				},
			},
			{
				breakpoint: 769,
				settings: {
					slidesToShow: 5,
				},
			},
			{
				breakpoint: 680,
				settings: {
					slidesToShow: 4,
				},
			},
			{
				breakpoint: 580,
				settings: {
					slidesToShow: 3,
				},
			},
		],
	});
	$("#slick-shop_categories, #slick-shop_occasion").slick({
		arrows: true,
		infinite: false,
		speed: 300,
		centerPadding: 0,
		slidesToShow: 3,
		slidesToScroll: 1,
		swipeToSlide: true,
		responsive: [
			{
				breakpoint: 1025,
				settings: {
					slidesToShow: 2,
				},
			},
			{
				breakpoint: 580,
				settings: {
					slidesToShow: 1,
				},
			},
		],
	});
	$("#slick-restock").slick({
		arrows: true,
		infinite: false,
		speed: 300,
		centerPadding: 0,
		slidesToShow: 3,
		slidesToScroll: 1,
		swipeToSlide: true,
		responsive: [
			{
				breakpoint: 1025,
				settings: {
					slidesToShow: 2,
				},
			},
			{
				breakpoint: 580,
				settings: {
					slidesToShow: 1,
				},
			},
		],
	});
	$("#slick-image").slick({
		dots: true,
		arrows: false,
		infinite: true,
		speed: 300,
		centerPadding: 0,
		slidesToShow: 1,
		slidesToScroll: 1,
		swipeToSlide: true,
	});
	$("#slick-detail").slick({
		dots: false,
		arrows: false,
		infinite: true,
		fade: true,
		draggable: false,
		speed: 300,
		centerPadding: 0,
		slidesToShow: 1,
		slidesToScroll: 1,
		swipeToSlide: false,
		asNavFor: "#slick-detail-thumb",
	});
	$("#slick-detail-thumb").slick({
		dots: false,
		arrows: false,
		infinite: true,
		speed: 300,
		centerPadding: 0,
		slidesToShow: 10,
		slidesToScroll: 1,
		swipeToSlide: true,
		focusOnSelect: true,
		asNavFor: "#slick-detail",
		responsive: [
			{
				breakpoint: 1025,
				settings: {
					slidesToShow: 9,
				},
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 10,
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 8,
				},
			},
			{
				breakpoint: 580,
				settings: {
					slidesToShow: 7,
				},
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 6,
				},
			},
		],
	});
	$("#slick-plan_explore").slick({
		dots: false,
		arrows: true,
		infinite: false,
		speed: 300,
		centerPadding: 0,
		slidesToShow: 3,
		slidesToScroll: 1,
		swipeToSlide: true,
		responsive: [
			{
				breakpoint: 1025,
				settings: {
					slidesToShow: 2,
				},
			},
			{
				breakpoint: 580,
				settings: {
					slidesToShow: 1,
				},
			},
		],
	});
	$("#slick-country").slick({
		dots: false,
		arrows: true,
		infinite: true,
		speed: 300,
		centerPadding: 0,
		slidesToShow: 1,
		slidesToScroll: 1,
		swipeToSlide: true,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					dots: true,
					arrows: false,
				},
			},
		],
	});
	$(".slick-gifts").slick({
		arrows: true,
		infinite: false,
		speed: 300,
		centerPadding: 0,
		slidesToShow: 6,
		slidesToScroll: 1,
		swipeToSlide: true,
		responsive: [
			{
				breakpoint: 1025,
				settings: {
					slidesToShow: 5,
				},
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 4,
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 3,
				},
			},
			{
				breakpoint: 580,
				settings: {
					slidesToShow: 2,
				},
			},
		],
	});
	$(".slick-gifts_paid").slick({
		arrows: true,
		infinite: false,
		speed: 300,
		centerPadding: 0,
		slidesToShow: 2,
		slidesToScroll: 1,
		swipeToSlide: true,
		responsive: [
			{
				breakpoint: 580,
				settings: {
					slidesToShow: 1,
				},
			},
		],
	});
	$("#slick-order").slick({
		arrows: true,
		infinite: true,
		speed: 300,
		centerPadding: 0,
		slidesToShow: 6,
		slidesToScroll: 1,
		swipeToSlide: true,
		responsive: [
			{
				breakpoint: 580,
				settings: {
					slidesToShow: 4,
				},
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 3,
				},
			},
		],
	});
	/*_____ RateYo _____*/
	$(".rateYo").rateYo({
		rating: 4.0,
		fullStar: true,
		readOnly: true,
		normalFill: "#bcbcbc",
		ratedFill: "#db8080",
		starWidth: "1.6rem",
		spacing: "0.2rem",
	});
	/*_____ Datepicker _____*/
	$(".datepicker").datepicker({
		// multidate: true,
		format: "mm-dd-yyyy",
		// todayHighlight: true,
		// multidateSeparator: ",  ",
	});
	/*tns({
		container: ".tns-plane",
		loop: false,
		autoWidth: true,
		// items: 10,
		speed: 400,
		mouseDrag: true,
		lazyload: true,
	});*/
});
