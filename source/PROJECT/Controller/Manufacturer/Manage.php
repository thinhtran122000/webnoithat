<?php
	include_once("Model/Manufacturer.php");
	$manu = new Manufacturer();
	$ret=$manu->GetManufacturers();
	include_once("View/Manufacturer/Manage.php");
?>