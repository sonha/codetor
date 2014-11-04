<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>Nested Loop Multiplication Table</title>
</head>
 
<body>
<h2>Nested Loop Multiplication Table</h2>
 
<?php
//Generate an HTML table
echo "<table style='border-collapse: collapse; border: 1px solid black;background-color: #ffff00;'>";
   
//Generate table data showing the numbers 1-7 multiplied by each other, 
//starting with the rows. 
for ($row=1; $row<=10; $row++){
  echo "<tr>\n";
  //Generate each entry in the row to create the columns.
  for ($col=1; $col<=10; $col++){
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