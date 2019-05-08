(function ($) {

	if ($('.home-baner__main .home-baner__main-reverse-block').length < 2) {
		$('.custom-arrow-line-1').css({
			'display': 'none'
		});
	}
	else {
		$('.custom-arrow-line-1').css({
			'display': 'flex'
		});
	};






	$('.quotes__main').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		autoplay: false,
		autoplaySpeed: 3000,
		nextArrow: $(".quotes .custom-arrow-right"),
		prevArrow: $(".quotes .custom-arrow-left"),
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
					autoplay: false,
					autoplaySpeed: 3000
				}
			}
		]
	});

	if ($('.quotes__main .slick-slide').length < 2) {
		$('.custom-arrow-line-2').css({
			'display': 'none'
		});
	}
	else {
		$('.custom-arrow-line-2').css({
			'display': 'flex'
		});
	}

	$('.home-baner__main').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		autoplay: false,
		autoplaySpeed: 3000,
		nextArrow: $(".home-baner .custom-arrow-right"),
		prevArrow: $(".home-baner .custom-arrow-left"),
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
					autoplay: false,
					autoplaySpeed: 3000
				}
			}
		]
	});

	$('.certificate-section__main').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		autoplay: false,
		autoplaySpeed: 3000,
		nextArrow: $(".certificate-section .custom-arrow-right"),
		prevArrow: $(".certificate-section .custom-arrow-left"),
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
					autoplay: false,
					autoplaySpeed: 3000
				}
			}
		]
	});


	if ($('.certificate-section__main .slick-slide').length < 2) {
		$('.custom-arrow-line-3').css({
			'display': 'none'
		});
	}
	else {
		$('.custom-arrow-line-3').css({
			'display': 'flex'
		});
	};



	$('.apostyle-sertificate__main').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		autoplay: false,
		autoplaySpeed: 3000,
		nextArrow: $(".apostyle-sertificate .custom-arrow-right"),
		prevArrow: $(".apostyle-sertificate .custom-arrow-left"),
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
					autoplay: false,
					autoplaySpeed: 3000
				}
			}
		]
	});


	if ($('.apostyle-sertificate__main .slick-slide').length < 2) {
		$('.custom-arrow-line-7').css({
			'display': 'none'
		});
	}
	else {
		$('.custom-arrow-line-7').css({
			'display': 'flex'
		});
	};

	$('.kids-courses-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		autoplay: false,
		autoplaySpeed: 3000,
		nextArrow: $(".alphabet-specialists .custom-arrow-right"),
		prevArrow: $(".alphabet-specialists .custom-arrow-left"),
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
					autoplay: false,
					autoplaySpeed: 3000
				}
			}
		]
	});

	if ($('.kids-courses-slider .kids-courses-slide').length < 2) {
		$('.custom-arrow-line-6').css({
			'display': 'none'
		});
	}
	else {
		$('.custom-arrow-line-6').css({
			'display': 'flex'
		});
	};

	$('.classes-going-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		autoplay: false,
		autoplaySpeed: 3000,
		nextArrow: $(".classes-going .custom-arrow-right"),
		prevArrow: $(".classes-going .custom-arrow-left"),
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
					autoplay: false,
					autoplaySpeed: 3000
				}
			}
		]
	});

	if ($('.classes-going-slider .slick-slide').length < 2) {
		$('.custom-arrow-line-4').css({
			'display': 'none'
		});
	}
	else {
		$('.custom-arrow-line-4').css({
			'display': 'flex'
		});
	};



	$('.about-us-video-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		autoplay: false,
		autoplaySpeed: 3000,
		nextArrow: $(".about-us-video-block .custom-arrow-right"),
		prevArrow: $(".about-us-video-block .custom-arrow-left"),
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
					autoplay: false,
					autoplaySpeed: 3000
				}
			}
		]
	});
	if ($('.about-us-video-slider .slick-slide').length < 2) {
		$('.custom-arrow-line-5').css({
			'display': 'none'
		});
	}
	else {
		$('.custom-arrow-line-5').css({
			'display': 'flex'
		});
	};

	$('select').niceSelect();
	AOS.init();
})(jQuery);