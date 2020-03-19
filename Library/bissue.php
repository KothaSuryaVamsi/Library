<?php
$connect=mysql_connect("localhost","root","");
if($connect)
echo "";
else
echo "not connected";
$bookno=$_POST['bookno'];
$uid=$_POST['uid'];
$idate=$_POST['idate'];
$odate=$_POST['odate'];
mysql_select_db('library',$connect);
$query="update books set uid='$uid',idate='$idate',odate='$odate' where bookno='$bookno'";
$result=mysql_query($query,$connect);
if($result)
echo "one row is updated";
else
echo mysql_error();
mysql_close($connect);
?>