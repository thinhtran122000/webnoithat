<?php
include_once("DataAccess.php");
include_once("OrderItem.php");
class Order
{
	private $da;
	function __construct()
	{
		$this->da = new DataAccess(); 
	}
	function InsertOrder($userID,$address,$phone)
	{
		$sql="INSERT into orders(UserID,AddedDate,Address,Phone) values('$userID',now(),'$address','$phone')";
		return $this->da->ExecuteQueryInsert($sql);
	}
	function UpdateSum($orderID,$sum)
	{
		$sql="Update orders set Sum=$sum where OrderID=$orderID";
		return $this->da->ExecuteQuery($sql);
	}
	function DeleteOrder($orderID)
	{
		$item = new OrderItem();
		$item->DeleteOrderItem($orderID);
		$sql="Delete from orders where OrderID=$orderID";
		return $this->da->ExecuteQuery($sql);
	}
	function GetOrders()
	{
		$sql="Select OrderID, UserName,FullName, AddedDate from orders o join users u on o.UserID=u.UserID order by AddedDate desc";
		return $this->da->FetchAll($sql);
	}
	function GetOrderByID($id)
	{
		$sql="Select OrderID, UserID, AddedDate from orders where OrderID=$id";
		return $this->da->Fetch($sql);
	}
	function GetOrdersByUserID($id)
	{
		$sql="Select OrderID, UserID, AddedDate, Sum from orders where UserID=$id order by AddedDate desc";
		return $this->da->FetchAll($sql);
	}
	function __destruct()
	{
		unset($this->da);
	}
}
?>