<?php

$host = 'localhost';
$dbName = 'ntsprint';
$user = 'root';
$password = '';
$connection = new PDO("mysql:host=$host; dbname= $dbName;", $user, $password);

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$author=$_POST['author'];
$title=$_POST['title'];
$description=$_POST['description'];
$text=$_POST['text'];

// echo '<pre>';
// print_r($_FILES);
// echo '</pre>';

$image = $_FILES['image'];
$name=$image['name'];
$path = 'img/'.$name;
copy($image['tmp_name'], $path);

$sql = "INSERT INTO posts (author, title, description, text, image)
        values ('$author', '$title', '$description', '$text', '$path')";

$connection->exec($sql);

header("Location: /");