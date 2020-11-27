<?php
if(isset($_SESSION['lgUserID']))
{
	include_once("Model/User.php");
	$user = new User();
	$id=$_SESSION['lgUserID'];
	$row=$user->GetUserByID($id);
	include_once("View/User/Update.php");
	if(isset($_POST['btnChange']))
	{
		$fullName=$_POST['txtFullName'];
		$email=$_POST['txtEmail'];
		$ret=$user->UpdateUser($id,$fullName,$email);
		if($ret>0)
		{
			header("location:index.php?mod=user&act=about");
		}
		else
		{
			echo "<p class=\"error\">Cập nhật bị lỗi</p>";
		}
	}
}
else
{
	header("location:index.php");
}
?>