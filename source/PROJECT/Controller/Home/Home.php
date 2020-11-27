<?php
    include_once("./Model/Product.php");
    $prod = new Product();
    $res=$prod->GetAllProducts();
    // $categoryID= $row['CategoryID'];
    // $result=$prod->GetProductsOrther($id,$categoryID);
    include_once("./View/Home/Home.php");
?>