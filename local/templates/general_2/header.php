<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
CJSCore::Init(array('jquery'));
?>
<?
define("SITE_SERVER_PROTOCOL", (CMain::IsHTTPS()) ? "https://" : "http://"); // Переменная определяет протокол, по которому работает ваш сайт
$curPage = $APPLICATION->GetCurPage(); // Получаем текущий адрес страницы
?>

<!DOCTYPE html>
<html lang="ru">
	<head>
		<!--<meta name="robots" content="noindex, nofollow"/>-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <!--<meta name="yandex-verification" content="5cd6ae31af5db150" />-->
		 <meta name="yandex-verification" content="097e8b0280f96382" />
		 <meta name="yandex-verification" content="1550bfefec84ef20" />
		<meta name="verify-admitad" content="d76d4286da" />
		<html xmlns:fb="https://ogp.me/ns/fb#">
		<link href="<?=SITE_TEMPLATE_PATH?>/normalize.css" rel="stylesheet">
		
		<?$APPLICATION->ShowHead();?>
		<link href="<?=SITE_TEMPLATE_PATH?>/add_style.css" rel="stylesheet">
		<title><?$APPLICATION->ShowTitle()?></title>
		<!--<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap&subset=cyrillic,cyrillic-ext" rel="stylesheet"> -->
		
		<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap&subset=cyrillic-ext" rel="stylesheet"> 
		<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
		
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap&subset=cyrillic-ext" rel="stylesheet"> 
		
		<meta property="og:url" content="<?=SITE_SERVER_PROTOCOL . SITE_SERVER_NAME . $curPage?>">
		<meta property="twitter:url" content="<?=SITE_SERVER_PROTOCOL . SITE_SERVER_NAME . $curPage?>">
		<meta property="og:type" content="website">
		<meta name="twitter:card" content="summary_large_image">
		<meta id="og-title" property="og:title" content="<?$APPLICATION->ShowProperty("title")?>">
		<meta property="twitter:title" content="<?$APPLICATION->ShowProperty("title")?>">
		<meta id="og-description" property="og:description" content="<?=$APPLICATION->ShowProperty("description")?>">
		<meta property="twitter:description" content="<?=$APPLICATION->ShowProperty("description")?>">
		<meta property="og:image" content="<?=$APPLICATION->ShowProperty("og:image")?>">
		<meta property="vk:image" content="<?=$APPLICATION->ShowProperty("vk:image")?>">
		<meta property="fb:image" content="<?=$APPLICATION->ShowProperty("fb:image")?>">
		<meta property="twitter:image" content="<?=$APPLICATION->ShowProperty("twitter:image")?>">
		<!--VK-PIXEL-START-->
		<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?162",t.onload=function(){VK.Retargeting.Init("VK-RTRG-427055-9WaN"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script>
		<noscript><img src="https://vk.com/rtrg?p=VK-RTRG-427055-9WaN" style="position:fixed; left:-999px;" alt=""/></noscript>
		<!--VK-PIXEL-END-->
		<!-- Facebook Pixel Code -->
		<script>
		 !function(f,b,e,v,n,t,s)
		 {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		 n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		 if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		 n.queue=[];t=b.createElement(e);t.async=!0;
		 t.src=v;s=b.getElementsByTagName(e)[0];
		 s.parentNode.insertBefore(t,s)}(window, document,'script',
		 'https://connect.facebook.net/en_US/fbevents.js');
		 fbq('init', '180618236480763');
		 fbq('track', 'PageView');
		</script>
		<noscript><img height="1" width="1" style="display:none"
		 src="https://www.facebook.com/tr?id=180618236480763&ev=PageView&noscript=1"
		/></noscript>
		<!-- End Facebook Pixel Code -->
		
		  
		<!--<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>-->
		<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/init.js"></script>
		
        <meta name="yandex-verification" content="2144dfb8a037f547" />
        <meta name="yandex-verification" content="528bd9518a04995a" />
        <meta name="yandex-verification" content="facac1b27c186b40" />
        <meta name="p:domain_verify" content="6e149213cd2879de82d4f1ddb48f19f2"/>
        <meta name="yandex-verification" content="1421221ce6b67469" />
	</head>
	
	<body>

	<?$APPLICATION->ShowPanel();?>
		<header id="menuheader" class="header">				
			<nav> 
				<div class="logo">
					<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"template1", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"COMPONENT_TEMPLATE" => "template1",
						"AREA_FILE_RECURSIVE" => "Y",
						"PATH" => "/include/logo.php"
					),
					false
					);?>
				</div>
				<!--<div class="winter_2020"> 
					<a href="https://u-travell.ru/napravleniya/kuda_poekhat_zimoy/">
					Зима 2020
					</a>				
				</div>-->
				<!--<ul class="social">
					<li class="vk"><a href="https://vk.com/u_travell" target="_blank" title="vk"><img src="/local/templates/general_2/img/vk.png"></a></li>				
					<li class="telegram"><a href="https://t.me/U_TRAVELL" target="_blank" title="telegram"><img src="/local/templates/general_2/img/telegram.png"></a></li>
					<li class="instagram"><a href="https://www.instagram.com/utravell2/" target="_blank" title="instagram"><img src="/local/templates/general_2/img/instagram.png"></a></li>
						
					<li class="ok"><a href="https://www.ok.ru/utravell" target="_blank" title="ok"><img src="/local/templates/general_2/img/ok.png"></a></li>
					<li class="facebook"><a href="https://www.facebook.com/utravell/" target="_blank" title="facebook"><img src="/local/templates/general_2/img/facebook.png"></a></li>						
					<li class="zen"><a href="https://zen.yandex.ru/profile/editor/id/5cc3023f13574e00b23c2b78" target="_blank" title="Яндекс Дзен"><img src="/local/templates/general_2/img/zen-icon.svg"></a></li>
				</ul>-->
				<div class="burger">
					<i class="burger-open" id="burgmenu" onclick="Burgmenu(this)"></i>
					<!--<span></span><span></span><span></span>-->
				</div>
				<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"horizontal_multilevel1", 
	array(
		"ROOT_MENU_TYPE" => "top",
		"MAX_LEVEL" => "4",
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
<span id="txt"></span>


















