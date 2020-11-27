<?php
	include_once("Model/Group.php");
	$group = new Group();
	$ret=$group->GetGroups();
	include_once("View/Group/Manage.php");
?>