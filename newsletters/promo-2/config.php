<?php

	foreach ($_POST as $key => $value) {
		$response[$key] = $value;
	}


	$response['last_updated'] = date("F j, Y, g:i a");

	$filename = 'versions/'.date('My-d-G:i:s').".json";
	$fp = fopen($filename, 'w') or die("can't open file");
	fwrite($fp, json_encode($response));
	fclose($fp);



?>