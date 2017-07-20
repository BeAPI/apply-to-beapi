function loadSite() {
    "use strict";

    //preloader
   	setTimeout(function() {
        $('#preloader').fadeOut('slow', function() {
        });
    }, 300);

    // Counter
	$(function ($) {
	    animatecounters();
	});

	function animatecounters() {
	    $('.counter-value').each(count);
	    function count(options) {
	        var $this = $(this);
	        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	        $this.countTo(options);
	    }
	}

	// Lightbox
	$('.lightbox').magnificPopup({
		type: 'image',
			mainClass: 'mfp-with-zoom mfp-fade',
		zoom: {
			enabled: true,
			duration: 300,
			easing: 'ease-in-out',
			opener: function(openerElement) {
				return openerElement.is('img') ? openerElement : openerElement.find('img');
			}
		}
	});

	// SmoothScroll
	$('.scroll-sub').smoothScroll({
		speed: 900,
		offset: 0,
		zoom: {
			enabled: true,
			duration: 300,
			easing: 'ease-in-out'
		}
	});

	// PopUp
	$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
	  disableOn: 700,
	  type: 'iframe',
	  mainClass: 'mfp-with-zoom mfp-fade',

	  fixedContentPos: true
	});

	// Contact Form
	$("#success-alert").hide();
	$("#success-contact").hide();

	$('body').on('click', '#contact-submit', function(){
		var error = CFValidate();
		if (error) {
			$.ajax({
				type: "POST",
				url: "contact.php",
				data: $("#contact-form").serialize(),
				success: function (result) {
					$('input[type=text],textarea').each(function () {
						$(this).val('');
					})
					$("#success-alert").html(result);
					$("#success-alert").fadeIn("slow");
					$('#success-alert').delay(5000).fadeOut("slow");
				}
			});
		}
	});
	function CFValidate() {
		var error = true;
		$('#contact-form input[type=text]').each(function (index) {
			if (index == 0) {
				if ($(this).val() == null || $(this).val() == "") {
					$("#contact-form").find("input:eq(" + index + ")").addClass("required-error");
					error = false;
				}
				else {
					$("#contact-form").find("input:eq(" + index + ")").removeClass("required-error");
				}
			}
			else if (index == 1) {
				if (!(/(.+)@(.+){2,}\.(.+){2,}/.test($(this).val()))) {
					$("#contact-form").find("input:eq(" + index + ")").addClass("required-error");
					error = false;
				} else {
					$("#contact-form").find("input:eq(" + index + ")").removeClass("required-error");
				}
			}

		});
		return error;
	}

	//navigation
	$('#nav-open').click(function() {
		$('#menu').toggleClass('nav-open');
	});

	function handler1() {
    	document.getElementById("mySidenav").style.width = "100%";
	    document.getElementById("main").style.marginRight = "100%";
	    $('body').toggleClass('overflowy-hidden');
		$('.nav-button').toggleClass('nav-button-side');
	    $('body').toggleClass('sidenavst');
	    $('.sidenav').toggleClass('overflowy-auto');
    	$(this).one("click", handler2);
    	$('.skillbar').each(function(){
			$(this).find('.skillbar-bar').animate({
				width:jQuery(this).attr('data-percent')
			},2000);
		});
	}

	function handler2() {
	    document.getElementById("mySidenav").style.width = "0";
	    document.getElementById("main").style.marginRight = "0";
	    $('body').removeClass('overflowy-hidden');
	    $('.sidenav').toggleClass('overflowy-auto');
	    $('.nav-button').removeClass('nav-button-side');
		$('body').removeClass('sidenavst');
	    $(this).one("click", handler1);
	}
	$("#nav-open").one("click", handler1);

};

// LoadSite
$(window).load(function(){
    loadSite();
});