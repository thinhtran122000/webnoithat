<?php
	include_once("Model/User.php");
	include_once("View/User/Register.php");
	if(isset($_POST["btnRegister"]))
		{
			$fullName=trim($_POST["txtFullName"]);
			$userName=trim($_POST["txtUserName"]);
			$passWord=trim($_POST["txtPassWord"]);
			$email=trim($_POST["txtEmail"]);
			if($fullName!="" && $userName!="" && $passWord!="" && $email!="")
			{
				$user = new User();
				$ret=$user->InsertUser($fullName,$userName,$passWord,$email);
				if($ret)
					header("location:index.php?mod=user&act=login");
				else
					echo "<h2 class=\"error container\">Tên đăng nhập bị trùng</h2>";
			}
		}
?>