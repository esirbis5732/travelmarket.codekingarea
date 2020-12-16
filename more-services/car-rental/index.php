<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("twitter:image", "https://u-travell.ru/local/templates/general_2/img/car_wide_og_tw.png");
$APPLICATION->SetPageProperty("fb:image", "https://u-travell.ru/local/templates/general_2/img/car_wide_og_tw.png");
$APPLICATION->SetPageProperty("vk:image", "https://u-travell.ru/local/templates/general_2/img/car_wide_og_vk.png");
$APPLICATION->SetPageProperty("og:image", "https://u-travell.ru/local/templates/general_2/img/car_wide_og_tw.png");
$APPLICATION->SetPageProperty("title", "U-TRAVELL - ПРОКАТ АВТО");
$APPLICATION->SetPageProperty("keywords", "Прокат авто");
$APPLICATION->SetPageProperty("description", "U-TRAVELL - это лучший способ найти оптимальные предложения по лучшим ценам");
$APPLICATION->SetTitle("Прокат авто");
?>

<main class="car_rental">
	<section class="main_search" id="main_search">
		<div class="container">	
			<img class="main_img" src="<?=SITE_TEMPLATE_PATH?>/img/car_background_big.png" alt="">
			<h1>Прокат авто</h1>
			<ul class="search_form_list">
				<li class="js_tab_content_1 active" data-tab="1">
					<script src="https://c10.travelpayouts.com/content?promo_id=2109&shmarker=200556&locale=ru&border_radius=0px&button_color=%2300C7CB&input_border_radius=false&logo=false&hide_header=true&full_width=true&powered_by=true" charset="utf-8" async="true"></script>	
				</li>
				<li class="js_tab_content_1" data-tab="2">
					<script src="https://c52.travelpayouts.com/content?promo_id=1757&shmarker=200556&color_scheme=transparent&border_radius=0px&input_border_radius=false&logo=false&hide_header=true&powered_by=true" charset="utf-8" async="true"></script>
				</li>
				<!--<li class="js_tab_content_1" data-tab="3">
					<script charset="utf-8" src="//partner.onetwotrip.com/widgets/3e65a3e2-47c4-4f41-9de1-e9e88cddf3c8.js" async></script>
				</li>-->
				<li class="js_tab_content_1" data-tab="4">
					<script src="//c130.travelpayouts.com/content?promo_id=3878&shmarker=200556&locale=ru&hide-header=true&primary=1bc3e5&primary-text=fff&text=2A3D71&radius=5&button-radius=5&form-padding=10&large_button=true&form-bg=ffffff&form-text=2A3D71&hide2=cars&hide4=manage&hide5=why&hide6=powered&powered_by=true" charset="utf-8" async="true"></script>
				</li>
				<li class="js_tab_content_1" data-tab="5">
					<script src="https://c117.travelpayouts.com/content?promo_id=3873&shmarker=200556&location=russia%2Fmoscow%2Fdowntown&locale=ru&bg_color=fff&font_color=2A3D71&button_color=1bc3e5&button_font_color=fff&powered_by=true" charset="utf-8" async="true"></script>
				</li>
				
			</ul>				
		</div>
		<div class="search_system_wrapper">
			<p class="search_system_selection">Выберите поисковую систему</p>
			<div class="container">	
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
							OneTwoTrip — лидер онлайн-рынка сервисов для организации путешествий. Сервис помогает легко спланировать путешествие в любую точку мира: забронировать номер или апартаменты, выбирая из 2 000 000 вариантов размещения, купить авиабилет одной из 800 авиакомпаний, билет на поезд или автобус по России, СНГ и Европе, арендовать авто, заказать экскурсию с гидом или приобрести пакетный тур.
							<span class="close"> </span>
						</div>			
						<img src="<?=SITE_TEMPLATE_PATH?>/img/one_two_trip.png" alt="">	
					</li>-->
					<li class="js_tab_trigger_1 logo_box_item" data-tab="4">	
						<div class="tip">
							Rentalcars.com — это мировой лидер в сфере онлайн бронирования автомобилей. Rentalcars является частью американской компании Priceline, куда также входит Booking.com. Rentalcars работает с 900+ агентствами по прокату автомобилей в 160 странах мира, предлагая аренду по 60 000 направлений. Сервис позволяет сравнить предложения прокатных агентств не только по цене, но и по качеству. 1200 агентов службы поддержки готовы прийти на помощь клиентам 24/7, помощь доступна на 43 языках, включая русский.
							<span class="close"> </span>
						</div>
						<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/rentalcars.png" alt="">	
					</li>
					<li class="js_tab_trigger_1 logo_box_item" data-tab="5">
						<div class="tip">
							Discovercars.com – это сайт для сравнения цен на прокат автомобилей по всему миру. Сервис предлагает эксклюзивные цены от пунктов проката по всему миру. В базе доступно более 2 000 000 предложений по аренде автомобилей в 150+ странах.
							<span class="close"> </span>
						</div>					
						<img src="<?=SITE_TEMPLATE_PATH?>/img/discover_cars.png" alt="">	
					</li>
				</ul>				
			</div>
		</div>					
	</section>
	<div class="container">
		<section class="logo_box" data-aos="fade-up">
		<h2>Еще больше предложений по прокату авто</h2>
		<a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/fftkgnn5d1d76d4286da97a444378b/">				
			<div class="tip">
				Мы с клиентом во время бронирования, во время аренды и после аренды авто. Все вопросы связанные с бронированием и арендой помогают решать специалисты с большим опытом работы в прокатных компаниях. Круглосуточный телефон поддержки.Клиент получает максимум информации о будущей аренде. Активно работает call-центр и на все вопросы Вы получите ответ по телефону.
				<span class="close"> </span>
			</div>
			<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/avtoprokat.png" alt="Avtoprokat">			
		</a>
		<!--<a target="_blank" href="https://www.discovercars.com/ru?admitad_uid=9d7f64ace114e775eced5fe0eea6f042"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/discover_car_hire.png" alt="Discover car hire"></a>-->
		<!--<a target="_blank" href="https://ad.admitad.com/g/zs1r6fe7nld76d4286daba3230df6b/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/easy_rent_cars.png" alt="Easyrentcars "></a>-->
		<!--<a target="_blank" href="https://ad.admitad.com/g/ca326rdm5vd76d4286daef1cea9751/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/italiarail.png" alt="Italiarail"></a>-->
		<a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/66o8jzb2p9d76d4286da4f47f3b6f3/">
			<div class="tip">
				Myrentacar – это агрегатор локальных прокатных компаний. Мы находим небольшие прокаты, которые работают только в своем городе, выбираем лучших из них и контролируем качество их работы. А наши клиенты, арендуя любой из автомобилей, получают стандартную услугу высокого качества.
				<span class="close"> </span>
			</div>
			<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/murentacar.jpg" alt="Myrentacar">
		</a>
		<!--<a target="_blank" href="https://ad.admitad.com/g/49c113f01ed76d4286da02b3e23ee2/?ulp=https%3A%2F%2Fwww.onetwotrip.com%2Fru%2Fcars%2F"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/one_two_trp.png" alt="OneTwoTrip"></a>-->
		<!--<a target="_blank" href="https://ad.admitad.com/g/6agwoaxtyzd76d4286da69b07947bf/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/" alt="Rentalcars"></a>-->
		<!--<a target="_blank" href="https://ad.admitad.com/g/j4enfjo2nxd76d4286daeed1a685a7/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/travellizy.jpg" alt="Travellizy"></a>-->
		<!--<a target="_blank" href="https://ad.admitad.com/g/f1nmvwx5b1d76d4286dacaf18bbc0b/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/unicredit_bank.jpg" alt="Unicredit Bank"></a>
		<a target="_blank" href="https://ad.admitad.com/g/i352cbwpfvd76d4286da1cb5598fff/
		"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/alfa_bank.png" alt="Альфа-Банк"></a>
		<a target="_blank" href="https://ad.admitad.com/g/5lc9j54svod76d4286da7e9a9b85a9/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/raif.png" alt="Райффайзен Банк"></a>
		<a target="_blank" href="https://ad.admitad.com/g/kg0hbofr85d76d4286da8560502dd9/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/rosbank.png" alt="РОСБАНК"></a>-->
		</section>
		<div class="slides_n big_block" data-aos="fade-up">
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
		<div class="slides_n big_block mob" data-aos="fade-up">
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