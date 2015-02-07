
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

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shopping Cart Demo</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<!--    http://fortawesome.github.io/Font-Awesome/3.2.1/examples/-->

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
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Cart Demo</a>
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
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-globe"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/backend/index/changeLanguage?lang=en"><img src="/skin/common/img/flg-uk.png" class="icon-flag" alt="UK"> English</a></li>
                            <li><a href="/backend/index/changeLanguage?lang=ja"><img src="/skin/common/img/flg-ja.png" class="icon-flag" alt="JA"> Japanese</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="viewcart.php"><i class="icon-shopping-cart icon-large">(<?php echo $totalSanpham;?>)</i>Cart</a></li>
                    <li><a href="#">Login</a></li>
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