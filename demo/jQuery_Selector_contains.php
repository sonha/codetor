<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>contains demo</title>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<div>John Resig</div>
<div>George Martin</div>
<div>Malcom John Sinclair</div>
<div>J. Ohn</div>
 
<script>
$( "div:contains('John')" ).css( "text-decoration", "underline" );
</script>
 
</body>
</html>