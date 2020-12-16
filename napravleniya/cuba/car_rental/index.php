<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "U-TRAVELL - Прокат авто на Кубе");
$APPLICATION->SetTitle("Прокат авто на Кубе");
?>

<main class="directions cuba sect_car_rental">
	
	<section class="main_search" id="main_search">
		<div class="container">
			<img class="main_img" src="<?=SITE_TEMPLATE_PATH?>/img/car_background_big_cuba.png" alt="">
			<h1>Прокат авто на Кубе</h1>
			
		</div>
		<div class="container">
			
								
			<ul class="search_form_list">
				<li class="js_tab_content_1 active" data-tab="2">
					<script src="https://c52.travelpayouts.com/content?promo_id=1757&shmarker=200556&color_scheme=bright&border_radius=5px&input_border_radius=true&logo=true&hide_header=true&pick_up=HAV&powered_by=true" charset="utf-8" async="true"></script>
				</li>				
			</ul>
		</div>
		
		<div class="search_system_wrapper">
			<p class="search_system_selection">Выберите поисковую систему</p>			
				<ul class="search_system_list">
					<li class="js_tab_trigger_1 logo_box_item" data-tab="2">	
						<div class="tip">
							AutoEurope — онлайн-сервис для бронирования автомобилей в 180+ странах мира. Посетители могут быстро подобрать необходимый вариант и оформить аренду за 3 шага. На карточках автомобилей расположена основная информация и условия аренды. Можно сравнить тарифы от разных арендодателей: Herz, Sixt, и других.
							<span class="close"> </span>
						</div>
						<img src="<?=SITE_TEMPLATE_PATH?>/img/autoeurope.png" alt="">	
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
				<!--<li class="useful_list_item">
					<a href="/napravleniya/cuba/car_rental/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/car_rentali_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Прокат авто на Кубе</p>
					</a>				
				</li>-->
				<li class="useful_list_item">
					<a href="/napravleniya/cuba/transfers/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/transfers_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Трансферы на Кубе</p>
					</a>				
				</li>			
			</ul>	
		</section>	
	</div>
</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>