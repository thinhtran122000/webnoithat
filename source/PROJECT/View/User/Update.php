<!-- Article --><div class="all-products container shortcode-heading-wrapper">

     <p>
<form class="form-signout container" action="index.php?mod=user&act=update" method="post" class="form" onsubmit="return IsUpdateUser()">
    <h2 class ="shortcode-heading-wrapper container"><span>Đổi thông tin cá nhân</span></h2>
	<p><label>Họ tên</label><input type="text" name="txtFullName" id="txtFullName" value="<?php echo $row['FullName']; ?>" size="30" /></p>
    <p><label>Email</label><input type="text" name="txtEmail" id="txtEmail" value="<?php echo $row['Email'] ?>" size="30" /></p>
    <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" /></p>
    <p id="error" class="error"></p>
</form>
</p>
</div>