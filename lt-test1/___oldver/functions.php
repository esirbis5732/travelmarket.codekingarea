<?php

class Util{
    public static function getOpts(){
      $arr =  array(
          'http'=>array(
              'method'=>"GET",
              'header'=>"Authorization: Token token=\"f7ca9ff62cac7ebe403b35b9e4065be4\"\r\n" .
                  "Accept: application/vnd.leveltravel.v2\r\n"
          )
      );
      return $arr;
    }

    public static function getDomain($type = ""){
        if ($type == "") {
            return "http://level.travel";
        }elseif ($type == "travelata"){
            return "https://travelata.ru";
        }
    }
}

class Hotels
{
    public $from_city, $from_country, $to_country, $nights, $adults, $start_date;
    function __construct($from_city, $from_country, $to_country, $nights, $adults, $start_date)
    {
        $this->from_city = $from_city;
        $this->from_country = $from_country;
        $this->to_country = $to_country;
        $this->nights = $nights;
        $this->adults = $adults;
        $this->start_date = $start_date;
    }

    function getHotels($type = "")
    {
        if ($type == "") {
            $opts = Util::getOpts();
            $context = stream_context_create($opts);

            $url = "https://api.level.travel/search/enqueue?from_city=" . $this->from_city . "&from_country=" . $this->from_country . "&to_country=" . $this->to_country . "&nights=" . $this->nights . "&adults=" . $this->adults . "&start_date=" . $this->start_date;
            $json = file_get_contents($url, false, $context);
            $data = json_decode($json);

            $url = "https://api.level.travel/search/status?request_id=" . $data->request_id;
            $json = file_get_contents($url, false, $context);
            $data = json_decode($json);

            $url = "https://api.level.travel/search/results?request_id=" . $data->request_id;
            $json = file_get_contents($url, false, $context);
            $data = json_decode($json);

            $response = $data->response;

        }elseif ($type == "travelata"){

            $url = "http://api-gateway.travelata.ru/directory/resorts";
            $json = file_get_contents($url,false);
            $data = json_decode($json);

            $arResorts = [];
            foreach($data->data as $resort){
                if($resort->countryId == $this->to_country){
                    $arResorts[] = $resort->id;
                }
            }

            $resortsStr = implode(",", $arResorts);

            $hotels = [];
            /*
            foreach ($arResorts as $arResort) {
                $url = "https://api-gateway.travelata.ru/statistic/cheapestTours?countries[]=".$this->to_country."&departureCity=".$this->from_city."&nightRange[from]=".$this->nights."&resorts[]=".$arResort."&nightRange[to]=".$this->nights."&touristGroup[adults]=".$this->adults."&touristGroup[kids]=0&touristGroup[infants]=0&hotelCategories[]=2&hotelCategories[]=7&checkInDateRange[from]=".$this->start_date."&checkInDateRange[to]=".$this->start_date;
                $json = file_get_contents($url,false);
                $data = json_decode($json);

                $hotels[] = $data;
            }
            */

            $url = "https://api-gateway.travelata.ru/statistic/cheapestTours?countries[]=".$this->to_country."&departureCity=".$this->from_city."&nightRange[from]=".$this->nights."&resorts[]=".$resortsStr."&nightRange[to]=".$this->nights."&touristGroup[adults]=".$this->adults."&touristGroup[kids]=0&touristGroup[infants]=0&hotelCategories[]=2&hotelCategories[]=7&checkInDateRange[from]=".$this->start_date."&checkInDateRange[to]=".$this->start_date;
            $json = file_get_contents($url,false);
            $data = json_decode($json);

            $hotels[] = $data;

            //echo "<pre>";
            //var_dump($hotels);
            //echo "</pre>";

            $response = $data;
        }

        //echo "<pre>";
        //var_dump($response);
        //echo "</pre>";

        return $response;
    }

    function getHtmlHotels($hotels){
        $html = "";
        foreach($hotels as $item) {
            $domain = Util::getDomain();

            $city = $item->hotel->city;
            $country = $item->hotel->country;
            $hotelName = $item->hotel->name;
            $hotelStars = $item->hotel->stars;
            $hotelRating = $item->hotel->rating;
            $line = $item->hotel->features->line;
            $beachType = $item->hotel->features->beach_surface;
            $beachDistance = $item->hotel->features->beach_distance;
            $airportDistance = $item->hotel->features->airport_distance; $airportDistance = $airportDistance / 1000;
            $minPrice = $item->min_price;
            $hotelLink = $item->hotel->link;
            $description = $item->hotel->desc;
            $pansions = implode("|", $item->pansions);
            $imgPreview = $item->hotel->image->preview;
			//$imgPreview = substr($imgPreview, 0, strpos($imgPreview, "?"));
			$line_html="";$beach_html="";$distance_html="";$airplane_html="";
			$rating_html="";
			if (!empty($hotelRating))
			{
				$rating_html="<div class='hotel-rating hotel-rating_good'><span class='hotel-rating-value'>$hotelRating</span></div>";
				if(floatval($hotelRating) >= 9) $rating_html="<div class='hotel-rating hotel-rating_super hotel-rating_good'><span class='hotel-rating-value'>$hotelRating</span></div>";
				if(floatval($hotelRating) <= 8) $rating_html="<div class='hotel-rating hotel-rating_norm'><span class='hotel-rating-value'>$hotelRating</span></div>";
			}
			if (!empty($line))$line_html= "<li class='hotel__fact-container'>
											<div class='hotel__fact hotel__fact_line'>
											  <svg style='width: 60px;height: 34px;' id='smd-hotel-line-2' viewBox='0 0 60 34'> <g stroke-width='1' transform='translate(7 5)' fill='none' fill-rule='evenodd'> <rect x='4.5' y='1.5' width='38' height='22' rx='11'></rect> <path d='M6.692 25.003C3.095 22.593 0 18.153 0 11.813 0 5.413 5.298.975 6.692 0'></path> </g> </svg>
											  <span class='hotel__fact-text'>$line-я</span>
											  <div class='hotel__fact-label'>линия</div>
											</div>
											</li>";
			if(!empty($beachType))
			{
				$beachType = str_replace("SAND","песок",$beachType);
				$beachType = str_replace("PEBBLE","галька",$beachType);
				$beach_html="<li class='hotel__fact-container'>
								<div class='hotel__fact hotel__fact_beach-surface'>
									<svg style='width: 60px;height: 34px;' id='smd-beach-sand' viewBox='0 0 60 34'> <g stroke-width='1' transform='translate(10 6)' fill='none' fill-rule='evenodd'> <path d='M34.23 22.541s-1.084.418-2.295-1.843c-1.212-2.262-4.068-3.02-4.068-3.02s-3.27-.655-2.729-4.52c.126-.767.735-.85.735-.85s-1.393-1.244-.58-2.687c.811-1.442 1.355-2.597 2.848-2.597.48-1.345.817-1.443 1.429-1.758.612-.316 2.3-.677 2.3-.677s1.319-.38 2.188.758'></path> <path d='M32.962 22.541s1.085.418 2.296-1.843c1.211-2.262 4.067-3.02 4.067-3.02s3.271-.655 2.73-4.52c-.126-.767-.735-.85-.735-.85s1.393-1.244.58-2.687c-.812-1.442-1.355-2.597-2.848-2.597-.48-1.345-.817-1.443-1.43-1.758-.61-.316-2.299-.677-2.299-.677s-1.319-.38-2.188.758M25.038 12.453l4.085 3.858M27.302 6.792l3.665 8.238M33.245 5.66v9.62M39.667 6.792l-3.309 8.123M41.61 12.453l-4.12 4.253M29.946 19.245s-1.512 1.487-1.512 2.357c0 .87 1.527.714 1.527.714s1.774-.078 2.339-.078'></path> <path d='M36.448 19.245s1.512 1.487 1.512 2.357c0 .87-1.527.714-1.527.714s-1.774-.078-2.339-.078'></path> <path d='M26.1 8.44C24.069 3.974 22.106 0 19.861 0c-2.567 0-4.666 5.703-4.666 5.703L12 11.763M18 15.775S14.829 12 11.436 12c-3.393 0-2.936 3.775-5.602 5.46-2.666 1.685-4.455 0-5.834 4.617' stroke='#17181A'></path> <g stroke-width='0'> <circle fill='#17181A' transform='matrix(-1 0 0 1 39.132 0)' cx='19.566' cy='7.566' r='1'></circle> <circle fill='#17181A' transform='matrix(-1 0 0 1 25.132 0)' cx='12.566' cy='16.566' r='1'></circle> <circle fill='#17181A' transform='matrix(-1 0 0 1 51.132 0)' cx='25.566' cy='19.566' r='1'></circle> <circle fill='#17181A' transform='matrix(-1 0 0 1 37.132 0)' cx='18.566' cy='21.566' r='1'></circle> <circle fill='#17181A' transform='matrix(-1 0 0 1 47.132 0)' cx='23.566' cy='11.566' r='1'></circle> </g> </g> </svg>
									<div class='hotel__fact-label'>$beachType</div>
								</div>
							 </li>";
			}
			if(!empty($beachDistance))
			{
				$distance_html="<li class='hotel__fact-container'>
								  <div class='hotel__fact hotel__fact_beach-distance'>
									<svg style='width: 60px;height: 34px;' id='smd-beach-distance' viewBox='0 0 53 28'> <g stroke-width='1' fill='none' fill-rule='evenodd'> <path d='M46.921 2.5l5.514 10.815L46.93 23.5H.5v-21h46.421z'></path> <path d='M22 2.887V1h4.898v1.887'></path> <path d='M22 27.018v-3.514h4.898v3.514'></path> </g> </svg>
									<span class='hotel__fact-text'>$beachDistance м</span>
								    <div class='hotel__fact-label'>до пляжа</div>
								   </div>
								</li>";
			}
			if(!empty($airportDistance))
			{
				$airplane_html="<li class='hotel__fact-container'>
								  <div class='hotel__fact hotel__fact_airport-distance'>
									<svg style='width: 60px;height: 34px;' id='smd-airplane' viewBox='0 0 60 34'> <g stroke-width='1' fill='none' fill-rule='evenodd'> <path d='M28.401 18.125l-4.803 2.984s-1.275 1.005-3.679.503c-2.404-.503-4.87-1.054-4.87-1.054s-.529-.195-.893.283c-.365.479.235.764.235.764l3.708 2.722s.791.793 1.956.585c1.165-.209 4.59-.913 4.59-.913s2.337-.506 5.118-2.263c2.78-1.758 12.718-7.869 12.718-7.869s3.867-2.227 3.48-3.16c-.388-.932-2.618-.683-3.684-.341-1.066.341-9.388 5.12-9.388 5.12l-9.12-3.168s-1.18-.284-.59.414c.59.697 6.368 6.525 6.368 6.525M33.496 22.059l2.478 2.503s.72.578.864-1.432c.146-2.011.292-3.516.292-3.516'></path> </g> </svg>
									<div class='hotel__fact-label'>$airportDistance км</div>
								  </div>
								</li>";
			}
            $divRating = "";
            if($hotelRating != null){
                $divRating = "<div class='hotel__rating'>$rating_html</div>";
            }
			//расшифровка питания
			$pansions = str_replace("UAI","Ultra All Inclusive",$pansions);
		    $pansions = str_replace("AI","All Inclusive",$pansions);
			$pansions = str_replace("FB","Трехразовое питание",$pansions);
			$pansions = str_replace("HB","Двухразовое питание",$pansions);
			$pansions = str_replace("BB","Завтрак",$pansions);
			$pansions = str_replace("RO","Без питания",$pansions);
			$pansions = str_replace("|",", ",$pansions);
            $html = $html.  "<div class='col-md-6 col-sm-12 col-xs-12'>
                                <div class='hotel'>
									<div class='card'>
										<div class='row'>
											<div class='col-md-4 col-sm-4 col-xs-12'>
												$divRating
												<div class='img-card' style='background: url($domain.$imgPreview?width=250&height=240) center no-repeat'></div>
											</div>
											<div class='col-md-8 col-sm-8 col-xs-12'>
												<div class='hotel__info row'>
													<div class='hotel__info-top'>
													  <div class='hotel__top-row'>
														<div class='hotel-stars'>
														  <div class='hotel-stars-current hotel-stars-current_$hotelStars'></div>
														</div>
														<div class='location-label'>$city, $country</div>
													   </div>
													   <div class='faded-link'><a class='hotel-explore-link' href='$domain.$hotelLink' title='$hotelName'>$hotelName</a></div>
													   <div class='hotel__facts'>
														   $line_html
														   $beach_html
														   $distance_html
														   $airplane_html
													   </div>
													</div>
													<div class='hotel__info-bottom'>
													  <div class='hotel__pricing'>
													    <div class='hotel__price-link'>
														  <span class='hotel__price'>от $minPrice руб.</span>
													    </div>
														<div class='hotel__bottom-row'>
															<span class='hotel__order-params'>Питание: $pansions</span>
														</div>
													   </div>
													  <div>
														<a class='btn btn-primary' href='$domain.$hotelLink'>Подробнее</a>
													  </div>
													</div>
												</div>
											</div>
										</div>
									</div>
                                </div>
                             </div>";
        }

        return "<br><div>Level.travel hotels</div>".$html;
    }

    function getHtmlHotelsTravelata($hotels){

        //Массив городов
        $url = "http://api-gateway.travelata.ru/directory/resorts";
        $json = file_get_contents($url,false);
        $data = json_decode($json);
        $arResorts = $data->data;

        //Массив стран
        $country = "";
        $obCountries = new Countries();
        $countries = $obCountries->get("travelata");
        foreach($countries->data as $country){
            if($country->id == $this->to_country){
                $country = $country->name;
                break;
            }
        }

        $html = "";
        foreach($hotels->data as $item) {
            $domain = Util::getDomain();

            $mealId = $item->mealId;
            $resortId = $item->resortId;

            $city = $this->getResortName($arResorts, $resortId);

            $hotelName = $item->hotelName;
            $hotelStars = $item->hotelCategoryName;
            $hotelRating = $item->hotelRating;
            $minPrice = $item->price;
            $hotelLink = $item->tourPageUrl;
            //$pansions = implode("|", $item->pansions);
            $imgPreview = $item->hotelPreview;
            $imgPreview = substr($imgPreview, 0, strpos($imgPreview, "?"))."?width=250&height=240";

            $divRating = "";
			$hotelRating = round($hotelRating, 1);
			if (!empty($hotelRating))
			{
				$rating_html="<div class='hotel-rating hotel-rating_good'><span class='hotel-rating-value'>$hotelRating</span></div>";
				if(floatval($hotelRating) >= 9) $rating_html="<div class='hotel-rating hotel-rating_super hotel-rating_good'><span class='hotel-rating-value'>$hotelRating</span></div>";
				if(floatval($hotelRating) <= 8) $rating_html="<div class='hotel-rating hotel-rating_norm'><span class='hotel-rating-value'>$hotelRating</span></div>";
			}
			// if($hotelRating != null){
				// $hotelRating = round($hotelRating, 1);
                $divRating = "<div class='hotel__rating'>$rating_html</div>";
			// }

            $html = $html.  "<div class='col-md-6 col-sm-12 col-xs-12'>
                                <div class='hotel'>
									<div class='card'>
										<div class='row'>
											<div class='col-md-4 col-sm-4 col-xs-12'>
												$divRating
												<div class='img-card' style='background: url($imgPreview) center no-repeat'></div>
											</div>
											<div class='col-md-8 col-sm-8 col-xs-12'>
												<div class='hotel__info row'>
													<div class='hotel__info-top'>
													  <div class='hotel__top-row'>
														<div class='hotel-stars'>
														  <div class='hotel-stars-current hotel-stars-current_$hotelStars'></div>
														</div>
														<div class='location-label'>$city, $country</div>
													   </div>
													   <div class='faded-link'><a class='hotel-explore-link' href='$hotelLink' title='$hotelName'>$hotelName</a></div>
													</div>
													<div class='hotel__info-bottom mt-80'>
													  <div class='hotel__pricing'>
													    <div class='hotel__price-link'>
														  <span class='hotel__price'>от $minPrice руб.</span>
													    </div>
													   </div>
													  <div>
														<a class='btn btn-primary' href='$hotelLink'>Подробнее</a>
													  </div>
													</div>
												</div>
											</div>
										</div>
									</div>
                                </div>
                             </div>";
        }

        return "<br><div>Travelata hotels</div>".$html;
    }

    function getResortName($arResorts, $id){

        $find = "";

        foreach($arResorts as $resort){
            if($resort->id == $id){
                $find = $resort->name;
                break;
            }
        }

        return $find;
    }

}

class Countries
{
    function get($type = "")
    {
        if ($type == ""){
            $opts = Util::getOpts();
            $context = stream_context_create($opts);

            $url = "https://api.level.travel/references/countries";
            $json = file_get_contents($url,false,$context);
            $countries = json_decode($json);

        }elseif ($type == "travelata"){
            $url = "http://api-gateway.travelata.ru/directory/countries";
            $json = file_get_contents($url,false);
            $countries = json_decode($json);
        }

        return $countries;
    }
}


?>