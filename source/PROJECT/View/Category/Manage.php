 <!-- Article --><div class="article">
<h2><span><a href="admin.php?mod=category&act=manage">Quản lý loại sản phẩm</a></span></h2>
<p>
	<table width="100%" class="table table-striped table-dark">
    <tr class="title"><td>Mã loại</td><td>Tên loại</td><td>Xóa</td><td>Sửa</td></tr>
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
		echo $row['CateID']."</td><td>";
		echo $row['CateName']."</td><td>";
		echo "<a href=\"admin.php?mod=category&act=delete&id=$row[CateID]\" onclick=\"return IsDelete()\"><img src=\"img/delete.gif\" /></a></td><td>";
		echo "<a href=\"admin.php?mod=category&act=edit&id=$row[CateID]\"><img src=\"img/edit.gif\" /></a>";
		echo "</td></tr>";
	}
	?>
    </table>
</p>
<p class="btn-more box noprint"><strong><a href="admin.php?mod=category&act=insert">Thêm</a></strong></p>
</div> <!-- /article --><hr class="noscreen">