<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<?php global $USER;?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.12/vue.min.js" integrity="sha512-BKbSR+cfyxLdMAsE0naLReFSLg8/pjbgfxHh/k/kUC82Hy7r6HtR5hLhobaln2gcTvzkyyehrdREdjpsQwy2Jw==" crossorigin="anonymous"></script>
<script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js" integrity="sha512-rMGGF4wg1R73ehtnxXBt5mbUfN9JUJwbk21KMlnLZDJh7BkPmeovBuddZCENJddHYYMkCh9hPFnPmS9sspki8g==" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sifter/0.5.4/sifter.min.js" integrity="sha512-B60IUvYpG4cibCeQ30J8k/+qtN+fxKAIENb3DL2DVdzIt76IDIynAt92chPEwlCuKejOt//+OZL61i1xsvCIDQ==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/microplugin/0.0.3/microplugin.min.js" integrity="sha512-7amIsiQ/hxbdPNawBZwmWBWPiwQRNEJlxTj6eVO+xmWd71fs79Iydr4rYARHwDf0rKHpysFxWbj64fjPRHbqfA==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/selectize.min.js" integrity="sha512-F7O0WjUWT+8qVnkKNDeXPt+uwW51fA8QLbqEYiyZfyG8cR0oaodl2oOFWODnV3zZvcy0IruaTosDiSDSeS9LIA==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.css" integrity="sha512-WUYSspsMSeZ5Rh9CMn8wP9W+8/1ukN1r0CJjw5ZNCCZkM49nig92GzbOur5CpoDcnT+4gVMbPZB5P3su7Z799Q==" crossorigin="anonymous" />
<script src="/lib/jquery-ui.min.js"></script>
<link rel="stylesheet" href="/lib/jquery-ui.css">
<script src="https://cdn.jsdelivr.net/npm/lvovich/dist/lvovich.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?//php see($arResult["CITIES"]);?>
<main id="main_app">
<div id="app-wrap">
	<div id="main_banner_wrap" class="container">
		<img src="/local/templates/general_2/img/excursions_background_big.png" alt="banner">
	</div>
	<div id="search-field" class="not-viz">
		<select data-placeholder="Поиск" id="chose-select" placeholder="Хочу посмотреть...">
			<option value="">Выберите город</option>
			<?/*php foreach($arResult["COUNTRIES"] as $country):*/ ?>
				<?php foreach($arResult["CITIES"] as $city):?>
			<?/*php if($city["COUNTRY_ID"] == $country["ID"]): */?>
			<option value="<?=$city["Sputnik"]?>|<?=$city["Tripster"]?>|<?=$city["Surprise_Me"]?>|<?=$city["NAME"]?>"><?=$city["NAME"]?></option>
			<?/*php endif;*/?>
				<?php endforeach;?>
			<?/*php endforeach;*/?>
		</select>
	</div>
	<div class="container title-block">	
		<h1>Самые интересные экскурсии по <span <?php if(isset($_GET['citysearch']) && $_GET['citysearch'] != ''):?>class="link-city"<?php endif;?>>всему миру</span><br> от ведущих операторов</h1>
					<div class="search_system_wrapper">		
						<div class="container">	
							<ul class="search_system_list">
								<li class="js_tab_trigger_1 logo_box_item active" data-tab="1">	
									<div class="tip">
										Tripster.ru&nbsp;- это необычные экскурсии от местных жителей в 400 городах мира. Гиды – историки, журналисты, искусствоведы, которые любят свой город и умеют увлечь им путешественников
										<span class="close"> </span>
									</div>
									<img src="/local/templates/general_2/img/logo_min/tripster.png" alt="tripster_logo">	
								</li>
								<li class="js_tab_trigger_1 logo_box_item active" data-tab="2">	
									<div class="tip">
										Sputnik8.com — площадка для поиска и бронирования экскурсий и мастер-классов по всему миру. У нас размещено более 5000 экскурсий в более, чем 100 городах: Москве, Санкт-Петербурге, Киеве, Праге, Париже, Барселоне, Риме, Лондоне, Паттайе, Пхукете и многих других.
										<span class="close"> </span>
									</div>
									<img src="/local/templates/general_2/img/logo_min/sputnik.jpg" alt="sputnik_logo">	
								</li>		
								<li class="js_tab_trigger_1 logo_box_item active" data-tab="3">
								<div class="tip">
								Weatlas.com — сервис бронирования экскурсий и развлечений в любом городе мира. Мы предлагаем экскурсии, развлечения, трансферы, билеты в различные достопримечательности и музеи. И все это — на одной площадке! У нас — только лучшие гиды, с отличными рекомендациями, и все проверены нами. Мы настолько уверены в качестве работы, что гарантируем вам самые лучшие впечатления.
								<span class="close"> </span>
								</div>
								<img src="/local/templates/general_2/img/logo_min/weatlas.png" alt="Weatlas">
								</li>
								<li class="js_tab_trigger_1 logo_box_item active" data-tab="4">
								<div class="tip">
								Surprise Me
								<span class="close"> </span>
								</div>
								<img src="/local/templates/general_2/img/logo_min/Surprise_Me.jpg" alt="Surprise Me logo">
								</li>
							</ul>				
						</div>
					</div>			
				</div>
	<div id="api-app">
		<div id="main_block"><button id="search" @click="search()">Поиск</button></div>
		<div v-if="preloader" id="pre-loader">
			<div id="lg_wrap">
				<img src="<?=SITE_TEMPLATE_PATH?>/images/logo_header_travel.svg">
				<p>Ищем для вас лучшие экскурсии</p>
				<p id="preload-city"></p>
			</div>
			<div class="krug"></div><div class="krug"></div><div class="krug"></div>
		</div>
		<div id="block-1" v-show="show_all">
			<p style="display:none;" id="stat">{{message}}</p>
			<div id="fix_menu">
				<button id="show_f"><span v-show="show_pokazat">Показать {{alladverts.length}} {{sklonenie(alladverts.length, ['предложение', 'предложения', 'предложений'])}}</span><span class="f" v-show="!show_pokazat">Фильтр</span></button><button id="mobile_comp">Сравнение({{comparison.length}})</button>
			</div>
			<div id="desctop_f">
			<fieldset><legend>Стоимость</legend>
				<div id="polz-price"></div><span id="price_field">от 0 до 0 руб</span>
			</fieldset>
			<fieldset>
				<legend>Рейтинг</legend>
				<div id="polz-reit"></div><span id="rating_field"></span>
			</fieldset>
			<fieldset>
				<legend>Формат проведения</legend>
				<label><input v-model="group" :disabled="private" type="checkbox" name="group" value="Y"><span>Групповая</span></label>
				<label><input v-model="private" :disabled="group" type="checkbox" name="private" value="Y"><span>Индивидуальная</span></label>
				<label><input v-model="mobile_adv" :disabled="weatlasfilter || tripsterfilter || sputnikfilter || is_new || tagsvarchecked.length > 0 || catsvarchecked.length > 0" type="checkbox" name="mobile_adv" value="Y"><span>Мобильный гид</span></label>
			</fieldset>
			<fieldset>
				<legend>Длительность программы</legend>
				<label><input :disabled="durationtype == 'day' || durationtype == 'several'" v-model="durationtype" type="checkbox" name="durationtype" value="hours"><span>Несколько часов</span></label>
				<label><input :disabled="durationtype == 'hours' || durationtype == 'several'" type="checkbox" v-model="durationtype" name="durationtype" value="day"><span>Весь день</span></label>
				<label><input :disabled="durationtype == 'day' || durationtype == 'hours'" type="checkbox" v-model="durationtype" name="durationtype" value="several"><span>Несколько дней</span></label>
			</fieldset>
			<fieldset>
				<legend>Как проходит</legend>
				<label><input v-model="online" type="checkbox" name="online" value="Y">Онлайн</label>
				<label><input v-model="on_foot" :disabled="on_raft || on_kvadro || on_parag || online || on_heli || auto || on_bus || on_bicycle || on_moto || on_ship" type="checkbox" name="on_foot" value="Y"><span>Пешком</span></label>
				<label><input v-model="auto" :disabled="on_raft || on_kvadro || on_parag ||online || on_heli || on_foot || on_bus || on_bicycle || on_moto || on_ship" type="checkbox" name="auto" value="Y"><span>На автомобиле</span></label>
				<label><input v-model="on_bus" :disabled="on_raft || on_kvadro || on_parag || online || on_heli || on_foot || auto || on_bicycle || on_moto || on_ship" type="checkbox" name="on_bus" value="Y"><span>На автобусе</span></label>
				<label><input v-model="on_bicycle" :disabled="on_raft || on_kvadro || on_parag || online || on_heli || on_foot || auto || on_bus || on_moto || on_ship" type="checkbox" name="on_bicycle" value="Y"><span>На велосипеде</span></label>
				<label><input v-model="on_moto" :disabled="on_raft || on_kvadro || on_parag || online || on_heli || on_foot || auto || on_bus || on_bicycle || on_ship" type="checkbox" name="on_bicycle" value="Y"><span>На мотоцикле</span></label>
				<label><input v-model="on_ship" :disabled="on_raft || on_kvadro || on_parag || online || on_heli || on_moto || on_foot || auto || on_bus || on_bicycle" type="checkbox" name="on_bicycle" value="Y"><span>На кораблике</span></label>
				<label><input v-model="on_heli" :disabled="on_raft || on_kvadro || on_parag || online || on_ship ||on_moto || on_foot || auto || on_bus || on_bicycle" type="checkbox" name="on_bicycle" value="Y"><span>На вертолете</span></label>
				<label><input v-model="on_scooter" :disabled="on_raft || on_kvadro || on_parag || on_heli || online || on_ship ||on_moto || on_foot || auto || on_bus || on_bicycle" type="checkbox" name="on_scooter" value="Y"><span>На самокате</span></label>
				<label><input v-model="on_parag" :disabled="on_raft || on_kvadro || on_scooter || on_heli || online || on_ship ||on_moto || on_foot || auto || on_bus || on_bicycle" type="checkbox" name="on_parag" value="Y"><span>Параглайдинг</span></label>
				<label><input v-model="on_kvadro" :disabled="on_raft || on_parag || on_scooter || on_heli || online || on_ship ||on_moto || on_foot || auto || on_bus || on_bicycle" type="checkbox" name="on_kvadro" value="Y"><span>На квадроциклах</span></label>
				<label><input v-model="on_raft" :disabled="on_kvadro || on_parag || on_scooter || on_heli || online || on_ship ||on_moto || on_foot || auto || on_bus || on_bicycle" type="checkbox" name="on_raft" value="Y"><span>Рафтинг</span></label>
			</fieldset>
			<fieldset style="display:none;">
				<label><input v-model="is_new" type="checkbox" name="is_new" value="Y" :disabled="weatlasfilter || sputnikfilter || surprisemefilter || mobile_adv || catsvarchecked.length > 0 || type_image || type_video || type_audio || type_streetview"><span>Новые</span></label>
			</fieldset>
			<fieldset>
				<legend>Цель экскурсии</legend>
				<label><input v-model="child_friendly" type="checkbox" name="child_friendly" value="Y" :disabled="weatlasfilter || surprisemefilter || mobile_adv || type_image || type_video || type_audio || type_streetview"><span>С детьми</span></label>
				<label><input v-model="museum" type="checkbox" name="muz"><span>Музеи</span></label>
				<label><input v-model="shoping" type="checkbox" name="shop"><span>Шоппинг</span></label>
				<label><input v-model="gastro" type="checkbox" name="shop"><span>Гастрономические</span></label>
				<label><input v-model="photoses" type="checkbox" name="shop"><span>Фотосессии</span></label>
				<label><input v-model="trans" type="checkbox" name="trans"><span>Трансферы</span></label>
			</fieldset>
			<fieldset><legend>Агентство</legend>
				<label><input :disabled="tripsterfilter || weatlasfilter || surprisemefilter || mobile_adv || is_new || tagsvarchecked.length > 0 || type_image || type_video || type_audio || type_streetview" type="checkbox" v-model="sputnikfilter"><span>Спутник8</span></label>
				<label><input :disabled="sputnikfilter || weatlasfilter || surprisemefilter || mobile_adv || catsvarchecked.length > 0 || type_image || type_video || type_audio || type_streetview" type="checkbox" v-model="tripsterfilter"><span>Tripster</span></label>
				<label><input type="checkbox" :disabled="weatlasfilter || tripsterfilter || sputnikfilter || tagsvarchecked.length > 0 || catsvarchecked.length > 0" v-model="surprisemefilter"><span>Surprise Me</span></label>
				<label><input type="checkbox" :disabled="mobile_adv || surprisemefilter || tripsterfilter || sputnikfilter || tagsvarchecked.length > 0 || catsvarchecked.length > 0 || type_image || type_video || type_audio || type_streetview" v-model="weatlasfilter"><span>Weatlas</span></label>
			</fieldset>
			<fieldset>
				<legend>Детализация материала</legend>
				<label><input v-model="overview" type="checkbox" name="obz"><span>Обзорная</span></label>
				<label><input v-model="educational" type="checkbox" name="poz"><span>Познавательная</span></label>
				<label><input v-model="unusual" type="checkbox" name="unusual" ><span>Необычные маршруты</span></label>
				<label><input v-model="master_class" type="checkbox" name="master_class"><span>Мастер-классы</span></label>
			</fieldset>
			<fieldset>
				<legend>Теги</legend>
				<label v-for="tagcheck in tagscheck"><input :disabled="weatlasfilter || sputnikfilter || surprisemefilter || mobile_adv || catsvarchecked.length > 0 || type_image || type_video || type_audio || type_streetview" v-model="tagsvarchecked" type="checkbox" name="tags" :value="tagcheck"><span>{{tagcheck}}</span></label>
			</fieldset>
			<fieldset>
				<legend>Категории</legend>
				<label v-for="category in categoriescheck"><input :disabled="weatlasfilter || tripsterfilter || surprisemefilter || mobile_adv || is_new || child_friendly || tagsvarchecked.length > 0 || type_image || type_video || type_audio || type_streetview" v-model="catsvarchecked" type="checkbox" name="cats" :value="category"><span>{{category}}</span></label>
			</fieldset>
			<fieldset style="display:none;">
				<legend>Тип контента</legend>
				<label><input :disabled="private || group || tripsterfilter || sputnikfilter || is_new || child_friendly || tagsvarchecked.length > 0 || catsvarchecked.length > 0" v-model="type_image" type="checkbox" name="type_image" value="Y"><span>image</span></label>
				<label><input :disabled="private || group || tripsterfilter || sputnikfilter || is_new || child_friendly || tagsvarchecked.length > 0 || catsvarchecked.length > 0" v-model="type_video" type="checkbox" name="type_video" value="Y"><span>video</span></label>
				<label><input :disabled="private || group || tripsterfilter || sputnikfilter || is_new || child_friendly || tagsvarchecked.length > 0 || catsvarchecked.length > 0" v-model="type_audio" type="checkbox" name="type_audio" value="Y"><span>adio</span></label>
				<label><input :disabled="private || group || tripsterfilter || sputnikfilter || is_new || child_friendly || tagsvarchecked.length > 0 || catsvarchecked.length > 0" v-model="type_streetview" type="checkbox" name="type_streetview" value="Y"><span>streetview</span></label>
			</fieldset>
			</div>
		</div>
		<div id="block-2" v-show="show_all">
			<div id="slider">
				<div id="s-prev"><</div>
				<div id="slider_wrapper">
					<div class="slide">
						<label><input v-model="overview" type="checkbox" name="obz"><span>Обзорная</span></label>
					</div>
					<div class="slide">
						<label><input v-model="educational" type="checkbox" name="poz"><span>Познавательная</span></label>
					</div>
					<div class="slide">
						<label><input v-model="unusual" type="checkbox" name="unusual"><span>Необычные маршруты</span></label>
					</div>
					<div class="slide">
						<label><input v-model="master_class" type="checkbox" name="master_class"><span>Мастер-классы</span></label>
					</div>
					<div class="slide">
						<label><input v-model="museum" type="checkbox" name="museum"><span>Музеи</span></label>
					</div>
					<div class="slide">
						<label><input v-model="shoping" type="checkbox" name="shop"><span>Шоппинг</span></label>
					</div>
					<div class="slide">
						<label><input v-model="gastro" type="checkbox" name="gastro"><span>Гастрономические</span></label>
					</div>
					<div class="slide">
						<label><input v-model="photoses" type="checkbox" name="photoses"><span>Фотосессии</span></label>
					</div>
					<div class="slide">
						<label><input v-model="trans" type="checkbox" name="trans"><span>Трансферы</span></label>
					</div>
					<div class="slide">
						<label><input v-model="on_foot" type="checkbox" name="on_foot"><span>Пешком</span></label>
					</div>
					<div class="slide">
						<label><input v-model="auto" type="checkbox" name="auto"><span>На автомобиле</span></label>
					</div>
					<div class="slide">
						<label><input v-model="on_bus" type="checkbox" name="on_bus"><span>На автобусе</span></label>
					</div>
					<div class="slide">
						<label><input v-model="on_bicycle" type="checkbox" name="on_bicycle"><span>На велосипеде</span></label>
					</div>
					<div class="slide">
						<label><input v-model="on_moto" type="checkbox" name="on_moto"><span>На мотоцикле</span></label>
					</div>
					<div class="slide">
						<label><input v-model="on_ship" type="checkbox" name="on_ship"><span>На кораблике</span></label>
					</div>
					<div class="slide">
						<label><input v-model="on_heli" type="checkbox" name="on_heli"><span>На вертолете</span></label>
					</div>
					<div class="slide">
						<label><input v-model="on_scooter" type="checkbox" name="on_scooter"><span>На самокате</span></label>
					</div>
					<div class="slide">
						<label><input v-model="on_parag" type="checkbox" name="on_parag"><span>Параглайдинг</span></label>
					</div>
					<div class="slide">
						<label><input v-model="on_kvadro" type="checkbox" name="on_kvadro"><span>На квадроциклах</span></label>
					</div>
					<div class="slide">
						<label><input v-model="on_raft" type="checkbox" name="on_raft"><span>На квадроциклах</span></label>
					</div>
					<div class="slide">
						<label><input v-model="online" type="checkbox" name="online"><span>Онлайн</span></label>
					</div>
					<div class="slide" v-for="tagcheck in tagscheck">
						<label><input :disabled="weatlasfilter || sputnikfilter || surprisemefilter || mobile_adv || catsvarchecked.length > 0 || type_image || type_video || type_audio || type_streetview" v-model="tagsvarchecked" type="checkbox" name="tags" :value="tagcheck"><span>{{tagcheck}}</span></label>
					</div>
					<div class="slide" v-for="category in categoriescheck">
						<label><input :disabled="weatlasfilter || tripsterfilter || surprisemefilter || mobile_adv || is_new || child_friendly || tagsvarchecked.length > 0 || type_image || type_video || type_audio || type_streetview" v-model="catsvarchecked" type="checkbox" name="cats" :value="category">{{category}}</label>
					</div>
				</div>
				<div id="s-next">></div>
			</div>
			<div id="adv_filter_stats_wrapper">
				<div id="price_filter_indicator" v-if="pricefilteractive">Стоимость от {{pricefilterstart}} до {{pricefilterend}} руб <span class="cross" @click="closeprice">X</span></div><div id="durationprog_filter_indicator" v-if="durationtype.length != 0">Длительность программы <br><span v-if="durationtype=='hours'">несколько часов</span><span v-if="durationtype=='day'">весь день</span><span v-if="durationtype=='several'">несколько дней</span> <span class="cross" @click="durationtype=[]">X</span></div><div id="duration_filter_indicator" v-if="ratingfilteractive">Рейтинг от {{ratingfilterstart}} до {{ratingfilterend}} <span class="cross" @click="closerating">X</span></div>
				<div v-if="child_friendly" id="child_filter_indicator">С детьми <span class="cross" @click="child_friendly = !child_friendly">X</span></div><div id="is_new_filter_indicator"  v-if="is_new">Новые <span class="cross" @click="is_new = !is_new">X</span></div><div id="tripster_filter_indicator" v-if="tripsterfilter">Агенство<br> Трипстер <span class="cross" @click="tripsterfilter = !tripsterfilter">X</span></div><div id="sputnik_filter_indicator" v-if="sputnikfilter">Агенство<br> Спутник8 <span class="cross" @click="sputnikfilter = !sputnikfilter">X</span></div><div id="surpriseme_filter_indicator" v-if="surprisemefilter">Агенство<br> Surprise Me <span class="cross" @click="surprisemefilter = !surprisemefilter">X</span></div><div id="weatlas_filter_indicator" v-if="weatlasfilter">Агенство<br> Weatlas <span class="cross" @click="weatlasfilter = !weatlasfilter">X</span></div>
				<div v-if="group" id="group_filter_indicator">Групповая <span class="cross" @click="group = !group">X</span></div><div v-if="private" id="private_filter_indicator">Индивидуальная <span class="cross" @click="private= !private">X</span></div><div id="online_filter_indicator" v-if="online">Онлайн <span class="cross" @click="online= !online">X</span></div>
				<div class="cats_filter_indicator" v-for="(catname, index) in catsvarchecked"><p>{{catname}}</p> <span class="cross" @click="catsvarchecked.splice(index,1)">X</span></div><div class="tags_filter_indicator" v-for="(tagname, index) in tagsvarchecked"><p>{{tagname}}</p> <span class="cross" @click="tagsvarchecked.splice(index, 1);">X</span></div><div id="mobile_adv_filter_indicator" v-if="mobile_adv">Мобильный гид <span class="cross" @click="mobile_adv= !mobile_adv">X</span></div>
				<div class="ind" v-if="type_image">Тип контента:image <span class="cross" @click="type_image = !type_image">X</span></div><div v-if="type_video">Тип контента: video <span class="cross" @click="type_video = !type_video">X</span></div><div v-if="type_audio">Тип контента: audio <span class="cross" @click="type_audio = !type_audio">X</span></div><div v-if="type_streetview">Тип контента: streetview <span class="cross" @click="type_streetview = !type_streetview">X</span></div>
				<div class="ind" v-if="overview">Обзорная <span class="cross" @click="overview = !overview">X</span></div>
				<div class="ind" v-if="educational">Познавательная <span class="cross" @click="educational = !educational">X</span></div>
				<div class="ind" v-if="unusual">Необычные маршруты <span class="cross" @click="unusual = !unusual">X</span></div>
				<div class="ind" v-if="master_class">Мастер-класс <span class="cross" @click="master_class = !master_class">X</span></div>
				<div class="ind" v-if="museum">Музей <span class="cross" @click="museum = !museum">X</span></div>
				<div class="ind" v-if="shoping">Шоппинг <span class="cross" @click="shoping = !shoping">X</span></div>
				<div class="ind" v-if="gastro">Гастрономическая <span class="cross" @click="gastro = !gastro">X</span></div>
				<div class="ind" v-if="photoses">Фотосессия <span class="cross" @click="photoses = !photoses">X</span></div>
				<div class="ind" v-if="trans">Трансферы <span class="cross" @click="trans = !trans">X</span></div>
				<div class="ind" v-if="auto">На автомобиле <span class="cross" @click="auto = !auto">X</span></div>
				<div class="ind" v-if="on_foot">Пешком <span class="cross" @click="on_foot = !on_foot">X</span></div>
				<div class="ind" v-if="on_bus">На автобусе <span class="cross" @click="on_bus = !on_bus">X</span></div>
				<div class="ind" v-if="on_bicycle">На велосипеде <span class="cross" @click="on_bicycle = !on_bicycle">X</span></div>
				<div class="ind" v-if="on_moto">На мотоцикле <span class="cross" @click="on_moto = !on_moto">X</span></div>
				<div class="ind" v-if="on_ship">На кораблике <span class="cross" @click="on_ship = !on_ship">X</span></div>
				<div class="ind" v-if="on_heli">На вертолете <span class="cross" @click="on_heli = !on_heli">X</span></div>
				<div class="ind" v-if="on_scooter">На самокате <span class="cross" @click="on_scooter = !on_scooter">X</span></div>
				<div class="ind" v-if="on_parag">Параглайдинг <span class="cross" @click="on_parag = !on_parag">X</span></div>
				<div class="ind" v-if="on_kvadro">На квадроциклах <span class="cross" @click="on_kvadro = !on_kvadro">X</span></div>
				<div class="ind" v-if="on_raft">Рафтинг <span class="cross" @click="on_raft = !on_raft">X</span></div>
			</div>
					<div id="count">Мы нашли {{alladverts.length}} {{sklonenie(alladverts.length, ['предложение', 'предложения', 'предложений'])}}</div>
			<div id="show_types">отображения: <span :class="{checked:visibletype == 'rect'}" @click="checkvisible('rect')">плитка</span> <span :class="{checked:visibletype == 'list'}" @click="checkvisible('list')">список</span></div>
					<div id="sort"><label :class="{active:sort == 'price'}">Цена <i v-if="sort_type_price == 'desc'" class="material-icons">arrow_drop_down</i><i v-else class="material-icons">arrow_drop_up</i><input @click="toggle_sort_price" v-model="sort" type="radio" value="price"></label> <label :class="{active:sort == 'rating'}">Рейтинг <i v-if="sort_type_rate == 'desc'" class="material-icons">arrow_drop_down</i><i v-else class="material-icons">arrow_drop_up</i><input @click="toggle_sort_rate" v-model="sort" type="radio" value="rating"></label></div>
		<transition name="fade">
		<div v-if="visibletype=='rect'" id="excursion_wrapper">

			<div class="excursion_item" v-for="advert in alladverts">
				<div class="i_img_wrap" v-if="advert.result_img">
					<img :src="advert.result_img">
					<div class="rait_abs">{{advert.result_rating}} <i class="material-icons">star_rate</i> {{advert.result_review_count}} <i class="material-icons">comment</i></div>
				</div>
				<?php if($USER->IsAdmin()):?>
					<div class="i_name" @click="detail(advert, advert.advertiser)"><p class="pointer">{{advert.result_title}}</p></div>
				<?php else:?>
					<div class="i_name"><a target="_blank" class="res_url" :href="advert.result_url"><p class="pointer">{{advert.result_title}}</p></a></div>
				<?php endif;?>
				<div class="i_desc" v-if="advert.result_description">
					<p>{{advert.result_description}}</p>
					<button style="display:none;" @click="showtext" class="show_all" ref="el">Показать все</button>
				</div>
				<div id="data_wrap">
					<div><p v-if="advert.online == 'Да'">Онлайн</p><p v-if="advert.advertiser=='Surprise Me' && advert.types.audioguide">Мобильный гид</p><p v-if="advert.comp_private">Индивидуально</p><p v-if="advert.comp_group">Групповая</p><p>на {{advert.duration}}</p></div>
					<a target="_blank" class="res_url" :href="advert.result_url"><div>за <span v-if="advert.approximately">~</span> {{advert.result_price}}<br> на {{advert.advertiser}}</div></a>
				</div>
				<hr style="display:none;">
				<div class="i_props" style="display:none;">
					<p>Цена:{{advert.result_price}}</p>
					<p>Рейтинг:{{advert.result_rating}}</p>
					<p>Количество отзывов {{advert.result_review_count}}</p>
					<p>Продолжительность:{{advert.duration}}</p>
					<p>Агентство:{{advert.advertiser}}</p>
				</div>
				<div style="display:none;" class="button_wrapper">
					<button class="comp" @click="addtocomparison(advert)">В сравнение</button><button class="comp" @click="detail(advert, advert.advertiser)">Подробнее</button><button class="comp"><a :href="advert.result_url" target="_blank">Оформить</a></button>
				</div>
				<div class="tags">
					<span v-if="advert.comp_child_friendly">Для детей</span><span v-if="advert.comp_overview">Обзорные</span><span v-if="advert.comp_educational">Образовательные</span><span v-if="advert.comp_unusual">Необычные</span><span v-if="advert.comp_master_class">Мастер класс</span><span v-if="advert.comp_museum">Музеи</span><span v-if="advert.comp_shoping">Шоппинг</span><span v-if="advert.comp_gastro">Гастрономическая</span><span v-if="advert.comp_photoses">Фотосессия</span><span v-if="advert.comp_trans">Трансферы</span><span v-if="advert.comp_auto">На автомобиле</span><span v-if="advert.comp_on_foot">Пешком</span><span v-if="advert.comp_on_bus">На автобусе</span><span v-if="advert.comp_on_bicycle">На велосипеде</span><span v-if="advert.comp_on_moto">На мотоцикле</span><span v-if="advert.comp_on_ship">На кораблике</span><span v-if="advert.comp_on_heli">На вертолете</span><span v-if="advert.comp_on_scooter">На самокате</span><span v-if="advert.comp_on_parag">Параглайдинг</span><span v-if="advert.comp_on_kvadro">На квадроциклах</span><span v-if="advert.comp_on_raft">Рафтинг</span>
					<span v-if="tag.name.indexOf('Групповая') == -1 && tag.name.indexOf('Групповые') == -1 && tag.name.indexOf('детей') == -1 && tag.name.indexOf('Индивидуальные') == -1 && tag.name.indexOf('Индивидуальный') == -1 && tag.name.indexOf('Обзорные') == -1 && tag.name.indexOf('Познавательные') == -1&& tag.name.indexOf('Познавательная') == -1 && tag.name.indexOf('Музеи') == -1 && tag.name.indexOf('Гастрономические') == -1 && tag.name.indexOf('Фотосессии') == -1	&& tag.name.indexOf('Шоппинг') == -1 && tag.name.indexOf('Необычные') == -1	&& tag.name.indexOf('Онлайн') == -1 && tag.name.indexOf('Вебинары') == -1 && tag.name.indexOf('online') == -1 && tag.name.indexOf('Online') == -1 && tag.name.indexOf('Мастер-класс') == -1 && tag.name.indexOf('мастер-класс') == -1 && tag.name.indexOf('shopping') == -1 && tag.name.indexOf('На автомобиле') == -1 && tag.name.indexOf('на автомобиле') == -1 && tag.name.indexOf('Пешком') == -1 && tag.name.indexOf('пешком') == -1 && tag.name.indexOf('На автобусе') == -1 && tag.name.indexOf('на автобусе') == -1 && tag.name.indexOf('Автобусные экскурсии') == -1 && tag.name.indexOf('На велосипеде') == -1 && tag.name.indexOf('на велосипеде') == -1 && tag.name.indexOf('автомобильные') == -1 && tag.name.indexOf('На мотоцикле') == -1 && tag.name.indexOf('на мотоцикле') == -1 && tag.name.indexOf('На кораблике') == -1 && tag.name.indexOf('на кораблике') == -1 && tag.name.indexOf('На катере') == -1 && tag.name.indexOf('на катере') == -1 && tag.name.indexOf('На яхте') == -1 && tag.name.indexOf('на яхте') == -1 && tag.name.indexOf('На вертолете') == -1 && tag.name.indexOf('на вертолете') == -1 && tag.name.indexOf('Пешеходные экскурсии') == -1 && tag.name.indexOf('Круизы и речные прогулки') == -1 && tag.name.indexOf('Экскурсии по музеям') == -1 && tag.name.indexOf('Литературные экскурсии. Экскурсии в музеи, галереи, выставки') == -1 && tag.name.indexOf('музей') == -1 && tag.name.indexOf('автобусный') == -1 && tag.name.indexOf('Кулинарный тур') == -1	&& tag.name.indexOf('кулинарный тур') == -1 && tag.name.indexOf('на самокатах') == -1 && tag.name.indexOf('На самокатах') == -1 && tag.name.indexOf('Параглайдинг') == -1 && tag.name.indexOf('параглайдинг') == -1 && tag.name.indexOf('Все') == -1 && tag.name.indexOf('Трансферы') == -1 && tag.name.indexOf('трансферы') == -1 && tag.name.indexOf('На квадроциклах') == -1 && tag.name.indexOf('Рафтинг') == -1" v-for="tag in advert.tags">{{tag.name}}</span>
					<span v-if="cat.name.indexOf('Групповая') == -1 && cat.name.indexOf('Групповые') == -1 && cat.name.indexOf('детей') == -1 && cat.name.indexOf('Индивидуальные') == -1 && cat.name.indexOf('Индивидуальный') == -1 && cat.name.indexOf('Обзорные') == -1 && cat.name.indexOf('Познавательные') == -1&& cat.name.indexOf('Познавательная') == -1 && cat.name.indexOf('Музеи') == -1 && cat.name.indexOf('Гастрономические') == -1 && cat.name.indexOf('Фотосессии') == -1	&& cat.name.indexOf('Шоппинг') == -1 && cat.name.indexOf('Необычные') == -1	&& cat.name.indexOf('Онлайн') == -1 && cat.name.indexOf('Вебинары') == -1 && cat.name.indexOf('online') == -1 && cat.name.indexOf('Online') == -1 && cat.name.indexOf('Мастер-класс') == -1 && cat.name.indexOf('мастер-класс') == -1 && cat.name.indexOf('shopping') == -1 && cat.name.indexOf('На автомобиле') == -1 && cat.name.indexOf('на автомобиле') == -1 && cat.name.indexOf('Пешком') == -1 && cat.name.indexOf('пешком') == -1 && cat.name.indexOf('На автобусе') == -1 && cat.name.indexOf('на автобусе') == -1 && cat.name.indexOf('Автобусные экскурсии') == -1 && cat.name.indexOf('На велосипеде') == -1 && cat.name.indexOf('на велосипеде') == -1 && cat.name.indexOf('автомобильные') == -1 && cat.name.indexOf('На мотоцикле') == -1 && cat.name.indexOf('на мотоцикле') == -1 && cat.name.indexOf('На кораблике') == -1 && cat.name.indexOf('на кораблике') == -1 && cat.name.indexOf('На катере') == -1 && cat.name.indexOf('на катере') == -1 && cat.name.indexOf('На яхте') == -1 && cat.name.indexOf('на яхте') == -1 && cat.name.indexOf('На вертолете') == -1 && cat.name.indexOf('на вертолете') == -1 && cat.name.indexOf('Пешеходные экскурсии') == -1 && cat.name.indexOf('Круизы и речные прогулки') == -1 && cat.name.indexOf('Экскурсии по музеям') == -1 && cat.name.indexOf('Литературные экскурсии. Экскурсии в музеи, галереи, выставки') == -1 && cat.name.indexOf('музей') == -1 && cat.name.indexOf('автобусный') == -1 && cat.name.indexOf('Кулинарный тур') == -1	&& cat.name.indexOf('кулинарный тур') == -1 && cat.name.indexOf('на самокатах') == -1 && cat.name.indexOf('На самокатах') == -1 && cat.name.indexOf('Параглайдинг') == -1 && cat.name.indexOf('параглайдинг') == -1 && cat.name.indexOf('Все') == -1 && cat.name.indexOf('Трансферы') == -1 && cat.name.indexOf('трансферы') == -1 && cat.name.indexOf('На квадроциклах') == -1 && cat.name.indexOf('Рафтинг') == -1" v-for="cat in advert.categories">{{cat.name}}</span>
				</div>
			</div>

		</div>
		</transition>
		<transition name="fade">
		<div v-if="visibletype=='list'" id="excursion_wrapper-2">

			<div class="excursion_item-2" v-for="advert in alladverts">
				<div class="i_img_wrap-2" v-if="advert.result_img">
					<img :src="advert.result_img">
					<div class="rait_abs">{{advert.result_rating}} <i class="material-icons">star_rate</i> {{advert.result_review_count}} <i class="material-icons">comment</i></div>
				</div>
				<div class="i_desc-2">
					<?php if($USER->IsAdmin()):?>
						<div class="i_name-2" @click="detail(advert, advert.advertiser)"><p class="pointer">{{advert.result_title}}</p></div>
					<?php else:?>
					<div class="i_name-2"><a target="_blank" class="res_url" :href="advert.result_url"><p class="pointer">{{advert.result_title}}</p></a></div>
					<?php endif;?>
					<div class="text">
					<p v-if="advert.result_description">{{advert.result_description}}</p>
					<button style="display:none;" @click="showtext" class="show_all" ref="el">Показать все</button>
					</div>
					<div class="tags">
						<span v-if="advert.comp_child_friendly">Для детей</span><span v-if="advert.comp_overview">Обзорные</span><span v-if="advert.comp_educational">Образовательные</span><span v-if="advert.comp_unusual">Необычные</span><span v-if="advert.comp_master_class">Мастер класс</span><span v-if="advert.comp_museum">Музеи</span><span v-if="advert.comp_shoping">Шоппинг</span><span v-if="advert.comp_gastro">Гастрономическая</span><span v-if="advert.comp_photoses">Фотосессия</span><span v-if="advert.comp_trans">Трансферы</span><span v-if="advert.comp_auto">На автомобиле</span><span v-if="advert.comp_on_foot">Пешком</span><span v-if="advert.comp_on_bus">На автобусе</span><span v-if="advert.comp_on_bicycle">На велосипеде</span><span v-if="advert.comp_on_moto">На мотоцикле</span><span v-if="advert.comp_on_ship">На кораблике</span><span v-if="advert.comp_on_heli">На вертолете</span><span v-if="advert.comp_on_scooter">На самокате</span><span v-if="advert.comp_on_parag">Параглайдинг</span><span v-if="advert.comp_on_kvadro">На квадроциклах</span><span v-if="advert.comp_on_raft">Рафтинг</span>
						<span v-if="tag.name.indexOf('Групповая') == -1 && tag.name.indexOf('Групповые') == -1 && tag.name.indexOf('детей') == -1 && tag.name.indexOf('Индивидуальные') == -1 && tag.name.indexOf('Индивидуальный') == -1 && tag.name.indexOf('Обзорные') == -1 && tag.name.indexOf('Познавательные') == -1&& tag.name.indexOf('Познавательная') == -1 && tag.name.indexOf('Музеи') == -1 && tag.name.indexOf('Гастрономические') == -1 && tag.name.indexOf('Фотосессии') == -1	&& tag.name.indexOf('Шоппинг') == -1 && tag.name.indexOf('Необычные') == -1	&& tag.name.indexOf('Онлайн') == -1 && tag.name.indexOf('Вебинары') == -1 && tag.name.indexOf('online') == -1 && tag.name.indexOf('Online') == -1 && tag.name.indexOf('Мастер-класс') == -1 && tag.name.indexOf('мастер-класс') == -1 && tag.name.indexOf('shopping') == -1 && tag.name.indexOf('На автомобиле') == -1 && tag.name.indexOf('на автомобиле') == -1 && tag.name.indexOf('Пешком') == -1 && tag.name.indexOf('пешком') == -1 && tag.name.indexOf('На автобусе') == -1 && tag.name.indexOf('на автобусе') == -1 && tag.name.indexOf('Автобусные экскурсии') == -1 && tag.name.indexOf('На велосипеде') == -1 && tag.name.indexOf('на велосипеде') == -1 && tag.name.indexOf('автомобильные') == -1 && tag.name.indexOf('На мотоцикле') == -1 && tag.name.indexOf('на мотоцикле') == -1 && tag.name.indexOf('На кораблике') == -1 && tag.name.indexOf('на кораблике') == -1 && tag.name.indexOf('На катере') == -1 && tag.name.indexOf('на катере') == -1 && tag.name.indexOf('На яхте') == -1 && tag.name.indexOf('на яхте') == -1 && tag.name.indexOf('На вертолете') == -1 && tag.name.indexOf('на вертолете') == -1 && tag.name.indexOf('Пешеходные экскурсии') == -1 && tag.name.indexOf('Круизы и речные прогулки') == -1 && tag.name.indexOf('Экскурсии по музеям') == -1 && tag.name.indexOf('Литературные экскурсии. Экскурсии в музеи, галереи, выставки') == -1 && tag.name.indexOf('музей') == -1 && tag.name.indexOf('автобусный') == -1 && tag.name.indexOf('Кулинарный тур') == -1	&& tag.name.indexOf('кулинарный тур') == -1 && tag.name.indexOf('на самокатах') == -1 && tag.name.indexOf('На самокатах') == -1 && tag.name.indexOf('Параглайдинг') == -1 && tag.name.indexOf('параглайдинг') == -1 && tag.name.indexOf('Все') == -1 && tag.name.indexOf('Трансферы') == -1 && tag.name.indexOf('трансферы') == -1 && tag.name.indexOf('На квадроциклах') == -1 && tag.name.indexOf('Рафтинг') == -1" v-for="tag in advert.tags">{{tag.name}}</span>
						<span v-if="cat.name.indexOf('Групповая') == -1 && cat.name.indexOf('Групповые') == -1 && cat.name.indexOf('детей') == -1 && cat.name.indexOf('Индивидуальные') == -1 && cat.name.indexOf('Индивидуальный') == -1 && cat.name.indexOf('Обзорные') == -1 && cat.name.indexOf('Познавательные') == -1&& cat.name.indexOf('Познавательная') == -1 && cat.name.indexOf('Музеи') == -1 && cat.name.indexOf('Гастрономические') == -1 && cat.name.indexOf('Фотосессии') == -1	&& cat.name.indexOf('Шоппинг') == -1 && cat.name.indexOf('Необычные') == -1	&& cat.name.indexOf('Онлайн') == -1 && cat.name.indexOf('Вебинары') == -1 && cat.name.indexOf('online') == -1 && cat.name.indexOf('Online') == -1 && cat.name.indexOf('Мастер-класс') == -1 && cat.name.indexOf('мастер-класс') == -1 && cat.name.indexOf('shopping') == -1 && cat.name.indexOf('На автомобиле') == -1 && cat.name.indexOf('на автомобиле') == -1 && cat.name.indexOf('Пешком') == -1 && cat.name.indexOf('пешком') == -1 && cat.name.indexOf('На автобусе') == -1 && cat.name.indexOf('на автобусе') == -1 && cat.name.indexOf('Автобусные экскурсии') == -1 && cat.name.indexOf('На велосипеде') == -1 && cat.name.indexOf('на велосипеде') == -1 && cat.name.indexOf('автомобильные') == -1 && cat.name.indexOf('На мотоцикле') == -1 && cat.name.indexOf('на мотоцикле') == -1 && cat.name.indexOf('На кораблике') == -1 && cat.name.indexOf('на кораблике') == -1 && cat.name.indexOf('На катере') == -1 && cat.name.indexOf('на катере') == -1 && cat.name.indexOf('На яхте') == -1 && cat.name.indexOf('на яхте') == -1 && cat.name.indexOf('На вертолете') == -1 && cat.name.indexOf('на вертолете') == -1 && cat.name.indexOf('Пешеходные экскурсии') == -1 && cat.name.indexOf('Круизы и речные прогулки') == -1 && cat.name.indexOf('Экскурсии по музеям') == -1 && cat.name.indexOf('Литературные экскурсии. Экскурсии в музеи, галереи, выставки') == -1 && cat.name.indexOf('музей') == -1 && cat.name.indexOf('автобусный') == -1 && cat.name.indexOf('Кулинарный тур') == -1	&& cat.name.indexOf('кулинарный тур') == -1 && cat.name.indexOf('на самокатах') == -1 && cat.name.indexOf('На самокатах') == -1 && cat.name.indexOf('Параглайдинг') == -1 && cat.name.indexOf('параглайдинг') == -1 && cat.name.indexOf('Все') == -1 && cat.name.indexOf('Трансферы') == -1 && cat.name.indexOf('трансферы') == -1 && cat.name.indexOf('На квадроциклах') == -1 && cat.name.indexOf('Рафтинг') == -1" v-for="cat in advert.categories">{{cat.name}}</span>
					</div>
					<div class="square_price_wrap">
						<div class="square_price"><a target="_blank
" class="res_url" :href="advert.result_url"><div><span v-if="advert.online == 'Да'">Онлайн</span><br v-if="advert.online == 'Да'"><span v-if="advert.advertiser=='Surprise Me' && advert.types.audioguide">Мобильный гид</span><br v-if="advert.advertiser=='Surprise Me' && advert.types.audioguide"><span v-if="advert.comp_private">Индивидуально</span><span v-if="advert.comp_group">Групповая</span><br> на {{advert.duration}}<br>за <span v-if="advert.approximately">~</span> {{advert.result_price}}<br> на {{advert.advertiser}}</div></a></div>
					</div>
					</div>
					<hr style="display:none;">
					<div style="display:none;" class="i_props-2">
						<p>Цена:{{advert.result_price}}</p>
						<p>Рейтинг:{{advert.result_rating}}</p>
						<p>Количество отзывов {{advert.result_review_count}}</p>
						<p>Продолжительность:{{advert.duration}}</p>
						<p>Агентство:{{advert.advertiser}}</p>
					</div>
					<div class="button_wrapper-2" style="display:none;">
					<button class="comp" @click="addtocomparison(advert)">В сравнение</button><button class="comp" @click="detail(advert, advert.advertiser)">Подробнее</button><button class="comp"><a :href="advert.result_url" target="_blank">Оформить</a></button>
					</div>
			</div>

		</div>
		</transition>
		<div class="hide" @click="close()" id="popup_wrap">
		</div>
		<div class="hide" id="popup-form">
			<button id="close_popup" @click="close()">X</button>
			<nav id="popup_menu">
				<a href="#detail_description">Описание</a> <a href="#place_to_see">Места для посещения</a> <a href="#schedule">Расписание</a> <a href="#guide">Гид</a> <a href="#reviews">Отзывы</a> <a href="#likethis">Похожие</a>
			</nav>
			<h2 class="left">{{selected_title}}</h2>
			<div id="main_photo_wrap"><img v-if="selected_main_photo" :src="selected_main_photo" width="300"></div>
			<h2 class="left" id="adv_name"></h2>
			<h2 class="left" id="detail_description">Описание</h2>
			<div id="detail_description_wrapper">
				{{selected_description}}
			</div>
			<div id="detail_price"><span v-if="selected_data.approximately">~</span> {{selected_price}}</div>
			<div class="button_wrapper">
					<button class="comp" @click="addtocomparison(selected_data)">В сравнение</button><button class="comp"><a :href="selected_data.result_url" target="_blank">Оформить</a></button>
			</div>
			<h2 id="place_to_see" class="left">Места для посещения</h2>
			<div id="place_to_see_wrapper" v-html="selected_place">
			</div>
			<h2 class="left">Что включено/не включено</h2>
			<div id="options">
				<p>Включено:{{selected_what_include}}</p>
				<p>Не включено:{{selected_what_not_include}}</p>
			</div>
			<h2 class="left" id="schedule">Расписание</h2>
			<div id="schedule_wrapper">
				<div v-if="selected_apiname == 'Tripster'" class="date" v-for="(sched, ind)  in selected_schedule.schedule">{{ind}} <p>Время:</p>
					<p v-if="time.type == 'range'" class="time" v-for="time in sched">от {{time.time_start}} до {{time.time_end}}</p>
					<p v-if="time.type == 'slot'" class="time" v-for="time in sched">{{time.time}}</p>
				</div>
				<div v-if="selected_apiname == 'Sputnik8'">
					<p v-for="time in selected_schedule">{{time.schedule.name}}</p>
				</div>
			</div>
			<h2 class="left" id="guide">Гид</h2>
			<div id="guide_wrapper">
				<div v-if="selected_apiname=='Tripster'">
					<a :href="'https://tp.media/r?marker=200556&p=652&u=' + selected_guide.avatar.medium"><img :src="selected_guide.avatar.medium"></a>
					<p>Имя: <a :href="'https://tp.media/r?marker=200556&p=652&u=' + selected_guide.url" target="_blank">{{selected_guide["first_name"]}}</a></p>
					<p>Описание:{{selected_guide.description}}</p>
					<p>Рейтинг: {{selected_guide.rating}}</p>
				</div>
				<div v-if="selected_apiname == 'Sputnik8'">
					<a :href="'https://tp.media/r?marker=200556&p=656&u=' + selected_guide.photo"><img :src="selected_guide.photo"></a>
					<p>Имя: <a :href="'https://tp.media/r?marker=200556&p=656&u=' + selected_guide.link" target="_blank">{{selected_guide.name}}</a></p>
					<p>Рейтинг: {{selected_guide.review_rating}}</p>
				</div>
				<div v-if="selected_apiname == 'Surprise Me'">
					<a :href="'https://tp.media/r?marker=200556&p=4487&u=' + selected_guide.avatar"><img :src="selected_guide.avatar"></a>
					<p>Имя: <a :href="'https://tp.media/r?marker=200556&p=4487&u=' + selected_guide.url" target="_blank">{{selected_guide["first_name"]}}</a></p>
					<p>Рейтинг: {{selected_guide.rating}}</p>
				</div>
				<div v-if="selected_apiname == 'Weatlas'">
					<a :href="'https://tp.media/r?marker=200556&p=654&u=' + selected_guide.GuidePhoto"><img :src="selected_guide.GuidePhoto"></a>
					<p>Имя: <a :href="'https://tp.media/r?marker=200556&p=654&u=' + selected_guide.GuideProfileLink" target="_blank">{{selected_guide.name}}</a></p>
					<p>Рейтинг: {{selected_guide.Rating}}</p>
				</div>
			</div>
			<h2 class="left">Фото</h2>
			<div id="fotos">
				<div v-if="selected_apiname == 'Tripster'">
					<a v-for="photo in  selected_photos" :href="'https://tp.media/r?marker=200556&p=652&u=' + photo.medium"><img :src="photo.medium"></a>
				</div>
				<div v-if="selected_apiname == 'Sputnik8'">
					<a v-if="photo != null" v-for="photo in  selected_photos" :href="'https://tp.media/r?marker=200556&p=656&u=' + photo.big"><img :src="photo.big"></a>
				</div>
				<div v-if="selected_apiname == 'Surprise Me'">
					<a v-for="photo in  selected_photos" :href="'https://tp.media/r?marker=200556&p=4487&u=' + photo.preview"><img v-if="photo.preview" :src="photo.preview" ></a>
				</div>
				<div v-if="selected_apiname == 'Weatlas'">
					<a v-for="photo in  selected_photos" :href="'https://tp.media/r?marker=200556&p=654&u=' + photo.medium"><img v-if="photo.medium" :src="photo.medium" ></a>
				</div>
			</div>
			<h2 class="left" id="reviews">Отзывы</h2>
			<div id="reviews_wrapper">
				<div v-if="selected_apiname == 'Surprise Me'">
					<div v-for="review in selected_reviews"><div v-if="review.avatar"><a :href="'https://tp.media/r?marker=200556&p=4487&u=' + review.avatar"><img :src="review.avatar"></a></div>{{review.name}}: {{review.text}} Дата:{{review.date}} Рейтинг: {{review.rating}}</div>
				</div>
				<div v-if="selected_apiname == 'Tripster'">
					<div v-for="review in selected_reviews"><div v-if="review.avatar"><a :href="'https://tp.media/r?marker=200556&p=652&u=' + review.avatar.medium"><img v-if="review.avatar.medium" :src="review.avatar.medium"></a></div>{{review.name}}: {{review.text}} Дата:{{review.created_on}} Рейтинг: {{review.rating}}</div>
				</div>
				<div v-if="selected_apiname == 'Weatlas'">
					<div v-for="review in selected_reviews">{{review.reviewer}}: {{review.reviewText}} Дата:{{review.reviewDate}}</div>
				</div>
			</div>
			<h2 class="left" id="likethis">Похожие</h2>
			<div id="likethis_wrapper">
				<p v-for="likethisad in likethisadverts.Tripster"><a>{{likethisad.title}}</a></p>
			</div>
			<button v-if="!show_data" @click="show_this_data">Показать данные API</button><button v-else @click="close_this_data">Скрыть данные API</button>
			<table id="popup" v-show="show_data">
			</table>
		</div>
			<div id="comparison_wrap">
				<button id="mobile_comp_close">X</button>
				<h2>Сравнение</h2>
				<table id="comparison">
					<th>title</th><th>duration</th><th>price</th><th>rating</th><th>Для детей</th><th>Груповая</th><th>Индивидуальная</th><th>Обзорная</th><th>Познавательная</th><th>Необычные</th><th>Мастер-классы</th><th>Музей</th><th>Шоппинг</th><th>Гастрономическая</th><th>Фотосессия</th><th>delete</th>
					<tr v-for="(compel, index) in  comparison">
						<td>{{compel.result_title}}</td><td>{{compel.duration}}</td><td>{{compel.result_price}}</td><td>{{compel.result_rating}}</td><td v-if="compel.comp_child_friendly">Да</td><td v-else>Нет</td><td v-if="compel.comp_group">Да</td><td v-else>Нет</td><td v-if="compel.comp_private">Да</td><td v-else>Нет</td><td v-if="compel.comp_overview">Да</td><td v-else>Нет</td><td v-if="compel.comp_educational">Да</td><td v-else>Нет</td><td v-if="compel.comp_unusual">Да</td><td v-else>Нет</td><td v-if="compel.comp_master_class">Да</td><td v-else>Нет</td><td v-if="compel.comp_museum">Да</td><td v-else>Нет</td><td v-if="compel.comp_shoping">Да</td><td v-else>Нет</td><td v-if="compel.comp_gastro">Да</td><td v-else>Нет</td><td v-if="compel.comp_photoses">Да</td><td v-else>Нет</td><td><button @click="deletecomparison(index)">Delete</button></td>
					</tr>
				</table>
				</div>
			</div>
	</div>
</div>
</main>
<script>
function printExcursion(table, obj, arrayDataExcursion = []) {
    var tr;
    for (var key in obj) {
        if(typeof obj[key] === 'object' && obj[key] !== null) {
            arrayDataExcursion.push('<i>' + key + '</i> - ');
            printExcursion(table, obj[key], arrayDataExcursion);
        } else if(Array.isArray(obj[key])) {
            for(var index = 0; index < obj[key].length; index++) {
                printExcursion(table, obj[key][index], arrayDataExcursion);
            }
        } else {
            tr = document.createElement('tr');
            tr.innerHTML += '<td style="border: 1px #000 solid; border-collapse: collapse;"><b>' + arrayDataExcursion.join('') + key + ':</b></td>';
            tr.innerHTML += '<td style="border: 1px #000 solid; border-collapse: collapse;">' + obj[key] + '</td>';
            table.append(tr);
        }
    }
    if(arrayDataExcursion.length) {
        arrayDataExcursion.pop();
    }
}
function sklonenie(number, txt) {
    var cases = [2, 0, 1, 1, 1, 2];
		if(String(number).indexOf(".") > -1) return txt[1];
    return txt[(number % 100 > 4 && number % 100 < 20) ? 2 : cases[(number % 10 < 5) ? number % 10 : 5]];
}
    $(function(){
				/*$(window).on("mousewheel DOMMouseScroll MozMousePixelScroll",function(e){
					//console.log(e.originalEvent.wheelDelta || -e.originalEvent.detail);
					let delta = e.originalEvent.wheelDelta || -e.originalEvent.detail;
					if(delta > 0){
						$("#show_f").css({borderWidth:1, height:'30px'});
					} else{
						$("#show_f").css({borderWidth:0, height:'0px'});
					}
				});*/
				//let lastScrollTop = 0;
				window.addEventListener("scroll", function(){ // or window.addEventListener("scroll"....
					let st = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
					//console.log(st);
					if(!window.matchMedia("(max-width: 700px)").matches){
						if(st >= 790){
							$("#desctop_f").addClass("fixed-filter");
							$("#sort").addClass("fixed-sort");
						} else {
							$("#desctop_f").removeClass("fixed-filter");
							$("#sort").removeClass("fixed-sort");
						}
					} else {
						$("#desctop_f").removeClass("fixed-filter");
						$("#sort").removeClass("fixed-sort");
					}
					if(window.matchMedia("(max-width: 700px)").matches){
						if(st > 500){
							$("#fix_menu").show();
						} else {
							$("#fix_menu").hide();
						}
					} else {
						$("#fix_menu").hide();
					}
				}, false);
				$("#s-prev").on("click",function(){
					let el = $(".slide:last-child");
					$(".slide").animate({right:"-240px"}, 500, function(){
						$(".slide").css("right", 0);
						$("#slider_wrapper").prepend(el);
					});
				});
				$("#s-next").on("click",function(){
					let el = $(".slide:first-child");
					$(".slide").animate({right:"240px"}, 500, function(){
						$("#slider_wrapper").append(el);
						$(".slide").css("right", 0);
					});
				});
				$("#price_field").text("от 0 до 0 руб");
				$("#rating_field").text( "от 0 до 0");
				$("#polz-price").slider({
					animate: "slow",
					min: 0,
					max: 0,
					range: true,
					step:1,
					values: [ 0, 0 ],
					slide:function(event,ui){
						$("#price_field").text("от "+ ui.values[ 0 ] + " до "+ ui.values[ 1 ] + " руб");
						app.pricefilterstart = ui.values[ 0 ];
						app.pricefilterend = ui.values[ 1 ];
					},
					change:function(event, ui){
						$("#price_field").text("от "+ ui.values[ 0 ] + " до "+ ui.values[ 1 ] + " руб");
						app.pricefilterstart = ui.values[ 0 ];
						app.pricefilterend = ui.values[ 1 ];
					}
				});
				$("#polz-reit").slider({
				animate: "slow",
				min: 0,
				max: 0,
				range: true,
				step:1,    
				values: [ 0, 0 ],
				slide : function(event, ui) {    
					$("#rating_field").text( "от " + ui.values[ 0 ] + " до " + ui.values[ 1 ] );
					app.ratingfilterstart = ui.values[ 0 ];
					app.ratingfilterend = ui.values[ 1 ];      
				},
				change:function(event, ui){
					$("#rating_field").text( "от " + ui.values[ 0 ] + " до " + ui.values[ 1 ] );
					app.ratingfilterstart = ui.values[ 0 ];
					app.ratingfilterend = ui.values[ 1 ]; 
				}
				});
				//$("#chose-select").chosen();
				$("#chose-select").selectize({
					create:false,
					sortField:'text'
				});
				let flag = false;
				let search_block = $("#main_block");
				$("#search-field").append(search_block);
				$("#show_f, #close_f").on("click", function(){
					flag = !flag;
					if(flag){
						$("#show_f span.f").html("Закрыть");
					} else {
						$("#show_f span.f").html("Фильтр");
					}
					//$("#comparison_wrap").removeClass("active");
					$("#desctop_f").toggleClass("active");
				});
				/*$("#mobile_comp, #mobile_comp_close").on("click", function(){
					$("#desctop_f").removeClass("active");
					$("#comparison_wrap").toggleClass("active");
				})*/
				<?php if(isset($_GET['citysearch']) && $_GET['citysearch'] != ''):?>
				let searchshow = true;
				$(".not-viz").hide();
				$(".link-city").on("click",	function(){
					if(searchshow){
						$(".not-viz").show("100");
					} else {
						$(".not-viz").hide("100");
					}
					searchshow = !searchshow;
				});
				<?php endif;?>
    });
    var app = new Vue({
        el: '#api-app',
			data: {
			show_pokazat:false,
			show_all:false,
			preloader:false,
			ratingfilteractive:false,
			pricefilteractive:false,
			citysearch:"0|0||",
			pricefilterstart:0,
			pricefilterend:0,
			curs_euro:89.66,
			curs_dollar:76.82,
			curs_grvn:2.72,
			curs_funt_ster:100.19,
			sputnikfilter:false,
			tripsterfilter:false,
			surprisemefilter:false,
			weatlasfilter:false,
			ratingfilterstart:0,
			ratingfilterend:0,
			visibletype:"",
			comparison:[],
			likethisadverts:{
				Sputnik8:[],
				Tripster:[],
				Surprise_Me:[],
				Weatlas:[]
			},
			selected_id:0,
			selected_title:'',
			selected_schedule:{},
			selected_apiname:'',
			selected_guide:[],
			selected_reviews:[],
			selected_description:'',
			selected_place:'',
			selected_photos:[],
			selected_what_include:"",
			selected_what_not_include:"",
			selected_data:[],
			selected_main_photo:'',
			selected_price:'',
			catsvarchecked:[],
			tagsvarchecked:[],
			private:false,
			group:false,
			child_friendly:false,
			is_new:false,
			online:false,
			mobile_adv:false,
			overview:false,
			educational:false,
			museum:false,
			gastro:false,
			photoses:false,
			shoping:false,
			unusual:false,
			master_class:false,
			trans:false,
			on_foot:false,
			auto:false,
			on_bus:false,
			on_bicycle:false,
			on_moto:false,
			on_ship:false,
			on_heli:false,
			on_scooter:false,
			on_parag:false,
			on_kvadro:false,
			on_raft:false,
			message: 'Жду параметры!',
			type_image:false,
			type_video:false,
			type_audio:false,
			type_streetview:false,
			show_data:false,
			durationtype:[],
			sort:'price',
			sort_type_price:'asc',
			sort_type_rate:'asc',
			adverts:{
				Sputnik8:[],
				Tripster:[],
				Surprise_Me:[],
				Weatlas:[]
			}
		},
		methods: {
			toggle_sort_price:function(){
				console.log("work");
				if(this.sort_type_price == 'asc'){
					this.sort_type_price = 'desc';
				} else {
					this.sort_type_price = 'asc';
				}
				return false;
			},
			toggle_sort_rate:function(){
				if(this.sort_type_rate == 'asc'){
					this.sort_type_rate = 'desc';
				} else {
					this.sort_type_rate = 'asc';
				}
				return false;
			},
			closerating:function(){
				this.ratingfilterstart = this.minrating;
				this.ratingfilterend = this.maxrating;
				$("#polz-reit").slider('option', 'values', [ this.minrating, this.maxrating ]);
			},
			closeprice:function(){
				this.pricefilterstart = this.minprice;
				this.pricefilterend = this.maxprice;
				$("#polz-price").slider("option", "values", [ this.minprice, this.maxprice ]);
			},
			showtext:function(e){
				if($(e.target).html()=="Показать все"){
					$(e.target).data("h", $(e.target).siblings("p").css("height"));
					$(e.target).siblings("p").css("height","auto");
					$(e.target).html("Cвернуть");
				}else{
					$(e.target).siblings("p").css("height", $(e.target).data("h"));
					$(e.target).html("Показать все");
				}
			},
			checkvisible:function(type){
				this.visibletype = type;
			},
			search: function() {
				let searchIds = $("#chose-select").val();
				let search_title_arr = searchIds.split("|");
				let search_title = search_title_arr[3];
				if(search_title != ''){
					search_title = lvovich.inclineFirstname(search_title, 'dative');
					$("title").html("Экскурсии по "+search_title);
					$("h1 > span").html(search_title);
					$("#preload-city").html("по " + search_title);
				}
				app.message = "Загрузка, идет поиск";
				app.preloader = true;
				app.show_all = false;
				$.ajax({
					method: "POST",
					url: "<?=$this->GetFolder()?>/ajax/excursion.php",
					data: {city_excursion:searchIds}
				})
				.done(function(response) {
					app.adverts = JSON.parse(response);
					if(window.matchMedia("(max-width: 700px)").matches){
						app.visibletype = 'rect';
					}else{
						app.visibletype = 'list';
					}
					app.pricefilterstart = app.minprice;
					app.pricefilterend = app.maxprice;
					app.ratingfilterstart = app.minrating;
					app.ratingfilterend = app.maxrating;
					//app.durationfilterstart = app.minduration;
					//app.durationfilterend = app.maxduration;
					$("#polz-price").slider('option', 'min', app.minprice);
					$("#polz-price").slider('option', 'max', app.maxprice);
					$("#polz-price").slider("option", "values", [ app.minprice, app.maxprice ]);
					$("#price_field").text("от " + app.minprice + " до "+ app.maxprice + " руб");
					$("#polz-reit").slider('option', 'min', app.minrating);
					$("#polz-reit").slider('option', 'max', app.maxrating);
					$("#polz-reit").slider('option', 'values', [ app.minrating, app.maxrating ]);
					$("#rating_field").text( "от " + app.minrating + " до " + app.maxrating );
					app.citysearch = searchIds;
					app.message = "Поиск завершен!";
					app.show_all = true;
					app.preloader = false;
				});
			},
			show_this_data:function(){
				this.show_data = true;
			},
			close_this_data:function(){
				this.show_data = false;
			},
			detail:function(data, apiname) {
				this.show_likethis = false;
				this.show_data = false;
				this.selected_schedule = '';
				this.selected_reviews = [];
				this.selected_guide = {};
				this.selected_description = '';
				this.selected_place = '';
				this.selected_photos = [];
				this.selected_what_include = "";
				this.selected_what_not_include = "";
				this.selected_data = data;
				this.selected_main_photo = data.result_img;
				this.selected_price = data.result_price;
				this.show_schedule = false;
				this.show_guide = false;
				this.show_reviews = false;
				this.likethisadverts = {
				Sputnik8:[],
				Tripster:[],
				Surprise_Me:[],
				Weatlas:[]
				}
				let city_ids = this.citysearch.split("|");
				$('#popup_wrap, #popup-form').removeClass("hide");
				let popupTable = document.getElementById("popup");
				$('#adv_name').html(apiname);
				$(popupTable).html('');
				printExcursion(popupTable, data);
				this.selected_title = data.result_title;
				this.selected_id = data.id;
				this.selected_apiname = apiname;
				if(this.selected_apiname == 'Tripster') {
					this.selected_guide = data.guide;
					this.selected_description = data.annotation;
					this.selected_photos = data.photos;
					this.selected_place = data.description;
					$.ajax({
						method: "POST",
						url: "<?=$this->GetFolder()?>/ajax/reviews.php",
						data: {advertiser:app.selected_apiname,adv_id:app.selected_id}
					}).done(function(response) {
						if(response != ''){
							app.selected_reviews = JSON.parse(response);
						} else {
							app.selected_reviews = [];
						}
					});
					$.ajax({
						method: "POST",
						url: "<?=$this->GetFolder()?>/ajax/schedule.php",
						data: {advertiser:app.selected_apiname,adv_id:app.selected_id}
					}).done(function(response) {
						if(response != ''){
							app.selected_schedule = JSON.parse(response);
						} else {
							app.selected_schedule = {};
						}
					});
					$.ajax({
						method: "POST",
						url: "<?=$this->GetFolder()?>/ajax/likethis.php",
						data: {advertiser:this.selected_apiname,city:city_ids[1],query:this.selected_title}
					}).done(function(response) {
						if(response != ''){
							app.likethisadverts["Tripster"] = JSON.parse(response);
							app.likethisadverts["Tripster"] = app.likethisadverts["Tripster"].filter(adv => {return adv.title != app.selected_title});
						} else {
							app.likethisadverts["Tripster"] = [];
						}
					});
				} else if(apiname == "Sputnik8"){
					this.selected_guide = data.host;
					this.selected_schedule = data["order_options"];
					this.selected_description = data.description;
					this.selected_place = data.places_to_see;
					this.selected_photos.push(data.cover_photo);
					this.selected_what_include = data.what_included;
					this.selected_what_not_include = data.what_not_included;
				} else if(apiname == "Surprise Me"){
					this.selected_place = data.attractions;
					this.selected_guide = data.author;
					this.selected_description = data.caption;
					this.selected_photos = data.images;
					if(data.reviews != false){
						this.selected_reviews = data.reviews;
					} else {
						this.selected_reviews = [];
					}
				} else if(apiname == "Weatlas"){
					this.selected_description = data.shortDescr;
					this.selected_photos = data.photos.photo;
					this.selected_what_include = data.included;
					this.selected_what_not_include = data.noincluded;
					$.ajax({
						method: "POST",
						url: "<?=$this->GetFolder()?>/ajax/reviews.php",
						data: {advertiser:app.selected_apiname,adv_id:app.selected_id}
					}).done(function(response) {
						if(response != ''){
							app.selected_reviews = JSON.parse(response);
						} else {
							app.selected_reviews = [];
						}
					});
					$.ajax({
						method: "POST",
						url: "<?=$this->GetFolder()?>/ajax/guide.php",
						data: {advertiser:app.selected_apiname,adv_id:app.selected_id}
					}).done(function(response) {
						if(response != ''){
							app.selected_guide = JSON.parse(response);
						} else {
							app.selected_guide = [];
						}
					});
				}
			},
			close:function() {
				$('#popup_wrap, #popup-form').addClass("hide");
			},
			addtocomparison:function(adv) {
				let compdata;
				this.comparison.push(adv);
				compdata = JSON.stringify(this.comparison);
				localStorage.setItem("comparison", compdata);
			},
			deletecomparison:function(ind) {
				let compdata;
				this.comparison.splice(ind, 1);
				compdata = JSON.stringify(this.comparison);
				localStorage.setItem("comparison", compdata);
			}
		},
		computed:{
			filter_url:function(){
				let resarrurl = [];
				let result_str='';
				if(this.online){
					resarrurl.push('online=y');
				}
				if(this.on_foot){
					resarrurl.push('on_foot=y');
				}
				if(this.auto){
					resarrurl.push('auto=y');
				}
				if(this.on_bus){
					resarrurl.push('on_bus=y');
				}
				if(this.on_bicycle){
					resarrurl.push('on_bicycle=y');
				}
				if(this.on_moto){
					resarrurl.push('on_moto=y');
				}
				if(this.on_ship){
					resarrurl.push('on_ship=y');
				}
				if(this.on_heli){
					resarrurl.push('on_heli=y');
				}
				if(this.on_scooter){
					resarrurl.push('on_scooter=y');
				}
				if(this.on_parag){
					resarrurl.push('on_parag=y');
				}
				if(this.on_kvadro){
					resarrurl.push('on_kvadro=y');
				}
				if(this.on_raft){
					resarrurl.push('on_raft=y');
				}
				if(this.group){
					resarrurl.push('group=y');
				}
				if(this.private){
					resarrurl.push('private=y');
				}
				if(this.mobile_adv){
					resarrurl.push('mobile_adv=y');
				}
				if(this.overview){
					resarrurl.push('overview=y');
				}
				if(this.educational){
					resarrurl.push('educational=y');
				}
				if(this.unusual){
					resarrurl.push('unusual=y');
				}
				if(this.master_class){
					resarrurl.push('master_class=y');
				}
				if(this.child_friendly){
					resarrurl.push('child_friendly=y');
				}
				if(this.museum){
					resarrurl.push('museum=y');
				}
				if(this.shoping){
					resarrurl.push('shoping=y');
				}
				if(this.gastro){
					resarrurl.push('gastro=y');
				}
				if(this.photoses){
					resarrurl.push('photoses=y');
				}
				if(this.trans){
					resarrurl.push('trans=y');
				}
				if(this.durationtype=='hours'){
					resarrurl.push('durationtype=hours');
				}
				if(this.durationtype=='day'){
					resarrurl.push('durationtype=day');
				}
				if(this.durationtype=='several'){
					resarrurl.push('durationtype=several');
				}
				if(this.pricefilterstart > this.minprice){
					resarrurl.push('pricefilterstart=' + this.pricefilterstart);
				}
				if(this.pricefilterend < this.maxprice){
					resarrurl.push('pricefilterend=' + this.pricefilterend);
				}
				if(this.ratingfilterstart > this.minrating){
					resarrurl.push('ratingfilterstart=' + this.ratingfilterstart);
				}
				if(this.ratingfilterend < this.maxrating){
					resarrurl.push('ratingfilterend=' + this.ratingfilterend);
				}
				if(this.sputnikfilter){
					resarrurl.push('sputnikfilter=y');
				}
				if(this.tripsterfilter){
					resarrurl.push('tripsterfilter=y');
				}
				if(this.surprisemefilter){
					resarrurl.push('surprisemefilter=y');
				}
				if(this.weatlasfilter){
					resarrurl.push('weatlasfilter=y');
				}
				if(this.tagsvarchecked.length > 0){
					resarrurl.push('tagsvarchecked=' + this.tagsvarchecked.join('|'));
				}
				if(this.catsvarchecked.length > 0){
					resarrurl.push('catsvarchecked=' + this.catsvarchecked.join('|'));
				}
				if(this.show_all && this.citysearch !=''){
					resarrurl.push('citysearch=' + this.citysearch);
					result_str = '?' + resarrurl.join('&');
				}
				return result_str;
			},
			alladverts:function(){
				let trip = [];
				let sput = [];
				let surp = [];
				let weat = [];
				let resArr = [];
				if(this.catsvarchecked.length == 0 && !this.weatlasfilter && !this.sputnikfilter && !this.surprisemefilter && !this.mobile_adv && !this.type_image && !this.type_video && !this.type_audio && !this.type_streetview){
					trip = this.advertsfiltered["Tripster"];
				}
				if(!this.is_new && this.tagsvarchecked.length == 0 && !this.weatlasfilter && !this.tripsterfilter && !this.surprisemefilter && !this.mobile_adv && !this.type_image && !this.type_video && !this.type_audio && !this.type_streetview){
					sput = this.advertsfiltered["Sputnik8"];
				}
				if(!this.weatlasfilter && !this.sputnikfilter && !this.tripsterfilter && !this.is_new && !this.child_friendly && this.tagsvarchecked.length == 0 && this.catsvarchecked.length == 0){
					surp = this.advertsfiltered["Surprise_Me"];
				}
				if(!this.mobile_adv && !this.surprisemefilter && !this.tripsterfilter && !this.sputnikfilter && !this.is_new && !this.child_friendly && this.tagsvarchecked.length == 0 && this.catsvarchecked.length == 0 && !this.type_image && !this.type_video && !this.type_audio && !this.type_streetview){
					weat = this.advertsfiltered["Weatlas"];
				}
				trip.forEach(adv => {
					let pvalue;
					adv.advertiser = "Tripster";
					if(adv.price.currency == "EUR"){
						adv.approximately = true;
						pvalue = adv.price.value * this.curs_euro;
					} else if(adv.price.currency == "USD"){
						adv.approximately = true;
						pvalue = adv.price.value * this.curs_dollar;
					} else if(adv.price.currency == "UAH"){
						adv.approximately = true;
						pvalue = adv.price.value * this.curs_grvn;
					} else if(adv.price.currency == "GBP"){
						adv.approximately = true;
						pvalue = adv.price.value * this.curs_funt_ster;
					}	else if(adv.price.currency == "RUB"){
						adv.approximately = false;
						pvalue = adv.price.value;
					}
					if(String(adv.duration).indexOf('дня') == -1 && String(adv.duration).indexOf('день') == -1 && String(adv.duration).indexOf('ночь') == -1 && String(adv.duration).indexOf('ночи') == -1 && String(adv.duration).indexOf('минут') == -1 && String(adv.duration).indexOf('часа') == -1  && String(adv.duration).indexOf('час') == -1 && String(adv.duration).indexOf('часов') == -1){
						adv.duration = adv.duration + ' ' + sklonenie(adv.duration, ["час", "часа", "часов"]);
					}
					adv.result_review_count = adv.review_count;
					adv.result_rating = adv.rating;
					adv.result_price = Math.round(pvalue) + ' руб';
					adv.result_title = adv.title;
					adv.result_img = adv.photos[0].thumbnail;
					adv.result_description = adv.tagline;
					adv.result_url = 'https://tp.media/r?marker=200556&p=652&u=' + adv.url;
					adv.result_meet_place = adv['meeting_point'].text;
				});
				sput.forEach(adv => {
					let pvalue;
					adv.advertiser = "Sputnik8";
					if(adv.price.indexOf("€") > -1){
						adv.approximately = true;
						pvalue = +/[0-9]+\.[0-9]+|\d+/.exec(adv.price) * this.curs_euro;
					} else if(adv.price.indexOf("$") > -1){
						adv.approximately = true;
						pvalue = +/[0-9]+\.[0-9]+|\d+/.exec(adv.price) * this.curs_dollar;
					} else if(adv.price.indexOf("грн.") > -1){
						adv.approximately = true;
						pvalue = +/[0-9]+\.[0-9]+|\d+/.exec(adv.price) * this.curs_grvn;
					} else if(adv.price.indexOf("£") > -1){
						adv.approximately = true;
						pvalue = +/[0-9]+\.[0-9]+|\d+/.exec(adv.price) * this.curs_funt_ster;
					}	else if(adv.price.indexOf("₽") > -1){
						adv.approximately = false;
						pvalue = +/[0-9]+\.[0-9]+|\d+/.exec(adv.price);
					}
					if(String(adv.duration).indexOf('дня') == -1 && String(adv.duration).indexOf('день') == -1 && String(adv.duration).indexOf('ночь') == -1 && String(adv.duration).indexOf('ночи') == -1 && String(adv.duration).indexOf('минут') == -1 && String(adv.duration).indexOf('часа') == -1  && String(adv.duration).indexOf('час') == -1 && String(adv.duration).indexOf('часов') == -1){
						adv.duration = adv.duration + ' ' + sklonenie(adv.duration, ["час", "часа", "часов"]);
					}
					adv.result_review_count = adv.reviews;
					adv.result_rating = adv.customers_review_rating;
					adv.result_price = Math.round(pvalue) + ' руб';
					adv.result_title = adv.title;
					if(adv.cover_photo != null){
						adv.result_img = adv.cover_photo.big;
					} else {
						adv.result_img = '';
					}
					adv.result_description = adv.short_info || adv.description;
					adv.result_url = 'https://tp.media/r?marker=200556&p=656&u=' + adv.url;
					adv.result_meet_place = adv['begin_place'].address;
				});
				surp.forEach(adv => {
					let pvalue;
					adv.advertiser = "Surprise Me";
					if(adv.currency.code == "EUR"){
						adv.approximately = true;
						pvalue = adv.price * this.curs_euro;
					} else if(adv.currency.code == "USD"){
						adv.approximately = true;
						pvalue = adv.price * this.curs_dollar;
					} else if(adv.currency.code == "UAH"){
						adv.approximately = true;
						pvalue = adv.price * this.curs_grvn;
					} else if(adv.currency.code == "GBP"){
						adv.approximately = true;
						pvalue = adv.price * this.curs_funt_ster;
					}	else if(adv.currency.code == "RUB"){
						adv.approximately = false;
						pvalue = adv.price;
					}
					if(String(adv.duration).indexOf('дня') == -1 && String(adv.duration).indexOf('день') == -1 && String(adv.duration).indexOf('ночь') == -1 && String(adv.duration).indexOf('ночи') == -1 && String(adv.duration).indexOf('минут') == -1 && String(adv.duration).indexOf('часа') == -1  && String(adv.duration).indexOf('час') == -1 && String(adv.duration).indexOf('часов') == -1){
						adv.duration = adv.duration + ' ' + sklonenie(adv.duration, ["час", "часа", "часов"]);
					}
					adv.result_review_count = adv.reviews_count;
					adv.result_rating = adv.rating;
					adv.result_price = Math.round(pvalue) + ' руб';
					adv.result_title = adv.name;
					adv.result_img = adv.preview_image;
					adv.result_description = adv.short_caption;
					adv.result_url = 'https://tp.media/r?marker=200556&p=4487&u=https://surprizeme.ru/ru/store/' + adv.slug + '/?sub_id=200556';
					adv.result_meet_place = adv.start_location;
				});
				weat.forEach(adv => {
					let pvalue;
					adv.advertiser = "Weatlas"
					if(adv.Currency == "EUR"){
						adv.approximately = true;
						pvalue = adv.Price * this.curs_euro;
					} else if(adv.Currency == "USD"){
						adv.approximately = true;
						pvalue = adv.Price * this.curs_dollar;
					} else if(adv.Currency == "UAH"){
						adv.approximately = true;
						pvalue = adv.Price * this.curs_grvn;
					} else if(adv.Currency == "GBP"){
						adv.approximately = true;
						pvalue = adv.Price * this.curs_funt_ster;
					}	else if(adv.Currency == "RUB"){
						adv.approximately = false;
						pvalue = adv.Price;
					}
					if(String(adv.duration).indexOf('дня') == -1 && String(adv.duration).indexOf('день') == -1 && String(adv.duration).indexOf('ночь') == -1 && String(adv.duration).indexOf('ночи') == -1 && String(adv.duration).indexOf('минут') == -1 && String(adv.duration).indexOf('часа') == -1  && String(adv.duration).indexOf('час') == -1 && String(adv.duration).indexOf('часов') == -1){
						adv.duration = adv.duration + ' ' + sklonenie(adv.duration, ["час", "часа", "часов"]);
					}
					adv.result_review_count = adv.ReviewsCount;
					adv.result_rating = adv.rating;
					adv.result_price = Math.round(pvalue) + ' руб';
					adv.result_title = adv.name;
					adv.result_img = adv.photos.photo[0].standart;
					adv.result_description = adv.shortDescr;
					adv.result_url = 'https://tp.media/r?marker=200556&p=654&u='+adv.links.order;
					adv.result_meet_place = "";
				});
				resArr = [...trip,...sput,...surp,...weat];
				if(this.sort == 'price'){
					if(this.sort_type_price == 'asc'){
						resArr = resArr.sort(function (a, b){
							let sub_result_price_a = a.result_price.replace(' руб','');
							let sub_result_price_b = b.result_price.replace(' руб','');
							return (sub_result_price_a - sub_result_price_b);
						});
					} else {
						resArr = resArr.sort(function (a, b){
							let sub_result_price_a = a.result_price.replace(' руб','');
							let sub_result_price_b = b.result_price.replace(' руб','');
							return (sub_result_price_b - sub_result_price_a);
						});
					}
				} else if(this.sort == 'rating'){
					if(this.sort_type_rate == 'asc'){
						resArr = resArr.sort(function (a, b){
							return (a.result_rating - b.result_rating);
						});
					} else {
						resArr = resArr.sort(function (a, b){
							return (b.result_rating - a.result_rating);
						});
					}
				}
				return resArr;
			},
			minrating:function(){
				let minr = this.maxrating;
					this.adverts["Tripster"].forEach(adv => {
						if(adv.rating < minr){
							minr = adv.rating;
						}
					});
					this.adverts["Sputnik8"].forEach(adv => {
						if(adv.customers_review_rating < minr){
							minr = adv.customers_review_rating;
						}
					});
					this.adverts["Surprise_Me"].forEach(adv => {
						if(adv.rating == null){
							adv.rating = 0;
						}
						if(adv.rating < minr){
							minr = adv.rating;
						}
					});
					if(this.adverts["Weatlas"].length > 0){
						if(3 < minr){
							minr = 3;
						}
					}
				return Math.floor(minr);
			},
			maxrating:function(){
				let maxr = 0;
					this.adverts["Tripster"].forEach(adv => {
						if(adv.rating > maxr){
							maxr = adv.rating;
						}
					});
					this.adverts["Sputnik8"].forEach(adv => {
						if(adv.customers_review_rating > maxr){
							maxr = adv.customers_review_rating;
						}
					});
					this.adverts["Surprise_Me"].forEach(adv => {
						if(adv.rating == null){
							adv.rating = 0;
						}
						if(adv.rating > maxr){
							maxr = adv.rating;
						}
					});
					if(this.adverts["Weatlas"].length > 0){
						if(3 > maxr){
							maxr = 3;
						}
					}
				return Math.ceil(maxr);
			},
			minprice:function(){
				let minp = this.maxprice;
					this.adverts["Tripster"].forEach(adv => {
						if(adv.price.currency == "EUR"){
							pvalue = adv.price.value * this.curs_euro;
						} else if(adv.price.currency == "USD"){
							pvalue = adv.price.value * this.curs_dollar;
						} else if(adv.price.currency == "UAH"){
							pvalue = adv.price.value * this.curs_grvn;
						} else if(adv.price.currency == "GBP"){
							pvalue = adv.price.value * this.curs_funt_ster;
						} else if(adv.price.currency == "RUB"){
							pvalue = adv.price.value;
						}
						if(pvalue < minp){
							minp = pvalue;
						}
					});
					this.adverts["Sputnik8"].forEach(adv => {
						if(adv.price.indexOf("€") > -1){
							pvalue = +/[0-9]+\.[0-9]+|\d+/.exec(adv.price) * this.curs_euro;
						} else if(adv.price.indexOf("$") > -1){
							pvalue = +/[0-9]+\.[0-9]+|\d+/.exec(adv.price) * this.curs_dollar;
						} else if(adv.price.indexOf("грн.") > -1){
							pvalue = +/[0-9]+\.[0-9]+|\d+/.exec(adv.price) * this.curs_grvn;
						} else if(adv.price.indexOf("£") > -1){
							pvalue = +/[0-9]+\.[0-9]+|\d+/.exec(adv.price) * this.curs_funt_ster;
						}	else if(adv.price.indexOf("₽") > -1){
							pvalue = +/[0-9]+\.[0-9]+|\d+/.exec(adv.price);
						}
						if(pvalue < minp){
							minp = pvalue;
						}
					});
					this.adverts["Surprise_Me"].forEach(adv => {
						if(adv.currency.code == "EUR"){
							pvalue = adv.price * this.curs_euro;
						} else if(adv.currency.code == "USD"){
							pvalue = adv.price * this.curs_dollar;
						} else if(adv.currency.code == "UAH"){
							pvalue = adv.price * this.curs_grvn;
						} else if(adv.currency.code == "GBP"){
							pvalue = adv.price * this.curs_funt_ster;
						}	else if(adv.currency.code == "RUB"){
							pvalue = adv.price;
						}
						if(pvalue < minp){
							minp = pvalue;
						}
					});
					this.adverts["Weatlas"].forEach(adv => {
						if(adv.Currency == "EUR"){
							pvalue = adv.Price * this.curs_euro;
						} else if(adv.Currency == "USD"){
							pvalue = adv.Price * this.curs_dollar;
						} else if(adv.Currency == "UAH"){
							pvalue = adv.Price * this.curs_grvn;
						} else if(adv.Currency == "GBP"){
							pvalue = adv.Price * this.curs_funt_ster;
						}	else if(adv.Currency == "RUB"){
							pvalue = adv.Price;
						}
						if(pvalue < minp){
							minp = pvalue;
						}
					});
				return Math.round(minp);
			},
			maxprice:function(){
				let maxp = 0;
				let pvalue = 0;
					this.adverts["Tripster"].forEach(adv => {
						if(adv.price.currency == "EUR"){
							pvalue = adv.price.value * this.curs_euro;
						} else if(adv.price.currency == "USD"){
							pvalue = adv.price.value * this.curs_dollar;
						} else if(adv.price.currency == "UAH"){
							pvalue = adv.price.value * this.curs_grvn;
						} else if(adv.price.currency == "GBP"){
							pvalue = adv.price.value * this.curs_funt_ster;
						} else if(adv.price.currency == "RUB"){
							pvalue = adv.price.value;
						}
						if(pvalue > maxp){
							maxp = pvalue;
						}
					});
					this.adverts["Sputnik8"].forEach(adv => {
						if(adv.price.indexOf("€") > -1){
							pvalue = +/[0-9]+\.[0-9]+|\d+/.exec(adv.price) * this.curs_euro;
						} else if(adv.price.indexOf("$") > -1){
							pvalue = +/[0-9]+\.[0-9]+|\d+/.exec(adv.price) * this.curs_dollar;
						} else if(adv.price.indexOf("грн.") > -1){
							pvalue = +/[0-9]+\.[0-9]+|\d+/.exec(adv.price) * this.curs_grvn;
						} else if(adv.price.indexOf("£") > -1){
							pvalue = +/[0-9]+\.[0-9]+|\d+/.exec(adv.price) * this.curs_funt_ster;
						}	else if(adv.price.indexOf("₽") > -1){
							pvalue = +/[0-9]+\.[0-9]+|\d+/.exec(adv.price);
						}
						if(pvalue > maxp){
							maxp = pvalue;
						}
					});
					this.adverts["Surprise_Me"].forEach(adv => {
					if(adv.currency.code == "EUR"){
						pvalue = adv.price * this.curs_euro;
					} else if(adv.currency.code == "USD"){
						pvalue = adv.price * this.curs_dollar;
					} else if(adv.currency.code == "UAH"){
						pvalue = adv.price * this.curs_grvn;
					} else if(adv.currency.code == "GBP"){
						pvalue = adv.price * this.curs_funt_ster;
					}	else if(adv.currency.code == "RUB"){
						pvalue = adv.price;
					}
					if(pvalue > maxp){
						maxp = pvalue;
					}
				});
				this.adverts["Weatlas"].forEach(adv => {
					if(adv.Currency == "EUR"){
						pvalue = adv.Price * this.curs_euro;
					} else if(adv.Currency == "USD"){
						pvalue = adv.Price * this.curs_dollar;
					} else if(adv.Currency == "UAH"){
						pvalue = adv.Price * this.curs_grvn;
					} else if(adv.Currency == "GBP"){
						pvalue = adv.Price * this.curs_funt_ster;
					}	else if(adv.Currency == "RUB"){
						pvalue = adv.Price;
					}
					if(pvalue > maxp){
						maxp = pvalue;
					}
				});
				return Math.round(maxp);
			},
			advertsfiltered:function() {
				this.pricefilteractive = false;
				this.ratingfilteractive = false;
				this.adverts["Weatlas"].forEach(adv => {
					adv.rating = 3;
				});
				this.adverts["Sputnik8"].forEach(adv => {
					if(String(adv.title).indexOf("онлайн") > -1 || String(adv.title).indexOf('Online') > -1 || String(adv.title).indexOf('Онлайн') > -1 || String(adv.title).indexOf('online') > -1 || String(adv.description).indexOf('online') > -1 || String(adv.description).indexOf('Online') > -1 || String(adv['begin_place'].address).indexOf('online') > -1 || String(adv['begin_place'].address).indexOf('Online') > -1 || String(adv.title).indexOf('Zoom') > -1 || String(adv.title).indexOf('zoom') > -1 || String(adv.description).indexOf('zoom') > -1 || String(adv.description).indexOf('Zoom') > -1 || String(adv['begin_place'].address).indexOf('zoom') > -1 || String(adv['begin_place'].address).indexOf('Zoom') > -1){
						adv.online = "Да";
					} else{
						adv.online = "Нет";
						adv.categories.forEach(cattag => {
							if(cattag.name.indexOf("Вебинары") > -1 || cattag.name.indexOf("Онлайн") > -1 || cattag.name.indexOf("Online") > -1 || cattag.name.indexOf("online") > -1){
								adv.online = "Да";
							}
						});
					}
				});
				this.adverts["Tripster"].forEach(adv => {
					if(String(adv.title).indexOf("онлайн") > -1 || String(adv.title).indexOf('Online') > -1 || String(adv.title).indexOf('Онлайн') > -1 || String(adv.title).indexOf('online') > -1 || String(adv.tagline).indexOf('online') > -1 || String(adv.tagline).indexOf('Online') > -1 || String(adv['meeting_point'].text).indexOf('online') > -1 || String(adv['meeting_point'].text).indexOf('Online') > -1 || String(adv.title).indexOf('Zoom') > -1 || String(adv.title).indexOf('zoom') > -1 || String(adv.tagline).indexOf('zoom') > -1 || String(adv.tagline).indexOf('Zoom') > -1 || String(adv['meeting_point'].text).indexOf('zoom') > -1 || String(adv['meeting_point'].text).indexOf('Zoom') > -1){
						adv.online = "Да";
					} else {
						adv.online = "Нет";
						adv.tags.forEach(advtag => {
							if(advtag.name.indexOf("Вебинары") > -1 || advtag.name.indexOf("Онлайн") > -1 || advtag.name.indexOf("Online") > -1 || advtag.name.indexOf("online") > -1) {
									adv.online = "Да";
							}
						});
					}
				});
				this.adverts["Surprise_Me"].forEach(adv => {
					if(adv.is_online){
						adv.online = "Да";
					} else {
						adv.online = "Нет";
					}
				});
				this.adverts["Weatlas"].forEach(adv => {
					if(String(adv.shortDescr).indexOf("Вебинары") > -1 || String(adv.name).indexOf("Вебинары") > -1 || String(adv.name).indexOf('Online') > -1 || String(adv.name).indexOf('Онлайн') > -1 || String(adv.name).indexOf('online') > -1 || String(adv.shortDescr).indexOf('online') > -1 || String(adv.shortDescr).indexOf('Online') > -1 || String(adv.name).indexOf('Zoom') > -1 || String(adv.name).indexOf('zoom') > -1 || String(adv.shortDescr).indexOf('zoom') > -1 || String(adv.shortDescr).indexOf('Zoom') > -1){
						adv.online = "Да";
					} else {
						adv.online = "Нет";
					}
				});
				//Свойства для сравнения
				this.adverts["Tripster"].forEach(adv => adv.comp_child_friendly = false);
				this.adverts["Sputnik8"].forEach(adv => adv.comp_child_friendly = false);
				this.adverts["Surprise_Me"].forEach(adv => adv.comp_child_friendly = false);
				this.adverts["Weatlas"].forEach(adv => adv.comp_child_friendly = false);
				this.adverts["Tripster"].forEach(adv => adv.comp_group = false);
				this.adverts["Sputnik8"].forEach(adv => adv.comp_group = false);
				this.adverts["Surprise_Me"].forEach(adv => adv.comp_group = false);
				this.adverts["Weatlas"].forEach(adv => adv.comp_group = false);
				this.adverts["Tripster"].forEach(adv => adv.comp_private = false);
				this.adverts["Sputnik8"].forEach(adv => adv.comp_private = false);
				this.adverts["Surprise_Me"].forEach(adv => adv.comp_private = false);
				this.adverts["Weatlas"].forEach(adv => adv.comp_private = false);
				this.adverts["Tripster"].forEach(adv => adv.comp_overview = false);
				this.adverts["Sputnik8"].forEach(adv => adv.comp_overview = false);
				this.adverts["Surprise_Me"].forEach(adv => adv.comp_overview = false);
				this.adverts["Weatlas"].forEach(adv => adv.comp_overview = false);
				this.adverts["Tripster"].forEach(adv => adv.comp_educational = false);
				this.adverts["Sputnik8"].forEach(adv => adv.comp_educational = false);
				this.adverts["Surprise_Me"].forEach(adv => adv.comp_educational = false);
				this.adverts["Weatlas"].forEach(adv => adv.comp_educational = false);
				this.adverts["Tripster"].forEach(adv => adv.comp_unusual = false);
				this.adverts["Sputnik8"].forEach(adv => adv.comp_unusual = false);
				this.adverts["Surprise_Me"].forEach(adv => adv.comp_unusual = false);
				this.adverts["Weatlas"].forEach(adv => adv.comp_unusual = false);
				this.adverts["Tripster"].forEach(adv => adv.comp_master_class = false);
				this.adverts["Sputnik8"].forEach(adv => adv.comp_master_class = false);
				this.adverts["Surprise_Me"].forEach(adv => adv.comp_master_class = false);
				this.adverts["Weatlas"].forEach(adv => adv.comp_master_class = false);
				this.adverts["Tripster"].forEach(adv => adv.comp_museum = false);
				this.adverts["Sputnik8"].forEach(adv => adv.comp_museum = false);
				this.adverts["Surprise_Me"].forEach(adv => adv.comp_museum = false);
				this.adverts["Weatlas"].forEach(adv => adv.comp_museum = false);
				this.adverts["Tripster"].forEach(adv => adv.comp_shoping = false);
				this.adverts["Sputnik8"].forEach(adv => adv.comp_shoping = false);
				this.adverts["Surprise_Me"].forEach(adv => adv.comp_shoping = false);
				this.adverts["Weatlas"].forEach(adv => adv.comp_shoping = false);
				this.adverts["Tripster"].forEach(adv => adv.comp_gastro = false);
				this.adverts["Sputnik8"].forEach(adv => adv.comp_gastro = false);
				this.adverts["Surprise_Me"].forEach(adv => adv.comp_gastro = false);
				this.adverts["Weatlas"].forEach(adv => adv.comp_gastro = false);
				this.adverts["Tripster"].forEach(adv => adv.comp_photoses = false);
				this.adverts["Sputnik8"].forEach(adv => adv.comp_photoses = false);
				this.adverts["Surprise_Me"].forEach(adv => adv.comp_photoses = false);
				this.adverts["Weatlas"].forEach(adv => adv.comp_photoses = false);
				this.adverts["Tripster"].forEach(adv => adv.comp_auto = false);
				this.adverts["Sputnik8"].forEach(adv => adv.comp_auto = false);
				this.adverts["Surprise_Me"].forEach(adv => adv.comp_auto = false);
				this.adverts["Weatlas"].forEach(adv => adv.comp_auto = false);
				this.adverts["Tripster"].forEach(adv => adv.comp_on_foot = false);
				this.adverts["Sputnik8"].forEach(adv => adv.comp_on_foot = false);
				this.adverts["Surprise_Me"].forEach(adv => adv.comp_on_foot = false);
				this.adverts["Weatlas"].forEach(adv => adv.comp_on_foot = false);
				this.adverts["Tripster"].forEach(adv => adv.comp_on_bus = false);
				this.adverts["Sputnik8"].forEach(adv => adv.comp_on_bus = false);
				this.adverts["Surprise_Me"].forEach(adv => adv.comp_on_bus = false);
				this.adverts["Weatlas"].forEach(adv => adv.comp_on_bus = false);
				this.adverts["Tripster"].forEach(adv => adv.comp_on_bicycle = false);
				this.adverts["Sputnik8"].forEach(adv => adv.comp_on_bicycle = false);
				this.adverts["Surprise_Me"].forEach(adv => adv.comp_on_bicycle = false);
				this.adverts["Weatlas"].forEach(adv => adv.comp_on_bicycle = false);
				this.adverts["Tripster"].forEach(adv => adv.comp_on_moto = false);
				this.adverts["Sputnik8"].forEach(adv => adv.comp_on_moto = false);
				this.adverts["Surprise_Me"].forEach(adv => adv.comp_on_moto = false);
				this.adverts["Weatlas"].forEach(adv => adv.comp_on_ship = false);
				this.adverts["Tripster"].forEach(adv => adv.comp_on_ship = false);
				this.adverts["Sputnik8"].forEach(adv => adv.comp_on_ship = false);
				this.adverts["Surprise_Me"].forEach(adv => adv.comp_on_ship = false);
				this.adverts["Weatlas"].forEach(adv => adv.comp_on_ship = false);
				this.adverts["Tripster"].forEach(adv => adv.comp_on_heli = false);
				this.adverts["Sputnik8"].forEach(adv => adv.comp_on_heli = false);
				this.adverts["Surprise_Me"].forEach(adv => adv.comp_on_heli = false);
				this.adverts["Weatlas"].forEach(adv => adv.comp_on_heli = false);
				this.adverts["Tripster"].forEach(adv => adv.comp_on_scooter = false);
				this.adverts["Sputnik8"].forEach(adv => adv.comp_on_scooter = false);
				this.adverts["Surprise_Me"].forEach(adv => adv.comp_on_scooter = false);
				this.adverts["Weatlas"].forEach(adv => adv.comp_on_scooter = false);
				this.adverts["Tripster"].forEach(adv => adv.comp_on_parag = false);
				this.adverts["Sputnik8"].forEach(adv => adv.comp_on_parag = false);
				this.adverts["Surprise_Me"].forEach(adv => adv.comp_on_parag = false);
				this.adverts["Weatlas"].forEach(adv => adv.comp_on_parag = false);
				this.adverts["Tripster"].forEach(adv => adv.comp_trans = false);
				this.adverts["Sputnik8"].forEach(adv => adv.comp_trans = false);
				this.adverts["Surprise_Me"].forEach(adv => adv.comp_trans = false);
				this.adverts["Weatlas"].forEach(adv => adv.comp_trans = false);
				this.adverts["Tripster"].forEach(adv => adv.comp_on_kvadro = false);
				this.adverts["Sputnik8"].forEach(adv => adv.comp_on_kvadro = false);
				this.adverts["Surprise_Me"].forEach(adv => adv.comp_on_kvadro = false);
				this.adverts["Weatlas"].forEach(adv => adv.comp_on_kvadro = false);
				this.adverts["Tripster"].forEach(adv => adv.comp_on_raft = false);
				this.adverts["Sputnik8"].forEach(adv => adv.comp_on_raft = false);
				this.adverts["Surprise_Me"].forEach(adv => adv.comp_on_raft = false);
				this.adverts["Weatlas"].forEach(adv => adv.comp_on_raft = false);

				this.adverts['Tripster'].forEach(adv => {
					if(adv.child_friendly == true){
						adv.comp_child_friendly = true;
					}
				});
				this.adverts['Sputnik8'].forEach(adv => {
					adv.categories.forEach(cattag => {
						if(cattag.short_name == 'Для детей'){
							adv.comp_child_friendly = true;
						}
					});
				});
				this.adverts['Tripster'].forEach(adv => {
					adv.tags.forEach(advtag => {
						if(advtag.name == 'Для детей') {
							adv.comp_child_friendly = true;
						}
					});
				});
				this.adverts['Surprise_Me'].forEach(adv => {
					if(adv.name.indexOf("для детей") > -1 || adv.name.indexOf("Для детей") > -1){
						adv.comp_child_friendly = true;
					}
				});
				this.adverts['Weatlas'].forEach(adv => {
					if(adv.name.indexOf("для детей") > -1 || adv.name.indexOf("Для детей") > -1){
						adv.comp_child_friendly = true;
					}
				});
				this.adverts['Tripster'].forEach(adv => {
					if(adv.type == 'group'){
						adv.comp_group = true;
					}
				});
				this.adverts['Sputnik8'].forEach(adv => {
					if(adv.product_type == 'shared'){
						adv.comp_group = true;
					}
				});
				this.adverts['Weatlas'].forEach(adv => {
					if(adv.name.indexOf("Груповая") > -1 || adv.name.indexOf("Груповые") > -1){
						adv.comp_group = true;
					}
				});
				this.adverts['Surprise_Me'].forEach(adv => {
					if(adv.name.indexOf("Груповая") > -1 || adv.name.indexOf("Груповые") > -1){
						adv.comp_group = true;
					}
				});
				this.adverts['Tripster'].forEach(adv => {
					if(adv.type == 'private'){
						adv.comp_private = true;
					}
				});
				this.adverts['Sputnik8'].forEach(adv => {
					if(adv.product_type == 'private'){
						adv.comp_private = true;
					}
				});
				this.adverts['Weatlas'].forEach(adv => {
					if(adv.name.indexOf("Индивидуальные") > -1 || adv.name.indexOf("Индивидуальные") > -1){
						adv.comp_private = true;
					}
				});
				this.adverts['Surprise_Me'].forEach(adv => {
					if(adv.name.indexOf("Индивидуальные") > -1 || adv.name.indexOf("Индивидуальные") > -1){
						adv.comp_private = true;
					}
				});
				this.adverts['Sputnik8'].forEach(adv => {
					adv.categories.forEach(cattag => {
						if(cattag.name.indexOf("Обзорные") > -1 || adv.title.indexOf("Обзорный") > -1){
							adv.comp_overview = true;
						}
					});
				});
				this.adverts['Tripster'].forEach(adv => {
					adv.tags.forEach(advtag => {
						if(advtag.name.indexOf("Обзорные") > -1 || adv.title.indexOf("Обзорный") > -1) {
							adv.comp_overview = true;
						}
					});
				});
				this.adverts['Weatlas'].forEach(adv => {
					if(adv.name.indexOf("Обзорные") > -1 || adv.name.indexOf("Обзорный") > -1 || adv.name.indexOf("Обзорная") > -1 || adv.name.indexOf("обзорные") > -1 || adv.name.indexOf("обзорная") > -1){
						adv.comp_overview = true;
					}
				});
				this.adverts['Surprise_Me'].forEach(adv => {
					if(adv.name.indexOf("Обзорные") > -1 || adv.name.indexOf("Обзорный") > -1 || adv.name.indexOf("Обзорная") > -1 || adv.name.indexOf("обзорные") > -1 || adv.name.indexOf("обзорная") > -1){
						adv.comp_overview = true;
					}
				});
				this.adverts['Sputnik8'].forEach(adv => {
					adv.categories.forEach(cattag => {
						if(cattag.name.indexOf("Познавательные") > -1 || cattag.name.indexOf("Познавательная") > -1){
							adv.comp_educational = true;
						}
					});
				});
				this.adverts['Tripster'].forEach(adv => {
					adv.tags.forEach(advtag => {
						if(advtag.name.indexOf("Познавательные") > -1 || advtag.name.indexOf("Познавательная") > -1) {
							adv.comp_educational = true;
						}
					});
				});
				this.adverts['Weatlas'].forEach(adv => {
					if(adv.name.indexOf("Познавательные") > -1 || adv.name.indexOf("Познавательная") > -1){
						adv.comp_educational = true;
					}
				});
				this.adverts['Surprise_Me'].forEach(adv => {
					if(adv.name.indexOf("Познавательные") > -1 || adv.name.indexOf("Познавательная") > -1){
						adv.comp_educational = true;
					}
				});
				this.adverts['Sputnik8'].forEach(adv => {
					adv.categories.forEach(cattag => {
						if(cattag.name.indexOf("Необычные") > -1){
							adv.comp_unusual = true;
						}
					});
				});
				this.adverts['Tripster'].forEach(adv => {
					adv.tags.forEach(advtag => {
						if(advtag.name.indexOf("Необычные") > -1) {
							adv.comp_unusual = true;
						}
					});
				});
				this.adverts['Surprise_Me'].forEach(adv => {
					if(adv.collection_slug == 'unusual'){
						adv.comp_unusual = true;
					}
				});
				this.adverts['Weatlas'].forEach(adv => {
					if(adv.name.indexOf("Необычные") > -1){
						adv.comp_unusual = true;
					}
				});
				this.adverts['Sputnik8'].forEach(adv => {
					adv.categories.forEach(cattag => {
						if(cattag.name.indexOf("Мастер-класс") > -1 || cattag.name.indexOf("мастер-класс") > -1){
							adv.comp_master_class = true;
						}
					});
				});
				this.adverts['Tripster'].forEach(adv => {
					adv.tags.forEach(advtag => {
						if(advtag.name.indexOf("Мастер-класс") > -1 || advtag.name.indexOf("мастер-класс") > -1) {
							adv.comp_master_class = true;
						}
					});
				});
				this.adverts['Surprise_Me'].forEach(adv => {
					if(adv.name.indexOf("Мастер-класс") > -1 || adv.name.indexOf("мастер-класс") > -1){
						adv.comp_master_class = true;
					}
				});
				this.adverts['Weatlas'].forEach(adv => {
					if(adv.name.indexOf("Мастер-класс") > -1 || adv.name.indexOf("мастер-класс") > -1){
						adv.comp_master_class = true;
					}
				});
				this.adverts['Sputnik8'].forEach(adv => {
					adv.categories.forEach(cattag => {
						if(cattag.name.indexOf("Музеи") > -1 || cattag.name.indexOf("Литературные экскурсии. Экскурсии в музеи, галереи, выставки") > -1 || cattag.name.indexOf("Экскурсии по музеям") > -1 || adv.title.indexOf("музеев") > -1 || adv.title.indexOf("музей") > -1 || adv.title.indexOf("Музей") > -1){
							adv.comp_museum = true;
						}
					});
				});
				this.adverts['Tripster'].forEach(adv => {
					adv.tags.forEach(advtag => {
						if(advtag.name.indexOf("Музеи") > -1 || advtag.name.indexOf("Литературные экскурсии. Экскурсии в музеи, галереи, выставки") > -1 || advtag.name.indexOf("Экскурсии по музеям") > -1 || adv.title.indexOf("музеев") > -1 || adv.title.indexOf("музей") > -1 || adv.title.indexOf("Музей") > -1){
							adv.comp_museum = true;
						}
					});
				});
				this.adverts['Surprise_Me'].forEach(adv => {
					if(adv.name.indexOf("Музеи") > -1 || adv.name.indexOf("музеев") > -1 || adv.name.indexOf("музей") > -1 || adv.name.indexOf("Музей") > -1){
						adv.comp_museum = true;
					}
				});
				this.adverts['Weatlas'].forEach(adv => {
					if(adv.name.indexOf("Музеи") > -1 || adv.name.indexOf("музеев") > -1 || adv.name.indexOf("музей") > -1 || adv.name.indexOf("Музей") > -1){
						adv.comp_museum = true;
					}
				});
				this.adverts['Sputnik8'].forEach(adv => {
					adv.categories.forEach(cattag => {
						if(adv.title.indexOf("За покупками") > -1 || adv.title.indexOf("Шоп-тур") > -1 || adv.title.indexOf("шоп-тур") > -1 || adv.title.indexOf("Шопинг") > -1 || cattag.name.indexOf("Шопинг") > -1 || cattag.name.indexOf("Шоппинг") > -1 || adv.title.indexOf("Шоппинг") > -1 || adv.title.indexOf("шопинг-тур") > -1 || adv.title.indexOf("shopping") > -1 || cattag.name.indexOf("shopping") > -1){
							adv.comp_shoping = true;
						}
					});
				});
				this.adverts['Tripster'].forEach(adv => {
					adv.tags.forEach(advtag => {
						if(adv.title.indexOf("За покупками") > -1 || adv.title.indexOf("Шоп-тур") > -1 || adv.title.indexOf("шоп-тур") > -1 || adv.title.indexOf("Шопинг") > -1 || advtag.name.indexOf("Шопинг") > -1 || advtag.name.indexOf("Шоппинг") > -1 || adv.title.indexOf("Шоппинг") > -1 || adv.title.indexOf("шопинг-тур") > -1 || adv.title.indexOf("shopping") > -1 || advtag.name.indexOf("shopping") > -1){
							adv.comp_shoping = true;
						}
					});
				});
				this.adverts['Surprise_Me'].forEach(adv => {
					if(adv.name.indexOf("За покупками") > -1 || adv.name.indexOf("Шоп-тур") > -1 || adv.name.indexOf("шоп-тур") > -1 || adv.name.indexOf("Шопинг") > -1 || adv.name.indexOf("Шоппинг") > -1 || adv.name.indexOf("шоппинг") > -1 || adv.name.indexOf("шопинг") > -1 || adv.name.indexOf("shopping") > -1){
						adv.comp_shoping = true;
					}
				});
				this.adverts['Weatlas'].forEach(adv => {
					if(adv.name.indexOf("За покупками") > -1 || adv.name.indexOf("Шоп-тур") > -1 || adv.name.indexOf("шоп-тур") > -1 || adv.name.indexOf("Шопинг") > -1 || adv.name.indexOf("Шоппинг") > -1 || adv.name.indexOf("шоппинг") > -1 || adv.name.indexOf("шопинг") > -1 || adv.name.indexOf("shopping") > -1){
						adv.comp_shoping = true;
					}
				});
				this.adverts['Sputnik8'].forEach(adv => {
					adv.categories.forEach(cattag => {
						if(adv.title.indexOf("дегустация") > -1 || adv.title.indexOf("Дегустация") > -1 || adv.title.indexOf("Гастрономический") > -1 || adv.title.indexOf("гастрономический") > -1 || cattag.name.indexOf("Гастрономические") > -1 || adv.title.indexOf("Кулинарный тур") > -1 || adv.title.indexOf("кулинарный тур") > -1){
							adv.comp_gastro = true;
						}
					});
				});
				this.adverts['Tripster'].forEach(adv => {
					adv.tags.forEach(advtag => {
						if(adv.title.indexOf("дегустация") > -1 || adv.title.indexOf("Дегустация") > -1 || adv.title.indexOf("Гастрономический") > -1 || adv.title.indexOf("гастрономический") > -1 || advtag.name.indexOf("Гастрономические") > -1 || adv.title.indexOf("Кулинарный тур") > -1 || adv.title.indexOf("кулинарный тур") > -1) {
							adv.comp_gastro = true;
						}
					});
				});
				this.adverts['Surprise_Me'].forEach(adv => {
					if(adv.name.indexOf("дегустация") > -1 || adv.name.indexOf("Дегустация") > -1 || adv.name.indexOf("Гастрономический") > -1 || adv.name.indexOf("гастрономический") > -1 || adv.name.indexOf("Гастрономические") > -1 || adv.name.indexOf("Кулинарный тур") > -1 || adv.name.indexOf("кулинарный тур") > -1){
						adv.comp_gastro = true;
					}
				});
				this.adverts['Weatlas'].forEach(adv => {
					if(adv.name.indexOf("дегустация") > -1 || adv.name.indexOf("Дегустация") > -1 || adv.name.indexOf("Гастрономический") > -1 || adv.name.indexOf("гастрономический") > -1 || adv.name.indexOf("Гастрономические") > -1 || adv.name.indexOf("Кулинарный тур") > -1 || adv.name.indexOf("кулинарный тур") > -1){
						adv.comp_gastro = true;
					}
				});
				this.adverts['Sputnik8'].forEach(adv => {
					adv.categories.forEach(cattag => {
						if(cattag.name.indexOf("Фотосессии") > -1){
							adv.comp_photoses = true;
						}
					});
				});
				this.adverts['Tripster'].forEach(adv => {
					adv.tags.forEach(advtag => {
						if(advtag.name.indexOf("Фотосессии") > -1) {
							adv.comp_photoses = true;
						}
					});
				});
				this.adverts['Surprise_Me'].forEach(adv => {
					if(adv.name.indexOf("Фотосессии") > -1){
						adv.comp_photoses = true;
					}
				});
				this.adverts['Weatlas'].forEach(adv => {
					if(adv.name.indexOf("Фотосессии") > -1){
						adv.comp_photoses = true;
					}
				});
				this.adverts['Sputnik8'].forEach(adv => {
					adv.categories.forEach(cattag => {
						if(adv.short_info.indexOf("на автомобиле") > -1 || adv.short_info.indexOf("автомобильная") > -1 || adv.title.indexOf("автомобильная") > -1 || adv.title.indexOf("Автомобильная") > -1 || cattag.name.indexOf("На автомобиле") > -1 || cattag.name.indexOf("на автомобиле") > -1 || cattag.name.indexOf("автомобильные") > -1){
							adv.comp_auto = true;
						}
					});
				});
				this.adverts['Tripster'].forEach(adv => {
					adv.tags.forEach(advtag => {
						if(adv.title.indexOf("автомобильная") > -1 || adv.title.indexOf("Автомобильная") > -1 || advtag.name.indexOf("На автомобиле") > -1 || advtag.name.indexOf("на автомобиле") > -1 || advtag.name.indexOf("автомобильные") > -1) {
							adv.comp_auto = true;
						}
					});
				});
				this.adverts['Surprise_Me'].forEach(adv => {
					if(adv.name.indexOf("автомобильная") > -1 || adv.name.indexOf("Автомобильная") > -1 || adv.name.indexOf("На автомобиле") > 1 || adv.name.indexOf("на автомобиле") > -1 || adv.name.indexOf("автомобильные") > -1){
						adv.comp_auto = true;
					}
				});
				this.adverts['Weatlas'].forEach(adv => {
					if(adv.name.indexOf("автомобильная") > -1 || adv.name.indexOf("Автомобильная") > -1 || adv.name.indexOf("На автомобиле") > 1 || adv.name.indexOf("на автомобиле") > -1 || adv.name.indexOf("автомобильные") > -1){
						adv.comp_auto = true;
					}
				});
				this.adverts['Sputnik8'].forEach(adv => {
					adv.categories.forEach(cattag => {
					 if(adv.title.indexOf("Пешеходная") > -1 || adv.title.indexOf("пешеходная") > -1 || cattag.name.indexOf("Пешком") > -1 || cattag.name.indexOf("пешком") > -1 || cattag.name.indexOf("Пешеходные экскурсии") > -1){
							adv.comp_on_foot = true;
						}
					});
				});
				this.adverts['Tripster'].forEach(adv => {
					adv.tags.forEach(advtag => {
						if(adv.title.indexOf("Пешеходная") > -1 || adv.title.indexOf("пешеходная") > -1 || advtag.name.indexOf("Пешком") > -1 || advtag.name.indexOf("пешком") > -1 || advtag.name.indexOf("Пешеходные экскурсии") > -1) {
							adv.comp_on_foot = true;
						}
					});
				});
				this.adverts['Surprise_Me'].forEach(adv => {
					if(adv.name.indexOf("Пешеходная") > -1 || adv.name.indexOf("пешеходная") > -1 || adv.name.indexOf("Пешком") > 1 || adv.name.indexOf("пешком") > -1 || adv.name.indexOf("Пешеходные экскурсии") > -1){
						adv.comp_on_foot = true;
					}
				});
				this.adverts['Weatlas'].forEach(adv => {
					if(adv.name.indexOf("Пешеходная") > -1 || adv.name.indexOf("пешеходная") > -1 || adv.name.indexOf("Пешком") > 1 || adv.name.indexOf("пешком") > -1 || adv.name.indexOf("Пешеходные экскурсии") > -1){
						adv.comp_on_foot = true;
					}
				});
				this.adverts['Sputnik8'].forEach(adv => {
					adv.categories.forEach(cattag => {
						if(adv.title.indexOf("автобусный") > -1 || cattag.name.indexOf("На автобусе") > -1 || cattag.name.indexOf("на автобусе") > -1 || cattag.name.indexOf("Автобусные экскурсии") > -1){
							adv.comp_on_bus = true;
						}
					});
				});
				this.adverts['Tripster'].forEach(adv => {
					adv.tags.forEach(advtag => {
						if(adv.title.indexOf("автобусный") > -1 || advtag.name.indexOf("На автобусе") > -1 || advtag.name.indexOf("на автобусе") > -1 || advtag.name.indexOf("Автобусные экскурсии") > -1) {
							adv.comp_on_bus = true;
						}
					});
				});
				this.adverts['Surprise_Me'].forEach(adv => {
					if(adv.name.indexOf("Автобусная") > -1 || adv.name.indexOf("автобусный") > -1 || adv.name.indexOf("На автобусе") > 1 || adv.name.indexOf("на автобусе") > -1 || adv.name.indexOf("Автобусные экскурсии") > -1){
						adv.comp_on_bus = true;
					}
				});
				this.adverts['Weatlas'].forEach(adv => {
					if(adv.name.indexOf("Автобусная") > -1 || adv.name.indexOf("автобусный") > -1 || adv.name.indexOf("На автобусе") > 1 || adv.name.indexOf("на автобусе") > -1 || adv.name.indexOf("Автобусные экскурсии") > -1){
						adv.comp_on_bus = true;
					}
				});
				this.adverts['Sputnik8'].forEach(adv => {
					adv.categories.forEach(cattag => {
						if(cattag.name.indexOf("На велосипеде") > -1 || cattag.name.indexOf("на велосипеде") > -1){
							adv.comp_on_bicycle = true;
						}
					});
				});
				this.adverts['Tripster'].forEach(adv => {
					adv.tags.forEach(advtag => {
						if(advtag.name.indexOf("На велосипеде") > -1 || advtag.name.indexOf("на велосипеде") > -1) {
							adv.comp_on_bicycle = true;
						}
					});
				});
				this.adverts['Surprise_Me'].forEach(adv => {
					if(adv.name.indexOf("На велосипеде") > -1 || adv.name.indexOf("на велосипеде") > -1){
						adv.comp_on_bicycle = true;
					}
				});
				this.adverts['Weatlas'].forEach(adv => {
					if(adv.name.indexOf("На велосипеде") > -1 || adv.name.indexOf("на велосипеде") > -1){
						adv.comp_on_bicycle = true;
					}
				});
				this.adverts['Sputnik8'].forEach(adv => {
					adv.categories.forEach(cattag => {
						if(adv.title.indexOf("На мотоцикле") > -1 || adv.title.indexOf("на мотоцикле") > -1 || adv.title.indexOf("Мото урок") > -1 || cattag.name.indexOf("На мотоцикле") > -1 || cattag.name.indexOf("на мотоцикле") > -1){
							adv.comp_on_moto = true;
						}
					});
				});
				this.adverts['Tripster'].forEach(adv => {
					adv.tags.forEach(advtag => {
						if(adv.title.indexOf("На мотоцикле") > -1 || adv.title.indexOf("на мотоцикле") > -1 || adv.title.indexOf("Мото урок") > -1 || advtag.name.indexOf("На мотоцикле") > -1 || advtag.name.indexOf("на мотоцикле") > -1) {
							adv.comp_on_moto = true;
						}
					});
				});
				this.adverts['Surprise_Me'].forEach(adv => {
					if(adv.name.indexOf("Мото урок") > -1 || adv.name.indexOf("На мотоцикле") > 1 || adv.name.indexOf("на мотоцикле") > -1){
						adv.comp_on_moto = true;
					}
				});
				this.adverts['Weatlas'].forEach(adv => {
					if(adv.name.indexOf("Мото урок") > -1 || adv.name.indexOf("На мотоцикле") > 1 || adv.name.indexOf("на мотоцикле") > -1){
						adv.comp_on_moto = true;
					}
				});
				this.adverts['Sputnik8'].forEach(adv => {
					adv.categories.forEach(cattag => {
						if(adv.title.indexOf("яхт") > -1 || cattag.name.indexOf("На кораблике") > -1 || cattag.name.indexOf("на кораблике") > -1 || cattag.name.indexOf("На яхте") > -1 || cattag.name.indexOf("на яхте") > -1 || cattag.name.indexOf("На катере") > -1 || cattag.name.indexOf("на катере") > -1 || cattag.name.indexOf("Круизы и речные прогулки") > -1){
							adv.comp_on_ship = true;
						}
					});
				});
				this.adverts['Tripster'].forEach(adv => {
					adv.tags.forEach(advtag => {
						if(adv.title.indexOf("яхт") > -1 || advtag.name.indexOf("На кораблике") > -1 || advtag.name.indexOf("на кораблике") > -1 || advtag.name.indexOf("На яхте") > -1 || advtag.name.indexOf("на яхте") > -1 || advtag.name.indexOf("На катере") > -1 || advtag.name.indexOf("на катере") > -1 || advtag.name.indexOf("Круизы и речные прогулки") > -1) {
							adv.comp_on_ship = true;
						}
					});
				});
				this.adverts['Surprise_Me'].forEach(adv => {
					if(adv.name.indexOf("яхт") > -1 || adv.name.indexOf("На кораблике") > -1 || adv.name.indexOf("на кораблике") > -1 || adv.name.indexOf("На яхте") > -1 || adv.name.indexOf("на яхте") > -1 || adv.name.indexOf("На катере") > -1 || adv.name.indexOf("на катере") > -1){
						adv.comp_on_ship = true;
					}
				});
				this.adverts['Weatlas'].forEach(adv => {
					if(adv.name.indexOf("яхт") > -1 || adv.name.indexOf("На кораблике") > -1 || adv.name.indexOf("на кораблике") > -1 || adv.name.indexOf("На яхте") > -1 || adv.name.indexOf("на яхте") > -1 || adv.name.indexOf("На катере") > -1 || adv.name.indexOf("на катере") > -1){
						adv.comp_on_ship = true;
					}
				});
				this.adverts['Sputnik8'].forEach(adv => {
					adv.categories.forEach(cattag => {
						if(cattag.name.indexOf("На вертолете") > -1 || cattag.name.indexOf("на вертолете") > -1){
							adv.comp_on_heli = true;
						}
					});
				});
				this.adverts['Tripster'].forEach(adv => {
					adv.tags.forEach(advtag => {
						if(advtag.name.indexOf("На вертолете") > -1 || advtag.name.indexOf("на вертолете") > -1) {
							adv.comp_on_heli = true;
						}
					});
				});
				this.adverts['Surprise_Me'].forEach(adv => {
					if(adv.name.indexOf("На вертолете") > -1 || adv.name.indexOf("на вертолете") > -1){
						adv.comp_on_heli = true;
					}
				});
				this.adverts['Weatlas'].forEach(adv => {
					if(adv.name.indexOf("На вертолете") > -1 || adv.name.indexOf("на вертолете") > -1){
						adv.comp_on_heli = true;
					}
				});
				this.adverts['Sputnik8'].forEach(adv => {
					adv.categories.forEach(cattag => {
						if(adv.title.indexOf("на самокатах") > -1 || cattag.name.indexOf("на самокатах") > -1 || cattag.name.indexOf("На самокатах") > -1){
							adv.comp_on_scooter = true;
						}
					});
				});
				this.adverts['Tripster'].forEach(adv => {
					adv.tags.forEach(advtag => {
						if(adv.title.indexOf("на самокатах") > -1 || advtag.name.indexOf("на самокатах") > -1 || advtag.name.indexOf("На самокатах") > -1) {
							adv.comp_on_scooter = true;
						}
					});
				});
				this.adverts['Surprise_Me'].forEach(adv => {
					if(adv.name.indexOf("на самокатах") > -1 || adv.name.indexOf("На самокатах") > -1){
						adv.comp_on_scooter = true;
					}
				});
				this.adverts['Weatlas'].forEach(adv => {
					if(adv.name.indexOf("на самокатах") > -1 || adv.name.indexOf("На самокатах") > -1){
						adv.comp_on_scooter = true;
					}
				});
				this.adverts['Sputnik8'].forEach(adv => {
					adv.categories.forEach(cattag => {
						if(adv.title.indexOf("Параглайдинг") > -1 || adv.title.indexOf("параглайдинг") > -1){
							adv.comp_on_parag = true;
						}
					});
				});
				this.adverts['Tripster'].forEach(adv => {
					adv.tags.forEach(advtag => {
						if(adv.title.indexOf("Параглайдинг") > -1 || adv.title.indexOf("параглайдинг") > -1) {
							adv.comp_on_parag = true;
						}
					});
				});
				this.adverts['Surprise_Me'].forEach(adv => {
					if(adv.name.indexOf("Параглайдинг") > -1 || adv.name.indexOf("параглайдинг") > -1){
						adv.comp_on_parag = true;
					}
				});
				this.adverts['Weatlas'].forEach(adv => {
					if(adv.name.indexOf("Параглайдинг") > -1 || adv.name.indexOf("параглайдинг") > -1){
						adv.comp_on_parag = true;
					}
				});
				this.adverts['Sputnik8'].forEach(adv => {
					adv.categories.forEach(cattag => {
						if(cattag.name.indexOf("Трансферы") > -1 || adv.title.indexOf("Трансферы") > -1 || adv.title.indexOf("трансферы") > -1){
							adv.comp_trans = true;
						}
					});
				});
				this.adverts['Tripster'].forEach(adv => {
					adv.tags.forEach(advtag => {
						if(advtag.name.indexOf("Трансферы") > -1 || adv.title.indexOf("Трансферы") > -1 || adv.title.indexOf("трансферы") > -1) {
							adv.comp_trans = true;
						}
					});
				});
				this.adverts['Surprise_Me'].forEach(adv => {
					if(adv.name.indexOf("Трансферы") > -1 || adv.name.indexOf("трансферы") > -1){
						adv.comp_trans = true;
					}
				});
				this.adverts['Weatlas'].forEach(adv => {
					if(adv.name.indexOf("Трансферы") > -1 || adv.name.indexOf("трансферы") > -1){
						adv.comp_trans = true;
					}
				});
				this.adverts['Sputnik8'].forEach(adv => {
					adv.categories.forEach(cattag => {
						if(cattag.name.indexOf("На квадроциклах") > -1 || adv.title.indexOf("квадроциклах") > -1){
							adv.comp_on_kvadro = true;
						}
					});
				});
				this.adverts['Tripster'].forEach(adv => {
					adv.tags.forEach(advtag => {
						if(advtag.name.indexOf("На квадроциклах") > -1 || adv.title.indexOf("квадроциклах") > -1) {
							adv.comp_on_kvadro = true;
						}
					});
				});
				this.adverts['Surprise_Me'].forEach(adv => {
					if(adv.name.indexOf("На квадроциклах") > -1 || adv.name.indexOf("на квадроциклах") > -1){
						adv.comp_on_kvadro = true;
					}
				});
				this.adverts['Weatlas'].forEach(adv => {
					if(adv.name.indexOf("На квадроциклах") > -1 || adv.name.indexOf("на квадроциклах") > -1){
						adv.comp_on_kvadro = true;
					}
				});
-
				this.adverts['Sputnik8'].forEach(adv => {
					adv.categories.forEach(cattag => {
						if(cattag.name.indexOf("Рафтинг") > -1 || adv.title.indexOf("Рафтинг") > -1 || adv.title.indexOf("рафтинг") > -1){
							adv.comp_on_raft = true;
						}
					});
				});
				this.adverts['Tripster'].forEach(adv => {
					adv.tags.forEach(advtag => {
						if(advtag.name.indexOf("Рафтинг") > -1 || adv.title.indexOf("Рафтинг") > -1 || adv.title.indexOf("рафтинг") > -1) {
							adv.comp_on_raft = true;
						}
					});
				});
				this.adverts['Surprise_Me'].forEach(adv => {
					if(adv.name.indexOf("Рафтинг") > -1 || adv.name.indexOf("рафтинг") > -1){
						adv.comp_on_raft = true;
					}
				});
				this.adverts['Weatlas'].forEach(adv => {
					if(adv.name.indexOf("Рафтинг") > -1 || adv.name.indexOf("рафтинг") > -1){
						adv.comp_on_raft = true;
					}
				});

				if(!this.on_raft && !this.on_kvadro && !this.trans && !this.on_parag && !this.on_scooter && !this.on_heli && !this.on_ship && !this.on_moto && !this.on_bicycle && !this.on_bus && !this.auto && !this.on_foot && !this.master_class && !this.unusual && !this.shoping && !this.photoses && !this.gastro && !this.museum && !this.educational && !this.overview && this.durationtype.length == 0 && !this.type_image && !this.type_video && !this.type_audio && !this.type_streetview && !this.mobile_adv && !this.surprisemefilter && !this.weatlasfilter && !this.sputnikfilter && !this.tripsterfilter && !this.online && (this.pricefilterstart == this.minprice && this.pricefilterend == this.maxprice) && (this.ratingfilterstart == this.minrating && this.ratingfilterend == this.maxrating) && this.is_new == false && this.child_friendly == false && this.group == false && this.private == false && this.tagsvarchecked.length == 0 && this.catsvarchecked.length == 0){
					this.show_pokazat = false;
					return this.adverts;
				} else {
					this.show_pokazat = true;
				}
				let resfilter = Object.assign({}, this.adverts);
				if(this.on_raft){
					resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => {
							let flag = false;
							adv.categories.forEach(cattag => {
								if(cattag.name.indexOf("Рафтинг") > -1 || adv.title.indexOf("Рафтинг") > -1 || adv.title.indexOf("рафтинг") > -1){
									flag = true;
								}
							});
							return flag;
					});
					resfilter.Tripster = resfilter.Tripster.filter(adv => {
							let flag = false;
							adv.tags.forEach(advtag => {
								if(advtag.name.indexOf("Рафтинг") > -1 || adv.title.indexOf("Рафтинг") > -1 || adv.title.indexOf("рафтинг") > -1) {
									flag = true;
								}
							});
							return flag;
					});
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => {
						return (adv.name.indexOf("Рафтинг") > -1 || adv.name.indexOf("рафтинг") > -1);
					});
					resfilter['Weatlas'] = resfilter['Weatlas'].filter(adv => {
						return (adv.name.indexOf("Рафтинг") > -1 || adv.name.indexOf("рафтинг") > -1);
					});
				}
				if(this.on_kvadro){
					resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => {
							let flag = false;
							adv.categories.forEach(cattag => {
								if(cattag.name.indexOf("На квадроциклах") > -1 || adv.title.indexOf("квадроциклах") > -1){
									flag = true;
								}
							});
							return flag;
					});
					resfilter.Tripster = resfilter.Tripster.filter(adv => {
							let flag = false;
							adv.tags.forEach(advtag => {
								if(advtag.name.indexOf("На квадроциклах") > -1 || adv.title.indexOf("квадроциклах") > -1) {
									flag = true;
								}
							});
							return flag;
					});
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => {
						return (adv.name.indexOf("На квадроциклах") > -1 || adv.name.indexOf("на квадроциклах") > -1);
					});
					resfilter['Weatlas'] = resfilter['Weatlas'].filter(adv => {
						return (adv.name.indexOf("На квадроциклах") > -1 || adv.name.indexOf("на квадроциклах") > -1);
					});
				}
				if(this.trans){
					resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => {
							let flag = false;
							adv.categories.forEach(cattag => {
								if(cattag.name.indexOf("Трансферы") > -1 || adv.title.indexOf("Трансферы") > -1 || adv.title.indexOf("трансферы") > -1){
									flag = true;
								}
							});
							return flag;
					});
					resfilter.Tripster = resfilter.Tripster.filter(adv => {
							let flag = false;
							adv.tags.forEach(advtag => {
								if(advtag.name.indexOf("Трансферы") > -1 || adv.title.indexOf("Трансферы") > -1 || adv.title.indexOf("трансферы") > -1) {
									flag = true;
								}
							});
							return flag;
					});
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => {
						return (adv.name.indexOf("Трансферы") > -1 || adv.name.indexOf("трансферы") > -1);
					});
					resfilter['Weatlas'] = resfilter['Weatlas'].filter(adv => {
						return (adv.name.indexOf("Трансферы") > -1 || adv.name.indexOf("трансферы") > -1);
					});
				}
				if(this.on_parag){
					resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => {
							let flag = false;
							adv.categories.forEach(cattag => {
								if(adv.title.indexOf("Параглайдинг") > -1 || adv.title.indexOf("параглайдинг") > -1){
									flag = true;
								}
							});
							return flag;
					});
					resfilter.Tripster = resfilter.Tripster.filter(adv => {
							let flag = false;
							adv.tags.forEach(advtag => {
								if(adv.title.indexOf("Параглайдинг") > -1 || adv.title.indexOf("параглайдинг") > -1) {
									flag = true;
								}
							});
							return flag;
					});
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => {
						return (adv.name.indexOf("Параглайдинг") > -1 || adv.name.indexOf("параглайдинг") > -1);
					});
					resfilter['Weatlas'] = resfilter['Weatlas'].filter(adv => {
						return (adv.name.indexOf("Параглайдинг") > -1 || adv.name.indexOf("параглайдинг") > -1);
					});
				}
				if(this.on_scooter){
					resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => {
							let flag = false;
							adv.categories.forEach(cattag => {
								if(adv.title.indexOf("на самокатах") > -1 || cattag.name.indexOf("на самокатах") > -1 || cattag.name.indexOf("На самокатах") > -1){
									flag = true;
								}
							});
							return flag;
					});
					resfilter.Tripster = resfilter.Tripster.filter(adv => {
							let flag = false;
							adv.tags.forEach(advtag => {
								if(adv.title.indexOf("на самокатах") > -1 || advtag.name.indexOf("на самокатах") > -1 || advtag.name.indexOf("На самокатах") > -1) {
									flag = true;
								}
							});
							return flag;
					});
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => {
						return (adv.name.indexOf("на самокатах") > -1 || adv.name.indexOf("На самокатах") > -1);
					});
					resfilter['Weatlas'] = resfilter['Weatlas'].filter(adv => {
						return (adv.name.indexOf("на самокатах") > -1 || adv.name.indexOf("На самокатах") > -1);
					});
				}
				if(this.on_heli){
					resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => {
							let flag = false;
							adv.categories.forEach(cattag => {
								if(cattag.name.indexOf("На вертолете") > -1 || cattag.name.indexOf("на вертолете") > -1){
									flag = true;
								}
							});
							return flag;
					});
					resfilter.Tripster = resfilter.Tripster.filter(adv => {
							let flag = false;
							adv.tags.forEach(advtag => {
								if(advtag.name.indexOf("На вертолете") > -1 || advtag.name.indexOf("на вертолете") > -1) {
									flag = true;
								}
							});
							return flag;
					});
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => {
						return (adv.name.indexOf("На вертолете") > -1 || adv.name.indexOf("на вертолете") > -1);
					});
					resfilter['Weatlas'] = resfilter['Weatlas'].filter(adv => {
						return (adv.name.indexOf("На вертолете") > -1 || adv.name.indexOf("на вертолете") > -1);
					});
				}
				if(this.on_ship){
					resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => {
							let flag = false;
							adv.categories.forEach(cattag => {
								if(adv.title.indexOf("яхт") > -1 || cattag.name.indexOf("На кораблике") > -1 || cattag.name.indexOf("на кораблике") > -1 || cattag.name.indexOf("На яхте") > -1 || cattag.name.indexOf("на яхте") > -1 || cattag.name.indexOf("На катере") > -1 || cattag.name.indexOf("на катере") > -1 || cattag.name.indexOf("Круизы и речные прогулки") > -1){
									flag = true;
								}
							});
							return flag;
					});
					resfilter.Tripster = resfilter.Tripster.filter(adv => {
							let flag = false;
							adv.tags.forEach(advtag => {
								if(adv.title.indexOf("яхт") > -1 || advtag.name.indexOf("На кораблике") > -1 || advtag.name.indexOf("на кораблике") > -1 || advtag.name.indexOf("На яхте") > -1 || advtag.name.indexOf("На катере") > -1 || advtag.name.indexOf("на яхте") > -1 || advtag.name.indexOf("на катере") > -1 || advtag.name.indexOf("Круизы и речные прогулки") > -1) {
									flag = true;
								}
							});
							return flag;
					});
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => {
						return (adv.name.indexOf("яхт") > -1 || adv.name.indexOf("На кораблике") > -1 || adv.name.indexOf("на кораблике") > -1 || adv.name.indexOf("На яхте") > -1 || adv.name.indexOf("на яхте") > -1 || adv.name.indexOf("На катере") > -1 || adv.name.indexOf("на катере") > -1);
					});
					resfilter['Weatlas'] = resfilter['Weatlas'].filter(adv => {
						return (adv.name.indexOf("яхт") > -1 || adv.name.indexOf("На кораблике") > -1 || adv.name.indexOf("на кораблике") > -1 || adv.name.indexOf("На яхте") > -1 || adv.name.indexOf("на яхте") > -1 || adv.name.indexOf("На катере") > -1 || adv.name.indexOf("на катере") > -1);
					});
				}
				if(this.on_moto){
					resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => {
							let flag = false;
							adv.categories.forEach(cattag => {
								if(adv.title.indexOf("На мотоцикле") > -1 || adv.title.indexOf("на мотоцикле") > -1 || adv.title.indexOf("Мото урок") > -1 || cattag.name.indexOf("На мотоцикле") > -1 || cattag.name.indexOf("на мотоцикле") > -1){
									flag = true;
								}
							});
							return flag;
					});
					resfilter.Tripster = resfilter.Tripster.filter(adv => {
							let flag = false;
							adv.tags.forEach(advtag => {
								if(adv.title.indexOf("На мотоцикле") > -1 || adv.title.indexOf("на мотоцикле") > -1 || adv.title.indexOf("Мото урок") > -1 || advtag.name.indexOf("На мотоцикле") > -1 || advtag.name.indexOf("на мотоцикле") > -1) {
									flag = true;
								}
							});
							return flag;
					});
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => {
						return (adv.name.indexOf("Мото урок") > -1 || adv.name.indexOf("На мотоцикле") > -1 || adv.name.indexOf("на мотоцикле") > -1);
					});
					resfilter['Weatlas'] = resfilter['Weatlas'].filter(adv => {
						return (adv.name.indexOf("Мото урок") > -1 || adv.name.indexOf("На мотоцикле") > -1 || adv.name.indexOf("на мотоцикле") > -1);
					});
				}
				if(this.on_bicycle){
					resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => {
							let flag = false;
							adv.categories.forEach(cattag => {
								if(cattag.name.indexOf("На велосипеде") > -1 || cattag.name.indexOf("на велосипеде") > -1){
									flag = true;
								}
							});
							return flag;
					});
					resfilter.Tripster = resfilter.Tripster.filter(adv => {
							let flag = false;
							adv.tags.forEach(advtag => {
								if(advtag.name.indexOf("На велосипеде") > -1 || advtag.name.indexOf("на велосипеде") > -1) {
									flag = true;
								}
							});
							return flag;
					});
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => {
						return (adv.name.indexOf("На велосипеде") > -1 || adv.name.indexOf("на велосипеде") > -1);
					});
					resfilter['Weatlas'] = resfilter['Weatlas'].filter(adv => {
						return (adv.name.indexOf("На велосипеде") > 1 || adv.name.indexOf("на велосипеде") > -1);
					});
				}
				if(this.on_bus){
					resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => {
							let flag = false;
							adv.categories.forEach(cattag => {
								if(adv.title.indexOf("автобусный") > -1 || cattag.name.indexOf("На автобусе") > -1 || cattag.name.indexOf("на автобусе") > -1 || cattag.name.indexOf("Автобусные экскурсии") > -1){
									flag = true;
								}
							});
							return flag;
					});
					resfilter.Tripster = resfilter.Tripster.filter(adv => {
							let flag = false;
							adv.tags.forEach(advtag => {
								if(adv.title.indexOf("автобусный") > -1 || advtag.name.indexOf("На автобусе") > -1 || advtag.name.indexOf("на автобусе") > -1 || advtag.name.indexOf("Автобусные экскурсии") > -1) {
									flag = true;
								}
							});
							return flag;
					});
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => {
						return (adv.name.indexOf("Автобусная") > -1 || adv.name.indexOf("автобусный") > -1 || adv.name.indexOf("На автобусе") > -1 || adv.name.indexOf("на автобусе") > -1 || adv.name.indexOf("Автобусные экскурсии") > -1);
					});
					resfilter['Weatlas'] = resfilter['Weatlas'].filter(adv => {
						return (adv.name.indexOf("Автобусная") > -1 || adv.name.indexOf("автобусный") > -1 || adv.name.indexOf("На автобусе") > -1 || adv.name.indexOf("на автобусе") > -1 || adv.name.indexOf("Автобусные экскурсии") > -1);
					});
				}
				if(this.on_foot){
					resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => {
							let flag = false;
							adv.categories.forEach(cattag => {
								if(adv.title.indexOf("Пешеходная") > -1 || adv.title.indexOf("пешеходная") > -1 || cattag.name.indexOf("Пешком") > -1 || cattag.name.indexOf("пешком") > -1 || cattag.name.indexOf("Пешеходные экскурсии") > -1){
									flag = true;
								}
							});
							return flag;
					});
					resfilter.Tripster = resfilter.Tripster.filter(adv => {
							let flag = false;
							adv.tags.forEach(advtag => {
								if(adv.title.indexOf("Пешеходная") > -1 || adv.title.indexOf("пешеходная") > -1 || advtag.name.indexOf("Пешком") > -1 || advtag.name.indexOf("пешком") > -1 || advtag.name.indexOf("Пешеходные экскурсии") > -1) {
									flag = true;
								}
							});
							return flag;
					});
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => {
						return (adv.name.indexOf("Пешеходная") > -1 || adv.name.indexOf("пешеходная") > -1 || adv.name.indexOf("Пешком") > 1 || adv.name.indexOf("пешком") > -1 || adv.name.indexOf("Пешеходные экскурсии") > -1);
					});
					resfilter['Weatlas'] = resfilter['Weatlas'].filter(adv => {
						return (adv.name.indexOf("Пешеходная") > -1 || adv.name.indexOf("пешеходная") > -1 || adv.name.indexOf("Пешком") > 1 || adv.name.indexOf("пешком") > -1 || adv.name.indexOf("Пешеходные экскурсии") > -1);
					});
				}
				if(this.auto){
					resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => {
							let flag = false;
							adv.categories.forEach(cattag => {
								if(adv.short_info.indexOf("на автомобиле") > -1 || adv.short_info.indexOf("автомобильная") > -1 || adv.title.indexOf("автомобильная") > -1 || adv.title.indexOf("Автомобильная") > -1 || cattag.name.indexOf("На автомобиле") > -1 || cattag.name.indexOf("на автомобиле") > -1 || cattag.name.indexOf("автомобильные") > -1){
									flag = true;
								}
							});
							return flag;
					});
					resfilter.Tripster = resfilter.Tripster.filter(adv => {
							let flag = false;
							adv.tags.forEach(advtag => {
								if(adv.title.indexOf("автомобильная") > -1 || adv.title.indexOf("Автомобильная") > -1 || advtag.name.indexOf("На автомобиле") > -1 || advtag.name.indexOf("на автомобиле") > -1 || advtag.name.indexOf("автомобильные") > -1) {
									flag = true;
								}
							});
							return flag;
					});
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => {
						return (adv.name.indexOf("автомобильная") > -1 || adv.name.indexOf("Автомобильная") > -1 || adv.name.indexOf("На автомобиле") > 1 || adv.name.indexOf("на автомобиле") > -1 || adv.name.indexOf("автомобильные") > -1);
					});
					resfilter['Weatlas'] = resfilter['Weatlas'].filter(adv => {
						return (adv.name.indexOf("автомобильная") > -1 || adv.name.indexOf("Автомобильная") > -1 || adv.name.indexOf("На автомобиле") > 1 || adv.name.indexOf("на автомобиле") > -1 || adv.name.indexOf("автомобильные") > -1);
					});
				}
				if(this.master_class){
					resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => {
							let flag = false;
							adv.categories.forEach(cattag => {
								if(cattag.name.indexOf("Мастер-класс") > -1 || cattag.name.indexOf("мастер-класс") > -1){
									flag = true;
								}
							});
							return flag;
					});
					resfilter.Tripster = resfilter.Tripster.filter(adv => {
							let flag = false;
							adv.tags.forEach(advtag => {
								if(advtag.name.indexOf("Мастер-класс") > -1 || advtag.name.indexOf("мастер-класс") > -1) {
									flag = true;
								}
							});
							return flag;
					});
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => {
						return (adv.name.indexOf("Мастер-класс") > -1 || adv.name.indexOf("мастер-класс") > -1);
					});
					resfilter['Weatlas'] = resfilter['Weatlas'].filter(adv => {
						return (adv.name.indexOf("Мастер-класс") > -1 || adv.name.indexOf("мастер-класс") > -1);
					});
				}
				if(this.unusual){
					resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => {
							let flag = false;
							adv.categories.forEach(cattag => {
								if(cattag.name.indexOf("Необычные") > -1){
									flag = true;
								}
							});
							return flag;
					});
					resfilter.Tripster = resfilter.Tripster.filter(adv => {
							let flag = false;
							adv.tags.forEach(advtag => {
								if(advtag.name.indexOf("Необычные") > -1) {
									flag = true;
								}
							});
							return flag;
					});
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => adv.collection_slug == 'unusual');
					resfilter['Weatlas'] = resfilter['Weatlas'].filter(adv => {
						return (adv.name.indexOf("Необычные") > -1);
					});
				}
				if(this.shoping){
					resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => {
							let flag = false;
							adv.categories.forEach(cattag => {
								if(adv.title.indexOf("За покупками") > -1 || adv.title.indexOf("Шоп-тур") > -1 || adv.title.indexOf("шоп-тур") > -1 || adv.title.indexOf("Шопинг") > -1 || cattag.name.indexOf("Шопинг") > -1 || cattag.name.indexOf("Шоппинг") > -1 || adv.title.indexOf("Шоппинг") > -1 || adv.title.indexOf("шопинг-тур") > -1 || cattag.name.indexOf("shopping") > -1 || adv.title.indexOf("shopping") > -1){
									flag = true;
								}
							});
							return flag;
					});
					resfilter.Tripster = resfilter.Tripster.filter(adv => {
							let flag = false;
							adv.tags.forEach(advtag => {
								if(adv.title.indexOf("За покупками") > -1 || adv.title.indexOf("Шоп-тур") > -1 || adv.title.indexOf("шоп-тур") > -1 || adv.title.indexOf("Шопинг") > -1 || advtag.name.indexOf("Шопинг") > -1 || advtag.name.indexOf("Шоппинг") > -1 || adv.title.indexOf("Шоппинг") > -1 || adv.title.indexOf("шопинг-тур") > -1 || advtag.name.indexOf("shopping") > -1 || adv.title.indexOf("shopping") > -1){
									flag = true;
								}
							});
							return flag;
					});
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => {
						return (adv.name.indexOf("За покупками") > -1 || adv.name.indexOf("Шоп-тур") > -1 || adv.name.indexOf("шоп-тур") > -1 || adv.name.indexOf("Шопинг") > -1 || adv.name.indexOf("Шоппинг") > -1 || adv.name.indexOf("шоппинг") > -1 || adv.name.indexOf("шопинг") > -1 || adv.name.indexOf("shopping") > -1);
					});
					resfilter['Weatlas'] = resfilter['Weatlas'].filter(adv => {
						return (adv.name.indexOf("За покупками") > -1 || adv.name.indexOf("Шоп-тур") > -1 || adv.name.indexOf("шоп-тур") > -1 || adv.name.indexOf("Шопинг") > -1 || adv.name.indexOf("Шоппинг") > -1 || adv.name.indexOf("шоппинг") > -1 || adv.name.indexOf("шопинг") > -1 || adv.name.indexOf("shopping") > -1);
					});
				}
				if(this.photoses){
					resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => {
							let flag = false;
							adv.categories.forEach(cattag => {
								if(cattag.name.indexOf("Фотосессии") > -1){
									flag = true;
								}
							});
							return flag;
					});
					resfilter.Tripster = resfilter.Tripster.filter(adv => {
							let flag = false;
							adv.tags.forEach(advtag => {
								if(advtag.name.indexOf("Фотосессии") > -1) {
									flag = true;
								}
							});
							return flag;
					});
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => {
						return (adv.name.indexOf("Фотосессии") > -1);
					});
					resfilter['Weatlas'] = resfilter['Weatlas'].filter(adv => {
						return (adv.name.indexOf("Фотосессии") > -1);
					});
				}
				if(this.gastro){
					resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => {
							let flag = false;
							adv.categories.forEach(cattag => {
								if(adv.title.indexOf("дегустация") > -1 || adv.title.indexOf("Дегустация") > -1 || adv.title.indexOf("Гастрономический") > -1 || adv.title.indexOf("гастрономический") > -1 || cattag.name.indexOf("Гастрономические") > -1 || adv.title.indexOf("Кулинарный тур") > -1 || adv.title.indexOf("кулинарный тур") > -1){
									flag = true;
								}
							});
							return flag;
					});
					resfilter.Tripster = resfilter.Tripster.filter(adv => {
							let flag = false;
							adv.tags.forEach(advtag => {
								if(adv.title.indexOf("дегустация") > -1 || adv.title.indexOf("Дегустация") > -1 || adv.title.indexOf("Гастрономический") > -1 || adv.title.indexOf("гастрономический") > -1 || advtag.name.indexOf("Гастрономические") > -1 || adv.title.indexOf("Кулинарный тур") > -1 || adv.title.indexOf("кулинарный тур") > -1) {
									flag = true;
								}
							});
							return flag;
					});
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => {
						return (adv.name.indexOf("дегустация") > -1 || adv.name.indexOf("Дегустация") > -1 || adv.name.indexOf("Гастрономический") > -1 || adv.name.indexOf("гастрономический") > -1 || adv.name.indexOf("Гастрономические") > -1 || adv.name.indexOf("Кулинарный тур") > -1 || adv.name.indexOf("кулинарный тур") > -1);
					});
					resfilter['Weatlas'] = resfilter['Weatlas'].filter(adv => {
						return (adv.name.indexOf("дегустация") > -1 || adv.name.indexOf("Дегустация") > -1 || adv.name.indexOf("Гастрономический") > -1 || adv.name.indexOf("гастрономический") > -1 || adv.name.indexOf("Гастрономические") > -1 || adv.name.indexOf("Кулинарный тур") > -1 || adv.name.indexOf("кулинарный тур") > -1);
					});
				}
				if(this.museum){
					resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => {
							let flag = false;
							adv.categories.forEach(cattag => {
								if(cattag.name.indexOf("Музеи") > -1 || cattag.name.indexOf("Литературные экскурсии. Экскурсии в музеи, галереи, выставки") > -1 || cattag.name.indexOf("Экскурсии по музеям") > -1 || adv.title.indexOf("музеев") > -1 || adv.title.indexOf("музей") > -1 || adv.title.indexOf("Музей") > -1){
									flag = true;
								}
							});
							return flag;
					});
					resfilter.Tripster = resfilter.Tripster.filter(adv => {
							let flag = false;
							adv.tags.forEach(advtag => {
								if(advtag.name.indexOf("Музеи") > -1 || advtag.name.indexOf("Литературные экскурсии. Экскурсии в музеи, галереи, выставки") > -1 || advtag.name.indexOf("Экскурсии по музеям") > -1 || adv.title.indexOf("музеев") > -1 || adv.title.indexOf("музей") > -1 || adv.title.indexOf("Музей") > -1) {
									flag = true;
								}
							});
							return flag;
					});
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => {
						return (adv.name.indexOf("Музеи") > -1 || adv.name.indexOf("музеев") > -1 || adv.name.indexOf("музей") > -1 || adv.name.indexOf("Музей") > -1);
					});
					resfilter['Weatlas']  = resfilter['Weatlas'].filter(adv => {
						return (adv.name.indexOf("Музеи") > -1 || adv.name.indexOf("музеев") > -1 || adv.name.indexOf("музей") > -1 || adv.name.indexOf("Музей") > -1);
					});
				}
				if(this.overview){
					resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => {
							let flag = false;
							adv.categories.forEach(cattag => {
								if(cattag.name.indexOf("Обзорные") > -1 || adv.title.indexOf("Обзорный") > -1){
									flag = true;
								}
							});
							return flag;
					});
					resfilter.Tripster = resfilter.Tripster.filter(adv => {
							let flag = false;
							adv.tags.forEach(advtag => {
								if(advtag.name.indexOf("Обзорные") > -1 || adv.title.indexOf("Обзорный") > -1) {
									flag = true;
								}
							});
							return flag;
					});
					resfilter['Weatlas']  = resfilter['Weatlas'].filter(adv => {
						return (adv.name.indexOf("Обзорные") > - 1 || adv.name.indexOf("Обзорный") > -1 || adv.name.indexOf("Обзорная") > -1 || adv.name.indexOf("обзорные") > -1 || adv.name.indexOf("обзорная") > -1);
					});
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => {
						return (adv.name.indexOf("Обзорные") > - 1 || adv.name.indexOf("Обзорный") > -1 || adv.name.indexOf("Обзорная") > -1 || adv.name.indexOf("обзорные") > -1 || adv.name.indexOf("обзорная") > -1);
					});
				}
				if(this.educational){
					resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => {
							let flag = false;
							adv.categories.forEach(cattag => {
								if(cattag.name.indexOf("Познавательные") > -1 || cattag.name.indexOf("Познавательная") > -1){
									flag = true;
								}
							});
							return flag;
					});
					resfilter.Tripster = resfilter.Tripster.filter(adv => {
							let flag = false;
							adv.tags.forEach(advtag => {
								if(advtag.name.indexOf("Познавательные") > -1 || advtag.name.indexOf("Познавательная") > -1) {
									flag = true;
								}
							});
							return flag;
					});
					resfilter['Weatlas'] = resfilter['Weatlas'].filter(adv => {
						return (adv.name.indexOf("Познавательные") > -1 || adv.name.indexOf("Познавательная") > -1);
					});
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => {
						return (adv.name.indexOf("Познавательные") > -1 || adv.name.indexOf("Познавательная") > -1);
					});
				}
				if(this.durationtype == 'hours'){
					resfilter.Tripster = resfilter.Tripster.filter(adv => +/[0-9]+\.[0-9]+|\d+/.exec(adv.duration) >= 0 && +/[0-9]+\.[0-9]+|\d+/.exec(adv.duration) <= 4);
					resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => +/[0-9]+\.[0-9]+|\d+/.exec(adv.duration) >= 0 && +/[0-9]+\.[0-9]+|\d+/.exec(adv.duration) <= 4);
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => {
						let filterflag = false;
						if(adv.duration.indexOf("–") > -1){
							let advresarr = adv.duration.replace(",",".").split("–").map(advdur => {return +/[0-9]+\.[0-9]+|\d+/.exec(advdur)});
							for(let i = advresarr[0];i <= advresarr[1];i += 0.25){
								if(i >= 0  && i <= 4){
									filterflag = true;
								}
							}
							return filterflag;
						} else 	{
							let advdurres = +/[0-9]+\.[0-9]+|\d+/.exec(adv.duration);
							return advdurres >= 0 && advdurres <= 4;
						}
					});
					resfilter['Weatlas'] = resfilter['Weatlas'].filter(adv => {
						if(adv.duration.replace("-","–").indexOf("–") > -1) {
							let filterflag = false;
							let advresarr = adv.duration.replace("-","–").replace(",",".").split("–").map(advdur => {return +/[0-9]+\.[0-9]+|\d+/.exec(advdur)});
							for(let i = advresarr[0];i <= advresarr[1];i += 0.25){
								if(i >= 0 && i <= 4){
									filterflag = true;
								}
							}
							return filterflag;
						} else if(adv.duration.indexOf('дня') > -1 || adv.duration.indexOf('день') > -1 || adv.duration.indexOf("ночь") > -1) {
							let advval = +/[0-9]+\.[0-9]+|\d+/.exec(adv.duration.replace(",",".")) * 12;
							return advval >= 0 && advval <= 4;
						} else if(adv.duration.indexOf("+") > -1){
							let advresarr = adv.duration.replace(",",".").split("+").map(advdur => {return +/[0-9]+\.[0-9]+|\d+/.exec(advdur)});
							return (advresarr[0] + advresarr[1]) >= 0 && (advresarr[0] + advresarr[1]) <= 4;
						} else if(adv.duration.indexOf("минут") > -1) { 
							let advresarr, res;
							if(adv.duration.indexOf("час") > -1 || adv.duration.indexOf("часа") > -1 || adv.duration.indexOf("часов")){
								advresarr = adv.duration.replace("10 минут",'+'+1/6).replace("20 минут",'+'+1/3).replace("30 минут",'+'+0.5).replace("40 минут",'+'+2/3).replace('50 минут','+'+5/6).split('+').map(advdur => {return +/[0-9]+\.[0-9]+|\d+/.exec(advdur)});
								res = advresarr[0] + advresarr[1];
							} else {
								res = adv.duration.replace("10 минут",1/6).replace("20 минут",1/3).replace("30 минут",0.5).replace("40 минут",2/3).replace('50 минут',5/6);
							}
							return res >= 0 && res <= 4;
						} else {
							let advdurres = +/[0-9]+\.[0-9]+|\d+/.exec(adv.duration.replace(",","."))
							return advdurres >= 0  && advdurres <= 4;
						}
					});
				} else if(this.durationtype == 'day'){
					resfilter.Tripster = resfilter.Tripster.filter(adv => +/[0-9]+\.[0-9]+|\d+/.exec(adv.duration) > 4 && +/[0-9]+\.[0-9]+|\d+/.exec(adv.duration) <= 12);
					resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => +/[0-9]+\.[0-9]+|\d+/.exec(adv.duration) > 4 && +/[0-9]+\.[0-9]+|\d+/.exec(adv.duration) <= 12);
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => {
						let filterflag = false;
						if(adv.duration.indexOf("–") > -1){
							let advresarr = adv.duration.replace(",",".").split("–").map(advdur => {return +/[0-9]+\.[0-9]+|\d+/.exec(advdur)});
							for(let i = advresarr[0];i <= advresarr[1];i += 0.25){
								if(i > 4  && i <= 12){
									filterflag = true;
								}
							}
							return filterflag;
						} else 	{
							let advdurres = +/[0-9]+\.[0-9]+|\d+/.exec(adv.duration);
							return advdurres > 4 && advdurres <= 12;
						}
					});
					resfilter['Weatlas'] = resfilter['Weatlas'].filter(adv => {
						if(adv.duration.replace("-","–").indexOf("–") > -1) {
							let filterflag = false;
							let advresarr = adv.duration.replace("-","–").replace(",",".").split("–").map(advdur => {return +/[0-9]+\.[0-9]+|\d+/.exec(advdur)});
							for(let i = advresarr[0];i <= advresarr[1];i += 0.25){
								if(i > 4 && i <= 12){
									filterflag = true;
								}
							}
							return filterflag;
						} else if(adv.duration.indexOf('дня') > -1 || adv.duration.indexOf('день') > -1 || adv.duration.indexOf("ночь") > -1) {
							let advval = +/[0-9]+\.[0-9]+|\d+/.exec(adv.duration.replace(",",".")) * 12;
							return advval > 4 && advval <= 12;
						} else if(adv.duration.indexOf("+") > -1){
							let advresarr = adv.duration.replace(",",".").split("+").map(advdur => {return +/[0-9]+\.[0-9]+|\d+/.exec(advdur)});
							return (advresarr[0] + advresarr[1]) > 4 && (advresarr[0] + advresarr[1]) <= 12;
						} else if(adv.duration.indexOf("минут") > -1) { 
							let advresarr, res;
							if(adv.duration.indexOf("час") > -1 || adv.duration.indexOf("часа") > -1 || adv.duration.indexOf("часов")){
								advresarr = adv.duration.replace("10 минут",'+'+1/6).replace("20 минут",'+'+1/3).replace("30 минут",'+'+0.5).replace("40 минут",'+'+2/3).replace('50 минут','+'+5/6).split('+').map(advdur => {return +/[0-9]+\.[0-9]+|\d+/.exec(advdur)});
								res = advresarr[0] + advresarr[1];
							} else {
								res = adv.duration.replace("10 минут",1/6).replace("20 минут",1/3).replace("30 минут",0.5).replace("40 минут",2/3).replace('50 минут',5/6);
							}
							return res > 4 && res <= 12;
						} else {
							let advdurres = +/[0-9]+\.[0-9]+|\d+/.exec(adv.duration.replace(",","."))
							return advdurres > 4  && advdurres <= 12;
						}
					});
				} else if(this.durationtype == 'several') {
					resfilter.Tripster = resfilter.Tripster.filter(adv => +/[0-9]+\.[0-9]+|\d+/.exec(adv.duration) > 12);
					resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => +/[0-9]+\.[0-9]+|\d+/.exec(adv.duration) > 12);
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => {
						let filterflag = false;
						if(adv.duration.indexOf("–") > -1){
							let advresarr = adv.duration.replace(",",".").split("–").map(advdur => {return +/[0-9]+\.[0-9]+|\d+/.exec(advdur)});
							for(let i = advresarr[0];i <= advresarr[1];i += 0.25){
								if(i > 12){
									filterflag = true;
								}
							}
							return filterflag;
						} else 	{
							let advdurres = +/[0-9]+\.[0-9]+|\d+/.exec(adv.duration);
							return advdurres > 12;
						}
					});
					resfilter['Weatlas'] = resfilter['Weatlas'].filter(adv => {
						if(adv.duration.replace("-","–").indexOf("–") > -1) {
							let filterflag = false;
							let advresarr = adv.duration.replace("-","–").replace(",",".").split("–").map(advdur => {return +/[0-9]+\.[0-9]+|\d+/.exec(advdur)});
							for(let i = advresarr[0];i <= advresarr[1];i += 0.25){
								if(i > 12){
									filterflag = true;
								}
							}
							return filterflag;
						} else if(adv.duration.indexOf('дня') > -1 || adv.duration.indexOf('день') > -1 || adv.duration.indexOf("ночь") > -1) {
							let advval = +/[0-9]+\.[0-9]+|\d+/.exec(adv.duration.replace(",",".")) * 12;
							return advval > 12;
						} else if(adv.duration.indexOf("+") > -1){
							let advresarr = adv.duration.replace(",",".").split("+").map(advdur => {return +/[0-9]+\.[0-9]+|\d+/.exec(advdur)});
							return (advresarr[0] + advresarr[1]) > 12;
						} else if(adv.duration.indexOf("минут") > -1) { 
							let advresarr, res;
							if(adv.duration.indexOf("час") > -1 || adv.duration.indexOf("часа") > -1 || adv.duration.indexOf("часов")){
								advresarr = adv.duration.replace("10 минут",'+'+1/6).replace("20 минут",'+'+1/3).replace("30 минут",'+'+0.5).replace("40 минут",'+'+2/3).replace('50 минут','+'+5/6).split('+').map(advdur => {return +/[0-9]+\.[0-9]+|\d+/.exec(advdur)});
								res = advresarr[0] + advresarr[1];
							} else {
								res = adv.duration.replace("10 минут",1/6).replace("20 минут",1/3).replace("30 минут",0.5).replace("40 минут",2/3).replace('50 минут',5/6);
							}
							return res > 12;
						} else {
							let advdurres = +/[0-9]+\.[0-9]+|\d+/.exec(adv.duration.replace(",","."))
							return advdurres > 12;
						}
					});
				}
				if(this.type_image){
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => adv.content_types.image == true);
				}
				if(this.type_video){
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => adv.content_types.video == true);
				}
				if(this.type_audio){
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => adv.content_types.audio == true);
				}
				if(this.type_streetview){
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => adv.content_types.streetview == true);
				}
				if(this.online){
					resfilter.Tripster = resfilter.Tripster.filter(adv => adv.online == 'Да');
					resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => adv.online == 'Да');
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => adv.online == 'Да');
					resfilter["Weatlas"] = resfilter["Weatlas"].filter(adv => adv.online == 'Да');
				}
				if(this.pricefilterstart != this.minprice || this.pricefilterend != this.maxprice){
					resfilter.Tripster = resfilter.Tripster.filter(adv => {
						let pvalue = 0;
						if(adv.price.currency == "EUR"){
							pvalue = adv.price.value * this.curs_euro;
						} else if(adv.price.currency == "USD"){
							pvalue = adv.price.value * this.curs_dollar;
						} else if(adv.price.currency == "UAH"){
							pvalue = adv.price.value * this.curs_grvn;
						} else if(adv.price.currency == "RUB"){
							pvalue = adv.price.value;
						}
						return Math.round(pvalue) >= this.pricefilterstart && Math.round(pvalue) <= this.pricefilterend;
					});
					resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => {
						if(adv.price.indexOf("€") > -1){
							pvalue = +/[0-9]+\.[0-9]+|\d+/.exec(adv.price) * this.curs_euro;
						} else if(adv.price.indexOf("$") > -1){
							pvalue = +/[0-9]+\.[0-9]+|\d+/.exec(adv.price) * this.curs_dollar;
						} else if(adv.price.indexOf("грн.") > -1){
							pvalue = +/[0-9]+\.[0-9]+|\d+/.exec(adv.price) * this.curs_grvn;
						} else if(adv.price.indexOf("₽") > -1){
							pvalue = +/[0-9]+\.[0-9]+|\d+/.exec(adv.price);
						}
						return Math.round(pvalue) >= this.pricefilterstart && Math.round(pvalue) <= this.pricefilterend
					});
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => {
						let pvalue = 0;
						if(adv.currency.code == "EUR"){
							pvalue = adv.price * this.curs_euro;
						} else if(adv.currency.code == "USD"){
							pvalue = adv.price * this.curs_dollar;
						} else if(adv.currency.code == "UAH"){
							pvalue = adv.price * this.curs_grvn;
						} else if(adv.currency.code == "RUB"){
							pvalue = adv.price;
						}
						return Math.round(pvalue) >= this.pricefilterstart && Math.round(pvalue) <= this.pricefilterend;
					});
					resfilter['Weatlas'] = resfilter['Weatlas'].filter(adv => {
						if(adv.Currency == "EUR"){
							pvalue = adv.Price * this.curs_euro;
						} else if(adv.Currency == "USD"){
							pvalue = adv.Price * this.curs_dollar;
						} else if(adv.Currency == "UAH"){
							pvalue = adv.Price * this.curs_grvn;
						} else if(adv.Currency == "RUB"){
							pvalue = adv.Price;
						}
						return Math.round(pvalue) >= this.pricefilterstart && Math.round(pvalue) <= this.pricefilterend;
					});
					this.pricefilteractive = true;
				}
				if(this.ratingfilterstart != this.minrating || this.ratingfilterend != this.maxrating){
					resfilter.Tripster = resfilter.Tripster.filter(adv => adv.rating >= this.ratingfilterstart && adv.rating <= this.ratingfilterend);
					resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => adv.customers_review_rating >= this.ratingfilterstart && adv.customers_review_rating <= this.ratingfilterend);
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => adv.rating >= this.ratingfilterstart && adv.rating <= this.ratingfilterend);
					resfilter['Weatlas'] = resfilter['Weatlas'].filter(adv => adv.rating >= this.ratingfilterstart && adv.rating <= this.ratingfilterend);
					this.ratingfilteractive = true;
				}
				if(this.is_new){
					resfilter.Tripster = resfilter.Tripster.filter(adv => adv.is_new == true);
				}
				if(this.mobile_adv){
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => adv.types.audioguide == true);
				}
				if(this.child_friendly) {
					resfilter.Tripster = resfilter.Tripster.filter(adv => {
							let flag = false;
							adv.tags.forEach(advtag => {
								if(advtag.name == 'Для детей') {
									flag = true;
								}
							});
							return flag || adv.child_friendly == true;
					});
					//resfilter.Tripster = resfilter.Tripster.filter(adv => adv.child_friendly == true);
					resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => {
							let flag = false;
							adv.categories.forEach(cattag => {
								if(cattag.short_name == 'Для детей'){
									flag = true;
								}
							});
							return flag;
					});
					resfilter['Weatlas']  = resfilter['Weatlas'].filter(adv => {
						return (adv.name.indexOf("для детей") > - 1 || adv.name.indexOf("Для детей") > - 1);
					});
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => {
						return (adv.name.indexOf("для детей") > - 1 || adv.name.indexOf("Для детей") > - 1);
					});
				}
				if(this.group) {
					resfilter.Tripster = resfilter.Tripster.filter(adv => adv.type == 'group');
					resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => adv.product_type == 'shared');
					resfilter['Weatlas']  = resfilter['Weatlas'].filter(adv => {
						return (adv.name.indexOf("Груповая") > - 1 || adv.name.indexOf("Груповые") > - 1);
					});
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => {
						return (adv.name.indexOf("Груповая") > - 1 || adv.name.indexOf("Груповые") > - 1);
					});
				}
				if(this.private) {
					resfilter.Tripster = resfilter.Tripster.filter(adv => adv.type == 'private');
					resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => adv.product_type == 'private');
					resfilter['Weatlas']  = resfilter['Weatlas'].filter(adv => {
						return (adv.name.indexOf("Индивидуальные") > - 1 || adv.name.indexOf("Индивидуальный") > - 1);
					});
					resfilter['Surprise_Me'] = resfilter['Surprise_Me'].filter(adv => {
						return (adv.name.indexOf("Индивидуальные") > - 1 || adv.name.indexOf("Индивидуальные") > - 1);
					});
				}
				if(this.tagsvarchecked.length > 0) {
					for(let i = 0;i < this.tagsvarchecked.length;i++){
						resfilter.Tripster = resfilter.Tripster.filter(adv => {
							let flag = false;
							adv.tags.forEach(advtag => {
								if(advtag.name == this.tagsvarchecked[i]) {
									flag = true;
								}
							});
							return flag;
						});
					}
				}
				if(this.catsvarchecked.length > 0) {
					for(let i = 0;i < this.catsvarchecked.length;i++){
						resfilter.Sputnik8 = resfilter.Sputnik8.filter(adv => {
							let flag = false;
							adv.categories.forEach(cattag => {
								if(cattag.name == this.catsvarchecked[i]){
									flag = true;
								}
							});
							return flag;
						});
					}
				}
				return resfilter;
			},
			tagscheck:function() {
				let alltags = [];
				this.adverts.Tripster.forEach(adv => {
					 adv.tags.forEach(tag => {
						if(tag.name.indexOf('Групповая') == -1 && tag.name.indexOf('Групповые') == -1 && tag.name.indexOf('детей') == -1
								&& tag.name.indexOf("Индивидуальные") == -1 && tag.name.indexOf("Индивидуальный") == -1
								&& tag.name.indexOf("Обзорные") == -1 && tag.name.indexOf("Познавательные") == -1
								&& tag.name.indexOf("Познавательная") == -1 && tag.name.indexOf("Музеи") == -1
								&& tag.name.indexOf("Гастрономические") == -1 && tag.name.indexOf("Фотосессии") == -1
								&& tag.name.indexOf("Шоппинг") == -1 && tag.name.indexOf('Необычные') == -1
								&& tag.name.indexOf('Онлайн') == -1 && tag.name.indexOf('Вебинары') == -1
								&& tag.name.indexOf('online') == -1 && tag.name.indexOf('Online') == -1
								&& tag.name.indexOf('Мастер-класс') == -1 && tag.name.indexOf('мастер-класс') == -1
								&& tag.name.indexOf("shopping") == -1 && tag.name.indexOf("На автомобиле") == -1
								&& tag.name.indexOf("на автомобиле") == -1 && tag.name.indexOf("Пешком") == -1
								&& tag.name.indexOf("пешком") == -1 && tag.name.indexOf("На автобусе") == -1
								&& tag.name.indexOf("на автобусе") == -1 && tag.name.indexOf("Автобусные экскурсии") == -1
								&& tag.name.indexOf("На велосипеде") == -1 && tag.name.indexOf("на велосипеде") == -1
								&& tag.name.indexOf("автомобильные") == -1 && tag.name.indexOf("На мотоцикле") == -1
								&& tag.name.indexOf("на мотоцикле") == -1 && tag.name.indexOf('На кораблике') == -1
								&& tag.name.indexOf('на кораблике') == -1 && tag.name.indexOf('на катере') == -1 && tag.name.indexOf('На катере') == -1 
								&& tag.name.indexOf('на яхте') == -1 && tag.name.indexOf('На яхте') == -1 && tag.name.indexOf('На вертолете') == -1
								&& tag.name.indexOf('на вертолете') == -1 && tag.name.indexOf('Пешеходные экскурсии') == -1
								&& tag.name.indexOf('Круизы и речные прогулки') == -1 && tag.name.indexOf('Экскурсии по музеям') == -1
								&& tag.name.indexOf('Литературные экскурсии. Экскурсии в музеи, галереи, выставки') == -1 && tag.name.indexOf("музей") == -1
								&& tag.name.indexOf("автобусный") == -1 && tag.name.indexOf("Кулинарный тур") == -1
								&& tag.name.indexOf("кулинарный тур") == -1 && tag.name.indexOf('на самокатах') == -1
								&& tag.name.indexOf('На самокатах') == -1 && tag.name.indexOf('Параглайдинг') == -1
								&& tag.name.indexOf('параглайдинг') == -1 && tag.name.indexOf('Все') == -1
								&& tag.name.indexOf('Трансферы') == -1 && tag.name.indexOf('трансферы') == -1
								&& tag.name.indexOf('На квадроциклах') == -1 && tag.name.indexOf('Рафтинг') == -1){
							alltags.push(tag.name);
						}
					});
				});
				return Array.from(new Set(alltags));
			},
			categoriescheck:function() {
				let allcats = [];
				this.adverts.Sputnik8.forEach(adv =>{
					adv.categories.forEach(cat => {
						if(cat.name.indexOf('Групповая') == -1 && cat.name.indexOf('Групповые') == -1 && cat.short_name.indexOf('детей') == -1
								&& cat.name.indexOf("Индивидуальные") == -1 && cat.name.indexOf("Индивидуальный") == -1
								&& cat.name.indexOf("Обзорные") == -1 && cat.name.indexOf("Познавательные") == -1
								&& cat.name.indexOf("Познавательная") == -1 && cat.name.indexOf("Музеи") == -1
								&& cat.name.indexOf("Гастрономические") == -1 && cat.name.indexOf("Фотосессии") == -1
								&& cat.name.indexOf("Шоппинг") == -1 && cat.name.indexOf('Необычные') == -1
								&& cat.name.indexOf('Онлайн') == -1 && cat.name.indexOf('Вебинары') == -1
								&& cat.name.indexOf('online') == -1 && cat.name.indexOf('Online') == -1
								&& cat.name.indexOf('Мастер-класс') == -1 && cat.name.indexOf('мастер-класс') == -1
								&& cat.name.indexOf("shopping") == -1 && cat.name.indexOf("На автомобиле") == -1
								&& cat.name.indexOf("на автомобиле") == -1 && cat.name.indexOf("Пешком") == -1
								&& cat.name.indexOf("пешком") == -1 && cat.name.indexOf("На автобусе") == -1
								&& cat.name.indexOf("на автобусе") == -1 && cat.name.indexOf("Автобусные экскурсии") == -1
								&& cat.name.indexOf("На велосипеде") == -1 && cat.name.indexOf("на велосипеде") == -1
								&& cat.name.indexOf("автомобильные") == -1 && cat.name.indexOf("На мотоцикле") == -1
								&& cat.name.indexOf("на мотоцикле") == -1 && cat.name.indexOf('На кораблике') == -1
								&& cat.name.indexOf('на кораблике') == -1 && cat.name.indexOf('на катере') == -1 && cat.name.indexOf('На катере') == -1 
								&& cat.name.indexOf('На яхте') == -1 && cat.name.indexOf('на яхте') == -1 && cat.name.indexOf('На вертолете') == -1
								&& cat.name.indexOf('на вертолете') == -1 && cat.name.indexOf('Пешеходные экскурсии') == -1
								&& cat.name.indexOf('Круизы и речные прогулки') == -1 && cat.name.indexOf('Экскурсии по музеям') == -1
								&& cat.name.indexOf('Литературные экскурсии. Экскурсии в музеи, галереи, выставки') == -1 && cat.name.indexOf("музей") == -1
								&& cat.name.indexOf("автобусный") == -1 && cat.name.indexOf("Кулинарный тур") == -1
								&& cat.name.indexOf("кулинарный тур") == -1 && cat.name.indexOf('на самокатах') == -1
								&& cat.name.indexOf('На самокатах') == -1 && cat.name.indexOf('Параглайдинг') == -1
								&& cat.name.indexOf('параглайдинг') == -1 && cat.name.indexOf('Все') == -1
								&& cat.name.indexOf('Трансферы') == -1 && cat.name.indexOf('трансферы') == -1
								&& cat.name.indexOf('На квадроциклах') == -1 && cat.name.indexOf('Рафтинг') == -1){
							allcats.push(cat.name);
						}
					});
				});
				return Array.from(new Set(allcats));
			}
		},
		created:function() {
			let compdata = localStorage.getItem('comparison');
			let $this = this;
			if(compdata != null) {
				this.comparison = JSON.parse(compdata);
			}
			/*window.addEventListener('popstate', function(){
				location.reload();
			});*/
			<?php if(isset($_GET['citysearch']) && $_GET['citysearch'] != ''):?>
				let searchIds = '<?=$_GET["citysearch"];?>';
				let search_title_arr = searchIds.split("|");
				let search_title = search_title_arr[3];
				if(search_title != ''){
					search_title = lvovich.inclineFirstname(search_title, 'dative');
					$("title").html("Экскурсии по " + search_title);
					$("h1 > span").html(search_title);
					$("#preload-city").html("по " + search_title);
				}
				this.message = "Загрузка, идет поиск";
				this.preloader = true;
				$.ajax({
					method: "POST",
					url: "<?=$this->GetFolder()?>/ajax/excursion.php",
					data: {city_excursion:searchIds}
				})
				.done(function(response) {
					$this.adverts = JSON.parse(response);
					if(window.matchMedia("(max-width: 700px)").matches){
						$this.visibletype = 'rect';
					}else{
						$this.visibletype = 'list';
					}
					$this.online = <?php if(isset($_GET["online"]) && $_GET["online"] == 'y'):?>true<?php else:?>false<?php endif;?>;
					$this.on_foot = <?php if(isset($_GET["on_foot"]) && $_GET["on_foot"] == 'y'):?>true<?php else:?>false<?php endif;?>;
					$this.auto = <?php if(isset($_GET["auto"]) && $_GET["auto"] == 'y'):?>true<?php else:?>false<?php endif;?>;
					$this.on_bus = <?php if(isset($_GET["on_bus"]) && $_GET["on_bus"] == 'y'):?>true<?php else:?>false<?php endif;?>;
					$this.on_bicycle = <?php if(isset($_GET["on_bicycle"]) && $_GET["on_bicycle"] == 'y'):?>true<?php else:?>false<?php endif;?>;
					$this.on_moto = <?php if(isset($_GET["on_moto"]) && $_GET["on_moto"] == 'y'):?>true<?php else:?>false<?php endif;?>;
					$this.on_ship = <?php if(isset($_GET["on_ship"]) && $_GET["on_ship"] == 'y'):?>true<?php else:?>false<?php endif;?>;
					$this.on_heli = <?php if(isset($_GET["on_heli"]) && $_GET["on_heli"] == 'y'):?>true<?php else:?>false<?php endif;?>;
					$this.on_scooter = <?php if(isset($_GET["on_scooter"]) && $_GET["on_scooter"] == 'y'):?>true<?php else:?>false<?php endif;?>;
					$this.on_parag = <?php if(isset($_GET["on_parag"]) && $_GET["on_parag"] == 'y'):?>true<?php else:?>false<?php endif;?>;
					$this.on_kvadro = <?php if(isset($_GET["on_kvadro"]) && $_GET["on_kvadro"] == 'y'):?>true<?php else:?>false<?php endif;?>;
					$this.on_raft = <?php if(isset($_GET["on_raft"]) && $_GET["on_raft"] == 'y'):?>true<?php else:?>false<?php endif;?>;
					$this.group = <?php if(isset($_GET["group"]) && $_GET["group"] == 'y'):?>true<?php else:?>false<?php endif;?>;
					$this.private = <?php if(isset($_GET["private"]) && $_GET["private"] == 'y'):?>true<?php else:?>false<?php endif;?>;
					$this.mobile_adv = <?php if(isset($_GET["mobile_adv"]) && $_GET["mobile_adv"] == 'y'):?>true<?php else:?>false<?php endif;?>;
					$this.overview = <?php if(isset($_GET["overview"]) && $_GET["overview"] == 'y'):?>true<?php else:?>false<?php endif;?>;
					$this.educational = <?php if(isset($_GET["educational"]) && $_GET["educational"] == 'y'):?>true<?php else:?>false<?php endif;?>;
					$this.unusual = <?php if(isset($_GET["unusual"]) && $_GET["unusual"] == 'y'):?>true<?php else:?>false<?php endif;?>;
					$this.master_class = <?php if(isset($_GET["master_class"]) && $_GET["unusual"] == 'y'):?>true<?php else:?>false<?php endif;?>;
					$this.child_friendly = <?php if(isset($_GET["child_friendly"]) && $_GET["child_friendly"] == 'y'):?>true<?php else:?>false<?php endif;?>;
					$this.museum = <?php if(isset($_GET["museum"]) && $_GET["museum"] == 'y'):?>true<?php else:?>false<?php endif;?>;
					$this.shoping = <?php if(isset($_GET["shoping"]) && $_GET["shoping"] == 'y'):?>true<?php else:?>false<?php endif;?>;
					$this.gastro = <?php if(isset($_GET["gastro"]) && $_GET["gastro"] == 'y'):?>true<?php else:?>false<?php endif;?>;
					$this.photoses = <?php if(isset($_GET["photoses"]) && $_GET["photoses"] == 'y'):?>true<?php else:?>false<?php endif;?>;
					$this.trans = <?php if(isset($_GET["trans"]) && $_GET["trans"] == 'y'):?>true<?php else:?>false<?php endif;?>;
					$this.durationtype = <?php if(isset($_GET["durationtype"]) && !empty($_GET["durationtype"])):?>['<?=$_GET["durationtype"];?>']<?php else:?>[]<?php endif;?>;
					$this.sputnikfilter = <?php if(isset($_GET["sputnikfilter"]) && $_GET["sputnikfilter"] == 'y'):?>true<?php else:?>false<?php endif;?>;
					$this.tripsterfilter = <?php if(isset($_GET["tripsterfilter"]) && $_GET["tripsterfilter"] == 'y'):?>true<?php else:?>false<?php endif;?>;
					$this.surprisemefilter = <?php if(isset($_GET["surprisemefilter"]) && $_GET["surprisemefilter"] == 'y'):?>true<?php else:?>false<?php endif;?>;
					$this.weatlasfilter = <?php if(isset($_GET["weatlasfilter"]) && $_GET["weatlasfilter"] == 'y'):?>true<?php else:?>false<?php endif;?>;
					let checkedtags = <?php if(isset($_GET["tagsvarchecked"]) && !empty($_GET["tagsvarchecked"])):?>'<?=$_GET["tagsvarchecked"];?>'<?php else:?>''<?php endif;?>;
					if(checkedtags != ''){
						$this.tagsvarchecked = checkedtags.split("|");
					}
					let checkedcats = <?php if(isset($_GET["catsvarchecked"]) && !empty($_GET["catsvarchecked"])):?>'<?=$_GET["catsvarchecked"];?>'<?php else:?>''<?php endif;?>;
					if(checkedcats != ''){
						$this.catsvarchecked = checkedcats.split("|");
					}
					$this.pricefilterstart = <?php if(isset($_GET['pricefilterstart'])):?><?=$_GET['pricefilterstart']?><?php else:?>app.minprice;<?php endif;?>;
					$this.pricefilterend = <?php if(isset($_GET['pricefilterend'])):?><?=$_GET['pricefilterend']?><?php else:?>app.maxprice;<?php endif;?>;
					$this.ratingfilterstart = <?php if(isset($_GET['ratingfilterstart'])):?><?=$_GET['ratingfilterstart']?><?php else:?>app.minrating;<?php endif;?>;
					$this.ratingfilterend = <?php if(isset($_GET['ratingfilterend'])):?><?=$_GET['ratingfilterend']?><?php else:?>app.maxrating;<?php endif;?>;
					//app.durationfilterstart = app.minduration;
					//app.durationfilterend = app.maxduration;
					$("#polz-price").slider('option', 'min', app.minprice);
					$("#polz-price").slider('option', 'max', app.maxprice);
					$("#polz-price").slider("option", "values", [ app.pricefilterstart, app.pricefilterend ]);
					$("#price_field").text("от " + app.pricefilterstart + " до "+ app.pricefilterend + " руб");
					$("#polz-reit").slider('option', 'min', app.minrating);
					$("#polz-reit").slider('option', 'max', app.maxrating);
					$("#polz-reit").slider('option', 'values', [ app.ratingfilterstart, app.ratingfilterend ]);
					$("#rating_field").text( "от " + app.ratingfilterstart + " до " + app.ratingfilterend );
					$this.citysearch = searchIds;
					$this.message = "Поиск завершен!";
					$this.show_all = true;
					$this.preloader = false;
				});
				<?php endif;?>
		},
		updated:function(){
			if(this.show_all && this.citysearch !=''){
				history.pushState('', '', this.filter_url);
			}
			let searchIds = $("#chose-select").val();
			let search_title_arr = searchIds.split("|");
			let search_title = search_title_arr[3];
			if(search_title != ''){
				search_title = lvovich.inclineFirstname(search_title, 'dative');
				//$("title").html("Экскурсии по "+search_title);
				//$("h1 > span").html(search_title);
				$("#preload-city").html("по " + search_title);
			}
		}
	});
</script>