 <!-- Article --><div class="article">
<h2><span><a href="admin.php?mod=manufacturer&act=manage">Quản lý nhà cung cấp</a></span></h2>
<p>
	<table width="100%">
    <tr class="title"><td>Mã nhà cung cấp</td><td>Tên nhà cung cấp</td><td>Xóa</td><td>Sửa</td></tr>
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
		echo $row['ManufacturerID']."</td><td>";
		echo $row['ManufacturerName']."</td><td>";
		echo "<a href=\"admin.php?mod=manufacturer&act=delete&id=$row[ManufacturerID]\" onclick=\"return IsDelete()\"><img src=\"Images/Delete.gif\" /></a></td><td>";
		echo "<a href=\"admin.php?mod=manufacturer&act=edit&id=$row[ManufacturerID]\"><img src=\"Images/Edit.gif\" /></a>";
		echo "</td></tr>";
	}
	?>
    </table>
</p>
<p class="btn-more box noprint"><strong><a href="admin.php?mod=manufacturer&act=insert">Thêm</a></strong></p>
</div> <!-- /article --><hr class="noscreen">