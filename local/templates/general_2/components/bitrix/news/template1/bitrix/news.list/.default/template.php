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
<?$isAjax = (isset($_GET["AJAX_REQUEST"]) && $_GET["AJAX_REQUEST"] == "Y");?>
<?if($arResult['ITEMS']):?>
	<?if($_REQUEST["IS_AJAX"] == "Y")
{
		$APPLICATION->RestartBuffer();
}?>
	<?if(!($_REQUEST["IS_AJAX"] == "Y")):?>
	<div id="ajax-cont" class="ajax-cont_list">
<div class="news-list">
<?endif;?>



<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>



<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="items row ajax-cont_items">
				<?foreach($arItem['ITEMS'] as $key => $arItem):?>
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
			</div>
			<script>
	$(function(){
		let stateobj = {};
		///let flag = '<?//=(!empty($_GET['tags'])) ? "Y" : "N";?>';
		//if (flag == 'Y') {
		//	$("#ajax-menu").load("/articles/ #ajax-menu > *");
		//}
        // zenColours();
		// $(".sidearea a").on("click", function(e){
		// 	let url = $(this).attr("href");
  //           zenColours();
		// 	$( "#ajax-cont" ).load( url + " #ajax-cont > *" );
		// 	history.pushState(stateobj, "page", url);
		// 	//console.log(url);
		// 	e.preventDefault();
  //           zenColours();
		// 	return false;
		// });
		// $(window).on("popstate", function(){
		// 	//console.log(window.location);
		// 	let url = window.location;
		// 	$( "#ajax-cont" ).load( url + " #ajax-cont > *" );
  //           zenColours();
		// });
	});
</script>
<?endforeach;?>

	

<?/*?><?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?><?*/?>
<div class="empty-el"></div>

</div>
<div class="bottom_nav lazy-hidden" <?=($isAjax ? "style='display: none; '" : "border-style: none; '");?>>
	<?if( $arParams["DISPLAY_BOTTOM_PAGER"] == "Y" ){?>
		<?=$arResult["NAV_STRING"]?>
	<?}?>
</div>
	<?if(!$isAjax):?>
		</div>
	</div>
	<?endif;?>
<?endif;?>
<script>
$(function() {
    var load_more = false;

    $(window).scroll(function() {
        if($("#ajax_next_page").length && !load_more) {
            var url = $("#ajax_next_page").attr("href");
            var offset_button = $("#ajax_next_page").offset();
            if($(this).scrollTop() >= offset_button.top - $(window).height()) {
				setTimeout(100);
                load_more = true;
                $.ajax({
                    url: url,
                    type: "POST",
                    data: {IS_AJAX: 'Y'},
                    success: function(data) {
                        $("#ajax_next_page").after(data);
						$("#ajax_next_page").remove();
					
                        load_more = false;
                    }
                });
            }
        }
    });
});
</script>
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
	
	
//     (function (BX) {
//         BX.ready(function () {
			
//             $('.sbr_tags').click(function (e) {
//                 e.preventDefault();
// 				$('.news_list_block .items .news-item').removeAttr("style");
// 			});
// 			var visibleCount = 0;
// 			function getCount(){
// 				visibleCount = 0;
// 					$('.news-item').each(function () {
					
// 						var el =$(this);

// 						if($(el).css("display")!="none"){ 
// 							visibleCount++;
					
// 					}    
			
// 					if (visibleCount == 0){
// 						$(".empty-el").text("Извините, раздел находится в разработке");
// 						//$("font.text").hide();
// 					}else{
// 						//$("font.text").show();		
// 						$(".empty-el").text("") 
// 					} 
				
// 				});
// 	}
//             $('.search-tags-cloud a').click(function (e) {
// 				e.preventDefault();
				

//                 var myHref = $(this);
//                 BX.ajax.loadJSON(
//                     '<?//=$APPLICATION->GetCurPage()?>',
// 					{'TYPE': 'REPORT_AJAX', 'NAME': myHref.html()},
					
//                     function (data){
					
					
					
					
					
					
//                         $('.news-item small').each(function () {
							
//                             if($(this).html().indexOf(data['NAME'])>-1){
//                                 //оставляем
// 								$(this).parent().parent().removeAttr('style');
								
// 							}else{
//                                 //скрыываем
// 								$(this).parent().parent().attr('style','display:none;');
								
							
				
// 							}
							
// 													});
						
// 						$('body,html').animate({scrollTop: 0}, 400);
// 						getCount()
// 					},
									
// 				);
			
				
				
				

// 			});
			
//         });
//     })(BX);
// </script>
