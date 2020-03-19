<?php
$connect=mysql_connect("localhost","root","");
if($connect)
echo "";
else
echo "not connected";
$bookno=$_POST['bookno'];
$bookname=$_POST['bookname'];
$subject=$_POST['subject'];
$authorname=$_POST['authorname'];
mysql_select_db('library',$connect);
$query="update books set bookname='$bookname',subject='$subject',authorname='$authorname' where bookno='$bookno'";
$result=mysql_query($query,$connect);
if($result)
echo "one row is updated";
else
echo mysql_error();
mysql_close($connect);
?>