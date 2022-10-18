<?php

require_once('connection.php');

$sql = "SELECT * FROM posts";
$result = $connection->query($sql);

$posts = [];

foreach($result as $post){
    $posts[] = $post;
}

// echo '<pre>';
// print_r($posts);
// echo '</pre>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>NT-Sprint</title>
</head>
<body class="container">

    <header>
        <ul>
            <li><a href="/">Головна сторінка</a></li>
            <li><a href="create.php">Створення статті</a></li>
            <li><a href="post.php">Перегляд статті</a></li>
            <li><a href="edit.php">Редагування статті</a></li>
        </ul>
    </header>

    <main>
        <h1>Головна сторінка</h1>

        <section >
            <?php foreach($posts as $post): ?>
            <article class="col-md-4">
                <a href="post.php?id=<?php echo $post['id'];?>"><h2><?php echo $post['title']?></h2></a>
                <a href="post.php?id=<?php echo $post['title'];?>"><img width="300"
                 src="<?php echo $post['image'] ?>" 
                 alt="картинка"></a>
                <p><?php echo $post['description'] ?></p>
            </article>
            <?php endforeach; ?>
        </section>

    </main>

    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>