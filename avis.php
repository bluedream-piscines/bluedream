<?php
require_once("config.php");

$apiKey = GOOGLE_API_KEY;
$placeId = "ChIJJWP_jU2TyRIRpSE_IB6iQ4c";
$url = "https://maps.googleapis.com/maps/api/place/details/json?place_id=$placeId&fields=reviews&language=fr&key=$apiKey";

header('Content-Type: application/json');
echo file_get_contents($url);
?>
