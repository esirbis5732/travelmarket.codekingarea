<?php

namespace hotTours;

//поиск туров тезтур
class JsonTravelata extends BaseServiceRest
{
	public $url = 'http://api-gateway.travelata.ru/';
	public $hotelsList = array();
	public $to_country="";
	public $nights=2;
	public $adults=2;
	public $html="";
	private $count_result_mobile=0;
	public function GetTravelata($from_city, $from_country, $to_country, $nights, $adults, $start_date,$count_result_mobile){
		$this->count_result_mobile=$count_result_mobile;
		$params = array(
			'departureCity'=>$from_city,
			'from_country'=>$from_country,
			'countries[]'=>$to_country,
			'nightRange[from]'=>$nights,
			'nightRange[to]'=>$nights,
			'touristGroup[adults]'=>$adults,
			'checkInDateRange[from]'=>$start_date,
			'checkInDateRange[to]'=>$start_date,
			'touristGroup[kids]'=>0,
			'touristGroup[infants]'=>0,
			'hotelCategories[]'=>2,
			'hotelCategories[]'=>7,

		);
		$this->to_country = $to_country;
		$res = $this->callMethod('directory/resorts', array());
		$data = json_decode($res);
		$arResorts = [];
		foreach($data->data as $resort)
		{
		  if($resort->countryId == $to_country)
		  {
			$arResorts[] = $resort->id;
		  }
		}
		$resortsStr = implode(",", $arResorts);
		$params['resorts[]'] = $resortsStr;
		$res = $this->callMethod('statistic/cheapestTours', $params);
		$html = $this->parseResult(json_decode($res));
		return $html;
	}
	//отправка запроса на сервер
	protected function callMethod($method, array $params = array())
	{
		$url = rtrim($this->url, '/\\') . '/' . $method;
		return $this->doRequest($url, $params,'get_s',null);
	}
	protected function getResortName($arResorts, $id)
	{
		$find = "";
        foreach($arResorts->data as $resort)
		{	
            if($resort->id == $id)
			{	
                $find = $resort->name;
                break;
            }
        }
        return $find;
    }
	public function GetResorts()
	{
		$res = $this->callMethod('directory/resorts',array());
        return json_decode($res);
	}
	public function GetCountries()
	{
        $res = $this->callMethod('directory/countries',array());
		$data = json_decode($res);
        return $data->data;
	}
	public function GetDepartures()
	{
        $arDepurtures=array();
		$arDepurtures['90']="Абакан";
    	$arDepurtures['8']="Архангельск";
    	$arDepurtures['10']="Астрахань";
    	$arDepurtures['12']="Барнаул";
    	$arDepurtures['13']="Белгород";
    	$arDepurtures['15']="Благовещенск";
    	$arDepurtures['18']="Брянск";
    	$arDepurtures['19']="Владивосток";
    	$arDepurtures['20']="Владикавказ";
    	$arDepurtures['21']="Волгоград";
    	$arDepurtures['22']="Воронеж";
    	$arDepurtures['25']="Екатеринбург";
    	$arDepurtures['28']="Иркутск";
    	$arDepurtures['29']="Казань";
    	$arDepurtures['30']="Калининград";
    	$arDepurtures['32']="Кемерово";
    	$arDepurtures['36']="Краснодар";
    	$arDepurtures['37']="Красноярск";
    	$arDepurtures['38']="Курган";
    	$arDepurtures['39']="Курск";
    	$arDepurtures['91']="Липецк";
    	$arDepurtures['42']="Магадан";
    	$arDepurtures['43']="Магнитогорск";
    	$arDepurtures['92']="Махачкала";
    	$arDepurtures['44']="МинеральныеВоды";
    	$arDepurtures['2']="Москва";
    	$arDepurtures['46']="Мурманск";
    	$arDepurtures['47']="Нальчик";
    	$arDepurtures['48']="Нижневартовск";
    	$arDepurtures['50']="НижнийНовгород";
    	$arDepurtures['51']="Новокузнецк";
    	$arDepurtures['52']="Новороссийск";
    	$arDepurtures['53']="Новосибирск";
    	$arDepurtures['56']="Омск";
    	$arDepurtures['57']="Оренбург";
    	$arDepurtures['60']="Пенза";
    	$arDepurtures['61']="Пермь";
    	$arDepurtures['62']="Петропавловск-Камчатский";
    	$arDepurtures['63']="Ростов-на-Дону";
    	$arDepurtures['64']="Самара";
    	$arDepurtures['1']="Санкт-Петербург";
    	$arDepurtures['65']="Саратов";
    	$arDepurtures['66']="Симферополь";
   	 	$arDepurtures['67']="Сочи";
    	$arDepurtures['93']="Ставрополь";
    	$arDepurtures['68']="Сургут";
    	$arDepurtures['70']="Сыктывкар";
    	$arDepurtures['71']="Тольятти";
    	$arDepurtures['72']="Томск";
    	$arDepurtures['74']="Тюмень";
    	$arDepurtures['75']="Улан-Удэ";
    	$arDepurtures['76']="Ульяновск";
    	$arDepurtures['79']="Уфа";
    	$arDepurtures['80']="Хабаровск";
    	$arDepurtures['81']="Ханты-Мансийск";
    	$arDepurtures['83']="Чебоксары";
    	$arDepurtures['84']="Челябинск";
    	$arDepurtures['85']="Чита";
    	$arDepurtures['87']="Южно-Сахалинск";
    	$arDepurtures['88']="Якутск";
		return $arDepurtures;
	}
	//получение массива с отелями
	//получение кода html
	protected function parseResult($result)
	{
		$count=0;
		$html="";
		$this->hotelsList=array();
		$arResorts = $this->GetResorts();
		//Массив стран
        $country = "";
		$countries = $this->GetCountries();
		foreach($countries as $country)
		{
            if($country->id == $this->to_country)
			{
                $country = $country->name;
                break;
            }
        }
		foreach($result->data as $item) 
		{
			if (($this->count_result_mobile > 0) && ($count >= $this->count_result_mobile))break;
			$rec = new Hotels();
			$resortId = $item->resortId;
			$rec->brand = "Travelata";
			$rec->nightcount = $this->nights;
			$rec->touristcount = $this->adults;
			$rec->region = $country.', '.$this->getResortName($arResorts, $resortId);
			$rec->name = $item->hotelName;
            $rec->stars = $item->hotelCategoryName;
            $rec->rating = $item->hotelRating;
            $rec->price = $item->price;
            $rec->hotel_url = $item->tourPageUrl;
			$rec->hotel_img = $item->hotelPreview;
            $rec->hotel_img = substr($rec->hotel_img, 0, strpos($rec->hotel_img, "?"))."?width=250&height=240";
			array_push($this->hotelsList,$rec);
			$count++;
		}
		usort($this->hotelsList, function ($item1, $item2) {
			return $item1->price <=> $item2->price;
		});
		foreach($this->hotelsList as $item) 
		{
			$html = $html . $item->GetTravelataHtml();
		}
		$this->html=$html;
		return $html;
	}
	//
}
