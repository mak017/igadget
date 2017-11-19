$(document).ready(function ($) {
	$('#myCarousel233').carousel({
		interval: 3000
	});
	$('#myCarousel299').carousel({
		interval: 3000
	});
	$('#quote-carousel2').carousel({
		interval: 3000
	});
	$('#quote-carousel3').carousel({
		interval: 3000
	});
	$('[id^=carousel-selector-]').click(function () {
		var id_selector = $(this).attr("id");
		try {
			var id = /-(\d+)$/.exec(id_selector)[1];
			if ($('#myCarousel233').length > 0) {
				$('#myCarousel233').carousel(parseInt(id));
			} else {
				var carouselId = $(this).closest('.hide-bullets').attr('data-carousel-id');
				$('#' + carouselId).carousel(parseInt(id));
			}
		} catch (e) {
			console.log('Regex failed!', e);
		}
	});
	$('[id^=carousel-selector2-]').click(function () {
		var id_selector = $(this).attr("id");
		try {
			var id = /-(\d+)$/.exec(id_selector)[1];
			console.log(id_selector, id);
			$('#myCarousel299').carousel(parseInt(id));
		} catch (e) {
			console.log('Regex failed!', e);
		}
	});
	$('#myCarousel233', '#myCarousel299').on('slid.bs.carousel', function (e) {
		var id = $('.item.active').data('slide-number');
		$('#carousel-text').html($('#slide-content-' + id).html());
	});
	$(function () {
		var $target = $('#text-below-zaryadka');
		var $targetHide = $('#setka3');
		if ($target.length) {
			$(window).scroll(function () {
				var distanceTop = $target.offset().top + 200 - $(window).height();
				var distanceBottom = $targetHide.offset().top + 200 - $(window).height();
				if ($(window).scrollTop() > distanceTop && $(window).scrollTop() < distanceBottom) {
					$('#slidebox').animate({
						'left': '0'
					}, 300);
				} else {
					$('#slidebox').stop(true).animate({
						'left': '-110%'
					}, 100);
				}
			});
			$('#slidebox .close').bind('click', function () {
				$(this).parent().remove();
			});
		}
	});
	$(function () {
		var $target = $('#last');
		if ($target.length) {
			$(window).scroll(function () {
				var distanceTop = $target.offset().top - $(window).height();
				if ($(window).scrollTop() > distanceTop) $('#slidebox2').animate({
					'left': '0'
				}, 300);
				else
					$('#slidebox2').stop(true).animate({
						'left': '-110%'
					}, 100);
			});
			$('#slidebox2 .close').bind('click', function () {
				$(this).parent().remove();
			});
		}
	});
});