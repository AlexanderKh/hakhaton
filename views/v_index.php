
<div class="content">
<a href="/add.php">Додати свою новину</a>
<?foreach ($problems as $problem): ?>
<div class="new">
<h2><a href="lel"><?=$problem['title'];?></a></h2>
<article>

<a href="/problems.php?id=<?=$problem['id'];?>"><?=$problem['title'];?></a> </br>

</article>

<br><article>5/14/2016</article></br>
</div>
<? endforeach;?>
</div>