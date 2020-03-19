<?php
$connect=mysql_connect("localhost","root","");
if($connect)
echo "connected";
else
echo "not connected";
$uid=$_POST['userid'];
$question=$_POST['question'];
$ans=$_POST['answer'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$query="select uid,question,ans from registeration";
mysql_select_db('library',$connect);
$result=mysql_query($query,$connect);
if($result)
	echo "selected<br><br>";
else
	echo mysql_error();
$num_rows=mysql_num_rows($result);
$k=0;
for($i=0;$i<$num_rows;$i++)
{
	$row=mysql_fetch_array($result);
	for($j=0;$j<mysql_num_fields($result);$j++)
		//echo $row[$j]."  ";
	//echo "<br>";
	{
		if($uid==$row[0]&&$question==$row[1]&&$ans==$row[2])
		{
		$q="update registeration set pass='$pass' where uid='$uid'";
		$ret=mysql_query($q,$connect);
		echo "Successfully Updated";
		//echo $ret;
		$k=1;break;
	}
	if($k==1)
		break;
	}
}
if($k==0)
	echo "fail";
mysql_close($connect);
?>