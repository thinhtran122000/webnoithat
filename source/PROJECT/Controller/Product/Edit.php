
<?php
	ob_start();
	include_once("Model/Product.php");
	$product = new Product();
	

	include_once("Model/Category.php");
	$category=new Category();
	$cate = $category->GetCategories();
	
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$row=$product->GetProductByID($id);
		include_once("View/Product/Edit.php");
		if(isset($_POST['btnChange']))
		{
			include("Model/Upload.php");
			$productName=$_POST["txtProductName"];
			if(isset($_FILES['txtImageUrl'])) $fileName = Upload::UploadImage("txtImageUrl","Upload/product");
			$price=$_POST["txtPrice"];
			$quantity=$_POST["txtQuantity"];
			$description=addslashes($_POST['txtDescription']);
			$categoryID=$_POST["slCategory"];
			if(!isset($_FILES['txtImageUrl'])){
				$ret=$product->UpdateProduct($id,$categoryID,$productName,$price,$quantity,$description);
			}
			else
			{
				//print_r($_FILES);
				$ret=$product->UpdateProduct($id,$categoryID,$productName,$price,$quantity,$description,$fileName);
			}
			if($ret>0)
			{
				header("location:admin.php?mod=product&act=manage");
			}
			else
				echo "<p class=\"error\">Lỗi</p>";
		}
	}
	ob_end_flush();
?>