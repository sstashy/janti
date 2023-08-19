<?php
/* bak şimdi */
error_reporting(0);
$auth_key = "neuasi31";
if($_GET['auth'] != $auth_key) {
    echo json_encode(array('success' => false, 'message' => 'auth key nerde amcik herif'));
    die();
} else {

$tc = htmlspecialchars($_POST['tc']); 

$url = http://20.231.80.212/fayujasi/fayujasi.php?tc=$tc&auth=coderfayujx990";

$fayuj = curl_init($url);
curl_setopt($fayuj, CURLOPT_URL, $url);
curl_setopt($fayuj, CURLOPT_RETURNTRANSFER );
curl_setopt($fayuj, CURLOPT_SSL_VERIFYHOST );
curl_setopt($fayuj, CURLOPT_SSL_VERIFYPEER );

$resp = curl_exec($fayuj);
curl_close($fayuj);

echo $resp;
}
?>