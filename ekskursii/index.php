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
?>

<?$APPLICATION->IncludeComponent("codeking:excursions", "vue-template", Array(
    "CACHE_TIME" => "0",	// Время кеширования (сек.)
    "CACHE_TYPE" => "A",	// Тип кеширования
    "IBLOCK_ID" => "",	// Инфоблок
    "IBLOCK_TYPE" => "",	// Тип инфоблока
),
    false
);?>

<?
$no_city = true;
if(isset($_GET['citysearch']))
{
    if(!empty($_GET['citysearch']))
    {
        $city_array = explode("|", $_GET['citysearch']);
        if(count($city_array)>=4)
        {
            $city_name = $city_array[3];
            if(strlen($city_name)>0)
            {
                $APPLICATION->AddHeadString('<meta property="og:type" content="website">',false);
                $APPLICATION->AddHeadString('<meta property="og:title" content="Самые интересные экскурсии по ' . $city_name . '">',false);
                $APPLICATION->AddHeadString('<meta property="og:description" content="Сравни и выбери лучшие предложения ведущих маркетплейсов экскурсий">',false);
                $APPLICATION->AddHeadString('<meta property="og:url" content="' . $APPLICATION->GetCurPage() .'">',false);

                $no_city = false;

                CModule::IncludeModule("iblock");
                $arFilterCity = ['IBLOCK_ID' => 8, 'ACTIVE' => 'Y', 'NAME' => $city_name];
                $arSelectCity = [ 'ID', 'NAME','CODE', 'DETAIL_PICTURE','DETAIL_TEXT','PREVIEW_TEXT'];
                $resCity = CIBlockElement::GetList(array(),$arFilterCity,false,false,$arSelectCity);
                while($itemResCity = $resCity->Fetch()):
                    ?>
                    <div class="seo_text container"><?=$itemResCity['DETAIL_TEXT']?></div>
                    <?$APPLICATION->AddHeadString('<meta property="og:image" content="' . CFile::GetPath($itemResCity['DETAIL_PICTURE']) .'">',false)?>
                    <?//$APPLICATION->SetTitle('Лучшие экскурсии по ' . $city_name);?>
                    <?
                endwhile;
            }//if(strlen($city_name)>0)
        }//if(count($city_array)>=4)
    }//if(!empty($_GET['citysearch']))
}//if(isset($_GET['citysearch']))
if($no_city==true)
{
    $APPLICATION->AddHeadString('<meta property="og:url" content="' . $APPLICATION->GetCurPage() .'">',false);
    $APPLICATION->AddHeadString('<meta property="og:type" content="website">',false);
    $APPLICATION->AddHeadString('<meta property="og:title" content="Самые интересные экскурсии по всему миру">',false);
    $APPLICATION->AddHeadString('<meta property="og:description" content="Сравни и выбери лучшие предложения ведущих маркетплейсов экскурсий">',false);
}
?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>