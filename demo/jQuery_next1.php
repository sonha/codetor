<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>next demo</title>
  <style>
  span {
    color: blue;
    font-weight: bold;
  }
  button {
    width: 100px;
  }
  </style>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
<ul>
  <li>list item 1</li>
  <li>list item 2</li>
  <li id="third-item">list item 3</li>
  <span>baba</span>
  <li>list item 4</li>
  <li>list item 5</li>
</ul>
<script>
$( "li#third-item" ).next().css( "background-color", "red" );
</script>
 
</body>
</html>