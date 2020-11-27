<?php
include_once("DataAccess.php");
class Manufacturer
{
	private $da;
	function __construct()
	{
		$this->da = new DataAccess(); 
	}
	function InsertManufacturer($manufacturerName)
	{
		$sql="Insert into Manufacturers (ManufacturerName) Values('$manufacturerName')";
		return $this->da->ExecuteQuery($sql);
	}
	function GetManufacturers()
	{
		return $this->da->FetchAll("Select * from Manufacturers");
	}
	function GetManufacturerByID($id)
	{
		$sql="Select * from Manufacturers where ManufacturerID='$id'";
		return $this->da->Fetch($sql);
	}
	function DeleteManufacturer($manufacturerID)
	{
		$sql="Delete from Manufacturers where ManufacturerID=$manufacturerID";
		return $this->da->ExecuteQuery($sql);
	}
	function UpdateManufacturer($manufacturerID,$manufacturerName)
	{
		$sql="Update Manufacturers set ManufacturerName='$manufacturerName' where ManufacturerID=$manufacturerID";
		return $this->da->ExecuteQuery($sql);
	}
	function __destruct()
	{
		unset($this->da);
	}
}
?>