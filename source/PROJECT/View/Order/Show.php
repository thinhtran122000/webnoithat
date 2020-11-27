<div class="all-products container shortcode-heading-wrapper">
<h2><span>Thông tin đơn đặt hàng</span></h2>
<p>

<?php
foreach($result as $row)
		{
			echo '<table width="100%" class = "table table-striped table-dark">';
			echo "<tr class=\"title\"><td>Ngày đặt: $row[AddedDate]</td><td colspan=\"2\"></td></tr>";
			echo "<tr><td>Tên sản phẩm</td><td>Giá</td><td>Số lượng đặt</td></tr>";
			$result2=$item->GetOrderItemByOrder($row["OrderID"]);
			$count = 0;
			foreach($result2 as $row2)
			{
				$count++;
				if($count%2==1)
				{
					echo "<tr class=\"color\">";
				}
				else
					echo "<tr>";
				echo "<td>$row2[ProdName]</td>";
				echo "<td>".number_format($row2['Price'] , 0, ',', '.')." đ</td>";
				echo "<td>$row2[Quantity]</td>";
				echo "</tr>";
			}
			echo "<td></td>";
			echo "<td>Tổng tiền: ".number_format($row['Sum'] , 0, ',', '.')." đ</td>";
			echo "<td></td>";
			echo '</table>';
		}
?>

</p>
</div>