<?php 

$url = 'http://localhost:3000/';

$contents = file_get_contents($url . '?stopname=' . $_GET["stopname"]);

if($contents !== false){

	echo $contents;
}

else{
	echo "Fill Stop Input!";
}

?>