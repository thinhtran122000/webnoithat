<?php
	include_once("Model/Product.php");
	$product = new Product();
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$ret=$product->DeleteProduct($id);
		if($ret>0)
		{
			header("location:admin.php?mod=product&act=manage");
		}
	}
?>