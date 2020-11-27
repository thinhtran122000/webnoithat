<!-- THONG TIN SAN PHAM -->
<div class="container" style="margin-top: 120px;">
	<div class="info-1sp">
		<div class="row">
			<div class="col-sm-6 info-1sp-left">
				<div id="carousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active" style="border:1px solid;">
							<?php echo "<img src=\"Upload/product/$row[ImageURL]\">" ?>
						</div>
					</div>
				</div>
				<div class="clearfix">
					<div id="thumbcarousel" class="carousel slide" data-interval="false">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div data-target="#carousel" data-slide-to="0" class="thumb"><?php echo "<img src=\"Upload/product/$row[ImageURL]\">" ?>
								</div>
							</div><!-- /item -->
							<div class="carousel-item">
								
							</div><!-- /item -->
						</div><!-- /carousel-inner -->
						<a class="carousel-control-prev" href="#thumbcarousel" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						</a>
						<a class="carousel-control-next" href="#thumbcarousel" role="button" data-slide="next">
							<span class="carousel-control-next-icon"></span>
						</a>
					</div> <!-- /thumbcarousel -->
				</div><!-- /clearfix -->
			</div> <!-- /col-sm-6 -->
			<div class="col-sm-6 info-1sp-right">
				<h2><?php echo "$row[ProdName]"?></h2>
				<header class="shortcode-heading-wrapper" style="padding:40px 0 !important;">
					<h3 style="margin: 0;font-weight: bold;; font-size: 28px;line-height: 30px"><?php $gia = $row['Price']-$row['Price']*$row['Discount']; echo "<span class=\"price\">".number_format($gia , 0, ',', '.')."</span>";?> đ</h3>
				</header>
				<p style="border-bottom: 1px solid #ebebeb; padding: 0 10px 15px 0;">Thông tin sản phẩm đang được
					cập nhật.
				</p>
				<p>
					<span class="fa fa-star yellow"></span>
					<span class="fa fa-star yellow"></span>
					<span class="fa fa-star yellow"></span>
					<span class="fa fa-star yellow"></span>
					<span class="fa fa-star"></span>
					<span>(4.67 - 172 reviews)</span>
				</p>
				<p class="quantity">SỐ LƯỢNG <span class="fa fa-angle-left angle"></span><span id="qt"><?php echo $row['Quantity'] ?></span><span
						class="fa fa-angle-right angle"></span></p>
				<!-- <div class="footer"> -->
						<a class="fa fa-shopping-cart">
							<span class="btn-tooltip">
								
							</span>
						</a>
						<?php 
							echo "<a href=\"Controller/Cart/Add.php?id=$row[ProdID] \" onclick=\"return insertCart($row[ProdID])\">Thêm vào giỏ hàng</a>";
						?>
						
					<!-- <div class="right">
						<p>Add to Cart</p>
					</div> -->
				<!-- </div> -->
			</div> <!-- /col-sm-6 -->
		</div> <!-- /row -->

		<div class="container mt-3">
			<h2><?php echo "$row[ProdName]"?></h2>
			<br>
			<!-- Nav tabs -->
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#home">MÔ TẢ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#menu1">THÔNG TIN</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#menu2">ĐÁNH GIÁ</a>
				</li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div id="home" class="container tab-pane active"><br>
					<!-- <h3>HOME</h3> -->
					<p>
						<?php echo "$row[Des]"?>
					</p>
				</div>
				<div id="menu1" class="container tab-pane fade"><br>
					<h3>Hướng dẫn đặt hàng</h3>

				</div>
				<div id="menu2" class="container tab-pane fade"><br>
					<h3>Đánh giá sản phẩm</h3>
					<hr>
					<button class="btn-danhgia" data-toggle="modal" data-target="#myModal">Viết đánh giá</button>
					<!-- The Modal -->
					<div class="modal fade" id="myModal" style="width:400px; height: 700px; margin-left: 555px;">
						<div class="modal-dialog">

							<div class="modal-content">

								<!-- Modal Header -->
								<div class="modal-header" style="height: 150px;">
									<h4 class="modal-title" >Đánh giá sản phẩm
									</h4>
									<div class="bpr-form-rating" style="display:block">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
									</div>
									<button type="button" class="close" data-dismiss="modal">×</button>
								</div>
								<form action="">

									<!-- Modal body -->
									<div class="modal-body info-danhgia"
										style="height: 300px; width: 498px; padding: 0;">

										<input type="text" placeholder="    Nhập tên của bạn"> <br>
										<input type="text" placeholder="    Email"> <br>
										<input type="text" placeholder="    Tiêu đề"> <br>
										<textarea name="" id="" maxlength="1500" cols="30" rows="5"
											placeholder="   Nội dung" style="margin-left: 18px;"></textarea>
									</div>

									<!-- Modal footer -->
									<div class="modal-footer">
										<button type="submit" class="btn btn-danger"
											data-dismiss="modal">Gửi</button>
									</div>
								</form>

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- OWL CAROUSEL  -->
</div>
<div class="container">
	<header class="shortcode-heading-wrapper">
		<h3>SẢN PHẨM LIÊN QUAN</h3>
	</header>
	<div class="products">
		<div class="owl-carousel owl-theme owl-loaded owl-height">
			<div class="owl-stage-outer">
				<div class="owl-stage">
		<?php
                foreach($result as $row){
                    // print_r(array_values($res));
                    // print_r(array_values($row));
                        echo '<div class="owl-item">';
                            echo '<div class="lazy-load">';
                                echo "<a href=\"index.php?mod=product&act=detail&id=$row[ProdID]\">";
                                    echo "<img src=\"Upload/product/$row[ImageURL]\" alt=\"img\">";
                                echo '</a>';
                                echo '<div class="btn-group">';
                                    echo '<div class="button">';
                                        echo "<a href=\"Controller/Cart/Add.php?id=$row[ProdID]\" onclick=\"return insertCart($row[ProdID])\" class=\"fa fa-shopping-cart\">";
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
                    
                            echo '</p>';
                            $gia = $row['Price']-$row['Price']*$row['Discount'];
                            echo "<span class=\"price\">".number_format($gia , 0, ',', '.')." đ</span>";
                        echo '</div>';
                    echo '</div>';
                }
				?>
				</div>
			</div>
		</div>
	</div>
</div>