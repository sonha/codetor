<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>attributeEndsWith demo</title>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<input name="newsletter">
<input name="milkman">
<input name="jobletter">
 
<script>
$( "input[name$='letter']" ).val( "a letter" );
</script>
 
</body>
</html>