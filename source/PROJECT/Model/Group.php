<?php
include_once("DataAccess.php");
class Group
{
	private $da;
	function __construct()
	{
		$this->da = new DataAccess(); 
	}
	function InsertGroup($groupName)
	{
		$sql="Insert into Groups (GroupName) values('$groupName')";
		return $this->da->ExecuteQuery($sql);
	}
	function DeleteGroup($groupID)
	{
		$sql="Delete from Groups where GroupID=$groupID";
		return $this->da->ExecuteQuery($sql);
	}
	function UpdateGroup($groupID,$groupName)
	{
		$sql="Update Groups set GroupName='$groupName' where GroupID=$groupID";
		return $this->da->ExecuteQuery($sql);
	}
	function GetGroupByID($groupID)
	{
		$sql="Select GroupID,GroupName from Groups where GroupID=$groupID";
		return $this->da->Fetch($sql);
	}
	function GetGroups()
	{
		$sql="Select GroupID,GroupName from Groups";
		return $this->da->FetchAll($sql); 
	}
	function __destruct()
	{
		unset($this->da);
	}
}
?>