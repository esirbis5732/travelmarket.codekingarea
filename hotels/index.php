<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "забронировать отель забронировать гостиницу онлайн бронирование отелей сервис бронирования отелей снять отель дешево забронировать отель самостоятельно");
$APPLICATION->SetPageProperty("twitter:image", "/local/templates/general_2/img/hotels_wide_og_tw.png");
$APPLICATION->SetPageProperty("fb:image", "/local/templates/general_2/img/hotels_wide_og_tw.png");
$APPLICATION->SetPageProperty("vk:image", "/local/templates/general_2/img/hotels_wide_og_vk.png");
$APPLICATION->SetPageProperty("og:image", "local/templates/general_2/img/hotels_wide_og_tw.png");
$APPLICATION->SetPageProperty("title", "Сервис онлайн бронирования отелей - забронировать гостиницу дешево");
$APPLICATION->SetPageProperty("description", "Бронирование отелей и гостиниц без комиссии. Онлайн бронирование отелей с любыми параметрами и в любой стране");
$APPLICATION->SetTitle("Бронирование жилья");
?>

<main id="main_search" class="hotels">
	<section class="main_search anchor_scroll" >
		<div class="anchor_block">
			<a class="active" href="#main_search"><dfn class="background_dark" data-info="Поиск отелей"><img src="<?=SITE_TEMPLATE_PATH?>/img/avia_1_d.png" alt=""></dfn></a>
			<a href="#map"><dfn class="background_dark" data-info="Карта отелей"><img src="<?=SITE_TEMPLATE_PATH?>/img/avia_2_d.png" alt=""></dfn></a>
			<a href="#daily"><dfn class="background_dark" data-info="Квартиры посуточно"><img src="<?=SITE_TEMPLATE_PATH?>/img/hotels_big_icon_blue.svg" alt=""></dfn></a>
			<a href="#popular"><dfn class="background_dark" data-info="Популярные направления"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon_4_blue.png" alt=""></dfn></a>
			<a href="#special"><dfn class="background_dark" data-info="Специальные тарифы"><img src="<?=SITE_TEMPLATE_PATH?>/img/avia_3_d.png" alt=""></dfn></a>
			
			<a href="#transfer"><dfn class="background_dark" data-info="Трансферы"><img src="<?=SITE_TEMPLATE_PATH?>/img/avia_6_d.png" alt=""></dfn></a>
			
			
		</div>		
		<div class="container">	
			<img class="main_img" src="<?=SITE_TEMPLATE_PATH?>/img/hotels_background_big.png" alt="">
			<h1>Забронировать жильё</h1>
			<ul class="search_form_list">
				<!--<li class="js_tab_content_1 " data-tab="1">
					<script charset="utf-8" src="//partner.onetwotrip.com/build/widget/form.widget.load.js?id=30976&v=2" data-hotels="true"  async></script>	
				</li>-->
				<li class="js_tab_content_1 active" data-tab="2">
					<script charset="utf-8" type="text/javascript" src="https://hotel1.u-travell.ru/iframe.js"></script>
				</li>
				<!--<li class="js_tab_content_1" data-tab="3">
					<script src="//tp.media/content?promo_id=3610&shmarker=200556&campaign_id=118&locale=ru&border_radius=7&plain=true&powered_by=true" charset="utf-8"></script>
				</li>-->
			</ul>				
		</div>
		<!--<div class="search_system_wrapper">
			<p class="search_system_selection">Выберите поисковую систему</p>
			<div class="container">	
				<ul class="search_system_list">-->
					<!--<li class="js_tab_trigger_1 logo_box_item " data-tab="1">			
						<div class="tip">
							OneTwoTrip — лидер онлайн-рынка сервисов для организации путешествий. Сервис помогает легко спланировать путешествие в любую точку мира: забронировать номер или апартаменты, выбирая из 2 000 000 вариантов размещения, купить авиабилет одной из 800 авиакомпаний, билет на поезд или автобус по России, СНГ и Европе, арендовать авто, заказать экскурсию с гидом или приобрести пакетный тур.
							<span class="close"> </span>
						</div>
						<img src="<?=SITE_TEMPLATE_PATH?>/img/one_two_trip.png" alt="">	
					</li>-->
					<!--<li class="js_tab_trigger_1 logo_box_item active" data-tab="2">
						<div class="tip">
							Hotellook.ru — сервис, позволяющий находить и сравнивать цены на отели по всему миру, предоставляемые ведущими системами бронирования.  Hotellook.ru предоставляет собранную воедино информацию о более чем 250 000 отелях в 205 странах, работая с данными более 10 систем онлайн бронирования, таких как Booking.com, Agoda.com, Hotels.com, Expedia и др.
							<span class="close"> </span>
						</div>
						<img src="<?=SITE_TEMPLATE_PATH?>/img/hotellook.png" alt="">
					</li>
					<li class="js_tab_trigger_1 logo_box_item" data-tab="3">
						<div class="tip">
							Booking.com — самый популярный в мире интернет ресурс по бронированию отелей, гарантирует лучшие цены на любой тип недвижимости, начиная от кемпингов и заканчивая роскошными 5-звездочными отелями.
							<span class="close"> </span>
						</div>
						<img src="<?=SITE_TEMPLATE_PATH?>/img/bookingcom.png" alt="">
					</li>
							
				</ul>				
			</div>
		</div>-->					
	</section>
	<div class="container">
		<!--<section class="logo_box" data-aos="fade-up">
		<h2>Еще больше предложений по поиску отелей</h2>		
		<a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/q656x2e2bwd76d4286dab65b535dff/">
			<div class="tip">
				AZIMUT Hotels один из крупнейших гостиничных операторов страны по количеству номеров и географическому охвату – около 7000 номеров в 37 отелях в 29 городах России, Германии, Австрии и Израиля. Рожденная в России и ставшая международной гостиничная сеть бизнес-класса с единым центром бронирования, общей корпоративной культурой и едиными стандартами обслуживания
				<span class="close"> </span>
			</div>
			<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/azimut_hotels.png" alt="azimuthotels.com">
		</a>
		<a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/83b3b940f7d76d4286da4ee68e9c3f/">
			<div class="tip">
				Booking.com — самый популярный в мире интернет ресурс по бронированию отелей, гарантирует лучшие цены на любой тип недвижимости, начиная от кемпингов и заканчивая роскошными 5-звездочными отелями.
				<span class="close"> </span>
			</div>
			<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/booking.jpg" alt="Booking.com">
		</a>
		
		<a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/qgduo66x9id76d4286da69b991bd5d/">
			<div class="tip">
				Туроператор «Дельфин» — команда специалистов, профессионалов своего дела. Уже более 25 лет мы помогаем туристам организовать отдых и путешествия по России, и ближнему зарубежью. Внутренний туризм – наша специализация. Это то, в чем мы разбираемся на «отлично»!
				<span class="close"> </span>
			</div>
			<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/delfin_tour.jpg" alt="Delfin Tour">
		</a>
		
		<a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/onb50cpk47d76d4286dad67109a677/">
			<div class="tip">
				Interhome - бронирование около 50 000 домов и апартаментов для отдыха в режиме онлайн, около 50 000 коттеджей и апартаментов в 31 стране.Сервис Interhome включает в себя осуществление бронирования, его исполнение, передачу ключей и финальную уборку. Всем объектам в нашей базе присвоена общепризнанная звездность в соответствии с высокими стандартами.
				<span class="close"> </span>
			</div>
			<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/interhome.png" alt="Interhome">
		</a>		
		<a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/6ef7bcadc9d76d4286da4c15c68865/?ulp=https%3A%2F%2Fwww.ozon.travel%2Fpartnerhotels%2F">
			<div class="tip">
				OZON.travel — онлайн-магазин путешествий, где вы найдёте все, что нужно для самостоятельной поездки. Быстро. Надежно. Выгодно. Тысячи вариантов авиабилетов, железнодорожные билеты и страховые полисы — OZON.travel позволяет приобрести полный пакет для поездки по России и за рубеж.
				<span class="close"> </span>
			</div>
			<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/ozon_travel.png" alt="Ozon travel">
		</a>		
		<a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/hbsxldeusjd76d4286da33bdb3e5ab/">
			<div class="tip">
				Tickets.ru — часть холдинга TTN, одного из ведущих и динамично развивающихся туристических онлайн-агентств Европы. В перечень сервисов, предоставляемых TTN, входят авиабилеты, отели, железнодорожные и автобусные билеты, страхование, аренда авто, сити брейки, билеты на различные мероприятия и другие. Сейчас TTN работает под брендами: Tickets, KissAndFly, Mytickets, Travelfrom. 
				<span class="close"> </span>
			</div>
			<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/ttn.png" alt="Tickets Many">
		</a>		
		<a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/239cb0bc31d76d4286dabf3e570a18/?ulp=https%3A%2F%2Fwww.svyaznoy.travel%2Fhotels%2F">
			<div class="tip">
				Связной Трэвел — это яркий проект ГК «Связной», который объединяет ключевые сервисы для организации путешествий в рамках масштабной платформы, что позволяет максимально удобно и оперативно организовать свой отдых или бизнес-поездку.
				<span class="close"> </span>
			</div>
			<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/svyaznoi.png" alt="Связной трэвел ">
		</a>		
		</section>-->
		
		
		<section class="map revealator-slideup anchor_scroll" >

			<h2  id="map">Карта отелей</h2>
			<iframe src="//maps.avs.io/hotels?color=%2300b1dd&locale=ru&marker=200556.hotelsmap&changeflag=5&draggable=true&map_styled=false&map_color=%2300b1dd&contrast_color=%23FFFFFF&disable_zoom=false&base_diameter=16&scrollwheel=false&host=hotellook.ru&lat=55.752041&lng=37.617508&zoom=12" height="600px" width="100%" scrolling="no" frameborder="0"></iframe>
		</section >	
		
		<section class="daily revealator-slideup anchor_scroll" data-aos="fade-up" >
			<h2 id="daily">Квартиры посуточно</h2>
			<script src="//tp.media/content?promo_id=2719&shmarker=200556&locale=ru&campaign_id=99&border_radius=10&plain=true&powered_by=true" charset="utf-8"></script>
		</section >	
		
		
		
		<section class="popular  anchor_scroll" data-aos="fade-up" >
			<h2 id="popular">Популярные направления</h2>	
			<div class="popular_wrapper">
				<div>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"template1", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"COMPONENT_TEMPLATE" => "template1",
						"AREA_FILE_RECURSIVE" => "Y",
						"PATH" => "/include/avia/popular_asia.php"
					),
					false
				);?>
				</div>
				<div>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"template1", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"COMPONENT_TEMPLATE" => "template1",
						"AREA_FILE_RECURSIVE" => "Y",
						"PATH" => "/include/avia/popular_evropa.php"
					),
					false
				);?>								
				</div>
				<div>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"template1", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"COMPONENT_TEMPLATE" => "template1",
						"AREA_FILE_RECURSIVE" => "Y",
						"PATH" => "/include/avia/popular_afrika.php"
					),
					false
				);?>
				</div>
				<div>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"template1", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"COMPONENT_TEMPLATE" => "template1",
						"AREA_FILE_RECURSIVE" => "Y",
						"PATH" => "/include/avia/popular_drugoe.php"
					),
					false
				);?>							
				</div>	
			</div>
			<ul class="countries_widget_list">
				<li class="countries_widget_item js_tab_content active" data-tab="1">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"template1", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"COMPONENT_TEMPLATE" => "template1",
						"AREA_FILE_RECURSIVE" => "Y",
						"PATH" => "/include/avia/popular_tai.php"
					),
					false
				);?>								
				</li>
				<li class="countries_widget_item js_tab_content" data-tab="2">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"template1", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"COMPONENT_TEMPLATE" => "template1",
						"AREA_FILE_RECURSIVE" => "Y",
						"PATH" => "/include/avia/popular_tur.php"
					),
					false
				);?>							
				</li>
				<li class="countries_widget_item js_tab_content" data-tab="3">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"template1", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"COMPONENT_TEMPLATE" => "template1",
						"AREA_FILE_RECURSIVE" => "Y",
						"PATH" => "/include/avia/popular_vtm.php"
					),
					false
				);?>							
				</li>							
				<li class="countries_widget_item js_tab_content" data-tab="4">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"template1", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"COMPONENT_TEMPLATE" => "template1",
						"AREA_FILE_RECURSIVE" => "Y",
						"PATH" => "/include/avia/popular_indz.php"
					),
					false
				);?>								
				</li>
				<li class="countries_widget_item js_tab_content" data-tab="5">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"template1", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"COMPONENT_TEMPLATE" => "template1",
						"AREA_FILE_RECURSIVE" => "Y",
						"PATH" => "/include/avia/popular_jap.php"
					),
					false
				);?>								
				</li>
				<li class="countries_widget_item js_tab_content" data-tab="6">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"template1", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"COMPONENT_TEMPLATE" => "template1",
						"AREA_FILE_RECURSIVE" => "Y",
						"PATH" => "/include/avia/popular_china.php"
					),
					false
				);?>								
				</li>
				<li class="countries_widget_item js_tab_content" data-tab="7">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"template1", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"COMPONENT_TEMPLATE" => "template1",
						"AREA_FILE_RECURSIVE" => "Y",
						"PATH" => "/include/avia/popular_sk.php"
					),
					false
				);?>							
				</li>
				<li class="countries_widget_item js_tab_content" data-tab="8">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"template1", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"COMPONENT_TEMPLATE" => "template1",
						"AREA_FILE_RECURSIVE" => "Y",
						"PATH" => "/include/avia/popular_gre.php"
					),
					false
				);?>														
				</li>
				<li class="countries_widget_item js_tab_content" data-tab="9">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"template1", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"COMPONENT_TEMPLATE" => "template1",
						"AREA_FILE_RECURSIVE" => "Y",
						"PATH" => "/include/avia/popular_gru.php"
					),
					false
				);?>								
				</li>
				<li class="countries_widget_item js_tab_content" data-tab="10">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"template1", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"COMPONENT_TEMPLATE" => "template1",
						"AREA_FILE_RECURSIVE" => "Y",
						"PATH" => "/include/avia/popular_fr.php"
					),
					false
				);?>								
				</li>
				<li class="countries_widget_item js_tab_content" data-tab="11">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"template1", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"COMPONENT_TEMPLATE" => "template1",
						"AREA_FILE_RECURSIVE" => "Y",
						"PATH" => "/include/avia/popular_cheh.php"
					),
					false
				);?>										
				</li>
				<li class="countries_widget_item js_tab_content" data-tab="12">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"template1", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"COMPONENT_TEMPLATE" => "template1",
						"AREA_FILE_RECURSIVE" => "Y",
						"PATH" => "/include/avia/popular_itl.php"
					),
					false
				);?>							
				</li>
				<li class="countries_widget_item js_tab_content" data-tab="13">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"template1", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"COMPONENT_TEMPLATE" => "template1",
						"AREA_FILE_RECURSIVE" => "Y",
						"PATH" => "/include/avia/popular_port.php"
					),
					false
				);?>								
				</li>
				<li class="countries_widget_item js_tab_content" data-tab="14">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"template1", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"COMPONENT_TEMPLATE" => "template1",
						"AREA_FILE_RECURSIVE" => "Y",
						"PATH" => "/include/avia/popular_nid.php"
					),
					false
				);?>								
				</li>
				<li class="countries_widget_item js_tab_content" data-tab="15">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"template1", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"COMPONENT_TEMPLATE" => "template1",
						"AREA_FILE_RECURSIVE" => "Y",
						"PATH" => "/include/avia/popular_gb.php"
					),
					false
				);?>							
				</li>
				<li class="countries_widget_item js_tab_content" data-tab="16">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"template1", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"COMPONENT_TEMPLATE" => "template1",
						"AREA_FILE_RECURSIVE" => "Y",
						"PATH" => "/include/avia/popular_egu.php"
					),
					false
				);?>															
				</li>
				<li class="countries_widget_item js_tab_content" data-tab="17">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"template1", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"COMPONENT_TEMPLATE" => "template1",
						"AREA_FILE_RECURSIVE" => "Y",
						"PATH" => "/include/avia/popular_mar.php"
					),
					false
				);?>									
				</li>
				<li class="countries_widget_item js_tab_content" data-tab="18">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"template1", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"COMPONENT_TEMPLATE" => "template1",
						"AREA_FILE_RECURSIVE" => "Y",
						"PATH" => "/include/avia/popular_oae.php"
					),
					false
				);?>									
				</li>
				<li class="countries_widget_item js_tab_content" data-tab="19">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"template1", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"COMPONENT_TEMPLATE" => "template1",
						"AREA_FILE_RECURSIVE" => "Y",
						"PATH" => "/include/avia/popular_rus.php"
					),
					false
				);?>																
				</li>
				<li class="countries_widget_item js_tab_content" data-tab="20">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"template1", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"COMPONENT_TEMPLATE" => "template1",
						"AREA_FILE_RECURSIVE" => "Y",
						"PATH" => "/include/avia/popular_usa.php"
					),
					false
				);?>								
				</li>
			</ul>
		</section>
		
		<section class="special revealator-slideup anchor_scroll" data-aos="fade-up" >
			<div id="special">
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include", 
				"template1", 
				array(
					"AREA_FILE_SHOW" => "file",
					"AREA_FILE_SUFFIX" => "inc",
					"EDIT_TEMPLATE" => "standard.php",
					"COMPONENT_TEMPLATE" => "template1",
					"AREA_FILE_RECURSIVE" => "Y",
					"PATH" => "/include/avia/special.php"
				),
				false
			);?>	
			</div>						
		</section>
		
		<section class="transfer revealator-slideup anchor_scroll" data-aos="fade-up" id="transfer">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include", 
						"template1", 
						array(
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "inc",
							"EDIT_TEMPLATE" => "standard.php",
							"COMPONENT_TEMPLATE" => "template1",
							"AREA_FILE_RECURSIVE" => "Y",
							"PATH" => "/include/avia/transfer.php"
						),
						false
					);?>										
				</section>
		
		
		
		
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include", 
				"template1", 
				array(
					"AREA_FILE_SHOW" => "file",
					"AREA_FILE_SUFFIX" => "inc",
					"EDIT_TEMPLATE" => "standard.php",
					"COMPONENT_TEMPLATE" => "template1",
					"AREA_FILE_RECURSIVE" => "Y",
					"PATH" => "/include/hotel-seo.php"
				),
				false
			);?>
</div>	
</main>
<!--<script>
	function FixedElement(block)
	{
			var menu = document.getElementsByClassName("header")[0];
			var section = document.getElementById('popular');
			if (!menu.classList.contains("out"))
			{
				if (!block.classList.contains("ads-fixed-menu"))
				{
					if (block.classList.contains("ads-fixed-nomenu"))block.classList.remove("ads-fixed-nomenu");
					block.classList.add("ads-fixed-menu");
				}
            }
			else
			{
				if (!block.classList.contains("ads-fixed-nomenu"))
				{
					if (block.classList.contains("ads-fixed-menu"))block.classList.remove("ads-fixed-menu");
					block.classList.add("ads-fixed-nomenu");
				}
			}
			block.setAttribute("style", "width:"+section.clientWidth+"px;");
	}
	function UnFixedElement(block)
	{
			if (block.classList.contains("ads-fixed-nomenu"))block.classList.remove("ads-fixed-nomenu");
			if (block.classList.contains("ads-fixed-menu"))block.classList.remove("ads-fixed-menu");
			block.setAttribute("style", "");
	}
	window.onscroll = function() {scrollFunction()};
	function scrollFunction() {
		var coord = document.documentElement.scrollTop;
		document.getElementById("txt").innerHTML= coord.toString();
		var block1 = document.getElementById("ads-block-1");
		var block2 = document.getElementById("ads-block-2");
		var block3 = document.getElementById("ads-block-3");
		if (coord>=882 && coord<=1400) {FixedElement(block1);}
		else {UnFixedElement(block1);}
		if (coord>=1800 && coord<=2300){FixedElement(block2);}
		else {UnFixedElement(block2);}
		if (coord>=2500 && coord<=4600){ FixedElement(block3);}
		else{ UnFixedElement(block3);}
	}
</script>-->
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>