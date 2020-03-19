<?php
$connection=mysql_connect("localhost","root","");
mysql_select_db("library",$connection);
if(isset($_POST['search'])){
	$a=$_POST['box'];
}
$n=1;
for($i=1;$i<=10;$i++){
if(isset($_POST[$i]))
{
	//echo "hello";
	$a=$_POST['name'];
	$n=$i;
}
}
$query1="select authorname,bookname,subject from books where bookname like '%$a%' or authorname like '%$a%' or bookname like '%$a%'";
$result1=mysql_query($query1,$connection);
$num=mysql_num_rows($result1);
$e=0;
echo "<table border=2><th>Author Name</th><th>Book Name</th><th>Subject</th>";
$arr=array(array());
for($i=0;$i<$num;$i++)
{
$row=mysql_fetch_array($result1);
$arr[$i][0]=$row[0];
$arr[$i][1]=$row[1];
$arr[$i][2]=$row[2];
}
for($i=($n-1)*5;$i<($n-1)*5+5 && $i<$num;$i++)
{
echo "<tr><td>".$arr[$i][0]."</td><td>".$arr[$i][1]."</td><td>".$arr[$i][2]."</td></tr>";
}
echo "</table>";
$b=$num/5+1;
echo "<form action='#' method='post'><table cellspacing=5><tr>";
echo "<input type='hidden' name='name' value='$a'><input type='hidden' name='num' value='$num'>";
for($i=1;$i<=$b;$i++){
	echo "<td><input type='submit' value='$i' name='$i'></td>";
}
echo "</tr></form>";
?>