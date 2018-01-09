<?php 

$url = 'http://localhost:3000/';

$contents = file_get_contents($url . '?lon1=' . $_GET["lon1"] . '&lat1=' . $_GET["lat1"] . '&lon2=' . $_GET["lon2"] . '&lat2' . $_GET["lat2"]);

if($contents !== false){

	echo $contents;
}

else{
	echo "Fill all Coordinate Inputs!";
}

?>