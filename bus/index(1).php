<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("twitter:image", "https://u-travell.ru/local/templates/general_2/img/bus_wide_og_tw.png");
$APPLICATION->SetPageProperty("fb:image", "https://u-travell.ru/local/templates/general_2/img/bus_wide_og_tw.png");
$APPLICATION->SetPageProperty("vk:image", "https://u-travell.ru/local/templates/general_2/img/bus_wide_og_vk.png");
$APPLICATION->SetPageProperty("og:image", "https://u-travell.ru/local/templates/general_2/img/bus_wide_og_tw.png");
$APPLICATION->SetPageProperty("title", "U-TRAVELL - АВТОБУСЫ - Поиск дешевых билетов онлайн по всем направлениям");
$APPLICATION->SetPageProperty("keywords", "Автобусы");
$APPLICATION->SetPageProperty("description", "Поиск, сравнение цен и покупка автобусных билетов онлайн по всем направлениям, транспортным компаниям и системам бронирования. Актуальные акции и спецпредложения на билеты.");
$APPLICATION->SetTitle("Автобусы");
?>

<main class="bus">
	<section class="main_search" id="main_search">
		<div class="container">
			<div class="anchor_block">
				<a href="#RF"><dfn class="background_dark" data-info="Автобусные билеты РФ"><img src="<?=SITE_TEMPLATE_PATH?>/img/bus.svg" alt=""></dfn></a>
				<a href="#main_search_2"><dfn class="background_dark" data-info="Автобусные билеты Европа"><img src="/local/templates/general_2/img/bus.svg" alt=""></dfn></a> 
				<a href="#main_search_3"><dfn class="background_dark" data-info="Автобусные билеты Азия"><img src="/local/templates/general_2/img/bus.svg" alt=""></dfn></a> 
				
			</div>
			<img class="main_img" src="<?=SITE_TEMPLATE_PATH?>/img/bus_background_big.png" alt="">
			<h1>Автобусы</h1>
			<h2 id="RF" class="train_h">Россия</h2>
			<ul class="search_form_list">
				<li class="js_tab_content_1 active" data-tab="1">
					<script src="https://c76.travelpayouts.com/content?promo_id=1760&shmarker=200556&powered_by=true" charset="utf-8" async="true"></script>
				</li>
				<li class="js_tab_content_1" data-tab="2">
					<script src="https://c45.travelpayouts.com/content?promo_id=1809&shmarker=200556&hide_logo=false&hide_logo_tab=true&color_scheme=basic_white&tab1=2&tabDef=2&powered_by=true" charset="utf-8" async="true"></script>
				</li>
				<li class="js_tab_content_1" data-tab="3">
					<script src="https://c48.travelpayouts.com/content?promo_id=1656&shmarker=200556" charset="utf-8" async="true"></script>
				</li>
				<li class="js_tab_content_1" data-tab="4">
					<script src="https://c44.travelpayouts.com/content?promo_id=1506&shmarker=200556" charset="utf-8" async="true"></script>
				</li>
				<li class="js_tab_content_1" data-tab="5">
					<script src="https://c91.travelpayouts.com/content?promo_id=2405&shmarker=200556;size=responsive&#038;locale=ru&#038;powered_by=true" charset="utf-8" async="true"></script>
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
					<li class="js_tab_trigger_1 logo_box_item" data-tab="3">	
						<div class="tip">
							Busfor.ru — это удобный сервис для поиска и покупки автобусных билетов. Busfor сервис объединяет более 5 тысяч перевозчиков на 20 тысячах маршрутов по России, СНГ и Европе. Busfor стремится предоставить своим клиентам простой и удобный сервис для поиска и покупки дешевых билетов на автобусы, клиенты могут выбрать наиболее дешевый билет на автобус.
							<span class="close"> </span>
						</div>
						<img src="<?=SITE_TEMPLATE_PATH?>/img/busfor.png" alt="">	
					</li>
					<li class="js_tab_trigger_1 logo_box_item" data-tab="4">	
						<div class="tip">
							12Go.Asia предоставляет онлайн бронирование всех видов транспорта на одной платформе, в 15 странах Юго-Восточной Азии и Океании: Таиланд, Шри-Ланка, Индия, Вьетнам, Лаос, Камбоджа, Малайзия, Сингапур, Мьянма, Филиппины, Новая Зеландия, Индонезия, Гонконг, Макао и Китай. В наличии инвентарь свыше 500 операторов.
							<span class="close"> </span>
						</div>
						<img src="<?=SITE_TEMPLATE_PATH?>/img/12go.png" alt="">	
					</li>
					<li class="js_tab_trigger_1 logo_box_item" data-tab="5">	
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
	<div class="container"> 
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
			<!--<a target="_blank" href="https://ad.admitad.com/g/700u4nenltd76d4286da84951289db/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/omio.png" alt="Omio"></a>-->
			<!--<a target="_blank" href="https://ad.admitad.com/g/m6mlwg3jy9d76d4286da89444c8234/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/trainline.png" alt="Trainline"></a>-->
			<a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/49c113f01ed76d4286da02b3e23ee2/?ulp=https%3A%2F%2Fwww.onetwotrip.com%2Fru%2Fbus%2F">
				<div class="tip">
					OneTwoTrip — лидер онлайн-рынка сервисов для организации путешествий. Сервис помогает легко спланировать путешествие в любую точку мира: забронировать номер или апартаменты, выбирая из 2 000 000 вариантов размещения, купить авиабилет одной из 800 авиакомпаний, билет на поезд или автобус по России, СНГ и Европе, арендовать авто, заказать экскурсию с гидом или приобрести пакетный тур.
					<span class="close"> </span>
				</div>
				<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/one_two_trp.png" alt="OneTwoTrip">
			</a>
			<!--<a target="_blank" href="https://ad.admitad.com/g/f1nmvwx5b1d76d4286dacaf18bbc0b/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/unicredit_bank.jpg" alt="Unicredit Bank"></a>
			<a target="_blank" href="https://ad.admitad.com/g/i352cbwpfvd76d4286da1cb5598fff/
			"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/alfa_bank.png" alt="Альфа-Банк"></a>
			<a target="_blank" href="https://ad.admitad.com/g/5lc9j54svod76d4286da7e9a9b85a9/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/raif.png" alt="Райффайзен Банк"></a>
			<a target="_blank" href="https://ad.admitad.com/g/kg0hbofr85d76d4286da8560502dd9/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/rosbank.png" alt="РОСБАНК"></a>-->
		</section>
		<div class="slides_n big_block">
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
		<div class="slides_n big_block mob">
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

</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>