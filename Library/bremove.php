<?php
if(!($connection=mysql_connect("localhost","root","")))
die("could not connect");
if(!(mysql_select_db("library",$connection)))
die("db is not connected");
$bookno=$_POST['bookno'];
$query="delete from books  where bookno=$bookno";
$res=mysql_query($query,$connection);
if($res)
echo "one row is deleted";
else
echo mysql_error();
?>