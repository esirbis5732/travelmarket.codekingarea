<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "U-TRAVELL - Трансферы на Кубе");
$APPLICATION->SetTitle("Трансферы на Кубе");
?>

<main class="directions cuba sect_transfers">
	<section class="main_search" id="main_search">
		<div class="container">
			<img class="main_img" src="<?=SITE_TEMPLATE_PATH?>/img/transfers_background_big_cuba.png" alt="">
			<h1>Трансферы на Кубе</h1>
			
		</div>
		<div class="container">
				
				
				<ul class="search_form_list">
					<li class="js_tab_content_1 active" data-tab="1">					
						<script src="https://c1.travelpayouts.com/content?promo_id=691&shmarker=200556&from=%D0%93%D0%B0%D0%B2%D0%B0%D0%BD%D0%B0&language=ru&display_currency=RUB&theme=davs&transfer_type=any&hide_form_extras=true&hide_external_links=false&disable_currency_selector=false&powered_by=true" charset="utf-8" async></script>							
					</li>
					<li class="js_tab_content_1" data-tab="2">
						<script src="//c22.travelpayouts.com/content?promo_id=1504&shmarker=200556&locale=ru&n_ap=%D0%93%D0%B0%D0%B2%D0%B0%D0%BD%D0%B0&color_scheme=orange&header=%D0%9D%D0%B0%D0%B9%D1%82%D0%B8%20%D1%82%D1%80%D0%B0%D0%BD%D1%81%D1%84%D0%B5%D1%80%20%D0%B2%20%D0%A2%D0%B0%D0%B8%D0%BB%D0%B0%D0%BD%D0%B4%D0%B5&b_counter=false&b_benefit=false&b_descr=false&b_about=false&b_map=true&b_reviews=false&b_breadcrumbs=false&powered_by=true" charset="utf-8"></script>
					</li>
					
				</ul>
		</div>
		
		<div class="search_system_wrapper">
			<p class="search_system_selection">Выберите поисковую систему</p>
			
				<ul class="search_system_list">
					<li class="js_tab_trigger_1 logo_box_item active" data-tab="1">			
						<div class="tip">
							Kiwitaxi.ru — это система онлайн-бронирования индивидуальных трансферов.
							<span class="close"> </span>
						</div>
						<img src="<?=SITE_TEMPLATE_PATH?>/img/kiwitaxi.png" alt="">	
					</li>
					<li class="js_tab_trigger_1 logo_box_item" data-tab="2">	
						<div class="tip">
							Intui – это сервис по поиску и бронированию трансферов непосредственно у компаний-перевозчиков. 152 Страны, трансфер из 4500 Аэропортов, 6 000 000 маршрутов. Цены напрямую от компаний-перевозчиков. На ваш выбор от машин эконом-класса до шаттл-баса или лимузина.  Вы можете забронировать поездку из аэропорта до адреса. Встречи и проводы в аэропорт от двери до двери. Бесплатная отмена брони.
							<span class="close"> </span>
						</div>
						<img src="<?=SITE_TEMPLATE_PATH?>/img/intuitravel.png" alt="">	
					</li>
										
				</ul>				
			
		</div>				
	</section>
	<div class="container" data-aos="fade-up">	
		<section class="useful">
		<h2>Смотрите также</h2>
			<ul class="useful_list">
				<li class="useful_list_item">
					<a href="/napravleniya/cuba/tours/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/beach_tours_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Туры на Кубу</p>
					</a>				
				</li>
				<li class="useful_list_item">
					<a href="/napravleniya/cuba/avia/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/avia_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Авиабилеты на Кубу</p>
					</a>				
				</li>
				<li class="useful_list_item">
					<a href="/napravleniya/cuba/hotels/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/hotels_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Отели на Кубе</p>
					</a>				
				</li>
				<li class="useful_list_item">
					<a href="/napravleniya/cuba/ekskursii/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/ekskursii_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Экскурсии на Кубе</p>
					</a>				
				</li>
				<li class="useful_list_item">
					<a href="/napravleniya/cuba/car_rental/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/car_rentali_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Прокат авто на Кубе</p>
					</a>				
				</li>						
			</ul>				
		</section>
	</div>
</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>