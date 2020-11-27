<?php
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		include_once("Model/Cart.php");
		$cart = new Cart();
		include_once("Model/Product.php");
		$product = new Product();
		$rowProduct = $product->GetProductByID($id);
		$productName = $rowProduct['ProdName'];
		$quantity=$_SESSION["lgCart"][$id];
		include_once("View/Cart/Edit.php");
		if(isset($_POST['btnSave']))
		{
			$quantity=$_POST['txtQuantity'];
			if(is_numeric($quantity))
			{
				$cart->UpdateCart($id,$quantity);
				header("location:index.php?mod=cart&act=detail");
			}
		}
	}	
?>