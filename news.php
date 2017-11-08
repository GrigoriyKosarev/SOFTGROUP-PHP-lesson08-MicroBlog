<?php

    require_once('connect_db.php');

    $query = 'SELECT name, id_news FROM `news`';
    $sth = $pdo->query($query);
    $results = $sth->fetchAll();

?>

<?php foreach ($results as $result) { ?>

    <p>
        <!--<a target="_blank" href="edit_post.php?id=n">Назва статті</a>-->
        <a target="_blank" href="news_content.php?id_news=<?php echo $result['id_news'];?>">
            <?php echo $result['name']; ?>
        </a>
    </p>

<?php } ?>

