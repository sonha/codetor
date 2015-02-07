<?php
session_start();
require_once 'listProduct.php';
$total = 0;
?>
<meta charset="utf-8"/>
<!DOCTYPE html>
<html lang="en">
<?php require_once '_template_header.php';?>
<body>
<!-- Navigation -->
<?php include_once '_template_navigation.php';?>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <?php require_once '_template_category_sidebar.php';?>
        </div>
        <div class="col-md-9">
            <?php if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) { ?>
                <form action='updatecart.php' method='POST'>
                    <div class="panel panel-info">
                        <div class="panel-heading"><i class="icon-shopping-cart"></i> Giỏ hàng</div>
                        <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr class="active">
                                <th>ID</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($_SESSION['cart'] as $list) { ?>
                                <?php $sotien = $list['price'] * $list['qty'];
                                $total += $sotien;
                                ?>
                                <tr>
                                    <td><?php echo $list['id']; ?></td>
                                    <td><?php echo $list['name']; ?></td>
                                    <td><?php echo number_format($list['price']); ?></td>
                                    <td>
                                        <div class="form-group">
                                            <div class="col-xs-6">
                                            <input type="text" name="qty[<?php echo $list['id']; ?>]" value="<?php echo $list['qty']; ?>" class="form-control" placeholder="Số lượng">
                                            </div>
                                        </div>
                                    </td>
                                    <td><?php echo number_format($sotien); ?></td>
                                    <td><a class="btn btn-danger" href="deletecart.php?id=<?php echo $list['id']; ?>">
                                            <i class="icon-trash icon-large"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                                <tr>
                                    <td>Tổng tiền</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><?php echo number_format($total); ?></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="pull-right">
                        <div class="col-xs-12 col-md-3">
                            <a href="index.php" class="btn btn-info active" role="button">Mua tiếp</a>
                        </div>
                        <div class="col-xs-12 col-md-5">
                            <input type='submit' class="btn btn-success" value='Cập nhật giỏ hàng' name='btnUpdate'/>
                        </div>
                        <div class="col-xs-12 col-md-2">
                            <a href="index.php" class="btn btn-danger active" role="button">Thanh Toán</a>
                        </div>
                        </div>
                    </div>
                </form>
            <?php } else { ?>
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Thông báo!</strong> Không có sản phẩm nào trong giỏ hàng.
                    <a href="index.php" class="btn btn-info active" role="button">Mua tiếp</a>
                </div>
            <?php } ?>
        </div>
    </div>

</div>
<!-- /.container -->
<div class="container">
    <!-- Footer -->
    <?php require_once '_template_footer.php';?>
</div>
<!-- /.container -->
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>