<?php
session_start();
$total = 0;
?>
<meta charset="utf-8"/>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Start Bootstrap</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <p class="lead">Shop Name</p>

            <div class="list-group">
                <a href="#" class="list-group-item">Category 1</a>
                <a href="#" class="list-group-item">Category 2</a>
                <a href="#" class="list-group-item">Category 3</a>
            </div>
        </div>
        <div class="col-md-9">
            <h3>Thông tin giỏ hàng</h3>
            <?php if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) { ?>
                <form action='updatecart.php' method='POST'>
                    <div class="panel panel-info">
                        <div class="panel-heading">Giỏ hàng</div>
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
                                    <td><input type='text' name='qty[<?php echo $list['id']; ?>]'
                                               value='<?php echo $list['qty']; ?>'/></td>
                                    <td><?php echo number_format($sotien); ?></td>
                                    <td><a href='deletecart.php?id=<?php echo $list['id']; ?>'>Xóa</a></td>
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
                    <div class="pull-right">
                        <a href="index.php" class="btn btn-info active" role="button">Mua tiếp</a>
                        <input type='submit' class="btn btn-success" value='Cập nhật giỏ hàng' name='btnUpdate'/>
                        <a href="index.php" class="btn btn-danger active" role="button">Thanh Toán</a>
                    </div>
                </form>
            <?php } else { ?>
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Thông báo!</strong> Không có sản phẩm nào.
                    <a href="index.php" class="btn btn-info active" role="button">Mua tiếp</a>
                </div>
            <?php } ?>
        </div>
    </div>

</div>
<!-- /.container -->
<div class="container">
    <hr>
    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </footer>
</div>
<!-- /.container -->
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>