<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "оаэ шарджа отели бич отель оаэ отели оаэ дубай аджман эмираты лучшие отели оаэ");
$APPLICATION->SetPageProperty("description", "Дешевые отели ОАЭ. Лучшие отели в Дубае и  Шардже по низким ценам.  Бронирование отелей в Арабских Эмиратах");
$APPLICATION->SetPageProperty("title", "Лучшие отели ОАЭ - цены на бронирование отелей в Арабских Эмиратах");
$APPLICATION->SetTitle("Отели в Эмиратах");
?><main class="directions oae sect_hotels">
	<section class="main_search anchor_scroll" id="main_search">
		<div class="container">
			<img class="main_img" src="/local/templates/general_2/img/hotels_background_big_uae.png" alt="">
			<h1>Отели в Эмиратах</h1>
			
		</div>		
		<div class="container">			
					<ul class="search_form_list">
						<li class="js_tab_content_1 active" data-tab="1">
							<script charset="utf-8" type="text/javascript" src="https://hotel1.u-travell.ru/iframe.js"></script>
						</li>
						<!--<li class="js_tab_content_1 " data-tab="2">
							<script charset="utf-8" src="//partner.onetwotrip.com/build/widget/form.widget.load.js?id=31106&v=2" data-hotels="true" place="69" place-type="tourism"  async></script>	
						</li>-->						
						<!--<li class="js_tab_content_1" data-tab="3">
							<script src="//tp.media/content?promo_id=3610&shmarker=200556&campaign_id=118&locale=ru&default_direction=%D0%9E%D0%90%D0%AD&border_radius=5&plain=true&powered_by=true" charset="utf-8"></script>
						</li>-->
					</ul>
		</div>
		<!--<div class="search_system_wrapper">
			<p class="search_system_selection">Выберите поисковую систему</p>					
			<ul class="search_system_list">
			
				<li class="js_tab_trigger_1 logo_box_item active" data-tab="1">
					<div class="tip">
						Hotellook.ru — сервис, позволяющий находить и сравнивать цены на отели по всему миру, предоставляемые ведущими системами бронирования.  Hotellook.ru предоставляет собранную воедино информацию о более чем 250 000 отелях в 205 странах, работая с данными более 10 систем онлайн бронирования, таких как Booking.com, Agoda.com, Hotels.com, Expedia и др.
						<span class="close"> </span>
					</div>
					<img src="<?=SITE_TEMPLATE_PATH?>/img/hotellook.png" alt="">
				</li>
				<li class="js_tab_trigger_1 logo_box_item " data-tab="2">			
					<div class="tip">
						OneTwoTrip — лидер онлайн-рынка сервисов для организации путешествий.Сервис помогает легко спланировать путешествие в любую точку мира: забронировать номер или апартаменты, выбирая из 2 000 000 вариантов размещения, купить авиабилет одной из 800 авиакомпаний, билет на поезд или автобус по России, СНГ и Европе, арендовать авто, заказать экскурсию с гидом или приобрести пакетный тур.
						<span class="close"> </span>
					</div>
					<img src="<?=SITE_TEMPLATE_PATH?>/img/one_two_trip.png" alt="">	
				</li>-->				
				<!--<li class="js_tab_trigger_1 logo_box_item" data-tab="3">
					<div class="tip">
						Booking.com — самый популярный в мире интернет ресурс по бронированию отелей, гарантирует лучшие цены на любой тип недвижимости, начиная от кемпингов и заканчивая роскошными 5-звездочными отелями.
						<span class="close"> </span>
					</div>
					<img src="<?=SITE_TEMPLATE_PATH?>/img/bookingcom.png" alt="">
				</li>
			</ul>				
		</div>-->					
	</section>
	<div class="container">
		<section class="useful" >
		<h2>Смотрите также</h2>
			<ul class="useful_list">
				<li class="useful_list_item">
					<a href="/napravleniya/oae/tours/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/beach_tours_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Туры в ОАЭ</p>
					</a>				
				</li>
				<li class="useful_list_item">
					<a href="/napravleniya/oae/avia/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/avia_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Авиабилеты в ОАЭ</p>
					</a>				
				</li>				
				<li class="useful_list_item">
					<a href="/napravleniya/oae/ekskursii/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/ekskursii_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Экскурсии в ОАЭ</p>
					</a>				
				</li>
				<li class="useful_list_item">
					<a href="/napravleniya/oae/car_rental/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/car_rentali_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Прокат авто в ОАЭ</p>
					</a>				
				</li>
				<li class="useful_list_item">
					<a href="/napravleniya/oae/transfers/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/transfers_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Трансферы в ОАЭ</p>
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
					"PATH" => "/include/oaeSEO/hotel.php"
				),
				false
			);?>
	</div>
</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>