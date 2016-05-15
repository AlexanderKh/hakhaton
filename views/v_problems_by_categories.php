<div class="content">
<a href="/add.php">Додати свою проблему</a>
<?foreach ($problems_by_category as $problem): ?>
<div class="new">
<h2><a href="problems.php?id=<?=$problem['id'];?>"><?=$problem['title'];?></a></h2>
<article>

<?=$problem['description'];?> </br>

</article>

<br><article><?=$problem['creation_date']?></article></br>
</div>
<? endforeach;?>
</div>