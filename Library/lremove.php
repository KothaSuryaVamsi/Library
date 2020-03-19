<?php
if(!($connection=mysql_connect("localhost","root","")))
die("could not connect");
if(!(mysql_select_db("library",$connection)))
die("db is not connected");
$lid=$_POST['lid'];
echo $lid;
$query="delete from librarian  where lid=$lid";
$res=mysql_query($query,$connection);
if($res)
echo "one row is deleted";
else
echo mysql_error();
?>