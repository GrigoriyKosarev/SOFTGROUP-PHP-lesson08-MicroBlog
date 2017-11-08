<!DOCTYPE html>

<html>

<head>
    <title>Домашнє завданя 8 MySQL</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="contents">
    <form action="create_dropp_tables_db.php" method="post">
        <p><input type="radio" name="create-drop-db" value="create">Створити базу даних</p>
        <p><input type="radio" name="create-drop-db" value="dropp">Вилучити базу даних</p>
        <p><input type="radio" name="create-drop-db" value="nothing">База даних створена</p>
        <input type="submit" value="Виконати">
    </form>
</div>

<!--<div class="contents">
    <form action="autorization.php" method="post">
        <p><input type="text" name="login">Логін</p>
        <p><input type="password" name="password">Пароль</p>
        <input type="submit" value="Увійти">
    </form>
</div>-->

</body>

</html>