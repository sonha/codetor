<?php
session_start();
?>
<?php
$total = 0;
if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) {
    foreach ($_SESSION['cart'] as $list) {
        $total += $list['qty'];
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
            <?php require_once '_template_category_sidebar.php';?>
        </div>
        <div class="col-md-9">
            <?php require_once '_template_breadcrumb.php';?>
            <div class="thumbnail">
                <img class="img-responsive" src="http://placehold.it/800x300" alt="">

                <div class="caption-full">
                    <h4 class="pull-right">$24.99</h4>
                    <h4><a href="#">Product Name</a></h4>
                    Mô tả sản phẩm ở đây
                </div>
                <div class="ratings">
                    <p class="pull-right">3 reviews</p>
                    <p>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        4.0 stars
                    </p>
                </div>
            </div>

            <div class="well">
                <div class="text-right">
                    <a class="btn btn-success">Leave a Review</a>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        Anonymous
                        <span class="pull-right">10 days ago</span>

                        <p>This product was great in terms of quality. I would definitely buy another!</p>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-12">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        Anonymous
                        <span class="pull-right">15 days ago</span>

                        <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- /.container -->
<div class="container">
    <hr>
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