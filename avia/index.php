<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "купить авиабилеты онлайн дешево  забронировать авиабилет  цена билета на самолет");
$APPLICATION->SetPageProperty("title", "Купить дешевые авиабилеты онлайн - лучшие цены билетов на самолет");
$APPLICATION->SetPageProperty("twitter:image", "/local/templates/general_2/img/avia_wide_og_tw.png");
$APPLICATION->SetPageProperty("fb:image", "/local/templates/general_2/img/avia_wide_og_tw.png");
$APPLICATION->SetPageProperty("vk:image", "/local/templates/general_2/img/avia_wide_og_vk.png");
$APPLICATION->SetPageProperty("og:image", "/local/templates/general_2/img/avia_wide_og_tw.png");
$APPLICATION->SetTitle("Авиабилеты");
?>

<main id="main_search" class="avia">
			<div class="anchor_block">
				<a class="active" href="#main_search"><dfn class="background_dark" data-info="Поиск авиабилетов"><img src="<?=SITE_TEMPLATE_PATH?>/img/avia_1_d.png" alt=""></dfn></a>
				<a href="#popular"><dfn class="background_dark" data-info="Популярные направления"><img src="<?=SITE_TEMPLATE_PATH?>/img/avia_2_d.png" alt=""></dfn></a>
				<a href="#special"><dfn  class="background_dark" data-info="Специальные тарифы"><img src="<?=SITE_TEMPLATE_PATH?>/img/avia_3_d.png" alt=""></dfn></a>
				<a href="#calendar"><dfn class="background_dark" data-info="Календарь цен"><img src="<?=SITE_TEMPLATE_PATH?>/img/avia_4_d.png" alt=""></dfn></a>
				<a href="#schedule"><dfn class="background_dark" data-info="Расписание рейсов"><img src="<?=SITE_TEMPLATE_PATH?>/img/avia_5_d.png" alt=""></dfn></a>
				<a href="#transfer"><dfn class="background_dark" data-info="Трансферы"><img src="<?=SITE_TEMPLATE_PATH?>/img/avia_6_d.png" alt=""></dfn></a>
				<a href="#compens"><dfn class="background_dark" data-info="Компенсация за задержку или отмену рейса"><img src="<?=SITE_TEMPLATE_PATH?>/img/compensations_icon.png" alt=""></dfn></a>
			</div>			
			<section class="main_search anchor_scroll" >
				
				<div class="container">	
					<img class="main_img" src="<?=SITE_TEMPLATE_PATH?>/img/avia_background_big.png" alt="">
					<h1>Поиск дешёвых авиабилетов</h1>
					<ul class="search_form_list">
						<li class="js_tab_content_1 active" data-tab="1">
						<script charset="utf-8" type="text/javascript" src="https://travel1.u-travell.ru/iframe.js"></script>								
						</li>
						<!--<li class="js_tab_content_1" data-tab="2">
							<script src="//tp.media/content?promo_id=3414&shmarker=200556&campaign_id=111&locale=ru&border_radius=0&plain=true&powered_by=true" charset="utf-8"></script>
						</li>
						<li class="js_tab_content_1" data-tab="3">
							<div id='ufs-avia-app'></div>--> <!--Контейнер для приложения. Менять
							идентификатор контейнера не допускается-->
							<!--<script>
							var UfsAviaAppConfig = {
							"isHashUrl":true,
							"apiEndpoint":"https://api.ufs-online.ru/api/v1",
							"basename":"/avia/", //пример
							"assetsUrl":"https://spa.ufs-online.ru/aviator-app/assets.json",
							"appDomain":"u-travell.ufs-partner.ru" //пример
							};
							</script>
							<script src='https://spa.ufs-online.ru/aviator-app/widget.js'></script>
						</li>-->
						<!--<li class="js_tab_content_1" data-tab="4">
							<script charset="utf-8" src="//partner.onetwotrip.com/build/widget/form.widget.load.js?id=31106&v=2" data-avia="true"  async></script>
						</li>-->							
					</ul>				
				</div>
				<!--<div class="search_system_wrapper">
					<p class="search_system_selection">Выберите поисковую систему</p>
					<div class="container">	
						<ul class="search_system_list">
							<li class="js_tab_trigger_1 logo_box_item active" data-tab="1">						
								<div class="tip">
									Aviasales.RU —  первый и единственный в Рунете метапоиск дешевых авиабилетов. Мы ищем авиабилеты в 728 авиакомпаниях, 15 авиакассах и 5 системах. Никаких сборов или наценок — на aviasales.ru лишь максимально низкие тарифы от надежных агентств, а где покупать — решать пользователям.
									<span class="close"> </span>
								</div>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/avia_7_d.png" alt="">	
							</li>
							<li class="js_tab_trigger_1 logo_box_item" data-tab="2">	
								<div class="tip">
									Kiwi.com это компания-революционер в индустрии путешествий! Kiwi.com  позволяет создавать комбинации рейсов, поездок на поездах и автобусах, и составлять единый маршрут. Кроме того, интерфейс удобен для использования. Благодаря обширной базе данных бюджетных авиакомпаний и традиционных авиалиний, интерактивной карте и другим инструментам, Kiwi.com поможет клиенту составить наиболее удобный и дешевый маршрут!
									<span class="close"> </span>
								</div>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/kiwi.png" alt="">	
							</li>
							<li class="js_tab_trigger_1 logo_box_item" data-tab="3">	
								<div class="tip">
									UFS работаеn в сфере туризма с 2003 года и предлагаеn широкий спектр услуг. Dы легко найдете железнодорожные билеты, а также авиабилеты по России и миру. UFS напомнит заранее про «Аэроэкспресс» и поможет оформить страховку для себя и других пассажиров в поездке.
									<span class="close"> </span>
								</div>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/ufs.png" alt="">	
							</li>-->
							<!--<li class="js_tab_trigger_1 logo_box_item" data-tab="4">	
								<div class="tip">
									OneTwoTrip — лидер онлайн-рынка сервисов для организации путешествий.  Сервис помогает легко спланировать путешествие в любую точку мира: забронировать номер или апартаменты, выбирая из 2 000 000 вариантов размещения, купить авиабилет одной из 800 авиакомпаний, билет на поезд или автобус по России, СНГ и Европе, арендовать авто, заказать экскурсию с гидом или приобрести пакетный тур.
									<span class="close"> </span>
								</div>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/one_two_trip.png" alt="">	
							</li>-->
						<!--</ul>				
					</div>
				</div>-->					
			</section>

			<div class="container">
			<!--<section class="logo_box">
				<h2>Еще больше предложений по покупке авиабилетов</h2>
				<a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/a8t3tzgaxgd76d4286daf348c8039f/">
					<div class="tip">Biletik.aero – сервис по поиску, бронированию и онлайн-продаже дешевых авиабилетов. На нашем сайте вам доступны билеты на самолет практически в любую точку земного шара от всех основных авиа компаний мира. Все договоры перевозки, заключаемые вами путем бронирования и выписки авиабилетов на данном сайте вы заключаете непосредственно с авиакомпаниями. Мы выступаем как агрегатор предложений авиакомпаний, потому это безопасно для вас.
					<span class="close"> </span>
					</div>
					<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/biletik.png" alt="biletikaero">
				</a>
				<a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/7szr51p4qkd76d4286da61c4170c1f/">
					<div class="tip">Biletix – туроператор и онлайн-трэвел агентство. Сегодня Biletix является одним из крупнейших российских интернет-ресурсов, предоставляющих путешественникам и корпоративным клиентам возможность удобного поиска, бронирования и покупки авиационных и железнодорожных билетов, отелей, классических и динамических туров, туристических страховок и аренды автомобилей. Biletix создан в 2008 году как b2c-проект Холдинга Випсервис.
					<span class="close"> </span>
					</div>
					<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/biletix.png" alt="Biletix RU">
				</a>				
				<a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/5qxjgdudhad76d4286da63a460fe46/">
					<div class="tip">
						Go2See — это онлайн-агентство путешествий, удобный сервис по покупке авиабилетов в любую точку мира. Go2See — официальный агент Международной ассоциации воздушного транспорта (IATA). У нас есть эксклюзивные предложения на чартерные перелеты на все основные курорты, а лоукостеры дают возможность совершать дешевые туристические и деловые поездки по всей Европе и Азии. Также у нас можно заранее купить дополнительный багаж, что гораздо выгоднее, чем в аэропорту.
						<span class="close"> </span>
					</div>
					<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/go2see.png" alt="Go2see">
				</a>				
				<a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/77fc3e0792d76d4286dada07f65aea/">
					<div class="tip">
						JetRadar.com – проверенный помощник в поиске авиабилетов, первый и единственный в Рунете метапоиск дешевых авиабилетов. Мы ищем авиабилеты в 728 авиакомпаниях, 15 авиакассах и 5 системах. Никаких сборов или наценок –  лишь максимально низкие тарифы от надежных агентств, а где покупать – решать вам. 
						<span class="close"> </span>
					</div>
					<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/jetradar.png" alt="Jetradar">
				</a>				
				<a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/cf5fd67890d76d4286dac67f485a43/">		
					<div class="tip">
						Мы гарантируем каждому пассажиру честную цену, поддержку от покупки до приземления и безопасную оплату билета
						<span class="close"> </span>
					</div>
					<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/kupibilet.jpg" alt="Kupibilet RU">	
				</a>				
				<a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/6ef7bcadc9d76d4286da4c15c68865/">
					<div class="tip">
						OZON.travel — онлайн-магазин путешествий, где вы найдёте все, что нужно для самостоятельной поездки. Быстро. Надежно. Выгодно. Тысячи вариантов авиабилетов, железнодорожные билеты и страховые полисы — OZON.travel позволяет приобрести полный пакет для поездки по России и за рубеж.
						<span class="close"> </span>
					</div>
					<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/ozon_travel.png" alt="Ozon travel">				
				</a>				
				<a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/5xq79at7v6d76d4286dacd9901f6bc/">		
					<div class="tip">
						Авиакомпания Qatar Airways – одна из самых молодых авиакомпаний в мире, осуществляющая перелеты на шести континентах. Мы обеспечиваем непревзойденный уровень обслуживания на борту самолетов и в нашем хабе в Международном аэропорту Хамад, который находится в городе Доха, Государство Катар.
						<span class="close"> </span>
					</div>
					<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/qatar_airways.png" alt="Qatar Airways">
				</a>				
				<a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/hbsxldeusjd76d4286da33bdb3e5ab/">
					<div class="tip">
						Tickets.ru — часть холдинга TTN, одного из ведущих и динамично развивающихся туристических онлайн-агентств Европы. В перечень сервисов, предоставляемых TTN, входят авиабилеты, отели, железнодорожные и автобусные билеты, страхование, аренда авто, сити брейки, билеты на различные мероприятия и другие. Сейчас TTN работает под брендами: Tickets, KissAndFly, Mytickets, Travelfrom. 
						<span class="close"> </span>
					</div>
					<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/ttn.png" alt="Tickets Many">
				</a>				
				<a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/239cb0bc31d76d4286dabf3e570a18/">
					<div class="tip">
						Связной Трэвел — это яркий проект ГК «Связной», который объединяет ключевые сервисы для организации путешествий в рамках масштабной платформы, что позволяет максимально удобно и оперативно организовать свой отдых или бизнес-поездку.
						<span class="close"> </span>
					</div>
					<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/svyaznoi.png" alt="Связной трэвел ">
				</a>				
			</section>-->

				
				<section class="popular revealator-slideup anchor_scroll">
					
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
				
				<section class="calendar revealator-slideup anchor_scroll" data-aos="fade-up" >
					<div id="calendar">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include", 
						"template1", 
						array(
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "inc",
							"EDIT_TEMPLATE" => "standard.php",
							"COMPONENT_TEMPLATE" => "template1",
							"AREA_FILE_RECURSIVE" => "Y",
							"PATH" => "/include/avia/calendar.php"
						),
						false
					);?>	
					</div>					
				</section>
				
				<section class="schedule revealator-slideup anchor_scroll" data-aos="fade-up" >
					<div id="schedule">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include", 
						"template1", 
						array(
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "inc",
							"EDIT_TEMPLATE" => "standard.php",
							"COMPONENT_TEMPLATE" => "template1",
							"AREA_FILE_RECURSIVE" => "Y",
							"PATH" => "/include/avia/schedule.php"
						),
						false
					);?>	
					</div>			
				</section>
				
				<section class="transfer revealator-slideup anchor_scroll" data-aos="fade-up" >
					<div id="transfer">
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
					</div>									
				</section>
				
				
				<section class="compens revealator-slideup anchor_scroll" data-aos="fade-up" id="compens">		
					<h2>Компенсация за задержку или отмену рейса</h2>

					<div class="compens_desc">
						<h3>Требуйте компенсацию за отмену или задержку своего рейса</h3>
						<img src="<?=SITE_TEMPLATE_PATH?>/img/compensations_small.png" alt="">
						<p>Рейсы иногда задерживают, но вы не обязаны с этим мириться. Если за последние 3 года вы пострадали от задержки, отмены или овербукинга рейса, вам может полагаться компенсация в размере до 600 €.</p>
						<ul class="compens_desc_list">
							<li>87% авиапассажиров не разбираются в своих правах и не понимают, в каких случаях им полагается компенсация. Не будьте одним из них.</li>
							<li>Зная  данные своего рейса, можно быстро выяснить, полагается ли вам компенсация. Совершенно бесплатно.</li>
													
						</ul>
						<a href="/more-services/compensations/">Получить компенсацию</a>
					</div>
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
					"PATH" => "/include/air-ticket-seo.php"
				),
				false
			);?>

			</div>					
		</main>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>