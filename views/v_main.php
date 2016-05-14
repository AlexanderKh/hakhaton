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
<br><a href="index.php">Головна</a></br>
<br><a href="categories.php?mode=edit" class="button">Категории</a></br>
<br><a href="admin.php">Адміністрування</a></br>
<br><a href="#">Button3</a></br>
<br><a href="#">Button4</a></br>
<br><a href="#" class="button">button</a></br>
<br><a href="#" class="button">button</a></br>

<? foreach ($allcategories as $category): ?>
<br><a href="categories.php?list=<?=$category['id']?>" class="button"><?=$category['name']?></a></br>
<? endforeach;?>
</div>

<?=$content;?>

<div class="footer">
</div>

</body>
</html>
