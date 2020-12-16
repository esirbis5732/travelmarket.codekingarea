<?php

class SearchLevelTravel{
  private $client;
  private $dataInput;
  public  $request_id;
  public $operator_ids = [];

  function __construct($dataInput = null)
  {
    $headers = [
      'Accept' =>  'application/vnd.leveltravel.v3',
      'Authorization' => 'Token token="f7ca9ff62cac7ebe403b35b9e4065be4"'
    ];

    $this->client = new GuzzleHttp\Client(['headers' => $headers]);

    $this->dataInput = $dataInput;
  }

  /**
   * @return  null
   * @echo    JSON
   * @throws \GuzzleHttp\Exception\GuzzleException
   * Делаем запрос на поиск туров и обрабатываем через функции getStatus/get_grouped_hotels
   */
  public function searchTour ()
  {

    try {
      $response = $this->client->get('https://api.level.travel/search/enqueue',['query' =>$this->dataInput]);

      $response = json_decode($response->getBody()->getContents());
    } catch (\GuzzleHttp\Exception\ClientException $e) {
      echo 'Caught response: ' . $e->getResponse()->getStatusCode()."\n".$e->getResponse()->getReasonPhrase()."\n".$e->getResponse()->getBody() ;
    }

    if ($response->success === false)
      return "errors";

    $this->request_id = $response->request_id;
    if (!$this->getStatus())
    {
      //echo json_encode("empty");
     return  [];
    }

    return $this->get_grouped_hotels();

  }

  /**
   * @return false|json
   * @throws \GuzzleHttp\Exception\GuzzleException
   * Получаем информацию об отелях
   */
  public function get_grouped_hotels()
  {
    try {
      $response = $this->client->get('https://api.level.travel/search/get_grouped_hotels?request_id='.$this->request_id);
      $response = json_decode($response->getBody()->getContents(),true);
    } catch (\GuzzleHttp\Exception\ClientException $e) {
      echo 'Caught response: ' . $e->getResponse()->getStatusCode()."\n".$e->getResponse()->getReasonPhrase()."\n".$e->getResponse()->getBody() ;
    }

    if ($response['success'] === false)
      return "errors";


    //$hotels = array_slice($response['hotels'],0,15);
    $hotels = $response['hotels'];

    foreach ($hotels as $key => $hotel)
    {
      $hotels[$key]['requestId']   = $this->request_id;
      $hotels[$key]['searchType']  = 'levelTravel';
      $hotels[$key]['hotelOffers'] = [];
      $hotels[$key]['otherNight']  = [];
      $hotels[$key]['otherTours']  = [];
      $hotels[$key]['hotellook']  = '';
    }

    return $hotels;
    //return json_encode($hotels);

  }

  /**
   * @param $hotel_id
   * @param $requestId
   * @return null
   * @echo   json
   * @throws \GuzzleHttp\Exception\GuzzleException
   * Получаем подробную информацию об отеле
   */
  public function getHotelOffers($hotel_id,$requestId)
  {
    usleep(1000000 / 14);
    try {
      $response = $this->client->get('https://api.level.travel/search/get_hotel_offers?request_id='.$requestId."&hotel_id=".$hotel_id);

      $result = json_decode($response->getBody()->getContents(),true);

    } catch (\GuzzleHttp\Exception\ClientException $e) {
      echo 'Caught response: ' . $e->getResponse()->getStatusCode()."\n".$e->getResponse()->getReasonPhrase()."\n".$e->getResponse()->getBody() ;
    }

    if ($result['success'] === false)
      return null;


    echo json_encode($result['hotel_offers']);
  }

  public function getOffer ($requestId,$tourId)
  {

    try {
      usleep(1000000 / 15);
      $response = $this->client->get('https://api.level.travel/search/get_offer?request_id='.$requestId."&tour_id=".$tourId);

      $result = json_decode($response->getBody()->getContents(),true);

      echo json_encode($result['package']);

    } catch (\GuzzleHttp\Exception\ClientException $e) {
      echo 'Caught response: ' . $e->getResponse()->getStatusCode()."\n".$e->getResponse()->getReasonPhrase()."\n".$e->getResponse()->getBody() ;
    }
  }


  /**
   * @return bool|string
   * set to $this->operator_ids ids operators
   * @throws \GuzzleHttp\Exception\GuzzleException
   * Получем статус туроператоров, на выгрузку информации
   */
  public function getStatus()
  {

    $response = $this->client->get('https://api.level.travel/search/status?request_id='.$this->request_id);

    $operator_status = json_decode($response->getBody()->getContents(),true);

    if (!$operator_status['success'])
      return 'errors';

    if (in_array('pending',$operator_status['status']) || in_array('performing',$operator_status['status']))
    {
      usleep(1000000 / 15);
      return $this->getStatus();
    }

    foreach ($operator_status['status'] as $id => $status)
    {
      if ($status === "completed" || $status === "cached")
        $this->operator_ids[] = $id;
    }

    return !!$this->operator_ids;
  }

}
