<?php
/* api */
error_reporting(0);
$auth_key = "jantiapi";
if($_GET['auth'] != $auth_key) {
    echo json_encode(array('success' => false, 'message' => 'auth key nerde amcik herif'));
    die();
} else {

$ad = htmlspecialchars($_GET['ad']);

$url = "http://20.123.9.104/apiqw/ad.php?auth_token=qwertyzz&ADI=$ad";

$fayuj = curl_init($url);
curl_setopt($fayuj, CURLOPT_URL, $url);
curl_setopt($fayuj, CURLOPT_RETURNTRANSFER, true);
curl_setopt($fayuj, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($fayuj, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($fayuj);
curl_close($fayuj);

echo $resp;
}
?>