<div class="content">
    <div class="novost">
        <article class="center">
            <?= $problem['title']; ?>
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
                <input type="submit" value="VICTORY+">
            </form>
        </div>

        <div class="comm">
            <? foreach ($comments as $comment): ?>
                <?= $comment['username']; ?></br>
                <?= $comment['comment']; ?></br>
                <hr>
            <? endforeach; ?>
        </div>

    </div>
</div>