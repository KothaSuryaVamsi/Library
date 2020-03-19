<?php
if(!($connection=mysql_connect("localhost","root","")))
die("could not connect");
function showerror()
{
die("error:".mysql_error().":".mysql_error());
}
if(!(mysql_select_db("library",$connection)))
showerror();
$a=$_POST['sub'];
$b=$_POST['name2'];
$c=$_POST['author'];
$query="insert into reqbooks (subject,book_name,author_name) values ('$a','$b','$c')";
$result=mysql_query($query,$connection);
if($result){
echo "1 request came for subject ".$a."of name ".$b."written by".$c;
}
else
{
echo mysql_error();
}
?>