<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta name="robots" content="noindex, nofollow"/>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle()?></title>
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap&subset=cyrillic,cyrillic-ext" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap&subset=cyrillic-ext" rel="stylesheet"> 
		<link href="<?=SITE_TEMPLATE_PATH?>/normalize.css" rel="stylesheet">
		<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/fm.revealator.jquery.css">
	</head>
	
	<body>
	<?$APPLICATION->ShowPanel();?>
		<header>				
			<nav> 
				<div class="burger">
					<span></span>
					<span></span>
					<span></span>
				</div>			
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu", 
					"horizontal_multilevel1", 
					array(
						"ROOT_MENU_TYPE" => "top",
						"MAX_LEVEL" => "2",
						"CHILD_MENU_TYPE" => "left",
						"USE_EXT" => "N",
						"MENU_CACHE_TYPE" => "A",
						"MENU_CACHE_TIME" => "36000000",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"MENU_CACHE_GET_VARS" => array(
						),
						"COMPONENT_TEMPLATE" => "horizontal_multilevel1",
						"DELAY" => "N",
						"ALLOW_MULTI_SELECT" => "Y",
						"MENU_THEME" => "site"
					),
					false,
					array(
						"ACTIVE_COMPONENT" => "Y"
					)
				);?>
			</nav>
		</header>


















