<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Экскурсионные туры");
$APPLICATION->SetPageProperty("keywords", "Экскурсионные туры");
$APPLICATION->SetPageProperty("description", "Экскурсионные туры");
$APPLICATION->SetTitle("Экскурсионные туры");
?>

<main class="sightseeing">
	<section class="main_search anchor_scroll" id="main_search">
		<div class="anchor_block">
			<a class="active" href="#main_search"><dfn class="background_dark" data-info="Поиск авиабилетов"><img src="<?=SITE_TEMPLATE_PATH?>/img/avia_1_d.png" alt=""></dfn></a>
			<a href="#vitrin"><dfn class="background_dark" data-info="Популярные направления"><img src="<?=SITE_TEMPLATE_PATH?>/img/avia_2_d.png" alt=""></dfn></a>
			<a href="#last_minute_tours"><dfn class="background_dark" data-info="Специальные тарифы"><img src="<?=SITE_TEMPLATE_PATH?>/img/avia_3_d.png" alt=""></dfn></a>		
		</div>			
		<div class="container">	
			<h1>Экскурсионные туры</h1>
			<ul class="search_form_list">
				<li class="js_tab_content_1 active" data-tab="1">
					<script src="https://c56.travelpayouts.com/content?promo_id=1625&shmarker=200556&logo=false&color_btn=FCDC25&color_btn_text=2A3D71&powered_by=true" charset="utf-8" async></script>	
				</li>
				<li class="js_tab_content_1" data-tab="2">Поиск 2</li>	
			</ul>				
		</div>
		<div class="search_system_wrapper">
			<p class="search_system_selection">Выберите поисковую систему</p>
			<div class="container">	
				<ul class="search_system_list">
					<li class="js_tab_trigger_1 active" data-tab="1">			
						<img src="<?=SITE_TEMPLATE_PATH?>/img/avia_7.png" alt="">	
					</li>
					<li class="js_tab_trigger_1" data-tab="2">	
						<img src="<?=SITE_TEMPLATE_PATH?>/img/avia_7.png" alt="">	
					</li>		
				</ul>				
			</div>
		</div>
	</section>
	<div class="container cont">
		<section class="">
			<p>Экскурсионные туры – это готовые туры, содержащие экскурсии, и совершающиеся с целью осмотра достопримечательностей, природы, городов, а также с целью знакомства с культурой, искусством, обычаями, историей разных стран. Типичные примеры таких туров: автобусные туры, круизы, трекинг, сафари. Экскурсионные туры – это отдельный рынок, который ранее не был представлен в единой системе ввиду сложности маршрутов и отсутствия единого стандарта.</p>
			<p>Туры по многим странам ранее вовсе не были ранее представлены на рынке. U-TRAVELL заполнил этот пробел. Теперь Вы можете приобрести экскурсионные туры в Израиль и Кению, Италию и Непал, Перу и Испанию, Норвегию и ЮАР, Грузию и Узбекистан. А также по регионам России: Золотое Кольцо, Байкал, Крым, Подмосковье и другие. Всего более 60 уникальных стран и направлений.</p>
			
		</section>
		<section class="vitrin anchor_scroll" id="vitrin">
			<h2>Витрина туров</h2>
			<script src="https://c56.travelpayouts.com/content?promo_id=1626&shmarker=200556&logo=false&color_btn=66d1d7&currency=RUB&country_group=false&powered_by=false" charset="utf-8" async></script>
		</section>
		<section  class="last_minute_tours anchor_scroll" id="last_minute_tours"> 
			<h2>Горящие туры</h2>
			<!--<script src="https://c56.travelpayouts.com/content?promo_id=1627&shmarker=200556&currency=RUB&logo=false&powered_by=false" charset="utf-8" async></script>-->
			<script src="https://c56.travelpayouts.com/content?promo_id=1627&shmarker=200556&currency=RUB&logo=false&powered_by=true" charset="utf-8" async></script>
	</div>
</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>