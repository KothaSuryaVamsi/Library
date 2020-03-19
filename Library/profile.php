<?php
$connect=mysql_connect("localhost","root","");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uid=$_POST['uid'];
//$date=$_POST['date'];
$mail=$_POST['mail'];
$phone=$_POST['phone'];
mysql_select_db('library',$connect);
$query="update registeration set fname='$fname',lname='$lname',mail='$mail',phone='$phone' where uid='$uid'";
$result=mysql_query($query,$connect);
if($result)
	echo "Successfully Updated";
else
	echo "not updated";
mysql_close($connect);
?>