<?php
	session_start();
    ob_start();
    $_SESSION['lgSum'] = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="img/icon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop nội thất</title>
    <link rel="stylesheet" href="css/style.css">

    <!-- BOOTSTRAP LIBRARY -->
    <link rel="stylesheet" href="css/bootstrap-4.3.1-dist/css/bootstrap.min.css">

    <!-- FONTAWESOME LIBRARY -->
    <link rel="stylesheet" href="css/fontawesome-free-5.11.2-web/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-5.11.2-web/css/v4-shims.min.css">

    <!-- OWL CAROUSEL LIBRARY -->
    <link rel="stylesheet" href="css/dist_owl_carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="css/dist_owl_carousel/assets/owl.theme.default.min.css">

    <!-- IHOVER LIBRARY -->
    <link rel="stylesheet" href="css/ihover/ihover.css">

    <!-- INFO PRODUCT -->
    <link rel="stylesheet" href="css/infosanpham.css">

    <link rel="stylesheet" href="css/sing-in-out.css">

    <script src="js/jquery-3.4.1.min.js"></script>


    <script src="js/jquery.simplePagination.js"></script>

    <link rel="stylesheet" href="css/paginationjs-master/allproducts.css">

    <script src="js/JavaScrips.js"></script>

</head>

<?php
    include_once("./Model/DataProvider.php");
    include_once("./Model/Category.php");
    $prod2 = new Category();
    $resCate=$prod2->GetCategories();
    
?>

<body>
    <!-- Button back to top -->
    <input type="image" src="img/backtoptop.png" onclick="topFunction()" id="btnBackToTop" width="48" height="48">
    <script>
        //Get the button
        var mybutton = document.getElementById("btnBackToTop");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        $('#btnBackToTop').click(function () {
            $('html, body').animate({
                scrollTop: 0
            }, 500);
        });
    </script>
    <!-- HEADER -->
    <header class="header">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white container">
            <a class="navbar-brand" href="./index.php"><img src="img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="./index.php">Trang chủ<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            sản phẩm
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                                foreach($resCate as $row)
                                echo "<a class=\"dropdown-item\" href=\"index.php?mod=product&act=show&id=$row[CateID]\">$row[CateName]</a>";
                            ?>
                        </div>
                    </li>
                    <li class="nav-item" id="contact">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Liên hệ</a>
                    </li>
                </ul>

                <!-- Search -->
                    <?php                    
                        include_once("Controller/Product/Search.php");
                    ?>
                <!-- Search -->

                <?php
				if(isset($_SESSION["lgUserID"]))
				{
					if($_SESSION["lgGroupID"]==1){
                        echo '<div class="row ml-sm-2">';
                        echo '<input type="image" src="img/user.png" id="cart" width="32" height="32">';
                            echo '<div class="nav-item dropdown">';
                                echo '<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"';
                                    echo 'aria-haspopup="true" aria-expanded="false">';
                                    echo "$_SESSION[lgUserName]";
                                echo '</button>';
                                echo '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
                                    echo '<a class="dropdown-item" href="index.php?mod=user&act=about"><i class="fas fa-user mr-3"></i>Thông tin</a>';
                                    echo "<a class=\"dropdown-item\" href=\"index.php?mod=order&act=show\"><i class=\"fas fa-file-invoice mr-3\"></i>Đơn hàng</a>";
                                    echo '<a class="dropdown-item" href="admin.php"><i class="fas fa-user mr-3"></i>Trang Admin</a>';
                                    echo '<a class="dropdown-item" href="index.php?mod=user&act=logout"> <i class="fas fa-sign-out-alt mr-3"></i>Đăng xuất</a>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    }else{
                        
                        echo '<div class="row ml-sm-2">';
                            echo '<input type="image" src="img/user.png" id="cart" width="32" height="32">';
                            echo '<div class="nav-item dropdown">';
                                echo '<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"';
                                    echo 'aria-haspopup="true" aria-expanded="false">';
                                    echo "$_SESSION[lgUserName]";
                                echo '</button>';
                                echo '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
                                    echo '<a class="dropdown-item" href="index.php?mod=user&act=about"><i class="fas fa-user mr-3"></i>Thông tin</a>';
                                    echo "<a class=\"dropdown-item\" href=\"index.php?mod=order&act=show\"><i class=\"fas fa-file-invoice mr-3\"></i>Đơn hàng</a>";
                                    echo '<a class="dropdown-item" href="index.php?mod=user&act=logout"> <i class="fas fa-sign-out-alt mr-3"></i>Đăng xuất</a>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    }
				}
				else
				{
                    echo "<a class=\" row ml-sm-2 mr-sm-0 btn btn-outline-primary my-2 my-sm-0\" href=\"index.php?mod=user&act=login\" role=\"button\">Đăng nhập</a>";
                    echo "<a class=\" row ml-sm-2 btn btn-outline-primary my-2 my-sm-0\" href=\"index.php?mod=user&act=register\" role=\"button\">Đăng kí</a>";
					
                }
                include_once("View/Cart/Cart.php");
				?>

        </nav>
    </header>
    <script>
        $("#info").click(function () {
            $('html, body').animate({
                scrollTop: $("#footer").offset().top
            }, 1000);
        });
        $("#contact").click(function () {
            $('html, body').animate({
                scrollTop: $("#footer").offset().top
            }, 1000);
        });
    </script>

    <!-- END HEADER -->

    <?php
        if(isset($_GET["mod"]))
        {
            include_once("Controller/".$_GET['mod']."/".$_GET['act'].'.php');
        }
        else
        {
            include_once("./Controller/Home/Home.php");
        }
        
        
    ?>

    
    <!-- FOOTER -->
    
    <footer class="page-footer font-small blue-grey lighten-5" id="footer">

        <div style="background-color: #f7941d;">
            <div class="container">

                <!-- Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0 ">
                        <h5 class="mb-0" style="color: #fff;">Lựa chọn những sản phẩm tốt nhất!</h5>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">

                        <!-- Facebook -->
                        <a href="#" class="fb-ic">
                            <i class="fab fa-facebook-f white-text mr-4"> </i>
                        </a>
                        <!-- Twitter -->
                        <a href="#" class="tw-ic">
                            <i class="fab fa-twitter white-text mr-4"> </i>
                        </a>
                        <!-- Google +-->
                        <a href="#" class="gplus-ic">
                            <i class="fab fa-google-plus-g white-text mr-4"> </i>
                        </a>
                        <!--Linkedin -->
                        <a href="#" class="li-ic">
                            <i class="fab fa-linkedin-in white-text mr-4"> </i>
                        </a>
                        <!--Instagram-->
                        <a href="#" class="ins-ic">
                            <i class="fab fa-instagram white-text"> </i>
                        </a>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row-->

            </div>
        </div>

        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5">

            <!-- Grid row -->
            <div class="row mt-3 dark-grey-text">

                <!-- Grid column -->
                <div class="col-md-8 col-lg-8 col-xl-8 mb-8">

                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold">Siêu thị nội thất</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        Trụ sở chính: 280, An Dương Vương, phường 4, quận 5, HCM <br>
                        Hotline: 0123456789 <br>
                        Email: comp14402@da.com</p>

                </div>
                <!-- Grid column -->



                <!-- Grid column -->
                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-md-0 mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i> 280 An Dương Vương, Quận 5, TP.HCM</p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> info@comp14402.com</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p>
                        <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center text-black-50 py-3">© 2019 Copyright:
            <a class="dark-grey-text" href="http://comp14402.tk/"> comp14402.tk</a>
        </div>
        <!-- Copyright -->

    </footer>


    <!-- END FOOTER -->
    <!-- JQUERY LIBRARY -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>

    <!-- OWL CAROUSEL LIBRARY -->
    <script type="text/javascript" src="css/dist_owl_carousel/owl.carousel.min.js"></script>

    <!-- BOOTSTRAP LIBRARY -->
    <script src="css/bootstrap-4.3.1-dist/js/bootstrap.min.js">
    </script>
    <script type="text/javascript">
        // CALL OWL CAROUSEL
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel();
        });
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2,
                    nav: true
                },
                600: {
                    items: 4,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: true
                }
            }
        })
    </script>
</body>

</html>

<?php ob_end_flush();?>