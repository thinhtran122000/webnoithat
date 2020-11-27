<h3><span>Danh mục thể loại</span></h3>
<ul id="category">
	<marquee direction="down" scrollamount="3" onmouseover="stop()" onmouseout="start()">
    <?php
    foreach($result as $row)
		{
			echo "<li><a href=\"index.php?mod=product&act=show&id=$row[CategoryID]\">$row[CategoryName]</a></li>";
		}
	?>
    </marquee>
</ul>
<hr class="noscreen">