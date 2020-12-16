<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
		<div class="up"></div>
		<footer>
			<div class="container">
				<div class="footer_wrap">	
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
							"PATH" => "/include/social.php"
							),
							false
						);?>
						
					</div>

					<div class="footer_desc">
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
					<div class="footer_feedback">				
						<a class="send_error" href="mailto:mail@travelmarket.ru?subject=Ошибка на странице&body=travelmarket.ru<?=$APPLICATION->GetCurPage(false);?>">Сообщить об ошибке</a>
						<a  class="mail_link" href="mailto:mail@travelmarket.ru" target="_blank">Связаться с нами</a>
					</div>
					
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
					
					<div class="footer_feedback_mob">
						<a class="send_error" href="mailto:mail@u-travell.ru?subject=Ошибка на странице&body=travelmarket.ru<?=$APPLICATION->GetCurPage(false);?>">Сообщить об ошибке</a>
					
						<a  class="mail_link" href="mailto:mail@travelmarket.ru" target="_blank">Связаться с нами</a>
					</div>
					
				</div>				
			</div>

            <!--метрика>-->
            <div class="container metrics">
               <!-- <a class="metr"-->

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




                <!-- Yandex.Metrika informer -->
                <a href="https://metrika.yandex.ru/stat/?id=53037952&amp;from=informer"
                   target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/53037952/3_1_FFFFFFFF_FFFFFFFF_0_pageviews"
                                                       style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" /></a>
                <!-- /Yandex.Metrika informer -->

                <!-- Yandex.Metrika counter -->
                <script type="text/javascript" >
                    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
                        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
                    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

                    ym(53037952, "init", {
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                </script>
                <noscript><div><img src="https://mc.yandex.ru/watch/53037952" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
                <!-- /Yandex.Metrika counter -->


                <!--LiveInternet counter--><script type="text/javascript">
                    document.write('<a href="//www.liveinternet.ru/click" '+
                        'target="_blank"><img src="//counter.yadro.ru/hit?t11.6;r'+
                        escape(document.referrer)+((typeof(screen)=='undefined')?'':
                            ';s'+screen.width+'*'+screen.height+'*'+(screen.colorDepth?
                            screen.colorDepth:screen.pixelDepth))+';u'+escape(document.URL)+
                        ';h'+escape(document.title.substring(0,150))+';'+Math.random()+
                        '" alt="" title="LiveInternet: показано число просмотров за 24'+
                        ' часа, посетителей за 24 часа и за сегодня" '+
                        'border="0" width="88" height="31"><\/a>')
                </script><!--/LiveInternet-->


                <a href="https://webmaster.yandex.ru/siteinfo/?site=travelmarket.ru"><img width="88" height="31" alt="" border="0" src="https://yandex.ru/cycounter?travelmarket.ru&theme=light&lang=ru"/></a>

                <!-- Top100 (Kraken) Widget -->
                <span id="top100_widget"></span>
                <!-- END Top100 (Kraken) Widget -->

                <!-- Top100 (Kraken) Counter -->
                <script>
                    (function (w, d, c) {
                        (w[c] = w[c] || []).push(function() {
                            var options = {
                                project: 6984556,
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
                    <img src="//counter.rambler.ru/top100.cnt?pid=6984556" alt="Топ-100" />
                </noscript>
                <!-- END Top100 (Kraken) Counter -->



                </a>
            </div>
        </footer>
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	
	
	<!--<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>-->
	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/highlight.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

	<!--<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>-->
	<!--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>-->
	<!--<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/init.js"></script>-->
	
	<!--<script src="<?=SITE_TEMPLATE_PATH?>/js/fm.revealator.jquery.js"></script>-->
	<? $APPLICATION->AddHeadScript("/local/templates/general_2/js/owl.carousel.min.js"); ?>
<!--<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/owl.carousel.min.js"></script>-->	
	<? $APPLICATION->AddHeadScript("/local/templates/general_2/js/jquery.mousewheel.min.js"); ?>
	<? $APPLICATION->AddHeadScript("https://unpkg.com/swiper/swiper-bundle.min.js"); ?>
	<script src="/local/templates/general_2/js/jquery.touchSwipe.min.js"></script>
	<?php if($curPage != '/ekskursii/'):?>
	<script>
		var lastScrollTop = 0;
		$("body").on('click', '[href*="#"]', function(e)
		{
			var st = $(this.hash).offset().top;
			if (st > lastScrollTop){
			  if ($("#menuheader").attr("class").toString()=="header")
			  {
				$('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - 180 }, 1000);
			  }
			  else
			  {
				$('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - 60 }, 1000);
              }

		   } else {
			  $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - 180 }, 1000);
		   }
		   lastScrollTop = st;
		   e.preventDefault();
		});

       /*(function(w,d,u){
               var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
               var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
       })(window,document,'https://cdn.bitrix24.ru/b4834481/crm/site_button/loader_4_4p8r2s.js');*/
	   function Burgmenu(el)
	   { 
			var cl_n = el.className;
			el.className='';
			if (cl_n == "burger-open") el.className='burger-close';
			else el.className='burger-open';
       }
		AOS.init({startEvent: 'DOMContentLoaded', offset: 100,});
	</script>
	<?php endif;?>
	<?
	//$frame = new \Bitrix\Main\Page\FrameBuffered("cookie_fixed_area");
	// $frame->begin();
		function getRealIP()
		{
		   $realip;
		   if (!is_null($realip))
		   {
			  return $realip;
		   }
		
		   if (isset($_SERVER))
		   {
			  if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER))
			  {
				 $realip = current(preg_grep(
					"/^(10|172\\.16|192\\.168)\\./",
					array_map('trim', explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])),
					PREG_GREP_INVERT
				 ));
			  }
			  $realip = $realip?:@$_SERVER['HTTP_CLIENT_IP']?:@$_SERVER['REMOTE_ADDR']?:NULL;
			  return $realip?:$realip = '0.0.0.0';
			}
		}
		if(ERROR_404=='Y')
		{

			CModule::IncludeModule('iblock'); 
			$ip = getRealIP();
			$geoResult = \Bitrix\Main\Service\GeoIp\Manager::getDataResult($ip, "ru");
			$geolocation = "IP - ".$ip."  ".$geoResult->getGeoData()->countryName." ".$geoResult->getGeoData()->regionName." ".$geoResult->getGeoData()->cityName;
			$refererHref = $APPLICATION->GetCurPageParam();


            $startRedirect = true;

            $arFilter = ['IBLOCK_ID' => 7, 'ACTIVE' => 'Y'];
            $arSelect = [ 'ID', 'NAME'];
            $resException = CIBlockElement::GetList(array(),$arFilter,false,false,$arSelect);
            while($arException=$resException->Fetch())
            {
                $posException = strpos($refererHref, $arException['NAME']);
                if($posException!==false)
                {
                    $startRedirect = false;
                    break;
                }//if($posException!==false)
            }// while($arException=$resException->Fetch())

            if($startRedirect==true)
            {
 				$el = new CIBlockElement;
				$arLoadProductArray = Array(
                	"IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
                	"IBLOCK_ID" => 5,
                	"NAME" => $refererHref,
                	"ACTIVE" => "Y",            // активен
            	);
            	$PRODUCT_ID = $el->Add($arLoadProductArray);
			 	$arEventFields = array(
						"RS_DATE_CREATE" => date("Y-m-d H:i:s"),
						"RS_STAT_GUEST_ID" => $geolocation,
						"RS_STAT_SESSION_ID" => $refererHref
			  	);
			  	CEvent::Send('FORM_FILLING_ERROR_404', 's1', $arEventFields, 'N', 48);
                LocalRedirect("/");
			}
			else
            {
                LocalRedirect("/");
            }
		}
	?>
    <script async src="https://fin.market/local/lib/capture-form.js"></script>
		

	</body>
</html>