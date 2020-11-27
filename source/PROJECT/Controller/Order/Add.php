<?php
	if(isset($_SESSION["lgUserID"]) && isset($_SESSION["lgCart"]))
	{
		include_once("View/Order/Insert.php");
		if(isset($_POST['btnSave']))
		{
			include_once("Model/Order.php");
			include_once("Model/OrderItem.php");
			include_once("Model/Product.php");
			$order=new Order();
			$item = new OrderItem();
			$product=new Product();
			$address=$_POST['txtAddress'];
			$phone =$_POST['txtPhone'];
			$oderID=$order->InsertOrder($_SESSION["lgUserID"],$address,$phone);
			$sum=0;
			//echo $address." ". $phone." ". $_SESSION["lgUserID"];
			if($oderID>0)
			{
				foreach($_SESSION["lgCart"] as $key=>$val)
				{
					$row=$product->GetProductByID($key);
					$sum+=$val*$row["Price"];
					$item->InsertOrderItem($oderID,$key,$val);
				}
				$order->UpdateSum($oderID,$sum);
				unset($_SESSION["lgCart"]);
				header("location:index.php");
			}
			
		}
	}
	else
	{
		header("location:index.php?mod=user&act=login");
	}
?>