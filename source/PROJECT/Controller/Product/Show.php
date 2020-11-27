<?php
	if(isset($_GET["id"]))
	{
		$id=$_GET["id"];
		include_once("Model/Product.php");
		$prod = new Product();
		$result=$prod->GetProductsByCategory($id);

		include_once("Model/Category.php");
		$cate = new Category();
		$resultCate=$cate->GetCategoryByID($id);

		include_once("View/Product/ShowProducts.php");
	}
?>