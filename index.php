<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("twitter:image", "/local/templates/general_2/img/mai.png");
$APPLICATION->SetPageProperty("fb:image", "/local/templates/general_2/img/mai.png");
$APPLICATION->SetPageProperty("vk:image", "/local/templates/general_2/img/mai.png");
$APPLICATION->SetPageProperty("og:image", "/local/templates/general_2/img/mai.png");
$APPLICATION->SetPageProperty("title", "TRAVEL🏝MARKET  - СЕРВИС ПУТЕШЕСТВИЙ | Подбор и сравнение цен с популярных сайтов бронирования туров, отелей, билетов и многое другое");
$APPLICATION->SetPageProperty("ROBOTS", "index, follow");
$APPLICATION->SetTitle("TRAVEL🏝MARKET");
$APPLICATION->SetAdditionalCSS("/local/templates/general_2/js/owl.carousel.css");
?><main class="index" id="index">
<div class="main_img_wrap">
 <img src="/local/templates/general_2/img/primer12-01.svg" class="main_img" alt="">
	<div class="main_img_text">
		<p>
			 Сервис путешествий
		</p>
		 <!--<img src="<?=SITE_TEMPLATE_PATH?>/img/logo_header1.svg" alt="">-->
		<p class="slogan">
			 Сравниваем цены популярных сервисов бронирования
		</p>
	</div>
</div>
<div class="main_img_wrap_mob">
 <img src="/local/templates/general_2/img/main_img_tm_mob.jpg" class="main_img" alt="">
</div>
<div class="container">
	<h1 class="visually_hidden">СРАВНИВАЕМ ЦЕНЫ ПОПУЛЯРНЫХ СЕРВИСОВ БРОНИРОВАНИЯ</h1>
</div>
<div class="container servises_container">
	<div class="servises_wrap">
		<div id="owl-carousel_2" class="section_link owl-carousel owl-theme owl-loaded">
			<div class="section_link_item">
 <a href="/hotels/"> <img src="/local/templates/general_2/img/hotels_background_big.png" alt="">
				<h3>Отели</h3>
 </a>
			</div>
			<div class="section_link_item">
 <a href="/avia/"> <img src="/local/templates/general_2/img/avia_background_big.png" alt="">
				<h3>Авиабилеты</h3>
 </a>
			</div>
			<div class="section_link_item">
 <a href="/ekskursii/"> <img src="/local/templates/general_2/img/excursions_background_big.png" alt="">
				<h3>Экскурсии</h3>
 </a>
			</div>
			<div class="section_link_item">
 <a href="/tours/cruises/"> <img src="/local/templates/general_2/img/cruises_background_big.png" alt="">
				<h3>Круизы</h3>
 </a>
			</div>
			<div class="section_link_item">
 <a href="/train/"> <img src="/local/templates/general_2/img/train_background_big.png" alt="">
				<h3>ЖД Билеты</h3>
 </a>
			</div>
			<div class="section_link_item">
 <a href="/bus/"> <img src="/local/templates/general_2/img/bus_background_big.png" alt="">
				<h3>Автобусы</h3>
 </a>
			</div>
			 <!--<div class="section_link_item">
					<a href="/napravleniya/">
						
						<img src="<?=SITE_TEMPLATE_PATH?>/img/dominicana.png" alt=""> 
						<h3>Направления</h3>
					</a>
				</div>-->
			<div class="section_link_item">
 <a href="/more-services/car-rental/"> <img src="/local/templates/general_2/img/car_background_big.png" alt="">
				<h3>Прокат авто</h3>
 </a>
			</div>
			<div class="section_link_item">
 <a href="/prokat-baykov/"> <img src="/local/templates/general_2/img/bike.png" alt="">
				<h3>Прокат байков</h3>
 </a>
			</div>
			<div class="section_link_item">
 <a href="/more-services/transfers/"> <img src="/local/templates/general_2/img/transfers_background_big.png" alt="">
				<h3>Трансферы</h3>
 </a>
			</div>
			<div class="section_link_item">
 <a href="/insurance/"> <img src="/local/templates/general_2/img/insurance_background_big.png" alt="">
				<h3>Страхование</h3>
 </a>
			</div>
			<div class="section_link_item">
 <a href="/more-services/compensations/"> <img src="/local/templates/general_2/img/compensations_background_big.png" alt="">
				<h3>Компенсации</h3>
 </a>
			</div>
			<div class="section_link_item">
 <a href="/more-services/sim-karty/"> <img src="/local/templates/general_2/img/sim_karty_background_big.png" alt="">
				<h3>Симкарты</h3>
 </a>
			</div>
			<div class="section_link_item">
 <a href="/tours/beach-tours/"> <img src="/local/templates/general_2/img/beach_tours_background_big.png" alt="">
				<h3>Пляжные туры</h3>
 </a>
			</div>
		</div>
	</div>
</div>
 <!--<div class="container inclusion">
		 <a href="/napravleniya/otdykh-na-more-v-mae/">
			<h2>Куда поехать отдыхать в мае?</h2>
			<img alt="Куда поехать отдыхать на майские праздники?" src="<?=SITE_TEMPLATE_PATH?>/img/mai.png"> </a>
	</div>-->
<div class="container">
	 <!--<h2>Куда поехать отдыхать?</h2>-->
	<h2>Лишь бы повод найти :)</h2>

	<?if(CModule::IncludeModule("iblock"))
    {
        $id_block=1;
        $section_id = 0;
     
        $items = GetIBlockElementList($id_block, $section_id, Array("SORT"=>"ASC", "DATE_ACTIVE_FROM" => "11.01.2021"), 3);


        while($arItem = $items->GetNext())
        {
			$img_path = CFile::GetPath($arItem["PREVIEW_PICTURE"]);
		?>
         
	<div class="pretext" style="display:none;">
		<ul class="pretext_tags">
			<li class="pretext_tags_item js_tab_trigger active" data-tab="1">
			<h3><?=$arItem["NAME"];?></h3>
			
 </li>
		</ul>
		<ul class="pretext_content">
			<li class="pretext_content_item js_tab_content active" data-tab="1">
			<div class="pretext_content_img">
 <img alt="<?=$arItem["NAME"];?>" src="<?=$img_path;?>">
			</div>
 </li>
		
		</ul>
	</div>
<?
        }
    }?>



	<div class="pretext">
		<ul class="pretext_tags">
			<li class="pretext_tags_item js_tab_trigger active" data-tab="1">
			<h3>Куда поехать по России осенью?</h3>
 </li>
			<li class="pretext_tags_item js_tab_trigger" data-tab="2">
			<h3>Куда поехать зимой?</h3>
 </li>
		</ul>
		<ul class="pretext_content">
			<li class="pretext_content_item js_tab_content active" data-tab="1">
			<div class="pretext_content_img">
 <img alt="Куда поехать по России осенью?" src="/local/templates/general_2/img/mai.png">
			</div>
 </li>
			<li class="pretext_content_item js_tab_content" data-tab="2">
			<div class="pretext_content_img">
 <img alt="Куда поехать отдыхать зимой?" src="/local/templates/general_2/img/where_to_go_background_big.png">
			</div>
 </li>
		</ul>
		<div class="carousel_wrap">
			<div id="owl-carousel_3" class="pretext_countries owl-carousel owl-theme owl-loaded js_tab_content_dop active" data-tab="11">
				<div class="pretext_countries_item">
 <a href="/autumn/ples/"> <img src="/local/templates/general_2/img/Ples.png" alt="">
					<h3>Город Плёс — муза Левитана</h3>
 </a>
				</div>
				<div class="pretext_countries_item">
 <a href="/autumn/mountains/"> <img src="/local/templates/general_2/img/Pushkinskie_gorki.png" alt="">
					<h3>Пушкинские горы и Михайловская усадьба</h3>
 </a>
				</div>
				<div class="pretext_countries_item">
 <a href="/autumn/valdai/"> <img src="/local/templates/general_2/img/Valdai.png" alt="">
					<h3>Валдай — маленькая Швейцария</h3>
 </a>
				</div>
				<div class="pretext_countries_item">
 <a href="/autumn/plato/"> <img src="/local/templates/general_2/img/lako_naki.png" alt="">
					<h3>Плато Лаго-Наки</h3>
 </a>
				</div>
				<div class="pretext_countries_item">
 <a href="/autumn/altai/"> <img src="/local/templates/general_2/img/altai.png" alt="">
					<h3>Осенний Горный Алтай</h3>
 </a>
				</div>
				<div class="pretext_countries_item">
 <a href="/autumn/baikal/"> <img src="/local/templates/general_2/img/baikal.png" alt="">
					<h3>Озеро Байкал</h3>
 </a>
				</div>
			</div>
			<div id="owl-carousel_4" class="pretext_countries owl-carousel owl-theme owl-loaded js_tab_content_dop" data-tab="12">
				<div class="pretext_countries_item">
 <a href="/napravleniya/thailand/"> <img src="/local/templates/general_2/img/rest_thai_small.png" alt="">
					<h3>Таиланд</h3>
 </a>
				</div>
				<div class="pretext_countries_item">
 <a href="/napravleniya/vietnam/"> <img src="/local/templates/general_2/img/vietnam_small.png" alt="">
					<h3>Вьетнам</h3>
 </a>
				</div>
				<div class="pretext_countries_item">
 <a href="/napravleniya/sri-lanka/"> <img src="/local/templates/general_2/img/sri_lanka_small.png" alt="">
					<h3>Шри-Ланка</h3>
 </a>
				</div>
				<div class="pretext_countries_item">
 <a href="/napravleniya/cuba/"> <img src="/local/templates/general_2/img/cuba_small.png" alt="">
					<h3>Куба</h3>
 </a>
				</div>
				<div class="pretext_countries_item">
 <a href="/napravleniya/oae/"> <img src="/local/templates/general_2/img/uae_small.png" alt="">
					<h3>Эмираты</h3>
 </a>
				</div>
			</div>
		</div>
	</div>
</div>

 <section class="stories">
<div class="container">
	<h2>Сторис <a href="/news/">Все &gt;&gt;&gt;</a></h2>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	".default",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MEDIA_PROPERTY" => "",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SEARCH_PAGE" => "/search/",
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SLIDER_PROPERTY" => "",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_RATING" => "N",
		"USE_SHARE" => "N"
	)
);?>
</div>
 </section> </main><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>