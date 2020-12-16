<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("twitter:image", "https://u-travell.ru/local/templates/general_2/img/sim_karty_wide_og_tw.png");
$APPLICATION->SetPageProperty("fb:image", "https://u-travell.ru/local/templates/general_2/img/sim_karty_wide_og_tw.png");
$APPLICATION->SetPageProperty("vk:image", "https://u-travell.ru/local/templates/general_2/img/sim_karty_wide_og_vk.png");
$APPLICATION->SetPageProperty("og:image", "https://u-travell.ru/local/templates/general_2/img/sim_karty_wide_og_tw.png");
$APPLICATION->SetPageProperty("title", "U-TRAVELL - СИМ-КАРТЫ");
$APPLICATION->SetPageProperty("keywords", "Симкарты");
$APPLICATION->SetPageProperty("description", "U-TRAVELL - это лучший способ найти оптимальные предложения по лучшим ценам  Дримсим — универсальная симка для путешественников");
$APPLICATION->SetTitle("Симкарты");
?>

<main class="sim_karty">
	<section class="main_search" id="main_search">
		<div class="container">	
			<img class="main_img" src="<?=SITE_TEMPLATE_PATH?>/img/sim_karty_background_big.png" alt="">
			<h1>Симкарты</h1>						
		</div>							
	</section>
		
	<div class="container">
		<section>
			<h2>Дримсим — универсальная симка для путешественников</h2>
			<p><a target="_blank" href="https://c102.travelpayouts.com/click?shmarker=200556&promo_id=2958&source_type=link&type=click">Дримсим</a> - первая универсальная симка и бесплатное приложение для путешественников.</p>
			<p>Дримсим — это настоящая симка. Пластиковая и с чипом, как у всех. Её можно вставить в телефон, планшет или роутер. Разница в том, что она не привязана к одному оператору. Когда твой самолёт приземляется в новой стране, Дримсим сразу готова к работе.</p>
			<p>Дримсим работает в 197 странах, обеспечивает стабильную связь, быстрый интернет и цены, почти как у местных операторов.</p>
			<div  data-aos="fade-up">
			<p>Ты можешь звонить друзьям, а они могут звонить тебе. Можно чатиться, выкладывать фотки, строить маршруты и не бояться, что потратишь все деньги на роуминг.</p>
			<p>Мы договариваемся напрямую с операторами. Поэтому Дримсим дешевле, чем роуминг и симки от других провайдеров.</p>
			<p>У нас есть приложение, чтобы ты мог следить за расходами. Баланс можно пополнять вручную или автоплатежом. Деньги списываются за секунды и мегабайты, а не за пакеты и абонентку.</p>
			</div>
			<p>Преимущества для абонентов Дримсим:</p>
			<ul data-aos="fade-up">
				<li>Универсальная симка для всех зарубежных стран;</li>
				<li>Не нужно настраивать роуминг и покупать местную симку;</li>
				<li>Бесплатное приложение с тарифами и расходами с точностью до секунды и килобайта;</li>
				<li>Отсутствие лимита по трафику и звонкам;</li>
				<li>Нет абонентской платы и скрытых платежей;</li>
				<li>Цены на связь сопоставимы с условиями местных операторов;</li>
				<li>Быстрая доставка симки (1-2 дня).</li>
			</ul>
            <?$perem='.proverka10';?>
            <a class="drimsim_link" target="_blank" href="https://c102.travelpayouts.com/click?shmarker=200556<?=$perem;?>&promo_id=2958&source_type=link&type=click">Заказать</a>
            <!--	<a class="drimsim_link" target="_blank" href="https://c102.travelpayouts.com/click?shmarker=200556&promo_id=2958&source_type=link&type=click">ЗАКАЗАТЬ</a> -->
			
			<!--<section class="logo_box">
			<a href="https://ad.admitad.com/g/f1nmvwx5b1d76d4286dacaf18bbc0b/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/unicredit_bank.jpg" alt="Unicredit Bank"></a>
			<a href="https://ad.admitad.com/g/i352cbwpfvd76d4286da1cb5598fff/
			"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/alfa_bank.png" alt="Альфа-Банк"></a>
			<a href="https://ad.admitad.com/g/5lc9j54svod76d4286da7e9a9b85a9/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/raif.png" alt="Райффайзен Банк"></a>
			<a href="https://ad.admitad.com/g/kg0hbofr85d76d4286da8560502dd9/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/rosbank.png" alt="РОСБАНК"></a>
			</section>-->
			
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
		
		</section>	
		
	</div>
    
</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>