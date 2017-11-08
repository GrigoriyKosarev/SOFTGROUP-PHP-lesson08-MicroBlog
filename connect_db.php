<?php

    $dsn = 'mysql:dbname=mikro_blog;host=127.0.0.1;charset=utf8';
    $user = 'root';
    $password = '';

    try {

        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        if ($e->getCode() === 1049){

            try {

                $conn = new PDO('mysql:dbname=mysql;host=127.0.0.1;charset=utf8', $user, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "CREATE DATABASE mikro_blog";
                $conn->exec($sql);
            } catch (PDOException $r){
                echo 'Подключение не удалось: ' . $r->getMessage();
            }
        }

    }

?>