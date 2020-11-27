<!-- CAROUSEL -->
<div id="carousel" class="carousel slide container" data-ride="carousel" style="top:100px">
        <?php
            $sqlcnt = 'SELECT COUNT(*) as cnt FROM banner_slide_show';
            $sql = 'SELECT * FROM banner_slide_show';
            $result = DataProvider::ExecuteQuery($sql);
            $cntresult = DataProvider::ExecuteQuery($sqlcnt);
            $cntdata = mysqli_fetch_assoc($cntresult);
            echo '<ul class="carousel-indicators">';
            for ($i = 0 ; $i < $cntdata['cnt'] ; $i++){
                echo "<li data-target='#carousel' data-slide-to='$i' class='active'></li>";
            }
            echo '</ul>';

            echo '<div class="carousel-inner">';
                while ($row = mysqli_fetch_assoc($result)){
                    echo '<div class="carousel-item active">';
                        echo "<img src='".$row['link']."' class='d-block w-100' alt='Los Angeles' width='100%' height='500'>";
                        echo '<div class="carousel-caption">';
                            echo "<h3>".$row['type']."</h3>";
                            echo "<p>".$row['des']."</p>";
                        echo '</div>';
                    echo '</div>';
                    break;
                }
                while ($row = mysqli_fetch_assoc($result)){
                    echo '<div class="carousel-item">';
                        echo "<img src='".$row['link']."' class='d-block w-100' alt='Los Angeles' width='100%' height='500'>";
                        echo '<div class="carousel-caption">';
                            echo "<h3>".$row['type']."</h3>";
                            echo "<p>".$row['des']."</p>";
                        echo '</div>';
                    echo '</div>';
                }
            echo '</div>';
        ?>
        <a class="carousel-control-prev" href="#carousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#carousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <!-- END CAROUSEL -->

    <!-- OWL CAROUSEL  -->

    <div class="container">
        <header class="shortcode-heading-wrapper">
            <h3>SẢN PHẨM MỚI</h3>
        </header>
        <div class="products">
            <div class="row">
            <?php
                $cnt = 0;
                $res = array_reverse($res);
                foreach($res as $row){
                    $cnt ++;
                    // print_r(array_values($res));
                    // print_r(array_values($row));
                    echo  '<div class="col-sm-3">';
                        echo '<div class="item">';
                            echo '<div class="lazy-load">';
                                echo "<a href=\"index.php?mod=product&act=detail&id=$row[ProdID]\">";
                                    echo "<img src=\"Upload/product/$row[ImageURL]\" alt=\"img\">";
                                echo '</a>';
                                echo '<div class="btn-group">';
                                    echo '<div class="button"> ';
                                        echo "<a class=\"fa fa-shopping-cart\" href=\"Controller/Cart/Add.php?id=$row[ProdID]\" onclick=\"return insertCart($row[ProdID])\">";
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
                echo '</div>';
                    if ($cnt == 4) break;
                }
                ?>
            </div>
        </div>
    </div>
    <!-- END OWL CAROUSEL -->

    <!-- 4 BANNER -->
    <div class="section_4banner">
        <div class="container">
            <div class="row">
                <div class="super3-banner-bg-1 col-sm-6">
                    <div class="ih-item square effect13 left_to_right bg1"><a href="#">
                            <div class="img" style="max-height:580; width: auto;"><img src="img/super3-banner-bg-1.jpg"
                                    alt="img" class="img-fluid" style="max-height:580; width: auto;"></div>
                            <div class="info">
                                <h3>SALE off 50%</h3>
                                <p>Dành cho tất cả mọi người</p>
                            </div>
                        </a></div>
                </div>
                <div class="col-sm-6 super3-banner-bg-2-1 col-sm-6">
                    <div class="super3-banner-bg-2 row">
                        <div class="ih-item square1 effect13 row bg2"><a href="#">
                                <div class="img"><img src="img/super3-banner-bg-2.jpg" alt="img"></div>
                                <div class="info">
                                    <h3>SALE off 50%</h3>
                                    <p>Dành cho tất cả mọi người</p>
                                </div>
                            </a></div>
                        <div class="super3-banner-bg-3 col-sm-6">
                            <div class="ih-item square2 effect13 left_to_right"><a href="#">
                                    <div class="img"><img src="img/super3-banner-bg-3.jpg" alt="img"></div>
                                    <div class="info">
                                        <h3>SALE off 50%</h3>
                                        <p>Dành cho tất cả mọi người</p>
                                    </div>
                                </a></div>
                        </div>
                        <div class="super3-banner-bg-4 col-sm-6">
                            <div class="ih-item square2 effect13 left_to_right bg3"><a href="#">
                                    <div class="img"><img src="img/super3-banner-bg-4.jpg" alt="img"></div>
                                    <div class="info">
                                        <h3>SALE off 50%</h3>
                                        <p>Dành cho tất cả mọi người</p>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    