(function ( $ ) {
	$.fn.jsTabs = function() {

		var current = $(this);
		var tab = $(this).children().eq(0).find('a[data-target]');

		$(this).children().eq(1).children().css('display', 'none');

		/* checking first tab */
		function firstTab() {
			var hasActive = false;
			var first;
			tab.each(function(i){
				if (i == 0) {
					first = $(this);
				}
				if($(this).hasClass('is-active')) {
					hasActive = true;
					showing($(this).data('target'));
				}
			})
			if(!hasActive) {
				if(first) {
					first.addClass('is-active');
					showing(first.data('target'));
				}
			}
		}

		firstTab();
		
		function showing(target) {
			current.children().eq(1).children().css('display', 'none');
			current.children().eq(1).find('[data-target=' + target + ']').css('display', 'block');
		}

		this.on('click', 'a[data-target]', function(e){
			e.preventDefault();
			tab.removeClass('is-active');
			$(e.target).addClass('is-active');
			var target = $(e.target).data('target');
			showing(target);
		});

	};
})(jQuery);

(function ( $ ) {
	$.fn.bCounter = function() {

		this.append('<i></i><u></u>');

		var current = this.children('input');
		var curVal = current.val(1);
		var maxVal = 100;
		var minVal = 1;

		this.on('click', 'i', function(e){
			e.preventDefault();
			curVal = current.val();
			if(parseInt(curVal) < 0 || !parseInt(curVal)) curVal = 0;
			if(parseInt(curVal) < maxVal ) current.val(parseInt(curVal)+1);

			
		});

		this.on('click', 'u', function(e){
			e.preventDefault();
			curVal = current.val();
			if(parseInt(curVal) < 0 || !parseInt(curVal)) curVal = 0;
			if(parseInt(curVal) > minVal) current.val(parseInt(curVal)-1);
		});
	};
})(jQuery);

$(document).ready(function(){

	var magnificPopup = $.magnificPopup.instance;

	$('.b-counter').each(function(){
		$(this).bCounter();
	})

	$('.b-jsTabs').jsTabs();

	$('.b-select').each(function() {
		var this_ = $(this);
		var container = this_.parent();
		this_.select2({
			minimumResultsForSearch: -1,
			theme: 'default',
			width: '100%',
			dropdownParent: container,
		});
	});

	$('.js-menu-btn').on('click', function(e){
		e.preventDefault();

		if ($(this).hasClass('is-active')) {
			$(this).removeClass('is-active');
			$(this).parent().children('.js-menu').removeClass('is-open');
			$('.b-mobileMenu__overlay').remove();
		}
		else {
			$(this).addClass('is-active');
			$(this).parent().children('.js-menu').addClass('is-open');
			$('body').append('<div class="b-mobileMenu__overlay"></div>');
		}		
	})
	$('body').on('click', '.b-mobileMenu__overlay', function(){
		$('.js-menu-btn').trigger('click');
	});

	$('.js-img').on('click', function(e) {
		e.preventDefault();
	}).magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		removalDelay: 300,
		tLoading: "",
		mainClass: 'mfp-zoom-in',
		callbacks: {
			imageLoadComplete: function() {
				var self = this;
				setTimeout(function() {
					self.wrap.addClass('mfp-image-loaded');
				}, 16);
			},
			close: function() {
				this.wrap.removeClass('mfp-image-loaded');
			},
		},
	});

	$('.b-productsSlider__inner').swiper({
		pagination: '#b-productsSlider__pagination',
        paginationClickable: true,
		slidesPerView: 1,
		slidesOffsetAfter: 1,
		//slidesOffsetBefore: 1,
		roundLengths: true,
		speed: 1000,
	});

	$('.b-faq__title').on('click', function(e){
		var this_ = $(this);
		if(this_.parent().hasClass('is-open')) {
			this_.parent().removeClass('is-open');
		} else {
			this_.parent().addClass('is-open');
		}
	});

	$('.js-btn').on('click', function(e){
		e.preventDefault();
	}).magnificPopup({
		type: 'inline',
		removalDelay: 400,
		mainClass: 'mfp-zoom-in',
	});

	$('.js-auth-link').on('click', function(e){
		e.preventDefault();
		if($(this).parent().hasClass('is-open')) {
			$(this).parent().removeClass('is-open');
		}
		else {
			$(this).parent().addClass('is-open');

			var firstClick = true;
			$(document).bind('click.auth', function(e) {
				if (!firstClick && $(e.target).closest('.b-login__logged').length == 0) {
					$('.b-login__logged').removeClass('is-open');
					$(document).unbind('click.auth');
				}
			firstClick = false;
			});
		}

	})

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });

});