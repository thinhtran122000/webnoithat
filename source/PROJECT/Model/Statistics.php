<?php
include_once("DataAccess.php");
class Statistics
{
	private $da;
	function __construct()
	{
		$this->da = new DataAccess(); 
	}
	function CountUsers()
	{
		$sql="Select UserID from Users";
		return $this->da->NumRows($sql);
	}
	function CountOrders()
	{
		$sql="Select OrderID from Orders";
		return $this->da->NumRows($sql);
	}
	function __destruct()
	{
		unset($this->da);
	}
}
?>