<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "U-TRAVELL - Прокат авто во Вьетнаме");
$APPLICATION->SetTitle("Прокат авто во Вьетнаме");
?>

<main class="directions vietnam sect_car_rental">
	
	<section class="main_search" id="main_search">
		<div class="container">
			<img class="main_img" src="<?=SITE_TEMPLATE_PATH?>/img/car_background_big_vietnam.png" alt="">
			<h1>Прокат авто во Вьетнаме</h1>
			
		</div>
		<div class="container">
			
								
			<ul class="search_form_list">
				<li class="js_tab_content_1 active" data-tab="1">
					<script src="https://c10.travelpayouts.com/content?promo_id=2109&shmarker=200556&locale=ru&border_radius=0px&button_color=%2300C7CB&input_border_radius=false&logo=false&hide_header=true&full_width=true&pick_up=HAN&powered_by=true" charset="utf-8" async="true"></script>	
				</li>
				<li class="js_tab_content_1" data-tab="2">
					<script src="https://c52.travelpayouts.com/content?promo_id=1757&shmarker=200556&color_scheme=bright&border_radius=5px&input_border_radius=true&logo=true&hide_header=true&pick_up=HAN&powered_by=true" charset="utf-8" async="true"></script>
				</li>
				<!--<li class="js_tab_content_1" data-tab="3">
					<script charset="utf-8" src="//partner.onetwotrip.com/widgets/9da4a8da-a59c-45d7-85de-1f770e16eee0.js" async></script>
				</li>-->				
			</ul>
		</div>
		
		<div class="search_system_wrapper">
			<p class="search_system_selection">Выберите поисковую систему</p>			
				<ul class="search_system_list">
					<li class="js_tab_trigger_1 logo_box_item active" data-tab="1">			
						<div class="tip">
							Economybookings.com — международный сервис бронирования дешевого автопроката в мире, России, Европе.
							<span class="close"> </span>
						</div>
						<img src="<?=SITE_TEMPLATE_PATH?>/img/economybookingscom.png" alt="">	
					</li>
					<li class="js_tab_trigger_1 logo_box_item" data-tab="2">	
						<div class="tip">
							AutoEurope — онлайн-сервис для бронирования автомобилей в 180+ странах мира. Посетители могут быстро подобрать необходимый вариант и оформить аренду за 3 шага. На карточках автомобилей расположена основная информация и условия аренды. Можно сравнить тарифы от разных арендодателей: Herz, Sixt, и других.
							<span class="close"> </span>
						</div>
						<img src="<?=SITE_TEMPLATE_PATH?>/img/autoeurope.png" alt="">	
					</li>
					<!--<li class="js_tab_trigger_1 logo_box_item" data-tab="3">	
						<div class="tip">
							OneTwoTrip — лидер онлайн-рынка сервисов для организации путешествий.  Сервис помогает легко спланировать путешествие в любую точку мира: забронировать номер или апартаменты, выбирая из 2 000 000 вариантов размещения, купить авиабилет одной из 800 авиакомпаний, билет на поезд или автобус по России, СНГ и Европе, арендовать авто, заказать экскурсию с гидом или приобрести пакетный тур.
							<span class="close"> </span>
						</div>
						<img src="<?=SITE_TEMPLATE_PATH?>/img/one_two_trip.png" alt="">	
					</li>-->
										
				</ul>			
		</div>					
					
	</section>
	<div class="container" data-aos="fade-up">
		<section class="useful">
		<h2>Смотрите также</h2>
			<ul class="useful_list">
				<li class="useful_list_item">
					<a href="/napravleniya/vietnam/tours/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/beach_tours_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Туры во Вьетнам</p>
					</a>				
				</li>
				<li class="useful_list_item">
					<a href="/napravleniya/vietnam/avia/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/avia_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Авиабилеты во Вьетнам</p>
					</a>				
				</li>
				<li class="useful_list_item">
					<a href="/napravleniya/vietnam/hotels/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/hotels_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Отели во Вьетнаме</p>
					</a>				
				</li>
				<li class="useful_list_item">
					<a href="/napravleniya/vietnam/ekskursii/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/ekskursii_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Экскурсии во Вьетнаме</p>
					</a>				
				</li>
				<!--<li class="useful_list_item">
					<a href="/napravleniya/vietnam/car_rental/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/car_rentali_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Прокат авто во Вьетнаме</p>
					</a>				
				</li>-->
				<li class="useful_list_item">
					<a href="/napravleniya/vietnam/transfers/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/transfers_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Трансферы во Вьетнаме</p>
					</a>				
				</li>			
			</ul>	
		</section>	
	</div>
</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>