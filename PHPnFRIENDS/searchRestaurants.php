<?php 

$url = 'http://localhost:3000/';

$contents = file_get_contents($url . '?restaurant_stop=' . $_GET["restaurant_stop"]);

if($contents !== false){

	echo $contents;
}

else{
	echo "Fill Restaurant Input!";
}

?>