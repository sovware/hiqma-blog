/* eslint-disable */
"use strict";

(function ($) {
	$(document).ready(function () {
		let windows = $(window);
		let screenSize = windows.width();
		$(".menu-trigger").on('click', function () {
			$(".offcanvas-menu").addClass('show');
			$(".shade").addClass('active');
			$(".site-header").addClass('offcanvasActive');
		});

		$(".offcanvas-cancel , .shade").on('click', function () {
			$(".offcanvas-menu").removeClass('show');
			$(".shade").removeClass('active');
			$(".site-header").removeClass('offcanvasActive');
		});

		if (screenSize <= 991.98) {
			if ($('.menu-primary-menu-container').length !== 0) {
				$('.menu-primary-menu-container').appendTo('.offcanvas-menu .offcanvas-menu-inner');
			} else {
				$('.menu-helpgent-primary-container').appendTo('.offcanvas-menu .offcanvas-menu-inner');
			}
		}

		function mobileMenu(dropDownTrigger, dropDown) {
			if ($('#menu-primary-menu').length !== 0) {
				$('#menu-primary-menu ' + dropDown).slideUp();

				$('#menu-primary-menu ' + dropDownTrigger).on('click', function (e) {
					if ($(this).parent().hasClass('has-dir-mega-menu')) {

						e.preventDefault();
					}
					$(this).toggleClass('active').siblings(dropDown)
						.slideToggle().parent().siblings('.dir-mega-menu')
						.children(dropDown).slideUp().siblings(dropDownTrigger).removeClass('active');
				})
			} else {
				$('#menu-helpgent-primary ' + dropDown).slideUp();

				$('#menu-helpgent-primary ' + dropDownTrigger).on('click', function (e) {
					if ($(this).parent().hasClass('has-dir-mega-menu')) {

						e.preventDefault();
					}
					$(this).toggleClass('active').siblings(dropDown)
						.slideToggle().parent().siblings('.dir-mega-menu')
						.children(dropDown).slideUp().siblings(dropDownTrigger).removeClass('active');
				})
			}

		}


		if (screenSize <= 991.98) {
			mobileMenu('.menu-item a', '.dir-mega-menu,.sub-menu');
		}
		// Set active blog menu class
		if (typeof Url == 'function') {
			var url = new Url;
			var popular = url.query['popular'];
			var cat = url.query['catid'];

			if (typeof popular !== 'undefined') {
				$('#menu-blog li:nth-child(2)').addClass('active-blog-menu');
			} else if (typeof cat !== 'undefined') {
				$('#menu-blog li').each(function (index, el) {
					var href = $(this).find('a').attr('href');
					var hrefUrl = new Url(href);
					var hrefCatid = hrefUrl.query['catid'];
					if (cat == hrefCatid) {
						$(this).addClass('active-blog-menu');
					}
				});
			} else {
				$('#menu-blog li:first-child').addClass('active-blog-menu');
			}
		}

		// Headroom js
		var header = document.getElementById("site-header");
		// construct an instance of Headroom, passing the element
		var headroom = new Headroom(header);
		// initialise
		headroom.init();

		// Copy
		function copyToClipboard(text) {
			var $temp = $("<input>");
			$("body").append($temp);
			$temp.val(text).select();
			document.execCommand("copy");
			$temp.remove();
		}

		$(".copy-to-clickboard").on('click', function (event) {
			event.preventDefault();
			var text = $(this).data('url');
			copyToClipboard(text);
		});

		$('.btn-apply').on('click', function () {
			$('.job-apply-form').slideDown();
		});

		$('.wpWax-client-testimonial').each(function () {
			tns({
				container: this,
				items: 1,
				slideBy: 'page',
				controlsContainer: "#tns-controls",
				nextButton: '#prev',
				nextButton: '#next', // String selector
				nav: false,
			});
		});

		const helpgentCarousel = document.querySelector('.helpgent-carousel-wrapper');
		if(helpgentCarousel){
			$('.helpgent-carousel-wrapper').each(function () {
				tns({
					container: this,
					items: 1,
					slideBy: '1',
					nav: false,
					controls:false,
					loop: false,
					speed: 300,
					autoplay: false,
					mouseDrag: true,
					autoplayButtonOutput: false,
				});
			});
		}
		
		// Counter Up
		if (typeof $.fn.counterUp == 'function') {
			$('.counter-count').counterUp({
				delay: 30,
				time: 3e3
			});
			$('.wpwax-single-product-overview-single__content--count').counterUp({
				delay: 30,
				time: 3e3
			});
		}

		// Pricing Switches
		const pricingSwitch = document.querySelector('.pricing-switch');
		const toggleTexts = document.querySelectorAll('.pricing-header__togglerText');
		const yearAccess = document.querySelector('.yearly-license');

		const optionList = document.querySelector('.edd-price-options-list');

		function togglePlan() {
			if (optionList) {
				optionList.classList.toggle('license-active-lifetime');
				// lifeAccess.classList.toggle('show');
				$('.pricing-switch').parent().toggleClass('active');
				$('.pricing-header__togglerText[data-access="year"]').toggleClass('active');
				$('.pricing-header__togglerText[data-access="life"]').toggleClass('active');
			}

		}

		function shiftPlan() {
			$('.pricing-header__togglerText.active').removeClass('active');

			this.classList.add('active');
			if (this.dataset.access == 'year') {
				optionList.classList.remove("license-active-lifetime");
				// yearAccess.classList.add('show');
				// lifeAccess.classList.remove('show');
			} else if (this.dataset.access == 'life') {
				$('.pricing-header__toggle').addClass('active');
				optionList.classList.add("license-active-lifetime")
				// optionList.classList.remove("license-active-year")
				// lifeAccess.classList.add('show');
				// yearAccess.classList.remove('show');
			}
		}

		$('.pricing-header__togglerText[data-access="life"]').on("click", function () {
			pricingSwitch.checked = true;
		});
		$('.pricing-header__togglerText[data-access="year"]').on("click", function () {
			pricingSwitch.checked = false;
		});

		if (pricingSwitch !== null) {
			pricingSwitch.addEventListener("click", togglePlan);
		}
		if (toggleTexts !== null) {
			toggleTexts.forEach(toggleText => toggleText.addEventListener('click', shiftPlan));
		}

		/* Purchase link action */
		function updateURL(currentUrl, key, val) {
			var url = new URL(currentUrl);
			url.searchParams.set(key, val);
			return decodeURI(url.href);
		}

		$('.edd-price-options-list input').on("change", function () {
			var $target = $('.theme-variable-price-link');
			var priceID = $("input[name='edd_options[price_id][]']:checked").val();
			var currentUrl = $target.attr('href');
			var newUrl = updateURL(currentUrl, 'edd_options[price_id]', priceID);
			$target.attr('href', newUrl);
		});

		/* Pricing Table Plan */

		const tablePricingSwitch = document.querySelector('.wpwax-pricing-switch .pricing-switch');
		const tableYear = document.getElementById("yearly-access");
		const tableLifetime = document.getElementById("lifetime-access");

		function toggleTablePlan() {
			$('.wpwax-pricing-switch .pricing-switch').parent().toggleClass('active');
			tableYear.classList.toggle('show');
			tableLifetime.classList.toggle('show');
		}
		if (tablePricingSwitch !== null) {
			tablePricingSwitch.addEventListener("click", toggleTablePlan);
		}

		// CountDown
		function runCountDown(remainingTime) {

			if (remainingTime < 0) {
				$.ajax({
					url: ThemeObj.ajaxurl,
					type: 'POST',
					data: {
						'action': 'theme_update_time',
						'_wpnonce': ThemeObj.nonce,
						'update_time': true,
					},
					success: function success(data) {
						remainingTime = data;
					}
				});
			}

			let $countDown = $('.discount-countdwon, .offer-countdown');

			$countDown.each(function () {
				var $t = $(this);
				var endDate = new Date(Date.parse(new Date()) + parseInt(remainingTime));

				$t.countdown(endDate, function (e) {
					$(this).html('<ul class="list-unstyled">' + e.strftime('<li>%D<span>Days</span></li><li>%H<span>Hour</span></li><li>%M<span>Min</span></li><li>%S<span>Sec</span></li>') + '</ul>');
				});
			});

			let $countDown2 = $('.discount-countdown--early-bird');

			$countDown2.each(function () {
				var $t = $(this);
				var endDate = new Date(Date.parse(new Date()) + parseInt(remainingTime));

				$t.countdown(endDate, function (e) {
					$(this).html('<ul class="list-unstyled">' + e.strftime('<li>%D<span>Day</span></li><li>%H<span>Hours</span></li><li>%M<span>Mins</span></li><li>%S<span>Sec</span></li>') + '</ul>');
				});
			});
		}

		if (typeof $.fn.countdown === 'function') {
			$.ajax({
				url: ThemeObj.ajaxurl,
				type: 'POST',
				data: {
					'action': 'theme_remaining_time',
					'_wpnonce': ThemeObj.nonce,
				},
				success: function success(data) {
					runCountDown(data)
				}
			});
		}

		$.ajax({
			url: ThemeObj.ajaxurl,
			type: 'POST',
			data: {
				'action': 'theme_remaining_days',
				'_wpnonce': ThemeObj.nonce,
			},
			success: function success(data) {
				$('span#days_left').html(data);
			}
		});

		//custom counter
		function counterTwo() {
			let preloaders = document.querySelectorAll(".bfcm-coming-countdown .loader-dot");

			// Remove the "loader-dot" class from all elements
			preloaders.forEach(function (preloader) {
				preloader.classList.remove("loader-dot");
			});
			const newCountDown = document.querySelector(".bfcm-coming-countdown");
			// Select countdown elements and set the end date
			if (newCountDown) {
				let endDate = new Date("2023-11-15T00:00:00");
				$('.bfcm-coming-countdown').countdown('2023/11/14', function (e) {
					$(this).html('<ul class="list-unstyled">' + e.strftime('<li>%D<span>Days</span></li><li>%H<span>Hours</span></li><li>%M<span>Min</span></li><li>%S<span>Sec</span></li>') + '</ul>');
				});
			}
		};

		counterTwo();

		// Sell Left
		$.ajax({
			url: ThemeObj.ajaxurl,
			type: 'POST',
			data: {
				'action': 'theme_sell_left',
				'_wpnonce': ThemeObj.nonce,
			},
			success: function success(data) {
				let $target = $('.theme-sell-left');
				$target.html(data);
			}
		});

		$('.disc-close').on('click', function (e) {
			e.preventDefault();
			$("body").removeClass("has-discount-banner");
		});

		$(".roadmap-box__single").on("click", ".roadmap-box__header a", function (e) {
			$(this).toggleClass("active")
		});
	});

	function validateEmail(email) {
		const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	}

	function validate() {
		const subscriptionForm = document.querySelector('.free-subscription-form');
		const email = $(this).val();
		if (validateEmail(email)) {
			subscriptionForm.classList.add("subscription-active");
		} else {
			subscriptionForm.classList.remove("subscription-active");
		}
		return false;
	}

	$(".free-subscription-form__input input").on("input", validate);

	$(window).on('scroll', function (e) {
		let blogContainer = document.querySelector(".blog-details"),
			shareGroup = document.querySelector(".blog-share-top");
		if (blogContainer != null && shareGroup != null) {
			window.pageYOffset <= blogContainer.offsetTop ? shareGroup.classList.remove("show") : window.pageYOffset >= blogContainer.offsetTop && window.pageYOffset <= blogContainer.offsetTop + blogContainer.clientHeight - 700 ? shareGroup.classList.add("show") : shareGroup.classList.remove("show");
		}
	});

	// Popup Video
	if ($('.wpwax-single-product-video-trigger').length !== 0) {
		$('.wpwax-single-product-video-trigger').magnificPopup({
			type: 'iframe',
			mainClass: 'mfp-with-zoom',
			removalDelay: 300,
			zoom: {
				enabled: true,
				duration: 300,
				easing: 'ease-in-out',
			}
		});
	}

	$(document).ready(function () {
		if ($('.play-video').length !== 0) {
			$('.play-video').magnificPopup({
				type: 'iframe'
			});
		}
	});

	// Loading button
	var isLoadingFind = document.getElementsByClassName('loading-animate');
	if (isLoadingFind.length > 0) {
		var twoToneButton = document.querySelector('.loading-animate');
		twoToneButton.addEventListener("click", function () {
			twoToneButton.classList.add('loading-spinning');

			setTimeout(
				function () {
					twoToneButton.classList.remove('loading-spinning');
				}, 2000);
		}, false);
	}

	//Blank Link
	const links = document.querySelectorAll('.page-template-helpgent-special .site-content a:not(.redirect-false),.page-template-helpgent-special header a,.page-template-helpgent-special footer a');
	if (links.length > 0) {
		links.forEach(link => {
			link.addEventListener('click', function (event) {
				event.preventDefault(); // Prevent the default link behavior
				window.open(link.href, '_blank');
				console.log(link.href)
			});
		});
	}
	let parallax = document.querySelectorAll('.jarallax');
	if (parallax.length > 0) {
		jarallax(parallax, {
			speed: 0.3,
		});
	}

	function mouseClickedBox() {
		const mouseWheels = document.querySelectorAll('.scroll-md-active');
	
		if(mouseWheels){
			mouseWheels.forEach(function (mouseWheel) {
				mouseWheel.addEventListener('wheel', function (e) {
					const race = 15; // How many pixels to scroll
		
					if (e.deltaY > 0) // Scroll right
						mouseWheel.scrollLeft += race;
					else // Scroll left
						mouseWheel.scrollLeft -= race;
		
					e.preventDefault();
				});
			});
		}
	}
	
	mouseClickedBox();

})(jQuery);