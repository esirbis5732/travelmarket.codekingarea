<? require_once 'lib/Autoloader.php';?>
<? require_once 'lib/Mobile_Detect.php';?>
<? require_once($_SERVER['DOCUMENT_ROOT']. "/bitrix/modules/main/include/prolog_before.php");?>
<?
$levelTravel = new \hotTours\JsonLevelTravel();
$levelTravel->user = session_id();
$travelata = new \hotTours\JsonTravelata();
$travelata->user = session_id();
//$teztour = new \hotTours\JsonTezTour();
//$teztour->user = session_id();
$sletatru = new \hotTours\JsonSletatRu();
$sletatru->user = session_id();
$split_tours = new \hotTours\SplitTours();
$split_tours->user = session_id();
//определение мобильников для ограничение количества выдачи результатов
$detect = new Mobile_Detect;
$count_result_mobile = 0;//количество туров на выдачу 0 - без ограничений
if($detect->isMobile() || $detect->isTablet()) $count_result_mobile = 10;

//парсинг даты
function DateForLink($value,$type)
{
	$format = "DD.MM.YYYY";
	$arr = ParseDateTime($value, $format);
	switch ($type) 
	{
		case "leveltravel":
			return $arr["YYYY"].'-'.$arr["MM"].'-'.$arr["DD"];
			return $arr["DD"].'.'.$arr["MM"].'.'.$arr["YYYY"];
		break;
		case "travelata":
			return $arr["YYYY"].'-'.$arr["MM"].'-'.$arr["DD"];
		break;
	}
	return $arr["DD"].'.'.$arr["MM"].'.'.$arr["YYYY"];
}
function GetCorectDate($value,$type)
{
	$format = "DD.MM.YYYY";
	$arr = ParseDateTime($value, $format);
	switch ($type) 
	{
		case "leveltravel":
			$levelTravel->offer_date = $arr["YYYY"].'-'.$arr["MM"].'-'.$arr["DD"];
			return $arr["DD"].'.'.$arr["MM"].'.'.$arr["YYYY"];
		break;
		case "teztour":
			return $arr["DD"].'.'.$arr["MM"].'.'.$arr["YYYY"];
		break;
		case "travelata":
			return $arr["YYYY"].'-'.$arr["MM"].'-'.$arr["DD"];
		break;
		case "sletatru":
		return $arr["DD"].'.'.$arr["MM"].'.'.$arr["YYYY"];
		break;
	}
	return $arr["DD"].'.'.$arr["MM"].'.'.$arr["YYYY"];
}
//получение id город+страна вылета
function GetDeparturesLink($value,$type)
{
	switch ($type) 
	{
		case "leveltravel":
		$levelTravel = new \hotTours\JsonLevelTravel();
        $departures = $levelTravel->GetDepartures();
        foreach($departures as $departure)
		{
            if($departure->name_ru == $value)
			{
				return $departure->name_en;
                break;
            }
        }
        break;
	}
}
function GetDepartures($value,$type)
{
	$res = array();
	$res["id_city"]="";
	$res["id_country"]="";
	switch ($type) 
	{
	   case "leveltravel":
		$levelTravel = new \hotTours\JsonLevelTravel();
        $departures = $levelTravel->GetDepartures();

        foreach($departures as $departure)
		{
            if($departure->name_ru == $value)
			{
				$levelTravel->from_city = $departure->name_en;
                $res["id_country"] = $departure->iso2;
				$res["id_city"] = $departure->id;
                break;
            }
        }
        break;
	   case "travelata":
		$travelata = new \hotTours\JsonTravelata();
        $departures = $travelata->GetDepartures();
		$res["id_city"] = array_search ($value, $departures);
		$res["id_country"]="";
        break;
	   case "sletatru":
		$sletatru = new \hotTours\JsonSletatRu();
        $departures = $sletatru->GetDepartures();
		foreach($departures as $departure)
		{
            if($departure["Name"] == $value)
			{
                $res["id_country"] = $departure["CountryId"];
				$res["id_city"] = $departure["Id"];
                break;
            }
        }
		break;
	   case "teztour":
		$teztour = new \hotTours\JsonTezTour();
        $departures = $teztour->GetDepartures();
		foreach($departures as $departure)
		{
            if($departure["@attributes"]["name"] == $value)
			{
				$res["id_city"] = $departure["@attributes"]["id"];
                break;
            }
        }
        break;
	}
	return $res;
}
//получение id страны прилета
function GetCountryId($value,$type)
{
	$countries="";$find="";
	switch ($type) 
	{
    case "leveltravel":
		$levelTravel = new \hotTours\JsonLevelTravel();
        $countries = $levelTravel->GetCountries();
        foreach($countries as $country)
		{
            if($country->name_ru == $value)
			{
                $find = $country->iso2;
                break;
            }
        }
        break;
    case "travelata":
		$travelata = new \hotTours\JsonTravelata();
        $countries = $travelata->GetCountries();
        foreach($countries as $country)
		{
            if($country->name == $value)
			{
                $find = $country->id;
                break;
            }
        }
        break;
    case "sletatru":
		$sletatru = new \hotTours\JsonSletatRu();
        $countries = $sletatru->GetCountries();
        foreach($countries as $country)
		{
			if($country["Name"] == $value)
			{
                $find = $country["Id"];
                break;
            }
        }
        break;
    case "teztour":
		$teztour = new \hotTours\JsonTezTour();
        $countries = $teztour->GetCountries();
        foreach($countries as $country)
		{
            if($country["@attributes"]["name"] == $value)
			{
                $find = $country["@attributes"]["id"];
                break;
            }
        }
        break;
	}
	return $find;
}
//данные для фильтров - мин и макс цены, количество, регионы, цены =>звездность
function GetMimMaxPriceAndCount($list)
{
	$result=array();
	$numbers = array_column($list, 'price');
	$result=array("min_price"=>min($numbers),"max_price"=>max($numbers),"count"=>count($list));
	return $result;
}
$result = array();//итоговый массив для фронтэнда(html код по всем поисковикам+склейка)
if(isset($_POST["ajax_hotels"]))
{
	$step = intval($_POST["step"]);
	$result["leveltravel"] = $levelTravel->selectAjax($step);
	$result["sletatru"] = $sletatru->selectAjax($step);
	$result["travelata"] = $travelata->selectAjax($step);
	$result["all"] = $split_tours->selectAjax($step);
	//
	$minmax_arr=array();//мин макс для фильтра (самый первый фильтр, что по ценам фильтрует)
	$result["leveltravel_param"] = GetMimMaxPriceAndCount($levelTravel->hotelsList);
	array_push($minmax_arr,$result["leveltravel_param"]["min_price"]);
	array_push($minmax_arr,$result["leveltravel_param"]["max_price"]);
	$result["travelata_param"] = GetMimMaxPriceAndCount($travelata->hotelsList);
	array_push($minmax_arr,$result["travelata_param"]["min_price"]);
	array_push($minmax_arr,$result["travelata_param"]["max_price"]);
	$result["sletatru_param"] = GetMimMaxPriceAndCount($sletatru->hotelsList);
	array_push($minmax_arr,$result["sletatru_param"]["min_price"]);
	array_push($minmax_arr,$result["sletatru_param"]["max_price"]);
	$result["min_price"] = min($minmax_arr);
	$result["max_price"] = max($minmax_arr);
}

if(isset($_POST["get_hotels"]))
{
		$deltaday = "";$deltanight=0;
		$nights = $_POST["nights"];
		$nights_LT = $_POST["nights"];
		$date_LT = $_POST["start_date"];
    	$adults = $_POST["adults"];
		$deltanight_value = $_POST["deltanight"];
		$deltaday_value = $_POST["deltaday"];
		if (!is_numeric($deltanight_value))$deltanight_value=0;
		if (!is_numeric($deltaday_value))$deltanight_value=0;
		//
		if ($deltanight_value>0)
		{
			$nights = intval($nights) - intval($deltanight_value);
			$deltanight = intval($nights) + 2*intval($deltanight_value);
		}
		else
		{
			$deltanight=$nights;
		}
		//
		if ($deltaday_value>0)
		{
			$_POST["start_date"] = date('d.m.Y', strtotime($_POST["start_date"]. ' -'.strval($deltaday_value).' days'));
			$deltaday = date('d.m.Y', strtotime($_POST["start_date"]. ' +'.strval(2*$deltaday_value).' days'));
		}
		else
		{
			$deltaday = $_POST["start_date"];
		}

		//отели с левел трэвел
		$depart = GetDepartures($_POST["from_city"], "leveltravel");
		$levelTravel->from_city= GetDeparturesLink($_POST["from_city"], "leveltravel");
    	$from_city = $depart["id_city"];
    	$from_country = $depart["id_country"];
    	$to_country = GetCountryId($_POST["to_country"], "leveltravel");
    	$start_date = GetCorectDate($date_LT,"leveltravel");
		$levelTravel->offer_date = DateForLink($date_LT,"leveltravel");
		$levelTravel->ClearResult();
	    $html = $levelTravel->GetLevelTravel($from_city, $from_country, $to_country, $nights_LT, $adults, $start_date,$count_result_mobile);
	    $result["leveltravel"]=$html;
		//отели с травелаты
		$depart = GetDepartures($_POST["from_city"], "travelata");
    	$from_city = $depart["id_city"];
		$from_country = $depart["id_country"];
    	$to_country = GetCountryId($_POST["to_country"], "travelata");
    	$start_date = GetCorectDate($_POST["start_date"],"travelata");
		$deltaday   = GetCorectDate($deltaday,"travelata");
		$travelata->ClearResult();
	    $html = $travelata->GetTravelata($from_city, $from_country, $to_country, $nights, $adults, $start_date,$count_result_mobile,$deltanight,$deltaday);
	    $result["travelata"]=$html;
		//отели с слетать ру
		$depart = GetDepartures($_POST["from_city"], "sletatru");
    	$from_city = $depart["id_city"];
		$from_country = $depart["id_country"];
    	$to_country = GetCountryId($_POST["to_country"], "sletatru");
    	$start_date = GetCorectDate($_POST["start_date"],"sletatru");
		$sletatru->ClearResult();
		$html = $sletatru->GetTours($to_country, $from_city, $nights, $adults, $start_date,$count_result_mobile);
		$result["sletatru"]=$html;
		//склейка
	    $arr=array();
	    $arr[0] = $levelTravel->hotelsList;
	    $arr[1] = $travelata->hotelsList;
		$arr[2] = $sletatru->hotelsList;
		//склейку вынес в отельный класс для удобства.

		$split_tours->ClearResult();
		$html = $split_tours->GetSplitTours($arr);
		$result["all"]=$html;
		//параметры для отображения на фронте - мин цена, макс цена, количество 
	    $minmax_arr=array();//мин макс для фильтра (самый первый фильтр, что по ценам фильтрует)
		$result["leveltravel_param"] = GetMimMaxPriceAndCount($levelTravel->hotelsList);
		array_push($minmax_arr,$result["leveltravel_param"]["min_price"]);
		array_push($minmax_arr,$result["leveltravel_param"]["max_price"]);
		$result["travelata_param"] = GetMimMaxPriceAndCount($travelata->hotelsList);
		array_push($minmax_arr,$result["travelata_param"]["min_price"]);
		array_push($minmax_arr,$result["travelata_param"]["max_price"]);
		$result["sletatru_param"] = GetMimMaxPriceAndCount($sletatru->hotelsList);
		array_push($minmax_arr,$result["sletatru_param"]["min_price"]);
		array_push($minmax_arr,$result["sletatru_param"]["max_price"]);
		$result["min_price"] = min($minmax_arr);
		$result["max_price"] = max($minmax_arr);
		//
		//список регионов
	//$leveltravel_regions = array_column($levelTravel->hotelsList, 'region');
	//$travelata_regions = array_column($travelata->hotelsList, 'region');
	//	$sletatru_regions = array_column($sletatru->hotelsList, 'region');
	//	$result["regions"] = array_unique(array_merge($leveltravel_regions, $travelata_regions,$sletatru_regions));

}
echo json_encode($result);


//var_dump($_REQUEST);
//$output = ob_get_clean();
//file_put_contents('log.txt', $output, FILE_APPEND);
$log = date('Y-m-d H:i:s')."\n" . '$_REQUEST'."\n" . print_r($_REQUEST, true);
$log .= 'Responce [0 - LevelTravel, 1 - Travelata, 2 - SletatRu] '."\n" . print_r($arr, true);
file_put_contents('log.txt', $log . PHP_EOL, FILE_APPEND );
?>