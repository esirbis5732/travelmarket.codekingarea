$(document).ready(function() 
{
	//SetCookies();
	$("#ajax_load").hide();
	$("#loader").hide();
	$("#btn-filter").hide();
	$(".hotels-counter").hide();
	//
    $(".search-submit>button").click(function (e) 
	{
        e.preventDefault();
		//выбранный город вылета
		var from_sity ="";
		$('li[data-reactid^=".0.0.0.0.4.3.0.0.$departure-"]').each(function()
		{
			var cmp1 = $(this).text().substring(0, $(this).text().length - 1);
			var cmp2 = $('[data-reactid=".0.0.0.0.4.1"]').val().toString().substring(0, $('[data-reactid=".0.0.0.0.4.1"]').val().toString().length - 1); 
			if (cmp1==cmp2)
			{
				from_sity =$(this).text();
			}
		});
        //Страна, город, отель
        var to_country = $('[data-reactid=".0.0.0.0.0.0"]').val();
		if (to_country=='')return;
        //Дата
        var date_start = getDateForRequest();
        //Количество ночей
        var nights = getNightsForRequest();
        //Количество человек
        var adults = getAdultsForRequest();
		//
		var deltanight = 0;
		var deltaday = 0;
		try 
		{
			deltanight = parseInt($('[data-reactid=".0.0.0.0.2.0.1"]').text().replace("±",""));
		}
		catch (e) {deltanight=0;}
		try 
		{
			deltaday = parseInt($('[data-reactid=".0.0.0.0.1.0.1.1"]').text());
		}
		catch (e) 
		{
			deltaday=0;
		}
		//Поиск отелей
		Object.keys(Cookies.get()).forEach(function(cookieName) 
		{
			Cookies.remove(cookieName);
		});

		var htmlText = ajaxRequest(true, "POST", "ajax.php", "html", {"get_hotels": true, "type": "all", "from_city": from_sity, "to_country": to_country, "nights": nights, "adults": adults, "start_date": date_start,"deltaday":deltaday,"deltanight":deltanight});
		//add cookie
		//Cookies.set('[data-reactid=".0.0.0.0.4.1"]', from_sity);
		//Cookies.set('[data-reactid=".0.0.0.0.0.0"]', to_country);
		//Cookies.set('[data-reactid=".0.0.0.0.1.0.0"]', $('[data-reactid=".0.0.0.0.1.0.0"]').text());
		//Cookies.set('[data-reactid=".0.0.0.0.1.0.1.1"]', deltaday); 
		//Cookies.set('[data-reactid=".0.0.0.0.2.0.0"]', $('[data-reactid=".0.0.0.0.2.0"]').text()); 
		//Cookies.set('[data-reactid=".0.0.0.0.2.0.1"]',$('[data-reactid=".0.0.0.0.2.0.1"]').text());
		//Cookies.set('[data-reactid=".0.0.0.0.2.0.1"]',$('[data-reactid=".0.0.0.0.3.0"]').text());
        return false;
    });
	$('div[class*="owlcarousel_"]').hover(function() {
		$(this).find(".slick-prev").css("visibility", "visible");
		$(this).find(".slick-next").css("visibility", "visible");
	}, function() {
		$(this).find(".slick-prev").css("visibility", "hidden");
		$(this).find(".slick-next").css("visibility", "hidden");
	});
	//фильтр по питанию
	function pansionFilter(id)
	{
		var check=false;
		$('div[class*="col-md-12"]').each(function()
		{
			$(this).hide();
		});
		$('input[id*="filter_pansion_"]').each(function(e)
		{
			var select_pansion = this.id.replace("filter_","");
			if(this.checked) 
			{
				check = true;
				$('div[class*="col-md-12"]').each(function()
				{	
					var pansion = $(this).find(".pansion_type");
					if (pansion != null)
					{
						if (pansion.hasClass(select_pansion)) $(this).show();
					}
				});
			}
		});
		if (!check)
		{			
			$('div[class*="col-md-12"]').each(function()
			{
				$(this).show();
			});
		};
		if ($("#"+id).prop('checked')) Cookies.set(id, $("#"+id).prop('checked')); 
		else Cookies.remove(id);
	}
	$('input[id^="filter_pansion_"]').change(function() 
	{
		pansionFilter(this.id);
	});
	//фильтр по звездам
	function starsFilter(id)
	{
		var check=false;
		$('div[class*="col-md-12"]').each(function()
		{
			$(this).hide();
		});
		$('input[id*="stars_filter_"]').each(function(e)
		{
			//hide all
			var select_star = this.id.replace("stars_filter_","");
			if(this.checked) 
			{
				check = true;
				$('div[class*="col-md-12"]').each(function()
				{	
					var star = $(this).find(".hotel-stars-current").attr('class');
					if (star != null)
					{
						if (star.replace("hotel-stars-current hotel-stars-current_","")==select_star) $(this).show();
					}
				});
			}
		});
		if (!check)
		{			
			$('div[class*="col-md-12"]').each(function()
			{
				$(this).show();
			});
		};
		if ($("#"+id).prop('checked')) Cookies.set(id, $("#"+id).prop('checked')); 
		else Cookies.remove(id); 
	}
	$('input[id^="stars_filter_"]').change(function() 
	{
		starsFilter(this.id);
	});
	//фильтр по турам
	function toursFilter(id)
	{
		var check=false;
		$('input[id*="filter_tours_"]').each(function(e)
		{ 
			if(this.checked) 
			{
				check = true;
				$("."+this.id.replace("filter_tours_", "")).show();
			}
			else
			{
				$("."+this.id.replace("filter_", "")).hide();
			}
		});
		if (!check) $('input[id*="filter_tours_"]').each(function(e){ $("."+this.id.replace("filter_", "")).show(); });
		if ($("#"+id).prop('checked'))
		{
			Cookies.set(id, $("#"+id).prop('checked'));
		}
		else Cookies.remove(id);
	}
	$('input[id^="filter_tours_"]').change(function() 
	{
		toursFilter(this.id);
	});
	$("#link-lt").on("click",function(){
		$(".tours_all").hide();
		$(".tours_travelata").hide();
		$(".tours_sletatru").hide();
		$(".tours_leveltravel").show();
	});
	$("#link-tl").on("click",function(){
		$(".tours_all").hide();
		$(".tours_leveltravel").hide();
		$(".tours_sletatru").hide();
		$(".tours_travelata").show();
	});
	$("#link-sletat").on("click",function(){
		$(".tours_all").hide();
		$(".tours_travelata").hide();
		$(".tours_leveltravel").hide();
		$(".tours_sletatru").show();
	});
	$("#link-all").on("click",function(){
		$(".tours_all").show();
		$(".tours_travelata").show();
		$(".tours_leveltravel").show();
		$(".tours_sletatru").show();
	});
	//фильтр по имени отеля
	function nameFilter()
	{
		var value = $(".filter-name__input").val();
		Cookies.set('filter-name__input', $("#filter-name__input").val());
		if (value=="")
		{
			$('div[class*="col-md-12"]').each(function(e)
			{
				$(this).show();
			});
			return;
		}
		$('div[class*="col-md-12"]').each(function(e)
		{
			if ($(this).find(".hotel-explore-link").text().toLowerCase().indexOf(value.toLowerCase())!==-1)$(this).show();
			else $(this).hide();
		});
	}
	$(".filter-name__input").change(function() 
	{
		nameFilter();
	});
	function ratingFilter(id)
	{
		var value = $("#"+id).find(".switcher__button").text();
		$('li[class^="switcher__item"]').each(function()
		{
			if($(this).hasClass("switcher__item_active")) 
			{
				$(this).removeClass("switcher__item_active");
				Object.keys(Cookies.get()).forEach(function(cookieName) 
				{
					if (cookieName.startsWith('switcher__item'))Cookies.remove(cookieName);
				});
			}
		});
		if (value=="Любой")
		{
			$('div[class*="col-md-12"]').each(function()
			{
				$(this).show();
			});
			$("#switcher__item").addClass("switcher__item_active");
			return;
		}
		$('div[class*="col-md-12"]').each(function(e)
	    {
			if (parseInt($(this).find(".hotel-rating-value").text())>=parseInt(value))
			{
				$(this).show();
			}
			else $(this).hide();
		});
		$("#"+id).addClass("switcher__item_active");
		Cookies.set(id, "switcher__item_active"); 
		//scrollToAnchor('content');
	}
	//фильтр по рейтингу
	$('li[class*="switcher__item"]').click(function() 
	{
		ratingFilter(this.id);
	});
	//фильтр по линии
	function lineFilter(id)
	{
		var value = $("#"+id).find(".switcher__button").text();
		$('li[class^="z_switcher__item_s"]').each(function()
		{
			if($(this).hasClass("switcher__item_active")) 
			{
				$(this).removeClass("switcher__item_active");
				Object.keys(Cookies.get()).forEach(function(cookieName) 
				{
					if (cookieName.startsWith('z_switcher__item'))Cookies.remove(cookieName);
				});
			}
		});
		if (value=="Любое")
		{
			$('div[class*="col-md-12"]').each(function()
			{
				$(this).show();
			});
			$("#z_switcher__item_s").addClass("switcher__item_active");
			return;
		}
		$('div[class*="col-md-12"]').each(function(e)
	    {
			if ($(this).find(".hotel__fact-text").text().split('-')[0] == value.split('-')[0]) $(this).show();
			else $(this).hide();
		});
		$("#"+id).addClass("switcher__item_active");
		Cookies.set("z_"+_id, "switcher__item_active"); 
	}
	$('li[class*="z_switcher__item_s"]').click(function() 
	{
		lineFilter(this.id);
	}
	);
	$('#btn-filter').click(function()
	{
		if ($("#filters-list").css('display') == 'none') $("#filters-list").show("fast");
		else $("#filters-list").hide("fast");
    });
	$('button[id*="btn-price-"]').click(function()
	{
		$('button[id*="btn-price-"]').each(function(e)
		{
			if($(this).hasClass("filter-budget__col_active")) 
			{
				$(this).removeClass("filter-budget__col_active");
			}
	    });
		$(this).addClass("filter-budget__col_active");
		var start_price = $("#price_start").text();
		var end_price = $("#price_end").text();
		var index = this.id;
		if (index != null)
		{
			switch (index.replace("btn-price-", "")) 
			{
			  case "1":
				$("#filter_price_start").val(start_price);
				$("#filter_price_end").val(parseInt(end_price/4));
				break;
			  case "2":
				$("#filter_price_start").val(start_price);
				$("#filter_price_end").val(parseInt(end_price/2));
				break;
			  case "3":
				$("#filter_price_start").val(start_price);
				$("#filter_price_end").val(parseInt(end_price));
				break;
			  case "4":
				$("#filter_price_start").val(parseInt(end_price/4));
				$("#filter_price_end").val(parseInt(end_price));
				break;
			  case "5":
				$("#filter_price_start").val(parseInt(end_price/2));
				$("#filter_price_end").val(parseInt(end_price));
				break;
			}
		}
		$('div[class*="col-md-12"]').each(function(e)
	    {
			$price=$(this).find(".item-price").text();
			if ($price!=null) 
			{
				if (parseInt($price)>=parseInt($("#filter_price_start").val()) && parseInt($price)<=$("#filter_price_end").val()) $(this).show();
				else $(this).hide();
			}
		});
    });
	function price_startFilter()
	{
		$('div[class*="col-md-12"]').each(function(e)
	    {
			$price=$(this).find(".item-price").text();
			if ($price!=null) 
			{
				if (parseInt($price)>=parseInt($("#filter_price_start").val()) && parseInt($price)<=$("#filter_price_end").val()) $(this).show();
				else $(this).hide();
			}
		});
		//save param
	    Cookies.set('filter_price_start', $("#filter_price_start").val()); 
	}
	$("#filter_price_start").on('change').change(function() 
	{
		price_startFilter()
	});
	function price_endFilter()
	{
		$('div[class*="col-md-12"]').each(function(e)
	    {
			$price=$(this).find(".item-price").text();
			if ($price!=null) 
			{
				if (parseInt($price)>=parseInt($("#filter_price_start").val()) && parseInt($price)<=$("#filter_price_end").val()) $(this).show();
				else $(this).hide();
			}
		});
		//save param
	    Cookies.set('filter_price_end', $("#filter_price_end").val()); 
	}
	$("#filter_price_end").change(function() 
	{
		price_endFilter();
	});
	function callMore()
	{
		var step = $('#ajax_load').attr("data-load");
		Cookies.set('ajax_load', step);
		var post=[];
		post["ajax_hotels"]= true;
		post["step"]= step;
		$("#loader").show();
		$("#ajax_load").attr("disabled");
		BX.ajax.post(
			"ajax.php",
			post,
			function (data) 
			{
				$("#loader").hide();
				$("#ajax_load").removeAttr("disabled");
				$("#ajax_load").removeAttr("data-load");
				var htmlText = JSON.parse(data);
				if (htmlText["leveltravel"].Lenght<=0 && htmlText["travelata"].Lenght<=0 && htmlText["sletatru"].Lenght<=0)return;
				$(".hotels-counter").show();
				$(".tours_all").append(htmlText.all);
				$(".tours_leveltravel").append(htmlText["leveltravel"]);
				$(".tours_travelata").append(htmlText["travelata"]);
				$(".tours_sletatru").append(htmlText["sletatru"]);
				if ($(window).width()>=992) $("#filters-list").show();
				else $("#btn-filter").show();
				$("#ajax_load").attr('data-load', (Number(step)+1).toString());
				SetMinMaxPriceFilter();
				Cookies.set("ajax_load", step);
				$('div[class*="owlcarousel"]').each(function()
				{
					var owl = $(this);
					owl.slick({
						infinite: true,
						slidesToShow: 1,
						slidesToScroll: 1,
						autoplay: true,
						autoplaySpeed: 2000,
						speed: 500,
						nextArrow: '<button class="slick-next"></button>',
						prevArrow: '<button class="slick-prev"></button>'
					});
				});	
				//
				var cookies = GetListCookie();
				cookies.forEach(function(cookieName, i, arr) 
				{
					if (Cookies.get(cookieName) === undefined || Cookies.get(cookieName) === null) return;
					switch(true)
					{
						case cookieName.startsWith('filter-name'):
							$("#"+cookieName).val(Cookies.get(cookieName));
							nameFilter();
						break;
						case cookieName.startsWith('filter_pansion_'):
							$("#"+cookieName).prop('checked', true);
							pansionFilter(cookieName);
						break;
						case cookieName.startsWith('stars_filter_'):
							$("#"+cookieName).prop('checked', true);
							starsFilter(cookieName);
						break;
						case cookieName.startsWith('link'):
							$("#"+cookieName).text(' '+Cookies.get(cookieName)+' ');
						break;
						case cookieName.startsWith('txt_'):
							$("#"+cookieName).html(Cookies.get(cookieName));
						break;
						case cookieName.startsWith('filter_tours_'):
							$("#"+cookieName).prop('checked', true);
							toursFilter(cookieName);
						break;
						case cookieName.startsWith('filter_price_start'):
							$("#"+cookieName).val(Cookies.get(cookieName));
							 price_startFilter();
						break;
						case cookieName.startsWith('filter_price_end'):
							$("#"+cookieName).val(Cookies.get(cookieName));
							 price_endFilter();
						break;
						case cookieName.startsWith('switcher__item'):
							$("#"+cookieName).addClass('switcher__item_active');
							ratingFilter(cookieName);
						break;
						case cookieName.startsWith('z_switcher__item'):
							cookieName = cookieName.replace("z_","");
							$("#"+cookieName).addClass('switcher__item_active');
							lineFilter(cookieName);
						break;
					}
				});
			}
		);
	}
	$('#ajax_load').click(function()
	{
		callMore();
	});
	function GetListCookie()
	{
		var cookies=[];
		$('.cookie').each(function()
		{
			cookies.push(this.id);
		});
		return cookies;
	}
	function SetCookies()
	{
		//apply data
		$("#ajax_load").attr('data-load', "1");
		var step=2;
		if (Cookies.get("ajax_load") != undefined)
		{
			if (Number(Cookies.get("ajax_load"))>2) 
			{
				step = Cookies.get("ajax_load");
			}
			else return;
			for(var index=1;index<step;index++)
			{
				callMore();
			}
		}
	}
	$(document).on('mouseenter mouseleave', '.hotel',function(e)
	{

		if (e.type == "mouseenter") 
		{
			$(this).find(".slick-prev").show();
			$(this).find(".slick-next").show();
		} 
		else 
		{
			$(this).find(".slick-prev").hide();
			$(this).find(".slick-next").hide();
		}

  	})
})

function getDateForRequest() {

    var value = $('[data-reactid=".0.0.0.0.1.0.0"]').text();
	value = value.replace("вылет ","");
    var now = new Date();
    let arrMonths = ["января", "февраля", "марта", "апреля", "мая", "июня", "июля", "августа", "сентября", "октября", "ноября", "декабря"];

    var arr = value.split(" ");

    for( var i = 0; i < arrMonths.length; ++i ) {
        if (arrMonths[i] == arr[1]) {
            break;
        }
    }
    var day = Number(arr[0]);
    var month = i;
    var year = now.getFullYear();
    var date = new Date(year,month,day);
    var options = {
        year: 'numeric',
        month: 'numeric',
        day: 'numeric',
        timezone: 'UTC'
    };
    return date.toLocaleString("ru", options);
}

function getNightsForRequest(type = "") 
{
    var value = $('[data-reactid=".0.0.0.0.2.0"]').text();
    var arr = value.split(" ");
    var nights = arr[0];
    return nights;
}
function SetMinMaxPriceFilter()
{
	var min = Number.MAX_SAFE_INTEGER;
	var max = Number.MIN_SAFE_INTEGER;
	$(".item-price").each(function(e)
	{
	   if(Number($(this).text()) > max) max=Number($(this).text());
	   if(Number($(this).text()) < min) min=Number($(this).text()); 
	});
	$("#filter_price_start").val(min);
	$("#filter_price_end").val(max);
	$("#price_start").text(min);
	$("#price_end").text(max);
}
function getAdultsForRequest() 
{
    var value = $('[data-reactid=".0.0.0.0.3.0"]').text();
    var arr = value.split(" ");
    var adults = arr[0];
    return adults;
}
function scrollToAnchor(aid){
    var aTag = $("a[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset()},'slow');
}
function ajaxRequest(async, type, url, dataType, post) 
{
	$("#loader").show();
    var response = "";
	BX.ajax.post(
        url,
        post,
        function (data) 
		{
			//console.log(data);
			var htmlText = JSON.parse(data);
			Cookies.set("ajax_load", 2);
			$(".tours_all").html(htmlText.all);
			$(".tours_leveltravel").html(htmlText["leveltravel"]);
			$(".tours_travelata").html(htmlText["travelata"]);
			$(".tours_sletatru").html(htmlText["sletatru"]);
			SetMinMaxPriceFilter();
			var summ_s = htmlText["sletatru_param"]["count"] + htmlText["travelata_param"]["count"] + htmlText["leveltravel_param"]["count"];
			$(".hotels-counter").show();
			$("#link-lt-text").text(" "+htmlText["leveltravel_param"]["count"]+" туров, ");
			Cookies.set("link-lt-text", $("#link-lt-text").text());
			$("#link-tl-text").text(" "+htmlText["travelata_param"]["count"]+" туров, ");
			Cookies.set("link-tl-text", $("#link-tl-text").text());
			$("#link-sletat-text").text(" "+htmlText["sletatru_param"]["count"]+" туров, ");
			Cookies.set("link-sletat-text", $("#link-sletat-text").text());
			$("#link-all-text").text(" "+summ_s+" туров");
			Cookies.set("link-all-text", $("#link-all-text").text());
			if ($.isNumeric(htmlText["travelata_param"]["min_price"])) 
			{
				$(".travelata_min_price").html("от&nbsp;"+htmlText["travelata_param"]["min_price"]+"&nbsp;₽");
				Cookies.set("txt_travelata_min_price", "от&nbsp;"+htmlText["travelata_param"]["min_price"]+"&nbsp;₽");
			}
			if ($.isNumeric(htmlText["sletatru_param"]["min_price"]))
			{	
				$(".sletatru_min_price").html("от&nbsp;"+htmlText["sletatru_param"]["min_price"]+"&nbsp;₽");
				Cookies.set("txt_sletatru_min_price", "от&nbsp;"+htmlText["sletatru_param"]["min_price"]+"&nbsp;₽");
			}
			if ($.isNumeric(htmlText["leveltravel_param"]["min_price"]))
			{
				$(".leveltravel_min_price").html("от&nbsp;"+htmlText["leveltravel_param"]["min_price"]+"&nbsp;₽");
				Cookies.set("txt_leveltravel_min_price", "от&nbsp;"+htmlText["leveltravel_param"]["min_price"]+"&nbsp;₽");
			}
			if ($(window).width()>=992) $("#filters-list").show();
			else $("#btn-filter").show();
			$("#loader").hide();
			$("#ajax_load").show();
			$('div[class*="owlcarousel"]').each(function()
			{
				var owl = $(this);
				owl.slick({
					infinite: true,
					slidesToShow: 1,
  					slidesToScroll: 1,
					autoplay: true,
 					autoplaySpeed: 2000,
					speed: 500,
					nextArrow: '<button class="slick-next"></button>',
  					prevArrow: '<button class="slick-prev"></button>'
				});
			});
        }
    );
    return response;
}

