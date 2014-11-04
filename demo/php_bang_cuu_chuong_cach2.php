<table border=1>
<?php 
for($i=1; $i<=10; $i++){
echo '<tr>';
for($j=2; $j<=10; $j++){
echo '<td>';
echo $j.'x'.$i.' = '.$i*$j;
echo '</td>';
}
echo '</tr>';
}
?>
</table>