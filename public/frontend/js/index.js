$(document).ready(function ($) {

	$('.home-slider').slick({
		lazyLoad: 'ondemand',
		autoplay: true,
		autoplaySpeed: 3000,
		fade: true,
		cssEase:'linear',
		dots: true,
		arrows: false,
		infinite: true
	});
	$('.slick_horizontal').slick({
		autoplay: true,
		autoplaySpeed: 5000,
		dots: false,
		arrows: false,
		speed: 300,
		rows: 1,
		loop: false,
		infinite:false,
		slidesToShow: 4,
		slidesToScroll: 4,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});

	$('.slick_vertical').slick({
		autoplay: true,
		autoplaySpeed: 5000,
		dots: false,
		arrows: false,
		speed: 300,
		rows: 2,
		loop: false,
		infinite:false,
		slidesToShow: 4,
		slidesToScroll: 4,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
			
		]
	});
	
	


});


$(".owltesti .slick-slide").click(function(){ 
	$('.owltesti .slick-slide').removeClass('slick-current');
	$(this).addClass('slick-current');
	var content = $(this).find('.dgwrap').attr('data-text'),
		pill = $('.section_testi .contentext');
	pill.html('<p>'+content+'</p>');
});