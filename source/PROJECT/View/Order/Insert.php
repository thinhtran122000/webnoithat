<!-- Article -->
<div class="all-products container">
<h2 class = "shortcode-heading-wrapper container"><span><a href="index.php?mod=order&act=add">Đặt hàng</a></span></h2>
  <p>
  	<form class="form" method="post" action="index.php?mod=order&act=add" onSubmit="return IsInsertOrder()">
        <p><label>Địa chỉ nhận hàng (*)</label><input type="text" name="txtAddress" id="txtAddress" /></p>
        <p><label>Số điện thoại (*)</label><input type="text" name="txtPhone" id="txtPhone" /></p>
        <p><label>&nbsp;</label><input type="submit" value="Lưu" name="btnSave" id="btnSave" /></p>
        <p id="error" class="error"></p>
    </form>
  </p>
</div>