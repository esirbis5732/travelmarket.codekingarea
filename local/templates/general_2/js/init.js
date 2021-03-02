$(document).ready(function () {
	$('div[id*="tripster_whitelabel_wrappertrace"]>iframe').on('load', function () {
		$('body,html').animate({
			scrollTop: 0
		}, 400);
	});
	/* меню */
	$(function () {
		$("li:not(.active) .main_menu_submenu a[href^='#']").click(function () {
			var parent_link = $(this).parent().parent().parent().children('a').attr("href");
			var menu_anchor = $(this).attr("href");
			var summary_link = parent_link + '/index.php' + menu_anchor;
			window.location.href = summary_link;
		});

		if (/iPhone|iPad|iPod|Android/i.test(navigator.userAgent)) {
			if ($(window).width() < 950) {
				$('.main_menu>li>a').on('click', function () {
					if ($(this).parent().find('ul').length > 0) {
						event.preventDefault()
						$('.main_menu_submenu.show').removeClass('show');
						$(this).next('ul').addClass('show');
					}
				});

				$('.main_menu .back').on('click', function () {
					$(this).parent().removeClass('show');
					$(this).siblings().children('ul').slideUp();
				});

				$('.main_menu_submenu a').on('click', function () {
					if ($(this).next('ul').length > 0) {
						event.preventDefault()
						$(this).parent().siblings('li').children('ul').slideUp();
						$(this).next('ul').slideToggle();
					}
				});

				$(document).click(function (e) {
					if ($(e.target).closest('.main_menu').length || $(e.target).closest('.burger').length) {
						// клик внутри элемента
						return;
					}
					// клик снаружи элемента
					$('.main_menu').fadeOut();
					$('.main_menu_submenu ul').slideUp();
					$('.main_menu_submenu.show').removeClass('show');
					$('#burgmenu.burger-close').removeClass('burger-close');
					$('#burgmenu').addClass('burger-open');

				});
			} else {
				$('.main_menu li a').click(function () {
					$(this).parent().siblings("li").find("ul").removeClass('show_2').slideUp();
					if ($(this).next("ul").length > 0) {
						event.preventDefault();

						if ($(this).next("ul").hasClass("show_2")) {
							$(this).next("ul").stop(3000).slideUp().removeClass('show_2');
						} else {
							$(this).next("ul").addClass('show_2').stop(3000).slideDown();
						}
					}

				});
				$(document).click(function (e) {
					if ($(e.target).closest('.main_menu').length) {
						// клик внутри элемента
						return;
					}
					// клик снаружи элемента
					$('.main_menu ul').fadeOut().removeClass('show_2');
				});
			}
		} else {
			$('.main_menu>li').hover(function () {
				if ($(this).children('ul').length > 0) {
					$(this).children("ul").stop(1000).slideDown();
				}
			}, function () {
				$(this).children("ul").stop(1000).slideUp();
			});

			/* $('.main_menu_submenu>li').hover(function(){
				if($(this).children('ul').length > 0){
				 
				$(this).children("ul").toggleClass('show_1');
				  
				}
			 }); */

			/* $('.main_menu_submenu>li').hover(function(){
			   if($(this).children('ul').length > 0){
			    
			   $(this).children("ul").toggle(500);
				 
			   }
			}); */

			$('.main_menu_submenu>li').hover(
				function () {
					if ($(this).children('ul').length > 0) {//$(this).children("ul").addClass('show_1');
						$(this).children("ul").stop(4000).slideDown(200);
					}
				},
				function () { //$(this).children("ul").removeClass('show_1');	
					$(this).children("ul").stop(4000).slideUp(200);
				}

			);

		}
	});
	$('.sections_item p').click(function(){
		$(this).toggleClass('active').next('.section_item_wrap').slideToggle();
		
	});
	$('.burger').click(function () {
		$(this).next('ul').slideToggle();
		$('.main_menu_submenu.show').removeClass('show');
		$('.active .main_menu_submenu').addClass('show');

		$('.main_menu_submenu ul').css('display', 'block').slideUp();
		$('.main_menu_submenu.show li.active ul').css('display', 'none').slideDown();
	});
	/* конец меню */

	$('[data-href]').click(function (e) {
		event.preventDefault();
		window.location.href = $(this).attr('data-href');
	});


	/* прокат байков и прочие  - сворачивающийся текст */
	$('.elastic_block_button').click(function () {
		event.preventDefault();
		/* var tH = getTotalHeigh($(this).parent().prev(".elastic_block")); */
		if ($(this).parent().prev(".elastic_block").hasClass("off")) {

			var tH = getTotalHeigh($(this).parent().prev(".elastic_block.off"));
			$(this).parent().prev(".elastic_block").removeClass('off').animate({ 'height': tH, }, 1000);
			$(this).parent().prev(".elastic_block").find(".gradient").hide();
			$(this).addClass('on');
			$(this).prev().slideUp('.elastic_text');
			$(this).closest('.directions_item').find('.useful_list').addClass('on');
		} else {
			$(this).parent().prev(".elastic_block").addClass('off').animate({ 'height': 400 }, 1000);
			$(this).parent().prev(".elastic_block").find(".gradient").show();
			$(this).removeClass('on');
			$(this).prev().slideDown('.elastic_text');
			$(this).closest('.directions_item').find('.useful_list').removeClass('on');
		}
	});
	function getTotalHeigh(obj) {
		var totalHeight = 0;
		var totalHeight_1 = 0;
		var totalHeight_2 = 0;
		obj.children().each(function () {
			totalHeight_1 += $(this).outerHeight(true);
			totalHeight_2 += $(this).height();
			/* totalHeight = totalHeight_1 ; */
			totalHeight = totalHeight_1 - 120;
		});
		return totalHeight;
	}
	/* прокат байков - сворачивающийся текст конец */


	/*якоря */
	$(function () {
		if (/iPhone|iPad|iPod|Android/i.test(navigator.userAgent)) {
			$(".anchor_block a").click(function () {
				if ($(".anchor_block").hasClass("hover_m")) {
					$('.anchor_block.hover_m').removeClass('hover_m');
					var _href = $(this).attr("href");
					$("html, body").animate({ scrollTop: $(_href).offset().top - 100 }, 1000);
				} else {
					event.preventDefault()
					$('.anchor_block').addClass('hover_m');
					$(".anchor_block dfn").removeClass('hover_m');
					$(this).children("dfn").addClass('hover_m');
				}
			});
			$(document).click(function (e) {
				if ($(e.target).closest('.anchor_block').length) {
					return;
				}
				$('.anchor_block.hover_m').removeClass('hover_m');
			});

		} else {
			$(".anchor_block").hover(function () {
				$(this).addClass('hover');
			}, function () {
				$(this).removeClass('hover');
			});
			$(".anchor_block a").click(function () {
				var _href = $(this).attr("href");
				$("html, body").animate({ scrollTop: $(_href).offset().top - 100 }, 1000);
			});
		}
	});
	/* конец якорей */

	/* кнопка наверх */
	$(window).scroll(function () {
		if ($(this).scrollTop() > 0) {
			$('.up').fadeIn();
		} else {
			$('.up').fadeOut();
		}
	});

	$('.up').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 400);
		return false;
	});
	/* конец кнопки наверх */

	/* табы в горящих турах	 */
	$('.js_tab_trigger').click(function () {
		var id = $(this).attr('data-tab'),
			content = $('.js_tab_content[data-tab="' + id + '"]'),
			content_dop = $('.js_tab_content_dop[data-tab="1' + id + '"]');//для вариантов, когда по клику на кнопку меняются два блока

		$('.js_tab_trigger.active').removeClass('active');
		$(this).addClass('active');

		$('.js_tab_content.active').removeClass('active');
		content.addClass('active');

		$('.js_tab_content_dop.active').removeClass('active');
		content_dop.addClass('active'); //для вариантов, когда по клику на кнопку меняются два блока 
	});
	/* табы в горящих турах конец */

	/* табы в блоке основного поиска */
	$('.js_tab_trigger_1 img').click(function () {

		if ($(this).parent().find('.show').length > 0) {

			$('html, body').animate({
				scrollTop: $(this).closest(".main_search").offset().top - 200 + "px"
				//scrollTop: 0
			}, 1000);
			/* return false; */
			var id = $(this).parent().attr('data-tab'),
				content = $('.js_tab_content_1[data-tab="' + id + '"]');
			//$('.js_tab_trigger_1.active').removeClass('active');
			$(this).closest(".search_system_list").children(".active").removeClass('active');
			$(this).parent().addClass('active');
			//$('.js_tab_content_1.active').removeClass('active'); 

			$(this).closest(".main_search").find(".js_tab_content_1.active").removeClass('active');
			/* $(this).closest(".search_system_wrapper").prev(".container").find(".js_tab_content_1.active").removeClass('active');  */
			content.addClass('active');
		} else {
			/* $(this).siblings('.logo_box_item').find('.tip.show').removeClass('show');
			$(this).find('.tip').addClass('show');  */
			return;
		}

	});

	$('.js_tab_trigger_1.logo_box_item .tip').not('.close').click(function () {
		$('html, body').animate({
			scrollTop: $(this).closest(".main_search").offset().top - 200 + "px"
			//scrollTop: 0
		}, 1000);
		/* return false; */
		var id = $(this).parent().attr('data-tab'),
			content = $('.js_tab_content_1[data-tab="' + id + '"]');
		//$('.js_tab_trigger_1.active').removeClass('active');
		$(this).closest(".search_system_list").children(".active").removeClass('active');
		$(this).parent().addClass('active');
		//$('.js_tab_content_1.active').removeClass('active'); 
		$(this).closest(".search_system_wrapper").prev(".container").find(".js_tab_content_1.active").removeClass('active');
		content.addClass('active');

		$('.tip.show').removeClass('show');
	});
	/* табы в блоке основного поиска конец */

	/* облакааааааааааааа, белогривые лошадкиииии... */
	$(function () {
		if ($(window).width() > 1080) {

			$(".logo_box_item").hover(function () {
				// задаем функцию при наведении курсора на элемент	
				$(this).siblings('.logo_box_item').find('.tip.show').removeClass('show');

				$(this).find('.tip').addClass('show');
			}, function () {
				// задаем функцию, которая срабатывает, когда указатель выходит из элемента 	
				$('.tip.show').removeClass('show');
			});

		} else {
			$('.logo_box_item img').click(function () {
				if ($(this).prev('.show').length > 0) {
					$(this).prev('.tip.show').removeClass('show');
					return;
				} else {
					event.preventDefault();
					$(this).parent().siblings('.logo_box_item').find('.tip.show').removeClass('show');
					$(this).prev('.tip').addClass('show');
				}
			});

			$(document).click(function (e) {
				if ($(e.target).closest('.logo_box_item').length) {
					return;
				}
				$('.tip.show').removeClass('show');
			});

			$('.logo_box_item .close').click(function () {
				event.preventDefault();
				$('.tip.show').removeClass('show');
			});
		}
	});
	/* конец облакоооооооооооооооооов */

	$(document).on('scroll', function () {
		var windowHeight = $(window).height();
		$('.anchor_scroll').each(function () {
			var self = $(this),
				height;
			if (self.height() >= windowHeight) {
				height = self.offset().top + windowHeight - 200;
			} else {
				height = self.offset().top + self.height();
			}
			if ($(document).scrollTop() + windowHeight >= height) {
				var href = self.attr('id')
				var anchorHref = "#" + href;
				/* console.log(anchorHref); */
				$(".anchor_block a").removeClass('active')
				$('.anchor_block a[href="' + anchorHref + '"]').addClass('active');
			}
		});
	});

	$(function () {
		if ($(window).width() < 950) {
			$(".revealator-slideup").removeClass('revealator-slideup')
		}
	});


	/*===== ГОРИЗОНТАЛЬНЫЕ СЛАЙДЕРЫ НА ГЛАВНОЙ ===========*/

	/* setTimeout(function () {
		//var slideCount_1 = ($('#slider_1').children().length)/2;
		var slideCount = 5
		var sortSlide = 1
		$(function() {		
			setInterval(function(){
				$('.slides>div:nth-of-type(' + sortSlide + ')' ).fadeOut(300);
				sortSlide = 1 + Math.floor(Math.random() * slideCount);
				setTimeout(function () {
					$('.slides>div:nth-of-type(' + sortSlide + ')').fadeIn(600);
				},300);
				
			},5000);
		});	
	},2500); */

	/* ============================================ */


	/* ====ВЕРТИКАЛЬНЫЕ СЛАЙДЕРЫ НА ГЛАВНОЙ ===*/

	/* 	var slideCount_vert = 10
		var sortSlide_vert = 1
		$(function() {		
			setInterval(function(){
				$('.slides_vert>div:nth-of-type(' + sortSlide_vert + ')' ).fadeOut(300);
				sortSlide_vert = 1 + Math.floor(Math.random() * slideCount_vert);
				setTimeout(function () {
					$('.slides_vert>div:nth-of-type(' + sortSlide_vert + ')').fadeIn(600);
				},300);
				
			},5000);
		}); */

	/* ================================================ */

	/* ========СЛАЙДЕРЫ В РАЗДЕЛАХ========= */

	/* var slideCount_1a = ($('#slider_1a').children().length)/2; */
	var slideCount_n = 5
	var sortSlide_n = 1
	$(function () {
		setInterval(function () {
			$('.slides_n>div:nth-of-type(' + sortSlide_n + ')').fadeOut(300);
			sortSlide_n = 1 + Math.floor(Math.random() * slideCount_n);
			setTimeout(function () {
				$('.slides_n>div:nth-of-type(' + sortSlide_n + ')').fadeIn(600);
			}, 300);
			/* console.log("sortSlide_n = " + sortSlide_n); */
		}, 5000);
	});
	/* ============================================== */

	/* ==============HEADER, КОТОРЫЙ ПРЯЧЕТСЯ================ */
	/* var header = $('.header')
	var anchor_block = $('.anchor_block')
	var scrollPrev = 0;

	$(window).scroll(function () {
		scrolled = $(window).scrollTop();

		if (scrolled > 100 && scrolled > scrollPrev) {
			header.addClass('out');
			anchor_block.addClass('out');
		} else {
			header.removeClass('out');
			anchor_block.removeClass('out');
		}
		scrollPrev = scrolled;
	}); */
	/* ================================================== */

	/* $(function () {
		$(".big_block>div>div").removeAttr("style");
		//$(".small_block>div>div").removeAttr("style");
		$(".small_block_2>div>div").removeAttr("style");
	}); */




	/* ==========карусели на главной ============= */


	var owl_1 = $('#owl-carousel_1');
	var owl_2 = $('#owl-carousel_2');
	var scrollCount = null;
	var scroll = null;

	if ($(window).width() > 950) {
		$('#owl-carousel_1').owlCarousel({
			loop: true,
			center: true,
			margin: 10,
			nav: true,
			merge: true,
			pullDrag: true,
			autoWidth: false,
			mouseDrag: true,
			touchDrag: true,
			/* autoplay: true,
			autoplayTimeout:6000,
			autoplayHoverPause: true,
			autoplaySpeed:500, */
			smartSpeed: 500,
			fluidSpeed: 500,
			navSpeed: 500,
			dragEndSpeed: 1000,
			items: 8,
			slideBy: 2,
			responsive: {
				0: {
					items: 2,
					navSpeed: 700,
					slideBy: 2,
				},
				320: {
					items: 3,
					navSpeed: 500,
					slideBy: 2,
					autoplay: true,
					autoplayTimeout: 6000,
					autoplayHoverPause: false,
					autoplaySpeed: 500,
					smartSpeed: 400,
					fluidSpeed: 500,
					dragEndSpeed: 500,
				},
				400: {
					items: 4,
					navSpeed: 700,
					slideBy: 2,
					autoplay: false,
				},
				600: {
					items: 5,
					navSpeed: 700,
					slideBy: 2,
					autoplay: false,
				},
				700: {
					items: 6
				},
				900: {
					items: 7
				},
				1050: {
					items: 7
				},
				1200: {
					items: 8,
				}
			}
		});

		$('#owl-carousel_2').owlCarousel({
			loop: true,
			margin: 10,
			nav: true,
			merge: true,
			slideBy: 2,
			pullDrag: false,
			center: true,
			autoWidth: false,
			mouseDrag: true,
			touchDrag: true,
			autoplay: true,
			autoplayTimeout: 6000,
			autoplayHoverPause: true,
			autoplaySpeed: 1500,
			smartSpeed: 1500,
			fluidSpeed: 1500,
			navSpeed: 1500,
			dragEndSpeed: 1000,
			slideBy: 2,
			responsive: {
				0: {
					items: 1,
					navSpeed: 1000,
					autoplayTimeout: 4000,
					slideBy: 1,

				},
				350: {
					autoplayTimeout: 4000,
					items: 1,
					slideBy: 1,

				},
				450: {
					items: 2,
					navSpeed: 700,
					slideBy: 1,

				},
				700: {
					items: 3
				},
				1000: {
					items: 3
				}
			}
		});

		$('#owl-carousel_3').owlCarousel({
			loop: true,
			center: true,
			margin: 10,
			nav: true,
			merge: true,
			pullDrag: true,
			autoWidth: false,
			mouseDrag: true,
			touchDrag: true,
			/* autoplay: true,
			autoplayTimeout:6000,
			autoplayHoverPause: true,
			autoplaySpeed:500, */
			smartSpeed: 500,
			fluidSpeed: 500,
			navSpeed: 500,
			dragEndSpeed: 1000,
			items: 5,
			slideBy: 2,
			responsive: {
				0: {
					items: 1,
					margin: 0,
					navSpeed: 700,
					slideBy: 1,
				},
				320: {
					items: 2,
					margin: 5,
					navSpeed: 500,
					slideBy: 1,
					autoplay: true,
					autoplayTimeout: 6000,
					autoplayHoverPause: false,
					autoplaySpeed: 500,
					smartSpeed: 400,
					fluidSpeed: 500,
					dragEndSpeed: 500,
				},
				400: {
					items: 2,
					navSpeed: 700,
					slideBy: 1,
					autoplay: false,
				},
				600: {
					items: 3,
					navSpeed: 700,
					slideBy: 2,
					autoplay: false,
				},
				700: {
					items: 3
				},
				900: {
					items: 4
				},
				1050: {
					items: 4
				},
				1200: {
					items: 5,
				}
			}
		});


		$('#owl-carousel_4').owlCarousel({
			loop: true,
			center: true,
			margin: 10,
			nav: true,
			merge: true,
			pullDrag: true,
			autoWidth: false,
			mouseDrag: true,
			touchDrag: true,
			/* autoplay: true,
			autoplayTimeout:6000,
			autoplayHoverPause: true,
			autoplaySpeed:500, */
			smartSpeed: 500,
			fluidSpeed: 500,
			navSpeed: 500,
			dragEndSpeed: 1000,
			items: 5,
			slideBy: 2,
			responsive: {
				0: {
					items: 1,
					margin: 0,
					navSpeed: 700,
					slideBy: 1,
				},
				320: {
					items: 2,
					margin: 5,
					navSpeed: 500,
					slideBy: 1,
					autoplay: true,
					autoplayTimeout: 6000,
					autoplayHoverPause: false,
					autoplaySpeed: 500,
					smartSpeed: 400,
					fluidSpeed: 500,
					dragEndSpeed: 500,
				},
				400: {
					items: 2,
					navSpeed: 700,
					slideBy: 1,
					autoplay: false,
				},
				600: {
					items: 3,
					navSpeed: 700,
					slideBy: 2,
					autoplay: false,
				},
				700: {
					items: 3
				},
				900: {
					items: 4
				},
				1050: {
					items: 4
				},
				1200: {
					items: 5,
				}
			}
		});

	}
	/* owl_1.on('mousewheel', '.owl-stage', function (e) {
		e.preventDefault();
		clearTimeout(scroll);
		scroll = setTimeout(function(){scrollCount=0;}, 220);
		if(scrollCount) return 0;
		scrollCount=1;
		if (e.deltaY>0) {
			owl_1.trigger('next.owl', [1000]);
		} else {
			owl_1.trigger('prev.owl', [1000]);
		}
		
	}); 
	owl_2.on('mousewheel', '.owl-stage', function (e) {
		e.preventDefault();
		clearTimeout(scroll);
		scroll = setTimeout(function(){scrollCount=0;}, 220);
		if(scrollCount) return 0;
		scrollCount=1;
		if (e.deltaY>0) {
			owl_2.trigger('next.owl', [1000]);
		} else {
			owl_2.trigger('prev.owl', [1000]);
		}
		
	});  */
	/* ================================================== */



//инициализация .dotdotdot
/* $(function(){
    $(".i_desc-2 .text").dotdotdot();
}); */




});

$(window).load(function () {
	$(function () {
		if (window.location.href.indexOf('ekskursii') != -1) {
			setTimeout(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 400);
			}, 500);
		}
	});


	/* высота фреймов в отелях  */
	if ($(window).width() > 750) {
		setTimeout(function () {
			$(".hotels #tpcwl_iframe").removeAttr("style", "height");
			$(".hotels #tpcwl_iframe").attr("style", "min-height: 230px; width: 100%; height: 300px !important;");
			$(".sect_hotels #tpcwl_iframe").removeAttr("style", "height");
			$(".sect_hotels #tpcwl_iframe").attr("style", "min-height: 230px; width: 100%; height: 300px !important;");
		}, 500);
	}
	if ($(window).width() <= 750 && $(window).width() > 550) {
		setTimeout(function () {
			$("#tpcwl_iframe").removeAttr("style", "height");
			$("#tpcwl_iframe").attr("style", "min-height: 270px; width: 100%; height: 270px !important;");
			$(".sect_hotels #tpcwl_iframe").removeAttr("style", "height");
			$(".sect_hotels #tpcwl_iframe").attr("style", "min-height: 270px; width: 100%; height: 270px !important;");
		}, 500);
	}
	if ($(window).width() <= 550) {
		setTimeout(function () {
			$(".hotels #tpcwl_iframe").removeAttr("style", "height");
			$(".hotels #tpcwl_iframe").attr("style", "min-height: 400px; width: 100%; height: 400px !important;");
			$(".sect_hotels  #tpcwl_iframe").removeAttr("style", "height");
			$(".sect_hotels #tpcwl_iframe").attr("style", "min-height: 400px; width: 100%; height: 400px !important;");
		}, 1000);
	}
	/* ===================== */
	/* высота фреймов в авиабилетах  */
	if ($(window).width() > 750) {
		setTimeout(function () {
			$(".avia #tpcwl_iframe").removeAttr("style", "height");
			$(".avia #tpcwl_iframe").attr("style", "min-height: 230px; width: 100%; height: 300px !important;");

			$(".sect_avia #tpcwl_iframe").removeAttr("style", "height");
			$(".sect_avia #tpcwl_iframe").attr("style", "min-height: 230px; width: 100%; height: 300px !important;");
		}, 500);
	}
	if ($(window).width() <= 550) {
		setTimeout(function () {
			$(".avia #tpcwl_iframe").removeAttr("style", "height");
			$(".avia #tpcwl_iframe").attr("style", "min-height: 460px; width: 100%; height: 460px !important;");

			$(".sect_avia #tpcwl_iframe").removeAttr("style", "height");
			$(".sect_avia #tpcwl_iframe").attr("style", "min-height: 460px; width: 100%; height: 460px !important;");
		}, 1000);
	}
	/* ===================== */


	$("#sravniMantravelCalculator").removeAttr("width");
	$("#sravniMantravelCalculator").attr("width", "100%");

	/* высота фреймов в трансферах	 */
	if ($(window).width() > 868) {
		setTimeout(function () {
			$('.transfers [id*="kiwitaxi_widget_wrapper"] iframe').removeAttr("style");
			$('.transfers [id*="kiwitaxi_widget_wrapper"] iframe').attr("style", "min-height: 160px; width: 100%; height: 150px ");
		}, 1000);
	}
	if ($(window).width() <= 868) {
		setTimeout(function () {
			$('.transfers [id*="kiwitaxi_widget_wrapper"] iframe').removeAttr("style");
			$('.transfers [id*="kiwitaxi_widget_wrapper"] iframe').attr("style", "min-height: 300px; width: 100%; height: 300px ");
		}, 500);
	}

	$('.search_system_list li:nth-of-type(2)').click(function () {
		if ($(window).width() > 1000) {
			setTimeout(function () {
				$(".transfers #intuiIframe").removeAttr("style", "height");
				$(".transfers #intuiIframe").attr("height", "470");
			}, 500);
		}
		if ($(window).width() <= 1000 && $(window).width() > 372) {
			setTimeout(function () {
				$(".transfers #intuiIframe").removeAttr("style", "height");
				$(".transfers #intuiIframe").attr("height", "650");
			}, 500);
		}
	});
	/* ===================== */
	
	/* $(".big_block>div>div").removeAttr("style");
	$(".small_block>div>div").removeAttr("style");
	$(".small_block_2>div>div").removeAttr("style");
	 */
});



























