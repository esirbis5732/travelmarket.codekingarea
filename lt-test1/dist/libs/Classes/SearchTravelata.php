<?php

class SearchTravelata
{

  private $client;

  private $dataJquery;

  function __construct($dataJquery = null)
  {
    $headers = [
      'Accept' => 'application/vnd.leveltravel.v3',
      'Authorization' => 'Token token="f7ca9ff62cac7ebe403b35b9e4065be4"'
    ];

    $this->client = new GuzzleHttp\Client(['headers' => $headers]);

    $this->dataJquery = $dataJquery;
  }

  public function startSearch($url)
  {
    try {

      $response = $this->client->get($url);

      $result = json_decode($response->getBody()->getContents(), true);

    } catch (\GuzzleHttp\Exception\ClientException $e) {
      echo 'Caught response: ' . $e->getResponse()->getStatusCode() . "\n" . $e->getResponse()->getReasonPhrase() . "\n" . $e->getResponse()->getBody();
    }

    if (!$result['success'])
          return null;

    return $result['data'];
  }

  function getDepartureCity()
  {
    $travelataDepartureCity = include __DIR__ . '/../data/travelataFromCountries.php';

    $departureCity = array_filter($travelataDepartureCity, function ($travelata) {
      return $travelata['name'] == $this->dataJquery['selectCityFrom'];
    });

    return array_pop($departureCity);
  }

  public function getToCountry()
  {
    try {
      $response = $this->client->get('http://api-gateway.travelata.ru/directory/countries');

      $result = json_decode($response->getBody()->getContents(), true);

    } catch (\GuzzleHttp\Exception\ClientException $e) {
      echo 'Caught response: ' . $e->getResponse()->getStatusCode() . "\n" . $e->getResponse()->getReasonPhrase() . "\n" . $e->getResponse()->getBody();
    }

    if ($result['success'] === false)
      return null;

    $toCountry = array_filter($result['data'], function ($country) {
      return strtolower($country['name']) == strtolower($this->dataJquery['selectCountryToName']);
    });

    return array_pop($toCountry);

  }
}
