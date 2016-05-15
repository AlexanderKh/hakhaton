<div class="categories">
        <?php foreach ($categories as $c): ?>
            <div class="category-el">
                <p><?= $c['name'] ?></p>

                <form class="inline" method="POST" action="categories.php">
                    <input type="hidden" name="id" value="<?= $c['id'] ?>">
                    <input type="hidden" name="method" value="delete">
                    <button type="submit" name="delete">Видалити</button>
                </form>
                <a class="inline" href="categories.php?id=<?= $c['id'] ?>">Редагувати</a>
            </div>
        <?php endforeach; ?>

    <div class="new-cat">
        <h2>Создать новую категорию</h2>
        <form action="categories.php" method="post">
            <input type="hidden" name="method" value="create">
            <input type="text" name="name">
            <button type="submit" name="create">Зберегти</button>
        </form>
    </div>

</div>
