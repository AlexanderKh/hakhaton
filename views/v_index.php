
<div class="content">
<a class="inl-link"  href="add.php">Додати свою новину</a>
<?php foreach ($problems as $problem): ?>

    <div class="new">
    <? if ($is_admin): ?>
        <? if ($problem['approved'] == 0): ?>
            <article class="inline"> Непідтверджене </article>
            <form action="problems.php" method="post" class="inline">
                <input type="hidden" name="id" value="<?= $problem['id'] ?>">
                <input type="hidden" name="method" value="approve">
                <button type="submit" name="delete">Подтвердить</button>
            </form>
        <?endif;?>
        <form action="problems.php" method="post" class="inline">
            <input type="hidden" name="id" value="<?= $problem['id'] ?>">
            <input type="hidden" name="method" value="delete">
            <button type="submit" name="delete">Удалить</button>
        </form>
    <? endif; ?>
    <article>
        <h2>
            <a href="problems.php?id=<?=$problem['id'];?>"><?=$problem['title'];?></a>
        </h2>
    </article>

    <br><article><?= $problem['creation_date'] ?></article></br>
    </div>
<?php endforeach;?>
</div>