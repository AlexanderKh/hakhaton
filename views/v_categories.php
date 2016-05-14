<?php foreach ($categories as $c): ?>
    <p><?= $c['name'] ?></p>
    <form method="POST" action="categories.php">
        <input type="hidden" name="id" value="<?= $c['id'] ?>">
        <input type="hidden" name="method" value="delete">
        <button type="submit" name="delete">Удалить</button>
    </form>
    <a href="categories.php?id=<?= $c['id'] ?>">Редактировать</a>
<?php endforeach; ?>


<h2>Создать новую категорию</h2>
<form action="categories.php" method="post">
    <input type="hidden" name="method" value="create">
    <input type="text" name="name">
    <button type="submit" name="create">Сохраниь</button>
</form>
