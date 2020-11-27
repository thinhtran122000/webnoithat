<?php
	include_once("Model/Order.php");
	$order = new Order();
	$ret=$order->GetOrders();
	include_once("Model/OrderItem.php");
	$orderItem = new OrderItem();
	include_once("View/Order/Manage.php");
?>