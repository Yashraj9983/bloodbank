<?php

session_start();

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "bloodbank";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);