<?php

require_once('connection.php');

$id = $_GET['id'];

$sql = "SELECT * FROM posts WHERE id = '$id'";
// $result = $connection->query($sql);
$post = $connection->query($sql)->fetch();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>post NT-Sprint</title>
</head>
<body class="container">

    <header>
        <ul>
            <li><a href="index.php">Головна сторінка</a></li>
            <li><a href="create.php">Створення статті</a></li>
            <li><a href="post.php">Перегляд статті</a></li>
            <li><a href="edit.php">Редагування статті</a></li>
        </ul>
    </header>
    
    <main >
        <h1><?php echo $post['title']?></h1>
        <b>Author: <?php echo $post['author']?></b>
        <div class="col-md-4">    
            <img width="300" src="<?php echo $post['image']?>" alt="">
            <p><?php echo $post['text']?></p>
        </div>
        <form action="destroy.php" method="post">
            <input type="text" name="id" value="<?php echo $post['id']; ?>" hidden>
            <button class="btn btn-danger">Delete Post</button>
        </form>
        <a href="/edit.php?id=<?php echo $post['id']; ?>" class="btn btn-success">Edit Post</a>
    </main>

</body>
</html>