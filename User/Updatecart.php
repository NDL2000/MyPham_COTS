<?php
    session_start();
    print_r($_SESSION['cart']); 
    $product = array();  
    if(isset($_POST['btnUpdate'])) {
        foreach ($_POST['soluong'] as $key => $val) {
            $_SESSION['cart'][$key]['sl']=$val;
        }
    foreach ($_SESSION['cart'] as $list) {
        foreach ($_POST['product'] as $val) {
            if($list['id'] == $val) {
                $product[$val] = $list;
            }
        }
        }
    }    
    $tongtien = 0;
    foreach ($product as $list) {
        $thanhtien = $list['price'] * $list['sl'] - ($list['price'] * $list['tylekm'] / 100);
        $tongtien = $tongtien + $thanhtien;
        $thanhtien = number_format($thanhtien, '0', ',', '.') . "&#8363;";   
    } 
    $_SESSION['tongtien'] = $tongtien;
    $_SESSION['thanhtien'] = $thanhtien;
    $_SESSION['product'] = $product;    // Lưu session hỗ trợ trang thanh toán
    echo "<script>window.history.back('./list_cart.php');</script>";

?>
