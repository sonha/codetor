<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="jquery-1.8.3.min.js"></script>
    <title>Codeto Editor v1.0</title>
</head>
<body>
<div id="demo">
Test time 
</div>
</body>
<script type="text/javascript">
var time = setInterval(function(){CodeTime()}, 1000);
function CodeTime() {
    var date = new Date();
    var time = date.toLocaleTimeString();
    document.getElementById("demo").innerHTML = time;
}
</script>
</html>
