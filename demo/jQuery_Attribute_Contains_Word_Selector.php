<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>attributeContainsWord demo</title>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<input name="man-news">
<input name="milk man">
<input name="letterman2">
<input name="newmilk">
 
<script>
$( "input[name~='man']" ).val( "mr. man is in it!" );
</script>
 
</body>
</html>