<!-- Article --><div class="article">
<h2><span><a href="admin.php?mod=product&act=insert">Thêm sản phẩm</a></span></h2>
  <p>
  	<form class="form" method="post" action="admin.php?mod=product&act=insert" enctype="multipart/form-data">
        <p><label>Tên sản phẩm (*)</label><input type="text" name="txtProductName" id="txtProductName" /></p>
        <p><label>Thể loại (*)</label>
        <select name="slCategory">
        	<option value="0">Chọn thể loại</option>
            <?php
				foreach($cate as $row)
				{
					echo "<option value=\"$row[CateID]\" >$row[CateName]</option>";
				}
			?>
        </select></p>
        
        <p><label>Giá (*)</label><input type="text" name="txtPrice" id="txtPrice" value="0" /></p>
        <p><label>Số lượng (*)</label><input type="text" name="txtQuantity" id="txtQuantity" value="0" /></p>
        <p><label>Ảnh hiển thị</label><input type="file" name="txtImageUrl" id="txtImageUrl" value="Chọn file"/></p>
        <p><label>Mô tả</label><textarea name="txtDescription"></textarea></p>

        <p><label>&nbsp;</label><input type="submit" value="Lưu" name="btnSave" id="btnSave" /></p>
        
        <p id="error" class="error"></p>
    </form>
  </p>
</div>