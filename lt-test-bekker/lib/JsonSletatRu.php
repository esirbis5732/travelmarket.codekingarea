<?php
namespace hotTours;
use Bitrix\Main\UserTable;
require_once($_SERVER['DOCUMENT_ROOT']. "/bitrix/modules/main/include/prolog_before.php");
/**
 * Class for a sletat.ru rest service
 */
class JsonSletatRu extends BaseServiceRest
{
	public $step=5;
	public $login = 'mail@u-travell.ru';
    public $user="";
	public $password = 'utravell555';
	public $html="";
	public $hotelsList = array();
	private $count_result_mobile=0;
	//to link
	private $countryId;
	private $cityFromId;
	private $adults;
	private $datefrom;
	private $departFrom;
	private $departTo;
	private $nightsMin;
	public function GetTours(
		$cityFromId,
		$countryId,
		$s_nightsMin=7,
		$s_adults=2,
		$departFrom=null
	)
	{
		$this->countryId = $countryId;
		$this->cityFromId = $cityFromId;
		$this->adults = $s_adults;
		$this->departFrom = str_replace(".","/", $departFrom);
		$departTo = date('d.m.Y', strtotime($departFrom. ' + '.$s_nightsMin.' days'));
		$this->departTo=str_replace(".","/", $departTo);
		$this->nightsMin = $s_nightsMin;
		$reqId = new \hotTours\XmlGate(['login' => $this->login,'password' =>$this->password]);
		$request = $reqId->CreateRequest($cityFromId,$countryId,$departFrom,$departTo,$s_adults,$s_nightsMin);
		sleep(1);
		//file_put_contents('json_array.txt',json_encode($request));
		$hotels = $reqId->GetRequestResult($request);
		//file_put_contents('json_array.txt',json_encode($hotels));
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
	public function GetHotelList($id)
	{
		$xml = new \hotTours\XmlGate(['login' => $this->login,'password' =>$this->password]);
		//получаем список городов вылета
		$hotelList= $xml->GetHotels($id);
		return $hotelList;
	}
	public function GetHotelInformation($id)
	{
		$xml = new \hotTours\XmlGate(['login' => $this->login,'password' =>$this->password]);
		$hotelListInfo= $xml->GetHotels($id);
		return $hotelListInfo;
	}
	public function selectAjax($step)
	{
		global $DB;
		$html="";
		$results = $DB->Query('SELECT * FROM `b_search_tours` WHERE `index_f` BETWEEN '.($this->step * $step - $this->step + 1).' AND '.($this->step * $step).' AND `operator`="sletat"  AND `id_user`="'.$this->user.'"');
		while ($row = $results->Fetch())
		{
			$html .= $row['tour'];
		}
		return $html;
	}
	public function ClearResult()
	{
		global $DB;
		$results = $DB->Query('SELECT * FROM `b_search_tours` WHERE `operator`="sletat" AND `id_user`="'.$this->user.'"');
		while ($row = $results->Fetch())
		{
			$DB->Query('DELETE FROM `b_search_tours` WHERE `id`='.$row['id']);
		}
	}
	protected function parseResult($result)
	{
		global $DB;
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
			//$rec->hotel_url = $item["HotelDescriptionUrl"];
			$rec->hotel_url = "https://sletat.ru/search?callback=search&country=".$this->cityFromId."&city=".$this->countryId."&hotels=".$item["HotelId"]."&adults=".$this->adults."&datefrom=".$this->departFrom;
			$rec->hotel_url .="&dateto=".$this->departTo."&currency=RUB&nightsmin=".$nightsMin."&nightsmax=14&sf=agent&__osr__=false&__hall__=false";
			$rec->touristcount = $item["Adults"];
			//$rec->pansion = $rec->GetPansionFromCode($item["MealName"]);
			$rec->pansion = $item["MealName"];
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
		$index=1;
		foreach($this->hotelsList as $item) 
		{
			$html = $item->GetSletatRuHtml();
			$result= $DB->Query('INSERT INTO `b_search_tours`( `operator`, `tour`, `id_user`, `index_f`) VALUES ("sletat","'.$item->GetSletatRuHtml().'","'.$this->user.'",'.$index.')');
			$index++;
		}		
		$html = $this->selectAjax(1);
		return $html;
	}
}
