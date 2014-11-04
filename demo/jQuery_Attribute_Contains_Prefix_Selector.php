<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>attributeContainsPrefix demo</title>
  <style>
  a {
    display: inline-block;
  }
  </style>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<a href="example.html" hreflang="en">Some text</a>
<a href="example.html" hreflang="en-UK">Some other text</a>
<a href="example.html" hreflang="english">will not be outlined</a>
 
<script>
$( "a[hreflang|='en']" ).css( "border", "3px dotted green" );
</script>
 
</body>
</html>