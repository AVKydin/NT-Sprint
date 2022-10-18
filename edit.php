<?php 

require_once('connection.php');

$id = $_GET['id'];

$sql = "SELECT * FROM posts WHERE id = '$id'";

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

    <title>edit NT-Sprint</title>
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
    
    <main>
        <h1>Редагування статті</h1>
        <form method ="post" action="update.php" class="col-md-6" enctype="multipart/form-data">
            <input type="text" name="id" value="<?php echo $post['id'] ?>" hidden>
            <div class="form-group">
                <label for="">Автор</label>
                <input name="author" value="<?php echo $post['author'] ?>" class = "form-control" type="text">
            </div>
            <div class="form-group">
                <label for="">Назва статті</label>
                <input name="title" value="<?php echo $post['title'] ?>" class = "form-control" type="text">
            </div>
            <div class="form-group">
                <label for="">Короткий опис</label>
                <textarea name="description" class = "form-control" name="" id="" cols="30" rows="10"><?php echo $post['description'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="">Картинка</label>
                <input name="image" class = "form-control" type="file">
            </div>
            <div>
                <img width = "300" src="<?php echo $post['image'] ?>" alt="">
            </div>
            <div class="form-group">
                <label for="">Стаття</label>
                <textarea name="text" class = "form-control" name="" id="" cols="30" rows="10"><?php echo $post['text'] ?></textarea>
            </div>
            <button class="btn btn-success my-4">Зберегти статтю!</button>
        </form>
    </main>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>