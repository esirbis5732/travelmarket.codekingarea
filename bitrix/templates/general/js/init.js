$(document).ready(function(){
		
	$('.burger').click(function(){
		$(this).next('ul').slideToggle();		
	});
		
	$(function(){
		$("a[href^='#']").click(function(){
			var _href = $(this).attr("href");
			$("html, body").animate({scrollTop: $(_href).offset().top-150+"px"}, 1000);
			return false;			
		});
	});
	
	$('.js_tab_trigger').click(function() {
	   var id = $(this).attr('data-tab'),
		   content = $('.js_tab_content[data-tab="'+ id +'"]');
	   
	   $('.js_tab_trigger.active').removeClass('active'); // 1
	   $(this).addClass('active'); // 2
	   
	   $('.js_tab_content.active').removeClass('active'); // 3
	   content.addClass('active'); // 4	   
	  	
	});
	
	
	$('.js_tab_trigger_1').click(function() {
		
			$('html, body').animate({ 
				  scrollTop: $("#main_search").offset().top+"px" 
			 }, 1000);
			/* return false; */
				
		   var id = $(this).attr('data-tab'),
			   content = $('.js_tab_content_1[data-tab="'+ id +'"]');
		
		   $('.js_tab_trigger_1.active').removeClass('active'); 
		   $(this).addClass('active'); 
		   
		   $('.js_tab_content_1.active').removeClass('active'); 
		   content.addClass('active');  
		
		
	  	
	});
	

	//$('.main_menu li a').click(function(){
		//event.preventDefault();
		/* $(".main_menu_submenu").attr("style", "display: none;"); */
		//$(this).next('ul').slideToggle();		
	//});
	
	
	
	$(function(){
    $('.main_menu>li>a').on('click', function(e) {
        if ($(this).parent().find('ul').length > 0) {
            e.preventDefault();
            $(this).next('ul').slideToggle();	
        }
    });
});
	
	
	
	$("#tpcwl_iframe").removeAttr("style", "height");
	$("#tpcwl_iframe").attr("style", "min-height: 288px; width: 100%; height: 288px;");
	
	
});






















