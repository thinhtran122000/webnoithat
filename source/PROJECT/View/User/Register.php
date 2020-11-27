<!-- Article -->
<div class="all-products">
  
  <div class="all-products">
      <form class="form-signout container" id = "formReg" method="post" action="index.php?mod=user&act=register" onsubmit="return IsRegister()">
        <h2 class ="shortcode-heading-wrapper container"><span>Đăng ký thành viên</span></h2>
        <p><label>Họ tên (*)</label><input type="text" name="txtFullName" id="txtFullName" size="30" /></p>
        <p><label>Tên đăng nhập (*)</label><input type="text" name="txtUserName" id="txtUserName" /></p>
        <p><label>Mật khẩu (*)</label><input type="password" name="txtPassWord" id="txtPassWord" /></p>
        <p><label>Mật khẩu xác nhận (*)</label><input type="password" name="txtPrePass" id="txtPrePass" /></p>
        <p><label>Email (*)</label><input type="email" name="txtEmail" id="txtEmail" size="30" /></p>
        <p><label>&nbsp;</label><input type="submit" value="Đăng ký" name="btnRegister" id="btnRegister" /></p>
        <p id="error" class="error"></p>
    </form>
  </div>
</div>