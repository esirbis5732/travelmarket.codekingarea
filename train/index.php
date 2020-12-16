<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("twitter:image", "/local/templates/general_2/img/train_wide_og_tw.png");
$APPLICATION->SetPageProperty("fb:image", "/local/templates/general_2/img/train_wide_og_tw.png");
$APPLICATION->SetPageProperty("vk:image", "/local/templates/general_2/img/train_wide_og_vk.png");
$APPLICATION->SetPageProperty("og:image", "/local/templates/general_2/img/train_wide_og_tw.png");
$APPLICATION->SetPageProperty("title", "TRAVEL&#127965;MARKET – ЖД БИЛЕТЫ - Поиск дешевых жд билетов по всем направлениям");
$APPLICATION->SetPageProperty("keywords", "ЖД Билеты");
$APPLICATION->SetPageProperty("description", "ЖД билеты онлайн. Купить билет на поезд по доступной цене.");
$APPLICATION->SetTitle("ЖД Билеты");
?>

<main id="RF" class="train">
	<section class="main_search" id="main_search_1">
		<div class="container">	
		<div class="anchor_block">
				<!--<a href="#RF"><dfn class="background_dark" data-info="Железнодорожные Билеты?"><img src="<?=SITE_TEMPLATE_PATH?>/img/traini_big_icon_blue.svg" alt=""></dfn></a>-->
				<a href="#RF"><dfn class="background_dark" data-info="Билеты РФ"><img src="<?=SITE_TEMPLATE_PATH?>/img/russia_blue.svg" alt=""></dfn></a>
				<!--<a href="#EU"><dfn class="background_dark" data-info="Билеты Европа"><img src="<?=SITE_TEMPLATE_PATH?>/img/europe_blue.svg" alt=""></dfn></a> -->
				<a href="#Asia"><dfn class="background_dark" data-info="Билеты Азия"><img src="<?=SITE_TEMPLATE_PATH?>/img/asia_blue.svg" alt=""></dfn></a> 
				
		</div>
			<img class="main_img" src="<?=SITE_TEMPLATE_PATH?>/img/train_background_big.png" alt="">
			<h1>ЖД Билеты</h1>			
			<h2 id="RF" class="train_h">Россия</h2>
			<ul class="search_form_list">
				<li class="js_tab_content_1 active" data-tab="1">
					<div id="ufs-railway-app"></div>
					<!--Пример-->
					<script>
					var UfsRailwayAppConfig = {
					"isHashUrl":true,
					"apiEndpoint": "https://api.ufs-online.ru/api/v1" ,
					"appDomain": "u-travell.ru",
					"trainUrls": "https://u-travell.ru/train/#" ,
					"helpUrls": {
					"ru": "https://www.ufs-partner.ru/faq/"
					},
					"offer": {
					"publicOfferType": "partner"
					},
					"preloaderImage": {
					url: "https://www.ufs-online.ru/img/promo/3.jpg" //пример
					}
					};
					</script>
					<script src="https://spa.ufs-online.ru/kupit-zhd-bilety/widget.js"></script>	
				</li>
				<li class="js_tab_content_1" data-tab="2">
				<script src="https://c45.travelpayouts.com/content?promo_id=1655&shmarker=200556&locale=ru&button_color=%23FCDC25&button_text_color=%232A3D71&background_color=transparent&border_radius=0px&full_width=true&logo=false&tborder=true&hide_header=true&powered_by=true" charset="utf-8" async="true"></script>
				</li>
				<li class="js_tab_content_1" data-tab="3">
				<div id="aeroexpress-app"></div>
				<!--Пример-->
					<script>
					window.aeroexpressAppConfig = {
					"isHashUrl": true,
					"domain": "u-travell.gdbilet.ru", //пример
					"elementId": "aeroexpress-app", //пример
					"currencySettings" : {
					"default": "RUB",
					"available" : []
					},
					"languageSettings": {
					"lang":"ru",
					"isHideLanguageSwitcher":true,
					"isHideRoutePathLanguage":true
					},
					"isHideLinkMyOrder":false,
					"isShowTariffInfoByIcon":true,
					"showSupportInfo":false,
					"isHideLogosCard":true,
					"showAviasalesLink":false,
					"aviasalesLink":"https://u-travell.ru/train/"  //пример
					};
					window.aeroexpressApiConfig = {
					"host": "aeroexpressapi.ufs-online.ru"
					};
					window.aeroexpressServerConfig = {
					"host": "https://aex.ufs-online.ru"
					};
					</script>
					<script src="https://aex.ufs-online.ru/static/apploader.js"></script>
				</li>
				<!--<li class="js_tab_content_1" data-tab="6">
					<script charset="utf-8" src="//partner.onetwotrip.com/widgets/73b1d1f7-9d65-4b21-8e87-1cd2a1dbc6f6.js" async></script>
				</li>-->
			</ul>					
		</div>
		<div class="search_system_wrapper">
			<p class="search_system_selection">Выберите поисковую систему</p>
			<div class="container">	
				<ul class="search_system_list">
					<li class="js_tab_trigger_1 logo_box_item active" data-tab="1">			
						<div class="tip">
							UFS работает в сфере туризма с 2003 года и предлагаеn широкий спектр услуг. Dы легко найдете железнодорожные билеты, а также авиабилеты по России и миру. UFS напомнит заранее про «Аэроэкспресс» и поможет оформить страховку для себя и других пассажиров в поездке.
							<span class="close"> </span>
						</div>
						<img src="<?=SITE_TEMPLATE_PATH?>/img/ufs.png" alt="">	
					</li>
					<li class="js_tab_trigger_1 logo_box_item" data-tab="2">	
						<div class="tip">
							Туту.ру — популярный сервис путешествий. Мы работаем с 2003 года. На сайте tutu.ru покупают онлайн ж/д билеты, авиабилеты, билеты на автобусы, горящие туры.
							<span class="close"> </span>
						</div>
						<img src="<?=SITE_TEMPLATE_PATH?>/img/tutu.png" alt="">	
					</li>
					<li class="js_tab_trigger_1 logo_box_item" data-tab="3">	
						<div class="tip">
							UFS работает в сфере туризма с 2003 года и предлагаеn широкий спектр услуг. Dы легко найдете железнодорожные билеты, а также авиабилеты по России и миру. UFS напомнит заранее про «Аэроэкспресс» и поможет оформить страховку для себя и других пассажиров в поездке.
							<span class="close"> </span>
						</div>
						<img src="<?=SITE_TEMPLATE_PATH?>/img/aeroekspress.png" alt="">	
					</li>					
					<!--<li class="js_tab_trigger_1 logo_box_item" data-tab="6">	
						<div class="tip">
							OneTwoTrip — лидер онлайн-рынка сервисов для организации путешествий. Сервис помогает легко спланировать путешествие в любую точку мира: забронировать номер или апартаменты, выбирая из 2 000 000 вариантов размещения, купить авиабилет одной из 800 авиакомпаний, билет на поезд или автобус по России, СНГ и Европе, арендовать авто, заказать экскурсию с гидом или приобрести пакетный тур.
							<span class="close"> </span>
						</div>
						<img src="<?=SITE_TEMPLATE_PATH?>/img/sapsan.svg" alt="">	
					</li>-->
				</ul>
				
			</div>
		</div>	
		
	</section>
	
	<!--<section class="main_search" id="main_search_2" >
		<div class="container">
			
			<h2 id="EU" class="train_h">Европа</h2>
			<ul class="search_form_list">
				<li class="js_tab_content_1 active" data-tab="5">
					<script charset="utf-8" src="//partner.onetwotrip.com/build/widget/form.widget.load.js?id=26382&v=2" data-railways="true"  async></script>
				</li>				
			</ul>				
		</div>
		<div class="search_system_wrapper">
			<p class="search_system_selection">Выберите поисковую систему</p>
			<div class="container">	
				<ul class="search_system_list">
					<li class="js_tab_trigger_1 logo_box_item active" data-tab="5">	
						<div class="tip">
							OneTwoTrip — лидер онлайн-рынка сервисов для организации путешествий.  Сервис помогает легко спланировать путешествие в любую точку мира: забронировать номер или апартаменты, выбирая из 2 000 000 вариантов размещения, купить авиабилет одной из 800 авиакомпаний, билет на поезд или автобус по России, СНГ и Европе, арендовать авто, заказать экскурсию с гидом или приобрести пакетный тур.
							<span class="close"> </span>
						</div>
						<img src="<?=SITE_TEMPLATE_PATH?>/img/one_two_trip.png" alt="">	
					</li>					
				</ul>				
			</div>
		</div>
		
	</section>-->
	
	
	<section class="main_search" id="main_search_3">
		<div class="container" data-aos="fade-up">				
			<h2 id="Asia" class="train_h">Азия</h2>
			<ul class="search_form_list">
				<li class="js_tab_content_1 active" data-tab="4">
					<script src="//c44.travelpayouts.com/content?promo_id=1506&shmarker=200556&color=blue&border=false&border_radius=0&locale=ru&title=%D0%91%D0%B8%D0%BB%D0%B5%D1%82%D1%8B%20%D0%BD%D0%B0%20%D0%BF%D0%BE%D0%B5%D0%B7%D0%B4%D0%B0%2C%20%D0%B0%D0%B2%D1%82%D0%BE%D0%B1%D1%83%D1%81%D1%8B%2C%20%D0%BF%D0%B0%D1%80%D0%BE%D0%BC%D1%8B%2C%20%D1%87%D0%B0%D1%80%D1%82%D0%B5%D1%80%D1%8B%20%D0%B2%20%D0%AE%D0%B3%D0%BE-%D0%92%D0%BE%D1%81%D1%82%D0%BE%D1%87%D0%BD%D0%BE%D0%B9%20%D0%90%D0%B7%D0%B8%D0%B8&from=Bangkok&to=Phuket&from_en=Bangkok&to_en=Phuket&powered_by=true" charset="utf-8"></script>
				</li>				
			</ul>				
		</div>
		<div class="search_system_wrapper" data-aos="fade-up">
			<p class="search_system_selection">Выберите поисковую систему</p>
			<div class="container">	
				<ul class="search_system_list">					
					<li class="js_tab_trigger_1 logo_box_item active" data-tab="4">	
						<div class="tip">
							12Go.Asia предоставляет онлайн бронирование всех видов транспорта на одной платформе, в 15 странах Юго-Восточной Азии и Океании: Таиланд, Шри-Ланка, Индия, Вьетнам, Лаос, Камбоджа, Малайзия, Сингапур, Мьянма, Филиппины, Новая Зеландия, Индонезия, Гонконг, Макао и Китай. В наличии инвентарь свыше 500 операторов.
							<span class="close"> </span>
						</div>
						<img src="<?=SITE_TEMPLATE_PATH?>/img/12go.png" alt="">	
					</li>										
				</ul>				
			</div>
		</div>					
	</section>
	
	
	<div class="container"> 
		<section class="logo_box" data-aos="fade-up">
			<h2>Еще больше предложений по покупке железнодорожных билетов</h2>			
			<a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/pyj4y4uj9qd76d4286da9b8c64f65e/">
				<div class="tip">
					INFOBUS является владельцем и разработчиком интернет-платформы по продаже билетов и управлению пассажирским транспортом - BusSystem. Эта автоматизированная система объединяет 45 стран, 37 000 городов, 47 000 рейсов от 6 500 перевозчиков и более 10 000 точек продаж.
					<span class="close"> </span>
				</div>
				<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/infobus.png" alt="Infobus">
			</a>			
			<!--<a target="_blank" href="https://ad.admitad.com/g/ca326rdm5vd76d4286daef1cea9751/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/italiarail.png" alt="Italiarail"></a>-->
			<!--<a target="_blank" href="https://ad.admitad.com/g/700u4nenltd76d4286da84951289db/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/omio.png" alt="Omio "></a>-->
			<a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/6ef7bcadc9d76d4286da4c15c68865/?ulp=https%3A%2F%2Fwww.ozon.travel%2Frailway%2F">			
				<div class="tip">
					OZON.travel — онлайн-магазин путешествий, где вы найдёте все, что нужно для самостоятельной поездки. Быстро. Надежно. Выгодно. Тысячи вариантов авиабилетов, железнодорожные билеты и страховые полисы — OZON.travel позволяет приобрести полный пакет для поездки по России и за рубеж.
					<span class="close"> </span>
				</div>
				<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/ozon_travel.png" alt="Ozon travel">
			</a>
			
			<a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/zxfj3mir77d76d4286daac7520b3ad/">
				<div class="tip">
					Poezd.ru - провайдер услуги «Электронный железнодорожный билет», портал Poezd.ru в режиме реального времени предоставляет клиентам доступ к online системе продажи билетов на поезд.Мы 6 лет продаём ж/д билеты онлайн. У нас стабильный сайт и отлаженная система взаимодействия с клиентами и партнёрами. 
					<span class="close"> </span>
				</div>
				<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/poezd.png" alt="Poezd RU">
			</a>
			<!--<a target="_blank" href="https://ad.admitad.com/g/f8kqm3kxqbd76d4286da25881e00f6/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/pososhok.jpg" alt="Pososhok"></a>-->
			<!--<a target="_blank" href="https://ad.admitad.com/g/m6mlwg3jy9d76d4286da89444c8234/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/trainline.png" alt="Trainline"></a>-->
			<a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/239cb0bc31d76d4286dabf3e570a18/?ulp=https%3A%2F%2Fwww.svyaznoy.travel%2Frway%2F">			
				<!--<div class="tip">
					Связной Трэвел — это яркий проект ГК «Связной», который объединяет ключевые сервисы для организации путешествий в рамках масштабной платформы, что позволяет максимально удобно и оперативно организовать свой отдых или бизнес-поездку.
					<span class="close"> </span>
				</div>
				<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/svyaznoi.png" alt="Связной трэвел ">
			</a>-->
			<!--<a target="_blank" href="https://ad.admitad.com/g/j4enfjo2nxd76d4286daeed1a685a7/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/travellizy.jpg" alt="Travellizy"></a>-->			
			
		</section>
	
	</div>

</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>