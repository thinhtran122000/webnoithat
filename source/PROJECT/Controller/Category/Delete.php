<?php
	include_once("Model/Category.php");
	$cate = new Category();
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$ret=$cate->DeleteCategory($id);
		if($ret>0)
		{
			header("location:admin.php?mod=category&act=manage");
		}
	}
?>