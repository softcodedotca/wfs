<?php


#tester to see structure of foursquare response

# setup & initialize foursquare api and mongodb connections
$foursquare = $venues_db = $nearby_venues = $wfs = null;
require_once('mongo_setup_venues.php');
require_once('foursquare_setup.php');

$radius=500;
$lat=43.65;
$lng=-79.38;

$params = array('ll' => "$lat, $lng", 'radius' => $radius);
$response = $foursquare->GetPublic("venues/search",$params);

print_r($response);