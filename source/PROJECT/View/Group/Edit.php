<!-- Article --><div class="article">
<h2><span><a href="admin.php?mod=group&act=edit&id=<?php echo $id; ?>">Chỉnh sửa nhóm thành viên</a></span></h2>
     <p>
<form action="admin.php?mod=group&act=edit&id=<?php echo $id; ?>" method="post" class="form">
	<p><label>Tên nhóm</label><input type="text" name="txtGroupName" id="txtGroupName" value="<?php echo $row['GroupName']; ?>"/></p>
    <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" /></p>
</form>
</p>
</div>