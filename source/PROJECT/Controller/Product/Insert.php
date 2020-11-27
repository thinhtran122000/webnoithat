<?php
	ob_start();
	include_once("Model/Product.php");
	$product = new Product();
	
	include_once("Model/Category.php");
	$category=new Category();
	$cate = $category->GetCategories();
	
	include_once("View/Product/Insert.php");
	if(isset($_POST['btnSave']))
	{
		include_once("Model/Upload.php");
		$productName=$_POST["txtProductName"];
		$fileName = Upload::UploadImage("txtImageUrl","Upload/product");
		$price=$_POST["txtPrice"];
		$quantity=$_POST["txtQuantity"];
		$description=addslashes($_POST['txtDescription']);
		$categoryID=$_POST["slCategory"];
		if($fileName!="")
		{	
			if(is_numeric($price) && is_numeric($quantity))
			{
				$ret = $product->InsertProduct($categoryID,$productName ,$description,$price,$quantity,$fileName);
				if($ret>0)
				{
					header("location:admin.php?mod=product&act=manage");
				}
				else
					echo "<p class=\"error\">Thêm bị lỗi</p>";
			}
			else
			{
				echo "<p>Giá hoặc số lượng không hợp lệ</p>";
			}
		
		}
		else
		{
			echo "<p>Vui lòng chọn file ảnh</p>";
		}
	}
	ob_end_flush();
?>