<!-- Article -->
<div class="article">
<h2><span>Sản phẩm mới</span></h2>
<p>
<table cellpadding="0" cellspacing="0" width="100%">

<?php
$dem=0;
foreach($result as $row)
{
	if($dem%4==0)
		echo "<tr>";
	echo "<td>";
	echo "<center><a href=\"index.php?mod=product&act=detail&id=$row[ProductID]\">$row[ProductName]</a></center><br />";
	echo "<center><a href=\"index.php?mod=product&act=detail&id=$row[ProductID]\"><img height=\"70\" src=\"Upload/$row[ImageUrl]\" /></a></center><br />";
	echo "<center><img src=\"images/new.gif\" /></center>";
	echo "<center>Giá ".number_format($row["Price"],0)." VND</center>";
	echo "<center><a href=\"Controller/Cart/Add.php?id=$row[ProductID]\" onclick=\"return insertCart($row[ProductID])\"><img src=\"Images/Select.gif\" alt=\"chọn mua\" width=\"88\" height=\"33\" /></a>";
	echo "<a href=\"index.php?mod=product&act=detail&id=$row[ProductID]\"><img src=\"Images/Detail.gif\" alt=\"chi tiết\" width=\"88\" height=\"33\" /></a></center>";
	echo "</td>";
	$dem++;
	if($dem%4==0)
		echo "</tr>";
}
?>
</table>
<?php
		if($pages>1)
		{
			echo "<p><center>".Pages::NextPrev($_GET["page"],"?",$pages)."</center></p>";
		}
	?>
</p>
</div>
<!-- /article -->
<hr class="noscreen">
