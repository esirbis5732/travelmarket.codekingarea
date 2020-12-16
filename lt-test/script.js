$(document).ready(function() {
    $(".search-submit>button").click(function (e) {
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
        //Дата
        var date_start = getDateForRequest();
        //Количество ночей
        var nights = getNightsForRequest();
        //Количество человек
        var adults = getAdultsForRequest();
		//Поиск отелей
		console.log("112111111111");
		var htmlText = ajaxRequest(false, "POST", "ajax.php", "html", {"get_hotels": true, "type": "all", "from_city": from_sity, "to_country": to_country, "nights": nights, "adults": adults, "start_date": date_start});
		console.log("1111111111");
		htmlText = JSON.parse(htmlText);
		//
        $(".tours_all").html(htmlText.all);
		$(".tours_leveltravel").html(htmlText["leveltravel"]);
		$(".tours_travelata").html(htmlText["travelata"]);
		$(".tours_sletatru").html(htmlText["sletatru"]);
		/*$('.owl-carousel').owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			autoplay:true,
			items:1
		})(jQuery_1_8_3);*/

        return false;
    });
	$('input[id^="filter_tours_"]').change(function() 
	{
		var check=false;
		$('input[id*="filter_tours_"]').each(function(e)
		{ 
			if(this.checked) 
			{
				check = true;
				$("."+this.id.replace("filter_", "")).show();
			}
			else
			{
				$("."+this.id.replace("filter_", "")).hide();
			}
		});
		if (!check) $('input[id*="filter_tours_"]').each(function(e){ $("."+this.id.replace("filter_", "")).show(); });
	});
})

function getDateForRequest() {

    var value = $('[data-reactid=".0.0.0.0.1.0"]').text();
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

function getAdultsForRequest() 
{
    var value = $('[data-reactid=".0.0.0.0.3.0"]').text();
    var arr = value.split(" ");
    var adults = arr[0];
    return adults;
}

function ajaxRequest(async, type, url, dataType, dataRequest) 
{
    var response = "";
    $.ajax({
        async: async,
        type: type,
        url: url,
        dataType: dataType,
        data: dataRequest,
        success: function(data){
            response = data;
        }
    })
    return response
}


