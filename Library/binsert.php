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
$query="insert into books(bookno,bookname,subject,authorname)values('$bookno','$bookname','$subject','$authorname')";
$result=mysql_query($query,$connect);
if($result)
echo "inserted";
else
echo mysql_error();
mysql_close($connect);
?>