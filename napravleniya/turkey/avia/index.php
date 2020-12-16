<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "купить авиабилеты в Турцию билеты на самолет в Турцию дешевые авиабилеты в Турцию цена авиабилет Турция");
$APPLICATION->SetPageProperty("description", "Дешевые авиабилеты в Турцию. Поиск и сравнение цен билетов на самолет в Турцию. Забронируйте билеты в Турцию.");
$APPLICATION->SetPageProperty("title", "Купить авиабилеты в Турцию - поиск дешевых билетов на самолет, лучшие цены");
$APPLICATION->SetTitle("Авиабилеты в Турцию");
?><main class="directions sect_avia turkey">
	<section class="main_search anchor_scroll" id="main_search">
		<div class="container">
			<img class="main_img" src="/local/templates/general_2/img/avia_background_big.png" alt="">
			<h1>Авиабилеты в Турцию</h1>
			
		</div>		
		<div class="container">			
			
			
			
					<ul class="search_form_list">
						<li class="js_tab_content_1 active" data-tab="1">
						<script charset="utf-8" type="text/javascript" src="https://travel1.u-travell.ru/iframe.js"></script>								
						</li>
						<li class="js_tab_content_1" data-tab="2">
							<script src="//c111.travelpayouts.com/content?promo_id=3411&shmarker=200556&from_name=MOW&to_name=AYT&locale=ru&currency=RUB&primary_color=00C7CB&results_background_color=ffffff&form_background_color=ffffff&search_form_color1=2A3D71&search_form_color2=ffffff&powered_by=true" charset="utf-8"></script>
						</li>
						<li class="js_tab_content_1" data-tab="3">
							<div id='ufs-avia-app'></div> <!--Контейнер для приложения. Менять
							идентификатор контейнера не допускается-->
							<script>
							var UfsAviaAppConfig = {
							"isHashUrl":true,
							"apiEndpoint":"https://api.ufs-online.ru/api/v1",
							"basename":"/avia/", //пример
							"assetsUrl":"https://spa.ufs-online.ru/aviator-app/assets.json",
							"appDomain":"u-travell.ufs-partner.ru" //пример
							};
							</script>
							<script src='https://spa.ufs-online.ru/aviator-app/widget.js'></script>
						</li>
						<!--<li class="js_tab_content_1" data-tab="4">
							<script charset="utf-8" src="//partner.onetwotrip.com/build/widget/form.widget.load.js?id=31106&v=2" data-avia="true" avia-from="MOW" avia-to="HKT"  async></script>
						</li>	-->						
					</ul>
		</div>
		<div class="search_system_wrapper">
			<p class="search_system_selection">Выберите поисковую систему</p>					
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
					</li>
					<!--<li class="js_tab_trigger_1 logo_box_item" data-tab="4">	
						<div class="tip">
							OneTwoTrip — лидер онлайн-рынка сервисов для организации путешествий.  
							Сервис помогает легко спланировать путешествие в любую точку мира: забронировать номер или апартаменты, выбирая из 2 000 000 вариантов размещения, купить авиабилет одной из 800 авиакомпаний, билет на поезд или автобус по России, СНГ и Европе, арендовать авто, заказать экскурсию с гидом или приобрести пакетный тур.
							<span class="close"> </span>
						</div>
						<img src="<?=SITE_TEMPLATE_PATH?>/img/one_two_trip.png" alt="">	
					</li>-->
				</ul>
		</div>					
	</section>
	<div class="container">
		<!--</section>-->
		<section class="useful">
		<h2>Смотрите также</h2>
			<ul class="useful_list">
				<li class="useful_list_item">
					<a href="/napravleniya/turkey/tours/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/beach_tours_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Туры в Турцию</p>
					</a>				
				</li>				
				<li class="useful_list_item">
					<a href="/napravleniya/turkey/hotels/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/hotels_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Отели в Турции</p>
					</a>				
				</li>
				<li class="useful_list_item">
					<a href="/napravleniya/turkey/ekskursii/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/ekskursii_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Экскурсии в Турции</p>
					</a>				
				</li>
				<li class="useful_list_item">
					<a href="/napravleniya/turkey/car_rental/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/car_rentali_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Прокат авто в Турции</p>
					</a>				
				</li>
				<li class="useful_list_item">
					<a href="/napravleniya/turkey/transfers/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/transfers_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Трансферы в Турции</p>
					</a>				
				</li>			
			</ul>	
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
					"PATH" => "/include/turkeySEO/avia.php"
				),
				false
			);?>

	</div>
</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>