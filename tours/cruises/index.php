<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("twitter:image", "https://u-travell.ru/local/templates/general_2/img/cruises_wide_og_tw.png");
$APPLICATION->SetPageProperty("fb:image", "https://u-travell.ru/local/templates/general_2/img/cruises_wide_og_tw.png");
$APPLICATION->SetPageProperty("vk:image", "https://u-travell.ru/local/templates/general_2/img/cruises_wide_og_vk.png");
$APPLICATION->SetPageProperty("og:image", "https://u-travell.ru/local/templates/general_2/img/cruises_wide_og_tw.png");
$APPLICATION->SetPageProperty("title", "КРУИЗЫ - Поиск и бронирование круизов онлайн по самым выгодным ценам | TRAVEL&#127965;MARKET");
$APPLICATION->SetPageProperty("description", "Круизы по всему миру! Выберите свое идеальное направление! Круизы более чем от 30 круизных компаний по всему миру. Онлайн-подбор морских и речных круизов по всему миру. Поиск круизов по датам, цене, тематике, круизной компании и лайнеру.");
$APPLICATION->SetTitle("Круизы");
?>

<main id="main_search" class="cruises">
	<section class="main_search anchor_scroll">
		<div class="anchor_block">
			<a class="active" href="#main_search"><dfn class="background_dark" data-info="Поиск круизов"><img src="<?=SITE_TEMPLATE_PATH?>/img/avia_1_d.png" alt=""></dfn></a>
			<a href="#selection_of_cruises"><dfn class="background_dark" data-info="Подборка круизов"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon_2_blue.png" alt=""></dfn></a>
			
		</div>
		
		<div class="container">	
			<img class="main_img" src="<?=SITE_TEMPLATE_PATH?>/img/cruises_background_big.png" alt="">
			<h1>Круизы</h1>
			<ul class="search_form_list">
				<li class="js_tab_content_1 active" data-tab="1">
					<!--<script src="//tp.media/content?promo_id=2717&shmarker=200556&campaign_id=81&locale=ru&border_radius=0&plain=true&color_background=transparent&color_text=transparent&color_border=none&color_button=%23FCDC25&color_button_text=%232A3D71&color_focused=%2300C7CB&color_icons=%2300C7CB&powered_by=true" charset="utf-8"></script>-->
					<script src="//tp.media/content?promo_id=2717&shmarker=200556&campaign_id=81&locale=ru&border_radius=7&plain=true&color_background=%23fff&color_text=%232A3D71&color_border=%23fff&color_button=%2300C7CB&color_button_text=%23fff&color_input_border=%23cccccc&color_input=%23fff&color_input_text=%232A3D71&color_focused=%2300C7CB&color_icons=%2300C7CB&powered_by=true" charset="utf-8"></script>
				</li>					
			</ul>				
		</div>
		<div class="search_system_wrapper">	
			<p class="search_system_selection">Выберите поисковую систему</p>
			<div class="container">	
				<ul class="search_system_list">
					<li class="js_tab_trigger_1 logo_box_item active" data-tab="1">			
						<div class="tip">
							Компания Dreamlines предлагает круизы более чем от 30 круизных компаний по всему миру. Наши круизные эксперты имеют 10+ лет опыта в продажах круизов. Наиболее популярные направления: Средиземное море, Северная Европа, Карибы
							<span class="close"> </span>
						</div>
						<img src="<?=SITE_TEMPLATE_PATH?>/img/dreamlines.png" alt="">	
					</li>							
				</ul>				
			</div>					
		</div>	
	</section>
	<div class="container cont" >
	
		<!--<section class="logo_box" data-aos="fade-up">
			<h2>Еще больше предложений по подбору круизов</h2>
			
			<a class="logo_box_item" target="_blank" href="https://ad.admitad.com/g/n5wvpwwi5md76d4286dac29ca9d9f1/">
				<div class="tip">
					Твой круиз - это самый большой онлайн-магазин по продаже речных круизов с удобным бронированием и качественным сервисом. Мы работаем со всеми крупными речными компаниями и предоставляем отдых по Волге, Енисею, Байкалу. По итогам навигации 2018 года  команда  “Твой круиз” заняла первое место по продажам речных круизов среди всех агентов по России! 
					<span class="close"> </span>
				</div>
				<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_min/tvoi_kruiz.png" alt="Твой Круиз">
			</a>
			
		</section>-->
		
		<section class="selection_of_cruises anchor_scroll">
			
			<h2 id="selection_of_cruises" class="revealator-slideup" data-aos="fade-up">Подборка круизов</h2>
			<a target="_blank" href="https://c81.travelpayouts.com/click?shmarker=200556&promo_id=2386&source_type=banner&type=click"><img class="revealator-slideup" src="<?=SITE_TEMPLATE_PATH?>/img/cruises_banner1.jpg" alt="930x180 retina" width="100%"></a>
			<a target="_blank" href="https://c81.travelpayouts.com/click?shmarker=200556&promo_id=2365&source_type=banner&type=click"><img class="revealator-slideup" src="<?=SITE_TEMPLATE_PATH?>/img/cruises_banner2.jpg" alt="930x180 retina" width="100%"></a>
			<a target="_blank" href="https://c81.travelpayouts.com/click?shmarker=200556&promo_id=2348&source_type=banner&type=click"><img class="revealator-slideup" src="<?=SITE_TEMPLATE_PATH?>/img/cruises_banner3.jpg" alt="930x180 retina" width="100%"></a>
			<a target="_blank" href="https://c81.travelpayouts.com/click?shmarker=200556&promo_id=2331&source_type=banner&type=click"><img class="revealator-slideup" src="<?=SITE_TEMPLATE_PATH?>/img/cruises_banner4.jpg" alt="930x180 retina" width="100%"></a>
			<a target="_blank" href="https://c81.travelpayouts.com/click?shmarker=200556&promo_id=2314&source_type=banner&type=click"><img class="revealator-slideup" src="<?=SITE_TEMPLATE_PATH?>/img/cruises_banner5.jpg" alt="930x180 retina" width="100%"></a>
			<a target="_blank" href="https://c81.travelpayouts.com/click?shmarker=200556&promo_id=2295&source_type=banner&type=click"><img class="revealator-slideup" src="<?=SITE_TEMPLATE_PATH?>/img/cruises_banner6.jpg" alt="930x180 retina" width="100%"></a>
			<a target="_blank" href="https://c81.travelpayouts.com/click?shmarker=200556&promo_id=2275&source_type=banner&type=click"><img class="revealator-slideup" src="<?=SITE_TEMPLATE_PATH?>/img/cruises_banner7.jpg" alt="930x180 retina" width="100%"></a>
			<a target="_blank" href="https://c81.travelpayouts.com/click?shmarker=200556&promo_id=1914&source_type=banner&type=click"><img class="revealator-slideup" src="<?=SITE_TEMPLATE_PATH?>/img/cruises_banner8.jpg" alt="930x180 retina" width="100%"></a>
			<a target="_blank" href="https://c81.travelpayouts.com/click?shmarker=200556&promo_id=1896&source_type=banner&type=click"><img class="revealator-slideup" src="<?=SITE_TEMPLATE_PATH?>/img/cruises_banner9.jpg" alt="930x180 retina" width="100%"></a>
			<a target="_blank" href="https://c81.travelpayouts.com/click?shmarker=200556&promo_id=1878&source_type=banner&type=click"><img class="revealator-slideup" src="<?=SITE_TEMPLATE_PATH?>/img/cruises_banner10.jpg" alt="930x180 retina" width="100%"></a>
		</section>
		
	</div>	

</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>