<?php

    if (!isset($_COOKIE['login'])){
        header('Location: /login.php');
    }

?>

<!DOCTYPE html>

<html>

    <head>
        <title>Домашнє завданя 8 MySQL</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="/js/tinymce/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>

    </head>

    <body>

        <?php include("news.php");?>

        <?php
        if ($_COOKIE['login'] == "admin"){
            ?>
            <p>Добавити нову статтю:</p>
            <form action="add_news.php" method="post">
                <p>Короткий опис:<input type="text" name="name"></p>
                <p>Текст статті:<textarea name="content"> </textarea></p>
                <input type="submit" value="Виконати">
            </form>
        <?php } ?>

    </body>

</html>