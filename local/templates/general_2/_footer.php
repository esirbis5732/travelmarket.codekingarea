<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
		<div class="up"></div>
		<footer>
				<div class="container">			
					<div class="logo_wrap">
						<div class="logo_footer">
							<?$APPLICATION->IncludeComponent(
							"bitrix:main.include", 
							"template1", 
							array(
								"AREA_FILE_SHOW" => "file",
								"AREA_FILE_SUFFIX" => "inc",
								"EDIT_TEMPLATE" => "standard.php",
								"COMPONENT_TEMPLATE" => "template1",
								"AREA_FILE_RECURSIVE" => "Y",
								"PATH" => "/include/logo_footer.php"
							),
							false
							);?>
						</div>
						<?$APPLICATION->IncludeComponent(
						"bitrix:main.include", 
						"template1", 
						array(
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "inc",
							"EDIT_TEMPLATE" => "standard.php",
							"COMPONENT_TEMPLATE" => "template1",
							"AREA_FILE_RECURSIVE" => "Y",
							"PATH" => "/include/footer_desc.php"
						),
						false
						);?>
						<div class="container3">
							<?$APPLICATION->IncludeFile(
								SITE_DIR."iclude/textfoot1.php",
								array(),
								array(
									"MODE" => "html"
								)
							);?>
						</div>
						<?$APPLICATION->IncludeFile(
								SITE_DIR."iclude/textfoot2.php",
								array(),
								array(
									"MODE" => "text"
								)
						);?>			
						<div class="subscribe_wrap">
							<?$APPLICATION->IncludeComponent("bitrix:sender.subscribe", "footer", Array(
								"AJAX_MODE" => "N",	// Включить режим AJAX
									"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
									"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
									"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
									"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
									"CACHE_TIME" => "3600",	// Время кеширования (сек.)
									"CACHE_TYPE" => "A",	// Тип кеширования
									"CONFIRMATION" => "Y",	// Запрашивать подтверждение подписки по email
									"HIDE_MAILINGS" => "N",	// Скрыть список рассылок, и подписывать на все
									"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
									"SHOW_HIDDEN" => "N",	// Показать скрытые рассылки для подписки
									"USER_CONSENT" => "Y",	// Запрашивать согласие
									"USER_CONSENT_ID" => "0",	// Соглашение
									"USER_CONSENT_IS_CHECKED" => "Y",	// Галка по умолчанию проставлена
									"USER_CONSENT_IS_LOADED" => "N",	// Загружать текст сразу
									"USE_PERSONALIZATION" => "Y",	// Определять подписку текущего пользователя
									"COMPONENT_TEMPLATE" => ".default"
								),
								false
							);?>
						</div>
						<div class="container2">
						<?$APPLICATION->IncludeFile(
								SITE_DIR."iclude/textfoot.php",
								array(),
								array(
									"MODE" => "html"
								)
							);?>
						</div>
						<ul class="social">
							<?$APPLICATION->IncludeComponent(
							"bitrix:main.include", 
							"template1", 
							array(
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "inc",
							"EDIT_TEMPLATE" => "standard.php",
							"COMPONENT_TEMPLATE" => "template1",
							"AREA_FILE_RECURSIVE" => "Y",
							"PATH" => "/include/social.php"
							),
							false
							);?>
						</ul>
					</div>		
					<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"footer_menu_1", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "bottom",
		"COMPONENT_TEMPLATE" => "footer_menu_1",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_THEME" => "site",
		"ROOT_MENU_TYPE" => "bottom",
		"USE_EXT" => "N"
	),
	false
);?>
					<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"footer_mtnu_2", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "bottom2",
		"COMPONENT_TEMPLATE" => "footer_mtnu_2",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "bottom2",
		"USE_EXT" => "N"
	),
	false
);?>
				</div>
				<div class="container">
					<a class="send_error" href="mailto:mail@u-travell.ru?subject=Ошибка на странице&body=travelmarket.ru<?=$APPLICATION->GetCurPage(false);?>">Сообщить об ошибке</a>
				</div>
            </div>

            <!--метрика>-->




            <!-- Rating Mail.ru counter -->
            <script type="text/javascript">
                var _tmr = window._tmr || (window._tmr = []);
                _tmr.push({id: "3162399", type: "pageView", start: (new Date()).getTime()});
                (function (d, w, id) {
                    if (d.getElementById(id)) return;
                    var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
                    ts.src = "https://top-fwz1.mail.ru/js/code.js";
                    var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
                    if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
                })(document, window, "topmailru-code");
            </script><noscript><div>
                    <img src="https://top-fwz1.mail.ru/counter?id=3162399;js=na" style="border:0;position:absolute;left:-9999px;" alt="Top.Mail.Ru" />
                </div></noscript>
            <!-- //Rating Mail.ru counter -->
            <!-- Rating Mail.ru logo -->
            <a href="https://top.mail.ru/jump?from=3162399">
                <img src="https://top-fwz1.mail.ru/counter?id=3162399;t=479;l=1" style="border:0;" height="31" width="88" alt="Top.Mail.Ru" /></a>
            <!-- //Rating Mail.ru logo -->





               

                <!--LiveInternet counter--><script type="text/javascript">
                    document.write('<a href="//www.liveinternet.ru/click" '+
                        'target="_blank"><img src="//counter.yadro.ru/hit?t12.6;r'+
                        escape(document.referrer)+((typeof(screen)=='undefined')?'':
                            ';s'+screen.width+'*'+screen.height+'*'+(screen.colorDepth?
                            screen.colorDepth:screen.pixelDepth))+';u'+escape(document.URL)+
                        ';h'+escape(document.title.substring(0,150))+';'+Math.random()+
                        '" alt="" title="LiveInternet: показано число просмотров за 24'+
                        ' часа, посетителей за 24 часа и за сегодня" '+
                        'border="0" width="88" height="31"><\/a>')
                </script><!--/LiveInternet-->
                <a href="https://webmaster.yandex.ru/siteinfo/?site=u-travell.ru"><img width="88" height="31" alt="" border="0" src="https://yandex.ru/cycounter?u-travell.ru&theme=light&lang=ru"/></a>

                <!-- Top100 (Kraken) Widget -->
                <span id="top100_widget"></span>
                <!-- END Top100 (Kraken) Widget -->

                <!-- Top100 (Kraken) Counter -->
                <script>
                    (function (w, d, c) {
                        (w[c] = w[c] || []).push(function() {
                            var options = {
                                project: 6897176,
                                element: 'top100_widget',
                            };
                            try {
                                w.top100Counter = new top100(options);
                            } catch(e) { }
                        });
                        var n = d.getElementsByTagName("script")[0],
                            s = d.createElement("script"),
                            f = function () { n.parentNode.insertBefore(s, n); };
                        s.type = "text/javascript";
                        s.async = true;
                        s.src =
                            (d.location.protocol == "https:" ? "https:" : "http:") +
                            "//st.top100.ru/top100/top100.js";

                        if (w.opera == "[object Opera]") {
                            d.addEventListener("DOMContentLoaded", f, false);
                        } else { f(); }
                    })(window, document, "_top100q");
                </script>
                <noscript>
                    <img src="//counter.rambler.ru/top100.cnt?pid=6897176" alt="Топ-100" />
                </noscript>
                <!-- END Top100 (Kraken) Counter -->



                </a>
            </div>
        </footer>
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<!--<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>-->
	
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/highlight.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
	
	<!--<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/init.js"></script>-->
	
	<!--<script src="<?=SITE_TEMPLATE_PATH?>/js/fm.revealator.jquery.js"></script>-->
	
	<script>
       (function(w,d,u){
               var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
               var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
       })(window,document,'https://cdn.bitrix24.ru/b4834481/crm/site_button/loader_4_4p8r2s.js');
	   function Burgmenu(el)
	   { 
			var cl_n = el.className;
			el.className='';
			if (cl_n == "burger-open") el.className='burger-close';
			else el.className='burger-open';
       }
		AOS.init({startEvent: 'DOMContentLoaded', offset: 100,});
	</script>
	<?
	//$frame = new \Bitrix\Main\Page\FrameBuffered("cookie_fixed_area");
	// $frame->begin();
		// function getRealIP()
		// {
		//    $realip;
		//    if (!is_null($realip))
		//    {
		// 	  return $realip;
		//    }
		
		//    if (isset($_SERVER))
		//    {
		// 	  if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER))
		// 	  {
		// 		 $realip = current(preg_grep(
		// 			"/^(10|172\\.16|192\\.168)\\./",
		// 			array_map('trim', explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])),
		// 			PREG_GREP_INVERT
		// 		 ));
		// 	  }
		// 	  $realip = $realip?:@$_SERVER['HTTP_CLIENT_IP']?:@$_SERVER['REMOTE_ADDR']?:NULL;
		// 	  return $realip?:$realip = '0.0.0.0';
		// 	}
		// }

	?>
	</body>
</html>