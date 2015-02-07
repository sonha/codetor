
<?php
session_start();
?>
<?php
    require_once '_template_session.php';
    require_once 'listProduct.php';
    //Start : Lay cac san pham theo danh muc
    $catId = $_GET['catid'];
    $listProductByCat  = array();
    foreach($product as $item) {
        if($item['catid'] == $catId) {
            $listProductByCat[] = $item;
        }
    }
    //End : Lay cac san pham theo danh muc
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
                <div class="list-group">
                    <a href="#" class="list-group-item active">Danh mục sản phẩm</a>
                    <?php foreach($allCategory as $category) : ?>
                        <a href="category.php?catid=<?php echo $category['id'];?>" class="list-group-item"><i class="icon-laptop"></i> <?php echo $category['name'];?></a>
                    <?php endforeach;?>
                </div>
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
					<?php if(!empty($listProductByCat)) :?>
					<?php foreach($listProductByCat as $listProduct) : ?>
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
					<?php endforeach; ?>
                    <?php else: ?>
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Thông báo!</strong> Không có sản phẩm nào thuộc danh mục này.
                            <a href="index.php" class="btn btn-info active" role="button">Quay lại</a>
                        </div>
                    <?php endif; ?>
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