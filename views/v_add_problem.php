<div class="content">

    <div class="tema">
        <form method="POST">
            <article>Тема: <p><input type="text" name="title"></p></article>
    </div>

    <div class="opis">
        <article>Опис: <p><textarea name="description"></textarea></p></article>
    </div>

    <div class="category">
        <article>Категорія:</article>
        <p><select name="category_id">
                <? foreach ($categories as $category): ?>
                    <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                <? endforeach; ?>
            </select></p>
    </div>
    <div class="victory"><input type="submit" value="Додати"></div>
    </form>

</div>