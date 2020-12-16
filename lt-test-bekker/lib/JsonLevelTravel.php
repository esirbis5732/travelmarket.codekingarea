<?php

namespace hotTours;

//поиск туров тезтур
class JsonLevelTravel extends BaseServiceRest
{
	public $step=5;
	public $url = 'https://api.level.travel/';
    public $user="";
	private $touristcount = 2;
	private $nightcount = 2;
	public $from_city;
	public $offer_date;
	private $from_country;
	private $datestart;
	public $hotelsList = array();
	public $html="";
	private $count_result_mobile=0;
	//
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
	public function GetLevelTravel($from_city, $from_country, $to_country, $nights, $adults, $start_date,$count_result_mobile)
	{
		$this->count_result_mobile=$count_result_mobile;
		$params = array(
			'from_city'=>$from_city,
			'to_country'=>$to_country,
			'nights'=>$nights,
			'adults'=>$adults,
			'start_date'=>$start_date,
		);
		$this->touristcount = $adults;
		$this->nightcount = $nights;
		$this->from_country = $from_country;
		$this->datestart = $start_date;
		$res = $this->callMethod('search/enqueue', $params);
		$data = json_decode($res);
		$res = $this->callMethod('search/status', array('request_id'=>$data->request_id));
		$data = json_decode($res);
		$res = $this->callMethod('search/results', array('request_id'=>$data->request_id));
		//file_put_contents('json_array.txt',$res);
		$data = json_decode($res);
		$html = $this->parseResult($data->response);
		return $html;
	}
	public function selectAjax($step)
	{
		global $DB;
		$html="";
		$results = $DB->Query('SELECT * FROM `b_search_tours` WHERE `index_f` BETWEEN '.($this->step * $step - $this->step + 1).' AND '.($this->step * $step).' AND `operator`="leveltravel"  AND `id_user`="'.$this->user.'"');
		while ($row = $results->Fetch())
		{
			$html .= $row['tour'];
		}
		return $html;
	}
	public function correctUrl($url)
	{
		$url .="?adults=$this->touristcount&from=$this->from_city-$this->from_country&kids=0&nights=$this->nightcount&offer_date=$this->offer_date&start_date=$this->datestart";
		return $url;
	}
	public function ClearResult()
	{
		global $DB;
		$results = $DB->Query('SELECT * FROM `b_search_tours` WHERE `operator`="leveltravel" AND `id_user`="'.$this->user.'"');
		while ($row = $results->Fetch())
		{
			$DB->Query('DELETE FROM `b_search_tours` WHERE `id`='.$row['id']);
		}
	}
	//отправка запроса на сервер 
	protected function callMethod($method, array $params = array())
	{
		$url = rtrim($this->url, '/\\') . '/' . $method;
		return $this->doRequest($url, $params,'get_header',null, $this->getOpts());
	}
	public function GetCountries()
	{
        $res = $this->callMethod('references/countries',array());
		$data = json_decode($res);
        return $data;
	}
	public function GetDepartures()
	{
        $res = $this->callMethod('references/departures',array());
		$data = json_decode($res);
        return $data;
	}
	//получение массива с отелями
	//получение кода html
	protected function parseResult($result)
	{
		global $DB;
		$html="";
		$this->hotelsList = array();
		//$count=0;
		foreach($result as $item)
		{
			//if (($this->count_result_mobile > 0) && ($count >= $this->count_result_mobile))break;
			$rec = new Hotels();
			$rec->brand = "Level.Travel";
			$rec->region = $item->hotel->city;
			$rec->country = $item->hotel->country;
			$rec->name = $item->hotel->name;
			$rec->stars = $item->hotel->stars;
			$rec->rating = $item->hotel->rating;
			$rec->line = $item->hotel->features->line;
			$rec->beachType = $item->hotel->features->beach_surface;
			$rec->beachDistance = $item->hotel->features->beach_distance;
			$rec->airportDistance = $item->hotel->features->airport_distance;
			$rec->airportDistance = $rec->airportDistance/1000;
			$rec->price =  $item->min_price;
			$rec->hotel_url = $this->correctUrl('https://level.travel'.$item->hotel->link);
			$rec->touristcount = $this->touristcount;
			$rec->pansion = implode("|", $item->pansions);
			$rec->nightcount = $this->nightcount;
			$rec->description = $item->hotel->desc;
			$rec->hotel_img = $item->hotel->image->full_size;
			$rec->hotel_img = 'https://level.travel'.$rec->hotel_img;
			//$html = $html . $rec->GetLevelTravelHtml();
			array_push($this->hotelsList,$rec);
			//$count++;
		}
		usort($this->hotelsList, function ($item1, $item2) {
			return $item1->price <=> $item2->price;
		});
		$index=1;
		foreach($this->hotelsList as $item) 
		{
			try
			{
				$result = $DB->Query('INSERT INTO `b_search_tours`( `operator`, `tour`, `id_user`, `index_f`) VALUES ("leveltravel","'.$item->GetLevelTravelHtml().'","'.$this->user.'",'.$index.')');
			}
			catch(Exception $e)
  			{

			}

			$index++;
		}
		$html = $this->selectAjax(1);
		return $html;
	}
}
