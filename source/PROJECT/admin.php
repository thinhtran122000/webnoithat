<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="img/icon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrator</title>
    <link rel="stylesheet" href="css/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <!-- FONTAWESOME LIBRARY -->
    <link rel="stylesheet" href="css/fontawesome-free-5.11.2-web/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-5.11.2-web/css/v4-shims.min.css">
    <!-- OWL CAROUSEL LIBRARY -->
    <!-- <link rel="stylesheet" href="css/dist_owl_carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="css/dist_owl_carousel/assets/owl.theme.default.min.css"> -->
    <link rel="stylesheet" href="css/admin.css">
    <script scr = "js/JavaScrips.js"></script>
</head>

<body>
    <div class = "container">
    <nav class="header navbar navbar-expand-lg navbar-light container">
        <a class="navbar-brand" href="index.php">Administrator</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".sidebar">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        <i class="fas fa-external-link-alt"></i> BOX SHOP </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-sign-out-alt"></i> Thoát
                    </a>
                </li> -->
            </ul>
        </div>
    </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-4 sidebar">
                <ul style="padding-left: 0px;">
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php?mod=statistics&act=count">
                            <i class="fas fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="admin.php?mod=product&act=manage" class="nav-link">
                            <i class="fas fa-shopping-cart"></i> Sản phẩm
                        </a>

                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="admin.php?mod=user&act=manage">
                            <i class="fas fa-user"></i> Thành viên
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="admin.php?mod=category&act=manage">
                            <i class="fas fa-edit"></i> Loại sản phẩm
                        </a>
                    </li>



                    <li class="nav-item ">
                        <a class="nav-link" href="admin.php?mod=group&act=manage">
                            <i class="fas fa-user-friends"></i> Nhóm
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="admin.php?mod=order&act=manage">
                            <i class="fas fa-file-invoice-dollar"></i> Quản lí hóa đơn
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="index.php?mod=user&act=logout">
                            <i class="fas fa-sign-out-alt"></i> Đăng xuất
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-8" style="margin-top: 100px; padding-left: 220px;">
                <?php
                    if(isset($_GET["mod"]))
                    {
                        include_once("Controller/".$_GET['mod']."/".$_GET['act'].'.php');
                    }
                    else
                    {
                        include_once("Controller/Statistics/Count.php");
                    }
                ?>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>

    <!-- OWL CAROUSEL LIBRARY -->
    <script type="text/javascript" src="css/dist_owl_carousel/owl.carousel.min.js"></script>

    <!-- BOOTSTRAP LIBRARY -->
    <script src="css/bootstrap-4.3.1-dist/js/bootstrap.min.js">
    </script>
    <script type="text/javascript">

    </script>
</body>

</html>