<div class="row ml-sm-2">
	<a class="ml-sm-2" href="index.php?mod=cart&act=detail"><img src="img/cart.png" id="me" alt="Yeah, it´s me!" title="Giỏ hàng của bạn"></a>
	<!-- <input type="image" src="img/cart.png" href="index.php?mod=cart&act=detail" id="cart" width="32" height="32" class="ml-sm-2"> -->
	<!-- <h5 class=\"ml-sm-2 mr-sm-2\" style=\"color: darkgoldenrod;\">$_SESSION[lgSum]</h5> -->
	<?php
	if(isset($_SESSION["lgCart"]))
	{
		$sum=0;
		foreach($_SESSION["lgCart"] as $item)
		{
			$sum+=$item;
		}
		echo "<div class=\"ml-sm-2 mr-sm-2\" style=\"color: darkgoldenrod;\" id=\"cart\">".count($_SESSION["lgCart"])."</div>";
		
	}
	else 
	{
		echo "<div class=\"ml-sm-2 mr-sm-2\" style=\"color: darkgoldenrod;\" id=\"cart\">"."0"."</div>";
	}
	?>
</div>


