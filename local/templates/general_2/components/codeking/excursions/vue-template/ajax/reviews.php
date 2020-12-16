<?php
include 'functions.php';
if(isset($_POST["advertiser"]) && !empty($_POST["advertiser"]) && isset($_POST["adv_id"]) && !empty($_POST["adv_id"])){
	$advertiserName = $_POST["advertiser"];
	$adv_id = $_POST["adv_id"];
}
if($advertiserName == "Tripster"){
	$result = file_get_contents("https://experience.tripster.ru/api/experiences/".$adv_id."/reviews/");
	$result = json_decode($result);
	$result = json_encode($result->results);
}
if($advertiserName == 'Weatlas'){
	$data = array('mode' => 'json', 'aid' => '16184', 'key' => '9d54b4ac3689e696a93e7f4f811163d3', 'Lang' => 'Ru', 'activityId' => $adv_id);
	$options = array(
		'http' => array(
		'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
		'method'  => 'POST',
		'content' => http_build_query($data)
    	)
	);
	$context  = stream_context_create($options);
	$queryWeatlas = file_get_contents("http://api.weatlas.com/export/activityview/", false, $context);
	$result = json_decode($queryWeatlas);
	$result = json_encode($result->reviews->review);
}
echo $result;