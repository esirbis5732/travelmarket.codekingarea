$(document).ready(function() {
    $(".search-submit>button").click(function (e) {
        e.preventDefault();

        //Страна, город, отель
        var to_country = getCountryForRequest();
        console.log(to_country);
        //Дата
        var date_start = getDateForRequest();
        console.log(date_start);
        //Количество ночей
        var nights = getNightsForRequest();
        console.log(nights);
        //Количество человек
        var adults = getAdultsForRequest();
        console.log(adults);
       //Откуда
        var arFrom = getFromForRequest();
        var from_sity = arFrom["from_sity"];
        var from_country = arFrom["from_country"];
        console.log(from_sity);
        console.log(from_country);
        //Поиск отелей
        var htmlText = ajaxRequest(false, "POST", "ajax.php", "html", {"get_hotels": true, "type": "", "from_city": from_sity, "from_country": from_country, "to_country": to_country, "nights": nights, "adults": adults, "start_date": date_start});
        $(".hotels").html(htmlText);

        //return false;

        //Travelata
        //Страна, город, отель
        var to_country = getCountryForRequest("travelata");
        console.log(to_country);
        //Дата
        var date_start = getDateForRequest("travelata");
        console.log(date_start);
        //Количество ночей
        var nights = getNightsForRequest();
        console.log(nights);
        //Количество человек
        var adults = getAdultsForRequest();
        console.log(adults);
        //Откуда
        var arFrom = getFromForRequest("travelata");
        var from_sity = arFrom["from_sity"];
        console.log(from_sity);
        //Поиск отелей
        var htmlText = ajaxRequest(false, "POST", "ajax.php", "html", {"get_hotels": true, "type": "travelata", "from_city": from_sity, "from_country": from_country, "to_country": to_country, "nights": nights, "adults": adults, "start_date": date_start});
        $(".hotels-travelata").html(htmlText);

        //In common
        var htmlText = getHotelsInCommon();
        $(".hotels-in-common").html(htmlText);

        return false;
    })
})

function getCountryForRequest(type = ""){

    //Страна, город, отель
    var countryValue = $('[data-reactid=".0.0.0.0.0.0"]').val();

    if (type == ""){
        var to_country = ajaxRequest(false, "POST", "ajax.php", "html", {"get_country_by_russian": true,"value": countryValue, "type": ""});

    }else if (type == "travelata"){
        var to_country = ajaxRequest(false, "POST", "ajax.php", "html", {"get_country_by_russian": true,"value": countryValue, "type": "travelata"});

    }

    to_country = to_country.replace(/\r?\n/g, "");
    to_country = to_country.replace(" ", "");

    return to_country;
}

function getDateForRequest(type = "") {

    var value = $('[data-reactid=".0.0.0.0.1.0"]').text();

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
    var date_start = date.toLocaleString("ru", options);

    if (type == ""){

    }else if (type == "travelata"){
        var arSplits = date_start.split(".");
        date_start = arSplits[2] + "-" + arSplits[1] + "-" + arSplits[0];
    }

    return date_start;
}

function getNightsForRequest(type = "") {
    var value = $('[data-reactid=".0.0.0.0.2.0"]').text();
    var arr = value.split(" ");
    var nights = arr[0];

    return nights;
}

function getAdultsForRequest() {
    var value = $('[data-reactid=".0.0.0.0.3.0"]').text();
    var arr = value.split(" ");
    var adults = arr[0];

    return adults;
}

function getFromForRequest(type = "") {

    var from_sity = "";
    var from_country = "";
    var name_ru = "";

    var value = $('[data-reactid=".0.0.0.0.4.1"]').val();
    var cash = localStorage.getItem('departures');
    var returnObj = JSON.parse(cash);
    for (var i = 0; i < returnObj.length - 1; i++) {
        if (returnObj[i]["name_ru_form2"] == value){
            from_sity = returnObj[i]["name_en"];
            from_country = returnObj[i]["iso2"];
            name_ru = returnObj[i]["name_ru"];
            break;
        }
    }

    if (type == "travelata"){
        var arDepurtures = getTravelataDepartures();
        for( var i = 0; i < arDepurtures.length; ++i ) {
            if (arDepurtures[i]["city"] == name_ru) {
                from_sity = arDepurtures[i]["id"];
                break;
            }
        }
    }

    return {"from_sity": from_sity, "from_country": from_country};
}

function getTravelataDepartures() {
    var arDepurtures = new Array();

    arDepurtures.push({"id":90,"city":"Абакан"});
    arDepurtures.push({"id":8,"city":"Архангельск"});
    arDepurtures.push({"id":10,"city":"Астрахань"});
    arDepurtures.push({"id":12,"city":"Барнаул"});
    arDepurtures.push({"id":13,"city":"Белгород"});
    arDepurtures.push({"id":15,"city":"Благовещенск"});
    arDepurtures.push({"id":18,"city":"Брянск"});
    arDepurtures.push({"id":19,"city":"Владивосток"});
    arDepurtures.push({"id":20,"city":"Владикавказ"});
    arDepurtures.push({"id":21,"city":"Волгоград"});
    arDepurtures.push({"id":22,"city":"Воронеж"});
    arDepurtures.push({"id":25,"city":"Екатеринбург"});
    arDepurtures.push({"id":28,"city":"Иркутск"});
    arDepurtures.push({"id":29,"city":"Казань"});
    arDepurtures.push({"id":30,"city":"Калининград"});
    arDepurtures.push({"id":32,"city":"Кемерово"});
    arDepurtures.push({"id":36,"city":"Краснодар"});
    arDepurtures.push({"id":37,"city":"Красноярск"});
    arDepurtures.push({"id":38,"city":"Курган"});
    arDepurtures.push({"id":39,"city":"Курск"});
    arDepurtures.push({"id":91,"city":"Липецк"});
    arDepurtures.push({"id":42,"city":"Магадан"});
    arDepurtures.push({"id":43,"city":"Магнитогорск"});
    arDepurtures.push({"id":92,"city":"Махачкала"});
    arDepurtures.push({"id":44,"city":"МинеральныеВоды"});
    arDepurtures.push({"id":2,"city":"Москва"});
    arDepurtures.push({"id":46,"city":"Мурманск"});
    arDepurtures.push({"id":47,"city":"Нальчик"});
    arDepurtures.push({"id":48,"city":"Нижневартовск"});
    arDepurtures.push({"id":50,"city":"НижнийНовгород"});
    arDepurtures.push({"id":51,"city":"Новокузнецк"});
    arDepurtures.push({"id":52,"city":"Новороссийск"});
    arDepurtures.push({"id":53,"city":"Новосибирск"});
    arDepurtures.push({"id":56,"city":"Омск"});
    arDepurtures.push({"id":57,"city":"Оренбург"});
    arDepurtures.push({"id":60,"city":"Пенза"});
    arDepurtures.push({"id":61,"city":"Пермь"});
    arDepurtures.push({"id":62,"city":"Петропавловск-Камчатский"});
    arDepurtures.push({"id":63,"city":"Ростов-на-Дону"});
    arDepurtures.push({"id":64,"city":"Самара"});
    arDepurtures.push({"id":1,"city":"Санкт-Петербург"});
    arDepurtures.push({"id":65,"city":"Саратов"});
    arDepurtures.push({"id":66,"city":"Симферополь"});
    arDepurtures.push({"id":67,"city":"Сочи"});
    arDepurtures.push({"id":93,"city":"Ставрополь"});
    arDepurtures.push({"id":68,"city":"Сургут"});
    arDepurtures.push({"id":70,"city":"Сыктывкар"});
    arDepurtures.push({"id":71,"city":"Тольятти"});
    arDepurtures.push({"id":72,"city":"Томск"});
    arDepurtures.push({"id":74,"city":"Тюмень"});
    arDepurtures.push({"id":75,"city":"Улан-Удэ"});
    arDepurtures.push({"id":76,"city":"Ульяновск"});
    arDepurtures.push({"id":79,"city":"Уфа"});
    arDepurtures.push({"id":80,"city":"Хабаровск"});
    arDepurtures.push({"id":81,"city":"Ханты-Мансийск"});
    arDepurtures.push({"id":83,"city":"Чебоксары"});
    arDepurtures.push({"id":84,"city":"Челябинск"});
    arDepurtures.push({"id":85,"city":"Чита"});
    arDepurtures.push({"id":87,"city":"Южно-Сахалинск"});
    arDepurtures.push({"id":88,"city":"Якутск"});

    return arDepurtures;
}

function ajaxRequest(async, type, url, dataType, dataRequest) {
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

function getHotelsInCommon(){

    console.log($(".hotels-travelata").find($(".hotel")));

    var arTravelata = new Array();
    $(".hotels-travelata").find($(".hotel")).each(function (index, element) {
        var name = $(element).find(".hotel_name").prop("innerText");
        var href = $(element).find(".hotel_name>a").attr("href");
        var img = $(element).find(".hotel_left>p>img").prop("src");
        var price = $(element).find(".hotel_price").prop("innerText");
        arTravelata.push({href: href, name: name, img: img, price: price})
    });

    var arLevelTravel = new Array();
    $(".hotels").find($(".hotel")).each(function (index, element) {
        var name = $(element).find(".hotel_name").prop("innerText");
        var href = $(element).find(".hotel_name>a").attr("href");
        var price = $(element).find(".hotel_price").prop("innerText");
        arLevelTravel.push({href: href, name: name, price: price})
    });

    arHotelsInCommon = new Array();
    arTravelata.forEach((item, index, array) => {
        let hotel = arLevelTravel.find(itemlt => itemlt.name == item.name);
        if (hotel != undefined){
            arHotelsInCommon.push({hreflt: hotel.href, hreftr: item.href, pricelt: hotel.price, pricetr: item.price, name: item.name, img: item.img});
        }
    });

    console.log(arHotelsInCommon);

    var html = "";
    arHotelsInCommon.forEach((item, index, array) => {
        html = html + "<div>" +
        "<div class='hotel'> " +
            "<div class='hotel_left'> " +
                "<p><img src='" + item.img + "' alt='Изображение'></p> " +
            "</div> " +
            "<div class='hotel_right'> " +
                "<div class='hotel_right_top'> " +
                    "<div class='hotel_right_top_row'> " +
                        "<div class='hotel_stars'></div> " +
                        "<div class='hotel_location'></div> " +
                    "</div> " +
                    "<div class='hotel_name'> " +
                        "<a href='"+ item.hreflt +"' target='_blank'>level.travel: "+ item.name +" от " + item.pricelt + "</a> " +
                        "<br>" +
                        "<a href='"+ item.hreftr +"' target='_blank'>travelata: "+ item.name +" от " + item.pricetr + "</a> " +
                    "</div> " +
                "</div> " +
                "<div class='hotel_right_bottom'> " +
                    "<div class='hotel_price'></div> " +
                "</div> " +
            "</div> " +
        "</div> " +
        "</div>";
    });

    return "<br> Общие отели " + html;
}


