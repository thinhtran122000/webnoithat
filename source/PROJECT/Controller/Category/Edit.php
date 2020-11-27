<?php
	ob_start();
	include_once("Model/Category.php");
	$cate = new Category();
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$row=$cate->GetCategoryByID($id);
		include_once("View/Category/Edit.php");
		if(isset($_POST['btnChange']))
		{
			$categoryName = $_POST['txtCategoryName'];
			$ret=$cate->UpdateCategory($id,$categoryName);
			if($ret>0)
			{
				header("location:admin.php?mod=category&act=manage");
			}
		}
	}
	ob_end_flush();
?>