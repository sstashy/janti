<?php

include "../../server/authcontrol.php";

header('Content-Type: application/json');

if (empty($_GET["tc"])) {
    echo json_encode(array(
        'status' => 'error',
        'message' => 'tc eksik!'
    ));
    exit;
}

$tc = $_GET["tc"];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, http://20.224.65.99/api/vendor/thiagoalessio/henesy/aol.php?tc=$tc&auth=neuhasusapiservices");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

echo $response;

