<?php
	include_once("Model/Category.php");
	$cate = new Category();
	$ret=$cate->GetCategories();
	include_once("View/Category/Manage.php");
?>