<?php
    session_start();
?>
<meta charset="utf-8"/>
<h3>Thong tin gio hang</h3>
<?php
if(isset($_SESSION['cart']) && $_SESSION['cart']!= null) {
    echo "<form action='updatecart.php' method='POST'>";
    echo "<table border='1' width='600'>";
    echo "<tr>";
    echo "<td>Ten san pham</td>";
    echo "<td>Gia san pham</td>";
    echo "<td>So luong</td>";
    echo "<td>Thanh tien</td>";
    echo "<td>Xoa</td>";
    echo "</tr>";

    foreach($_SESSION['cart'] as $list) {
        echo "<tr>";
        echo "<td>".$list['name']."</td>";
        echo "<td>".$list['price']."</td>";
        echo "<td><input type='text' name='qty[".$list['id']."]' value='".$list['qty']."'/></td>";
        echo "<td>".($list['price']* $list['qty'])."</td>";
        echo "<td><a href='deletecart.php?id=".$list['id']."'>Xoa</a></td>";
        echo "</tr>";
    }
    echo "</table>
          <p align='right' style='width: 600px'>
           <input type='submit' value='Update' name='btnUpdate'/>
           </p>";
    echo "</form>";
} else {
    echo 'Chua co san pham nao';
}
?>
