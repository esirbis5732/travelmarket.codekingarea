<?require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle("");?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<head>
	<link href="/bitrix/css/main/bootstrap.min.css" rel="stylesheet">
    <link href="/lt-test1/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
</head>

<main id="top" class="directions">
	<div class="container">
		<h1>Поиск туров</h1>
		<div class="col-md-12" style="padding-bottom:40px;margin-top:60px;">
			<div class="row d-flex">
				<script type="text/javascript" charset="UTF=8">!(function(e,t){var n=t.createElement("div"),r=t.scripts[t.scripts.length-1],i={"width":"auto","url_params":{},"target":"_self","localStorage":false,"geoLocation":true,"search_params":{"from":{"name_en":"Moscow","iso2":"RU"},"to":null,"nights":7,"adults":2,"kids":[],"start_date":null,"flex_dates":false,"flex_nights":false,"stars":{"from":1,"to":5},"currNightsQty":7}},a="LTApiInit",o=e.LTApi,s=[{"api_key":"9d611f32b98986fd5ce01cc19c1da932"},{"api_host":"api.level.travel","public_host":"level.travel"}];r.parentNode.insertBefore(n,r),n.id="__lt-widget-place",i.place=n,o||e[a]?function t(){var n=e.LTApi;n?(n.setup(s[0],s[1]),new n.Widgets.Search(i)):setTimeout(t,100)}():function(){var n=t.createElement("script");e[a]=e[a]||{},e[a].setup=s[0],e[a].envconfig=s[1],e[a].Search=i,n.setAttribute("sync",!0),n.setAttribute("charset","UTF-8"),n.setAttribute("type","text/javascript"),n.setAttribute("src","//api.level.travel/js/5.0/open_api.js"),t.head.appendChild(n)}()})(window, document);</script>
    			<div class="search-submit"><button class="btn-search">Найти</button></div>
			</div>
		</div>
		<div class="col-md-12 col-xs-12 col-sm-12">
			<div id="loader">
				<div class="loader">
				  <div class="loader__element"></div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 filter-pos">
			<div class="col-md-12">
				<div class="row">
					<button class="btn btn-primary" id="btn-filter">Фильтр по параметрам</button>
				</div>
			</div>
			<div id="filters-list" style="display:none">
			<h4>Параметры поиска</h4>
			<div class="filter-control-container ">
				<div class="control">
					<h5><b>Цена</b></h5>
					<div class="filters__filter-container">
					  <div class="filter-budget">
						  <div class="filter-budget__cols" style="display:none;">
							<button class="filter-budget__col" id="btn-price-1"><span class="filter-budget__col-level" style="height: 44.1176%;"></span></button>
							<button class="filter-budget__col" id="btn-price-2"><span class="filter-budget__col-level" style="height: 50%;"></span></button>
							<button class="filter-budget__col filter-budget__col_active" id="btn-price-3"><span class="filter-budget__col-level" style="height: 100%;"></span></button>
							<button class="filter-budget__col" id="btn-price-4"><span class="filter-budget__col-level" style="height: 47.0588%;"></span></button>
							<button class="filter-budget__col" id="btn-price-5"><span class="filter-budget__col-level" style="height: 47.0588%;"></span></button>
							<span id="price_start" style="display:none"></span><span id="price_end" style="display:none"></span>
						</div>
						<div class="filter-budget__fields">
							<div class="filter-budget__field">
								<span class="filter-budget__field-label filter-budget__field-label_before">от</span>
								<input type="number" class="filter-budget__input cookie" placeholder="54685" value="0" id="filter_price_start"><span class="filter-budget__field-label filter-budget__field-label_after">₽</span>
							</div>
							<div class="filter-budget__field"><span class="filter-budget__field-label filter-budget__field-label_before">до</span>
							<input type="number" class="filter-budget__input cookie" placeholder="1410376" value="0" id="filter_price_end"><span class="filter-budget__field-label filter-budget__field-label_after">₽</span>
						</div>
						</div>
					  </div>
					</div>
				</div>
			</div>
			<div class="filter-control-container ">
				<div class="control">
					<h5><b>Поиск отеля по названию</b></h5>
					<div class="filter-name">
						<i class="search-icon"></i>
						<input type="text" id="filter-name__input" class="filter-name__input cookie" placeholder="Введите название отеля" value="">
					</div>
				</div>
			</div>
			<div class="filter-control-container ">
				<div class="control">
					<h5><b>Рейтинг отеля</b></h5>
					<div class="filter-rating">
						<div class="switcher switcher_asc filter-rating__switcher filter-rating__switcher_asc">
						  <ul class="switcher__list filter-rating__switcher-list">
							<li class="switcher__item switcher__item_active" id="switcher__item"><a class="switcher__button">Любой</a></li>
							<li class="switcher__item cookie" id="switcher__item_6"><a class="switcher__button">6+</a></li>
							<li class="switcher__item cookie" id="switcher__item_7"><a class="switcher__button">7+</a></li>
							<li class="switcher__item cookie" id="switcher__item_8"><a class="switcher__button">8+</a></li>
							<li class="switcher__item cookie" id="switcher__item_9"><a class="switcher__button">9+<span class="switcher__arrow switcher__arrow_asc filter-rating__switcher-arrow filter-rating__switcher-arrow_asc"></span></a></li>
						  </ul>
						</div>
					</div>
				</div>
			</div>
			<div class="filter-control-container ">
				<div class="control">
					<h5><b>Расстояние до моря</b></h5>
					<div class="filter-rating">
						<div class="switcher switcher_asc filter-rating__switcher filter-rating__switcher_asc">
						  <ul class="switcher__list filter-rating__switcher-list">
							<li class="z_switcher__item_s switcher__item_active" id="z_switcher__item_s"><a href="#" class="switcher__button filter-rating__switcher-button">Любое</a></li>
							<li class="z_switcher__item_s cookie" id="z_switcher__item_s_1"><a class="switcher__button">1-я линия</a></li>
							<li class="z_switcher__item_s cookie" id="z_switcher__item_s_2"><a class="switcher__button">2-я</a></li>
							<li class="z_switcher__item_s cookie" id="z_switcher__item_s_3"><a class="switcher__button">3-я<span class="switcher__arrow switcher__arrow_asc filter-rating__switcher-arrow filter-rating__switcher-arrow_asc"></span></a></li>
						  </ul>
						</div>
					</div>
				</div>
			</div>
			<div class="filter-control-container ">
				<div class="control">
					<h5><b>Туроператор</b></h5>
						<div class="filters__filter-container">
							<div class="checkbox-group filter-operator__checkbox-group">
								<ul class="checkbox-group__list filter-operator__list">
									<li class="checkbox-group__item filter-operator__item">
										<div class="checkbox-group__item-container filter-operator__item-container">
											<input  type="checkbox" value="0" class="cookie" role="filter-option" name="travelata" id="filter_tours_travelata">
											<label class="checkbox__label checkbox-group__item-label filter-operator__item-label m-5" for="filter_tours_travelata">
												<div class="min-price-label__container">
													<div class="min-price-label__item-label"><img style="max-width: 100px;" src="/lt-test1/images/79.jpg"></div>
													<div class="min-price-label">
														<div><span id="txt_travelata_min_price" class="travelata_min_price cookie"></span></div>
													</div>
												</div>
											</label>
										</div>
									</li>
									<li class="checkbox-group__item filter-operator__item">
										<div class="checkbox-group__item-container filter-operator__item-container">
											<input type="checkbox" value="0" class="cookie" role="filter-option" name="0" id="filter_tours_leveltravel">
											<label class="checkbox__label checkbox-group__item-label filter-operator__item-label m-5" for="filter_tours_leveltravel">
												<div class="min-price-label__container">
													<div class="min-price-label__item-label"><img style="max-width: 100px;" src="/lt-test1/images/level-travel-photo-normal.png"></div>
													<div class="min-price-label">
														<div><span id="txt_leveltravel_min_price" class="leveltravel_min_price cookie"></span></div>
													</div>
												</div>
											</label>
										</div>
									</li>
									<li class="checkbox-group__item filter-operator__item">
										<div class="checkbox-group__item-container filter-operator__item-container">
											<input type="checkbox" class="cookie" value="0" role="filter-option" name="0" id="filter_tours_sletatru">
											<label class="checkbox__label checkbox-group__item-label filter-operator__item-label m-5" for="filter_tours_sletatru">
												<div class="min-price-label__container">
													<div class="min-price-label__item-label"><img style="max-width: 100px;" src="/lt-test1/images/smC8DNaFKkk.jpg"></div>
													<div class="min-price-label">
														<div><span id="txt_sletatru_min_price" class="sletatru_min_price cookie"></span></div>
													</div>
												</div>
											</label>
										</div>
									</li>
								</ul>
							</div>
						</div>
				</div>
			</div>
			<div class="filter-control-container ">
				<div class="control">
					<h5><b>Количество звезд</b></h5>
						<div class="filters__filter-container">
							<div class="checkbox-group filter-operator__checkbox-group">
								<ul class="checkbox-group__list filter-operator__list">
									<li class="checkbox-group__item filter-operator__item">
										<div class="checkbox-group__item-container filter-operator__item-container">
											<input  type="checkbox" value="0" class="cookie" role="filter-option" name="travelata" id="stars_filter_5">
											<label class="checkbox__label checkbox-group__item-label filter-operator__item-label m-5" for="stars_filter_5">
												<div class="min-price-label__container">
													<div class="hotel-stars"><div class="hotel-stars-current hotel-stars-current_5"></div></div>
												</div>
											</label>
										</div>
									</li>
									<li class="checkbox-group__item filter-operator__item">
										<div class="checkbox-group__item-container filter-operator__item-container">
											<input type="checkbox" value="0" class="cookie" role="filter-option" name="0" id="stars_filter_4">
											<label class="checkbox__label checkbox-group__item-label filter-operator__item-label m-5" for="stars_filter_4">
												<div class="min-price-label__container">
													<div class="hotel-stars"><div class="hotel-stars-current hotel-stars-current_4"></div></div>
												</div>
											</label>
										</div>
									</li>
									<li class="checkbox-group__item filter-operator__item">
										<div class="checkbox-group__item-container filter-operator__item-container">
											<input type="checkbox" value="0" class="cookie" role="filter-option" name="0" id="stars_filter_3">
											<label class="checkbox__label checkbox-group__item-label filter-operator__item-label m-5" for="stars_filter_3">
												<div class="min-price-label__container">
													<div class="hotel-stars"><div class="hotel-stars-current hotel-stars-current_3"></div></div>
												</div>
											</label>
										</div>
									</li>
									<li class="checkbox-group__item filter-operator__item">
										<div class="checkbox-group__item-container filter-operator__item-container">
											<input type="checkbox" value="0" class="cookie" role="filter-option" name="0" id="stars_filter_2">
											<label class="checkbox__label checkbox-group__item-label filter-operator__item-label m-5" for="stars_filter_2">
												<div class="min-price-label__container">
													<div class="hotel-stars"><div class="hotel-stars-current hotel-stars-current_2"></div></div>
												</div>
											</label>
										</div>
									</li>
									<li class="checkbox-group__item filter-operator__item">
										<div class="checkbox-group__item-container filter-operator__item-container">
											<input type="checkbox" value="0" class="cookie" role="filter-option" name="0" id="stars_filter_1">
											<label class="checkbox__label checkbox-group__item-label filter-operator__item-label m-5" for="stars_filter_1">
												<div class="min-price-label__container">
													<div class="hotel-stars"><div class="hotel-stars-current hotel-stars-current_1"></div></div>
												</div>
											</label>
										</div>
									</li>
								</ul>
							</div>
						</div>
				</div>
			</div>
			<div class="filter-control-container ">
				<div class="control">
					<h5><b>Питание</b></h5>
					<div class="filters__filter-container">
							<div class="checkbox-group filter-operator__checkbox-group">
								<ul class="checkbox-group__list filter-operator__list">
									<li class="checkbox-group__item filter-operator__item">
										<div class="checkbox-group__item-container filter-operator__item-container">
											<input  type="checkbox" value="0" class="cookie" role="filter-option" id="filter_pansion_BB">
											<label class="checkbox__label checkbox-group__item-label filter-operator__item-label m-5" for="filter_pansion_BB">
												<div class="min-price-label__container">
													<div class="min-price-label__item-label">Завтрак</div>
												</div>
											</label>
										</div>
									</li>
									<li class="checkbox-group__item filter-operator__item">
										<div class="checkbox-group__item-container filter-operator__item-container">
											<input type="checkbox" value="0" class="cookie" role="filter-option" id="filter_pansion_HB">
											<label class="checkbox__label checkbox-group__item-label filter-operator__item-label m-5" for="filter_pansion_HB">
												<div class="min-price-label__container">
													<div class="min-price-label__item-label">2-х разовое питание</div>
												</div>
											</label>
										</div>
									</li>
									<li class="checkbox-group__item filter-operator__item">
										<div class="checkbox-group__item-container filter-operator__item-container">
											<input type="checkbox" value="0" class="cookie" role="filter-option" id="filter_pansion_FB">
											<label class="checkbox__label checkbox-group__item-label filter-operator__item-label m-5" for="filter_pansion_FB">
												<div class="min-price-label__container">
													<div class="min-price-label__item-label">3-х разовое питание</div>
												</div>
											</label>
										</div>
									</li>
									<li class="checkbox-group__item filter-operator__item">
										<div class="checkbox-group__item-container filter-operator__item-container">
											<input type="checkbox" value="0" class="cookie" role="filter-option" id="filter_pansion_AI">
											<label class="checkbox__label checkbox-group__item-label filter-operator__item-label m-5" for="filter_pansion_AI">
												<div class="min-price-label__container">
													<div class="min-price-label__item-label">All Inclusive</div>
												</div>
											</label>
										</div>
									</li>
									<li class="checkbox-group__item filter-operator__item">
										<div class="checkbox-group__item-container filter-operator__item-container">
											<input type="checkbox" value="0" class="cookie" role="filter-option" id="filter_pansion_UAI">
											<label class="checkbox__label checkbox-group__item-label filter-operator__item-label m-5" for="filter_pansion_UAI">
												<div class="min-price-label__container">
													<div class="min-price-label__item-label">Ultra All Inclusive</div>
												</div>
											</label>
										</div>
									</li>
									<li class="checkbox-group__item filter-operator__item">
										<div class="checkbox-group__item-container filter-operator__item-container">
											<input type="checkbox" value="0" class="cookie" role="filter-option" id="filter_pansion_RO">
											<label class="checkbox__label checkbox-group__item-label filter-operator__item-label m-5" for="filter_pansion_RO">
												<div class="min-price-label__container">
													<div class="min-price-label__item-label">Без питания</div>
												</div>
											</label>
										</div>
									</li>
								</ul>
							</div>
						</div>
				</div>
			</div>
		</div>
		</div>
		<div class="col-lg-9 col-md-9 col-xs-12 col-sm-12">
			<a href="#content"></a>
			<div class="hotels-counter">
				<span>Найдено: </span> <button id="link-lt">Level.Travel</button><span class="cookie" id="link-lt-text"></span><button id="link-tl">Travelata</button><span class="cookie" id="link-tl-text"></span><button id="link-sletat">Слетать.Ру</button><span class="cookie" id="link-sletat-text"></span><button id="link-all">Всего</button><span class="cookie" id="link-all-text"></span>
			</div>
			<div class="row">
				<div class="tours_all"></div>
				<div class="tours_travelata"></div>
				<div class="tours_leveltravel"></div>
				<div class="tours_sletatru"></div>
				<button class="btn btn-primary btn-lg btn-ajax cookie" id="ajax_load" data-load="2">Показать еще туры</button>
			</div>
		</div>
	</div>
</main>

    <script src="/lt-test1/script.js"></script>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>