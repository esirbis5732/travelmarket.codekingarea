<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("twitter:image", "https://u-travell.ru/local/templates/general_2/img/train_wide_og_tw.png");
$APPLICATION->SetPageProperty("fb:image", "https://u-travell.ru/local/templates/general_2/img/train_wide_og_tw.png");
$APPLICATION->SetPageProperty("vk:image", "https://u-travell.ru/local/templates/general_2/img/train_wide_og_vk.png");
$APPLICATION->SetPageProperty("og:image", "https://u-travell.ru/local/templates/general_2/img/train_wide_og_tw.png");
$APPLICATION->SetPageProperty("title", "U-TRAVELL – ЖД БИЛЕТЫ - Поиск дешевых жд билетов по всем направлениям");
$APPLICATION->SetPageProperty("keywords", "ЖД Билеты");
$APPLICATION->SetPageProperty("description", "ЖД билеты онлайн. Купить билет на поезд по доступной цене.");
$APPLICATION->SetTitle("ЖД Билеты");
?>

<main class="train">
	<section class="main_search" id="main_search">
		<div class="container">	
			<h1>ЖД Билеты</h1>
			<ul class="search_form_list">
				<li class="js_tab_content_1 active" data-tab="1">
					<div id="ufs-railway-app"></div>
					<!--Пример-->
					<script>
					var UfsRailwayAppConfig = {
					"isHashUrl":true,
					"apiEndpoint": "https://api.ufs-online.ru/api/v1" ,
					"appDomain": "u-travell.ru",
					"trainUrls": "https://u-travell.ru/train/#" ,
					"helpUrls": {
					"ru": "https://www.ufs-partner.ru/faq/"
					},
					"offer": {
					"publicOfferType": "partner"
					},
					"preloaderImage": {
					url: "https://www.ufs-online.ru/img/promo/3.jpg" //пример
					}
					};
					</script>
					<script src="https://spa.ufs-online.ru/kupit-zhd-bilety/widget.js"></script>	
				</li>
				<li class="js_tab_content_1" data-tab="2">
				<script src="https://c45.travelpayouts.com/content?promo_id=1655&shmarker=200556&locale=ru&button_color=%23FCDC25&button_text_color=%232A3D71&background_color=transparent&border_radius=0px&full_width=true&logo=false&tborder=true&hide_header=true&powered_by=true" charset="utf-8" async="true"></script>
				</li>
				<li class="js_tab_content_1" data-tab="3">
				<div id="aeroexpress-app"></div>
				<!--Пример-->
					<script>
					window.aeroexpressAppConfig = {
					"isHashUrl": true,
					"domain": "u-travell.gdbilet.ru", //пример
					"elementId": "aeroexpress-app", //пример
					"currencySettings" : {
					"default": "RUB",
					"available" : []
					},
					"languageSettings": {
					"lang":"ru",
					"isHideLanguageSwitcher":true,
					"isHideRoutePathLanguage":true
					},
					"isHideLinkMyOrder":false,
					"isShowTariffInfoByIcon":true,
					"showSupportInfo":false,
					"isHideLogosCard":true,
					"showAviasalesLink":false,
					"aviasalesLink":"https://u-travell.ru/train/"  //пример
					};
					window.aeroexpressApiConfig = {
					"host": "aeroexpressapi.ufs-online.ru"
					};
					window.aeroexpressServerConfig = {
					"host": "https://aex.ufs-online.ru"
					};
					</script>
					<script src="https://aex.ufs-online.ru/static/apploader.js"></script>
				</li>
				<li class="js_tab_content_1" data-tab="4">
					<script src="//c44.travelpayouts.com/content?promo_id=1506&shmarker=200556&color=blue&border=false&border_radius=0&locale=ru&title=%D0%91%D0%B8%D0%BB%D0%B5%D1%82%D1%8B%20%D0%BD%D0%B0%20%D0%BF%D0%BE%D0%B5%D0%B7%D0%B4%D0%B0%2C%20%D0%B0%D0%B2%D1%82%D0%BE%D0%B1%D1%83%D1%81%D1%8B%2C%20%D0%BF%D0%B0%D1%80%D0%BE%D0%BC%D1%8B%2C%20%D1%87%D0%B0%D1%80%D1%82%D0%B5%D1%80%D1%8B%20%D0%B2%20%D0%AE%D0%B3%D0%BE-%D0%92%D0%BE%D1%81%D1%82%D0%BE%D1%87%D0%BD%D0%BE%D0%B9%20%D0%90%D0%B7%D0%B8%D0%B8&from=Bangkok&to=Phuket&from_en=Bangkok&to_en=Phuket&powered_by=true" charset="utf-8"></script>
				</li>
				<li class="js_tab_content_1" data-tab="5">
					<script charset="utf-8" src="//partner.onetwotrip.com/build/widget/form.widget.load.js?id=26382&v=2" data-railways="true"  async></script>
				</li>
				<li class="js_tab_content_1" data-tab="6">
					<script charset="utf-8" src="//partner.onetwotrip.com/widgets/73b1d1f7-9d65-4b21-8e87-1cd2a1dbc6f6.js" async></script>
				</li>
			</ul>				
		</div>
		<div class="search_system_wrapper">
			<p class="search_system_selection">Выберите поисковую систему</p>
			<div class="container">	
				<ul class="search_system_list">
					<li class="js_tab_trigger_1 active" data-tab="1">			
						<img src="<?=SITE_TEMPLATE_PATH?>/img/ufs.png" alt="">	
					</li>
					<li class="js_tab_trigger_1" data-tab="2">	
						<img src="<?=SITE_TEMPLATE_PATH?>/img/tutu.png" alt="">	
					</li>
					<li class="js_tab_trigger_1" data-tab="3">	
						<img src="<?=SITE_TEMPLATE_PATH?>/img/aeroekspress.png" alt="">	
					</li>
					<li class="js_tab_trigger_1" data-tab="4">	
						<img src="<?=SITE_TEMPLATE_PATH?>/img/12go.png" alt="">	
					</li>
					<li class="js_tab_trigger_1" data-tab="5">	
						<img src="<?=SITE_TEMPLATE_PATH?>/img/one_two_trip.png" alt="">	
					</li>
					<li class="js_tab_trigger_1" data-tab="6">	
						<img src="<?=SITE_TEMPLATE_PATH?>/img/sapsan.svg" alt="">	
					</li>
				</ul>				
			</div>
		</div>					
	</section>
	
	
	<div class="container"> 
		<section class="logo_box">
		<h2>Еще больше предложений по покупке железнодорожных билетов</h2>
			<a target="_blank" href="https://ad.admitad.com/g/pyj4y4uj9qd76d4286da9b8c64f65e/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/infobus.png" alt="Infobus"></a>
			<!--<a target="_blank" href="https://ad.admitad.com/g/ca326rdm5vd76d4286daef1cea9751/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/italiarail.png" alt="Italiarail"></a>-->
			<!--<a target="_blank" href="https://ad.admitad.com/g/700u4nenltd76d4286da84951289db/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/omio.png" alt="Omio "></a>-->
			<a target="_blank" href="https://ad.admitad.com/g/6ef7bcadc9d76d4286da4c15c68865/?ulp=https%3A%2F%2Fwww.ozon.travel%2Frailway%2F"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/ozon_travel.png" alt="Ozon travel"></a>
			<a target="_blank" href="https://ad.admitad.com/g/zxfj3mir77d76d4286daac7520b3ad/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/poezd.png" alt="Poezd RU"></a>
			<!--<a target="_blank" href="https://ad.admitad.com/g/f8kqm3kxqbd76d4286da25881e00f6/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/pososhok.jpg" alt="Pososhok"></a>-->
			<!--<a target="_blank" href="https://ad.admitad.com/g/m6mlwg3jy9d76d4286da89444c8234/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/trainline.png" alt="Trainline"></a>-->
			<a target="_blank" href="https://ad.admitad.com/g/239cb0bc31d76d4286dabf3e570a18/?ulp=https%3A%2F%2Fwww.svyaznoy.travel%2Frway%2F"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/svyaznoi.png" alt="Связной трэвел "></a>
			<!--<a target="_blank" href="https://ad.admitad.com/g/j4enfjo2nxd76d4286daeed1a685a7/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/travellizy.jpg" alt="Travellizy"></a>-->
			<!--<a target="_blank" href="https://ad.admitad.com/g/f1nmvwx5b1d76d4286dacaf18bbc0b/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/unicredit_bank.jpg" alt="Unicredit Bank"></a>
			<a target="_blank" href="https://ad.admitad.com/g/i352cbwpfvd76d4286da1cb5598fff/
			"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/alfa_bank.png" alt="Альфа-Банк"></a>
			<a target="_blank" href="https://ad.admitad.com/g/5lc9j54svod76d4286da7e9a9b85a9/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/raif.png" alt="Райффайзен Банк"></a>
			<a target="_blank" href="https://ad.admitad.com/g/kg0hbofr85d76d4286da8560502dd9/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/rosbank.png" alt="РОСБАНК"></a>-->
		</section>
		<div class="slides_n big_block">
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
		<div class="slides_n big_block mob">
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