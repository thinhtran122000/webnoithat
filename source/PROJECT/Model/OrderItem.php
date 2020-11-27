<?php
include_once("DataAccess.php");
class OrderItem
{
	private $da;
	function __construct()
	{
		$this->da = new DataAccess(); 
	}
	function InsertOrderItem($orderID,$productID,$quantity)
	{
		$sql="INSERT into orderitems (OrderID,ProdID,Quantity) values($orderID,$productID,$quantity)";
		return $this->da->ExecuteQuery($sql);
	}
	function DeleteOrderItem($orderID)
	{
		$sql="Delete from orderItems where OrderID=$orderID";
		return $this->da->ExecuteQuery($sql);
	}
	function GetOrderItemByOrder($orderID)
	{
		$sql="Select orderitems.ProdID,ProdName,Price, orderitems.Quantity from orderitems inner join products on orderitems.ProdID=products.ProdID where OrderID=$orderID";
		return $this->da->FetchAll($sql);
	}
	function __destruct()
	{
		unset($this->da);
	}
}
?>