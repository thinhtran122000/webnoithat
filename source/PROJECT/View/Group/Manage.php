 <!-- Article --><div class="article">
<h2><span><a href="admin.php?mod=group&act=manage">Quản lý nhóm thành viên</a></span></h2>
<p>
	<table width="100%" class="table table-striped table-dark">
    <tr class="title"><td>Mã nhóm</td><td>Tên nhóm</td><td>Xóa</td><td>Sửa</td></tr>
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
		echo $row['GroupID']."</td><td>";
		echo $row['GroupName']."</td><td>";
		echo "<a href=\"admin.php?mod=group&act=delete&id=$row[GroupID]\" onclick=\"return IsDelete()\"><img src=\"img/delete.gif\" /></a></td><td>";
		echo "<a href=\"admin.php?mod=group&act=edit&id=$row[GroupID]\"><img src=\"img/edit.gif\" /></a>";
		echo "</td></tr>";
	}
	?>
    </table>
</p>
<p class="btn-more box noprint"><strong><a href="admin.php?mod=group&act=insert">Thêm</a></strong></p>
</div> <!-- /article --><hr class="noscreen">