<?php
include_once __DIR__.'/vendor/autoload.php';
include_once __DIR__.'/libs/Classes/Search.php';

if (isset($_GET['id']) && isset($_GET['id_t']))
{
  echo "<pre>";
  $search = new Search();

  $search->actualize($_GET['id'],$_GET['id_t']);
}
?>

