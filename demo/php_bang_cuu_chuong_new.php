<html lang="en">
<head>
<title>Multiplication Table</title>
</head>
<body>
<h2>Nested Loop Multiplication Table</h2>
 <form action="" method="post">
     <input type="text" name="number"/>
     <input type="submit" name="submit" value="In"/>
 </form>
<?php

//Generate an HTML table
echo "<table style='border-collapse: collapse; border: 1px solid black;background-color: #ffff00;'>";
   
//Generate table data showing the numbers 1-7 multiplied by each other, 
//starting with the rows. 
for ($row=1; $row<=10; $row++){
  echo "<tr>\n";
  //Generate each entry in the row to create the columns.
  for ($col=1; $col<=8; $col++){
    //First, do the math.
    $x=$col * $row;
    //Then send the value to the table with the table data tags.   
    echo "<td style='width: 2em; text-align:center;border: 1px solid black;'>$x</td>\n";
  }
  echo "</tr>";
}
echo "</table>";
?>
 
</body>
</html>