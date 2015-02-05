<?php
    session_start();
	$total = 0;
?>
<meta charset="utf-8"/>
<h3>Thong tin gio hang || <a href='index.php'>Quay lại mua tiếp</a></h3>
<?php if(isset($_SESSION['cart']) && $_SESSION['cart']!= null) { ?>
    <form action='updatecart.php' method='POST'>
    <table border='1' width='600'>
    <tr>
    <td>Ten san pham</td>
    <td>Gia san pham</td>
    <td>So luong</td>
    <td>Thanh tien</td>
    <td>Xoa</td>
    </tr>
	<?php foreach($_SESSION['cart'] as $list) { ?>
		<?php
			$sotien = $list['price']* $list['qty'];
			$total += $sotien;
		?>
        <tr>
        <td><?php echo $list['name'];?></td>
        <td><?php echo $list['price'];?></td>
        <td><input type='text' name='qty[<?php echo $list['id'];?>]' value='<?php echo $list['qty'];?>'/></td>
        <td><?php echo number_format($sotien) ;?></td>
        <td><a href='deletecart.php?id=<?php echo $list['id'];?>'>Xoa</a></td>
        </tr>
    <?php } ?>
	<tr>
	</tr>
    </table>
	Tổng tiền : <?php echo number_format($total);?>
    <p align='right' style='width: 600px'>
    <input type='submit' value='Update' name='btnUpdate'/>
    </p>
    </form>
<?php } else { ?>
Không có sản phẩm nào
<?php } ?>