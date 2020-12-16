<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тест_3");
$APPLICATION->SetAdditionalCSS("/local/templates/general_2/js/owl.carousel.css");
?>
<main class="index test_3" id="index">

	

<div class="container">
		<h2>Куда поехать отдыхать?</h2>
		<h4>Лишь бы повод найти :)</h4>
	<div class="pretext">		
		<ul class="pretext_tags">
			<li class="pretext_tags_item js_tab_trigger active" data-tab="1">
				<h3>Где отдохнуть летом?</h3>
			</li>
			<li class="pretext_tags_item js_tab_trigger" data-tab="2">
				<h3>Куда поехать зимой?</h3>
			</li>		 
		</ul>
		<ul class="pretext_content">
			<li class="pretext_content_item js_tab_content active" data-tab="1">
				<div class="pretext_content_img">
					<img alt="Куда поехать отдыхать на майские праздники?" src="<?=SITE_TEMPLATE_PATH?>/img/mai.png">
				</div>								
			</li>
			<li class="pretext_content_item js_tab_content" data-tab="2">
				<div class="pretext_content_img">
					<img alt="Куда поехать отдыхать зимой?" src="<?=SITE_TEMPLATE_PATH?>/img/where_to_go_background_big.png">
				</div>				
			</li>		 
		</ul>
		<div class="carousel_wrap">
			<div id="owl-carousel_3" class="pretext_countries owl-carousel owl-theme owl-loaded js_tab_content_dop active" data-tab="11" >
				<div class="pretext_countries_item">
					<a href="/napravleniya/cyprus/">			
						<img src="<?=SITE_TEMPLATE_PATH?>/img/cyprus_small.png" alt=""> 
						<h3>Кипр</h3>
					</a>					
				</div>
				<div class="pretext_countries_item">
					<a href="/napravleniya/turkey/">			
						<img src="<?=SITE_TEMPLATE_PATH?>/img/turkey_small.png" alt=""> 
						<h3>Турция</h3>
					</a>					
				</div>
				<div class="pretext_countries_item">
					<a href="/napravleniya/tunisia/">			
						<img src="<?=SITE_TEMPLATE_PATH?>/img/tunisia_small.png" alt=""> 
						<h3>Тунис</h3>
					</a>					
				</div>
				<div class="pretext_countries_item">
					<a href="/napravleniya/dominicana/">		
						<img src="<?=SITE_TEMPLATE_PATH?>/img/dominicana_small.png" alt=""> 
						<h3>Доминикана</h3>
					</a>					
				</div>
				<div class="pretext_countries_item">
					<a href="/napravleniya/jordan/">			
						<img src="<?=SITE_TEMPLATE_PATH?>/img/jordan_small.png" alt=""> 
						<h3>Иордания</h3>
					</a>					
				</div>
				<div class="pretext_countries_item">
					<a href="/napravleniya/israel/">			
						<img src="<?=SITE_TEMPLATE_PATH?>/img/israel_small.png" alt=""> 
						<h3>Израиль</h3>
					</a>					
				</div>
				<div class="pretext_countries_item">
					<a href="/napravleniya/egypt/">			
						<img src="<?=SITE_TEMPLATE_PATH?>/img/egypt_small.png" alt=""> 
						<h3>Египет</h3>
					</a>					
				</div>			
			</div>
			<div id="owl-carousel_4" class="pretext_countries owl-carousel owl-theme owl-loaded js_tab_content_dop" data-tab="12">
				<div class="pretext_countries_item">
					<a href="/napravleniya/thailand/">			
						<img src="<?=SITE_TEMPLATE_PATH?>/img/rest_thai_small.png" alt=""> 
						<h3>Таиланд</h3>
					</a>					
				</div>
				<div class="pretext_countries_item">
					<a href="/napravleniya/vietnam/">			
						<img src="<?=SITE_TEMPLATE_PATH?>/img/vietnam_small.png" alt=""> 
						<h3>Вьетнам</h3>
					</a>					
				</div>
				<div class="pretext_countries_item">
					<a href="/napravleniya/sri-lanka/">			
						<img src="<?=SITE_TEMPLATE_PATH?>/img/sri_lanka_small.png" alt=""> 
						<h3>Шри-Ланка</h3>
					</a>					
				</div>
				<div class="pretext_countries_item">
					<a href="/napravleniya/cuba/">			
						<img src="<?=SITE_TEMPLATE_PATH?>/img/cuba_small.png" alt=""> 
						<h3>Куба</h3>
					</a>					
				</div>
				<div class="pretext_countries_item">
					<a href="/napravleniya/oae/">			
						<img src="<?=SITE_TEMPLATE_PATH?>/img/uae_small.png" alt=""> 
						<h3>Эмираты</h3>
					</a>					
				</div>					
			</div>			
		</div>
	</div>
</div>	


</main>
 
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>