<?php
class AutoComplete {
  private $client;
  private $inputData;

  /**
   * AutoComplete constructor.
   * @param $inputData
   * Установка клиента и заголовки
   */
  function __construct($inputData)
  {
    $headers = [
      'Accept' =>  'application/vnd.leveltravel.v3',
      'Authorization' => 'Token token="f7ca9ff62cac7ebe403b35b9e4065be4"'
    ];
    $this->client = new GuzzleHttp\Client(['headers' => $headers]);

    $this->inputData = $inputData;
    return $this;
  }

  /**
   * @return string
   * @throws \GuzzleHttp\Exception\GuzzleException
   * Поиск городов для автокомплита
   */
  public  function searchCity()
  {

    try {
      $response = $this->client->get('https://api.level.travel/references/airports');

      $airports = json_decode($response->getBody()->getContents());

      if (!$airports->success)
        return "errors";

      echo json_encode($airports->airports);

    } catch (\GuzzleHttp\Exception\ClientException $e) {
      echo 'Caught response: ' . $e->getResponse()->getStatusCode()."\n".$e->getResponse()->getReasonPhrase()."\n".$e->getResponse()->getBody() ;
    }

  }

  /**
   *  return info Tour by Json hash  from a file
   *  echo info Tour by Json hash  from a file
   */
  public  function autocompleteTour()
  {
    echo file_get_contents('autocompleteTour.json');
    return  file_get_contents('autocompleteTour.json');
  }

  /**
   * @return string
   * @throws \GuzzleHttp\Exception\GuzzleException
   * set "Json hash" info of Tour to from a file
   */
  public function getautocompleteTour()
  {
    try {

      $response = $this->client->get('https://api.level.travel/references/destinations');

      $result = json_decode($response->getBody()->getContents());

    } catch (\GuzzleHttp\Exception\ClientException $e) {
      echo 'Caught response: ' . $e->getResponse()->getStatusCode()."\n".$e->getResponse()->getReasonPhrase()."\n".$e->getResponse()->getBody();
      die();
    }

    if ($result->success === false)
      return 'errors';

    /*  echo "<pre>";
      var_dump($result);*/
    $countryTo = [];
    foreach ($result->countries as $country)
    {

      $countryTo[] = [
        'label'      => $country->name_ru,
        'name'       => $country->name_ru,
        'label_en'   => $country->name_en,
        "to_city"    => "",
        "to_country" => $country->id,
        'country_ru' => "",
        "country_en" => '',

      ];

      foreach ($country->cities as $city)
      {
        $countryTo[] = [
          'label'      => $city->name_ru,
          "label_en"   => $city->name_en,
          "to_city"    => $city->id,
          'country_ru' => $country->name_ru,
          'country_en' => $country->name_en,
          "to_country" => $country->id,
        ];
      }
    }

    file_put_contents('autocompleteTour.json',json_encode($countryTo));
  }
}
