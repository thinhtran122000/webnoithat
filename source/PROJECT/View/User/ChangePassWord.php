<!-- Article --><div class="all-products container shortcode-heading-wrapper">

<form class = "form-signout container" action="index.php?mod=user&act=changepassword" method="post" class="form" onSubmit="return IsChangePass()">
    <h2 class ="shortcode-heading-wrapper container"><span>Đổi mật khẩu</span></h2>
	<p><label>Mật khẩu cũ</label><input type="password" name="txtOldPass" id="txtOldPass"/></p>
    <p><label>Mật khẩu mới</label><input type="password" name="txtPass" id="txtPass" /></p>
    <p><label>Mật khẩu xác nhận</label><input type="password" name="txtPrePass" id="txtPrePass" /></p>
    <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" /></p>
    <p id="error" class="error"></p>
</form>
</p>
</div>