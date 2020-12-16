<?php

class Search
{

  private $dataJquery;

  function __construct($dataJquery)
  {
    $this->dataJquery = $dataJquery;
  }

  function searchStart()
  {

    $responseRelulte = [];
    //$responseRelulteLevelTravel     = $this->startLevelTravel();
    //$responseRelulteSletat          = $this->startSletat();
    $responseRelulte['LevelTravel'] = array_slice($this->startLevelTravel(),0,20);
    $responseRelulte['Sletat']      = $this->startSletat();
    $responseRelulte['Travelata']   = $this->startTravelata();


    $kyesFroDelete = [];
    $lag =false;
    $newArray = ['yes' => [],'no' => []];
/*  $responseRelulte['LevelTravel'] = [];
    $responseRelulte['Sletat']      = $responseRelulteSletat;*/
    /*Клеим похожие отели*/
    /*foreach ($responseRelulteLevelTravel as $offerKye => $offer)
   {
      $nameOfHotel = mb_strtolower(preg_replace('/\s+/', '', $offer['hotel']['name']));

        foreach ($responseRelulteSletat as $kye => $sletat){
          $nameOfHotelSletat =  mb_strtolower(preg_replace('/\s+/', '', $sletat['hotel']['name']));
            if ($nameOfHotel == $nameOfHotelSletat){
              $lag = true;
              $offer['theSameHotel']['datesFilds']          = $sletat['datesFilds'];
              $offer['theSameHotel']['tourPageUrl']         = $sletat['tourPageUrl'];
              $offer['theSameHotel']["priceID"]             = $sletat['priceID'];
              $offer['theSameHotel']["operatorID"]          = $sletat['operatorID'];
              $offer['theSameHotel']["requestID"]           = $sletat['requestID'];
              $offer['theSameHotel']["allData"]             = $sletat['allData'];
              $offer['theSameHotel']["lat"]                 = $sletat['lat'];
              $offer['theSameHotel']["long"]                = $sletat['long'];
              $offer['theSameHotel']['price']               = $sletat['hotelOffers'][0][0]['price'];
              $offer['theSameHotel']['room_type_ru']        = $sletat['hotelOffers'][0][0]['room_type_ru'];
              $offer['theSameHotel']['description']         = $sletat['hotelOffers'][0][0]['pansion']['description'];
              $offer['theSameHotel']['name']                = $sletat['hotelOffers'][0][0]['pansion']['name'];
              $kyesFroDelete[]  = $kye ;
            }
        }

        switch($lag)
        {
          case true:
          $newArray['yes'][] = $offer;
          break;
          case false:
            $newArray['no'][] = $offer;
            break;
        }

        $lag = false;
     }*/
    /*Работает в js Только если пересобрать массив... а почему???*/
    /*  foreach ($responseRelulteSletat as $kye => $value)
    {
      if (!in_array($kye, $kyesFroDelete))
        $responseRelulte['Sletat'][] = $value;
    }*/
    /*$responseRelulte['LevelTravel']  = $newArray['yes'];
    if (count($newArray['no']) > 0)
       array_push($responseRelulte['LevelTravel'],...array_slice($newArray['no'],0,20));*/


    echo json_encode($responseRelulte);
  }

  function startLevelTravel()
  {
    $data = [
      "from_city" => $this->dataJquery['selectCityFromHide'],
      "from_country" => $this->dataJquery['selectCountryTo'],
      "to_country" => $this->dataJquery['selectCountryTo'],
      "nights" => $this->dataJquery['night'],
      "start_date" => trim(explode("-", $this->dataJquery['dateTour'])[0]),
      "adults" => $this->dataJquery['adults'],
    ];

    if (!empty($this->dataJquery['kids'])) {
      $data["kids"] = $this->dataJquery['kids'];
      $data["kids_ages"] = preg_replace('/[.]+/im', ',', $this->dataJquery['kids_ages']);
    }

    if ($this->dataJquery['stars_from'] > 0) {
      $data['stars_from'] = $this->dataJquery['stars_from'];
      $data['stars_to'] = $this->dataJquery['stars_from'];
    }

    if (!empty($this->dataJquery['selectCityToHide'])) {
      $data["to_city"] = $this->dataJquery['selectCityToHide'];
    }

    if (empty($data['from_city']) || empty($data['from_country']) || empty($data['nights']) || empty($data['start_date'])) {
      die('some field of from is empty!!');
    }

    $LevelTravelClass = new SearchLevelTravel($data);

    $response = $LevelTravelClass->searchTour();

    return $response;
  }

  function startTravelata()
  {
    $searchTravelata = new SearchTravelata($this->dataJquery);
    $departureCity = $searchTravelata->getDepartureCity();
    $toCountry = $searchTravelata->getToCountry();
    $date = explode('-', $this->dataJquery['dateTour']);
    $dateForm = $date[0];
    $dateTo = $date[1];

    $under = [];
    $over = [];
    if ($this->dataJquery['kids']) {

      foreach (explode(".", $this->dataJquery['kids_ages']) as $kids) {
        if ($kids > 12) {
          $over[] = $kids;
        } else {
          $under[] = $kids;
        }
      }
    }

    $url = 'https://api-gateway.travelata.ru/statistic/cheapestTours?shmarker=200556
        &countries[]=' . $toCountry['id']
      . '&departureCity=' . $departureCity['id']
      . '&nightRange[from]=' . $this->dataJquery['night']
      . '&nightRange[to]=' . $this->dataJquery['night']
      . '&touristGroup[adults]=' . $this->dataJquery['adults']
      . '&checkInDateRange[to]=' . date("Y-m-d", strtotime($dateForm))
      . '&checkInDateRange[from]=' . date("Y-m-d", strtotime($dateForm))
      . '&touristGroup[kids]=' . count($over)
      . '&touristGroup[infants]=' . count($under);


    $travelataOut = [];

    if ($searchTravelata->startSearch($url)) {
      foreach ($searchTravelata->startSearch($url) as $travelata){
       $searchPageUrl = parse_url($travelata['searchPageUrl']);
       parse_str($searchPageUrl['fragment'],$searchPageUrl);
        $travelataOut[] = [
          'hotel' => [
            'name'        => $travelata['hotelName'],
            'rating'      => (int) $travelata['hotelRating'],
            'id'          => $travelata['hotelId'],
            'features'    => ['line' => ''],
            'images'      => [['x245x240' => $travelata['hotelPreview']]],
            'stars'       => (int) str_replace('*','',$travelata['hotelCategoryName']),
          ],
          'hotelOffers'   => [
                [
                  'price' => $travelata['price'],
                  'pansion' => ['name' => '','description' => '']
                ]
          ],
          'searchType'        => 'travelata',
          'dates'             => [$travelata['checkinDate'] => 77],
          'datesFilds'        => date("d.m.Y", strtotime($travelata['checkinDate'])),
          'pansion_prices'    => "",
          "min_price_nights"  => $searchPageUrl['nightFrom'],
          "tourPageUrl"       => $travelata['tourPageUrl'],
          "infoPrice"         => $travelata['price'],
          "otherNight"        => [],
        ];
      }
    }

    return (array) $travelataOut;
  }

  function startSletat()
  {
    $searchSletat   = new SearchSletat($this->dataJquery);
    $departureCity  = $searchSletat->getDepartureCity();
    $toCountry      = $searchSletat->getToCountry($departureCity['Id'],$this->dataJquery['selectCityTo']);

    $date = explode('-', $this->dataJquery['dateTour']);
    $dateForm = str_replace('.','/',$date[0]);
    /*Кол-во предложений pageSize=20*/
    $url = "https://module.sletat.ru/Main.svc/GetTours?login=mail@u-travell.ru&password=utravell555&s_hasTickets=true&currencyAlias=RUB&s_ticketsIncluded=true&includeOilTaxesAndVisa=1&cityFromId=".$departureCity['Id']
    ."&countryId=".$toCountry['country']
    ."&cities=".$toCountry['resort']
    ."&s_adults=".$this->dataJquery['adults']
    ."&s_kids=".$this->dataJquery['kids']
    ."&s_kids_ages=".str_replace('.',',',$this->dataJquery['kids_ages'])
    ."&s_nightsMin=".$this->dataJquery['night']
    ."&s_nightsMax=".$this->dataJquery['night']
    ."&s_departFrom=".$dateForm
    ."&s_departTo=".$dateForm
    ."&pageSize=40&pageNumber=1&includeDescriptions=1&s_hotelIsNotInStop=true&showHotelFacilities=1";

   $sletats =  $searchSletat->startSearch($url);
    $sletatTours = [];
    $allHotelGruop    = [];
    if ($sletats)
    {

      /*Групперуем отели по ID отелям*/
      foreach($sletats['data']  as $key => $value){
        $allHotelGruop[$value[3]][] = $value;
      }


      $counter = 0;
      foreach ($allHotelGruop as $kye => $hotelGruop)
      {

        $sletatTours[$counter] = [
          'searchType'        => 'sletat',
          'dates'             => [$hotelGruop[0][12] => $hotelGruop[0][12]],
          'datesFilds'        => $hotelGruop[0][12],
          'pansion_prices'    => [$hotelGruop[0][10] => ''],
          "min_price_nights"  => $hotelGruop[0][14],
          "tourPageUrl"       => $hotelGruop[0][2],
          "infoPrice"         => $hotelGruop[0][42],
          "priceID"           => $hotelGruop[0][0],
          "operatorID"        => $hotelGruop[0][1],
          "otherNight"        => [],
          "requestID"         => $sletats['requestId'],
          "allData"           => $hotelGruop[0],
          "hotellook"         => '',
          'hotel' => [
            'name'        => $hotelGruop[0][7],
            'region_name' => $hotelGruop[0][19],
            'rating'      => (int) $hotelGruop[0][35],
            'id'          => $hotelGruop[0][3],
            'stars'       => (int) str_replace('*','',$hotelGruop[0][8]),
            'features'    => ['line' => $hotelGruop[0][87]],
            'images'      => [['x245x240' => $hotelGruop[0][29]]],
            'lat'         => $hotelGruop[0][92],
            'long'        => $hotelGruop[0][93],
            'desc'        => $hotelGruop[0][38],
          ],
          'hotelOffers'       => [
            [
              'price'        => $hotelGruop[0][42],
              'arrival_date' => $hotelGruop[0][12],
              'room_type_ru' => $hotelGruop[0][37],
              'pansion'      => ['name' => $hotelGruop[0][10],'description' => $hotelGruop[0][51]],
              'operator_logo'=> ['src' => 'assets/img/sletatLogo.png'],
              'searchtype'   => "stetat",
              'nights_count' => $hotelGruop[0][14],
              "tourPageUrl"  => $hotelGruop[0][2],
              "type"         => 'sletat',
            ]
          ],
        ];

        /*Добавляем другие предложения*/
        foreach ($hotelGruop as $key => $offers)
        {
          /*Пропускаем первый цикл*/
          if ($key == 0)
            continue;

          $array =  [
            'price'        => $offers[42],
            'arrival_date' => $offers[12],
            'room_type_ru' => $offers[37],
            'pansion'      => ['name' => $offers[10],'description' => $offers[51]],
            'operator_logo'=> ['src' => 'assets/img/sletatLogo.png'],
            'searchtype'   => "stetat",
            'nights_count' => $offers[14],
            "tourPageUrl"  => $offers[2],
            "type"         => 'sletat',
          ];
          array_push($sletatTours[$counter]['hotelOffers'],$array);
        }
        $counter++;
      }

     /* foreach ($sletats['data'] as $kye => $sletat)
      {
        $sletatTours[$kye] = [
          'searchType'        => 'sletat',
          'dates'             => [$sletat[12] => $sletat[12]],
          'datesFilds'        => $sletat[12],
          'pansion_prices'    => [$sletat[10] => ''],
          "min_price_nights"  => $sletat[14],
          "tourPageUrl"       => $sletat[2],
          "infoPrice"         => $sletat[42],
          "priceID"           => $sletat[0],
          "operatorID"        => $sletat[1],
          "otherNight"        => [],
          "requestID"         => $sletats['requestId'],
          "allData"           => $sletat,
          "hotellook"         => '',
          'hotel' => [
            'name'        => $sletat[7],
            'region_name' => $sletat[19],
            'rating'      => (int) $sletat[35],
            'id'          => $sletat[3],
            'stars'       => (int) str_replace('*','',$sletat[8]),
            'features'    => ['line' => $sletat[87]],
            'images'      => [['x245x240' => $sletat[29]]],
            'lat'         => $sletat[92],
            'long'        => $sletat[93],
            'desc'        => $sletat[38],
          ],
          'hotelOffers'       => [
              [
                'price'        => $sletat[42],
                'arrival_date' => $sletat[12],
                'room_type_ru' => $sletat[37],
                'pansion'      => ['name' => $sletat[10],'description' => $sletat[51]],
                'operator_logo'=> ['src' => 'assets/img/sletatLogo.png'],
                'searchtype'   => "stetat",
                'nights_count' => $sletat[14],
                "tourPageUrl"  => $sletat[2],
                "type"         => 'sletat',
              ]
          ],
        ];

        if (count($sletat) > 1){
          unset($sletat[0]);
          foreach ($sletat as $sl){
            $sletatTours[$kye]['otherPrice'][] = $sl[42];
          }
        }
      }*/
    }

    return $sletatTours;
  }

}
