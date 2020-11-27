<?php
if(isset($_GET["act"]))
{
	switch($_GET["act"])
	{
		case "delete":
			$url="DeleteGroup.php";
			break;
		case "add":
			$url="AddGroup.php";
			break;
		case "manage":
			$url="ManageGroups.php";
			break;
		case "edit":
			$url="EditGroup.php";
			break;
	}
	include_once($url);
}
?>