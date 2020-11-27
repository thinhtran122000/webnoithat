<!-- Article --><div class="article">
<h2><span><a href="admin.php?mod=product&act=edit&id=<?php echo $id; ?>">Chỉnh sửa sản phẩm</a></span></h2>
     <p>
<form action="admin.php?mod=product&act=edit&id=<?php echo $id; ?>" method="post" class="form" enctype="multipart/form-data">
	<div class = "form-group">
		<label>Tên sản phẩm</label>
		<input class="form-control" type="text" name="txtProductName" id="txtProductName" value="<?php echo $row['ProdName']; ?>"/>
	</div>
	<div class = "form-group">
        <label>Thể loại (*)</label>
        <select class="form-control" name="slCategory">
            <?php
				foreach($cate as $rowcate)
				{
					if($rowcate['CateID']==$row['CateID'])
					{
						echo "<option value=\"$rowcate[CateID]\" selected=\"selected\" >$rowcate[CateName]</option>";
					}else{
						echo "<option value=\"$rowcate[CateID]\" >$rowcate[CateName]</option>";
					}
				}
			?>
		</select>
	</div>
	<div class = "form-group">
		<label>Giá (*)</label>
		<input class="form-control" type="text" name="txtPrice" id="txtPrice" value="<?php echo $row['Price']; ?>" />
	</div>
	<div class = "form-group">
		<label>Số lượng (*)</label>
		<input class="form-control" type="text" name="txtQuantity" id="txtQuantity" value="<?php echo $row['Quantity']; ?>" />
	</div>
	<div class = "form-group">
		<label>Ảnh hiển thị</label>
			<img src="Upload/product/<?php echo $row['ImageURL'] ?>" width="100" />
			<input type="file" name="txtImageUrl" id="txtImageUrl"/>
	</div>
	<div class = "form-group">
		<label>Mô tả</label>
		<textarea class="form-control" name="txtDescription"><?php echo $row['Des']; ?></textarea>
	</div>
    <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" /></p>
</form>
</p>
</div>