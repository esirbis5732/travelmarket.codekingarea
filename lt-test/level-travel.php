<?require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<head>
	<link href="/bitrix/css/main/bootstrap.min.css" rel="stylesheet">
    <link href="/lt-test1/style.css" rel="stylesheet">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="/local/templates/general_2/js/range_picker.min.js"></script>
	<link href="/local/templates/general_2/js/range-picker.css" rel="stylesheet">
    <script src="/lt-test/script.js"></script>
</head>

<main id="top" class="directions">
	<div class="container">
		<h1>Поиск туров</h1>
		<div class="col-md-12" style="padding-bottom:40px;margin-top:60px;">
			<div class="row d-flex">
				<script type="text/javascript" charset="UTF=8">!(function(e,t){var n=t.createElement("div"),r=t.scripts[t.scripts.length-1],i={"width":"auto","url_params":{},"target":"_self","localStorage":false,"geoLocation":true,"search_params":{"from":{"name_en":"Moscow","iso2":"RU"},"to":null,"nights":7,"adults":2,"kids":[],"start_date":null,"flex_dates":false,"flex_nights":false,"stars":{"from":1,"to":5},"currNightsQty":7}},a="LTApiInit",o=e.LTApi,s=[{"api_key":"9d611f32b98986fd5ce01cc19c1da932"},{"api_host":"api.level.travel","public_host":"level.travel"}];r.parentNode.insertBefore(n,r),n.id="__lt-widget-place",i.place=n,o||e[a]?function t(){var n=e.LTApi;n?(n.setup(s[0],s[1]),new n.Widgets.Search(i)):setTimeout(t,100)}():function(){var n=t.createElement("script");e[a]=e[a]||{},e[a].setup=s[0],e[a].envconfig=s[1],e[a].Search=i,n.setAttribute("sync",!0),n.setAttribute("charset","UTF-8"),n.setAttribute("type","text/javascript"),n.setAttribute("src","//api.level.travel/js/5.0/open_api.js"),t.head.appendChild(n)}()})(window, document)</script>
    			<div class="search-submit"><button class="btn-search">Найти</button></div>
			</div>
		</div>

		<div class="col-md-12 col-xs-12 col-sm-12">
			<div class="row">
			<table class="table">
			  <thead class="thead-light">
				<tr>
				  <th scope="col">Travelata</th>
				  <th scope="col">Level.Travel</th>
				  <th scope="col">Слетать ру</th>
				  <th scope="col">Склейка</th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <td scope="row"><div class="tours_travelata"></div></td>
				  <td><div class="tours_leveltravel"></div></td>
				  <td><div class="tours_sletatru"></div></td>
				  <td><div class="tours_all"></div></td>
				</tr>
			  </tbody>
			</table>
			</div>
		</div>
	</div>
</main>
<script>
$("#date_range").rangepicker({
    type: "double",
    startValue: 10000,
    endValue: 300000,
    translateSelectLabel: function(currentPosition, totalPosition) {
        return parseInt(300000*(currentPosition / totalPosition));
    }
});
</script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>