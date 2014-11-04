<?php
$multiCity=array(
    array('City', 'Country', 'Continent'),
    array('Tokyo', 'Japan', 'Asia'),
    array('Mexico City','Mexico', 'North America'),
    array('New York City', 'USA', 'North America'),
    array('Mumbai', 'India', 'Asia'),
    array('Seoul', 'Korea', 'Asia'),
    array('Shanghai', 'China', 'Asia'),
    array('Lagos', 'Nigeria', 'Africa'),
    array('Buenos Aires', 'Argentina', 'South America'),
    array('Cairo', 'Egypt', 'Africa'),
    array('London', 'UK','Europe')
);
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>Multi-dimensional Array</title>
<style type="text/css">
td, th {width: 8em; border: 1px solid black; padding-left: 4px;}
th {text-align:center;}
table {border-collapse: collapse; border: 1px solid black;}
</style>
</head>
 
<body>
<h2>City Table<br /></h2>
 
<table>
<thead>
<tr>
<th>
<?php
echo $multiCity[0][0] ."</th>\n<th>";
echo $multiCity[0][1] ."</th>\n<th>";
echo $multiCity[0][2] ."</th>\n";
?>
</tr>
</thead>
 
<?php
//Find the number of rows in the array. Using this variable in the for loop
//instead of the exact number gives you the option of adding to the array 
//at a later date without changing the for loop. 
$num = count($multiCity); 
//For loops begin with "0" to iterate over an entire array. In this case, 
//you need to begin with the second item in the array and must start with "1".
for ($row=1; $row<$num; $row++){
  echo "<tr>\n";
  foreach ($multiCity[$row] as $value){
    echo "<td>$value</td>\n";
    }
   echo "</tr>\n";  
}
?>
 
</table>
 
</body>
</html>