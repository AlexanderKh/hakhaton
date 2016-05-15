<html>
<body>

<div class="header">
    <h1>Сайт обговорень, рішень проблем міста</h1>
</div>

<div class="left-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <p><li class="active">
            <a href="index.php">Головна</a>
        </li></p>
        <li class="active">
            <a href="admin.php">Адміністрування</a>
        </li>

    <? foreach ($allcategories as $category): ?>
        <li class="active">
            <a href="categories.php?list=<?=$category['id']?>" class="button"><?=$category['name']?></a>
        </li>
    <? endforeach;?>
    </ul>
    <div class="chating">
        <article></article>
    </div>
</div>

    <?=$content;?>

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
