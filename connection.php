<?php

$settings = include('config.php');

$host = $settings['host'];
$dbName = $settings['dbName'];
$user = $settings['user'];
$password = $settings['password'];

$connection = new PDO("mysql:host=$host; dbname= $dbName;", $user, $password);
