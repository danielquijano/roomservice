$(function(){

	function WarningModal(){
		'use strict';

		// Owl Carousel setup
		var owl = $('.owl-carousel');
		owl.owlCarousel({
			loop: true,
			margin: 0,
	
			autoplay: false,
			autoplayTimeout: 4000,
			autoplayHoverPause: false,
	
			nav: false,
			dots: false,
			pagination: false,

			autoHeight: true,
			autoWidth: 0,

			responsive:{
				0:{
					items: 1,
				},
				576:{
					items: 2,
				},
				768:{
					items: 3,
				},
				992:{
					items: 4,
				},
				1200:{
					items: 4,
				}
			}
		});

		// If is not 'warning-modal' cookie show modal
		if(!sessionStorage.getItem('warning-modal')){
			$('.jquery-warning-modal').modal({
				backdrop: 'static',
				keyboard: false
			}, 'show');

			// On click events
			$('.jquery-warning-modal [data-dismiss=modal]').on('click', function(){
				sessionStorage.setItem('warning-modal', true);

				// OwlCarousel play
				owl.trigger('play.owl.autoplay',[4000]);

				// CookieAlert function
				CookieAlert();
			});
		}

		else{
			// OwlCarousel play
			owl.trigger('play.owl.autoplay',[4000])
		}
	}


	// CookieAlert function
	function CookieAlert(){
		'use strict';

		// If not 'cookie-alert' show alert
		if(!sessionStorage.getItem('cookie-alert')){
			setInterval(function(){
				$('.jquery-cookie-alert').addClass('show');
			}, 500);

			$('.jquery-cookie-alert [data-dismiss=alert]').on('click', function(){
				// Set 'cookie-alert' true
				sessionStorage.setItem('cookie-alert', true);
			});
		}

		else{
			$('.jquery-cookie-alert [data-dismiss=alert]').alert('close');
		}
	}

	// Warning Modal function
	WarningModal();
});