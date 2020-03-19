<?php
$connection=mysql_connect("localhost","root","");
mysql_select_db("library",$connection);
$a="";
if(isset($_POST['user'])){
	$a=$_GET['message'];
	$n==$_GET['num'];
	echo $n;
}
$query1="select authorname,bookname,subject from books where bookname like '%$a%' or authorname like '%$a%' or bookname like '%$a%'";
$result1=mysql_query($query1,$connection);
$num=mysql_num_rows($result1);
$e=0;
echo "<table border=2><th>Author Name</th><th>Book Name</th><th>Subject</th>";
for($i=0;$i<5;$i++)
{
$row=mysql_fetch_array($result1);
$b=$row[0];
$c=$row[1];
$d=$row[2];
echo "<tr><td>$b</td><td>$c</td><td>$d</td></tr>";
}
echo "</table>";
$b=$num/5+1;
echo "<form action='search1.php?message=$a'><table cellspacing=5><tr>";
for($i=1;$i<=$b;$i++)
	echo "<td><input type='submit' value='$i' name='user'></td>";
echo "</tr></form>";
?>