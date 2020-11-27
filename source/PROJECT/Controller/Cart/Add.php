<?php
	session_start();
	if(isset($_GET["id"]))
	{
		//$id=(int)addcslashes($_GET["id"]);
		$id=$_GET["id"];
		include_once("../../Model/Cart.php");
		Cart::InsertCart($id);
		$sum=0;
		foreach($_SESSION["lgCart"] as $item)
		{
			$sum+=$item;
		}
		$_SESSION["lgSum"] = $sum;
		//echo "Số mặt hàng: ".count($_SESSION["lgCart"])."<br />Tổng số lương: $sum";
		echo count($_SESSION["lgCart"]);
		//header("location:javascript://history.go(-1)");
	}
?>
