<?php
class DataProvider 
{
	public static function ExecuteQuery($sql)
	{
		$mysqli = new mysqli("localhost","root","", "shop_noi_that") or
			die ("couldn't connect to localhost");				
		$mysqli->query("set names 'utf8'");		
		$result = $mysqli->query($sql);		
		$mysqli->close();		
		return $result;
	}
}
?>