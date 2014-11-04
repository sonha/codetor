<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>attributeNotEqual demo</title>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<div>
  <input type="radio" name="newsletter" value="Hot Fuzz">
  <span>name is newsletter</span>
</div>
<div>
  <input type="radio" value="Cold Fusion">
  <span>no name</span>
</div>
<div>
  <input type="radio" name="accept" value="Evil Plans">
  <span>name is accept</span>
</div>
 
<script>
$( "input[name!='newsletter']" ).next().append( "<b>; not newsletter</b>" );
</script>
 
</body>
</html>