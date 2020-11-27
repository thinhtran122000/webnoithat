<?php
include_once("DataAccess.php");
class User
{
	private $da;
	function __construct()
	{
		$this->da = new DataAccess(); 
	}
	function InsertUser($fullName,$userName,$passWord,$email)
	{
		$sql="Insert into users (GroupID,FullName,UserName,PassWord,Email) values(3,'$fullName','$userName','$passWord','$email')";
		return $this->da->ExecuteQuery($sql);
	}
	function Login($userName,$passWord)
	{
		$sql="SELECT UserID,GroupID,UserName from users where UserName='$userName' and PassWord='$passWord'";
		return $this->da->Fetch($sql);
	}
	function ChangePassWord($userID,$newPassWord,$oldPassWord)
	{
		$sql="Select UserID from users where UserID=$userID and PassWord='$oldPassWord'";
		$ret = $this->da->NumRows($sql);
		if($ret==0)
			return 0;
		$sql="Update users set PassWord='$newPassWord' where UserID=$userID";
		return $this->da->ExecuteQuery($sql);
	}
	function UpdateUser($userID,$fullName,$email)
	{
		$sql="Update users set FullName='$fullName',Email='$email' where UserID=$userID";
		return $this->da->ExecuteQuery($sql);
	}
	function EditUser($userID,$groupID)
	{
		$sql="Update users set GroupID=$groupID where UserID=$userID";
		return $this->da->ExecuteQuery($sql);
	}
	function DeleteUser($userID)
	{
		$sql="Delete from users where UserID=$userID";
		return $this->da->ExecuteQuery($sql);
	}
	function GetUsers()
	{
		$sql="Select UserID,FullName,UserName,Email,GroupName from users u join Groups g on u.GroupID=g.GroupID";
		return $this->da->FetchAll($sql);
	}
	function GetUserByID($userID)
	{
		$sql = "Select UserID,FullName,UserName,Email,GroupID from users where UserID = $userID";
		return $this->da->Fetch($sql);
	}
	function __destruct()
	{
		unset($this->da);
	}
}
?>