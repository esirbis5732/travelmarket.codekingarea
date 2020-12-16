<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "экскурсии в таиланде таиланд паттайя экскурсии пхукет стоимость экскурсий в таиланде река квай");
$APPLICATION->SetPageProperty("description", "Экскурсии в Таиланде Стоимость экскурсий на Пхукете, Паттайи, Самуи, Бангкоке и других курортах Тайланда!");
$APPLICATION->SetPageProperty("title", "Лучшие экскурсии в Таиланде - стоимость экскурсий Пхукет и Паттайя");
$APPLICATION->SetTitle("Экскурсии в Доминикане");
?><main class="directions dominicana sect_ekskursii">
	<div class="container">
		<img class="main_img" src="/local/templates/general_2/img/excursions_background_big.png" alt="">
		<h1>Экскурсии в Доминикане</h1>
		
	</div>

	<div class="container">

		<section class=" anchor_scroll"  id="">
			<!--<p>Tripster.ru </p>-->
			<div data-aos="fade-up">
			<script src="https://c11.travelpayouts.com/content?promo_id=1499&shmarker=200556&wtype=geo&city=%D0%9F%D1%83%D0%BD%D1%82%D0%B0-%D0%9A%D0%B0%D0%BD%D0%B0&order=top&num=12&widget_template=horizontal&width=100%25&logo=true&widgetbar=false&widgetbar_position=top&powered_by=true" charset="utf-8" async></script>
			</div>
			<div data-aos="fade-up">
			<script src="https://c11.travelpayouts.com/content?promo_id=1499&shmarker=200556&wtype=geo&city=%D0%A1%D0%B0%D0%BD%D1%82%D0%BE-%D0%94%D0%BE%D0%BC%D0%B8%D0%BD%D0%B3%D0%BE&order=top&num=3&widget_template=horizontal&width=100%25&logo=true&widgetbar=false&widgetbar_position=top&powered_by=true" charset="utf-8" async></script>
			</div>
			
			
			<!--<p>Weatlas.com</p>-->
			<div data-aos="fade-up">
				<script src="//c14.travelpayouts.com/content?promo_id=1584&shmarker=200556&view=big201512&city=%D0%9F%D1%83%D0%BD%D1%82%D0%B0-%D0%9A%D0%B0%D0%BD%D0%B0&powered_by=true" charset="utf-8"></script>	
			</div>
			<div data-aos="fade-up">
				<script src="//c14.travelpayouts.com/content?promo_id=1584&shmarker=200556&view=big201512&city=%D0%91%D0%B0%D0%B2%D0%B0%D1%80%D0%BE&powered_by=true" charset="utf-8"></script>
			</div>
			<div data-aos="fade-up">
				<script src="//c14.travelpayouts.com/content?promo_id=1584&shmarker=200556&view=big201512&city=%D0%A1%D0%B0%D0%BC%D0%B0%D0%BD%D0%B0&powered_by=true" charset="utf-8"></script>
			</div>
			<div data-aos="fade-up">
				<script src="//c14.travelpayouts.com/content?promo_id=1584&shmarker=200556&view=big201512&city=%D0%A1%D0%B0%D0%BD%D1%82%D0%BE-%D0%94%D0%BE%D0%BC%D0%B8%D0%BD%D0%B3%D0%BE&powered_by=true" charset="utf-8"></script>
			</div>
			<div data-aos="fade-up">
				<script src="//c14.travelpayouts.com/content?promo_id=1584&shmarker=200556&view=big201512&city=%D0%9A%D0%BE%D0%BD%D1%81%D1%82%D0%B0%D0%BD%D1%81%D0%B0&powered_by=true" charset="utf-8"></script>
			</div>

		</section>	
		
		<section class="useful" data-aos="fade-up">
		<h2>Смотрите также</h2>
			<ul class="useful_list">
				<li class="useful_list_item">
					<a href="/napravleniya/dominicana/tours/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/beach_tours_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Туры в Доминикану</p>
					</a>				
				</li>
				<li class="useful_list_item">
					<a href="/napravleniya/dominicana/avia/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/avia_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Авиабилеты в Доминикану</p>
					</a>				
				</li>
				<li class="useful_list_item">
					<a href="/napravleniya/dominicana/hotels/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/hotels_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Отели в Доминикане</p>
					</a>				
				</li>
				<li class="useful_list_item">
					<a href="/napravleniya/dominicana/car_rental/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/car_rentali_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Прокат авто в Доминикане</p>
					</a>				
				</li>
				<li class="useful_list_item">
					<a href="/napravleniya/dominicana/transfers/">
						<p class="useful_list_img">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/transfers_big_icon_blue_slim.svg" alt="">
						</p>
						<p class="useful_list_name">Трансферы в Доминикане</p>
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
					"PATH" => "/include/dominicanaSEO/excurs.php"
				),
				false
			);?>
	</div>
</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>