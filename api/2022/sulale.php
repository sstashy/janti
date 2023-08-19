<?php

header('Content-Type: application/json');

if (empty($_POST["tc"])) {
    echo json_encode(array(
        'status' => 'error',
        'message' => 'tc eksik!'
    ));
    exit;
}

$Idenity = $_POST["tc"];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://217.195.202.204/Modules/Soyagaci.php?key=mercylv!1602!&tc=$Idenity");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

echo $response;

