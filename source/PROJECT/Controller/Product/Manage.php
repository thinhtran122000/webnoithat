<?php
	include_once("Model/Product.php");
	$Product = new Product();
	$ret=$Product->GetProductsManage();
	include_once("View/Product/Manage.php");
?>