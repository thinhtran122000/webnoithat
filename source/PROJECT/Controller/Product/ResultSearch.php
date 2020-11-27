<?php
	$name=$_POST['txtName'];
	if($name!="")
	{
		include_once("Model/Product.php");
		$product = new Product();
		$result = $product->SearchProduct($name);
		include_once("View/Product/ResultSearch.php");
	}
?>