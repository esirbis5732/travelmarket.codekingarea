<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("ROBOTS", "noindex, nofollow");
$APPLICATION->SetTitle("Travelata.ru");
?>
<?php
require_once 'lib/Autoloader.php';
//инициируем новый объект xml сервиса
$xml = new \sletatru\XmlGate([
    'login' => 'mail@u-travell.ru',
    'password' => 'utravell555',
]);
//получаем список городов вылета
$departCities = $xml->GetDepartCities();
//инициируем новый объект json сервиса
$json = new \sletatru\JsonGate([
    'login' => 'ваш логин для авторизации на сервисе',
    'password' => 'ваш пароль для авторизации на сервисе',
]);
$tours = $json->GetTours($cityFrom, $countryTo);
?>
<?='Cities - '.$departCities?>
<pre>
<?print_r($departCities)?>
</pre>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>