<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	
	<div class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
	
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
			<div class="news-item_img">
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
				<img
						class="preview_picture"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"						
						/></a>
			<?else:?>
				<img
					class="preview_picture"
					border="0"
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"				
					/>
			
			<?endif;?>
			</div>
		<?endif?>
		
		<div class="news-item_desc" data-href="<?=$arItem["DETAIL_PAGE_URL"]?>">
		
		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
		<?endif?>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><p><b><?echo $arItem["NAME"]?></b></p></a>
			<?else:?>
				<p><b><?echo $arItem["NAME"]?></b></p>
			<?endif;?>
		<?endif;?>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<div class="news_preview_text">
			<?echo $arItem["PREVIEW_TEXT"];?>
			</div>
		<?endif;?>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<!--<div style="clear:both"></div>-->
		<?endif?>
		<?foreach($arItem["FIELDS"] as $code=>$value):?>
			<small>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
			</small><br />
		<?endforeach;?>
		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<small>
			<?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			</small><br />
		<?endforeach;?>		
		</div>
		
	</div>
	
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
<script src="https://cdn.rawgit.com/briangonzalez/rgbaster.js/b2fb235b/rgbaster.min.js"></script>
<script> 
	$(".news-item_desc").each(function(index, element){
	var img = "https://travelmarket.ru" + $(this).prev('.news-item_img').find('.preview_picture').attr('src');	
	var tut = $(this);		
		RGBaster.colors(img, {
		  // Не учитывать белый цвет
		  exclude: ['rgb(255,255,255)'],
		  success: function(payload) {
			 console.log(payload.dominant);  // Преобладающий цвет
			// console.log(payload.secondary); // Второй по популярности цвет
			// console.log(payload.palette);   // Палитра цветов (по умолчанию 30)
			// Устанавливаем фоновый цвет равный самому популярному.
			//tut.css( "background", payload.dominant);			
		  }			
		});	
	});


</script>
<script src="/local/templates/general_2/js/jquery.dotdotdot.min.js" type="text/javascript"></script>
<script>
$(".news_preview_text").dotdotdot({
	ellipsis: "...",
	wrap: "word",
	fallbackToLetter: true,
	after: null,
	watch: false,
	height: null,
	tolerance: 0,
	callback: function(isTruncated, orgContent){},
	lastCharacter: {
    remove: [" ", ",", ";", ".", "!", "?"],
    noEllipsis: []
  }
});
</script>
<script>
    (function (BX) {
        BX.ready(function () {
            $('.sbr_tags').click(function (e) {
                e.preventDefault();
                $('.news_list_block .news-item').removeAttr("style");
            });
            $('.search-tags-cloud a').click(function (e) {
                e.preventDefault();
                var myHref = $(this);
                BX.ajax.loadJSON(
                    '<?=$APPLICATION->GetCurPage()?>',
                    {'TYPE': 'REPORT_AJAX', 'NAME': myHref.html()},
                    function (data){
                        $('.news-item small').each(function () {
                            if($(this).html().indexOf(data['NAME'])>-1){
                                //оставляем
                                $(this).parent().parent().removeAttr('style');
                            }else{
                                //скрыываем
                                $(this).parent().parent().attr('style','display:none;');
                            }

                        });
                    },
                    function (data){
                    }
                );
            });
        });
    })(BX);
</script>
