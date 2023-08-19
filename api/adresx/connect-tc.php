<?php

$con = new mysqli("localhost", "root", "", "101m");

if ($con->connect_errno > 0) {
    die("<b>Bağlantı Hatası:</b> " . $con->connect_error);
}

?>