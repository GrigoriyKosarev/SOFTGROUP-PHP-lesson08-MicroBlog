<head>
    <title>Домашнє завданя 8 MySQL</title>
    <meta charset="UTF-8">
</head>

<?php

    //echo $_GET["id_news"];

    require_once('connect_db.php');

    $query = 'SELECT content FROM `news_content` WHERE id_news = :id_news';
    $sth = $pdo->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array(':id_news' => $_GET["id_news"]));
    $results = $sth->fetchAll();

    foreach ($results as $result) {
        echo $result["content"];
    }

    $query = 'SELECT content, users FROM `news_comments` WHERE id_news = :id_news';
    $sth = $pdo->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array(':id_news' => $_GET["id_news"]));
    $results = $sth->fetchAll();
?>

<?php foreach ($results as $result) {?>
        <a target="_parent" href="news_comments.php?id_news=<?php echo $_GET["id_news"];?>">
            <?php echo "<p>" .result['content']; "</p>"?>
        </a>
<?php
    }
?>