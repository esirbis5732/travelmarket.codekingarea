<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("twitter:image", "https://u-travell.ru/local/templates/general_2/img/transfers_wide_og_tw.png");
$APPLICATION->SetPageProperty("fb:image", "https://u-travell.ru/local/templates/general_2/img/transfers_wide_og_tw.png");
$APPLICATION->SetPageProperty("vk:image", "https://u-travell.ru/local/templates/general_2/img/transfers_wide_og_vk.png");
$APPLICATION->SetPageProperty("og:image", "https://u-travell.ru/local/templates/general_2/img/transfers_wide_og_tw.png");
$APPLICATION->SetPageProperty("title", "U-TRAVELL - ТРАНСФЕРЫ - Поиск и бронирование трансферов из аэропорта онлайн");
$APPLICATION->SetPageProperty("keywords", "Трансферы");
$APPLICATION->SetPageProperty("description", "Самая большая база трансферов в 135 странах, 20 000 городов. 6 000 000 маршрутов к отелям, виллам, апартаментам из 4 500 Аэропортов / ЖД вокзалов / Портов – гарантия того что найдется почти любой трансфер к любому отелю. 165 видов транспортных средств: от эконом автобусов-шаттл до авто класса LUX, лимузинов и катеров. Конкретные модели авто, бонусы и фишки для клиентов. Удобный и быстрый поиск трансфера: поиск по названию отеля, поиск по адрeсу. Окончательная цена без скрытых комиссий.");
$APPLICATION->SetTitle("Трансферы");
?>

<main class="transfers">
	<section class="main_search" id="main_search">
		<div class="container">
			<img class="main_img" src="<?=SITE_TEMPLATE_PATH?>/img/transfers_background_big.png" alt="">
			<h1>Трансферы</h1>
			<ul class="search_form_list">
				<li class="js_tab_content_1 active" data-tab="1">					
					<script src="https://c1.travelpayouts.com/content?promo_id=691&shmarker=200556&language=ru&display_currency=RUB&theme=davs&transfer_type=any&hide_form_extras=true&hide_external_links=false&disable_currency_selector=false&powered_by=true" charset="utf-8" async></script>					
				</li>
				<li class="js_tab_content_1" data-tab="2">
					<script src="//c22.travelpayouts.com/content?promo_id=1504&shmarker=200556&locale=ru&color_scheme=blue&header=%20&b_counter=false&b_benefit=false&b_descr=true&b_about=false&b_map=true&b_reviews=false&b_breadcrumbs=false&powered_by=true" charset="utf-8"></script>
				</li>
				<li class="js_tab_content_1" data-tab="3">
					<script src="//c44.travelpayouts.com/content?promo_id=1506&shmarker=200556&color=blue&border=false&border_radius=0&locale=ru&title=%D0%91%D0%B8%D0%BB%D0%B5%D1%82%D1%8B%20%D0%BD%D0%B0%20%D0%BF%D0%BE%D0%B5%D0%B7%D0%B4%D0%B0%2C%20%D0%B0%D0%B2%D1%82%D0%BE%D0%B1%D1%83%D1%81%D1%8B%2C%20%D0%BF%D0%B0%D1%80%D0%BE%D0%BC%D1%8B%2C%20%D1%87%D0%B0%D1%80%D1%82%D0%B5%D1%80%D1%8B%20%D0%B2%20%D0%AE%D0%B3%D0%BE-%D0%92%D0%BE%D1%81%D1%82%D0%BE%D1%87%D0%BD%D0%BE%D0%B9%20%D0%90%D0%B7%D0%B8%D0%B8&from=Bangkok&to=Phuket&from_en=Bangkok&to_en=Phuket&powered_by=true" charset="utf-8"></script>
				</li>
			</ul>				
		</div>
		<div class="search_system_wrapper">
			<p class="search_system_selection">Выберите поисковую систему</p>
			<div class="container">	
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
					<li class="js_tab_trigger_1 logo_box_item" data-tab="3">	
						<div class="tip">
							12Go.Asia предоставляет онлайн бронирование всех видов транспорта на одной платформе, в 15 странах Юго-Восточной Азии и Океании: Таиланд, Шри-Ланка, Индия, Вьетнам, Лаос, Камбоджа, Малайзия, Сингапур, Мьянма, Филиппины, Новая Зеландия, Индонезия, Гонконг, Макао и Китай. В наличии инвентарь свыше 500 операторов.
							<span class="close"> </span>
						</div>
						<img src="<?=SITE_TEMPLATE_PATH?>/img/12go.png" alt="">	
					</li>					
				</ul>				
			</div>	
		</div>				
	</section>
	<div class="container">
		<section class="logo_box" data-aos="fade-up">
		<h2>Еще больше предложений по трансферам</h2>
		<!--<a target="_blank" href="https://ad.admitad.com/g/cpnhlnsi2pd76d4286da7586be3361/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/globol.png" alt="Globol.com"></a>-->
		<a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/l1vb30f6yvd76d4286da8bcce39738/">		
			<div class="tip">
				Мы организовываем трансферы в 120 странах мира — из аэропорта, с вокзала, для перемещения по городу или между городами. В отличие от такси, стоимость трансфера фиксирована — любой адрес в городе по одной цене. Вы не платите за встречу с табличкой и провоз багажа. Даже если рейс задержали, мы дождёмся вас бесплатно.
				<span class="close"> </span>
			</div>	
			<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/iway.png" alt="Iway">
		</a>
		<!--<a target="_blank" href="https://ad.admitad.com/g/6ef7bcadc9d76d4286da4c15c68865/?ulp=https%3A%2F%2Fozontravel.gettransfer.com%2Fru%2Ftransfers%2Fnew"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/ozon_travel.png" alt="Ozon travel"></a>-->
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