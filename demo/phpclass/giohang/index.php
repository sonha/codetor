<?php
session_start();
?>
<meta charset="utf-8"/>
<h3>Danh sách sản phẩm</h3>
<style>
    ul {
        margin: 0px;
        padding: 0px;
        list-style: none;
    }
    ul li {
        width: 400px;
        border: 1px dashed #ccc;
        padding: 5px;
    }
    ul li h3 {
        font-size: 16px;
    }
    ul li a  {
        text-decoration: none;
        color: #000;
    }
    ul li a:hover {
        color: orange;
    }

</style>
<?php
    $total = 0;
    if(isset($_SESSION['cart']) && $_SESSION['cart'] != null) {
        foreach($_SESSION['cart'] as $list) {
            $total += $list['qty'];
        }
    }
?>
<p>Dang co <a href="viewcart.php"><?php echo $total; ?></a> san pham trong gio hang</p>
<?php
require_once 'listProduct.php';
?>
<ul>
	<?php foreach($product as $listProduct) { ?>
    <li>
            <h3><?php echo $listProduct['name'];?></h3>
            <p>Giá bán : <?php echo number_format($listProduct['price']);?></p>
            <p><a href='insertcart.php?id=<?php echo $listProduct['id'];?>'>Mua ngay</a></p>
    </li>
	<?php } ?>
</ul>