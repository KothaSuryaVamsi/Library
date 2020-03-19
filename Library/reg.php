<?php
$connect=mysql_connect("localhost","root","");
if($connect)
echo "connected";
else
echo "not connected";
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uid=$_POST['uid'];
$pass=$_POST['pass'];
$date=$_POST['date'];
$mail=$_POST['mail'];
$phone=$_POST['phone'];
$question=$_POST['question'];
$ans=$_POST['ans'];
mysql_select_db('library',$connect);
$query="insert into registeration(fname,lname,uid,pass,date,mail,phone,question,ans) values('$fname','$lname','$uid','$pass','$date','$mail','$phone','$question','$ans')";
$result=mysql_query($query,$connect);
if($result)
{
	echo "<script type='text/javascript'>alert ('Successfully Registered');</script>";
	//echo "\none row inserted";
}
else
echo mysql_error();
mysql_close($connect);
?>