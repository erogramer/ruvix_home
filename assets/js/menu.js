$(function() {

  var siteSticky = function() {
		$(".js-sticky-header").sticky({topSpacing:0});
	};
	siteSticky();

	var siteMenuClone = function() {

		$('.js-clone-nav').each(function() {
			var $this = $(this);
			$this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
		});


		// 상단메뉴(PC)/오프캔버스메뉴(모바일) 공통 : 1depth 는 기본노출, 하위 depth 는
		// .menu-toggle 버튼 클릭으로 여닫는 아코디언 UI. 마크업은 render_menu_dropdown() /
		// render_menu_accordion() 헬퍼(application/helpers/basic_helper.php)에서 출력되며
		// .js-clone-nav 를 clone 할 때 .menu-toggle 버튼도 함께 복제됩니다.
		$('body').on('click', '.site-menu .menu-toggle, .site-nav-wrap .menu-toggle', function(e) {
			e.preventDefault();
			e.stopPropagation();

			var $li = $(this).closest('li.has-children');
			var isOpen = $li.hasClass('open');

			$li.toggleClass('open', ! isOpen);
			$(this).attr('aria-expanded', ! isOpen ? 'true' : 'false');
		});

		// PC 상단메뉴 바깥을 클릭하면 열려있던 하위메뉴를 모두 닫아 1depth 기본상태로 되돌립니다
		$(document).on('click', function(e) {
			var $nav = $('.site-navbar .site-navigation');
			if ( $nav.length && $nav.has(e.target).length === 0 && ! $nav.is(e.target) ) {
				$nav.find('.has-children.open').each(function() {
					$(this).removeClass('open').find('> .menu-toggle').attr('aria-expanded', 'false');
				});
			}
		});

		$(window).resize(function() {
			var $this = $(this),
				w = $this.width();

			if ( w > 768 ) {
				if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
			}
		})

		$('body').on('click', '.js-menu-toggle', function(e) {
			var $this = $(this);
			e.preventDefault();

			if ( $('body').hasClass('offcanvas-menu') ) {
				$('body').removeClass('offcanvas-menu');
				$this.removeClass('active');
			} else {
				$('body').addClass('offcanvas-menu');
				$this.addClass('active');
			}
		}) 

		// click outisde offcanvas
		$(document).mouseup(function(e) {
	    var container = $(".site-mobile-menu");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {
	      if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
	    }
		});
	}; 
	siteMenuClone();

});