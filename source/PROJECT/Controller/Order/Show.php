<?php
	if(isset($_SESSION["lgUserID"]))
	{
		$id=$_SESSION["lgUserID"];
		include_once("Model/Order.php");
		include_once("Model/OrderItem.php");
		$order = new Order();
		$item = new OrderItem();
		$result=$order->GetOrdersByUserID($id);
		include_once("View/Order/Show.php");
	}
?>