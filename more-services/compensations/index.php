<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "КОМПЕНСАЦИИ");
$APPLICATION->SetPageProperty("keywords", "Компенсации");
$APPLICATION->SetPageProperty("description", "TRAVELL - это лучший способ найти оптимальные предложения по лучшим ценам Компенсации за задержку или отмену рейса");
$APPLICATION->SetTitle("Компенсации");
?>

<main class="compensations">
	<section class="main_search anchor_scroll" id="main_search">
		<div class="container">	
			<img class="main_img" src="<?=SITE_TEMPLATE_PATH?>/img/compensations_background_big.png" alt="">
			<h1>Компенсации за задержку или отмену рейса</h1>
			<ul class="search_form_list">
				<li class="js_tab_content_1 active" data-tab="1">
					<script src="//tp.media/content?promo_id=3408&shmarker=200556&campaign_id=86&locale=ru&border_radius=10&plain=false&powered_by=true" charset="utf-8"></script>
				</li>								
			</ul>				
		</div>
		<div class="search_system_wrapper">
			<p class="search_system_selection">Выберите поисковую систему</p>
			<div class="container">	
				<ul class="search_system_list">
					<li class="js_tab_trigger_1 logo_box_item active" data-tab="1">			
						<div class="tip">
							Compensair помогает получить до 600 евро за задержку, отмену или овербукинг. Сервис работает в рамках законодательства ЕС и Турции.Со стороны клиента требуется не более 2 минут, чтобы проверить рейс, рассчитать потенциальную компенсацию и подать заявку. Мы подготовим все необходимые документы, предъявим иск в авиакомпании и позаботимся обо всех дальнейших действиях. Мы удерживаем комиссию в размере 25% только в том случае, если клиент получит компенсацию. Интеграции и партнёрская комиссия.
							<span class="close"> </span>
						</div>
						<img src="<?=SITE_TEMPLATE_PATH?>/img/сompensair.png" alt="">	
					</li>
					
							
				</ul>				
			</div>
		</div>					
	</section>
	<div class="container">
		<!--<section class="logo_box" data-aos="fade-up">
		<h2>Еще больше предложений по компенсациям</h2>
		<a class="logo_box_item" target="_blank" href="https://c120.travelpayouts.com/click?shmarker=200556&promo_id=3671&source_type=link&type=click">		
			<div class="tip">
				С 2013 года AirHelp помог более чем 10 миллионам пассажиров по праву получить до €600 в качестве компенсации за задержанные или отмененные рейсы. Достаточно предоставить данные своего рейса. AirHelp обработает претензию от  имени клиента. При этом сервис берет комиссию 35% от компенсации (или 50%, если юридические процедуры необходимы).
				<span class="close"> </span>
			</div>
			<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/airhelp.png" alt="airhelp">		
		</a>
		
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
	</div>
</main>







<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>