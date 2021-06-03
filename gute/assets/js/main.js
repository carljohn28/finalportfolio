(function ($) {
	"use strict";
    
    //document ready function
    jQuery(document).ready(function($){
	/*
		$('nav ul li.nav-item.dropdown').hover(function() {
		  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(300);
		}, function() {
		  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(300);
		});
*/

		
		//search form show hide 
		$('.search-icon i').click(function() {
		  $('.header-search-form').toggleClass('show');
		});
		$('.header-middle, .site-content,.header-bottom, .home-banner').click(function() {
		  $('.header-search-form').removeClass('show');
		});
		$('.header-search-form .search-form').addClass('form-inline');
		$('.header-search-form .search-form input.search-field').addClass('form-control input-lg');
		

				 $("#primary-menu,#top-menu").guteAccessibleDropDown();

		
	});

 		$.fn.guteAccessibleDropDown = function () {
			    var el = $(this);

			    /* Make dropdown menus keyboard accessible */

			    $("a", el).focus(function() {
			        $(this).parents("li").addClass("hover");
			    }).blur(function() {
			        $(this).parents("li").removeClass("hover");
			    });
			}

}(jQuery));	