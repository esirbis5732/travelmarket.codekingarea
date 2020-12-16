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

            $divRating = "";
            if($hotelRating != null){
                $divRating = "<div class='hotel_rating'>$hotelRating</div>";
            }

            $html = $html.  "<div>
                                <div class='hotel'>
                                    <div class='hotel_left'>
                                        <p><img src='$domain.$imgPreview' alt='Изображение'></p>
                                        $divRating
                                    </div>
                                    <div class='hotel_right'>
                                        <div class='hotel_right_top'>
                                            <div class='hotel_right_top_row'>
                                                <div class='hotel_stars'>$hotelStars*</div>
                                                <div class='hotel_location'>$city, $country</div>
                                            </div>
                                            <div class='hotel_name'>
                                                <a href='$domain.$hotelLink' target='_blank'>$hotelName</a>
                                            </div>
                                            <div class='hotel_features'>
                                                <div class='hotel_feature'>Линия - $line</div>
                                                <div class='hotel_feature'>Пляж - $beachType</div>
                                                <div class='hotel_feature'>До пляжа - $beachDistance</div>
                                                <div class='hotel_feature'>Аэропорт - $airportDistance км</div>
                                            </div>
                                        </div>
                                        <div class='hotel_right_bottom'>
                                            <div class='hotel_pansions'>Питание: $pansions</div>
                                            <div class='hotel_price'>от $minPrice руб.</div>
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
            $imgPreview = substr($imgPreview, 0, strpos($imgPreview, "?"))."?width=100&height=100";

            $divRating = "";
            if($hotelRating != null){
                $hotelRating = round($hotelRating, 1);
                $divRating = "<div class='hotel_rating'>$hotelRating</div>";
            }

            $html = $html.  "<div>
                                <div class='hotel'>
                                    <div class='hotel_left'>
                                        <p><img src='$imgPreview' alt='Изображение'></p>
                                        $divRating
                                    </div>
                                    <div class='hotel_right'>
                                        <div class='hotel_right_top'>
                                            <div class='hotel_right_top_row'>
                                                <div class='hotel_stars'>$hotelStars*</div>
                                                <div class='hotel_location'>$city, $country</div>
                                            </div>
                                            <div class='hotel_name'>
                                                <a href='$hotelLink' target='_blank'>$hotelName</a>
                                            </div>
                                        </div>
                                        <div class='hotel_right_bottom'>
                                            <div class='hotel_price'>от $minPrice руб.</div>
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