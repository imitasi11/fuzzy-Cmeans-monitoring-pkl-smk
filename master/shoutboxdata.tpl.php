<? while ($row = mysql_fetch_array($result)) : ?>
<div class="shoutbox-row">
	<div class="date"><?=$row['tanggal']?></div>
	<span class="name"><a href="<?=$row['url']?>"><?=$row['name']?></a></span>:
	<span class="message"><?=$row['message']?></span>
</div>
<? endwhile; ?>