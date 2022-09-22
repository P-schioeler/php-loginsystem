<?php

$ServerName = "localhost";
$dBUserName = "root";
$dBPassword = "DummyPassw0rd";
$dBName = "phpproject01";

$conn = mysqli_connect($ServerName, $dBUserName, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}