<?php
if(isset($_GET["act"]))
{
	switch($_GET["act"])
	{
		case "delete":
			$url="DeleteCategory.php";
			break;
		case "add":
			$url="AddCategory.php";
			break;
		case "manage":
			$url="ManageCategories.php";
			break;
		case "edit":
			$url="EditCategory.php";
			break;
		case "show":
			$url="ShowCategories.php";
			break;
	}
	include_once($url);
}
?>