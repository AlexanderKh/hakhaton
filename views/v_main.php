<html>
<head>
<meta charset="UTF-8">
<title>Сайт обговорень, рішень проблем міста</title>
<link rel="stylesheet" href="style.css">
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>

<div class="header">
<h1>Сайт обговорень, рішень проблем міста</h1>
</div>

<div class="left-sidebar">
    <br>
    <a href="index.php" class="button">Головна</a>
    <br>
    <br>
    <a href="categories.php" class="button">Категории</a>
    <br>
    <br>
    <a href="admin.php" class="button">Адміністрування</a>
    <br>
    <br>
    <? foreach ($allcategories as $category): ?>
        <a href="categories.php?list=<?=$category['id']?>" class="button"><?=$category['name']?></a>
        <br>
        <br>
    <? endforeach;?>
</div>

<?=$content;?>

<div class="footer">
</div>

</body>
</html>
