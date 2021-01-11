<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetAdditionalCSS("/local/templates/general_2/js/owl.carousel.css");
$APPLICATION->SetPageProperty("keywords", "туры пляжный отдых пляжные туры цены  недорогой пляжный отдых пляжный отдых за границей пляжный отдых без визы");
$APPLICATION->SetPageProperty("keywords_inner", "туры пляжный отдых пляжные туры цены пляжный отдых за границей пляжный отдых без визыы");
$APPLICATION->SetPageProperty("twitter:image", "https://u-travell.ru/local/templates/general_2/img/beach_tours_wide_og_tw.png");
$APPLICATION->SetPageProperty("fb:image", "https://u-travell.ru/local/templates/general_2/img/beach_tours_wide_og_tw.png");
$APPLICATION->SetPageProperty("vk:image", "https://u-travell.ru/local/templates/general_2/img/beach_tours_wide_og_vk.png");
$APPLICATION->SetPageProperty("og:image", "https://u-travell.ru/local/templates/general_2/img/beach_tours_wide_og_tw.png");
$APPLICATION->SetPageProperty("title", "Пляжный отдых - лучшие туры - недорогой пляжный отдых за границей");
$APPLICATION->SetPageProperty("description", "Лучшие туры для пляжного отдыха по низким ценам. Недорогой пляжный отдых за границей. Онлайн бронирование туров без наценки.");
$APPLICATION->SetTitle("Пляжные туры");
?><main id="main_search" class="beach_tours"> 
	<section class="main_search anchor_scroll">
<div class="anchor_block">
 <a class="active" href="#main_search"><dfn class="background_dark" data-info="Поиск туров"><img src="/local/templates/general_2/img/avia_1_d.png" alt=""></dfn></a>
 <?if(CModule::IncludeModule("iblock"))
    	{
       	 $id_block=9;
       	 $section_id = 0;
       	 $items = GetIBlockElementList($id_block, $section_id, Array("SORT"=>"ASC",));
       		 while($arItem = $items->GetNext())
        		{
	?>
	
		<?if($arItem["ACTIVE_FROM"] <= date('d.m.Y') && date('d.m.Y')<=$arItem["ACTIVE_TO"]){?>
		  <a href="<?=$arItem["CODE"]?>"><dfn class="background_dark" data-info="<?=$arItem["NAME"]?>"><img src="/local/templates/general_2/img/mayskie_prazdniki_blue.svg" alt=""></dfn></a>
		<?}?>
	<?
        }
		}
	?>
  <a href="#inclusion"><dfn class="background_dark" data-info="Майские 2020"><img src="/local/templates/general_2/img/mayskie_prazdniki_blue.svg" alt=""></dfn></a>
	<!--<a href="#tour_selection"><dfn class="background_dark" data-info="Подбор тура"><img src="<?//=SITE_TEMPLATE_PATH?>/img/icon_3_blue.png" alt=""></dfn></a>-->
	 <a href="#statistics"><dfn class="background_dark" data-info="График цен"><img src="/local/templates/general_2/img/icon_1_blue.png" alt=""></dfn></a>
	  <a href="#last_minute_tours"><dfn class="background_dark" data-info="Горящие туры"><img src="/local/templates/general_2/img/avia_3_d.png" alt=""></dfn></a>
	   <a href="#tour_best_price"><dfn class="background_dark" data-info="Календарь лучших цен"><img src="/local/templates/general_2/img/avia_4_d.png" alt=""></dfn></a>

</div>
<div class="container">
 <img src="/local/templates/general_2/img/beach_tours_background_big.png" class="main_img" alt="">
	<h1>Пляжные туры</h1>
	<ul class="search_form_list">
		<li class="js_tab_content_1 active" data-tab="1">
		<script type="text/javascript" charset="UTF=8">!(function(e,t){var n=t.createElement("div"),r=t.scripts[t.scripts.length-1],i={"width":"auto","url_params":{},"target":"_blank","localStorage":false,"geoLocation":true,"search_params":{"from":{"name_en":"Moscow","iso2":"RU"},"to":null,"nights":7,"adults":2,"kids":[],"start_date":null,"flex_dates":false,"flex_nights":false,"stars":{"from":1,"to":5},"currNightsQty":7}},a="LTApiInit",s=e.LTApi,o=[{"api_key":"9d611f32b98986fd5ce01cc19c1da932"},{"api_host":"api.level.travel","public_host":"level.travel"}];r.parentNode.insertBefore(n,r),n.id="__lt-widget-place",i.place=n,s||e[a]?function t(){var n=e.LTApi;n?(n.setup(o[0],o[1]),new n.Widgets.Search(i)):setTimeout(t,100)}():function(){var n=t.createElement("script");e[a]=e[a]||{},e[a].setup=o[0],e[a].envconfig=o[1],e[a].Search=i,n.setAttribute("async",!0),n.setAttribute("charset","UTF-8"),n.setAttribute("type","text/javascript"),n.setAttribute("src","//api.level.travel/js/5.0/open_api.js"),t.head.appendChild(n)}()})(window, document)</script> </li>
		<li class="js_tab_content_1" data-tab="2">
		<script src="https://c18.travelpayouts.com/content?promo_id=1492&shmarker=200556&countries=0&powered_by=true" charset="utf-8" async></script> </li>
		<li class="js_tab_content_1" data-tab="3">
		<iframe id="onlinetours_1" src="https://c43.travelpayouts.com/content?promo_id=1189&shmarker=200556&widget=940x220" width="940" height="220" frameborder="0" scrolling="no"> </iframe> <iframe id="onlinetours_2" src="https://c43.travelpayouts.com/content?promo_id=1193&shmarker=200556&widget=305x660" width="660" height="305" frameborder="0" scrolling="no"> </iframe> <iframe  id="onlinetours_3" src="https://c43.travelpayouts.com/content?promo_id=1194&shmarker=200556&widget=306x488" width="306" height="488" frameborder="0" scrolling="no"> </iframe> </li>
		 <!--<li class="js_tab_content_1" data-tab="4">
			<script src="https://c45.travelpayouts.com/content?promo_id=1809&shmarker=200556&hide_logo=false&hide_logo_tab=true&color_scheme=basic_white&tab1=3&tabDef=3&powered_by=true" charset="utf-8" async="true"></script>
		</li>-->
		<li class="js_tab_content_1" data-tab="5">
		<div data-sletat-module-id="sletat-partner-module">
		</div>
		 <script>window.sletatPartnerModuleSettings = { "sletat-partner-module": { "admitadUid": "dma92caykqd76d4286da01ed775fd6", "departCityId": 832, "arrivalCountryId": 113, "hotelsIds": [], "currency": "RUB", "theme": "transparent", "isFormExtended": true, "externalFiles": [ "https://u-travell.ru/local/templates/general_2/template_styles.css" ] } }</script> <script charset="utf-8" src="https://front.sletat.ru/modules/module6/latest/module.js" defer></script> </li>
	</ul>
</div>
<div class="search_system_wrapper">
	<p class="search_system_selection">
		 Выберите поисковую систему
	</p>
	<div class="container">
		<ul class="search_system_list">
			<li class="js_tab_trigger_1 logo_box_item active" data-tab="1">
			<div class="tip">
				 Level.Travel — это автоматизированная система поиска туров от всех надежных туроператоров и их покупки в режиме онлайн, без участия турагента. Система Level.travel интегрирована напрямую с ведущими туроператорами России, поэтому все цены на сайте на 100% финальны и актуальны и все туры доступны для бронирования онлайн (без звонков в колл-центр). <span class="close"> </span>
			</div>
 <img src="/local/templates/general_2/img/leveltravel.png" alt=""> </li>
			<li class="js_tab_trigger_1 logo_box_item" data-tab="2">
			<div class="tip">
				 Travelata.ru — это поиск самых выгодных туров. К проекту подключено более 120 туроператоров, и Травелата гарантирует, что эти туры можно купить по самым выгодным условиям. <span class="close"> </span>
			</div>
 <img src="/local/templates/general_2/img/travelata.png" alt=""> </li>
			<li class="js_tab_trigger_1 logo_box_item" data-tab="3">
			<div class="tip">
				 Onlinetours — популярный онлайн-сервис по продаже туров от ведущих туроператоров, более чем в 80 стран мира. Миллионы турпакетов, в которые входят авиабилеты, проживание в отеле, медицинская страховка и трансфер. <span class="close"> </span>
			</div>
 <img src="/local/templates/general_2/img/onlinetours.png" alt=""> </li>
			 <!--<li class="js_tab_trigger_1 logo_box_item" data-tab="4">	
				<div class="tip">
					Туту.ру — популярный сервис путешествий. Мы работаем с 2003 года. На сайте tutu.ru покупают онлайн ж/д билеты, авиабилеты, билеты на автобусы, горящие туры.
					<span class="close"> </span>
				</div>
				<img src="/local/templates/general_2/img/tutu.png" alt="">	
			</li>-->
			<li class="js_tab_trigger_1 logo_box_item" data-tab="5">
			<div class="tip">
				 Слетать.ру — сервис сравнения туров от всех крупных туроператоров России. На sletat.ru можно выбрать путешествие на море, горнолыжный курорт, экскурсионный тур, забронировать в режиме онлайн и оплатить банковской картой.Быстрый поиск: 1000 вариантов от всех туроператоров за пару секунд. Компания Слетать.ру осуществляет свою деятельность с 2010 года и является одним из лидеров отрасли. <span class="close"> </span>
			</div>
 <img alt="Sletat RU" src="/local/templates/general_2/img/logo_min/sletat_ru.jpg"> </li>
		</ul>
	</div>
</div>
 </section>
<div class="container">
 <section class="logo_box" data-aos="fade-up">
	<h2>Еще больше предложений по подбору туров</h2>
 <a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/7v8gnyf9f2d76d4286da1be5ac5012/">
	<div class="tip">
		 Алеан - лидер среди компаний, организующих отдых на курортах РФ. Ежегодно по результатам различных рейтингов Алеан занимает верхние строчки предпочтений среди агентств и туристов. Сегодня в России, Беларуси и Азербайджане работает 12 офисов и представительств, обеспечивающих организованный отдых на российских курортах, в странах СНГ и Прибалтики. <span class="close"> </span>
	</div>
 <img alt="Alean" src="/local/templates/general_2/img/logo_min/alean.jpg"> </a> <a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/qgduo66x9id76d4286da69b991bd5d/">
	<div class="tip">
		 Туроператор «Дельфин» — команда специалистов, профессионалов своего дела. Уже более 25 лет мы помогаем туристам организовать отдых и путешествия по России, и ближнему зарубежью. Внутренний туризм – наша специализация. Это то, в чем мы разбираемся на «отлично»! <span class="close"> </span>
	</div>
 <img alt="Delfin Tour" src="/local/templates/general_2/img/logo_min/delfin_tour.jpg"> </a> <a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/6ef7bcadc9d76d4286da4c15c68865/">
	<div class="tip">
		 OZON.travel — онлайн-магазин путешествий, где вы найдёте все, что нужно для самостоятельной поездки. Быстро. Надежно. Выгодно. Тысячи вариантов авиабилетов, железнодорожные билеты и страховые полисы — OZON.travel позволяет приобрести полный пакет для поездки по России и за рубеж. <span class="close"> </span>
	</div>
 <img alt="Ozon travel" src="/local/templates/general_2/img/logo_min/ozon_travel.png"> </a> <a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/24oby4leusd76d4286da59fafa9a7f/">
	<div class="tip">
		 Tez Tour - международный туристический оператор. Лидер по отправке туристов из России, стран бывшего СНГ и Восточной Европы. Основан в 1994 году. <span class="close"> </span>
	</div>
 <img alt="Tez Tour" src="/local/templates/general_2/img/logo_min/tez_tour.png"> </a> <!--<a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/239cb0bc31d76d4286dabf3e570a18/?ulp=https%3A%2F%2Ftours.svyaznoy.travel%2F">
		<div class="tip">
			Связной Трэвел — это яркий проект ГК «Связной», который объединяет ключевые сервисы для организации путешествий в рамках масштабной платформы, что позволяет максимально удобно и оперативно организовать свой отдых или бизнес-поездку.
			<span class="close"> </span>
		</div>
		<img alt="Связной трэвел " src="/local/templates/general_2/img/logo_min/svyaznoi.png">
	</a>--> <a class="logo_box_item" target="_blank" href="https://c47.travelpayouts.com/click?shmarker=200556&promo_id=1944&source_type=link&type=click">
	<div class="tip">
		 Viator — ведущий мировой ресурс для поиска и бронирования лучших путешествий по всему миру. Viator.com, вы будете предоставляет своим клиентам онлайн доступ к тысячам мероприятий, включая туры, аттракционы, групповые и частные экскурсии в более чем 2700 направлениях по всему миру. <span class="close"> </span>
	</div>
 <img alt="Viator" src="/local/templates/general_2/img/viator.png"> </a> </section>
	
 
 <?if(CModule::IncludeModule("iblock"))
    	{
       	 $id_block=9;
       	 $section_id = 0;
       	 $items = GetIBlockElementList($id_block, $section_id, Array("SORT"=>"ASC",));
       		 while($arItem = $items->GetNext())
        		{
	?>
	
		<?if($arItem["ACTIVE_FROM"] <= date('d.m.Y') && date('d.m.Y')<=$arItem["ACTIVE_TO"]){?>
		  <div class="inclusion" id="inclusion" data-aos="fade-up">
 <a href="<?=$arItem["CODE"]?>">
		<h3><?=$arItem["NAME"]?></h3>
 <!-- <img alt="<?//=$arItem["NAME"]?>" src="/local/templates/general_2/img/mai.png" class="main_img"> </a> -->
	</div>
		
		
		  <?}?>
	<?
        }
		}
	?>
 <div class="inclusion" id="inclusion" data-aos="fade-up">
 <a href="/napravleniya/otdykh-na-more-v-mae/">
		<h3>Куда поехать на море в мае?</h3>
 <img alt="Куда поехать на море в мае?" src="/local/templates/general_2/img/mai.png" class="main_img"> </a>
	</div>
	
	 <!--<div class="inclusion" id="inclusion" data-aos="fade-up">
		<a href="/napravleniya/kuda_poekhat_zimoy/">
			<h3>Куда поехать отдыхать зимой за границу?</h3>
			<img src="<?=SITE_TEMPLATE_PATH?>/img/where_to_go_background_big.png" alt="Куда поехать отдыхать зимой за границу?">
		</a>
	</div>--> <!--<section  id="tour_selection" class="tour_selection anchor_scroll">
		
	<h2>Подбор тура</h2>
	
	 <script type="text/javascript" charset="UTF=8">!(function(e,t){var n=t.createElement("div"),r=t.scripts[t.scripts.length-1],i={"width":"auto","url_params":{}},a="LTApiInit",o=e.LTApi,s=[{"api_key":"9d611f32b98986fd5ce01cc19c1da932"},{"api_host":"api.level.travel","public_host":"level.travel"}];r.parentNode.insertBefore(n,r),n.id="__lt-widget-place",i.place=n,o||e[a]?function t(){var n=e.LTApi;n?(n.setup(s[0],s[1]),new n.Widgets.DestinationPicker(i)):setTimeout(t,100)}():function(){var n=t.createElement("script");e[a]=e[a]||{},e[a].setup=s[0],e[a].envconfig=s[1],e[a].DestinationPicker=i,n.setAttribute("async",!0),n.setAttribute("charset","UTF-8"),n.setAttribute("type","text/javascript"),n.setAttribute("src","//api.level.travel/js/5.0/open_api.js"),t.head.appendChild(n)}()})(window, document)</script>
	 
	 </section> --> <section class="statistics revealator-slideup anchor_scroll">
	<h2 id="statistics">График цен</h2>
	 <script src="//c26.travelpayouts.com/content?promo_id=1495&shmarker=200556&from_country=RU&to_country=TH&nights=7&adults=2&stars_from=1&stars_to=5&title_size=15&days_count=31&flex_dates=true&flex_nights=true&countries_list=true&departures=true&shown_nights=true&graph_label=true&week_labels=true&month_labels=true&months_switcher=true&tooltip=true&best_price=true&lines=true&medium_line=true&full_month=false&background=true&minimal=true&focus_target=true&powered_by=true" charset="utf-8" async></script> </section> <section class="last_minute_tours revealator-slideup anchor_scroll">
	<div class="last_minute_tours_nav revealator-slideup " id="scroll_mobile" data-aos="fade-up">
		<h2 id="last_minute_tours">Горящие туры</h2>
		 <!--<ul>
			<li class="js_tab_trigger active" data-tab="1">Турция</li>
			<li class="js_tab_trigger" data-tab="2">Таиланд</li>
			<li class="js_tab_trigger" data-tab="3">ОАЭ</li>
			<li class="js_tab_trigger" data-tab="4">Россия</li>
			<li class="js_tab_trigger" data-tab="5">Индия</li>
			<li class="js_tab_trigger" data-tab="6">Италия</li>
			<li class="js_tab_trigger" data-tab="7">Греция</li>
			<li class="js_tab_trigger" data-tab="8">Грузия</li>
			<li class="js_tab_trigger" data-tab="9">Испания</li>
			<li class="js_tab_trigger" data-tab="10">Кипр</li>
			<li class="js_tab_trigger" data-tab="11">Мальдивы</li>
			<li class="js_tab_trigger" data-tab="12">Египет</li>
			<li class="js_tab_trigger" data-tab="13">Куба</li>
		</ul>
		<a target="_blank" href="https://level.travel/hot?aflt=UTravell">(перейти к полному списку горящих туров)</a>-->
		<div class="owl-carousel owl-theme" id="carousel_1">
			<div class="item" id="tab_1" style="width:250px">
				<div class="card">
 <img src="/upload/coarousel/1.jpg" alt="Турция" style="width:100%">
					<div class="container-card" id="tabtx_1">
						<h3 class="text-center">Турция</h3>
					</div>
				</div>
			</div>
			<div class="item" id="tab_2" style="width:250px">
				<div class="card">
 <img src="/upload/coarousel/2.jpg" alt="Таиланд" style="width:100%">
					<div class="container-card" id="tabtx_2">
						<h3 class="text-center">Таиланд</h3>
					</div>
				</div>
			</div>
			<div class="item" id="tab_3" style="width:250px">
				<div class="card">
 <img src="/upload/coarousel/3.jpg" alt="ОАЭ" style="width:100%">
					<div class="container-card" id="tabtx_3">
						<h3 class="text-center">Эмираты</h3>
					</div>
				</div>
			</div>
			<div class="item" id="tab_4" style="width:250px">
				<div class="card">
 <img src="/upload/coarousel/4.jpg" alt="Россия" style="width:100%">
					<div class="container-card" id="tabtx_4">
						<h3 class="text-center">Россия</h3>
					</div>
				</div>
			</div>
			<div class="item" id="tab_5" style="width:250px">
				<div class="card">
 <img src="/upload/coarousel/5.jpg" alt="Индия" style="width:100%">
					<div class="container-card" id="tabtx_5">
						<h3 class="text-center">Индия</h3>
					</div>
				</div>
			</div>
			<div class="item" id="tab_6" style="width:250px">
				<div class="card">
 <img src="/upload/coarousel/6.jpg" alt="Италия" style="width:100%">
					<div class="container-card" id="tabtx_6">
						<h3 class="text-center">Италия</h3>
					</div>
				</div>
			</div>
			<div class="item" id="tab_7" style="width:250px">
				<div class="card">
 <img src="/upload/coarousel/7.jpg" alt="Греция" style="width:100%">
					<div class="container-card" id="tabtx_7">
						<h3 class="text-center">Греция</h3>
					</div>
				</div>
			</div>
			 <!--<div class="item" id="tab_8" style="width:250px">
				<div class="card">
				<img src="/upload/coarousel/8.jpg" alt="Грузия" style="width:100%">
				  <div class="container-card">
					<h3 class="text-center"><b>Грузия</b></h3>
				  </div>
				</div>
			</div>-->
			<div class="item" id="tab_9" style="width:250px">
				<div class="card">
 <img src="/upload/coarousel/9.jpg" alt="Испания" style="width:100%">
					<div class="container-card" id="tabtx_9">
						<h3 class="text-center">Испания</h3>
					</div>
				</div>
			</div>
			<div class="item" id="tab_10" style="width:250px">
				<div class="card">
 <img src="/upload/coarousel/10.jpg" alt="Кипр" style="width:100%">
					<div class="container-card" id="tabtx_10">
						<h3 class="text-center">Кипр</h3>
					</div>
				</div>
			</div>
			<div class="item" id="tab_11" style="width:250px">
				<div class="card">
 <img src="/upload/coarousel/11.jpg" alt="Мальдивы" style="width:100%">
					<div class="container-card" id="tabtx_11">
						<h3 class="text-center">Мальдивы</h3>
					</div>
				</div>
			</div>
			<div class="item" id="tab_12" style="width:250px">
				<div class="card">
 <img src="/upload/coarousel/12.jpg" alt="Египет" style="width:100%">
					<div class="container-card" id="tabtx_12">
						<h3 class="text-center">Египет</h3>
					</div>
				</div>
			</div>
			<div class="item" id="tab_13" style="width:250px">
				<div class="card">
 <img src="/upload/coarousel/13.jpg" alt="Куба" style="width:100%">
					<div class="container-card" id="tabtx_13">
						<h3 class="text-center">Куба</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	 <script>
		let rows=2;
		let columns=4;
		var screen = $(window).width();
		if (screen<=550)
		{
			rows=1;
			columns=2;
		}
	</script>
	<div id="tabs_1" class="last_minute_tours_item js_tab_content active" data-tab="1" data-aos="fade-up">
		 <!--<h3>Турция</h3>-->
		<div data-aos="fade-up">
			 <script>
				document.write('\x3Cscript src="//c26.travelpayouts.com/content?promo_id=1494&shmarker=200556&country=TR&adults=0&scroll=false&powered_by=true&limit=2&table=true&rows='+rows+'columns='+columns+'" charset="utf-8" async>\x3C/script>');
		</div>
		 <!--Travelata.ru-->
		<div data-aos="fade-up">
			 <script>
				document.write('\x3Cscript src="https://c18.travelpayouts.com/content?promo_id=1490&shmarker=200556&table=true&rows='+rows+'&columns='+columns+'&cellWidth=auto&countries=92&powered_by=true" charset="utf-8" async>\x3C/script>');
		</div>
		 <!--Tutu.ru--> <!--<div id="country_197" class="mt-40">
			<script>
				document.write('\x3Cscript id="widHotToursSliderParams_197" type="text/javascript" async charset="utf-8" src="https://cdn1.tu-tu.ru/static/partner/js/tutuHotToursSliderWidget.js?id=country_197&width='+$('#country_197').width()+'&colorTheme=aquamarine&countries%5B%5D=197&countryDef=197&nights%5Bfrom%5D=2&nights%5Bto%5D=21&sort=popularity_desc&limit=50&openNewTab=false&showLogo=false&showLogoWhite=false&showAllOffers=false&utmLabels=200556">\x3C/script>');
			</script>
		</div>-->
	</div>
	<div id="tabs_2" class="last_minute_tours_item js_tab_content" data-tab="2">
		 <!--<h3>Таиланд</h3>-->
		<div>
			 <script>
				document.write('\x3Cscript src="//c26.travelpayouts.com/content?promo_id=1494&shmarker=200556&country=TH&adults=0&scroll=false&powered_by=true&rows='+rows+'columns='+columns+'" charset="utf-8" async>\x3C/script>');
		</div>
		 <!--<p>Travelata.ru</p>-->
		<div>
			 <script>
				document.write('\x3Cscript src="https://c18.travelpayouts.com/content?promo_id=1490&shmarker=200556&table=true&rows='+rows+'&columns='+columns+'&cellWidth=300&countries=87&powered_by=true" charset="utf-8" async>\x3C/script>');
		</div>
		 <!--Tutu.ru--> <!--<div id="country_188" class="mt-40">
			<script>
				document.write('\x3Cscript id="widHotToursSliderParams_188" type="text/javascript" async charset="utf-8" src="https://cdn1.tu-tu.ru/static/partner/js/tutuHotToursSliderWidget.js?id=country_188&width='+$('#country_188').width()+'&colorTheme=aquamarine&countries%5B%5D=197&countryDef=188&nights%5Bfrom%5D=2&nights%5Bto%5D=21&sort=popularity_desc&limit=50&openNewTab=false&showLogo=false&showLogoWhite=false&showAllOffers=false&utmLabels=200556">\x3C/script>');
			</script>
		</div>-->
	</div>
	<div id="tabs_3" class="last_minute_tours_item js_tab_content" data-tab="3">
		 <!--<h3>ОАЭ</h3>-->
		<div>
			 <script>
				document.write('\x3Cscript src="//c26.travelpayouts.com/content?promo_id=1494&shmarker=200556&country=AE&adults=0&scroll=false&powered_by=true&rows='+rows+'columns='+columns+'" charset="utf-8" async>\x3C/script>');
		</div>
		 <!--Travelata.ru-->
		<div>
			 <script>
				document.write('\x3Cscript src="https://c18.travelpayouts.com/content?promo_id=1490&shmarker=200556&table=true&rows='+rows+'&columns='+columns+'&cellWidth=auto&countries=68&powered_by=true" charset="utf-8" async>\x3C/script>');
		</div>
		 <!--Tutu.ru--> <!--<div id="country_145" class="mt-40">
			<script>
				document.write('\x3Cscript id="widHotToursSliderParams_145" type="text/javascript" async charset="utf-8" src="https://cdn1.tu-tu.ru/static/partner/js/tutuHotToursSliderWidget.js?id=country_145&width='+$('#country_145').width()+'&colorTheme=aquamarine&countries%5B%5D=197&countryDef=145&nights%5Bfrom%5D=2&nights%5Bto%5D=21&sort=popularity_desc&limit=50&openNewTab=false&showLogo=false&showLogoWhite=false&showAllOffers=false&utmLabels=200556">\x3C/script>');
			</script>
		</div>-->
	</div>
	<div id="tabs_4" class="last_minute_tours_item js_tab_content" data-tab="4">
		 <!--<h3>Россия</h3>-->
		<div>
			 <script>
				document.write('\x3Cscript src="//c26.travelpayouts.com/content?promo_id=1494&shmarker=200556&country=RU&adults=0&scroll=false&powered_by=true&rows='+rows+'columns='+columns+'" charset="utf-8" async>\x3C/script>');
		</div>
		 <!--Travelata.ru-->
		<div>
			 <script>
				document.write('\x3Cscript src="https://c18.travelpayouts.com/content?promo_id=1490&shmarker=200556&table=true&rows='+rows+'&columns='+columns+'&cellWidth=auto&countries=76&powered_by=true" charset="utf-8" async>\x3C/script>');
		</div>
		 <!--Tutu.ru--> <!--<div id="country_7" class="mt-40">
			<script>
				document.write('\x3Cscript id="widHotToursSliderParams_7" type="text/javascript" async charset="utf-8" src="https://cdn1.tu-tu.ru/static/partner/js/tutuHotToursSliderWidget.js?id=country_7&width='+$('#country_7').width()+'&colorTheme=aquamarine&countries%5B%5D=64&countryDef=7&nights%5Bfrom%5D=2&nights%5Bto%5D=21&sort=popularity_desc&limit=50&openNewTab=false&showLogo=false&showLogoWhite=false&showAllOffers=false&utmLabels=200556">\x3C/script>');
			</script>
		</div>-->
	</div>
	<div id="tabs_5" class="last_minute_tours_item js_tab_content" data-tab="5">
		 <!--<h3>Индия</h3>-->
		<div>
			 <script>
				document.write('\x3Cscript src="//c26.travelpayouts.com/content?promo_id=1494&shmarker=200556&country=IN&adults=0&scroll=false&powered_by=true&rows='+rows+'columns='+columns+'" charset="utf-8" async>\x3C/script>');
		</div>
		 <!--Travelata.ru-->
		<div>
			 <script>
				document.write('\x3Cscript src="https://c18.travelpayouts.com/content?promo_id=1490&shmarker=200556&table=true&rows='+rows+'&columns='+columns+'&cellWidth=auto&countries=33&powered_by=true" charset="utf-8" async>\x3C/script>');
		</div>
		 <!--Tutu.ru--> <!--<div id="country_77" class="mt-40">
			<script>
				document.write('\x3Cscript id="widHotToursSliderParams_77" type="text/javascript" async charset="utf-8" src="https://cdn1.tu-tu.ru/static/partner/js/tutuHotToursSliderWidget.js?id=country_77&width='+$('#country_77').width()+'&colorTheme=aquamarine&countries%5B%5D=197&countryDef=77&nights%5Bfrom%5D=2&nights%5Bto%5D=21&sort=popularity_desc&limit=50&openNewTab=false&showLogo=false&showLogoWhite=false&showAllOffers=false&utmLabels=200556">\x3C/script>');
			</script>
		</div>-->
	</div>
	<div id="tabs_6" class="last_minute_tours_item js_tab_content" data-tab="6">
		 <!--<h3>Италия</h3>-->
		<div>
			 <script>
				document.write('\x3Cscript src="//c26.travelpayouts.com/content?promo_id=1494&shmarker=200556&country=IT&adults=0&scroll=false&powered_by=true&rows='+rows+'columns='+columns+'" charset="utf-8" async>\x3C/script>');
		</div>
		 <!--Travelata.ru-->
		<div>
			 <script>
				document.write('\x3Cscript src="https://c18.travelpayouts.com/content?promo_id=1490&shmarker=200556&table=true&rows='+rows+'&columns='+columns+'&cellWidth=auto&countries=39&powered_by=true" charset="utf-8" async>\x3C/script>');
		</div>
		 <!--Tutu.ru--> <!--<div id="country_85" class="mt-40">
			<script>
				document.write('\x3Cscript id="widHotToursSliderParams_85" type="text/javascript" async charset="utf-8" src="https://cdn1.tu-tu.ru/static/partner/js/tutuHotToursSliderWidget.js?id=country_85&width='+$('#country_85').width()+'&colorTheme=aquamarine&countries%5B%5D=197&countryDef=85&nights%5Bfrom%5D=2&nights%5Bto%5D=21&sort=popularity_desc&limit=50&openNewTab=false&showLogo=false&showLogoWhite=false&showAllOffers=false&utmLabels=200556">\x3C/script>');
			</script>
		</div>-->
	</div>
	<div id="tabs_7" class="last_minute_tours_item js_tab_content" data-tab="7">
		 <!--<h3>Греция</h3>-->
		<div>
			 <script>
				document.write('\x3Cscript src="//c26.travelpayouts.com/content?promo_id=1494&shmarker=200556&country=GR&adults=0&scroll=false&powered_by=true&rows='+rows+'columns='+columns+'" charset="utf-8" async>\x3C/script>');
		</div>
		 <!--Travelata.ru-->
		<div>
			 <script>
				document.write('\x3Cscript src="https://c18.travelpayouts.com/content?promo_id=1490&shmarker=200556&table=true&rows='+rows+'&columns='+columns+'&cellWidth=auto&countries=92&powered_by=true" charset="utf-8" async>\x3C/script>'); <script src="https://c18.travelpayouts.com/content?promo_id=1490&shmarker=200556&table=true&rows=2&columns=5&cellWidth=auto&countries=26&powered_by=true" charset="utf-8" async></script>
		</div>
		 <!--Tutu.ru--> <!--<div id="country_64" class="mt-40">
			<script>
				document.write('\x3Cscript id="widHotToursSliderParams" type="text/javascript" async charset="utf-8" src="https://cdn1.tu-tu.ru/static/partner/js/tutuHotToursSliderWidget.js?id=country_64&width='+$('#country_64').width()+'&colorTheme=aquamarine&countries%5B%5D=64&countryDef=64&nights%5Bfrom%5D=2&nights%5Bto%5D=21&sort=popularity_desc&limit=50&openNewTab=false&showLogo=false&showLogoWhite=false&showAllOffers=false&utmLabels=200556">\x3C/script>');
			</script>
		</div>-->
	</div>
	<div id="tabs_8" class="last_minute_tours_item js_tab_content" data-tab="8">
		 <!--<h3>Грузия</h3>-->
		<div>
			 <script>
				document.write('\x3Cscript src="//c26.travelpayouts.com/content?promo_id=1494&shmarker=200556&country=GE&adults=0&scroll=false&powered_by=true&rows='+rows+'columns='+columns+'" charset="utf-8" async>\x3C/script>');
		</div>
		 <!--Travelata.ru-->
		<div>
			 <script>
				document.write('\x3Cscript src="https://c18.travelpayouts.com/content?promo_id=1490&shmarker=200556&table=true&rows='+rows+'&columns='+columns+'&cellWidth=auto&countries=129&powered_by=true" charset="utf-8" async>\x3C/script>');
		</div>
		 <!--Tutu.ru--> <!--<div id="country_65" class="mt-40">
			<script>
				document.write('\x3Cscript id="widHotToursSliderParams_65" type="text/javascript" async charset="utf-8" src="https://cdn1.tu-tu.ru/static/partner/js/tutuHotToursSliderWidget.js?id=country_65&width='+$('#country_65').width()+'&colorTheme=aquamarine&countries%5B%5D=197&countryDef=65&nights%5Bfrom%5D=2&nights%5Bto%5D=21&sort=popularity_desc&limit=50&openNewTab=false&showLogo=false&showLogoWhite=false&showAllOffers=false&utmLabels=200556">\x3C/script>');
			</script>
		</div>-->
	</div>
	<div id="tabs_9" class="last_minute_tours_item js_tab_content" data-tab="9">
		 <!--<h3>Испания</h3>-->
		<div>
			 <script>
				document.write('\x3Cscript src="//c26.travelpayouts.com/content?promo_id=1494&shmarker=200556&country=ES&adults=0&scroll=false&powered_by=true&rows='+rows+'columns='+columns+'" charset="utf-8" async>\x3C/script>');
		</div>
		 <!--Travelata.ru-->
		<div>
			 <script>
				document.write('\x3Cscript src="https://c18.travelpayouts.com/content?promo_id=1490&shmarker=200556&table=true&rows='+rows+'&columns='+columns+'&cellWidth=auto&countries=38&powered_by=true" charset="utf-8" async>\x3C/script>');
		</div>
		 <!--Tutu.ru--> <!--<div id="country_84" class="mt-40">
			<script>
				document.write('\x3Cscript id="widHotToursSliderParams_84" type="text/javascript" async charset="utf-8" src="https://cdn1.tu-tu.ru/static/partner/js/tutuHotToursSliderWidget.js?id=country_84&width='+$('#country_84').width()+'&colorTheme=aquamarine&countries%5B%5D=197&countryDef=84&nights%5Bfrom%5D=2&nights%5Bto%5D=21&sort=popularity_desc&limit=50&openNewTab=false&showLogo=false&showLogoWhite=false&showAllOffers=false&utmLabels=200556">\x3C/script>');
			</script>
		</div>-->
	</div>
	<div id="tabs_10" class="last_minute_tours_item js_tab_content" data-tab="10">
		 <!--<h3>Кипр</h3>-->
		<div>
			 <script>
				document.write('\x3Cscript src="//c26.travelpayouts.com/content?promo_id=1494&shmarker=200556&country=CY&adults=0&scroll=false&powered_by=true&rows='+rows+'columns='+columns+'" charset="utf-8" async>\x3C/script>');
		</div>
		 <!--Travelata.ru-->
		<div>
			 <script>
				document.write('\x3Cscript src="https://c18.travelpayouts.com/content?promo_id=1490&shmarker=200556&table=true&rows='+rows+'&columns='+columns+'&cellWidth=auto&countries=43&powered_by=true" charset="utf-8" async>\x3C/script>');
		</div>
		 <!--Tutu.ru--> <!--<div id="country_95" class="mt-40">
			<script>
				document.write('\x3Cscript id="widHotToursSliderParams_95" type="text/javascript" async charset="utf-8" src="https://cdn1.tu-tu.ru/static/partner/js/tutuHotToursSliderWidget.js?id=country_95&width='+$('#country_95').width()+'&colorTheme=aquamarine&countries%5B%5D=197&countryDef=95&nights%5Bfrom%5D=2&nights%5Bto%5D=21&sort=popularity_desc&limit=50&openNewTab=false&showLogo=false&showLogoWhite=false&showAllOffers=false&utmLabels=200556">\x3C/script>');
			</script>
		</div>-->
	</div>
	<div id="tabs_11" class="last_minute_tours_item js_tab_content" data-tab="11">
		 <!--<h3>Мальдивы</h3>-->
		<div>
			 <script>
				document.write('\x3Cscript src="//c26.travelpayouts.com/content?promo_id=1494&shmarker=200556&country=MV&adults=0&scroll=false&powered_by=true&rows='+rows+'columns='+columns+'" charset="utf-8" async>\x3C/script>');
		</div>
		 <!--Travelata.ru-->
		<div>
			 <script>
				document.write('\x3Cscript src="https://c18.travelpayouts.com/content?promo_id=1490&shmarker=200556&table=true&rows='+rows+'&columns='+columns+'&cellWidth=auto&countries=56&powered_by=true" charset="utf-8" async>\x3C/script>');
		</div>
		 <!--Tutu.ru--> <!--<div id="country_125" class="mt-40">
			<script>
				document.write('\x3Cscript id="widHotToursSliderParams_125" type="text/javascript" async charset="utf-8" src="https://cdn1.tu-tu.ru/static/partner/js/tutuHotToursSliderWidget.js?id=country_125&width='+$('#country_125').width()+'&colorTheme=aquamarine&countries%5B%5D=197&countryDef=125&nights%5Bfrom%5D=2&nights%5Bto%5D=21&sort=popularity_desc&limit=50&openNewTab=false&showLogo=false&showLogoWhite=false&showAllOffers=false&utmLabels=200556">\x3C/script>');
			</script>
		</div>-->
	</div>
	<div id="tabs_12" class="last_minute_tours_item js_tab_content" data-tab="12">
		 <!--<h3>Египет</h3>-->
		<div>
			 <script>
				document.write('\x3Cscript src="//c26.travelpayouts.com/content?promo_id=1494&shmarker=200556&country=EG&adults=0&scroll=false&powered_by=true&rows='+rows+'columns='+columns+'" charset="utf-8" async>\x3C/script>');
		</div>
		 <!--Tutu.ru-->
		<div>
			 <script>
			</script>
		</div>
	</div>
	<div id="tabs_13" class="last_minute_tours_item js_tab_content" data-tab="13">
		 <!--<h3>Куба</h3>-->
		<div>
			 <script>
				document.write('\x3Cscript src="//c26.travelpayouts.com/content?promo_id=1494&shmarker=200556&country=CU&adults=0&scroll=false&powered_by=true&rows='+rows+'columns='+columns+'" charset="utf-8" async>\x3C/script>');
		</div>
		 <!--Travelata.ru-->
		<div>
			 <script>
				document.write('\x3Cscript src="https://c18.travelpayouts.com/content?promo_id=1490&shmarker=200556&table=true&rows='+rows+'&columns='+columns+'&cellWidth=auto&countries=48&powered_by=true" charset="utf-8" async>\x3C/script>');
		</div>
		 <!--Tutu.ru-->
		<div>
			 <script>
			</script>
		</div>
	</div>
 </section> <!--<section class="tutu_last_minute_tours">
	<script src="//c45.travelpayouts.com/content?promo_id=3955&shmarker=200556&nightsMin=2&nightsMax=23&countryDef=188&colorTheme=aquamarine&width=0&showLogo=true&showLogoWhite=false&showAllOffers=true&sort=popularity_desc&limit=20&powered_by=true&countries=48%26countries%5B%5D%3D78%26countries%5B%5D%3D95%26countries%5B%5D%3D106%26countries%5B%5D%3D145%26countries%5B%5D%3D188%26countries%5B%5D%3D217" charset="utf-8"></script>
 </section>--> <section data-aos="fade-up" class="tour_best_price revealator-slideup anchor_scroll">
	<h2 id="tour_best_price">Календарь лучших цен</h2>
	 <script type="text/javascript" charset="UTF=8">!(function(e,t){var n=t.createElement("div"),r=t.scripts[t.scripts.length-1],i={"width":"auto","url_params":{},"city_from":"","country_to":"","start_month":"","start_year":"","target":"","titleHead":"","headMinimized":true,"popularCountries":true},a="LTApiInit",s=e.LTApi,o=[{"api_key":"9d611f32b98986fd5ce01cc19c1da932"},{"api_host":"api.level.travel","public_host":"level.travel"}];r.parentNode.insertBefore(n,r),n.id="__lt-widget-place",i.place=n,s||e[a]?function t(){var n=e.LTApi;n?(n.setup(o[0],o[1]),new n.Widgets.BestPrices(i)):setTimeout(t,100)}():function(){var n=t.createElement("script");e[a]=e[a]||{},e[a].setup=o[0],e[a].envconfig=o[1],e[a].BestPrices=i,n.setAttribute("async",!0),n.setAttribute("charset","UTF-8"),n.setAttribute("type","text/javascript"),n.setAttribute("src","//api.level.travel/js/5.0/open_api.js"),t.head.appendChild(n)}()})(window, document)</script> </section>
	<div data-aos="fade-up">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"template1",
	Array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"COMPONENT_TEMPLATE" => "template1",
		"EDIT_TEMPLATE" => "standard.php",
		"PATH" => "/include/beach-tours-seo.php"
	)
);?>
	</div>
</div>
 </main>
<script>
var owl = $('.owl-carousel');
var scrollCount = null;
var scroll= null;

	$('[id^="tabtx_"]').click(function(e) {
		var idtab = "tabs_"+$(this).attr("id").replace("tabtx_","");
		$('.last_minute_tours_item.js_tab_content.active').removeClass('active');
		$('#'+idtab).addClass('active');
	});
	$('.owl-carousel').on('hover', '.item', function (e) {
	var idtab = "tabs_"+$(this).attr("id").replace("tab_","");
	$('.last_minute_tours_item.js_tab_content.active').removeClass('active');
	$('#'+idtab).addClass('active');
});
	// изменение размера owl item для разрешений меньше 400px
	if ($(window).width()<=400)
	{
		$('.owl-carousel .item').each(function () {
			$(this).removeAttr("style");
			$(this).attr("style","width:230px");
		});
	}
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
	merge:true,
	navSpeed:1000,
	slideBy: 2,
	pullDrag:false,
	center:true,
	autoWidth:true,
	mouseDrag:false,
	touchDrag:false,
		autoplay: true,
		autoplayTimeout:6000,
		autoplayHoverPause: true,
		autoplaySpeed:1500,
		smartSpeed: 1500,
		fluidSpeed: 1500,
		navSpeed:1500,
		dragEndSpeed: 1000,
    responsive:{
        0:{
            items:1,
			navSpeed:700,
			slideBy: 1
        },
		480:{
            items:2,
			navSpeed:700,
			slideBy: 1
        },
        600:{
            items:4
        },
        1000:{
            items:5
        }
    }
});
/* owl.on('mousewheel', '.owl-stage', function (e) {
	e.preventDefault();
    clearTimeout(scroll);
    scroll = setTimeout(function(){scrollCount=0;}, 220);
    if(scrollCount) return 0;
    scrollCount=1;
    if (e.deltaY>0) {
        owl.trigger('next.owl', [1000]);
    } else {
        owl.trigger('prev.owl', [1000]);
    }
	// e.preventDefault();
}); */
$(window).load(function() {
	//var $carousel = $('.owl-carousel');
  $("#scroll_mobile").swipe( {
    swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
		//if(phase!="end")return;
		var speed = distance/duration;
		var position="";

		var owlc = owl.data('owl.carousel');
		if (direction=="left")position = 'next.owl';
		if (direction=="right")position = 'prev.owl';
		if (speed<=0.5)
		{
			owlc.options.slideBy = 2;
			owl.trigger('refresh.owl.carousel');
			owl.trigger(position, [1000]);
		}
		if (speed>0.5){
			owlc.options.slideBy = 2;
			owl.trigger('refresh.owl.carousel');
			owl.trigger(position, [700]);
		}
		if (speed>0.7){
			owlc.options.slideBy = 3;
			owl.trigger('refresh.owl.carousel');
			owl.trigger(position, [700]);
		}
		if (speed>0.9){
			owlc.options.slideBy = 4;
			owl.trigger('refresh.owl.carousel');
			owl.trigger(position, [700]);
		}
		if (speed>1.3){
			owlc.options.slideBy = 6;
			owl.trigger('refresh.owl.carousel');
			owl.trigger(position, [700]);
		}

    }
  });
	});
</script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>