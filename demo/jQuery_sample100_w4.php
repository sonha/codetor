<html>
<head>
<title>Trang giới thiệu</title>
</head>

<body>

<h1>CSS demo!</h1>
<div id="sonha">
<table id="test">
</table>
</div>
<script type="text/javascript" src="jquery-1.8.3.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$.ajax({
url : "http://api.flickr.com/services/feeds/photos_public.gne?tags=resig&tagmode=all&format=json&jsoncallback=?" ,
dataType : "json",
success: function(data){
$.each(data.items, function(i, data){
$("#test").append('<tr><td>Ảnh số '+i+'</td><td><img src='+data.media.m+'></td><td>Link ảnh '+data.media.m+'</td></tr>');
    if (i == 4) return false;    
})
}
});
});
</script>
</body>
</html>
