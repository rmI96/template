var _functions = {};

jQuery(function($) {

	"use strict";
        
    /* function on page ready */
    var isTouchScreen = navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i);
    if (isTouchScreen) $('html').addClass('touch-screen');

	/* function on page scroll */
	$(window).scroll(function(){
		_functions.scrollCall();
	});

    _functions.scrollCall = function() {
        var winScr = $(window).scrollTop();
        if(winScr > 50) {
            $('header').addClass('scrolled');
        } else {
            $('header').removeClass('scrolled');
        }
    }

    _functions.scrollCall();

	/* swiper sliders */
	_functions.getSwOptions = function(swiper){
		var options = swiper.data('options');
        options = (!options || typeof options !=='object') ? {} : options;
        var $p = swiper.closest('.swiper-entry');
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
		options.roundLengths = true;
        if(isTouchScreen) options.direction = "horizontal";
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
    
    //popup
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

	$(document).on('click', '.popup-wrapper .btn-close, .popup-wrapper .layer-close', function(e){
		e.preventDefault();
		_functions.closePopup();
	});


});