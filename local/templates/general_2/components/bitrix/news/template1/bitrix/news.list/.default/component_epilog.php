<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
if(isset($_GET['TYPE'])){
    if($_GET['TYPE']=='REPORT_AJAX'){
        $jsonObject = array();
        if(isset($_GET['NAME'])){
            $jsonObject['NAME'] = $_GET['NAME'];
        }
        $APPLICATION->RestartBuffer();
        echo json_encode($jsonObject);
        die;
    }
}
if($_REQUEST["IS_AJAX"] == "Y")
{
    	die();
}
?>
