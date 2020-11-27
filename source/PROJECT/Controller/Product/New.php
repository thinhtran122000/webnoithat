<?php
	include_once("Model/Product.php");
	include_once("Model/Pages.php");
	$prod = new Product();
	define('MAX',6);
	$start=Pages::findStart(MAX);
	$count=$prod->CountProducts();
	$pages=Pages::findPages($count,MAX);
		
	$result=$prod->GetProducts($start,MAX);
	include_once("View/Product/NewProducts.php");
?>