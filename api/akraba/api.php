<?php
$tc = $_POST['tc'];

$url= "http://localhost/api/enayiler/sulalee.php?tc=$tc&auth=neuhasusxfayuj";

$bacis1kenfayuj = curl_init($url);
curl_setopt($bacis1kenfayuj, CURLOPT_URL, $url);
curl_setopt($bacis1kenfayuj, CURLOPT_RETURNTRANSFER, true);
curl_setopt($bacis1kenfayuj, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($bacis1kenfayuj, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($bacis1kenfayuj);
curl_close($bacis1kenfayuj);


echo $resp;



?>
