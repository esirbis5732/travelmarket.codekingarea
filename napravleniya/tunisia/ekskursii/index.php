<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "экскурсии в Тунисе Тунис экскурсии  стоимость экскурсий в Тунисе");
$APPLICATION->SetPageProperty("description", "Экскурсии в Тунисе Стоимость экскурсий на курортах Туниса!");
$APPLICATION->SetPageProperty("title", "Лучшие экскурсии в Тунисе - стоимость экскурсий");
$APPLICATION->SetTitle("Экскурсии в Тунисе");
?><main class="directions tunisia sect_ekskursii">
	<div class="container">
		<img class="main_img" src="/local/templates/general_2/img/excursions_background_big.png" alt="">
		<h1>Экскурсии в Тунисе</h1>
		
	</div>

	<div class="container">

		<section class=" anchor_scroll"  id="">
			<!--<p>Sputnik8.com </p>-->
			<iframe id="tours-box-v2-widget-iframe" data-with-logo="true" src="https://www.sputnik8.com/w/v2_tours_box?locale=ru&query=&affiliate_id=3591&limit=3&pages=10&lead_text=0&disable_logo=0&transparent=1&no_borders=1&ssl=1&toursByIds=&horizontal=1&autoheight=1&all_btn=1&show_top=0&show_cities_dropdown=1&country_id=47" width="100%" height="564px" frameborder="0" scrolling="no"></iframe><script src='https://www.sputnik8.com/w/v2_tours_box/scripts/sputnik8widgets.js?autoheight=1'></script>
			<!--<p>Tripster.ru </p>-->
			<div data-aos="fade-up">
			<script src="https://c11.travelpayouts.com/content?promo_id=1499&shmarker=200556&wtype=geo&country=%D0%A2%D1%83%D0%BD%D0%B8%D1%81&order=top&num=3&widget_template=horizontal&width=100%25&logo=true&widgetbar=false&widgetbar_position=top&powered_by=true" charset="utf-8" async></script>
			</div>
			
			<!--<p>Weatlas.com</p>-->
			<div data-aos="fade-up">
			<script src="//c14.travelpayouts.com/content?promo_id=1584&shmarker=200556&view=big201512&city=%D0%A5%D0%B0%D0%BC%D0%BC%D0%B0%D0%BC%D0%B5%D1%82&powered_by=true" charset="utf-8"></script>
			<div data-aos="fade-up">
				<script src="//c14.travelpayouts.com/content?promo_id=1584&shmarker=200556&view=big201512&city=%D0%9B%D0%B0-%D0%93%D1%83%D0%BB%D0%B5%D1%82%D1%82&powered_by=true" charset="utf-8"></script>
			</div>
			<div data-aos="fade-up">
				<script src="//c14.travelpayouts.com/content?promo_id=1584&shmarker=200556&view=big201512&city=%D0%A2%D1%83%D0%BD%D0%B8%D1%81&powered_by=true" charset="utf-8"></script>
			</div>

		</section>	
		
<section class="useful">
		<h2>Смотрите также</h2>
			<ul class="useful_list">
				<li class="useful_list_item">
					<a href="/napravleniya/tunisia/tours/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/beach_tours_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Туры в Тунис</p>
					</a>				
				</li>
				<li class="useful_list_item">
					<a href="/napravleniya/tunisia/avia/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/avia_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Авиабилеты в Тунис</p>
					</a>				
				</li>
				<li class="useful_list_item">
					<a href="/napravleniya/tunisia/hotels/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/hotels_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Отели в Тунисе</p>
					</a>				
				</li>				
				<li class="useful_list_item">
					<a href="/napravleniya/tunisia/car_rental/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/car_rentali_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Прокат авто в Тунисе</p>
					</a>				
				</li>
				<li class="useful_list_item">
					<a href="/napravleniya/tunisia/transfers/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/transfers_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Трансферы в Тунисе</p>
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
					"PATH" => "/include/tunisiaSEO/excurs.php"
				),
				false
			);?>
	</div>
</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>