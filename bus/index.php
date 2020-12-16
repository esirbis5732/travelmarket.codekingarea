<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("twitter:image", "/local/templates/general_2/img/bus_wide_og_tw.png");
$APPLICATION->SetPageProperty("fb:image", "/local/templates/general_2/img/bus_wide_og_tw.png");
$APPLICATION->SetPageProperty("vk:image", "/local/templates/general_2/img/bus_wide_og_vk.png");
$APPLICATION->SetPageProperty("og:image", "/local/templates/general_2/img/bus_wide_og_tw.png");
$APPLICATION->SetPageProperty("title", "TRAVEL&#127965;MARKET - АВТОБУСЫ - Поиск дешевых билетов онлайн по всем направлениям");
$APPLICATION->SetPageProperty("keywords", "Автобусы");
$APPLICATION->SetPageProperty("description", "Поиск, сравнение цен и покупка автобусных билетов онлайн по всем направлениям, транспортным компаниям и системам бронирования. Актуальные акции и спецпредложения на билеты.");
$APPLICATION->SetTitle("Автобусы");
?>

<main id="RF" class="bus">
	<section class="main_search" id="main_search_1">
		<div class="container">
		<div class="anchor_block">
				<a href="#RF"><dfn class="background_dark" data-info="Билеты РФ"><img src="<?=SITE_TEMPLATE_PATH?>/img/russia_blue.svg" alt=""></dfn></a>
				<a href="#EU"><dfn class="background_dark" data-info="Билеты Европа"><img src="<?=SITE_TEMPLATE_PATH?>/img/europe_blue.svg" alt=""></dfn></a> 
				<a href="#Asia"><dfn class="background_dark" data-info="Билеты Азия"><img src="<?=SITE_TEMPLATE_PATH?>/img/asia_blue.svg" alt=""></dfn></a> 
		</div>
			<img class="main_img" src="<?=SITE_TEMPLATE_PATH?>/img/bus_background_big.png" alt="">
			<h1>Автобусы</h1>
			<h2 id="RF" class="bus_h">Россия</h2>
			<ul class="search_form_list">
				<li class="js_tab_content_1 active" data-tab="1">
					<script src="https://c76.travelpayouts.com/content?promo_id=1760&shmarker=200556&powered_by=true" charset="utf-8" async="true"></script>
				</li>
				<li class="js_tab_content_1" data-tab="2">
					<script src="https://c45.travelpayouts.com/content?promo_id=1809&shmarker=200556&hide_logo=false&hide_logo_tab=true&color_scheme=basic_white&tab1=2&tabDef=2&powered_by=true" charset="utf-8" async="true"></script>
				</li>
			</ul>

		</div>
		<div class="search_system_wrapper">
			<p class="search_system_selection">Выберите поисковую систему</p>
			<div class="container">	
				<ul class="search_system_list">
					<li class="js_tab_trigger_1 logo_box_item active" data-tab="1">			
						<div class="tip">
							Autobus.Travel - самая большая база перевозчиков, наибольшее количество маршрутов и уникальных рейсов, и направлений.
							<span class="close"> </span>
						</div>
						<img src="<?=SITE_TEMPLATE_PATH?>/img/autobustravel.png" alt="">	
					</li>
					<li class="js_tab_trigger_1 logo_box_item" data-tab="2">	
						<div class="tip">
							Туту.ру — популярный сервис путешествий. Мы работаем с 2003 года. На сайте tutu.ru покупают онлайн ж/д билеты, авиабилеты, билеты на автобусы, горящие туры.
							<span class="close"> </span>
						</div>
						<img src="<?=SITE_TEMPLATE_PATH?>/img/tutu.png" alt="">	
					</li>
				</ul>

			</div>
		</div>
		<div class="container">
				<div class="slides_n big_block" data-aos="fade-up">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"template1", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"COMPONENT_TEMPLATE" => "template1",
						"AREA_FILE_RECURSIVE" => "Y",
						"PATH" => "/include/slider_1a.php"
					),
					false
				);?>
				</div>
				<div class="slides_n big_block mob" data-aos="fade-up">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"template1", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"COMPONENT_TEMPLATE" => "template1",
						"AREA_FILE_RECURSIVE" => "Y",
						"PATH" => "/include/slider_1a_mob.php"
					),
					false
				);?>
				</div>		
		</div>
	</section>
	<section class="main_search" id="main_search_2">
		<div class="container">			
			<h2 id="EU" class="bus_h">Европа</h2>
			<ul class="search_form_list">
				<!--<li class="js_tab_content_1 active" data-tab="3">
					<script src="https://c48.travelpayouts.com/content?promo_id=1656&shmarker=200556" charset="utf-8" async="true"></script>
				</li>-->
				<li class="js_tab_content_1 active" data-tab="5">
					<script src="https://c91.travelpayouts.com/content?promo_id=2405&shmarker=200556;size=responsive&#038;locale=ru&#038;powered_by=true" charset="utf-8" async="true"></script>
				</li>
			</ul>
		</div>
		<div class="search_system_wrapper">
			<p class="search_system_selection">Выберите поисковую систему</p>
			<div class="container">	
				<ul class="search_system_list">
					<!--<li class="js_tab_trigger_1 logo_box_item busfor active" data-tab="3">	
						<div class="tip">
							Busfor.ru — это удобный сервис для поиска и покупки автобусных билетов. Busfor сервис объединяет более 5 тысяч перевозчиков на 20 тысячах маршрутов по России, СНГ и Европе. Busfor стремится предоставить своим клиентам простой и удобный сервис для поиска и покупки дешевых билетов на автобусы, клиенты могут выбрать наиболее дешевый билет на автобус.
							<span class="close"> </span>
						</div>
						<img src="<?=SITE_TEMPLATE_PATH?>/img/busfor.png" alt="">	
					</li>-->
					<li class="js_tab_trigger_1 logo_box_item omio active" data-tab="5">	
						<div class="tip">
							Omio находит самые быстрые, самые дешевые и удобные варианты путешествий на поезде, автобусе и самолете, в любой населенный пункт Европы.Найдите все самые лучшие билеты по времени и стоимости в одном поисковике.
							<span class="close"> </span>
						</div>
						<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/omio.png" alt="">	
					</li>
				</ul>				
			</div>
		</div>
		
	</section>
	<section class="main_search" id="main_search_3">
		<div class="container">
			<h2 id="Asia" class="bus_h">Азия</h2>
			<ul class="search_form_list">
				<li class="js_tab_content_1 active" data-tab="4">
					<script src="//c44.travelpayouts.com/content?promo_id=1506&shmarker=200556&color=blue&border=false&border_radius=0&locale=ru&title=%D0%91%D0%B8%D0%BB%D0%B5%D1%82%D1%8B%20%D0%BD%D0%B0%20%D0%BF%D0%BE%D0%B5%D0%B7%D0%B4%D0%B0%2C%20%D0%B0%D0%B2%D1%82%D0%BE%D0%B1%D1%83%D1%81%D1%8B%2C%20%D0%BF%D0%B0%D1%80%D0%BE%D0%BC%D1%8B%2C%20%D1%87%D0%B0%D1%80%D1%82%D0%B5%D1%80%D1%8B%20%D0%B2%20%D0%AE%D0%B3%D0%BE-%D0%92%D0%BE%D1%81%D1%82%D0%BE%D1%87%D0%BD%D0%BE%D0%B9%20%D0%90%D0%B7%D0%B8%D0%B8&from=Bangkok&to=Phuket&from_en=Bangkok&to_en=Phuket&powered_by=true" charset="utf-8"></script>
				</li>
			</ul>
		</div>
		<div class="search_system_wrapper">
			<p class="search_system_selection">Выберите поисковую систему</p>
			<div class="container">	
				<ul class="search_system_list">
					<li class="js_tab_trigger_1 logo_box_item go12 active" data-tab="4">	
						<div class="tip">
							12Go.Asia предоставляет онлайн бронирование всех видов транспорта на одной платформе, в 15 странах Юго-Восточной Азии и Океании: Таиланд, Шри-Ланка, Индия, Вьетнам, Лаос, Камбоджа, Малайзия, Сингапур, Мьянма, Филиппины, Новая Зеландия, Индонезия, Гонконг, Макао и Китай. В наличии инвентарь свыше 500 операторов.
							<span class="close"> </span>
						</div>
						<img src="<?=SITE_TEMPLATE_PATH?>/img/12go.png" alt="">	
					</li>
				</ul>				
			</div>
		</div>

	
	<div class="container" data-aos="fade-up"> 
		<section class="logo_box">
			<h2>Еще больше предложений по покупке билетов на автобус</h2>
			<a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/pyj4y4uj9qd76d4286da9b8c64f65e/">
				<div class="tip">
					INFOBUS является владельцем и разработчиком интернет-платформы по продаже билетов и управлению пассажирским транспортом - BusSystem. Эта автоматизированная система объединяет 45 стран, 37 000 городов, 47 000 рейсов от 6 500 перевозчиков и более 10 000 точек продаж.
					<span class="close"> </span>
				</div>				
				<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/infobus.png" alt="Infobus">
			</a>
			<a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/r9uskzgrkhd76d4286da0cf35f6cdb/">
				<div class="tip">
					БайерТранс и Intercars Europe предоставляют услуи в области автобусных пассажирских международных перевозок, а также продают билеты на других международных перевозчиков. Уже более 20 лет компания «Интеркарс» предоставляет своим клиентам возможность увидеть Европу во всем многообразии, предоставляя билеты на автобусы.
					<span class="close"> </span>
				</div>
				<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/intercars.png" alt="Intercars-tickets">
			</a>
			<a class="logo_box_item" target="_blank" href="https://c116.travelpayouts.com/click?shmarker=200556&promo_id=3493&source_type=customlink&type=click&custom_url=https%3A%2F%2Fwww.thetrainline.com">
				<div class="tip">Trainline.com — популярный сайт и мобильное приложение для бронирования ж/д и автобусных билетов по Европе. Компания работает с 209 железнодорожными и автобусными компаниями, и предлагает клиентам тысячи маршрутов по 45 странам. 
					<span class="close"> </span>
				</div>
				<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/trainline.png" alt="Trainline">
			</a>
			<a class="logo_box_item" target="_blank" href="https://c97.travelpayouts.com/click?shmarker=200556&promo_id=3460&source_type=customlink&type=click&custom_url=https%3A%2F%2Fwww.flixbus.ru%2F">
				<div class="tip">FlixBus предлагает безопасные и комфортные поездки дальнего следования по Европе. Компания FlixBus предлагает пассажирам с любым бюджетом современный, доступный и удобный способ путешествовать.  
					<span class="close"> </span>
				</div>
				<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/flixbus.png" alt="Flixbus">
			</a>
			<!--<a target="_blank" href="https://ad.admitad.com/g/700u4nenltd76d4286da84951289db/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/omio.png" alt="Omio"></a>-->
			<!--<a target="_blank" href="https://ad.admitad.com/g/m6mlwg3jy9d76d4286da89444c8234/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/trainline.png" alt="Trainline"></a>-->
			<!--<a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/49c113f01ed76d4286da02b3e23ee2/?ulp=https%3A%2F%2Fwww.onetwotrip.com%2Fru%2Fbus%2F">
				<div class="tip">
					OneTwoTrip — лидер онлайн-рынка сервисов для организации путешествий. Сервис помогает легко спланировать путешествие в любую точку мира: забронировать номер или апартаменты, выбирая из 2 000 000 вариантов размещения, купить авиабилет одной из 800 авиакомпаний, билет на поезд или автобус по России, СНГ и Европе, арендовать авто, заказать экскурсию с гидом или приобрести пакетный тур.
					<span class="close"> </span>
				</div>
				<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/one_two_trp.png" alt="OneTwoTrip">
			</a>-->
			
		</section>
		
	</div>
	</section>

</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>