<html>
<body>

<div class="header">
    <h1>Сайт обговорень, рішень проблем міста</h1>
</div>

<div class="left-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active">
            <a href="index.php">Головна</a>
        </li>
        <li class="active">
            <a href="admin.php">Адміністрування</a>
        </li>
        <li class="active">
            <a href="categories.php">Категорії</a>
        </li>

        <br>

        <? foreach ($allcategories as $category): ?>
            <li class="active">
                <a href="categories.php?list=<?= $category['id'] ?>" class="button"><?= $category['name'] ?></a>
            </li>
        <? endforeach; ?>
    </ul>
    <div class="chating">
        <article></article>
    </div>
    <form action="testreg.php" method="post">
        <p>
            <label>Ваш логин:<br></label>
            <input name="login" type="text" size="15" maxlength="15">
        </p>
        <p>
            <label>Ваш пароль:<br></label>
            <input name="password" type="password" size="15" maxlength="15">
        </p>
        <p>
            <input type="submit" name="submit" value="Войти">
            <br>
            <a href="reg.php">Зарегистрироваться</a>
        </p></form>
    <br>

</div>

<?= $content; ?>

<div class="footer">
</div>

</body>
<head>
    <meta charset="UTF-8">
    <title>Сайт обговорень, рішень проблем міста</title>
    <link rel="stylesheet" href="style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
</html>
