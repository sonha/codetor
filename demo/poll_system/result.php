<?php
$conn=mysql_connect("localhost","root","") or die("can not connect database");
mysql_select_db("poll_exam",$conn);

if(isset($_GET['questionid']))
{
	$qid=$_GET['questionid'];
	$sql="select * from question where qid='".$qid."'";
	$query=mysql_query($sql);
	$row=mysql_fetch_array($query);
	echo "<h2>$row[qtitle]</h2>";
	$sql2="select qid, SUM(acount) as total from answer group by qid having qid='".$qid."'";
	$query2=mysql_query($sql2);
	$row2=mysql_fetch_array($query2);
	$total=$row2['total'];
	$sql3="select * from answer where qid='".$qid."' order by aid";
	$query3=mysql_query($sql3);
	if(mysql_num_rows($query3) > 0)
	{
		while($row3=mysql_fetch_array($query3))
		{
			$percent=round(($row3['acount']/$total)*100,2);
			echo "<h4 style=\"color:red; font:12px verdana; \">$row3[atitle] : $row3[acount]  ($percent %)</h4>";
		}
	}
}
?>