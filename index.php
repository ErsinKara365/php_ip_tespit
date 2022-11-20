<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Baslik </title>
</head>
<body>

	<h1>Ne yazilmasini istersin ?</h1>
	
	<h5>Herkese selam ben ersinkara365 </h5>
</body>
</html>

<?php 
date_default_timezone_set('Etc/GMT-0');





$dosya = fopen("ip_kayit.txt", "a+");

if ("Kayit.txt") {
	echo "<center><h1><br>Kayit islemi yapilmistir <br></h1></center> ";

}else {
	echo "<br> Sayfa yükleme Başarısız !!! <br>" ;
}



/* Bu kısım ile ip tespiti yapılıyor */

function GetIP(){
	if(getenv("HTTP_CLIENT_IP")) {
		$ip = getenv("HTTP_CLIENT_IP");
	} elseif(getenv("HTTP_X_FORWARDED_FOR")) {
		$ip = getenv("HTTP_X_FORWARDED_FOR");
		if (strstr($ip, ',')) {
			$tmp = explode (',', $ip);
			$ip = trim($tmp[0]);
		}
	} else {
		$ip = getenv("REMOTE_ADDR");
	}
	return $ip;
}

$ip_adresi = GetIP();
$tarayici = $_SERVER['HTTP_USER_AGENT'];
$zamani = date("d.m.Y, H:i:s");

$kayit = "\n".$ip_adresi."\t".$tarayici."\t".$zamani."\n";

/* Tespit edilen ip zaman ile birlikte kayit altina aliniyor */

fwrite($dosya, $kayit) ;

fclose($dosya) ;

?>




