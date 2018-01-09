<?php 

$url = 'http://localhost:3000/';

$contents = file_get_contents($url . '?dept=' . $_GET["dept"] . '&dest=' . $_GET["dest"]);

if($contents !== false){

	echo $contents;
}

else{
	echo "Fill all Route Inputs!";
}

?>