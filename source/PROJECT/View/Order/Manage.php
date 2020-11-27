 <!-- Article --><div class="article">
<h2><span><a href="admin.php?mod=order&act=manage">Quản lý hóa đơn</a></span></h2>
<p>
    <?php
	
	foreach($ret as $row)
	{
		$count = 0;
		echo "<p>ID hóa đơn: $row[OrderID]</p>";
		echo "<p>Tên khách hàng: $row[FullName]</p>";
		echo "<p>Ngày đặt hàng: $row[AddedDate]</p>";
		$item = $orderItem->GetOrderItemByOrder($row['OrderID']);
		echo "<table class=\"table table-striped table-dark\">";
		echo "<tr><td>Tên sản phẩm</td><td>Số lượng</td><td>Giá</td></tr>";
		foreach($item as $rowitem)
		{
			$count++;
			if($count%2==0)
			{
				echo "<tr class=\"color\"><td>";
			}
			else
				echo "<tr><td>";
			echo $rowitem['ProdName']."</td><td>";
			echo $rowitem['Quantity']."</td><td>";
			echo $rowitem['Price']."</td>";
			echo "</tr>";
		}
		echo "</table>";
		echo "<a href=\"admin.php?mod=order&act=delete&id=$row[OrderID]\" onclick=\"return IsDelete()\">Xóa hóa đơn <img src=\"img/delete.gif\" /></a></td><td>";
		echo "<hr/>";
	}
	?>
    </table>
</p>
</div> <!-- /article --><hr class="noscreen">