<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("twitter:image", "/local/templates/general_2/img/excursions_background_big.png");
$APPLICATION->SetPageProperty("fb:image", "/local/templates/general_2/img/excursions_background_big.png");
$APPLICATION->SetPageProperty("vk:image", "/local/templates/general_2/img/excursions_background_big.png");
$APPLICATION->SetPageProperty("og:image", "/local/templates/general_2/img/excursions_background_big.png");
$APPLICATION->SetPageProperty("title", "TRAVEL&#127965;MARKET - Экскурсии - Поиск поплярных и дешевых экскурсий в разных странах");
$APPLICATION->SetPageProperty("keywords", "Экскурсии");
$APPLICATION->SetPageProperty("description", "Поиск, сравнение цен и покупка экскурсий онлайн по всем направлениям. Что посмотреть заграницей. Какие места посетить");
$APPLICATION->SetTitle("Экскурсии");
?><?$APPLICATION->IncludeComponent("codeking:excursions", "vue-template", Array(
	"CACHE_TIME" => "0",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"IBLOCK_ID" => "",	// Инфоблок
		"IBLOCK_TYPE" => "",	// Тип инфоблока
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>