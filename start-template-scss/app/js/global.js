var _functions = {};

jQuery(function($) {

	"use strict";

	/*###############*/
	/* FUNCTION ON DOCUMENT READY */ 
	/*###############*/

	if (navigator.userAgent.indexOf("Firefox") >= 0) {
		$('body').addClass('firefox');
	}
	if (navigator.userAgent.indexOf('Edge') >= 0) {
		$('body').addClass('edge');
	}
	if (navigator.userAgent.indexOf("Trident") >= 0) {
		$('body').addClass('ie');
	}
	if (navigator.userAgent.indexOf('Safari') >= 0 && navigator.userAgent.indexOf('Chrome') < 0) {
		$('body').addClass('safari');
	}
	if (navigator.userAgent.indexOf('Chrome') >= 0 && navigator.userAgent.indexOf('Edge') < 0) {
		$('body').addClass('chrome');
	}

	setTimeout( function(){
		$("#loader-wrapper").fadeOut(0);
	},100);

	$('[data-bg]').each(function(i, el){
		$(el).css({'background-image': 'url('+$(el).data('bg')+')'});
	});

	$('img[data-src]').each(function(i, el){
		$(el).attr({'src': $(el).data('src')});
	});

	/*###############*/
	/* ANIMATIONS */
	/*###############*/

	_functions.customAnimation = function() {
		if ($('.animation').length) {
			$('.animation').each(function() {
				if ($(this).offset().top < $(window).scrollTop() + $(window).height()) {
					$(this).addClass('animated');
				}
			});
		}
	}
	_functions.scrollHeadern = function() {
		var a = $(window).scrollTop();

        if(a > 20) {
			$('.header').addClass('scrolled');
        } else if(a < 20) {
			$('.header').removeClass('scrolled');
        }
	}

	/*###############*/
	/* SCROLL */
	/*###############*/

	$(window).on('scroll load', function(){
		_functions.customAnimation();
		_functions.scrollHeadern();
	});

	/*###############*/
	/* INPUT MATERIAL */
	/*###############*/

	$('.input-wrapper-material .input-material').on('focus', function(){
		$(this).parent().addClass('focus');
	});
	$('.input-wrapper-material .input-material').on('blur', function () {
		$(this).parent().removeClass('focus');
	});
	$('.input-wrapper-material .input-material').on('keyup', function () {
		if(!$(this).val()) $(this).parent().removeClass('typed');
		else $(this).parent().addClass('typed');
	});

	/*###############*/
	/* POPUP */
	/*###############*/

	var popupTop = 0;
	function removeScroll() {
		popupTop = $(window).scrollTop();
		$('html').css({
			"position": "fixed",
			"top": -$(window).scrollTop(),
			"width": "100%"
		});
	}
	function addScroll() {
		$('html').css({
			"position": "static"
		});
		window.scroll(0, popupTop);
	}
	_functions.openPopup = function(popup){
		$('.popup-content').removeClass('active');
		$(popup + ', .popup-wrapper').addClass('active');
		removeScroll();
	};

	_functions.closePopup = function(){
		$('.popup-wrapper, .popup-content').removeClass('active');
		addScroll();
	};

	_functions.textPopup = function(title, description){
		$('#text-popup .text-popup-title').html(title);
		$('#text-popup .text-popup-description').html(description);
		_functions.openPopup('#text-popup');
	};

	$(document).on('click', '.open-popup', function(e){
		e.preventDefault();
		_functions.openPopup('.popup-content[data-rel="' + $(this).data('rel') +'"]');
	});

	$(document).on('click', '.popup-wrapper .btn-close, .popup-wrapper .close-popup, .popup-wrapper .layer-close, .popup-wrapper .close-popup', function(e){
		e.preventDefault();
		_functions.closePopup();
	});

	// thanks popup

	_functions.thanksPopup = function(){
		event.preventDefault();
		_functions.openPopup('.popup-content[data-rel="thanks-popup"]');
		
		// setTimeout( function(){
		// 	_functions.closePopup();
		// },3000);
	};

		// swiper sliders 

		_functions.getSwOptions = function(swiper){
			var options = swiper.data('options'),
				slidesLength = swiper.find('.swiper-slide').length;


			options = (!options || typeof options !=='object') ? {} : options;
			var $p = swiper.closest('.swiper-entry');

			if(slidesLength === 1) $p.addClass('single-slide-swiper');

			if(!options.pagination) options.pagination = {
				el: $p.find('.swiper-pagination')[0],
				clickable: true
			};
			if(!options.navigation) options.navigation = {
				nextEl: $p.find('.swiper-button-next')[0],
				prevEl: $p.find('.swiper-button-prev')[0]
			};
			options.preloadImages = false;
			options.lazy = {loadPrevNext: true};
			options.observer = true;
			options.observeParents = true;
			options.watchOverflow = true;
			options.speed = 500;
			options.roundLengths = false;
			// if(isTouchScreen) options.direction = "horizontal";
			return options;
		};
		_functions.initSwiper = function(el){
			var swiper = new Swiper(el[0], _functions.getSwOptions(el));
		};
		
		$('.swiper-entry .swiper-container').each(function () {
			_functions.initSwiper($(this));
		});
		$('.swiper-thumbs').each(function () {
			var top = $(this).find('.swiper-container.swiper-thumbs-top')[0].swiper,
				bottom = $(this).find('.swiper-container.swiper-thumbs-bottom')[0].swiper;
			top.thumbs.swiper = bottom;
			top.thumbs.init();
			top.thumbs.update();
		});
		$('.swiper-control').each(function () {
			var top = $(this).find('.swiper-container')[0].swiper,
				bottom = $(this).find('.swiper-container')[1].swiper;
			top.controller.control = bottom;
			bottom.controller.control = top;
		});

});
 