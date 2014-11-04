<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>attributeStartsWith demo</title>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<input name="newsletter">
<input name="milkman">
<input name="newsboy">
 
<script>
$( "input[name^='news']" ).val( "news here!" );
</script>
 
</body>
</html>