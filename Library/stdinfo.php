<?php
if(!($conn=mysql_connect("localhost","root","")))
die("could npt connect");
if(!($db=mysql_select_db("avinash",$conn)))
die("could not connect");
$x=$_POST['name'];
$y=$_POST['fathername'];
$q=$_POST['10thclassmarks'];
$z=$_POST['secondaryeducation'];
$a=$_POST['presentcollege'];
$b=$_POST['jntuno'];
$d=$_POST['cgpa'];
$c=$_POST['gender'];

$sql="insert into stdinfo(name,fathername,10thclassmarks,secondaryeducation,presentcollege,jntuno,cgpa,gender) values('$x','$y','$q','$z','$a','$b','$d','$c')";
$res=mysql_query($sql,$conn);
if($res)
echo "one row is inserted";
else
echo mysql_error();
?>