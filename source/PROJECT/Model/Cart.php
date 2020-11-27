<?php
class Cart
{
	public static function InsertCart($id)
	{
		if(isset($_SESSION["lgCart"][$id]))
			$_SESSION["lgCart"][$id]++;
		else
			$_SESSION["lgCart"][$id]=1;
	}
	public static function DeleteCart($id)
	{
		if(isset($_SESSION["lgCart"][$id]))
			unset($_SESSION["lgCart"][$id]);
	}
	public static function UpdateCart($id,$quantity)
	{
		if(isset($_SESSION["lgCart"][$id]))
			$_SESSION["lgCart"][$id]=$quantity;
	}
}
?>