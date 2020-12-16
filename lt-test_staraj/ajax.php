<?require_once($_SERVER['DOCUMENT_ROOT'] . "/lt-test/functions.php");?>

<?php

if(isset($_POST["get_country_by_russian"])) {

    $value = $_POST["value"];
    $type = $_POST["type"];

    $find = "";

    if ($type == ""){
        $obCountries = new Countries();
        $countries = $obCountries->get();

        foreach($countries as $country){
            if($country->name_ru == $value){
                $find = $country->iso2;
                break;
            }
        }
    }elseif ($type == "travelata"){
        $obCountries = new Countries();
        $countries = $obCountries->get("travelata");

        foreach($countries->data as $country){
            if($country->name == $value){
                $find = $country->id;
                break;
            }
        }
    }

    echo $find;
    
}elseif(isset($_POST["get_hotels"])){

    $type = $_POST["type"];
    $from_city = $_POST["from_city"];
    $from_country = $_POST["from_country"];
    $to_country = $_POST["to_country"];
    $nights = $_POST["nights"];
    $adults = $_POST["adults"];
    $start_date = $_POST["start_date"];

    if ($type == "") {
        $obHotels = new Hotels($from_city, $from_country, $to_country, $nights, $adults, $start_date);
        $hotels = $obHotels->getHotels();
        $html = $obHotels->getHtmlHotels($hotels);
    }elseif ($type == "travelata"){
        $obHotels = new Hotels($from_city, $from_country, $to_country, $nights, $adults, $start_date);
        $hotels = $obHotels->getHotels("travelata");
        $html = $obHotels->getHtmlHotelsTravelata($hotels);
    }

    echo $html;
}

?>