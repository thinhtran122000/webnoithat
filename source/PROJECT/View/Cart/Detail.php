<div class="all-products container">
<h2 class = "shortcode-heading-wrapper container"><span><a href="#">Chi tiết giỏ hàng</a></span></h2>
<p>
<table  cellpadding="0" cellspacing="0" class="table" width="100%">
        <tr><td>Sản phẩm</td><td>Đơn giá</td><td>Số lượng</td><td>Xóa</td><td>Sửa</td></tr>
<?php
$sum=0;
foreach($_SESSION["lgCart"] as $key=>$val)
        {
            $row=$product->GetProductByID($key);
			$sum+=$val*$row["Price"];
            echo "<tr>";
            echo "<td><img height=\"50\"  src=\"Upload/product/$row[ImageURL]\" /></td>";
			echo "<td>".number_format($row["Price"],0)."</td>";
            echo "<td>$val</td>";
			echo "<td><a href=\"index.php?mod=cart&act=delete&id=$key\" onclick=\"return IsDelete()\" ><img src=\"img/delete.gif\" width=\"16\" height=\"16\" /></a></td>";
			echo "<td><a href=\"index.php?mod=cart&act=edit&id=$key\"><img src=\"img/edit.gif\" /></a></td>";
            echo "</tr>";
        }
?>
<tr><td>Tổng tiền</td><td colspan="4"><?php echo number_format($sum,0);?></td></tr>
</table>
<center><a href="index.php?mod=order&act=add" >Lưu thành hóa đơn</a></center>
</p>
</div>
