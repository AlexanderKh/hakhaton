<div class="content">
    <div class="novost">
        <article class="center">
            <h3>
                <?= $problem['title']; ?>
            </h3>
        </article>
        <article>
            <?= $problem['description']; ?>
        </article>
    </div>
    <div class="new_one">

        <div class="comment_field">
            <form method="POST">
                <p>Имя:<br><input type="text" name="name_user"><br></p>
                <p>Текст:<br><textarea name="comment_text"></textarea></p>
                <input type="submit" value="Коментувати">
            </form>
        </div>

        <? foreach ($comments as $comment): ?>
            <div class="commentator">
                <?= $comment['username']; ?></br>
            </div>
            <div class="comm">
                <?= $comment['comment']; ?></br>
            </div>
            <hr>
        <? endforeach; ?>

    </div>
</div>