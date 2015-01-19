<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
    * {margin : 0px; padding : 0px;}
    .clear {clear : both;}
    li {list-style : none;}
    a {text-decoration : none;color: #fff;font-size: 16px;}
    .wrapper {width : 960px;height : 500px;background : #F8F8F8;margin : 0px auto;} 
    .main_menu {background : #00A69B;margin-top : 30px; }
    .main_menu>ul>li {float : left;padding : 11px 27px;position : relative;border-right : 1px dotted #ACACAC;}    
    .main_menu>ul>li:last-child {
        border-right : none;
    }
    .main_menu>ul>li>ul {display : none;position : absolute;background : #00A69B;top : 40px;left : 0px;width: 198px;}    
    .main_menu ul li:hover ul {display : block;}
    .main_menu ul li:hover {
    background : #5F5C5C;
    transition : all 0.25s;    
    }
    .main_menu>ul>li>ul>li {padding : 5px 10px;}
    .main_menu>ul>li>ul>li {
        border-bottom : 1px dotted #ACACAC;
    }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="main_menu">
            <ul>
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Giới thiệu</a></li>
                <li><a href="#">Sản phẩm</a>
                    <ul>
                        <li><a href="">Menu con 1</a></li>
                        <li><a href="">Menu con 2</a></li>
                        <li><a href="">Menu con 3</a></li>
                        <li><a href="">Menu con 4</a></li>
                        <li><a href="">Menu con 5</a></li>
                    </ul>
                </li>
                <li><a href="#">Tin tức</a></li>
                <li><a href="#">Giỏ hàng</a></li>
                <li><a href="#">Liên hệ</a></li>
                <li><a href="#">Tin tức</a></li>
                <li><a href="#">Giỏ hàng</a></li>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
</body>
</html>
