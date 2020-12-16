<?require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");?>
<?require_once($_SERVER['DOCUMENT_ROOT'] . "/lt-test/functions.php");?>

<head>
    <link href="/lt-test/style.css" rel="stylesheet">
</head>

<body xmlns="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="/lt-test/script.js"></script>
    <script type="text/javascript" charset="UTF=8">!(function(e,t){var n=t.createElement("div"),r=t.scripts[t.scripts.length-1],i={"width":"auto","url_params":{},"target":"_self","localStorage":false,"geoLocation":true,"search_params":{"from":{"name_en":"Moscow","iso2":"RU"},"to":null,"nights":7,"adults":2,"kids":[],"start_date":null,"flex_dates":false,"flex_nights":false,"stars":{"from":1,"to":5},"currNightsQty":7}},a="LTApiInit",o=e.LTApi,s=[{"api_key":"9d611f32b98986fd5ce01cc19c1da932"},{"api_host":"api.level.travel","public_host":"level.travel"}];r.parentNode.insertBefore(n,r),n.id="__lt-widget-place",i.place=n,o||e[a]?function t(){var n=e.LTApi;n?(n.setup(s[0],s[1]),new n.Widgets.Search(i)):setTimeout(t,100)}():function(){var n=t.createElement("script");e[a]=e[a]||{},e[a].setup=s[0],e[a].envconfig=s[1],e[a].Search=i,n.setAttribute("sync",!0),n.setAttribute("charset","UTF-8"),n.setAttribute("type","text/javascript"),n.setAttribute("src","//api.level.travel/js/5.0/open_api.js"),t.head.appendChild(n)}()})(window, document)</script>
    
    <div class="search-submit"><button><span>Найти туры</button></div>

    <?php
    //$obHotels = new Hotels("", "", "", "", "", "");
    //$hotels = $obHotels->getHotelsTravelata();
    ?>

    <div class="hotels-travelata"></div>

    <div class="hotels"></div>

    <div class="hotels-in-common"></div>
    
</body>