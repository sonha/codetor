<?php
/**
 * Created by PhpStorm.
 * User: Ha Anh Son
 * Date: 07/02/2015
 * Time: 5:43 CH
 */
?>
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
                <li><a href="viewcart.php"><i class="icon-shopping-cart icon-large">(<?php echo isset($totalSanpham) ? $totalSanpham : '';?>)</i>Cart</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>