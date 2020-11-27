<?php
include_once("DataAccess.php");
class Category
{
	private $da;
	function __construct()
	{
		$this->da = new DataAccess(); 
	}
	function InsertCategory($CateName)
	{
		$sql="INSERT into categories (CateName) Values('$CateName')";
		return $this->da->ExecuteQuery($sql);
	}
	function GetCategories()
	{
		return $this->da->FetchAll("SELECT CateID,CateName from categories");
	}
	function GetCategoryByID($id)
	{
		$sql="SELECT CateID,CateName from categories where CateID=$id";
		return $this->da->Fetch($sql);
	}
	function UpdateCategory($id,$categoryName)
	{
		$sql="UPDATE categories set CateName='$categoryName' where CateID=$id";
		return $this->da->ExecuteQuery($sql);
	}
	function DeleteCategory($id)
	{
		$sql="DELETE from categories where CateID=$id";
		return $this->da->ExecuteQuery($sql);
	}
	function __destruct()
	{
		unset($this->da);
	}
}
?>