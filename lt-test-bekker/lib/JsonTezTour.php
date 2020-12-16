<?php

namespace hotTours;

//поиск туров тезтур
class JsonTezTour extends BaseServiceRest
{

	public $url = 'http://search.tez-tour.com/';
	public $hotelsList = array();
	private $count_tourists=2;
	public function GetTezTours(
		$countryId,// – id страны отдыха;
		$cityId,  // – id города вылета;
		//$before, //– верхняя планка диапазона даты заезда;
		$after,// – нижняя планка диапазона даты заезда;
		$count_tourists, //количество туристов
		$nightsMin=7, // – минимальное количество ночей, проведенных в отеле;
		$nightsMax=30, //– максимальное количество ночей, проведенных в отеле;
		//ниже можно не заполнять
		$priceMin=0,// – минимальная стоимость отдыха;
		$priceMax=999999,// – максимальная стоимость отдыха;
		$currency=8390, //– id валюты, в которой указана цена;
		$accommodationId=2,// – id размещения;
		$hotelClassId=2569,// – id уровня отеля(звездность);
		$hotelClassBetter="true",// – позволяет(либо не позволяет) выдавать в результате подбора отели классом выше указанного(в интерфейсе выглядит как флажок «и лучше»);
		$rAndBId=2424,// – id пансиона;
		$rAndBBetter="true",// / false – позволяет(либо не позволяет) выдавать в результате подбора предложения с пансионом уровнем выше указанного(в интерфейсе выглядит как флажок «и лучше»);
		$tourId=1285,// – id региона. Можно указать несколько регионов: tourId=14259&tourId=14385. Для двойного проживания указывать tourId=14259,14385. Не может быть использован вместе с spoRegionId.
		//Необязательные параметры:
		$xml= "true",// – формат результата подбора(ответа). True – ответ придет в формате xml, false – ответ придет в формате search.
		$formatResult= "true",// / false – форматирование ответа. True – ответ будет отформатирован, false – ответ придет одной строкой. Актуально только для ответа в формате json.
		$tourType=1,// - состав тура статичные значения (1 - Полный пакет, 2 - Проживание + трансфер, 3 - Проживание, 6 - Проживание + перелёт)
		$locale=ru,// / en – локализация. Ru – русская локализация, en – английская локализация(на стадии доработки).
		$showArrivalRegion="false" ,///-позволяет(либо не позволяет) искать ID региона прилета
		$noTicketsFrom="false",// / true – позволяет(либо не позволяет) искать предложения для которых нет подходящих вылетов обратно(в интерфейсе выглядит как флажок «нет билетов обратно»);
		$noTicketsTo="false",// / true – позволяет(либо не позволяет) искать предложения для которых нет подходящих вылетов туда(в интерфейсе выглядит как флажок «нет билетов туда»);
		$hotelInStop="false"// / true – позволяет(либо не позволяет) искать предложения для которых отели в стопе(в интерфейсе выглядит как флажок «отели в стопе»);
	){
		$params = array(
			'accommodationId'=>$accommodationId,
			'after'=>$after,
			'before'=>date('d.m.Y', strtotime($after. ' + '.$nightsMin.' days')),
			'cityId'=>$cityId,
			'countryId'=>$countryId,
			'currency'=>$currency,
			'hotelClassBetter'=>$hotelClassBetter,
			'hotelClassId'=>$hotelClassId,
			'hotelInStop'=>$hotelInStop,
			'locale'=>$locale,
			'nightsMax'=>$nightsMax,
			'nightsMin'=>$nightsMin,
			'noTicketsFrom'=>$noTicketsFrom,
			'noTicketsTo'=>$noTicketsTo,
			'priceMax'=>(int)$priceMax,
			'priceMin'=>$priceMin,
			'rAndBBetter'=>$rAndBBetter,
			'rAndBId'=>$rAndBId,
			'tourId'=>$tourId,
			'formatResult'=>$formatResult,
			'xml'=>$xml,
			'showArrivalRegion'=>$showArrivalRegion
		);
		$this->count_tourists=$count_tourists;
		$res = $this->callMethod('tariffsearch/getResult', $params);
		$this->parseResult($res);
		return $res;
	}
	//отправка запроса на сервер
	protected function callMethod($method, array $params = array())
	{
		$url = rtrim($this->url, '/\\') . '/' . $method;
		return $this->doRequest($url, $params,'get_s',null);
	}

	public function GetCountries()
	{
		$data = simplexml_load_file("http://api.icstrvl.ru/tour-api/getCountries.xml");
		$res=json_decode(json_encode((array)$data), TRUE);
		return $res["countries"]["country"];
	}
	public function GetDepartures()
	{
		$data = simplexml_load_file("http://api.icstrvl.ru/tour-api/getDepartures.xml");
		$res=json_decode(json_encode((array)$data), TRUE);
		return $res["cities"]["city"];
	}
	//получение кода html
	protected function parseResult($result)
	{
		$hotelsList=array();
		$tmp = simplexml_load_string($result);
		$html = "";
		$stars = "";
		$price = 0;
		if (!empty($tmp->data)) 
		{
			foreach ($tmp->data->item as $hotel) 
			{
				$rec->brand = "TezTour";
				$rec = new Hotels();
				//звезды
				$rec->name = $hotel->hotel->name;
				if (strpos($hotel->hotel->name, '*') !== false) 
				{
					$rec->stars = substr($hotel->hotel->name, (strlen($hotel->hotel->name)-4),3);
					$rec->stars = str_replace(" ","",$rec->stars);
					$rec->stars = str_replace("*","",$rec->stars);
					$rec->name =  str_replace($rec->stars." *","",$hotel->hotel->name);
				}
				$rec->touristcount= $hotel->price->flightsTo->flightPrice->touristCount;
				$rec->price = $rec->touristcount * ((float)$hotel->price->total/(float)$rec->touristcount);
				$rec->price = (int)$rec->price;
				$rec->hotel_url = $hotel->hotel->url;
				$rec->hotel_img = $hotel->hotel->previewImg;
				$rec->region = $hotel->region->name;
				$rec->pansion = $hotel->pansion->description;
				$rec->nightcount = $hotel->nightCount;
				$rec->checkin=$hotel->checkin;
				$rec->checkout=$hotel->checkout;
				$html = $html . $rec->GetTezTourHtml();
				array_push($hotelsList,$rec);
			}
		}
		return $html;
	}
}
