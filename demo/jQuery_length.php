<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Tiêu đề</title>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
$(function(){
    var n = $('li').length;
    $('span').text(n);
});
</script>
</head>

<body>
<ul>
<li>Thành phần thứ 1</li>
<li>Thành phần thứ 2</li>
<li>Thành phần thứ 3</li>
<li>Thành phần thứ 4</li>
<li>Thành phần thứ 5</li>
</ul>
<p>Có tổng cộng <span></span> thành phần trong danh sách.</p>
</body>
</html>