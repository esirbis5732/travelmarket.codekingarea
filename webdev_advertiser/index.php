<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?><?$APPLICATION->IncludeComponent(
	"codeking:excursions",
	"vue-template",
	Array(
		"CACHE_TIME" => "0",
		"CACHE_TYPE" => "A",
		"IBLOCK_ID" => "",
		"IBLOCK_TYPE" => ""
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>