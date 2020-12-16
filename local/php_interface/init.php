<?php
//*****************************************СОБЫТИЯ*******************************//
AddEventHandler('form', 'onBeforeResultAdd', 'my_onBeforeResultAdd');
function my_onBeforeResultAdd($WEB_FORM_ID, &$arFields, &$arrVALUES)
{
    global $APPLICATION;

    // действие обработчика распространяется только на форму с ID=10
    if ($WEB_FORM_ID == 10)
    {
        /*$arFields['CONFIRMED'] = 'Y';
        $arFields['SEND_CONFIRM'] = 'Y';
        $arFields['AUTO_SAVE'] = 'Y';*/
        //echo '<pre>';
        //print_r($arFields);
        //echo '</pre>';
        //echo '<pre>';
        $arrVALUES['licenses_popup']='Y';
        //print_r($arrVALUES);
        //echo '</pre>';
        //$APPLICATION->ThrowException('Значение должно быть больше или равно 5!');
    }
}



//*****************************************АГЕНТЫ*******************************//
/**
 * Добавляем картинки категориям
 */
function AddPicturesInCategories(){
    /*CModule::IncludeModule("iblock");
    $url_parse = "https://myfinmarket.ru";
    $arFilter = Array('IBLOCK_ID'=>17, 'GLOBAL_ACTIVE'=>'Y');
    $rsSect  = CIBlockSection::GetList(Array("SORT"=>"ASC"), $arFilter, true);
    while ($arSect = $rsSect->GetNext())
    {*/
        /**
         * получим первый попавшийся товар из раздела
         */
        /*$arFilterEl = Array('IBLOCK_ID'=>17, 'ACTIVE'=>'Y','SECTION_ID'=>$arSect["ID"]);
        $arSelectEl = Array('ID','NAME','DETAIL_PICTURE');
        $rsElem = CIBlockElement::GetList(Array("RAND" => "ASC"), $arFilterEl,false,Array("nTopCount"=>1),$arSelectEl);
        while ($arElem = $rsElem->GetNext()){
            $pic = CFile::GetPath($arElem['DETAIL_PICTURE']);*/
            //echo 'Раздел - ' . $arSect['ID'] . ' имя - ' . $arSect['NAME'] . '</br>';
            //echo 'Элемент - ' . $arElem['ID'] . ' имя - ' . $arElem['NAME'] . ' картинка - ' . $pic . '</br>';
            /**
             * устанавливаем картинку раздела
             */
            /*$sec = new CIBlockSection;
            $arLoadProductArray = Array(
                "ACTIVE"         => "Y",
                "PICTURE" => CFile::MakeFileArray($url_parse . $pic),
            );
            $results = $sec->Update($arSect["ID"], $arLoadProductArray);
        }
    }*/

    return "AddPicturesInCategories();";
}
/**
 * Добавляем регионы новым товарам
 */
function AddRegionsInProduct(){
    CModule::IncludeModule("iblock");

    $regions = Array();
    $arFilter = ['IBLOCK_ID' => 2, 'ACTIVE' => 'Y'];
    $arSelect = [ 'ID', 'NAME', 'DATE_ACTIVE_FROM'];
    $res = CIBlockElement::GetList(array(),$arFilter,false,false,$arSelect);
    while($itemRes = $res->Fetch()){
        $regions[] = $itemRes['ID'];
    }
    $arFilter = ['IBLOCK_ID' => 17, 'ACTIVE' => 'Y', 'PROPERTY_LINK_REGION' => false];
    $arSelect = [ 'ID', 'NAME', 'DATE_ACTIVE_FROM'];
    $res = CIBlockElement::GetList(array(),$arFilter,false,false,$arSelect);
    while($itemRes = $res->Fetch()){
        $el_id          = $itemRes['ID'];
        $iblock_id      = 17;
        $PROPERTY_CODE  = "LINK_REGION";
        $PROPERTY_VALUE = $regions;
        $prop = array($PROPERTY_CODE => $PROPERTY_VALUE);
        CIBlockElement::SetPropertyValuesEx($el_id, $iblock_id, $prop);
        //echo 'установили регионы для ID - ' . $el_id . '</br>';
        //break;
    }
    return "AddRegionsInProduct();";
}
function see($obj, $v = false)
{
	if($v==true){
		global $USER;
		if ($USER->IsAdmin()){
			echo '<pre>';
			print_r($obj);
			echo '</pre>';
		}
	} else {
		echo '<pre>';
		print_r($obj);
		echo '</pre>';
	}
	
}
if(file_exists($_SERVER["DOCUMENT_ROOT"].'/local/php_interface/include/tables_for_advertiser.php')) 
	require_once($_SERVER["DOCUMENT_ROOT"].'/local/php_interface/include/tables_for_advertiser.php');
?>