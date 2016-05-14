<form action="categories.php" method="post">
    <input type="hidden" name="id" value="<?= $category['id'] ?>">
    <input type="hidden" name="method" value="update">
    <input type="text" name="name" value="<?= $category['name'] ?>">
    <button type="submit" name="delete">Редактировать</button>
</form>