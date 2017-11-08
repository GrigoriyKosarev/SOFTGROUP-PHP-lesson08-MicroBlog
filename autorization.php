<?php

    setcookie("login", $_POST["login"]);
    if (isset($_POST["login"])){

        require_once('connect_db.php');

        $query = 'SELECT login FROM `USERS` WHERE login = :user1';
        $sth = $pdo->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':user1' => $_POST["login"]));
        $results = $sth->fetchAll();

        $res = 0;
        foreach ($results as $result) {
            $res = 1;
            break;
        }

        if ($res == 1){
            header('Location: /index.php');
        }
        else{
            header('Location: /login.php');
        }

    }
    else{
        header('Location: /login.php');
    }

?>