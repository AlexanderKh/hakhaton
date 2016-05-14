<div class="content">

<div class="tema">
<form method="POST">
<article>Тема: <p><input type="text" name="title"></article>
</div>

<div class="opis">
<article><textarea name="description"></textarea></article>
</div>

<div class="category">
<article>Категория</article>
<select name="category_id">
<? foreach ($categories as $category): ?>
  <option value="<?=$category['id']?>"><?=$category['name']?></option>
<? endforeach;?>
</select>
</div>
<input type="submit" value="VICTORY">
</form>

</div>