<?php 
if(isset($_SESSION["lgCart"]))
	{
        include_once("Model/Product.php");
		$product = new Product();
        include_once("View/Cart/Detail.php");
	}
?>