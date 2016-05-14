
<div class="content">
<article>Новость
.......................
</article>
<div class="new_one">
<article><? foreach ($comments as $comment):?>
<?=$comment['comment'];?>
<? endforeach;?></article>
<form method="POST">
Имя:<p><input type="text" name="name_user"><br></p>
Текст:<p><textarea name="comment_text"></textarea></p>
</div>
</div>
