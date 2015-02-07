
<?php
session_start();
?>
<?php
    $totalSanpham = 0;
    $tongSoTien = 0;
    if(isset($_SESSION['cart']) && $_SESSION['cart'] != null) {
        foreach($_SESSION['cart'] as $list) {
            $totalSanpham += $list['qty'];
            $tongSoTien   += $list['price'] * $list['qty'];
        }
    }
require_once 'listProduct.php';
?>
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
                <div class="well">
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-shopping-cart"></i>
                            <a href="viewcart.php"><?php echo $totalSanpham;?> sản phẩm - <?php echo number_format($tongSoTien);?></a>
                            <b class="caret"></b></a>
                    </div>
                </div>
                <?php require_once '_template_category_sidebar.php';?>
            </div>

            <div class="col-md-9">
                <?php require_once '_template_breadcrumb.php';?>
                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">
					
					<?php foreach($product as $listProduct) { ?>
						 <div class="col-sm-4 col-lg-4 col-md-4">
							<div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right"><?php echo number_format($listProduct['price']);?></h4>
                                <h4><a href="#"><?php echo $listProduct['name'];?></a>
                                </h4>
                                <p><?php echo $listProduct['description'];?></p>
                            </div>
                            <p style="padding-left: 90px;">
                                <a href='item.php'><button type="button" class="btn btn-success">View</button></a>
                                <a href='insertcart.php?id=<?php echo $listProduct['id'];?>'> <button type="button" class="btn btn-danger"><i class="icon-shopping-cart"></i> Mua ngay</button></a>
                            </p>
                            <div class="ratings">
                                <p class="pull-right">18 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
					<?php } ?>
                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">
        <!-- Footer -->
        <?php include_once '_template_footer.php';?>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>