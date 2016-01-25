/*jshint -W117 */
/*jslint latedef:false*/
/* jshint unused:false */
var isMobile = false; //initiate as false
var Modal;
var Instagram;

$(document).ready(function(){
	'use strict';

 	initPage();
 	window.onresize = resize;
 });

// Page load event
function initPage(){
	'use strict';

	detectMobile();
	hideLoader();

	if ( $('#content.feed').length ) {
		initSlickSliders();
		$('header').addClass('white');
		backToTop();
	} else if ( $('#content.home').length ) {
		datePickerSetup();
		displayCalendar();
		initHomeSlider();
	} else if ( $('#content.special-offers').length ) {
		Modal.init();
	} else if ( $('#content.news').length ) {
		initPhotoshootSlider();
	} else if ( $('#content.social-feed').length ) {
		$('header').addClass('white');
		resizeInstagramElt();
		wrapHashtagInstagram();
		Instagram.init();
	}
	if ( $('.isMobile:visible') ) {
		$('body').on('touchstart click', 'header .hamburger', function(e){
			e.preventDefault();
			var menu = $('.menu.hide-desktop');
			TweenMax.to(menu, 0.5, {top:'11.1rem',ease:Expo.easeOut});
		});
		$('body').on('touchstart click', '.menu .close', function(e){
			e.preventDefault();
			var menu = $('.menu.hide-desktop');
			TweenMax.to(menu, 0.5, {top:'-100%',ease:Expo.easeIn});
		});
	}
	MagicStuff.init();
}
function initPhotoshootSlider() {
	'use strict';
	var slider = $('.photoshoots .img-wrap');
	slider.slick({
		infinite:true,
		dots: false,
		arrows: true,
		autoplay:true,
		autoplaySpeed: 4000,
		fade: true,
		speed: 750,
  	cssEase: 'ease-in-out',
    prevArrow: '<a href=\'#\' class=\'arrow arrow-left\'></a>',
    nextArrow: '<a href=\'#\' class=\'arrow arrow-right\'></a>'
	});
	if ( isMobile === true ) {
		slider.slick('unslick');
	}
}
function initHomeSlider() {
	'use strict';
	var slider = $('.landing .img-wrap');
	slider.slick({
		infinite:true,
		dots: false,
		arrows: true,
		autoplay:true,
		autoplaySpeed: 4000,
		fade: true,
		speed: 750,
  	cssEase: 'ease-in-out',
    prevArrow: '<a href=\'#\' class=\'arrow arrow-left\'></a>',
    nextArrow: '<a href=\'#\' class=\'arrow arrow-right\'></a>'
	});

	if ( isMobile === true ) {
		slider.slick({
			swipe: true
		});
	}
}
function backToTop() {
	'use strict';
	$('body').on('click', '.toTop', function(){
		TweenMax.to(window, 0.35, {scrollTo:0,ease:Power3.easeOut});
	});
}
function displayCalendar() {
	'use strict';
	var cal = $('.calendar-wrap');
	$('body').on('click', '.checkin, .checkout',function(){
		var input = $('.checkin, .checkout, .guests');
		input.addClass('busy');
		cal.toggleClass('open');
	});
	$('body').on('click', '.guests',function(){
		$('.guests').addClass('busy');
	});
	$('body').on('click', '.landing img', function(event){
		event.stopPropagation();
		cal.removeClass('open');
	});
}
function initSlickSliders() {
	'use strict';
	$('.main article').each(function(){
		var _this = $(this),
				slidernav = _this.find('.slider-nav'),
				sliderfor = _this.find('.slider-for');
		sliderfor.slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  arrows: false,
		  fade: true,
		  asNavFor: slidernav
		});
		slidernav.slick({
		  slidesToShow: 5,
		  slidesToScroll: 1,
		  asNavFor: sliderfor,
		  dots: false,
		  centerMode: false,
		  focusOnSelect: true,
			draggable: false
		});
	});
}
function detectMobile(){
	'use strict';

	// device detection
	if( $('.isMobile').is(':visible') ) {
	 	isMobile = true;
	 	TweenMax.set('html',{overflowX:'hidden',position:'relative'});
	}

	if (isMobile === true) {
		console.log('isMobile:',isMobile);
	} else {
		console.log('isMobile:',isMobile);
	}

}
function hideLoader(){
	'use strict';
	TweenMax.to('#loader', 1, {opacity:0,ease:Power2.easeOut,onComplete:function(){
		TweenMax.set('#loader', {display:'none'});
	}});
}
function resize() {
	'use strict';

	// Resize instagram elts
	resizeInstagramElt();
}
function initSlider() {
	'use strict';
}
function landingAnimHome() {
	'use strict';
}
function datePickerSetup () {
  'use strict';
	//todays date
	var dateToday = new Date();
	var todayDate = dateToday.toLocaleDateString('en-US'); //returns 05-12-2014
	var todayDateNumber = dateToday.getDate(); //returns 5 if 05-12-2014

	var weekday = new Array(7);
	weekday[0]=  'Sunday';
	weekday[1] = 'Monday';
	weekday[2] = 'Tuesday';
	weekday[3] = 'Wednesday';
	weekday[4] = 'Thursday';
	weekday[5] = 'Friday';
	weekday[6] = 'Saturday';

	$('#datepicker-1').datepicker({
		inline: true,
		minDate: new Date(),
		firstDay: 1,
		dateFormat: 'mm-dd-yy',
		onSelect: function(date) {
			// work out selected date
			var dateSelect = $(this).datepicker('getDate'); //used below

  			// var dayOfWeek = $.datepicker.formatDate('DD', dateSelect); //shows Monday
				var monthOfWeek = $.datepicker.formatDate('MM', dateSelect); //shows September
  			$('.datepicker-month-1').text(monthOfWeek.substr(0, 3));
				// console.log(result);

  			var dateOfSelected = $.datepicker.formatDate('d', dateSelect); //shows 10 if 10/03/1994
  			$('.datepicker-date-selected-1').text(dateOfSelected);
	    }
	});
	$('#datepicker-2').datepicker({
		inline: true,
		minDate: new Date(),
		firstDay: 1,
		dateFormat: 'mm-dd-yy',
		onSelect: function(date) {
			// work out selected date
			var dateSelect = $(this).datepicker('getDate'); //used below

			// var dayOfWeek = $.datepicker.formatDate('DD', dateSelect); //shows Monday
  			var monthOfWeek = $.datepicker.formatDate('MM', dateSelect); //shows September
  			$('.datepicker-month-2').text(monthOfWeek.substr(0, 3));

  			var dateOfSelected = $.datepicker.formatDate('d', dateSelect); //shows 10 if 10/03/1994
  			$('.datepicker-date-selected-2').text(dateOfSelected);
	    }
	});
}
var Modal = {
	init: function(){
		'use strict';
		TweenMax.set('.overlay', {opacity:0,visibility:'hidden'});
		TweenMax.set('.closeModal', {opacity:0,visibility:'hidden'});
		Modal.bindEvents();
	},
	open: function(){
		'use strict';
		TweenMax.to('.overlay', 0.75, {visibility:'visible',opacity:1,ease:Power2.easeOut});
		TweenMax.fromTo('.modal', 0.5, {opacity:0,y:-50}, {y:0,opacity:1,ease:Power2.easeOut,delay:0.5});
		TweenMax.to('.closeModal', 0.25, {visibility:'visible',opacity:1,ease:Power2.easeOut,delay:0.7});
	},
	close: function(){
		'use strict';
		TweenMax.to('.closeModal', 0.25, {opacity:0,visibility:'hidden',ease:Power2.easeOut});
		TweenMax.to('.overlay', 0.75, {opacity:0,visibility:'hidden',delay:0.35,ease:Power2.easeIn});
		TweenMax.fromTo('.modal', 0.5, {y:0,opacity:1}, {opacity:0,y:50,ease:Power2.easeIn});
	},
	bindEvents: function(){
		'use strict';
		$('body').on('click', '.modal-trigger', function(e){
			$('body').css('overflow', 'auto');
			e.preventDefault();
			Modal.open();
		});
		$('body').on('click', '.overlay, .closeModal', function(e){
			e.preventDefault();
			Modal.close();
		});
		$(document).keyup(function(e){
			if(e.which === 27) {
			  	Modal.close();
			}
		});
	}
};

/* INSTAGRAM */
function resizeInstagramElt() {
	'use strict';
	$('.instagram-elt').height($('.instagram-elt').width());
}

function wrapHashtagInstagram() {
	'use strict';
	$.each($('.caption'), function(i, caption) {
		if($('.caption').eq(i).html().match('@[a-z]*') !== null) {
			var matchedElt = $('.caption').eq(i).html().match('@[a-z]*')[0];
		}
	});
}

var Instagram = {
	init: function() {
		'use strict';

	 	// hover
		$('#instagram-area').on('mouseenter', '.instagram-elt', function() {
	    var idElt = $(this).attr('data-id');
	    $('.'+ idElt).addClass('active');
		});

		$('#instagram-area').on('mouseleave', '.instagram-elt', function() {
	    $('.instagram-elt.active').removeClass('active');
		});
	}
};
