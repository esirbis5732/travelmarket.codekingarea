<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Сторис -  Полезные статьи для туристов от TRAVEL &#127965;market");
$APPLICATION->SetTitle("Сторис - статьи для туристов");
?><main>
<div class="container_3">
	 <?if($APPLICATION->GetCurPage() == "/news/"){?>
	<h1><?$APPLICATION->ShowTitle(false);?></h1>
	 <?}?>
	<div class="news_list_block">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"template1", 
	array(
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "Y",
		"AJAX_OPTION_JUMP" => "Y",
		"AJAX_OPTION_SHADOW" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"ALSO_ITEMS_COUNT" => "5",
		"ALSO_ITEMS_POSITION" => "bottom",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"CATEGORY_CODE" => "CATEGORY",
		"CATEGORY_IBLOCK" => array(
			0 => "1",
		),
		"CATEGORY_ITEMS_COUNT" => "5",
		"CATEGORY_THEME_1" => "list",
		"CHECK_DATES" => "Y",
		"COLOR_NEW" => "3E74E6",
		"COLOR_OLD" => "C0C0C0",
		"COMPONENT_TEMPLATE" => "template1",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_BLOG_USE" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FB_USE" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "N",
		"DETAIL_PAGER_TEMPLATE" => "arrows",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_USE_COMMENTS" => "Y",
		"DETAIL_VK_USE" => "N",
		"DISPLAY_AS_RATING" => "rating",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PANEL" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FILTER_FIELD_CODE" => array(
			0 => "TAGS",
			1 => "",
		),
		"FILTER_NAME" => "",
		"FILTER_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"FONT_MAX" => "50",
		"FONT_MIN" => "10",
		"FORM_ID_ORDER_SERVISE" => "",
		"GALLERY_TYPE" => "small",
		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
		"HIDE_NOT_AVAILABLE" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "news",
		"IMAGE_POSITION" => "left",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LINE_ELEMENT_COUNT_LIST" => "3",
		"LINKED_ELEMENST_PAGE_COUNT" => "20",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "TAGS",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_VIEW" => "slider",
		"MEDIA_PROPERTY" => "",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "12",
		"NUM_DAYS" => "30",
		"NUM_NEWS" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Stories",
		"PERIOD_NEW_TAGS" => "",
		"PREVIEW_TRUNCATE_LEN" => "1000",
		"PRICE_CODE" => "",
		"SEF_FOLDER" => "/news/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SHOW_DETAIL_LINK" => "Y",
		"SHOW_DISCOUNT_PERCENT_NUMBER" => "N",
		"SHOW_FILTER_DATE" => "Y",
		"SHOW_NEXT_ELEMENT" => "N",
		"SLIDER_PROPERTY" => "",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STORES" => array(
			0 => "",
			1 => "",
		),
		"STRICT_SECTION_CHECK" => "N",
		"S_ASK_QUESTION" => "",
		"S_ORDER_SERVISE" => "",
		"TAGS_CLOUD_ELEMENTS" => "150",
		"TAGS_CLOUD_WIDTH" => "100%",
		"TEMPLATE_THEME" => "blue",
		"T_ALSO_ITEMS" => "",
		"T_DOCS" => "",
		"T_GALLERY" => "",
		"T_GOODS" => "",
		"T_NEXT_LINK" => "",
		"T_PREV_LINK" => "",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"YANDEX" => "N",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);?>


<?/*php
$GLOBALS["arRegionLink"]["!%TAGS"] = "Обзоры";
//Фильтр по тегам
if(isset($_GET["tags"]) && !empty($_GET["tags"])){
$GLOBALS["arRegionLink"] ["?TAGS"] = $_GET["tags"];
}*/
?>
<?/*$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"fm_storis_list2", 
	array(
		"IBLOCK_TYPE" => "aspro_next_content",
		"IBLOCK_ID" => "",
		"NEWS_COUNT" => "5",
		"USE_SEARCH" => "N",
		"USE_RSS" => "Y",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "Y",
		"FILTER_NAME" => "arSectionLink",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "DESC",
		"CHECK_DATES" => "Y",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/news/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "100000",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"USE_PERMISSIONS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "250",
		"LIST_ACTIVE_DATE_FORMAT" => "j F Y G:i",
		"LIST_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DETAIL_PICTURE",
			4 => "DATE_ACTIVE_FROM",
			5 => "CREATED_BY",
			6 => "CREATED_USER_NAME",
			7 => "TIMESTAMP_X",
			8 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "POSITION_BLOCK",
			1 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
		"DISPLAY_NAME" => "N",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_ACTIVE_DATE_FORMAT" => "j F Y G:i",
		"DETAIL_FIELD_CODE" => array(
			0 => "TAGS",
			1 => "PREVIEW_TEXT",
			2 => "DETAIL_TEXT",
			3 => "DETAIL_PICTURE",
			4 => "DATE_ACTIVE_FROM",
			5 => "CREATED_BY",
			6 => "CREATED_USER_NAME",
			7 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "LINK_GOODS",
			1 => "FORM_QUESTION",
			2 => "FORM_ORDER",
			3 => "LINK_SERVICES",
			4 => "PHOTOS",
			5 => "DOCUMENTS",
			6 => "",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"PAGER_TEMPLATE" => "main",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"IMAGE_POSITION" => "left",
		"USE_SHARE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"USE_REVIEW" => "N",
		"ADD_ELEMENT_CHAIN" => "Y",
		"SHOW_DETAIL_LINK" => "Y",
		"S_ASK_QUESTION" => "",
		"S_ORDER_SERVISE" => "",
		"T_GALLERY" => "",
		"T_DOCS" => "",
		"T_GOODS" => "",
		"T_SERVICES" => "",
		"T_STUDY" => "",
		"COMPONENT_TEMPLATE" => "fm_storis_list",
		"SECTION_ELEMENTS_TYPE_VIEW" => "list_elements_2",
		"ELEMENT_TYPE_VIEW" => "element_1",
		"SET_LAST_MODIFIED" => "N",
		"T_VIDEO" => "",
		"T_NEXT_LINK" => "",
		"T_PREV_LINK" => "",
		"SHOW_SECTION_PREVIEW_DESCRIPTION" => "Y",
		"SHOW_SECTION_DESCRIPTION" => "Y",
		"LINE_ELEMENT_COUNT" => "2",
		"LINE_ELEMENT_COUNT_LIST" => "3",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"SHOW_NEXT_ELEMENT" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "Y",
		"MESSAGE_404" => "",
		"FORM_ID_ORDER_SERVISE" => "",
		"IMAGE_WIDE" => "Y",
		"NUM_NEWS" => "20",
		"NUM_DAYS" => "30",
		"YANDEX" => "N",
		"T_ALSO_ITEMS" => "",
		"ALSO_ITEMS_POSITION" => "side",
		"DETAIL_USE_COMMENTS" => "Y",
		"DETAIL_BLOG_USE" => "N",
		"DETAIL_BLOG_URL" => "catalog_comments",
		"DETAIL_BLOG_EMAIL_NOTIFY" => "Y",
		"DETAIL_VK_USE" => "N",
		"DETAIL_VK_API_ID" => "",
		"DETAIL_FB_USE" => "N",
		"DETAIL_FB_APP_ID" => "",
		"COMMENTS_COUNT" => "10",
		"BLOG_TITLE" => "Комментарии",
		"VK_TITLE" => "Вконтакте",
		"FB_TITLE" => "Facebook",
		"DETAIL_STRICT_SECTION_CHECK" => "Y",
		"STRICT_SECTION_CHECK" => "Y",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"LIST_VIEW" => "slider",
		"LINKED_ELEMENST_PAGE_COUNT" => "20",
		"ALSO_ITEMS_COUNT" => "5",
		"GALLERY_TYPE" => "small",
		"SHOW_DISCOUNT_PERCENT_NUMBER" => "N",
		"PRICE_CODE" => array(
		),
		"STORES" => array(
			0 => "",
			1 => "",
		),
		"HIDE_NOT_AVAILABLE" => "N",
		"FILE_404" => "",
		"TEMPLATE_THEME" => "blue",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"MEDIA_PROPERTY" => "",
		"SLIDER_PROPERTY" => "",
		"LIST_USE_SHARE" => "N",
		"SHARE_TEMPLATE" => "",
		"SHARE_HANDLERS" => array(
			0 => "delicious",
			1 => "lj",
			2 => "facebook",
			3 => "twitter",
			4 => "mailru",
			5 => "vk",
		),
		"SHARE_SHORTEN_URL_LOGIN" => "",
		"SHARE_SHORTEN_URL_KEY" => "",
		"GOOGLE_API_KEY" => "",
		"MAP_TYPE" => "0",
		"SHOW_FILTER_DATE" => "Y",
		"SECTIONS_TYPE_VIEW" => "sections_1",
		"SECTION_TYPE_VIEW" => "section_1",
		"TIZERS_IBLOCK_ID" => "",
		"LANDING_IBLOCK_ID" => "",
		"LANDING_SECTION_COUNT" => "10",
		"LANDING_TITLE" => "Популярные категории",
		"T_PROJECTS" => "",
		"T_REVIEWS" => "",
		"T_STAFF" => "",
		"IMAGE_CATALOG_POSITION" => "left",
		"SHOW_CHILD_SECTIONS" => "Y",
		"COUNT_IN_LINE" => "3",
		"DETAIL_BRAND_USE" => "N",
		"T_CLIENTS" => "",
		"SHARE_HIDE" => "N",
		"TAGS_CLOUD_ELEMENTS" => "150",
		"PERIOD_NEW_TAGS" => "",
		"DISPLAY_AS_RATING" => "rating",
		"FONT_MAX" => "50",
		"FONT_MIN" => "10",
		"COLOR_NEW" => "3E74E6",
		"COLOR_OLD" => "C0C0C0",
		"TAGS_CLOUD_WIDTH" => "100%",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "#SECTION_CODE#/",
			"detail" => "#SECTION_CODE#/#ELEMENT_CODE#/",
			"rss" => "rss/",
			"rss_section" => "#SECTION_ID#/rss/",
		)
	),
	false
);*/?>
	</div>
</div>
 </main>
 
 
 
 
 
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>