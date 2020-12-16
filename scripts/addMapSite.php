<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/classes/general/xml.php');
Global $APPLICATION;

$root = $_SERVER['DOCUMENT_ROOT'];
$dir = opendir($root); // Открываем дирректорию.
//$i_count = 0;
//$i_need = 3;
while($file = readdir($dir)) { // Считываем содержимое дирректории и записываем в массив
    //if($i_count>=$i_need) {break;}
    //условия на вывод только публичных разделов
    if (is_dir($root . '/' . $file) && $file != '.' && $file != '..')
    {
        if ($file != 'bitrix' && $file != 'local' && $file != 'ajax' && $file != 'aspro_regions' && $file != 'cgi-bin' && $file != 'images' && $file != 'old_questionnaire' && $file != 'upload' && $file != '1111_files' && $file != 'include')
        {

            $innerFile = $root . '/' . $file . '/index.php'; // помещаем пути в массив
            $lines = file($innerFile);
            $section1_title = "";
            foreach ($lines as $line_num => $line) { // код открытх файлов разбиваем и записываем в $line

                $re = '/(?<=SetTitle\(").*(?="\))/su'; // регулярное выражение, извлекаем содержимое функции SetTitle каждого файла
                $str = $line;
                preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);
                if(strlen($matches[0][0])>0)
                {
                    $section1_title = $matches[0][0];
                }
            }
            $outSEO = "";
            foreach ($lines as $line_num => $line) {
                $setPagePropertyRe = '/(?<=SetPageProperty\(").*(?="\))/su'; //регулярное выражение, извлекаем содержимое функции SetPageProperty каждого файла
                $setPagePropertyStr = $line;
                preg_match_all($setPagePropertyRe, $setPagePropertyStr, $setPagePropertyMatches, PREG_SET_ORDER, 0);
                if(strlen($setPagePropertyMatches[0][0])>1)
                {
                    if(strlen($outSEO)>0)
                    {
                        $outSEO = $outSEO . "|" . $setPagePropertyMatches[0][0]; //// выводим значение SetPageProperty
                    }
                    else
                    {
                        $outSEO = $setPagePropertyMatches[0][0]; //// выводим значение SetPageProperty
                    }
                }


            }
            $section1_url = '/' . $file . '/';
            /**
             * добавляем раздел
             */



            $sectionSiteMapSeo = 'https://training.market/' . $file . '/index.php';
            $arMTags = get_meta_tags($sectionSiteMapSeo);
            header('Content-Type: text/html; charset=utf-8');

            $bs = new CIBlockSection;
            $arFields = Array(
                "ACTIVE" => "Y",
                "IBLOCK_ID" => 6,
                "NAME" => $section1_title,
                "UF_TITLE"=>$section1_title,
                "UF_URL"=>$section1_url,
                "UF_SEO_DESCRIPTION" =>  (isset($arMTags['description']) ? $arMTags['description'] : 'нет данных'),
                "UF_SEO_KEYWORDS" => (isset($arMTags['keywords']) ? $arMTags['keywords'] : 'нет данных'),
                "UF_COUNT_LETTER" => strlen($innerFile)

            );
            $ID = $bs->Add($arFields);

            if($ID>0)
            {


                echo 'Добавили раздел - ' . $section1_title . ' ' . $section1_url . ' с id - ' . $ID . '</br>';

                if($file == 'catalog')
                {

                    $arrTreeCatalog = array();
                    $IBLOCK_ID = 35;
                    $arFilter = Array(
                        'IBLOCK_ID' => $IBLOCK_ID,
                        'ACTIVE' => 'Y');
                    $obSection = CIBlockSection::GetTreeList($arFilter);
                    $parent_section = 0;
                    while ($arResult = $obSection->GetNext()) {;
                        if ($arResult['DEPTH_LEVEL'] == 1) {
                            $arrTreeCatalog[$arResult['ID']] = array('NAME' => $arResult['NAME'], 'URL' => $arResult['SECTION_PAGE_URL']);
                            $parent_section = $arResult['ID'];
                        } elseif ($arResult['DEPTH_LEVEL'] == 2) {
                            $arrTreeCatalog[$arResult['IBLOCK_SECTION_ID']]['ITEMS'][$arResult['ID']] = array('NAME' => $arResult['NAME'], 'URL' => $arResult['SECTION_PAGE_URL']);
                        } elseif ($arResult['DEPTH_LEVEL'] == 3) {
                            $arrTreeCatalog[$parent_section]['ITEMS'][$arResult['IBLOCK_SECTION_ID']]['ITEMS'][$arResult['ID']] = array('NAME' => $arResult['NAME'], 'URL' => $arResult['SECTION_PAGE_URL']);
                        }
                    }


                    if (count($arrTreeCatalog) > 0) {
                        foreach ($arrTreeCatalog as $sectionItem) {

                            //2 уровени
                            if ($sectionItem['ITEMS']):
                                foreach ($sectionItem['ITEMS'] as $keyS => $elItem) {

                                    $resSEOSection = array();
                                    $rsSection = CIBlockSection::GetList(array(), array("IBLOCK_ID"=>$IBLOCK_ID, "ACTIVE"=>"Y"), false);
                                    if($arSection = $rsSection->GetNext()) {
                                        $ipropValues = new \Bitrix\Iblock\InheritedProperty\SectionValues($arSection["IBLOCK_ID"], $keyS);
                                        $resSEOSection = $ipropValues->getValues();

                                    }
                                    $iblockSectionbs = new CIBlockSection;
                                    $arFields = Array(
                                        "ACTIVE" => "Y",
                                        "IBLOCK_SECTION_ID" => $ID,
                                        "IBLOCK_ID" => 6,
                                        "NAME" => $elItem['NAME'],
                                        "UF_URL"=>$elItem['URL'],
                                        "UF_TITLE"=>$elItem['NAME'],
                                        "UF_SEO_KEYWORDS"=>$resSEOSection['SECTION_META_KEYWORDS'],
                                        "UF_SEO_DESCRIPTION"=>$resSEOSection['SECTION_META_DESCRIPTION']
                                    );
                                    $iblockSectionID = $iblockSectionbs->Add($arFields);


                                    if ($iblockSectionID > 0) {
                                        /*
                                            ?>
                                            <p class="siteMapThirdLevelDir" style="margin-left:60px;padding-top: 10px;margin-top: -30px;"> --section-- <?=$elItem['NAME']?> -- <a style="color: green;" href="<?=$elItem['URL']?>"><?=$elItem['URL']?></a></p>
                                            <?
                                        */
                                        $arFilter = ['IBLOCK_ID' => $IBLOCK_ID, 'ACTIVE' => 'Y', 'IBLOCK_SECTION_ID' => $keyS];
                                        $arSelect = ['ID', 'NAME', 'CODE', 'URL', 'DETAIL_TEXT'];

                                        $resProduct = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
                                        // print_r($resProduct);
                                        while ($itemResProduct = $resProduct->Fetch()) {
                                            $resSEOElement = array();
                                            $rsElement = CIBlockElement::GetList(array(), array("IBLOCK_ID"=>$IBLOCK_ID, "ACTIVE"=>"Y"), false);
                                            if($arElement = $rsElement->GetNext()) {
                                                $ipropValues = new \Bitrix\Iblock\InheritedProperty\ElementValues($arElement["IBLOCK_ID"], $itemResProduct['ID']);
                                                $resSEOElement = $ipropValues->getValues();

                                            }

                                            $iblockElementbs = new CIBlockElement;

                                            $PROP = array();
                                            $PROP['SEO_TITLE'] = $itemResProduct['NAME'];
                                            $PROP['URL'] = $elItem['URL'] . $itemResProduct['CODE'] . '/';
                                            $PROP['SEO_KEYWORDS'] = $resSEOElement['ELEMENT_META_KEYWORDS'];
                                            $PROP['SEO_DESCRIPTION'] = $resSEOElement['ELEMENT_META_DESCRIPTION'];
                                            $PROP['COUNT_LETTER'] = strlen($itemResProduct['DETAIL_TEXT']);


                                            $arFields = Array(
                                                "ACTIVE" => "Y",
                                                "IBLOCK_SECTION_ID" => $iblockSectionID,
                                                "IBLOCK_ID" => 6,
                                                "NAME" => $itemResProduct['NAME'],
                                                "PROPERTY_VALUES"=> $PROP

                                            );
                                            $iblockElementID = $iblockElementbs->Add($arFields);
                                            if ($iblockElementID > 0) {
                                                /*
                                                    ?>
                                                    <p class="siteMapThirdLevelDir" style="margin-left:60px;padding-top: 10px;margin-top: -30px;"> ----element-- <?=$itemResProduct['NAME']?> -- <a style="color: green;" href="<?=$elItem['URL']?><?=$itemResProduct['CODE']?>"><?=$elItem['URL']?><?=$itemResProduct['CODE']?></a></p>
                                                    <?
                                                */
                                                //3 уровень
                                                if ($elItem['ITEMS']):
                                                    foreach ($elItem['ITEMS'] as $keyS2 => $thirdItem) {
                                                        $iblockSectionInnerbs = new CIBlockSection;
                                                        $arFields = Array(
                                                            "ACTIVE" => "Y",
                                                            "IBLOCK_SECTION_ID" => $iblockSectionID,
                                                            "IBLOCK_ID" => 6,
                                                            "NAME" => $thirdItem['NAME'],
                                                            "UF_TITLE"=>$thirdItem['NAME'],
                                                            "UF_URL"=>$thirdItem['URL'],
                                                            "UF_SEO_KEYWORDS"=>$resSEOSection['SECTION_META_KEYWORDS'],
                                                            "UF_SEO_DESCRIPTION"=>$resSEOSection['SECTION_META_DESCRIPTION']
                                                        );
                                                        $iblockSectionInnerID = $iblockSectionInnerbs->Add($arFields);
                                                        if ($iblockSectionInnerID > 0) {
                                                            /*
                                                           ?>
                                                           <p class="siteMapThirdLevelDir" style="margin-left:60px;padding-top: 10px;margin-top: -30px;"> ----section-- <?=$thirdItem['NAME']?> -- <a style="color: green;" href="<?=$thirdItem['URL']?>"><?=$thirdItem['URL']?></a></p>
                                                           <?
                                                            */
                                                            $arFilter = ['IBLOCK_ID' => $IBLOCK_ID, 'ACTIVE' => 'Y', 'IBLOCK_SECTION_ID' => $keyS];
                                                            $arSelect = ['ID', 'NAME', 'CODE', 'DETAIL_TEXT'];
                                                            $resProduct = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
                                                            while ($itemResProduct = $resProduct->Fetch()) {

                                                                $iblockElementInnebs = new CIBlockElement;

                                                                $PROP = array();
                                                                $PROP['SEO_TITLE'] = $itemResProduct['NAME'];  // свойству с кодом 12 присваиваем значение "Белый"
                                                                $PROP['URL'] = $thirdItem['URL'] . $itemResProduct['CODE'] . '/';
                                                                $PROP['SEO_KEYWORDS'] = $resSEOElement['ELEMENT_META_KEYWORDS'];
                                                                $PROP['SEO_DESCRIPTION'] = $resSEOElement['ELEMENT_META_DESCRIPTION'];
                                                                $PROP['COUNT_LETTER'] = strlen($itemResProduct['DETAIL_TEXT']);

                                                                $arFields = Array(
                                                                    "ACTIVE" => "Y",
                                                                    "IBLOCK_SECTION_ID" => $iblockSectionInnerID,
                                                                    "IBLOCK_ID" => 6,
                                                                    "NAME" => $itemResProduct['NAME'],
                                                                    "PROPERTY_VALUES"=> $PROP
                                                                );
                                                                $iblockElementInnerID = $iblockElementInnebs->Add($arFields);
                                                                if ($iblockElementInnerID > 0) {

                                                                }
                                                                /*?>
                                                                <p class="siteMapThirdLevelDir" style="margin-left:60px;padding-top: 10px;margin-top: -30px;"> ------element-- <?=$itemResProduct['NAME']?> -- <a style="color: green;" href="<?=$elItem['URL']?><?=$itemResProduct['CODE']?>"><?=$elItem['URL']?><?=$itemResProduct['CODE']?></a></p>
                                                                <?*/
                                                            }
                                                        }
                                                    }
                                                endif;
                                            }
                                        }
                                    }
                                }
                            endif;
                            //$i_count++;
                        }
                    }
                }//if($file == 'catalog')


                if($file == 'articles') {
                    $arrTreeCatalog = array();
                    $IBLOCK_ID = 18;
                    $arFilter = Array(
                        'IBLOCK_ID' => $IBLOCK_ID,
                        'ACTIVE' => 'Y');
                    $obSection = CIBlockSection::GetTreeList($arFilter);
                    $parent_section = 0;
                    while ($arResult = $obSection->GetNext()) {
                        if ($arResult['DEPTH_LEVEL'] == 1) {
                            $arrTreeCatalog[$arResult['ID']] = array('NAME' => $arResult['NAME'], 'URL' => $arResult['SECTION_PAGE_URL']);
                            $parent_section = $arResult['ID'];
                        } elseif ($arResult['DEPTH_LEVEL'] == 2) {
                            $arrTreeCatalog[$arResult['IBLOCK_SECTION_ID']]['ITEMS'][$arResult['ID']] = array('NAME' => $arResult['NAME'], 'URL' => $arResult['SECTION_PAGE_URL']);
                        } elseif ($arResult['DEPTH_LEVEL'] == 3) {
                            $arrTreeCatalog[$parent_section]['ITEMS'][$arResult['IBLOCK_SECTION_ID']]['ITEMS'][$arResult['ID']] = array('NAME' => $arResult['NAME'], 'URL' => $arResult['SECTION_PAGE_URL']);
                        }
                    }

                    if (count($arrTreeCatalog) > 0) {
                        foreach ($arrTreeCatalog as $keyS => $sectionItem) {

                            $resSEOArtSection = array();
                            $rsArtSection = CIBlockSection::GetList(array(), array("IBLOCK_ID"=>$IBLOCK_ID, "ACTIVE"=>"Y"), false);
                            if($arArtSection = $rsArtSection->GetNext()) {
                                $ipropValues = new \Bitrix\Iblock\InheritedProperty\SectionValues($arArtSection["IBLOCK_ID"], $keyS);
                                $resSEOArtSection = $ipropValues->getValues();

                            }

                            $iblockArtSectionbs = new CIBlockSection;
                            $arFields = Array(
                                "ACTIVE" => "Y",
                                "IBLOCK_SECTION_ID" => $ID,
                                "IBLOCK_ID" => 6,
                                "NAME" => $sectionItem['NAME'],
                                "UF_TITLE" => $sectionItem['NAME'],
                                "UF_URL"=>$sectionItem['URL'],
                                "UF_SEO_KEYWORDS"=>$resSEOArtSection['SECTION_META_KEYWORDS'],
                                "UF_SEO_DESCRIPTION"=>$resSEOArtSection['SECTION_META_DESCRIPTION']

                            );

                            $iblockArtSectionID = $iblockArtSectionbs->Add($arFields);

                            if ($iblockArtSectionID > 0) {

                                $arFilter = ['IBLOCK_ID' => $IBLOCK_ID, 'ACTIVE' => 'Y', 'IBLOCK_SECTION_ID' => $keyS];
                                $arSelect = ['ID', 'NAME', 'CODE', 'IBLOCK_CODE', 'DETAIL_TEXT'];

                                $resProduct = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);

                                while ($itemResProduct = $resProduct->Fetch())
                                {

                                    $resSEOArtElement = array();
                                    $rsArtElement = CIBlockElement::GetList(array(), array("IBLOCK_ID"=>$IBLOCK_ID, "ACTIVE"=>"Y"), false);
                                    if($arArtElement = $rsArtElement->GetNext()) {
                                        $ipropValues = new \Bitrix\Iblock\InheritedProperty\ElementValues($arArtElement["IBLOCK_ID"], $itemResProduct['ID']);
                                        $resSEOArtElement = $ipropValues->getValues();

                                    }
                                    $iblockArtElementbs = new CIBlockElement;

                                    $PROP = array();
                                    $PROP['SEO_TITLE'] = $itemResProduct['NAME'];  // свойству с кодом сприсваиваем занчение
                                    $PROP['URL'] = $sectionItem['URL'] . $itemResProduct['CODE'] . '/';
                                    $PROP['SEO_KEYWORDS'] = $resSEOArtElement['ELEMENT_META_KEYWORDS'];
                                    $PROP['SEO_DESCRIPTION'] = $resSEOArtElement['ELEMENT_META_DESCRIPTION'];
                                    $PROP['COUNT_LETTER'] = strlen($itemResProduct['DETAIL_TEXT']);

                                    $arFields = Array(
                                        "ACTIVE" => "Y",
                                        "IBLOCK_SECTION_ID" => $iblockArtSectionID,
                                        "IBLOCK_ID" => 6,
                                        "NAME" => $itemResProduct['NAME'],
                                        "PROPERTY_VALUES"=> $PROP

                                    );
                                    $iblockArtElementID = $iblockArtElementbs->Add($arFields);
                                    if ($iblockArtElementID > 0)
                                    {

                                    }
                                }
                            }
                        }
                    }
                }

                $childInnerDir = opendir($root.'/'.$file.'/');
                //$i_count1 = 0;
                //$i_need1 = 3;
                while($childFile= readdir($childInnerDir))
                {
                    // if($i_count1>=$i_need1) {break;}
                    if (is_dir($root . '/' . $file . '/' . $childFile) && $childFile != '.' && $childFile != '..')
                    {
                        $innerChildFile = $root . '/' . $file . '/' . $childFile . '/index.php';
                        $innerLines = file($innerChildFile);
                        $section2_title = "";

                        foreach ($innerLines as $innerLine_num => $innerLine)
                        { // разбиваем код открытых файлов
                            $innerRe = '/(?<=SetTitle\(").*(?="\))/su'; // регулярное выражение, извлекаем содержимое функции SetTitle каждого файла
                            $innerStr = $innerLine;
                            preg_match_all($innerRe, $innerStr, $innerMatches, PREG_SET_ORDER, 0);
                            if(strlen($innerMatches[0][0])>0)
                            {
                                $section2_title = $innerMatches[0][0];
                            }
                        }//foreach ($innerLines as $innerLine_num => $innerLine)

                        $section2_url  = '/' . $file . '/' . $childFile . '/';
                        echo 'Добавили подраздел - ' . $section2_title . ' ' . $section2_url . ' для основного раздел id - ' . $ID . '</br>';


                        $section2_SiteMapSeo = 'https://travelmarket.ru/' . $file . '/' . $childFile . '/index.php';
                        $arMTags1 = get_meta_tags($section2_SiteMapSeo);
                        header('Content-Type: text/html; charset=utf-8');

                        $bs1 = new CIBlockSection;
                        $arFields = Array(
                            "ACTIVE" => "Y",
                            "IBLOCK_SECTION_ID" => $ID,
                            "IBLOCK_ID" => 6,
                            "NAME" => $section2_title,
                            "UF_TITLE" => $section2_title,
                            "UF_URL"=>$section2_url,
                            "UF_SEO_DESCRIPTION" =>  (isset($arMTags1['description']) ? $arMTags1['description'] : 'нет данных'),
                            "UF_SEO_KEYWORDS" => (isset($arMTags1['keywords']) ? $arMTags1['keywords'] : 'нет данных'),
                            "UF_COUNT_LETTER" => strlen($innerChildFile)
                        );
                        $ID1 = $bs1->Add($arFields);

                        if($ID1>0) {
                            if($childFile == 'offers'){
                                $arrTreeCatalog = array();
                                $arFilter = ['IBLOCK_ID' => 32, 'ACTIVE' => 'Y'];
                                $arSelect = [ 'ID', 'NAME', 'DATE_ACTIVE_FROM', 'CODE', 'DETAIL_TEXT'];
                                $resProduct = CIBlockElement::GetList(array(),$arFilter,false,false,$arSelect);
                                while($itemResProduct = $resProduct->Fetch())
                                {
                                    $arrTreeCatalog[$itemResProduct['ID']] = array('NAME'=>$itemResProduct['NAME'],'URL'=>'/catalog/offers/?page='.$itemResProduct['ID']);
                                }
                                if(count($arrTreeCatalog)>0)
                                {
                                    foreach ($arrTreeCatalog as $sectionItem)
                                    {
                                        $resSEOOffElement = array();
                                        $rsOffElement = CIBlockElement::GetList(array(), array("IBLOCK_ID"=>$IBLOCK_ID, "ACTIVE"=>"Y"), false);
                                        if($arOffElement = $rsOffElement->GetNext()) {
                                            $ipropValues = new \Bitrix\Iblock\InheritedProperty\SectionValues($arOffElement["IBLOCK_ID"], $itemResProduct['ID']);
                                            $resSEOOffElement = $ipropValues->getValues();

                                        }

                                        $iblockOffElementbs = new CIBlockElement;

                                        $PROP = array();
                                        $PROP['SEO_TITLE'] = $sectionItem['NAME'];  // свойству с кодом 12 присваиваем значение "Белый"
                                        $PROP['URL'] = $section2_url . $sectionItem['CODE'] . '/';
                                        $PROP['SEO_KEYWORDS'] = $resSEOOffElement['ELEMENT_META_KEYWORDS'];
                                        $PROP['SEO_DESCRIPTION'] = $resSEOOffElement['ELEMENT_META_DESCRIPTION'];
                                        $PROP['COUNT_LETTER'] = strlen($itemResProduct['DETAIL_TEXT']);

                                        $arFields = Array(
                                            "ACTIVE" => "Y",
                                            "IBLOCK_SECTION_ID" => $ID1,
                                            "IBLOCK_ID" => 6,
                                            "NAME" => $sectionItem['NAME'],
                                            "PROPERTY_VALUES"=> $PROP
                                        );
                                        $iblockOffElementID = $iblockOffElementbs->Add($arFields);
                                        if ($iblockOffElementID > 0)
                                        {
                                            /*
                                            ?>
                                            <p class="siteMapThirdLevelDir" style="margin-left:60px;padding-top: 10px;margin-top: -30px;"> --element-- <?=$sectionItem['NAME']?> -- <a style="color: green;" href="<?=$sectionItem['URL']?>"><?=$sectionItem['URL']?></a></p>
                                            <?*/

                                        }
                                    }
                                }

                            }

                            echo 'Добавили подраздел - ' . $section2_title . ' ' . $section2_url . ' с id - ' . $ID1 . '</br>';

                            $childInnerSecondDir = opendir($root . '/' . $file . '/' . $childFile . '/');
                            while ($childSecondFile = readdir($childInnerSecondDir)) {
                                if (is_dir($root . '/' . $file . '/' . $childFile . '/' . $childSecondFile) && $childSecondFile != '.' && $childSecondFile != '..') {

                                    $innerSecondChildFile = $root . '/' . $file . '/' . $childFile . '/' . $childSecondFile . '/index.php';
                                    $innerSecondLines = file($innerSecondChildFile);
                                    $section3_title = "";

                                    foreach ($innerSecondLines as $innerSecondLine_num => $innerSecondLine)
                                    { // разбиваем код открытых файлов
                                        $innerSecondRe = '/(?<=SetTitle\(").*(?="\))/su'; // регулярное выражение, извлекаем содержимое функции SetTitle каждого файла
                                        $innerSecondStr = $innerSecondLine;
                                        preg_match_all($innerSecondRe, $innerSecondStr, $innerSecondMatches, PREG_SET_ORDER, 0);
                                        $innerSecondMatches = $innerSecondMatches[0][0];
                                        if (strlen($innerSecondMatches[0][0]) > 0)
                                        {
                                            $section3_title = $innerSecondMatches[0][0];
                                        }
                                    }
                                    $section3_url  = '/' . $file . '/' . $childFile . '/'. $childSecondFile . '/';
                                    echo 'Добавили подраздел - ' . $section3_title . ' ' . $section3_url . ' для основного раздел id - ' . $ID1 . '</br>';

                                    $section3_SiteMapSeo = 'https://fin.market/' . $file . '/' . $childFile . '/index.php';
                                    $arMTags2 = get_meta_tags($section3_SiteMapSeo);
                                    header('Content-Type: text/html; charset=utf-8');


                                    $bs2 = new CIBlockSection;
                                    $arFields = Array(
                                        "ACTIVE" => "Y",
                                        "IBLOCK_SECTION_ID" => $ID1,
                                        "IBLOCK_ID" => 6,
                                        "NAME" => $section3_title,
                                        "UF_TITLE" => $section3_title,
                                        "UF_URL"=> $section3_url,
                                        "UF_SEO_DESCRIPTION" =>  (isset($arMTags2['description']) ? $arMTags2['description'] : 'нет данных'),
                                        "UF_SEO_KEYWORDS" => (isset($arMTags2['keywords']) ? $arMTags2['keywords'] : 'нет данных'),
                                        "UF_COUNT_LETTER" => strlen($innerSecondChildFile)

                                    );
                                    $ID2 = $bs2->Add($arFields);
                                    if($ID2>0)
                                    {

                                        echo 'Добавили подраздел - ' . $section3_title . ' ' . $section3_url . ' с id - ' . $ID2 . '</br>';
                                    }

                                    // выводим значение SetTitle
                                }
                            }
                        }
                        //$i_count1++;
                        // выводим значение SetTitle
                    }//if (is_dir($root . '/' . $file . '/' . $childFile) && $childFile != '.' && $childFile != '..')
                }//while($childFile= readdir($childInnerDir))
            }//if($ID>0)
            //$i_count++;
        }
    }
}
?>
