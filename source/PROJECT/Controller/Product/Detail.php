<?php
	if(isset($_GET["id"]))
	{
		$id=(int)$_GET["id"];
		include_once("Model/Product.php");
		$prod = new Product();
		$row=$prod->GetProductByID($id);
		$categoryID= $row['CateID'];
		$result=$prod->GetProductsOrther($id,$categoryID);
		include_once("View/Product/DetailProduct.php");
	}
?>