<?php
	include_once("Model/Statistics.php");
	$statis = new Statistics();
	$countUser=$statis->CountUsers();
	$countOrder = $statis->CountOrders();
	include_once("View/Statistics/Count.php");
?>