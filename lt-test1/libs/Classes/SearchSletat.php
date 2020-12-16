<?php

class SearchSletat
{
  private $client;
  private $dataJquery;
  public  $oStatus;
  private $login;
  private $password;
  private $url;

  function __construct($dataInput = null)
  {
    $this->login    = "mail@u-travell.ru";
    $this->password = "utravell555";

    $this->client = new GuzzleHttp\Client();

    $this->dataJquery = $dataInput;
  }

  public function startSearch($url)
  {
    $this->url = $url;
    try {

      $response = $this->client->get($url."&requestId=0&updateResult=0");

      $this->oStatus = json_decode($response->getBody()->getContents(), true);

    } catch (\GuzzleHttp\Exception\ClientException $e) {
      echo 'Caught response: ' . $e->getResponse()->getStatusCode() . "\n" . $e->getResponse()->getReasonPhrase() . "\n" . $e->getResponse()->getBody();
    }

     return $this->getStatus();

  }

  function getDepartureCity()
  {
    $sletatDepartureCity = include __DIR__ . '/../data/sletatFromCountries.php';

    $departureCity = array_filter($sletatDepartureCity, function ($sletat) {
       return $sletat['Name'] == $this->dataJquery['selectCityFrom'];
    });
    return array_pop($departureCity);
  }

  function getToCountry($id,$selectCityTo)
  {

    /*Получаем город куда летим*/
    try {
      $response = $this->client->get('https://module.sletat.ru/Main.svc/GetCountries?townFromId='.$id);

      $result = json_decode($response->getBody()->getContents(), true);

    } catch (\GuzzleHttp\Exception\ClientException $e) {
      echo 'Caught response: ' . $e->getResponse()->getStatusCode() . "\n" . $e->getResponse()->getReasonPhrase() . "\n" . $e->getResponse()->getBody();
    }

    /*Выбираем город куда летем*/
    $getToCountry = array_filter($result['GetCountriesResult']['Data'], function ($sletat) {
      return mb_strtolower($sletat['Name']) == mb_strtolower($this->dataJquery['selectCountryToName']);
    });

    /*Получаем все курорты из выбранного города*/
    try {
      $toResort = array_pop($getToCountry);
      $response = $this->client->get('https://module.sletat.ru/Main.svc/GetCities?countryId='.$toResort['Id']);

      $toResortResult = json_decode($response->getBody()->getContents(), true);

    } catch (\GuzzleHttp\Exception\ClientException $e) {
      echo 'Caught response: ' . $e->getResponse()->getStatusCode() . "\n" . $e->getResponse()->getReasonPhrase() . "\n" . $e->getResponse()->getBody();
    }

    $theResort = array_filter($toResortResult['GetCitiesResult']['Data'], function ($resort) use ($selectCityTo) {
      return mb_substr(mb_strtolower($resort['Name']),0,4) == mb_substr(mb_strtolower($this->dataJquery['selectCityTo']),0,4);
    });

    if (empty($theResort)){
      $theResort = $toResortResult['GetCitiesResult']['Data'];
    }

    $ids =  array_column($theResort, 'Id');

    if ($result['GetCountriesResult']['ErrorCode'] > 0)
      return null;


    $returnDate['country'] = $toResort['Id'];
    $returnDate['resort'] = implode(',',$ids);

    return $returnDate;

  }

  function getStatus()
  {
      $requestId = $this->oStatus['GetToursResult']['Data']['requestId'];
    try {
      $response = $this->client->get('https://module.sletat.ru/Main.svc/GetLoadState?requestId='.$requestId);
      $operator_status = json_decode($response->getBody()->getContents(),true);
    } catch (\GuzzleHttp\Exception\ClientException $e) {
      echo 'Caught response: ' . $e->getResponse()->getStatusCode() . "\n" . $e->getResponse()->getReasonPhrase() . "\n" . $e->getResponse()->getBody();
    }

      $idsOratators = 0;
      $status       = [];
      foreach ($operator_status['GetLoadStateResult']['Data'] as $operator)
      {
         if ($operator['IsProcessed'] === false)
         {
           $status['false'] = $operator['IsProcessed'];
         }else{
           $status['true'] = true;
           $idsOratators = $operator['Id'];
           break;
         }
      }

      if (!$status['true']){
        sleep(1);
        return  $this->getStatus();
        die();
      }

    $response = $this->client->get($this->url.'&requestId='.$requestId.'&updateResult=1&filter=1&f_to_id='.$idsOratators);
    $allHotels = json_decode($response->getBody()->getContents(),true);

    return [
      'data'      => $allHotels['GetToursResult']['Data']['aaData'],
      'requestId' => $requestId,
    ];
  }

}
