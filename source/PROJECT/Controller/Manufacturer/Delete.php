<?php
	include_once("Model/Manufacturer.php");
	$manufacturer = new Manufacturer();
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$ret=$manufacturer->DeleteManufacturer($id);
		if($ret>0)
		{
			header("location:admin.php?mod=manufacturer&act=manage");
		}
	}
?>