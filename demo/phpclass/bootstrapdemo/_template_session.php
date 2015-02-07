<?php
/**
 * Created by PhpStorm.
 * User: Ha Anh Son
 * Date: 07/02/2015
 * Time: 5:43 CH
 */
?>
<?php
//Start : Xu ly session gio hang
$totalSanpham = 0;
$tongSoTien = 0;
if(isset($_SESSION['cart']) && $_SESSION['cart'] != null) {
    foreach($_SESSION['cart'] as $list) {
        $totalSanpham += $list['qty'];
        $tongSoTien   += $list['price'] * $list['qty'];
    }
}
//End : Xu ly session gio hang
?>