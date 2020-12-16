<? require_once 'lib/Autoloader.php';?>
<? require_once 'lib/Mobile_Detect.php';?>
<? require_once($_SERVER['DOCUMENT_ROOT']. "/bitrix/modules/main/include/prolog_before.php");?>
<?
$levelTravel = new \hotTours\JsonLevelTravel();
$travelata = new \hotTours\JsonTravelata();
$teztour = new \hotTours\JsonTezTour();
$sletatru = new \hotTours\JsonSletatRu();
//определение мобильников для ограничение количества выдачи результатов
$detect = new Mobile_Detect;
$count_result_mobile = 0;//количество туров на выдачу 0 - без ограничений
if($detect->isMobile() || $detect->isTablet()) $count_result_mobile = 10;

//парсинг даты
function GetCorectDate($value,$type)
{
	$format = "DD.MM.YYYY";
	$arr = ParseDateTime($value, $format);
	switch ($type) 
	{
		case "leveltravel":
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
if(isset($_POST["get_hotels"]))
{
		$nights = $_POST["nights"];
    	$adults = $_POST["adults"];
		$result = array();//итоговый массив для фронтэнда(html код по всем поисковикам+склейка)
		//отели с левел трэвел
		$depart = GetDepartures($_POST["from_city"], "leveltravel");
    	$from_city = $depart["id_city"];
    	$from_country = $depart["id_country"];
    	$to_country = GetCountryId($_POST["to_country"], "leveltravel");
    	$start_date = GetCorectDate($_POST["start_date"],"leveltravel");
		$html = $levelTravel->GetLevelTravel($from_city, $from_country, $to_country, $nights, $adults, $start_date,$count_result_mobile);
		$result["leveltravel"]=$html;
		//отели с травелаты
		$depart = GetDepartures($_POST["from_city"], "travelata");
    	$from_city = $depart["id_city"];
		$from_country = $depart["id_country"];
    	$to_country = GetCountryId($_POST["to_country"], "travelata");
    	$start_date = GetCorectDate($_POST["start_date"],"travelata");
		$html = $travelata->GetTravelata($from_city, $from_country, $to_country, $nights, $adults, $start_date,$count_result_mobile);
		$result["travelata"]=$html;
		//отели с слетать ру
		$depart = GetDepartures($_POST["from_city"], "sletatru");
    	$from_city = $depart["id_city"];
		$from_country = $depart["id_country"];
    	$to_country = GetCountryId($_POST["to_country"], "sletatru");
    	$start_date = GetCorectDate($_POST["start_date"],"sletatru");
		$html = $sletatru->GetTours($to_country, $from_city, $nights, $adults, $start_date,$count_result_mobile);
		$result["sletatru"]=$html;
		//склейка
		$arr=array();
	    $arr[0] = $levelTravel->hotelsList;
		$arr[1] = $travelata->hotelsList;
		$arr[2] = $sletatru->hotelsList;
		//склейку вынес в отельный класс для удобства.
		$split_tours = new \hotTours\SplitTours();
		$html = $split_tours->GetSplitTours($arr);
		$result["all"]=$html;
	echo json_encode($result);
}

?>