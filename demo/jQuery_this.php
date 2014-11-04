<script type="text/javascript" src="jquery-1.8.3.min.js"></script>
<html>
<head>
<title>Trang giới thiệu</title>
</head>

<body>

<h1>CSS demo!</h1>
<p>
    <a href="http://localhost/editcode/demo/">Link bài tập</a>
</p>
<ul id="vegetable-seeds">
  <li data-spacing="10cm" data-sowing-time="March to June" class="active">Carrots</li>
  <li data-spacing="30cm" data-sowing-time="February to March">Celery</li>
  <li data-spacing="3cm" data-sowing-time="March to September">Radishes</li>
</ul>
</body>
<script type="text/javascript">
$('#vegetable-seeds li').click(function(){

var index = $(this).parent();
console.log(index.html());
console.log($(this).text());
console.log($(this).data('sowing-time'));
console.log($(this).data('spacing'));
if($("#vegetable-seeds li").hasClass("active")) {
alert('active');
}
//   var sowing = $(this).data("sowing-time");
//   console.log(sowing);
alert('baba');
});
</script>
</html>
