<!-- Article -->
<div class="all-products">
	<header class="shortcode-heading-wrapper container">
            <?php echo "<h3>Kết quả tìm kiếm</h3>"; ?>
    </header>
<?php
$dem=0;
$cntList = 1;
$cntdong = 0;
if ($result == NULL) {
	echo '<p class = "container">Không tìm thấy kết quả!</p>';
}

foreach($result as $row)
{
	if($dem%4==0){
		echo "<div class=\"container list-item list-item$cntList\">";
            echo '<div class="products">';
				echo '<div class="row">';
		
		$cntList++;

		$cntdong ++;
	}
	
	echo '<div class="col-sm-3">';
		echo '<div class="item">';
			echo '<div class="lazy-load">';
				echo "<a href=\"index.php?mod=product&act=detail&id=$row[ProdID]\">";
					echo "<img src=\"Upload/product/$row[ImageURL]\" alt=\"\">";
				echo '</a>';
				echo '<div class="btn-group">';
					echo '<div class="button">';
						echo '<a class="fa fa-shopping-cart">';
							echo '<span class="btn-tooltip">';
								echo 'Add to cart';
							echo '</span>';
						echo '</a>';
					echo '</div>';					
				echo '</div>';
			echo '</div>';
			echo '<div class="desc">';
				echo '<h3 class="product-name">';
					echo "<a href=\"index.php?mod=product&act=detail&id=$row[ProdID]\">$row[ProdName]</a>";
				echo '</h3>';
				
				
				$gia = $row['Price']-$row['Price']*$row['Discount'];
				echo "<span class=\"price\">".number_format($gia , 0, ',', '.')." đ</span>";
			echo '</div>';
		echo '</div>';
	echo '</div>';
	
	if(($dem+1)%4==0){
		echo '</div>';
			echo '</div>';
				echo '</div>';
	}
	$dem ++;
}

if($dem%4!=0){
	echo '</div>';
		echo '</div>';
			echo '</div>';
}
$dem ++;

?>

</div>

<div id="pagination-container"></div>
<script type="text/javascript">
        var items = $(".all-products .list-item");
        var numItems = items.length;
        var perPage = 4;

        items.slice(perPage).hide();

        $('#pagination-container').pagination({
            items: numItems,
            itemsOnPage: perPage,
            prevText: "&laquo;",
            nextText: "&raquo;",
            onPageClick: function (pageNumber) {
                var showFrom = perPage * (pageNumber - 1);
                var showTo = showFrom + perPage;
                items.hide().slice(showFrom, showTo).show();
            }
        });
    </script>