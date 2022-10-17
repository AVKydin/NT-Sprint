<?php

$host = 'localhost';
$dbName = 'ntsprint';
$user = 'root';
$password = '';

$connection = new PDO("mysql:host=$host; dbname= $dbName;", $user, $password);

$id = $_POST['id'];

$sql = "DELETE FROM posts WHERE id = '$id'";

$connection->exec($sql);

header("Location: /");

?>