 <!-- Article --><div class="article">
<h2><span><a href="admin.php?mod=user&act=manage">Quản lý thành viên</a></span></h2>
<p>
	<table class="table table-striped table-dark"">
    <tr class="title"><td>Họ tên</td><td>Tên đăng nhập</td><td>Nhóm</td><td>Email</td><td>Xóa</td><td>Sửa</td></tr>
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
			echo $row['FullName']."</td><td>";
		echo $row['UserName']."</td><td>";
		echo $row['GroupName']."</td><td>";
		echo $row['Email']."</td><td>";
		echo "<a href=\"admin.php?mod=user&act=delete&id=$row[UserID]\" onclick=\"return IsDelete()\"><img src=\"img/delete.gif\" /></a></td><td>";
		echo "<a href=\"admin.php?mod=user&act=edit&id=$row[UserID]\"><img src=\"img/edit.gif\" /></a>";
		echo "</td></tr>";
	}
	?>
    </table>
</p>
</div> <!-- /article --><hr class="noscreen">