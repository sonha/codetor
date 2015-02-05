<?php
session_start();
require_once 'listProduct.php';
$idProduct = $_GET['id'];
$newProduct = array();

foreach($product as $val) {
    $newProduct[$val['id']] = $val;
}
//neu khong ton tai gio hang hoac gio hang null
if(!isset($_SESSION['cart']) || $_SESSION['cart']== null) {
    $newProduct[$idProduct]['qty'] = 1;
    // them phan tu vao mang session
    $_SESSION['cart'][$idProduct] = $newProduct[$idProduct];
} else {
//neu co gio hang
	//----neu san pham DA CO trong gio hang thi cong them 1 vao quantity
    if(array_key_exists($idProduct, $_SESSION['cart'])) {
        $_SESSION['cart'][$idProduct]['qty'] +=1;
    } else {
	//----neu san pham CHUA CO trong gio hang thi gan quantity bang 1 va luu vao SESSION
        $newProduct[$idProduct]['qty'] = 1;
        $_SESSION['cart'][$idProduct] = $newProduct[$idProduct];
    }
}
header("location:viewcart.php");
?>