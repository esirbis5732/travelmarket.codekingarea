<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="menu_footer">
 <li>МЕНЮ</li>


 	<?if(CModule::IncludeModule("iblock"))
    	{
       	 $id_block=9;
       	 $section_id = 0;
       	 $items = GetIBlockElementList($id_block, $section_id, Array("SORT"=>"ASC",));
       		 while($arItem = $items->GetNext())
        		{
	?>
	
		<?if($arItem["ACTIVE_FROM"] <= date('d.m.Y') && date('d.m.Y')<=$arItem["ACTIVE_TO"]){?>
		 <li><a href="<?=$arItem["CODE"]?>"><?=$arItem["NAME"]?></a></li>  
		<?}?>
	<?
        }
		}
	?>
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li><a href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?>

</ul>
<?endif?>