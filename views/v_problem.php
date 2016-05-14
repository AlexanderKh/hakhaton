<div class="content">
<<<<<<< Updated upstream
<article>
    <?= $problem['title'] ?>
</article>
<article>
    <?= $problem['description'] ?>
=======
<div class="novost">
<article>Новость
<?=$problem['title'];?>
>>>>>>> Stashed changes
</article>
</div>
<div class="new_one">

<div class="comment_field">
<form method="POST">
<p>Имя:<br><input type="text" name="name_user"><br></p>
<p>Текст:<br><textarea name="comment_text"></textarea></p>
<input type="submit" value="VICTORY+">
</div>
</form>
<div class="comm">
<? foreach ($comments as $comment):?>
<?=$comment['username'];?></br>
<?=$comment['comment'];?></br>
<hr>
<? endforeach;?></article>

</div>
</div>
</div>