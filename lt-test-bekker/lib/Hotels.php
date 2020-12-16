<?php

namespace hotTours;

/**
 * Класс результат поиска тура
 */
class Hotels
{
	public $name;//наименование отеля
	public $hotel_url;//ссылка на отель
	public $hotel_img;//картинка
	public $country;//Страна
	public $region;//регион, Город
	public $rating;//рейтинг отеля
	public $stars; //количество звезд
	public $price; //цена
	public $line; //линия, пляж
	public $beachType;//тип пляжа
	public $beachDistance;//расстояние до пляжа
	public $airportDistance;//расстояние до аэропорта
	public $touristcount;//количество туристов
	public $pansion;//питание
	public $nightcount;//количество ночей
	public $description;//описание
	public $checkin; //дата заезда
	public $checkout;//дата выезда
	public $brand;
    public function __construct() {
    }
	protected function getNight($number) 
	{
		if ($number==11)return "ночей";
		$mod = $number / 10.0;
		$val = strval($mod).explode(".");
		if ($val[2] == 1) return "ночь";
		if ($val[2] >1 && $val[2]< 5) return "ночи";
		return "ночей";
  	}
	//класс питание для фильтра
	public function GetClassPansion($pansions)
	{
		$class="pansion_type ";
		$arr = explode("|",$pansions);
		foreach($arr as $item)
		{
			$item = str_replace("+","",$item);
			$item = str_replace("-","",$item);
			$class.="pansion_".$item." ";
		}
		return $class;
	}
	//расшифровка питания
	public function GetPansionFromCode($pansions)
	{
		$result="";
		$arr = explode("|",$pansions);
		foreach($arr as $item)
		{
			$item = str_replace("+","",$item);
			$item = str_replace("-","",$item);
			if ($item == "UAI") $result.="Ultra All Inclusive, ";
			if ($item == "AI") $result.="All Inclusive, ";
			if ($item == "FB") $result.="Трехразовое питание, ";
			if ($item == "HB") $result.="Двухразовое питание, ";
			if ($item == "BB") $result.="Завтрак, ";
			if ($item == "RO") $result.="Без питания, ";
		}
		return substr($result, 0, -2);;
	}

	//расшифровка типа пляжа
	public function GetBeachType($beachType)
	{
		$beachType = str_replace("SAND","песок",$beachType);
		$beachType = str_replace("PEBBLE","галька",$beachType);
		return $beachType;
	}
	//получение html разметки для Level.travel
	public function GetLevelTravelHtml()
	{
		$html="";
		$txt_night = $this->getNight($this->nightcount);
		$line_html="";$beach_html="";$distance_html="";$airplane_html="";
		$rating_html="";
		if (!empty($this->rating))
		{
			$rating_html="<div class='hotel-rating hotel-rating_good'><span class='hotel-rating-value'>$this->rating</span></div>";
			if(floatval($this->rating) >= 9) $rating_html="<div class='hotel-rating hotel-rating_super hotel-rating_good'><span class='hotel-rating-value'>$this->rating</span></div>";
			if(floatval($this->rating) <= 8) $rating_html="<div class='hotel-rating hotel-rating_norm'><span class='hotel-rating-value'>$this->rating</span></div>";
		}
		if (!empty($this->line))$line_html= "<li class='hotel__fact-container'>
											<div class='hotel__fact hotel__fact_line'>
											  <svg style='width: 60px;height: 34px;' id='smd-hotel-line-2' viewBox='0 0 60 34'> <g stroke-width='1' transform='translate(7 5)' fill='none' fill-rule='evenodd'> <rect x='4.5' y='1.5' width='38' height='22' rx='11'></rect> <path d='M6.692 25.003C3.095 22.593 0 18.153 0 11.813 0 5.413 5.298.975 6.692 0'></path> </g> </svg>
											  <span class='hotel__fact-text'>$this->line-я</span>
											  <div class='hotel__fact-label'>линия</div>
											</div>
											</li>";
			if(!empty($this->beachType))
			{
				$this->beachType = $this->GetBeachType($this->beachType);
				$beach_html="<li class='hotel__fact-container'>
								<div class='hotel__fact hotel__fact_beach-surface'>
									<svg style='width: 60px;height: 34px;' id='smd-beach-sand' viewBox='0 0 60 34'> <g stroke-width='1' transform='translate(10 6)' fill='none' fill-rule='evenodd'> <path d='M34.23 22.541s-1.084.418-2.295-1.843c-1.212-2.262-4.068-3.02-4.068-3.02s-3.27-.655-2.729-4.52c.126-.767.735-.85.735-.85s-1.393-1.244-.58-2.687c.811-1.442 1.355-2.597 2.848-2.597.48-1.345.817-1.443 1.429-1.758.612-.316 2.3-.677 2.3-.677s1.319-.38 2.188.758'></path> <path d='M32.962 22.541s1.085.418 2.296-1.843c1.211-2.262 4.067-3.02 4.067-3.02s3.271-.655 2.73-4.52c-.126-.767-.735-.85-.735-.85s1.393-1.244.58-2.687c-.812-1.442-1.355-2.597-2.848-2.597-.48-1.345-.817-1.443-1.43-1.758-.61-.316-2.299-.677-2.299-.677s-1.319-.38-2.188.758M25.038 12.453l4.085 3.858M27.302 6.792l3.665 8.238M33.245 5.66v9.62M39.667 6.792l-3.309 8.123M41.61 12.453l-4.12 4.253M29.946 19.245s-1.512 1.487-1.512 2.357c0 .87 1.527.714 1.527.714s1.774-.078 2.339-.078'></path> <path d='M36.448 19.245s1.512 1.487 1.512 2.357c0 .87-1.527.714-1.527.714s-1.774-.078-2.339-.078'></path> <path d='M26.1 8.44C24.069 3.974 22.106 0 19.861 0c-2.567 0-4.666 5.703-4.666 5.703L12 11.763M18 15.775S14.829 12 11.436 12c-3.393 0-2.936 3.775-5.602 5.46-2.666 1.685-4.455 0-5.834 4.617' stroke='#17181A'></path> <g stroke-width='0'> <circle fill='#17181A' transform='matrix(-1 0 0 1 39.132 0)' cx='19.566' cy='7.566' r='1'></circle> <circle fill='#17181A' transform='matrix(-1 0 0 1 25.132 0)' cx='12.566' cy='16.566' r='1'></circle> <circle fill='#17181A' transform='matrix(-1 0 0 1 51.132 0)' cx='25.566' cy='19.566' r='1'></circle> <circle fill='#17181A' transform='matrix(-1 0 0 1 37.132 0)' cx='18.566' cy='21.566' r='1'></circle> <circle fill='#17181A' transform='matrix(-1 0 0 1 47.132 0)' cx='23.566' cy='11.566' r='1'></circle> </g> </g> </svg>
									<div class='hotel__fact-label'>$this->beachType</div>
								</div>
							 </li>";
			}
			if(!empty($this->beachDistance))
			{
				$distance_html="<li class='hotel__fact-container'>
								  <div class='hotel__fact hotel__fact_beach-distance'>
									<svg style='width: 60px;height: 34px;' id='smd-beach-distance' viewBox='0 0 53 28'> <g stroke-width='1' fill='none' fill-rule='evenodd'> <path d='M46.921 2.5l5.514 10.815L46.93 23.5H.5v-21h46.421z'></path> <path d='M22 2.887V1h4.898v1.887'></path> <path d='M22 27.018v-3.514h4.898v3.514'></path> </g> </svg>
									<span class='hotel__fact-text'>$this->beachDistance м</span>
								    <div class='hotel__fact-label'>до пляжа</div>
								   </div>
								</li>";
			}
			if(!empty($this->airportDistance))
			{
				$airplane_html="<li class='hotel__fact-container'>
								  <div class='hotel__fact hotel__fact_airport-distance'>
									<svg style='width: 60px;height: 34px;' id='smd-airplane' viewBox='0 0 60 34'> <g stroke-width='1' fill='none' fill-rule='evenodd'> <path d='M28.401 18.125l-4.803 2.984s-1.275 1.005-3.679.503c-2.404-.503-4.87-1.054-4.87-1.054s-.529-.195-.893.283c-.365.479.235.764.235.764l3.708 2.722s.791.793 1.956.585c1.165-.209 4.59-.913 4.59-.913s2.337-.506 5.118-2.263c2.78-1.758 12.718-7.869 12.718-7.869s3.867-2.227 3.48-3.16c-.388-.932-2.618-.683-3.684-.341-1.066.341-9.388 5.12-9.388 5.12l-9.12-3.168s-1.18-.284-.59.414c.59.697 6.368 6.525 6.368 6.525M33.496 22.059l2.478 2.503s.72.578.864-1.432c.146-2.011.292-3.516.292-3.516'></path> </g> </svg>
									<div class='hotel__fact-label'>$this->airportDistance км</div>
								  </div>
								</li>";
			}
            $divRating = "";
            if($this->rating != null)
			{
                $divRating = "<div class='hotel__rating'>$rating_html</div>";
            }
			$pansion = $this->GetPansionFromCode($this->pansion);
			$classpansion = $this->GetClassPansion($this->pansion);
			$html = $html.  "<div class='col-md-12 col-sm-12 col-xs-12'>
                                <div class='hotel'>
									<div class='card'>
										<div class='row'>
											<div class='col-md-4 col-sm-4 col-xs-12'>
												$divRating
												<div class='img-card' style='background: url($this->hotel_img?width=250&height=240) center no-repeat'></div>
											</div>
											<div class='col-md-5 col-sm-5 col-xs-12'>
												<div class='hotel__info row'>
													<div class='hotel__info-top'>
													  <div class='hotel__top-row'>
														<div class='hotel-stars'>
														  <div class='hotel-stars-current hotel-stars-current_$this->stars'></div>
														</div>
														<div class='location-label'>$this->region</div>
													   </div>
													   <div class='faded-link'><a class='hotel-explore-link' href='$this->hotel_url' title='$this->name'>$this->name</a></div>
													   <div class='hotel__facts'>
														   $line_html
														   $beach_html
														   $distance_html
														   $airplane_html
													   </div>
													</div>
													<div class='hotel__info-bottom'>
													  <div class='hotel__pricing'>
														<div class='hotel__bottom-row'>
															<span class='hotel__order-params $classpansion'>Питание: $pansion</span>
														</div>
													   </div>
													</div>
												</div>
											</div>
											<div class='col-md-3 col-sm-3 col-xs-12'>
												<div class='row header-block'>
													<div class='info-prices'>
														<div class='main_gate-price currency_font f-center'>
															<p class='header-price'>Туры в этот отель</p>
															от <span class='item-price'>$this->price</span> рубл. <br/>
															<a href='$this->hotel_url' class='price-min' target='_blank'>на Level.Travel</a>
															<a class='card-main_gate__link' href='$this->hotel_url' target='_blank'>
																		<div class='main_gate-button_details'>
																		  <div class='main_gate-button'>Подробнее</div>
																		</div>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
                                </div>
                             </div>";
		return $html;
	}
	//получение html разметки для тревелаты
	//получение html разметки для тезтура
	public function GetTezTourHtml()
	{
		$html="";
		$txt_night = $this->getNight($this->nightcount);
		$this->hotel_img = str_replace("_small","",$this->hotel_img);
		$html = $html.  "<div class='col-md-12 col-sm-12 col-xs-12'>
                                <div class='hotel'>
									<div class='card'>
										<div class='row'>
											<div class='col-md-4 col-sm-4 col-xs-12'>
												<div class='img-card' style='background: url($this->hotel_img?width=250&height=240) center no-repeat'></div>
											</div>
											<div class='col-md-5 col-sm-5 col-xs-12'>
												<div class='hotel__info row'>
													<div class='hotel__info-top'>
													  <div class='hotel__top-row'>
														<div class='hotel-stars'>
														  <div class='hotel-stars-current hotel-stars-current_$this->stars'></div>
														</div>
														<div class='location-label'>$this->region</div>
													   </div>
													   <div class='faded-link'><a class='hotel-explore-link' target='_blank' href='$this->hotel_url' title='$this->name'>$this->name</a></div>
													</div>
													<div class='hotel__info-bottom'>
													  <div class='hotel__pricing'>
														<div class='hotel__bottom-row'>
															<span class='hotel__order-params'>$this->touristcount чел./$this->nightcount $txt_night</span>
															<br/>
															<span class='hotel__order-params'>Питание: $this->pansion</span>
														</div>
													   </div>

													</div>
												</div>
											</div>
											<div class='col-md-3 col-sm-3 col-xs-12'>
												<div class='row header-block'>
													<div class='info-prices'>
														<div class='main_gate-price currency_font f-center'>
															<p class='header-price'>Туры в этот отель</p>
															от <span class='item-price'>$this->price</span> рубл. <br/>
															<a href='$this->hotel_url' class='price-min' target='_blank'>на TezTour</a>
															<a class='card-main_gate__link' href='$this->hotel_url' target='_blank'>
																		<div class='main_gate-button_details'>
																		  <div class='main_gate-button'>Подробнее</div>
																		</div>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
                                </div>
                             </div>";
		return $html;
	}
	//получение разметки для слетать ру
	public function GetSletatRuHtml()
	{
		$html="";
		$txt_night = $this->getNight($this->nightcount);
		$pansion = $this->GetPansionFromCode($this->pansion);
		$classpansion = $this->GetClassPansion($this->pansion);
		$html = $html.  "<div class='col-md-12 col-sm-12 col-xs-12'>
                                <div class='hotel'>
									<div class='card'>
										<div class='row'>
											<div class='col-md-4 col-sm-4 col-xs-12'>
												<div class='img-card' style='background: url($this->hotel_img?width=250&height=240) center no-repeat'></div>
											</div>
											<div class='col-md-5 col-sm-5 col-xs-12'>
												<div class='hotel__info row'>
													<div class='hotel__info-top'>
													  <div class='hotel__top-row'>
														<div class='hotel-stars'>
														  <div class='hotel-stars-current hotel-stars-current_$this->stars'></div>
														</div>
														<div class='location-label'>$this->country, $this->region</div>
													   </div>
													   <div class='faded-link'><a class='hotel-explore-link' target='_blank' href='$this->hotel_url' title='$this->name'>$this->name</a></div>
													</div>
													<div class='hotel__info-bottom'>
													  <div class='hotel__pricing'>
														<div class='hotel__bottom-row'>
															<span class='hotel__order-params'>$this->touristcount чел./$this->nightcount $txt_night</span>
															<br/>
															<span class='hotel__order-params $classpansion'>Питание: $pansion</span>
														</div>
													   </div>

													</div>
												</div>
											</div>
											<div class='col-md-3 col-sm-3 col-xs-12'>
												<div class='row header-block'>
													<div class='info-prices'>
														<div class='main_gate-price currency_font f-center'>
															<p class='header-price'>Туры в этот отель</p>
															от <span class='item-price'>$this->price</span> рубл. <br/>
															<a href='$this->hotel_url' class='price-min' target='_blank'>на Слетать.РУ</a>
															<a class='card-main_gate__link' href='$this->hotel_url' target='_blank'>
																		<div class='main_gate-button_details'>
																		  <div class='main_gate-button'>Подробнее</div>
																		</div>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
                                </div>
                             </div>";
		return $html;
	}
	public function GetTravelataHtml()
	{
		$html="";
		$txt_night = $this->getNight($this->nightcount);
		$this->hotel_img = str_replace("_small","",$this->hotel_img);
		$this->stars = str_replace("*","",$this->stars);
		$html = $html.  "<div class='col-md-12 col-sm-12 col-xs-12'>
                                <div class='hotel'>
									<div class='card'>
										<div class='row'>
											<div class='col-md-4 col-sm-4 col-xs-12'>
												<div class='img-card' style='background: url($this->hotel_img?width=250&height=240) center no-repeat'></div>
											</div>
											<div class='col-md-5 col-sm-5 col-xs-12'>
												<div class='hotel__info row'>
													<div class='hotel__info-top'>
													  <div class='hotel__top-row'>
														<div class='hotel-stars'>
														  <div class='hotel-stars-current hotel-stars-current_$this->stars'></div>
														</div>
														<div class='location-label'>$this->country, $this->region</div>
													   </div>
													   <div class='faded-link'><a class='hotel-explore-link' target='_blank' href='$this->hotel_url' title='$this->name'>$this->name</a></div>
													</div>
													<div class='hotel__info-bottom'>
													  <div class='hotel__pricing'>
														<div class='hotel__bottom-row'>
															<span class='hotel__order-params'>$this->touristcount чел./$this->nightcount $txt_night</span>
														</div>
													   </div>

													</div>
												</div>
											</div>
											<div class='col-md-3 col-sm-3 col-xs-12'>
												<div class='row header-block'>
													<div class='info-prices'>
														<div class='main_gate-price currency_font f-center'>
															<p class='header-price'>Туры в этот отель</p>
															от <span class='item-price'>$this->price</span> рубл. <br/>
															<a href='$this->hotel_url' class='price-min' target='_blank'>на Travelata</a>
															<a class='card-main_gate__link' href='$this->hotel_url' target='_blank'>
																		<div class='main_gate-button_details'>
																		  <div class='main_gate-button'>Подробнее</div>
																		</div>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
                                </div>
                             </div>";
		return $html;
	}
}
?>