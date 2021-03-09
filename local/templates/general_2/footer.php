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
	<script>
		  (function (BX) {
        BX.ready(function () {
			
            $('.sbr_tags').click(function (e) {
                e.preventDefault();
				$('.news_list_block .news-item').removeAttr("style");
			});
			var visibleCount = 0;
			function getCount(){
				visibleCount = 0;
					$('.news-item').each(function () {
					
						var el =$(this);

						if($(el).css("display")!="none"){ 
							visibleCount++;
					
					}    
			
					if (visibleCount == 0){
						$(".empty-el").text("Извините, раздел находится в разработке");
						//$("font.text").hide();
					}else{
						//$("font.text").show();		
						$(".empty-el").text("") 
					} 
				
				});
	}
            $('.search-tags-cloud a').click(function (e) {
				e.preventDefault();
				

                var myHref = $(this);
                BX.ajax.loadJSON(
                    '<?=$APPLICATION->GetCurPage()?>',
					{'TYPE': 'REPORT_AJAX', 'NAME': myHref.html()},
					
                    function (data){
                        $('.news-item small').each(function () {
							console.log (data['NAME']);
                            if($(this).html().indexOf(data['NAME'])>-1){
                                //оставляем
								$(this).parent().parent().removeAttr('style');
								
							}else{
                                //скрыываем
								$(this).parent().parent().attr('style','display:none;');
								
							
				
							}
							
													});
						
						// $('body,html').animate({scrollTop: 0}, 400);
						//getCount();
					},
					$('body,html').animate({scrollTop: 0}, 400)			
				);
			
				
				
				

			});
			
        });
    })(BX);

//#netwiz start ленивая загрузка сторис
    function scrollTracking(){
        var windowTop = $(window).scrollTop();
        var windowHeight = $(window).height();
        var footerPosition = $('footer').offset().top - 850;
        var footerHeight = $('footer').outerHeight();
        var documentHeight = $(document).height();
        //проверяем, дошла ли прокрутка до конца блока сторис (показался футер в видимой части экрана)
        if (windowTop + windowHeight >= footerPosition) {
            // показываем кнопку того, что мы загружаем следующую порцию статей
            $('.lazy-hidden .ajax_load_btn').css('visibility', 'visible');
            //крутим ее а-ля прелоадер
            setTimeout(50);
            //инициируем событие клика на кнопку загрузки доп статей
            $('.lazy-hidden .ajax_load_btn').trigger('click');
			// zenColours();
			
		}
		
    }
    //если у нас все еще есть скрытая кнопка "показать еще посты" (то есть они не закончились)
    if($('.lazy-hidden')) {
        $(window).on('scroll', function () {
            //раскрашиваем под дзен если загрузили новое
            // zenColours();
            //по скроллу проверяем, закончился ли у нас контент
			scrollTracking();
			
        });
		$('.module-pagination').css('display', 'none');
    }
    //#netwiz end ленивая загрузка сторис
	//#netwiz start автозагрузка баннера на страницах сторис
	</script>
	<!-- <script type="text/javascript" src="<?//=SITE_TEMPLATE_PATH?>/js/jquery-1.9.1.min.js"></script> -->
	<!--<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>-->
	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/highlight.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

	<!--<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>-->
	<!--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>-->
	<!--<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/init.js"></script>-->
	
	<!--<script src="<?=SITE_TEMPLATE_PATH?>/js/fm.revealator.jquery.js"></script>-->
	<? $APPLICATION->AddHeadScript("/local/templates/general_2/js/owl.carousel.min.js"); ?>
<!--<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/owl.carousel.min.js"></script>-->
<script src="/local/templates/general_2/js/swiper.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/cherry.lazy-load.js"></script>	
	<? $APPLICATION->AddHeadScript("/local/templates/general_2/js/jquery.mousewheel.min.js"); ?>
	<? $APPLICATION->AddHeadScript("https://unpkg.com/swiper/swiper-bundle.min.js"); ?>
	<script src="/local/templates/general_2/js/jquery.touchSwipe.min.js"></script>

	<script>
        let sectionsSwiper2 = new Swiper(".osen.swiper-container", {
            direction: 'horizontal',
            slidesPerView: 2,
            spaceBetween: 15,
			slidesPerGroup: 1,
			watchOverflow: true,
            mousewheel: true,
            breakpoints: {
                360: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    slidesPerGroup: 1,
                },
                860: {
                    slidesPerGroup: 1,
                },
                1199: {
                    slidesPerGroup: 1,
                }
            },
            freeMode: true,
            navigation: {
                nextEl: ('.swiper-button-next'),
                prevEl: ('.swiper-button-prev'),
            },
            watchOverflow: true,
		});
	var storiesSwiper = new Swiper('.swiper-container', {
        spaceBetween: 15,
        slidesPerGroup: 1,
		// slidesPerView: 3,
		initialSlide: -1,
		// slidesPerView: 2.7,
        slidesPerView: 6,
        watchOverflow: true,
        observer: true,
        freeMode: true,
		mousewheel: true,
		centerSlides:true,
        //width:580,
        
		// initialSlide:-2,
		// slidesOffsetBefore:-50,
		// slidesOffsetAfter:50,
        navigation: {
            nextEl: (' .swiper-button-next'),
            prevEl: ('.swiper-button-prev'),
        },
        breakpoints: {
            480: {
                slidesPerGroup: 1,
                freeMode: false,
                centeredSlides: true,
				slidesPerView: 1.85
				
            },
            890: {
                slidesPerGroup: 1,
                freeMode: false,
            },
            1023: {
                slidesPerGroup: 6,
            },
            1160: {
                slidesPerGroup: 7,
            }
        },
    });
    if ($(window).width() < 481) {
        if (storiesSwiper.isBeginning || storiesSwiper.isEnd) {
            storiesSwiper.params.centeredSlides = true;
        }
        else {
			
            storiesSwiper.params.centeredSlides = true;
        }
        storiesSwiper.update();
        storiesSwiper.on('slideChangeTransitionStart', function () {
            if (storiesSwiper.isBeginning || storiesSwiper.isEnd) {
				
                storiesSwiper.params.centeredSlides = true;
            }
            else {
		
                storiesSwiper.params.centeredSlides = true;
            }
            storiesSwiper.update();
        });
    }
	
	
	
	let sectionsSwiper = new Swiper(".swiper-container", {
            direction: 'horizontal',
            slidesPerView: 'auto',
            spaceBetween: 10,
			slidesPerGroup: 'auto',
			watchOverflow: true,
            mousewheel: true,
            breakpoints: {
                360: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    slidesPerGroup: 1,
                },
                860: {
                    slidesPerGroup: 1,
                },
                1199: {
                    slidesPerGroup: auto,
                }
            },
            freeMode: true,
            navigation: {
                nextEl: ('.swiper-button-next'),
                prevEl: ('.swiper-button-prev'),
            },
            watchOverflow: true,
		});
		
		let sectionsSwiper3 = new Swiper(".zima.swiper-container", {
            direction: 'horizontal',
            slidesPerView: 1,
            spaceBetween: 10,
			slidesPerGroup: 1,
			watchOverflow: true,
            mousewheel: true,
            breakpoints: {
                360: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    slidesPerGroup: 1,
                },
                860: {
                    slidesPerGroup: 1,
                },
                1199: {
                    slidesPerGroup: 1,
                }
            },
            freeMode: true,
            navigation: {
                nextEl: ('.swiper-button-next'),
                prevEl: ('.swiper-button-prev'),
            },
            watchOverflow: true,
		});
		let sectionsSwiper1 = new Swiper(".pod_bannerom.swiper-container", {
            direction: 'horizontal',
            slidesPerView: 2 ,
            spaceBetween: 10,
			slidesPerGroup: 1,
			watchOverflow: true,
            mousewheel: true,
            breakpoints: {
                360: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    slidesPerGroup: 1,
                },
                860: {
                    slidesPerGroup: 1,
                },
                1199: {
                    slidesPerGroup: 2,
                }
            },
            freeMode: true,
            navigation: {
                nextEl: ('.swiper-button-next'),
                prevEl: ('.swiper-button-prev'),
            },
            watchOverflow: true,
        });</script>
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
		// if(ERROR_404=='Y')
		// {

		// 	CModule::IncludeModule('iblock'); 
		// 	$ip = getRealIP();
		// 	$geoResult = \Bitrix\Main\Service\GeoIp\Manager::getDataResult($ip, "ru");
		// 	$geolocation = "IP - ".$ip."  ".$geoResult->getGeoData()->countryName." ".$geoResult->getGeoData()->regionName." ".$geoResult->getGeoData()->cityName;
		// 	$refererHref = $APPLICATION->GetCurPageParam();


        //     $startRedirect = true;

        //     $arFilter = ['IBLOCK_ID' => 7, 'ACTIVE' => 'Y'];
        //     $arSelect = [ 'ID', 'NAME'];
        //     $resException = CIBlockElement::GetList(array(),$arFilter,false,false,$arSelect);
        //     while($arException=$resException->Fetch())
        //     {
        //         $posException = strpos($refererHref, $arException['NAME']);
        //         if($posException!==false)
        //         {
        //             $startRedirect = false;
        //             break;
        //         }//if($posException!==false)
        //     }// while($arException=$resException->Fetch())

        //     if($startRedirect==true)
        //     {
 		// 		$el = new CIBlockElement;
		// 		$arLoadProductArray = Array(
        //         	"IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
        //         	"IBLOCK_ID" => 5,
        //         	"NAME" => $refererHref,
        //         	"ACTIVE" => "Y",            // активен
        //     	);
        //     	$PRODUCT_ID = $el->Add($arLoadProductArray);
		// 	 	$arEventFields = array(
		// 				"RS_DATE_CREATE" => date("Y-m-d H:i:s"),
		// 				"RS_STAT_GUEST_ID" => $geolocation,
		// 				"RS_STAT_SESSION_ID" => $refererHref
		// 	  	);
		// 	  	CEvent::Send('FORM_FILLING_ERROR_404', 's1', $arEventFields, 'N', 48);
        //         LocalRedirect("/");
		// 	}
		// 	else
        //     {
        //         LocalRedirect("/");
        //     }
		// }
	?>
    <script async src="https://fin.market/local/lib/capture-form.js"></script>
		

	</body>
</html>