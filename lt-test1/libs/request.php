<?php
ini_set('max_execution_time', 120);

include_once __DIR__.'/../vendor/autoload.php';
include_once __DIR__.'/Classes/AutoComplete.php';
include_once __DIR__.'/Classes/SearchLevelTravel.php';
include_once __DIR__.'/Classes/SearchTravelata.php';
include_once __DIR__.'/Classes/SearchSletat.php';
include_once __DIR__.'/Classes/Search.php';



$inputData = json_decode(file_get_contents('php://input'),true);


    /**
     * поиск туров
     */
    if (isset($inputData['type']) && $inputData['type'] === "SearchTour")
    {
       $search = new Search($inputData);
       $search->searchStart();
        die();
    }

    /**
     *  Информация об отеле
     */
    if (isset($inputData['type']) && $inputData['type'] === "getHotelOffers")
    {

      $search = new SearchLevelTravel($inputData);
      $search->getHotelOffers($inputData['hotel_id'], $inputData['requestId']);

      die();
    }

    if (isset($inputData['type']) && $inputData['type'] === "getOffer")
    {

      $search = new SearchLevelTravel($inputData);
      $search->getOffer( $inputData['requestId'],$inputData['tour_id']);

      die();
    }

    /**
     * Поиск городов
     */
    if (isset($inputData['type']) && $inputData['type'] === "searchCity")
    {

      $search = new AutoComplete($inputData);
      $search->searchCity();
      die();
    }

    /**
     * Автокомплит
     */
    if (isset($inputData['type']) && $inputData['type'] === "autocompleteTour")
    {

      $search = new AutoComplete($inputData);
      $search->autocompleteTour();
      die();
    }

    /**
     * Актуализация тура на level.travel
     */
    if (isset($inputData['type']) && $inputData['type'] === "actualizePriceLT")
    {
      $search = new SearchLevelTravel($inputData);
      $search->actualizePriceLT($inputData['requestId'], $inputData['tour_id']);
      die();
    }







