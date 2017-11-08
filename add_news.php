<?php

    require_once('connect_db.php');
    
    $query = 'INSERT INTO news (name) VALUES (:name)';
    $sth = $pdo->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array(':name' => $_POST["name"]));

    $results = $sth->fetchAll();
    foreach ($results as $result) {
        $id_news = $result['id_news'];
    }

    $query = 'INSERT INTO news_content (id_news, content) VALUES (:id_news, :content)';
    $sth = $pdo->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array(':id_news' => $id_news, ':content' => $_POST["content"]));

    header('Location: /index.php');

?>