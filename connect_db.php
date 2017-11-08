<?php

    try {
        $pdo = new PDO(
            'mysql:host=lesson08-mysql;dbname=mikro_blog',
            'root',
            '',
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }
    catch (PDOException $e){
        echo "Невдалось встановити зэднання з б.д.";
    }

?>