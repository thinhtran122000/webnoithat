<?php
if(isset($_GET["act"]))
{
	switch($_GET["act"])
	{
		case "delete":
			$url="DeleteOrder.php";
			break;
		case "add":
			$url="AddOrder.php";
			break;
		case "manage":
			$url="ManageOrders.php";
			break;
		case "edit":
			$url="EditOrder.php";
			break;
		case "show":
			$url="ShowOrder.php";
			break;
	}
	include_once($url);
}
?>