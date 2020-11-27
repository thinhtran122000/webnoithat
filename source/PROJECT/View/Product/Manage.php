 <!-- Article -->
 <div>
<h2><span><a href="admin.php?mod=product&act=manage">Quản lý sản phẩm</a></span></h2>
<p>
	<table class="table table-striped table-dark">
    <tr class="title"><td>Tên sản phẩm</td><td>Thể loại</td><td>Giá</td><td>Số lượng</td><td>Hình</td><td>Xóa</td><td>Sửa</td></tr>
    <?php
	$count = 0;
	foreach($ret as $row)
	{
		$count++;
		if($count%2==0)
		{
			echo "<tr class=\"color\"><td>";
		}
		else
			echo "<tr><td>";
		echo $row['ProdName']."</td><td>";
		echo $row['CateName']."</td><td>";
		echo "Giá ".number_format($row["Price"],0)." VND</td><td>";
		echo $row['Quantity']."</td><td>";
		echo "<img src=\"Upload/product/$row[ImageURL]\" width=\"120\" /></td><td>";
		echo "<a href=\"admin.php?mod=product&act=delete&id=$row[ProdID]\" onclick=\"return IsDelete()\"><img src=\"img/delete.gif\" /></a></td><td>";
		echo "<a href=\"admin.php?mod=product&act=edit&id=$row[ProdID]\"><img src=\"img/edit.gif\" /></a>";
		echo "</td></tr>";
	}
	?>
    </table>
</p>
<p class="btn-more box noprint"><strong><a href="admin.php?mod=product&act=insert">Thêm</a></strong></p>
</div> <!-- /article --><hr class="noscreen">