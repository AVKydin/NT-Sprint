<?php

require_once('connection.php');

$id = $_POST['id'];
$author=$_POST['author'];
$title=$_POST['title'];
$description=$_POST['description'];
$text=$_POST['text'];

$sql = "UPDATE posts
    SET title ='$title', author = '$author', description = '$description', text ='$text'
    WHERE id = '$id'";

if($_FILES['image']['size']){
    $image = $_FILES['image'];
    $name = $image['name'];
    $path = 'img/'.$name;
    copy($image['tmp_name'], $path);

    $sql = "UPDATE posts
        SET title ='$title', author = '$author', description = '$description', text ='$text', image = '$path'
        WHERE id = '$id'";
}

$connection->exec($sql);

header('Location: post.php?id='.$id);
