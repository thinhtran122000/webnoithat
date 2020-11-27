<?php
	include_once("Model/Category.php");
	$cat = new Category();
	$result=$cat->GetCategories();
	include_once("View/Category/ShowCategories.php");
?>