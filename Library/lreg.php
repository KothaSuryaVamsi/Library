<?php
if(!($connection=mysql_connect("localhost","root","")))
die("could not connect");
if(!(mysql_select_db("library",$connection)))
die("db is not connected");
$lfname=$_POST['lfname'];
$llname=$_POST['llname'];
$lid=$_POST['lid'];
$lpass=$_POST['lpass'];
$ldate=$_POST['ldate'];
$lphone=$_POST['lphone'];
$lmail=$_POST['lmail'];
$query="insert into librarian(lfname,llname,lid,lpass,ldate,lmail,lphone) values('$lfname','$llname','$lid','$lpass','$ldate','$lmail','$lphone')";
$res=mysql_query($query,$connection);
if($res)
echo "one row is inserted";
else
echo mysql_error();
?>