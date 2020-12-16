<?php

namespace hotTours;

/**
 * Class for a sletat.ru rest service
 */
class JsonSletatRu extends BaseServiceRest
{
	public $login = 'mail@u-travell.ru';
	public $password = 'utravell555';
	public $html="";
	public $hotelsList = array();
	private $count_result_mobile=0;
	public function GetTours(
		$cityFromId,
		$countryId,
		$s_nightsMin=7,
		$s_adults=2,
		$departFrom=null,
		$count_result_mobile
	)
	{
		$this->count_result_mobile=$count_result_mobile;
		$departTo = date('d.m.Y', strtotime($departFrom. ' + '.$s_nightsMin.' days'));
		$reqId = new \hotTours\XmlGate(['login' => $this->login,'password' =>$this->password]);
		$request = $reqId->CreateRequest($cityFromId,$countryId,$departFrom,$departTo,$s_adults,$s_nightsMin);
		sleep(1);
		$hotels = $reqId->GetRequestResult($request);
		$return = $this->parseResult($hotels['Rows']);
		return $return;
	}
	public function GetCountries()
	{
		$xml = new \hotTours\XmlGate(['login' => $this->login,'password' =>$this->password]);
		//получаем список стран
		$countries = $xml->GetCountries();
		return $countries;
	}
	public function GetDepartures()
	{
		$xml = new \hotTours\XmlGate(['login' => $this->login,'password' =>$this->password]);
		//получаем список городов вылета
		$departCities = $xml->GetDepartCities();
		return $departCities;
	}

	protected function parseResult($result)
	{
		$html="";
		$names=array();
		$count=0;
		foreach($result as $item)
		{
			if (($this->count_result_mobile > 0) && ($count >= $this->count_result_mobile))break;
			$rec = new Hotels();
			$rec->brand = "Слетать.ру";
			$rec->region = $item["ResortName"];
			$rec->country = $item["CountryName"];
			$rec->name = $item["HotelName"];
			$rec->stars = str_replace ("*","", $item["StarName"]);
			$rec->rating = $item["HotelRating"];
			$rec->price =  $item["Price"];
			$rec->hotel_url = $item["HotelDescriptionUrl"];
			$rec->touristcount = $item["Adults"];
			$rec->pansion = $rec->GetPansionFromCode($item["MealName"]);
			$rec->nightcount = $item["Nights"];
			$rec->description = $item["Description"];
			$rec->hotel_img = $item["HotelTitleImageUrl"];
			$ret = explode(".",$rec->hotel_img);
			$rec->hotel_img = 'https:'.$ret[0].".".$ret[1].".".$ret[2]."_250_240.jpg";
			if (in_array($rec->name, $names)) continue;
			//$html = $html . $rec->GetSletatRuHtml();
			array_push($this->hotelsList,$rec);
			array_push($names,$rec->name);
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
}
